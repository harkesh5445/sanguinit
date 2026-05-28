<?php
if (!function_exists('whitepaper_post_url')) {
    require_once __DIR__ . '/whitepaper-posts-data.php';
}
$post = isset($whitepaperSidebarPost) ? $whitepaperSidebarPost : null;
?>
<aside class="wp-sidebar-box wp-sidebar-toc">
    <h4>Contents</h4>
    <?php if ($post && !empty($post['toc'])) : ?>
    <ol class="wp-toc-list">
        <?php foreach ($post['toc'] as $tocItem) : ?>
        <li><a href="#<?php echo htmlspecialchars($tocItem['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($tocItem['label'], ENT_QUOTES, 'UTF-8'); ?></a></li>
        <?php endforeach; ?>
    </ol>
    <?php endif; ?>
</aside>

<aside class="wp-sidebar-box">
    <h4>More Whitepapers</h4>
    <ul class="wp-sidebar-recent">
        <?php
        global $whitepaperPostsListingOrder;
        $currentSlug = isset($currentWhitepaperSlug) ? $currentWhitepaperSlug : '';
        if (!empty($whitepaperPostsListingOrder)) {
            $n = 0;
            foreach ($whitepaperPostsListingOrder as $recentSlug) {
                if ($recentSlug === $currentSlug || $n >= 5) {
                    continue;
                }
                $recent = get_whitepaper_post($recentSlug);
                if (!$recent) {
                    continue;
                }
                $n++;
                ?>
        <li><a href="<?php echo whitepaper_post_url($recentSlug); ?>"><?php echo htmlspecialchars($recent['title'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</aside>

<aside class="wp-sidebar-box">
    <h4>Executive Briefing</h4>
    <a href="contact-us.php" class="wp-sidebar-cta" data-toggle="modal" data-target="#quote-popup">Request a Briefing</a>
</aside>
