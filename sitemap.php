<?php
/**
 * Dynamic XML sitemap — visit /sitemap.php or use generated sitemap.xml via rewrite.
 */
header('Content-Type: application/xml; charset=utf-8');

require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/blog-posts-data.php';
require_once __DIR__ . '/includes/article-posts-data.php';
require_once __DIR__ . '/includes/news-posts-data.php';
require_once __DIR__ . '/includes/case-studies-data.php';

$base = rtrim(SIT_SITE_URL, '/');
$urls = [
    '/',
    '/about.php',
    '/contact-us.php',
    '/case_studies.php',
    '/clients.php',
    '/testimonials.php',
    '/blogs.php',
    '/articles.php',
    '/news-events.php',
    '/videos.php',
    '/infographics.php',
    '/ebooks.php',
    '/whitepapers.php',
    '/custom-web-development.php',
    '/ecommerce-web-development.php',
    '/sharepoint-support-services.php',
    '/app-maintenance.php',
    '/Magento.php',
    '/sitefinity.php',
];

foreach (array_keys($blogPosts) as $slug) {
    $urls[] = '/blog-single.php?slug=' . rawurlencode($slug);
}
if (isset($caseStudies) && is_array($caseStudies)) {
    foreach (array_keys($caseStudies) as $slug) {
        $urls[] = '/case-study-single.php?slug=' . rawurlencode($slug);
    }
}
if (isset($articlePosts) && is_array($articlePosts)) {
    foreach (array_keys($articlePosts) as $slug) {
        $urls[] = '/article-single.php?slug=' . rawurlencode($slug);
    }
}
if (isset($newsPosts) && is_array($newsPosts)) {
    foreach (array_keys($newsPosts) as $slug) {
        $urls[] = '/news-single.php?slug=' . rawurlencode($slug);
    }
}

$urls = array_unique($urls);
$today = gmdate('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $path) {
    $loc = $base . $path;
    echo "  <url>\n";
    echo '    <loc>' . htmlspecialchars($loc, ENT_XML1) . "</loc>\n";
    echo '    <lastmod>' . $today . "</lastmod>\n";
    echo "    <changefreq>weekly</changefreq>\n";
    echo "    <priority>0.8</priority>\n";
    echo "  </url>\n";
}
echo "</urlset>\n";
