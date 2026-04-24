<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<section class="bg-secondary">
  <?php include('./inc/breadcrumbs.php') ?>
  <section class="common-box packagelist-page" role="main">
    <div class="container">
      <div class="page-title">
        <h1>Package List</h1>
      </div>
      <div class="page-summary lg:w-4/5">
        <p>
          Proin vestibulum finibus dolor eget euismod. Suspendisse
          hendrerit, sapien eu mattis sagittis, tellus nisi posuere massa,
          in volutpat orci augue ut dui. Cras eget tincidunt velit. Sed
          malesuada fermentum vulputate. Vestibulum ultricies efficitur est
          non gravida.
        </p>
      </div>
    </div>

    <div class="package-list__wrapper common-box bg-dim_bg mt-8">
      <div class="container">

        <div class="font-merriweather mb-5 text-base">
          Showing <span class="text-primary font-bold">14</span> Package(s)
        </div>

        <div class="grid grid-cols-12 gap-5">
          <div class="col-span-12 sm:col-span-6 lg:col-span-4">
            <div class="package-list__item">
              <div class="package-list__item-image">
                <div class="placeholder__img-wrapper">
                  <div class="placeholder__img">
                    <a href="#">
                      <img src="../images/dynamic/package-thumb.webp" width="600" height="400" alt="image">
                    </a>
                  </div>
                </div>
              </div>
              <div class="package-list__item-content">
                <div class="package-list__item-top">
                  <div class="package-list__item-duration">
                    <span class="text-[15px] icon-time-quarter-to text-[#76b4dc]"></span>
                    <span class="content text-xs font-bold text-text_color">Duration: 15 Days</span>
                  </div>
                  <div class="package-list__item-reviews text-text_color text-xs">
                    <span class="icon-star-rate text-[#dfd200]"></span>
                    <span class="font-bold ">4.9</span>
                    <span>(4 Reviews)</span>
                  </div>
                </div>
                <div class="package-list__item-title">
                  <h3 class="homepage__package-title">
                    <a href="#" class="">
                      Everest Base Camp Trekking
                    </a>
                  </h3>
                </div>
                <div class="package-list__item-meta ">
                  <div class="">
                    <div class="font-16px">
                      Price From
                    </div>
                    <div class="package-list__item-price">
                      <span class="text-lg font-bold text-primary">US$ 1680</span>
                      <span class="text-black line-through opacity-50 ">US$1800</span>
                    </div>
                  </div>
                  <div class="package-list__item-explore-btn">
                    <a href="#" class="explore_btn">
                      Explore
                      <span class="icon-arrow-right"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</section>

<?php include('./inc/footer.php') ?>