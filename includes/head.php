<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <?php
  // Get the current page name
  $current_page = basename($_SERVER['PHP_SELF']);
  ?>

  <!-- HTML Meta Tags -->
  <title><?php echo $meta_title; ?></title>
  <?php
  $noindexPages = [
    '2d-animation.php',
    'android-app-development-services.php',
    'app-development-technology.php',
    'iot-networking-services.php',
    'ai-e-commerce.php',
    'online-reputataion-management.php',
    'branding-dubai.php',
    'seo-consultancy.php',
    'ppc-marketing-company.php',
    'facebook-instagram-marketing-dubai.php',
    'branding-consultancy.php',
    'email-marketing-agency.php',
    'content-marketing.php',
    'website-designer.php',
    'seo-agency-dubai.php',
    'digital-marketing-agency-dubai.php',
    'ai-chatbot.php',
    'B2B-marketing.php',
    'ppc-niche-design.php',
    'adword-niche-design.php',
    'logo-design-niche.php',
    'app-development-niche-design.php',

  ];

  if (in_array($current_page, $noindexPages)) {
    echo '<meta name="robots" content="noindex, nofollow">', "\n";
  } else {
    echo '<meta name="robots" content="index, follow">', "\n";
  }
  ?>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="keywords" content="<?php echo $keyword; ?>">
  <link rel="canonical" href="https://html.themegenix.com" />
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="icon" type="image/png" sizes="32x32" href="assests/images/fav-icon.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assests/images/fav-icon.png">
  <meta name="theme-color" content="#ffffff">
  <!--==============================
      Google Fonts
    ============================== -->
  <!-- Roboto Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

  <!-- Montserrat Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!--==============================
        All CSS File
    ============================== -->
  <link rel="stylesheet" href="frisk/assets/css/bootstrap.min.css">
  <!-- Assest Inner  -->

  <link rel="stylesheet" href="./assests/css/utilities.css" />
  <link rel="stylesheet" href="./assests/css/style.css" />
  <link rel="stylesheet" href="./assests/css/service.css">
  <link rel="stylesheet" href="./assests/css/responsive.css" />
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="frisk/assets/css/style.css">
  <!-- Slider Css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css"
    integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://appdigits.com/assets/css/account.css" rel="stylesheet">
  <link href="https://appdigits.com/assets/css/slick.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <style>
    html {
      scroll-behavior: smooth;
    }

    .log-bef:before {
      content: '';
      position: absolute;
      background: url(frisk/assets/img/header-1.png);
      width: 709px;
      height: 865px;
      background-size: 97%;
      left: auto;
      right: auto;
      top: 0%;
      z-index: 1;
      margin-top: -18px;
    }

    .services {
      overflow: hidden;
    }

    a.hedr-phone:before {
      content: '';
      position: absolute;
      background-image: url(assests/images/telephone.png) !important;
      width: 17px;
      height: 17px;
      margin-left: -25px;
      background-size: 100% !important;
      margin-top: 4px;
    }

    .servicess-section {
      background-image: url(assests/images/serice-bg.png);
      background-position: 20px 70px;
      background-size: 100%;
      background-repeat: no-repeat;
    }

    .project-in-mind a:before {
      content: '';
      position: absolute;
      background: url(assests/images/right-arrow-mind.png) no-repeat;
      width: 68px;
      height: 68px;
      right: -2%;
      margin-top: -15px;
      z-index: 4;
    }

    #project-in-minds .main-tow-btn a:before {
      background: url(assests/images/phon-icon.png) no-repeat;
    }

    .quwstion .panel ul li:before {
      content: '';
      position: absolute;
      background: url(assests/images/arrow-icon.png) no-repeat;
      width: 13px;
      height: 14px;
      margin-left: -17px;
      margin-top: 5px;
    }

    .industries-slider .swiper-pagination span.swiper-pagination-bullet:nth-child(1) {
      background: url(assests/images/health-pagi.png) no-repeat;
    }

    .industries-slider .swiper-pagination span.swiper-pagination-bullet:nth-child(2) {
      background: url(assests/images/ecommerce.png) no-repeat;
    }

    .industries-slider .swiper-pagination span.swiper-pagination-bullet:nth-child(3) {
      background: url(assests/images/digital.png) no-repeat;
    }

    .industries-slider .swiper-pagination span.swiper-pagination-bullet:nth-child(4) {
      background: url(assests/images/travel-transport.png) no-repeat;
    }

    .industries-slider .swiper-button-prev:after {
      content: '';
      background: url(assests/images/arrow-left.png) no-repeat;
      width: 73px;
      height: 54px;
    }

    .industries-slider .swiper-button-next:after {
      content: '';
      background: url(assests/images/arrow-right.png);
      width: 73px;
      height: 54px;
    }

    .fixed-scroll-area-link li a.active:before {
      content: '';
      position: absolute;
      background: url(assests/images/arrow-icon.png) no-repeat;
      width: 13px;
      height: 14px;
      left: 41px;
      margin-top: 8px;
    }

    .fixed-scroll-area {
      position: sticky;
      top: 50px;
      /* Adjust as needed */
      width: 620px;
      bottom: auto;
    }

    .fixed-scroll-area-link li a.active:before {
      content: '';
      position: absolute;
      background: url(assests/images/arrow-icon.png) no-repeat;
      width: 13px;
      height: 14px;
      left: 41px;
      margin-top: 8px;
    }

    .custom-header-icon {
      max-width: 26px !important;
      filter: brightness(0) saturate(100%) invert(100%) sepia(99%) saturate(2%) hue-rotate(55deg) brightness(105%) contrast(100%);
    }
  </style>

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TKLQ746R');
  </script>
  <!-- End Google Tag Manager -->

  <?php if (isset($custom_schema))
    echo $custom_schema; ?>

</head>