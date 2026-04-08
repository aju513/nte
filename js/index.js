document.addEventListener("DOMContentLoaded", () => {
  const u = document.querySelector(".menu-button"),
    m = document.querySelector(".overflow > ul"),
    g = document.querySelector(".menu");
  (u?.addEventListener("click", (e) => {
    (e.preventDefault(),
      m?.classList.toggle("open"),
      g?.classList.toggle("open"),
      document.body.classList.toggle("nav-open"));
  }),
    document.querySelectorAll(".open-menu").forEach((e) => {
      e.addEventListener("click", (t) => {
        t.preventDefault();
        const s = e.nextElementSibling;
        !s ||
          s.tagName.toLowerCase() !== "ul" ||
          ((s.style.maxHeight =
            s.style.maxHeight === "10000px" ? "0" : "10000px"),
          e.classList.toggle("rotate"));
      });
    }),
    document.querySelectorAll(".mega-wrapper").forEach((e) => {
      const t = e.querySelectorAll(".tab-item"),
        s = e.querySelectorAll(".tab");
      t.forEach((o) => {
        o.addEventListener("click", (n) => {
          n.stopPropagation();
          const E = o.dataset.tab;
          (t.forEach((r) => r.classList.remove("active")),
            o.classList.add("active"),
            s.forEach((r) => r.classList.add("hidden")),
            e.querySelector("#tab-" + E)?.classList.remove("hidden"));
        });
      });
    }));
  const h = (e) => {
    e.stopPropagation();
    const t = e.currentTarget.nextElementSibling;
    t &&
      (document.querySelectorAll(".dropdown").forEach((s) => {
        s !== t &&
          (s.classList.add("hidden"),
          s.previousElementSibling
            ?.querySelector(".icon")
            ?.classList.remove("rotate-180"));
      }),
      t.classList.toggle("hidden"),
      e.currentTarget.querySelector(".icon")?.classList.toggle("rotate-180"));
  };
  (document
    .querySelectorAll(".dropdown-toggle")
    .forEach((e) => e.addEventListener("click", h)),
    document.addEventListener("click", (e) => {
      document.querySelectorAll(".dropdown").forEach((t) => {
        !t.contains(e.target) &&
          !t.previousElementSibling.contains(e.target) &&
          (t.classList.add("hidden"),
          t.previousElementSibling
            ?.querySelector(".icon")
            ?.classList.remove("rotate-180"));
      });
    }));
  const a = document.querySelector(".header__menu"),
    d = document.querySelector(".header-height"),
    p = 59,
    L = 300,
    y = () => {
      const e = window.scrollY;
      (a &&
        window.innerWidth >= 1024 &&
        (e > L
          ? (a.classList.add("sticky"), (d.style.height = `${p}px`))
          : (a.classList.remove("sticky"), (d.style.height = "0"))),
        document
          .querySelector(".mob-nav")
          ?.classList.toggle("sticky", e > 100));
    };
  window.addEventListener("scroll", y);
  const i = document.querySelector(".search-btn"),
    v = document.querySelector(".search-close"),
    c = document.querySelector(".search-box-elements");
  (i?.addEventListener("click", () => c?.classList.toggle("hidden")),
    v?.addEventListener("click", (e) => {
      (e.preventDefault(), c?.classList.add("hidden"));
    }),
    document.addEventListener("click", (e) => {
      c &&
        i &&
        !c.contains(e.target) &&
        !i.contains(e.target) &&
        c.classList.add("hidden");
    }));
  const l = document.getElementById("mobile-search-popup");
  if (l) {
    const e = l.querySelector(".modal-dialog"),
      t = l.querySelector(".modal-content"),
      s = l.querySelector(".modal-close");
    (document
      .getElementById("open-search")
      ?.addEventListener("click", () => e.classList.add("is-active")),
      s?.addEventListener("click", (n) => {
        (n.preventDefault(), e.classList.remove("is-active"));
      }),
      document.addEventListener("mousedown", (n) => {
        t.contains(n.target) || e.classList.remove("is-active");
      }));
  }
  ((() => {
    (document.querySelectorAll(".more-less-wrapper").forEach((e) => {
      const t = parseInt(e.dataset.height, 10),
        s = e.scrollHeight,
        o = e.nextElementSibling;
      s > t
        ? ((e.style.height = t + "px"),
          e.classList.add("collapsed"),
          o?.classList.contains("read-more-toggle") &&
            (o.textContent = o.dataset.moreText))
        : o?.classList.contains("read-more-toggle") &&
          (o.style.display = "none");
    }),
      document.body.addEventListener("click", (e) => {
        if (!e.target.matches(".read-more-toggle")) return;
        e.preventDefault();
        const t = e.target,
          s = t.previousElementSibling,
          o = parseInt(s.dataset.height, 10),
          n = s.scrollHeight;
        s.classList.contains("collapsed")
          ? ((s.style.height = n + "px"),
            s.classList.replace("collapsed", "expanded"),
            (t.textContent = t.dataset.lessText))
          : ((s.style.height = o + "px"),
            s.classList.replace("expanded", "collapsed"),
            (t.textContent = t.dataset.moreText));
      }));
  })(),
    document.getElementById("paymentSubmit")?.addEventListener("click", () => {
      const e = document.getElementById("booking-form"),
        t = document.getElementById("paymentProcess");
      e?.checkValidity() && t?.classList.remove("hidden");
    }),
    setTimeout(() => {
      document
        .querySelectorAll(
          "article table, .useful-info table, .package__equipment-info table",
        )
        .forEach((e) => {
          if (!e.parentElement.classList.contains("table-responsive")) {
            const t = document.createElement("div");
            (t.classList.add("table-responsive"),
              e.parentNode.insertBefore(t, e),
              t.appendChild(e));
          }
        });
    }, 500));
});
