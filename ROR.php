<?php
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';
$page_data = [
    'title' => 'Ruby on Rails Development | SanguineIT',
    'description' => 'Ruby on Rails development — SaaS platforms, REST APIs, admin dashboards, and legacy Rails upgrades for maintainable web applications.',
    'keywords' => 'Ruby on Rails development, Rails agency, RoR development, SaaS Rails, SanguineIT',
    'canonical' => sit_base_url() . '/ROR.php',
];
include 'header.php';
?>
		  
				<!--Breadcrumb Area-->
				<section class="breadcrumb-areav2" data-background="images/banner/6.jpg">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-7">
								<div class="bread-titlev2">
									<h1 class="wow fadeInUp" data-wow-delay=".2s" style="color: #fff;">Ruby on Rails Development</h1>
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
									<?php sit_responsive_image('images/about_2/web_1.jpg', 'Ruby on Rails web development services', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<span>Overview</span>
									<h2>Ruby on Rails Engineering for Product Teams</h2>
									<p class="lh">SanguineIT builds Ruby on Rails applications for SaaS startups and enterprises that value convention-over-configuration, rapid feature delivery, and maintainable MVC architecture — with PostgreSQL backends and modern Rails 7+ features.</p>
									<p class="lh">Our Rails engineers deliver CRUD-heavy admin tools, API-first backends, background job processing with Sidekiq, and legacy Rails version upgrades with test coverage baselines.</p>
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
									<h2>Rails capabilities we deliver</h2>
									<p class="lh"><ul class="listing">
									<li><b>SaaS applications —</b> Multi-tenant Rails apps with subscription billing integration.</li>
									<li><b>REST &amp; GraphQL APIs —</b> API-only Rails backends for mobile and SPA frontends.</li>
									<li><b>Background jobs —</b> Sidekiq and ActiveJob for async processing at scale.</li>
									<li><b>Rails upgrades —</b> Version migration with deprecation resolution and test suites.</li>
									<li><b>PostgreSQL tuning —</b> ActiveRecord optimization and N+1 query elimination.</li>
									<li><b>DevOps —</b> Heroku, AWS, and Docker deployment with CI/CD pipelines.</li>
</ul></p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="image-block upset bg-shape wow fadeIn">
									<?php sit_responsive_image('images/about_2/web_2.jpg', 'Rails SaaS and API development', ['class' => 'img-fluid']); ?>
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
									<?php sit_responsive_image('images/about_2/web_3.jpg', 'Ruby on Rails enterprise application engineering', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<h2>Rails apps built for long-term product velocity</h2>
									<p class="lh">Rails accelerates early product development — but only stays fast with disciplined testing, service boundaries, and upgrade cadence. SanguineIT helps teams keep Rails estates healthy through growth stages.</p>
									<p class="lh"><a href="contact-us.php">Contact us</a> for a Rails architecture review.</p>
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
									<span>Services</span>
									<h2>Rails Services</h2>
									<p class="lh mb30">Focused capabilities backed by global delivery experience.</p>
								</div>
								</div>
						</div>
						<div class="row upset link-hover">
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/logo-and-branding.svg" alt="service" class="img-fluid"/></div>
									<h4>Custom Web Applications</h4>
									<p class="lh">Feature-rich apps built on framework conventions and best practices.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service2.svg" alt="service" class="img-fluid"/></div>
									<h4>REST API Development</h4>
									<p class="lh">Secure APIs with authentication, validation, and documentation.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service3.svg" alt="service" class="img-fluid"/></div>
									<h4>Admin &amp; Portal Development</h4>
									<p class="lh">Dashboards and internal tools for business operations.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service4.svg" alt="service" class="img-fluid"/></div>
									<h4>Third-party Integrations</h4>
									<p class="lh">Payment, CRM, ERP, and marketing system connectors.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service5.svg" alt="service" class="img-fluid"/></div>
									<h4>Performance Tuning</h4>
									<p class="lh">Caching, query optimization, and scalable architecture patterns.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service6.svg" alt="service" class="img-fluid"/></div>
									<h4>Maintenance &amp; Support</h4>
									<p class="lh">Security updates, bug fixes, and feature enhancements.</p>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
								<p class="lh">Need a <span>Rails Development Team</span>?</p>
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
