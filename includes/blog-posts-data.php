<?php

/**
 * Blog posts metadata and full article bodies (no database).
 */
$blogPosts = [
    'adobe-commerce-cloud-migration-ultimate-guide' => [
        'title' => 'Custom Mobile App Development: From Discovery to Launch',
        'date' => 'June 5, 2024',
        'comments' => 0,
        'category' => 'Mobile Apps',
        'category_slug' => 'mobile-apps',
        'featured_image' => 'images/blog/adobe-commerce-cloud.jpg',
        'carousel_image' => 'images/blog/carousel-1.jpg',
        'list_excerpt' => 'A practical roadmap for planning, building, and launching custom mobile applications — covering discovery, platform choice, API design, QA, and post-launch support.',
        'excerpt' => 'End-to-end guide for enterprise and startup teams shipping iOS, Android, and cross-platform apps with predictable delivery and maintainable architecture.',
        'toc' => [
            ['id' => 'brief', 'label' => 'Why custom mobile apps still win'],
            ['id' => 'benefits', 'label' => 'What a well-built app delivers'],
            ['id' => 'benefits-learning', 'label' => 'Faster time-to-market with the right stack', 'indent' => 1],
            ['id' => 'benefits-cost', 'label' => 'Total cost of ownership over 3 years', 'indent' => 1],
            ['id' => 'guide', 'label' => 'The SanguineIT delivery framework'],
            ['id' => 'guide-planning', 'label' => 'Discovery and scope', 'indent' => 1],
            ['id' => 'guide-approach', 'label' => 'Build approach', 'indent' => 1],
            ['id' => 'guide-golive', 'label' => 'Launch and hypercare', 'indent' => 1],
            ['id' => 'conclusion', 'label' => 'The bottom line'],
        ],
    ],
    'amp-with-magento2-fast-loading-pages' => [
        'title' => 'React Native vs Flutter: Choosing the Right Mobile Stack',
        'date' => 'May 6, 2026',
        'comments' => 1,
        'category' => 'Mobile Apps',
        'category_slug' => 'mobile-apps',
        'featured_image' => 'images/blog/magento-amp-speed.jpg',
        'carousel_image' => 'images/blog/carousel-2.jpg',
        'list_excerpt' => 'Compare React Native and Flutter for performance, team skills, release cadence, and long-term maintenance — so you pick the stack that fits your product, not the hype cycle.',
        'excerpt' => 'Decision framework for cross-platform mobile development with React Native and Flutter.',
        'toc' => [
            ['id' => 'why-speed', 'label' => 'Why stack choice matters early'],
            ['id' => 'amp-overview', 'label' => 'React Native at a glance'],
            ['id' => 'implementation', 'label' => 'Flutter at a glance'],
            ['id' => 'beyond-amp', 'label' => 'When to go native instead'],
            ['id' => 'conclusion', 'label' => 'The bottom line'],
        ],
    ],
    'magento-security-patches-guide' => [
        'title' => 'Mobile App Security: Practices Every Development Team Needs',
        'date' => 'March 28, 2026',
        'comments' => 0,
        'category' => 'App Security',
        'category_slug' => 'app-security',
        'featured_image' => 'images/blog/magento-security.jpg',
        'list_excerpt' => 'Secure authentication, API hardening, data encryption, and release governance for iOS and Android apps — without slowing delivery teams down.',
        'excerpt' => 'Security checklist for mobile applications from design through App Store and Play Store release.',
        'toc' => [
            ['id' => 'why-patches', 'label' => 'Why mobile security cannot wait'],
            ['id' => 'patch-types', 'label' => 'Threats to plan for'],
            ['id' => 'process', 'label' => 'Secure development workflow'],
            ['id' => 'maintenance', 'label' => 'Post-launch monitoring'],
            ['id' => 'conclusion', 'label' => 'The bottom line'],
        ],
    ],
    'headless-commerce-performance-flexibility' => [
        'title' => 'Progressive Web Apps: When They Beat Native Mobile',
        'date' => 'February 27, 2026',
        'comments' => 0,
        'category' => 'Web Development',
        'category_slug' => 'web-development',
        'featured_image' => 'images/blog/headless-commerce.jpg',
        'list_excerpt' => 'PWAs can deliver app-like experiences from the web — faster rollout, single codebase, and lower store friction. Learn when a PWA is the right call versus native iOS and Android.',
        'excerpt' => 'Strategic guide for evaluating progressive web apps against native mobile for your product roadmap.',
        'toc' => [
            ['id' => 'what-is', 'label' => 'What PWAs really are'],
            ['id' => 'benefits', 'label' => 'Performance and reach benefits'],
            ['id' => 'when-adopt', 'label' => 'When to choose PWA (and when not to)'],
            ['id' => 'rollout', 'label' => 'Planning a PWA rollout'],
            ['id' => 'conclusion', 'label' => 'The bottom line'],
        ],
    ],
    'custom-website-development-cost-guide' => [
        'title' => 'Custom Website Development Cost: What to Budget in 2026',
        'date' => 'May 18, 2026',
        'comments' => 0,
        'category' => 'Web Development',
        'category_slug' => 'web-development',
        'featured_image' => 'images/blog/sitefinity-enterprise.jpg',
        'list_excerpt' => 'A practical breakdown of custom website development costs — scope factors, platform choices, integrations, and ongoing maintenance — so you can plan a realistic budget before signing a contract.',
        'excerpt' => 'Guide to budgeting custom web projects based on complexity, integrations, and long-term ownership.',
        'toc' => [
            ['id' => 'cost-drivers', 'label' => 'What drives website development cost'],
            ['id' => 'project-types', 'label' => 'Cost ranges by project type'],
            ['id' => 'hidden-costs', 'label' => 'Costs teams forget to plan for'],
            ['id' => 'reduce-spend', 'label' => 'How to reduce spend without cutting quality'],
            ['id' => 'conclusion', 'label' => 'The bottom line'],
        ],
    ],
    'website-maintenance-after-launch-guide' => [
        'title' => 'Website Maintenance After Launch: A Practical Checklist',
        'date' => 'April 14, 2026',
        'comments' => 0,
        'category' => 'Web Development',
        'category_slug' => 'web-development',
        'featured_image' => 'images/blog/moodle-lms.jpg',
        'list_excerpt' => 'Launch day is not the finish line. This checklist covers security patches, uptime monitoring, content updates, performance tuning, and backup governance for custom websites.',
        'excerpt' => 'Post-launch website maintenance checklist for security, performance, and reliability.',
        'toc' => [
            ['id' => 'why-maintenance', 'label' => 'Why maintenance starts on day one'],
            ['id' => 'security', 'label' => 'Security and patch management'],
            ['id' => 'performance', 'label' => 'Performance and uptime'],
            ['id' => 'content', 'label' => 'Content and CMS operations'],
            ['id' => 'conclusion', 'label' => 'The bottom line'],
        ],
    ],
    'choosing-mobile-app-development-partner' => [
        'title' => 'How to Choose the Right Mobile App Development Partner',
        'date' => 'March 8, 2026',
        'comments' => 0,
        'category' => 'Mobile Apps',
        'category_slug' => 'mobile-apps',
        'featured_image' => 'images/blog/carousel-3.jpg',
        'list_excerpt' => 'Evaluate mobile app development partners on delivery process, platform expertise, security practices, and post-launch support — not just hourly rates or portfolio screenshots.',
        'excerpt' => 'Vendor selection framework for iOS, Android, and cross-platform app development engagements.',
        'toc' => [
            ['id' => 'evaluation', 'label' => 'What to evaluate before you sign'],
            ['id' => 'red-flags', 'label' => 'Red flags to avoid'],
            ['id' => 'engagement', 'label' => 'Engagement models that work'],
            ['id' => 'questions', 'label' => 'Questions to ask in discovery'],
            ['id' => 'conclusion', 'label' => 'The bottom line'],
        ],
    ],
];

