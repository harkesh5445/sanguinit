<?php
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';
$page_data = [
    'title' => 'Drupal Maintenance & Support Services | SanguineIT',
    'description' => 'Drupal CMS maintenance and managed support — security patching, module governance, performance tuning, and SLA-backed care for enterprise and government portals.',
    'keywords' => 'Drupal maintenance, Drupal support, Drupal security, module updates, Drupal SLA, CMS support, SanguineIT',
    'canonical' => sit_base_url() . '/drupal-maintenance-and-support.php',
];
include 'header.php';
?>
			  
<!--Breadcrumb Area-->
				<section class="breadcrumb-areav2" data-background="images/banner/6.jpg">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-7">
								<div class="bread-titlev2">
									<h1 class="wow fadeInUp" data-wow-delay=".2s" style="color: #fff;">Drupal Maintenance and Support</h1>
									<!-- <p class="lh mt20 wow fadeInUp text-white" data-wow-delay=".4s">From Startup to Enterprise be ready and don't worry about design and user experience.</p> -->
									<!-- <a href="#" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a> -->
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="statistics-wrap bg-gradient5">
					<div class="container">
						<div class="row small t-ctr mt0">
							<div class="col-lg-3 col-sm-6">
								<div class="statistics">
									<div class="statistics-img">
										<img src="images/icons/deal.svg" alt="happy" class="img-fluid">
									</div>
									<div class="statnumb">
										<span class="counter">450</span>
										<p class="lh">Happy Clients</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="statistics">
									<div class="statistics-img">
										<img src="images/icons/computers.svg" alt="project" class="img-fluid">
									</div>
									<div class="statnumb counter-number">
										<span class="counter">48</span><span>k</span>
										<p class="lh">Projects Done</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="statistics">
									<div class="statistics-img">
										<img src="images/icons/worker.svg" alt="work" class="img-fluid">
									</div>
									<div class="statnumb">
										<span class="counter">95</span><span>k</span>
										<p class="lh">Hours Worked</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="statistics mb0">
									<div class="statistics-img">
										<img src="images/icons/customer-service.svg" alt="support" class="img-fluid">
									</div>
									<div class="statnumb">
										<span class="counter">24</span><span>/</span><span class="counter">7</span>
										<p class="lh">Support Available</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End Hero-->
