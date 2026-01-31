// Mobile menu toggle
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const navMenu = document.querySelector(".nav-menu");
  const overlay = document.querySelector(".mobile-menu-overlay");
  const body = document.body;

  // Robust scroll lock (prevents "stuck" non-scrollable page)
  let scrollLockCount = 0;
  let previousBodyOverflow = "";

  function lockScroll() {
    if (!body) return;
    if (scrollLockCount === 0) {
      previousBodyOverflow = body.style.overflow || "";
      body.style.overflow = "hidden";
    }
    scrollLockCount += 1;
  }

  function unlockScroll(force = false) {
    if (!body) return;
    if (force) {
      scrollLockCount = 0;
      body.style.overflow = "";
      previousBodyOverflow = "";
      return;
    }
    if (scrollLockCount > 0) scrollLockCount -= 1;
    if (scrollLockCount === 0) {
      body.style.overflow = previousBodyOverflow;
    }
  }

  function openMenu() {
    if (navMenu) navMenu.classList.add("active");
    if (overlay) overlay.classList.add("active");
    if (mobileMenuToggle) mobileMenuToggle.classList.add("active");
    lockScroll();
  }

  function closeMenu() {
    if (navMenu) navMenu.classList.remove("active");
    if (overlay) overlay.classList.remove("active");
    if (mobileMenuToggle) mobileMenuToggle.classList.remove("active");
    unlockScroll();
  }

  if (mobileMenuToggle && navMenu) {
    // Open/close menu toggle
    mobileMenuToggle.addEventListener("click", function () {
      if (navMenu.classList.contains("active")) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    // Close menu when clicking on overlay
    if (overlay) {
      overlay.addEventListener("click", closeMenu);
    }

    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll(".nav-menu a");
    navLinks.forEach((link) => {
      link.addEventListener("click", closeMenu);
    });

    // Close menu on escape key
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && navMenu.classList.contains("active")) {
        closeMenu();
      }
    });
  }

  // Show success/error messages from contact form
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.get("success") === "1") {
    const overlay = document.getElementById("contact-success-overlay");
    const wrapper = document.querySelector(".contact-form-wrapper");
    const inlineSuccess = document.querySelector(".form-message-success");

    if (wrapper) wrapper.classList.add("success-pulse");
    if (overlay) {
      // Hide the boring inline message when we have the nice overlay
      if (inlineSuccess) inlineSuccess.style.display = "none";

      // click anywhere to dismiss
      overlay.addEventListener(
        "click",
        () => {
          overlay.classList.remove("is-visible");
        },
        { once: true }
      );
      // auto dismiss
      window.setTimeout(() => overlay.classList.remove("is-visible"), 2000);
    }

    // Clean URL (avoid re-show on refresh) without jumping scroll
    try {
      const u = new URL(window.location.href);
      u.searchParams.delete("success");
      u.searchParams.delete("error");
      if (!u.hash) u.hash = "#contact-form";
      window.history.replaceState({}, "", u.toString());
    } catch (_) {}
  } else if (urlParams.get("error")) {
    // Errors are shown inline on the contact page (no alert popups)
  }


  // Animate numbers counter - all at once
  let numbersAnimated = false;
  const featureNumbers = document.querySelectorAll(".feature-number[data-target]");
  
  function animateAllNumbers() {
    if (numbersAnimated) return;
    numbersAnimated = true;
    
    const duration = 2000; // 2 seconds
    const startTime = performance.now();
    const startValue = 0;
    
    function updateAllNumbers(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      
      // Easing function for smooth animation
      const easeOutQuart = 1 - Math.pow(1 - progress, 4);
      
      featureNumbers.forEach((element) => {
        const target = parseInt(element.getAttribute("data-target"));
        const suffix = element.getAttribute("data-suffix") || "";
        const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);
        
        element.textContent = currentValue;
        
        if (progress >= 1) {
          // Add suffix when animation completes
          element.textContent = target + suffix;
        }
      });
      
      if (progress < 1) {
        requestAnimationFrame(updateAllNumbers);
      }
    }
    
    requestAnimationFrame(updateAllNumbers);
  }

  // Observe the about-features container for animation
  const aboutFeatures = document.querySelector(".about-features");
  if (aboutFeatures) {
    const numbersObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !numbersAnimated) {
            animateAllNumbers();
            numbersObserver.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.3,
        rootMargin: "0px 0px -100px 0px",
      }
    );
    
    numbersObserver.observe(aboutFeatures);
  }


  // Smooth scroll for anchor links with offset
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#' || href === '#!') return;
      
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        const headerOffset = 80;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth',
        });
      }
    });
  });

  // Safety net: never keep the page scroll-locked after navigation/bfcache restore
  window.addEventListener("pageshow", function () {
    unlockScroll(true);
    if (navMenu) navMenu.classList.remove("active");
    if (overlay) overlay.classList.remove("active");
    if (mobileMenuToggle) mobileMenuToggle.classList.remove("active");
  });

});
