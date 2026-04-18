<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>

<section class="package-sticky-nav ">
  <div class="container mx-auto">
    <ul class="nav-link-wrapper">
      <li>
        <a class="nav-item-link package-sticky-nav-item-link active" href="#package-overview">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-overview"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title">Overview</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-gallery">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-gallery"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title"> Trip Gallery</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-itinerary">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-itinerary"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title"> Itinerary</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-route">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-route"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title"> Route Map</span>
        </a>
      </li>

      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-cost-details">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-cost-details"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title">Cost Details</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-availability">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-available"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title">Availability</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-addons">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-addon"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title">Add Ons</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-essentials">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-additional"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title"> Essentials Information</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-faq">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-faq"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title"> FAQs</span>
        </a>
      </li>
      <li>
        <a class="nav-item-link package-sticky-nav-item-link " href="#package-reviews">
          <span class="package-page__nav-item-icon">
            <span class="relative text-xl text-white top-1 icon-nav-review"></span>
          </span>
          <span class="text-sm text-white package-page__nav-item-title"> Reviews</span>
        </a>
      </li>
    </ul>
  </div>
</section>

<section class=" package-page bg-secondary relative  " role="main">
  <?php include('./inc/breadcrumbs.php') ?>
  <div class="package__banner  ">
    <div class="container-fluid relative">
      <div class="package__banner-wrapper common-box pb-0">
        <div class="package__banner-item banner-half lg">
          <a data-fancybox="package-banner" href="./images/dynamic/package1.webp">
            <div class="placeholder__img-wrapper">
              <div class="w-full placeholder__img">
                <img
                  width={1200}
                  height={900}
                  class="rounded-custom"
                  src="./images/dynamic/package1.webp"
                  alt="thumb" />
              </div>
            </div>
          </a>
        </div>
        <div class="package__banner-item banner-quarter">
          <a data-fancybox="package-banner" href="./images/dynamic/package-2.webp">
            <div class="placeholder__img-wrapper">
              <div class="w-full placeholder__img">
                <img
                  width={1200}
                  height={900}
                  class="rounded-custom"
                  src="./images/dynamic/package2.webp"
                  alt="thumb" />
              </div>
            </div>
          </a>
        </div>
        <div class="package__banner-item banner-quarter">
          <a data-fancybox="package-banner" href="./images/dynamic/package3.webp">
            <div class="placeholder__img-wrapper">
              <div class="w-full placeholder__img">
                <img
                  width={1200}
                  height={900}
                  class="rounded-custom"
                  src="./images/dynamic/package3.webp"
                  alt="thumb" />
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <section class="package__content-wrapper absolute -top-17">
    <div class="container">
      <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12 lg:col-span-8 ">
          <div class="package__title-wrap common-box">
            <div class="page-title">
              <h1>Everest Base Camp Trek-15 Days</h1>
            </div>
            <div class="package__rating flex items-center gap-3 flex-wrap lg:gap-4.5">
              <div class="flex items-center gap-2 package__rating-tripadvisor ">
                <span class="icon-dot-rating"></span>
                <span class="text-[13px] text-text_color leading-5">110 Reviews in Trip Advisor</span>
              </div>
              <div class="flex items-center gap-2 package__rating-tripadvisor">
                <span class="icon-star-ratings"></span>
                <span class="text-[13px] text-text_color leading-5">120 Reviews in Google Reviews</span>
              </div>

            </div>
            <div class="package__summary common-module">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cididunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="package__facts common-module ">
              <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="package__facts-item-icon ">
                      <span class="text-2xl icon-duration"></span>
                    </div>
                    <div class="package__facts-item-content">
                      <div class="block text-left text-xs font-bold text-text_color ">
                        Duration
                      </div>
                      <div class="block text-left text-sm font-bold text-text_color">
                        15 Days
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon ">
                        <span class=" text-2xl icon-trip-grade"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-xs font-bold text-text_color">
                          Trip Grade
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          Easy to Moderate
                          <div class="relative inline-flex flex-col items-center ml-2 popover-wrap group">
                            <span class="text-xl icon-info ">
                            </span>

                            <div class="absolute bottom-0 flex-col items-center hidden w-full mb-6 popover-bg sm:w-64 md:w-72">
                              <span class="popover-wrap-content custom-shadow relative z-10 mb-0 rounded-[5px] bg-white p-3 text-[13px] leading-4 text-gray-800">
                                <p>
                                  The moderate grade includes a one-week to fifteen-day itinerary. It can reach up to
                                  5000 meter altitude range, but the trails will be moderate (neither easy nor tough).
                                  High altitude may affect walking speed and distance. You need to have acclimatization
                                  over 3000 meters.
                                </p>
                              </span>
                              <div class="w-3 h-3 -mt-2 rotate-45 bg-white"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-1.25 flex-[0_0_25px]">
                        <span class="text-2xl  icon-trip-grade"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-xs font-bold text-text_color">
                          Maximum Altitude
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          5643 m.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl icon-group-size"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-xs font-bold text-text_color">
                          Group Size
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          Up to 10 Travelers
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl  icon-start"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-xs font-bold text-text_color">
                          Starts
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          Kathmandu, Nepal
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl icon-start"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-sm font-bold text-text_color">
                          Ends
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          Kathmandu, Nepal
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl icon-travel-style"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-xs font-bold text-text_color">
                          Activities
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          Trekking and Hiking
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl  icon-best-time"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-xs font-bold text-text_color">
                          Best Time
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          Mar-May, Sep-Nov
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl  icon-best-time"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="block text-left text-xs font-bold text-text_color">
                          Country
                        </div>
                        <div class="block text-left text-sm font-bold text-text_color">
                          Nepal
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="package__overview common-module" id="package-overview">
              <div class="package__overview-content">
                <article>
                  <h4>Highlights</h4>
                  <ul>
                    <li>Cras tempor purus id velit consequat, id mattis dui pellentesque.</li>
                    <li>Quisque ac velit at sem scelerisque porta vel quis quam.</li>
                    <li>Praesent sed mauris ac justo euismod facilisis.</li>
                    <li>Vestibulum quis purus vel ligula elementum rutrum.</li>
                  </ul>
                  <p>
                    Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route offers unparalleled views of breathtaking landscapes, including towering snow-capped peaks, lush valleys, and rugged terrain. As you journey through the Khumbu region of Nepal.snow-capped peaks, lush valleys, and rugged terrain. As you journey through the Khumbu region of Nepal.[...]
                  </p>
                </article>
              </div>
              <a href="" class="inline-flex items-center mt-10 gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">Read More
              </a>
            </div>
            <div class="package__gallery mb-3.75 common-module " id="package-gallery">
              <h2 class="package__section-title">Photo Gallery</h2>
              <div class="grid grid-cols-12  gap-3.75">
                <div class="col-span-6 sm:col-span-3">
                  <div class="package__gallery-photo">
                    <a href="./images/dynamic/album.webp"
                      data-fancybox="package-gallery">
                      <div class="placeholder__img-wrapper">
                        <div class="w-full placeholder__img">
                          <img
                            width={600}
                            height={450}
                            class="rounded-custom"
                            src="./images/dynamic/album.webp"
                            alt="thumb" />
                        </div>
                      </div>
                      <span class="zoom-icon">
                        <span class="text-2xl text-white icon-search"></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <div class="package__gallery-photo">
                    <a href="./images/dynamic/album.webp"
                      data-fancybox="package-gallery">
                      <div class="placeholder__img-wrapper">
                        <div class="w-full placeholder__img">
                          <img
                            width={600}
                            height={450}
                            class="rounded-[5px]"
                            src="./images/dynamic/album.webp"
                            alt="thumb" />
                        </div>
                      </div>
                      <span class="zoom-icon">
                        <span class="text-2xl text-white icon-magnify-glass"></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <div class="package__gallery-photo">
                    <a href="./images/dynamic/album.webp"
                      data-fancybox="package-gallery">
                      <div class="placeholder__img-wrapper">
                        <div class="w-full placeholder__img">
                          <img
                            width={600}
                            height={450}
                            class="rounded-[5px]"
                            src="./images/dynamic/album.webp"
                            alt="thumb" />
                        </div>
                      </div>
                      <span class="zoom-icon">
                        <span class="text-2xl text-white icon-magnify-glass"></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <div class="package__gallery-photo">
                    <a href="./images/dynamic/album.webp"
                      data-fancybox="package-gallery">
                      <div class="placeholder__img-wrapper">
                        <div class="w-full placeholder__img">
                          <img
                            width={600}
                            height={450}
                            class="rounded-custom"
                            src="./images/dynamic/album.webp"
                            alt="thumb" />
                        </div>
                      </div>
                      <span class="zoom-icon">
                        <span class="text-2xl text-white icon-magnify-glass"></span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="package__gallery-video common-module scroll-mt-20 relative" id="package-video">
                <a href="https://www.youtube.com/watch?v=a3ICNMQW7Ok"
                  data-fancybox="package-video">
                  <div class="">
                    <div class="placeholder__img-wrapper">
                      <div class="w-full placeholder__img">
                        <img
                          src="/images/dynamic/album.webp"
                          width="1200"
                          height="675"
                          alt="banner" />
                      </div>
                    </div>
                    <span class="absolute left-1/2 top-1/2 z-10 flex h-[50px] w-12.5 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white md:h-[75px] md:w-[75px]"><span class="icon icon-play-button text-xl px-4"></span>
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="package__full-itinerary common-module " id="package-itinerary">
              <div class="package__full-itinerary-wrapper relative">
                <h2 class="package__section-title">Everest Base Camp Trek Itinerary</h2>
                <div class="package__full-itinerary-note">
                  <h3 class="package__full-itinerary-note-title">Note to Solo Travellers</h3>
                  <div class="package__full-itinerary-note-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                  </div>
                </div>
                <div class="package__full-itinerary-item mb-6.25 last:mb-0">
                  <div class="package__full-itinerary-item-day">
                    <span class="icon-place">
                      Day 1
                    </span>
                  </div>

                  <div class="package__full-itinerary-item-title">
                    <h3> Arrival in Kathmandu, transfer to the hotel.</h3>
                  </div>

                  <div class="package__full-itinerary-item-content-description px-6 mt-6">
                    <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                  </div>

                  <div class="flex justify-between gap-5 items-center p-6">
                    <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3 items-start ">

                      <div class="package__full-itinerary-item-facts-wrapper ">
                        <div class="itinerary-item-facts-unit">
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-max-altitude"></span>
                            <span class="text-sm text-text_color">Max Altitude: 1300m</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-meal"></span>
                            <span class="text-sm text-text_color">Meals: B/L/D</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-calendar-lines"></span>
                            <span class="text-sm text-text_color">Duration: 1 day</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-distance"></span>
                            <span class="text-sm text-text_color">Distance: 2 km</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-accommodation"></span>
                            <span class="text-sm text-text_color">Accommodation: Hotel</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-travel-style"></span>
                            <span class="text-sm text-text_color">Trekking: 5 hours</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="package__full-itinerary-item-gallery flex-[0_0_200px]">
                      <img
                        src="/images/dynamic/package-thumb.webp"
                        width="600"
                        height="630"
                        alt="banner" />
                    </div>
                  </div>
                </div>
                <div class="package__full-itinerary-item mb-6.25 last:mb-0">
                  <div class="package__full-itinerary-item-day">
                    <span class="icon-place">
                      Day 2
                    </span>
                  </div>

                  <div class="package__full-itinerary-item-title">
                    <h3> Flight From Kathmandu to Lukla & Trek to Phakding</h3>
                  </div>

                  <div class="package__full-itinerary-item-content-description px-6 mt-6">
                    <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                  </div>

                  <div class="flex justify-between gap-5 items-center p-6">
                    <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3 items-start ">

                      <div class="package__full-itinerary-item-facts-wrapper ">
                        <div class="itinerary-item-facts-unit">
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-max-altitude"></span>
                            <span class="text-sm text-text_color">Max Altitude: 1300m</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-meal"></span>
                            <span class="text-sm text-text_color">Meals: B/L/D</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-calendar-lines"></span>
                            <span class="text-sm text-text_color">Duration: 1 day</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-distance"></span>
                            <span class="text-sm text-text_color">Distance: 2 km</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-accommodation"></span>
                            <span class="text-sm text-text_color">Accommodation: Hotel</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-travel-style"></span>
                            <span class="text-sm text-text_color">Trekking: 5 hours</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="package__full-itinerary-item-gallery flex-[0_0_200px]">
                      <img
                        src="/images/dynamic/package-thumb.webp"
                        width="600"
                        height="630"
                        alt="banner" />
                    </div>
                  </div>
                </div>
                <div class="package__full-itinerary-item mb-6.25 last:mb-0">
                  <div class="package__full-itinerary-item-day">
                    <span class="icon-place">
                      Day 3
                    </span>
                  </div>

                  <div class="package__full-itinerary-item-title">
                    <h3> Phakding to Namche Bazar</h3>
                  </div>

                  <div class="package__full-itinerary-item-content-description px-6 mt-6">
                    <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                  </div>

                  <div class="flex justify-between gap-5 items-center p-6">
                    <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3 items-start ">

                      <div class="package__full-itinerary-item-facts-wrapper ">
                        <div class="itinerary-item-facts-unit">
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-max-altitude"></span>
                            <span class="text-sm text-text_color">Max Altitude: 1300m</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-meal"></span>
                            <span class="text-sm text-text_color">Meals: B/L/D</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-calendar-lines"></span>
                            <span class="text-sm text-text_color">Duration: 1 day</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-distance"></span>
                            <span class="text-sm text-text_color">Distance: 2 km</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-accommodation"></span>
                            <span class="text-sm text-text_color">Accommodation: Hotel</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-travel-style"></span>
                            <span class="text-sm text-text_color">Trekking: 5 hours</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="package__full-itinerary-item-gallery flex-[0_0_200px]">
                      <img
                        src="/images/dynamic/package-thumb.webp"
                        width="600"
                        height="630"
                        alt="banner" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="package__cta common-module mt-15">
                <div class="package__cta-title">
                  Still Confused?
                </div>
                <div class="package__cta-content">
                  No worries. Our team is ready to guide you every step of the way.
                </div>
                <div class="package__cta-links sm:pb-0">
                  <button type="button" class="package__cta-btn"> Download Itinerary <span class="icon-view"></span>
                  </button>
                  <a href="" class="package__cta-btn">Customize trip <span class="text-sm icon-view"></span></a>
                </div>
              </div>
            </div>
            <div class="package__route common-module " id="package-route">
              <h2 class="package__section-title">Route Map</h2>
              <a href="./images/dynamic/route-map.webp"
                data-fancybox="package-route">
                <img
                  width="900"
                  height="1200"
                  class="rounded-[10px]"
                  src="./images/dynamic/route-map.webp"
                  alt="thumb" />
              </a>
            </div>
            <div class="package__altitude common-module " id="package-route">
              <h2 class="package__section-title">Altitude Chart</h2>
              <a href="./images/dynamic/altitude-chart.webp"
                data-fancybox="package-route">
                <img
                  width="1200"
                  height="650"
                  class="rounded-[10px]"
                  src="./images/dynamic/altitude-chart.webp"
                  alt="thumb" />
              </a>
            </div>
            <div class="package__cost-details common-module " id="package-cost-details">
              <h2 class="package__section-title">Cost Details</h2>
              <div class="package__cost-details-includes">
                <h3 class="includes-title ">
                  Includes
                </h3>
                <div class="includes-content ">
                  <ul>
                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                  </ul>
                </div>
              </div>
              <div class="package__cost-details-excludes ">
                <h3 class="excludes-title">
                  Excludes
                </h3>
                <div class="excludes-content">
                  <ul>
                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="package__availability common-module " id="package-availability">
              <h2 class="package__section-title">Dates & Availability</h2>
              <div class="package__availability-content">Select Departure Date
              </div>
              <div class="package__availability-filter">
                <div class="availability-filter__item">
                  Feb 2024
                </div>
                <div class="availability-filter__item active">
                  Mar 2024
                </div>
                <div class="availability-filter__item">
                  Apr 2024
                </div>
                <div class="availability-filter__item">
                  May 2024
                </div>
              </div>
              <div class="package__availability-wrapper">
                <div class="package__availability-item">
                  <div class="package__availability-item-date">
                    <span class="font-bold">14 Feb, 2025</span>
                    <span>Start on Sunday</span>
                  </div>
                  <div class="package__availability-item-end">
                    <span class="font-bold">28 Feb, 2025</span>
                    <span>Ends on Sunday</span>
                  </div>
                  <div class="package__availability-item-date">
                    <span class="font-bold">20</span>
                    <span>Group Size</span>
                  </div>
                  <div class="package__availability-item-date">
                    <span class="font-bold">Guaranteed</span>
                    <span>2 spaces left</span>
                  </div>
                  <div class="package__availability-item-date">
                    <span class="font-bold">US$ 1680</span>
                    <span>US$ 1800</span>
                  </div>
                  <div class="package__book-cta">
                    <a href="" class="package__book-cta">Book Now</a>
                  </div>
                  <!-- <div class=" border-t border-[#6cafda]"> -->
                  <div class="package__availability-item-date">
                    <span class="font-bold">14 Feb, 2025</span>
                    <span>Start on Sunday</span>
                  </div>
                  <div class="package__availability-item-end">
                    <span class="font-bold">28 Feb, 2025</span>
                    <span>Ends on Sunday</span>
                  </div>
                  <div class="package__availability-item-date">
                    <span class="font-bold">20</span>
                    <span>Group Size</span>
                  </div>
                  <div class="package__availability-item-date">
                    <span class="font-bold">Guaranteed</span>
                    <span>2 spaces left</span>
                  </div>
                  <div class="package__availability-item-date">
                    <span class="font-bold">US$ 1680</span>
                    <span>US$ 1800</span>
                  </div>
                  <div class="package__book-cta">
                    <a href="" class="package__book-cta">Book Now</a>
                  </div>
                </div>
                <!-- </div> -->
              </div>
              <div class="package__availability-note">
                <div class="package__availability-note-title">
                  Note to Solo Travelers:
                </div>
                <div class="package__availability-note-content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="package__addons common-module " id="package-addons">
              <h2 class="package__section-title">Add-on</h2>
              <div class="text-text_color">Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route offers unparalled views of breathtaking landscapes.</div>
              <div class="package__addons-content">
                <div class="package__addons-wrapper">
                  <div class=" accordion-wrapper">
                    <div class="accordion with-plus-minus" id="addon-accordion">
                      <div class="accordion__item package__addons-item" data-id="q1">
                        <div class="package__addons-item-title-wrap accordion__item-title">
                          <span class="package__addons-item-title">1. HeliFlight from EBC to Kathmandu </span>
                          <span class="package__addons-item-price">US$1300 per person </span>
                        </div>
                        <div class="accordion__item-content">
                          <div class="package__addons-item-content">
                            Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route.
                          </div>
                        </div>
                      </div>

                      <div class="accordion__item package__addons-item" data-id="q2">
                        <div class="package__addons-item-title-wrap accordion__item-title">
                          <span class="package__addons-item-title">1. HeliFlight from EBC to Kathmandu </span>
                          <span class="package__addons-item-price">US$1300 per person </span>
                        </div>
                        <div class="accordion__item-content">
                          <div class="package__addons-item-content">
                            Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route.
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="package__equipment common-module " id="package-equpipments">
              <h2 class="package__section-title">Equipment List</h2>
              <div class="package__equipment-content">
                Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route offers unparalleled views of breathtaking landscapes, including towering snow-capped peaks, lush valleys, and rugged terrain. As you journey through the Khumbu region of Nepal, you'll encounter charming Sherpa villages, ancient monasteries, and vibrant local culture.
              </div>
              <div class="package__equipment-wrapper">
                <div class="package__equipment-item"></div>
              </div>
            </div>
            <div class="package__additionalinfo common-module " id="package-essentials">
              <h2 class="package__section-title">Essential Information</h2>
              <div class="useful-info">
                <p>
                  Embark on the ultimate adventure with a trek to Mount
                  Everest, the world's highest peak. The Mount Everest
                  trekking route offers unparalleled views of breathtaking
                  landscapes, including towering snow-capped peaks, lush
                  valleys, and rugged terrain. As you journey through the
                  <Link href=""> Khumbu region of Nepal</Link>, you'll
                  encounter charming Sherpa villages, ancient monasteries, and
                  vibrant local culture. Experience the thrill of ascending to
                  Everest Base Camp, where you'll stand in awe of the iconic
                  summit towering above. Whether you're an experienced
                  mountaineer or a novice adventurer, trekking to Mount
                  Everest promises an unforgettable journey filled with
                  exhilarating challenges and unforgettable memories.
                </p>
                <ul>
                  <li>
                    Cras tempor purus id{' '}
                    <Link href=""> velit consequat,</Link> id mattis dui
                    pellentesque.
                  </li>
                  <li>
                    Quisque ac velit at sem scelerisque porta vel quis quam.
                  </li>
                  <li>Praesent sed mauris ac justo euismod facilisis. </li>
                  <li>Vestibulum quis purus vel ligula elementum rutrum. </li>
                </ul>
              </div>
            </div>
            <div class="package__faqs common-module" id="package-faq">
              <h2 class="package__section-title">FAQs</h2>
              <div class=" accordion-wrapper">
                <div class="accordion with-arrow" id="faqs-accordion">
                  <div class="accordion__item " data-id="q1">
                    <div class=" accordion__item-title">
                      1. HeliFlight from EBC to Kathmandu
                    </div>
                    <div class="accordion__item-content">
                      Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route.
                    </div>
                  </div>
                  <div class="accordion__item" data-id="q2">
                    <div class=" accordion__item-title">
                      1. HeliFlight from EBC to Kathmandu

                    </div>
                    <div class="accordion__item-content">
                      Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route.

                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-span-12 lg:col-span-4 gap-8">

          <div class="package__price-sidebar lg:mb-0 mb-8 lg:sticky lg:top-10 common-box pb-0">
            <div class="gap-5 w-[95%] flex items-center justify-end  rounded-t-[10px] py-2.5 px-6.25">
              <button class="share-btn rounded-[17px] bg-[#f6faff] text-text_color text-[15px] text-center py-2 px-4 font-semibold">
                <span class="icon-send text-[18px] text-[#6cafda]"></span>
                View Map
              </button>
              <button class="share-btn rounded-[17px] bg-primary text-white text-[15px] text-center py-2 px-4 font-semibold">
                <span class="icon-share text-[18px]"></span>
                Share
              </button>
            </div>

            <div class="package-price-main-wrapper">
              <div class="package-price-wrappper">

                <div class="package-price-title">Price For</div>
                <div class="package-price">
                  <div class="package-price-net">US$1500</div>
                  <div class="package-price-gross">US$1600</div>
                </div>
              </div>

              <div class="package-group-price">
                <div class="package__discount-list package__discount-list-group">
                  <button class="collapsible active package__discount-list-item" type="button" aria-expanded="true" data-default-open="true">
                    <span class="text-[15px] font-bold text-text_color px-6">
                      Group Discount Price
                    </span>
                    <span class="mr-1 text-2xl font-bold text-text_color icon">+</span>
                  </button>
                  <div class="collapsible-content">
                    <div class="package__discount-list">
                      <ul class="package__discount-list-group">
                        <li class="package__discount-list-item  ">
                          <span class="text-sm font-bold text-text_color">No. of traveler</span>
                          <span class="text-sm font-bold text-text_color">Price per person</span>
                        </li>
                        <li class="package__discount-list-item  ">
                          <span class="text-sm text-text_color">1-1</span>
                          <span class="text-sm text-text_color">US$1600</span>
                        </li>
                        <li class="package__discount-list-item   ">
                          <span class="text-sm text-text_color">2 - 2</span>
                          <span class="text-sm text-text_color">US$1600</span>
                        </li>
                        <li class="package__discount-list-item  ">
                          <span class="text-sm text-text_color">3-5</span>
                          <span class="text-sm text-text_color">US$1600</span>
                        </li>
                        <li class="package__discount-list-item  ">
                          <span class="text-sm text-text_color">10+</span>
                          <span class="text-sm text-text_color">US$1600</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" package-book-options">
                <button type="button" class="bg-[#6cafda] font-extrabold mt-[10px] block text-white uppercase rounded-custom py-[15px] w-full font-mulish text-center ">
                  Book This Trip
                </button>
                <a href="" class="bg-[#ebf0f7] font-bold mt-[10px] text-text_color block uppercase rounded-[10px] py-[15px] w-full text-center font-mulish bg-secondary-effect">
                  Check Avalilability
                </a>
                <button type="button" data-fancybox data-src="#dialog-content" class="bg-primary font-bold mt-[10px] block text-white uppercase rounded-custom py-[15px] w-full text-center bg-primary-effect font-mulish">
                  Make an INQUIRY
                </button>

                <div class="package-price-note">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun</p>
                </div>

                <div
                  class="hidden package-sidebar-contact"
                  id="dialog-content">
                  <form class="normal-form">
                    <div class="package-sidebar-contact-title-wrap ">
                      <h4 class="main-title ">
                        Ask a Question?
                      </h4>
                    </div>

                    <div class="relative w-full mb-3">
                      <input
                        type="text"
                        name="fullname"
                        id="fullname"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder="Full Name"
                        required />
                    </div>

                    <div class="relative w-full mb-3">
                      <input
                        type="email"
                        name="mail"
                        id="mail"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder="Email Address"
                        required />
                    </div>
                    <div class="relative w-full mb-3">
                      <input
                        type="text"
                        name="phone"
                        id="phone"
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder="Phone Number "
                        required />
                    </div>
                    <div class="relative w-full mb-3">
                      <textarea
                        name="extra_info"
                        id="extrainfo"
                        rows={4}
                        class="text-heading_color peer block w-full appearance-none rounded-[5px] bg-transparent text-base focus:outline-none focus:ring-0"
                        placeholder="Questions / Comments"
                        required></textarea>
                    </div>
                    <button class="mb-2 block w-full rounded-[5px] bg-secondary-effect border border-primary bg-primary py-3 font-bold  text-sm text-white transition-all duration-500 bg-secondary-effect">
                      Send Message
                    </button>
                  </form>
                </div>
              </div>



            </div>
          </div>
        </div>

      </div>
      <section class=" video-review common-box scroll-wrap mt-0">
        <div class="container">
          <h2 class="package__section-title ">
            Travel Moments
          </h2>
          <div class="grid grid-cols-12 gap-5">
            <div class="col-span-4">
              <div class="video-review__item">
                <div class="relative video-review__item-image">
                  <div class="placeholder__img-wrapper">
                    <div class="w-full placeholder__img">
                      <img
                        src="/images/dynamic/vide-review-thumb.webp"
                        width="600"
                        height="400"
                        alt="banner" />
                    </div>
                  </div>
                  <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 video-review__item-link left-1/2 top-1/2">
                    <a
                      data-fancybox
                      href="https://www.youtube.com/watch?v=UsN0nuJakLc" class="w- circular-animate ">

                      <span class="absolute left-1/2 top-1/2 z-10 flex h-[50px] w-12.5 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white md:h-[75px] md:w-[75px]"><span class="icon icon-play-button text-xl px-4"></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="video-review__item-content">
                  <div class="font-playfair font-bold md:text-[25px] text-text_color text-[22px] mt-2">
                    Trekking in Nepal
                  </div>
                  <div class="text-sm text-text_color">
                    Jhone - USA
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-4">
              <div class="video-review__item">
                <div class="relative video-review__item-image">
                  <div class="placeholder__img-wrapper">
                    <div class="w-full placeholder__img">
                      <img
                        src="/images/dynamic/video-review-thumb.webp"
                        width="600"
                        height="400"
                        alt="banner" />
                    </div>
                  </div>
                  <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 video-review__item-link left-1/2 top-1/2">
                    <a
                      data-fancybox
                      href="https://www.youtube.com/watch?v=UsN0nuJakLc" class="circular-animate">

                      <span class="absolute left-1/2 top-1/2 z-10 flex h-[50px] w-[50px] -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white md:h-[75px] md:w-[75px]"><span class="icon icon-play-button text-xl px-4"></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="video-review__item-content">
                  <div class="font-playfair font-bold md:text-[25px] text-text_color text-[22px] mt-2">
                    Trekking in Nepal
                  </div>
                  <div class="text-sm text-text_color">
                    Jhone - USA
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-4">
              <div class="video-review__item">
                <div class="relative video-review__item-image">
                  <div class="placeholder__img-wrapper">
                    <div class="w-full placeholder__img">
                      <img
                        src="/images/dynamic/video-review-thumb.webp"
                        width="600"
                        height="400"
                        alt="banner" />
                    </div>
                  </div>
                  <div class="">
                    <a
                      data-fancybox
                      href="https://www.youtube.com/watch?v=UsN0nuJakLc" class="circular-animate ">

                      <span class="absolute left-1/2 top-1/2 z-10 flex h-[50px] w-[50px] -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white md:h-[75px] md:w-[75px]"><span class="icon icon-play-button text-xl px-4"></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="video-review__item-content">
                  <div class="font-playfair font-bold md:text-[25px] text-text_color text-[22px] mt-2">
                    Trekking in Nepal
                  </div>
                  <div class="text-sm text-text_color">
                    Jhone - USA
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-0 pb-0 inner__review review-list common-box hav-gradient-bg scroll-wrap " id="package-reviews">
        <div class="container">
          <div class="flex items-center justify-between mb-7.5">
            <h2 class="package__section-title">
              Customer Review
            </h2>
            <div class="flex items-center justify-between gap-14.75">
              <div class="flex items-start sm:items-center gap-2">

                <img
                  src="/images/svg/circular-tripadvisor.svg"
                  width="31"
                  height="31"
                  alt="banner" />
                <div>

                  <div class="flex items-center gap-1 green-dot-rating">
                    <span class="text-sm ">4.9</span>
                    <div class="rating-wrap rating-5">
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                    </div>
                  </div>
                  <div class="text-xs text-black">Based on 22 reviews</div>
                </div>

              </div>
              <div class="flex items-start sm:items-center gap-2">

                <img
                  src="/images/svg/circular-google.svg"
                  width="31"
                  height="31"
                  alt="banner" />
                <div>

                  <div class="flex items-center gap-1 star-rating">
                    <span class="text-sm ">4.9</span>
                    <div class="rating-wrap rating-5">
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                    </div>
                  </div>
                  <div class="text-xs text-black">Based on 22 reviews</div>
                </div>

              </div>
              <div class="flex items-start sm:items-center gap-2">

                <img
                  src="/images/svg/trustpilot.svg"
                  width="31"
                  height="31"
                  alt="banner" />
                <div>

                  <div class="flex items-center gap-1 green-dot-rating">
                    <span class="text-sm ">4.9</span>
                    <div class="rating-wrap rating-5">
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                      <span class="star"></span>
                    </div>
                  </div>
                  <div class="text-xs text-black">Based on 22 reviews</div>
                </div>

              </div>
            </div>

          </div>
          <div class="relative">

            <div class="grid grid-cols-12 gap-5">

              <div class="col-span-6">
                <div class="testimonial__list-item m-0!">
                  <div class="testimonial__list-item-meta mb-2 flex items-center justify-between">
                    <div class="testimonial__list-item-rating green-dot-rating">
                      <div class="rating-wrap rating-5">
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial__list-item-title">"The trek was life-changing</div>
                  <div class="review-list__item-content text-text_color text-sm">
                    <div class="testimonial__list-item-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis fugit. Quas, eum mollitia. Similique harum veniam totam iste?</p>
                    </div>
                  </div>
                  <div class="testimonial__list-item-reviewer ">
                    <div class="reviewer-image">
                      <div class="flex h-12.5 w-12.5 items-center justify-center rounded-full bg-secondary font-playfair text-xl text-white">A</div>
                    </div>
                    <div class="reviewer-content">
                      <div class="-mt-3 text-[15px] font-bold leading-5 text-text_color md:text-lg">Ramiro Barraza - USA</div>
                      <span class="-mt-1 block text-[13px] text-text_color">Annapurna Circuit, 2014</span>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-span-6">
                <div class="testimonial__list-item m-0!">
                  <div class="testimonial__list-item-meta mb-2 flex items-center justify-between">
                    <div class="testimonial__list-item-rating green-dot-rating">
                      <div class="rating-wrap rating-5">
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial__list-item-title">"The trek was life-changing</div>
                  <div class="review-list__item-content text-text_color text-sm">
                    <div class="testimonial__list-item-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis fugit. Quas, eum mollitia. Similique harum veniam totam iste?</p>
                    </div>
                  </div>
                  <div class="testimonial__list-item-reviewer ">
                    <div class="reviewer-image">
                      <div class="flex h-12.5 w-12.5 items-center justify-center rounded-full bg-secondary font-playfair text-xl text-white">A</div>
                    </div>
                    <div class="reviewer-content">
                      <div class="-mt-3 text-[15px] font-bold leading-5 text-text_color md:text-lg">Ramiro Barraza - USA</div>
                      <span class="-mt-1 block text-[13px] text-text_color">Annapurna Circuit, 2014</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>
      </section>

    </div>
  </section>

