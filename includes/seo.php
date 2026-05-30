<?php

/**
 * Site-wide SEO helpers — meta, canonical, JSON-LD.
 * Set $page_data before including header.php:
 *   title, description, keywords, canonical, og_image, robots, json_ld (array)
 */
if (!defined('SIT_SITE_URL')) {
    define('SIT_SITE_URL', 'https://sanguineit.com');
}

if (!defined('SIT_SITE_NAME')) {
    define('SIT_SITE_NAME', 'SanguineIT Technologies');
}

function sit_base_url()
{
    if (php_sapi_name() === 'cli') {
        return rtrim(SIT_SITE_URL, '/');
    }
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : parse_url(SIT_SITE_URL, PHP_URL_HOST);
    return rtrim($scheme . '://' . $host, '/');
}

function sit_current_url()
{
    $base = sit_base_url();
    $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $path = strtok($uri, '?');
    if ($path === '' || $path === false) {
        $path = '/';
    }
    return $base . $path;
}

function sit_h($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function sit_auto_title_from_script()
{
    $script = basename(isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'index.php', '.php');
    if ($script === 'index') {
        return 'SanguineIT | Web, Mobile & Digital Engineering Partner';
    }
    $label = str_replace(['-', '_'], ' ', $script);
    $label = ucwords($label);
    return $label . ' | ' . SIT_SITE_NAME;
}

function sit_auto_description_from_script()
{
    $script = basename(isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'index.php', '.php');
    if ($script === 'index') {
        return 'SanguineIT delivers web development, mobile apps, ecommerce, cloud modernization, and managed digital engineering for enterprises worldwide.';
    }
    return 'Expert ' . str_replace(['-', '_'], ' ', $script) . ' services from SanguineIT — strategy, delivery, and long-term support.';
}

function sit_resolve_meta($page_data = [])
{
    if (!is_array($page_data)) {
        $page_data = [];
    }

    $title = !empty($page_data['title']) ? $page_data['title'] : sit_auto_title_from_script();
    $description = !empty($page_data['description']) ? $page_data['description'] : sit_auto_description_from_script();
    $canonical = !empty($page_data['canonical']) ? $page_data['canonical'] : sit_current_url();
    $ogImage = !empty($page_data['og_image']) ? $page_data['og_image'] : (sit_base_url() . '/images/logo/sanguine-logo2.png');
    if (strpos($ogImage, 'http') !== 0) {
        $ogImage = sit_base_url() . '/' . ltrim($ogImage, '/');
    }

    return [
        'title' => $title,
        'description' => $description,
        'keywords' => isset($page_data['keywords']) ? $page_data['keywords'] : 'SanguineIT, web development, mobile apps, digital engineering',
        'canonical' => $canonical,
        'og_image' => $ogImage,
        'robots' => isset($page_data['robots']) ? $page_data['robots'] : 'index, follow, max-image-preview:large',
        'json_ld' => isset($page_data['json_ld']) && is_array($page_data['json_ld']) ? $page_data['json_ld'] : [],
    ];
}

function sit_organization_schema()
{
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => SIT_SITE_NAME,
        'url' => SIT_SITE_URL,
        'logo' => SIT_SITE_URL . '/images/logo/sanguine-logo2.png',
        'email' => 'info@sanguineit.com',
        'telephone' => '+1-662-300-1685',
        'foundingDate' => '2002',
        'sameAs' => [
            'https://www.facebook.com/Sanguineit',
            'https://twitter.com/sanguineit',
            'https://www.linkedin.com/company/sanguineit',
        ],
        'address' => [
            [
                '@type' => 'PostalAddress',
                'streetAddress' => 'A-165, First Floor, Sec-62',
                'addressLocality' => 'Noida',
                'addressRegion' => 'U.P.',
                'postalCode' => '201301',
                'addressCountry' => 'IN',
            ],
            [
                '@type' => 'PostalAddress',
                'streetAddress' => '488, Department Lake',
                'addressLocality' => 'Brooklyn',
                'addressRegion' => 'NY',
                'postalCode' => '11203',
                'addressCountry' => 'US',
            ],
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+1-662-300-1685',
            'contactType' => 'customer service',
            'email' => 'info@sanguineit.com',
            'areaServed' => 'Worldwide',
            'availableLanguage' => ['English'],
        ],
    ];
}

function sit_faq_schema(array $faqs)
{
    $entities = [];
    foreach ($faqs as $faq) {
        if (empty($faq['question']) || empty($faq['answer'])) {
            continue;
        }
        $entities[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ];
    }
    if (!$entities) {
        return null;
    }
    return [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $entities,
    ];
}

function sit_blog_posting_schema(array $post, $slug)
{
    return sit_article_schema($post, $slug, 'blog-single.php', 'BlogPosting');
}

function sit_article_schema(array $post, $slug, $script, $type = 'Article')
{
    $image = isset($post['featured_image']) ? $post['featured_image'] : '';
    if ($image && strpos($image, 'http') !== 0) {
        $image = sit_base_url() . '/' . ltrim($image, '/');
    }
    $description = !empty($post['excerpt']) ? $post['excerpt'] : (isset($post['list_excerpt']) ? $post['list_excerpt'] : (isset($post['list_summary']) ? $post['list_summary'] : ''));
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => $type,
        'headline' => $post['title'],
        'description' => $description,
        'url' => sit_base_url() . '/' . $script . '?slug=' . rawurlencode($slug),
        'author' => [
            '@type' => 'Organization',
            'name' => SIT_SITE_NAME,
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => SIT_SITE_NAME,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => sit_base_url() . '/images/logo/sanguine-logo2.png',
            ],
        ],
        'mainEntityOfPage' => sit_base_url() . '/' . $script . '?slug=' . rawurlencode($slug),
    ];
    if ($image) {
        $schema['image'] = [$image];
    }
    if (!empty($post['date'])) {
        $schema['datePublished'] = $post['date'];
    }
    return $schema;
}

