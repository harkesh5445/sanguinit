<?php
// Include the helper functions and configurations
require_once __DIR__ . '/sharepoint-support-services/includes/helpers.php';
require_once __DIR__ . '/sharepoint-support-services/config/site-config.php';

// Define page-specific SEO data
$page_data = [
  'title' => 'SharePoint Support Services | Expert SharePoint Development & Maintenance',
  'description' => 'Professional SharePoint support services with 22+ years expertise. Get custom SharePoint development, migration, maintenance & consulting solutions. Contact our certified SharePoint developers today.',
  'keywords' => 'SharePoint support services, SharePoint development, SharePoint maintenance, SharePoint consulting, SharePoint migration, Microsoft SharePoint experts',
  'canonical' => 'https://sanguineit.com/sharepoint-support-services.php',
  'og_image' => 'https://sanguineit.com/images/sharepoint-support-og.jpg'
];

// Include optimized header
include "sharepoint-support-services/header2.php";
?>

<!-- 
<div id="particles-js" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 0;" data-lazy-load="true"></div>
<div id="particles-js1" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 0; display: none;" data-lazy-load="true"></div> -->

<?php
// HERO SECTION
include_component('hero-section');

// SERVICES SECTION
include_component('services-section');

// ENTERPRISE SOLUTIONS SECTION
include_component('enterprise-solutions-section');

// CLIENTS SECTION
include_component('clients-section');

// TECHNOLOGY SECTION
include_component('technology-section');

// INDUSTRIES SECTION
include_component('industries-section');

// AWARDS SECTION
include_component('awards-section');

// TESTIMONIALS SECTION  
include_component('testimonials-section');

// WHY CHOOSE US SECTION
include_component('why-choose-us-section');

// FAQ SECTION
include_component('faq-section');

// FLOATING CTA BUTTON
include_component('floating-cta');
?>

<?php include "sharepoint-support-services/footer2.php" ?>

<!-- Schema.org Structured Data for SharePoint Services -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "SanguineIT Technologies",
    "description": "Professional SharePoint support services and development company",
    "url": "https://sanguineit.com",
    "logo": "https://sanguineit.com/images/logo/sanguine-logo2.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1-662-300-1685",
      "contactType": "Customer Service",
      "email": "info@sanguineit.com"
    },
    "address": [{
        "@type": "PostalAddress",
        "streetAddress": "A-165, First Floor, Sec-62",
        "addressLocality": "Noida",
        "addressRegion": "U.P.",
        "postalCode": "201301",
        "addressCountry": "IN"
      },
      {
        "@type": "PostalAddress",
        "streetAddress": "488, Department Lake",
        "addressLocality": "Brooklyn",
        "addressRegion": "NY",
        "postalCode": "11203",
        "addressCountry": "US"
      }
    ],
    "foundingDate": "2002",
    "numberOfEmployees": "400+",
    "serviceArea": ["United States", "India", "Global"],
    "sameAs": [
      "https://www.linkedin.com/company/sanguineit",
      "https://twitter.com/sanguineit"
    ]
  }
</script>

<!-- Service-specific Structured Data -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "SharePoint Support Services",
    "description": "Comprehensive SharePoint development, maintenance, migration and consulting services",
    "provider": {
      "@type": "Organization",
      "name": "SanguineIT Technologies"
    },
    "serviceType": "Software Development",
    "areaServed": "Worldwide",
    "audience": {
      "@type": "Audience",
      "audienceType": "Business"
    }
  }
</script>

<!-- Critical CSS for above-the-fold content -->
<link rel="stylesheet" href="sharepoint-support-services/scroll-performance.css">
<style>
  /* Critical path CSS for initial page render */
  .hero-section {
    display: block;
  }

  .loading-skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
  }

  @keyframes loading {
    0% {
      background-position: 200% 0;
    }

    100% {
      background-position: -200% 0;
    }
  }
</style>

<!-- Scroll Performance Optimization -->
<script src="sharepoint-support-services/scroll-performance-fix.js"></script>

<!-- Lazy loading script for particles -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for lazy loading particles
    const observerOptions = {
      root: null,
      rootMargin: '50px',
      threshold: 0.1
    };

    const particlesObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const element = entry.target;
          if (element.dataset.lazyLoad === 'true') {
            // Load particles.js only when needed
            loadParticles();
            particlesObserver.unobserve(element);
          }
        }
      });
    }, observerOptions);

    // Observe particles containers
    const particlesContainers = document.querySelectorAll('[data-lazy-load="true"]');
    particlesContainers.forEach(container => {
      particlesObserver.observe(container);
    });

    function loadParticles() {
      if (!window.particlesLoaded) {
        window.particlesLoaded = true;
        const script = document.createElement('script');
        script.src = 'js/particles.js';
        script.onload = function() {
          setTimeout(() => {
            if (typeof particlesJS !== 'undefined') {
              const appScript = document.createElement('script');
              appScript.src = 'js/app.js';
              document.body.appendChild(appScript);
            }
          }, 100);
        };
        document.body.appendChild(script);
      }
    }
  });
</script>