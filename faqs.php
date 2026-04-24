<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box faqs-page bg-secondary" role="main">
  <div class="container">
    <div class="page-title">
      <h1>
        FAQs
      </h1>
    </div>
    <div class="faqs-page__wrapper ">
      <div class="mb-8 accordion-wrapper last:mb-5">
        <div class="text-2xl font-bold text-primary font-exo">FAQ mini title</div>
        <div class="accordion" id="faqAccordion">
          <div class="accordion__item" data-id="q1">
            <div class=" accordion__item-title  ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
            <div class="accordion__item-content">

              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?

            </div>
          </div>
          <div class="accordion__item" data-id="q2">
            <div class=" accordion__item-title ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
            <div class="accordion__item-content">

              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut accusantium eligendi magnam tempora exercitationem libero mollitia ullam natus perferendis aspernatur, harum quos quae, velit tenetur laudantium porro, necessitatibus quo amet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?

            </div>
          </div>
        </div>
      </div>
      <div class="mb-8 accordion-wrapper last:mb-5">
        <div class="text-2xl font-bold text-primary font-exo">FAQ mini title</div>
        <div class="accordion" id="faqAccordion">
          <div class="accordion__item" data-id="q1">
            <div class="text-xl font-bold accordion__item-title font-exo text-text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
            <div class="accordion__item-content">
              <div class="text-text_color text-[15px]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
              </div>
            </div>
          </div>
          <div class="accordion__item" data-id="q2">
            <div class="text-xl font-bold accordion__item-title font-exo text-text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
            <div class="accordion__item-content">
              <div class="text-text_color text-[15px]">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut accusantium eligendi magnam tempora exercitationem libero mollitia ullam natus perferendis aspernatur, harum quos quae, velit tenetur laudantium porro, necessitatibus quo amet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
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
</script>
<?php include('./inc/footer.php') ?>
