<?php
require_once __DIR__ . '/includes/article-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
require_once __DIR__ . '/includes/image-helpers.php';
include 'header.php';

$kbBanner = kb_get_banner_config('articles');
include __DIR__ . '/includes/kb-premium-banner.php';

$prefilterCategory = isset($_GET['category']) ? trim($_GET['category']) : '';
?>

<section class="article-reference-section pad-tb">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-11">
                <h2 class="article-title">SanguineIT Articles</h2>
                <p class="article-page-intro lh">Long-form articles for engineering leaders and product owners—covering mobile app strategy, custom web development, outsourcing models, and operational excellence for organizations worldwide.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <aside class="article-filter-panel">
                    <div class="article-filter-head">View Articles by Category</div>
                    <div class="article-filter-body">
                        <label><input type="checkbox" class="article-cat" value="cms"<?php echo $prefilterCategory === 'cms' ? ' checked' : ''; ?>> CMS</label>
                        <label><input type="checkbox" class="article-cat" value="technology"<?php echo $prefilterCategory === 'technology' ? ' checked' : ''; ?>> Technology</label>
                        <label><input type="checkbox" class="article-cat" value="hiring"<?php echo $prefilterCategory === 'hiring' ? ' checked' : ''; ?>> Dedicated Hiring</label>
                        <label><input type="checkbox" class="article-cat" value="mobile"<?php echo $prefilterCategory === 'mobile' ? ' checked' : ''; ?>> Mobile Apps</label>
                        <label><input type="checkbox" class="article-cat" value="web"<?php echo $prefilterCategory === 'web' ? ' checked' : ''; ?>> Web Development</label>
                        <label><input type="checkbox" class="article-cat" value="outsourcing"<?php echo $prefilterCategory === 'outsourcing' ? ' checked' : ''; ?>> Outsourcing</label>
                        <label><input type="checkbox" class="article-cat" value="sharepoint"<?php echo $prefilterCategory === 'sharepoint' ? ' checked' : ''; ?>> SharePoint</label>
                    </div>
                    <div class="article-filter-foot"></div>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="article-top-search">
                    <input type="text" id="articleSearchInput" placeholder="Search in all articles">
                    <button type="button" id="articleSearchBtn">Search</button>
                </div>

                <div class="row article-grid" id="articleGrid">
                    <?php foreach ($articlePostsListingOrder as $articleSlug) :
                        $articleItem = get_article_post($articleSlug);
                        if (!$articleItem) {
                            continue;
                        }
                        $articleTitle = $articleItem['title'];
                        $articleSummary = $articleItem['list_summary'];
                        $articleUrl = article_post_url($articleSlug);
                        ?>
                    <div class="col-lg-4 col-md-6 mb20 article-grid-col">
                        <article class="article-card" data-category="<?php echo htmlspecialchars($articleItem['category_slug'], ENT_QUOTES, 'UTF-8'); ?>" data-title="<?php echo htmlspecialchars($articleTitle, ENT_QUOTES, 'UTF-8'); ?>" data-content="<?php echo htmlspecialchars($articleSummary, ENT_QUOTES, 'UTF-8'); ?>">
                            <a href="<?php echo $articleUrl; ?>" class="article-card-link">
                                <?php sit_responsive_image($articleItem['featured_image'], $articleTitle); ?>
                                <h4><?php echo htmlspecialchars($articleTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                                <p class="article-card-date"><?php echo htmlspecialchars($articleItem['date'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </a>
                        </article>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .article-reference-section {
        background: #f3f3f3;
    }

    .article-title {
        margin-bottom: 8px;
        font-size: 34px;
    }

    .article-page-intro {
        color: #4a5568;
        margin-bottom: 18px;
        max-width: 820px;
    }

    .article-filter-panel {
        border: 1px solid #d8e1ef;
        background: #fff;
    }

    .article-filter-head {
        background: #1e3f66;
        color: #fff;
        padding: 10px 12px;
        font-weight: 700;
    }

    .article-filter-body {
        padding: 12px;
        display: flex;
        flex-direction: column;
        gap: 7px;
        font-size: 14px;
    }

    .article-filter-body label {
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .article-filter-foot {
        height: 28px;
        background: #1e3f66;
    }

    .article-top-search {
        display: flex;
        margin-bottom: 12px;
    }

    .article-top-search input {
        flex: 1;
        height: 42px;
        border: 1px solid #d8e1ef;
        border-right: 0;
        padding: 0 12px;
        background: #fff;
    }

    .article-top-search button {
        width: 110px;
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        cursor: pointer;
    }

    .article-card {
        background: #fff;
        border: 1px solid #e2e2e2;
        height: 100%;
        transition: box-shadow 0.2s ease, transform 0.2s ease;
    }

    .article-card:hover {
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        transform: translateY(-2px);
    }

    .article-card-link {
        display: block;
        padding: 8px;
        color: inherit;
        text-decoration: none;
    }

    .article-card-link:hover {
        color: inherit;
        text-decoration: none;
    }

    .article-card img {
        width: 100%;
        height: 190px;
        object-fit: cover;
        object-position: center;
        display: block;
        margin-bottom: 10px;
        background: #e8eef5;
    }

    .article-card h4 {
        font-size: 17px;
        line-height: 1.35;
        margin: 0 0 6px;
        color: #111;
    }

    .article-card-date {
        margin: 0;
        font-size: 13px;
        color: #666;
        font-weight: 600;
    }

    @media (max-width: 767px) {
        .article-top-search {
            flex-direction: column;
            gap: 8px;
        }

        .article-top-search input {
            border-right: 1px solid #d8e1ef;
        }

        .article-top-search button {
            width: 100%;
            height: 40px;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var searchInput = document.getElementById("articleSearchInput");
        var searchBtn = document.getElementById("articleSearchBtn");
        var checks = Array.prototype.slice.call(document.querySelectorAll(".article-cat"));
        var cols = Array.prototype.slice.call(document.querySelectorAll("#articleGrid .article-grid-col"));

        function getCard(col) {
            return col ? col.querySelector(".article-card") : null;
        }

        function passesCategory(card) {
            var selected = checks.filter(function (c) { return c.checked; }).map(function (c) { return c.value; });
            if (!selected.length) return true;
            return selected.indexOf(card.getAttribute("data-category")) >= 0;
        }

        function passesText(card, q) {
            var txt = ((card.getAttribute("data-title") || "") + " " + (card.getAttribute("data-content") || "")).toLowerCase();
            return txt.indexOf(q) >= 0;
        }

        function applyFilters() {
            var q = (searchInput.value || "").trim().toLowerCase();
            cols.forEach(function (col) {
                var card = getCard(col);
                if (!card) return;
                var show = passesCategory(card) && passesText(card, q);
                col.style.display = show ? "" : "none";
            });
        }

        if (searchInput) searchInput.addEventListener("input", applyFilters);
        if (searchBtn) searchBtn.addEventListener("click", applyFilters);
        checks.forEach(function (c) { c.addEventListener("change", applyFilters); });

        if (<?php echo $prefilterCategory !== '' ? 'true' : 'false'; ?>) {
            applyFilters();
        }
    });
</script>

<?php include 'footer.php'; ?>
