<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<section class="bg-secondary">
  <?php include('./inc/breadcrumbs.php') ?>
  <section class="common-box pb-0  " role="main">
    <div class="common-page write-review__form">
      <div class="container common-box">
        <div class="page-title">
          <h1>
            Write a Review
          </h1>
        </div>

        <div class="review-form-page">

          <div class="review-form-page__content lg:w-4/5 text-[15px] text-text_color">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem labore optio dignissimos repudiandae ab accusantium soluta maxime odit ratione officiis? Labore quasi natus esse tempore eum nulla illum, magni eos.
          </div>
        </div>

        <div class="mt-10 review-form-page__wrapper">

          <form class="floating-form rounded-[5px] bg-base/30 p-5 md:px-8 md:py-10">
            <div class="grid md:grid-cols-3 md:gap-6">
              <div class="relative z-0 w-full mb-0 group md:mb-5">
                <input
                  type="text"
                  name="fullname"
                  id="fullname"
                  class="text-heading_color peer block w-full rounded-[5px] focus:outline-none focus:ring-0"
                  placeholder=" "
                  required />
                <label
                  for="fullname"
                  class="text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Full Name<span class="text-red-700">*</span>
                </label>
              </div>

              <div class="relative z-0 w-full mb-0 group md:mb-5">
                <input
                  type="email"
                  name="mail"
                  id="mail"
                  class="block w-full text-base bg-transparent rounded appearance-none text-heading-color peer focus:outline-none focus:ring-0"
                  placeholder=" "
                  required />
                <label
                  for="mail"
                  class="text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Email Address<span class="text-red-700">*</span>
                </label>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                <select
                  name="country"
                  id="country"
                  class="block w-full text-base bg-transparent rounded appearance-none text-heading-color peer focus:outline-none focus:ring-0">
                  <option selected>Package</option>
                  <option value=" Packagea" selected>
                    Package A
                  </option>
                  <option value="Packageb"> Package B</option>
                  <option value="Packagec"> Package C</option>
                  <option value="Packaged"> Package D</option>
                  <option value="Packagee"> Package E</option>
                </select>
                <label
                  for="country"
                  class="text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Select Package<span class="text-red-700">*</span>
                </label>
              </div>
            </div>
            <div class="grid md:grid-cols-3 md:gap-6">
              <div class="relative z-0 w-full mb-0 group md:mb-5">
                <input
                  type="text"
                  name="title"
                  id="title"
                  class="block w-full text-base bg-transparent rounded appearance-none text-heading-color peer focus:outline-none focus:ring-0"
                  placeholder=" "
                  required />
                <label
                  for="title"
                  class="text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Review Title<span class="text-red-700">*</span>
                </label>
              </div>
              <div class="relative z-0 w-full mb-0 group md:mb-5">
                <input
                  type="text"
                  name="reviewdate"
                  id="reviewdate"
                  class="block w-full text-base bg-transparent rounded appearance-none text-heading-color peer focus:outline-none focus:ring-0"
                  placeholder=" "
                  required />
                <label
                  for="reviewdate"
                  class="text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Review Date<span class="text-red-700">*</span>
                </label>
              </div>

              <div class="relative z-0 w-full mb-5 group">
                <select
                  name="country"
                  id="country"
                  class="block w-full text-base bg-transparent rounded appearance-none text-heading-color peer focus:outline-none focus:ring-0">
                  <option selected>Choose a country</option>
                  <option value="NEP" selected>
                    Nepal
                  </option>
                  <option value="US">United States</option>
                  <option value="CA">Canada</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                </select>
                <label
                  for="country"
                  class="text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Choose a Country<span class="text-red-700">*</span>
                </label>
              </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-4 group">
                <label class="block pb-2 font-bold text-text_color">
                  Rating
                </label>
                <div class="rating-wrap">
                  <div class="select-rating">
                    <input disabled checked class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating-1">
                      <span class=" icon-star-rate"></span>
                    </label>
                    <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating-2">
                      <span class="rating__icon rating__icon--star icon-star"></span>
                    </label>
                    <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating-3">
                      <span class="rating__icon rating__icon--star icon-star"></span>
                    </label>
                    <input class="rating__input" name="rating" id="rating-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating-4">
                      <span class="rating__icon rating__icon--star icon-star"></span>
                    </label>
                    <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating-5">
                      <span class="rating__icon rating__icon--star icon-star"></span>
                    </label>
                    <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                  </div>
                </div>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                <label class="block pb-2 font-bold text-text_color">
                  Upload Image
                </label>
                <input
                  class="focus:shadow-te-primary relative m-0 block w-full min-w-0 flex-auto rounded px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                  type="file"
                  id="formFile" />
              </div>
            </div>
            <div class="relative z-0 w-full mb-5">
              <textarea
                name="extra_info"
                id="extrainfo"
                rows={8}
                class="block w-full text-base bg-transparent rounded appearance-none text-heading-color peer focus:outline-none focus:ring-0"
                placeholder=" "
                required></textarea>
              <label
                for="extrainfo"
                class="peer-focus:text-text-color peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                Write your Review
              </label>
            </div>
            <button class="flex items-center gap-2 px-8 py-2 text-base font-bold text-white uppercase bg-primary-effect custom-rounded bg-secondary">

              <span class="w-4 h-4 icon-loading loader"></span> Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</section>
<?php include('./inc/footer.php') ?>
