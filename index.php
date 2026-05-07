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
                        <img src="./images/dynamic/banner.webp" width="1920" height="700" loading="eager"
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

        <div class="homepage__notice container">
            <div class="homepage__notice-wrap" id="heroNoticeSlider" aria-live="polite">
                <div class="homepage__notice-bar">
                    <div class="notice-message js-notice-slide is-active">
                        Nepal bans solo trekkers throughout the country.
                    </div>
                    <div class="notice-message js-notice-slide">
                        Spring trekking permits are now open for Everest, Annapurna, and Langtang regions.
                    </div>
                    <div class="notice-message js-notice-slide">
                        Weather in high-altitude routes can change quickly, so always travel prepared.
                    </div>

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
    </section>
    <!-- Bestselling -->
    <section class="homepage__bestselling common-box package-list hav-title-btn">
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
                    <a href="">View
                        All Packages <span class="icon-view "></span></a>
                </div>
            </div>
            <!--Package Grid -->
            <div class="relative mt-7">
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
                                        <a href="#" class="">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#" class="">
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
                                        <a href="#" class="">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#" class="">
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
                                        <a href="#" class="">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#" class="">
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

    <section class="homepage__featured homepage__feature-shell ">

        <!-- Top places to Explore -->
        <div class="container common-box hav-title-btn ">
            <!-- Title -->
            <div class="grid grid-cols-12 gap-5 mb-6 ">
                <div class="mb-0 section-title-wrap col-span-12 lg:col-span-5 ">
                    <div class=" lg:col-span-4">
                        <div class="section-title-sm ">
                            Top Places to Explore
                        </div>
                        <h2 class="section-title ">
                            Book your next NTE Designer Tours
                        </h2>
                    </div>
                </div>
                <div class="mb-0 col-span-12 lg:col-span-6">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestias, porro laborum magni
                        recusandae ducimus fugit laboriosam nam nisi dolorum.</p>
                    <div class="section-title-btn">
                        <a href="">View
                            All Regions <span class="icon-view"></span></a>
                    </div>
                </div>
            </div>

            <div class="relative mt-9">
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
                                        <a href="#" class="">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#" class="">
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
                                        <a href="#" class="">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#" class="">
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
                                        <a href="#" class="">
                                            Everest Base Camp Trekking
                                        </a>
                                    </h3>
                                </div>
                                <div class="text-sm text-text_color">
                                    Price From
                                </div>
                                <div class="package-list__item-bottom ">
                                    <div class="package-list__item-price">
                                        <span class="package-list__item-price-new">US$ 1680</span>
                                        <span class="package-list__item-price-old ">US$ 1800</span>
                                    </div>

                                    <div class="package-list__item-explore-btn arrow-move-effect">
                                        <a href="#" class="">
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
        <section class="homepage__explore-section container common-box pt-0 ">
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
        </section>

        <!-- Homepage-Content -->
        <section class="homepage__main-content homepage__main-content-grid common-box pt-0 ">
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
                        <div class="welcome-content mt-4">
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
                        <button class="btn-outline-primary hav-icon mt-12.5">
                            More About Us <span class="icon-view"></span>
                        </button>
                    </div>
                    <div class="homepage__why-choose col-span-6 scroll-mt-20 font-mulish ">
                        <div class="why-choose-accordion container">
                            <h2 class="why-choose-accordion__heading ">Why choose us?</h2>

                            <div class="why-choose-accordion__list">
                                <div class="why-choose-accordion__item is-open" data-id="q1">
                                    <button class="why-choose-accordion__trigger" type="button" aria-expanded="true"
                                        aria-controls="why-choose-q1">
                                        <span class="why-choose-accordion__label">
                                            <span class="why-choose-accordion__icon">
                                                <span class="icon-circle-dollar-sign"></span>
                                            </span>
                                            <span class="why-choose-accordion__title">Best Price Guarantee</span>
                                        </span>
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
                                        <span class="why-choose-accordion__label">
                                            <span class="why-choose-accordion__icon">
                                                <span class="icon-binoculars"></span>
                                            </span>
                                            <span class="why-choose-accordion__title">Local Expert Guides</span>
                                        </span>
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
                                        <span class="why-choose-accordion__label">
                                            <span class="why-choose-accordion__icon">
                                                <span class="icon-route"></span>
                                            </span>
                                            <span class="why-choose-accordion__title">Easy Trip Planning</span>
                                        </span>
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
                                        <span class="why-choose-accordion__label">
                                            <span class="why-choose-accordion__icon">
                                                <span class="icon-shield-check"></span>
                                            </span>
                                            <span class="why-choose-accordion__title">Safety &amp; Responsible</span>
                                        </span>
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
        </section>


        <!-- Most Popular -->
        <section class="container hav-title-btn common-box pt-0">
            <!-- <div class=" container"> -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="mb-0 section-title-wrap ">
                    <div class=" section-title-sm ">
                        Best Moment Captured
                    </div>
                    <h2 class="section-title">
                        Most Popular Activities <br> and Experiences to Enjoy
                    </h2>
                </div>
                <div class="mb-0">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestias, porro laborum
                        magni recusandae ducimus fugit laboriosam nam nisi dolorum.</p>
                    <div class="section-title-btn">
                        <a href="">View
                            All Packages <span class="text-sm icon-view"></span></a>
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
                                        <div class="">
                                            <span class="icon-milestone"> </span>12 Trips
                                        </div>
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
                                        <div class="">
                                            <span class="icon-milestone"> </span>12 Trips
                                        </div>
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
                                        <div class="">
                                            <span class="icon-milestone"> </span>12 Trips
                                        </div>
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
                                        <div class="">
                                            <span class="icon-milestone"> </span>12 Trips
                                        </div>
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
                                        <div class="">
                                            <span class="icon-milestone"> </span>12 Trips
                                        </div>
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

            <!-- </div> -->

        </section>

    </section>

    <!-- Videos Section -->
    <section class="homepage__videos common-box pb-0 container hav-title-btn  relative">

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
                <a href="">View
                    All Activities <span class="icon-view"></span></a>
            </div>
        </div>

        <!-- Videos Layout -->
        <div class="scroll-wrap">
            <div class="grid grid-cols-12 gap-5  ">
                <div class="col-span-12 lg:col-span-9">
                    <div class="homepage-moments-list__item">
                        <div class="moments-list__item-image relative">
                            <div class="placeholder__img-wrapper  w-full">
                                <div class="placeholder__img w-full ">
                                    <img src="/images/dynamic/video-thumb.webp" width="1200" height="550" loading="lazy"
                                        decoding="async" data-nimg="1" style="color: transparent;"
                                        alt="Everest Base Camp" />
                                </div>
                            </div>
                            <div class="fancybox-wrapper video-review__item-link">
                                <div role="button" data-fancybox="true"
                                    data-src="https://www.youtube.com/watch?v=irvZaxT6L3A&t=15s"
                                    area-label="Watch video review" class="circular-animate">
                                    <span class="video-play-btn"><span class="icon-play-button "></span>
                                    </span>
                                </div>
                            </div>
                            <div class="absolute lg:bottom-6 bottom-1 left-4 text-white z-10">
                                <h4 class="text-base sm:text-xs lg:text-2xl text-white font-extrabold ">Everest Base Camp
                                </h4>
                                <span class="text-sm">Jhon - Australia</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-12 lg:col-span-3">
                    <div class="flex flex-col gap-5 h-full">
                        <div class="homepage-moments-list__item">
                            <div class="moments-list__item-image relative">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img w-full">
                                        <img src="/images/dynamic/video.webp" width="1200" height="550" loading="lazy"
                                            decoding="async" data-nimg="1" style="color: transparent;"
                                            alt="Everest Base Camp" />
                                    </div>
                                </div>
                                <div class="fancybox-wrapper">
                                    <div role="button" data-fancybox="true"
                                        data-src="https://www.youtube.com/watch?v=bVYJNM1Pih0&t=2s"
                                        area-label="Watch video review">
                                        <div
                                            class="absolute inset-0 flex items-start cursor-pointer justify-end z-10 mt-3 right-2">
                                            <span class="video-play-btn-side circular-animate">
                                                <span class="icon-play-button text-xs"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white z-10">
                                    <h4 class="text-lg font-semibold text-white">Travel Nepal</h4>
                                    <span class="text-xs">John - Australia</span>
                                </div>
                            </div>
                        </div>


                        <div class="homepage-moments-list__item">
                            <div class="moments-list__item-image relative">
                                <div class="placeholder__img-wrapper">
                                    <div class="placeholder__img w-full">
                                        <img src="/images/dynamic/video.webp" width="1200" height="550" loading="lazy"
                                            decoding="async" data-nimg="1" style="color: transparent;"
                                            alt="Everest Base Camp" />
                                    </div>
                                </div>
                                <div class="fancybox-wrapper">
                                    <div role="button" data-fancybox="true"
                                        data-src="https://www.youtube.com/watch?v=irvZaxT6L3A&t=15s"
                                        area-label="Watch video review">
                                        <div class="absolute inset-0 flex items-start cursor-pointer justify-end z-10 mt-3 right-2">
                                            <span class="video-play-btn-side circular-animate">
                                                <span
                                                    class="icon-play-button text-xs "></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white z-10">
                                    <h4 class="text-lg font-semibold text-white">Things to Do in Nepal</h4>
                                    <span class="text-xs">John - Australia</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- Testimonials -->
    <section class="container common-box hav-title-btn pb-0">

        <div class="flex items-center justify-between">
            <div class="mb-0 section-title-wrap">
                <div class="relative section-title-sm ">
                    Testimonials
                </div>
                <h2 class="section-title">
                    Real Feedback From Our Travelers
                </h2>
            </div>
            <div class="flex items-center section-title-btn">
                <a href="">View
                    All Reviews <span class="text-sm icon-view"></span></a>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="homepage__review-summary review-block ">

            <div class="homepage__review-tabs review-tabs" role="tablist" aria-label="Review sources">
                <button type="button" class="homepage__review-tab review-tab-item " data-name="All Reviews"
                    data-count="500" data-rating="4.6" data-icon="" data-testimonial-icon="" aria-pressed="false">
                    <span>All Reviews</span>
                    <span class="font-semibold">4.6</span>
                </button>

                <button type="button" class="homepage__review-tab review-tab-item active" data-name="Trip Advisor"
                    data-count="222" data-rating="4.6" data-icon="/images/svg/tripadvisor.svg"
                    data-testimonial-icon="/images/svg/circular-tripadvisor.svg" aria-pressed="true">
                    <img src="/images/svg/circular-tripadvisor.svg" class="w-5 h-5" alt="Trip Advisor">
                    <span>Trip Advisor</span>
                    <span class="font-semibold">4.6</span>
                </button>

                <button type="button" class="homepage__review-tab review-tab-item" data-name="Facebook" data-count="180"
                    data-rating="4.6" data-icon="/images/svg/facebook.svg"
                    data-testimonial-icon="/images/svg/circular-facebook.svg" aria-pressed="false">
                    <img src="/images/svg/circular-facebook.svg" class="w-5 h-5" alt="Facebook">
                    <span>Facebook</span>
                    <span class="font-semibold">4.6</span>
                </button>

                <button type="button" class="homepage__review-tab review-tab-item" data-name="Google" data-count="300"
                    data-rating="4.6" data-icon="/images/svg/google.svg"
                    data-testimonial-icon="/images/svg/circular-google.svg" aria-pressed="false">
                    <img src="/images/svg/circular-google.svg" class="w-5 h-5" alt="Google">
                    <span>Google</span>
                    <span class="font-semibold">4.6</span>
                </button>

            </div>
            <div class="homepage__review-center review-center">
                <div class="flex items-center gap-3 ">
                    <a href="">
                        <img id="reviewIcon" src="/images/svg/tripadvisor.svg" class="w-147px h-31px cursor-pointer"
                            alt="Trip Advisor" />
                    </a>
                </div>
                <div class="mt-2 flex items-center gap-3">
                    <div class="testimonial__list-item-rating green-dot-rating flex items-center gap-2" id="reviewRating">
                        <div class="rating-wrap rating-5">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                    </div>
                    <span id="reviewCount" class="text-sm">222 reviews</span>
                </div>
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
                                    <div class=" text-lg font-bold leading-6 text-text_color">Ramiro Barraza -
                                        USA
                                    </div>
                                    <span class=" block text-xs leading-6 text-text_color">Annapurna Circuit, 2014</span>
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
                                    <div class=" text-lg font-bold leading-6 text-text_color">Ramiro Barraza - USA
                                    </div>
                                    <span class=" block text-xs leading-6 text-text_color">Annapurna Circuit, 2014</span>
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

    </section>

    <!-- Blogs -->
    <section class="container common-box hav-title-btn   ">

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
                <a href="">View
                    All Articles <span class="text-sm icon-view"></span></a>
            </div>
        </div>

        <!-- blogs -->
        <div class="scroll-wrap ">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
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
                                <span class=""> 20 Jan</span>
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
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
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
                                <span class=""> 20 Jan</span>
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
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
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
                                <span class=""> 20 Jan</span>
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

    </section>

</main>


<!-- Swipper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php include('./inc/footer.php') ?>
