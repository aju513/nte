<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php'); ?>

<section class="bg-secondary common-box contact-page" role="main">
  <div class="package__content-wrapper">
    <div class="container">
      <div class="page-title contact-page__heading mb-0">
        <h1 class="package__section-title">Contact Us</h1>
        <div class="contact-page__share">
          <button
            class="share-btn ">
            <span class="icon-share text-[18px]"></span>
            Share
          </button>
        </div>
      </div>

      <div class="contact-page__description">
        <div class="contact-page__content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
        </div>
      </div>

      <div class="contact-page__layout common-box">
        <div class="contact-page__info">
          <h2 class="contact-page__info-title">Holy Kailash Tours</h2>

          <div class="contact-page__info-list">
            <div class="contact-page__info-item">
              <span class="icon-place text-[#89bfe1]"></span>
              <p>Thamel, Kathmandu, Nepal</p>
            </div>

            <div class="contact-page__info-item">
              <span class="icon-envelope text-[#89bfe1]"></span>
              <p><a href="mailto:info@nepaltravelexperience.com">info@nepaltravelexperience.com</a></p>
            </div>

            <div class="contact-page__info-item">
              <span class="icon-whatapp text-[#89bfe1]"></span>
              <p><a href="tel:+977015123456">+977 015123456</a></p>
            </div>

            <div class="contact-page__info-item">
              <span class="icon-phone text-[#89bfe1]"></span>
              <p><a href="tel:+9779851234567">+977 9851234567</a></p>
            </div>
          </div>

          <div class="contact-page__divider"></div>

          <h3 class="contact-page__social-title">Follow Us</h3>
          <div class="contact-page__socials">
            <a href="#"><span class="icon-facebook1"></span></a>
            <a href="#"><span class="icon-instagram"></span></a>
            <a href="#"><span class="icon-linkedin"></span></a>
            <a href="#"><span class="icon-youtube"></span></a>
          </div>
        </div>

        <div class="contact-page__form-card">
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

            <button type="submit" class="contact-page__submit">
              Send Message
              <span class="icon-view text-primary"></span>
            </button>
          </form>
        </div>
      </div>

      <div class="common-box pt-0">
        <h2 class="text-2xl font-bold mb-6 font-playfair">We are located here</h2>

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
