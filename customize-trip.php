<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box customize-trip-page bg-secondary" role="main">
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
        <div class="border border-primary border-opacity-80 mb-4 rounded-[5px] bg-transparent p-8 ">
          <div class="pb-5 text-lg font-bold text-text_color">
            Trip Details
          </div>
          <div class="grid gap-2 md:grid-cols-2 md:gap-6">
            <div class="relative w-full group">
              <select
                name="package"
                id="package"
                class="peer block w-full appearance-none rounded-[5px] bg-base text-text_color focus:outline-none focus:ring-0">
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
                class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 bg-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Choose a Package<span class="text-red-700">*</span>
              </label>
            </div>
            <div class="relative w-full datepicker group">
              <input type="text" class="date-picker placeholder:text-text_color" placeholder="Pick a date">

            </div>
            <div>
              <div class="grid grid-cols-1 gap-2 md:grid-cols-2 md:gap-3">
                <div class="relative w-full group">
                  <input
                    type="number"
                    name="adults"
                    id="adults"
                    min="1"
                    class="block w-full bg-base  rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                    placeholder=" "
                    required />
                  <label
                    for="adults"
                    class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 bg-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                    No. of Adults
                    <span class="text-red-700">*</span>
                  </label>
                </div>
                <div class="relative w-full group md:mb-5">
                  <input
                    type="number"
                    min="1"
                    name="child"
                    id="child"
                    class="block w-full bg-base rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                    placeholder=" " />
                  <label
                    for="child"
                    class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 bg-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                    No. of Children
                  </label>
                </div>
              </div>
            </div>
            <div class="relative w-full group">
              <select
                name="groupsize"
                id="groupsize"
                class="block w-full bg-base  rounded appearance-none peer text-text_color focus:outline-none focus:ring-0">
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
                class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 bg-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Group Size<span class="text-red-700">*</span>
              </label>
            </div>
          </div>
          <div class="pb-5 mt-5 text-lg font-bold text-text_color md:mt-0">
            Personal Information
          </div>
          <div class="grid gap-2 mb-5 md:mb-6 md:grid-cols-2 md:gap-6">
            <div class="relative w-full group">
              <input
                type="text"
                name="fullname"
                id="fullname"
                class="block w-full bg-base  rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                placeholder=" "
                required />
              <label
                for="fullname"
                class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 bg-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Full Name<span class="text-red-700">*</span>
              </label>
            </div>
            <div class="relative w-full group">
              <input
                type="email"
                name="email"
                id="email"
                class="block w-full bg-base  rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                placeholder=" "
                required />
              <label
                for="email"
                class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 bg-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Email<span class="text-red-700">*</span>
              </label>
            </div>
            <div class="relative w-full group">
              <input
                type="text"
                name="phone"
                id="phone"
                class="block w-full  bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                placeholder=" "
                required />
              <label
                for="phone"
                class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Phone Number<span class="text-red-700">*</span>
              </label>
            </div>
            <div class="relative w-full group">
              <select
                name="country"
                id="country"
                class="block w-full  bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0">
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
                class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3  text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Choose a Country<span class="text-red-700">*</span>
              </label>
            </div>
          </div>
          <div class="relative w-full">
            <textarea
              name="extra_info"
              id="extrainfo"
              rows={8}
              class="block w-full bg-base  rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
              placeholder=" "
              required></textarea>
            <label
              for="extrainfo"
              class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 bg-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
              Pickup details and extra requirements
            </label>
          </div>
          <div class="my-4 custom-checkbox">
            <input type="checkbox" id="terms">
            <label for="terms"> I accept booking &nbsp;
              <a
                class="font-medium text-secondary"
                href="/terms-conditions"
                target="_blank">
                terms and conditions.
              </a></label>
          </div>
          <button class="primary-btn">
            <span class="w-4 h-4 icon-loading loader"></span> Submit
          </button>
        </div>
      </form>
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
<?php include('./inc/footer.php') ?>
