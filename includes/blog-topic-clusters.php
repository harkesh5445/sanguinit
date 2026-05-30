<?php

/**
 * Blog topic clusters — pillar hubs and internal linking (SIT-014).
 */
require_once __DIR__ . '/blog-posts-data.php';

$blogTopicClusters = [
    'ecommerce' => [
        'title' => 'Ecommerce & Commerce Platforms',
        'headline' => 'Ecommerce Engineering <strong>Topic Hub</strong>',
        'description' => 'Guides on Adobe Commerce Cloud, Magento performance, security patches, and headless commerce — curated for merchants modernizing storefronts and integrations.',
        'eyebrow' => 'Topic Cluster · Commerce',
        'service_links' => [
            ['label' => 'Ecommerce Development', 'url' => 'ecommerce-web-development.php'],
            ['label' => 'Magento Services', 'url' => 'Magento.php'],
            ['label' => 'Magento Maintenance', 'url' => 'magento-maintenance-services.php'],
        ],
        'category_slugs' => ['adobe-commerce', 'magento', 'headless-commerce'],
    ],
    'cms-portals' => [
        'title' => 'CMS & Enterprise Portals',
        'headline' => 'CMS & Portal <strong>Topic Hub</strong>',
        'description' => 'Articles on Sitefinity upgrades, content governance, and enterprise portal delivery — for teams managing multi-site CMS estates.',
        'eyebrow' => 'Topic Cluster · CMS',
        'service_links' => [
            ['label' => 'Sitefinity Development', 'url' => 'sitefinity.php'],
            ['label' => 'SharePoint Support', 'url' => 'sharepoint-support-services.php'],
            ['label' => 'Custom Web Development', 'url' => 'custom-web-development.php'],
        ],
        'category_slugs' => ['sitefinity'],
    ],
    'enterprise-learning' => [
        'title' => 'Enterprise Learning & LMS',
        'headline' => 'LMS & Training <strong>Topic Hub</strong>',
        'description' => 'Insights on Moodle upgrades, compliance training, and scalable learning platforms for HR and IT teams rolling out digital education programs.',
        'eyebrow' => 'Topic Cluster · LMS',
        'service_links' => [
            ['label' => 'Custom Web Development', 'url' => 'custom-web-development.php'],
            ['label' => 'Application Maintenance', 'url' => 'app-maintenance.php'],
            ['label' => 'Contact Our Team', 'url' => 'contact-us.php'],
        ],
        'category_slugs' => ['lms'],
    ],
];

function get_blog_topic_cluster($topicSlug)
{
    global $blogTopicClusters;
    return isset($blogTopicClusters[$topicSlug]) ? $blogTopicClusters[$topicSlug] : null;
}

function get_blog_topic_cluster_slugs()
{
    global $blogTopicClusters;
    return array_keys($blogTopicClusters);
}

function blog_topic_url($topicSlug)
{
    return 'blog-topic.php?topic=' . rawurlencode($topicSlug);
}

function get_blog_posts_for_topic($topicSlug)
{
    $cluster = get_blog_topic_cluster($topicSlug);
    if (!$cluster) {
        return [];
    }
    global $blogPostsListingOrder;
    $allowed = isset($cluster['category_slugs']) ? $cluster['category_slugs'] : [];
    $posts = [];
    foreach ($blogPostsListingOrder as $slug) {
        $post = get_blog_post($slug);
        if (!$post) {
            continue;
        }
        $cat = isset($post['category_slug']) ? $post['category_slug'] : '';
        if (in_array($cat, $allowed, true)) {
            $posts[$slug] = $post;
        }
    }
    return $posts;
}

function get_blog_topic_for_post($post)
{
    if (!$post || empty($post['category_slug'])) {
        return null;
    }
    global $blogTopicClusters;
    foreach ($blogTopicClusters as $topicSlug => $cluster) {
        if (in_array($post['category_slug'], $cluster['category_slugs'], true)) {
            return $topicSlug;
        }
    }
    return null;
}

function get_related_blog_posts_for_post($slug, $limit = 3)
{
    $post = get_blog_post($slug);
    if (!$post) {
        return [];
    }
    $topic = get_blog_topic_for_post($post);
    if (!$topic) {
        return [];
    }
    $clusterPosts = get_blog_posts_for_topic($topic);
    unset($clusterPosts[$slug]);
    return array_slice($clusterPosts, 0, $limit, true);
}
