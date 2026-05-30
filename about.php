<?php
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';
$page_data = [
    'title' => 'About SanguineIT | Global Web, Mobile & Commerce Engineering',
    'description' => 'SanguineIT is a digital engineering company with delivery teams in the US and India — building web, mobile, ecommerce, CMS, and cloud platforms for enterprises worldwide since 2002.',
    'keywords' => 'about SanguineIT, digital engineering company, software development India, web development company USA, offshore development team',
    'canonical' => sit_base_url() . '/about.php',
];
include "header.php" ?>
  <!--Breadcrumb Area-->
  <section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-menu">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">About Us</a></li>
                </ul>
              </div>
              <div class="bread-title">
                <h1 class="h2">About SanguineIT</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start About-->
  <section class="about-agency pad-tb block-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 v-center">
          <div class="about-image">
            <?php sit_responsive_image('images/about_2/cro.png', 'SanguineIT digital engineering team', ['class' => 'img-fluid', 'priority' => 'high']); ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="common-heading text-l ">
            <span>About Us</span>
            <h2>Your Digital Engineering Partner</h2>
            <p class="lh">SanguineIT is a product and services company helping organizations design, build, and maintain web platforms, mobile applications, ecommerce storefronts, and enterprise CMS solutions. With delivery centers in Noida, India and Brooklyn, NY, we support clients across North America, Europe, and APAC with transparent communication and measurable outcomes.</p>
            <p class="lh">Our teams combine UX discovery, full-stack engineering, and long-term support so you can launch faster and operate with confidence after go-live. From Magento and Adobe Commerce to Sitefinity, SharePoint, and custom web stacks, we align technology choices with your roadmap — not the other way around.</p>
			<p class="lh">Founded in 2002, SanguineIT has grown through repeat engagements and referrals from clients who value reliable delivery, clear ownership, and engineers who think like product partners. Explore our <a href="case_studies.php">case studies</a>, read <a href="testimonials.php">client testimonials</a>, or <a href="contact-us.php">start a conversation</a> about your next initiative.</p>
          </div>
          <div class="row in-stats small about-statistics">
            <div class="col-lg-4 col-sm-4">
              <div class="statistics">
                <div class="statnumb counter-number">
                  <span class="counter">450</span>
                  <p class="lh">Happy Clients</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="statistics">
                <div class="statnumb">
                  <span class="counter">95</span><span>k</span>
                  <p class="lh">Hours Worked</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="statistics mb0">
                <div class="statnumb counter-number">
                  <span class="counter">850</span>
                  <p class="lh">Projects Done</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="about-agency pad-tb block-1" id="our-vision">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-6">
          <div class="common-heading text-l ">
            <span>Our Vision</span>
            <h2>Help Every Client Build Platforms That Last</h2>
            <p class="lh">Our goal is simple: help business partners succeed with technology that is secure, maintainable, and aligned to real operational needs. We believe long-term relationships are built on honest scoping, fair commercial terms, and delivery teams that take ownership beyond the initial launch.</p>
            <p class="lh">Over two decades, SanguineIT has evolved from a web development studio into a full-spectrum digital engineering partner — serving retailers, healthcare organizations, education providers, and technology companies that need scalable platforms, not one-off projects. We invest continuously in commerce, CMS, cloud, and mobile capabilities so our clients stay competitive as markets change.</p>
          </div>
         
        </div>
		 <div class="col-lg-6 v-center">
            <div class="about-image">
            <?php sit_responsive_image('images/about_2/cro_1.png', 'SanguineIT vision and global delivery', ['class' => 'img-fluid']); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End About-->
  <!--Start why-choose-->
  <section class="why-choose pad-tb" id="why-choose-us">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="common-heading">
            <span>Why SanguineIT</span>
            <h2 class="mb30">Why Choose Us</h2>
			<p class="lh">We combine global delivery experience with a client-first mindset — proactive communication, practical advice, and engineers who care about your outcomes as much as you do.</p>
          </div>
        </div>
      </div>
      <div class="row upset">
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="images/icons/research.svg" alt="service" class="img-fluid"/></div>
            <h4>Global Delivery Experience</h4>
            <p class="lh">Our teams work with agencies and enterprises worldwide, bringing cross-border collaboration, timezone coverage, and proven playbooks for distributed software delivery.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="images/icons/chat.svg" alt="service" class="img-fluid"/></div>
            <h4>Client-Centric Approach</h4>
            <p class="lh">We do not just execute tickets — we ask questions, challenge assumptions, and recommend improvements that protect your investment and accelerate time to value.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="images/icons/monitor.svg" alt="service" class="img-fluid"/></div>
            <h4>Responsive, Supportive Teams</h4>
            <p class="lh">Dedicated project leads, clear status updates, and engineers who listen to feedback — so you always know where your initiative stands and what comes next.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="images/icons/trasparency.svg" alt="service" class="img-fluid"/></div>
            <h4>100% IP Protection</h4>
            <p class="lh">Strict confidentiality agreements, secure development environments, and governance practices that protect your code, data, and intellectual property throughout every engagement.</p>
          </div>
        </div>
      </div>
	  
	  <div class="row upset">
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="images/icons/research.svg" alt="service" class="img-fluid"/></div>
            <h4>Structured Project Management</h4>
            <p class="lh">Agile delivery with documented milestones, demo cadences, and acceptance criteria — so projects ship on schedule without sacrificing quality or visibility.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="images/icons/chat.svg" alt="service" class="img-fluid"/></div>
            <h4>Skilled Engineering Teams</h4>
            <p class="lh">We hire and retain developers, designers, and architects who thrive in client-facing environments — continuously learning and contributing to your success, not just closing tasks.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="images/icons/monitor.svg" alt="service" class="img-fluid"/></div>
            <h4>Proven Track Record</h4>
            <p class="lh">Hundreds of delivered projects across web, mobile, and commerce — with references available from current and past clients who can speak to our delivery quality firsthand.</p>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--End why-choose-->

  <?php include __DIR__ . '/includes/page-internal-links.php'; ?>

  <?php include "footer.php" ?>