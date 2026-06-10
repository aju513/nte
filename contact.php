<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php'); ?>

<section class="bg-secondary common-box pt-0 contact-page pb-40 lg:pb-30 xl:pb-40" role="main">
  <div class="container-fluid-custom">
    <div class="container">
      <div class="page-title">
        <h1>Contact Us</h1>
      </div>

      <div class="contact-page__description ">
        <div class="contact-page__content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
        </div>
      </div>
    </div>
    <div class="contact-page__layout ">
      <div class="container">
        <div class="contact-page__info">
          <div class="contact-page__info-left">
            <h2 class="contact-page__info-title">Nepal Travel Experience</h2>
            <div class="contact-page__info-list">
              <div class="contact-page__info-item">
                <span class="icon-place icon"></span>
                <div class="flex flex-col justify-start gap-2">
                  <span class="text-sm font-bold leading-2 text-block">Address</span>
                  <span class="text-base leading-5">Thamel Marg, Kathmandu, Nepal</span>
                </div>
              </div>
              <div class="contact-page__info-item">
                <span class="icon-envelope icon"></span>
                <div class="flex flex-col justify-start gap-1">
                  <span class="text-sm font-bold leading-2 text-block">Email</span>
                  <a href="mailto:info@nepaltravelexperience.com"
                    class="max-w-65 md:max-w-none wrap-break-words break-all text-base">
                    info@nepaltravelexperience.com
                  </a>
                </div>
              </div>
              <div class="contact-page__info-item">
                <span class="icon-whatapp icon"></span>
                <div class="flex flex-col justify-start gap-1">
                  <span class="text-sm font-bold leading-2 text-block">Whatsapp</span>
                  <a href="tel:+977015123456" class="break-all text-base">+977 015123456</a>
                </div>
              </div>
              <div class="contact-page__info-item">
                <span class="icon-phone icon"></span>
                <div class="flex flex-col justify-start gap-1">
                  <span class="text-sm font-bold leading-2 text-block">Mobile</span>
                  <a href="tel:+9779851234567" class="break-all text-base">+977 9851234567</a>
                </div>
              </div>
            </div>
            <div class="contact-page__divider"></div>
            <h3 class="contact-page__social-title">Follow Us</h3>
            <div class="contact-page__socials">
              <a href="#"><span class="icon-facebook "></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
              <a href="#"><span class="icon-tiktok"></span></a>
              <a href="#"><span class="icon-x"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
            </div>
          </div>
          <div class="contact-page__form-box">
            <div class="contact-page__form-title">Send Us an Email</div>
            <form class="w-full floating-form" action="#" method="post">
              <div class="form-group mb-5">
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
              <div class="relative form-group mb-5">
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
              <div class="grid gap-3 md:grid-cols-2 md:gap-6 mb-5">
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
              </div>
              <div class="relative w-full form-group mt-5 lg:mt-3">
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
            </form>
            <button type="submit" class="btn-white  hav-icon mt-4">
              Send Message
              <span class="icon-view "></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="common-box pt-8">
      <div class="container">
        <h2 class="text-2xl font-black mb-4 font-playfair">We're Here</h2>
        <div class="h-105 relative z-10 overflow-hidden rounded-2xl border-4 border-white -mb-52.5">
          <iframe src="https://maps.google.com/maps?q=thamel,kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed"
            class="w-full h-full" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('./inc/footer.php'); ?>
