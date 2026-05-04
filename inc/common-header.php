<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Travel Experience</title>
    <!-- favicon -->
    <link rel="icon" type="image/svg+xml" href="favicon/mountain.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet" />
    <!-- Local compiled CSS for PHP/XAMPP runtime -->
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <!-- Vite CSS for development (works when `npm run dev` is running) -->
    <link rel="stylesheet" href="http://localhost:5173/css/main.css">
    <!-- Fancy app installation -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
    <!-- Swiper Installation -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css">



    <style>
        @font-face {
            font-family: 'icomoon';
            src: url('fonts/icomoon.eot?8s0nn5');
            src: url('fonts/icomoon.eot?8s0nn5#iefix') format('embedded-opentype'),
                url('fonts/icomoon.ttf?8s0nn5') format('truetype'),
                url('fonts/icomoon.woff?8s0nn5') format('woff'),
                url('fonts/icomoon.svg?8s0nn5#icomoon') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: block;
        }

        [class^="icon-"],
        [class*=" icon-"] {
            /* use !important to prevent issues with browser extensions that change fonts */
            font-family: 'icomoon' !important;
            speak: never;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;

            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .icon-tag:before {
            content: "\e947";
        }

        .icon-linkedin:before {
            content: "\e948";
        }

        .icon-zoom-icon:before {
            content: "\e946";
        }

        .icon-tiktok:before {
            content: "\e940";
        }

        .icon-youtube:before {
            content: "\e941";
        }

        .icon-pinterest:before {
            content: "\e942";
        }

        .icon-x:before {
            content: "\e943";
        }

        .icon-instagram:before {
            content: "\e944";
        }

        .icon-facebook:before {
            content: "\e945";
        }

        .icon-nav-equipment:before {
            content: "\e934";
        }

        .icon-nav-addon:before {
            content: "\e937";
        }

        .icon-nav-cost:before {
            content: "\e938";
        }

        .icon-nav-information:before {
            content: "\e939";
        }

        .icon-nav-review:before {
            content: "\e93a";
        }

        .icon-nav-faqs:before {
            content: "\e93b";
        }

        .icon-nav-availability:before {
            content: "\e93c";
        }

        .icon-nav-map:before {
            content: "\e93d";
        }

        .icon-nav-gallery:before {
            content: "\e93e";
        }

        .icon-nav-overview:before {
            content: "\e93f";
        }

        .icon-max-altitude:before {
            content: "\e932";
        }

        .icon-accommodation:before {
            content: "\e933";
        }

        .icon-calendar-lines:before {
            content: "\e935";
        }

        .icon-distance:before {
            content: "\e936";
        }

        .icon-meal:before {
            content: "\e930";
        }

        .icon-transportation:before {
            content: "\e92f";
            color: #000;
        }

        .icon-exclude-icon:before {
            content: "\e931";
            color: #6ea8dc;
        }

        .icon-arrow-left:before {
            content: "\e92e";
        }

        .icon-minus:before {
            content: "\e92d";
        }

        .icon-green-circle:before {
            content: "\e929";
            color: #2aaa6f;
        }

        .icon-star-rate:before {
            content: "\e92a";
        }

        .icon-nav-itinerary:before {
            content: "\e92b";
        }

        .icon-play-button:before {
            content: "\e92c";
        }

        .icon-dropdown:before {
            content: "\e928";
        }

        .icon-x-mark:before {
            content: "\e900";
        }

        .icon-arrow-right:before {
            content: "\e901";
        }

        .icon-back:before {
            content: "\e902";
        }

        .icon-best-time:before {
            content: "\e903";
        }

        .icon-binoculars:before {
            content: "\e904";
        }

        .icon-calendar:before {
            content: "\e905";
        }

        .icon-circle-dollar-sign:before {
            content: "\e906";
        }

        .icon-close:before {
            content: "\e907";
        }

        .icon-correct:before {
            content: "\e908";
        }

        .icon-duration:before {
            content: "\e909";
        }

        .icon-envelope:before {
            content: "\e90a";
        }

        .icon-footprints:before {
            content: "\e90b";
        }

        .icon-goggles:before {
            content: "\e90c";
        }

        .icon-group-size:before {
            content: "\e90d";
        }

        .icon-lower-body:before {
            content: "\e90e";
        }

        .icon-mail:before {
            content: "\e90f";
        }

        .icon-medicine:before {
            content: "\e910";
        }

        .icon-milestone:before {
            content: "\e911";
        }

        .icon-mis:before {
            content: "\e912";
        }

        .icon-passport .path1:before {
            content: "\e913";
            color: rgb(28, 39, 77);
        }

        .icon-passport .path2:before {
            content: "\e914";
            margin-left: -1em;
            color: rgb(142, 147, 166);
        }

        .icon-passport .path3:before {
            content: "\e915";
            margin-left: -1em;
            color: rgb(28, 39, 77);
        }

        .icon-passport .path4:before {
            content: "\e916";
            margin-left: -1em;
            color: rgb(142, 147, 166);
        }

        .icon-phone:before {
            content: "\e917";
        }

        .icon-place:before {
            content: "\e918";
        }

        .icon-plus:before {
            content: "\e919";
        }

        .icon-route:before {
            content: "\e91a";
        }

        .icon-searchicon:before {
            content: "\e91b";
        }

        .icon-send:before {
            content: "\e91c";
        }

        .icon-share:before {
            content: "\e91d";
        }

        .icon-shield-check:before {
            content: "\e91e";
        }

        .icon-splotch:before {
            content: "\e91f";
        }

        .icon-start:before {
            content: "\e920";
        }

        .icon-time-quarter-to:before {
            content: "\e921";
        }

        .icon-travel-style:before {
            content: "\e922";
        }

        .icon-trip-grade:before {
            content: "\e923";
        }

        .icon-upper-body:before {
            content: "\e924";
        }

        .icon-view:before {
            content: "\e925";
        }

        .icon-wave-hand:before {
            content: "\e926";
        }

        .icon-whatapp:before {
            content: "\e927";
        }
    </style>
</head>

<body>
