tailwind.config = {
  theme: {
    extend: {
      colors: {
        sangpurple: "#2B1B56",
        "vibrant-purple": "#8B5CF6",
        "electric-blue": "#3B82F6",
        "neon-pink": "#EC4899",
        "cyber-yellow": "#FCD34D",
        "digital-green": "#10B981",
        "coral-red": "#EF4444",
        "deep-ocean": "#1E40AF",
        "sunset-orange": "#F97316",
        "mystic-violet": "#7C3AED",
        "emerald-green": "#059669",
        "ruby-red": "#DC2626",
        "azure-blue": "#2563EB",
        "golden-yellow": "#F59E0B",
        "tropical-green": "#22C55E",
      },
      animation: {
        "gradient-x": "gradient-x 15s ease infinite",
        "ping-slow": "ping-slow 3s cubic-bezier(0, 0, 0.2, 1) infinite",
        "pulse-slow": "pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite",
        float: "float 3s ease-in-out infinite",
        glow: "glow 3s ease-in-out infinite",
        //    'bounce-subtle': 'bounce-subtle 2s infinite',
        blob: "blob 7s infinite",
        shine: "shine 3s infinite",
        "border-glow": "borderGlow 4s linear infinite",
        "float-card": "floatCard 5s ease-in-out infinite",
      },
      keyframes: {
        "gradient-x": {
          "0%, 100%": {
            "background-size": "200% 200%",
            "background-position": "left center",
          },
          "50%": {
            "background-size": "200% 200%",
            "background-position": "right center",
          },
        },
        "ping-slow": {
          "0%": {
            transform: "scale(1)",
            opacity: "1",
          },
          "50%": {
            transform: "scale(1.5)",
            opacity: "0.5",
          },
          "100%": {
            transform: "scale(1)",
            opacity: "1",
          },
        },
        float: {
          "0%, 100%": {
            transform: "translateY(0)",
          },
          "50%": {
            transform: "translateY(-10px)",
          },
        },
        glow: {
          "0%, 100%": {
            filter: "drop-shadow(0 0 5px rgba(59, 130, 246, 0.5))",
          },
          "50%": {
            filter: "drop-shadow(0 0 20px rgba(59, 130, 246, 0.8))",
          },
        },
        /*'bounce-subtle': {
                              '0%, 100%': { transform: 'translateY(0)' },
                              '50%': { transform: 'translateY(-5px)' }
                          },*/
        blob: {
          "0%, 100%": {
            transform: "translate(0, 0) scale(1)",
          },
          "25%": {
            transform: "translate(20px, -20px) scale(1.1)",
          },
          "50%": {
            transform: "translate(0, 20px) scale(1)",
          },
          "75%": {
            transform: "translate(-20px, -20px) scale(0.9)",
          },
        },
        shine: {
          "0%": {
            transform: "translateX(-100%) rotate(45deg)",
          },
          "100%": {
            transform: "translateX(100%) rotate(45deg)",
          },
        },
        borderGlow: {
          "0%": {
            "background-position": "0% 50%",
          },
          "50%": {
            "background-position": "100% 50%",
          },
          "100%": {
            "background-position": "0% 50%",
          },
        },
        floatCard: {
          "0%, 100%": {
            transform: "translateY(0) rotate(0)",
          },
          "25%": {
            transform: "translateY(-5px) rotate(1deg)",
          },
          "75%": {
            transform: "translateY(5px) rotate(-1deg)",
          },
        },
      },
      backgroundImage: {
        "rainbow-gradient":
          "linear-gradient(45deg, #F97316, #EC4899, #8B5CF6, #3B82F6)",
        "sunset-gradient": "linear-gradient(to right, #F97316, #EC4899)",
        "ocean-gradient": "linear-gradient(to right, #2563EB, #7C3AED)",
        "forest-gradient": "linear-gradient(to right, #059669, #10B981)",
        "fire-gradient": "linear-gradient(to right, #DC2626, #F97316)",
        "cosmic-gradient": "linear-gradient(to right, #7C3AED, #EC4899)",
        "tech-pattern":
          "url('https://www.orangemantra.com//wp-content/uploads/2024/02/sharepointbanner.webp')",
        "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        "pattern-grid":
          "linear-gradient(to right, rgba(99, 102, 241, 0.1) 1px, transparent 1px), linear-gradient(to bottom, rgba(99, 102, 241, 0.1) 1px, transparent 1px)",
      },
    },
  },
};

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

