<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php'); ?>

<section class="bg-secondary common-box pt-0 contact-page pb-25" role="main">
  <div class="package__content-wrapper">
    <div class="container">
      <div class="page-title">
        <h1>Contact Us</h1>
        <div class="contact-page__share">
        </div>
      </div>

      <div class="contact-page__description ">
        <div class="contact-page__content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
        </div>
      </div>

      <div class="p-4 sm:p-8 mt-5 normal-form contact-form-wrapper bg-dim_bg rounded-[5px]">
        <form class="w-full floating-form">
          <div class="grid grid-cols-12 gap-2">
            <div class="col-span-12 sm:col-span-6">
              <div class="form-group">
                <input
                  type="text"
                  name="firstname"
                  id="firstname"
                  class="floating-input peer"
                  placeholder=" "
                  required />
                <label
                  for="fullname"
                  class="floating-label">
                  Full Name<sup>*</sup>
                </label>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6">
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
            </div>
            <div class="col-span-12 sm:col-span-6">
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
            </div>
            <div class="col-span-12 sm:col-span-6">
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
            <div class="col-span-12 sm:col-span-6">
              <div class="flex flex-col items-center gap-2 sm:flex-row">
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
                <div class="relative form-group">
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
            <div class="col-span-12 sm:col-span-6">
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
              <div class="custom-checkbox">
                <input type="checkbox" id="flexible">
                <label for="flexible" class="text-sm">My Date is flexible</label>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6">
              <div class="form-group">
                <select
                  name="hotel"
                  id="hotel"
                  class="floating-input peer">

                  <option value="5star" selected>
                    5 Stars - Famous Chains
                  </option>
                  <option value="4star"> 4 Stars - Best Deal & Location</option>

                </select>
                <label
                  for="doa"
                  class="floating-label">
                  Hotel Styles
                </label>
              </div>
            </div>
            <div class="col-span-12">
              <div class="font-bold text-[15px] mb-2 text-text_color">What interest you while you're on a vacation?</div>
              <div class="button-checkbox">
                <label class="button-checkbox__item">
                  <input type="checkbox" name="interest">
                  <span class="text-sm button-checkbox__item-title ">Heritages & History</span>
                </label>

                <label class="button-checkbox__item">
                  <input type="checkbox" name="interest">
                  <span class="text-sm button-checkbox__item-title ">Natural & Scenery</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="interest">
                  <span class="text-sm button-checkbox__item-title ">Natural & Scenery</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="interest">
                  <span class="text-sm button-checkbox__item-title ">Spiritual Exploration</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="interest">
                  <span class="text-sm button-checkbox__item-title ">Trekking & Adventure</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="interest">
                  <span class="text-sm button-checkbox__item-title ">Cycling</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="interest">
                  <span class="text-sm button-checkbox__item-title ">Golf</span>
                </label>
              </div>
            </div>
            <div class="col-span-12 ">
              <div class="font-bold text-[15px] mb-2 text-text_color">What is the motivation for your trip?</div>
              <div class="button-checkbox">
                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">See a new country and experience a new culture</span>
                </label>

                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">Rest, Relax and Recharge</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">Pampering and indulgence</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">Spend quality time with your partner</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">Family bonding</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">Exercise, get fit and eat healthy</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">Celebrating something - e.g. wedding anniversary, family reunion</span>
                </label>
                <label class="button-checkbox__item">
                  <input type="checkbox" name="motivation">
                  <span class="text-sm button-checkbox__item-title ">other</span>
                </label>
              </div>
            </div>
            <div class="col-span-12 ">
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
            </div>
          </div>
          <button class="btn-primary">
            <span class="w-4 h-4 icon-loading loader"></span> Submit
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include('./inc/footer.php'); ?>
