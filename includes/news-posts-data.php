<?php

/**
 * News & press releases metadata and article bodies.
 */
$newsPosts = [
    'adobe-indesign-security-update-apsb25-106' => [
        'title' => 'Adobe November 2025 Security Update Fixes Critical InDesign Vulnerabilities (APSB25-106)',
        'date' => 'November 14, 2025',
        'category' => 'Technology News',
        'category_slug' => 'technology',
        'featured_image' => 'images/news/adobe-security.jpg',
        'list_summary' => 'SanguineIT issues a global advisory on APSB25-106, urging rapid remediation of critical Adobe InDesign vulnerabilities across enterprise creative and publishing environments.',
    ],
    'sitefinity-cve-2025-3600-patch-immediately' => [
        'title' => 'Progress Sitefinity Alert: CVE-2025-3600 Exploit Released — Patch Immediately',
        'date' => 'October 23, 2025',
        'category' => 'Technology News',
        'category_slug' => 'technology',
        'featured_image' => 'images/news/sitefinity-security.jpg',
        'list_summary' => 'Active exploitation tied to CVE-2025-3600 puts Sitefinity environments at elevated risk; SanguineIT outlines immediate remediation and hardening priorities for enterprise CMS operators.',
    ],
    'adobe-commerce-october-2025-security-patches' => [
        'title' => 'Adobe October 2025 Security Update: Critical Patches Released for Commerce and Magento',
        'date' => 'October 23, 2025',
        'category' => 'Technology News',
        'category_slug' => 'technology',
        'featured_image' => 'images/news/commerce-security.jpg',
        'list_summary' => 'Adobe Commerce and Magento October 2025 security patches require urgent staging and deployment to reduce checkout, admin, and customer data exposure risks.',
    ],
    'sanguineit-excellence-digital-delivery-award' => [
        'title' => 'SanguineIT Recognized for Excellence in Digital Delivery',
        'date' => 'November 18, 2024',
        'category' => 'Award News',
        'category_slug' => 'award',
        'featured_image' => 'images/news/award-excellence.jpg',
        'list_summary' => 'SanguineIT has been recognized for excellence in digital delivery, highlighting global program governance, engineering quality, and measurable client outcomes.',
    ],
    'strategic-cloud-alliance-partnership' => [
        'title' => 'Strategic Partnership Announced with Leading Cloud Alliance',
        'date' => 'January 10, 2025',
        'category' => 'Partnership News',
        'category_slug' => 'partnership',
        'featured_image' => 'images/news/cloud-partnership.jpg',
        'list_summary' => 'A new strategic cloud alliance expands SanguineIT modernization, platform engineering, and FinOps capabilities for enterprise clients across global markets.',
    ],
    'enterprise-transformation-program-delivered' => [
        'title' => 'Enterprise Transformation Program Successfully Delivered',
        'date' => 'December 4, 2024',
        'category' => 'Project Launched News',
        'category_slug' => 'project',
        'featured_image' => 'images/news/enterprise-transformation.jpg',
        'list_summary' => 'SanguineIT completes a multi-year enterprise transformation program delivering unified digital experiences, improved resilience, and stronger governance visibility.',
    ],
    'regional-delivery-center-opens' => [
        'title' => 'New Regional Delivery Center Opens to Support Global Clients',
        'date' => 'October 30, 2024',
        'category' => 'Infrastructure News',
        'category_slug' => 'infrastructure',
        'featured_image' => 'images/news/delivery-center.jpg',
        'list_summary' => 'SanguineIT opens a regional delivery center to strengthen global engineering capacity, nearshore collaboration, and 24x7 operational support.',
    ],
    'healthcare-portal-modernization-live' => [
        'title' => 'Healthcare Portal Modernization Goes Live Across 12 Locations',
        'date' => 'July 9, 2024',
        'category' => 'Project Launched News',
        'category_slug' => 'project',
        'featured_image' => 'images/news/healthcare-portal.jpg',
        'list_summary' => 'A healthcare portal modernization led by SanguineIT goes live across 12 locations, improving patient access, scheduling workflows, and digital care coordination.',
    ],
];

$newsPostsListingOrder = [
    'adobe-indesign-security-update-apsb25-106',
    'sitefinity-cve-2025-3600-patch-immediately',
    'adobe-commerce-october-2025-security-patches',
    'sanguineit-excellence-digital-delivery-award',
    'strategic-cloud-alliance-partnership',
    'enterprise-transformation-program-delivered',
    'regional-delivery-center-opens',
    'healthcare-portal-modernization-live',
];

function news_post_url($slug)
{
    return 'news-single.php?slug=' . rawurlencode($slug);
}

function get_news_post($slug)
{
    global $newsPosts;
    return isset($newsPosts[$slug]) ? $newsPosts[$slug] : null;
}

function get_news_category_label($slug)
{
    $labels = [
        'technology' => 'Technology News',
        'award' => 'Award News',
        'partnership' => 'Partnership News',
        'project' => 'Project Launched News',
        'infrastructure' => 'Infrastructure News',
        'other' => 'Other News',
    ];
    return isset($labels[$slug]) ? $labels[$slug] : 'News';
}

function get_news_post_html($slug)
{
    $post = get_news_post($slug);
    if (!$post) {
        return '';
    }

    $contentFile = __DIR__ . '/news-content/' . $slug . '.php';
    if (is_readable($contentFile)) {
        require_once __DIR__ . '/news-content/_helpers.php';
        ob_start();
        include $contentFile;
        return ob_get_clean();
    }

    $summary = htmlspecialchars($post['list_summary'], ENT_QUOTES, 'UTF-8');
    return '<p class="lh">' . $summary . '</p>';
}
