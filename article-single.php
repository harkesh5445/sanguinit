<?php
require_once __DIR__ . '/includes/article-posts-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = $slug ? get_article_post($slug) : null;

if (!$post) {
    header('Location: articles.php');
    exit;
}

$pageTitle = $post['title'];
$articleHtml = get_article_post_html($slug);

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('article-single');
$kbBanner['eyebrow'] = 'SanguineIT Articles · ' . $post['category'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $post['date'] . ' · ' . $post['author'];
$kbBanner['bg'] = file_exists(__DIR__ . '/' . $post['featured_image'])
    ? $post['featured_image']
    : $kbBanner['bg'];
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/article-single.css">

<section class="article-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="articles.php" class="article-single-back">&larr; Back to Articles</a>

                <article>
                    <div class="article-single-featured">
                        <img src="<?php echo htmlspecialchars($post['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
                    </div>

                    <h1 class="article-single-title"><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                    <div class="article-single-meta">
                        <p class="article-single-date"><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="article-single-author">By <?php echo htmlspecialchars($post['author'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <span class="article-category-badge"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>

                    <div class="article-detail-body">
                        <?php echo $articleHtml; ?>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 article-single-sidebar">
                <?php include __DIR__ . '/includes/article-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
