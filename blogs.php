<?php
require_once __DIR__ . '/includes/blog-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('blogs');
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="blog-reference-section pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <h2 class="blog-main-title">Latest from SanguineIT</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <article class="blog-feature-panel">
                    <div id="blogHeroSlider" class="carousel slide" data-ride="carousel" data-interval="4000">
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
                                ?>
                            <div class="carousel-item<?php echo $ci === 0 ? ' active' : ''; ?>">
                                <a href="<?php echo blog_post_url($cSlug); ?>">
                                    <img src="<?php echo htmlspecialchars($cPost['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($cPost['title'], ENT_QUOTES, 'UTF-8'); ?>">
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

                <div id="blogListWrap">
                    <?php foreach ($blogPostsListingOrder as $listSlug) :
                        $listPost = get_blog_post($listSlug);
                        if (!$listPost) {
                            continue;
                        }
                        $listTitle = $listPost['title'];
                        $listExcerpt = isset($listPost['list_excerpt']) ? $listPost['list_excerpt'] : $listPost['excerpt'];
                        ?>
                    <article class="blog-list-card" data-title="<?php echo htmlspecialchars($listTitle, ENT_QUOTES, 'UTF-8'); ?>" data-content="<?php echo htmlspecialchars($listExcerpt, ENT_QUOTES, 'UTF-8'); ?>">
                        <img src="<?php echo htmlspecialchars($listPost['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($listTitle, ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="blog-list-card-content">
                            <h3><?php echo htmlspecialchars($listTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="blog-meta"><?php echo htmlspecialchars($listPost['date'], ENT_QUOTES, 'UTF-8'); ?> &nbsp; | &nbsp; <?php echo get_blog_comments_label($listPost['comments']); ?></p>
                            <p class="lh"><?php echo htmlspecialchars($listExcerpt, ENT_QUOTES, 'UTF-8'); ?></p>
                            <a href="<?php echo blog_post_url($listSlug); ?>" class="blog-read-btn">Read More</a>
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

<style>
    .blog-reference-section {
        background: #f3f3f3;
    }

    .blog-main-title {
        margin-bottom: 16px;
    }

    .blog-feature-panel {
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 10px;
        margin-bottom: 14px;
    }

    .blog-feature-panel img {
        width: 100%;
        height: 360px;
        object-fit: cover;
        display: block;
    }

    #blogHeroSlider .carousel-indicators li {
        width: 9px;
        height: 9px;
        border-radius: 50%;
    }

    #blogHeroSlider .carousel-control-prev-icon,
    #blogHeroSlider .carousel-control-next-icon {
        background-size: 65% 65%;
        width: 34px;
        height: 34px;
        background-color: rgba(0, 0, 0, 0.35);
        border-radius: 50%;
    }

    .blog-list-card {
        display: flex;
        gap: 16px;
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 10px;
        margin-bottom: 14px;
    }

    .blog-list-card img {
        width: 230px;
        min-width: 230px;
        height: 155px;
        object-fit: cover;
        object-position: center;
        display: block;
        background: #e8e8e8;
    }

    .blog-feature-panel img {
        max-height: 400px;
        object-fit: cover;
        object-position: center;
    }

    .blog-list-card-content h3 {
        font-size: 24px;
        line-height: 1.3;
        margin-bottom: 6px;
    }

    .blog-meta {
        color: #777;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .blog-list-card-content .lh {
        margin-bottom: 10px;
    }

    .blog-read-btn {
        display: inline-block;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        font-size: 14px;
        padding: 8px 16px;
        border-radius: 2px;
    }

    .blog-sidebar-box {
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 14px;
        margin-bottom: 14px;
    }

    .blog-sidebar-box h4 {
        font-size: 30px;
        margin-bottom: 10px;
        border-bottom: 1px solid #e6e6e6;
        padding-bottom: 10px;
    }

    .blog-sidebar-search {
        display: flex;
        gap: 0;
    }

    .blog-sidebar-search input {
        flex: 1;
        height: 40px;
        border: 1px solid #ddd;
        padding: 0 10px;
    }

    .blog-sidebar-search button {
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        width: 110px;
        cursor: pointer;
    }

    .blog-sidebar-cta {
        display: inline-block;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        padding: 10px 16px;
        border-radius: 2px;
    }

    .blog-category-list,
    .blog-recent-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .blog-category-list li,
    .blog-recent-list li {
        padding-left: 14px;
        position: relative;
        margin-bottom: 8px;
        line-height: 1.45;
    }

    .blog-category-list li::before,
    .blog-recent-list li::before {
        content: "";
        width: 6px;
        height: 6px;
        background: #dc2429;
        position: absolute;
        left: 0;
        top: 9px;
    }

    .blog-category-list a,
    .blog-recent-list a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
    }

    .blog-category-list a:hover,
    .blog-recent-list a:hover {
        color: #dc2429;
    }

    .blog-month-select {
        width: 100%;
        height: 42px;
        border: 1px solid #ddd;
        padding: 0 12px;
        color: #333;
        background: #fff;
        font-size: 14px;
        cursor: pointer;
    }

    @media (max-width: 991px) {
        .blog-feature-panel img {
            height: 280px;
        }

        .blog-list-card {
            flex-direction: column;
        }

        .blog-list-card img {
            width: 100%;
            min-width: 100%;
            height: 220px;
        }
    }
</style>

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