function sit_video_object_schema(array $post, $slug)
{
    $image = isset($post['featured_image']) ? $post['featured_image'] : '';
    if ($image && strpos($image, 'http') !== 0) {
        $image = sit_base_url() . '/' . ltrim($image, '/');
    }
    $description = !empty($post['list_summary']) ? $post['list_summary'] : (isset($post['excerpt']) ? $post['excerpt'] : '');
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'VideoObject',
        'name' => $post['title'],
        'description' => $description,
        'url' => sit_base_url() . '/video-single.php?slug=' . rawurlencode($slug),
        'uploadDate' => !empty($post['date']) ? $post['date'] : '',
        'publisher' => [
            '@type' => 'Organization',
            'name' => SIT_SITE_NAME,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => sit_base_url() . '/images/logo/sanguine-logo2.png',
            ],
        ],
    ];
    if ($image) {
        $schema['thumbnailUrl'] = $image;
    }
    if (!empty($post['video_url'])) {
        $schema['contentUrl'] = $post['video_url'];
    }
    if (!empty($post['duration'])) {
        $schema['duration'] = $post['duration'];
    }
    return $schema;
}

function sit_render_json_ld($data)
{
    if (empty($data)) {
        return '';
    }
    $json = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    if ($json === false) {
        return '';
    }
    return '<script type="application/ld+json">' . $json . '</script>' . "\n";
}

function sit_render_head_meta(array $meta)
{
    echo '<title>' . sit_h($meta['title']) . "</title>\n";
    echo '<meta name="description" content="' . sit_h($meta['description']) . '">' . "\n";
    echo '<meta name="keywords" content="' . sit_h($meta['keywords']) . '">' . "\n";
    echo '<meta name="author" content="SanguineIT">' . "\n";
    echo '<meta name="robots" content="' . sit_h($meta['robots']) . '">' . "\n";
    echo '<link rel="canonical" href="' . sit_h($meta['canonical']) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:site_name" content="' . sit_h(SIT_SITE_NAME) . '">' . "\n";
    echo '<meta property="og:title" content="' . sit_h($meta['title']) . '">' . "\n";
    echo '<meta property="og:description" content="' . sit_h($meta['description']) . '">' . "\n";
    echo '<meta property="og:url" content="' . sit_h($meta['canonical']) . '">' . "\n";
    echo '<meta property="og:image" content="' . sit_h($meta['og_image']) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . sit_h($meta['title']) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . sit_h($meta['description']) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . sit_h($meta['og_image']) . '">' . "\n";
}

function sit_homepage_faqs()
{
    return [
        [
            'question' => 'What services does SanguineIT provide?',
            'answer' => 'SanguineIT delivers custom web and mobile development, ecommerce platforms (Magento, Adobe Commerce, Shopify), CMS solutions (Sitefinity, WordPress, SharePoint), cloud modernization, application maintenance, and dedicated engineering teams for global clients.',
        ],
        [
            'question' => 'Which industries do you work with?',
            'answer' => 'We partner with organizations in banking and finance, healthcare, retail, education, travel, energy, and technology — from mid-market firms to enterprise teams that need scalable digital platforms.',
        ],
        [
            'question' => 'Do you offer ongoing support after launch?',
            'answer' => 'Yes. Our application maintenance, security patching, performance optimization, and managed support services keep production systems secure, fast, and aligned with your roadmap after go-live.',
        ],
        [
            'question' => 'Can SanguineIT help with ecommerce migrations?',
            'answer' => 'We plan and execute migrations to Adobe Commerce Cloud, Magento, and headless commerce architectures — including data migration, integration testing, SEO-safe cutovers, and post-launch optimization.',
        ],
        [
            'question' => 'Do you provide dedicated developers or project-based teams?',
            'answer' => 'Both. You can hire dedicated engineers embedded in your workflow, or engage us for fixed-scope projects with defined milestones. We align the model to your budget, timeline, and internal capacity.',
        ],
        [
            'question' => 'What SharePoint and Sitefinity expertise do you offer?',
            'answer' => 'We build and support SharePoint intranets, document workflows, and integrations, plus Sitefinity CMS implementations — upgrades, custom modules, multi-site governance, and performance tuning for enterprise portals.',
        ],
        [
            'question' => 'Where are your delivery teams located?',
            'answer' => 'SanguineIT operates from Noida, India and Brooklyn, NY with clients across the US, Europe, and APAC. Our follow-the-sun model supports overlapping hours for stand-ups, releases, and production support.',
        ],
        [
            'question' => 'How does SanguineIT handle project communication?',
            'answer' => 'Every engagement includes a named project lead, shared dashboards, sprint demos, and documented acceptance criteria. We use modern PM tools so stakeholders always see progress, blockers, and release plans.',
        ],
        [
            'question' => 'What is your typical project timeline?',
            'answer' => 'Discovery workshops usually take one to two weeks. MVPs often ship in eight to sixteen weeks depending on scope. Enterprise programs run in phased releases so you can validate value before expanding investment.',
        ],
        [
            'question' => 'How do I start a project with SanguineIT?',
            'answer' => 'Share your goals, timeline, and technology stack on our contact page. We will schedule a discovery call, outline a delivery approach, and provide a transparent estimate tailored to your scope.',
        ],
    ];
}
