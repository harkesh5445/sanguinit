<?php
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';
$page_data = [
    'title' => 'MySQL Database Development & Support | SanguineIT',
    'description' => 'MySQL database development — schema design, query optimization, replication, cloud migration on AWS RDS and Azure Database for MySQL.',
    'keywords' => 'MySQL development, MySQL DBA, database optimization, MySQL cloud, SanguineIT',
    'canonical' => sit_base_url() . '/MySQL.php',
];
include 'header.php';
?>
		  
				<!--Breadcrumb Area-->
				<section class="breadcrumb-areav2" data-background="images/banner/6.jpg">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-7">
								<div class="bread-titlev2">
									<h1 class="wow fadeInUp" data-wow-delay=".2s" style="color: #fff;">MySQL Database Services</h1>
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
									<?php sit_responsive_image('images/about_2/data_1.jpg', 'MySQL database development and optimization', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<span>Overview</span>
									<h2>MySQL Engineering for Web &amp; SaaS Applications</h2>
									<p class="lh">SanguineIT designs, optimizes, and supports MySQL databases for web applications, ecommerce platforms, and SaaS products — with schema design, indexing strategy, replication, and cloud deployment on AWS RDS and Azure Database for MySQL.</p>
									<p class="lh">Our database engineers work alongside PHP, Laravel, Node.js, and .NET development teams to ensure data layers scale with traffic and remain maintainable through product growth.</p>
									<p class="lh">See also <a href="database-auditing.php">database auditing</a> and <a href="Laravel.php">Laravel development</a>.</p>
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
									<h2>MySQL capabilities we deliver</h2>
									<p class="lh"><ul class="listing">
									<li><b>Schema design —</b> Normalized models with indexing for read-heavy and write-heavy workloads.</li>
									<li><b>Query optimization —</b> EXPLAIN analysis, slow query logs, and index recommendations.</li>
									<li><b>Replication &amp; HA —</b> Primary-replica setup, failover planning, and read scaling.</li>
									<li><b>Cloud migration —</b> On-premise to AWS RDS and Azure Database for MySQL.</li>
									<li><b>Backup &amp; recovery —</b> Point-in-time recovery and tested restore procedures.</li>
									<li><b>Security —</b> Least-privilege access, encryption, and connection hardening.</li>
</ul></p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="image-block upset bg-shape wow fadeIn">
									<?php sit_responsive_image('images/about_2/data_2.jpg', 'MySQL performance tuning and replication', ['class' => 'img-fluid']); ?>
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
									<?php sit_responsive_image('images/about_2/data_3.jpg', 'MySQL enterprise database support', ['class' => 'img-fluid']); ?>
								</div>
							</div>
							<div class="col-lg-8 block-1">
								<div class="common-heading text-l pl25">
									<h2>MySQL databases built for application reliability</h2>
									<p class="lh">Application outages often trace to missing indexes, lock contention, or untested migrations. SanguineIT treats the database as a first-class part of delivery — not an afterthought handed to whoever is available.</p>
									<p class="lh"><a href="contact-us.php">Contact us</a> for a MySQL performance review.</p>
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
									<span>Database Services</span>
									<h2>MySQL Services</h2>
									<p class="lh mb30">Focused capabilities backed by global delivery experience.</p>
								</div>
								</div>
						</div>
						<div class="row upset link-hover">
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/logo-and-branding.svg" alt="service" class="img-fluid"/></div>
									<h4>Schema Design</h4>
									<p class="lh">Normalized models, indexing strategy, and migration-safe DDL planning.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service2.svg" alt="service" class="img-fluid"/></div>
									<h4>Query Optimization</h4>
									<p class="lh">Slow query analysis, execution plans, and performance tuning.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service3.svg" alt="service" class="img-fluid"/></div>
									<h4>High Availability</h4>
									<p class="lh">Replication, failover, and backup strategies for production uptime.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service4.svg" alt="service" class="img-fluid"/></div>
									<h4>Cloud Deployment</h4>
									<p class="lh">Managed database hosting on AWS RDS, Azure SQL, and Atlas.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service5.svg" alt="service" class="img-fluid"/></div>
									<h4>Security &amp; Access Control</h4>
									<p class="lh">Role-based permissions, encryption, and audit logging.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
								<div class="s-block">
									<div class="s-card-icon"><img src="images/icons/service6.svg" alt="service" class="img-fluid"/></div>
									<h4>Migration &amp; Support</h4>
									<p class="lh">Version upgrades, data migration, and ongoing DBA support.</p>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
								<p class="lh">Need <span>MySQL Database Expertise</span>?</p>
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
