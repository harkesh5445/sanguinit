<?php

/**
 * Blog posts metadata and full article bodies (no database).
 */
$blogPosts = [
    'adobe-commerce-cloud-migration-ultimate-guide' => [
        'title' => 'Adobe Commerce Cloud Migration: The Ultimate Guide',
        'date' => 'June 5, 2024',
        'comments' => 0,
        'category' => 'Adobe Commerce',
        'category_slug' => 'adobe-commerce',
        'featured_image' => 'images/about_2/data_8.jpg',
        'excerpt' => 'A practical guide to planning, migrating, and optimizing Adobe Commerce on cloud infrastructure for scalability, security, and long-term TCO.',
        'toc' => [
            ['id' => 'brief', 'label' => 'Migration to Adobe Commerce Cloud: A Brief'],
            ['id' => 'benefits', 'label' => 'What Benefits Adobe Commerce Cloud Offers?'],
            ['id' => 'benefits-learning', 'label' => '2.1 Quick Learning Curve', 'indent' => 1],
            ['id' => 'benefits-cost', 'label' => '2.2 Lower Upfront Cost', 'indent' => 1],
            ['id' => 'guide', 'label' => 'Adobe Commerce Cloud Migration Guide: Explained'],
            ['id' => 'guide-planning', 'label' => '3.1 Planning and Discovery', 'indent' => 1],
            ['id' => 'guide-approach', 'label' => '3.2 Migration Approach', 'indent' => 1],
            ['id' => 'guide-golive', 'label' => '3.3 Go-Live and Optimization', 'indent' => 1],
            ['id' => 'conclusion', 'label' => 'The Bottom Line'],
        ],
    ],
    'amp-with-magento2-fast-loading-pages' => [
        'title' => 'AMP with Magento2: Get to Know How Fast Loading Pages Can Win Customers',
        'date' => 'May 6, 2026',
        'comments' => 1,
        'category' => 'Magento',
        'category_slug' => 'magento',
        'featured_image' => 'images/about_2/cation_4.jpg',
        'excerpt' => 'Page speed directly impacts Magento store search performance, user engagement, and conversion rates.',
        'toc' => [],
    ],
    'moodle-lms-5-2-latest-upgrade' => [
        'title' => 'Moodle LMS 5.2: Everything You Need to Know About the Latest Upgrade',
        'date' => 'April 23, 2026',
        'comments' => 0,
        'category' => 'LMS',
        'category_slug' => 'lms',
        'featured_image' => 'images/about_2/cation_5.jpg',
        'excerpt' => 'Modern LMS platforms help organizations train teams, maintain compliance, and scale digital learning programs.',
        'toc' => [],
    ],
    'magento-security-patches-guide' => [
        'title' => 'A Useful Guide to the Magento Security Patches',
        'date' => 'March 28, 2026',
        'comments' => 0,
        'category' => 'Magento',
        'category_slug' => 'magento',
        'featured_image' => 'images/about_2/cation_6.jpg',
        'excerpt' => 'Patch priorities, implementation approach, and maintenance best practices for secure Magento operations.',
        'toc' => [],
    ],
];

$blogPostsListing = [
    ['slug' => 'adobe-commerce-cloud-migration-ultimate-guide', 'image' => 'images/about_2/data_8.jpg', 'date' => 'June 5, 2024', 'comments' => 0],
    ['slug' => 'amp-with-magento2-fast-loading-pages', 'image' => 'images/about_2/cation_4.jpg', 'date' => 'May 6, 2026', 'comments' => 1],
    ['slug' => 'moodle-lms-5-2-latest-upgrade', 'image' => 'images/about_2/cation_5.jpg', 'date' => 'April 23, 2026', 'comments' => 0],
    ['slug' => 'magento-security-patches-guide', 'image' => 'images/about_2/cation_6.jpg', 'date' => 'March 28, 2026', 'comments' => 0],
];

function blog_post_url($slug)
{
    return 'blog-single.php?slug=' . rawurlencode($slug);
}

function get_blog_post($slug)
{
    global $blogPosts;
    return isset($blogPosts[$slug]) ? $blogPosts[$slug] : null;
}

function get_blog_post_html($slug)
{
    $post = get_blog_post($slug);
    if (!$post) {
        return '';
    }

    if ($slug === 'adobe-commerce-cloud-migration-ultimate-guide') {
        ob_start();
        include __DIR__ . '/blog-content/adobe-commerce-cloud-migration.php';
        return ob_get_clean();
    }

    $excerpt = htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8');
    return '<p class="lh">' . $excerpt . '</p><p class="lh">This article is part of the SanguineIT knowledge base. For a tailored migration or platform assessment, <a href="contact-us.php">contact our team</a>.</p>';
}
