<?php
require_once __DIR__ . '/seo.php';
$homeFaqs = sit_homepage_faqs();
$faqSchema = sit_faq_schema($homeFaqs);
$faqMid = (int) ceil(count($homeFaqs) / 2);
$faqColA = array_slice($homeFaqs, 0, $faqMid);
$faqColB = array_slice($homeFaqs, $faqMid);
?>
<link rel="stylesheet" href="css/home-premium-faq.css">
<section id="faqs" class="home-premium-faq">
   <div class="home-premium-faq__accent" aria-hidden="true"></div>
   <div class="container">
      <div class="row align-items-start">
         <div class="col-lg-4">
            <div class="home-premium-faq__intro wow fadeInUp" data-wow-delay=".1s">
               <p class="home-premium-faq__eyebrow">Customer FAQ</p>
               <h2 class="home-premium-faq__title">Answers Before You <span>Start Your Project</span></h2>
               <p class="home-premium-faq__lead lh">Clear guidance on how SanguineIT delivers web, mobile, commerce, and cloud programs — from discovery through long-term support.</p>
               <ul class="home-premium-faq__highlights">
                  <li><i class="fas fa-check-circle" aria-hidden="true"></i> US &amp; India delivery teams</li>
                  <li><i class="fas fa-check-circle" aria-hidden="true"></i> Enterprise-grade CMS &amp; commerce</li>
                  <li><i class="fas fa-check-circle" aria-hidden="true"></i> Dedicated or project-based engagement</li>
               </ul>
               <a href="contact-us.php" class="home-premium-faq__cta">Talk to an Expert <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="row home-premium-faq__grid">
               <div class="col-md-6">
                  <div class="home-premium-faq__list" id="homeFaqColA">
                     <?php foreach ($faqColA as $i => $faq) :
                        $collapseId = 'homeFaqA' . $i;
                        $headingId = 'homeFaqHeadingA' . $i;
                        $isFirst = ($i === 0);
                        ?>
                     <article class="home-premium-faq__item">
                        <h3 class="home-premium-faq__question" id="<?php echo $headingId; ?>">
                           <button class="home-premium-faq__toggle <?php echo $isFirst ? '' : 'collapsed'; ?>" type="button" data-toggle="collapse" data-target="#<?php echo $collapseId; ?>" aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" aria-controls="<?php echo $collapseId; ?>">
                              <span><?php echo sit_h($faq['question']); ?></span>
                              <i class="home-premium-faq__icon fas fa-plus" aria-hidden="true"></i>
                           </button>
                        </h3>
                        <div id="<?php echo $collapseId; ?>" class="collapse <?php echo $isFirst ? 'show' : ''; ?>" aria-labelledby="<?php echo $headingId; ?>" data-parent="#homeFaqColA">
                           <div class="home-premium-faq__answer">
                              <p class="lh mb-0"><?php echo sit_h($faq['answer']); ?></p>
                           </div>
                        </div>
                     </article>
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="home-premium-faq__list" id="homeFaqColB">
                     <?php foreach ($faqColB as $i => $faq) :
                        $collapseId = 'homeFaqB' . $i;
                        $headingId = 'homeFaqHeadingB' . $i;
                        ?>
                     <article class="home-premium-faq__item">
                        <h3 class="home-premium-faq__question" id="<?php echo $headingId; ?>">
                           <button class="home-premium-faq__toggle collapsed" type="button" data-toggle="collapse" data-target="#<?php echo $collapseId; ?>" aria-expanded="false" aria-controls="<?php echo $collapseId; ?>">
                              <span><?php echo sit_h($faq['question']); ?></span>
                              <i class="home-premium-faq__icon fas fa-plus" aria-hidden="true"></i>
                           </button>
                        </h3>
                        <div id="<?php echo $collapseId; ?>" class="collapse" aria-labelledby="<?php echo $headingId; ?>" data-parent="#homeFaqColB">
                           <div class="home-premium-faq__answer">
                              <p class="lh mb-0"><?php echo sit_h($faq['answer']); ?></p>
                           </div>
                        </div>
                     </article>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php if ($faqSchema) {
    echo sit_render_json_ld($faqSchema);
} ?>
