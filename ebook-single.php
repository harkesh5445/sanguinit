<?php
require_once __DIR__ . '/includes/ebook-posts-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = $slug ? get_ebook_post($slug) : null;

if (!$post) {
    header('Location: ebooks.php');
    exit;
}

$pageTitle = $post['title'];
$ebookHtml = get_ebook_post_html($slug);
$currentEbookSlug = $slug;
$ebookSidebarPost = $post;

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('ebook-single');
$kbBanner['eyebrow'] = 'SanguineIT E-Books · ' . $post['category'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $post['date'] . ' · ' . $post['read_time'];
$kbBanner['bg'] = file_exists(__DIR__ . '/' . $post['featured_image'])
    ? $post['featured_image']
    : $kbBanner['bg'];
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/ebook-single.css">

<section class="eb-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="ebooks.php" class="eb-single-back">&larr; Back to E-Books</a>

                <header class="eb-read-header">
                    <div class="eb-read-header-inner">
                        <div class="eb-read-cover-mini">
                            <img src="<?php echo htmlspecialchars($post['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        </div>
                        <div class="eb-read-header-text">
                            <h1 class="eb-single-title"><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                            <div class="eb-single-meta">
                                <span><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span><?php echo htmlspecialchars($post['read_time'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="eb-category-badge"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        </div>
                    </div>
                </header>

                <article class="eb-read-body">
                    <?php echo $ebookHtml; ?>
                </article>
            </div>

            <div class="col-lg-4 eb-single-sidebar">
                <?php include __DIR__ . '/includes/ebook-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