</section>


<script>
  //add class in body
  document.body.classList.add('no-header-sticky');
  //package nav
  document.addEventListener('DOMContentLoaded', () => {
    const threshold = 200;
    const nav = document.querySelector('.package__nav') || document.querySelector('.package-sticky-nav');
    if (!nav) return; // stop if nav does not exist

    let lastActiveId = null;

    function handleScroll() {
      const offset = window.scrollY;

      // --- Sticky nav ---
      if (offset > threshold) {
        nav.classList.add('sticky');
      } else {
        nav.classList.remove('sticky');
      }

      // --- Active link detection ---
      const links = nav.querySelectorAll('.package-sticky-nav-item-link, .nav-item-link');
      links.forEach(link => {
        const targetId = link.getAttribute('data-target') || link.getAttribute('href')?.replace('#', '');
        const targetElement = targetId ? document.getElementById(targetId) : null;

        if (targetElement) {
          const sectionOffset = targetElement.offsetTop - threshold;
          const sectionHeight = targetElement.offsetHeight;

          if (offset >= sectionOffset && offset < sectionOffset + sectionHeight) {
            if (lastActiveId !== targetId) {
              lastActiveId = targetId;
              links.forEach(l => l.classList.remove('active'));
              link.classList.add('active');
              scrollToActiveLink(); // only scroll horizontally
            }
          }
        }
      });
    }

    // --- Scroll nav horizontally to active link ---
    function scrollToActiveLink() {
      const activeLink = nav.querySelector('.package-sticky-nav-item-link.active, .nav-item-link.active');
      if (activeLink && nav) {
        const navRect = nav.getBoundingClientRect();
        const linkRect = activeLink.getBoundingClientRect();

        // Horizontal scroll to center the active link
        const scrollLeft = linkRect.left - navRect.left - (navRect.width / 2) + (linkRect.width / 2);
        nav.scrollBy({
          left: scrollLeft,
          behavior: 'smooth'
        });
      }
    }

    // Attach scroll event
    window.addEventListener('scroll', handleScroll);

    // Run once on page load
    handleScroll();
  });
