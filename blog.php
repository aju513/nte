<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="blog-page common-box" role="main">
  <div class="container">

    <div class="page-title">
      <h1>Blog</h1>
    </div>

    <div class="page-summary lg:w-4/5">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>

  </div>
</section>

<!-- Featured Blog -->
<section class="featured-blog">
  <div class="container">
    <div class="grid grid-cols-12">

      <div class="hidden lg:col-span-6 lg:block">
        <div class="featured-blog__image">
          <div class="placeholder__img-wrapper">
            <div class="placeholder__img">
              <img src="/themes/images/blog-thumb.webp" width="600" height="550" alt="thumb">
            </div>
          </div>
        </div>
      </div>

      <div class="col-span-12 lg:col-span-6 xl:pr-7">
        <div class="featured-blog__content-wrap">

          <h3 class="featured-blog__title">
            <a href="#">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit
            </a>
          </h3>

          <div class="featured-blog__meta">

            <div class="featured-blog__date">
              <i class="icon-calendar text-primary"></i>
              <span class="text-text_color text-sm font-semibold">
                December 12, 2024
              </span>
            </div>

            <div class="featured-blog__author">
              <i class="icon-author text-primary"></i>
              <span class="text-text_color text-sm font-semibold">
                Aakash
              </span>
            </div>

            <div class="featured-blog__category">
              <i class="icon-category text-primary"></i>
              <span class="text-text_color text-sm font-semibold">
                Nepal
              </span>
            </div>

          </div>

          <a href="#" class="arrow-rotate-effect border-text_color text-text_color inline-flex items-center gap-2 rounded-full border px-5 py-2 text-sm font-bold">
            View More
            <i class="icon-arrow"></i>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Blog List -->
<section class="recent-blog-list bg-dim_bg common-box">
  <div class="container">

    <!-- Search -->
    <div class="blog-search">
      <div class="flex flex-col sm:flex-row gap-5 justify-between">

        <select class="border border-secondary/15">
          <option selected>All Topics</option>
          <option>Cultural Tours</option>
          <option>Tours</option>
          <option>Golfing</option>
          <option>Jungle Safari</option>
          <option>Bunjee Jump</option>
          <option>Canoying</option>
        </select>

        <div class="relative">
          <input type="text" placeholder="Search the blog"
            class="text-text_color rounded-custom shadow-custom w-full bg-white px-6 py-3 text-[15px] lg:w-112.5">

          <div class="absolute top-4 right-4">
            <i class="icon-search text-primary"></i>
          </div>
        </div>

      </div>
    </div>

    <div class="innersection-title">Recent Post</div>

    <div class="grid grid-cols-12 gap-5">

      <!-- BLOG ITEM -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div class="blog-list__item">

          <div class="blog-list__item-image">
            <div class="placeholder__img-wrapper">
              <div class="placeholder__img">
                <a href="#">
                  <img src="/themes/images/blog-thumb.webp" width="600" height="550" alt="image">
                </a>
              </div>
            </div>
          </div>

          <div class="blog-list__item-content">
            <div class="blog-list__item-meta">
              <div>05 Jan, 2025</div>
              <div>admin</div>
            </div>

            <h3 class="blog-list__item-content-title">
              <a href="#">
                Meet Nature And Wildlife in Chitwan National Park
              </a>
            </h3>
          </div>

        </div>
      </div>

      <!-- Duplicate same block for more items -->

      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div class="blog-list__item">
          <div class="blog-list__item-image">
            <div class="placeholder__img-wrapper">
              <div class="placeholder__img">
                <a href="#">
                  <img src="/themes/images/blog-thumb.webp" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="blog-list__item-content">
            <div class="blog-list__item-meta">
              <div>05 Jan, 2025</div>
              <div>admin</div>
            </div>
            <h3>
              <a href="#">Meet Nature And Wildlife in Chitwan National Park</a>
            </h3>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
