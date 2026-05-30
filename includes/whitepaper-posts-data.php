<?php

/**
 * Knowledge Base whitepapers metadata and full research content.
 */
$whitepaperPosts = [
    'magento-enhance-online-business' => [
        'title' => 'How You Can Enhance Your Online Business with Magento',
        'date' => 'May 14, 2026',
        'read_time' => '18 min read',
        'author' => 'SanguineIT Commerce Practice',
        'category' => 'Ecommerce',
        'category_slug' => 'ecommerce',
        'featured_image' => 'images/whitepapers/magento-business.jpg',
        'list_summary' => 'A strategic Magento whitepaper on commerce growth, B2B enablement, and phased modernization for global online businesses.',
        'executive_summary' => 'Magento remains a leading choice for mid-market and enterprise merchants who need flexible catalogs, B2B capabilities, and a mature extension ecosystem. This whitepaper outlines capability areas, total cost considerations, and a phased roadmap for measurable revenue impact.',
        'highlights' => [
            ['value' => 'B2B+B2C', 'label' => 'Unified commerce models'],
            ['value' => 'Adobe', 'label' => 'Commerce cloud alignment'],
            ['value' => 'TCO', 'label' => 'Platform economics'],
        ],
        'toc' => [
            ['id' => 'executive-summary', 'label' => 'Executive summary'],
            ['id' => 'market-context', 'label' => 'Market context'],
            ['id' => 'capability-areas', 'label' => 'Capability areas'],
            ['id' => 'implementation-roadmap', 'label' => 'Implementation roadmap'],
            ['id' => 'recommendations', 'label' => 'Recommendations'],
        ],
    ],
    'tco-legacy-vs-cloud-native' => [
        'title' => 'Total Cost of Ownership: Legacy vs Cloud-Native',
        'date' => 'April 12, 2026',
        'read_time' => '20 min read',
        'author' => 'SanguineIT Cloud Architects',
        'category' => 'Cloud',
        'category_slug' => 'cloud',
        'featured_image' => 'images/whitepapers/cloud-tco.jpg',
        'list_summary' => 'A five-year TCO framework comparing legacy and cloud-native platforms across cost, risk, and delivery economics.',
        'executive_summary' => 'Legacy platforms often appear cheaper until hidden costs—incident frequency, release delays, and talent scarcity—are modeled honestly. This whitepaper provides a TCO framework SanguineIT uses with CIOs evaluating cloud-native migration.',
        'highlights' => [
            ['value' => '5-yr', 'label' => 'TCO horizon'],
            ['value' => 'FinOps', 'label' => 'Run-cost modeling'],
            ['value' => 'Risk', 'label' => 'Technical debt factor'],
        ],
        'toc' => [
            ['id' => 'executive-summary', 'label' => 'Executive summary'],
            ['id' => 'cost-drivers', 'label' => 'Cost drivers'],
            ['id' => 'comparison-model', 'label' => 'Comparison model'],
            ['id' => 'migration-economics', 'label' => 'Migration economics'],
            ['id' => 'recommendations', 'label' => 'Recommendations'],
        ],
    ],
    'governance-regulated-saas-platforms' => [
        'title' => 'Governance Patterns for Regulated SaaS Platforms',
        'date' => 'March 25, 2026',
        'read_time' => '17 min read',
        'author' => 'SanguineIT Security & Compliance',
        'category' => 'Compliance',
        'category_slug' => 'compliance',
        'featured_image' => 'images/whitepapers/governance-saas.jpg',
        'list_summary' => 'A governance blueprint for regulated SaaS covering controls, policy automation, and audit-ready operating practices.',
        'executive_summary' => 'Regulated SaaS requires governance embedded in engineering workflows—not annual checklist exercises. This paper documents patterns for access control, change management, data residency, and continuous compliance monitoring.',
        'highlights' => [
            ['value' => 'SOC 2', 'label' => 'Control mapping'],
            ['value' => 'CI/CD', 'label' => 'Policy as code'],
            ['value' => 'Audit', 'label' => 'Evidence automation'],
        ],
        'toc' => [
            ['id' => 'executive-summary', 'label' => 'Executive summary'],
            ['id' => 'regulatory-landscape', 'label' => 'Regulatory landscape'],
            ['id' => 'control-framework', 'label' => 'Control framework'],
            ['id' => 'operating-model', 'label' => 'Operating model'],
            ['id' => 'recommendations', 'label' => 'Recommendations'],
        ],
    ],
    'ai-assisted-engineering-roi' => [
        'title' => 'AI-Assisted Engineering: Risks, Guardrails, and ROI',
        'date' => 'March 8, 2026',
        'read_time' => '19 min read',
        'author' => 'SanguineIT Strategy Group',
        'category' => 'Research',
        'category_slug' => 'research',
        'featured_image' => 'images/whitepapers/ai-engineering.jpg',
        'list_summary' => 'A practical AI engineering ROI guide balancing productivity acceleration with security, IP, and quality guardrails.',
        'executive_summary' => 'Generative AI tools can accelerate delivery when governed. This research paper defines guardrails, measurement approaches, and realistic ROI expectations for engineering organizations adopting AI-assisted development.',
        'highlights' => [
            ['value' => '30%', 'label' => 'Potential task acceleration'],
            ['value' => 'IP', 'label' => 'Data handling policies'],
            ['value' => 'QA', 'label' => 'Quality gates required'],
        ],
        'toc' => [
            ['id' => 'executive-summary', 'label' => 'Executive summary'],
            ['id' => 'use-cases', 'label' => 'High-value use cases'],
            ['id' => 'risk-guardrails', 'label' => 'Risks and guardrails'],
            ['id' => 'roi-measurement', 'label' => 'ROI measurement'],
            ['id' => 'recommendations', 'label' => 'Recommendations'],
        ],
    ],
    'enterprise-resilience-digital-platforms' => [
        'title' => 'Enterprise Resilience Blueprint for Digital Platforms',
        'date' => 'February 20, 2026',
        'read_time' => '18 min read',
        'author' => 'SanguineIT Delivery Office',
        'category' => 'Strategy',
        'category_slug' => 'strategy',
        'featured_image' => 'images/whitepapers/enterprise-resilience.jpg',
        'list_summary' => 'An enterprise resilience blueprint for critical platforms spanning architecture patterns, operations testing, and recovery readiness.',
        'executive_summary' => 'Resilience is a business capability—not only infrastructure redundancy. This blueprint connects SLOs, incident response, chaos practices, and vendor dependencies into an executive-ready operating model.',
        'highlights' => [
            ['value' => '99.9%+', 'label' => 'SLO targets'],
            ['value' => 'RTO/RPO', 'label' => 'Recovery objectives'],
            ['value' => 'DR', 'label' => 'Tested runbooks'],
        ],
        'toc' => [
            ['id' => 'executive-summary', 'label' => 'Executive summary'],
            ['id' => 'resilience-definition', 'label' => 'Defining resilience'],
            ['id' => 'architecture-patterns', 'label' => 'Architecture patterns'],
            ['id' => 'operations', 'label' => 'Operations and testing'],
            ['id' => 'recommendations', 'label' => 'Recommendations'],
        ],
    ],
    'headless-commerce-roi-assessment' => [
        'title' => 'Headless Commerce ROI Assessment Guide',
        'date' => 'February 4, 2026',
        'read_time' => '17 min read',
        'author' => 'SanguineIT Ecommerce Architects',
        'category' => 'Ecommerce',
        'category_slug' => 'ecommerce',
        'featured_image' => 'images/whitepapers/headless-commerce.jpg',
        'list_summary' => 'An ROI assessment framework for headless commerce adoption, composable architecture trade-offs, and implementation risk control.',
        'executive_summary' => 'Headless commerce unlocks channel agility but adds integration complexity. This guide helps leaders model ROI across development cost, time-to-market, conversion impact, and operational overhead before committing architecture.',
        'highlights' => [
            ['value' => 'API-first', 'label' => 'Channel flexibility'],
            ['value' => 'CX', 'label' => 'Experience velocity'],
            ['value' => 'Ops', 'label' => 'Integration cost factor'],
        ],
        'toc' => [
            ['id' => 'executive-summary', 'label' => 'Executive summary'],
            ['id' => 'when-headless', 'label' => 'When headless fits'],
            ['id' => 'roi-model', 'label' => 'ROI model'],
            ['id' => 'implementation-risks', 'label' => 'Implementation risks'],
            ['id' => 'recommendations', 'label' => 'Recommendations'],
        ],
    ],
    'observability-mission-critical-applications' => [
        'title' => 'Observability Strategy for Mission-Critical Applications',
        'date' => 'January 18, 2026',
        'read_time' => '16 min read',
        'author' => 'SanguineIT DevOps Practice',
        'category' => 'Security',
        'category_slug' => 'security',
        'featured_image' => 'images/whitepapers/observability.jpg',
        'list_summary' => 'An observability strategy for mission-critical applications covering telemetry maturity, tooling governance, and incident reduction.',
        'executive_summary' => 'Observability reduces mean time to resolution and prevents alert fatigue when designed holistically. This whitepaper defines a maturity path from basic monitoring to unified telemetry aligned with SRE practices.',
        'highlights' => [
            ['value' => 'MTTR', 'label' => 'Incident reduction'],
            ['value' => 'SLO', 'label' => 'Error budget discipline'],
            ['value' => 'OTel', 'label' => 'Open standards'],
        ],
        'toc' => [
            ['id' => 'executive-summary', 'label' => 'Executive summary'],
            ['id' => 'pillars', 'label' => 'Three pillars'],
            ['id' => 'maturity-model', 'label' => 'Maturity model'],
            ['id' => 'tooling-strategy', 'label' => 'Tooling strategy'],
            ['id' => 'recommendations', 'label' => 'Recommendations'],
        ],
    ],
];

$whitepaperPostsListingOrder = [
    'magento-enhance-online-business',
    'tco-legacy-vs-cloud-native',
    'governance-regulated-saas-platforms',
    'ai-assisted-engineering-roi',
    'enterprise-resilience-digital-platforms',
    'headless-commerce-roi-assessment',
    'observability-mission-critical-applications',
];

function whitepaper_post_url($slug)
{
    return 'whitepaper-single.php?slug=' . rawurlencode($slug);
}

function get_whitepaper_post($slug)
{
    global $whitepaperPosts;
    return isset($whitepaperPosts[$slug]) ? $whitepaperPosts[$slug] : null;
}

function get_whitepaper_post_html($slug)
{
    $post = get_whitepaper_post($slug);
    if (!$post) {
        return '';
    }

    $contentFile = __DIR__ . '/whitepaper-content/' . $slug . '.php';
    if (is_readable($contentFile)) {
        require_once __DIR__ . '/whitepaper-content/_helpers.php';
        ob_start();
        include $contentFile;
        return ob_get_clean();
    }

    return '<p class="wp-p">' . htmlspecialchars($post['list_summary'], ENT_QUOTES, 'UTF-8') . '</p>';
}