</script>
<script>
  //banner expand
  document.addEventListener("DOMContentLoaded", function() {
    const bannerHalfElement = document.querySelector(".banner-half");
    const quarterElements = document.querySelectorAll(".banner-quarter");

    function shrinkHalf() {
      if (bannerHalfElement) bannerHalfElement.classList.remove("lg");
    }

    function expandHalf() {
      if (bannerHalfElement) bannerHalfElement.classList.add("lg");
    }

    // Set initial state
    if (bannerHalfElement) {
      bannerHalfElement.classList.add("lg");
    }

    // Add hover listeners
    quarterElements.forEach((el) => {
      el.addEventListener("mouseenter", shrinkHalf);
      el.addEventListener("mouseleave", expandHalf);
    });

    // Cleanup on page unload
    window.addEventListener("unload", function() {
      quarterElements.forEach((el) => {
        el.removeEventListener("mouseenter", shrinkHalf);
        el.removeEventListener("mouseleave", expandHalf);
      });
    });
  });
</script>
<script>
  //share
  const shareToggle = document.getElementById('sharetoggle');
  const dropdownMenu = document.getElementById('dropdownMenu');
  const shareDropdown = document.getElementById('shareDropdown');

  shareToggle.addEventListener('click', (e) => {
    e.stopPropagation();
    dropdownMenu.classList.toggle('show');
  });

  document.addEventListener('click', (event) => {
    if (!shareDropdown.contains(event.target)) {
      dropdownMenu.classList.remove('show');
    }
  });
