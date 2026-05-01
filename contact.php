<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box contact-page bg-secondary" role="main">
  <div class="common-page-wrapper">
    <div class="container">
      <div class="page-title">
        <h1>
          Contact
        </h1>
      </div>

      <div class="contact-page__description mt-0">
        <div class="contact-page__content ">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem labore optio dignissimos repudiandae ab accusantium soluta maxime odit ratione officiis? Labore quasi natus esse tempore eum nulla illum, magni eos.
        </div>
      </div>

      <div class="my-10 contact-page__info">
        <div class="contact-page__info-title font-exo font-bold md:text-[25px] text-text_color text-[22px]  mb-[50px]">
          Nepal Travel Experience
        </div>
        <div class="grid grid-cols-12 gap-5">
          <div class="col-span-12 lg:col-span-4">
            <div class="flex items-center gap-3 contact-page__info-item ">
              <div class="contact-page__info-item-icon">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary">
                  <span class="text-lg text-white icon-phone"></span>
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
                  <span class="text-lg text-white icon-place"></span>
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
                  <span class="text-lg text-white icon-envelope"></span>
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
      <div class="common-box contact-page__form ">
        <div class="grid grid-cols-12">
          <div class="col-span-12 lg:col-span-6">
            <div class="mb-3 text-xl font-extrabold text-text_color">We Would love to hear from you.</div>
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

                <button type="submit" class="btn-primary hav-icon mt-2">
                  Send Message
                  <span class="icon-view "></span>
                </button>
              </form>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="contact-page__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4189.738358318929!2d85.30969617599216!3d27.715013425152307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcb77fd4bd%3A0x58099b1deffed8d4!2sThamel%2C%20Kathmandu%2044600!5e1!3m2!1sen!2snp!4v1754908533371!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./inc/footer.php') ?>
