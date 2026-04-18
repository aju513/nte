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

                <!-- <div class="homepage__banner-search ">
                    <form action="/search" class="rounded-full bg-white py-[5px]"><label for="auto-complete" class="sr-only">Find
                            an Adventure</label>
                        <div class="typeahead-standalone"><input type="text" id="auto-complete" name="q" required=""
                                class="relative z-30 block h-11.25 lg:h-12.5 w-full rounded-full border-0 pl-[20px] pr-[60px] text-text_color placeholder:text-text_color placeholder:opacity-70 sm:leading-6 tt-input"
                                placeholder="Find an Adventure">
                            <div class="tt-list tt-hide" aria-label="menu-options" role="listbox"
                                style="position: absolute; width: 635px; margin-top: 50px;"></div>
                        </div><button type="submit" aria-label="Search"
                            class="absolute inset-y-0 right-5 top-[50%] z-30 flex translate-y-[-50%] items-center justify-center gap-4"><span
                                class="text-2xl icon-search text-secondary"></span></button>
                    </form>
                </div> -->


            </div>
            <!-- <div class="homepage__banner-search container" id="heroNoticeSlider" aria-live="polite">
                <div class=" homepage__banner-search-list ">
                    <div class="search-box-message js-search-slide is-active">Nepal bans solo trekkers throughout the country.</div>
                    <div class="search-box-message js-search-slide">Spring trekking permits are now open for Everest, Annapurna, and Langtang regions.</div>
                    <div class="search-box-message js-search-slide">Weather in high-altitude routes can change quickly, so always travel prepared.</div>

                    <div class="search-box-controls">
                        <div class="search-box-nav">
                            <button type="button" class="search-box-btn js-search-prev" aria-label="Previous notice">
                                <span class="icon-back rotate-180"></span>
                            </button>
                            <span class="search-box-counter"><span class="js-search-current">1</span>/3
                            </span>
                            <button type="button" class="search-box-btn js-search-next" aria-label="Next notice">
                                <span class="icon-back"></span>
                            </button>
                        </div>
                        <button type="button" class="search-box-btn js-search-close" aria-label="Close notice">
                            <span class="icon-x-mark fill-button"></span>
                        </button>
                    </div>
                </div>
            </div> -->
        </div>

    </section>

    <!-- Bestselling -->
    <section class="homepage__bestselling common-box  package-list hav-title-btn">
        <div class="container ">

            <div class="mb-6 flex items-start gap-4 flex-row md:items-center justify-between">
                <div class="mb-0 section-title-wrap">
                    <div class="relative text-lg font-bold leading-6 section-title-sm text-primary">
                        Most Awaited Trip
                    </div>
                    <h2
                        class="section-title text-[30px] font-black uppercase leading-[36px] text-black lg:text-[40px] lg:leading-10">
                        Nepal Top Selling Treks
                    </h2>
                </div>
                <div class="section-title-btn">
                    <a href=""
                        class="inline-flex items-center mt-10 gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">View
                        All Packages <span class="text-sm icon-view"></span></a>
                </div>
            </div>
            <!--Package Grid -->
            <div class="relative mt-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-5 ">


                    <div class="package-list__item">
                        <div class="relative package-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="w-full placeholder__img">
                                    <a href="">
                                        <img src="/images/dynamic/package-thumb1.webp" width="600" height="450"
                                            alt="banner" />
                                    </a>
                                </div>
                            </div>
                            <div class="homepage__package-badge top_rated">
                                <span class="">TOP RATED</span>/
                            </div>

                        </div>
                        <div class="package-list__item-content">
                            <div class="flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <span class="text-[15px] icon-time-quarter-to text-[#76b4dc]"></span>
                                    <span class="text-xs font-bold text-text_color">Duration: 15 Days</span>
                                </div>
                                <div class="flex items-center gap-1 text-text_color text-xs">
                                    <span class="icon-star-rate text-[#dfd200]"></span>
                                    <span class="text-bold">4.9</span>
                                    <span>(4 Reviews)</span>
                                </div>
                            </div>
                            <div class="package-list__item-title">
                                <h3 class="min-h-[60px]">
                                    <a href="" class="homepage__package-title">
                                        Everest Base Camp Trekking
                                    </a>
                                </h3>
                            </div>
                            <div class=" flex items-end justify-between bg-white package-list__item-meta ">
                                <div class="">
                                    <div class=" font-16px">
                                        Price From
                                    </div>
                                    <div class="flex items-center gap-2 package-list__item-price">
                                        <span class="text-lg font-bold text-primary">US$ 1680</span>
                                        <span class="text-black line-through opacity-50 ">US$1800</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <a href="#" class="explore_btn group">
                                        Explore
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="package-list__item">
                        <div class="relative package-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="w-full placeholder__img">
                                    <a href="">
                                        <img src="/images/dynamic/package-thumb2.webp" width="600" height="450"
                                            alt="banner" />
                                    </a>
                                </div>
                            </div>
                            <div class="homepage__package-badge top_rated">
                                <span class="">TOP RATED</span>
                            </div>

                        </div>
                        <div class="package-list__item-content">
                            <div class="flex items-end justify-between  package-list__item-meta ">
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <span class="text-[15px] icon-time-quarter-to text-[#76b4dc]"></span>
                                    <span class="text-xs font-bold text-text_color">Duration: 15 Days</span>
                                </div>
                                <div class="flex items-center gap-1 text-text_color text-xs">
                                    <span class="icon-star-rate text-[#dfd200]"></span>
                                    <span class="text-bold">4.9</span>
                                    <span>(4 Reviews)</span>
                                </div>
                            </div>
                            <div class="package-list__item-title">
                                <h3 class="min-h-15">
                                    <a href="" class="homepage__package-title">
                                        Everest Base Camp Trekking
                                    </a>
                                </h3>
                            </div>
                            <div class=" flex items-end justify-between  package-list__item-meta ">
                                <div class="">
                                    <div class=" font-16px">
                                        Price From
                                    </div>
                                    <div class="flex items-center gap-2 package-list__item-price">
                                        <span class="text-lg font-bold text-primary">US$ 1680</span>
                                        <span class="text-black line-through opacity-50 ">US$1800</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <a href="#" class="explore_btn group">
                                        Explore
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="package-list__item">
                        <div class="relative package-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="w-full placeholder__img">
                                    <a href="">
                                        <img src="/images/dynamic/package-thumb3.webp" width="600" height="450"
                                            alt="banner" />
                                    </a>
                                </div>
                            </div>
                            <div class="homepage__package-badge top_rated">
                                <span class="">TOP RATED</span>
                            </div>

                        </div>
                        <div class="package-list__item-content">
                            <div class="flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <span class="text-[15px] icon-time-quarter-to text-[#76b4dc]"></span>
                                    <span class="text-xs font-bold text-text_color">Duration: 15 Days</span>
                                </div>
                                <div class="flex items-center gap-1 text-text_color text-xs">
                                    <span class="icon-star-rate text-[#dfd200]"></span>
                                    <span class="text-bold">4.9</span>
                                    <span>(4 Reviews)</span>
                                </div>
                            </div>
                            <div class="package-list__item-title">
                                <h3 class="min-h-15">
                                    <a href="" class="homepage__package-title">
                                        Everest Base Camp Trekking
                                    </a>
                                </h3>
                            </div>
                            <div class=" flex items-end justify-between bg-white package-list__item-meta ">
                                <div class="">
                                    <div class=" font-16px">
                                        Price From
                                    </div>
                                    <div class="flex items-center gap-2 package-list__item-price">
                                        <span class="text-lg font-bold text-primary">US$ 1680</span>
                                        <span class="text-black line-through opacity-50 ">US$1800</span>
                                    </div>
                                </div>
                                <div class="flex items-end gap-2 package-list__item-duration">
                                    <a href="#" class="explore_btn group">
                                        Explore
                                        <span class="icon-arrow-right"></span>
                                    </a>
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
        <div class="containers common-box hav-title-btn ">
            <!-- Title -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6 ">
                <div class="mb-0 section-title-wrap ">
                    <div class="relative text-lg font-bold leading-6 section-title-sm text-primary">
                        Top Places to Explore
                    </div>
                    <h2
                        class="section-title text-[30px] font-black uppercase leading-9 text-black lg:text-[40px] lg:leading-10">
                        Book your next <br> NTE Designer Tours
                    </h2>
                </div>
                <div class="mb-0">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestias, porro laborum magni
                        recusandae ducimus fugit laboriosam nam nisi dolorum.</p>
                    <div class="section-title-btn">
                        <a href=""
                            class="inline-flex items-center gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">View
                            All Packages <span class="text-sm icon-view"></span></a>
                    </div>
                </div>
            </div>

            <div class="relative mt-8 ">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-5 rounded-2xl">


                    <div class="package-list__item">
                        <div class="relative package-list__item-image">
                            <div class="placeholder__img-wrapper w-full">
                                <div class="w-full placeholder__img">
                                    <a href="">
                                        <img src="/images/dynamic/package-thumb1.webp" width="600" height="450"
                                            alt="banner" />
                                    </a>
                                </div>
                            </div>
                            <div class="homepage__package-badge top_rated">
                                <span class="">TOP RATED</span>
                            </div>

                        </div>
                        <div class="package-list__item-content">
                            <div class="flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <span class="text-[15px] icon-time-quarter-to text-[#76b4dc]"></span>
                                    <span class="text-xs font-bold text-text_color">Duration: 15 Days</span>
                                </div>
                                <div class="flex items-center gap-1 text-text_color text-xs">
                                    <span class="icon-star-rate text-[#dfd200]"></span>
                                    <span class="text-bold">4.9</span>
                                    <span>(4 Reviews)</span>
                                </div>
                            </div>
                            <div class="package-list__item-title">
                                <h3 class="min-h-[60px]">
                                    <a href="" class="homepage__package-title">
                                        Everest Base Camp Trekking
                                    </a>
                                </h3>
                            </div>
                            <div class=" flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="">
                                    <div class=" font-16px">
                                        Price From
                                    </div>
                                    <div class="flex items-center gap-2 package-list__item-price">
                                        <span class="text-lg font-bold text-primary">US$ 1680</span>
                                        <span class="text-black line-through opacity-50 ">US$1800</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <a href="#" class="explore_btn group">
                                        Explore
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="package-list__item">
                        <div class="relative package-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="w-full placeholder__img">
                                    <a href="">
                                        <img src="/images/dynamic/package-thumb2.webp" width="600" height="450"
                                            alt="banner" />
                                    </a>
                                </div>
                            </div>
                            <div class="homepage__package-badge top_rated">
                                <span class="">TOP RATED</span>
                            </div>

                        </div>
                        <div class="package-list__item-content">
                            <div class="flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <span class="text-[15px] icon-time-quarter-to text-[#76b4dc]"></span>
                                    <span class="text-xs font-bold text-text_color">Duration: 15 Days</span>
                                </div>
                                <div class="flex items-center gap-1 text-text_color text-xs">
                                    <span class="icon-star-rate text-[#dfd200]"></span>
                                    <span class="text-bold">4.9</span>
                                    <span>(4 Reviews)</span>
                                </div>
                            </div>
                            <div class="package-list__item-title">
                                <h3 class="min-h-[60px]">
                                    <a href="" class="homepage__package-title">
                                        Everest Base Camp Trekking
                                    </a>
                                </h3>
                            </div>
                            <div class=" flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="">
                                    <div class=" font-16px">
                                        Price From
                                    </div>
                                    <div class="flex items-center gap-2 package-list__item-price">
                                        <span class="text-lg font-bold text-primary">US$ 1680</span>
                                        <span class="text-black line-through opacity-50 ">US$1800</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <a href="#" class="explore_btn group">
                                        Explore
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="package-list__item">
                        <div class="relative package-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="w-full placeholder__img">
                                    <a href="">
                                        <img src="/images/dynamic/package-thumb3.webp" width="600" height="450"
                                            alt="banner" />
                                    </a>
                                </div>
                            </div>
                            <div class="homepage__package-badge top_rated">
                                <span class="">TOP RATED</span>
                            </div>

                        </div>
                        <div class="package-list__item-content">
                            <div class="flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <span class="text-[15px] icon-time-quarter-to text-[#76b4dc]"></span>
                                    <span class="text-xs font-bold text-text_color">Duration: 15 Days</span>
                                </div>
                                <div class="flex items-center gap-1 text-text_color text-xs">
                                    <span class="icon-star-rate text-[#dfd200]"></span>
                                    <span class="text-bold">4.9</span>
                                    <span>(4 Reviews)</span>
                                </div>
                            </div>
                            <div class="package-list__item-title">
                                <h3 class="min-h-[60px]">
                                    <a href="" class="homepage__package-title">
                                        Everest Base Camp Trekking
                                    </a>
                                </h3>
                            </div>
                            <div class=" flex items-center justify-between bg-white package-list__item-meta ">
                                <div class="">
                                    <div class=" font-16px">
                                        Price From
                                    </div>
                                    <div class="flex items-center gap-2 package-list__item-price">
                                        <span class="text-lg font-bold text-primary">US$ 1680</span>
                                        <span class="text-black line-through opacity-50 ">US$1800</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 package-list__item-duration">
                                    <a href="#" class="explore_btn group">
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

        <!-- Join Our Upcoming Trips -->
        <section class="homepage__departures containers common-box">
            <div class="homepage__join-banner join-trip-banner">
                <!-- Image -->
                <img src="/images/dynamic/website-img.jpg" alt="" class="homepage__join-image join-trip-image">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-primary/30"></div>

                <!-- Content -->
                <div
                    class="absolute inset-0 join-trip-layout flex sm:flex-row flex-col justify-between items-center w-[90%] m-auto">

                    <!-- Text -->
                    <div class="homepage__join-text join-trip-text text-white">
                        <h2 class="title text-white">
                            Join Our Upcoming Trips
                        </h2>

                        <p class="cta-copy-text text-white">
                            Explore breathtaking destinations and travel with like-minded adventures.
                        </p>
                    </div>
                    <div class="cta-actions  flex gap-2 pb-2 sm:pb-0">
                        <button class="departure-btn">
                            View All Packages
                            <span class="icon-arrow-right"></span>
                        </button>

                        <button class="departure-btn">
                            View All Packages
                            <span class="icon-arrow-right"></span>
                        </button>
                    </div>

                </div>
            </div>
        </section>


        <!-- Homepage-Content -->
        <section class="homepage__main-content common-box pt-0 ">
            <div class="homepage__main-content-grid containers">
                <div class="homepage__main-copy section-title-wrap ">
                    <div class="section-title-wrap">
                        <div class="relative text-lg leading-6 section-title-sm text-primary">
                            About Nepal Travel Experience
                        </div>
                        <h2
                            class="section-title font-playfair text-[30px] font-black uppercase leading-9 text-black lg:text-[40px] lg:leading-10">
                            Namaste!
                        </h2>
                    </div>
                    <div class="welcome-content mt-4">
                        <p>
                            Nepal Travel Experience (NTE) offers customized tours for groups wanting to create their own
                            tour with an array of memorable experiences from the likes of-
                        </p>
                        <p>
                            Magnificient natural Nepali sights including soaring mountains and fast-flowing rivers,
                            Visits to locations rich in Nepali art, culture and history, and Immersion with Nepalese in
                            theor own ommunity environments. To help create your own special NTE tour we will-
                            Adapt tour itineraries to match the objectives of your group. Provide guides who have
                            excellent local knowledge and an ability to inform and entertain your group.
                            Take you to locations suppported by our charity partners, and introduce you to people in
                            local communities, to get involved in activities in an authentic environment, ranging from
                            cookking, art, craft, music, dancing, meditation, yoga and organic farming. [...]
                        </p>
                    </div>
                    <a href=""
                        class="inline-flex items-center mt-10 gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">More
                        About Us <span class="text-sm icon-view"></span>
                    </a>
                </div>

                <!-- Why Choose Us? -->
                <div class="homepage__why-choose scroll-mt-20 font-mulish">
                    <div class="why-choose-accordion">
                        <h2 class="why-choose-accordion__heading">Why choose us?</h2>

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
                                    <p>We keep pricing transparent and competitive, with quality service and value built
                                        into every trip.</p>
                                    <a href="#" class="why-choose-accordion__link">Read More <span
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
                                    <p>We focus on safe travel practices and thoughtful experiences that respect local
                                        communities and nature.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <!-- <div class=" common-module scroll-mt-[80px] bg-[#6cafda] text-white rounded-tl-xl rounded-bl-4xl p-12 font-mulish md:mt-4 col-span-6">
                <h2 class="package__section-title">Why Choose us?</h2>
                <div class="accordion" id="faq-accordion">
                    <div class="accordion__item" data-id="q1">
                        <div class="flex items-start gap-2 accordion__item-title">
                            <div class="accordion__count font-bold text-white text-base md:text-xl  px-[3px] py-[1px] rounded-[5px] ">
                                <span class="icon-circle-dollar-sign"></span>
                            </div>
                            <span class="text-base font-bold md:text-xl text-text_color"> Best Price Gurantee </span>
                        </div>
                        <div class="accordion__item-content">
                            <div class="text-text_color text-[15px]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item" data-id="q2">
                        <div class="flex items-start gap-2 accordion__item-title">
                            <div class="accordion__count font-bold text-white text-base md:text-xl  px-[3px] py-[1px] rounded-[5px] ">
                                <span class="icon-binoculars"></span>
                            </div>
                            <span class="text-base font-bold md:text-xl text-text_color"> Local Expert Guides </span>
                        </div>
                        <div class="accordion__item-content">
                            <div class="text-text_color text-[15px]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item" data-id="q4">
                        <div class="flex items-start gap-2 accordion__item-title">
                            <div class="accordion__count font-bold text-white text-base md:text-xl  px-[3px] py-[1px] rounded-[5px] ">
                                <span class="icon-route"></span>
                            </div>
                            <span class="text-base font-bold md:text-xl text-text_color"> Easy Trip Planning</span>
                        </div>
                        <div class="accordion__item-content">
                            <div class="text-text_color text-[15px]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item" data-id="q3">
                        <div class="flex items-start gap-2 accordion__item-title">
                            <div class="accordion__count font-bold text-white text-base md:text-xl  px-[3px] py-[1px] rounded-[5px] ">
                                <span class="icon-shield-check"></span>
                            </div>
                            <span class="text-base font-bold md:text-xl text-text_color"> Safety & Responsible</span>
                        </div>
                        <div class="accordion__item-content">
                            <div class="text-text_color text-[15px]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            </div>
        </section>


        <!-- Most Popular -->
        <section class="containers hav-title-btn">
            <div class="homepage__container containers">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="mb-0 section-title-wrap ">
                        <div class="relative text-lg font-bold leading-6 section-title-sm text-primary">
                            Best Moment Captured
                        </div>
                        <h2
                            class="section-title text-[30px] font-black uppercase leading-9 text-black lg:text-[40px] lg:leading-10">
                            Most Popular Activities <br> and Experiences to Enjoy
                        </h2>
                    </div>
                    <div class="mb-0">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestias, porro laborum
                            magni recusandae ducimus fugit laboriosam nam nisi dolorum.</p>
                        <div class="section-title-btn">
                            <a href=""
                                class="inline-flex items-center gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">View
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

                                <h3 class="category-list__item-title">
                                    <a href=""
                                        class="font-playfair text-xl font-extrabold transition-all duration-500 leading-19 pl-4 hover:text-primary">Trekking
                                        in Nepal</a>
                                </h3>

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
                                                <span class="icon-milestone icon-trip"> </span>12 Trips
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="category-list__item-title">
                                    <a href=""
                                        class="font-playfair text-xl font-extrabold transition-all duration-500 leading-19 pl-4 hover:text-primary">Trekking
                                        in Nepal</a>
                                </h3>

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

                                <h3 class="category-list__item-title">
                                    <a href=""
                                        class="font-playfair text-xl font-extrabold transition-all duration-500 leading-19 pl-4 hover:text-primary">Trekking
                                        in Nepal</a>
                                </h3>

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

                                <h3 class="category-list__item-title">
                                    <a href=""
                                        class="font-playfair text-xl font-extrabold transition-all duration-500 leading-19 pl-4 hover:text-primary">Trekking
                                        in Nepal</a>
                                </h3>

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

                                <h3 class="category-list__item-title">
                                    <a href=""
                                        class="font-playfair text-xl font-extrabold transition-all duration-500 leading-19 pl-4 hover:text-primary">Trekking
                                        in Nepal</a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <!-- LEFT ARROW -->
                    <button class="homepage__slider-prev category-prev prev-btn">
                        <span class="icon-arrow-left text-primary text-lg"></span>
                    </button>

                    <!-- RIGHT ARROW -->
                    <button class="homepage__slider-next category-next next-btn">
                        <span class="icon-arrow-right text-primary text-lg"></span>
                    </button>

                </div>

            </div>

        </section>

    </section>

    <!-- Videos Section -->
    <section class="homepage__videos common-box pb-0 containers hav-title-btn scroll-wrap">

        <!-- Title Section -->
        <div class="flex items-center justify-between mb-6">
            <div class="mb-0 section-title-wrap">
                <div class="relative section-title-sm text  ">
                    Travel Styles
                </div>
                <h2 class="section-title ">
                    Video Reviews
                </h2>
            </div>
            <div class="flex items-center section-title-btn">
                <a href=""
                    class="inline-flex items-center mt-10 gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">View
                    All Activities <span class="text-sm icon-view"></span></a>
            </div>
        </div>

        <!-- Videos Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
            <div class="lg:col-span-2">
                <div class="moments-list__item">
                    <div class="moments-list__item-image relative">
                        <div class="placeholder__img-wrapper  w-full">
                            <div class="placeholder__img w-full ">
                                <img src="/images/dynamic/hero3.jpg" width="1200" height="550" loading="lazy"
                                    decoding="async" data-nimg="1" style="color: transparent;"
                                    alt="Everest Base Camp" />
                            </div>
                        </div>
                        <div class="fancybox-wrapper">
                            <div role="button" data-fancybox="true"
                                data-src="https://www.youtube.com/watch?v=irvZaxT6L3A&t=15s"
                                area-label="Watch video review">
                                <span class="absolute inset-0 flex items-center justify-center z-10 cursor-pointer">
                                    <span class="icon-play-button text-white text-5xl"></span></span>
                            </div>
                        </div>
                        <div class="absolute bottom-6 left-6 text-white z-10">
                            <h4 class="text-2xl font-semibold">Everest Base Camp</h4>
                            <span class="text-sm">Jhon - Australia</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex flex-col gap-5 h-full">
                <div>
                    <div class="moments-list__item">
                        <div class="moments-list__item-image relative">
                            <div class="placeholder__img-wrapper">
                                <div class="placeholder__img w-full">
                                    <img src="/images/dynamic/hero3.jpg" width="1200" height="550" loading="lazy"
                                        decoding="async" data-nimg="1" style="color: transparent;"
                                        alt="Everest Base Camp" />
                                </div>
                            </div>
                            <div class="fancybox-wrapper">
                                <div role="button" data-fancybox="true"
                                    data-src="https://www.youtube.com/watch?v=bVYJNM1Pih0&t=2s"
                                    area-label="Watch video review">
                                    <span class="absolute inset-0 flex items-start justify-end z-10 mt-3">
                                        <span class="icon-play-button text-white text-5xl"></span></span>
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white z-10">
                                <h4 class="text-lg font-semibold">Travel Nepal</h4>
                                <span class="text-xs">John - Australia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="moments-list__item">
                        <div class="moments-list__item-image relative">
                            <div class="placeholder__img-wrapper">
                                <div class="placeholder__img w-full">
                                    <img src="/images/dynamic/hero3.jpg" width="1200" height="550" loading="lazy"
                                        decoding="async" data-nimg="1" style="color: transparent;"
                                        alt="Everest Base Camp" />
                                </div>
                            </div>
                            <div class="fancybox-wrapper">
                                <div role="button" data-fancybox="true"
                                    data-src="https://www.youtube.com/watch?v=irvZaxT6L3A&t=15s"
                                    area-label="Watch video review">
                                    <span class="absolute inset-0 flex items-start justify-end z-10 mt-3">
                                        <span class="icon-play-button text-white text-5xl"></span></span>
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-4 text-white z-10">
                                <h4 class="text-lg font-semibold">Things to Do in Nepal</h4>
                                <span class="text-xs">John - Australia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Testimonials -->
    <section class="containers common-box hav-title-btn pb-0">

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
                <a href=""
                    class="inline-flex items-center mt-10 gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">View
                    All Reviews <span class="text-sm icon-view"></span></a>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="homepage__review-summary review-block">

            <div class="homepage__review-tabs review-tabs">
                <div class="homepage__review-tab review-tab-item cursor-pointer" data-name="All Reviews"
                    data-count="500">
                    <span>All Reviews</span>
                    <span class="font-semibold">4.6</span>
                </div>

                <div class="homepage__review-tab review-tab-item cursor-pointer" data-name="Trip Advisor"
                    data-count="222">
                    <img src="/images/svg/circular-tripadvisor.svg" class="w-5 h-5">
                    Trip Advisor
                    <span class="font-semibold">4.6</span>
                </div>

                <div class="homepage__review-tab review-tab-item cursor-pointer" data-name="Facebook" data-count="180">
                    <img src="/images/svg/circular-facebook.svg" class="w-5 h-5">
                    Facebook
                    <span class="font-semibold">4.6</span>
                </div>

                <div class="homepage__review-tab review-tab-item" data-name="Google" data-count="300">
                    <img src="/images/svg/circular-google.svg" class="w-5 h-5">
                    Google
                    <span class="font-semibold">4.6</span>
                </div>

            </div>
            <div class="homepage__review-center review-center">
                <div class="flex items-center gap-3">
                    <img id="reviewIcon" src="/images/svg/circular-tripadvisor.svg" class="w-5 h-5">
                    <span id="reviewTitle" class="text-xl sm:text-2xl lg:text-3xl font-bold">Trip Advisor</span>
                </div>
                <div>
                    <span id="reviewCount" class="text-sm mt-1">222 reviews</span>
                </div>
            </div>




        </div>

        <!-- Testimonials -->

        <div class="relative">
            <div class="swiper testimonialSwiper p-12.5 sm:px-4 mt-5.75">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis
                                        fugit. Quas, eum mollitia. Similique harum veniam totam iste?</p>
                                </div>
                            </div>
                            <div class="testimonial__list-item-reviewer ">
                                <div class="reviewer-image">
                                    <div
                                        class="flex h-12.5 w-12.5 items-center justify-center rounded-full bg-secondary font-playfair text-xl text-white">
                                        A</div>
                                </div>
                                <div class="reviewer-content">
                                    <div class="-mt-3 text-[15px] font-bold leading-5 text-text_color md:text-lg">Ramiro
                                        Barraza - USA</div>
                                    <span class="-mt-1 block text-[13px] text-text_color">Annapurna Circuit, 2014</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis
                                        fugit. Quas, eum mollitia. Similique harum veniam totam iste?</p>
                                </div>
                            </div>
                            <div class="testimonial__list-item-reviewer ">
                                <div class="reviewer-image">
                                    <div
                                        class="flex h-12.5 w-12.5 items-center justify-center rounded-full bg-secondary font-playfair text-xl text-white">
                                        A</div>
                                </div>
                                <div class="reviewer-content">
                                    <div class="-mt-3 text-[15px] font-bold leading-5 text-text_color md:text-lg">Ramiro
                                        Barraza - USA</div>
                                    <span class="-mt-1 block text-[13px] text-text_color">Annapurna Circuit, 2014</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptates nobis
                                        fugit. Quas, eum mollitia. Similique harum veniam totam iste?</p>
                                </div>
                            </div>
                            <div class="testimonial__list-item-reviewer ">
                                <div class="reviewer-image">
                                    <div
                                        class="flex h-12.5 w-12.5 items-center justify-center rounded-full bg-secondary font-playfair text-xl text-white">
                                        A</div>
                                </div>
                                <div class="reviewer-content">
                                    <div class="-mt-3 text-[15px] font-bold leading-5 text-text_color md:text-lg">Ramiro
                                        Barraza - USA</div>
                                    <span class="-mt-1 block text-[13px] text-text_color">Annapurna Circuit, 2014</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LEFT ARROW -->
            <button class="homepage__slider-prev testimonial-prev">
                <span class="icon-arrow-left text-primary text-lg"></span>
            </button>

            <!-- RIGHT ARROW -->
            <button class="homepage__slider-next testimonial-next">
                <span class="icon-arrow-right text-primary text-lg"></span>
            </button>
        </div>

    </section>

    <!-- Blogs -->
    <section class=" containers common-box hav-title-btn scroll-wrap pb-0">

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
                <a href=""
                    class="inline-flex items-center mt-10 gap-3 border-dotted border-2 border-primary rounded-[30px] px-5 py-2.5">View
                    All Articles <span class="text-sm icon-view"></span></a>
            </div>
        </div>

        <!-- blogs -->
        <div class="grid grid-cols-12 gap-5 ">
            <div class="col-span-4">
                <div class="blog-list__item ">
                    <div class="blog-list__item-image relative ">
                        <div class="placeholder__img-wrapper ">
                            <div class="w-full placeholder__img">
                                <a href="">
                                    <img src="/images/dynamic/blog-thumb.webp" width="600" height="400" alt="banner" />
                                </a>
                            </div>
                        </div>
                        <div class="blog-list__item-content-meta">
                            <span class="homepage__blog-badge icon-calendar">
                                20 Jan
                            </span>
                        </div>
                    </div>
                    <div class="blog-list__item-content">
                        <h3 class="homepage__blog-title ">
                            <a href="">
                                The Highest Mountain in the world
                            </a>
                        </h3>
                        <div class="homepage__blog-readmore">
                            <span>Continue Reading</span>
                            <span class="icon-arrow-right"></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="blog-list__item ">
                    <div class="blog-list__item-image relative ">
                        <div class="placeholder__img-wrapper ">
                            <div class="w-full placeholder__img">
                                <a href="">
                                    <img src="/images/dynamic/blog-thumb.webp" width="600" height="400" alt="banner" />
                                </a>
                            </div>
                        </div>
                        <div class="blog-list__item-content-meta">
                            <span class="homepage__blog-badge icon-calendar">
                                20 Jan
                            </span>
                        </div>
                    </div>
                    <div class="blog-list__item-content">
                        <h3 class="homepage__blog-title ">
                            <a href="">
                                The Highest Mountain in the world
                            </a>
                        </h3>
                        <div class="homepage__blog-readmore">
                            <span>Continue Reading</span>
                            <span class="icon-arrow-right"></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="blog-list__item ">
                    <div class="blog-list__item-image relative ">
                        <div class="placeholder__img-wrapper ">
                            <div class="w-full placeholder__img">
                                <a href="">
                                    <img src="/images/dynamic/blog-thumb.webp" width="600" height="400" alt="banner" />
                                </a>
                            </div>
                        </div>
                        <div class="blog-list__item-content-meta">
                            <span class="homepage__blog-badge icon-calendar">
                                20 Jan
                            </span>
                        </div>
                    </div>
                    <div class="blog-list__item-content">
                        <h3 class="homepage__blog-title ">
                            <a href="">
                                The Highest Mountain in the world
                            </a>
                        </h3>
                        <div class="homepage__blog-readmore">
                            <span>Continue Reading</span>
                            <span class="icon-arrow-right"></span>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>



    <?php include('./inc/footer.php') ?>
</main>


<!-- Swipper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    <script>
        const tabs = document.querySelectorAll('.review-tab-item');

tabs.forEach(tab => {
            tab.addEventListener('click', () => {

                const name = tab.dataset.name;
                const count = tab.dataset.count;
                const img = tab.querySelector('img');

                document.getElementById('reviewTitle').innerText = name;
                document.getElementById('reviewCount').innerText = count + ' reviews';

                if (img) {
                    document.getElementById('reviewIcon').src = img.src;
                }

                // active state (optional)
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
});
</script>

</script>
<!-- <script>
    document.addEventListener("DOMContentLoaded", () => {
        const homeAccordion = document.querySelector(".why-choose-accordion");

        if (homeAccordion) {
            const items = homeAccordion.querySelectorAll(".why-choose-accordion__item");

            const closeItem = (item) => {
                const trigger = item.querySelector(".why-choose-accordion__trigger");
                const content = item.querySelector(".why-choose-accordion__content");

                item.classList.remove("is-open");
                trigger.setAttribute("aria-expanded", "false");
                content.style.maxHeight = "0px";
            };

            const openItem = (item) => {
                const trigger = item.querySelector(".why-choose-accordion__trigger");
                const content = item.querySelector(".why-choose-accordion__content");

                item.classList.add("is-open");
                trigger.setAttribute("aria-expanded", "true");
                content.style.maxHeight = content.scrollHeight + "px";
            };

            items.forEach((item) => {
                const trigger = item.querySelector(".why-choose-accordion__trigger");
                const content = item.querySelector(".why-choose-accordion__content");

                if (item.classList.contains("is-open")) {
                    content.style.maxHeight = content.scrollHeight + "px";
                    trigger.setAttribute("aria-expanded", "true");
                } else {
                    content.style.maxHeight = "0px";
                    trigger.setAttribute("aria-expanded", "false");
                }

                trigger.addEventListener("click", () => {
                    const isOpen = item.classList.contains("is-open");

                    items.forEach((otherItem) => {
                        if (otherItem !== item) {
                            closeItem(otherItem);
                        }
                    });

                    if (isOpen) {
                        closeItem(item);
                    } else {
                        openItem(item);
                    }
                });
            });

            window.addEventListener("resize", () => {
                items.forEach((item) => {
                    const content = item.querySelector(".why-choose-accordion__content");
                    if (item.classList.contains("is-open")) {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
        }
    });
</script> -->