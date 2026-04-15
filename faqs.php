<!-- <script>
  document.addEventListener("DOMContentLoaded", () => {
    const accordions = document.querySelectorAll(".accordion"); // select all accordions
    const speed = 1; // match SCSS $speed

    accordions.forEach((accordion) => {
      const items = accordion.querySelectorAll(".accordion__item");

      items.forEach((item) => {
        const header = item.querySelector(".accordion__item-title");
        const body = item.querySelector(".accordion__item-content");

        header.addEventListener("click", () => {
          const isOpen = item.classList.contains("open");

          // Close other items inside the same accordion
          items.forEach((other) => {
            if (other !== item) collapse(other);
          });

          if (isOpen) {
            collapse(item);
          } else {
            expand(item);
          }
        });

        // start closed
        body.style.height = "0px";
      });

      function expand(item) {
        const body = item.querySelector(".accordion__item-content");
        item.classList.add("open");
        item.querySelector(".accordion__item-title").classList.add("active");

        body.style.height = body.scrollHeight + "px";
        setTimeout(() => {
          body.style.height = "auto";
        }, speed);
      }

      function collapse(item) {
        const body = item.querySelector(".accordion__item-content");
        item.classList.remove("open");
        item.querySelector(".accordion__item-title").classList.remove("active");

        body.style.height = body.scrollHeight + "px"; // set current height
        setTimeout(() => {
          body.style.height = "0px";
        }, 10);
      }
    });
  });
</script> -->
