<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php'); ?>


<section class="bg-secondary  common-box contact-page" role="main">
  <div class="package__content-wrapper ">
    <div class="container">
      <div class="page-title flex justify-between mb-0 ">
        <h1 class="package__section-title">
          Contact Us
        </h1>
        <div>
          <button class="share-btn rounded-[17px] bg-primary text-white text-[15px] text-center py-2 px-4 font-semibold">
            <span class="icon-share text-[18px]"></span>
            Share
          </button>
        </div>
      </div>
      <div class="contact-page__description grid grid-cols-12 ">
        <div class="contact-page__content col-span-10 ">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem labore optio dignissimos repudiandae ab accusantium soluta maxime odit ratione officiis? Labore quasi natus esse tempore eum nulla illum, magni eos.
        </div>
      </div>
      <!-- Grid -->
      <div class="grid lg:grid-cols-2 gap-12 common-box">

        <!-- LEFT SIDE -->
        <div>
          <h2 class="text-2xl font-semibold mb-6 font-playfair">Holy Kailash Tours</h2>

          <div class="space-y-4 text-text_color">

            <div class="flex items-center gap-3">
              <span class="icon-place text-icon text-[#89bfe1]"></span>
              <p>Thamel, Kathmandu, Nepal</p>
            </div>

            <div class="flex items-center gap-3">
              <span class="icon-envelope text-icon text-[#89bfe1]"></span>
              <p>info@nepaltravelexperience.com</p>
            </div>

            <div class="flex items-center gap-3">
              <span class="icon-whatapp text-icon text-[#89bfe1]"></span>
              <p>+977 015123456</p>
            </div>

            <div class="flex items-center gap-3 ">
              <span class="icon-phone text-icon text-[#89bfe1]"></span>
              <p>+977 9851234567</p>
            </div>

          </div>

          <!-- Divider -->
          <div class="h-1 w-12 rounded-2xl bg-icon my-8"></div>

          <!-- Social -->
          <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
          <div class="flex gap-4 text-xl text-icon">
            <a href="#"><span class="icon-facebook1  "></span></a>
            <a href="#"><span class="icon-instagram"></span></a>
            <a href="#"><span class="icon-linkedin"></span></a>
            <a href="#"><span class="icon-youtube"></span></a>
          </div>
        </div>


        <!-- RIGHT SIDE FORM -->
        <div>
          <div class="bg-[#6cafda] rounded-[10px] p-8.5 ">

            <div class="text-white font-black font-playfair text-[25px]">
              Get in touch

            </div>
            <div class="relative w-full group mb-5">
              <input
                type="text"
                name="name"
                id="name"
                class="block w-full mt-2 bg-[#fcf9f8] rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                placeholder=" "
                required />
              <label
                for="name"
                class="absolute top-4  origin-left -translate-y-4 scale-75 transform pl-3 text-text_color text-sm duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:inset-s-0 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Full Name
                <span class="text-red-700">*</span>
              </label>
            </div>
            <div class="relative w-full group ">
              <input
                type="email"
                name="email"
                id="email"
                class="block w-full mt-4 text-base bg-[#fcf9f8] rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                placeholder=" "
                required />
              <label
                for="email"
                class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                Email Address
                <span class="text-red-700">*</span>
              </label>
            </div>

            <!-- <div class="col-span-12 ">
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
              <div class="relative w-full mt-3">
                <textarea
                  name="extra_info"
                  id="extrainfo"
                  rows="8"
                  class="block w-full text-base bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                  placeholder="What can Our travel experts help you with?"
                  required></textarea>
                <label
                  for="extrainfo"
                  class="absolute top-[5px] origin-[0] -translate-y-[5px] scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                  More about your Travel Plans
                </label>
              </div>
            </div> -->

            <!-- <form action="#" class="contact-form">
              <div class="group relative z-0 mb-5 w-full"><input type="text" id="fullname" class="w-full rounded bgb-transparent text-text_color focus:outline-none focus:ring-0" placeholder value="fullname">
                <label for="fullname" class=" text-text-color peer-focus:text-text-color peer-focus:dark:text-text-color  absolute top-3   origin-[0] -translate-y-3 scale-75 transform pl-3  text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">Full Name <span class="text-red-700">*</span></label>
              </div>
            </form> -->

            <!-- <form class="space-y-5">

              <input type="text" placeholder="Name*" class="contact-input">

              <input type="email" placeholder="Email Address*" class="contact-input">

              <div class="grid grid-cols-2 gap-4">
                <input type="text" placeholder="+977" class="contact-input">
                <select class="contact-input">
                  <option>Nepal</option>
                  <option>Bhutan</option>
                  <option>Tibet</option>
                </select>
              </div>

              <textarea rows="4"
                placeholder="Pickup details and extra requirements"
                class="contact-input resize-none">
                                </textarea>

            </form> -->

            <!-- <div class="p-4 sm:p-8 mt-5 normal-form contact-form-wrapper bg-dim_bg rounded-[5px]">
              <form class="w-full floating-form">
                <div class="grid grid-cols-12 gap-2">
                  <div class="col-span-12 sm:col-span-6">
                    <div class="relative w-full group">
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="block w-full text-base bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                        placeholder=" "
                        required />
                      <label
                        for="name"
                        class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Full Name
                        <span class="text-red-700">*</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <div class="relative w-full group">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="block w-full text-base bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                        placeholder=" "
                        required />
                      <label
                        for="email"
                        class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Email Address
                        <span class="text-red-700">*</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <div class="relative w-full group">
                      <input
                        type="text"
                        name="phone"
                        id="phone"
                        class="block w-full text-base bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                        placeholder=" "
                        required />
                      <label
                        for="phone"
                        class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Phone no., Whatsapp <span class="hidden lg:inline-block">or any other quick ways to reach you</span>
                        <span class="text-red-700">*</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <div class="relative w-full group">
                      <select
                        name="country"
                        id="country"
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
                      <label
                        for="country"
                        class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Nationality
                        <span class="text-red-700">*</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <div class="flex flex-col items-center gap-2 sm:flex-row">
                      <div class="relative w-full group">
                        <input
                          type="number"
                          name="adults"
                          id="adults"
                          min="1"
                          class="block w-full text-base bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                          placeholder=" "
                          required />
                        <label
                          for="adults"
                          class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                          No. of Adults
                          <span class="text-red-700">*</span>
                        </label>
                      </div>
                      <div class="relative w-full group ">
                        <input
                          type="number"
                          min="1"
                          name="child"
                          id="child"
                          class="block w-full text-base bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                          placeholder=" " />
                        <label
                          for="child"
                          class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                          No. of Children
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <div class="relative w-full group">
                      <input
                        type="text"
                        name="doa"
                        id="doa"
                        class="block w-full text-base bg-transparent rounded appearance-none date-picker peer text-text_color focus:outline-none focus:ring-0"
                        placeholder=" "
                        required />
                      <label
                        for="doa"
                        class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Date of Arrival
                        <span class="text-red-700">*</span>
                      </label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="flexible">
                      <label for="flexible" class="text-sm">My Date is flexible</label>
                    </div>
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <div class="relative w-full group">
                      <select
                        name="hotel"
                        id="hotel"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0">

                        <option value="5star" selected>
                          5 Stars - Famous Chains
                        </option>
                        <option value="4star"> 4 Stars - Best Deal & Location</option>

                      </select>
                      <label
                        for="doa"
                        class="absolute top-[15px] origin-[0] -translate-y-[16px] scale-75 transform pl-3 text-base text-text_color duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        Hotel Styles
                      </label>
                    </div>
                  </div>
                  <div class="col-span-12 ">
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
                    <div class="relative w-full mt-3">
                      <textarea
                        name="extra_info"
                        id="extrainfo"
                        rows="8"
                        class="block w-full text-base bg-transparent rounded appearance-none peer text-text_color focus:outline-none focus:ring-0"
                        placeholder="What can Our travel experts help you with?"
                        required></textarea>
                      <label
                        for="extrainfo"
                        class="absolute top-[5px] origin-[0] -translate-y-[5px] scale-75 transform pl-3 text-base duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-[16px] peer-focus:scale-75 peer-focus:text-text_color rtl:peer-focus:translate-x-1/4 peer-focus:dark:text-text_color">
                        More about your Travel Plans
                      </label>
                    </div>
                  </div>
                </div>
                <button class="flex items-center gap-2 px-8 py-2 mt-4 text-base font-bold text-white uppercase bg-primary-effect custom-rounded bg-secondary">
                  <span class="w-4 h-4 icon-loading loader"></span> Submit
                </button>
              </form>
            </div> -->



          </div>

          <!-- Send Button -->
          <button class="primary-btn">
            Send Message
            <span class="view-icon icon-arrow-right"></span>
          </button>

        </div>
      </div>



      <!-- Contact Section -->


      <!-- Map Section -->
      <div class="common-box pt-0 ">
        <h2 class="text-2xl font-bold mb-6">We are located here</h2>

        <div class="h-105 rounded-2xl overflow-hidden shadow-xl border-4 border-white -mb-52.5 relative z-10">
          <iframe
            src="https://maps.google.com/maps?q=thamel,kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed"
            class="w-full h-full"
            allowfullscreen>
          </iframe>
        </div>
      </div>

    </div>
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

<?php include('./inc/footer.php'); ?>
