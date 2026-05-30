<?php
require_once __DIR__ . '/includes/infographic-posts-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = $slug ? get_infographic_post($slug) : null;

if (!$post) {
    header('Location: infographics.php');
    exit;
}

require_once __DIR__ . '/includes/seo.php';

$pageTitle = $post['title'];
$page_data = [
    'title' => $pageTitle . ' | SanguineIT Infographics',
    'description' => !empty($post['list_summary']) ? $post['list_summary'] : $pageTitle,
    'canonical' => sit_base_url() . '/infographic-single.php?slug=' . rawurlencode($slug),
    'og_image' => !empty($post['featured_image']) ? $post['featured_image'] : '',
    'json_ld' => [sit_article_schema($post, $slug, 'infographic-single.php', 'Article')],
];
$infoHtml = get_infographic_post_html($slug);
$currentInfographicSlug = $slug;

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('infographic-single');
$kbBanner['eyebrow'] = 'SanguineIT Infographics · ' . $post['category'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $post['date'];
$kbBanner['bg'] = file_exists(__DIR__ . '/' . $post['featured_image'])
    ? $post['featured_image']
    : $kbBanner['bg'];
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/infographic-single.css">

<section class="info-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="infographics.php" class="info-single-back">&larr; Back to Infographics</a>

                <div class="info-single-visual">
                    <span class="info-single-visual-label">Executive Visual</span>
                    <img src="<?php echo htmlspecialchars($post['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <?php if (!empty($post['highlights'])) : ?>
                <div class="info-highlights-strip">
                    <?php foreach ($post['highlights'] as $highlight) : ?>
                    <div class="info-highlight-card">
                        <strong><?php echo htmlspecialchars($highlight['value'], ENT_QUOTES, 'UTF-8'); ?></strong>
                        <span><?php echo htmlspecialchars($highlight['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <h1 class="info-single-title"><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                <div class="info-single-meta">
                    <span><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="info-category-badge"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>

                <div class="info-detail-body">
                    <?php echo $infoHtml; ?>
                </div>

                <div class="info-single-cta-bar">
                    <p>Want this tailored for your organization or presented to leadership?</p>
                    <a href="contact-us.php" data-toggle="modal" data-target="#quote-popup">Request a Walkthrough</a>
                </div>
            </div>

            <div class="col-lg-4 info-single-sidebar">
                <?php include __DIR__ . '/includes/infographic-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