$blogPostsListingOrder = [
    'adobe-commerce-cloud-migration-ultimate-guide',
    'amp-with-magento2-fast-loading-pages',
    'magento-security-patches-guide',
    'headless-commerce-performance-flexibility',
    'custom-website-development-cost-guide',
    'website-maintenance-after-launch-guide',
    'choosing-mobile-app-development-partner',
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

function get_blog_carousel_image($slug)
{
    $post = get_blog_post($slug);
    if (!$post) {
        return '';
    }
    if (!empty($post['carousel_image'])) {
        return $post['carousel_image'];
    }
    return isset($post['featured_image']) ? $post['featured_image'] : '';
}

function get_blog_comments_label($count)
{
    $count = (int) $count;
    if ($count === 0) {
        return 'No Comments';
    }
    if ($count === 1) {
        return '1 Comment';
    }
    return $count . ' Comments';
}

function get_blog_post_html($slug)
{
    $post = get_blog_post($slug);
    if (!$post) {
        return '';
    }

    $contentFile = __DIR__ . '/blog-content/' . $slug . '.php';
    if (is_readable($contentFile)) {
        require_once __DIR__ . '/blog-content/_helpers.php';
        ob_start();
        include $contentFile;
        return ob_get_clean();
    }

    $excerpt = htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8');
    return '<p class="lh">' . $excerpt . '</p><p class="lh">This article is part of the SanguineIT knowledge base. For a tailored assessment, <a href="contact-us.php">contact our team</a>.</p>';
}
