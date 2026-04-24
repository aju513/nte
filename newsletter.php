<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<section class="  bg-secondary" role="main">
  <?php include('./inc/breadcrumbs.php') ?>
  <div class=" common-box pb-0 newsletter-page">
    <div class="common-page">
      <div class="container common-box">
        <div class="page-title">
          <h1>
            Newsletter
          </h1>
        </div>
        <div class="newsletter-page__description">
          <div class="newsletter-page__content lg:w-4/5 text-[15px] text-text_color">
            Be among the first to receive exclusive offers and stay updated
            on the latest travel news about our packages and services
            delivered directly to your inbox
          </div>
          <div class="newsletter-page__form">
            <form class="w-full mt-6 floating-form md:w-2/5">
              <div class="relative z-0 w-full mb-5 group  ">
                <input
                  type="text"
                  name="fullname"
                  id="fullname"
                  class="block w-full text-text_color   bg-transparent rounded border appearance-none text-heading-color peer focus:outline-none focus:ring-0"
                  placeholder=" "
                  required />
                <label
                  htmlFor="fullname"
                  class="text-text-color peer-focus:text-text-color  peer-focus:dark:text-text-color absolute top-1 origin-[0] -translate-y-3 scale-75 transform pl-3 text-rexr_colorration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Full Name<span class="text-red-700">*</span>
                </label>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                <input
                  type="email"
                  name="mail"
                  id="mail"
                  class="block w-full text-text_color bg-transparent rounded border appearance-none text-heading-color peer focus:outline-none focus:ring-0"
                  placeholder=" "
                  required />
                <label
                  htmlFor="mail"
                  class="text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-1 origin-[0] -translate-y-3 scale-75 transform pl-3 text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Email Address<span class="text-red-700">*</span>
                </label>
              </div>
              <div class="flex items-center mb-4">
                <input
                  id="checkbox"
                  type="checkbox"
                  value=""
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600" />
                <label
                  htmlFor="checkbox"
                  class="text-sm font-semibold cursor-pointer ms-2 text-text_color">
                  I'm interested in receiving updates and exclusive offers.
                </label>
              </div>
              <button class="primary-btn">
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
