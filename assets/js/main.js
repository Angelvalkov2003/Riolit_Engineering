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

  // Add animation on scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, observerOptions);

  // Observe service cards and other elements
  document
    .querySelectorAll(".service-card, .quality-item, .project-card")
    .forEach((el) => {
      el.style.opacity = "0";
      el.style.transform = "translateY(20px)";
      el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
      observer.observe(el);
    });
});
