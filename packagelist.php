<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>

<main id="main" class="bg-secondary">

  <section class="package-page__nav custom-shadow fixed top-0 z-[1001] w-full overflow-x-auto bg-primary  hidden">
    <div class="container mx-auto">
      <ul class="flex gap-2 w-max">
        <li>
          <a class="flex items-center gap-1 package-page__nav-item" href="#package-overview">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-overview"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title">Overview</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-gallery">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-gallery"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title"> Trip Gallery</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-itinerary">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-itinerary"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title"> Itinerary</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-route">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-route"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title"> Route Map</span>
          </a>
        </li>

        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-cost-details">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-cost-details"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title">Cost Details</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-availability">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-available"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title">Availability</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-addons">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-addon"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title">Add Ons</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-essentials">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-additional"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title"> Essentials Information</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-faq">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-faq"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title"> FAQs</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-1 package-page__nav-item " href="#package-reviews">
            <span class="package-page__nav-item-icon">
              <span class="relative text-xl text-white top-1 icon-nav-review"></span>
            </span>
            <span class="text-sm text-white package-page__nav-item-title"> Reviews</span>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="common-box package-page" role="main">
    <div class="package__banner ">
      <div class="container-fluid">
        <div class="package__banner-wrapper">
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
                    class="rounded-[5px]"
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
                    class="rounded-[5px]"
                    src="./images/dynamic/package3.webp"
                    alt="thumb" />
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php include('./inc/breadcrumbs.php') ?>
    <div class="package-page__main-content">
      <div class="container">
        <div class="grid grid-cols-12">
          <div class="col-span-12 lg:col-span-8">
            <div class="package__title mb-[15px]">
              <h1 class="font-playfair text-[28px] font-black leading-8 text-black sm:text-[30px] lg:text-[40px] lg:leading-[40px]">
                Everest Base Camp Trek 15 Days
              </h1>
            </div>
            <div class="package__rating flex items-center gap-3 flex-wrap lg:gap-[18px]">
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
            <div class="package__facts common-module border border-[#ffe3d2] rounded-[10px] px-[35px] py-[30px]">
              <div class="grid grid-cols-12 gap-5">
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-duration"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Duration
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          15 Days
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-trip-grade"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Trip Grade
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          Easy to Moderate
                          <div class="relative inline-flex flex-col items-center ml-2 popover-wrap group">
                            <span class="text-xl icon-info text-text_color">
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
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-max-altitude"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Maximum Altitude
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          5643 m.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-group-size"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Group Size
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          Up to 10 Travelers
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-start"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Starts
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          Kathmandu, Nepal
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-end"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Ends
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          Kathmandu, Nepal
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-travel-style"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Activities
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          Trekking and Hiking
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-best-time"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Best Time
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          Mar-May, Sep-Nov
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-6 md:col-span-4">
                  <div class="package__facts-item">
                    <div class="flex gap-1 item-center">
                      <div class="package__facts-item-icon mt-[5px] flex-[0_0_25px]">
                        <span class="text-2xl text-text_color icon-country"></span>
                      </div>
                      <div class="package__facts-item-content">
                        <div class="package__facts-item-title text-[13px] text-text_color opacity-80">
                          Country
                        </div>
                        <div class="-mt-2 font-bold package__facts-item-content text-text_color">
                          Nepal
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="package__overview common-module scroll-mt-[80px]" id="package-overview">
              <article>
                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                <h3>
                  About This Trek
                </h3>
                <p>Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route offers unparalleled views of breathtaking landscapes, including towering snow-capped peaks, lush valleys, and rugged terrain. As you journey through the Khumbu region of Nepal, you'll encounter charming Sherpa villages, ancient monasteries, and vibrant local culture. Experience the thrill of ascending to Everest Base Camp, where you'll stand in awe of the iconic summit towering above. Whether you're an experienced mountaineer or a novice adventurer, trekking to Mount Everest promises an unforgettable journey filled with exhilarating challenges and unforgettable memories.</p>
                <h4>Highlights</h4>
                <ul>
                  <li>Cras tempor purus id velit consequat, id mattis dui pellentesque.</li>
                  <li>Quisque ac velit at sem scelerisque porta vel quis quam.</li>
                  <li>Praesent sed mauris ac justo euismod facilisis.</li>
                  <li>Vestibulum quis purus vel ligula elementum rutrum.</li>
                </ul>
              </article>
            </div>
            <div class="package__gallery mb-[15px] scroll-mt-[80px]" id="package-gallery">
              <h2 class="package__section-title">Trip Gallery</h2>
              <div class="grid grid-cols-12  gap-[15px]">
                <div class="col-span-6 sm:col-span-3">
                  <div class="package__gallery-item">
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
                  <div class="package__gallery-item">
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
                  <div class="package__gallery-item">
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
                  <div class="package__gallery-item">
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
              </div>
            </div>
            <div class="package__video common-module scroll-mt-[80px]" id="package-video">
              <a href="https://www.youtube.com/watch?v=a3ICNMQW7Ok"
                data-fancybox="package-video">
                <div class="relative">
                  <div class="placeholder__img-wrapper">
                    <div class="w-full placeholder__img">
                      <img
                        src="/images/dynamic/package-video-thumb.webp"
                        width="1200"
                        height="675"
                        alt="banner" />
                    </div>
                  </div>
                  <span class="circular-animate absolute left-[50%] top-[50%] z-10 flex -translate-x-[50%] -translate-y-[50%] items-center justify-center rounded-full">
                    <span class="text-3xl icon-play"></span>
                  </span>
                </div>
              </a>
            </div>
            <div class="package__itinerary common-module scroll-mt-[80px]" id="package-itinerary">
              <h2 class="package__section-title">Everest Base Camp Trek Itinerary</h2>
              <div class="package__itinerary-note">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
              </div>

              <div class="flex items-center flex-wrap gap-5 sm:gap-[30px] package__itinerary-location mb-[30px]">
                <div class="flex items-center gap-3 package__itinerary-location-start">
                  <div class="flex items-center justify-center w-8 h-8 flex-[0_0_32px] rounded-full bg-secondary">
                    <div class="text-white icon-location-fill"></div>
                  </div>
                  <span class="font-bold text-[22px] flex items-center">Starts: <span class="pl-1 font-normal"> Kathmandu </span></span>
                </div>
                <div class="flex items-center gap-3 package__itinerary-location-end">
                  <div class="flex items-center justify-center w-8 h-8 flex-[0_0_32px] rounded-full bg-secondary">
                    <div class="text-white icon-flag"></div>
                  </div>
                  <span class="font-bold text-[22px] flex items-center">Ends: <span class="pl-1 font-normal"> Kathmandu </span></span>
                </div>
              </div>
              <div class="package__itinerary-wrap">
                <div class="package__itinerary-item mb-[25px] last:mb-0">
                  <div class="package__itinerary-item-day">
                    <span class="px-4 py-[2px] ml-5 text-sm font-extrabold text-white uppercase bg-secondary rounded-t-[10px]">
                      Day 1
                    </span>
                  </div>
                  <div class="package__itinerary-item-title mb-5 bg-[#e9f7ff] rounded-[10px] px-5 py-2 font-extrabold text-xl text-text_color">
                    <h3> Arrival in Kathmandu, transfer to the hotel.</h3>
                  </div>
                  <div class="package__itinerary-item-content">
                    <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                    <div class="itinerary-meta flex items-stretch gap-[15px]">
                      <div class="itinerary-meta-image flex-[0_0_200px]">
                        <img
                          src="/images/dynamic/package-thumb.webp"
                          width="600"
                          height="630"
                          alt="banner" />
                      </div>
                      <div class="itinerary-meta-facts bg-[#fff9f6] rounded-[10px] px-[30px] py-4 w-full  ">
                        <div class="columns-1 sm:columns-2">
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
                            <span class="text-2xl text-text_color icon-accomodation"></span>
                            <span class="text-sm text-text_color">Accommodation: Hotel</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-bus"></span>
                            <span class="text-sm text-text_color">Mode of transportation: Bus</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="package__itinerary-item mb-[25px] last:mb-0">
                  <div class="package__itinerary-item-day">
                    <span class="px-4 py-[2px] ml-5 text-sm font-extrabold text-white uppercase bg-secondary rounded-t-[10px]">
                      Day 2
                    </span>
                  </div>
                  <div class="package__itinerary-item-title mb-5 bg-[#e9f7ff] rounded-[10px] px-5 py-2 font-extrabold text-xl text-text_color">
                    <h3>
                      Fly from Kathmandu to Lukla (2,800m) – 25 to 30 minutes, trek to Phakding (2,640m) -2 to 3 hours
                    </h3>
                  </div>
                  <div class="package__itinerary-item-content">
                    <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                    <div class="itinerary-meta flex items-stretch gap-[15px]">
                      <div class="itinerary-meta-image flex-[0_0_200px]">
                        <img
                          src="/images/dynamic/package-thumb.webp"
                          width="600"
                          height="630"
                          alt="banner" />
                      </div>
                      <div class="itinerary-meta-facts bg-[#fff9f6] rounded-[10px] px-[30px] py-4 w-full  ">
                        <div class="columns-1 sm:columns-2">
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
                            <span class="text-2xl text-text_color icon-accomodation"></span>
                            <span class="text-sm text-text_color">Accommodation: Hotel</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-bus"></span>
                            <span class="text-sm text-text_color">Mode of transportation: Bus</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="package__itinerary-item mb-[25px] last:mb-0">
                  <div class="package__itinerary-item-day">
                    <span class="px-4 py-[2px] ml-5 text-sm font-extrabold text-white uppercase bg-secondary rounded-t-[10px]">
                      Day 3
                    </span>
                  </div>
                  <div class="package__itinerary-item-title mb-5 bg-[#e9f7ff] rounded-[10px] px-5 py-2 font-extrabold text-xl text-text_color">
                    <h3> Arrival in Kathmandu, transfer to the hotel.</h3>
                  </div>
                  <div class="package__itinerary-item-content">
                    <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                    <div class="itinerary-meta flex items-stretch gap-[15px]">
                      <div class="itinerary-meta-image flex-[0_0_200px]">
                        <img
                          src="/images/dynamic/package-thumb.webp"
                          width="600"
                          height="630"
                          alt="banner" />
                      </div>
                      <div class="itinerary-meta-facts bg-[#fff9f6] rounded-[10px] px-[30px] py-4 w-full  ">
                        <div class="columns-1 sm:columns-2">
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
                            <span class="text-2xl text-text_color icon-accomodation"></span>
                            <span class="text-sm text-text_color">Accommodation: Hotel</span>
                          </div>
                          <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                            <span class="text-2xl text-text_color icon-bus"></span>
                            <span class="text-sm text-text_color">Mode of transportation: Bus</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="package__route common-module scroll-mt-[80px]" id="package-route">
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
            <div class="package__altitude common-module scroll-mt-[80px]" id="package-altitude">
              <h2 class="package__section-title">Altitude Chart</h2>
              <a href="./images/dynamic/altitude.webp"
                data-fancybox="package-altitude">
                <img
                  width="1200"
                  height="650"
                  class="rounded-[10px]"
                  src="./images/dynamic/altitude.webp"
                  alt="thumb" />
              </a>
            </div>
            <div class="package__customize common-module scroll-mt-[80px]" id="package-customize">
              <div class="bg-[#fff5d5] flex items-center justify-between gap-5 p-5 sm:px-[35px] sm:py-[25px] rounded-[5px]">
                <div class="package__customize-content">
                  <div class="text-lg font-bold uppercase text-text_color">STILL CONFUSE?</div>
                  <div class="leading-5 text-text_color">No worries — we’re here to help. Whether you have questions or just need a bit more clarity, feel free to reach out. Our team is ready to guide you every step of the way.</div>
                </div>
                <div class="package__customize-action flex-[0_0_170px]">
                  <a href="" class="inline-flex items-center gap-3 arrow-move-effect bg-[#ffcf30] rounded-[5px] px-4 py-[6px]">Customize trip <span class="text-sm icon-arrow-right"></span></a>
                </div>
              </div>
            </div>
            <div class="package__cost-details common-module scroll-mt-[80px]" id="package-cost-details">
              <h2 class="package__section-title">Cost Details</h2>
              <div class="cost-includes mb-[25px] last:mb-0">
                <h3 class="cost-includes-title inline-block text-lg text-white font-extrabold bg-primary rounded-t-[10px] py-[5px] px-4 ml-[30px] ">
                  Includes
                </h3>
                <div class="cost-content-wrap border border-[#ffe3d2] rounded-[10px] px-[35px] py-[30px]">
                  <h4>
                    Permit Fee
                  </h4>
                  <ul>
                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                  </ul>
                  <h4>
                    Permit Fee
                  </h4>
                  <ul>
                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                  </ul>
                </div>
              </div>
              <div class="cost-excludes  mb-[25px] last:mb-0">
                <h3 class="cost-excludes-title inline-block text-lg text-white font-extrabold bg-secondary rounded-t-[10px] py-[5px] px-4 ml-[30px] ">
                  Excludes
                </h3>
                <div class="cost-content-wrap border border-[#ffe3d2] rounded-[10px] px-[35px] py-[30px]">
                  <h4>
                    Personal Expenses
                  </h4>
                  <ul>
                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                  </ul>
                  <h4>
                    Personal Expenses
                  </h4>
                  <ul>
                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="package__availability common-module scroll-mt-[80px]" id="package-availability">
              <h2 class="package__section-title">Dates and Availability</h2>
              <div class=" package__availability-filter">
                <div class="mb-1 text-lg font-bold package__availability-filter-title text-text_color">Select Departure Dates</div>
                <div class="flex flex-wrap items-center gap-2">
                  <div class="package__availability-filter-item">
                    Apr 2025
                  </div>
                  <div class="package__availability-filter-item active">
                    May 2025
                  </div>
                  <div class="package__availability-filter-item">
                    Jun 2025
                  </div>
                  <div class="package__availability-filter-item">
                    Jul 2025
                  </div>
                </div>
              </div>

              <div class="package__availability-wrap">
                <div class="package__availability__title bg-secondary px-4 xl:px-[30px] py-4 rounded-[10px] mt-[15px]   ">
                  <div class="grid grid-cols-7 gap-2 xl:gap-5">
                    <div class="col-span-2">
                      <div class="text-lg font-bold text-white package__availability__title-date">
                        Date
                      </div>
                    </div>
                    <div class="col-span-2">
                      <div class="text-lg font-bold text-white package__availability__title-status">
                        Status
                      </div>
                    </div>
                    <div class="col-span-2">
                      <div class="text-lg font-bold text-white package__availability__title-cost">
                        Cost
                      </div>
                    </div>
                    <div class="col-span-1">

                    </div>
                  </div>

                </div>
                <div class="package__availability-item bg-white even:bg-[#fff9f6] px-4 xl:px-[30px] py-4 rounded-[10px] mt-[7px]">
                  <div class="grid grid-cols-8 gap-2 lg:grid-cols-7 xl:gap-5">
                    <div class="col-span-2">
                      <div class="package__availability-item-date">
                        <div class="block text-sm font-bold text-secondary lg:hidden">
                          Date
                        </div>
                        <div class="flex flex-col items-start">
                          <span class="text-base font-bold text-text_color">Start: 14 Feb, 2025</span>
                          <span class="text-base font-bold text-text_color">Finish: 30 Feb, 2025</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-2">
                      <div class="package__availability-item-status">
                        <div class="block text-sm font-bold text-secondary lg:hidden">
                          Status
                        </div>
                        <div class="flex flex-col items-start">
                          <span class="text-base font-bold text-text_color">Guaranteed
                          </span>
                          <span class="text-base font-bold text-text_color">2 Spaces Left</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-2">
                      <div class="package__availability-item-cost">
                        <div class="block text-sm font-bold text-secondary lg:hidden">
                          Cost
                        </div>
                        <div class="flex flex-col items-start">
                          <span class="text-base font-bold text-text_color">USD 1,600
                          </span>
                          <span class="text-base font-bold line-through opacity-50 text-text_color">USD 1,600</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                      <div class="mt-4 package__availability-item-link lg:mt-0">
                        <a href="" class="font-medium text-white bg-secondary text-sm rounded-[5px] px-[15px] py-[9px] bg-primary-effect">Join Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="package__availability-item bg-white even:bg-[#fff9f6] px-4 xl:px-[30px] py-4 rounded-[10px] mt-[7px]">
                  <div class="grid grid-cols-8 gap-2 lg:grid-cols-7 xl:gap-5">
                    <div class="col-span-2">
                      <div class="package__availability-item-date">
                        <div class="block text-sm font-bold text-secondary lg:hidden">
                          Date
                        </div>
                        <div class="flex flex-col items-start">
                          <span class="text-base font-bold text-text_color">Start: 14 Feb, 2025</span>
                          <span class="text-base font-bold text-text_color">Finish: 30 Feb, 2025</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-2">
                      <div class="package__availability-item-status">
                        <div class="block text-sm font-bold text-secondary lg:hidden">
                          Status
                        </div>
                        <div class="flex flex-col items-start">
                          <span class="text-base font-bold text-text_color">Guaranteed
                          </span>
                          <span class="text-base font-bold text-text_color">2 Spaces Left</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-2">
                      <div class="package__availability-item-cost">
                        <div class="block text-sm font-bold text-secondary lg:hidden">
                          Cost
                        </div>
                        <div class="flex flex-col items-start">
                          <span class="text-base font-bold text-text_color">USD 1,600
                          </span>
                          <span class="text-base font-bold line-through opacity-50 text-text_color">USD 1,600</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                      <div class="mt-4 package__availability-item-link lg:mt-0">
                        <a href="" class="font-medium text-white bg-secondary text-sm rounded-[5px] px-[15px] py-[9px] bg-primary-effect">Join Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="package__availability-note mt-[35px]">

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur quasi laudantium, ducimus reiciendis commodi incidunt ex ea voluptate a cupiditate cumque ullam eaque veritatis, perferendis quaerat placeat corrupti labore?

              </div>
            </div>
            <div class="package__addons common-module scroll-mt-[80px]" id="package-addons">
              <h2 class="package__section-title">Add-ons and Trip Extension</h2>
              <div class="bg-[#90d4ff] rounded-[5px] p-[30px]">
                <div class="text-text_color">
                  Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route offers unparalleled views of breathtaking landscapes.
                </div>
                <div class=" accordion-wrapper">
                  <div class="accordion">
                    <div class="accordion__item" data-id="q1">
                      <div class="flex justify-between gap-1 accordion__item-title">
                        <span class="text-sm font-bold sm:text-lg text-text_color">1. Lorem ipsum dolor sit amet consectetur, adipisicing elit. amet consectetur, adipisicing elit. </span>
                        <span class="text-sm font-bold text-secondary flex-[0_0_160px]">US$ 1300 per person </span>
                      </div>
                      <div class="accordion__item-content">
                        <div class="text-text_color text-[15px]">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
                        </div>
                      </div>
                    </div>
                    <div class="accordion__item" data-id="q2">
                      <div class="flex justify-between gap-1 accordion__item-title">
                        <span class="text-sm font-bold sm:text-lg text-text_color">1. Lorem ipsum dolor sit amet consectetur, adipisicing elit. </span>
                        <span class="text-sm font-bold text-secondary flex-[0_0_160px]">US$ 1300 per person </span>
                      </div>
                      <div class="accordion__item-content">
                        <div class="text-text_color text-[15px]">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="" class="inline-flex items-center gap-2 mt-3 arrow-move-effect">
                  <span class="text-base font-bold sm:text-lg text-text_color">Still Confuse? Consult an Expert</span>
                  <span class="text-base sm:text-xl icon-arrow-right"></span>
                </a>
              </div>

            </div>
            <div class="package__essentials common-module scroll-mt-[80px]" id="package-essentials">
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
            <div class="package__faq common-module scroll-mt-[80px]" id="package-faq">
              <h2 class="package__section-title">FAQs</h2>
              <div class="accordion" id="faq-accordion">
                <div class="accordion__item" data-id="q1">
                  <div class="flex items-start gap-2 accordion__item-title">
                    <div class="accordion__count font-bold text-white text-base md:text-xl bg-secondary px-[3px] py-[1px] rounded-[5px] ">
                      Q1
                    </div>
                    <span class="text-base font-bold md:text-xl text-text_color"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. amet consectetur, adipisicing elit. </span>
                  </div>
                  <div class="accordion__item-content">
                    <div class="text-text_color text-[15px]">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
                    </div>
                  </div>
                </div>
                <div class="accordion__item" data-id="q2">
                  <div class="flex items-start gap-2 accordion__item-title">
                    <div class="accordion__count font-bold text-white text-base md:text-xl bg-secondary px-[3px] py-[1px] rounded-[5px] ">
                      Q2
                    </div>
                    <span class="text-base font-bold md:text-xl text-text_color"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. amet consectetur, adipisicing elit. </span>
                  </div>
                  <div class="accordion__item-content">
                    <div class="text-text_color text-[15px]">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <div class="package__price-sidebar lg:mb-0 mb-8 lg:sticky lg:top-[100px]">
              <div class="package__meta bg-secondary mx-auto w-[95%] flex items-center justify-center gap-5 rounded-t-[10px] py-[10px] px-[25px]">
                <button class="flex items-center gap-2 package__meta-gallery">
                  <div class="leading-5 package__meta-icon">
                    <span class="text-2xl leading-5 text-white icon-gallery"></span>
                  </div>
                  <div class="package__meta-content font-semibold text-[13px] text-white">Gallery </div>
                </button>
                <button class="flex items-center gap-2 package__meta-video">
                  <div class="leading-5 package__meta-icon">
                    <span class="text-2xl leading-5 text-white icon-video"></span>
                  </div>
                  <div class="package__meta-content font-semibold text-[13px] text-white">video </div>
                </button>
                <button class="flex items-center gap-2 package__meta-customize">
                  <div class="leading-5 package__meta-icon">
                    <span class="text-2xl leading-5 text-white icon-customize-trip"></span>
                  </div>
                  <div class="package__meta-content font-semibold text-[13px] text-white">Customize </div>
                </button>
                <button class="flex items-center gap-2 package__meta-download">
                  <div class="leading-5 package__meta-icon">
                    <span class="text-2xl leading-5 text-white icon-download"></span>
                  </div>
                  <div class="package__meta-content font-semibold text-[13px] text-white">Download </div>
                </button>

                <div class="share-wrap " id="shareDropdown">
                  <button id="sharetoggle" class="flex items-center gap-2 package__meta-share share-trigger-btn">
                    <div class="leading-5 package__meta-icon">
                      <span class="text-2xl text-white icon-share"> </span>
                    </div>
                    <span class="font-semibold package__meta-content text-[13px] text-white"> Share</span>
                  </button>
                  <div class=" share-list custom-rounded" id="dropdownMenu">
                    <button role="button" type="button" aria-label="Share on Facebook" onclick="handleShareClick('facebook');" class="share-list__item share-facebook flex items-center gap-1 px-3 py-2 text-[17px] font-semibold">
                      <span class="icon-facebook"></span>
                      <span class="ml-2 text-sm">Facebook</span>
                    </button>

                    <button role="button" type="button" aria-label="Share on X Corp" onclick="handleShareClick('twitter');" class="share-list__item share-x flex items-center gap-1 px-3 py-2 text-[17px] font-semibold">
                      <span class="icon-x-logo"></span>
                      <span class="ml-2 text-sm">X Corp</span>
                    </button>

                    <button role="button" type="button" aria-label="Share on LinkedIn" onclick="handleShareClick('linkedin');" class="share-list__item share-linkedin flex items-center gap-1 px-3 py-2 text-[17px] font-semibold">
                      <span class="icon-linkedin"></span>
                      <span class="ml-2 text-sm">Linkedin</span>
                    </button>

                    <button role="button" type="button" aria-label="Share on Instagram" onclick="handleShareClick('instagram');" class="share-list__item share-instagram flex items-center gap-1 px-3 py-2 text-[17px] font-semibold">
                      <span class="icon-instagram"></span>
                      <span class="ml-2 text-sm">Instagram</span>
                    </button>

                    <button role="button" type="button" aria-label="Share on WhatsApp" onclick="handleShareClick('whatsapp');" class="share-list__item share-whatsapp flex items-center gap-1 px-3 py-2 text-[17px] font-semibold">
                      <span class="icon-whatsapp-outline"></span>
                      <span class="ml-2 text-sm">WhatsApp</span>
                    </button>

                    <button role="button" type="button" aria-label="Copy Link" onclick="handleShareClick('copy');" class="share-list__item share-copy flex items-center gap-1 px-3 py-2 text-[17px] font-semibold">
                      <span class="icon-link"></span>
                      <span class="ml-2 text-sm">Copy</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="package__price-breakdown border border-[#ffe3d2] rounded-[10px]   p-5 xl:p-[30px]">
                <div class="text-sm font-bold text-white">Price Per Person</div>
                <div class="flex items-center gap-2 mt-1">
                  <div class="font-extrabold text-[22px] text-white">US$1600</div>
                  <div class="text-lg font-normal text-white line-through opacity-80">US$1680</div>
                </div>
                <div class="package__price-breakdown-wrap mt-5  border border-[#ffe3d2] bg-white rounded-[10px]">
                  <div class="p-3 collapsible__wrap rounded-[10px] bg-white">
                    <button class="flex items-center justify-between w-full collapsible">
                      <span class="text-[15px] font-bold text-text_color">
                        Group Discount Price
                      </span>
                      <span class="mr-1 text-2xl font-bold text-text_color icon">+</span>
                    </button>
                    <div class="collapsible-content">
                      <div class="booking__discount-list">
                        <ul class="booking__discount-list-group">
                          <li class="flex justify-between pt-3 pb-1 mt-2 border-t  border-[#d3dbe4]  ">
                            <span class="text-sm font-bold text-text_color">No. of traveler</span>
                            <span class="text-sm font-bold text-text_color">Price per person</span>
                          </li>
                          <li class="flex justify-between pt-3 pb-1 mt-2 border-t  border-[#d3dbe4]  ">
                            <span class="text-sm text-text_color">1 Pax</span>
                            <span class="text-sm text-text_color">US$1600</span>
                          </li>
                          <li class="flex justify-between pt-3 pb-1 mt-2 border-t  border-[#d3dbe4]   ">
                            <span class="text-sm text-text_color">2 - 3 Pax</span>
                            <span class="text-sm text-text_color">US$1600</span>
                          </li>
                          <li class="flex justify-between pt-3 pb-1 mt-2 border-t  border-[#d3dbe4]  ">
                            <span class="text-sm text-text_color">4 - 12 Pax</span>
                            <span class="text-sm text-text_color">US$1600</span>
                          </li>
                          <li class="flex justify-between pt-3 pb-1 mt-2 border-t  border-[#d3dbe4]  ">
                            <span class="text-sm text-text_color">13 - 16 Pax</span>
                            <span class="text-sm text-text_color">US$1600</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=" package__action-links">
                  <button type="button" class="bg-[#648dbe] font-bold mt-[10px] block text-white uppercase rounded-[10px] py-[15px] w-full text-center bg-primary-effect">
                    Check avaiability
                  </button>
                  <a href="" class="bg-[#ffac79] font-bold mt-[10px] text-text_color block uppercase rounded-[10px] py-[15px] w-full text-center bg-secondary-effect">
                    Book a private trip
                  </a>
                  <button type="button" data-fancybox data-src="#dialog-content" class="bg-[#ffcf30] font-bold mt-[10px] block text-text_color uppercase rounded-[10px] py-[15px] w-full text-center bg-primary-effect">
                    SEND INQUIRY
                  </button>

                  <div
                    class="hidden w-[500px] max-w-[500px] rounded-[10px]"
                    id="dialog-content">
                    <form class="normal-form">
                      <div class="relative flex justify-between item-center ">
                        <h4 class="mb-4 text-xl font-bold text-primary">
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
              <div class="package__price-note  border border-[#ffe3d2] rounded-[10px] p-5 relative  left-1/2 -translate-x-1/2 -top-7 w-[85%] bg-white">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <?php include('./inc/footer.php'); ?>
</main>

<script>
  //add class in body
  document.body.classList.toggle('no-header-sticky');
  //package nav
  document.addEventListener('DOMContentLoaded', () => {
    const threshold = 200;
    const nav = document.querySelector('.package__nav') || document.querySelector('.package-page__nav');
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
      const links = document.querySelectorAll('.package-page__nav-item');
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

      // --- Nav show/hide based on #no-nav ---
      const commonBox = document.getElementById('no-nav');
      if (commonBox) {
        const rect = commonBox.getBoundingClientRect();
        if (rect.top <= 50 || window.scrollY <= 750) {
          nav.classList.remove('visible');
          nav.classList.add('hidden');
        } else {
          nav.classList.add('visible');
          nav.classList.remove('hidden');
        }
      }
    }

    // --- Scroll nav horizontally to active link ---
    function scrollToActiveLink() {
      const activeLink = document.querySelector('.package-page__nav-item.active');
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
