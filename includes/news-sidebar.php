<?php
if (!function_exists('news_post_url')) {
    require_once __DIR__ . '/news-posts-data.php';
}
?>
<aside class="news-sidebar-box">
    <h4>Search Press Releases</h4>
    <div class="news-sidebar-search">
        <input type="search" id="newsSidebarSearch" placeholder="Search ..." aria-label="Search press releases">
        <button type="button" id="newsSidebarSearchBtn">Search</button>
    </div>
</aside>

<aside class="news-sidebar-box">
    <h4>Filter by Category</h4>
    <ul class="news-sidebar-categories">
        <li><a href="news-events.php">All News</a></li>
        <li><a href="news-events.php?category=technology">Technology News</a></li>
        <li><a href="news-events.php?category=award">Award News</a></li>
        <li><a href="news-events.php?category=partnership">Partnership News</a></li>
        <li><a href="news-events.php?category=project">Project Launched News</a></li>
        <li><a href="news-events.php?category=infrastructure">Infrastructure News</a></li>
    </ul>
</aside>

<aside class="news-sidebar-box">
    <h4>Recent Press Releases</h4>
    <ul class="news-sidebar-recent">
        <?php
        global $newsPostsListingOrder;
        if (!empty($newsPostsListingOrder)) {
            foreach (array_slice($newsPostsListingOrder, 0, 5) as $recentSlug) {
                $recent = get_news_post($recentSlug);
                if (!$recent) {
                    continue;
                }
                ?>
        <li><a href="<?php echo news_post_url($recentSlug); ?>"><?php echo htmlspecialchars($recent['title'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</aside>

<aside class="news-sidebar-box">
    <h4>Hire Certified Developers</h4>
    <a href="contact-us.php" class="news-sidebar-cta" data-toggle="modal" data-target="#quote-popup">Talk to Our Experts</a>
</aside>
