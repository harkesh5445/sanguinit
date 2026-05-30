<?php

/**
 * Knowledge Base infographics metadata and detail content.
 */
$infographicPosts = [
    'magento-ecommerce-sales-boost' => [
        'title' => 'Mobile App Launch Checklist: From Idea to App Store',
        'date' => 'May 5, 2026',
        'category' => 'Mobile Apps',
        'category_slug' => 'mobile',
        'featured_image' => 'images/infographics/magento-sales-boost.jpg',
        'list_summary' => 'Visual launch checklist covering discovery, platform choice, API architecture, QA, store submission, and post-launch monitoring for iOS and Android apps.',
        'highlights' => [
            ['value' => '6', 'label' => 'Launch phases mapped'],
            ['value' => 'iOS+Android', 'label' => 'Platform coverage'],
            ['value' => 'MVP→Scale', 'label' => 'Release path'],
        ],
    ],
    'fast-facts-about-sanguineit' => [
        'title' => 'Fast Facts About SanguineIT',
        'date' => 'April 22, 2026',
        'category' => 'Company',
        'category_slug' => 'company',
        'featured_image' => 'images/infographics/sanguineit-fast-facts.jpg',
        'list_summary' => 'Global capability snapshot highlighting SanguineIT delivery scale, specialization depth, and engagement models for enterprise technology programs.',
        'highlights' => [
            ['value' => '15+', 'label' => 'Years in digital delivery'],
            ['value' => '350+', 'label' => 'Technology specialists'],
            ['value' => '500+', 'label' => 'Projects delivered'],
        ],
    ],
    'web-development-lifecycle-phases' => [
        'title' => 'Different Phases of Web Development',
        'date' => 'April 8, 2026',
        'category' => 'Web Development',
        'category_slug' => 'web',
        'featured_image' => 'images/infographics/web-development-phases.jpg',
        'list_summary' => 'Lifecycle framework mapping web delivery from strategic discovery through launch, stabilization, and continuous optimization.',
        'highlights' => [
            ['value' => '6', 'label' => 'Lifecycle phases mapped'],
            ['value' => 'UX→QA', 'label' => 'Cross-functional checkpoints'],
            ['value' => 'Agile', 'label' => 'Iterative release cadence'],
        ],
    ],
    'digital-transformation-maturity-model' => [
        'title' => 'Digital Transformation Maturity Model',
        'date' => 'March 20, 2026',
        'category' => 'Cloud & DevOps',
        'category_slug' => 'cloud',
        'featured_image' => 'images/infographics/digital-transformation-maturity.jpg',
        'list_summary' => 'Maturity model to benchmark transformation progress from legacy operations to data-driven, continuously optimized digital enterprises.',
        'highlights' => [
            ['value' => '5', 'label' => 'Maturity stages'],
            ['value' => 'Cloud', 'label' => 'Platform modernization path'],
            ['value' => 'ROI', 'label' => 'Business outcome alignment'],
        ],
    ],
    'incident-response-timeline-blueprint' => [
        'title' => 'Incident Response Timeline Blueprint',
        'date' => 'March 4, 2026',
        'category' => 'Security',
        'category_slug' => 'security',
        'featured_image' => 'images/infographics/incident-response-timeline.jpg',
        'list_summary' => '72-hour incident response timeline blueprint for containment, eradication, recovery, and executive communication under cyber pressure.',
        'highlights' => [
            ['value' => '0–72h', 'label' => 'Critical response window'],
            ['value' => '4', 'label' => 'Response workstreams'],
            ['value' => 'NIST', 'label' => 'Aligned best practices'],
        ],
    ],
    'cloud-cost-governance-control-map' => [
        'title' => 'Cloud Cost & Governance Control Map',
        'date' => 'February 12, 2026',
        'category' => 'Cloud & DevOps',
        'category_slug' => 'cloud',
        'featured_image' => 'images/infographics/cloud-cost-governance.jpg',
        'list_summary' => 'Cloud governance control map covering FinOps visibility, budget discipline, engineering optimization, and cross-functional accountability.',
        'highlights' => [
            ['value' => '30%', 'label' => 'Typical waste without governance'],
            ['value' => '7', 'label' => 'Control domains'],
            ['value' => 'FinOps', 'label' => 'Continuous optimization'],
        ],
    ],
];

$infographicPostsListingOrder = [
    'magento-ecommerce-sales-boost',
    'fast-facts-about-sanguineit',
    'web-development-lifecycle-phases',
    'digital-transformation-maturity-model',
    'incident-response-timeline-blueprint',
    'cloud-cost-governance-control-map',
];

function infographic_post_url($slug)
{
    return 'infographic-single.php?slug=' . rawurlencode($slug);
}

function get_infographic_post($slug)
{
    global $infographicPosts;
    return isset($infographicPosts[$slug]) ? $infographicPosts[$slug] : null;
}

function get_infographic_post_html($slug)
{
    $post = get_infographic_post($slug);
    if (!$post) {
        return '';
    }

    $contentFile = __DIR__ . '/infographic-content/' . $slug . '.php';
    if (is_readable($contentFile)) {
        require_once __DIR__ . '/infographic-content/_helpers.php';
        ob_start();
        include $contentFile;
        return ob_get_clean();
    }

    return '<p class="lh">' . htmlspecialchars($post['list_summary'], ENT_QUOTES, 'UTF-8') . '</p>';
}
