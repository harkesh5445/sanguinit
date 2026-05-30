<?php

/**
 * Premium banner copy and HD imagery for Knowledge Base pages.
 * Banners: images/kb-banners/ — Unsplash sky/universe (unchanged by custom deploy).
 * Cards:   images/{blog,articles,...}/ — from images/custom via setup-custom-kb-images.sh
 * Refresh banners: scripts/fetch-all-kb-images.sh
 * Refresh cards:   scripts/setup-custom-kb-images.sh
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
            'subtitle' => 'Authoritative guides on mobile app development, custom websites, cloud architecture, and secure delivery—written for technology leaders building and scaling digital products worldwide.',
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
            'subtitle' => 'In-depth analysis for CTOs, engineering directors, and platform owners—covering architecture decisions, vendor strategy, and execution models for global enterprises.',
            'bg' => $hd('articles.jpg'),
            'bg_position' => 'center center',
            'stats' => [
                ['value' => '9', 'label' => 'Expert articles'],
                ['value' => 'Apps+Web', 'label' => 'Mobile & web focus'],
                ['value' => 'Expert-led', 'label' => 'By SanguineIT practitioners'],
            ],
        ],
        'infographics' => [
            'eyebrow' => 'Knowledge Base · Infographics',
            'title' => 'Visual Intelligence for Complex Technology Decisions',
            'subtitle' => 'Executive briefings on app development, web platforms, cloud, security, and digital transformation—designed for boardrooms and cross-functional leadership teams.',
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
            'subtitle' => 'Analyst-grade research on platform economics, compliance, modernization, and ROI—grounded in how global organizations evaluate and execute technology investments.',
            'bg' => $hd('whitepapers.jpg'),
            'bg_position' => 'center 40%',
            'stats' => [
                ['value' => '7', 'label' => 'Research papers'],
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
            'subtitle' => 'Long-form playbooks for architecture reviews, vendor selection, and delivery planning—built for distributed teams across North America, Europe, and Asia-Pacific.',
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
            'subtitle' => 'Company announcements, security advisories, partnership news, and platform updates—covering the global digital engineering programs SanguineIT delivers.',
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
            'subtitle' => 'Expert-led sessions on mobile apps, custom web development, SharePoint, and cloud—practical knowledge your teams can apply across regions and time zones.',
            'bg' => $hd('videos.jpg'),
            'bg_position' => 'center center',
            'stats' => [
                ['value' => '7', 'label' => 'Expert sessions'],
                ['value' => 'Platform-led', 'label' => 'Apps & cloud'],
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
