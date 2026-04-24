<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box booking-page bg-secondary" role="main">
  <div class="container">
    <div class="page-title">
      <h1>
        Booking
      </h1>
    </div>
    <div class=" booking-page__description">
      <p>
        Proin vestibulum finibus dolor eget euismod. Suspendisse
        hendrerit, sapien eu mattis sagittis, tellus nisi posuere massa,
        in volutpat orci augue ut dui. Cras eget tincidunt velit. Sed
        malesuada fermentum vulputate. Vestibulum ultricies efficitur
        est non gravida.
      </p>
    </div>
    <div class="mt-10 booking-page__form">
      <div class="grid grid-cols-12">
        <div class="col-span-12">
          <div class="grid grid-cols-12 gap-[15px]">
            <div class="col-span-12 lg:col-span-8">
              <form class="floating-form">
                <div class="border border-primary border-opacity-10 mb-4 rounded-[5px] bg-white px-6 py-5">
                  <div class="pb-3 text-lg font-bold text-text_color">
                    Date and Travelers
                  </div>

                  <div class="grid grid-cols-1 gap-1 md:grid-cols-2 md:gap-2">
                    <div class="relative w-full group">
                      <input type="text" class="date-picker placeholder:text-text_color" placeholder="Pick a date">
                    </div>

                    <div class="flex items-center w-full px-3 border custom-rounded">
                      <span class="flex-[0_0_60%]">
                        Number of Travellers
                      </span>
                      <div class="flex items-center gap-2 counter-input">
                        <span class="cursor-pointer icon-minus"></span>
                        <input type="number" min="1" value="1">
                        <span class="cursor-pointer icon-plus"> </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border border-primary border-opacity-10 mb-4 rounded-[5px] bg-white px-6 py-5">
                  <div class="pb-3 text-lg font-bold border-b text-text_color">
                    Add-Ons and Extra Options
                  </div>

                  <div class="grid grid-cols-1 gap-2 pb-4 mt-4 border-b border-dashed md:grid-cols-2 md:gap-10">
                    <div class="relative flex items-center w-full group">
                      <span class="flex items-center gap-3 font-semibold">
                        Private Porter Service
                        <div class="relative inline-flex flex-col items-center ml-2 popover-wrap group">
                          <span class="text-xl icon-info text-text_color">
                          </span>

                          <div
                            class="absolute bottom-0 flex-col items-center hidden w-full mb-6 popover-bg sm:w-64 md:w-72">
                            <span
                              class="popover-wrap-content custom-shadow relative z-10 mb-0 rounded-[5px] bg-white p-3 text-[13px] leading-4 text-gray-800">
                              <p>
                                The moderate grade includes a one-week to fifteen-day itinerary. It can reach up to
                                5000 meter altitude range, but the trails will be moderate (neither easy nor tough).
                                High altitude may affect walking speed and distance. You need to have acclimatization
                                over 3000 meters.
                              </p>
                            </span>
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-white"></div>
                          </div>
                        </div>

                      </span>
                    </div>
                    <div class="flex flex-col items-start justify-between w-full gap-2 md:flex-row md:items-center">
                      <span class="block text-base font-bold text-text_color">
                        US$450
                        <span class="pl-2 text-sm text-text_color">
                          Per Porter
                        </span>
                      </span>
                      <div class="justify-center flex w-full gap-4 rounded-[5px] border px-2 lg:w-2/4">
                        <div class="flex items-center gap-2 counter-input">
                          <span class="cursor-pointer icon-minus"></span>
                          <input type="number" min="1" value="1">
                          <span class="cursor-pointer icon-plus"> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="grid grid-cols-1 gap-2 mt-4 md:grid-cols-2 md:gap-10">
                    <div class="relative flex items-center w-full group">
                      <sapn class="block gap-3 font-semibold">
                        Hotel Upgrade to 4 Star
                      </sapn>
                    </div>
                    <div class="flex flex-col items-start justify-between w-full gap-2 md:flex-row md:items-center">
                      <span class="text-base font-bold span text-text_color">
                        US$450
                        <span class="pl-2 text-sm text-text_color">
                          Per Porter
                        </span>
                      </span>
                      <div class="justify-center flex w-full gap-4 rounded-[5px] border lg:w-2/4">
                        <div class="flex items-center gap-2 counter-input">
                          <span class="cursor-pointer icon-minus"></span>
                          <input type="number" min="1" value="1">
                          <span class="cursor-pointer icon-plus"> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border border-primary border-opacity-10 mb-4 rounded-[5px] bg-white px-6 py-5">
                  <div class="pb-5 text-lg font-bold text-text_color">
                    Lead Traveller Details
                  </div>

                  <div class="grid gap-3 md:grid-cols-2 md:gap-6">
                    <div class="relative w-full group">
                      <input type="text" name="firstname" id="firstname"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder=" " required />
                      <label for="firstname"
                        class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        First Name<span class="text-red-700">*</span>
                      </label>
                    </div>

                    <div class="relative w-full group">
                      <input type="text" name="lastname" id="lastname"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder=" " required />
                      <label for="lastname"
                        class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Last Name<span class="text-red-700">*</span>
                      </label>
                    </div>

                    <div class="relative w-full group">
                      <input type="email" name="email" id="email"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder=" " required />
                      <label for="email"
                        class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Email<span class="text-red-700">*</span>
                      </label>
                    </div>
                    <div class="relative w-full group">
                      <select name="country" id="country"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0">
                        <option selected>Choose a country</option>
                        <option value="NEP" selected>
                          Nepal
                        </option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                      </select>
                      <label for="country"
                        class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Choose a Country
                        <span class="text-red-700">*</span>
                      </label>
                    </div>
                    <div class="relative w-full group md:mb-5">
                      <input type="text" name="phone" id="phone"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder=" " required />
                      <label for="phone"
                        class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Phone Number<span class="text-red-700">*</span>
                      </label>
                    </div>
                    <div class="relative w-full mb-5 group">
                      <input type="text" name="phone" id="phone"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder=" " required />
                      <label for="phone"
                        class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        WhatsApp Number
                      </label>
                    </div>
                  </div>

                  <div class="relative z-0 w-full mb-5">
                    <textarea name="extra_info" id="extrainfo" rows={8}
                      class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                      placeholder=" " required></textarea>
                    <label for="extrainfo"
                      class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                      Pickup details and extra requirements
                    </label>
                  </div>
                  <div class="flex items-center mb-5 coupon-apply-wrapper gap-2 md:max-w-[40%]">
                    <div class="relative w-full group">
                      <input type="text" name="coupon" id="coupon"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder=" " required />
                      <label for="coupon"
                        class="absolute top-3 origin-[0] -translate-y-3 scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Coupon Code
                      </label>
                    </div>
                    <button
                      class="inline-block px-5 py-[14px] text-sm font-semibold text-white bg-secondary-effect custom-rounded bg-primary">Apply</button>
                  </div>
                  <div class="mb-5 custom-checkbox">
                    <input type="checkbox" id="terms">
                    <label for="terms"> I accept booking &nbsp;
                      <a class="font-medium text-secondary" href="/terms-conditions" target="_blank">
                        terms and conditions.
                      </a></label>
                  </div>

                  <button
                    class="inline-block px-5 py-3 text-sm font-semibold text-white bg-primary-effect custom-rounded bg-secondary">
                    Proceed to Payment
                  </button>
                </div>
              </form>
              <div class="mt-5 rounded-[5px] border border-secondary px-4 py-3 flex items-center justify-between">
                <div class="text-sm font-bold text-text_color">
                  Please wait while you are redirected to the payment...
                </div>
                <div class="dot-loader">
                  <div class="dot-loader__item dot-loader__item-0 "></div>
                  <div class="dot-loader__item dot-loader__item-1 "></div>
                  <div class="dot-loader__item dot-loader__item-2 "></div>
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
              <div class="custom-shadow booking-info sticky top-20 rounded-[5px] bg-white">
                <div
                  class="booking-info__title rounded-t-[5px] bg-primary p-3 font-barlow text-base font-exo font-bold text-white sm:text-lg">
                  Your Trip Details
                </div>
                <div class="px-6 py-5 booking-info__body">
                  <div class="flex items-center gap-3 rounded-[5px] booking-info__package">
                    <div class="booking-info__package-image flex-[0_0_80px]">
                      <img src="/images/dynamic/package-thumb.webp" width="600" height="630" alt="banner" />
                    </div>
                    <div class="booking-info__package-content">
                      <div class="font-bold leading-5 font-exo text-secondary">
                        Everest Base Camp Trek - 15 Days
                      </div>
                      <div class="flex items-center gap-3 text-sm">
                        Duration:14 Days
                      </div>
                    </div>
                  </div>

                  <div class="my-3 group-price custom-rounded">
                    <div class="p-3 collapsible__wrap rounded-[5px] bg-[#E9F7FF]">
                      <button class="flex items-center justify-between w-full collapsible">
                        <span class="text-[15px] font-bold text-text_color">
                          Group Discount Price
                        </span>
                        <span class="mr-1 text-2xl font-bold text-text_color icon">+</span>
                      </button>
                      <div class="collapsible-content">
                        <div class="booking__discount-list">
                          <ul class="booking__discount-list-group">
                            <li
                              class="flex justify-between pt-3 pb-1 mt-2 border-t border-dashed border-primary border-opacity-15">
                              <span class="text-sm text-text_color">1 Pax</span>
                              <span class="text-sm text-text_color">US$1600</span>
                            </li>
                            <li
                              class="flex justify-between pt-3 pb-1 mt-2 border-t border-dashed border-primary border-opacity-15 ">
                              <span class="text-sm text-text_color">2 - 3 Pax</span>
                              <span class="text-sm text-text_color">US$1600</span>
                            </li>
                            <li
                              class="flex justify-between pt-3 pb-1 mt-2 border-t border-dashed border-primary border-opacity-15">
                              <span class="text-sm text-text_color">4 - 12 Pax</span>
                              <span class="text-sm text-text_color">US$1600</span>
                            </li>
                            <li
                              class="flex justify-between pt-3 pb-1 mt-2 border-t border-dashed border-primary border-opacity-15">
                              <span class="text-sm text-text_color">13 - 16 Pax</span>
                              <span class="text-sm text-text_color">US$1600</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pb-4 mb-3 border-b border-dashed">
                    <div class="flex justify-between gap-3 py-1">
                      <div class="flex-[0_0_50%] text-right text-sm font-semibold text-text_color">
                        Trip Date:
                      </div>
                      <div class="text-sm text-text_color">
                        2023-11-17
                      </div>
                    </div>
                    <div class="flex justify-between gap-3 py-1">
                      <div class="flex-[0_0_50%] text-right text-sm font-semibold text-text_color">
                        Number of Traveler:
                      </div>
                      <div class="text-sm text-text_color">
                        1 Person(s)
                      </div>
                    </div>
                    <div class="flex justify-between gap-3 py-1">
                      <div class="flex-[0_0_50%] text-right text-sm font-semibold text-text_color">
                        Trip Begins:
                      </div>
                      <div class="text-sm text-text_color">
                        Kathmandu City
                      </div>
                    </div>
                  </div>
                  <div class="pb-4 mb-3 border-b">
                    <div class="flex items-center justify-between gap-3 py-2">
                      <div class="flex-[0_0_50%] text-right text-sm font-semibold text-text_color md:text-base">
                        Package Price:
                        <span class="block text-xs text-heading_color">
                          US$1600 x 1 traveler
                        </span>
                      </div>
                      <div class="text-sm text-text_color md:text-base">
                        US$1600
                      </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 py-2">
                      <div class="flex-[0_0_50%] text-right text-sm font-semibold text-text_color md:text-base">
                        Private Porter Service
                        <span class="block text-xs text-heading_color">
                          US$200 x 1 traveler
                        </span>
                      </div>
                      <div class="text-sm text-text_color md:text-base">
                        US$200
                      </div>
                    </div>

                    <div class="flex justify-between gap-3 py-2">
                      <div class="flex-[0_0_50%] text-right text-sm font-bold text-primary md:text-base">
                        Total Price:
                      </div>
                      <div class="text-sm font-bold text-primary md:text-base">
                        US$1800
                      </div>
                    </div>
                  </div>
                  <div class="flex items-center justify-between gap-3 py-1 pb-3">
                    <div class="flex-[0_0_50%] text-right text-sm font-bold text-primary md:text-base">
                      Deposit Payable Now:
                      <span class="block text-xs text-secondary">
                        (20% of total amount)
                    </span>
                    </div>
                    <div class="text-sm font-bold text-primary md:text-base">
                      US$360
                    </div>
                  </div>
                  <div class="p-2 text-xs border custom-rounded border-primary bg-dim_bg text-text_color">
                    The balance of US$1440 is payable online before the trip
                    start date, or upon arrival.
                  </div>
                  <div class="flex gap-3 mt-4">
                    <span class="block text-sm text-text_color">
                      3D secure and safe checkout. Your credit card details
                      are safe.
                      <PaymentsIcon class="mt-3 h-[35px] w-[190px]" />
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".counter-input").forEach(counter => {
      const minus = counter.querySelector(".icon-minus");
      const plus = counter.querySelector(".icon-plus");
      const input = counter.querySelector("input");

      minus.addEventListener("click", () => {
        let value = parseInt(input.value) || 1;
        let min = parseInt(input.min) || 1;
        if (value > min) {
          input.value = value - 1;
        }
      });

      plus.addEventListener("click", () => {
        let value = parseInt(input.value) || 1;
        input.value = value + 1;
      });
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".date-picker").forEach((input) => {
      new Litepicker({
        element: input,
        format: 'YYYY-MM-DD'
      });
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.collapsible');
    const content = document.querySelector('.collapsible-content');
    const icon = toggleButton.querySelector('.icon');

    toggleButton.addEventListener('click', function () {
      const isActive = toggleButton.classList.toggle('active');

      if (isActive) {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.textContent = '-';
      } else {
        content.style.maxHeight = null;
        icon.textContent = '+';
      }
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const popoverWraps = document.querySelectorAll(".popover-wrap");
    const isTouchDevice = "ontouchstart" in window || navigator.maxTouchPoints > 0;

    if (isTouchDevice) {
      // Mobile: open/close on click
      popoverWraps.forEach((wrap) => {
        const trigger = wrap.querySelector(".i-icon");
        const popover = wrap.querySelector(".popover-bg");
        if (!trigger || !popover) return;

        const togglePopover = (e) => {
          e.stopPropagation();
          document.querySelectorAll(".popover-bg").forEach((el) => {
            if (el !== popover) el.classList.add("hidden");
          });
          popover.classList.toggle("hidden");
        };

        const closePopover = (e) => {
          if (!wrap.contains(e.target)) {
            popover.classList.add("hidden");
          }
        };

        trigger.addEventListener("click", togglePopover);
        document.addEventListener("click", closePopover);
      });
    } else {
      // Desktop: show on hover
      popoverWraps.forEach((wrap) => {
        const popover = wrap.querySelector(".popover-bg");
        if (!popover) return;

        wrap.addEventListener("mouseenter", () => {
          popover.classList.remove("hidden");
          popover.classList.add("flex");
        });
        wrap.addEventListener("mouseleave", () => {
          popover.classList.remove("flex");
          popover.classList.add("hidden");
        });
      });
    }
  });
</script>
<?php include('./inc/footer.php') ?>