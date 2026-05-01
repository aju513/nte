<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box customize-trip-page bg-secondary" role="main">
  <div class="common-page-wrapper">
    <div class="container">
      <div class="page-title">
        <h1>
          Customize Trip
        </h1>
      </div>
      <div class="customize-trip-page__description">
        <div class="customize-page__content lg:w-4/5 text-[15px] text-text_color">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem labore optio dignissimos repudiandae ab accusantium soluta maxime odit ratione officiis? Labore quasi natus esse tempore eum nulla illum, magni eos.
        </div>
      </div>
      <div class="my-10 customize-page__info">
        <form class="w-full floating-form">
          <div class=" mb-4 rounded-custom bg-transparent p-8 shadow-custom">
            <div class="pb-5 mt-5 text-lg font-bold text-primary md:mt-0">
              Personal Information
            </div>
            <div class="grid gap-2 mb-5 md:mb-6 md:grid-cols-2 md:gap-6">
              <div class="relative form-group ">
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
              <div class="relative form-group">
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
              <div class="relative form-group">
                <input
                  type="text"
                  name="phone"
                  id="phone"
                  class="floating-input peer"
                  placeholder=" "
                  required />
                <label
                  for="phone"
                  class="floating-label">
                  Phone Number<sup>*</sup>
                </label>
              </div>
              <div class="relative form-group">
                <select
                  name="country"
                  id="country"
                  class="floating-input peer">
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
                  class="floating-label">
                  Choose a Country<sup>*</sup>
                </label>
              </div>
            </div>

            <div class="pb-5 text-lg font-bold text-primary">
              Trip Details
            </div>
            <div class="grid gap-2 md:grid-cols-2 md:gap-6">
              <div class="relative form-group">
                <select
                  name="package"
                  id="package"
                  class="floating-input peer">
                  <option selected>Choose a Package</option>
                  <option value="ebc" selected>
                    Everest Base Camp Trek
                  </option>
                  <option value="ebc"> Everest Base Camp Trek</option>
                  <option value="ebc"> Everest Base Camp Trek</option>
                  <option value="ebc"> Everest Base Camp Trek</option>
                  <option value="ebc"> Everest Base Camp Trek</option>
                </select>
                <label
                  for="package"
                  class="floating-label">
                  Choose a Package<sup>*</sup>
                </label>
              </div>
              <div class="datepicker form-group">
                <div class="relative w-full text-gray-700">
                  <input
                    type="text"
                    class="floating-input date-picker"
                    id="approx_date"
                    name="approx_date"
                    placeholder="YYYY-MM-DD" />
                  <label for="approx_date" class="floating-label">
                    Approx. Date of Travel <sup>*</sup>
                  </label>
                  <button
                    type="button"
                    class="absolute right-0 top-0 h-full px-3 bg-blue-300 text-white rounded-r-lg flex items-center justify-center">
                    <span class="icon-calendar"></span>
                  </button>
                </div>
              </div>
              <div>
                <div class="grid grid-cols-1 gap-2 md:grid-cols-2 md:gap-3">
                  <div class="relative form-group">
                    <input
                      type="number"
                      name="adults"
                      id="adults"
                      min="1"
                      class="floating-input peer"
                      placeholder=" "
                      required />
                    <label
                      for="adults"
                      class="floating-label">
                      No. of Adults
                      <sup>*</sup>
                    </label>
                  </div>
                  <div class="relative form-group md:mb-5">
                    <input
                      type="number"
                      min="1"
                      name="child"
                      id="child"
                      class="floating-input peer"
                      placeholder=" " />
                    <label
                      for="child"
                      class="floating-label">
                      No. of Children
                    </label>
                  </div>
                </div>
              </div>
              <div class="relative form-group">
                <select
                  name="groupsize"
                  id="groupsize"
                  class="floating-input peer">
                  <option selected>Group Size</option>
                  <option value="group" selected>
                    Solo
                  </option>
                  <option value="group">Group</option>
                  <option value="group">Family</option>
                  <option value="group">Couple</option>
                </select>
                <label
                  for="groupsize"
                  class="floating-label">
                  Group Size<sup">*</sup>
                </label>
              </div>
            </div>
            <div class="relative w-full form-group">
              <textarea
                name="extra_info"
                id="extrainfo"
                rows={8}
                class="floating-input peer"
                placeholder=" "
                required></textarea>
              <label
                for="extrainfo"
                class="floating-label">
                Pickup details and extra requirements
              </label>
            </div>
            <div class="my-4 custom-checkbox cursor-pointer">
              <input type="checkbox" id="terms">
              <label for="terms" class="ms-2 dark:text-gray-300 font-medium text-sm cursor-pointer"> I accept booking&nbsp;
                <a
                  class="font-medium text-primary underline hover:no-underline"
                  href="/terms-conditions"
                  target="_blank">terms and conditions.
                </a>
              </label>
            </div>

            <button class="btn-primary">
              <span class="w-4 h-4 icon-loading loader"></span>Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".date-picker").forEach((input) => {
      new Litepicker({
        element: input,
        format: 'YYYY-MM-DD'
      });
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<?php include('./inc/footer.php') ?>