// Optimized Country Selector functionality
window.toggleCountryDropdown = function () {
  const dropdown = document.getElementById("countryDropdown");
  const selectedCountry = document.querySelector(".selected-country");
  const phoneContainer = document.querySelector(".phone-input-container");
  const countryList = document.getElementById("countryList");

  // Set dropdown width to match the entire phone input container
  if (phoneContainer) {
    const containerWidth = phoneContainer.offsetWidth;
    dropdown.style.width = `${containerWidth}px`;
  }

  dropdown.classList.toggle("show");
  selectedCountry.classList.toggle("active");

  // Load countries only when dropdown is opened for the first time
  if (
    dropdown.classList.contains("show") &&
    countryLoader &&
    !countryLoader.isLoaded
  ) {
    countryLoader.loadCountries(countryList);
    countryLoader.setupScrollLoading(countryList);
  }

  // Close dropdown when clicking outside
  if (dropdown.classList.contains("show")) {
    document.addEventListener("click", closeDropdownOnOutsideClick);
  } else {
    document.removeEventListener("click", closeDropdownOnOutsideClick);
  }
};

function closeDropdownOnOutsideClick(event) {
  const dropdown = document.getElementById("countryDropdown");
  const selectedCountry = document.querySelector(".selected-country");
  const countrySelector = document.querySelector(".country-selector");

  if (!countrySelector.contains(event.target)) {
    dropdown.classList.remove("show");
    selectedCountry.classList.remove("active");
    document.removeEventListener("click", closeDropdownOnOutsideClick);
  }
}

// Initialize country selector (optimized version handles this automatically)
document.addEventListener("DOMContentLoaded", function () {
  // Enhanced keyboard navigation for country dropdown
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      const dropdown = document.getElementById("countryDropdown");
      const selectedCountry = document.querySelector(".selected-country");
      if (dropdown && selectedCountry) {
        dropdown.classList.remove("show");
        selectedCountry.classList.remove("active");
        document.removeEventListener("click", closeDropdownOnOutsideClick);
      }
    }
  });

  // Recalculate dropdown width on window resize
  window.addEventListener("resize", function () {
    const dropdown = document.getElementById("countryDropdown");
    const phoneContainer = document.querySelector(".phone-input-container");

    if (dropdown && phoneContainer && dropdown.classList.contains("show")) {
      const containerWidth = phoneContainer.offsetWidth;
      dropdown.style.width = `${containerWidth}px`;
    }
  });
});

// Auto slide functionality for Industries section
const slideContainer = document.querySelector(".flex.overflow-x-auto");
const slides = document.querySelectorAll(".w-96.flex-shrink-0");
const prevButton = document.querySelector(".fa-chevron-left").parentElement;
const nextButton = document.querySelector(".fa-chevron-right").parentElement;

let currentIndex = 0;
const slideWidth = 384; // 368px (width) + 16px (gap)

function slide(direction) {
  if (direction === "next") {
    currentIndex = (currentIndex + 1) % slides.length;
  } else {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  }

  slideContainer.scrollTo({
    left: currentIndex * slideWidth,
    behavior: "smooth",
  });
}

// Auto slide every 3 seconds
let autoSlideInterval = setInterval(() => slide("next"), 3000);

// Pause auto-slide on hover
slideContainer.addEventListener("mouseenter", () => {
  clearInterval(autoSlideInterval);
});

// Resume auto-slide when mouse leaves
slideContainer.addEventListener("mouseleave", () => {
  autoSlideInterval = setInterval(() => slide("next"), 3000);
});

// Manual navigation
prevButton.addEventListener("click", () => {
  clearInterval(autoSlideInterval);
  slide("prev");
  autoSlideInterval = setInterval(() => slide("next"), 3000);
});

nextButton.addEventListener("click", () => {
  clearInterval(autoSlideInterval);
  slide("next");
  autoSlideInterval = setInterval(() => slide("next"), 3000);
});

// Add smooth scrolling class to container
slideContainer.style.scrollBehavior = "smooth";

// Hide scrollbar but keep functionality
slideContainer.style.scrollbarWidth = "none";
slideContainer.style.msOverflowStyle = "none";

