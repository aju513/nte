document.addEventListener("DOMContentLoaded", () => {
  const qs = (selector, ctx) => (ctx || document).querySelector(selector);
  const qsa = (selector, ctx) =>
    Array.from((ctx || document).querySelectorAll(selector));

  const initAccordions = () => {
    const accordions = qsa(".accordion");
    const speed = 220;

    const initAccordion = (accordion) => {
      if (!accordion || accordion.dataset.accordionBound === "true") {
        return;
      }

      const items = qsa(".accordion__item", accordion).filter(
        (item) => item.parentElement === accordion,
      );

      const closeItem = (item) => {
        const title = qs(".accordion__item-title", item);
        const content = qs(".accordion__item-content", item);
        if (!content) return;

        item.classList.remove("open");
        item.classList.remove("active");
        title?.classList.remove("active");

        content.style.overflow = "hidden";
        content.style.maxHeight = `${content.scrollHeight}px`;
        requestAnimationFrame(() => {
          content.style.maxHeight = "0px";
        });
      };

      const openItem = (item) => {
        const title = qs(".accordion__item-title", item);
        const content = qs(".accordion__item-content", item);
        if (!content) return;

        item.classList.add("open");
        item.classList.add("active");
        title?.classList.add("active");

        content.style.overflow = "hidden";
        content.style.maxHeight = `${content.scrollHeight}px`;
        window.setTimeout(() => {
          if (item.classList.contains("open")) {
            content.style.maxHeight = "none";
          }
        }, speed);
      };

      items.forEach((item) => {
        const title = qs(".accordion__item-title", item);
        const content = qs(".accordion__item-content", item);
        if (!title || !content) return;

        const shouldOpen =
          item.classList.contains("open") || item.classList.contains("active");

        content.style.overflow = "hidden";
        if (shouldOpen) {
          item.classList.add("open");
          item.classList.add("active");
          title.classList.add("active");
          content.style.maxHeight = "none";
        } else {
          item.classList.remove("open");
          item.classList.remove("active");
          title.classList.remove("active");
          content.style.maxHeight = "0px";
        }
      });

      accordion.addEventListener("click", (event) => {
        const title = event.target.closest(".accordion__item-title");
        if (!title || !accordion.contains(title)) return;

        const item = title.closest(".accordion__item");
        if (!item || item.parentElement !== accordion) return;

        const isOpen = item.classList.contains("open");
        items.forEach((otherItem) => {
          if (otherItem !== item) closeItem(otherItem);
        });

        if (isOpen) {
          closeItem(item);
        } else {
          openItem(item);
        }
      });

      accordion.dataset.accordionBound = "true";
    };

    accordions.forEach(initAccordion);
  };

  const initWhyChooseAccordions = () => {
    const accordions = qsa(".why-choose-accordion");
    const speed = 300;

    accordions.forEach((accordion) => {
      if (!accordion || accordion.dataset.whyChooseAccordionBound === "true") {
        return;
      }

      const items = qsa(".why-choose-accordion__item", accordion);

      const closeItem = (item) => {
        const trigger = qs(".why-choose-accordion__trigger", item);
        const content = qs(".why-choose-accordion__content", item);
        if (!trigger || !content) return;

        item.classList.remove("is-open");
        trigger.setAttribute("aria-expanded", "false");

        content.style.overflow = "hidden";
        content.style.maxHeight = `${content.scrollHeight}px`;
        requestAnimationFrame(() => {
          content.style.maxHeight = "0px";
        });
      };

      const openItem = (item) => {
        const trigger = qs(".why-choose-accordion__trigger", item);
        const content = qs(".why-choose-accordion__content", item);
        if (!trigger || !content) return;

        item.classList.add("is-open");
        trigger.setAttribute("aria-expanded", "true");

        content.style.overflow = "hidden";
        content.style.maxHeight = `${content.scrollHeight}px`;
        window.setTimeout(() => {
          if (item.classList.contains("is-open")) {
            content.style.maxHeight = "none";
          }
        }, speed);
      };

      items.forEach((item) => {
        const trigger = qs(".why-choose-accordion__trigger", item);
        const content = qs(".why-choose-accordion__content", item);
        if (!trigger || !content) return;

        const isOpen =
          item.classList.contains("is-open") ||
          trigger.getAttribute("aria-expanded") === "true";

        content.style.overflow = "hidden";
        if (isOpen) {
          item.classList.add("is-open");
          trigger.setAttribute("aria-expanded", "true");
          content.style.maxHeight = "none";
        } else {
          item.classList.remove("is-open");
          trigger.setAttribute("aria-expanded", "false");
          content.style.maxHeight = "0px";
        }
      });

      accordion.addEventListener("click", (event) => {
        const trigger = event.target.closest(".why-choose-accordion__trigger");
        if (!trigger || !accordion.contains(trigger)) return;

        const item = trigger.closest(".why-choose-accordion__item");
        if (!item) return;

        const isOpen = item.classList.contains("is-open");
        items.forEach((otherItem) => {
          if (otherItem !== item) closeItem(otherItem);
        });

        if (isOpen) {
          closeItem(item);
        } else {
          openItem(item);
        }
      });

      accordion.dataset.whyChooseAccordionBound = "true";
    });
  };

  const initCollapsibles = () => {
    const triggers = qsa(".collapsible");
    const speed = 220;

    const open = (trigger, content) => {
      trigger.classList.add("active");
      trigger.setAttribute("aria-expanded", "true");
      const icon = qs(".icon", trigger);
      if (icon) icon.textContent = "-";

      content.style.overflow = "hidden";
      content.style.maxHeight = `${content.scrollHeight}px`;
      window.setTimeout(() => {
        if (trigger.classList.contains("active")) {
          content.style.maxHeight = "none";
        }
      }, speed);
    };

    const close = (trigger, content) => {
      trigger.classList.remove("active");
      trigger.setAttribute("aria-expanded", "false");
      const icon = qs(".icon", trigger);
      if (icon) icon.textContent = "+";

      content.style.overflow = "hidden";
      content.style.maxHeight = `${content.scrollHeight}px`;
      requestAnimationFrame(() => {
        content.style.maxHeight = "0px";
      });
    };

    triggers.forEach((trigger) => {
      if (!trigger || trigger.dataset.collapsibleBound === "true") return;

      const content = trigger.nextElementSibling;
      if (!content?.classList?.contains("collapsible-content")) return;

      const shouldOpen =
        trigger.classList.contains("active") ||
        trigger.dataset.defaultOpen === "true" ||
        trigger.getAttribute("aria-expanded") === "true";

      if (shouldOpen) {
        open(trigger, content);
      } else {
        close(trigger, content);
      }

      trigger.addEventListener("click", (event) => {
        event.preventDefault();
        if (trigger.classList.contains("active")) {
          close(trigger, content);
        } else {
          open(trigger, content);
        }
      });

      trigger.dataset.collapsibleBound = "true";
    });
  };

  const initHeaderInteractions = () => {
    const headerRoot = qs(".header");
    if (!headerRoot || headerRoot.dataset.headerInteractionsBound === "true") {
      return;
    }
    headerRoot.dataset.headerInteractionsBound = "true";

    const initStickyHeader = () => {
      const scrollThreshold = 300;
      const headerHeight = 85;

      window.addEventListener("scroll", () => {
        const header = qs(".header .web__menu");
        const headerHeightEl = qs(".header .header-height");
        if (!header) return;

        if (document.body.classList.contains("no-header-sticky")) {
          header.classList.remove("sticky");
          if (headerHeightEl) headerHeightEl.style.height = "0";
          return;
        }

        if (window.innerWidth <= 1024) {
          header.classList.remove("sticky");
          if (headerHeightEl) headerHeightEl.style.height = "0";
          return;
        }

        if (window.scrollY > scrollThreshold) {
          header.classList.add("sticky");
          if (headerHeightEl) headerHeightEl.style.height = `${headerHeight}px`;
        } else {
          header.classList.remove("sticky");
          if (headerHeightEl) headerHeightEl.style.height = "0";
        }
      });
    };

    const initDesktopDropdowns = () => {
      const closeAllDropdowns = () => {
        qsa(".header .web__menu .dropdown").forEach((dropdown) => {
          dropdown.classList.add("hidden");
        });
        qsa(".header .web__menu .dropdown-toggle").forEach((toggle) => {
          toggle.setAttribute("aria-expanded", "false");
        });
        qsa(".header .web__menu .dropdown-toggle .icon").forEach((icon) => {
          icon.classList.remove("rotate-180");
        });
      };

      qsa(".header .web__menu .dropdown-toggle").forEach((toggle) => {
        toggle.addEventListener("click", () => {
          const dropdown = toggle.nextElementSibling;
          if (!dropdown?.classList?.contains("dropdown")) return;

          const isHidden = dropdown.classList.contains("hidden");
          closeAllDropdowns();

          if (isHidden) {
            dropdown.classList.remove("hidden");
            toggle.setAttribute("aria-expanded", "true");
            toggle.querySelector(".icon")?.classList.add("rotate-180");
          }
        });
      });

      document.addEventListener("mousedown", (event) => {
        if (!event.target.closest(".header .web__menu")) {
          closeAllDropdowns();
          return;
        }

        if (
          !event.target.closest(".dropdown-toggle") &&
          !event.target.closest(".dropdown")
        ) {
          closeAllDropdowns();
        }
      });
    };

    const initDestinationTabs = () => {
      qsa(".header .web__menu .nav-tab-links").forEach((tabList) => {
        const buttons = qsa(".tab-item", tabList);
        if (buttons.length === 0) return;

        const container = tabList.parentElement;
        if (!container) return;

        const panels = Array.from(container.children).filter(
          (element) => element?.classList?.contains("tab"),
        );
        if (panels.length === 0) return;

        const setActive = (index) => {
          buttons.forEach((button, i) => {
            button.classList.toggle("active", i === index);
          });
          panels.forEach((panel, i) => {
            panel.style.display = i === index ? "block" : "none";
          });
        };

        let initialIndex = buttons.findIndex((button) =>
          button.classList.contains("active"),
        );
        if (initialIndex < 0) initialIndex = 0;
        setActive(Math.min(initialIndex, panels.length - 1));

        buttons.forEach((button, index) => {
          button.addEventListener("click", (event) => {
            event.preventDefault();
            setActive(Math.min(index, panels.length - 1));
          });
        });
      });
    };

    const initDesktopSearch = () => {
      const trigger = qs(".websearch-trigger");
      const closeButton = qs(".websearch-close");
      const form = qs(".websearch-form");
      const mobileTriggers = qsa(".show-search");

      if (trigger && form) {
        trigger.addEventListener("click", () => {
          form.classList.toggle("hidden");
        });
      }

      if (closeButton && form) {
        closeButton.addEventListener("click", (event) => {
          event.preventDefault();
          form.classList.add("hidden");
        });
      }

      if (form) {
        mobileTriggers.forEach((button) => {
          button.addEventListener("click", () => {
            form.classList.remove("hidden");
          });
        });
      }
    };

    const initMobileMenu = () => {
      const menuButton = qs(".header .mobile-menu-button");
      const menuTrigger = menuButton?.querySelector(".mobile-menu-trigger");
      const menuList = qs(".header .mobile__menu-content > ul");
      if (!menuButton || !menuList) return;

      const setOpen = (open) => {
        menuList.classList.toggle("open", open);
        menuButton.setAttribute("aria-expanded", open ? "true" : "false");
        menuTrigger?.classList.toggle("active", open);
        document.body.classList.toggle("nav-open", open);
      };

      menuButton.addEventListener("click", (event) => {
        event.preventDefault();
        setOpen(!menuList.classList.contains("open"));
      });

      document.addEventListener("mousedown", (event) => {
        if (!menuList.classList.contains("open")) return;
        if (event.target.closest(".header .mobile__menu")) return;
        setOpen(false);
      });

      window.addEventListener("resize", () => {
        if (window.innerWidth >= 1024) setOpen(false);
      });
    };

    const initMobileAccordion = () => {
      const menuContent = qs(".header .mobile__menu-content");
      if (!menuContent) return;

      const refreshAncestorHeights = (fromElement) => {
        let node = fromElement?.parentElement;
        while (node) {
          if (
            node.tagName === "UL" &&
            node.style.maxHeight &&
            node.style.maxHeight !== "0px"
          ) {
            node.style.maxHeight = `${node.scrollHeight}px`;
          }
          if (node.classList?.contains("mobile__menu-content")) break;
          node = node.parentElement;
        }
      };

      const toggleSubmenu = (iconElement) => {
        const submenu = iconElement?.nextElementSibling;
        if (!submenu || submenu.tagName !== "UL") return;

        const isOpen = iconElement.classList.contains("opened");
        if (isOpen) {
          submenu.style.maxHeight = `${submenu.scrollHeight}px`;
          requestAnimationFrame(() => {
            submenu.style.maxHeight = "0px";
            refreshAncestorHeights(submenu);
          });
          iconElement.classList.remove("opened");
        } else {
          submenu.style.maxHeight = `${submenu.scrollHeight}px`;
          iconElement.classList.add("opened");
          refreshAncestorHeights(submenu);
        }
      };

      menuContent.addEventListener("click", (event) => {
        const icon = event.target.closest(".mobile-toggle-icon");
        if (icon) {
          event.preventDefault();
          toggleSubmenu(icon);
          return;
        }

        const link = event.target.closest("a");
        if (!link) return;

        const href = link.getAttribute("href") || "";
        const siblingIcon = link.nextElementSibling;
        if (
          href === "#" &&
          siblingIcon?.classList?.contains("mobile-toggle-icon")
        ) {
          event.preventDefault();
          toggleSubmenu(siblingIcon);
        }
      });
    };

    const initMobileSticky = () => {
      window.addEventListener("scroll", () => {
        const navbar = qs(".header .mobile__menu");
        if (!navbar) return;
        navbar.classList.toggle("sticky", window.scrollY > 100);
      });
    };

    initStickyHeader();
    initDesktopDropdowns();
    initDestinationTabs();
    initDesktopSearch();
    initMobileMenu();
    initMobileAccordion();
    initMobileSticky();
  };

  initHeaderInteractions();
  initAccordions();
  initWhyChooseAccordions();
  initCollapsibles();

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
      .querySelectorAll(
        "article table, .useful-info table, .package__equipment-info table",
      )
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
