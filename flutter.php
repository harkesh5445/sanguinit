<?php
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';
$page_data = [
    'title' => 'Flutter App Development Services | SanguineIT',
    'description' => 'Flutter cross-platform app development — iOS, Android, and web from one Dart codebase with native performance and beautiful Material/Cupertino UI.',
    'keywords' => 'Flutter development, Dart apps, cross-platform mobile, Flutter agency, iOS Android Flutter, SanguineIT',
    'canonical' => sit_base_url() . '/flutter.php',
];
include 'header.php';
?>
		  
				<!--Breadcrumb Area-->
				<section class="breadcrumb-areav2" data-background="images/banner/6.jpg">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-7">
								<div class="bread-titlev2">
									<h1 class="wow fadeInUp" data-wow-delay=".2s" style="color: #fff;">Flutter App Development</h1>
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
									<?php sit_responsive_image('images/about_2/fluit_1.jpg', 'Flutter cross-platform app development services', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<span>Overview</span>
									<h2>Flutter Engineering for Beautiful Cross-Platform Apps</h2>
									<p class="lh">SanguineIT builds Flutter applications for brands and product teams that want pixel-perfect UI on iOS, Android, and web from a single Dart codebase — with near-native performance and faster release cycles for global markets.</p>
									<p class="lh">Our Flutter engineers deliver custom widgets, BLoC and Riverpod state management, Firebase backends, platform channels for native features, and responsive layouts that adapt across phone, tablet, and desktop form factors.</p>
									<p class="lh">From MVP to enterprise rollout, we offer dedicated Flutter squads alongside our <a href="reactnative.php">React Native</a> and native <a href="android.php">Android</a>/<a href="ios.php">iOS</a> practices for the right platform strategy.</p>
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
									<h2>Flutter capabilities we deliver</h2>
									<p class="lh">
									<ul class="listing">
									<li><b>Cross-platform UI —</b> Material and Cupertino designs with custom animations and responsive layouts.</li>
									<li><b>State management —</b> BLoC, Riverpod, and Provider patterns for scalable app architecture.</li>
									<li><b>Platform channels —</b> Native integrations for camera, payments, biometrics, and device sensors.</li>
									<li><b>Firebase &amp; backends —</b> Auth, Firestore, Cloud Functions, and REST API integration.</li>
									<li><b>Web &amp; desktop —</b> Flutter web and desktop targets when you need unified experiences beyond mobile.</li>
									<li><b>Store deployment —</b> App Store and Play Store release automation with crash and analytics setup.</li>
</ul>
</p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="image-block upset bg-shape wow fadeIn">
									<?php sit_responsive_image('images/about_2/fluit_2.jpg', 'Flutter Dart mobile app development', ['class' => 'img-fluid']); ?>
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
									<?php sit_responsive_image('images/about_2/fluit_3.jpg', 'Flutter enterprise mobile application development', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<h2>Flutter apps built for design consistency at scale</h2>
									<p class="lh">Whether you launch a consumer brand app or internal operations tools, SanguineIT aligns Flutter architecture with your design system and integration requirements. We automate golden tests, CI/CD for both stores, and measure outcomes against frame rates, crash-free rates, and time-to-market.</p>
									<p class="lh">View <a href="case_studies.php">case studies</a>, explore our <a href="portfolio.php">portfolio</a>, or <a href="contact-us.php">contact us</a> for a Flutter feasibility assessment.</p>
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
									<span>Mobile Services</span>
									<h2>What We Build</h2>
									<p class="lh mb30">Native and cross-platform mobile engineering for global product teams.</p>
								</div>
							</div>
						</div>
						<div class="row upset link-hover">
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/logo-and-branding.svg" alt="service" class="img-fluid"/></div>
									<h4>Cross-Platform UI</h4>
									<p class="lh">Pixel-perfect Material and Cupertino interfaces across iOS and Android.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service2.svg" alt="service" class="img-fluid"/></div>
									<h4>State Architecture</h4>
									<p class="lh">BLoC and Riverpod patterns for maintainable, testable Flutter apps.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service3.svg" alt="service" class="img-fluid"/></div>
									<h4>Native Integrations</h4>
									<p class="lh">Platform channels for payments, biometrics, and device-specific features.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service4.svg" alt="service" class="img-fluid"/></div>
									<h4>Backend &amp; Firebase</h4>
									<p class="lh">Authentication, databases, and API integration for full-stack mobile products.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service5.svg" alt="service" class="img-fluid"/></div>
									<h4>Flutter Web &amp; Desktop</h4>
									<p class="lh">Extended Flutter targets when unified experiences matter beyond phones.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service6.svg" alt="service" class="img-fluid"/></div>
									<h4>Store Release &amp; Analytics</h4>
									<p class="lh">Dual-store deployment with crash monitoring and performance tracking.</p>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
								<p class="lh">Need a <span>Flutter Development Team</span>?</p>
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
