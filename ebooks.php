<?php
require_once __DIR__ . '/includes/ebook-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('ebooks');
$kbBanner['title_html'] = 'A Digital Library <strong>Built for Technology Teams</strong>';
$kbBanner['title'] = '';
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="eb-library pad-tb">
    <div class="container">
        <div class="row align-items-center mb20">
            <div class="col-lg-7">
                <p class="eb-page-intro lh">Eight practical guides you can read online—mobility, marketing, cloud, commerce, and delivery—from the SanguineIT team.</p>
            </div>
            <div class="col-lg-5">
                <div class="eb-top-search">
                    <input type="search" id="ebSearchInput" placeholder="Search e-books" aria-label="Search e-books">
                    <button type="button" id="ebSearchBtn">Search</button>
                </div>
            </div>
        </div>

        <div class="row eb-grid" id="ebookGrid">
            <?php foreach ($ebookPostsListingOrder as $ebSlug) :
                $ebItem = get_ebook_post($ebSlug);
                if (!$ebItem) {
                    continue;
                }
                $ebTitle = $ebItem['title'];
                $ebUrl = ebook_post_url($ebSlug);
                ?>
            <div class="col-lg-3 col-md-6 mb25 eb-grid-col" data-category="<?php echo htmlspecialchars($ebItem['category_slug'], ENT_QUOTES, 'UTF-8'); ?>">
                <article class="eb-card" data-title="<?php echo htmlspecialchars($ebTitle, ENT_QUOTES, 'UTF-8'); ?>" data-summary="<?php echo htmlspecialchars($ebItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?>" data-category-label="<?php echo htmlspecialchars($ebItem['category'], ENT_QUOTES, 'UTF-8'); ?>">
                    <a href="<?php echo $ebUrl; ?>" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                                <img src="<?php echo htmlspecialchars($ebItem['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($ebTitle, ENT_QUOTES, 'UTF-8'); ?>">
                                <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                                <div class="eb-cover-band">
                                    <p class="eb-cover-title"><?php echo htmlspecialchars($ebItem['cover_line'], ENT_QUOTES, 'UTF-8'); ?> <span><?php echo htmlspecialchars($ebItem['cover_highlight'], ENT_QUOTES, 'UTF-8'); ?></span></p>
                                    <span class="eb-corner-fold" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <h4 class="eb-title"><?php echo htmlspecialchars($ebTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                        <p class="eb-card-meta"><?php echo htmlspecialchars($ebItem['read_time'], ENT_QUOTES, 'UTF-8'); ?> · Read online</p>
                    </a>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .eb-library {
        background: #fff;
    }

    .eb-page-intro {
        margin: 0;
        color: #404b5d;
        font-size: 16px;
        line-height: 1.6;
    }

    .eb-top-search {
        display: flex;
    }

    .eb-top-search input {
        flex: 1;
        height: 42px;
        border: 1px solid #b7c1cf;
        padding: 0 12px;
    }

    .eb-top-search button {
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        padding: 0 20px;
        cursor: pointer;
    }

    .eb-card {
        height: 100%;
    }

    .eb-card-link {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .eb-card-link:hover {
        text-decoration: none;
        color: inherit;
    }

    .eb-card-shell {
        background: #fff;
        padding: 14px 14px 12px;
        border-radius: 2px;
        box-shadow: 0 2px 12px rgba(26, 47, 74, 0.1);
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }

    .eb-card:hover .eb-card-shell {
        box-shadow: 0 6px 20px rgba(26, 47, 74, 0.15);
        transform: translateY(-2px);
    }

    .eb-cover {
        position: relative;
        display: flex;
        flex-direction: column;
        aspect-ratio: 3 / 4;
        width: 100%;
        max-width: 220px;
        margin: 0 auto;
        overflow: hidden;
        background: #fff;
    }

    .eb-cover > img:first-of-type {
        width: 100%;
        flex: 1 1 58%;
        min-height: 0;
        object-fit: cover;
        display: block;
    }

    .eb-brand-logo {
        position: absolute;
        top: 10px;
        right: 10px;
        max-height: 20px;
        max-width: 72px;
        width: auto;
        object-fit: contain;
        z-index: 2;
    }

    .eb-cover-band {
        position: relative;
        flex: 0 0 42%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #163a5f;
        border-top: 3px solid #e31f2b;
        padding: 10px 12px 16px;
        overflow: hidden;
        text-align: center;
    }

    .eb-cover-band::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 28px;
        background:
            linear-gradient(90deg, transparent 0%, rgba(120, 180, 220, 0.15) 20%, transparent 40%),
            repeating-linear-gradient(90deg, rgba(100, 160, 210, 0.12) 0, rgba(100, 160, 210, 0.12) 1px, transparent 1px, transparent 6px),
            repeating-linear-gradient(0deg, rgba(100, 160, 210, 0.08) 0, rgba(100, 160, 210, 0.08) 1px, transparent 1px, transparent 8px);
        pointer-events: none;
    }

    .eb-cover-title {
        margin: 0;
        color: #fff;
        font-size: 10px;
        line-height: 1.35;
        font-weight: 500;
        position: relative;
        z-index: 1;
        padding: 0 8px 4px;
        max-width: 100%;
    }

    .eb-cover-title span {
        display: block;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.5px;
        margin-top: 4px;
        line-height: 1.25;
        text-transform: uppercase;
    }

    .eb-corner-fold {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 0;
        height: 0;
        z-index: 3;
        border-style: solid;
        border-width: 0 0 34px 34px;
        border-color: transparent transparent #e31f2b transparent;
        filter: drop-shadow(-2px -2px 3px rgba(0, 0, 0, 0.22));
    }

    .eb-title {
        font-size: 14px;
        line-height: 1.45;
        margin: 12px 0 4px;
        padding: 0 4px;
        color: #1a3e67;
        font-weight: 700;
        text-align: left;
        max-width: 220px;
        margin-left: auto;
        margin-right: auto;
    }

    .eb-card-meta {
        font-size: 12px;
        color: #64748b;
        font-weight: 600;
        margin: 0;
        padding: 0 4px;
        max-width: 220px;
        margin-left: auto;
        margin-right: auto;
    }

    @media (max-width: 991px) {
        .eb-page-intro {
            margin-bottom: 12px;
        }
    }

    @media (max-width: 767px) {
        .eb-cover {
            max-width: 100%;
        }
    }
</style>

<script>
(function () {
    var searchInput = document.getElementById("ebSearchInput");
    var searchBtn = document.getElementById("ebSearchBtn");
    var cols = document.querySelectorAll("#ebookGrid .eb-grid-col");

    function filterEbooks() {
        var q = (searchInput && searchInput.value ? searchInput.value : "").trim().toLowerCase();
        cols.forEach(function (col) {
            var card = col.querySelector(".eb-card");
            if (!card) {
                return;
            }
            var title = (card.getAttribute("data-title") || "").toLowerCase();
            var summary = (card.getAttribute("data-summary") || "").toLowerCase();
            var categoryLabel = (card.getAttribute("data-category-label") || "").toLowerCase();
            var matchesSearch = !q || title.indexOf(q) !== -1 || summary.indexOf(q) !== -1 || categoryLabel.indexOf(q) !== -1;
            col.style.display = matchesSearch ? "" : "none";
        });
    }

    if (searchBtn) {
        searchBtn.addEventListener("click", filterEbooks);
    }
    if (searchInput) {
        searchInput.addEventListener("keyup", function (e) {
            if (e.key === "Enter") {
                filterEbooks();
            }
        });
    }
})();
</script>

<?php include "footer.php"; ?>
