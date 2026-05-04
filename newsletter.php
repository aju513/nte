<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<section class="  bg-secondary" role="main">
  <?php include('./inc/breadcrumbs.php') ?>
  <div class=" common-box pt-0 newsletter-page">
    <div class="common-page-wrapper">
      <div class="container">
        <div class="page-title">
          <h1>
            Newsletter
          </h1>
        </div>
        <div class="newsletter-page__description">
          <div class="newsletter-page__content lg:w-4/5 text-[15px] text-text_color mb-5">
            Be among the first to receive exclusive offers and stay updated
            on the latest travel news about our packages and services
            delivered directly to your inbox
          </div>
          <div class="newsletter-page__form">
            <form class=" floating-form">
              <div class="relative z-0 w-full mb-5 form-group  ">
                <input
                  type="text"
                  name="fullname"
                  id="fullname"
                  class="floating-input peer"
                  placeholder=" "
                  required />
                <label
                  for="fullname"
                  class="floating-label">
                  Full Name<sup>*</sup>
                </label>
              </div>
              <div class="relative z-0 w-full mb-5 form-group">
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="floating-input peer"
                  placeholder=" "
                  required />
                <label
                  for="email"
                  class="floating-label">
                  Email<sup>*</sup>
                </label>
              </div>
              <div class="flex items-center mb-4 custom-radio">
                <input
                  id="checkbox"
                  type="radio"
                  value=""
                  class="custom-radio__item" />
                <label
                  htmlFor="checkbox"
                  class="text-sm font-semibold cursor-pointer ms-2 text-text_color">
                  I'm interested in receiving updates and exclusive offers.
                </label>
              </div>
              <button class="btn-primary">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('./inc/footer.php') ?>
