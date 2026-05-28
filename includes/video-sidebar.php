<?php
if (!function_exists('video_post_url')) {
    require_once __DIR__ . '/video-posts-data.php';
}
?>
<aside class="video-sidebar-box">
    <h4>Search Videos</h4>
    <div class="video-sidebar-search">
        <input type="search" id="videoSidebarSearch" placeholder="Search ..." aria-label="Search videos">
        <button type="button" id="videoSidebarSearchBtn">Search</button>
    </div>
</aside>

<aside class="video-sidebar-box">
    <h4>Topics</h4>
    <ul class="video-sidebar-topics">
        <li><a href="videos.php">All Videos</a></li>
        <li><a href="videos.php?topic=company">Company &amp; Careers</a></li>
        <li><a href="videos.php?topic=sitefinity">Sitefinity</a></li>
        <li><a href="videos.php?topic=lms">LMS</a></li>
        <li><a href="videos.php?topic=ecommerce">Ecommerce</a></li>
        <li><a href="videos.php?topic=cloud">Cloud</a></li>
        <li><a href="videos.php?topic=magento">Magento</a></li>
        <li><a href="videos.php?topic=integration">Integration</a></li>
        <li><a href="videos.php?topic=sharepoint">SharePoint</a></li>
    </ul>
</aside>

<aside class="video-sidebar-box">
    <h4>More Sessions</h4>
    <ul class="video-sidebar-recent">
        <?php
        global $videoPostsListingOrder;
        $currentSlug = isset($currentVideoSlug) ? $currentVideoSlug : '';
        if (!empty($videoPostsListingOrder)) {
            $n = 0;
            foreach ($videoPostsListingOrder as $recentSlug) {
                if ($recentSlug === $currentSlug || $n >= 5) {
                    continue;
                }
                $recent = get_video_post($recentSlug);
                if (!$recent) {
                    continue;
                }
                $n++;
                ?>
        <li><a href="<?php echo video_post_url($recentSlug); ?>"><?php echo htmlspecialchars($recent['title'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</aside>

<aside class="video-sidebar-box">
    <h4>Hire Certified Developers</h4>
    <a href="contact-us.php" class="video-sidebar-cta" data-toggle="modal" data-target="#quote-popup">Talk to Our Experts</a>
</aside>
