<?php
require_once __DIR__ . '/includes/infographic-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
require_once __DIR__ . '/includes/image-helpers.php';
include 'header.php';

$kbBanner = kb_get_banner_config('infographics');
include __DIR__ . '/includes/kb-premium-banner.php';

$prefilterCategory = isset($_GET['category']) ? trim($_GET['category']) : '';
?>

<link rel="stylesheet" href="css/infographics-page.css">

<section class="info-library pad-tb">
    <div class="container">
        <div class="row align-items-center mb20">
            <div class="col-lg-7">
                <p class="info-page-intro lh">Executive-ready visual briefs on mobile apps, web development, cloud governance, security, and digital maturity—helping leadership teams align faster on complex technology decisions.</p>
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
                <a href="infographics.php?category=mobile" class="info-cat-chip<?php echo $prefilterCategory === 'mobile' ? ' active' : ''; ?>">Mobile Apps</a>
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
                $highlights = isset($infoItem['highlights']) && is_array($infoItem['highlights']) ? $infoItem['highlights'] : [];
                ?>
            <div class="col-lg-4 col-md-6 mb25 info-grid-col" data-category="<?php echo htmlspecialchars($infoItem['category_slug'], ENT_QUOTES, 'UTF-8'); ?>">
                <article class="info-kb-card" data-title="<?php echo htmlspecialchars($infoTitle, ENT_QUOTES, 'UTF-8'); ?>" data-summary="<?php echo htmlspecialchars($infoItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?>" data-category-label="<?php echo htmlspecialchars($infoItem['category'], ENT_QUOTES, 'UTF-8'); ?>">
                    <a href="<?php echo $infoUrl; ?>" class="info-kb-card__link">
                        <div class="info-kb-card__media">
                            <?php sit_responsive_image($infoItem['featured_image'], $infoTitle); ?>
                            <span class="info-kb-card__tag"><?php echo htmlspecialchars($infoItem['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <div class="info-kb-card__body">
                            <p class="info-kb-card__date"><?php echo htmlspecialchars($infoItem['date'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <h3 class="info-kb-card__title"><?php echo htmlspecialchars($infoTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="info-kb-card__summary"><?php echo htmlspecialchars($infoItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <?php if (!empty($highlights)) : ?>
                            <ul class="info-kb-card__highlights" aria-label="Key highlights">
                                <?php foreach (array_slice($highlights, 0, 3) as $highlight) : ?>
                                <li>
                                    <strong><?php echo htmlspecialchars($highlight['value'], ENT_QUOTES, 'UTF-8'); ?></strong>
                                    <span><?php echo htmlspecialchars($highlight['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            <span class="info-kb-card__cta">View infographic <i class="fas fa-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </a>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
(function () {
    var prefilterCategory = <?php echo json_encode($prefilterCategory); ?>;
    var searchInput = document.getElementById("infoSearchInput");
    var searchBtn = document.getElementById("infoSearchBtn");
    var cols = document.querySelectorAll("#infoGrid .info-grid-col");

    function filterInfographics() {
        var q = (searchInput && searchInput.value ? searchInput.value : "").trim().toLowerCase();
        cols.forEach(function (col) {
            var card = col.querySelector(".info-kb-card");
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
        searchInput.addEventListener("input", filterInfographics);
        searchInput.addEventListener("keyup", function (e) {
            if (e.key === "Enter") {
                filterInfographics();
            }
        });
    }
})();
</script>

<?php include "footer.php"; ?>
