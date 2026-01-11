// Mobile menu toggle
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const navMenu = document.querySelector(".nav-menu");
  const overlay = document.querySelector(".mobile-menu-overlay");
  const body = document.body;

  function openMenu() {
    if (navMenu) navMenu.classList.add("active");
    if (overlay) overlay.classList.add("active");
    if (mobileMenuToggle) mobileMenuToggle.classList.add("active");
    if (body) body.style.overflow = "hidden";
  }

  function closeMenu() {
    if (navMenu) navMenu.classList.remove("active");
    if (overlay) overlay.classList.remove("active");
    if (mobileMenuToggle) mobileMenuToggle.classList.remove("active");
    if (body) body.style.overflow = "";
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

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // Show success/error messages from contact form
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.get("success") === "1") {
    alert(
      "Благодарим ви! Вашето съобщение е изпратено успешно. Ще се свържем с вас скоро."
    );
  } else if (urlParams.get("error")) {
    const error = urlParams.get("error");
    if (error === "missing_fields") {
      alert("Моля, попълнете всички задължителни полета.");
    } else if (error === "invalid_email") {
      alert("Моля, въведете валиден имейл адрес.");
    }
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


});
