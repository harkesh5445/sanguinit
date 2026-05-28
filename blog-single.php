<?php
require_once __DIR__ . '/includes/blog-posts-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = $slug ? get_blog_post($slug) : null;

if (!$post) {
    header('Location: blogs.php');
    exit;
}

$pageTitle = $post['title'];
$commentsLabel = ((int) $post['comments'] === 0) ? 'No Comments' : ((int) $post['comments'] === 1 ? '1 Comment' : (int) $post['comments'] . ' Comments');
$activeBlogCategory = isset($post['category_slug']) ? $post['category_slug'] : '';
$articleHtml = get_blog_post_html($slug);

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('blog-single');
$kbBanner['eyebrow'] = 'SanguineIT Blog · ' . $post['category'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $post['date'] . ' · ' . $commentsLabel;
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/blog-single.css">

<section class="blog-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="blogs.php" class="blog-single-back">&larr; Back to Blogs</a>

                <article class="blog-single-article">
                    <div class="blog-single-featured">
                        <img src="<?php echo htmlspecialchars($post['featured_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
                    </div>

                    <h1 class="blog-single-title"><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                    <p class="blog-single-meta">
                        <?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?>
                        &nbsp; | &nbsp;
                        <?php echo $commentsLabel; ?>
                    </p>

                    <?php if (!empty($post['toc'])) : ?>
                    <nav class="blog-toc-box" aria-label="Table of contents">
                        <div class="blog-toc-head">
                            <h4>Table of Contents</h4>
                            <div class="blog-toc-icon" aria-hidden="true">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <ol class="blog-toc-list">
                            <?php foreach ($post['toc'] as $item) :
                                $indent = !empty($item['indent']);
                                ?>
                            <li<?php echo $indent ? ' class="is-sub"' : ''; ?>>
                                <a href="#<?php echo htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ol>
                    </nav>
                    <?php endif; ?>

                    <div class="blog-article-body">
                        <?php echo $articleHtml; ?>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 blog-single-sidebar">
                <?php include __DIR__ . '/includes/blog-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<style>
    .blog-single-sidebar .blog-sidebar-box {
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 14px;
        margin-bottom: 14px;
    }

    .blog-single-sidebar .blog-sidebar-box h4 {
        font-size: 22px;
        margin-bottom: 10px;
        border-bottom: 1px solid #e6e6e6;
        padding-bottom: 10px;
    }

    .blog-single-sidebar .blog-sidebar-search {
        display: flex;
        gap: 0;
    }

    .blog-single-sidebar .blog-sidebar-search input {
        flex: 1;
        height: 40px;
        border: 1px solid #ddd;
        padding: 0 10px;
    }

    .blog-single-sidebar .blog-sidebar-search button {
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        width: 110px;
        cursor: pointer;
    }

    .blog-single-sidebar .blog-sidebar-cta {
        display: inline-block;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        padding: 10px 16px;
        border-radius: 2px;
    }

    .blog-single-sidebar .blog-category-list,
    .blog-single-sidebar .blog-recent-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .blog-single-sidebar .blog-category-list li,
    .blog-single-sidebar .blog-recent-list li {
        padding-left: 14px;
        position: relative;
        margin-bottom: 8px;
        line-height: 1.45;
    }

    .blog-single-sidebar .blog-category-list li::before,
    .blog-single-sidebar .blog-recent-list li::before {
        content: "";
        width: 6px;
        height: 6px;
        background: #dc2429;
        position: absolute;
        left: 0;
        top: 9px;
    }

    .blog-single-sidebar .blog-category-list a,
    .blog-single-sidebar .blog-recent-list a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
    }

    .blog-single-sidebar .blog-month-select {
        width: 100%;
        height: 42px;
        border: 1px solid #ddd;
        padding: 0 12px;
    }
</style>

<?php include 'footer.php'; ?>
