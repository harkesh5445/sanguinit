<?php

/**
 * Premium banner copy and HD imagery for Knowledge Base pages.
 * Images: images/kb-banners/ (1920px wide, topic-specific).
 */
function kb_banner_image($filename, $fallback = 'images/banner/9.jpg')
{
    $relative = 'images/kb-banners/' . ltrim($filename, '/');
    $absolute = dirname(__DIR__) . '/' . $relative;
    return file_exists($absolute) ? $relative : $fallback;
}

function kb_get_banner_config($pageKey)
{
    $hd = function ($name, $fallback = 'images/banner/9.jpg') {
        return kb_banner_image($name, $fallback);
    };

    $banners = [
        'blogs' => [
            'eyebrow' => 'SanguineIT Knowledge Base',
            'title' => 'Insights That Move Your Digital Roadmap Forward',
            'subtitle' => 'Practical guidance on web engineering, ecommerce platforms, cloud modernization, and enterprise delivery—from architects and engineers who build in production.',
            'bg' => $hd('blogs.jpg'),
            'bg_position' => 'center 35%',
            'stats' => [
                ['value' => '15+', 'label' => 'Years in digital delivery'],
                ['value' => '350+', 'label' => 'Technology specialists'],
                ['value' => '500+', 'label' => 'Projects shipped globally'],
            ],
        ],
        'articles' => [
            'eyebrow' => 'Knowledge Base · Articles',
            'title' => 'Technology Leadership & Execution Insights',
            'subtitle' => 'Research-backed perspectives on outsourcing, ecommerce architecture, AI adoption, security, and scalable product engineering for growth-focused organizations.',
            'bg' => $hd('articles.jpg'),
            'bg_position' => 'center center',
            'stats' => [
                ['value' => '9', 'label' => 'Expert articles'],
                ['value' => 'B2B & B2C', 'label' => 'Commerce & SaaS focus'],
                ['value' => 'Expert-led', 'label' => 'By SanguineIT practitioners'],
            ],
        ],
        'infographics' => [
            'eyebrow' => 'Knowledge Base · Infographics',
            'title' => 'Visual Intelligence for Complex Technology Decisions',
            'subtitle' => 'Executive-ready infographics on commerce, cloud, cybersecurity, and digital transformation—designed to communicate strategy clearly and fast.',
            'bg' => $hd('infographics.jpg'),
            'bg_position' => 'center center',
            'stats' => [
                ['value' => '8', 'label' => 'Premium visuals'],
                ['value' => 'Executive', 'label' => 'Board-ready formats'],
                ['value' => 'Shareable', 'label' => 'For teams & stakeholders'],
            ],
        ],
        'infographic-single' => [
            'eyebrow' => 'SanguineIT Infographics',
            'title' => '',
            'subtitle' => '',
            'bg' => $hd('infographics.jpg'),
            'bg_position' => 'center center',
            'variant' => 'compact',
        ],
        'whitepapers' => [
            'eyebrow' => 'Knowledge Base · Whitepapers',
            'title' => 'Enterprise Research for Confident Decision-Making',
            'subtitle' => 'In-depth whitepapers on platform strategy, total cost of ownership, compliance, and modernization—grounded in how SanguineIT delivers for global clients.',
            'bg' => $hd('whitepapers.jpg'),
            'bg_position' => 'center 40%',
            'stats' => [
                ['value' => '8', 'label' => 'Research papers'],
                ['value' => 'Executive', 'label' => 'Summary included'],
                ['value' => 'Trusted', 'label' => 'By technology leaders'],
            ],
        ],
        'whitepaper-single' => [
            'eyebrow' => 'SanguineIT Whitepapers',
            'title' => '',
            'subtitle' => '',
            'bg' => $hd('whitepapers.jpg'),
            'bg_position' => 'center 40%',
            'variant' => 'compact',
        ],
        'ebooks' => [
            'eyebrow' => 'Knowledge Base · E-Books',
            'title' => 'A Digital Library Built for Technology Teams',
            'subtitle' => 'Downloadable guides for architecture reviews, vendor evaluation, and delivery planning—curated to keep your teams aligned with what works in the field.',
            'bg' => $hd('ebooks.jpg'),
            'bg_position' => 'center center',
            'stats' => [
                ['value' => '8', 'label' => 'Readable guides'],
                ['value' => 'On-page', 'label' => 'Read in browser'],
                ['value' => 'Practical', 'label' => 'Implementation focused'],
            ],
        ],
        'ebook-single' => [
            'eyebrow' => 'SanguineIT E-Books',
            'title' => '',
            'subtitle' => '',
            'bg' => $hd('ebooks.jpg'),
            'bg_position' => 'center center',
            'variant' => 'compact',
        ],
        'news-events' => [
            'eyebrow' => 'SanguineIT Newsroom',
            'title' => 'NEWSROOM',
            'subtitle' => 'Company announcements, platform security alerts, partnership updates, and industry news from the SanguineIT team.',
            'bg' => $hd('news-events.jpg'),
            'bg_position' => 'center center',
            'variant' => 'newsroom',
            'featured_headline' => 'Adobe November 2025 Security Update: Critical InDesign Vulnerabilities (APSB25-106)',
            'featured_date' => 'November 14, 2025',
            'featured_link' => 'news-single.php?slug=adobe-indesign-security-update-apsb25-106',
        ],
        'videos' => [
            'eyebrow' => 'Knowledge Base · Videos',
            'title' => 'Expert Sessions on the Platforms You Run Every Day',
            'subtitle' => 'Walkthroughs, explainers, and delivery best practices from SanguineIT architects—so your teams stay current without sifting through noise.',
            'bg' => $hd('videos.jpg'),
            'bg_position' => 'center center',
            'stats' => [
                ['value' => '9', 'label' => 'Expert sessions'],
                ['value' => 'Platform-led', 'label' => 'Commerce & cloud'],
                ['value' => 'Team-ready', 'label' => 'Share across orgs'],
            ],
        ],
        'video-single' => [
            'eyebrow' => 'SanguineIT Videos',
            'title' => '',
            'subtitle' => '',
            'bg' => $hd('videos.jpg'),
            'bg_position' => 'center center',
            'variant' => 'compact',
        ],
        'blog-single' => [
            'eyebrow' => 'SanguineIT Blog',
            'title' => '',
            'subtitle' => '',
            'bg' => $hd('blogs.jpg'),
            'bg_position' => 'center 35%',
            'variant' => 'compact',
        ],
        'article-single' => [
            'eyebrow' => 'SanguineIT Articles',
            'title' => '',
            'subtitle' => '',
            'bg' => $hd('articles.jpg', 'images/kb-banners/articles.jpg'),
            'bg_position' => 'center center',
            'variant' => 'compact',
        ],
        'news-single' => [
            'eyebrow' => 'SanguineIT Newsroom',
            'title' => '',
            'subtitle' => '',
            'bg' => $hd('news-events.jpg'),
            'bg_position' => 'center center',
            'variant' => 'compact',
        ],
    ];

    return isset($banners[$pageKey]) ? $banners[$pageKey] : $banners['blogs'];
}
