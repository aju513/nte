document.addEventListener("DOMContentLoaded", () => {
  const menuButton = document.querySelector(".menu-button");
  const mobileMenuRoot = document.querySelector(".overflow > ul");
  const menuLabel = document.querySelector(".menu");

  menuButton?.addEventListener("click", (event) => {
    event.preventDefault();
    mobileMenuRoot?.classList.toggle("open");
    menuLabel?.classList.toggle("open");
    document.body.classList.toggle("nav-open");
  });

  document.querySelectorAll(".open-menu").forEach((toggle) => {
    toggle.addEventListener("click", (event) => {
      event.preventDefault();

      const submenu = toggle.nextElementSibling;
      if (!submenu || submenu.tagName.toLowerCase() !== "ul") {
        return;
      }

      submenu.style.maxHeight = submenu.style.maxHeight === "10000px" ? "0" : "10000px";
      toggle.classList.toggle("rotate");
    });
  });

  document.querySelectorAll(".mega-wrapper").forEach((wrapper) => {
    const tabButtons = wrapper.querySelectorAll(".tab-item");
    const tabs = wrapper.querySelectorAll(".tab");

    tabButtons.forEach((button) => {
      button.addEventListener("click", (event) => {
        event.stopPropagation();

        const target = button.dataset.tab;
        tabButtons.forEach((item) => item.classList.remove("active"));
        tabs.forEach((tab) => tab.classList.add("hidden"));

        button.classList.add("active");
        wrapper.querySelector(`#tab-${target}`)?.classList.remove("hidden");
      });
    });
  });

  const toggleDropdown = (event) => {
    event.stopPropagation();
    const dropdown = event.currentTarget.nextElementSibling;

    if (!dropdown) {
      return;
    }

    document.querySelectorAll(".dropdown").forEach((item) => {
      if (item !== dropdown) {
        item.classList.add("hidden");
        item.previousElementSibling?.querySelector(".icon")?.classList.remove("rotate-180");
      }
    });

    dropdown.classList.toggle("hidden");
    event.currentTarget.querySelector(".icon")?.classList.toggle("rotate-180");
  };

  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", toggleDropdown);
  });

  document.addEventListener("click", (event) => {
    document.querySelectorAll(".dropdown").forEach((dropdown) => {
      const toggle = dropdown.previousElementSibling;
      if (!dropdown.contains(event.target) && toggle && !toggle.contains(event.target)) {
        dropdown.classList.add("hidden");
        toggle.querySelector(".icon")?.classList.remove("rotate-180");
      }
    });
  });

  const desktopHeader = document.querySelector(".header__menu");
  const headerHeightSpacer = document.querySelector(".header-height");
  const stickyHeight = 59;
  const stickyOffset = 300;

  const handleStickyHeader = () => {
    const scrollTop = window.scrollY;

    if (desktopHeader && window.innerWidth >= 1024) {
      if (scrollTop > stickyOffset) {
        desktopHeader.classList.add("sticky");
        if (headerHeightSpacer) headerHeightSpacer.style.height = `${stickyHeight}px`;
      } else {
        desktopHeader.classList.remove("sticky");
        if (headerHeightSpacer) headerHeightSpacer.style.height = "0";
      }
    }

    document.querySelector(".mob-nav")?.classList.toggle("sticky", scrollTop > 100);
  };

  window.addEventListener("scroll", handleStickyHeader);
  handleStickyHeader();

  const searchButton = document.querySelector(".search-btn");
  const searchClose = document.querySelector(".search-close");
  const searchBox = document.querySelector(".search-box-elements");

  searchButton?.addEventListener("click", () => {
    searchBox?.classList.toggle("hidden");
  });

  searchClose?.addEventListener("click", (event) => {
    event.preventDefault();
    searchBox?.classList.add("hidden");
  });

  document.addEventListener("click", (event) => {
    if (searchBox && searchButton && !searchBox.contains(event.target) && !searchButton.contains(event.target)) {
      searchBox.classList.add("hidden");
    }
  });

  const mobileSearchPopup = document.getElementById("mobile-search-popup");
  if (mobileSearchPopup) {
    const dialog = mobileSearchPopup.querySelector(".modal-dialog");
    const content = mobileSearchPopup.querySelector(".modal-content");
    const close = mobileSearchPopup.querySelector(".modal-close");

    document.getElementById("open-search")?.addEventListener("click", () => {
      dialog?.classList.add("is-active");
    });

    close?.addEventListener("click", (event) => {
      event.preventDefault();
      dialog?.classList.remove("is-active");
    });

    document.addEventListener("mousedown", (event) => {
      if (dialog && content && !content.contains(event.target)) {
        dialog.classList.remove("is-active");
      }
    });
  }

  document.querySelectorAll(".more-less-wrapper").forEach((wrapper) => {
    const height = parseInt(wrapper.dataset.height || "0", 10);
    const fullHeight = wrapper.scrollHeight;
    const toggle = wrapper.nextElementSibling;

    if (fullHeight > height) {
      wrapper.style.height = `${height}px`;
      wrapper.classList.add("collapsed");
      if (toggle?.classList.contains("read-more-toggle")) {
        toggle.textContent = toggle.dataset.moreText;
      }
    } else if (toggle?.classList.contains("read-more-toggle")) {
      toggle.style.display = "none";
    }
  });

  document.body.addEventListener("click", (event) => {
    if (!event.target.matches(".read-more-toggle")) {
      return;
    }

    event.preventDefault();
    const toggle = event.target;
    const wrapper = toggle.previousElementSibling;
    const collapsedHeight = parseInt(wrapper.dataset.height || "0", 10);
    const fullHeight = wrapper.scrollHeight;

    if (wrapper.classList.contains("collapsed")) {
      wrapper.style.height = `${fullHeight}px`;
      wrapper.classList.replace("collapsed", "expanded");
      toggle.textContent = toggle.dataset.lessText;
    } else {
      wrapper.style.height = `${collapsedHeight}px`;
      wrapper.classList.replace("expanded", "collapsed");
      toggle.textContent = toggle.dataset.moreText;
    }
  });

  document.getElementById("paymentSubmit")?.addEventListener("click", () => {
    const bookingForm = document.getElementById("booking-form");
    const paymentProcess = document.getElementById("paymentProcess");

    if (bookingForm?.checkValidity()) {
      paymentProcess?.classList.remove("hidden");
    }
  });

  setTimeout(() => {
    document
      .querySelectorAll("article table, .useful-info table, .package__equipment-info table")
      .forEach((table) => {
        if (!table.parentElement.classList.contains("table-responsive")) {
          const wrapper = document.createElement("div");
          wrapper.classList.add("table-responsive");
          table.parentNode.insertBefore(wrapper, table);
          wrapper.appendChild(table);
        }
      });
  }, 500);

  if (window.Swiper) {
    new Swiper(".searchSwiper", {
      slidesPerView: 1,
      loop: true,
      speed: 800,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });

    new Swiper(".categorySwiper", {
      slidesPerView: 4,
      spaceBetween: 20,
      loop: true,
      speed: 900,
      preventInteractionOnTransition: true,
      navigation: {
        nextEl: ".category-next",
        prevEl: ".category-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
        1280: {
          slidesPerView: 4,
        },
      },
    });

    new Swiper(".testimonialSwiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: ".testimonial-next",
        prevEl: ".testimonial-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 1,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
      },
    });

    new Swiper(".bestsellingSwiper", {
      loop: false,
      slidesPerView: 1,
      spaceBetween: 16,
      navigation: {
        nextEl: ".bestselling-next",
        prevEl: ".bestselling-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });

    new Swiper(".featuredSwiper", {
      loop: false,
      slidesPerView: 1,
      spaceBetween: 16,
      navigation: {
        nextEl: ".featured-next",
        prevEl: ".featured-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
  }

  if (window.Fancybox) {
    Fancybox.bind("[data-fancybox]", {});
  }

  document.querySelectorAll("img.lazy").forEach((image) => {
    const realSrc = image.dataset.src;
    if (!realSrc) {
      return;
    }

    const fallbackSrc = image.src;
    const preload = new Image();
    preload.src = realSrc;

    preload.onload = function () {
      image.src = this.src;
      image.classList.add("is-loaded");
    };

    preload.onerror = function () {
      image.src = fallbackSrc;
    };
  });
});
