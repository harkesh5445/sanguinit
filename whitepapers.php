<?php
require_once __DIR__ . '/includes/whitepaper-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('whitepapers');
$kbBanner['title_html'] = 'Enterprise Research for <strong>Confident Decision-Making</strong>';
$kbBanner['title'] = '';
include __DIR__ . '/includes/kb-premium-banner.php';

$prefilterCategory = isset($_GET['category']) ? trim($_GET['category']) : '';
?>

<section class="wp-library pad-tb">
    <div class="container">
        <div class="row align-items-center mb20">
            <div class="col-lg-7">
                <p class="wp-page-intro lh">Eight analyst-grade whitepapers on commerce, cloud, compliance, and platform strategy—readable online with executive summaries.</p>
            </div>
            <div class="col-lg-5">
                <div class="wp-top-search">
                    <input type="search" id="wpSearchInput" placeholder="Search whitepapers" aria-label="Search whitepapers">
                    <button type="button" id="wpSearchBtn">Search</button>
                </div>
            </div>
        </div>

        <div class="row wp-category-chips mb15">
            <div class="col-12">
                <a href="whitepapers.php" class="wp-cat-chip<?php echo $prefilterCategory === '' ? ' active' : ''; ?>">All</a>
                <a href="whitepapers.php?category=ecommerce" class="wp-cat-chip<?php echo $prefilterCategory === 'ecommerce' ? ' active' : ''; ?>">Ecommerce</a>
                <a href="whitepapers.php?category=sitefinity" class="wp-cat-chip<?php echo $prefilterCategory === 'sitefinity' ? ' active' : ''; ?>">Sitefinity</a>
                <a href="whitepapers.php?category=cloud" class="wp-cat-chip<?php echo $prefilterCategory === 'cloud' ? ' active' : ''; ?>">Cloud</a>
                <a href="whitepapers.php?category=compliance" class="wp-cat-chip<?php echo $prefilterCategory === 'compliance' ? ' active' : ''; ?>">Compliance</a>
                <a href="whitepapers.php?category=research" class="wp-cat-chip<?php echo $prefilterCategory === 'research' ? ' active' : ''; ?>">Research</a>
                <a href="whitepapers.php?category=strategy" class="wp-cat-chip<?php echo $prefilterCategory === 'strategy' ? ' active' : ''; ?>">Strategy</a>
                <a href="whitepapers.php?category=security" class="wp-cat-chip<?php echo $prefilterCategory === 'security' ? ' active' : ''; ?>">Security</a>
            </div>
        </div>

        <div class="row wp-grid" id="whitepaperGrid">
            <?php foreach ($whitepaperPostsListingOrder as $wpSlug) :
                $wpItem = get_whitepaper_post($wpSlug);
                if (!$wpItem) {
                    continue;
                }
                $wpTitle = $wpItem['title'];
                $wpUrl = whitepaper_post_url($wpSlug);
                ?>
            <div class="col-lg-3 col-md-6 mb25 wp-grid-col" data-category="<?php echo htmlspecialchars($wpItem['category_slug'], ENT_QUOTES, 'UTF-8'); ?>">
                <article class="wp-card" data-title="<?php echo htmlspecialchars($wpTitle, ENT_QUOTES, 'UTF-8'); ?>" data-summary="<?php echo htmlspecialchars($wpItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?>" data-category-label="<?php echo htmlspecialchars($wpItem['category'], ENT_QUOTES, 'UTF-8'); ?>" data-author="<?php echo htmlspecialchars($wpItem['author'], ENT_QUOTES, 'UTF-8'); ?>">
                    <a href="<?php echo $wpUrl; ?>" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="<?php echo htmlspecialchars($wpItem['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($wpTitle, ENT_QUOTES, 'UTF-8'); ?>">
                            <span class="wp-card-badge">Whitepaper</span>
                        </div>
                        <div class="wp-card-body">
                            <p class="wp-card-meta"><?php echo htmlspecialchars($wpItem['date'], ENT_QUOTES, 'UTF-8'); ?> · <?php echo htmlspecialchars($wpItem['read_time'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <h4><?php echo htmlspecialchars($wpTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                            <p class="wp-card-summary"><?php echo htmlspecialchars($wpItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <span class="wp-card-cta">Read whitepaper &rarr;</span>
                        </div>
                    </a>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .wp-library {
        background: #fff;
    }

    .wp-page-intro {
        margin: 0;
        color: #404b5d;
        font-size: 16px;
        line-height: 1.6;
    }

    .wp-top-search {
        display: flex;
    }

    .wp-top-search input {
        flex: 1;
        height: 42px;
        border: 1px solid #b7c1cf;
        padding: 0 12px;
    }

    .wp-top-search button {
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        padding: 0 20px;
        cursor: pointer;
    }

    .wp-cat-chip {
        display: inline-block;
        margin: 0 6px 8px 0;
        padding: 7px 14px;
        border: 1px solid #b7c1cf;
        background: #f8fafc;
        color: #1a2f4a;
        font-size: 13px;
        font-weight: 600;
    }

    .wp-cat-chip.active,
    .wp-cat-chip:hover {
        background: #27466b;
        border-color: #27466b;
        color: #fff;
    }

    .wp-card {
        background: #fff;
        border: 1px solid #e4e8ee;
        box-shadow: 0 4px 16px rgba(26, 47, 74, 0.09);
        height: 100%;
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }

    .wp-card:hover {
        box-shadow: 0 10px 30px rgba(26, 47, 74, 0.16);
        transform: translateY(-3px);
    }

    .wp-card-link {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .wp-card-link:hover {
        color: inherit;
        text-decoration: none;
    }

    .wp-card-thumb {
        position: relative;
        overflow: hidden;
        background: #0f2744;
    }

    .wp-card-thumb img {
        width: 100%;
        height: 185px;
        object-fit: cover;
        display: block;
        opacity: 0.92;
        transition: transform 0.35s ease;
    }

    .wp-card:hover .wp-card-thumb img {
        transform: scale(1.04);
    }

    .wp-card-badge {
        position: absolute;
        left: 10px;
        top: 10px;
        background: rgba(220, 36, 41, 0.95);
        color: #fff;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        padding: 5px 10px;
    }

    .wp-card-body {
        padding: 14px 16px 16px;
    }

    .wp-card-meta {
        font-size: 12px;
        color: #64748b;
        font-weight: 600;
        margin: 0 0 6px;
    }

    .wp-card h4 {
        font-size: 15px;
        line-height: 1.4;
        margin: 0 0 8px;
        color: #1a3e67;
        font-weight: 700;
    }

    .wp-card-summary {
        font-size: 13px;
        line-height: 1.5;
        color: #4a5568;
        margin: 0 0 10px;
    }

    .wp-card-cta {
        font-size: 13px;
        font-weight: 700;
        color: #dc2429;
    }

    @media (max-width: 991px) {
        .wp-page-intro {
            margin-bottom: 12px;
        }
    }
</style>

<script>
(function () {
    var prefilterCategory = <?php echo json_encode($prefilterCategory); ?>;
    var searchInput = document.getElementById("wpSearchInput");
    var searchBtn = document.getElementById("wpSearchBtn");
    var cols = document.querySelectorAll("#whitepaperGrid .wp-grid-col");

    function filterWhitepapers() {
        var q = (searchInput && searchInput.value ? searchInput.value : "").trim().toLowerCase();
        cols.forEach(function (col) {
            var card = col.querySelector(".wp-card");
            if (!card) {
                return;
            }
            var title = (card.getAttribute("data-title") || "").toLowerCase();
            var summary = (card.getAttribute("data-summary") || "").toLowerCase();
            var categoryLabel = (card.getAttribute("data-category-label") || "").toLowerCase();
            var author = (card.getAttribute("data-author") || "").toLowerCase();
            var category = col.getAttribute("data-category") || "";
            var matchesCategory = !prefilterCategory || category === prefilterCategory;
            var matchesSearch = !q || title.indexOf(q) !== -1 || summary.indexOf(q) !== -1 || categoryLabel.indexOf(q) !== -1 || author.indexOf(q) !== -1;
            col.style.display = matchesCategory && matchesSearch ? "" : "none";
        });
    }

    filterWhitepapers();

    if (searchBtn) {
        searchBtn.addEventListener("click", filterWhitepapers);
    }
    if (searchInput) {
        searchInput.addEventListener("keyup", function (e) {
            if (e.key === "Enter") {
                filterWhitepapers();
            }
        });
    }
})();
</script>

<?php include "footer.php"; ?>
