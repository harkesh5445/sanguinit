<?php
if (!function_exists('ebook_post_url')) {
    require_once __DIR__ . '/ebook-posts-data.php';
}
$post = isset($ebookSidebarPost) ? $ebookSidebarPost : null;
?>
<aside class="eb-sidebar-box eb-sidebar-toc">
    <h4>In this e-book</h4>
    <?php if ($post && !empty($post['toc'])) : ?>
    <ol class="eb-toc-list">
        <?php foreach ($post['toc'] as $tocItem) : ?>
        <li><a href="#<?php echo htmlspecialchars($tocItem['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($tocItem['label'], ENT_QUOTES, 'UTF-8'); ?></a></li>
        <?php endforeach; ?>
    </ol>
    <?php endif; ?>
</aside>

<aside class="eb-sidebar-box">
    <h4>More E-Books</h4>
    <ul class="eb-sidebar-recent">
        <?php
        global $ebookPostsListingOrder;
        $currentSlug = isset($currentEbookSlug) ? $currentEbookSlug : '';
        if (!empty($ebookPostsListingOrder)) {
            $n = 0;
            foreach ($ebookPostsListingOrder as $recentSlug) {
                if ($recentSlug === $currentSlug || $n >= 5) {
                    continue;
                }
                $recent = get_ebook_post($recentSlug);
                if (!$recent) {
                    continue;
                }
                $n++;
                ?>
        <li><a href="<?php echo ebook_post_url($recentSlug); ?>"><?php echo htmlspecialchars($recent['title'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</aside>

<aside class="eb-sidebar-box">
    <h4>Need Expert Help?</h4>
    <a href="contact-us.php" class="eb-sidebar-cta" data-toggle="modal" data-target="#quote-popup">Talk to Our Experts</a>
</aside>