// Add progress indicator functionality
function updateProgress() {
  const dots = document.querySelectorAll(".progress-dot");
  dots.forEach((dot, index) => {
    if (index === currentIndex) {
      dot.classList.add("w-4", "bg-purple-600");
      dot.classList.remove("w-2", "bg-purple-600/50");
    } else {
      dot.classList.remove("w-4", "bg-purple-600");
      dot.classList.add("w-2", "bg-purple-600/50");
    }
  });
}

// Add smooth parallax effect
document.addEventListener("mousemove", (e) => {
  const cards = document.querySelectorAll(".industry-card");
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

    const easeInOutCubic =
      progress < 0.5
        ? 4 * progress * progress * progress
        : 1 - Math.pow(-2 * progress + 2, 3) / 2;

    slideContainer.scrollLeft = start + distance * easeInOutCubic;

    if (timeElapsed < duration) {
      requestAnimationFrame(animation);
    }
  }

  requestAnimationFrame(animation);
};

document.addEventListener("DOMContentLoaded", function () {
  // Smooth scroll implementation
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        // Using scrollIntoView with smooth behavior
        targetElement.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // Fix for the reputed client section scrolling issue
  const clientSection = document.querySelector(".client-section");
  if (clientSection) {
    // Add passive event listeners to improve scroll performance
    window.addEventListener(
      "scroll",
      function () {
        // This empty function simply ensures the browser optimizes the section during scroll
      },
      { passive: true }
    );
  }

  // Convert all logo containers to the new format
  updateClientLogoContainers();

  // Optimize image loading in client logos section
  document.querySelectorAll(".client-logo-container img").forEach((img) => {
    img.loading = "lazy"; // Use native lazy loading

    // Handle image loading events to prevent layout shifts
    img.addEventListener("load", function () {
      this.classList.add("loaded");
    });
  });
});

// Function to update all client logo containers
function updateClientLogoContainers() {
  // Find all logo containers in the client section
  const logoCards = document.querySelectorAll(".client-section .grid > div");

  logoCards.forEach((card) => {
    // Remove p-8 padding class if it exists
    if (card.classList.contains("p-8")) {
      card.classList.remove("p-8");
    }

    // Find the logo container
    const logoContainer = card.querySelector("div");
    if (
      logoContainer &&
      !logoContainer.classList.contains("client-logo-container")
    ) {
      // Replace 'relative overflow-hidden rounded-lg' with 'client-logo-container'
      if (logoContainer.classList.contains("relative")) {
        logoContainer.className = "client-logo-container";

        // Find the image and modify it
        const logoImg = logoContainer.querySelector("img");
        if (logoImg) {
          // Remove height constraint
          logoImg.classList.remove("h-12");
        }
      }
    }
  });
}

// Prevent scroll jittering by debouncing scroll events
function debounce(func, wait = 10, immediate = true) {
  let timeout;
  return function () {
    const context = this,
      args = arguments;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

// Apply debounced scroll handler
window.addEventListener(
  "scroll",
  debounce(function () {
    // Optimized scroll handling
  }, 10),
  { passive: true }
);

document.addEventListener("DOMContentLoaded", function () {
  const clientSection = document.querySelector(".client-section");
  let scrollTimeout;

  // Disable hover during scroll
  window.addEventListener("scroll", function () {
    if (clientSection) {
      clientSection.classList.add("disable-hover-effects");

      // Clear the timeout if it's been set
      clearTimeout(scrollTimeout);

      // Set a timeout to remove the class after scrolling stops
      scrollTimeout = setTimeout(function () {
        clientSection.classList.remove("disable-hover-effects");
      }, 200); // Wait 200ms after scrolling stops before enabling hover again
    }
  });
});

// Enhanced form handling for contact form
document.addEventListener("DOMContentLoaded", function () {
  // Contact form compact handling
  const contactForm = document.getElementById("contact-form-element");

  if (contactForm) {
    // Add inline validation to all input fields - only highlight borders
    contactForm.querySelectorAll("input, textarea").forEach((field) => {
      if (field.type === "hidden") return;

      field.addEventListener("invalid", function (e) {
        e.preventDefault();
        this.classList.add("border-red-500");
      });

      field.addEventListener("focus", function () {
        this.classList.remove("border-red-500");
      });
    });
  }
});
