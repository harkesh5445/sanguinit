<?php
if (empty($kbBanner) || !is_array($kbBanner)) {
    return;
}

$bg = isset($kbBanner['bg']) ? $kbBanner['bg'] : 'images/banner/6.jpg';
$eyebrow = isset($kbBanner['eyebrow']) ? $kbBanner['eyebrow'] : 'SanguineIT Knowledge Base';
$title = isset($kbBanner['title']) ? $kbBanner['title'] : '';
$titleHtml = isset($kbBanner['title_html']) ? $kbBanner['title_html'] : '';
$subtitle = isset($kbBanner['subtitle']) ? $kbBanner['subtitle'] : '';
$variant = isset($kbBanner['variant']) ? $kbBanner['variant'] : 'default';
$stats = isset($kbBanner['stats']) && is_array($kbBanner['stats']) ? $kbBanner['stats'] : [];
$featuredHeadline = isset($kbBanner['featured_headline']) ? $kbBanner['featured_headline'] : '';
$featuredDate = isset($kbBanner['featured_date']) ? $kbBanner['featured_date'] : '';
$featuredLink = isset($kbBanner['featured_link']) ? $kbBanner['featured_link'] : 'contact-us.php';
?>
<link rel="stylesheet" href="css/kb-premium-banner.css">
<section class="kb-premium-banner kb-premium-banner--<?php echo htmlspecialchars($variant, ENT_QUOTES, 'UTF-8'); ?>" data-background="<?php echo htmlspecialchars($bg, ENT_QUOTES, 'UTF-8'); ?>" style="--kb-banner-image: url('<?php echo htmlspecialchars($bg, ENT_QUOTES, 'UTF-8'); ?>');">
    <div class="kb-premium-banner__overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-<?php echo $variant === 'newsroom' ? '8 col-xl-7' : '9'; ?>">
                    <div class="kb-premium-banner__content wow fadeInUp" data-wow-delay=".15s">
                        <p class="kb-premium-banner__eyebrow"><?php echo htmlspecialchars($eyebrow, ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php if ($titleHtml !== '') : ?>
                            <h1 class="kb-premium-banner__title"><?php echo $titleHtml; ?></h1>
                        <?php else : ?>
                            <h1 class="kb-premium-banner__title"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
                        <?php endif; ?>

                        <?php if ($variant === 'newsroom' && $featuredHeadline !== '') : ?>
                            <h2 class="kb-premium-banner__featured-headline"><?php echo htmlspecialchars($featuredHeadline, ENT_QUOTES, 'UTF-8'); ?></h2>
                            <?php if ($featuredDate !== '') : ?>
                                <p class="kb-premium-banner__featured-date"><?php echo htmlspecialchars($featuredDate, ENT_QUOTES, 'UTF-8'); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo htmlspecialchars($featuredLink, ENT_QUOTES, 'UTF-8'); ?>" class="kb-premium-banner__cta">Read More</a>
                        <?php elseif ($subtitle !== '') : ?>
                            <p class="kb-premium-banner__subtitle lh"><?php echo htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($stats) && $variant !== 'newsroom') : ?>
                            <ul class="kb-premium-banner__stats" aria-label="Highlights">
                                <?php foreach ($stats as $stat) : ?>
                                    <li>
                                        <strong><?php echo htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></strong>
                                        <span><?php echo htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kb-premium-banner__accent" aria-hidden="true"></div>
</section>
