<?php
if (!function_exists('infographic_post_url')) {
    require_once __DIR__ . '/infographic-posts-data.php';
}
?>
<aside class="info-sidebar-box">
    <h4>Search Infographics</h4>
    <div class="info-sidebar-search">
        <input type="search" id="infoSidebarSearch" placeholder="Search ..." aria-label="Search infographics">
        <button type="button" id="infoSidebarSearchBtn">Search</button>
    </div>
</aside>

<aside class="info-sidebar-box">
    <h4>Categories</h4>
    <ul class="info-sidebar-categories">
        <li><a href="infographics.php">All Infographics</a></li>
        <li><a href="infographics.php?category=lms">LMS</a></li>
        <li><a href="infographics.php?category=ecommerce">Ecommerce</a></li>
        <li><a href="infographics.php?category=company">Company</a></li>
        <li><a href="infographics.php?category=web">Web Development</a></li>
        <li><a href="infographics.php?category=cloud">Cloud &amp; DevOps</a></li>
        <li><a href="infographics.php?category=security">Security</a></li>
    </ul>
</aside>

<aside class="info-sidebar-box">
    <h4>More Visuals</h4>
    <ul class="info-sidebar-recent">
        <?php
        global $infographicPostsListingOrder;
        $currentSlug = isset($currentInfographicSlug) ? $currentInfographicSlug : '';
        if (!empty($infographicPostsListingOrder)) {
            $n = 0;
            foreach ($infographicPostsListingOrder as $recentSlug) {
                if ($recentSlug === $currentSlug || $n >= 5) {
                    continue;
                }
                $recent = get_infographic_post($recentSlug);
                if (!$recent) {
                    continue;
                }
                $n++;
                ?>
        <li><a href="<?php echo infographic_post_url($recentSlug); ?>"><?php echo htmlspecialchars($recent['title'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</aside>

<aside class="info-sidebar-box">
    <h4>Need a Custom Visual?</h4>
    <a href="contact-us.php" class="info-sidebar-cta" data-toggle="modal" data-target="#quote-popup">Talk to Our Experts</a>
</aside>
