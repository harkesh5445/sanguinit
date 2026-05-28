<?php
if (!isset($kbKey)) {
    $kbKey = "blogs";
}

include "knowledge-base-content.php";

if (!array_key_exists($kbKey, $knowledgeBaseContent)) {
    $kbKey = "blogs";
}

$kb = $knowledgeBaseContent[$kbKey];
include "header.php";
?>

<section class="breadcrumb-areav2" data-background="<?php echo htmlspecialchars($kb["hero_image"], ENT_QUOTES, "UTF-8"); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bread-titlev2">
                    <h1 class="wow fadeInUp text-white" data-wow-delay=".2s"><?php echo htmlspecialchars($kb["title"], ENT_QUOTES, "UTF-8"); ?></h1>
                    <p class="lh mt20 wow fadeInUp text-white" data-wow-delay=".4s"><?php echo htmlspecialchars($kb["intro"], ENT_QUOTES, "UTF-8"); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span><?php echo htmlspecialchars($kb["subtitle"], ENT_QUOTES, "UTF-8"); ?></span>
                    <h2><?php echo htmlspecialchars($kb["title"], ENT_QUOTES, "UTF-8"); ?> Library</h2>
                    <p class="lh">Premium sample content designed for layout preview and editorial planning. Final publishing workflow can later connect CMS data and production assets.</p>
                </div>
            </div>
        </div>
        <div class="row upset link-hover">
            <?php foreach ($kb["items"] as $item): ?>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block">
                        <div class="s-card-icon mb20">
                            <img src="<?php echo htmlspecialchars($item["image"], ENT_QUOTES, "UTF-8"); ?>" alt="<?php echo htmlspecialchars($item["title"], ENT_QUOTES, "UTF-8"); ?>" class="img-fluid"/>
                        </div>
                        <h4><?php echo htmlspecialchars($item["title"], ENT_QUOTES, "UTF-8"); ?></h4>
                        <p class="mt10"><strong><?php echo htmlspecialchars($item["meta"], ENT_QUOTES, "UTF-8"); ?></strong></p>
                        <p class="lh"><?php echo htmlspecialchars($item["summary"], ENT_QUOTES, "UTF-8"); ?></p>
                        <a href="contact-us.php" class="mt20 btn-main bg-btn2 lnk">Request This Resource <span class="circle"></span></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-area pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Need Custom Insights?</span>
                    <h2>Speak With Our Experts About Your Project Goals</h2>
                    <a href="contact-us.php" class="btn-outline">Talk to an Expert <i class="fas fa-chevron-right fa-icon"></i></a>
                    <p class="lh cta-call">Or call us now <a href="tel:(+1)662-300-1685"><i class="fas fa-phone-alt"></i> (+1) 662-300-1685</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"/></div>
    <div class="shape shape-a2"><img src="images/shape/shape-4.svg" alt="shape"/></div>
    <div class="shape shape-a3"><img src="images/shape/shape-13.svg" alt="shape"/></div>
    <div class="shape shape-a4"><img src="images/shape/shape-11.svg" alt="shape"/></div>
</section>

<?php include "footer.php"; ?>
