<?php
require_once __DIR__ . '/includes/news-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
require_once __DIR__ . '/includes/image-helpers.php';
include 'header.php';

$kbBanner = kb_get_banner_config('news-events');
$kbBanner['featured_link'] = news_post_url('adobe-indesign-security-update-apsb25-106');
include __DIR__ . '/includes/kb-premium-banner.php';

$prefilterCategory = isset($_GET['category']) ? trim($_GET['category']) : '';
?>

<section class="news-reference-section pad-tb">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-11">
                <h2 class="news-page-title">Press Releases &amp; Company News</h2>
                <p class="news-page-intro lh">Press releases, security advisories, and company milestones from SanguineIT—keeping global clients and partners informed on platform updates and delivery achievements.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <aside class="news-filter-panel">
                    <div class="news-filter-head">Filter by Category</div>
                    <div class="news-filter-body" id="newsFilterBox">
                        <label><input type="checkbox" class="news-cat" value="award"<?php echo $prefilterCategory === 'award' ? ' checked' : ''; ?>> Award News</label>
                        <label><input type="checkbox" class="news-cat" value="infrastructure"<?php echo $prefilterCategory === 'infrastructure' ? ' checked' : ''; ?>> Infrastructure News</label>
                        <label><input type="checkbox" class="news-cat" value="partnership"<?php echo $prefilterCategory === 'partnership' ? ' checked' : ''; ?>> Partnership News</label>
                        <label><input type="checkbox" class="news-cat" value="project"<?php echo $prefilterCategory === 'project' ? ' checked' : ''; ?>> Project Launched News</label>
                        <label><input type="checkbox" class="news-cat" value="technology"<?php echo $prefilterCategory === 'technology' ? ' checked' : ''; ?>> Technology News</label>
                    </div>
                    <div class="news-filter-foot"></div>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="news-search-row">
                    <input type="text" id="newsSearchInput" placeholder="Search all press releases">
                    <button type="button" id="newsSearchBtn">Search</button>
                </div>

                <div id="newsListWrap">
                    <?php foreach ($newsPostsListingOrder as $newsSlug) :
                        $newsItem = get_news_post($newsSlug);
                        if (!$newsItem) {
                            continue;
                        }
                        $newsTitle = $newsItem['title'];
                        $newsSummary = $newsItem['list_summary'];
                        ?>
                    <article class="news-item" data-category="<?php echo htmlspecialchars($newsItem['category_slug'], ENT_QUOTES, 'UTF-8'); ?>" data-title="<?php echo htmlspecialchars($newsTitle, ENT_QUOTES, 'UTF-8'); ?>" data-content="<?php echo htmlspecialchars($newsSummary, ENT_QUOTES, 'UTF-8'); ?>">
                        <?php sit_responsive_image($newsItem['featured_image'], $newsTitle); ?>
                        <div class="news-item-content">
                            <h4><?php echo htmlspecialchars($newsTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                            <p class="news-date"><?php echo htmlspecialchars($newsItem['date'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="news-summary lh d-none d-md-block"><?php echo htmlspecialchars($newsSummary, ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                        <a href="<?php echo news_post_url($newsSlug); ?>" class="news-read-btn">Read More</a>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .news-reference-section {
        background: #f5f7fb;
        padding-top: 55px;
    }

    .news-page-title {
        font-size: 30px;
        margin-bottom: 8px;
    }

    .news-page-intro {
        color: #4a5568;
        margin-bottom: 18px;
        max-width: 820px;
    }

    .news-filter-panel {
        border: 1px solid #d8e1ef;
        background: #fff;
    }

    .news-filter-head {
        background: #1e3f66;
        color: #fff;
        padding: 10px 12px;
        font-weight: 700;
    }

    .news-filter-body {
        padding: 12px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        font-size: 14px;
    }

    .news-filter-body label {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .news-filter-foot {
        height: 24px;
        background: #1e3f66;
    }

    .news-search-row {
        display: flex;
        margin-bottom: 12px;
    }

    .news-search-row input {
        flex: 1;
        height: 44px;
        border: 1px solid #d8e1ef;
        border-right: 0;
        padding: 0 12px;
        background: #fff;
    }

    .news-search-row button {
        width: 120px;
        border: 0;
        background: #e31f2b;
        color: #fff;
        font-weight: 700;
        cursor: pointer;
    }

    .news-item {
        display: flex;
        gap: 16px;
        align-items: center;
        background: #fff;
        border: 1px solid #d8e1ef;
        padding: 10px;
        margin-bottom: 10px;
    }

    .news-item img {
        width: 200px;
        min-width: 200px;
        height: 110px;
        object-fit: cover;
        object-position: center;
        display: block;
        background: #e8eef5;
    }

    .news-item-content {
        flex: 1;
    }

    .news-item-content h4 {
        font-size: 22px;
        margin-bottom: 6px;
        line-height: 1.3;
    }

    .news-date {
        margin: 0 0 6px;
        color: #111;
        font-size: 14px;
        font-weight: 600;
    }

    .news-summary {
        margin: 0;
        font-size: 14px;
        color: #4a5568;
        line-height: 1.5;
    }

    .news-read-btn {
        min-width: 92px;
        text-align: center;
        background: #24496f;
        color: #fff;
        padding: 8px 10px;
        border-radius: 2px;
        font-size: 13px;
        font-weight: 700;
    }

    .news-read-btn:hover {
        color: #fff;
        background: #1a3654;
    }

    @media (max-width: 991px) {
        .news-filter-panel {
            margin-bottom: 16px;
        }

        .news-reference-section {
            padding-top: 40px;
        }
    }

    @media (max-width: 767px) {
        .news-search-row {
            flex-direction: column;
            gap: 8px;
        }

        .news-search-row input {
            border-right: 1px solid #d8e1ef;
        }

        .news-search-row button {
            width: 100%;
            height: 42px;
        }

        .news-item {
            flex-direction: column;
            align-items: flex-start;
        }

        .news-item img {
            width: 100%;
            min-width: 100%;
            height: 180px;
        }

        .news-read-btn {
            width: 100%;
        }

        .news-item-content h4 {
            font-size: 20px;
        }
    }
</style>

<script>
    (function () {
        var searchInput = document.getElementById("newsSearchInput");
        var searchBtn = document.getElementById("newsSearchBtn");
        var checks = Array.prototype.slice.call(document.querySelectorAll(".news-cat"));
        var items = Array.prototype.slice.call(document.querySelectorAll("#newsListWrap .news-item"));

        function passesCategory(item) {
            var selected = checks.filter(function (c) { return c.checked; }).map(function (c) { return c.value; });
            if (!selected.length) return true;
            return selected.indexOf(item.getAttribute("data-category")) >= 0;
        }

        function passesText(item, query) {
            var text = ((item.getAttribute("data-title") || "") + " " + (item.getAttribute("data-content") || "") + " " + item.textContent).toLowerCase();
            return text.indexOf(query) >= 0;
        }

        function applyFilters() {
            var q = (searchInput.value || "").trim().toLowerCase();
            items.forEach(function (item) {
                var show = passesCategory(item) && passesText(item, q);
                item.style.display = show ? "" : "none";
            });
        }

        searchInput.addEventListener("input", applyFilters);
        searchBtn.addEventListener("click", applyFilters);
        checks.forEach(function (c) { c.addEventListener("change", applyFilters); });

        if (<?php echo $prefilterCategory !== '' ? 'true' : 'false'; ?>) {
            applyFilters();
        }
    })();
</script>

<?php include 'footer.php'; ?>
