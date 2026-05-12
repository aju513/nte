<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box booking-page bg-secondary pt-0" role="main">
  <div class="common-page-wrapper">
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
                      <div class="datepicker form-group">
                        <div class="relative w-full text-gray-700">
                          <input
                            type="text"
                            class="floating-input date-picker"
                            id="approx_date"
                            name="approx_date"
                            placeholder="YYYY-MM-DD" />

                          <button
                            type="button"
                            class="absolute right-0 top-0 h-full px-3 bg-blue-300 text-white rounded-r-lg flex items-center justify-center">
                            <span class="icon-calendar"></span>
                          </button>
                        </div>
                      </div>

                      <div class="form-group hav-counter">
                        <span class="flex-[0_0_60%]">
                          Number of Travellers
                        </span>
                        <div class="counter-wrap">
                          <span class="decrement-trigger icon-minus"></span>
                          <input type="number" min="1" value="1">
                          <span class="increment-trigger icon-plus"> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border border-primary border-opacity-10 mb-4 rounded-[5px] bg-white px-6 py-5">
                    <div class="pb-3 text-lg font-bold border-b text-text_color">
                      Add-Ons and Extra Options
                    </div>

                    <div class="grid grid-cols-1 gap-2 pb-4 mt-4 border-b border-dashed md:grid-cols-2 md:gap-10">
                      <div class="form-group">
                        <span class="flex items-center gap-3 font-semibold">
                          Private Porter Service
                          <div class="relative inline-flex ml-2 items-center group popover-wrap">
                            <span class="text-sm icon-nav-information cursor-pointer "></span>

                            <div class="tooltip-content hidden">
                              <div
                                class="popover-wrap-content ">
                                <p>
                                  The moderate grade includes a one-week to fifteen-day itinerary.
                                  It can reach up to 5000 meter altitude range, but the trails
                                  will be moderate (neither easy nor tough). High altitude may
                                  affect walking speed and distance. You need to have
                                  acclimatization over 3000 meters.
                                </p>
                              </div>
                              <div class="absolute left-1/2 -translate-x-1/2 border-l-[6px] border-r-[6px] border-b-[8px] border-l-transparent border-r-transparent border-b-black/70 rotate-180">
                              </div>
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
                        <div class="justify-center flex w-full gap-4 form-group hav-counter lg:w-2/4">
                          <div class="counter-wrap">
                            <span class="decrement-trigger icon-minus"></span>
                            <input type="number" min="1" value="1">
                            <span class="increment-trigger icon-plus"> </span>
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
                        <div class="justify-center flex w-full gap-4 form-group hav-counter lg:w-2/4">
                          <div class="counter-wrap">
                            <span class="decrement-trigger icon-minus"></span>
                            <input type="number" min="1" value="1">
                            <span class="increment-trigger icon-plus"> </span>
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
                      <div class="form-group">
                        <input
                          type="text"
                          name="firstname"
                          id="firstname"
                          class="floating-input peer"
                          placeholder=" "
                          required />
                        <label
                          for="firstname"
                          class="floating-label">
                          First Name<sup>*</sup>
                        </label>
                      </div>

                      <div class="form-group">
                        <input
                          type="text"
                          name="lastname"
                          id="lastname"
                          class="floating-input peer"
                          placeholder=" "
                          required />
                        <label
                          for="last name"
                          class="floating-label">
                          Last Name<sup>*</sup>
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
                          Whatsapp Number
                        </label>
                      </div>
                    </div>
                    <div class="form-group mt-5 mb-5">
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
                    <div class="coupon-wrapper">
                      <div class="form-group">
                        <input type="text" name="coupon" id="coupon"
                          class="floating-input peer"
                          placeholder=" " required />
                        <label for="coupon"
                          class="floating-label">
                          Coupon Code
                        </label>
                      </div>
                      <button
                        class="btn-primary">Apply</button>
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


                    <button
                      class="inline-block px-5 py-3 text-sm font-semibold text-white bg-primary-effect custom-rounded bg-primary">
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
                <div class="shadow-custom booking-info sticky top-20 rounded-[5px] bg-white">
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
                        <div class="font-bold leading-5 font-playfair text-primary">
                          Everest Base Camp Trek - 15 Days
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                          Duration:14 Days
                        </div>
                      </div>
                    </div>

                    <div class="my-3 booking-group-price">
                      <div class="collapsible__wrap">
                        <button role="button" type="button" class="collapsible active">
                          <span class="text-text_color text-sm font-bold uppercase">Group Discount cost</span>
                          <span class="text-text_color mr-1 text-2xl font-bold icon">-</span>
                        </button>
                        <div class="collapsible-content">
                          <div class="booking__discount-list">
                            <ul class="booking__discount-list-group">
                              <li class="booking__discount-list-item  ">
                                <span class="text-base font-bold text-text_color">No. of traveler</span>
                                <span class="text-base font-bold text-text_color">Price per person</span>
                              </li>
                              <li class="booking__discount-list-item  ">
                                <span class="text-sm text-text_color">1 - 1</span>
                                <span class="text-sm text-text_color">US$ 1620</span>
                              </li>
                              <li class="booking__discount-list-item   ">
                                <span class="text-sm text-text_color">2 - 2</span>
                                <span class="text-sm text-text_color">US$ 1600</span>
                              </li>
                              <li class="booking__discount-list-item  ">
                                <span class="text-sm text-text_color">3 - 5</span>
                                <span class="text-sm text-text_color">US$ 1590</span>
                              </li>
                              <li class="booking__discount-list-item  ">
                                <span class="text-sm text-text_color">10+</span>
                                <span class="text-sm text-text_color">US$ 1200</span>
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
                        <span class="block text-xs text-block">
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
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function() {
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
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".date-picker").forEach((input) => {
      new Litepicker({
        element: input,
        format: 'YYYY-MM-DD'
      });
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('.collapsible');
    const content = document.querySelector('.collapsible-content');
    const icon = toggleButton.querySelector('.icon');

    toggleButton.addEventListener('click', function() {
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
  document.addEventListener("DOMContentLoaded", function() {
    const wraps = document.querySelectorAll(".popover-wrap");

    wraps.forEach((wrap) => {
      const trigger = wrap.querySelector(".icon-nav-information");
      const popover = wrap.querySelector(".tooltip-content");

      if (!trigger || !popover) return;

      // CLICK TOGGLE
      trigger.addEventListener("click", (e) => {
        e.stopPropagation();

        // close others
        document.querySelectorAll(".tooltip-content").forEach((el) => {
          if (el !== popover) el.classList.add("hidden");
        });

        popover.classList.toggle("hidden");
      });
    });

    // CLICK OUTSIDE TO CLOSE
    document.addEventListener("click", () => {
      document.querySelectorAll(".tooltip-content").forEach((el) => {
        el.classList.add("hidden");
      });
    });
  });
</script>
<script>
  const initCollapsibles = () => {
    const triggers = qsa(".collapsible");
    const speed = 220;

    const open = (trigger, content) => {
      trigger.classList.add("active");
      trigger.setAttribute("aria-expanded", "true");
      const icon = qs(".icon", trigger);
      if (icon) icon.textContent = "-";

      content.style.overflow = "hidden";
      content.style.maxHeight = `${content.scrollHeight}px`;
      window.setTimeout(() => {
        if (trigger.classList.contains("active")) {
          content.style.maxHeight = "none";
        }
      }, speed);
    };

    const close = (trigger, content) => {
      trigger.classList.remove("active");
      trigger.setAttribute("aria-expanded", "false");
      const icon = qs(".icon", trigger);
      if (icon) icon.textContent = "+";

      content.style.overflow = "hidden";
      content.style.maxHeight = `${content.scrollHeight}px`;
      requestAnimationFrame(() => {
        content.style.maxHeight = "0px";
      });
    };

    triggers.forEach((trigger) => {
      if (!trigger || trigger.dataset.collapsibleBound === "true") return;

      const content = trigger.nextElementSibling;
      if (!content?.classList?.contains("collapsible-content")) return;

      const shouldOpen =
        trigger.classList.contains("active") ||
        trigger.dataset.defaultOpen === "true" ||
        trigger.getAttribute("aria-expanded") === "true";

      if (shouldOpen) {
        open(trigger, content);
      } else {
        close(trigger, content);
      }

      trigger.addEventListener("click", (event) => {
        event.preventDefault();
        if (trigger.classList.contains("active")) {
          close(trigger, content);
        } else {
          open(trigger, content);
        }
      });

      trigger.dataset.collapsibleBound = "true";
    });
  };
</script>
<?php include('./inc/footer.php') ?>
