<?php
if (!function_exists('blog_post_url')) {
    require_once __DIR__ . '/blog-posts-data.php';
}
$activeBlogCategory = isset($activeBlogCategory) ? $activeBlogCategory : '';
?>
<aside class="blog-sidebar-box">
    <h4>Search our Blog</h4>
    <form class="blog-sidebar-search" action="blogs.php" method="get" role="search">
        <input type="search" name="q" placeholder="Search ..." value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        <button type="submit">Search</button>
    </form>
</aside>

<aside class="blog-sidebar-box">
    <h4>Hire Certified Developers</h4>
    <a href="contact-us.php" class="blog-sidebar-cta" data-toggle="modal" data-target="#quote-popup">Talk to Our Experts</a>
</aside>

<aside class="blog-sidebar-box">
    <h4>Categories</h4>
    <ul class="blog-category-list">
        <?php
        $blogCategories = [
            'adobe-commerce' => 'Adobe Commerce',
            'app-development' => 'App Development',
            'artificial-intelligence' => 'Artificial Intelligence',
            'aspnet' => 'ASP.NET',
            'bigcommerce' => 'BigCommerce',
            'bigdata' => 'Bigdata',
            'blockchain' => 'BlockChain Technology',
            'business' => 'Business',
            'cms' => 'CMS',
            'dedicated-hiring' => 'Dedicated Hiring',
            'digital-marketing' => 'Digital Marketing',
            'drupal' => 'Drupal development',
            'ecommerce' => 'Ecommerce',
            'ecommerce-website-development' => 'Ecommerce website development',
            'frontend' => 'Front End Development',
            'full-stack' => 'Full Stack Development',
            'general' => 'General &amp; Others',
            'headless-commerce' => 'Headless Commerce',
            'news' => 'SanguineIT News',
            'infographic' => 'infographic',
            'internet-marketing' => 'Internet Marketing',
            'it-services' => 'IT Services',
            'laravel' => 'Laravel Development',
            'lms' => 'LMS',
            'magento' => 'Magento',
            'magento-extension' => 'Magento 2 Extension',
            'mobile-apps' => 'Mobile Apps Development India',
            'monitoring' => 'Monitoring Service',
            'moodle' => 'Moodle',
            'open-source' => 'Open Source Technology',
            'outsourcing' => 'Outsourcing',
            'python' => 'Python',
            'sharepoint' => 'SharePoint',
            'shopify' => 'Shopify',
            'sitefinity' => 'Sitefinity',
            'software-development' => 'Software Development india',
            'software-testing' => 'Software Testing',
            'technology' => 'Technology',
            'umbraco' => 'Umbraco Development',
            'web-development' => 'Web Development India',
            'web-hosting' => 'Web Hosting',
            'website-maintenance' => 'Website Maintenance',
        ];
        foreach ($blogCategories as $slug => $label) :
            $isActive = ($activeBlogCategory === $slug);
            ?>
        <li<?php echo $isActive ? ' class="is-active"' : ''; ?>><a href="blogs.php"><?php echo $label; ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>

<aside class="blog-sidebar-box">
    <h4>Recent Posts</h4>
    <ul class="blog-recent-list">
        <?php
        global $blogPostsListingOrder;
        if (!empty($blogPostsListingOrder)) {
            $recentSlugs = array_slice($blogPostsListingOrder, 0, 5);
            foreach ($recentSlugs as $recentSlug) {
                $recentPost = get_blog_post($recentSlug);
                if (!$recentPost) {
                    continue;
                }
                ?>
        <li><a href="<?php echo blog_post_url($recentSlug); ?>"><?php echo htmlspecialchars($recentPost['title'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</aside>

<aside class="blog-sidebar-box">
    <h4>Find by Month</h4>
    <select class="blog-month-select" id="blogMonthSelect" aria-label="Select month" onchange="if(this.value){window.location.href='blogs.php?month='+encodeURIComponent(this.value);}">
        <option value="">Select Month</option>
        <option value="2026-05">May 2026</option>
        <option value="2026-04">April 2026</option>
        <option value="2026-03">March 2026</option>
        <option value="2026-02">February 2026</option>
        <option value="2026-01">January 2026</option>
        <option value="2025-12">December 2025</option>
        <option value="2025-11">November 2025</option>
        <option value="2025-10">October 2025</option>
        <option value="2025-09">September 2025</option>
        <option value="2025-08">August 2025</option>
        <option value="2025-07">July 2025</option>
        <option value="2025-06">June 2025</option>
        <option value="2025-05">May 2025</option>
        <option value="2025-04">April 2025</option>
        <option value="2025-03">March 2025</option>
        <option value="2024-06">June 2024</option>
    </select>
</aside>
