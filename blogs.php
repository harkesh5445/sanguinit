<?php
require_once __DIR__ . '/includes/blog-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';
$page_data = [
    'title' => 'Blog | Digital Engineering Insights | SanguineIT',
    'description' => 'Read SanguineIT blog posts on ecommerce, CMS, cloud, security, and enterprise web development — practical guides for technical leaders.',
    'canonical' => sit_base_url() . '/blogs.php',
];
include 'header.php';

$kbBanner = kb_get_banner_config('blogs');
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/blog-editorial.css">

<section class="blog-reference-section pad-tb">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-11">
                <h2 class="blog-main-title">Latest from SanguineIT</h2>
                <p class="blog-page-lead">Original research and practitioner guides on commerce, cloud, CMS, and enterprise engineering—written for global technology leaders who need actionable insight, not recycled advice.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <article class="blog-editorial-hero">
                    <div id="blogHeroSlider" class="carousel slide" data-ride="carousel" data-interval="5500">
                        <ol class="carousel-indicators">
                            <li data-target="#blogHeroSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#blogHeroSlider" data-slide-to="1"></li>
                            <li data-target="#blogHeroSlider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $carouselSlugs = array_slice($blogPostsListingOrder, 0, 3);
                            foreach ($carouselSlugs as $ci => $cSlug) :
                                $cPost = get_blog_post($cSlug);
                                if (!$cPost) {
                                    continue;
                                }
                                $cExcerpt = isset($cPost['list_excerpt']) ? $cPost['list_excerpt'] : $cPost['excerpt'];
                                $cImage = get_blog_carousel_image($cSlug);
                                ?>
                            <div class="carousel-item<?php echo $ci === 0 ? ' active' : ''; ?>">
                                <a href="<?php echo blog_post_url($cSlug); ?>" class="blog-editorial-slide">
                                    <?php sit_responsive_image($cImage, $cPost['title'], ['lazy' => $ci !== 0, 'priority' => $ci === 0 ? 'high' : 'auto']); ?>
                                    <span class="blog-editorial-slide__shade" aria-hidden="true"></span>
                                    <div class="blog-editorial-slide__body">
                                        <span class="blog-editorial-slide__tag"><?php echo htmlspecialchars($cPost['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                                        <h3 class="blog-editorial-slide__title"><?php echo htmlspecialchars($cPost['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                        <p class="blog-editorial-slide__excerpt"><?php echo htmlspecialchars($cExcerpt, ENT_QUOTES, 'UTF-8'); ?></p>
                                        <span class="blog-editorial-slide__cta">Read article <i class="fas fa-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#blogHeroSlider" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#blogHeroSlider" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </article>

                <div id="blogListWrap" class="blog-editorial-list">
                    <?php foreach ($blogPostsListingOrder as $listSlug) :
                        $listPost = get_blog_post($listSlug);
                        if (!$listPost) {
                            continue;
                        }
                        $listTitle = $listPost['title'];
                        $listExcerpt = isset($listPost['list_excerpt']) ? $listPost['list_excerpt'] : $listPost['excerpt'];
                        ?>
                    <article class="blog-editorial-card blog-list-card" data-title="<?php echo htmlspecialchars($listTitle, ENT_QUOTES, 'UTF-8'); ?>" data-content="<?php echo htmlspecialchars($listExcerpt, ENT_QUOTES, 'UTF-8'); ?>">
                        <a href="<?php echo blog_post_url($listSlug); ?>" class="blog-editorial-card__media">
                            <?php sit_responsive_image($listPost['featured_image'], $listTitle); ?>
                            <span class="blog-editorial-card__category"><?php echo htmlspecialchars($listPost['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </a>
                        <div class="blog-editorial-card__body blog-list-card-content">
                            <h3><?php echo htmlspecialchars($listTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="blog-editorial-card__meta blog-meta"><?php echo htmlspecialchars($listPost['date'], ENT_QUOTES, 'UTF-8'); ?> &nbsp;·&nbsp; <?php echo get_blog_comments_label($listPost['comments']); ?></p>
                            <p class="blog-editorial-card__excerpt lh"><?php echo htmlspecialchars($listExcerpt, ENT_QUOTES, 'UTF-8'); ?></p>
                            <a href="<?php echo blog_post_url($listSlug); ?>" class="blog-read-btn">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div id="blogSidebarSearchWrap">
                <?php include __DIR__ . '/includes/blog-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function () {
        var searchWrap = document.getElementById("blogSidebarSearchWrap");
        var searchInput = searchWrap ? searchWrap.querySelector('input[type="search"], input[type="text"]') : null;
        var cards = Array.prototype.slice.call(document.querySelectorAll("#blogListWrap .blog-list-card"));

        function applySearch() {
            var q = (searchInput.value || "").trim().toLowerCase();
            cards.forEach(function (card) {
                var txt = ((card.getAttribute("data-title") || "") + " " + (card.getAttribute("data-content") || "") + " " + card.textContent).toLowerCase();
                var match = !q || txt.indexOf(q) >= 0;
                card.style.display = match ? "" : "none";
            });
        }

        var searchForm = searchWrap ? searchWrap.querySelector("form") : null;
        if (searchForm) {
            searchForm.addEventListener("submit", function (e) {
                e.preventDefault();
                applySearch();
            });
        }
        if (searchInput) {
            searchInput.addEventListener("input", applySearch);
        }
    })();
</script>

<?php include "footer.php"; ?>
