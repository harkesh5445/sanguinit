<?php
require_once __DIR__ . '/includes/case-studies-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$study = $slug ? get_case_study($slug) : null;

if (!$study) {
    header('Location: case_studies.php');
    exit;
}

require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';

$pageTitle = $study['title'];
$page_data = [
    'title' => $pageTitle . ' | SanguineIT Case Study',
    'description' => $study['summary'],
    'canonical' => sit_base_url() . '/case-study-single.php?slug=' . rawurlencode($slug),
    'og_image' => $study['featured_image'],
];
$bodyHtml = get_case_study_html($slug);

require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('blog-single');
$kbBanner['eyebrow'] = 'Case Study · ' . $study['type_label'];
$kbBanner['title'] = $pageTitle;
$kbBanner['subtitle'] = $study['client'] . ' · ' . $study['industry'] . ' · ' . $study['timeline'];
$kbBanner['bg'] = file_exists(__DIR__ . '/' . $study['featured_image']) ? $study['featured_image'] : $kbBanner['bg'];
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<link rel="stylesheet" href="css/case-study-single.css">

<section class="case-study-single-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <a href="case_studies.php" class="case-study-single-back">&larr; All case studies</a>

                <div class="case-study-single-metrics">
                    <?php foreach ($study['metrics'] as $metric) : ?>
                    <div class="case-study-single-metric">
                        <strong><?php echo sit_h($metric['value']); ?></strong>
                        <span><?php echo sit_h($metric['label']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="case-study-single-gallery">
                    <?php foreach ($study['gallery'] as $gi => $img) : ?>
                    <figure>
                        <?php sit_responsive_image($img, $pageTitle, [
                            'lazy' => $gi > 0,
                            'priority' => $gi === 0 ? 'high' : 'auto',
                        ]); ?>
                    </figure>
                    <?php endforeach; ?>
                </div>

                <div class="case-study-single-body">
                    <?php echo $bodyHtml; ?>
                </div>

                <div class="case-study-single-tech">
                    <h4>Technologies</h4>
                    <ul>
                        <?php foreach ($study['technologies'] as $tech) : ?>
                        <li><?php echo sit_h($tech); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php if (!empty($study['external_url'])) : ?>
                <a href="<?php echo sit_h($study['external_url']); ?>" class="case-study-single-live" target="_blank" rel="noopener noreferrer">View live project <i class="fas fa-external-link-alt"></i></a>
                <?php endif; ?>
            </div>

            <div class="col-lg-4">
                <aside class="case-study-single-sidebar">
                    <h4>Summary</h4>
                    <p class="lh"><?php echo sit_h($study['summary']); ?></p>

                    <h4>Related services</h4>
                    <ul>
                        <?php foreach ($study['service_links'] as $link) : ?>
                        <li><a href="<?php echo sit_h($link['url']); ?>"><?php echo sit_h($link['label']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="contact-us.php" class="case-study-single-cta">Start a similar project</a>

                    <h4 class="mt30">More case studies</h4>
                    <ul class="case-study-single-more">
                        <?php
                        global $caseStudiesListingOrder;
                        $shown = 0;
                        foreach ($caseStudiesListingOrder as $otherSlug) :
                            if ($otherSlug === $slug || $shown >= 4) {
                                continue;
                            }
                            $other = get_case_study($otherSlug);
                            if (!$other) {
                                continue;
                            }
                            $shown++;
                            ?>
                        <li><a href="<?php echo case_study_url($otherSlug); ?>"><?php echo sit_h($other['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="case-study-single-cta-band">
    <div class="container text-center">
        <h3>Ready to build your next platform?</h3>
        <p class="lh">Tell us about your goals — we will propose a delivery plan with milestones, team structure, and transparent estimates.</p>
        <a href="contact-us.php" class="btn-main bg-btn lnk">Request a consultation <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
    </div>
</section>

<?php include 'footer.php'; ?>
