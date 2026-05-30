<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Microsoft SharePoint Development Services</title>
    <meta name="description" content="Creative Agency, Marketing Agency Sanguine">
      <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="robots" content="noindex, nofollow">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- <meta name="theme-color" content="#2e2a8f"> -->
      <!--website-favicon-->
	  
	  
      <link href="images/favicon.png" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/css/intlTelInput.css"/>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/intlTelInput.min.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/plugin.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Sanguine-style-->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <link href="css/portfolio.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
          html, body {
            width: 100%;
        }

        
        .diagonal-frame {
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        .tech-pattern {
            background-image: url('https://www.orangemantra.com//wp-content/uploads/2024/02/sharepointbanner.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .overlay {
            background: linear-gradient(135deg, rgba(46, 16, 101, 0.95) 0%, rgba(71, 35, 147, 0.95) 100%);
        }
        .pattern-bg {
            background-image: radial-gradient(#6b46c1 0.75px, transparent 0.75px), radial-gradient(#6b46c1 0.75px, transparent 0.75px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 0.15;
        }

        .services-section {
            background: linear-gradient(135deg, #ffffff 0%, #f3f0ff 50%, #ffffff 100%);
        }

        header {
            transition: all 0.3s ease;
            overflow:hidden;
        }

        // header.scrolled {
        //     background: #191970 !important; /* Midnight Blue */
        //     background-image: none !important;
        // }

        footer {
            background: #191970 !important; /* Midnight Blue */
            background-image: none !important;
        }

        .content-layer {
            position: relative;
            z-index: 1;
        }
      .iti{
            width: 15% !important;
        }
        @keyframes gradient-x {
            0%, 100% {
                background-size: 200% 200%;
                background-position: left center;
            }
            50% {
                background-size: 200% 200%;
                background-position: right center;
            }
        }
        
        @keyframes ping-slow {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.5);
                opacity: 0.5;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        @keyframes dash {
            to {
                stroke-dashoffset: 0;
            }
        }
        
        .animate-gradient-x {
            animation: gradient-x 15s ease infinite;
        }
        
        .animate-ping-slow {
            animation: ping-slow 3s cubic-bezier(0, 0, 0.2, 1) infinite;
        }
        
        .animate-dash {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: dash 15s linear infinite;
        }
        
        .animate-pulse-slow {
            animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .tech-grid-pattern {
            background-image: 
                linear-gradient(30deg, #f0f7ff 12%, transparent 12.5%, transparent 87%, #f0f7ff 87.5%, #f0f7ff),
                linear-gradient(150deg, #f0f7ff 12%, transparent 12.5%, transparent 87%, #f0f7ff 87.5%, #f0f7ff),
                linear-gradient(30deg, #f0f7ff 12%, transparent 12.5%, transparent 87%, #f0f7ff 87.5%, #f0f7ff),
                linear-gradient(150deg, #f0f7ff 12%, transparent 12.5%, transparent 87%, #f0f7ff 87.5%, #f0f7ff),
                linear-gradient(60deg, #e3eeff 25%, transparent 25.5%, transparent 75%, #e3eeff 75%, #e3eeff),
                linear-gradient(60deg, #e3eeff 25%, transparent 25.5%, transparent 75%, #e3eeff 75%, #e3eeff);
            background-size: 80px 140px;
            background-position: 0 0, 0 0, 40px 70px, 40px 70px, 0 0, 40px 70px;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes glow {
            0%, 100% { filter: drop-shadow(0 0 5px rgba(59, 130, 246, 0.5)); }
            50% { filter: drop-shadow(0 0 20px rgba(59, 130, 246, 0.8)); }
        }

        .floating-animation {
            animation: float 3s ease-in-out infinite;
        }

        .glow-animation {
            animation: glow 3s ease-in-out infinite;
        }

        .tech-card {
            background: rgba(255, 255, 255, 0.8);
            //backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .tech-gradient {
            background: linear-gradient(135deg, #0ea5e9 0%, #3b82f6 50%, #6366f1 100%);
        }

       /* @keyframes bounce-subtle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        } */

       /* .animate-bounce-subtle {
            animation: bounce-subtle 2s infinite;
        }
        */
        /* Add smooth scrolling to the whole page */
        html {
            scroll-behavior: smooth;
        }

        .pattern-grid {
            background-image: 
                linear-gradient(to right, rgba(99, 102, 241, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(99, 102, 241, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(20px, -20px) scale(1.1); }
            50% { transform: translate(0, 20px) scale(1); }
            75% { transform: translate(-20px, -20px) scale(0.9); }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        /* Hide scrollbar for Chrome, Safari and Opera 
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }*/

        /* Hide scrollbar for IE, Edge and Firefox 
        .scrollbar-hide {
            -ms-overflow-style: none;  
            scrollbar-width: none;  
        }*/

        /* Add slide animation */
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }

        /* Enhanced card hover effect */
        .industry-card {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .industry-card:hover .card-content {
            transform: translateZ(20px);
        }

        /* Glowing border effect */
        .glow-border {
            position: relative;
        }

        .glow-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, #ff6b6b, #ffd93d, #6c63ff, #4834d4);
            border-radius: inherit;
            z-index: -1;
            animation: borderGlow 4s linear infinite;
            filter: blur(8px);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .glow-border:hover::before {
            opacity: 1;
        }

        @keyframes borderGlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating animation for cards */
        @keyframes floatCard {
            0%, 100% { transform: translateY(0) rotate(0); }
            25% { transform: translateY(-5px) rotate(1deg); }
            75% { transform: translateY(5px) rotate(-1deg); }
        }

        .float-card {
            animation: floatCard 5s ease-in-out infinite;
        }

        /* Shine effect */
        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 45%,
                rgba(255, 255, 255, 0.1) 48%,
                rgba(255, 255, 255, 0.3) 50%,
                rgba(255, 255, 255, 0.1) 52%,
                transparent 55%
            );
            transform: rotate(45deg);
            animation: shine 3s infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .shine-effect:hover::after {
            opacity: 1;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        /* Add styles for better icon display */
        .tech-item img {
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }
        
        .tech-item:hover img {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        /* Animation Keyframes */
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        @keyframes subtle-shift {
            0% {
                transform: translateX(0) translateY(0);
            }
            50% {
                transform: translateX(-5px) translateY(-5px);
            }
            100% {
                transform: translateX(0) translateY(0);
            }
        }

        @keyframes gradient-x {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes gradient-xy {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animation Classes */
        .animate-blob {
            animation: blob 7s infinite;
        }

        .animate-subtle-shift {
            animation: subtle-shift 10s ease-in-out infinite;
        }

        .animate-gradient-x {
            animation: gradient-x 15s ease infinite;
            background-size: 200% 200%;
        }

        .animate-gradient-xy {
            animation: gradient-xy 15s ease infinite;
            background-size: 400% 400%;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out forwards;
        }

        /* Animation Delays */
        .animation-delay-100 {
            animation-delay: 100ms;
        }

        .animation-delay-200 {
            animation-delay: 200ms;
        }

        .animation-delay-300 {
            animation-delay: 300ms;
        }

        .animation-delay-400 {
            animation-delay: 400ms;
        }

        .animation-delay-500 {
            animation-delay: 500ms;
        }

        .animation-delay-600 {
            animation-delay: 600ms;
        }

        .animation-delay-700 {
            animation-delay: 700ms;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        /* Fix for initial opacity */
        .opacity-0 {
            opacity: 0;
        }

        /* Smooth transitions */
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Enhanced blur effects */
        .blur-3xl {
            --tw-blur: blur(64px);
            filter: var(--tw-blur);
        }

        /* Improved mix blend modes */
        .mix-blend-multiply {
            mix-blend-mode: multiply;
        }

        /* Additional hover effects */
        .hover\:scale-105:hover {
            transform: scale(1.05);
        }

        .group:hover .group-hover\:rotate-6 {
            transform: rotate(6deg);
        }

        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }

        .group:hover .group-hover\:translate-x-1 {
            transform: translateX(0.25rem);
        }
    </style>

    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sangpurple': '#2B1B56',
                        'vibrant-purple': '#8B5CF6',
                        'electric-blue': '#3B82F6',
                        'neon-pink': '#EC4899',
                        'cyber-yellow': '#FCD34D',
                        'digital-green': '#10B981',
                        'coral-red': '#EF4444',
                        'deep-ocean': '#1E40AF',
                        'sunset-orange': '#F97316',
                        'mystic-violet': '#7C3AED',
                        'emerald-green': '#059669',
                        'ruby-red': '#DC2626',
                        'azure-blue': '#2563EB',
                        'golden-yellow': '#F59E0B',
                        'tropical-green': '#22C55E'
                    },
                    animation: {
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'ping-slow': 'ping-slow 3s cubic-bezier(0, 0, 0.2, 1) infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 3s ease-in-out infinite',
                        'glow': 'glow 3s ease-in-out infinite',
                    //    'bounce-subtle': 'bounce-subtle 2s infinite',
                        'blob': 'blob 7s infinite',
                        'shine': 'shine 3s infinite',
                        'border-glow': 'borderGlow 4s linear infinite',
                        'float-card': 'floatCard 5s ease-in-out infinite',
                    },
                    keyframes: {
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'ping-slow': {
                            '0%': { transform: 'scale(1)', opacity: '1' },
                            '50%': { transform: 'scale(1.5)', opacity: '0.5' },
                            '100%': { transform: 'scale(1)', opacity: '1' }
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' }
                        },
                        'glow': {
                            '0%, 100%': { filter: 'drop-shadow(0 0 5px rgba(59, 130, 246, 0.5))' },
                            '50%': { filter: 'drop-shadow(0 0 20px rgba(59, 130, 246, 0.8))' }
                        },
                        /*'bounce-subtle': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        },*/
                        'blob': {
                            '0%, 100%': { transform: 'translate(0, 0) scale(1)' },
                            '25%': { transform: 'translate(20px, -20px) scale(1.1)' },
                            '50%': { transform: 'translate(0, 20px) scale(1)' },
                            '75%': { transform: 'translate(-20px, -20px) scale(0.9)' }
                        },
                        'shine': {
                            '0%': { transform: 'translateX(-100%) rotate(45deg)' },
                            '100%': { transform: 'translateX(100%) rotate(45deg)' }
                        },
                        'borderGlow': {
                            '0%': { 'background-position': '0% 50%' },
                            '50%': { 'background-position': '100% 50%' },
                            '100%': { 'background-position': '0% 50%' }
                        },
                        'floatCard': {
                            '0%, 100%': { transform: 'translateY(0) rotate(0)' },
                            '25%': { transform: 'translateY(-5px) rotate(1deg)' },
                            '75%': { transform: 'translateY(5px) rotate(-1deg)' }
                        }
                    },
                    backgroundImage: {
                        'rainbow-gradient': 'linear-gradient(45deg, #F97316, #EC4899, #8B5CF6, #3B82F6)',
                        'sunset-gradient': 'linear-gradient(to right, #F97316, #EC4899)',
                        'ocean-gradient': 'linear-gradient(to right, #2563EB, #7C3AED)',
                        'forest-gradient': 'linear-gradient(to right, #059669, #10B981)',
                        'fire-gradient': 'linear-gradient(to right, #DC2626, #F97316)',
                        'cosmic-gradient': 'linear-gradient(to right, #7C3AED, #EC4899)',
                        'tech-pattern': "url('https://www.orangemantra.com//wp-content/uploads/2024/02/sharepointbanner.webp')",
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'pattern-grid': 'linear-gradient(to right, rgba(99, 102, 241, 0.1) 1px, transparent 1px), linear-gradient(to bottom, rgba(99, 102, 241, 0.1) 1px, transparent 1px)'
                    }
                }
            }
        }
    </script>
</head>

<class="font-sans" style="width: -webkit-fill-available;">
    <!-- <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script> -->
    <!-- HEADER NAVIGATION SECTION START -->

    <header class="nav-bg-b main-header navfix fixed-top menu-white header-pr" >
         <div class="container-fluid m-pad">
            <div class="menu-header">
               <div class="dsk-logo">
                  <a class="nav-brand" href="index.php">
                     <img src="images/logo/sanguine-logo2.png" alt="Logo" class="mega-white-logo"/>
                     <img src="images/logo/sanguine-logo2.png" alt="Logo" class="mega-darks-logo"/> 
                     <!-- <span style="color: #fff; font-weight: 900; font-size:30px;">Sanguine</span> -->
                  </a>
               </div>
               <div class="custom-nav" role="navigation">
                  <ul class="nav-list">
                    <!--  <li class="sbmenu rpdropdown">
                        <a href="#" class="menu-links">Company</a>
                        <div class="nx-dropdown menu-dorpdown">
                           <div class="sub-menu-section">
                              <div class="sub-menu-center-block">
                                 <div class="sub-menu-column smfull">
                                     <ul class="list">
                                       <li><a href="about.php">About Us  </a> </li>
                                       <li><a href="about.php#why-choose-us">Why Choose Us </a> </li>
                                       <li><a href="clients.php">Clients</a> </li>
                                       <li><a href="testimonials.php">Testimonials </a> </li>
                                       <li><a href="contact-us.php">Contact Us	</a>  </li>
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
                                       <div class="menuheading" style="margiin-top:40px;">Database</div>
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
                        <a href="case_studies.php" class="menu-links">Case Studies  </a> 
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
                                       <li><a href="#">Infographics</a>  </li>
                                       <li><a href="#">Ebooks</a>  </li>
                                       <li><a href="#">Whitepapers</a>  </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li> -->
                     <li>
                        <a href="#" class="menu-links right-bddr">&nbsp;</a>
                        <!--menu right border-->
                     <li class="contact-show">
                        <a href="#" class="btn-round- trngl btn-br bg-btn"><i class="fas fa-phone-alt"></i></a>
                        <div class="contact-inquiry">
                           <div class="contact-info-">
                              <div class="contct-heading">Sanguine Contacts</div>
                              
                              <div class="inquiry-card-nn">
                                 
                                 <ul>
                                    <li><i class="fa fa-phone"></i><a href="tel:(+1)662-300-1685" >(+1) 662-300-1685</a></li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:Info@Sanguine.com" >Info@SanguineIT.com</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li><a href="contact-us.php?focus=name" style="animation:none;" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a> </li>
                  </ul>
               </div>
               <div class="mobile-menu2">
                  <ul class="mob-nav2">
                     <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1"  data-toggle="modal" data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
                     <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                  </ul>
               </div>
            </div>
            <!--Mobile Menu-->
            <!-- <nav id="main-nav">
               <ul class="first-nav">
                  <li>
                     <a>Company</a>
                     <ul>
                       <li><a href="about.php">About Us  </a> </li>
                                       <li><a href="about.php#why-choose-us">Why Choose Us </a> </li>
                                       <li><a href="clients.php">Clients</a> </li>
                                       <li><a href="testimonials.php">Testimonials </a> </li>
                                       <li><a href="#">News and Events</a>  </li>
                                       <li><a href="contact-us.php">Contact Us	</a>  </li>
									   
									   
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
                     <a href="case_studies.php">Case Studies  </a>
                  </li>
                  <li>
                     <a href="#">Knowledge Base</a>
                     <ul>
                        <li><a href="#">Blogs</a> </li>
                        <li><a href="#">News & Events</a> </li>
                        <li><a href="#">Articles</a> </li>
                        <li><a href="#">Videos </a> </li>
                        <li><a href="#">Infographics</a>  </li>
                        <li><a href="#">Ebooks</a>  </li>
                        <li><a href="#">Whitepapers</a>  </li>
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
                              C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                              />
                        </svg>
                     </a>
                  </li>
                  <li class="prb">
                     <a href="mailto:somewebmedia@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                           <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                           <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                     </a>
                  </li>
                  <li class="prb">
                     <a href="skype:Sanguine.company?call">
                        <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                           <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"/>
                        </svg>
                     </a>
                  </li>
               </ul>
            </nav> -->
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

    <!-- <header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md border-b border-white/10 transition-all duration-300 shadow-lg bg-gradient-to-r from-deep-ocean/95 to-mystic-violet/95">
        <div class="container mx-auto flex items-center justify-between py-2 px-6">
            <div class="flex-shrink-0">
                <img src="https://sanguineit.com/images/logo/sanguine-logo2.png" alt="SanguineIT Technologies" class="h-14 w-auto"/>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="hover:text-cyber-yellow transition-colors duration-300 text-sm font-medium text-white/90 hover:text-white">COMPANY</a>
                <a href="#" class="hover:text-cyber-yellow transition-colors duration-300 text-sm font-medium text-white/90 hover:text-white">SERVICES</a>
                <a href="#" class="hover:text-cyber-yellow transition-colors duration-300 text-sm font-medium text-white/90 hover:text-white">TECHNOLOGIES</a>
                <a href="#" class="hover:text-cyber-yellow transition-colors duration-300 text-sm font-medium text-white/90 hover:text-white">INDUSTRIES</a>
                <a href="#" class="hover:text-cyber-yellow transition-colors duration-300 text-sm font-medium text-white/90 hover:text-white">CASE STUDIES</a>
                <a href="#" class="hover:text-cyber-yellow transition-colors duration-300 text-sm font-medium text-white/90 hover:text-white">KNOWLEDGE BASE</a>
            </nav>
            <div class="hidden md:flex items-center gap-4">
                <div class="flex items-center">
                    <i class="fas fa-phone-alt text-neon-pink"></i>
                </div>
                <a href="#" class="bg-gradient-to-r from-sunset-orange to-coral-red hover:from-coral-red hover:to-sunset-orange text-white py-2 px-4 rounded text-sm transition-all duration-300 transform hover:scale-105">
                    Request A Quote
                </a>
            </div>
        </div>
    </header> -->
    <!-- HEADER NAVIGATION SECTION END -->

    <!-- Add padding to main content to prevent overlap -->
    <main class="relative tech-pattern diagonal-frame">
        <div class="overlay bg-gradient-to-br from-deep-ocean/95 via-mystic-violet/95 to-vibrant-purple/95 w-full h-full">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <div class="flex flex-col lg:flex-row items-center justify-between mt-5">
                    <div class="lg:w-2/3 overflow-hidden">
                        <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-white bg-gradient-to-r from-cyber-yellow via-neon-pink to-electric-blue bg-clip-text">
                            Microsoft SharePoint Development Services- Digital-Focused Productivity
                        </h1>
                        <p class="text-lg mb-6 text-white">
                            With 22+ years of expertise from a Microsoft SharePoint development company to offer customized development services
                        </p>
                        <div class="flex flex-wrap gap-4 mb-6">
                            <span class="bg-gradient-to-r from-electric-blue/20 to-neon-pink/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Business Process Automation</span>
                            <span class="bg-gradient-to-r from-cyber-yellow/20 to-digital-green/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Document Management</span>
                            <span class="bg-gradient-to-r from-sunset-orange/20 to-coral-red/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Seamless Collaborations</span>
                            <span class="bg-gradient-to-r from-mystic-violet/20 to-ruby-red/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Intranet Connectivity</span>
                            <span class="bg-gradient-to-r from-emerald-green/20 to-azure-blue/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Workflow Design Services</span>
                        </div>
                        <div class="flex gap-4">
                            <img src="https://storage.googleapis.com/a1aa/image/ePtQss34naumB0N6T1WDfLy-x8Gq_bggNx6Npm8Lr5E.jpg" alt="Award badge 1" class="w-16 h-16" width="100" height="100"/>
                            <img src="https://storage.googleapis.com/a1aa/image/kWY7ceFDLJqYwsfvOFeCVIRXEmCnTTXjXORYoca67i8.jpg" alt="Award badge 2" class="w-16 h-16" width="100" height="100"/>
                            <img src="https://storage.googleapis.com/a1aa/image/QenSvnzM3tqiXg23n0WZHTU4VAzXthUp2jSpvHrUSUQ.jpg" alt="Award badge 3" class="w-16 h-16" width="100" height="100"/>
                            <img src="https://storage.googleapis.com/a1aa/image/dPhlStNXquuW-OKJK5iCoBS0q_9MJMoZbN5wUP1s-qc.jpg" alt="Award badge 4" class="w-16 h-16" width="100" height="100"/>
                            <img src="https://storage.googleapis.com/a1aa/image/P9ObV6ZpYuKig1zjz24Xhm4LidwSP3w7zOE0gdqYWl8.jpg" alt="Award badge 5" class="w-16 h-16" width="100" height="100"/>
                        </div>
                    </div>
                    <div class="lg:w-1/3 bg-white/90 backdrop-blur-md text-black p-8 rounded-lg shadow-2xl mt-12 lg:mt-10 border border-white/20">
                        <h2 class="text-2xl font-bold mb-3 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">Contact Us</h2>
                        <form action="send-mail.php" method="POST">
                            <input type="hidden" name="_next" value="https://sanguineit.com/sharepoint-support-services.php">
                            <input type="hidden" name="_subject" value="New Contact Form Submission">
                            <div class="mb-2">
                                <input type="text" name="name" placeholder="Full Name*" class="w-full px-4 py-2 border rounded-lg" required/>
                            </div>
                            <div class="mb-2">
                                <input type="email" name="email" placeholder="Business Email Address*" class="w-full px-4 py-2 border rounded-lg" required/>
                            </div>

                          <div class="mb-2 flex">
                            <input id="phone" type="tel" name="c_code" class="w-1/4 px-4 py-2 border rounded-l-lg">
                            <input type="text" name="phone" placeholder="Phone Number" class="flex-grow px-4 py-2 border rounded-r-lg" required/>
                        </div>

                            <div class="mb-2">
                                <input type="text" name="organization" placeholder="Organization/ Institution*" class="w-full px-4 py-2 border rounded-lg" required/>
                            </div>
                            <div class="mb-2">
                                <textarea name="message" placeholder="Message*" class="w-full px-4 py-2 border rounded-lg h-20" required></textarea>
                            </div>
                             
                            <button type="submit" class="w-full bg-gradient-to-r from-sunset-orange to-coral-red hover:from-coral-red hover:to-sunset-orange text-white px-4 py-2 rounded-lg font-bold transition-all duration-300 transform hover:scale-105">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- HERO SECTION END -->

    <!-- SERVICES SECTION START -->
    <section class="py-24 relative overflow-hidden services-section">
        <!-- Background pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-white via-purple-50 to-blue-50">
            <div class="absolute inset-0 pattern-bg opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 relative" style="z-index: 2;">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="text-vibrant-purple font-semibold mb-4 block animate-fade-in">Our Services</span>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    Collaborate Effortlessly with Our 
                    <span class="bg-gradient-to-r from-electric-blue via-vibrant-purple to-neon-pink bg-clip-text text-transparent">
                        Sharepoint Development Services
                    </span>
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">We at SanguineIT Technologies, present the best business solutions to streamline tasks effectively and gain maximum profits.</p>
                <div class="h-1.5 w-32 bg-gradient-to-r from-electric-blue via-vibrant-purple to-neon-pink mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service cards with updated gradients -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-electric-blue to-vibrant-purple rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br from-electric-blue to-vibrant-purple rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                            <i class="fas fa-cogs text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-4 bg-gradient-to-r from-electric-blue to-vibrant-purple bg-clip-text text-transparent">Sharepoint Implementation</h3>
                        <p class="text-gray-600 flex-grow">We assist organizations in choosing the apt Microsoft SharePoint development solutions implementation, either on-premise or cloud, implement the selected approach, and customize it to match the objectives and business needs of the organization.</p>
                        <div class="mt-6 flex items-center text-electric-blue group-hover:translate-x-2 transition-transform duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>

                <!-- Sharepoint Development -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-sunset-orange to-coral-red rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br from-sunset-orange to-coral-red rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                            <i class="fas fa-code text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-4 bg-gradient-to-r from-sunset-orange to-coral-red bg-clip-text text-transparent">Sharepoint Development</h3>
                        <p class="text-gray-600 flex-grow">Our SharePoint experts develop custom applications such as Intranet, Extranet, Workflow Management, Content Management, Enterprise Search, and more. Our developers utilize the .NET Framework and custom coding for custom solutions.</p>
                        <div class="mt-6 flex items-center text-sunset-orange group-hover:translate-x-2 transition-transform duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>

                <!-- Sharepoint Consulting -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-green to-digital-green rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-green to-digital-green rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                            <i class="fas fa-comments text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-4 bg-gradient-to-r from-emerald-green to-digital-green bg-clip-text text-transparent">Sharepoint Consulting</h3>
                        <p class="text-gray-600 flex-grow">SanguineIT Technologies provides Microsoft SharePoint development services and solutions to facilitate greater collaboration, improved engagement, and automation of business processes. Our team helps you to maximize the benefits of the SharePoint features.</p>
                        <div class="mt-6 flex items-center text-emerald-green group-hover:translate-x-2 transition-transform duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>

                <!-- Sharepoint Integration -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyber-yellow to-golden-yellow rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br from-cyber-yellow to-golden-yellow rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                            <i class="fas fa-plug text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-4 bg-gradient-to-r from-cyber-yellow to-golden-yellow bg-clip-text text-transparent">Sharepoint Integration</h3>
                        <p class="text-gray-600 flex-grow">We integrate Sharepoint with extensive third-party systems like CRM, ERP, and other custom applications in the existing business ecosystem. And we leverage deep expertise in integrating it with existing enterprise applications with minimal risks.</p>
                        <div class="mt-6 flex items-center text-cyber-yellow group-hover:translate-x-2 transition-transform duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>

                <!-- Sharepoint Migration -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-neon-pink to-ruby-red rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br from-neon-pink to-ruby-red rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                            <i class="fas fa-exchange-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-4 bg-gradient-to-r from-neon-pink to-ruby-red bg-clip-text text-transparent">Sharepoint Migration</h3>
                        <p class="text-gray-600 flex-grow">Get the support of a leading Microsoft SharePoint development company through a manual or automated process that migrates the entire content in the existing on-premise file share or SharePoint to existing or new on-premise or SharePoint Online.</p>
                        <div class="mt-6 flex items-center text-neon-pink group-hover:translate-x-2 transition-transform duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>

                <!-- Sharepoint Maintenance -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-azure-blue to-deep-ocean rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br from-azure-blue to-deep-ocean rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                            <i class="fas fa-tools text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-4 bg-gradient-to-r from-azure-blue to-deep-ocean bg-clip-text text-transparent">Sharepoint Maintenance</h3>
                        <p class="text-gray-600 flex-grow">Our Microsoft SharePoint consulting services include one-time ad hoc support and ongoing maintenance support (AMC) as well. Hire a dedicated team to provide level 1 & 2 support for your SharePoint implementation or coordinate for level 3 support.</p>
                        <div class="mt-6 flex items-center text-azure-blue group-hover:translate-x-2 transition-transform duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION END -->

    <!-- ENTERPRISE SOLUTIONS SECTION START -->
    <section class="py-16 bg-gradient-to-br from-white via-purple-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-start justify-between gap-8">
                <!-- Left Content -->
                <div class="lg:w-1/2 group">
                    <div class="relative">
                        <!-- Decorative elements -->
                        <div class="absolute -left-4 -top-4 w-20 h-20 bg-gradient-to-br from-electric-blue/30 to-neon-pink/30 rounded-full animate-pulse"></div>
                        <div class="absolute -right-4 -bottom-4 w-32 h-32 bg-gradient-to-br from-cyber-yellow/30 to-digital-green/30 rounded-full animate-pulse delay-300"></div>
                        
                        <!-- Content with animations -->
                        <h2 class="text-4xl lg:text-6xl font-bold mb-8 leading-tight relative transform transition-all duration-700 hover:scale-105">
                            <span class="text-gray-900 font-bold bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent">
                                Offer Enterprise-Focused Solutions
                            </span>
                            <br/>
                            <span class="text-gray-900 font-bold bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent">
                                With Our Microsoft SharePoint Development Company for Success
                            </span>
                        </h2>
                        
                        <div class="space-y-6 relative z-10">
                            <p class="text-xl lg:text-2xl text-gray-700 leading-relaxed transform transition-all duration-500 hover:-translate-x-2 hover:text-vibrant-purple">
                                We at SanguineIT Technologies integrate Microsoft SharePoint development solutions to support your business needs.
                            </p>
                            
                            <div class="pl-6 border-l-4 border-gradient-to-r from-electric-blue to-neon-pink transform transition-all duration-500 hover:border-l-8 hover:pl-8">
                                <p class="text-xl text-gray-600 leading-relaxed">
                                    Our team of SharePoint experts offers the best customized business solutions, integrating industrial expertise to present optimal solutions.
                                </p>
                            </div>
                            
                            <div class="bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 p-6 rounded-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                                <p class="text-xl text-gray-700 leading-relaxed">
                                    With <span class="font-bold bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent">22+ years</span> of experience, we prioritize efficiency and optimize time and resources to manage core objectives effectively.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Stats Grid -->
                <div class="lg:w-1/2 w-full">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Years of Experience -->
                        <div class="group transform transition-all duration-500 hover:scale-105">
                            <div class="text-center p-6 bg-gradient-to-br from-white to-electric-blue/5 rounded-xl shadow-lg hover:shadow-2xl relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/10 to-neon-pink/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <!-- <div class="bg-gradient-to-br p-4 sm:p-6 from-electric-blue/10 to-neon-pink/10 w-32 h-32 rounded-xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                                    <i class="fas fa-calendar-alt w-24 h-24 sm:w-32 sm:h-32 text-electric-blue text-5xl group-hover:scale-125 transition-transform duration-500"></i>
                                </div> -->
                                <div class="relative">
                                    <div class="text-4xl sm:text-6xl font-bold bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent animate-gradient-x mb-3">21+</div>
                                    <div class="text-gray-600 text-xl font-medium group-hover:text-electric-blue transition-colors duration-300">Years of Experience</div>
                                </div>
                            </div>
                        </div>

                        <!-- Global Top Brands -->
                        <div class="group transform transition-all duration-500 hover:scale-105">
                            <div class="text-center p-6 bg-gradient-to-br from-white to-sunset-orange/5 rounded-xl shadow-lg hover:shadow-2xl relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-sunset-orange/10 to-coral-red/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <!-- <div class="bg-gradient-to-br p-4 sm:p-6 from-sunset-orange/10 to-coral-red/10 w-32 h-32 rounded-xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                                    <i class="fas fa-star text-sunset-orange text-5xl group-hover:scale-125 transition-transform duration-500"></i>
                                </div> -->
                                <div class="relative">
                                    <div class="text-4xl sm:text-6xl font-bold bg-gradient-to-r from-sunset-orange to-coral-red bg-clip-text text-transparent animate-gradient-x mb-3">500+</div>
                                    <div class="text-gray-600 text-xl font-medium group-hover:text-sunset-orange transition-colors duration-300">Global Top Brands</div>
                                </div>
                            </div>
                        </div>

                        <!-- Industry Tech Professionals -->
                        <div class="group transform transition-all duration-500 hover:scale-105">
                            <div class="text-center p-6 bg-gradient-to-br from-white to-digital-green/5 rounded-xl shadow-lg hover:shadow-2xl relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-digital-green/10 to-emerald-green/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <!-- <div class="bg-gradient-to-br p-4 sm:p-6 from-digital-green/10 to-emerald-green/10 w-32 h-32 rounded-xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                                    <i class="fas fa-users text-digital-green text-5xl group-hover:scale-125 transition-transform duration-500"></i>
                                </div> -->
                                <div class="relative">
                                    <div class="text-4xl sm:text-6xl font-bold bg-gradient-to-r from-digital-green to-emerald-green bg-clip-text text-transparent animate-gradient-x mb-3">400+</div>
                                    <div class="text-gray-600 text-xl font-medium group-hover:text-digital-green transition-colors duration-300"> Tech Professionals</div>
                                </div>
                            </div>
                        </div>

                        <!-- Happy Clients -->
                        <div class="group transform transition-all duration-500 hover:scale-105">
                            <div class="text-center p-6 bg-gradient-to-br from-white to-cyber-yellow/5 rounded-xl shadow-lg hover:shadow-2xl relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-cyber-yellow/10 to-golden-yellow/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <!-- <div class="bg-gradient-to-br p-4 sm:p-6 from-cyber-yellow/10 to-golden-yellow/10 w-32 h-32 rounded-xl mx-auto mb-4 flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500">
                                    <i class="fas fa-smile text-cyber-yellow text-5xl group-hover:scale-125 transition-transform duration-500"></i>
                                </div> -->
                                <div class="relative">
                                    <div class="text-4xl sm:text-6xl font-bold bg-gradient-to-r from-cyber-yellow to-golden-yellow bg-clip-text text-transparent animate-gradient-x mb-3">600+</div>
                                    <div class="text-gray-600 text-xl font-medium group-hover:text-cyber-yellow transition-colors duration-300">Happy Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ENTERPRISE SOLUTIONS SECTION END -->

    <!-- CLIENTS SECTION START -->
    <section class="py-24 relative overflow-hidden bg-white">
        <!-- World Map SVG Background with animation -->
        <svg width="100%" height="100%" class="absolute inset-0 animate-pulse-slow" preserveAspectRatio="xMidYMid slice" style="z-index: 0;">
            <defs>
                <pattern id="worldMapPattern" x="0" y="0" width="800" height="400" patternUnits="userSpaceOnUse">
                    <!-- Continents - Making lines thicker and darker -->
                    <path d="M100,100 Q150,80 200,100 T300,120 T400,100 T500,80" stroke="#6B46C1" stroke-width="2" fill="none" class="continent animate-dash"/>
                    <path d="M150,150 Q200,130 250,150 T350,170 T450,150" stroke="#6B46C1" stroke-width="2" fill="none" class="continent animate-dash"/>
                    <path d="M200,200 Q250,180 300,200 T400,220 T500,200" stroke="#6B46C1" stroke-width="2" fill="none" class="continent animate-dash"/>
                    <path d="M250,250 Q300,230 350,250 T450,270 T550,250" stroke="#6B46C1" stroke-width="2" fill="none" class="continent animate-dash"/>
                    <!-- Cities/Points with pulse animation -->
                    <circle cx="150" cy="120" r="3" fill="#6B46C1" class="city animate-ping-slow"/>
                    <circle cx="300" cy="180" r="3" fill="#6B46C1" class="city animate-ping-slow"/>
                    <circle cx="450" cy="150" r="3" fill="#6B46C1" class="city animate-ping-slow"/>
                    <circle cx="250" cy="220" r="3" fill="#6B46C1" class="city animate-ping-slow"/>
                    <circle cx="400" cy="200" r="3" fill="#6B46C1" class="city animate-ping-slow"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#worldMapPattern)" opacity="0.25"/>
        </svg>

        <!-- Gradient Overlay with animation -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-transparent to-white/60 animate-gradient" style="z-index: 1;"></div>

        <div class="container mx-auto px-4 relative" style="z-index: 2;">
            <div class="text-center mb-16 transform transition-all duration-500 hover:scale-105">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4 bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent animate-gradient-x">
                    Our Reputed Clients
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Trusted by world-leading companies for delivering excellence in technology solutions
                </p>
            </div>
            
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
                    <!-- Client Logo Card Template -->
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" 
                                 alt="Google" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                    </div>
                    </div>
                    <!-- Repeat the same structure for other logos -->
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://img.icons8.com/color/480/microsoft.png" 
                                 alt="Microsoft" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                    </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1667px-Apple_logo_black.svg.png" 
                                 alt="Apple" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://logos-world.net/wp-content/uploads/2020/04/Amazon-Logo.png" 
                                 alt="Amazon" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/2560px-IBM_logo.svg.png" 
                                 alt="IBM" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/2560px-Bootstrap_logo.svg.png" 
                                 alt="Bootstrap" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://logos-world.net/wp-content/uploads/2020/04/Samsung-Logo.png" 
                                 alt="Samsung" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Meta_Platforms_Inc._logo.svg/2560px-Meta_Platforms_Inc._logo.svg.png" 
                                 alt="Meta" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://img.icons8.com/color/480/spotify.png" 
                                 alt="Spotify" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://img.icons8.com/color/480/linkedin.png" 
                                 alt="LinkedIn" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/2560px-Bootstrap_logo.svg.png" 
                                 alt="Bootstrap" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] 
                                hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] 
                                transition-all duration-500 ease-in-out 
                                transform hover:-translate-y-2 hover:rotate-1
                                group cursor-pointer
                                border border-transparent hover:border-purple-100">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="https://logos-world.net/wp-content/uploads/2020/04/Samsung-Logo.png" 
                                 alt="Samsung" 
                                 class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-white"></div>
    </section>
    <!-- CLIENTS SECTION END -->

    <!-- TECHNOLOGY & FRAMEWORKS SECTION START -->
    <section class="py-24 relative overflow-hidden bg-gradient-to-br from-white via-purple-50 to-blue-50">
        <!-- Background pattern -->
        <div class="absolute inset-0 pattern-grid opacity-5"></div>
        
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-br from-electric-blue/20 to-neon-pink/20 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-40 right-20 w-40 h-40 bg-gradient-to-br from-cyber-yellow/20 to-digital-green/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-20 left-1/4 w-36 h-36 bg-gradient-to-br from-sunset-orange/20 to-coral-red/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent animate-gradient-x">
                    Technology & Frameworks We Use
                </h2>
                <p class="text-gray-600 text-base md:text-lg lg:text-xl max-w-3xl mx-auto px-4">
                    At SanguineIT Technologies, our experts lead in the industry solutions to offer the best-customized solutions integrated with the latest technology.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Languages Section -->
                <div class="group transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-electric-blue/30 to-neon-pink/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="tech-card rounded-xl shadow-lg overflow-hidden relative bg-white/90 backdrop-blur-md border border-white/20 h-full">
                        <div class="bg-gradient-to-r from-electric-blue to-neon-pink p-4 md:p-6">
                            <h3 class="text-xl md:text-2xl font-bold text-white flex items-center gap-3">
                                <i class="fas fa-code text-white/80"></i>
                                Languages
                            </h3>
                        </div>
                        <div class="p-4 md:p-6 space-y-4">
                            <div class="flex flex-wrap gap-4">
                                <!-- JavaScript -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-8 h-8" alt="JavaScript">
                                    <span class="text-gray-700 font-medium">JavaScript</span>
                                </div>
                                
                                <!-- Python -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="w-8 h-8" alt="Python">
                                    <span class="text-gray-700 font-medium">Python</span>
                                </div>
                                
                                <!-- Java -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" class="w-8 h-8" alt="Java">
                                    <span class="text-gray-700 font-medium">Java</span>
                                </div>
                                
                                <!-- C# -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg" class="w-8 h-8" alt="C#">
                                    <span class="text-gray-700 font-medium">C#</span>
                                </div>
                                
                                <!-- PHP -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-8 h-8" alt="PHP">
                                    <span class="text-gray-700 font-medium">PHP</span>
                                </div>
                                
                                <!-- TypeScript -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" class="w-8 h-8" alt="TypeScript">
                                    <span class="text-gray-700 font-medium">TypeScript</span>
                                </div>
                                
                                <!-- Ruby -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ruby/ruby-original.svg" class="w-8 h-8" alt="Ruby">
                                    <span class="text-gray-700 font-medium">Ruby</span>
                                </div>
                                
                                <!-- Swift -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" class="w-8 h-8" alt="Swift">
                                    <span class="text-gray-700 font-medium">Swift</span>
                                </div>
                                
                                <!-- Kotlin -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" class="w-8 h-8" alt="Kotlin">
                                    <span class="text-gray-700 font-medium">Kotlin</span>
                                </div>
                                
                                <!-- Go -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original.svg" class="w-8 h-8" alt="Go">
                                    <span class="text-gray-700 font-medium">Go</span>
                                </div>
                                
                                <!-- C++ -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" class="w-8 h-8" alt="C++">
                                    <span class="text-gray-700 font-medium">C++</span>
                                </div>
                                
                                <!-- Scala -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/scala/scala-original.svg" class="w-8 h-8" alt="Scala">
                                    <span class="text-gray-700 font-medium">Scala</span>
                                </div>
                                
                                <!-- C++ -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" class="w-8 h-8" alt="C++">
                                    <span class="text-gray-700 font-medium">C++</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testing Section -->
                <div class="group transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyber-yellow/30 to-digital-green/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="tech-card rounded-xl shadow-lg overflow-hidden relative bg-white/90 backdrop-blur-md border border-white/20 h-full">
                        <div class="bg-gradient-to-r from-cyber-yellow to-digital-green p-4 md:p-6">
                            <h3 class="text-xl md:text-2xl font-bold text-white flex items-center gap-3">
                                <i class="fas fa-vial text-white/80"></i>
                                Testing
                            </h3>
                        </div>
                        <div class="p-4 md:p-6 space-y-4">
                            <div class="flex flex-wrap gap-4">
                                <!-- Selenium -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/selenium/selenium-original.svg" class="w-8 h-8" alt="Selenium">
                                    <span class="text-gray-700 font-medium">Selenium</span>
                                </div>

                                <!-- JUnit -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://junit.org/junit5/assets/img/junit5-logo.png" class="w-8 h-8" alt="JUnit">
                                    <span class="text-gray-700 font-medium">JUnit</span>
                                </div>

                                <!-- Jest -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jest/jest-plain.svg" class="w-8 h-8" alt="Jest">
                                    <span class="text-gray-700 font-medium">Jest</span>
                                </div>

                                <!-- Cypress -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://www.cypress.io/images/layouts/cypress-logo.svg" class="w-8 h-8" alt="Cypress">
                                    <span class="text-gray-700 font-medium">Cypress</span>
                                </div>

                                <!-- Postman -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg" class="w-8 h-8" alt="Postman">
                                    <span class="text-gray-700 font-medium">Postman</span>
                                </div>

                                <!-- TestNG -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://e7.pngegg.com/pngimages/640/776/png-clipart-testng-logo-software-testing-software-framework-computer-icons-automation-testing-angle-text.png" class="w-8 h-8" alt="TestNG">
                                    <span class="text-gray-700 font-medium">TestNG</span>
                                </div>

                                <!-- Mocha -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mocha/mocha-plain.svg" class="w-8 h-8" alt="Mocha">
                                    <span class="text-gray-700 font-medium">Mocha</span>
                                </div>

                                <!-- JMeter -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://jmeter.apache.org/images/logo.svg" class="w-8 h-8" alt="JMeter">
                                    <span class="text-gray-700 font-medium">JMeter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PM Tools Section -->
                <div class="group transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-sunset-orange/30 to-coral-red/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="tech-card rounded-xl shadow-lg overflow-hidden relative bg-white/90 backdrop-blur-md border border-white/20 h-full">
                        <div class="bg-gradient-to-r from-sunset-orange to-coral-red p-4 md:p-6">
                            <h3 class="text-xl md:text-2xl font-bold text-white flex items-center gap-3">
                                <i class="fas fa-tasks text-white/80"></i>
                                PM Tools
                            </h3>
                        </div>
                        <div class="p-4 md:p-6 space-y-4">
                            <div class="flex flex-wrap gap-4">
                                <!-- Jira -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg" class="w-8 h-8" alt="Jira">
                                    <span class="text-gray-700 font-medium">Jira</span>
                                </div>

                                <!-- Trello -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-plain.svg" class="w-8 h-8" alt="Trello">
                                    <span class="text-gray-700 font-medium">Trello</span>
                                </div>

                                <!-- Asana -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.worldvectorlogo.com/logos/asana-logo.svg" class="w-8 h-8" alt="Asana">
                                    <span class="text-gray-700 font-medium">Asana</span>
                                </div>

                                <!-- Slack -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg" class="w-8 h-8" alt="Slack">
                                    <span class="text-gray-700 font-medium">Slack</span>
                                </div>

                                <!-- Microsoft Teams/Discord replacement with GitLab -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg" class="w-8 h-8" alt="GitLab">
                                    <span class="text-gray-700 font-medium">GitLab</span>
                                </div>

                                <!-- Confluence -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.worldvectorlogo.com/logos/confluence-1.svg" class="w-8 h-8" alt="Confluence">
                                    <span class="text-gray-700 font-medium">Confluence</span>
                                </div>

                                <!-- Notion -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Notion_app_logo.png" class="w-8 h-8" alt="Notion">
                                    <span class="text-gray-700 font-medium">Notion</span>
                                </div>

                                <!-- GitLab -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg" class="w-8 h-8" alt="GitLab">
                                    <span class="text-gray-700 font-medium">GitLab</span>
                                </div>

                                <!-- Bitbucket -->
                                <div class="tech-item flex items-center gap-3 bg-white/50 p-3 rounded-lg transition-all duration-300 hover:scale-105 hover:bg-blue-50 w-full sm:w-auto">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitbucket/bitbucket-original.svg" class="w-8 h-8" alt="Bitbucket">
                                    <span class="text-gray-700 font-medium">Bitbucket</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add responsive styles -->
        <style>
            @media (max-width: 640px) {
                .tech-item {
                    width: 100%;
                }
                .tech-card {
                    margin-bottom: 1rem;
                }
            }
            
            @media (min-width: 641px) and (max-width: 1024px) {
                .tech-item {
                    width: calc(50% - 1rem);
                }
            }
            
            @media (min-width: 1025px) {
                .tech-item {
                    width: auto;
                }
            }
            
            .tech-card {
                display: flex;
                flex-direction: column;
            }
            
            .tech-card > div:last-child {
                flex-grow: 1;
            }
        </style>
    </section>
    <!-- TECHNOLOGY & FRAMEWORKS SECTION END -->

    <!-- INDUSTRIES SECTION START -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 pattern-grid opacity-5"></div>
        
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                    <!-- Left Content -->
                    <div class="md:w-1/3 p-4">
                        <h2 class="text-4xl font-bold mb-6 bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent animate-gradient-x">
                            Industries We Cater To
                        </h2>
                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            We extend the team of experts with the top-tier Microsoft SharePoint development services in India industrial experience to support your business solutions with the ultimate use of the latest technology and tools.
                        </p>
                        <button class="group relative inline-flex items-center justify-center px-8 py-3 text-lg font-medium text-white transition-all duration-300 bg-gradient-to-r from-orange-500 to-red-500 rounded-full hover:from-orange-600 hover:to-red-600 transform hover:scale-105">
                            <span class="absolute inset-0 rounded-full bg-gradient-to-r from-orange-500 to-red-500 opacity-0 group-hover:opacity-20 blur transition-all duration-500"></span>
                            View All
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Right Content - Industries Slider -->
                    <div class="md:w-2/3 w-full relative">
                        <div class="swiper-container">
                        <div class="relative">
                            <div class="flex overflow-x-auto space-x-6 p-4 scrollbar-hide">
                                <!-- Logistics Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/_H8cr3LXqJ-uHFy_TystDbN6ezpjNd1Aoepq5Md1zyQ.jpg" 
                                                 alt="Logistics" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Logistics & Supply Chain
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Manufacturing Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/WBqJ3YrkWAUHFvnt7Xw9qz25LJf-RHf3qKRkORQrlnA.jpg" 
                                                 alt="Manufacturing" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Manufacturing & Industrial
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Retail Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/QtS-xHvJn5fURPcSlsIZzrWv1E0XCz1S0bFAg_d1HaQ.jpg" 
                                                 alt="Retail" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Retail & E-commerce
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Education Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/sglU2DqVNjYv70ustsFYoNm-rlZKlrHCLq3o2COAyaE.jpg" 
                                                 alt="Education" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Education & E-learning
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Healthcare Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/_H8cr3LXqJ-uHFy_TystDbN6ezpjNd1Aoepq5Md1zyQ.jpg" 
                                                 alt="Healthcare" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Healthcare & Pharma
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Finance Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/WBqJ3YrkWAUHFvnt7Xw9qz25LJf-RHf3qKRkORQrlnA.jpg" 
                                                 alt="Finance" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Banking & Finance
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Technology Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/QtS-xHvJn5fURPcSlsIZzrWv1E0XCz1S0bFAg_d1HaQ.jpg" 
                                                 alt="Technology" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Technology & IT Services
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- E-commerce Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/sglU2DqVNjYv70ustsFYoNm-rlZKlrHCLq3o2COAyaE.jpg" 
                                                 alt="E-commerce" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Automotive & Transportation
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Real Estate Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/WBqJ3YrkWAUHFvnt7Xw9qz25LJf-RHf3qKRkORQrlnA.jpg" 
                                                 alt="Real Estate" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Real Estate & Construction
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Energy Card -->
                                <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                    <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                        <!-- Background blur effect -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                        
                                        <!-- Image with enhanced hover effect -->
                                        <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                            <img src="https://storage.googleapis.com/a1aa/image/QtS-xHvJn5fURPcSlsIZzrWv1E0XCz1S0bFAg_d1HaQ.jpg" 
                                                 alt="Energy" 
                                                 class="w-full h-full object-cover transition-transform duration-700"/>
                                            
                                            <!-- Gradient overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>
                                            
                                            <!-- Content wrapper -->
                                            <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                <!-- Industry name with enhanced styling -->
                                                <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                    <span class="text-orange-500 font-semibold text-lg relative">
                                                        <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                        Energy & Utilities
                                                    </span>
                                                </div>
                                                
                                                <!-- Hidden description that appears on hover -->
                                                <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                    <p class="text-base text-center">
                                                        Brief description of the industry services and expertise
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-gradient-to-r from-purple-600 to-blue-600 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 text-white transform hover:scale-110 hover:-translate-x-2">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-gradient-to-r from-purple-600 to-blue-600 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 text-white transform hover:scale-110 hover:translate-x-2">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute -top-16 -right-16 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
    </section>
    <!-- INDUSTRIES SECTION END -->

    <!-- TOP APP DEVELOPMENT COMPANIES SECTION START -->
    <section class="py-24 bg-gradient-to-br from-white via-purple-50 to-blue-50 relative overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 pattern-grid opacity-5"></div>
        
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-br from-electric-blue/20 to-neon-pink/20 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-40 right-20 w-40 h-40 bg-gradient-to-br from-cyber-yellow/20 to-digital-green/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-20 left-1/4 w-36 h-36 bg-gradient-to-br from-sunset-orange/20 to-coral-red/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-12">
                <!-- Left Content -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <span class="inline-block px-4 py-2 bg-gradient-to-r from-electric-blue/10 to-neon-pink/10 rounded-full text-electric-blue font-medium mb-4 transform hover:scale-105 transition-all duration-300">
                        Recognition & Awards
                    </span>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">
                        Top App Development Companies
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        We've worked as a channel partner of various top Mobile Development companies and have been awarded to the several rankings communities like NASSCOM, SPIDER, PILOTVIEW etc.
                    </p>
                </div>

                <!-- Right Content - Awards -->
                <div class="lg:w-1/2">
                    <div class="flex flex-wrap justify-center gap-8">
                        <!-- Award 1 -->
                        <div class="group relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-electric-blue to-neon-pink rounded-full blur-lg opacity-40 group-hover:opacity-70 transition-all duration-500"></div>
                            <div class="relative transform transition-all duration-500 hover:scale-110">
                                <img src="https://storage.googleapis.com/a1aa/image/13Hl06N1_APuBY_L6HceBJLjBXi_dGZ028Z0rZdz8hE.jpg" 
                                     alt="Award badge" 
                                     class="h-24 w-24 rounded-full border-2 border-white shadow-lg"/>
                            </div>
                        </div>

                        <!-- Award 2 -->
                        <div class="group relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-cyber-yellow to-digital-green rounded-full blur-lg opacity-40 group-hover:opacity-70 transition-all duration-500"></div>
                            <div class="relative transform transition-all duration-500 hover:scale-110">
                                <img src="https://storage.googleapis.com/a1aa/image/3Y7eJbV4nYZVPDODd0u4EivK-mrr41baFxOkcv0T-e0.jpg" 
                                     alt="Award badge" 
                                     class="h-24 w-24 rounded-full border-2 border-white shadow-lg"/>
                            </div>
                        </div>

                        <!-- Award 3 -->
                        <div class="group relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-sunset-orange to-coral-red rounded-full blur-lg opacity-40 group-hover:opacity-70 transition-all duration-500"></div>
                            <div class="relative transform transition-all duration-500 hover:scale-110">
                                <img src="https://storage.googleapis.com/a1aa/image/ntFKanKOwsLWHr8f5bLebs6BSyiBakK6zVSX4JBzdjQ.jpg" 
                                     alt="Award badge" 
                                     class="h-24 w-24 rounded-full border-2 border-white shadow-lg"/>
                            </div>
                        </div>

                        <!-- Award 4 -->
                        <div class="group relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-mystic-violet to-deep-ocean rounded-full blur-lg opacity-40 group-hover:opacity-70 transition-all duration-500"></div>
                            <div class="relative transform transition-all duration-500 hover:scale-110">
                                <img src="https://storage.googleapis.com/a1aa/image/M-0cEla2Elv56L7hSMpunXYLl5kSpRyGXKVuEkq4-iE.jpg" 
                                     alt="Award badge" 
                                     class="h-24 w-24 rounded-full border-2 border-white shadow-lg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative bottom line -->
        <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-electric-blue/20 to-transparent"></div>
    </section>
    <!-- TOP APP DEVELOPMENT COMPANIES SECTION END -->

    <!-- TESTIMONIALS SECTION START -->
    <section class="py-24 bg-gradient-to-br from-white via-purple-50 to-blue-50 relative overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 pattern-grid opacity-5"></div>
        
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-br from-electric-blue/20 to-neon-pink/20 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-40 right-20 w-40 h-40 bg-gradient-to-br from-cyber-yellow/20 to-digital-green/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-20 left-1/4 w-36 h-36 bg-gradient-to-br from-sunset-orange/20 to-coral-red/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <!-- Section Header with enhanced styling -->
            <div class="text-center mb-16 relative">
                <span class="inline-block px-4 py-2 bg-gradient-to-r from-electric-blue/10 to-neon-pink/10 rounded-full text-electric-blue font-medium mb-4 transform hover:scale-105 transition-all duration-300">
                    What Our Clients Say
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold mb-4 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">
                    Client Testimonials
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Discover what our valued clients have to say about their experiences working with us.
                </p>
                <!-- Decorative line -->
                <div class="w-24 h-1.5 bg-gradient-to-r from-electric-blue to-neon-pink rounded-full mx-auto mt-6"></div>
            </div>

            <!-- Testimonials Carousel -->
            <div class="relative">
                <!-- Testimonials Grid with hover effects -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10">
                    <!-- Testimonial 1 -->
                    <div class="group relative transform hover:scale-105 transition-all duration-500 hover:z-20">
                        <div class="absolute inset-0 bg-gradient-to-br from-electric-blue/30 to-neon-pink/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="bg-white/90 backdrop-blur-md p-8 rounded-xl shadow-lg relative border border-white/20 h-full flex flex-col">
                            <!-- Quote Icon -->
                            <div class="absolute -top-4 -left-4 w-8 h-8 bg-gradient-to-br from-electric-blue to-neon-pink rounded-full flex items-center justify-center transform -rotate-12 group-hover:rotate-0 transition-all duration-500">
                                <i class="fas fa-quote-left text-white text-sm"></i>
                            </div>
                            
                            <!-- Client Info -->
                            <div class="flex items-center gap-4 mb-6">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-to-br from-electric-blue to-neon-pink rounded-full animate-pulse"></div>
                                    <img src="images/landmark.jpg" 
                                         alt="William" 
                                         class="w-46 h-32 object-cover rounded-full border-2 border-white relative z-10"/>
                                </div>
                                <div>
                                    <!-- <h3 class="text-xl font-semibold text-gray-800 group-hover:text-electric-blue transition-colors duration-300">William</h3> -->
                                    <p class="text-gray-600">Landmark Group </p>
                                </div>
                            </div>
                            
                            <!-- Rating -->
                            <div class="mb-6">
                                <div class="flex gap-1">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-100"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-200"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-300"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-400"></i>
                                </div>
                            </div>
                            
                            <!-- Testimonial Text -->
                            <blockquote class="text-gray-600 italic flex-grow relative">
                                <div class="absolute -left-2 -top-2 text-4xl text-electric-blue/10 group-hover:text-electric-blue/20 transition-colors duration-300">"</div>
                                Built Power Apps solution for leading consulting group
                                "Sanguine was outstanding to work with! Great communication and truly technical experts!
                                I would recommend for anyone looking for Microsoft Power Apps!".
                                <div class="absolute -right-2 bottom-0 text-4xl text-electric-blue/10 group-hover:text-electric-blue/20 transition-colors duration-300">"</div>
                            </blockquote>
                            
                            <!-- Company Logo -->
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <img src="images/landmarkgroup.png" alt="Landmark-Group" class="h-8 w-auto grayscale group-hover:grayscale-0 transition-all duration-500"/>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="group relative transform hover:scale-105 transition-all duration-500 hover:z-20">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyber-yellow/30 to-digital-green/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="bg-white/90 backdrop-blur-md p-8 rounded-xl shadow-lg relative border border-white/20 h-full flex flex-col">
                            <!-- Quote Icon -->
                            <div class="absolute -top-4 -left-4 w-8 h-8 bg-gradient-to-br from-cyber-yellow to-digital-green rounded-full flex items-center justify-center transform -rotate-12 group-hover:rotate-0 transition-all duration-500">
                                <i class="fas fa-quote-left text-white text-sm"></i>
                            </div>
                            
                            <!-- Client Info -->
                            <div class="flex items-center gap-4 mb-6">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-to-br from-cyber-yellow to-digital-green rounded-full animate-pulse"></div>
                                    <img src="images/zappo.jpg" 
                                         alt="Merry Cruiser" 
                                         class="w-60 h-32 object-cover rounded-full border-2 border-white relative z-10"/>
                                </div>
                                <div>
                                    <!-- <h3 class="text-xl font-semibold text-gray-800 group-hover:text-cyber-yellow transition-colors duration-300">Merry Cruiser</h3> -->
                                    <p class="text-gray-600">Zappos -Jack </p>
                                </div>
                            </div>
                            
                            <!-- Rating -->
                            <div class="mb-6">
                                <div class="flex gap-1">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-100"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-200"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-300"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-400"></i>
                                </div>
                            </div>
                            
                            <!-- Testimonial Text -->
                            <blockquote class="text-gray-600 italic flex-grow relative">
                                <div class="absolute -left-2 -top-2 text-4xl text-cyber-yellow/10 group-hover:text-cyber-yellow/20 transition-colors duration-300">"</div>
                                We had a great experience working with Sanguine team (Alex & Sudeep) throughout the process. They were knowledgeable, partnered with us to find workable solutions when the app wasn’t 
                                functioning as intended, and always followed through to complete the work they promised to complete.
                                <div class="absolute -right-2 bottom-0 text-4xl text-cyber-yellow/10 group-hover:text-cyber-yellow/20 transition-colors duration-300">"</div>
                            </blockquote>
                            
                            <!-- Company Logo -->
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <img src="images/zappos-logo.svg" alt="zappos" class="h-8 w-auto grayscale group-hover:grayscale-0 transition-all duration-500"/>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="group relative transform hover:scale-105 transition-all duration-500 hover:z-20">
                        <div class="absolute inset-0 bg-gradient-to-br from-sunset-orange/30 to-coral-red/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="bg-white/90 backdrop-blur-md p-8 rounded-xl shadow-lg relative border border-white/20 h-full flex flex-col">
                            <!-- Quote Icon -->
                            <div class="absolute -top-4 -left-4 w-8 h-8 bg-gradient-to-br from-sunset-orange to-coral-red rounded-full flex items-center justify-center transform -rotate-12 group-hover:rotate-0 transition-all duration-500">
                                <i class="fas fa-quote-left text-white text-sm"></i>
                            </div>
                            
                            <!-- Client Info -->
                            <div class="flex items-center gap-4 mb-6">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-to-br from-sunset-orange to-coral-red rounded-full animate-pulse"></div>
                                    <img src="images/tata-steel.jpg" 
                                         alt="Ragnar Sthesia" 
                                         class="w-46 h-32 object-cover rounded-full border-2 border-white relative z-10"/>
                                </div>
                                <div>
                                    <!-- <h3 class="text-xl font-semibold text-gray-800 group-hover:text-sunset-orange transition-colors duration-300">Ragnar Sthesia</h3> -->
                                    <p class="text-gray-600">TATA Steel </p>
                                </div>
                            </div>
                            
                            <!-- Rating -->
                            <div class="mb-6">
                                <div class="flex gap-1">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-100"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-200"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-300"></i>
                                    <i class="fas fa-star text-yellow-400 animation-delay-400"></i>
                                </div>
                            </div>
                            
                            <!-- Testimonial Text -->
                            <blockquote class="text-gray-600 italic flex-grow relative">
                                <div class="absolute -left-2 -top-2 text-4xl text-sunset-orange/10 group-hover:text-sunset-orange/20 transition-colors duration-300">"</div>
                                Sharepoint DMS For leading technology brand TATA 
                                "Sanguine team was great to work with! They were professional but still easy going and flexible. 
                                They worked diligently on our project to make it successful and was easy to communicate with and get updates from.
                                <div class="absolute -right-2 bottom-0 text-4xl text-sunset-orange/10 group-hover:text-sunset-orange/20 transition-colors duration-300">"</div>
                            </blockquote>
                            
                            <!-- Company Logo -->
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Tata_logo.svg/2560px-Tata_logo.svg.png" alt="Tata" class="h-8 w-auto grayscale group-hover:grayscale-0 transition-all duration-500"/>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Dots -->
                    <!-- <div class="flex justify-center items-center gap-2 mt-8">
                        <button class="w-3 h-3 rounded-full bg-electric-blue/20 hover:bg-electric-blue transition-all duration-300"></button>
                        <button class="w-3 h-3 rounded-full bg-electric-blue/20 hover:bg-electric-blue transition-all duration-300"></button>
                        <button class="w-3 h-3 rounded-full bg-electric-blue/20 hover:bg-electric-blue transition-all duration-300"></button>
                    </div> -->
            </div>
        </div>

        <!-- Additional decorative elements -->
        <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-electric-blue/20 to-transparent"></div>
    </section>
    <!-- TESTIMONIALS SECTION END -->

    <!-- WHY CHOOSE US SECTION START -->
    <section class="relative py-24 bg-gradient-to-b from-[#ffffff] via-[#fffffb] to-[#fbfaff] overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-64 h-64 bg-gradient-to-br from-electric-blue/10 to-neon-pink/10 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-40 right-20 w-72 h-72 bg-gradient-to-br from-cyber-yellow/10 to-neon-pink/10 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-20 left-1/3 w-96 h-96 bg-gradient-to-br from-mystic-violet/10 to-electric-blue/10 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
        </div>

        <!-- Subtle pattern overlay with animation -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('https://sanguineit.com/images/pattern-bg.png')] opacity-[0.05] animate-subtle-shift"></div>
        </div>

        <!-- Subtle gradient overlays -->
        <div class="absolute inset-0">
            <div class="absolute top-0 w-full h-24 bg-gradient-to-b from-[#ffffff] to-transparent"></div>
            <div class="absolute bottom-0 w-full h-24 bg-gradient-to-t from-[#ffffff] to-transparent"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <!-- Section Header with animation -->
            <div class="text-center mb-16 transform transition-all duration-700 hover:scale-105">
                <div class="relative inline-block">
                    <div class="absolute -inset-1 bg-gradient-to-r from-electric-blue to-neon-pink rounded-lg blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-gradient-xy"></div>
                    <h2 class="relative text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent animate-gradient-x">
                        Why Choose Us
                    </h2>
                </div>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto mt-6 opacity-0 animate-fade-in-up">
                    Partner with us for innovative SharePoint solutions that drive your business forward
                </p>
            </div>

            <!-- Features Grid with staggered animation -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group relative transform hover:scale-105 transition-all duration-500 opacity-0 animate-fade-in-up animation-delay-100">
                    <div class="bg-[#ffffff] hover:bg-[#fff8f9] p-8 rounded-xl border border-[#fbfaff] relative h-full transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="w-14 h-14 rounded-lg bg-[#f9fbff] p-3 mb-6 text-electric-blue group-hover:bg-[#fffbfa] transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-award text-2xl transform group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-deep-ocean mb-4 group-hover:text-electric-blue transition-colors duration-300">Certified Expertise</h3>
                        <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">Our team consists of certified SharePoint developers with years of experience in delivering enterprise-grade solutions.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="group relative transform hover:scale-105 transition-all duration-500 opacity-0 animate-fade-in-up animation-delay-200">
                    <div class="bg-[#ffffff] hover:bg-[#fff8f9] p-8 rounded-xl border border-[#fbfaff] relative h-full transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="w-14 h-14 rounded-lg bg-[#f9fbff] p-3 mb-6 text-electric-blue group-hover:bg-[#fffbfa] transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-rocket text-2xl transform group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-deep-ocean mb-4 group-hover:text-electric-blue transition-colors duration-300">Rapid Development</h3>
                        <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">We employ agile methodologies and best practices to ensure quick turnaround times without compromising quality.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="group relative transform hover:scale-105 transition-all duration-500 opacity-0 animate-fade-in-up animation-delay-300">
                    <div class="bg-[#ffffff] hover:bg-[#fff8f9] p-8 rounded-xl border border-[#fbfaff] relative h-full transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="w-14 h-14 rounded-lg bg-[#f9fbff] p-3 mb-6 text-electric-blue group-hover:bg-[#fffbfa] transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-shield-alt text-2xl transform group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-deep-ocean mb-4 group-hover:text-electric-blue transition-colors duration-300">Security First</h3>
                        <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">We implement robust security measures to protect your data and ensure compliance with industry standards.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="group relative transform hover:scale-105 transition-all duration-500 opacity-0 animate-fade-in-up animation-delay-400">
                    <div class="bg-[#ffffff] hover:bg-[#fff8f9] p-8 rounded-xl border border-[#fbfaff] relative h-full transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="w-14 h-14 rounded-lg bg-[#f9fbff] p-3 mb-6 text-electric-blue group-hover:bg-[#fffbfa] transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-headset text-2xl transform group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-deep-ocean mb-4 group-hover:text-electric-blue transition-colors duration-300">24/7 Support</h3>
                        <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">Our dedicated support team is available round the clock to assist you with any issues or concerns.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="group relative transform hover:scale-105 transition-all duration-500 opacity-0 animate-fade-in-up animation-delay-500">
                    <div class="bg-[#ffffff] hover:bg-[#fff8f9] p-8 rounded-xl border border-[#fbfaff] relative h-full transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="w-14 h-14 rounded-lg bg-[#f9fbff] p-3 mb-6 text-electric-blue group-hover:bg-[#fffbfa] transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-cogs text-2xl transform group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-deep-ocean mb-4 group-hover:text-electric-blue transition-colors duration-300">Customization</h3>
                        <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">We deliver tailor-made solutions that perfectly align with your business requirements and objectives.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="group relative transform hover:scale-105 transition-all duration-500 opacity-0 animate-fade-in-up animation-delay-600">
                    <div class="bg-[#ffffff] hover:bg-[#fff8f9] p-8 rounded-xl border border-[#fbfaff] relative h-full transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="w-14 h-14 rounded-lg bg-[#f9fbff] p-3 mb-6 text-electric-blue group-hover:bg-[#fffbfa] transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-chart-line text-2xl transform group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-deep-ocean mb-4 group-hover:text-electric-blue transition-colors duration-300">Scalable Solutions</h3>
                        <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">Our solutions are built to grow with your business, ensuring long-term sustainability and success.</p>
                    </div>
                </div>
            </div>

            <!-- Decorative bottom line -->
            <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-electric-blue/20 to-transparent"></div>
        </div>
    </section>
    <!-- WHY CHOOSE US SECTION END -->

    <!-- FAQ SECTION START -->
    <section class="relative py-24 bg-gradient-to-b from-[#ffffff] via-[#fffffb] to-[#f9fbff]">
        <!-- Subtle pattern overlay -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('https://sanguineit.com/images/pattern-bg.png')] opacity-[0.03]"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <!-- Section Header -->
            <div class="text-center mb-16 bg-[#fffefd] p-8 rounded-2xl shadow-sm">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Find answers to common questions about our services and solutions.
                </p>
            </div>

            <!-- FAQ Grid -->
            <div class="grid grid-cols-1 gap-6 max-w-4xl mx-auto" x-data="{ activeTab: null }">
                <!-- FAQ Item 1 -->
                <div class="group" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full">
                        <div class="relative p-6 rounded-2xl bg-[#fbfaff] shadow-md hover:shadow-lg transition-all duration-300 hover:bg-[#fff8f9]">
                            <div class="absolute inset-0 bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-electric-blue to-neon-pink flex items-center justify-center">
                                            <i class="fas fa-cube text-white"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800">What digital transformation services do you offer?</h3>
                                    </div>
                                    <div class="transform transition-transform duration-300" :class="{ 'rotate-180': open }">
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </div>
                                </div>
                                <div x-show="open" x-collapse x-cloak
                                    class="pl-14 pt-4 text-gray-600 bg-[#faffff] mt-4 p-4 rounded-xl">
                                    We provide comprehensive digital transformation services including cloud migration, enterprise applications, data analytics, AI/ML integration, and custom software development. Our solutions are tailored to your business needs and industry requirements.
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <!-- FAQ Item 2 -->
                <div class="group" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full">
                        <div class="relative p-6 rounded-2xl bg-[#fbfaff] shadow-md hover:shadow-lg transition-all duration-300 hover:bg-[#fff8f9]">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyber-yellow/5 to-sunset-orange/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-cyber-yellow to-sunset-orange flex items-center justify-center">
                                            <i class="fas fa-shield-alt text-white"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800">How do you ensure data security?</h3>
                                    </div>
                                    <div class="transform transition-transform duration-300" :class="{ 'rotate-180': open }">
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </div>
                                </div>
                                <div x-show="open" x-collapse x-cloak
                                    class="pl-14 pt-4 text-gray-600 bg-[#faffff] mt-4 p-4 rounded-xl">
                                    We implement robust security measures including encryption, access controls, and compliance with international standards (ISO 27001). Our team follows industry best practices and regularly updates security protocols to protect your data.
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <!-- FAQ Item 3 -->
                <div class="group" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full">
                        <div class="relative p-6 rounded-2xl bg-[#fbfaff] shadow-md hover:shadow-lg transition-all duration-300 hover:bg-[#fff8f9]">
                            <div class="absolute inset-0 bg-gradient-to-r from-sunset-orange/5 to-coral-red/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-sunset-orange to-coral-red flex items-center justify-center">
                                            <i class="fas fa-code-branch text-white"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800">What is your project development approach?</h3>
                                    </div>
                                    <div class="transform transition-transform duration-300" :class="{ 'rotate-180': open }">
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </div>
                                </div>
                                <div x-show="open" x-collapse x-cloak
                                    class="pl-14 pt-4 text-gray-600 bg-[#faffff] mt-4 p-4 rounded-xl">
                                    We follow an agile methodology with iterative development cycles. This ensures continuous feedback, flexibility to adapt to changes, and regular delivery of working solutions. Our approach emphasizes collaboration and transparency throughout the project.
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <!-- FAQ Item 4 -->
                <div class="group" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full">
                        <div class="relative p-6 rounded-2xl bg-[#fbfaff] shadow-md hover:shadow-lg transition-all duration-300 hover:bg-[#fff8f9]">
                            <div class="absolute inset-0 bg-gradient-to-r from-mystic-violet/5 to-vibrant-purple/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-mystic-violet to-vibrant-purple flex items-center justify-center">
                                            <i class="fas fa-headset text-white"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800">How do you support after project completion?</h3>
                                    </div>
                                    <div class="transform transition-transform duration-300" :class="{ 'rotate-180': open }">
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </div>
                                </div>
                                <div x-show="open" x-collapse x-cloak
                                    class="pl-14 pt-4 text-gray-600 bg-[#faffff] mt-4 p-4 rounded-xl">
                                    We provide comprehensive post-project support including maintenance, updates, and technical assistance. Our dedicated support team ensures smooth operation of your systems and helps resolve any issues promptly.
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ SECTION END -->

    <!-- FLOATING CTA BUTTON START -->
     
    <div class="fixed bottom-8 right-8 z-50 flex flex-col items-end space-y-4">
        <!-- Call Button -->
        <!-- <button class="group relative bg-gradient-to-r from-green-500 to-emerald-600 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="absolute -inset-1 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-pulse"></div>
            <div class="relative flex items-center justify-center">
                <i class="fas fa-phone-alt text-white text-2xl"></i>
                <span class="absolute right-full mr-3 bg-white px-4 py-2 rounded-lg text-gray-700 text-sm font-medium shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                    Call us now
                    <span class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></span>
                </span>
            </div>
        </button> -->
      
        <!-- Main CTA Button -->
        <a href="contact-us.php?focus=name" class="group relative bg-gradient-to-r from-orange-500 to-red-500 px-6 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300">
            <div class="absolute -inset-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-pulse"></div>
            <div class="relative flex items-center justify-center space-x-2">
                <span class="text-white font-bold whitespace-nowrap">Get Started</span>
                <i class="fas fa-arrow-right text-white"></i>
                <span class="absolute right-full mr-3 bg-white px-4 py-2 rounded-lg text-gray-700 text-sm font-medium shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                    Request a quote today!
                    <span class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></span>
                </span>
            </div>
        </a>
    </div>
    <!-- FLOATING CTA BUTTON END -->

    <!-- FOOTER SECTION START -->
    <footer>
         <div class="footer-row1">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="email-subs">
                        <h3>New Insights Weekly</h3>
                        <p class="lh">Get notifications of our blogs, achievements and updates directly to your email, Please put your email here</p>
                     </div>
                  </div>
                  <div class="col-lg-6 v-center">
                     <div class="email-subs-form">
                        <form>
                           <input type="email" placeholder="Email Your Address" name="emails">
                           <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-row2">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                       <h5>Newsletter</h5>
                     <p class="lh">News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                     <a href="contact-us.php" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h5>Contact Us</h5>
                     <ul class="footer-address-list ftr-details">
                        <li>
                           <span><i class="fas fa-envelope"></i></span>
                           <p class="lh">Email <span> <a href="mailto:Info@Sanguine.com">Info@SanguineIT.com</a></span></p>
                        </li>
                        <li>
                           <span><i class="fas fa-phone-alt"></i></span>
                           <p class="lh">Phone <span> <a href="tel:(+1)662-300-1685">(+1) 662-300-1685</a></span></p>
                        </li>
                        <li>
                           <span><i class="fas fa-map-marker-alt"></i></span>
                           <p class="lh">Address: <span> <b>India</b></span><br> <span> A-165, First Floor, Sec-62, Noida, U.P. 201301.</span><br> <span> <a href="tel:9971726173">Ph- 9971726173</a></span></p>
                        </li>
						 <li>
                           <span><i class="fas fa-map-marker-alt"></i></span>
                           <p class="lh"><span> <b>US</b></span><br> <span> 488, Department Lake
Brooklyn, NY 11203.</span><br><span>  <a href="tel:(+1)662-300-1685">Ph- 662-300-1685</a></span></p>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                     <h5>Company</h5>
                     <ul class="footer-address-list link-hover">
                        <li><a href="contact-us.php">Contact</a></li>
                        <li><a href="#">Customer's FAQ</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">License & Copyright</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-4 col-sm-6 footer-blog-">
                     <h5>Latest Blogs</h5>
                     <div class="single-blog-">
                        <div class="post-thumb"><a href="#"><img src="images/blog/blog-small.jpg" alt="blog"></a></div>
                        <div class="content">
                           <p class="lh post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                           <h4 class="title"><a href="blog-sngle.php">We Provide you Best &amp; Creative Consulting Service</a></h4>
                        </div>
                     </div>
                     <div class="single-blog-">
                        <div class="post-thumb"><a href="#"><img src="images/blog/blog-small.jpg" alt="blog"></a></div>
                        <div class="content">
                           <p class="lh post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                           <h4 class="title"><a href="blog-sngle.php">We Provide you Best &amp; Creative Consulting Service</a></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-brands">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 v-center">
                     <h5 class="mb10">Top App Development Companies</h5>
                     <p class="lh">We've worked as a channel partner of various top Mobile Development companies and have been awarded to the several rankings communities like NASSCOM, SPIDER, PILOTVIEW etc.</p>
                  </div>
                  <div class="col-lg-8 v-center">
                     <ul class="footer-badges-">
                        <li><a href="#"><img src="images/about/badges-a.png" alt="badges"></a></li>
                        <li><a href="#"><img src="images/about/badges-b.png" alt="badges"></a></li>
                        <li><a href="#"><img src="images/about/badges-c.png" alt="badges"></a></li>
                        <li><a href="#"><img src="images/about/badges-d.png" alt="badges"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-row3">
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="footer-social-media-icons">
                           <a href="https://www.facebook.com/Sanguineit" target="blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://twitter.com/sanguineit" target="blank"><i class="fab fa-twitter"></i></a>
                           <a href="#" target="blank"><i class="fab fa-instagram"></i></a>
                           <a href="https://www.linkedin.com/in/sanguine-it-971902210" target="blank"><i class="fab fa-linkedin"></i></a>
                           <a href="#" target="blank"><i class="fab fa-youtube"></i></a>
                           <a href="#" target="blank"><i class="fab fa-pinterest-p"></i></a>
                           <a href="#" target="blank"><i class="fab fa-vimeo-v"></i></a>
                           <a href="#" target="blank"><i class="fab fa-dribbble"></i></a>
                           <a href="#" target="blank"><i class="fab fa-behance"></i></a>
                        </div>
                        <div class="footer-">
                           <p class="lh">Copyright &copy; 2021 SanguineIT. All rights reserved. SanguineIT By <a>SanguineIT</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
    <!-- FOOTER SECTION END -->

    <!-- WhatsApp Button -->
    <div class="fixed bottom-8 left-8 z-[60] flex flex-col items-end space-y-4">
  
  <!-- Call Button -->
  <a href="tel:(+1)662-300-1685" class="group relative w-14 h-14 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
    <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-pulse"></div>
    <div class="relative flex items-center justify-center w-full h-full">
      <span class="absolute left-full ml-3 bg-white px-4 py-2 rounded-lg text-gray-700 text-sm font-medium shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
        Call us now
        <span class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></span>
      </span>
      <i class="fas fa-phone-alt text-white text-xl"></i>
    </div>
  </a>

  <!-- WhatsApp Button -->
  <button onclick="window.open('https://wa.me/919582838747', '_blank')" class="group relative w-14 h-14 bg-green-500 hover:bg-green-600 rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300">
    <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-green-600 rounded-full blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-pulse"></div>
    <div class="relative flex items-center justify-center w-full h-full">
      <i class="fab fa-whatsapp text-white text-xl"></i>
      <span class="absolute right-full mr-3 bg-white px-4 py-2 rounded-lg text-gray-700 text-sm font-medium shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
        Chat
        <span class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></span>
      </span>
    </div>
  </button>

</div>


        // <a id="scrollUp" href="#top"></a>
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/plugin.min.js"></script>
      <!--common script file-->
       <script src="js/main.js"></script>
       <script src="js/portfolio/lazysizes.min.js"></script>
       <script src="js/portfolio/jquery.slimscroll.min.js"></script>
       <script type='text/javascript' src="js/portfolio/aos.js?ver=5.2.2"></script>

       <script type='text/javascript' src="js/portfolio/TweenMax.js"></script>
       <script type='text/javascript' src="js/portfolio/home.js"></script>
	  
	  
	    
		<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	<script src="js/typewriter.js"></script>
<script src="js/typed.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".swiper-container", {
            slidesPerView: 1, // Show only 1 card at a time
            spaceBetween: 20, // Space between cards
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true, // Infinite scrolling
        });
    });
</script>
<script>
  const input = document.querySelector("#phone");
  window.intlTelInput(input, {
    initialCountry: "in",
    preferredCountries: ["in", "us", "gb"],
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js"
  });
</script>
<!-- Add this script just before the closing </body> tag -->
<script>
    // Auto slide functionality for Industries section
    const slideContainer = document.querySelector('.flex.overflow-x-auto');
    const slides = document.querySelectorAll('.w-96.flex-shrink-0');
    const prevButton = document.querySelector('.fa-chevron-left').parentElement;
    const nextButton = document.querySelector('.fa-chevron-right').parentElement;
    
    let currentIndex = 0;
    const slideWidth = 384; // 368px (width) + 16px (gap)
    
    function slide(direction) {
        if (direction === 'next') {
            currentIndex = (currentIndex + 1) % slides.length;
        } else {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        }
        
        slideContainer.scrollTo({
            left: currentIndex * slideWidth,
            behavior: 'smooth'
        });
    }
    
    // Auto slide every 3 seconds
    let autoSlideInterval = setInterval(() => slide('next'), 3000);
    
    // Pause auto-slide on hover
    slideContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });
    
    // Resume auto-slide when mouse leaves
    slideContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(() => slide('next'), 3000);
    });
    
    // Manual navigation
    prevButton.addEventListener('click', () => {
        clearInterval(autoSlideInterval);
        slide('prev');
        autoSlideInterval = setInterval(() => slide('next'), 3000);
    });
    
    nextButton.addEventListener('click', () => {
        clearInterval(autoSlideInterval);
        slide('next');
        autoSlideInterval = setInterval(() => slide('next'), 3000);
    });

    // Add smooth scrolling class to container
    slideContainer.style.scrollBehavior = 'smooth';
    
    // Hide scrollbar but keep functionality
    slideContainer.style.scrollbarWidth = 'none';
    slideContainer.style.msOverflowStyle = 'none';

    // Add progress indicator functionality
    function updateProgress() {
        const dots = document.querySelectorAll('.progress-dot');
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('w-4', 'bg-purple-600');
                dot.classList.remove('w-2', 'bg-purple-600/50');
            } else {
                dot.classList.remove('w-4', 'bg-purple-600');
                dot.classList.add('w-2', 'bg-purple-600/50');
            }
        });
    }

    // Add smooth parallax effect
    document.addEventListener('mousemove', (e) => {
        const cards = document.querySelectorAll('.industry-card');
        const mouseX = e.clientX / window.innerWidth - 0.5;
        const mouseY = e.clientY / window.innerHeight - 0.5;

        cards.forEach((card) => {
            const cardRect = card.getBoundingClientRect();
            const cardCenterX = cardRect.left + cardRect.width / 2;
            const cardCenterY = cardRect.top + cardRect.height / 2;
            
            const angleX = (cardCenterY - e.clientY) * 0.01;
            const angleY = (e.clientX - cardCenterX) * 0.01;
            
            card.style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg)`;
        });
    });

    // Enhanced smooth scrolling
    const smoothScroll = (target, duration) => {
        const start = slideContainer.scrollLeft;
        const distance = target - start;
        let startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);
            
            const easeInOutCubic = progress < 0.5
                ? 4 * progress * progress * progress
                : 1 - Math.pow(-2 * progress + 2, 3) / 2;
                
            slideContainer.scrollLeft = start + (distance * easeInOutCubic);
            
            if (timeElapsed < duration) {
                requestAnimationFrame(animation);
            }
        }
        
        requestAnimationFrame(animation);
    };
</script>
</body>
</html>


