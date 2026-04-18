<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header-top.php'); ?>
<?php include('./inc/header.php'); ?>
<?php include('./inc/breadcrumbs.php') ?>

<section class="common-box bg-secondary" role="main">
  <div class="container mx-auto px-4 py-10">
    <h1 class="package__section-title">Video Reviews</h1>

    <!-- Videos Layout -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

      <!-- LEFT SIDE -->
      <div class="h-full lg:col-span-2">
        <a href="https://www.youtube.com/watch?v=bVYJNM1Pih0&t=2s" data-fancybox="video"
          class="group block h-full">

          <div class="relative h-full overflow-hidden rounded-xl">
            <img src="/images/dynamic/hero.jpg" class="h-full w-full object-cover"
              alt="Everest Base Camp video review" />

            <div class="absolute inset-0 bg-black/40 transition group-hover:bg-black/50">

              <!-- Text -->
              <div class="absolute bottom-6 left-6 z-10 text-white">
                <h4 class="text-2xl font-semibold">Everest Base Camp</h4>
                <span class="text-sm">Jhon - Australia</span>
              </div>

              <!-- Play (non-interactive overlay, so Fancybox click stays on the <a>) -->
              <span class="pointer-events-none absolute inset-0 z-10 flex items-center justify-center" aria-hidden="true">
                <span class="icon-play-button text-5xl text-white"></span>
              </span>
            </div>
          </div>
        </a>
      </div>

      <!-- RIGHT SIDE -->
      <div class="flex h-full flex-col gap-6">

        <!-- Video 2 -->
        <a href="https://www.youtube.com/watch?v=irvZaxT6L3A&t=15s" data-fancybox="video"
          class="group block flex-1">

          <div class="relative h-full overflow-hidden rounded-xl">
            <img src="/images/dynamic/hero3.jpg" class="h-full w-full object-cover"
              alt="Namche Trekking video review" />

            <div class="absolute inset-0 bg-black/40 transition group-hover:bg-black/50">

              <div class="absolute bottom-4 left-4 z-10 text-white">
                <h4 class="text-lg font-semibold">Travel Nepal</h4>
                <span class="text-xs">John - Australia</span>
              </div>

              <span class="pointer-events-none absolute inset-0 z-10 flex items-center justify-center" aria-hidden="true">
                <span class="icon-play-button text-4xl text-white"></span>
              </span>
            </div>
          </div>
        </a>

        <!-- Video 3 -->
        <a href="https://www.youtube.com/watch?v=irvZaxT6L3A&t=15s" data-fancybox="video"
          class="group block flex-1">

          <div class="relative h-full overflow-hidden rounded-xl">
            <img src="/images/dynamic/heroo.jpg" class="h-full w-full object-cover"
              alt="Phakding to Everest Base Camp video review" />

            <div class="absolute inset-0 bg-black/40 transition group-hover:bg-black/50">

              <div class="absolute bottom-4 left-4 z-10 text-white">
                <h4 class="text-lg font-semibold">Things to Do in Nepal</h4>
                <span class="text-xs">John - Australia</span>
              </div>

              <span class="pointer-events-none absolute inset-0 z-10 flex items-center justify-center" aria-hidden="true">
                <span class="icon-play-button text-4xl text-white"></span>
              </span>
            </div>
          </div>
        </a>

      </div>

    </div>
  </div>
</section>

<?php include('./inc/footer.php'); ?>
