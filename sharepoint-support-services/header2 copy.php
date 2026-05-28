<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
   <meta charset="utf-8" />

   <!-- SEO Meta Tags -->
   <title><?= isset($page_data['title']) ? $page_data['title'] : 'Sanguine - Web Design & Digital Marketing Agency HTML Sanguine' ?></title>
   <meta name="description" content="<?= isset($page_data['description']) ? $page_data['description'] : 'Creative Agency, Marketing Agency Sanguine' ?>">
   <meta name="keywords" content="<?= isset($page_data['keywords']) ? $page_data['keywords'] : 'Creative Agency, Marketing Agency' ?>">
   <meta name="author" content="SanguineIT Technologies">
   <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

   <!-- Viewport and Compatibility -->
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="theme-color" content="#2e2a8f">

   <!-- Canonical URL -->
   <?php if (isset($page_data['canonical'])): ?>
      <link rel="canonical" href="<?= $page_data['canonical'] ?>">
   <?php endif; ?>

   <!-- Open Graph Meta Tags -->
   <meta property="og:type" content="website">
   <meta property="og:title" content="<?= isset($page_data['title']) ? $page_data['title'] : 'Sanguine - Web Design & Digital Marketing Agency' ?>">
   <meta property="og:description" content="<?= isset($page_data['description']) ? $page_data['description'] : 'Creative Agency, Marketing Agency Sanguine' ?>">
   <meta property="og:url" content="<?= isset($page_data['canonical']) ? $page_data['canonical'] : '' ?>">
   <meta property="og:image" content="<?= isset($page_data['og_image']) ? $page_data['og_image'] : '/images/logo/sanguine-logo2.png' ?>">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="630">
   <meta property="og:site_name" content="SanguineIT Technologies">

   <!-- Twitter Card Meta Tags -->
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="<?= isset($page_data['title']) ? $page_data['title'] : 'Sanguine - Web Design & Digital Marketing Agency' ?>">
   <meta name="twitter:description" content="<?= isset($page_data['description']) ? $page_data['description'] : 'Creative Agency, Marketing Agency Sanguine' ?>">
   <meta name="twitter:image" content="<?= isset($page_data['og_image']) ? $page_data['og_image'] : '/images/logo/sanguine-logo2.png' ?>">

   <!-- Favicon -->
   <link href="/images/favicon.png" rel="icon">
   <link href="/images/favicon.png" rel="shortcut icon">
   <link href="/images/favicon.png" rel="apple-touch-icon">

   <!-- Preload Critical Resources -->
   <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
   <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
   </noscript>

   <!-- Preconnect to external domains -->
   <link rel="preconnect" href="https://cdnjs.cloudflare.com">
   <link rel="preconnect" href="https://cdn.tailwindcss.com">
   <link rel="preconnect" href="https://cdn.jsdelivr.net">
   <link rel="preconnect" href="https://unpkg.com">

   <!-- Critical CSS (inline for fastest loading) -->
   <style>
      /* Critical CSS for above-the-fold content */
      * {
         box-sizing: border-box
      }

      body {
         margin: 0;
         padding: 0;
         font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
         line-height: 1.6;
         color: #333;
         background: #fff
      }

      .main-header {
         position: fixed;
         top: 0;
         left: 0;
         right: 0;
         z-index: 1000;
         background: rgba(255, 255, 255, 0.95);
         backdrop-filter: blur(10px);
         box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
         transition: all 0.3s ease
      }

      .nav-bg-b {
         background: linear-gradient(135deg, #667eea 0%, #764ba2 100%)
      }

      .container-fluid {
         width: 100%;
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 15px
      }

      .menu-header {
         display: flex;
         align-items: center;
         justify-content: space-between;
         padding: 1rem 0
      }

      .nav-brand img {
         height: 40px;
         width: auto
      }

      #hero-section {
         min-height: 115vh;
         display: flex;
         align-items: center;
         position: relative;
         background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
         overflow: hidden;
      }

      @media (max-width: 768px) {
         #hero-section {
            min-height: 212vh !important;

         }
      }

      .diagonal-frame::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
         z-index: 1
      }

      .hero-section .container {
         position: relative;
         z-index: 2;
         width: 100%;
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 15px;
         height: 100%;
         display: flex;
         align-items: center;
      }

      .hero-section h1 {
         font-size: 3rem;
         font-weight: 800;
         margin-bottom: 1.5rem;
         color: #fff;
         background: linear-gradient(45deg, #ffd700, #ff6b9d, #00d4ff);
         -webkit-background-clip: text;
         background-clip: text;
         -webkit-text-fill-color: transparent;
         line-height: 1.2
      }

      .hero-section p {
         font-size: 1.125rem;
         color: rgba(255, 255, 255, 0.9);
         margin-bottom: 2rem
      }

      .contact-form {
         background: rgba(255, 255, 255, 0.1);
         backdrop-filter: blur(10px);
         border-radius: 16px;
         padding: 2rem;
         border: 1px solid rgba(255, 255, 255, 0.2)
      }

      .text-white {
         color: #fff !important
      }

      .mb-4 {
         margin-bottom: 1.5rem
      }

      .mb-6 {
         margin-bottom: 2rem
      }

      .mt-5 {
         margin-top: 3rem
      }

      @media (max-width:768px) {
         #hero-section {
            min-height: calc(100vh - 80px);
            padding: 2rem 0;
         }

         .hero-section h1 {
            font-size: 2rem
         }

         .hero-section p {
            font-size: 1rem
         }

         .contact-form {
            padding: 1.5rem
         }
      }

      @media (max-width: 480px) {
         #hero-section {
            min-height: calc(100vh - 60px);
            padding: 1.5rem 0;
         }

         .hero-section .container {
            padding: 0 1rem;
         }

         .hero-section h1 {
            font-size: 1.75rem;
            line-height: 1.3;
            margin-bottom: 1rem;
         }

         .hero-section p {
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
         }

         .contact-form {
            padding: 1rem;
            margin-top: 2rem;
         }

         .mt-5 {
            margin-top: 1rem;
         }
      }

      /* Support for dynamic viewport height on mobile */
      @supports (height: 100dvh) {
         @media (max-width: 768px) {
            #hero-section {
               min-height: calc(100dvh - 80px);
            }
         }

         @media (max-width: 480px) {
            #hero-section {
               min-height: calc(100dvh - 60px);
            }
         }
      }

      /* .main-header.sticky {
         height: 85px !important;
      } */

      .main-header .container-fluid .menu-header {
         height: 85px !important;
         padding-top: 1px;
      }

      .preloader {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
         background-size: 400% 400%;
         animation: gradientShift 8s ease infinite;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         z-index: 9999;
         transition: opacity 0.8s ease-out, transform 0.8s ease-out;
         font-family: 'Poppins', sans-serif;
      }

      .preloader.fade-out {
         opacity: 0;
         transform: scale(0.9);
         pointer-events: none;
      }

      .preloader-content {
         text-align: center;
         color: white;
         max-width: 400px;
         padding: 0 20px;
      }

      .spinner-container {
         position: relative;
         margin-bottom: 30px;
      }

      .spinner {
         width: 80px;
         height: 80px;
         border: 4px solid rgba(255, 255, 255, 0.2);
         border-radius: 50%;
         border-top-color: #ffffff;
         border-right-color: #ffffff;
         animation: spin 1.2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
         position: relative;
      }

      .spinner::before {
         content: '';
         position: absolute;
         top: 50%;
         left: 50%;
         width: 60px;
         height: 60px;
         border: 3px solid rgba(255, 255, 255, 0.1);
         border-radius: 50%;
         border-left-color: rgba(255, 255, 255, 0.8);
         transform: translate(-50%, -50%);
         animation: spin 0.8s linear infinite reverse;
      }

      .spinner::after {
         content: '';
         position: absolute;
         top: 50%;
         left: 50%;
         width: 40px;
         height: 40px;
         border: 2px solid rgba(255, 255, 255, 0.1);
         border-radius: 50%;
         border-bottom-color: rgba(255, 255, 255, 0.6);
         transform: translate(-50%, -50%);
         animation: spin 0.6s ease-in-out infinite;
      }

      .loading-text {
         font-size: 24px;
         font-weight: 600;
         margin-bottom: 15px;
         opacity: 0;
         animation: fadeInUp 1s ease-out 0.5s forwards;
         position: relative;
         overflow: hidden;
      }

      .loading-text::after {
         content: '|';
         animation: blink 1s infinite;
         color: rgba(255, 255, 255, 0.8);
      }

      .loading-subtext {
         font-size: 16px;
         font-weight: 400;
         opacity: 0.9;
         margin-bottom: 20px;
         opacity: 0;
         animation: fadeInUp 1s ease-out 1s forwards;
         letter-spacing: 0.5px;
      }

      .loading-message {
         font-size: 14px;
         font-weight: 300;
         opacity: 0.8;
         min-height: 20px;
         opacity: 0;
         animation: fadeInUp 1s ease-out 1.5s forwards;
         font-style: italic;
         transition: opacity 0.3s ease-in-out;
      }

      .progress-bar {
         width: 200px;
         height: 3px;
         background: rgba(255, 255, 255, 0.2);
         border-radius: 10px;
         margin: 20px auto 0;
         overflow: hidden;
         opacity: 0;
         animation: fadeInUp 1s ease-out 2s forwards;
      }

      .progress-fill {
         height: 100%;
         background: linear-gradient(90deg, #ffffff, rgba(255, 255, 255, 0.8), #ffffff);
         background-size: 200% 100%;
         border-radius: 10px;
         width: 0%;
         animation: progressFill 3s ease-out 2.5s forwards, shimmer 1.5s ease-in-out infinite;
      }

      @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
      }

      @keyframes gradientShift {
         0%, 100% { background-position: 0% 50%; }
         50% { background-position: 100% 50%; }
      }

      @keyframes fadeInUp {
         0% {
            opacity: 0;
            transform: translateY(30px);
         }
         100% {
            opacity: 1;
            transform: translateY(0);
         }
      }

      @keyframes progressFill {
         0% { width: 0%; }
         100% { width: 100%; }
      }

      @keyframes shimmer {
         0% { background-position: 200% 0; }
         100% { background-position: -200% 0; }
      }

      @keyframes pulse {
         0%, 100% { opacity: 1; }
         50% { opacity: 0.7; }
      }

      @keyframes blink {
         0%, 50% { opacity: 1; }
         51%, 100% { opacity: 0; }
      }

      .loading-dots {
         display: inline-block;
         animation: pulse 1.5s ease-in-out infinite;
      }

      /* Floating particles effect */
      .preloader::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-image: 
            radial-gradient(2px 2px at 40px 60px, rgba(255,255,255,0.3), transparent),
            radial-gradient(2px 2px at 90px 40px, rgba(255,255,255,0.2), transparent),
            radial-gradient(1px 1px at 130px 80px, rgba(255,255,255,0.25), transparent),
            radial-gradient(1px 1px at 160px 30px, rgba(255,255,255,0.2), transparent);
         background-repeat: repeat;
         background-size: 200px 100px;
         animation: float 6s ease-in-out infinite;
         pointer-events: none;
      }

      @keyframes float {
         0%, 100% { transform: translateY(0px); }
         50% { transform: translateY(-10px); }
      }

      /* Responsive Design for Mobile */
      @media (max-width: 768px) {
         .preloader-content {
            max-width: 320px;
            padding: 0 15px;
         }

         .spinner {
            width: 60px;
            height: 60px;
            border-width: 3px;
         }

         .spinner::before {
            width: 45px;
            height: 45px;
            border-width: 2px;
         }

         .spinner::after {
            width: 30px;
            height: 30px;
            border-width: 2px;
         }

         .loading-text {
            font-size: 20px;
         }

         .loading-subtext {
            font-size: 14px;
         }

         .loading-message {
            font-size: 12px;
         }

         .progress-bar {
            width: 150px;
         }
      }

      @media (max-width: 480px) {
         .preloader-content {
            max-width: 280px;
            padding: 0 10px;
         }

         .spinner {
            width: 50px;
            height: 50px;
         }

         .spinner::before {
            width: 35px;
            height: 35px;
         }

         .spinner::after {
            width: 25px;
            height: 25px;
         }

         .loading-text {
            font-size: 18px;
         }

         .loading-subtext {
            font-size: 13px;
         }

         .loading-message {
            font-size: 11px;
         }

         .progress-bar {
            width: 120px;
         }
      }
   </style>

   <!-- Load CSS asynchronously -->
   <link rel="preload" href="../css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
   <noscript>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
   </noscript>

   <link rel="preload" href="../css/plugin.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
   <noscript>
      <link rel="stylesheet" href="../css/plugin.min.css">
   </noscript>

   <!-- Font Awesome with defer -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" media="print" onload="this.media='all'">
   <noscript>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   </noscript>

   <!-- TailwindCSS -->
   <script src="https://cdn.tailwindcss.com" defer></script>
   <!-- <link href="tailwind.css" rel="stylesheet"> -->
   <!-- Swiper CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" media="print" onload="this.media='all'">
   <noscript>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
   </noscript>

   <!-- Main Stylesheets -->
   <link href="style2.css" rel="stylesheet">
   <link href="../css/responsive.css" rel="stylesheet">
   <link href="../css/portfolio.css" rel="stylesheet">
   <link href="custom.css" rel="stylesheet">

   <!-- Defer non-critical JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>
   <script src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js" defer></script>
   <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body>

   <!-- Enhanced Preloader for engaging loading experience -->
   <div class="preloader" id="preloader">
      <div class="preloader-content">
         <div class="spinner-container">
            <div class="spinner"></div>
         </div>
         <div class="loading-text">Sanguine IT</div>
         <div class="loading-subtext">Crafting Digital Excellence</div>
         <div class="loading-message" id="loadingMessage">Initializing your experience<span class="loading-dots">...</span></div>
         <div class="progress-bar">
            <div class="progress-fill"></div>
         </div>
      </div>
   </div>

   <!--Start Header -->
   <header class="nav-bg-b main-header navfix fixed-top menu-white header-pr">
      <div class="container-fluid m-pad">
         <div class="menu-header">
            <div class="dsk-logo">
               <a class="nav-brand" href="index.php">
                  <img src="/images/logo/sanguine-logo2.png" alt="Logo" class="mega-white-logo" />
                  <img src="/images/logo/sanguine-logo2.png" alt="Logo" class="mega-darks-logo" />
                  <!-- <span style="color: #fff; font-weight: 900; font-size:30px;">Sanguine</span> -->
               </a>
            </div>
            <div class="custom-nav" role="navigation">
               <ul class="nav-list">
                  <li class="sbmenu rpdropdown">
                     <a href="#" class="menu-links">Company</a>
                     <div class="nx-dropdown menu-dorpdown">
                        <div class="sub-menu-section">
                           <div class="sub-menu-center-block">
                              <div class="sub-menu-column smfull">
                                 <ul class="list">
                                    <li><a href="about.php">About Us </a> </li>
                                    <li><a href="about.php#why-choose-us">Why Choose Us </a> </li>
                                    <li><a href="clients.php">Clients</a> </li>
                                    <li><a href="testimonials.php">Testimonials </a> </li>
                                    <li><a href="contact-us.php">Contact Us </a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="sbmenu">
                     <a href="#" class="menu-links">Services</a>
                     <div class="nx-dropdown">
                        <div class="sub-menu-section">
                           <div class="container">
                              <div class="col-md-12">
                                 <div class="sub-menu-center-block">
                                    <div class="sub-menu-column">
                                       <div class="menuheading">Mobility</div>
                                       <ul class="list">
                                          <li><a href="android.php">Android</a></li>
                                          <li><a href="ios.php">IOS</a></li>
                                          <li><a href="phonegap.php">PhoneGap</a></li>
                                          <li><a href="xamarin.php">Xamarin</a></li>
                                          <li><a href="ionic.php">Ionic</a></li>
                                          <li><a href="reactnative.php">React Native</a></li>
                                          <li><a href="flutter.php">Flutter </a></li>
                                          <li><a href="firebase.php">Firebase </a></li>
                                          <li><a href="#">AWS Mobile Hub</a></li>
                                       </ul>
                                    </div>
                                    <div class="sub-menu-column">
                                       <div class="menuheading">Application Support</div>
                                       <ul class="list">
                                          <li><a href="sitefinity.php">Sitefinity Support</a></li>
                                          <li><a href="magento-maintenance-services.php">Magento Maintenance Services</a></li>
                                          <li><a href="sharepoint-support-services.php">Sharepoint Support Services</a></li>
                                          <li><a href="#">PHP Maintenance & Support</a></li>
                                          <li><a href="drupal-maintenance-and-support.php">Drupal Support And Maintenance</a></li>
                                          <li><a href="wordpress-maintenance-services.php">WordPress Maintenance Support</a></li>
                                          <li><a href="joomla-maintenance-and-support.php">Joomla Support & Maintenance</a></li>
                                          <li><a href="app-maintenance.php">App Maintenance </a></li>
                                          <li><a href="website-maintenance-and-support-services.php">Website Maintenance </a></li>
                                          <li><a href="application-recovery.php">Application Recovery </a></li>
                                          <li><a href="dotnet-migration.php">.NET migration</a></li>
                                          <li><a href="legacy-systems-migration.php">Legacy Systems Migration</a></li>
                                          <li><a href="new-technology-upgrade-dotnet-and-java.php"> New Technology upgrade- .NET & JAVA</a></li>
                                       </ul>
                                    </div>
                                    <div class="sub-menu-column">
                                       <div class="menuheading">Web Development</div>
                                       <ul class="list">
                                          <li><a href="custom-web-development.php">Custom Web Development</a></li>
                                          <li><a href="ecommerce-web-development.php">eCommerce Development </a></li>
                                          <li><a href="aspdotnet-development.php">Asp.net Development</a></li>
                                          <li><a href="opensource-technology.php">Open Source Technology</a></li>
                                          <li><a href="content-management-services.php">Content Management </a></li>
                                          <li><a href="progressive-web-app.php">Progressive Web App </a></li>
                                          <li><a href="multilingual-website-development.php">Multilingual Website Development </a></li>
                                       </ul>
                                    </div>
                                    <div class="sub-menu-column">
                                       <div class="menuheading">Auditing</div>
                                       <ul class="list">
                                          <li><a href="application-auditing-services.php">Application Auditing</a></li>
                                          <li><a href="full-website-audit.php">Full Website Audit</a></li>
                                          <li><a href="web-analytics.php">Web Analytics</a></li>
                                          <li><a href="security-auditing.php">Security Auditing</a></li>
                                          <li><a href="database-auditing.php">Database Auditing</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="sbmenu">
                     <a href="#" class="menu-links">TECHNOLOGIES</a>
                     <div class="nx-dropdown">
                        <div class="sub-menu-section">
                           <div class="container">
                              <div class="sub-menu-center-block">
                                 <div class="sub-menu-column">
                                    <div class="menuheading">Mobility</div>
                                    <ul class="list">
                                       <li><a href="android.php">Android</a></li>
                                       <li><a href="ios.php">IOS</a></li>
                                       <li><a href="phonegap.php">PhoneGap</a></li>
                                       <li><a href="xamarin.php">Xamarin</a></li>
                                       <li><a href="ionic.php">Ionic</a></li>
                                       <li><a href="reactnative.php">React Native</a></li>
                                       <li><a href="flutter.php">Flutter </a></li>
                                       <li><a href="firebase.php">Firebase </a></li>
                                       <li><a href="#">AWS Mobile Hub</a></li>
                                    </ul>
                                 </div>
                                 <div class="sub-menu-column">
                                    <div class="menuheading">CMS & Commerce</div>
                                    <ul class="list">
                                       <li><a href="WordPress.php">WordPress</a></li>
                                       <li><a href="Joomla.php">Joomla</a></li>
                                       <li><a href="Cart.php">Open Cart</a></li>
                                       <li><a href="PrestaShop.php">PrestaShop </a></li>
                                       <li><a href="Magento.php">Magento</a></li>
                                       <li><a href="Shopify.php">Shopify</a></li>
                                       <li><a href="Drupal.php">Drupal</a></li>
                                    </ul>
                                    <div class="menuheading" style="margin-top:50px;">MarkUp</div>
                                    <ul class="list">
                                       <li><a href="HTML5.php">HTML5</a></li>
                                       <li><a href="CSS3.php">CSS3</a></li>
                                       <li><a href="JavaScript.php">JavaScript</a></li>
                                       <li><a href="AngularJS.php">AngularJS</a></li>
                                    </ul>
                                 </div>
                                 <div class="sub-menu-column">
                                    <div class="menuheading" style="margin-top:40px;">Database</div>
                                    <ul class="list">
                                       <li><a href="MySQL.php">MySQL</a></li>
                                       <li><a href="PostGres.php">PostGres</a></li>
                                       <li><a href="Mongo.php">Mongo DB</a></li>
                                       <li><a href="SQLite.php">SQLite</a></li>
                                       <li><a href="MSSQL.php">MSSQL</a></li>
                                       <li><a href="Oracle.php">Oracle</a></li>
                                    </ul>
                                 </div>
                                 <div class="sub-menu-column">
                                    <div class="menuheading">Web Development & FullStack</div>
                                    <ul class="list">
                                       <li><a href="Python.php">Python</a></li>
                                       <li><a href="MEAN-Stack.php">MEAN Stack</a></li>
                                       <li><a href="Electron-JS.php">Electron JS</a></li>
                                       <li><a href="Cake-php.php">Cake PHP</a></li>
                                       <li><a href="Code-Igniter.php">Code Igniter</a></li>
                                       <li><a href="Laravel.php">Laravel</a></li>
                                       <li><a href="NodeJS.php">NodeJS</a></li>
                                       <li><a href="Microsoft.php">Microsoft .Net</a></li>
                                       <li><a href="ReactJs.php">ReactJs</a></li>
                                       <li><a href="Redux.php">Redux</a></li>
                                       <li><a href="ROR.php">ROR</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="sbmenu">
                     <a href="#" class="menu-links">Industries</a>
                     <div class="nx-dropdown">
                        <div class="sub-menu-section">
                           <div class="container">
                              <div class="sub-menu-center-block">
                                 <div class="sub-menu-column">
                                    <ul class="list">
                                       <li><a href="banking-and-finance.php">Banking and Finance</a></li>
                                       <li><a href="education-and-e-learning-sector.php">Education and e-Learning Sector</a></li>

                                    </ul>
                                 </div>
                                 <div class="sub-menu-column">
                                    <ul class="list">
                                       <li><a href="energy-and-utilities.php">Energy and Utilities</a></li>
                                       <li><a href="healthcare-and-life-science.php">Healthcare & Lifescience</a></li>

                                    </ul>
                                 </div>
                                 <div class="sub-menu-column">
                                    <ul class="list">
                                       <li><a href="information-technology-industry.php">Information Technology Industry</a></li>
                                       <li><a href="retail-and-consumer-products.php">Retail and consumer products</a></li>

                                    </ul>
                                 </div>
                                 <div class="sub-menu-column">
                                    <ul class="list">
                                       <li><a href="technology-and-communication.php">Technology and Communication</a></li>
                                       <li><a href="travel-and-hospitality.php">Travel and Hospitality</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="sbmenu">
                     <a href="case_studies.php" class="menu-links">Case Studies </a>
                  </li>
                  <li class="sbmenu rpdropdown">
                     <a href="#" class="menu-links">Knowledge Base</a>
                     <div class="nx-dropdown menu-dorpdown">
                        <div class="sub-menu-section">
                           <div class="sub-menu-center-block">
                              <div class="sub-menu-column smfull">
                                 <ul class="list">
                                    <li><a href="#">Blogs</a> </li>
                                    <li><a href="#">News & Events</a> </li>
                                    <li><a href="#">Articles</a> </li>
                                    <li><a href="#">Videos </a> </li>
                                    <li><a href="#">Infographics</a> </li>
                                    <li><a href="#">Ebooks</a> </li>
                                    <li><a href="#">Whitepapers</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <a href="#" class="menu-links right-bddr">&nbsp;</a>
                     <!--menu right border-->
                  <li style="display: inline-block;">
                     <a href="tel:(+1)662-300-1685" class="btn-round-  btn-br bg-btn" style="margin-right: 5px;"><i class="fas fa-phone-alt"></i></a>
                  </li>
                  <li style="display: inline-block;">
                     <a href="https://wa.me/16623001685" class="btn-round-  btn-br bg-btn" target="_blank" style="margin-right: 3px;"><i class="fab fa-whatsapp"></i></a>
                  </li>
                  <li style="display: inline-block;">
                     <a href="contact-us.php" class="btn-br bg-btn3 btshad-b2 lnk" style="    padding: 13px 12px;
    font-size: 13px;
    margin-left: 3px;
    font-weight: 500;">Request A Quote <span class="circle"></span></a>
                  </li>
               </ul>
            </div>
            <div class="mobile-menu2">
               <ul class="mob-nav2">
                  <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1" data-toggle="modal" data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
                  <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
               </ul>
            </div>
         </div>
         <!--Mobile Menu-->
         <nav id="main-nav">
            <ul class="first-nav">
               <li>
                  <a>Company</a>
                  <ul>
                     <li><a href="about.php">About Us </a> </li>
                     <li><a href="about.php#why-choose-us">Why Choose Us </a> </li>
                     <li><a href="clients.php">Clients</a> </li>
                     <li><a href="testimonials.php">Testimonials </a> </li>
                     <li><a href="#">News and Events</a> </li>
                     <li><a href="contact-us.php">Contact Us </a> </li>


                  </ul>
               </li>
               <li>
                  <a>Services</a>
                  <ul>
                     <li><a href="android.php">Android</a></li>
                     <li><a href="ios.php">IOS</a></li>
                     <li><a href="phonegap.php">PhoneGap</a></li>
                     <li><a href="xamarin.php">Xamarin</a></li>
                     <li><a href="ionic.php">Ionic</a></li>
                     <li><a href="reactnative.php">React Native</a></li>
                     <li><a href="flutter.php">Flutter </a></li>
                     <li><a href="firebase.php">Firebase </a></li>
                     <li><a href="#">AWS Mobile Hub</a></li>

                     <li><a href="sitefinity.php">Sitefinity Support</a></li>
                     <li><a href="magento-maintenance-services.php">Magento Maintenance Services</a></li>
                     <li><a href="sharepoint-support-services.php">Sharepoint Support Services</a></li>
                     <li><a href="#">PHP Maintenance & Support</a></li>
                     <li><a href="drupal-maintenance-and-support.php">Drupal Support And Maintenance</a></li>
                     <li><a href="wordpress-maintenance-services.php">WordPress Maintenance Support</a></li>
                     <li><a href="joomla-maintenance-and-support.php">Joomla Support & Maintenance</a></li>
                     <li><a href="app-maintenance.php">App Maintenance </a></li>
                     <li><a href="website-maintenance-and-support-services.php">Website Maintenance </a></li>
                     <li><a href="application-recovery.php">Application Recovery </a></li>
                     <li><a href="dotnet-migration.php">.NET migration</a></li>
                     <li><a href="legacy-systems-migration.php">Legacy Systems Migration</a></li>
                     <li><a href="new-technology-upgrade-dotnet-and-java.php"> New Technology upgrade- .NET & JAVA</a></li>


                     <li><a href="custom-web-development.php">Custom Web Development</a></li>
                     <li><a href="ecommerce-web-development.php">eCommerce Development </a></li>
                     <li><a href="aspdotnet-development.php">Asp.net Development</a></li>
                     <li><a href="opensource-technology.php">Open Source Technology</a></li>
                     <li><a href="content-management-services.php">Content Management </a></li>
                     <li><a href="progressive-web-app.php">Progressive Web App </a></li>
                     <li><a href="multilingual-website-development.php">Multilingual Website Development </a></li>


                     <li><a href="application-auditing-services.php">Application Auditing</a></li>
                     <li><a href="full-website-audit.php">Full Website Audit</a></li>
                     <li><a href="web-analytics.php">Web Analytics</a></li>
                     <li><a href="security-auditing.php">Security Auditing</a></li>
                     <li><a href="database-auditing.php">Database Auditing</a></li>
                  </ul>
               </li>
               <li>
                  <a>TECHNOLOGIES</a>
                  <ul>
                     <li><a href="#">Mobility</a></li>
                     <li><a href="#">Android</a></li>
                     <li><a href="#">IOS</a></li>
                     <li><a href="#">PhoneGap</a></li>
                     <li><a href="#">Xamarin</a></li>
                     <li><a href="#">Ionic</a></li>
                     <li><a href="#">React Native</a></li>
                     <li><a href="#">Flutter </a></li>
                     <li><a href="#">Firebase </a></li>
                     <li><a href="#">AWS Mobile Hub</a></li>
                     <li><a href="#">CMS & Commerce</a></li>
                     <li><a href="#">WordPress</a></li>
                     <li><a href="#">Joomla</a></li>
                     <li><a href="#">Open Cart</a></li>
                     <li><a href="#">PrestaShop </a></li>
                     <li><a href="#">Magento</a></li>
                     <li><a href="#">Shopify</a></li>
                     <li><a href="#">Drupal</a></li>
                     <li><a href="#">MarkUp</a></li>
                     <li><a href="#">HTML5</a></li>
                     <li><a href="#">CSS3</a></li>
                     <li><a href="#">JavaScript</a></li>
                     <li><a href="#">AngularJS</a></li>
                     <li><a href="#">Database</a></li>
                     <li><a href="#">MySQL</a></li>
                     <li><a href="#">PostGres</a></li>
                     <li><a href="#">Mongo DB</a></li>
                     <li><a href="#">SQLite</a></li>
                     <li><a href="#">MSSQL</a></li>
                     <li><a href="#">Oracle</a></li>
                     <li><a href="#">Web Development & FullStack</a></li>
                     <li><a href="#">Python</a></li>
                     <li><a href="#">MEAN Stack</a></li>
                     <li><a href="#">MERN Stack</a></li>
                     <li><a href="#">Electron JS</a></li>
                     <li><a href="#">Cake PHP</a></li>
                     <li><a href="#">Code Igniter</a></li>
                     <li><a href="#">Laravel</a></li>
                     <li><a href="#">NodeJS</a></li>
                     <li><a href="#">Microsoft .Net</a></li>
                     <li><a href="#">ReactJs</a></li>
                     <li><a href="#">Redux</a></li>
                     <li><a href="#">ROR</a></li>
                  </ul>
               </li>
               <li>
                  <a>Industries</a>
                  <ul>

                     <li><a href="banking-and-finance.php">Banking and Finance</a></li>
                     <li><a href="education-and-e-learning-sector.php">Education and e-Learning Sector</a></li>
                     <li><a href="energy-and-utilities.php">Energy and Utilities</a></li>
                     <li><a href="healthcare-and-life-science.php">Healthcare & Lifescience</a></li>

                     <li><a href="information-technology-industry.php">Information Technology Industry</a></li>
                     <li><a href="retail-and-consumer-products.php">Retail and consumer products</a></li>

                     <li><a href="technology-and-communication.php">Technology and Communication</a></li>
                     <li><a href="travel-and-hospitality.php">Travel and Hospitality</a></li>

                  </ul>
               </li>
               <li>
                  <a href="case_studies.php">Case Studies </a>
               </li>
               <li>
                  <a href="#">Knowledge Base</a>
                  <ul>
                     <li><a href="#">Blogs</a> </li>
                     <li><a href="#">News & Events</a> </li>
                     <li><a href="#">Articles</a> </li>
                     <li><a href="#">Videos </a> </li>
                     <li><a href="#">Infographics</a> </li>
                     <li><a href="#">Ebooks</a> </li>
                     <li><a href="#">Whitepapers</a> </li>
                  </ul>
               </li>
            </ul>
            <ul class="bottom-nav">
               <li class="prb">
                  <a href="tel:+11111111111">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                        <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                              c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                              c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                              C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                     </svg>
                  </a>
               </li>
               <li class="prb">
                  <a href="mailto:somewebmedia@gmail.com">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                     </svg>
                  </a>
               </li>
               <li class="prb">
                  <a href="skype:Sanguine.company?call">
                     <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                     </svg>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </header>
   <!--Mobile contact-->
   <div class="popup-modal1">
      <div class="modal" id="menu-popup">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="common-heading">
                     <h4 class="mt0 mb0">Write a Message</h4>
                  </div>
                  <button type="button" class="closes" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
                  <div class="form-block fdgn2 mt10 mb10">
                     <form action="#" method="post" name="feedback-form">
                        <div class="fieldsets row">
                           <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                           <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                           <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                           <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                           <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                        </div>
                        <div class="fieldsets mt20 pb20">
                           <button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Mobile contact-->
   <!--End Header -->