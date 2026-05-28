/**
 * Clients Section Scroll Optimization
 * Optimizes logo loading and animation performance
 */

(function () {
  "use strict";

  // Intersection Observer for lazy animation
  const observerOptions = {
    root: null,
    rootMargin: "50px",
    threshold: 0.1,
  };

  // Enhanced intersection observer for clients section
  const clientsObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const clientItems = entry.target.querySelectorAll(".client-logo-item");

        // Trigger animations with minimal delay
        clientItems.forEach((item, index) => {
          // Remove any existing animation delay
          item.style.animationDelay = index * 0.05 + "s"; // Reduced from 0.1s to 0.05s
          item.classList.add("animate-in");
        });

        // Stop observing once animated
        clientsObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Preload client images for faster display
  function preloadClientImages() {
    const clientSection = document.querySelector(".clients-section-optimized");
    if (!clientSection) return;

    const images = clientSection.querySelectorAll("img[data-src], img[src]");
    images.forEach((img) => {
      if (img.dataset.src) {
        // For lazy loaded images
        const imageLoader = new Image();
        imageLoader.onload = () => {
          img.src = img.dataset.src;
          img.removeAttribute("data-src");
          img.classList.add("loaded");
        };
        imageLoader.src = img.dataset.src;
      } else if (img.src) {
        // For regular images, ensure they're cached
        const imagePreloader = new Image();
        imagePreloader.src = img.src;
      }
    });
  }

  // Optimize animations during scroll
  function optimizeClientAnimations() {
    let scrollTimer;
    const clientSection = document.querySelector(".clients-section-optimized");

    if (!clientSection) return;

    const clientItems = clientSection.querySelectorAll(".client-logo-item");

    // Throttled scroll handler
    const handleScroll = () => {
      // Pause complex animations during scroll
      clientItems.forEach((item) => {
        item.style.transitionDuration = "0.1s";
      });

      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        // Restore normal animations after scroll ends
        clientItems.forEach((item) => {
          item.style.transitionDuration = "";
        });
      }, 100);
    };

    // Use passive listener for better performance
    window.addEventListener("scroll", handleScroll, { passive: true });
  }

  // Initialize optimizations when DOM is ready
  function initClientOptimizations() {
    const clientSection = document.querySelector(".clients-section-optimized");

    if (clientSection) {
      // Start observing the clients section
      clientsObserver.observe(clientSection);

      // Preload images
      preloadClientImages();

      // Setup scroll optimizations
      optimizeClientAnimations();

      // Add CSS optimizations
      const style = document.createElement("style");
      style.textContent = `
                .clients-section-optimized {
                    contain: layout style paint;
                }
                
                .client-logo-item {
                    contain: layout style;
                    transform: translateZ(0);
                    backface-visibility: hidden;
                    perspective: 1000px;
                }
                
                .client-logo-item img {
                    content-visibility: auto;
                    contain-intrinsic-size: 150px 50px;
                    transition: filter 0.2s ease, transform 0.2s ease;
                }
                
                .client-logo-item.animate-in {
                    animation-play-state: running;
                }
                
                /* Reduce animation complexity on mobile */
                @media (max-width: 768px) {
                    .client-logo-item {
                        animation-duration: 0.3s;
                    }
                    
                    .client-logo-item:hover {
                        transform: none;
                    }
                }
                
                /* Further optimize for slow devices */
                @media (prefers-reduced-motion: reduce) {
                    .client-logo-item {
                        animation: none;
                        opacity: 1;
                        transform: none;
                    }
                }
            `;
      document.head.appendChild(style);
    }
  }

  // Initialize when DOM is ready
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initClientOptimizations);
  } else {
    initClientOptimizations();
  }

  // Expose optimization functions globally if needed
  window.ClientsOptimization = {
    preloadImages: preloadClientImages,
    init: initClientOptimizations,
  };
})();
