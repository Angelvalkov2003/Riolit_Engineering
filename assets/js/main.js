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

  // Brand carousel with infinite loop and smooth drag/swipe
  const brandCarouselTrack = document.querySelector(".brand-carousel-track");
  const carouselContainer = document.querySelector(".brand-carousel-container");
  const prevBtn = document.querySelector(".carousel-btn-prev");
  const nextBtn = document.querySelector(".carousel-btn-next");
  
  if (brandCarouselTrack && carouselContainer && prevBtn && nextBtn) {
    let currentPosition = 0;
    let isDragging = false;
    let startX = 0;
    let startY = 0;
    let startPosition = 0;
    let velocity = 0;
    let lastX = 0;
    let lastTime = 0;
    let itemWidth = 0;
    let gap = 0;
    let originalItemsWidth = 0;
    let cloneStartWidth = 0;
    let cloneEndWidth = 0;
    let isTransitioning = false;
    
    // Get all items
    const allItems = brandCarouselTrack.querySelectorAll(".brand-item");
    const originalItems = Array.from(allItems).filter(item => !item.hasAttribute('data-clone'));
    const cloneStartItems = Array.from(allItems).filter(item => item.getAttribute('data-clone') === 'start');
    const cloneEndItems = Array.from(allItems).filter(item => item.getAttribute('data-clone') === 'end');
    
    const updateCarouselDimensions = () => {
      const firstItem = brandCarouselTrack.querySelector(".brand-item");
      if (firstItem) {
        itemWidth = firstItem.offsetWidth;
        const computedStyle = window.getComputedStyle(brandCarouselTrack);
        gap = parseFloat(computedStyle.gap) || 48;
        
        // Calculate widths
        const itemSize = itemWidth + gap;
        cloneStartWidth = cloneStartItems.length * itemSize;
        cloneEndWidth = cloneEndItems.length * itemSize;
        originalItemsWidth = originalItems.length * itemSize;
        
        // Set initial position to start of original items
        currentPosition = -cloneEndWidth;
        brandCarouselTrack.style.transform = `translateX(${currentPosition}px)`;
      }
      updateButtons();
    };
    
    const updateButtons = () => {
      // Buttons are always enabled in infinite carousel
      prevBtn.disabled = false;
      nextBtn.disabled = false;
    };
    
    const checkInfiniteLoop = () => {
      if (isTransitioning) return;
      
      const itemSize = itemWidth + gap;
      
      // If we've scrolled past the end clones, jump to start of original items
      if (currentPosition > -cloneEndWidth) {
        isTransitioning = true;
        brandCarouselTrack.style.transition = "none";
        currentPosition = -cloneEndWidth - originalItemsWidth + (currentPosition + cloneEndWidth);
        brandCarouselTrack.style.transform = `translateX(${currentPosition}px)`;
        
        requestAnimationFrame(() => {
          brandCarouselTrack.style.transition = "";
          isTransitioning = false;
        });
      }
      // If we've scrolled before the start clones, jump to end of original items
      else if (currentPosition < -cloneEndWidth - originalItemsWidth - cloneStartWidth) {
        isTransitioning = true;
        brandCarouselTrack.style.transition = "none";
        const overflow = currentPosition + cloneEndWidth + originalItemsWidth + cloneStartWidth;
        currentPosition = -cloneEndWidth - originalItemsWidth + overflow;
        brandCarouselTrack.style.transform = `translateX(${currentPosition}px)`;
        
        requestAnimationFrame(() => {
          brandCarouselTrack.style.transition = "";
          isTransitioning = false;
        });
      }
    };
    
    const snapToNearest = () => {
      const itemSize = itemWidth + gap;
      const currentIndex = Math.round(-currentPosition / itemSize);
      const targetPosition = -currentIndex * itemSize;
      
      currentPosition = targetPosition;
      brandCarouselTrack.style.transition = "transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)";
      brandCarouselTrack.style.transform = `translateX(${currentPosition}px)`;
      
      // Check for infinite loop after snap
      setTimeout(() => {
        checkInfiniteLoop();
        brandCarouselTrack.style.transition = "";
      }, 400);
    };
    
    const moveCarousel = (direction) => {
      const itemSize = itemWidth + gap;
      
      if (direction === 'next') {
        currentPosition -= itemSize;
      } else {
        currentPosition += itemSize;
      }
      
      brandCarouselTrack.style.transition = "transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)";
      brandCarouselTrack.style.transform = `translateX(${currentPosition}px)`;
      
      setTimeout(() => {
        checkInfiniteLoop();
        brandCarouselTrack.style.transition = "";
      }, 400);
    };
    
    const updatePosition = (x) => {
      const diff = startX - x;
      currentPosition = startPosition - diff;
      
      // No bounds clamping for infinite carousel, but check for loop
      brandCarouselTrack.style.transform = `translateX(${currentPosition}px)`;
      checkInfiniteLoop();
    };
    
    const handleMove = (x, time) => {
      if (!isDragging) return;
      
      if (lastTime && time - lastTime > 0) {
        velocity = (lastX - x) / (time - lastTime);
      }
      
      lastX = x;
      lastTime = time;
      
      updatePosition(x);
    };
    
    const handleEnd = () => {
      if (!isDragging) return;
      isDragging = false;
      brandCarouselTrack.style.cursor = "grab";
      brandCarouselTrack.style.userSelect = "";
      
      // Apply momentum if velocity is high enough
      const momentumThreshold = 0.5;
      if (Math.abs(velocity) > momentumThreshold) {
        const itemSize = itemWidth + gap;
        
        // Calculate momentum distance
        const momentum = velocity * 200; // Adjust multiplier for momentum strength
        currentPosition += momentum;
        
        // Snap to nearest item
        setTimeout(() => {
          snapToNearest();
        }, 100);
      } else {
        // Just snap to nearest
        snapToNearest();
      }
      
      velocity = 0;
      lastX = 0;
      lastTime = 0;
    };
    
    // Arrow button handlers
    nextBtn.addEventListener("click", () => moveCarousel('next'));
    prevBtn.addEventListener("click", () => moveCarousel('prev'));
    
    // Touch handlers
    brandCarouselTrack.addEventListener("touchstart", (e) => {
      isDragging = true;
      startX = e.touches[0].clientX;
      startY = e.touches[0].clientY;
      startPosition = currentPosition;
      lastX = startX;
      lastTime = Date.now();
      brandCarouselTrack.style.transition = "";
      brandCarouselTrack.style.userSelect = "none";
    }, { passive: true });
    
    brandCarouselTrack.addEventListener("touchmove", (e) => {
      if (!isDragging) return;
      const x = e.touches[0].clientX;
      const y = e.touches[0].clientY;
      
      // Check if horizontal movement is greater than vertical (swipe, not scroll)
      const deltaX = Math.abs(x - startX);
      const deltaY = Math.abs(y - startY);
      
      if (deltaX > deltaY) {
        e.preventDefault();
        handleMove(x, Date.now());
      }
    }, { passive: false });
    
    brandCarouselTrack.addEventListener("touchend", (e) => {
      handleEnd();
    }, { passive: true });
    
    brandCarouselTrack.addEventListener("touchcancel", () => {
      handleEnd();
    }, { passive: true });
    
    // Mouse drag handlers
    brandCarouselTrack.addEventListener("mousedown", (e) => {
      isDragging = true;
      startX = e.clientX;
      startY = e.clientY;
      startPosition = currentPosition;
      lastX = startX;
      lastTime = Date.now();
      brandCarouselTrack.style.cursor = "grabbing";
      brandCarouselTrack.style.transition = "";
      brandCarouselTrack.style.userSelect = "none";
      e.preventDefault();
    });
    
    brandCarouselTrack.addEventListener("mouseleave", () => {
      if (isDragging) {
        handleEnd();
      }
    });
    
    brandCarouselTrack.addEventListener("mouseup", () => {
      if (isDragging) {
        handleEnd();
      }
    });
    
    brandCarouselTrack.addEventListener("mousemove", (e) => {
      if (!isDragging) return;
      e.preventDefault();
      handleMove(e.clientX, Date.now());
    });
    
    // Set initial cursor
    brandCarouselTrack.style.cursor = "grab";
    
    // Initialize
    updateCarouselDimensions();
    
    // Recalculate on window resize
    let resizeTimer;
    window.addEventListener("resize", () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        const oldPosition = currentPosition;
        updateCarouselDimensions();
        // Adjust position relative to new dimensions
        const itemSize = itemWidth + gap;
        const relativeIndex = Math.round(-oldPosition / itemSize);
        currentPosition = -cloneEndWidth - (relativeIndex * itemSize);
        brandCarouselTrack.style.transform = `translateX(${currentPosition}px)`;
        checkInfiniteLoop();
        updateButtons();
      }, 250);
    });
    
    // Wait for images to load
    const brandImages = brandCarouselTrack.querySelectorAll("img");
    let imagesLoaded = 0;
    const totalImages = brandImages.length;
    
    if (totalImages > 0) {
      brandImages.forEach((img) => {
        if (img.complete) {
          imagesLoaded++;
        } else {
          img.addEventListener("load", () => {
            imagesLoaded++;
            if (imagesLoaded === totalImages) {
              updateCarouselDimensions();
            }
          });
        }
      });
      
      if (imagesLoaded === totalImages) {
        updateCarouselDimensions();
      }
    }
  }
});
