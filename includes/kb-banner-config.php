<?php

/**
 * Premium banner copy and imagery for Knowledge Base pages.
 */
function kb_get_banner_config($pageKey)
{
    $banners = [
        'blogs' => [
            'eyebrow' => 'SanguineIT Knowledge Base',
            'title' => 'Insights That Move Your Digital Roadmap Forward',
            'subtitle' => 'Practical guidance on web engineering, ecommerce platforms, cloud modernization, and enterprise delivery—from architects and engineers who build in production.',
            'bg' => 'images/about_2/data_8.jpg',
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
            'bg' => 'images/about_2/cont_2.jpg',
            'stats' => [
                ['value' => '24+', 'label' => 'Curated articles'],
                ['value' => 'B2B & B2C', 'label' => 'Commerce & SaaS focus'],
                ['value' => 'Expert-led', 'label' => 'By SanguineIT practitioners'],
            ],
        ],
        'infographics' => [
            'eyebrow' => 'Knowledge Base · Infographics',
            'title' => 'Visual Intelligence for Complex Technology Decisions',
            'subtitle' => 'Executive-ready infographics on commerce, cloud, cybersecurity, and digital transformation—designed to communicate strategy clearly and fast.',
            'bg' => 'images/about_2/cation_8.jpg',
            'stats' => [
                ['value' => 'Visual', 'label' => 'Data-rich storytelling'],
                ['value' => 'Multi-topic', 'label' => 'Platforms & industries'],
                ['value' => 'Shareable', 'label' => 'For teams & stakeholders'],
            ],
        ],
        'whitepapers' => [
            'eyebrow' => 'Knowledge Base · Whitepapers',
            'title' => 'Enterprise Research for Confident Decision-Making',
            'subtitle' => 'In-depth whitepapers on platform strategy, total cost of ownership, compliance, and modernization—grounded in how SanguineIT delivers for global clients.',
            'bg' => 'images/about_2/data_4.jpg',
            'stats' => [
                ['value' => 'Deep-dive', 'label' => 'Analyst-grade depth'],
                ['value' => 'Actionable', 'label' => 'Roadmap-ready takeaways'],
                ['value' => 'Trusted', 'label' => 'By technology leaders'],
            ],
        ],
        'ebooks' => [
            'eyebrow' => 'Knowledge Base · E-Books',
            'title' => 'A Digital Library Built for Technology Teams',
            'subtitle' => 'Downloadable guides for architecture reviews, vendor evaluation, and delivery planning—curated to keep your teams aligned with what works in the field.',
            'bg' => 'images/about_2/data_5.jpg',
            'stats' => [
                ['value' => 'On-demand', 'label' => 'Instant access'],
                ['value' => 'Practical', 'label' => 'Implementation focused'],
                ['value' => 'Updated', 'label' => 'Current platform trends'],
            ],
        ],
        'news-events' => [
            'eyebrow' => 'SanguineIT Newsroom',
            'title' => 'NEWSROOM',
            'subtitle' => 'Company announcements, platform security alerts, partnership updates, and industry news from the SanguineIT team.',
            'bg' => 'images/about_2/data_9.jpg',
            'variant' => 'newsroom',
            'featured_headline' => 'Adobe November 2025 Security Update: Critical InDesign Vulnerabilities (APSB25-106)',
            'featured_date' => 'November 14, 2025',
            'featured_link' => 'contact-us.php',
        ],
        'videos' => [
            'eyebrow' => 'Knowledge Base · Videos',
            'title' => 'Expert Sessions on the Platforms You Run Every Day',
            'subtitle' => 'Walkthroughs, explainers, and delivery best practices from SanguineIT architects—so your teams stay current without sifting through noise.',
            'bg' => 'images/about_2/cation_10.jpg',
            'stats' => [
                ['value' => 'Practical', 'label' => 'Real-world demos'],
                ['value' => 'Platform-led', 'label' => 'Commerce & cloud'],
                ['value' => 'Team-ready', 'label' => 'Share across orgs'],
            ],
        ],
    ];

    return isset($banners[$pageKey]) ? $banners[$pageKey] : $banners['blogs'];
}
