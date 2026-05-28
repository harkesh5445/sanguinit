<?php

/**
 * Knowledge Base videos metadata and session content.
 */
$videoPosts = [
    'induction-new-joinees-sanguineit' => [
        'title' => 'Induction to New Joinees at SanguineIT',
        'date' => 'May 20, 2026',
        'duration' => '14 min',
        'category' => 'Company Culture',
        'category_slug' => 'company',
        'featured_image' => 'images/videos/team-induction.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-30s.mp4',
        'list_summary' => 'Welcome session covering SanguineIT delivery values, team structure, and how we partner with global clients.',
    ],
    'sitefinity-platform-business-needs' => [
        'title' => 'Sitefinity: A Platform That Adapts To Your Business Needs',
        'date' => 'May 8, 2026',
        'duration' => '18 min',
        'category' => 'Sitefinity',
        'category_slug' => 'sitefinity',
        'featured_image' => 'images/videos/sitefinity-platform.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-20s.mp4',
        'list_summary' => 'How Sitefinity supports enterprise marketing sites, personalization, and .NET integrations at scale.',
    ],
    'lms-moodle-benefits-overview' => [
        'title' => 'Know the Benefits of Using an LMS and Why Moodle is Preferred',
        'date' => 'April 25, 2026',
        'duration' => '16 min',
        'category' => 'LMS',
        'category_slug' => 'lms',
        'featured_image' => 'images/videos/lms-learning.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-15s.mp4',
        'list_summary' => 'Overview of LMS business value, Moodle strengths, and rollout considerations for training teams.',
    ],
    'sanguineit-we-are-hiring' => [
        'title' => 'SanguineIT Family is Getting Bigger — We are Hiring',
        'date' => 'April 10, 2026',
        'duration' => '8 min',
        'category' => 'Careers',
        'category_slug' => 'company',
        'featured_image' => 'images/videos/careers-hiring.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-10s.mp4',
        'list_summary' => 'Meet our teams and learn about career paths in commerce, cloud, mobile, and enterprise CMS practices.',
    ],
    'b2b-commerce-best-practices' => [
        'title' => '6 Best Practices for B2B Commerce',
        'date' => 'March 22, 2026',
        'duration' => '22 min',
        'category' => 'Ecommerce',
        'category_slug' => 'ecommerce',
        'featured_image' => 'images/videos/b2b-commerce.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-20s.mp4',
        'list_summary' => 'Practical B2B commerce guidance on catalogs, pricing, approvals, and integration architecture.',
    ],
    'legacy-cloud-native-modernization' => [
        'title' => 'Modernizing Legacy Applications with Cloud-Native Patterns',
        'date' => 'March 5, 2026',
        'duration' => '24 min',
        'category' => 'Cloud',
        'category_slug' => 'cloud',
        'featured_image' => 'images/videos/cloud-modernization.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-30s.mp4',
        'list_summary' => 'Phased modernization strategies for monoliths—containers, APIs, observability, and migration factories.',
    ],
    'magento-performance-optimization-tips' => [
        'title' => 'Magento Performance Optimization: Practical Tips',
        'date' => 'February 18, 2026',
        'duration' => '20 min',
        'category' => 'Magento',
        'category_slug' => 'magento',
        'featured_image' => 'images/videos/magento-performance.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-15s.mp4',
        'list_summary' => 'Caching, indexing, media optimization, and extension governance for faster Magento storefronts.',
    ],
    'secure-apis-enterprise-integrations' => [
        'title' => 'Building Secure APIs for Enterprise Integrations',
        'date' => 'February 2, 2026',
        'duration' => '19 min',
        'category' => 'Integration',
        'category_slug' => 'integration',
        'featured_image' => 'images/videos/secure-apis.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-20s.mp4',
        'list_summary' => 'OAuth, rate limiting, secrets management, and testing patterns for production API programs.',
    ],
    'sharepoint-intranet-design-patterns' => [
        'title' => 'SharePoint Intranet Design Patterns That Scale',
        'date' => 'January 15, 2026',
        'duration' => '17 min',
        'category' => 'SharePoint',
        'category_slug' => 'sharepoint',
        'featured_image' => 'images/videos/sharepoint-intranet.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-15s.mp4',
        'list_summary' => 'Information architecture, hub sites, and governance patterns for enterprise intranets.',
    ],
];

$videoPostsListingOrder = [
    'induction-new-joinees-sanguineit',
    'sitefinity-platform-business-needs',
    'lms-moodle-benefits-overview',
    'sanguineit-we-are-hiring',
    'b2b-commerce-best-practices',
    'legacy-cloud-native-modernization',
    'magento-performance-optimization-tips',
    'secure-apis-enterprise-integrations',
    'sharepoint-intranet-design-patterns',
];

function video_post_url($slug)
{
    return 'video-single.php?slug=' . rawurlencode($slug);
}

function get_video_post($slug)
{
    global $videoPosts;
    return isset($videoPosts[$slug]) ? $videoPosts[$slug] : null;
}

function get_video_post_html($slug)
{
    $post = get_video_post($slug);
    if (!$post) {
        return '';
    }

    $contentFile = __DIR__ . '/video-content/' . $slug . '.php';
    if (is_readable($contentFile)) {
        require_once __DIR__ . '/video-content/_helpers.php';
        ob_start();
        include $contentFile;
        return ob_get_clean();
    }

    return '<p class="lh">' . htmlspecialchars($post['list_summary'], ENT_QUOTES, 'UTF-8') . '</p>';
}
