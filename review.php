<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box pt-0 bg-secondary testimonial-page" role="main">
  <div class="common-page-wrapper">
    <div class="container">
      <div class="page-title flex flex-col items-start justify-between sm:flex-row">
        <h1>Reviews</h1>
        <div class="review-list__sort max-sm:w-full">
          <select class="rounded-custom border-dim-border mb-5 w-full border bg-white max-sm:mt-2 sm:max-w-52">
            <option>Top Reviews</option>
            <option>Newest</option>
            <option>Rating: Highest to Lowest</option>
            <option>Rating: Lowest to Highest</option>
          </select>
        </div>
      </div>

      <div class="testimonial-page__wrapper columns-1 md:columns-2">

        <!-- Review 1 (no platform badge) -->
        <div class="testimonial__list-item ">
          <div class="testimonial__list-item-meta gap-3">
            <img src="/images/svg/circular-tripadvisor.svg"
              data-testimonial-review-icon
              class="w-7.5 h-7.5 cursor-pointer" alt="Trip Advisor" />
            <div class="testimonial__list-item-rating green-dot-rating flex items-center gap-2">
              <div class="rating-wrap rating-5">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
              </div>
            </div>
          </div>
          <div class="testimonial__list-item-title">" The trek was life-changing!</div>
          <div class="review-list__item-content text-text_color text-sm">
            <div class="testimonial__list-item-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis fugit. Quas,
                eum mollitia. Similique harum veniam totam iste?</p>
            </div>
          </div>
          <div class="testimonial__list-item-reviewer ">
            <div class="reviewer-image">
              <div class="placeholder__img-wrapper">
                <div class="w-full placeholder__img">
                  <img src="/images/dynamic/reviewer.webp" width="55" height="55"
                    class="rounded-full" alt="" />
                </div>
              </div>

            </div>
            <div class="reviewer-content ">
              <div class=" text-lg font-bold leading-6 text-text_color">Ramiro Barraza -
                USA
              </div>
              <span class=" block text-xs leading-6 text-text_color">Annapurna Circuit, 2014</span>
            </div>
          </div>
        </div>

        <!-- Review 2 (TripAdvisor) -->
        <div class="testimonial__list-item ">
          <div class="testimonial__list-item-meta">
            <img src="/images/svg/circular-tripadvisor.svg"
              data-testimonial-review-icon
              class="w-7.5 h-7.5 cursor-pointer" alt="Trip Advisor" />
            <div class="testimonial__list-item-rating green-dot-rating flex items-center gap-2">
              <div class="rating-wrap rating-5">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
              </div>
            </div>
          </div>
          <div class="testimonial__list-item-title">" The trek was life-changing!</div>
          <div class="review-list__item-content text-text_color text-sm">
            <div class="testimonial__list-item-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis fugit. Quas,
                eum mollitia. Similique harum veniam totam iste?</p>
            </div>
          </div>
          <div class="testimonial__list-item-reviewer ">
            <div class="reviewer-image">
              <div class="placeholder__img-wrapper">
                <div class="w-full placeholder__img">
                  <img src="/images/dynamic/reviewer.webp" width="55" height="55"
                    class="rounded-full" alt="" />
                </div>
              </div>

            </div>
            <div class="reviewer-content ">
              <div class=" text-lg font-bold leading-6 text-text_color">Ramiro Barraza -
                USA
              </div>
              <span class=" block text-xs leading-6 text-text_color">Annapurna Circuit, 2014</span>
            </div>
          </div>
        </div>

        <!-- Review 3 (Google) -->
        <div class="testimonial__list-item ">
          <div class="testimonial__list-item-meta gap-3">
            <a href="">
              <img src="/images/svg/circular-google.svg"
                data-testimonial-review-icon
                class="w-7.5 h-7.5 cursor-pointer" alt="Google" />
            </a>
            <div class="testimonial__list-item-rating flex items-center gap-2">
              <div class="rating-wrap rating-5">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
              </div>
            </div>
          </div>
          <div class="testimonial__list-item-title">" The trek was life-changing!</div>
          <div class="review-list__item-content text-text_color text-sm">
            <div class="testimonial__list-item-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis fugit. Quas,
                eum mollitia. Similique harum veniam totam iste?</p>
            </div>
          </div>
          <div class="testimonial__list-item-reviewer ">
            <div class="reviewer-image">
              <div class="placeholder__img-wrapper">
                <div class="w-full placeholder__img">
                  <img src="/images/dynamic/reviewer.webp" width="55" height="55"
                    class="rounded-full" alt="" />
                </div>
              </div>

            </div>
            <div class="reviewer-content ">
              <div class=" text-lg font-bold leading-6 text-text_color">Ramiro Barraza -
                USA
              </div>
              <span class=" block text-xs leading-6 text-text_color">Annapurna Circuit, 2014</span>
            </div>
          </div>
        </div>

        <!-- Review 4 (Facebook) -->
        <div class="testimonial__list-item m-0!">
          <div class="testimonial__list-item-meta gap-3">
            <img src="/images/svg/circular-facebook.svg"
              data-testimonial-review-icon
              class="w-7.5 h-7.5 cursor-pointer" alt="Facebook" />
            <div class="testimonial__list-item-rating flex items-center gap-2">
              <div class="rating-wrap rating-5">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
              </div>
            </div>
          </div>
          <div class="testimonial__list-item-title">" The trek was life-changing!</div>
          <div class="review-list__item-content text-text_color text-sm">
            <div class="testimonial__list-item-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis fugit. Quas,
                eum mollitia. Similique harum veniam totam iste?</p>
            </div>
          </div>
          <div class="testimonial__list-item-reviewer ">
            <div class="reviewer-image">
              <div class="placeholder__img-wrapper">
                <div class="w-full placeholder__img">
                  <img src="/images/dynamic/reviewer.webp" width="55" height="55"
                    class="rounded-full" alt="" />
                </div>
              </div>

            </div>
            <div class="reviewer-content ">
              <div class=" text-lg font-bold leading-6 text-text_color">Ramiro Barraza -
                USA
              </div>
              <span class=" block text-xs leading-6 text-text_color">Annapurna Circuit, 2014</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include('./inc/footer.php') ?>
