<?php
require_once __DIR__ . '/includes/video-posts-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = $slug ? get_video_post($slug) : null;

if (!$post) {
    header('Location: videos.php');
    exit;
}

require_once __DIR__ . '/includes/seo.php';

$pageTitle = $post['title'];
$page_data = [
    'title' => $pageTitle . ' | SanguineIT Videos',
    'description' => !empty($post['list_summary']) ? $post['list_summary'] : $pageTitle,
    'canonical' => sit_base_url() . '/video-single.php?slug=' . rawurlencode($slug),
    'og_image' => !empty($post['featured_image']) ? $post['featured_image'] : '',
    'json_ld' => [sit_video_object_schema($post, $slug)],
];
$videoHtml = get_video_post_html($slug);
$currentVideoSlug = $slug;

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('video-single');
$kbBanner['eyebrow'] = 'SanguineIT Videos · ' . $post['category'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $post['date'] . ' · ' . $post['duration'];
$kbBanner['bg'] = file_exists(__DIR__ . '/' . $post['featured_image'])
    ? $post['featured_image']
    : $kbBanner['bg'];
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/video-single.css">

<section class="video-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="videos.php" class="video-single-back">&larr; Back to Videos</a>

                <div class="video-player-wrap">
                    <video controls playsinline preload="metadata" poster="<?php echo htmlspecialchars($post['featured_image'], ENT_QUOTES, 'UTF-8'); ?>">
                        <source src="<?php echo htmlspecialchars($post['video_url'], ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>

                <h1 class="video-single-title"><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                <div class="video-single-meta">
                    <span><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span><?php echo htmlspecialchars($post['duration'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="video-category-badge"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>

                <div class="video-detail-body">
                    <?php echo $videoHtml; ?>
                </div>
            </div>

            <div class="col-lg-4 video-single-sidebar">
                <?php include __DIR__ . '/includes/video-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