<!--Start About-->
				<section class="service pad-tb">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="image-block upset bg-shape wow fadeIn">
									<?php sit_responsive_image('images/about_2/Drupal_1.jpg', 'Drupal CMS maintenance and support', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<span>Overview</span>
									<h2>Keep Your Drupal Platform Secure, Performant, and Governance-Ready</h2>
									<p class="lh">Drupal powers complex enterprise portals, government sites, and multi-language content platforms — but deferred security patches, module drift, and configuration sprawl create real operational risk. SanguineIT provides dedicated Drupal maintenance for organizations that need stable publishing without pulling developers off strategic initiatives.</p>
									<p class="lh">Our Drupal engineers apply updates through staging-first workflows, monitor performance and accessibility, govern custom modules, and resolve incidents with documented SLAs. We integrate with your internal IT processes or operate as your extended CMS support team.</p>
									<p class="lh">For new builds, see our <a href="Drupal.php">Drupal development</a> services. For broader platform coverage, explore <a href="website-maintenance-and-support-services.php">website maintenance</a> and <a href="content-management-services.php">CMS services</a>.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="service pad-tb">
					<div class="container">
						<div class="row">
						<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<h2>Drupal support built for enterprise complexity</h2>
									<p class="lh">Drupal estates often combine custom modules, Solr search, SSO, workflow rules, and multi-site configurations. Generic hosting support cannot safely manage those dependencies. Our programs address security advisories, Composer dependency conflicts, cache invalidation issues, and content workflow regressions after upgrades.</p>
									<p class="lh">We establish baselines for page speed, accessibility, and error rates — then track improvements after each release. Every production change is validated on staging with representative content and integration traffic.</p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="image-block upset bg-shape wow fadeIn">
									<?php sit_responsive_image('images/about_2/Drupal_2.jpg', 'Drupal performance and security monitoring', ['class' => 'img-fluid']); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="service pad-tb">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="image-block upset bg-shape wow fadeIn">
									<?php sit_responsive_image('images/about_2/Drupal_1.jpg', 'Drupal CMS maintenance and support', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<h2>What our Drupal support programs deliver</h2>
									<p class="lh">
									<ul class="listing">
									<li><b>Security patch management —</b> Severity-based prioritization aligned with Drupal SA advisories and staged deployment.</li>
									<li><b>Module &amp; core upgrades —</b> Composer-managed updates with regression testing and rollback plans.</li>
									<li><b>Performance optimization —</b> Caching, database tuning, and search index health for high-traffic portals.</li>
									<li><b>Accessibility &amp; SEO checks —</b> Structured content validation and redirect governance after migrations.</li>
									<li><b>Multi-site governance —</b> Configuration management, environment parity, and release documentation.</li>
									<li><b>Incident response —</b> Defined escalation for publishing outages, SSO failures, and integration breaks.</li>
</ul>
</p>
									<p class="lh"><a href="contact-us.php">Request a Drupal maintenance assessment</a> tailored to your modules, integrations, and compliance requirements.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--End About-->
				<!--Start Tech-->
				<div class="techonology-used-">
					<div class="container">
						<ul class="h-scroll tech-icons">
							<li><a href="#"><img src="images/icons/stack-icon1.png" alt="icon"></a></li>
							<li><a href="#"><img src="images/icons/stack-icon2.png" alt="icon"></a></li>
							<li><a href="#"><img src="images/icons/stack-icon3.png" alt="icon"></a></li>
							<li><a href="#"><img src="images/icons/stack-icon4.png" alt="icon"></a></li>
							<li><a href="#"><img src="images/icons/stack-icon5.png" alt="icon"></a></li>
							<li><a href="#"><img src="images/icons/stack-icon6.png" alt="icon"></a></li>
							<li><a href="#"><img src="images/icons/stack-icon7.png" alt="icon"></a></li>
							<li><a href="#"><img src="images/icons/stack-icon8.png" alt="icon"></a></li>
						</ul>
					</div>
				</div>
				<!--End Tech-->
				<!--Start Service-->
				<section class="service-block bg-gradient6 pad-tb">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="common-heading ptag">
									<span>Drupal Support</span>
									<h2>Core Maintenance Services</h2>
									<p class="lh mb30">Focused capabilities for Drupal production estates.</p>
								</div>
							</divur>
						</div>
						<div class="row upset link-hover">
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service4.svg" alt="service" class="img-fluid"/></div>
									<h4>Security &amp; Compliance</h4>
									<p class="lh">Patch cycles, vulnerability remediation, and audit-ready change documentation.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service3.svg" alt="service" class="img-fluid"/></div>
									<h4>Performance Tuning</h4>
									<p class="lh">Cache architecture, database optimization, and load testing before major campaigns.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service2.svg" alt="service" class="img-fluid"/></div>
									<h4>Managed Upgrades</h4>
									<p class="lh">Drupal core and module upgrades validated in staging with regression checklists.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/logo-and-branding.svg" alt="service" class="img-fluid"/></div>
									<h4>Custom Module Support</h4>
									<p class="lh">Maintenance and enhancement of bespoke Drupal modules and integrations.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service5.svg" alt="service" class="img-fluid"/></div>
									<h4>Content Workflow Support</h4>
									<p class="lh">Editor training, workflow fixes, and publishing assistance for marketing teams.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service6.svg" alt="service" class="img-fluid"/></div>
									<h4>Dedicated Drupal Team</h4>
									<p class="lh">Engineers who know your codebase, modules, and release calendar.</p>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
								<p class="lh">Need a <span>Drupal Support SLA</span>?</p>
								<a href="contact-us.php" class="btn-main bg-btn2 lnk">Get Started<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
							</div>
						</div>
					</div>
				</section>
				<!--End Service-->
				<!--Start CTA-->
				<section class="cta-area pad-tb">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="common-heading">
									<span>Let's work together</span>
									<h2>We Love to Listen to Your Requirements</h2>
									<a href="contact-us.php" class="btn-outline">Estimate Project <i class="fas fa-chevron-right fa-icon"></i></a>
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
				<!--End CTA-->

		<?php include __DIR__ . '/includes/page-internal-links.php'; ?>
		<?php include 'footer.php';
