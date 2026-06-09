<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box pt-0 write-review-page bg-secondary" role="main">
  <div class="container-fluid-custom">
    <div class="container">
      <div class="page-title">
        <h1>Write a Review</h1>
      </div>
      <div class="page-summary lg:w-4/5">
        <p>Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The<!-- --> <a
            href="">Mount Everest trekking </a> route offers unparalleled views of breathtaking landscapes,
          including towering snow-capped peaks, lush valleys, and rugged terrain.</p>
      </div>
      <div class="write-review__form">
        <form>
          <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <div class="form-group"><input type="text" id="full-name" placeholder=" "
                  class="floating-input peer"><label for="full-name" class="floating-label">Full
                  Name<sup>*</sup></label></div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <div class="form-group"><input type="text" id="email" placeholder=" "
                  class="floating-input peer"><label for="email" class="floating-label">Email
                  Address<sup>*</sup></label></div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <div class="form-group">
                <select name="package-name" id="package-name"
                  class="floating-input peer">
                  <option disabled="" selected="">Choose a Package</option>
                  <option>Everest Base camp Trek</option>
                  <option>Everest Base camp Trek</option>
                  <option>Everest Base camp Trek</option>
                  <option>Everest Base camp Trek</option>
                </select>
                <label for="package-name" class="floating-label">Choose a
                  Package<sup>*</sup>
                </label>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <div class="form-group">
                <input type="text" id="review-title" placeholder=" "
                  class="floating-input peer">
                <label for="review-title" class="floating-label">Review
                  Title<sup>*</sup>
                </label>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <div class="form-group">
                <input type="text" id="review-title" placeholder=" "
                  class="floating-input peer">
                <label for="review-title" class="floating-label">Review
                  Date<sup>*</sup>
                </label>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <div class="form-group">
                <select name="country" id="country" class="floating-input peer">
                  <option disabled="" selected="">Country</option>
                  <option>Nepal</option>
                  <option>USA</option>
                  <option>Canada</option>
                </select>
                <label
                  for="phone"
                  class="floating-label">
                  Choose a Country
                  <sup>*</sup>
                </label>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <label class="text-text_color block pb-2 font-bold">Rating<span class="text-red-700">*</span></label>
              <div class="select-rating">
                <span class="unrated" data-value="1"><span class="icon-star-rate"></span></span>
                <span class="unrated" data-value="2"><span class="icon-star-rate"></span></span>
                <span class="unrated" data-value="3"><span class="icon-star-rate"></span></span>
                <span class="unrated" data-value="4"><span class="icon-star-rate"></span></span>
                <span class="unrated" data-value="5"><span class="icon-star-rate"></span></span>
              </div>
              <input type="hidden" name="rating" id="rating-value" value="">
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
              <div class="form-group"><input type="file" id="image"
                  class="input-file floating-input peer"><label for="image" class="floating-label">Upload
                  Image</label></div>
            </div>
            <div class="col-span-12">
              <div class="form-group"><textarea id="extras" rows="6" placeholder=" "
                  class="floating-input peer"></textarea><label for="extras" class="floating-label">Write
                  your Review<sup>*</sup></label></div>
            </div>
            <div class="col-span-12"><button class="btn-blue">Post Review</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include('./inc/footer.php') ?>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const ratingWidgets = document.querySelectorAll(".select-rating");

    ratingWidgets.forEach((widget) => {
      const stars = widget.querySelectorAll("[data-value]");
      const ratingInput = widget.parentElement.querySelector("#rating-value");

      let currentRating = 0;

      const highlightStars = (rating) => {
        stars.forEach((star) => {
          const value = Number(star.dataset.value);

          if (value <= rating) {
            star.classList.add("rated");
            star.classList.remove("unrated");
          } else {
            star.classList.add("unrated");
            star.classList.remove("rated");
          }
        });
      };

      stars.forEach((star) => {
        const value = Number(star.dataset.value);

        star.addEventListener("mouseenter", () => {
          highlightStars(value);
        });

        star.addEventListener("click", () => {
          currentRating = value;
          highlightStars(currentRating);

          if (ratingInput) {
            ratingInput.value = currentRating;
          }
        });
      });

      widget.addEventListener("mouseleave", () => {
        highlightStars(currentRating);
      });
    });
  });
</script>
