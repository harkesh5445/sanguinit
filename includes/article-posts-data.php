<?php

/**
 * Articles metadata and full article bodies.
 */
$articlePosts = [
    'magento-sphinx-vs-elasticsearch' => [
        'title' => 'Laravel vs Node.js: Choosing Your Backend Stack for Web Apps',
        'date' => 'May 12, 2026',
        'author' => 'SanguineIT Web Engineering',
        'category' => 'Web Development',
        'category_slug' => 'web',
        'featured_image' => 'images/articles/magento-search.jpg',
        'list_summary' => 'Compare Laravel and Node.js for custom web applications — covering team skills, API design, real-time features, and long-term maintainability.',
    ],
    'website-maintenance-vital-after-development' => [
        'title' => 'Why Website Maintenance is Vital After Development?',
        'date' => 'April 28, 2026',
        'author' => 'SanguineIT Web Services',
        'category' => 'Web Development',
        'category_slug' => 'web',
        'featured_image' => 'images/articles/website-maintenance.jpg',
        'list_summary' => 'Discover why post-launch website maintenance is essential for enterprise security, SEO stability, uptime resilience, and sustained conversion performance.',
    ],
    'wordpress-website-optimization-practices' => [
        'title' => 'Practices for WordPress Website Optimization',
        'date' => 'March 30, 2026',
        'author' => 'SanguineIT CMS Team',
        'category' => 'CMS',
        'category_slug' => 'cms',
        'featured_image' => 'images/articles/wordpress-optimization.jpg',
        'list_summary' => 'A premium WordPress optimization playbook covering architecture, plugin governance, content operations, and performance practices for global digital teams.',
    ],
    'headless-commerce-performance-flexibility' => [
        'title' => 'API-First Web Architecture: Building Scalable Custom Websites',
        'date' => 'March 18, 2026',
        'author' => 'SanguineIT Web Architects',
        'category' => 'Web Development',
        'category_slug' => 'web',
        'featured_image' => 'images/articles/headless-commerce.jpg',
        'list_summary' => 'Learn how API-first architecture improves web application performance, enables mobile clients, and accelerates release cycles for enterprise teams.',
    ],
    'outsource-full-stack-development-why' => [
        'title' => 'When to Outsource Full Stack Development and Why',
        'date' => 'March 2, 2026',
        'author' => 'SanguineIT Delivery Office',
        'category' => 'Outsourcing',
        'category_slug' => 'outsourcing',
        'featured_image' => 'images/articles/outsourcing-team.jpg',
        'list_summary' => 'Use a practical framework to decide when full-stack outsourcing accelerates delivery while preserving quality, governance, and long-term maintainability.',
    ],
    'enterprise-technology-trends-2026' => [
        'title' => 'Top Technology Trends Driving Enterprise Platforms in 2026',
        'date' => 'February 14, 2026',
        'author' => 'SanguineIT Strategy Group',
        'category' => 'Technology',
        'category_slug' => 'technology',
        'featured_image' => 'images/articles/technology-trends.jpg',
        'list_summary' => 'Explore the top enterprise technology trends of 2026, from governed AI and FinOps to modernization factories and composable digital architecture.',
    ],
    'sharepoint-modernization-distributed-teams' => [
        'title' => 'SharePoint Modernization Checklist for Distributed Teams',
        'date' => 'January 27, 2026',
        'author' => 'SanguineIT Collaboration Practice',
        'category' => 'SharePoint',
        'category_slug' => 'sharepoint',
        'featured_image' => 'images/articles/sharepoint-collaboration.jpg',
        'list_summary' => 'A complete SharePoint modernization blueprint for distributed teams covering governance, migration execution, search improvement, and collaboration resilience.',
    ],
    'dedicated-hiring-vs-project-outsourcing' => [
        'title' => 'Dedicated Hiring Model: When It Beats Project Outsourcing',
        'date' => 'January 10, 2026',
        'author' => 'SanguineIT Talent Solutions',
        'category' => 'Dedicated Hiring',
        'category_slug' => 'hiring',
        'featured_image' => 'images/articles/dedicated-hiring.jpg',
        'list_summary' => 'Compare dedicated hiring and project outsourcing models with clear decision criteria for continuity, flexibility, risk management, and delivery outcomes.',
    ],
];

$articlePostsListingOrder = [
    'magento-sphinx-vs-elasticsearch',
    'website-maintenance-vital-after-development',
    'wordpress-website-optimization-practices',
    'headless-commerce-performance-flexibility',
    'outsource-full-stack-development-why',
    'enterprise-technology-trends-2026',
    'sharepoint-modernization-distributed-teams',
    'dedicated-hiring-vs-project-outsourcing',
];

function article_post_url($slug)
{
    return 'article-single.php?slug=' . rawurlencode($slug);
}

function get_article_post($slug)
{
    global $articlePosts;
    return isset($articlePosts[$slug]) ? $articlePosts[$slug] : null;
}

function get_article_post_html($slug)
{
    $post = get_article_post($slug);
    if (!$post) {
        return '';
    }

    $contentFile = __DIR__ . '/article-content/' . $slug . '.php';
    if (is_readable($contentFile)) {
        require_once __DIR__ . '/article-content/_helpers.php';
        ob_start();
        include $contentFile;
        return ob_get_clean();
    }

    $summary = htmlspecialchars($post['list_summary'], ENT_QUOTES, 'UTF-8');
    return '<p class="lh">' . $summary . '</p>';
}
