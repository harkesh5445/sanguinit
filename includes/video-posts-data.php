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
        'list_summary' => 'A strategic onboarding walkthrough explaining how SanguineIT teams deliver quality outcomes across global engagements. Covers collaboration rhythms, engineering standards, and growth pathways for new joiners.',
    ],
    'sanguineit-we-are-hiring' => [
        'title' => 'SanguineIT Family is Getting Bigger — We are Hiring',
        'date' => 'April 10, 2026',
        'duration' => '8 min',
        'category' => 'Careers',
        'category_slug' => 'company',
        'featured_image' => 'images/videos/careers-hiring.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-10s.mp4',
        'list_summary' => 'An inside look at SanguineIT careers across commerce, cloud, enterprise platforms, and digital engineering delivery. Highlights team culture, mentorship, and what candidates can expect in the hiring journey.',
    ],
    'b2b-commerce-best-practices' => [
        'title' => '6 Best Practices for B2B Commerce',
        'date' => 'March 22, 2026',
        'duration' => '22 min',
        'category' => 'Ecommerce',
        'category_slug' => 'ecommerce',
        'featured_image' => 'images/videos/b2b-commerce.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-20s.mp4',
        'list_summary' => 'A detailed playbook for building high-performing B2B commerce programs beyond basic storefront functionality. Covers account-centric UX, pricing and approval workflows, and integration patterns that scale.',
    ],
    'legacy-cloud-native-modernization' => [
        'title' => 'Modernizing Legacy Applications with Cloud-Native Patterns',
        'date' => 'March 5, 2026',
        'duration' => '24 min',
        'category' => 'Cloud',
        'category_slug' => 'cloud',
        'featured_image' => 'images/videos/cloud-modernization.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-30s.mp4',
        'list_summary' => 'A phased modernization framework for evolving legacy systems into cloud-native architectures without business disruption. Focuses on migration waves, platform foundations, and FinOps-aware execution.',
    ],
    'magento-performance-optimization-tips' => [
        'title' => 'Magento Performance Optimization: Practical Tips',
        'date' => 'February 18, 2026',
        'duration' => '20 min',
        'category' => 'Magento',
        'category_slug' => 'magento',
        'featured_image' => 'images/videos/magento-performance.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-15s.mp4',
        'list_summary' => 'A performance-first Magento guide covering caching, indexing, extension governance, and peak-readiness planning. Connects technical optimization choices to measurable conversion and checkout outcomes.',
    ],
    'secure-apis-enterprise-integrations' => [
        'title' => 'Building Secure APIs for Enterprise Integrations',
        'date' => 'February 2, 2026',
        'duration' => '19 min',
        'category' => 'Integration',
        'category_slug' => 'integration',
        'featured_image' => 'images/videos/secure-apis.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-20s.mp4',
        'list_summary' => 'A security-oriented blueprint for enterprise API programs integrating internal and partner ecosystems. Explores identity models, resilient contracts, runtime controls, and governance-driven reliability.',
    ],
    'sharepoint-intranet-design-patterns' => [
        'title' => 'SharePoint Intranet Design Patterns That Scale',
        'date' => 'January 15, 2026',
        'duration' => '17 min',
        'category' => 'SharePoint',
        'category_slug' => 'sharepoint',
        'featured_image' => 'images/videos/sharepoint-intranet.jpg',
        'video_url' => 'https://samplelib.com/lib/preview/mp4/sample-15s.mp4',
        'list_summary' => 'A scalable SharePoint intranet design guide focused on discoverability, governance, and user-centered information architecture. Demonstrates patterns for sustaining adoption across distributed organizations.',
    ],
];

$videoPostsListingOrder = [
    'induction-new-joinees-sanguineit',
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
