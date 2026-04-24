<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box contact-page bg-secondary" role="main">
  <div class="container">
    <div class="page-title">
      <h1>
        Contact
      </h1>
    </div>
  </div>
  <div class="contact-page__description">
    <div class="container">
      <div class="contact-page__content ">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem labore optio dignissimos repudiandae ab accusantium soluta maxime odit ratione officiis? Labore quasi natus esse tempore eum nulla illum, magni eos.
      </div>
    </div>
  </div>
  <div class="my-10 contact-page__info">
    <div class="container">
      <div class="contact-page__info-title font-exo font-bold md:text-[25px] text-text_color text-[22px]  mb-[50px]">
        Nepal Travel Experience
      </div>
      <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12 lg:col-span-4">
          <div class="flex items-center gap-3 contact-page__info-item ">
            <div class="contact-page__info-item-icon">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary">
                <span class="text-lg text-white icon-phone-fill"></span>
              </div>
            </div>
            <div class="contact-page__info-item-content">
              <span class=" font-bold text-text_color opacity-80 flex-[0_0_40px]">Call Us or Message</span>
              <div class="-mt-1.25  font-normal text-text_color">

                <a href="" target="__blank">+977 98510123456</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <div class="flex items-center gap-3 contact-page__info-item ">
            <div class="contact-page__info-item-icon">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary">
                <span class="text-lg text-white icon-location-fill"></span>
              </div>
            </div>
            <div class="contact-page__info-item-content">
              <span class="text-lg font-bold text-text_color opacity-80 flex-[0_0_40px]">Office location</span>
              <div class="-mt-[5px] text-base font-normal text-text_color">
                <span class="text-base font-bold text-text_color">Address: </span>
                <span>Thamel, Kathmandu, Nepal</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <div class="flex items-center gap-3 contact-page__info-item ">
            <div class="contact-page__info-item-icon">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary">
                <span class="text-lg text-white icon-envelope-fill"></span>
              </div>
            </div>
            <div class="contact-page__info-item-content">
              <span class="text-lg font-bold text-text_color opacity-80 flex-[0_0_40px]">Send us</span>
              <div class="-mt-[5px] text-base font-normal text-text_color">
                <span class="text-base font-bold text-text_color">Email: </span>
                <a href="" target="__blank " class="break-all">info@himalayanaisa.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="common-box contact-page__form floating-form">
    <div class="container">
      <div class="grid grid-cols-12">
        <div class="col-span-12 lg:col-span-6">
          <div class="mb-3 text-xl font-extrabold text-text_color">We Would love to hear from you.</div>
          <form class="contact-form ">
            <div class="relative z-0 w-full mb-5 group">
              <input
                type="text"
                name="fullname"
                id="fullname"
                class="block w-full text-heading_color custom-rounded peer focus:outline-none focus:ring-0"
                placeholder=" "
                required />
              <label
                for="fullname"
                class="text-text-color peer-focus:text-text-color pl-4 peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                Full Name<span class="text-red-700">*</span>
              </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
              <input
                type="email"
                name="mail"
                id="mail"
                class="block w-full appearance-none text-heading_color custom-rounded peer focus:outline-none focus:ring-0"
                placeholder=" "
                required />
              <label
                for="mail"
                class="text-text-color peer-focus:text-text-color pl-4 peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                Email Address<span class="text-red-700">*</span>
              </label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full group lg:mb-5">
                <input
                  type="text"
                  name="phone"
                  id="phone"
                  class="block w-full appearance-none text-heading_color custom-rounded peer focus:outline-none focus:ring-0"
                  placeholder=" "
                  required />
                <label
                  for="phone"
                  class="text-text-color peer-focus:text-text-color pl-4 peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Phone Number<span class="text-red-700">*</span>
                </label>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                <select
                  name="country"
                  id="country"
                  class="block w-full appearance-none text-heading_color custom-rounded peer focus:outline-none focus:ring-0">
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
                  class="text-text-color peer-focus:text-text-color pl-4 peer-focus:dark:text-text-color absolute top-3 origin-[0] -translate-y-3 scale-75 transform duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                  Choose a Country
                  <span class="text-red-700">*</span>
                </label>
                <small class="font-semibold text-red-500">
                  Country field is required
                </small>
              </div>
            </div>
            <div class="relative z-0 w-full mb-5">
              <textarea
                name="extra_info"
                id="extrainfo"
                rows={4}
                class="block w-full appearance-none text-heading_color custom-rounded peer focus:outline-none focus:ring-0"
                placeholder=" "
                required></textarea>
              <label
                for="extrainfo"
                class="peer-focus:text-text-color peer-focus:dark:text-text-color pl-4 absolute top-3 origin-[0] -translate-y-3 scale-75 transform duration-300 focus:pl-0 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-3 peer-focus:scale-75 rtl:peer-focus:translate-x-1/4">
                Questions / Comments*
              </label>
            </div>

            <button href="" class="inline-flex items-center gap-3 arrow-move-effect bg-[#90d4ff] rounded-[30px] px-5 py-[10px]">
              Send message
              <span class="text-sm icon-slanted-arrow"></span>
            </button>
          </form>
        </div>
        <div class="col-span-12 lg:col-span-6">
          <div class="contact-page__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4189.738358318929!2d85.30969617599216!3d27.715013425152307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcb77fd4bd%3A0x58099b1deffed8d4!2sThamel%2C%20Kathmandu%2044600!5e1!3m2!1sen!2snp!4v1754908533371!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./inc/footer.php') ?>
