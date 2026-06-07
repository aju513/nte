<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<main id="main" class="bg-secondary">
    <!-- homepage -->
    <section class="relative homepage__banner">
        <div class="homepage__banner-media overflow-hidden">
            <div class="placeholder__img-wrapper w-full">
                <div class="w-full placeholder__img">
                    <a href="">
                        <img src="../images/dynamic/banner.webp" width="1920" height="700" loading="eager"
                            decoding="async" data-nimg="1" alt="banner" style="color: transparent" />
                    </a>
                </div>
            </div>
            <div class="homepage__banner-content ">
                <h2 class="homepage__banner-content-heading ">
                    ADVENTURE. EXPLORE. SUMMIT.
                </h2>
                <div class="homepage__banner-subcontent ">
                    Find what makes you happy anytime, anywhere
                </div>
            </div>
        </div>
        <div class="homepage__notice">
            <div class="homepage__notice-wrap " id="heroNoticeSlider" aria-live="polite">
                <div class="container">
                    <div class="homepage__notice-bar">
                        <a href="" class="notice-message js-notice-slide is-active">
                            Nepal bans solo trekkers throughout the country.
                        </a>
                        <a href="" class="notice-message js-notice-slide">
                            Spring trekking permits are now open for Everest regions.
                        </a>
                        <a href="" class="notice-message js-notice-slide">
                            Weather in high-altitude routes can change quickly.
                        </a>

                        <div class="notice-controls">
                            <div class="notice-nav">
                                <button type="button" class="notice-btn js-notice-prev" aria-label="Previous notice">
                                    <span class="icon-back rotate-180"></span>
                                </button>
                                <span class="notice-counter">
                                    <span class="js-notice-current">1</span>/3
                                </span>
                                <button type="button" class="notice-btn js-notice-next" aria-label="Next notice">
                                    <span class="icon-back "></span>
                                </button>
                            </div>
                            <button type="button" class="notice-btn homepage__notice-close js-notice-close"
                                aria-label="Close notice">
                                <span class="icon-close text-[8px]"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bestselling -->
    <section class="homepage__bestselling py-15 hav-title-btn ">
        <div class="container ">
            <div class="mb-6 flex items-start gap-4 flex-row md:items-center justify-between">
                <div class="mb-0 section-title-wrap">
                    <div class=" section-title-sm ">
                        Most Awaited Trip
                    </div>
                    <h2 class="section-title">
                        Nepal Top Selling Treks
                    </h2>
                </div>
                <div class="section-title-btn">
                    <a href="" class="btn-outline-primary hav-icon">View All Packages <span class="icon-view "></span></a>
                </div>
            </div>
            <!--Package Grid -->
            <div class="relative mt-7 scroll-wrap">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                        <div class="package-list__item">
                            <div class="package-list__item-badge">
                                <span>TOP RATED</span>
                            </div>
                            <div class="package-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img">
                                        <a href="#">
                                            <img src="../images/dynamic/package-thumb1.webp" width="600" height="400"
                                                alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="package-list__item-content">
                                <div class="package-list__item-meta">
                                    <div class="package-list__item-duration">
                                        <span class="icon-time-quarter-to"></span>
                                        <span class="package text-xs font-bold text-text_color">Duration: 15 Days</span>
                                    </div>
                                    <div class="package-list__item-reviews text-text_color text-xs">
                                        <span class="icon-star-rate text-[#dfd200]"></span>
                                        <span class="font-bold ">4.9</span>
                                        <span>(4 Reviews)</span>
                                    </div>
                                </div>
                                <div class="package-list__item-title">
                                    <h3 class="homepage__package-title">
                                        <a href="#">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color md:mt-2">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#">
                                            Explore
                                            <span class="icon-arrow-right"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                        <div class="package-list__item">
                            <div class="package-list__item-badge">
                                <span>TOP RATED</span>
                            </div>
                            <div class="package-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img">
                                        <a href="#">
                                            <img src="../images/dynamic/package-thumb2.webp" width="600" height="400"
                                                alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="package-list__item-content">
                                <div class="package-list__item-meta">
                                    <div class="package-list__item-duration">
                                        <span class="icon-time-quarter-to"></span>
                                        <span class="package text-xs font-bold text-text_color">Duration: 15 Days</span>
                                    </div>
                                    <div class="package-list__item-reviews text-text_color text-xs">
                                        <span class="icon-star-rate text-[#dfd200]"></span>
                                        <span class="font-bold ">4.9</span>
                                        <span>(4 Reviews)</span>
                                    </div>
                                </div>
                                <div class="package-list__item-title">
                                    <h3 class="homepage__package-title">
                                        <a href="#">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color md:mt-2">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#">
                                            Explore
                                            <span class="icon-arrow-right"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                        <div class="package-list__item">
                            <div class="package-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img">
                                        <a href="#">
                                            <img src="../images/dynamic/package-thumb3.webp" width="600" height="400"
                                                alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="package-list__item-content">
                                <div class="package-list__item-meta">
                                    <div class="package-list__item-duration">
                                        <span class="icon-time-quarter-to"></span>
                                        <span class="package text-xs font-bold text-text_color">Duration: 15 Days</span>
                                    </div>
                                    <div class="package-list__item-reviews text-text_color text-xs">
                                        <span class="icon-star-rate text-[#dfd200]"></span>
                                        <span class="font-bold ">4.9</span>
                                        <span>(4 Reviews)</span>
                                    </div>
                                </div>
                                <div class="package-list__item-title">
                                    <h3 class="homepage__package-title">
                                        <a href="#">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color md:mt-2">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#">
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
    </section>
    <!-- Top Places to Explore Whole Section -->
    <section class="container-fluid-custom ">
        <!-- Top places to Explore -->
        <div class="container hav-title-btn ">
            <!-- Title -->
            <div class="grid grid-cols-12 gap-3 lg:gap-5 mb-3 lg:mb-6 ">
                <div class="mb-0 section-title-wrap col-span-12 lg:col-span-6 lg:max-w-[410px] ">
                    <div class=" lg:col-span-6">
                        <div class="section-title-sm ">
                            Top Places to Explore
                        </div>
                        <h2 class="section-title ">
                            Book your next NTE Designer Tours
                        </h2>
                    </div>
                </div>
                <div class="mb-0 col-span-12 lg:col-span-6 lg:max-w-[600px]">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestias, porro laborum magni
                        recusandae ducimus fugit laboriosam nam nisi dolorum.</p>
                    <div class="section-title-btn lg:mt-4">
                        <a href="" class="btn-outline-primary hav-icon">View All Regions <span class="icon-view"></span></a>
                    </div>
                </div>
            </div>
            <div class="relative mb-4 lg:mt-9 scroll-wrap ">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-4">
                        <div class="package-list__item">
                            <div class="package-list__item-badge">
                                <span>TOP RATED</span>
                            </div>
                            <div class="package-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img">
                                        <a href="#">
                                            <img src="../images/dynamic/package-thumb1.webp" width="600" height="400"
                                                alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="package-list__item-content">
                                <div class="package-list__item-meta">
                                    <div class="package-list__item-duration">
                                        <span class="icon-time-quarter-to"></span>
                                        <span class="package text-xs font-bold text-text_color">Duration: 15 Days</span>
                                    </div>
                                    <div class="package-list__item-reviews text-text_color text-xs">
                                        <span class="icon-star-rate text-[#dfd200]"></span>
                                        <span class="font-bold ">4.9</span>
                                        <span>(4 Reviews)</span>
                                    </div>
                                </div>
                                <div class="package-list__item-title">
                                    <h3 class="homepage__package-title">
                                        <a href="#">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color md:mt-2">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#">
                                            Explore
                                            <span class="icon-arrow-right"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="package-list__item">
                            <div class="package-list__item-badge">
                                <span>TOP RATED</span>
                            </div>
                            <div class="package-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img">
                                        <a href="#">
                                            <img src="../images/dynamic/package-thumb2.webp" width="600" height="400"
                                                alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="package-list__item-content">
                                <div class="package-list__item-meta">
                                    <div class="package-list__item-duration">
                                        <span class="icon-time-quarter-to"></span>
                                        <span class="package text-xs font-bold text-text_color">Duration: 15 Days</span>
                                    </div>
                                    <div class="package-list__item-reviews text-text_color text-xs">
                                        <span class="icon-star-rate text-[#dfd200]"></span>
                                        <span class="font-bold ">4.9</span>
                                        <span>(4 Reviews)</span>
                                    </div>
                                </div>
                                <div class="package-list__item-title">
                                    <h3 class="homepage__package-title">
                                        <a href="#">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color md:mt-2">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#">
                                            Explore
                                            <span class="icon-arrow-right"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="package-list__item">
                            <div class="package-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img">
                                        <a href="#">
                                            <img src="../images/dynamic/package-thumb3.webp" width="600" height="400"
                                                alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="package-list__item-content">
                                <div class="package-list__item-meta">
                                    <div class="package-list__item-duration">
                                        <span class="icon-time-quarter-to"></span>
                                        <span class="package text-xs font-bold text-text_color">Duration: 15 Days</span>
                                    </div>
                                    <div class="package-list__item-reviews text-text_color text-xs">
                                        <span class="icon-star-rate text-[#dfd200]"></span>
                                        <span class="font-bold ">4.9</span>
                                        <span>(4 Reviews)</span>
                                    </div>
                                </div>
                                <div class="package-list__item-title">
                                    <h3 class="homepage__package-title">
                                        <a href="#">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color md:mt-2">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#">
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
        <!-- Join Our Upcoming Trips -->
        <div class="homepage__explore-section container common-box pb-0 ">
            <div class="homepage__join-banner ">
                <div class="homepage__explore-content">
                    <div class="flex flex-col items-star">
                        <h2 class="font-playfair text-xl font-bold text-white  lg:text-4xl">
                            Join Our Upcoming Trips
                        </h2>
                        <p class="text-white mt-2">
                            Explore breathtaking destinations and travel with like-minded adventures.
                        </p>
                    </div>
                    <div class="homepage__explore-content-actions">
                        <button class="btn-outline-secondary hav-icon">
                            View Our Upcoming Trips
                            <span class="icon-view"></span>
                        </button>

                        <button class="btn-outline-secondary hav-icon">
                            Customize Your Own Trip
                            <span class="icon-view"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Homepage-Content -->
        <div class="homepage__main-content homepage__main-content-grid common-box pb-0 ">
            <div class="container">
                <div class=" grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">
                    <div class="col-span-6 ">
                        <div class="section-title-wrap">
                            <div class="section-title-sm ">
                                About Nepal Travel Experience
                            </div>
                            <h2 class="section-title ">
                                Namaste!
                            </h2>
                        </div>
                        <div class="welcome-content">
                            <p>
                                Nepal Travel Experience (NTE) offers customized tours for groups wanting to create their
                                own
                                tour with an array of memorable experiences from the likes of-
                            </p>
                            <p>
                                Magnificient natural Nepali sights including soaring mountains and fast-flowing rivers,
                                Visits to locations rich in Nepali art, culture and history, and Immersion with Nepalese
                                in
                                theor own ommunity environments. To help create your own special NTE tour we will-
                            </p>
                            <p>
                                Adapt tour itineraries to match the objectives of your group. Provide guides who have
                                excellent local knowledge and an ability to inform and entertain your group.
                                Take you to locations suppported by our charity partners, and introduce you to people in
                                local communities, to get involved in activities in an authentic environment, ranging
                                from
                                cookking, art, craft, music, dancing, meditation, yoga and organic farming. [...]
                            </p>
                        </div>
                        <button class="btn-outline-primary hav-icon mt-5 lg:mt-8">
                            More About Us <span class="icon-view"></span>
                        </button>
                    </div>
                    <div class="homepage__why-choose col-span-6 scroll-mt-20 font-mulish ">
                        <div class="why-choose-accordion">
                            <h2 class="why-choose-accordion__heading ">Why choose us?</h2>

                            <div class="why-choose-accordion__list">
                                <div class="why-choose-accordion__item" data-id="q1">
                                    <button class="why-choose-accordion__trigger" type="button" aria-expanded="true"
                                        aria-controls="why-choose-q1">
                                        <div class="why-choose-accordion__label">
                                            <div class="why-choose-accordion__icon">
                                                <img alt="" loading="lazy" width="23" height="23" decoding="async" data-nimg="1" class="brightness-200" style="color:white" src="../images/svg/circle-dollar-sign.svg">
                                            </div>
                                            <span class="why-choose-accordion__title">Best Price Guarantee</span>
                                        </div>
                                        <span class="why-choose-accordion__toggle" aria-hidden="true"></span>
                                    </button>
                                    <div class="why-choose-accordion__content" id="why-choose-q1">
                                        <p>We keep pricing transparent and competitive, with quality service and value
                                            built
                                            into every trip.</p>
                                        <a href="#" class="why-choose-accordion__link arrow-move-effect ">Read More <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>

                                <div class="why-choose-accordion__item" data-id="q2">
                                    <button class="why-choose-accordion__trigger" type="button" aria-expanded="false"
                                        aria-controls="why-choose-q2">
                                        <div class="why-choose-accordion__label">
                                            <div class="why-choose-accordion__icon">
                                                <img alt="" loading="lazy" width="22" height="20" decoding="async" data-nimg="1" class="brightness-200" style="color:white" src="../images/svg/binoculars.svg">
                                            </div>
                                            <span class="why-choose-accordion__title">Local Expert Guides</span>
                                        </div>
                                        <span class="why-choose-accordion__toggle" aria-hidden="true"></span>
                                    </button>
                                    <div class="why-choose-accordion__content" id="why-choose-q2">
                                        <p>Our local guides share firsthand knowledge, cultural insight, and practical
                                            support throughout your journey.</p>
                                        <a href="#" class="why-choose-accordion__link arrow-move-effect">Read More <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>

                                <div class="why-choose-accordion__item" data-id="q3">
                                    <button class="why-choose-accordion__trigger" type="button" aria-expanded="false"
                                        aria-controls="why-choose-q3">
                                        <div class="why-choose-accordion__label">
                                            <div class="why-choose-accordion__icon">
                                                <img alt="" loading="lazy" width="18" height="24" decoding="async" data-nimg="1" class="brightness-200" style="color:white" src="../images/svg/shield-check.svg">
                                            </div>
                                            <span class="why-choose-accordion__title">Easy Trip Planning</span>
                                        </div>
                                        <span class="why-choose-accordion__toggle" aria-hidden="true"></span>
                                    </button>
                                    <div class="why-choose-accordion__content" id="why-choose-q3">
                                        <p>From choosing destinations to finalizing details, we make planning simple and
                                            flexible for your group.</p>
                                        <a href="#" class="why-choose-accordion__link arrow-move-effect">Read More <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>

                                <div class="why-choose-accordion__item" data-id="q4">
                                    <button class="why-choose-accordion__trigger" type="button" aria-expanded="false"
                                        aria-controls="why-choose-q4">
                                        <div class="why-choose-accordion__label">
                                            <div class="why-choose-accordion__icon">
                                                <img alt="" loading="lazy" width="20" height="22" decoding="async" data-nimg="1" class="brightness-200" style="color:white" src="../images/svg/route.svg">
                                            </div>
                                            <span class="why-choose-accordion__title">Safety &amp; Responsible</span>
                                        </div>
                                        <span class="why-choose-accordion__toggle" aria-hidden="true"></span>
                                    </button>
                                    <div class="why-choose-accordion__content" id="why-choose-q4">
                                        <p>We focus on safe travel practices and thoughtful experiences that respect
                                            local
                                            communities and nature.</p>
                                        <a href="#" class="why-choose-accordion__link arrow-move-effect">Read More <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!-- Most Popular -->
        <div class="homepage-popular container hav-title-btn common-box pb-0!">
            <div class="grid grid-cols-12 gap-3 lg:gap-5 mb-3 lg:mb-6">
                <div class="mb-0 section-title-wrap lg:max-w-[460px] col-span-12 lg:col-span-6">
                    <div class="lg:col-span-6">
                        <div class=" section-title-sm ">
                            Best Moment Captured
                        </div>
                        <h2 class="section-title">
                            Most Popular Activities and Experiences to Enjoy
                        </h2>
                    </div>
                </div>
                <div class="mb-0 mb-0 col-span-12 lg:col-span-6 max-w-[600px]">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestias, porro laborum
                        magni recusandae ducimus fugit laboriosam nam nisi dolorum.</p>
                    <div class="section-title-btn mt-4">
                        <a href="" class="btn-outline-primary hav-icon">View All Packages <span class="text-sm icon-view"></span></a>
                    </div>
                </div>
            </div>
            <!-- Wrapper -->
            <div class="relative">
                <!-- Swiper -->
                <div class="swiper categorySwiper px-12 sm:px-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-list__item">
                                <div class="category-list__item-image">
                                    <div class="placeholder__img-wrapper w-full">
                                        <div class="w-full placeholder__img">
                                            <a href="">
                                                <img src="/images/dynamic/trekking.webp" width="600" height="800"
                                                    loading="lazy" decoding="async" data-nimg="1" alt="banner"
                                                    style="color: transparent" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-list__item-meta">
                                    <div class="category-list__item-meta-content ">
                                        <span class="icon-milestone"> </span>12 Trips
                                    </div>
                                </div>
                            </div>
                            <div class="category-list__wrappper">
                                <div class="container-fluid">
                                    <div class="category-list__item-title">
                                        <a href="">Trekking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="category-list__item">
                                <div class="category-list__item-image">
                                    <div class="placeholder__img-wrapper w-full">
                                        <div class="w-full placeholder__img">
                                            <a href="">
                                                <img src="/images/dynamic/hiking.webp" width="600" height="800"
                                                    loading="lazy" decoding="async" data-nimg="1" alt="banner"
                                                    style="color: transparent" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-list__item-meta">
                                    <div class="category-list__item-meta-content ">
                                        <span class="icon-milestone"> </span>12 Trips
                                    </div>
                                </div>
                            </div>
                            <div class="category-list__wrappper">
                                <div class="container-fluid">

                                    <div class="category-list__item-title">
                                        <a href="">Hiking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-list__item">
                                <div class="category-list__item-image">
                                    <div class="placeholder__img-wrapper w-full">
                                        <div class="w-full placeholder__img">
                                            <a href="">
                                                <img src="/images/dynamic/tour.webp" width="600" height="800"
                                                    loading="lazy" decoding="async" data-nimg="1" alt="banner"
                                                    style="color: transparent" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-list__item-meta">
                                    <div class="category-list__item-meta-content ">
                                        <span class="icon-milestone"> </span>12 Trips
                                    </div>
                                </div>

                            </div>
                            <div class="category-list__wrappper">
                                <div class="container-fluid">
                                    <div class="category-list__item-title">
                                        <a href="">Tour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-list__item">
                                <div class="category-list__item-image">
                                    <div class="placeholder__img-wrapper w-full">
                                        <div class="w-full placeholder__img">
                                            <a href="">
                                                <img src="/images/dynamic/climbing.webp" width="600" height="800"
                                                    loading="lazy" decoding="async" data-nimg="1" alt="banner"
                                                    style="color: transparent" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-list__item-meta">
                                    <div class="category-list__item-meta-content ">
                                        <span class="icon-milestone"> </span>12 Trips
                                    </div>
                                </div>
                            </div>
                            <div class="category-list__wrappper">
                                <div class="container-fluid">
                                    <div class="category-list__item-title">
                                        <a href="">Climbing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-list__item">
                                <div class="category-list__item-image">
                                    <div class="placeholder__img-wrapper w-full">
                                        <div class="w-full placeholder__img">
                                            <a href="">
                                                <img src="/images/dynamic/trekking.webp" width="600" height="800"
                                                    loading="lazy" decoding="async" data-nimg="1" alt="banner"
                                                    style="color: transparent" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-list__item-meta">
                                    <div class="category-list__item-meta-content ">
                                        <span class="icon-milestone"> </span>12 Trips
                                    </div>
                                </div>
                            </div>
                            <div class="category-list__wrappper">
                                <div class="container-fluid">
                                    <div class="category-list__item-title">
                                        <a href="">Trekking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LEFT ARROW -->
                <button class="homepage__slider-prev category-prev prev-btn">
                    <span class="icon-arrow-left text-primary text-2xl"></span>
                </button>
                <!-- RIGHT ARROW -->
                <button class="homepage__slider-next category-next next-btn">
                    <span class="icon-arrow-right text-primary text-2xl "></span>
                </button>
            </div>
        </div>
    </section>
    <!-- Videos Section -->
    <section class="homepage__videos common-box pb-0  hav-title-btn relative">
        <div class="container">
            <!-- Title Section -->
            <div class="flex items-center justify-between mb-6">
                <div class="mb-0 section-title-wrap">
                    <div class="section-title-sm ">
                        Travel Styles
                    </div>
                    <h2 class="section-title ">
                        Video Reviews
                    </h2>
                </div>
                <div class="section-title-btn">
                    <a href="" class="btn-outline-primary hav-icon">View All Activities <span class="icon-view"></span></a>
                </div>
            </div>
            <!-- Videos Layout -->
            <div class="homepage-moments scroll-wrap">
                <div class="grid grid-cols-12 gap-3.75 lg:gap-5">
                    <div class="col-span-4">
                        <div class="moments-list__item">
                            <div class="relative moments-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="w-full placeholder__img">
                                        <img src="/images/dynamic/video-review.webp" width="1200" height="550" alt="banner" />
                                    </div>
                                </div>
                            </div>
                            <a data-fancybox href="https://www.youtube.com/watch?v=UsN0nuJakLc" class="video-play-btn circular-animate ">

                                <span class="icon-play-button text-xs!"></span>
                            </a>
                            <div class="moments-list__item-content">
                                <h4 class="moments-list__item-title">Things to Do in Nepal</h4>
                                <span class="text-[15px]">John - Australia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="moments-list__item">
                            <div class="relative moments-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="w-full placeholder__img">
                                        <img src="/images/dynamic/video-review.webp" width="1200" height="550" alt="banner" />
                                    </div>
                                </div>
                            </div>
                            <a data-fancybox href="https://www.youtube.com/watch?v=UsN0nuJakLc" class="video-play-btn circular-animate ">

                                <span class="icon-play-button text-xs!"></span>
                            </a>
                            <div class="moments-list__item-content">
                                <h4 class="moments-list__item-title">Things to Do in Nepal</h4>
                                <span class="text-[15px]">John - Australia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="moments-list__item">
                            <div class="relative moments-list__item-image">
                                <div class="placeholder__img-wrapper">
                                    <div class="w-full placeholder__img">
                                        <img src="/images/dynamic/video-review.webp" width="1200" height="550" alt="banner" />
                                    </div>
                                </div>
                            </div>
                            <a data-fancybox href="https://www.youtube.com/watch?v=UsN0nuJakLc" class="video-play-btn circular-animate ">

                                <span class="icon-play-button text-xs!"></span>
                            </a>
                            <div class="moments-list__item-content">
                                <h4 class="moments-list__item-title">Things to Do in Nepal</h4>
                                <span class="text-[15px]">John - Australia</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="reviews hav-title-btn pb-0 common-box">
        <div class="container">
            <div class="flex flex-col gap-1 lg:gap-4 lg:flex-row items-start lg:items-center lg:justify-between">
                <div class="mb-0 section-title-wrap">
                    <div class="relative section-title-sm ">
                        Testimonials
                    </div>
                    <h2 class="section-title">
                        Real Feedback From Our Travelers
                    </h2>
                </div>
                <!-- Reviews Section -->
                <div class="package__review-platforms max-[1023px]:mt-3">
                    <a href="" class="package__review-platform">
                        <img src="/images/svg/circular-tripadvisor.svg" width="31" height="31" alt="Tripadvisor" class="cursor-pointer" />
                        <div class="package__review-platform-copy">
                            <div class="package__review-platform-rating green-dot-rating">
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
                    </a>
                    <a href="" class="package__review-platform">
                        <img src="/images/svg/circular-google.svg" width="31" height="31" alt="Google" class="cursor-pointer" />
                        <div class="package__review-platform-copy">
                            <div class="package__review-platform-rating star-rating">
                                <span class="text-sm ">4.9</span>
                                <div class="rating-wrap rating-5">
                                    <span class="star "></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                            <div class="text-xs text-black">Based on 22 reviews</div>
                        </div>
                    </a>
                    <a href="" class="package__review-platform">
                        <img src="/images/svg/trustpilot.svg" width="31" height="31" alt="Trustpilot" />
                        <div class="package__review-platform-copy">

                            <div class="package__review-platform-rating">
                                <span class="text-sm ">4.9</span>
                                <div class="rating-wrap rating-5 ">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                            <div class="text-xs text-black">Based on 22 reviews</div>
                        </div>
                    </a>

                </div>
            </div>
            <!-- Testimonials -->
            <div class="relative">
                <div class="swiper testimonialSwiper p-12.5 sm:px-4 mt-5.75">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__list-item m-0!">
                                <div class="testimonial__list-item-meta mb-2 ">
                                    <img src="/images/svg/circular-facebook.svg"
                                        data-testimonial-review-icon
                                        class="w-7.5 h-7.5 cursor-pointer" alt="Trip Advisor" />
                                    <div class="testimonial__list-item-rating  flex items-center gap-2">
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
                                        <div class="text-base lg:text-lg font-bold leading-5 text-text_color">Ramiro Barraza -
                                            USA
                                        </div>
                                        <span class=" block text-xs leading-5 text-text_color">Annapurna Circuit, 2014</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__list-item m-0!">
                                <div class="testimonial__list-item-meta mb-2 ">
                                    <img src="/images/svg/circular-facebook.svg"
                                        data-testimonial-review-icon
                                        class="w-7.5 h-7.5 cursor-pointer" alt="Trip Advisor" />
                                    <div class="testimonial__list-item-rating  flex items-center gap-2">
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
                                <div class="review-list__item-content">
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
                                        <div class="text-base lg:text-lg font-bold leading-5 text-text_color">Ramiro Barraza -
                                            USA
                                        </div>
                                        <span class=" block text-xs leading-5 text-text_color">Annapurna Circuit, 2014</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__list-item m-0!">
                                <div class="testimonial__list-item-meta mb-2 ">
                                    <img src="/images/svg/circular-facebook.svg"
                                        data-testimonial-review-icon
                                        class="w-7.5 h-7.5 cursor-pointer" alt="Trip Advisor" />
                                    <div class="testimonial__list-item-rating  flex items-center gap-2">
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
                                        <div class="flex h-[50px] w-[50px] items-center justify-center rounded-full bg-secondary font-poppins text-xl text-white">R</div>
                                    </div>
                                    <div class="reviewer-content ">
                                        <div class="text-base lg:text-lg font-bold leading-5 text-text_color">Ramiro Barraza - USA
                                        </div>
                                        <span class=" block text-xs leading-5 text-text_color">Annapurna Circuit, 2014</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LEFT ARROW -->
                <button class="homepage__slider-prev testimonial-prev">
                    <span class="icon-arrow-left text-primary text-2xl"></span>
                </button>

                <!-- RIGHT ARROW -->
                <button class="homepage__slider-next testimonial-next">
                    <span class="icon-arrow-right text-primary text-2xl"></span>
                </button>
            </div>
            <div class="flex items-center section-title-btn lg:mt-5">
                <a href="" class="btn-outline-primary hav-icon">View All Reviews <span class="text-sm icon-view"></span></a>
            </div>
        </div>
    </section>
    <!-- Blogs -->
    <section class="homepage__blogs common-box  hav-title-btn ">
        <div class="container">
            <!-- title -->
            <div class="flex items-center justify-between mb-6">
                <div class="mb-0 section-title-wrap">
                    <div class="relative section-title-sm ">
                        Our Latest Post
                    </div>
                    <div class="section-title ">
                        Stories, trips and guides
                    </div>
                </div>
                <div class="flex items-center section-title-btn">
                    <a href="" class="btn-outline-primary hav-icon">View All Articles <span class="text-sm icon-view"></span></a>
                </div>
            </div>
            <!-- blogs -->
            <div class="scroll-wrap ">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-4">
                        <div class="blog-list__item ">
                            <div class="blog-list__item-image relative ">
                                <div class="placeholder__img-wrapper ">
                                    <div class="w-full placeholder__img">
                                        <a href="">
                                            <img src="/images/dynamic/blog-thumb.webp" width="600" height="400"
                                                alt="banner" />
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-list__item-meta homepage__blog-badge">
                                    <span class="icon-calendar text-white">

                                    </span>
                                    <span> 20 Jan</span>
                                </div>
                            </div>
                            <h3 class="blog-list__item-content-title">
                                <a href="">
                                    The Highest Mountain in the world
                                </a>
                            </h3>
                            <div class="blog-list__item-btn arrow-move-effect">
                                <span>Continue Reading</span>
                                <span class="icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="blog-list__item ">
                            <div class="blog-list__item-image relative ">
                                <div class="placeholder__img-wrapper ">
                                    <div class="w-full placeholder__img">
                                        <a href="">
                                            <img src="/images/dynamic/blog2.webp" width="600" height="400"
                                                alt="banner" />
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-list__item-meta homepage__blog-badge">
                                    <span class="icon-calendar text-white">
                                    </span>
                                    <span> 20 Jan</span>
                                </div>
                            </div>
                            <h3 class="blog-list__item-content-title">
                                <a href="">
                                    The Highest Mountain in the world
                                </a>
                            </h3>
                            <div class="blog-list__item-btn arrow-move-effect">
                                <span>Continue Reading</span>
                                <span class="icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="blog-list__item ">
                            <div class="blog-list__item-image relative ">
                                <div class="placeholder__img-wrapper ">
                                    <div class="w-full placeholder__img">
                                        <a href="">
                                            <img src="/images/dynamic/blog3.webp" width="600" height="400"
                                                alt="banner" />
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-list__item-meta homepage__blog-badge">
                                    <span class="icon-calendar text-white">

                                    </span>
                                    <span> 20 Jan</span>
                                </div>
                            </div>
                            <h3 class="blog-list__item-content-title">
                                <a href="">
                                    The Highest Mountain in the world
                                </a>
                            </h3>
                            <div class="blog-list__item-btn arrow-move-effect">
                                <span>Continue Reading</span>
                                <span class="icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Swipper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php include('./inc/footer.php') ?>
