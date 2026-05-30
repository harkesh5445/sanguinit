<?php
require_once __DIR__ . '/includes/infographic-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
require_once __DIR__ . '/includes/image-helpers.php';
include 'header.php';

$kbBanner = kb_get_banner_config('infographics');
include __DIR__ . '/includes/kb-premium-banner.php';

$prefilterCategory = isset($_GET['category']) ? trim($_GET['category']) : '';
?>

<section class="info-library pad-tb">
    <div class="container">
        <div class="row align-items-center mb20">
            <div class="col-lg-7">
                <p class="info-page-intro lh">Executive-ready visual briefs on commerce, cloud governance, security, and digital maturity—helping leadership teams align faster on complex technology decisions.</p>
            </div>
            <div class="col-lg-5">
                <div class="info-top-search">
                    <input type="search" id="infoSearchInput" placeholder="Search infographics" aria-label="Search infographics">
                    <button type="button" id="infoSearchBtn">Search</button>
                </div>
            </div>
        </div>

        <div class="row info-category-chips mb15">
            <div class="col-12">
                <a href="infographics.php" class="info-cat-chip<?php echo $prefilterCategory === '' ? ' active' : ''; ?>">All</a>
                <a href="infographics.php?category=ecommerce" class="info-cat-chip<?php echo $prefilterCategory === 'ecommerce' ? ' active' : ''; ?>">Ecommerce</a>
                <a href="infographics.php?category=company" class="info-cat-chip<?php echo $prefilterCategory === 'company' ? ' active' : ''; ?>">Company</a>
                <a href="infographics.php?category=web" class="info-cat-chip<?php echo $prefilterCategory === 'web' ? ' active' : ''; ?>">Web</a>
                <a href="infographics.php?category=cloud" class="info-cat-chip<?php echo $prefilterCategory === 'cloud' ? ' active' : ''; ?>">Cloud</a>
                <a href="infographics.php?category=security" class="info-cat-chip<?php echo $prefilterCategory === 'security' ? ' active' : ''; ?>">Security</a>
            </div>
        </div>

        <div class="row info-grid" id="infoGrid">
            <?php foreach ($infographicPostsListingOrder as $infoSlug) :
                $infoItem = get_infographic_post($infoSlug);
                if (!$infoItem) {
                    continue;
                }
                $infoTitle = $infoItem['title'];
                $infoUrl = infographic_post_url($infoSlug);
                ?>
            <div class="col-lg-3 col-md-6 mb25 info-grid-col" data-category="<?php echo htmlspecialchars($infoItem['category_slug'], ENT_QUOTES, 'UTF-8'); ?>">
                <article class="info-card" data-title="<?php echo htmlspecialchars($infoTitle, ENT_QUOTES, 'UTF-8'); ?>" data-summary="<?php echo htmlspecialchars($infoItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?>" data-category-label="<?php echo htmlspecialchars($infoItem['category'], ENT_QUOTES, 'UTF-8'); ?>">
                    <a href="<?php echo $infoUrl; ?>" class="info-card-link">
                        <div class="info-card-thumb">
                            <?php sit_responsive_image($infoItem['featured_image'], $infoTitle); ?>
                            <span class="info-card-badge"><?php echo htmlspecialchars($infoItem['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <div class="info-card-body">
                            <p class="info-card-date"><?php echo htmlspecialchars($infoItem['date'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <h4><?php echo htmlspecialchars($infoTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                            <p class="info-card-summary"><?php echo htmlspecialchars($infoItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <span class="info-card-cta">View infographic &rarr;</span>
                        </div>
                    </a>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .info-library {
        background: #f3f3f3;
    }

    .info-page-intro {
        margin: 0;
        color: #404b5d;
        font-size: 16px;
        line-height: 1.6;
    }

    .info-top-search {
        display: flex;
    }

    .info-top-search input {
        flex: 1;
        height: 42px;
        border: 1px solid #b7c1cf;
        padding: 0 12px;
        background: #fff;
    }

    .info-top-search button {
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        padding: 0 20px;
        cursor: pointer;
    }

    .info-cat-chip {
        display: inline-block;
        margin: 0 6px 8px 0;
        padding: 7px 14px;
        border: 1px solid #b7c1cf;
        background: #fff;
        color: #1a2f4a;
        font-size: 13px;
        font-weight: 600;
    }

    .info-cat-chip.active,
    .info-cat-chip:hover {
        background: #27466b;
        border-color: #27466b;
        color: #fff;
    }

    .info-card {
        background: #fff;
        border: 1px solid #e4e8ee;
        box-shadow: 0 4px 14px rgba(26, 47, 74, 0.08);
        height: 100%;
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }

    .info-card:hover {
        box-shadow: 0 10px 28px rgba(26, 47, 74, 0.16);
        transform: translateY(-3px);
    }

    .info-card-link {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .info-card-link:hover {
        text-decoration: none;
        color: inherit;
    }

    .info-card-thumb {
        position: relative;
        overflow: hidden;
        background: #0f1f33;
    }

    .info-card-thumb img {
        width: 100%;
        height: 185px;
        object-fit: cover;
        display: block;
        transition: transform 0.35s ease;
    }

    .info-card:hover .info-card-thumb img {
        transform: scale(1.04);
    }

    .info-card-badge {
        position: absolute;
        left: 10px;
        bottom: 10px;
        background: rgba(39, 70, 107, 0.92);
        color: #fff;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        padding: 4px 8px;
    }

    .info-card-body {
        padding: 14px 14px 16px;
    }

    .info-card-date {
        font-size: 12px;
        color: #64748b;
        font-weight: 600;
        margin: 0 0 6px;
    }

    .info-card h4 {
        font-size: 15px;
        line-height: 1.4;
        margin: 0 0 8px;
        color: #1a3e67;
        font-weight: 700;
    }

    .info-card-summary {
        font-size: 13px;
        line-height: 1.5;
        color: #4a5568;
        margin: 0 0 10px;
    }

    .info-card-cta {
        font-size: 13px;
        font-weight: 700;
        color: #dc2429;
    }

    @media (max-width: 991px) {
        .info-page-intro {
            margin-bottom: 12px;
        }
    }
</style>

<script>
(function () {
    var prefilterCategory = <?php echo json_encode($prefilterCategory); ?>;
    var searchInput = document.getElementById("infoSearchInput");
    var searchBtn = document.getElementById("infoSearchBtn");
    var cols = document.querySelectorAll("#infoGrid .info-grid-col");

    function filterInfographics() {
        var q = (searchInput && searchInput.value ? searchInput.value : "").trim().toLowerCase();
        cols.forEach(function (col) {
            var card = col.querySelector(".info-card");
            if (!card) {
                return;
            }
            var title = (card.getAttribute("data-title") || "").toLowerCase();
            var summary = (card.getAttribute("data-summary") || "").toLowerCase();
            var categoryLabel = (card.getAttribute("data-category-label") || "").toLowerCase();
            var category = col.getAttribute("data-category") || "";
            var matchesCategory = !prefilterCategory || category === prefilterCategory;
            var matchesSearch = !q || title.indexOf(q) !== -1 || summary.indexOf(q) !== -1 || categoryLabel.indexOf(q) !== -1;
            col.style.display = matchesCategory && matchesSearch ? "" : "none";
        });
    }

    filterInfographics();

    if (searchBtn) {
        searchBtn.addEventListener("click", filterInfographics);
    }
    if (searchInput) {
        searchInput.addEventListener("keyup", function (e) {
            if (e.key === "Enter") {
                filterInfographics();
            }
        });
    }
})();
</script>

<?php include "footer.php"; ?>
