/**
 * Scroll Performance Optimization Script
 * Fixes dragging/sticky scroll issues on SharePoint support services page
 */

(function () {
  "use strict";

  // Throttle function to limit scroll event frequency
  function throttle(func, limit) {
    let inThrottle;
    return function () {
      const args = arguments;
      const context = this;
      if (!inThrottle) {
        func.apply(context, args);
        inThrottle = true;
        setTimeout(() => (inThrottle = false), limit);
      }
    };
  }

  // Debounce function for resize events
  function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  }

  // Performance optimized scroll handler
  const optimizedScrollHandler = throttle(function () {
    // Only trigger necessary scroll-based functions
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Sticky navigation
    if (scrollTop >= 80) {
      document.querySelector(".navfix")?.classList.add("sticky");
    } else {
      document.querySelector(".navfix")?.classList.remove("sticky");
    }

    // Scroll-to-top button visibility
    const scrollUpBtn = document.getElementById("scrollUp");
    if (scrollUpBtn) {
      if (scrollTop > 300) {
        scrollUpBtn.style.display = "block";
      } else {
        scrollUpBtn.style.display = "none";
      }
    }
  }, 16); // ~60fps

  // Optimize particles.js performance
  function optimizeParticles() {
    // Pause particles animations during scroll
    let scrollTimer;
    const particlesContainers = document.querySelectorAll(
      "#particles-js, #particles-js1"
    );

    window.addEventListener(
      "scroll",
      function () {
        // Reduce particles during scroll
        particlesContainers.forEach((container) => {
          if (container.style.opacity !== "0.3") {
            container.style.transition = "opacity 0.1s ease";
            container.style.opacity = "0.3";
          }
        });

        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(() => {
          // Restore particles after scroll ends
          particlesContainers.forEach((container) => {
            container.style.opacity = "1";
          });
        }, 150);
      },
      { passive: true }
    );
  }

  // Disable smooth scroll during drag operations
  function handleSmoothScrollDuringDrag() {
    let isDragging = false;
    const html = document.documentElement;
    const originalScrollBehavior = html.style.scrollBehavior;

    // Detect scroll drag start
    window.addEventListener("mousedown", function (e) {
      // Check if mousedown is on scrollbar area
      const scrollbarWidth =
        window.innerWidth - document.documentElement.clientWidth;
      if (e.clientX > window.innerWidth - scrollbarWidth) {
        isDragging = true;
        html.style.scrollBehavior = "auto";
      }
    });

    // Detect scroll drag end
    window.addEventListener("mouseup", function () {
      if (isDragging) {
        isDragging = false;
        setTimeout(() => {
          html.style.scrollBehavior = originalScrollBehavior;
        }, 100);
      }
    });

    // Handle mouse leave during drag
    window.addEventListener("mouseleave", function () {
      if (isDragging) {
        isDragging = false;
        html.style.scrollBehavior = originalScrollBehavior;
      }
    });
  }

  // Optimize CSS animations during scroll
  function optimizeAnimationsDuringScroll() {
    let scrollTimer;
    const animatedElements = document.querySelectorAll(
      '[class*="animate"], .floating-cta, .hero-particles'
    );

    // Special handling for clients section
    const clientsSection = document.querySelector(".clients-section-optimized");
    const clientItems = clientsSection
      ? clientsSection.querySelectorAll(".client-logo-item")
      : [];

    window.addEventListener(
      "scroll",
      function () {
        // Reduce animation intensity during scroll
        animatedElements.forEach((el) => {
          el.style.animationPlayState = "paused";
        });

        // Optimize client logo animations during scroll
        clientItems.forEach((item) => {
          item.style.transitionDuration = "0.1s";
        });

        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(() => {
          // Resume animations after scroll ends
          animatedElements.forEach((el) => {
            el.style.animationPlayState = "running";
          });

          // Restore client logo transition duration
          clientItems.forEach((item) => {
            item.style.transitionDuration = "";
          });
        }, 100);
      },
      { passive: true }
    );
  }

  // Optimize heavy transitions
  function optimizeTransitions() {
    // Replace heavy 'transition: all' with specific properties
    const style = document.createElement("style");
    style.textContent = `
            /* Optimized transitions */
            .card-list .single-card-item,
            .service-card-prb,
            .testimonial-card-a {
                transition: transform 0.3s ease, opacity 0.3s ease !important;
            }
            
            /* Reduce will-change usage */
            .hero-section,
            .particles-container {
                will-change: auto !important;
            }
            
            /* Optimize transforms for better performance */
            .float, .glow, .blob {
                transform: translateZ(0);
                backface-visibility: hidden;
            }
            
            /* Smooth scrollbar behavior */
            ::-webkit-scrollbar {
                width: 8px;
            }
            
            ::-webkit-scrollbar-thumb {
                border-radius: 4px;
                transition: background-color 0.2s ease;
            }
            
            /* Optimize scroll performance */
            * {
                scroll-behavior: auto !important;
            }
            
            html.smooth-scroll {
                scroll-behavior: smooth !important;
            }
        `;
    document.head.appendChild(style);
  }

  // Initialize performance optimizations
  function initializeScrollOptimizations() {
    // Remove existing scroll listeners that might conflict
    const existingScrollListeners = window.addEventListener.toString();

    // Apply optimizations
    optimizeTransitions();
    optimizeParticles();
    handleSmoothScrollDuringDrag();
    optimizeAnimationsDuringScroll();

    // Replace default scroll handler with optimized one
    window.removeEventListener("scroll", window.scrollHandler);
    window.addEventListener("scroll", optimizedScrollHandler, {
      passive: true,
    });

    // Optimize resize handling
    const optimizedResizeHandler = debounce(function () {
      // Handle responsive changes
      if (window.particlesJS) {
        window.particlesJS.refresh();
      }
    }, 250);

    window.addEventListener("resize", optimizedResizeHandler, {
      passive: true,
    });

    // Add smooth scroll class when programmatically scrolling
    window.smoothScrollTo = function (target, duration = 800) {
      document.documentElement.classList.add("smooth-scroll");
      target.scrollIntoView({ behavior: "smooth" });
      setTimeout(() => {
        document.documentElement.classList.remove("smooth-scroll");
      }, duration);
    };
  }

  // DOM ready handler
  if (document.readyState === "loading") {
    document.addEventListener(
      "DOMContentLoaded",
      initializeScrollOptimizations
    );
  } else {
    initializeScrollOptimizations();
  }

  // Expose utility functions globally
  window.ScrollPerformance = {
    throttle,
    debounce,
    smoothScrollTo: window.smoothScrollTo,
  };
})();
