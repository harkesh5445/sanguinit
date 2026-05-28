<?php
require_once __DIR__ . '/includes/whitepaper-posts-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = $slug ? get_whitepaper_post($slug) : null;

if (!$post) {
    header('Location: whitepapers.php');
    exit;
}

$pageTitle = $post['title'];
$whitepaperHtml = get_whitepaper_post_html($slug);
$currentWhitepaperSlug = $slug;
$whitepaperSidebarPost = $post;

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('whitepaper-single');
$kbBanner['eyebrow'] = 'SanguineIT Whitepapers · ' . $post['category'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $post['date'] . ' · ' . $post['read_time'] . ' · ' . $post['author'];
$kbBanner['bg'] = file_exists(__DIR__ . '/' . $post['featured_image'])
    ? $post['featured_image']
    : $kbBanner['bg'];
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/whitepaper-single.css">

<section class="wp-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="whitepapers.php" class="wp-single-back">&larr; Back to Whitepapers</a>

                <header class="wp-doc-header">
                    <p class="wp-doc-type">Enterprise Research Paper</p>
                    <h1 class="wp-single-title"><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                    <div class="wp-single-meta">
                        <span><?php echo htmlspecialchars($post['author'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span><?php echo htmlspecialchars($post['read_time'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </header>

                <?php if (!empty($post['highlights'])) : ?>
                <div class="wp-highlights-strip">
                    <?php foreach ($post['highlights'] as $highlight) : ?>
                    <div class="wp-highlight-card">
                        <strong><?php echo htmlspecialchars($highlight['value'], ENT_QUOTES, 'UTF-8'); ?></strong>
                        <span><?php echo htmlspecialchars($highlight['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if (!empty($post['executive_summary'])) : ?>
                <div id="executive-summary" class="wp-exec-summary">
                    <h2>Executive summary</h2>
                    <p><?php echo htmlspecialchars($post['executive_summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <?php endif; ?>

                <article class="wp-read-body">
                    <?php echo $whitepaperHtml; ?>
                </article>

                <div class="wp-single-cta">
                    <p>Discuss this research with SanguineIT architects and strategists.</p>
                    <a href="contact-us.php" data-toggle="modal" data-target="#quote-popup">Schedule Executive Briefing</a>
                </div>
            </div>

            <div class="col-lg-4 wp-single-sidebar">
                <?php include __DIR__ . '/includes/whitepaper-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
