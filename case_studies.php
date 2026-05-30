<?php
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/case-studies-data.php';
require_once __DIR__ . '/includes/image-helpers.php';

$page_data = [
    'title' => 'Case Studies | SanguineIT Client Success Stories',
    'description' => 'Explore SanguineIT case studies across web, mobile, ecommerce, and cloud — real outcomes from enterprise digital engineering projects.',
    'canonical' => sit_base_url() . '/case_studies.php',
];
include 'header.php';

/**
 * Build filter slug from label (derived at runtime — data file unchanged).
 */
function cs_page_filter_slug($label)
{
    return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($label)), '-');
}

$typeFilters = [
    'website' => 'Website',
    'mobile-app' => 'Mobile App',
];
?>
<link rel="stylesheet" href="css/case-studies-page.css">
<link rel="stylesheet" href="css/content-pages-typography.css">

<!-- Hero banner -->
<section class="cs-hero" style="background-image: url('images/case-study/cs-hero.jpg');">
    <div class="cs-hero__box">
        <h1>Case Studies</h1>
        <ul class="cs-hero__breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Case Studies</li>
        </ul>
    </div>
</section>

<!-- Filter bar -->
<div class="cs-filters-wrap">
    <div class="cs-filters cs-filters--primary" role="tablist" aria-label="Filter case studies by type">
        <button type="button" class="cs-filter-btn is-active" data-filter="all">All</button>
        <?php foreach ($typeFilters as $filterSlug => $filterLabel) : ?>
        <button type="button" class="cs-filter-btn" data-filter="<?php echo sit_h($filterSlug); ?>"><?php echo sit_h($filterLabel); ?></button>
        <?php endforeach; ?>
    </div>
</div>

<!-- Case study cards -->
<section class="cs-list" id="csList">
    <?php
    $cardIndex = 0;
    foreach ($caseStudiesListingOrder as $csSlug) :
        $csItem = get_case_study($csSlug);
        if (!$csItem) {
            continue;
        }

        $isDark = ($cardIndex % 2 === 0);
        $cardClass = $isDark ? 'cs-card--dark' : 'cs-card--light';
        $imageSrc = !empty($csItem['featured_image']) ? $csItem['featured_image'] : 'images/case-study/img-1.jpg';

        $filterTokens = [];
        if (!empty($csItem['type'])) {
            $filterTokens[] = cs_page_filter_slug($csItem['type']);
        }
        if (!empty($csItem['technologies'])) {
            foreach ($csItem['technologies'] as $tech) {
                $filterTokens[] = cs_page_filter_slug($tech);
            }
        }
        $filterAttr = implode(' ', array_unique($filterTokens));

        $tags = [];
        if (!empty($csItem['type_label'])) {
            $tags[] = $csItem['type_label'];
        }
        if (!empty($csItem['industry'])) {
            $tags[] = $csItem['industry'];
        }
        if (!empty($csItem['timeline'])) {
            $tags[] = $csItem['timeline'];
        }
        $imageOptions = [
            'class' => 'cs-card__img',
            'lazy' => $cardIndex > 0,
            'priority' => $cardIndex === 0 ? 'high' : 'auto',
        ];
        ?>
    <article class="cs-card <?php echo $cardClass; ?>" data-filters="<?php echo sit_h($filterAttr); ?>">
        <div class="cs-card__inner">
            <?php if ($isDark) : ?>
            <div class="cs-card__panel">
                <p class="cs-card__eyebrow"><?php echo sit_h($csItem['client']); ?> &middot; <?php echo sit_h($csItem['type_label']); ?></p>
                <h2 class="cs-card__title"><a href="<?php echo case_study_url($csSlug); ?>"><?php echo sit_h($csItem['title']); ?></a></h2>
                <p class="cs-card__summary lh"><?php echo sit_h($csItem['summary']); ?></p>
                <?php if (!empty($csItem['technologies'])) : ?>
                <ul class="cs-card__tags">
                    <?php foreach (array_slice($csItem['technologies'], 0, 4) as $tech) : ?>
                    <li><?php echo sit_h($tech); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <a href="<?php echo case_study_url($csSlug); ?>" class="cs-card__btn">Read more</a>
            </div>
            <div class="cs-card__media">
                <?php sit_responsive_image($imageSrc, $csItem['title'], $imageOptions); ?>
                <div class="cs-card__logo" aria-hidden="true"><?php echo sit_h($csItem['client']); ?></div>
            </div>
            <?php else : ?>
            <div class="cs-card__media">
                <?php sit_responsive_image($imageSrc, $csItem['title'], $imageOptions); ?>
                <div class="cs-card__logo" aria-hidden="true"><?php echo sit_h($csItem['client']); ?></div>
            </div>
            <div class="cs-card__panel">
                <p class="cs-card__eyebrow"><?php echo sit_h($csItem['client']); ?> &middot; <?php echo sit_h($csItem['type_label']); ?></p>
                <h2 class="cs-card__title"><a href="<?php echo case_study_url($csSlug); ?>"><?php echo sit_h($csItem['title']); ?></a></h2>
                <p class="cs-card__summary lh"><?php echo sit_h($csItem['summary']); ?></p>
                <?php if (!empty($csItem['technologies'])) : ?>
                <ul class="cs-card__tags">
                    <?php foreach (array_slice($csItem['technologies'], 0, 4) as $tech) : ?>
                    <li><?php echo sit_h($tech); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <a href="<?php echo case_study_url($csSlug); ?>" class="cs-card__btn">Read more</a>
            </div>
            <?php endif; ?>
        </div>
    </article>
        <?php
        $cardIndex++;
    endforeach;
    ?>
