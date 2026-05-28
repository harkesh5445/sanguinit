<?php

/**
 * Articles metadata and full article bodies.
 */
$articlePosts = [
    'magento-sphinx-vs-elasticsearch' => [
        'title' => 'Magento Sphinx Search vs Magento Elasticsearch: Here is Everything You Should Know',
        'date' => 'May 12, 2026',
        'author' => 'SanguineIT Commerce Team',
        'category' => 'Magento',
        'category_slug' => 'magento',
        'featured_image' => 'images/articles/magento-search.jpg',
        'list_summary' => 'Compare Sphinx and Elasticsearch for Magento catalog search, indexing strategy, and operational trade-offs.',
    ],
    'website-maintenance-vital-after-development' => [
        'title' => 'Why Website Maintenance is Vital After Development?',
        'date' => 'April 28, 2026',
        'author' => 'SanguineIT Web Services',
        'category' => 'Web Development',
        'category_slug' => 'web',
        'featured_image' => 'images/articles/website-maintenance.jpg',
        'list_summary' => 'Launch day is not the finish line. Learn why ongoing maintenance protects security, SEO, and conversion performance.',
    ],
    'sitefinity-maintenance-importance' => [
        'title' => 'Importance of Maintaining Your Sitefinity Website',
        'date' => 'April 15, 2026',
        'author' => 'SanguineIT .NET Practice',
        'category' => 'Sitefinity',
        'category_slug' => 'sitefinity',
        'featured_image' => 'images/articles/sitefinity-cms.jpg',
        'list_summary' => 'Enterprise Sitefinity portals need continuous care—patches, content governance, and performance tuning.',
    ],
    'wordpress-website-optimization-practices' => [
        'title' => 'Practices for WordPress Website Optimization',
        'date' => 'March 30, 2026',
        'author' => 'SanguineIT CMS Team',
        'category' => 'CMS',
        'category_slug' => 'cms',
        'featured_image' => 'images/articles/wordpress-optimization.jpg',
        'list_summary' => 'A practical optimization checklist for WordPress performance, security, and editorial workflow.',
    ],
    'headless-commerce-performance-flexibility' => [
        'title' => 'How Headless Commerce Improves Performance and Flexibility',
        'date' => 'March 18, 2026',
        'author' => 'SanguineIT Ecommerce Architects',
        'category' => 'Ecommerce',
        'category_slug' => 'ecommerce',
        'featured_image' => 'images/articles/headless-commerce.jpg',
        'list_summary' => 'Evaluate when headless commerce architecture improves speed, channel coverage, and release velocity.',
    ],
    'outsource-full-stack-development-why' => [
        'title' => 'When to Outsource Full Stack Development and Why',
        'date' => 'March 2, 2026',
        'author' => 'SanguineIT Delivery Office',
        'category' => 'Outsourcing',
        'category_slug' => 'outsourcing',
        'featured_image' => 'images/articles/outsourcing-team.jpg',
        'list_summary' => 'A decision framework for scaling engineering through outsourcing without losing quality or control.',
    ],
    'enterprise-technology-trends-2026' => [
        'title' => 'Top Technology Trends Driving Enterprise Platforms in 2026',
        'date' => 'February 14, 2026',
        'author' => 'SanguineIT Strategy Group',
        'category' => 'Technology',
        'category_slug' => 'technology',
        'featured_image' => 'images/articles/technology-trends.jpg',
        'list_summary' => 'Key trends shaping enterprise architecture, AI adoption, cloud platforms, and digital product delivery.',
    ],
    'sharepoint-modernization-distributed-teams' => [
        'title' => 'SharePoint Modernization Checklist for Distributed Teams',
        'date' => 'January 27, 2026',
        'author' => 'SanguineIT Collaboration Practice',
        'category' => 'SharePoint',
        'category_slug' => 'sharepoint',
        'featured_image' => 'images/articles/sharepoint-collaboration.jpg',
        'list_summary' => 'Modernize SharePoint for hybrid work with governance, search, and migration best practices.',
    ],
    'dedicated-hiring-vs-project-outsourcing' => [
        'title' => 'Dedicated Hiring Model: When It Beats Project Outsourcing',
        'date' => 'January 10, 2026',
        'author' => 'SanguineIT Talent Solutions',
        'category' => 'Dedicated Hiring',
        'category_slug' => 'hiring',
        'featured_image' => 'images/articles/dedicated-hiring.jpg',
        'list_summary' => 'Compare dedicated teams and project-based outsourcing for long-term product delivery.',
    ],
];

$articlePostsListingOrder = [
    'magento-sphinx-vs-elasticsearch',
    'website-maintenance-vital-after-development',
    'sitefinity-maintenance-importance',
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
