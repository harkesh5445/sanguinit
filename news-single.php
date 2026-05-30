<?php
require_once __DIR__ . '/includes/news-posts-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = $slug ? get_news_post($slug) : null;

if (!$post) {
    header('Location: news-events.php');
    exit;
}

require_once __DIR__ . '/includes/seo.php';

$pageTitle = $post['title'];
$page_data = [
    'title' => $pageTitle . ' | SanguineIT News',
    'description' => !empty($post['excerpt']) ? $post['excerpt'] : $pageTitle,
    'canonical' => sit_base_url() . '/news-single.php?slug=' . rawurlencode($slug),
    'og_image' => !empty($post['featured_image']) ? $post['featured_image'] : '',
    'json_ld' => [sit_article_schema($post, $slug, 'news-single.php', 'NewsArticle')],
];
$articleHtml = get_news_post_html($slug);

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('news-single');
$kbBanner['eyebrow'] = 'SanguineIT Newsroom · ' . $post['category'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $post['date'];
$kbBanner['bg'] = file_exists(__DIR__ . '/' . $post['featured_image'])
    ? $post['featured_image']
    : $kbBanner['bg'];
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/news-single.css">

<section class="news-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="news-events.php" class="news-single-back">&larr; Back to News &amp; Events</a>

                <article class="news-single-article">
                    <div class="news-single-featured">
                        <img src="<?php echo htmlspecialchars($post['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
                    </div>

                    <h1 class="news-single-title"><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                    <div class="news-single-meta">
                        <p class="news-single-date"><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <span class="news-category-badge"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>

                    <div class="news-article-body">
                        <?php echo $articleHtml; ?>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 news-single-sidebar">
                <?php include __DIR__ . '/includes/news-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