</script>

<script>
  //relocate price box
  document.addEventListener("DOMContentLoaded", function() {
    const facts = document.querySelector(".package__facts");
    const sidebar = document.querySelector(".package__price-sidebar");

    if (!facts || !sidebar) return;

    function moveSidebar() {
      if (window.innerWidth < 1024) {
        // Move sidebar after facts
        if (sidebar.parentNode !== facts.parentNode || sidebar.nextElementSibling !== facts.nextElementSibling) {
          facts.insertAdjacentElement("afterend", sidebar);
        }
      } else {
        // Optionally, move sidebar back to original position if needed
        // You should save its original parent and sibling
      }
    }

    // Run on load
    moveSidebar();

    // Run on window resize
    window.addEventListener("resize", moveSidebar);
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const popoverWraps = document.querySelectorAll(".popover-wrap");
    const isTouchDevice = "ontouchstart" in window || navigator.maxTouchPoints > 0;

    if (isTouchDevice) {
      // Mobile: open/close on click
      popoverWraps.forEach((wrap) => {
        const trigger = wrap.querySelector(".i-icon");
        const popover = wrap.querySelector(".popover-bg");
        if (!trigger || !popover) return;

        const togglePopover = (e) => {
          e.stopPropagation();
          document.querySelectorAll(".popover-bg").forEach((el) => {
            if (el !== popover) el.classList.add("hidden");
          });
          popover.classList.toggle("hidden");
        };

        const closePopover = (e) => {
          if (!wrap.contains(e.target)) {
            popover.classList.add("hidden");
          }
        };

        trigger.addEventListener("click", togglePopover);
        document.addEventListener("click", closePopover);
      });
    } else {
      // Desktop: show on hover
      popoverWraps.forEach((wrap) => {
        const popover = wrap.querySelector(".popover-bg");
        if (!popover) return;

        wrap.addEventListener("mouseenter", () => {
          popover.classList.remove("hidden");
          popover.classList.add("flex");
        });
        wrap.addEventListener("mouseleave", () => {
          popover.classList.remove("flex");
          popover.classList.add("hidden");
        });
      });
    }
  });
</script>

<?php include('./inc/footer.php'); ?>
