<?php
if (!function_exists('article_post_url')) {
    require_once __DIR__ . '/article-posts-data.php';
}
$prefilterCategory = isset($prefilterCategory) ? $prefilterCategory : '';
?>
<aside class="article-sidebar-box">
    <h4>Search Articles</h4>
    <div class="article-sidebar-search">
        <input type="search" id="articleSidebarSearch" placeholder="Search ..." aria-label="Search articles">
        <button type="button" id="articleSidebarSearchBtn">Search</button>
    </div>
</aside>

<aside class="article-sidebar-box">
    <h4>Categories</h4>
    <ul class="article-sidebar-categories">
        <li><a href="articles.php">All Articles</a></li>
        <li><a href="articles.php?category=magento">Magento</a></li>
        <li><a href="articles.php?category=web">Web Development</a></li>
        <li><a href="articles.php?category=sitefinity">Sitefinity</a></li>
        <li><a href="articles.php?category=cms">CMS</a></li>
        <li><a href="articles.php?category=ecommerce">Ecommerce</a></li>
        <li><a href="articles.php?category=outsourcing">Outsourcing</a></li>
        <li><a href="articles.php?category=technology">Technology</a></li>
        <li><a href="articles.php?category=sharepoint">SharePoint</a></li>
        <li><a href="articles.php?category=hiring">Dedicated Hiring</a></li>
    </ul>
</aside>

<aside class="article-sidebar-box">
    <h4>Recent Articles</h4>
    <ul class="article-sidebar-recent">
        <?php
        global $articlePostsListingOrder;
        if (!empty($articlePostsListingOrder)) {
            foreach (array_slice($articlePostsListingOrder, 0, 5) as $recentSlug) {
                $recent = get_article_post($recentSlug);
                if (!$recent) {
                    continue;
                }
                ?>
        <li><a href="<?php echo article_post_url($recentSlug); ?>"><?php echo htmlspecialchars($recent['title'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</aside>

<aside class="article-sidebar-box">
    <h4>Hire Certified Developers</h4>
    <a href="contact-us.php" class="article-sidebar-cta" data-toggle="modal" data-target="#quote-popup">Talk to Our Experts</a>
</aside>
