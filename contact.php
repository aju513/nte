<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php'); ?>

<section class="bg-secondary common-box pt-0 contact-page pb-35" role="main">
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

      <div class="contact-page__layout ">
        <div class="contact-page__info">
          <h2 class="contact-page__info-title">Nepal Travel Experience</h2>
          <div class="contact-page__info-list">
            <div class="contact-page__info-item">
              <span class="icon-place icon"></span>
              <div class="flex flex-col justify-start gap-2">
                <span class="text-sm font-bold leading-2 text-block">Address</span>
                <span class="text-base leading-4">Thamel Marg, Kathmandu, Nepal</span>
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
        <div>
          <div class="contact-page__form-box">
            <div class="contact-page__form-title">Get in touch</div>
            <form class="contact-page__form" action="#" method="post">
              <div class="contact-page__form-grid">
                <div class="contact-page__field contact-page__field--full">
                  <input type="text" id="contact-name" name="name" placeholder="Your full name" required>
                </div>

                <div class="contact-page__field contact-page__field--full">
                  <input type="email" id="contact-email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="contact-page__field">
                  <input type="tel" id="contact-phone" name="phone" placeholder="+977" required>
                </div>

                <div class="contact-page__field">
                  <select id="contact-country" name="country" required>
                    <option value="">Select your country</option>
                    <option value="Nepal">Nepal</option>
                    <option value="India">India</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                  </select>
                </div>

                <div class="contact-page__field contact-page__field--full">
                  <textarea id="contact-message" name="message" rows="6"
                    placeholder="Tell us about your plan, preferred destinations, dates, or any special requirements."></textarea>
                </div>
              </div>

            </form>
            <button type="submit" class="btn-outline-primary bg-white! hav-icon mt-6">
              Send Message
              <span class="icon-view "></span>
            </button>
          </div>
        </div>
      </div>

      <div class="common-box pt-0">
        <h2 class="text-2xl font-black mb-6 font-playfair">We are located here</h2>

        <div class="h-105 relative z-10 overflow-hidden rounded-2xl border-4 border-white shadow-xl -mb-52.5">
          <iframe src="https://maps.google.com/maps?q=thamel,kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed"
            class="w-full h-full" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('./inc/footer.php'); ?>