</section>

<!-- What clients say -->
<section class="cs-testimonial">
    <div class="container">
        <h2 class="cs-testimonial__title">What Client Says</h2>
        <div class="cs-testimonial__slide">
            <div class="cs-testimonial__avatar">
                <?php sit_responsive_image('images/client/reviewer-a.jpg', 'William, business owner'); ?>
            </div>
            <div>
                <p class="cs-testimonial__quote lh">&ldquo;Outstanding mobile app development company! Their unmatched expertise shines from concept to execution, delivering top-notch solutions. Highly recommend their innovative approach for seamless app development.&rdquo;</p>
                <p class="cs-testimonial__author">William</p>
                <p class="cs-testimonial__role">Business Owner</p>
            </div>
        </div>
        <p class="cs-testimonial__link"><a href="testimonials.php">View all testimonials &rarr;</a></p>
    </div>
</section>

<!-- Client logos -->
<section class="cs-clients-band">
    <div class="container">
        <h2>Some of Our Happy Customers</h2>
        <div class="cs-clients-band__logos">
            <?php
            $clientLogos = [
                ['images/client/devex.png', 'Devex'],
                ['images/client/snooplay.png', 'Snooplay'],
                ['images/client/Firstcry.png', 'Firstcry'],
                ['images/client/firki.png', 'Firki'],
                ['images/client/seesaw.png', 'Seesaw'],
            ];
            foreach ($clientLogos as $logo) :
                ?>
            <?php sit_responsive_image($logo[0], $logo[1]); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cs-cta">
    <h2>Let&rsquo;s discuss your project?</h2>
    <p>Tell us about your goals and we&rsquo;ll share how SanguineIT can help you deliver.</p>
    <a href="contact-us.php" class="cs-cta__btn">Contact Us</a>
</section>

<script>
(function () {
    var buttons = document.querySelectorAll('.cs-filter-btn');
    var cards = document.querySelectorAll('.cs-card[data-filters]');

    function applyFilter(filter) {
        cards.forEach(function (card) {
            var tokens = (card.getAttribute('data-filters') || '').split(/\s+/).filter(Boolean);
            var show = filter === 'all' || tokens.indexOf(filter) !== -1;
            card.classList.toggle('is-hidden', !show);
        });
    }

    function setActiveButton(filter) {
        buttons.forEach(function (b) {
            b.classList.toggle('is-active', b.getAttribute('data-filter') === filter);
        });
    }

    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var filter = btn.getAttribute('data-filter');
            setActiveButton(filter);
            applyFilter(filter);
        });
    });
})();
</script>

<?php include __DIR__ . '/includes/page-internal-links.php'; ?>
<?php include 'footer.php'; ?>
