<?php
require_once __DIR__ . '/includes/video-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
require_once __DIR__ . '/includes/image-helpers.php';
include 'header.php';

$kbBanner = kb_get_banner_config('videos');
include __DIR__ . '/includes/kb-premium-banner.php';

$prefilterTopic = isset($_GET['topic']) ? trim($_GET['topic']) : '';
?>

<section class="video-library pad-tb">
    <div class="container">
        <div class="row align-items-start mb20">
            <div class="col-lg-8">
                <div class="video-top-note">
                    <p class="lh">Expert video sessions on mobile apps, custom web development, SharePoint, and cloud modernization—designed for engineering teams, architects, and program leaders across global markets.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="video-top-search">
                    <input type="search" id="videoSearchInput" placeholder="Search videos" aria-label="Search videos">
                    <button type="button" id="videoSearchBtn">Search</button>
                </div>
            </div>
        </div>

        <div class="row video-topic-filters mb15">
            <div class="col-12">
                <a href="videos.php" class="video-topic-chip<?php echo $prefilterTopic === '' ? ' active' : ''; ?>">All</a>
                <a href="videos.php?topic=company" class="video-topic-chip<?php echo $prefilterTopic === 'company' ? ' active' : ''; ?>">Company</a>
                <a href="videos.php?topic=web" class="video-topic-chip<?php echo $prefilterTopic === 'web' ? ' active' : ''; ?>">Web Development</a>
                <a href="videos.php?topic=cloud" class="video-topic-chip<?php echo $prefilterTopic === 'cloud' ? ' active' : ''; ?>">Cloud</a>
                <a href="videos.php?topic=mobile" class="video-topic-chip<?php echo $prefilterTopic === 'mobile' ? ' active' : ''; ?>">Mobile Apps</a>
                <a href="videos.php?topic=integration" class="video-topic-chip<?php echo $prefilterTopic === 'integration' ? ' active' : ''; ?>">Integration</a>
                <a href="videos.php?topic=sharepoint" class="video-topic-chip<?php echo $prefilterTopic === 'sharepoint' ? ' active' : ''; ?>">SharePoint</a>
            </div>
        </div>

        <div class="row video-grid" id="videoGrid">
            <?php foreach ($videoPostsListingOrder as $videoSlug) :
                $videoItem = get_video_post($videoSlug);
                if (!$videoItem) {
                    continue;
                }
                $videoTitle = $videoItem['title'];
                $videoUrl = video_post_url($videoSlug);
                ?>
            <div class="col-lg-4 col-md-6 mb25 video-grid-col" data-topic="<?php echo htmlspecialchars($videoItem['category_slug'], ENT_QUOTES, 'UTF-8'); ?>">
                <article class="video-card" data-title="<?php echo htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8'); ?>" data-summary="<?php echo htmlspecialchars($videoItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?>" data-category="<?php echo htmlspecialchars($videoItem['category'], ENT_QUOTES, 'UTF-8'); ?>">
                    <a href="<?php echo $videoUrl; ?>" class="video-card-link">
                        <div class="video-thumb-wrap">
                            <?php sit_responsive_image($videoItem['featured_image'], $videoTitle); ?>
                            <span class="video-play"><i class="fas fa-play"></i></span>
                            <span class="video-duration-badge"><?php echo htmlspecialchars($videoItem['duration'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <p class="video-card-meta"><?php echo htmlspecialchars($videoItem['date'], ENT_QUOTES, 'UTF-8'); ?> · <?php echo htmlspecialchars($videoItem['category'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <h4><?php echo htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                        <p class="video-card-summary"><?php echo htmlspecialchars($videoItem['list_summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </a>
                </article>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row justify-content-center mt10">
            <div class="col-auto">
                <a href="ebooks.php" class="video-bottom-btn">Go to Ebooks</a>
            </div>
            <div class="col-auto">
                <a href="articles.php" class="video-bottom-btn">Go to Articles</a>
            </div>
        </div>
    </div>
</section>

<style>
    .video-library {
        background: #f3f3f3;
    }

    .video-top-note {
        min-height: 44px;
        display: flex;
        align-items: center;
    }

    .video-top-note .lh {
        margin: 0;
        color: #404b5d;
    }

    .video-top-search {
        display: flex;
        gap: 0;
    }

    .video-top-search input {
        flex: 1;
        height: 40px;
        border: 1px solid #b7c1cf;
        padding: 0 12px;
    }

    .video-top-search button {
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        padding: 0 18px;
        cursor: pointer;
    }

    .video-topic-filters {
        flex-wrap: wrap;
        gap: 8px;
    }

    .video-topic-chip {
        display: inline-block;
        margin: 0 6px 8px 0;
        padding: 6px 12px;
        border: 1px solid #b7c1cf;
        background: #fff;
        color: #1a2f4a;
        font-size: 13px;
        font-weight: 600;
    }

    .video-topic-chip.active,
    .video-topic-chip:hover {
        background: #27466b;
        border-color: #27466b;
        color: #fff;
    }

    .video-card-link {
        display: block;
        color: inherit;
    }

    .video-card-link:hover {
        color: inherit;
        text-decoration: none;
    }

    .video-thumb-wrap {
        position: relative;
        overflow: hidden;
        border: 1px solid #d7dce4;
    }

    .video-thumb-wrap img {
        width: 100%;
        height: 190px;
        object-fit: cover;
        display: block;
    }

    .video-play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.92);
        color: #1a3e67;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        pointer-events: none;
    }

    .video-duration-badge {
        position: absolute;
        right: 8px;
        bottom: 8px;
        background: rgba(0, 0, 0, 0.72);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        padding: 3px 8px;
        border-radius: 2px;
    }

    .video-card-meta {
        font-size: 12px;
        color: #666;
        margin: 8px 0 4px;
        font-weight: 600;
    }

    .video-card h4 {
        font-size: 15px;
        margin-top: 0;
        margin-bottom: 6px;
        padding-bottom: 6px;
        border-bottom: 2px solid #dd2b30;
        display: inline-block;
        line-height: 1.4;
        color: #111;
    }

    .video-card-summary {
        font-size: 13px;
        line-height: 1.5;
        color: #4a5568;
        margin: 0;
    }

    .video-bottom-btn {
        display: inline-block;
        background: #27466b;
        color: #fff;
        padding: 9px 20px;
        border-radius: 2px;
        font-size: 14px;
        font-weight: 700;
    }

    @media (max-width: 991px) {
        .video-top-note {
            margin-bottom: 10px;
        }

        .video-top-search {
            margin-top: 4px;
        }
    }
</style>

<script>
(function () {
    var prefilterTopic = <?php echo json_encode($prefilterTopic); ?>;
    var searchInput = document.getElementById("videoSearchInput");
    var searchBtn = document.getElementById("videoSearchBtn");
    var cols = document.querySelectorAll("#videoGrid .video-grid-col");

    function filterVideos() {
        var q = (searchInput && searchInput.value ? searchInput.value : "").trim().toLowerCase();
        cols.forEach(function (col) {
            var card = col.querySelector(".video-card");
            if (!card) {
                return;
            }
            var title = (card.getAttribute("data-title") || "").toLowerCase();
            var summary = (card.getAttribute("data-summary") || "").toLowerCase();
            var category = (card.getAttribute("data-category") || "").toLowerCase();
            var topic = col.getAttribute("data-topic") || "";
            var matchesTopic = !prefilterTopic || topic === prefilterTopic;
            var matchesSearch = !q || title.indexOf(q) !== -1 || summary.indexOf(q) !== -1 || category.indexOf(q) !== -1;
            col.style.display = matchesSearch && matchesTopic ? "" : "none";
        });
    }

    filterVideos();

    if (searchBtn) {
        searchBtn.addEventListener("click", filterVideos);
    }
    if (searchInput) {
        searchInput.addEventListener("keyup", function (e) {
            if (e.key === "Enter") {
                filterVideos();
            }
        });
    }
})();
</script>

<?php include "footer.php"; ?>
