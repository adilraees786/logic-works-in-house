<?php
$meta_title = "Logic Works | Leading Digital Agency in Dubai, UAE";
$meta_description = "Logic Works is a top digital agency in Dubai, UAE, delivering web development, app development, and full-scale marketing for UAE businesses. Book a free consultation.";
$keyword = 'logic work';
$canonical = "https://logicworks.ae/";

$custom_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Logic Works",
  "image": "",
  "@id": "",
  "url": "https://logicworks.ae/",
  "telephone": "+971 52 950 2258",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "PINNACLE - Sheikh Zayed Rd - Al Barsha 1",
    "addressLocality": "Dubai",
    "postalCode": "",
    "addressCountry": "AE"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.instagram.com/logicworks.ae/",
    "https://www.facebook.com/LogicWorksae"
  ] 
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Logic Works",
  "url": "https://logicworks.ae/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://logicworks.ae/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Logic Works",
  "alternateName": "Logic Works Information Technology LLC",
  "url": "https://logicworks.ae/",
  "logo": "https://logicworks.ae/assests/images/head-logo.webp"
}
</script>
';
include("includes/head.php");
include("includes/header.php");

?>


<!--======== / Hero Section ========-->
<div class="index-page hero-section" id="hero-sec">
    <div class="container">
        <div class="hero-style7 text-center">
            <div class="row justify-content-space-between hero-row">
                <img src="frisk/assets/img/header-1.webp" alt="index-hero-img" class="for-mobe" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                <div class="col-lg-6 col-md-6 log-bef">
                    <h2 class="hero-title wow img-custom-anim-top text-smoke">LOGIC</h2>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h2 class="hero-title wow img-custom-anim-top text-smoke text-center">WORKS</h2>
                </div>
            </div>

            <div class="row justify-content-space-between color-main testimonial-area-1">
                <div class="col-lg-6 col-md-6">
                    <div class="sub-contetn our-idea">
                        <h1 class="robo-font text-start" style="max-width: 400px;">Digital Agency in UAE for What Comes Next</h1>
                        <p class=" text-start feature-card-text text-white">As a leading digital agency in UAE, Logic Works builds industry-grade apps, high-converting websites, and AI-powered marketing systems that turn ambitious GCC brands into market leaders.</p>
                        <!-- <div>
                            <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                            <a href="#" id="openPopup" style="color: #fff;">Get A Quote</a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 web-dev" data-aos="fade-up">
                    <div class="sub-contetn">
                        <h2 class="robo-font text-start">SEIZE THE FUTURE OF <span>DIGITALIZATION WITH</span> LOGIC
                            WORKS</h2>
                        <p class="text-end feature-card-text">Businesses trust us for our ability to deliver
                            industry-grade apps, websites, and full-scale marketing services.</p>
                        <a href="#" id="openPopup">Book A Free Consultation Today!</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-space-between color-main three-colss">
                <div class="col-lg-6 col-md-6 animate__fadeInLeft" data-aos="fade-up">
                    <div class="d-flex">
                        <div class="img-main">
                            <img src="frisk/assets/img/experi.webp" alt="index-experi" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260" />
                        </div>
                        <div class="txt-main">
                            <h3 class="text-start text-white">150+</h3>
                            <h4 class="text-start text-white">Projects Delivered</h4>
                            <p class="text-start">Blending technology and design to set new digital standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" id="ar-main" data-aos="fade-up">
                    <h4 class="text-start text-white">ART & <b>DESIGN</b></h4>
                    <p class="text-start">Bold visuals and futuristic concepts for a new digital era.</p>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <h2 class="text-start text-white">5+</h2>
                    <h3 class="text-start text-white"><strong>Years in the UAE Market</strong> <br> Delivering digital solutions across the Emirates & GCC.</h3>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- <div class="hero-section" id="hero-sec">
        <div class="container">
            <div class="hero-style7 text-center">
            <div class="row justify-content-space-between hero-row">
                <img src="frisk/assets/img/header-1.png" class="for-mobe">
                <div class="col-lg-6 col-md-6 log-bef">
                    <h1 class="hero-title wow img-custom-anim-top text-smoke">LOGIC</h1>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h1 class="hero-title wow img-custom-anim-top text-smoke text-center">WORKS</h1>
                </div>
            </div>

            <div class="row justify-content-space-between color-main testimonial-area-1">
                <div class="col-lg-6 col-md-6">
                <div class="sub-contetn our-idea">
                        <h2 class="robo-font text-start">OUR IDEA?</h2>
                        <div class="px-5">
                          <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                        <a href="#" id="openPopup" style="color: #fff;">Get A Quote</a>
                    </div>
                    </div>                    
                </div>
                <div class="col-lg-6 col-md-6 web-dev" data-aos="fade-up">
                    <div class="sub-contetn">
                        <h2 class="robo-font text-start">SEIZE THE FUTURE OF <span>DIGITALIZATION WITH</span> LOGIC WORKS</h2>
                        <p class="text-end feature-card-text">Businesses trust us for our ability to deliver industry-grade apps, websites, and full-scale marketing services.</p>
                        <a href="#">Book A Free Consultation Today!</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-space-between color-main three-colss">
                <div class="col-lg-6 col-md-6 animate__fadeInLeft" data-aos="fade-up">
                    <div class="d-flex">
                        <div class="img-main">
                            <img src="frisk/assets/img/experi.png"/>
                        </div>
                        <div class="txt-main">
                            <h3 class="text-start text-white">76,285K+</h3>
                            <h4 class="text-start text-white">Shaping the Future</h4>
                            <p class="text-start">Blending technology and design to set new digital standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" id="ar-main" data-aos="fade-up">
                    <h4 class="text-start text-white">ART & <b>DESIGN</b></h4>
                    <p class="text-start">Bold visuals and futuristic concepts for a new digital era.</p>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <h2 class="text-start text-white">17+</h2>
                    <h3 class="text-start text-white">Delivering trailblazing digital solutions for over 17 years.</h3>
                </div>

            </div>
            </div>
        </div>
    </div> -->

<!--======== / Service Slider ========-->
<section class="services animate" style="background-size:0;" data-delay="0s"
    style="animation: 0.5s ease-out 0s 1 normal forwards running anim;">
    <video class="background-video home-bg-video" autoplay="" muted="" loop="">
        <source src="assests/images/final-one.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <section class="services__wrap h-service">
        <div class="services__items translateX-parent">
            <div class="line-heading translateX-right " style="transform: translate3d(157.629px, 0px, 0px);">
                <h3 class="outline-text ">
                    Services </h3>
            </div>
            <div class="services-thumb-slider-wrapper">
                <div
                    class="services-thumb-slider swiper swiper-initialized swiper-vertical swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-101022471084cebcb9c" aria-live="polite"
                        style="transition-duration: 0ms; transform: translate3d(0px, 26.6px, 0px);">
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 8"
                            style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>Web Development</a>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 8"
                            style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>AI Powered Mobile Application</a>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 8"
                            style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>AI Automation Services</a>

                                </h2>
                            </div>
                        </div>
                        <!--    <div class="swiper-slide" role="group" aria-label="4 / 8" style="height: 26.6px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a>Digital Branding &amp;
                                            Communication</a>
                                    </h2>
                                </div>
                            </div> -->
                        <div class="swiper-slide" role="group" aria-label="5 / 8" style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>Digital Marketing</a>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="6 / 8" style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>UI/UX Design</a>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="7 / 8" style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>Video Animation</a>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="7 / 8" style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>AI-powered CRM</a>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="7 / 8" style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>

                                    <a>Ecommerce Web Development</a>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="7 / 8" style="height: 26.6px;">
                            <div class="service-thumb__head">
                                <h2>
                                    <a>AI for Business Intelligence & Analytics</a>
                                </h2>
                            </div>
                        </div>
                        <!--        <div class="swiper-slide" role="group" aria-label="8 / 8" style="height: 26.6px;">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a>IT Resource Outsourcing</a>
                                    </h2>
                                </div>
                            </div> -->
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="scroll-text">
                    <span class="mouse">
                        <span class="move"></span>
                    </span>
                    <span class="head">Scroll</span>
                </div>
            </div>
            <div
                class="services-slider swiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-935aa6bff8fbfe96" aria-live="polite"
                    style="transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 8"
                        style="width: 1349px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!-- Web Development image -->
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/services/service-bg.webp" alt="index-web"
                                            src="assests/images/services/service-bg.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg d-none">
                                        <img class="" data-src="services/webdevelopment-bg.webp" alt=""
                                            src="services/webdevelopment-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="2 / 8"
                        style="width: 1349px; opacity: 1; transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!-- Mobile Application Image -->
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/services/App-development.webp" alt="index-mobile"
                                            src="assests/images/services/App-development.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg d-none">
                                        <img class="" data-src="services/mobile-application-bg.webp"
                                            alt="" src="services/mobile-application-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 8"
                        style="width: 1349px; opacity: 0; transform: translate3d(-2698px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!-- Ai-Automation Image -->
                                        <img class="" data-class="lazy-img" data-src="assests/images/aI-Automation.webp"
                                            alt="ai-automation" style="width: 440px; height:440px; margin-left:100px;"
                                            src="assests/images/aI-Automation.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>

                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg">
                                        <img class="" data-src="services/digital-marketing-bg.webp"
                                            alt="" src="services/digital-marketing-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 8"
                        style="width: 1349px; opacity: 0; transform: translate3d(-4047px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/services/Digital-marketing-service.webp"
                                            alt="index-digital"
                                            src="assests/images/services/Digital-marketing-service.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>

                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg">
                                        <img class="" data-src="services/digital-branding-bg.webp"
                                            alt="" src="services/digital-branding-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 8"
                        style="width: 1349px; opacity: 0; transform: translate3d(-5396px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!-- UI UX Image -->
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/services/ui-ux-design.webp" alt="index-uiux"
                                            src="assests/images/services/ui-ux-design.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg">
                                        <img class="" data-src="services/ecommerce-development-bg.webp"
                                            alt="" src="services/ecommerce-development-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <!--  <div class="swiper-slide" role="group" aria-label="6 / 8"
                            style="width: 1349px; opacity: 0; transform: translate3d(-6745px, 0px, 0px); transition-duration: 0ms;">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img class="" data-class="lazy-img"
                                                data-src="services/ui-ux-design.webp" alt=""
                                                src="services/ui-ux-design.webp">
                                        </div>
                                      
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="javascript:" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="/assets/svg/anchor-arrow.svg">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg">
                                        <img class="" data-src="services/ui-ux-design-bg.webp" alt=""
                                            src="services/ui-ux-design-bg.webp">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- <div class="swiper-slide" role="group" aria-label="7 / 8"
                            style="width: 1349px; opacity: 0; transform: translate3d(-8094px, 0px, 0px); transition-duration: 0ms;">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img class="" data-class="lazy-img"
                                                data-src="services/ui-ux-design.webp" alt=""
                                                src="services/ui-ux-design.webp">
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="javascript:" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                    src="/assets/svg/anchor-arrow.svg">
                                                    <style type="text/css">
                                                        .st0 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                    <path class="st0"
                                                        d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg">
                                        <img class="" data-src="services/video-animation-bg.webp" alt=""
                                            src="services/video-animation-bg.webp">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <div class="swiper-slide" role="group" aria-label="8 / 8"
                        style="width: 1349px; opacity: 0; transform: translate3d(-9443px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!-- Video Animation -->
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/services/video-animation.webp"
                                            alt="index-video-animation"
                                            src="assests/images/services/video-animation.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg">
                                        <img class="" data-src="services/it-resource-bg.webp" alt=""
                                            src="services/it-resource-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="8 / 8"
                        style="width: 1349px; opacity: 0; transform: translate3d(-9443px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!--AI Powered crm-->
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/AI-powered-CRM.webp" alt="index-ai-crm"
                                            style="width: 640px; height:640px;  margin-left:10px;"
                                            src="assests/images/AI-powered-CRM.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg">
                                        <img class="" data-src="services/it-resource-bg.webp" alt=""
                                            src="services/it-resource-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="8 / 8"
                        style="width: 1349px; opacity: 0; transform: translate3d(-9443px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!--E-commerce-->
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/services/Ecomemrce-web-Service.webp"
                                            alt="index-ecommerce"
                                            src="assests/images/services/Ecomemrce-web-Service.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg">
                                        <img class="" data-src="services/it-resource-bg.webp" alt=""
                                            src="services/it-resource-bg.webp">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="8 / 8"
                        style="width: 1349px; opacity: 0; transform: translate3d(-9443px, 0px, 0px); transition-duration: 0ms;">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <!--AI-for-Business-->
                                        <img class="" data-class="lazy-img"
                                            data-src="assests/images/AI-for-Business.webp" alt="index-ai-for-business"
                                            style="width: 440px; height:440px; margin-left:100px;"
                                            src="assests/images/AI-for-Business.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <svg viewBox="0 0 19 16" class="svg-convert svg-converted"
                                                src="/assets/svg/anchor-arrow.svg" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #FFFFFF;
                                                    }
                                                </style>
                                                <path class="st0" d="M16.2,7.2l0,1.8L1.1,9.3l0-1.8L16.2,7.2z"></path>
                                                <path class="st0"
                                                    d="M11,13.1l-1.1-1.4L14.7,8l-5-3.6l1-1.5l6.8,5.2L11,13.1z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="service-item__bg">
                                        <img class="" data-src="services/it-resource-bg.webp" alt=""
                                            src="services/it-resource-bg.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                    </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
</section>

<!-- Industries section -->
<section class="industries-section section-bg pt-b-80" id="industrysss">
    <div class="container">
        <div class="row justify-content-space-between">
            <div class="col">
                <h2 class="text-white text-end" data-aos="fade-up">INDUSTRIES</h2>
                <!-- Swiper -->
                <div class="industries-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row justify-content-space-between">
                                <div class="col-lg-5 img-sliderr"
                                    style="background-image: url(assests/images/industires-bg.webp);">
                                    <img src="assests/images/Health-web.webp" alt="index-health" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                </div>
                                <div class="col-lg-7 txt-indu-slider">
                                    <h3 class="text-white">Healthcare</h3>
                                    <p class="text-white">The healthcare industry is rapidly evolving, with a projected
                                        38% growth in telehealth services by 2026. Our digital solutions empower
                                        patients and make healthcare more efficient, tailored, and accessible.</p>
                                    <a href="#">Let's Start Your Project</a>
                                    <div class="paly-apple">
                                        <img src="assests/images/play-store.webp" alt="play-store">
                                        <img src="assests/images/apple-store.webp" alt="appple-store">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row justify-content-space-between">
                                <div class="col-lg-5 img-sliderr"
                                    style="background-image: url(assests/images/industires-bg.webp);">
                                    <img src="assests/images/Ecomemrce-Design.webp" alt="index-ecommerce" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                </div>
                                <div class="col-lg-7 txt-indu-slider">
                                    <h3 class="text-white">Technology</h3>
                                    <p class="text-white">With global tech spending approaching $4 trillion next year,
                                        we're here to help you stay ahead. By integrating advanced technologies, we
                                        refine your processes and boost productivity to drive innovation and success.
                                    </p>
                                    <a href="#">Let's Start Your Project</a>
                                    <div class="paly-apple">
                                        <img src="assests/images/play-store.webp" alt="play-store">
                                        <img src="assests/images/apple-store.webp" alt="appple-store">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row justify-content-space-between">
                                <div class="col-lg-5 img-sliderr"
                                    style="background-image: url(assests/images/industires-bg.webp);">
                                    <img src="assests/images/Digitalweb-Design.webp" alt="index-digi-web" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                </div>
                                <div class="col-lg-7 txt-indu-slider">
                                    <h3 class="text-white">Education</h3>
                                    <p class="text-white">At Logic Work, we empower education with digital tools and
                                        resources to inspire change, with e-learning expected to exceed $375 billion by
                                        2026. Our tailored solutions enhance engagement, accessibility, and flexibility,
                                        preparing young people and educators for success in dynamic environments</p>

                                    <a href="#">Let's Start Your Project</a>
                                    <div class="paly-apple">
                                        <img src="assests/images/play-store.webp" alt="play-store">
                                        <img src="assests/images/apple-store.webp" alt="appple-store">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row justify-content-space-between">
                                <div class="col-lg-5 img-sliderr"
                                    style="background-image: url(assests/images/industires-bg.webp);">
                                    <img src="assests/images/Travel-web.webp" alt="index-travel" loading="lazy" decoding="async" fetchpriority="high" loading="eager" width="200" height="260">
                                </div>
                                <div class="col-lg-7 txt-indu-slider">
                                    <h3 class="text-white">Travel & Transport</h3>
                                    <p class="text-white">As the tourism sector recovers, aiming for 1.8 billion
                                        international arrivals by 2030, we provide tailored, smooth experiences for all
                                        travelers. Our offerings improve customer happiness, enhance operational
                                        efficiency, and promote eco-friendly travel, leading to a sustainable, hopeful
                                        future in the travel industry.</p>

                                    <a href="#">Let's Start Your Project</a>
                                    <div class="paly-apple">
                                        <img src="assests/images/play-store.webp" alt="play-store">
                                        <img src="assests/images/apple-store.webp" alt="appple-store">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES WE EXCEL IN -->
<section class="servicess-section section-bg pt-b-80">
    <div class="container" style="display:block;">
        <div class="row justify-content-space-between servicess-row-one">
            <div class="col-lg-7 col-md-6" data-aos="fade-up">
                <h2 class="robo-font text-start callout-title">We Build Your Complete Digital Arsenal!</h2>
                <p class="text-start feature-card-text">As a full-service digital agency in UAE, we help startups and growing businesses across UAE and the wider GCC maximize their potential. Our end-to-end digital services from conversion-focused websites and React Native mobile apps to SEO, PPC, and AI automation turn occasional visitors into loyal, paying clients. Through strategic email marketing, conversion rate optimization, and data-driven campaigns, we strengthen customer connections, build lasting brand visibility, and consistently boost sales by up to 20%. Partner with Logic Works for measurable, long-term growth.</p>
                <div class="live-chat-btns">
                    <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <img src="assests/images/SERVICES-WE-icon.webp" alt="index-service-001" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
            </div>
        </div>

        <div class="row justify-content-center service-offer-inner">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/app-development.webp"
                                data-src="./assests/images/app-development.webp" alt="Mobile App" width="50" height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager"
                                class="img-fluid">
                        </div>
                        <h4 class="heading-six">App <br>Development</h4>
                    </div>
                    <div class="offer-box-content">
                        <p>Custom app development can help elevate your business. At our team, we design mobile
                            applications that are easy to use, increase customer engagement, and simplify business
                            operations to help it grow.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/PPC-Advertising.webp"
                                data-src="./assests/images/PPC-Advertising.webp" alt="IOS App" width="50" height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager"
                                class="img-fluid">
                        </div>
                        <h4 class="heading-six">PPC <br>Advertising</h4>
                    </div>
                    <div class="offer-box-content">
                        <p>Get targeted PPC advertising to maximize your ROI. We run data-driven strategies that attract
                            qualified leads, drive traffic to your website, and convert more.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/Search-Engine.webp"
                                data-src="./assests/images/Search-Engine.webp" alt="Android App" width="50" height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager"
                                class="img-fluid">
                        </div>
                        <h4 class="heading-six">Search Engine <br>Optimization</h4>
                    </div>
                    <div class="offer-box-content">
                        <p>Want your website to be more prominent in search results? We give you more traffic, improve
                            your rankings, and help increase your online presence.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="assests/images/aI-Automation.webp" data-src="assests/images/aI-Automation.webp"
                                alt="Prototype" width="50" height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid">
                        </div>
                        <h4 class="heading-six"> AI Automation <br>Services</h4>
                    </div>

                    <div class="offer-box-content">
                        <p>Our AI-powered CRM solutions help you understand your customers better and build stronger
                            relationships. By using intelligent data analysis and automation, our system predicts
                            customer behavior, personalizes communication, and ensures no lead is ever missed—giving
                            your sales and support teams a powerful edge.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/AI-powered-CRM.webp"
                                data-src="./assests/images/AI-powered-CRM.webp" alt="MVP App" width="50" height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager"
                                class="img-fluid">
                        </div>
                        <h4 class="heading-six">AI-powered<br>CRM</h4>
                    </div>

                    <div class="offer-box-content">
                        <p>Our AI-powered CRM solutions help you understand your customers better and build stronger
                            relationships. By using intelligent data analysis and automation, our system predicts
                            customer behavior, personalizes communication, and ensures no lead is ever missed—giving
                            your sales and support teams a powerful edge.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/game-Deve.webp" data-src="./assests/images/game-Deve.webp"
                                alt="Game App" width="50" height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid">
                        </div>
                        <h4 class="heading-six">Video <br>Animation</h4>
                    </div>
                    <div class="offer-box-content">
                        <p>Stunning <a href="<?php echo $base_url; ?>video-animation">video animation</a> that captures attention. Through our creative team video production,
                            we create engaging videos that help communicate your brand message and provide great value
                            to your online marketing.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/UI-UX-Design.webp" data-src="./assests/images/UI-UX-Design.webp"
                                alt="NFT App" width="50" height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid">
                        </div>
                        <h4 class="heading-six">UI/UX <br>Design</h4>
                    </div>
                    <div class="offer-box-content">
                        <p>We will help optimize your digital experience with our <a href="<?php echo $base_url; ?>ui-ux-design-company-dubai">UI/UX design service</a>. We provide a
                            professional and attractive looking user interface.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/AI-for-Business.webp"
                                data-src="./assests/images/AI-for-Business.webp" alt="Wearable App" width="50"
                                height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid">
                        </div>
                        <h4 class="heading-six">AI for Business <br>Intelligence & Analytics</h4>
                    </div>
                    <div class="offer-box-content">
                        <p>Leverage the power of AI for Business Intelligence & Analytics to turn raw data into
                            actionable insights. Our AI-driven solutions analyze patterns, forecast trends, and provide
                            real-time reporting—empowering your business to make smarter, faster, and data-backed
                            decisions with confidence.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-offer-box">
                    <div class="offer-box-head">
                        <div class="offer-box-img">
                            <img src="./assests/images/web-development.webp"
                                data-src="./assests/images/web-development.webp" alt="Machine Learning" width="50"
                                height="50" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid">
                        </div>
                        <h4 class="heading-six">Web <br>Development</h4>
                    </div>
                    <div class="offer-box-content">
                        <p>Our <a href="<?php echo $base_url; ?>web-development-agency">web development services</a> transform your online presence. We aim to build responsive and
                            user-friendly websites that bring unique value to our customers, engaging and converting
                            them.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container hover-image-cont mt-5">
            <div class="row justify-content-between tabs-roww">
                <div class="col">
                    <h2 class="text-center">CHECK OUT OUR <span>PORTFOLIO!</span></h2>

                    <!-- Tabs -->
                    <div class="tab-wrapper text-center mb-4">
                        <button class="tablinks active" data-tab="app">APP</button>
                        <button class="tablinks" data-tab="web">WEB</button>

                    </div>

                    <!-- APP Tab Content -->
                    <div id="app" class="tabcontent" style="display: block;">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/App-1.webp" alt="mobile-app-0001" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/App-2.webp" alt="mobile-app-002" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/App-3.webp" alt="mobile-app-003" loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/App-6.webp" alt="mobile-app-004"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/App-7.webp" alt="mobile-app-005"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/App-8.webp" alt="mobile-app-006"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/App-9.webp" alt="mobile-app-007"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/app-10.webp" alt="mobile-app-008"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/app-11.webp" alt="mobile-app-009"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- WEB Tab Content -->
                    <div id="web" class="tabcontent" style="display: none;">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-001.webp" alt="index-web-001"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-002.webp" alt="index-web-002"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-003.webp" alt="index-web-003"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-004.webp" alt="index-web-004"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-005.webp" alt="index-web-005"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-006.webp" alt="index-web-006"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-007.webp" alt="index-web-007"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-008.webp" alt="index-web-008"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-009.webp" alt="index-web-009"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-010.webp" alt="index-web-0010"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-011.webp" alt="index-web-0012"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="screen">
                                    <img src="assests/images/landing-pages/design-012.webp" alt="index-web-0013"
                                        loading="lazy" decoding="async" fetchpriority="high" loading="eager" class="img-fluid mt-3">
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="text-center mt-4">
                        <!-- <button id="toggle-button" class="btn btn-outline-primary">Load More</button> -->
                    </div> 
                </div>
            </div>
        </div>
</section>
<section style="background-color:#000; padding: 50px 0 70px 0;">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center mb-50">
            <div class="col-lg-12">
                <h2 class="text-white same-all text-center">WHAT OUR CLIENTS HAVE TO SAY</h2>
            </div>
        </div>

        <div class="testimonials-wrapper">
            <div class="testimonials-slider" id="testimonialsSlider">
                <!-- Slide 1 -->
                <div class="testimonial-slide-item">
                    <div class="testimonial-video-box">
                        <div class="video-container">
                            <video src="assests/videos/Deb-Review.mp4" controls preload="metadata"></video>
                        </div>
                        <div class="testimonial-content">
                            <h5>AI-Powered CRM Solutions</h5>
                            <p>Struggling to manage multiple businesses? Logic Works makes it simple with an AI-Powered CRM and Mobile App.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="testimonial-slide-item">
                    <div class="testimonial-video-box">
                        <div class="video-container">
                            <video src="assests/videos/Gina-Review.mp4" controls preload="metadata"></video>
                        </div>
                        <div class="testimonial-content">
                            <h5>Professional Website Solutions</h5>
                            <p>Build a professional website with reputation and community tools to grow your brand online.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="testimonial-slide-item">
                    <div class="testimonial-video-box">
                        <div class="video-container">
                            <video src="assests/videos/John-Review.mp4" controls preload="metadata"></video>
                        </div>
                        <div class="testimonial-content">
                            <h5>Ecommerce & AI Solutions</h5>
                            <p>Sell smarter with an Ecommerce WebApp, AI inventory, and digital marketing. Logic Works can help!</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="testimonial-slide-item">
                    <div class="testimonial-video-box">
                        <div class="video-container">
                            <video src="assests/videos/Testimonial4.mp4" controls preload="metadata"></video>
                        </div>
                        <div class="testimonial-content">
                            <h5>Custom Mobile App Development</h5>
                            <p>Need to streamline complex workflows? Custom web projects with multiple dashboards make it easy with Logic Works.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="testimonial-slide-item">
                    <div class="testimonial-video-box">
                        <div class="video-container">
                            <video src="assests/videos/Testimonial5.mp4" controls preload="metadata"></video>
                        </div>
                        <div class="testimonial-content">
                            <h5>Smart Mobile App Solutions</h5>
                            <p>Want to build powerful mobile apps that keep your business connected, efficient, and ready to grow? Let Logic Works bring your idea to life!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="testimonials-nav testimonials-nav-prev" id="testiPrevBtn" aria-label="Previous testimonial">
                <span>&#10094;</span>
            </button>
            <button class="testimonials-nav testimonials-nav-next" id="testiNextBtn" aria-label="Next testimonial">
                <span>&#10095;</span>
            </button>
        </div>
    </div>
</section>
<!-- OUR CASE -->
<section class="our-case-section section-bg pt-b-80 pt-0">
    <div class="container">
        <div class="row justify-content-space-between our-case-sec">
            <div class="col">
                <h2 class="text-center text-white">CASE STUDIES ACROSS INDUSTRIES</h2>
                <!-- Main Tabs Button -->
                <div class="row justify-content-space-between">
                    <div class="col-lg-4 col-md-6 tab-col">
                        <div class="tab">
                            <button class="tab-button" onclick="tabbtn(event, 'Real-E-tab')">Real Estate</button>
                            <button class="tab-button" onclick="tabbtn(event, 'Health-tab')">Health</button>
                            <button class="tab-button" onclick="tabbtn(event, 'Crypto-tab')">Crypto</button>
                            <button class="tab-button" onclick="tabbtn(event, 'Travel-tab')">Travel</button>
                            <button class="tab-button" onclick="tabbtn(event, 'NGO-tab')">NGO</button>
                            <button class="tab-button" onclick="tabbtn(event, 'Ecommerce-tab')">Ecommerce</button>

                        </div>
                    </div>
                    <!-- Tabs Content -->
                    <div class="col-lg-8 col-md-6 cont-coluns">
                        <div id="Health-tab" class="tab-section"
                            style="background-image: url(./assests/images/ecomemce-Case-study.webp);" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                            <div class="tab-cont">
                                <h3 class="text-white">HEALTH</h3>
                                <p class="text-white">With our expertise in healthcare technology, we solved complex
                                    problems in securing patient data and scheduling software. By creating a digital
                                    transformation plan with HIPAA-compliant solutions, we made patient engagement
                                    bright by almost 30% in multiple projects.</p>
                            </div>
                        </div>


                        <div id="Crypto-tab" class="tab-section"
                            style="background-image: url(./assests/images/Crypto.webp);" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                            <div class="tab-cont">
                                <h3 class="text-white">CRYPTO</h3>
                                <p class="text-white">A client in the dynamic crypto market sought advanced solutions to
                                    meet their unique needs. We built a secure trading platform with multi-layered
                                    security and analytics, minimizing risks. Our user-centric design increased overall
                                    transaction efficiency by 25%, strengthening user trust in volatile markets.</p>
                            </div>
                        </div>

                        <div id="Travel-tab" class="tab-section"
                            style="background-image: url(./assests/images/Travel-Case-study.webp);" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                            <div class="tab-cont">
                                <h3 class="text-white">TRAVEL</h3>
                                <p class="text-white">A travel client came to us wanting to provide very seamless
                                    booking experiences to their clients. We simplified their trip planning by utilizing
                                    AI-driven recommendations to optimize their booking process. Our UX redesign led to
                                    a 40% boost in user retention, creating an intuitive, personalized platform for
                                    travelers worldwide.</p>
                            </div>
                        </div>

                        <div id="NGO-tab" class="tab-section"
                            style="background-image: url(./assests/images/NGO-Case-study.webp);" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                            <div class="tab-cont">
                                <h3 class="text-white">NGO</h3>
                                <p class="text-white">NGO clients needed transparency and efficient donor management. We
                                    designed a custom CRM that improved donor tracking and reporting accuracy by 35%,
                                    enhancing donor relationships and impact visibility through intuitive, data-rich
                                    dashboards.</p>
                            </div>
                        </div>

                        <div id="Ecommerce-tab" class="tab-section"
                            style="background-image: url(./assests/images/ECOMMERCE-01.webp);" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                            <div class="tab-cont">
                                <h3 class="text-white">ECOMMERCE</h3>
                                <p class="text-white">In eCommerce, clients faced issues like high cart abandonment and
                                    complex checkout flows. We created streamlined, mobile-friendly interfaces and added
                                    one-click payment options, raising conversion rates by 45% and enhancing brand user
                                    experience.</p>
                            </div>
                        </div>

                        <div id="Real-E-tab" class="tab-section"
                            style="background-image: url(./assests/images/Real-Estate-Case-study.webp);" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                            <div class="tab-cont">
                                <h3 class="text-white">REAL ESTATE</h3>
                                <p class="text-white">Real estate clients require visually engaging, interactive
                                    listings. Not only did we develop apps with virtual tours and 3D walkthroughs, but
                                    we also built apps on which clients could explore properties remotely. Furthermore,
                                    property searches became more immersive, and the UI/UX improved by 30%, leading to
                                    30% more inquiries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row justify-content-space-between our-reviews">
            <div class="col">
                <h2 class="text-center text-white">Hear What Clients Love About <br><span>LOGIC WORKS</span></h2>
                <p class="text-white text-center">Clients consistently praise our innovative solutions, thoughtful
                    support and the tangible results we deliver to them.</p>
            </div>
        </div> -->

        <div class="row justify-content-space-between slider-reviews">
            <div class="col-lg-12 col-md-12">
                <div class="text-start reive-images">
                    <a href="https://www.goodfirms.co/company/logicworks-information-technology-llc"
                        target="_blank"><img src="assests/images/Goodfirms.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></a>
                    <a href="https://www.trustpilot.com/review/logicworks.ae" target="_blank"><img
                            src="assests/images/Trust.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></a>
                    <a href="https://clutch.co/profile/logic-works-0#contact" target="_blank"><img
                            src="assests/images/Clutch.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></a>
                    <a href="https://www.bark.com/en/gb/company/logicworks-information-technology-llc/kwqD4l/"
                        target="_blank"><img src="assests/images/Bark.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></a>
                </div>
                <div class="live-chat-btns ct-btn">
                    <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <!-- <div class="col-lg-7 col-md-6">
                <div class="main-vertical-slide">
                    <div class="testi-mainn">
                        <div class="tesi-roww">
                            <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/reviews-001.jpg" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></div>
                            <div class="col-lg-8 col-md-6 testi-txt">
                                <h4 class="text-white">Jade Thompson</h4>
                                <h6 class="text-white">Creative Manager, Givingli</h6>
                                <img src="assests/images/start-revews.png" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                                <p class="text-white">Logic Works transformed our online presence. Their team is
                                    responsive and truly understands our needs. Highly recommend it!</p>
                            </div>
                        </div>

                        <div class="tesi-roww">
                            <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/Layer-525.png" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></div>
                            <div class="col-lg-8 col-md-6 testi-txt">
                                <h4 class="text-white">David Kim</h4>
                                <h6 class="text-white">Owner, Babbage</h6>
                                <img src="assests/images/start-revews.png" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                                <p class="text-white">The custom app they developed exceeded our expectations! Their
                                    creativity and professionalism made the entire process seamless.</p>
                            </div>
                        </div>

                        <div class="tesi-roww">
                            <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/people-3.png" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></div>
                            <div class="col-lg-8 col-md-6 testi-txt">
                                <h4 class="text-white">Emily Carter</h4>
                                <h6 class="text-white">John Rousey</h6>
                                <img src="assests/images/start-revews.png" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                                <p class="text-white">Working with Logic Works was a game-changer for us. Their insights
                                    and strategies helped us grow our business exponentially!</p>
                            </div>
                        </div>
                        <div class="tesi-roww">
                            <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/portfolio/people-2.png" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                            </div>
                            <div class="col-lg-8 col-md-6 testi-txt">
                                <h4 class="text-white">Omar Hassan</h4>
                                <h6 class="text-white">Manager</h6>
                                <img src="assests/images/start-revews.png" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
                                <p class="text-white">Logic Works developed an effective digital marketing strategy that
                                    yielded positive results for our company. We saw a significant increase in our brand
                                    exposure and received many more potential customers. Understanding our needs was
                                    given priority, resulting in a substantial impact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Have A Project In Mind? -->
<section class="section-bg pt-b-80" id="project-in-minds">
    <div class="container">
        <div class="row justify-content-space-between project-in-mind"
            style="background-color: #59249A; border-radius: 30px;">
            <div class="col-lg-7 col-md-6">
                <h2 class="text-white">Ready to Reach New Heights in the Digital Space? <span></span></h2>
                <a  id="openPopup">Get in Touch</a>
            </div>
            <div class="col-lg-5 col-md-6">
                <img src="assests/images/laptop-girl.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
            </div>
        </div>
    </div>
</section>

<section class="section-bg about-slaman" style="background-image: url(assests/images/serice-bg.webp);" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
    <div class="container" style="display:block;">

        <div class="row pb-50">
            <h2 class="text-white text-center same-all ">Meet Our <span>Founders</span></h2>
        </div>
        <div class="row justify-content-space-between servicess-row-one align-items-center">
            <div class="col-lg-6">
                <h3 class="text-white text-start pb-20">Driving the Future of Al & Digital Innovation</h3>
                <h4 class="robo-font text-start callout-title" style="font-size:24px;"> Salman Waria</h4>
                <p class="text-start  feature-card-text" style="font-size:16px; color:#fff;">At Logic Works,
                    innovation
                    is at the core of everything we do, and it all starts with our visionary leader, Salman Waria.
                    With
                    a deep passion for Artificial Intelligence, digital transformation, and future-ready
                    technologies,
                    our CEO has been instrumental in shaping the company’s trajectory towards industry-leading
                    solutions
                    in <a href="<?php echo $base_url; ?>app-development-agency">app development</a>, web technologies, and full-scale marketing services.</p>
                <p class="text-start feature-card-text" style="font-size:16px; color:#fff;">A firm believer in
                    AI-driven
                    automation and next-gen digital experiences, Salman Waria envisions a world where businesses
                    seamlessly integrate AI into their workflows, maximizing efficiency, scalability, and growth.
                    Under
                    their leadership, Logic Works continues to push the boundaries of innovation, helping businesses
                    seize the future of digitalization with cutting-edge solutions.</p>
                <!-- <div class="btn-owner">
                        <a href="#">Explore Now</a>
                        <a href="#">Contact Us</a>
                    </div> -->
            </div>
            <div class="col-lg-6">
                <img src="assests/images/salman.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
            </div>
        </div>

        <div class="row justify-content-space-between servicess-row-one align-items-center about-ali">
            <div class="col-lg-5">
                <img src="assests/images/Ali.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
            </div>
            <div class="col-lg-7">
                <h3 class="text-white text-start pb-20">Redefining AI-Powered Automation & Business Efficiency</h3>
                <h4 class="robo-font text-start callout-title" style="font-size:24px;"> Ali Alam</h4>
                <p class="text-start  feature-card-text" style="font-size:16px; color:#fff;">At the forefront of AI
                    innovation, Ali Alam is a pioneering force in networking, coding, and intelligent automation.
                    With a
                    deep-rooted expertise in technology, Ali has evolved from a networking and coding expert to a
                    visionary entrepreneur leading the charge in AI-driven business solutions.</p>
                <p class="text-start feature-card-text" style="font-size:16px; color:#fff;">Now spearheading the
                    development of a revolutionary AI laptop, Ali Alam is redefining the way businesses
                    operate—bringing
                    automation, intelligence, and seamless efficiency into a single, powerful device. With a mission
                    to
                    transform business operations through cutting-edge AI, he is crafting a future where enterprises
                    can
                    run smarter, faster, and with unprecedented precision.</p>
                <p class="text-start feature-card-text" style="font-size:16px; color:#fff;">Under his leadership,
                    the
                    next era of AI-driven business automation is here.</p>
                <!-- <div class="btn-owner">
                        <a href="#">Explore Now</a>
                        <a href="#">Contact Us</a>
                    </div> -->
            </div>
        </div>
    </div>
</section>

<section class="fixed-scroll-sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-7">

                <div class="fixed-scroll-area is_stuck">

                    <div class="section-heading">

                        <h2>Our Blog <span>Holistic Strategies for Sustainable Digital Success</span></h2>

                        <p>At Logic Works, we emphasize modern strategies that integrate innovation, quality, and
                            collaboration to drive long-term growth for your business.</p>

                    </div>

                    <div class="fixed-scroll-area-link">

                        <ul>

                            <li><a href="#first-fixed" class=""><span>01</span>Innovation at Every Turn</a></li>

                            <li><a href="#second-fixed" class=""><span>02</span>Commitment to Quality</a></li>

                            <li><a href="#third-fixed" class=""><span>03</span>Expertise You Can Trust</a></li>

                            <li><a href="#forth-fixed" class=""><span>04</span>Transparent Collaboration</a></li>

                            <li><a href="#fifth-fixed" class="active"><span>05</span>Long-Term Partnerships</a></li>

                        </ul>

                    </div>

                </div>
                <div
                    style="position: static; width: 620px; height: 855.562px; display: block; vertical-align: baseline; float: none;">
                </div>

            </div>

            <div class="col-lg-6 col-md-5 heigt-wise">

                <div class="fixed-right-item" id="first-fixed"> <img
                        src="assests/images/Innovation_at_Every_Turn-removebg.webp" alt="" loading="lazy" decoding="async" fetchpriority="high" loading="eager">

                    <h5>Innovation at Every Turn</h5>

                    <p>We look for new ideas that get you heading for leaps ahead in the digital space. We use our
                        innovative ways to employ the most modern technology to boost your capacity, making your
                        business more productive, and increasing your business growth.</p>

                </div>

                <div class="fixed-right-item" id="second-fixed"> <img
                        src="assests/images/commitment_to_quality-removebg-preview.webp" alt="" loading="lazy" decoding="async" fetchpriority="high" loading="eager">

                    <h5>Commitment to Quality</h5>

                    <p>For every project, we deliver excellence, guaranteeing both satisfaction and results. We follow
                        industry best practices in <a href="<?php echo $base_url; ?>digital-marketing-agency">digital marketing</a>, web development, and app design so our clients get
                        extraordinary results.</p>

                </div>

                <div class="fixed-right-item" id="third-fixed"> <img src="assests/images/Expertise-You-Can-Trust.webp"
                        alt="" loading="lazy" decoding="async" fetchpriority="high" loading="eager">

                    <h5>Expertise You Can Trust</h5>

                    <p>They have years of experience within their field. We are offered a blend of digital marketing,
                        web design, and branding skill sets, which help us develop strategies based on your objectives.
                    </p>

                </div>

                <div class="fixed-right-item" id="forth-fixed"> <img
                        src="assests/images/Transparent_Collaboration-removebg.webp" alt="" loading="lazy" decoding="async" fetchpriority="high" loading="eager">

                    <h5>Transparent Collaboration</h5>

                    <p>Successful partnerships require clear communication that nurtures trust. We make sure you know
                        every step of the way forward towards your goals, so stay in touch to keep you informed about
                        our progress.</p>

                </div>

                <div class="fixed-right-item" id="fifth-fixed"> <img
                        src="assests/images/Long-Term_Partnerships-removebg.webp" alt="" loading="lazy" decoding="async" fetchpriority="high" loading="eager">

                    <h5>Long-Term Partnerships</h5>

                    <p>We know that long relationships are built on growth. We are committed to your success, and that’s
                        why we stay in touch; we keep adjusting the way we deliver and execute because we want you to
                        succeed in digital.</p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Why Choose Us -->
<section class="why-choose section-bg pt-b-80 ptop-80" id="choose-why">
    <div class="container">
        <div class="row justify-content-space-between">
            <div class="col">
                <h4 class="text-white text-center">Why Choose Us</h4>
                <h2 class="text-white text-center">Scale Faster with Our Leading App Development Experts</h2>
                <p class="text-white text-center">At Logic Works, we know every business has its own unique challenges
                    and goals. We provide customized solutions to address your specific needs and help you achieve
                    long-term success.</p>
                <div class="columns-container">
                    <div class="col-main">
                        <div class="main-hov">
                            <div class="img-with-txt">
                                <div class="img-columns"><img src="assests/images/Competitive-edge(3).webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></div>
                                <div class="txt-columns">
                                    <h3 class="text-white">Full-Cycle Development</h3>
                                </div>
                            </div>
                            <p class="text-white text-start">We take it from an initial concept and design to deployment
                                and post launch support as a full cycle development. This comprehensive service
                                guarantees your app achieves market requirements, evolves in accordance with user
                                feedback, and offers a robust solution that drives growth and user satisfaction.</p>
                        </div>
                    </div>
                    <div class="col-main">
                        <div class="main-hov">
                            <div class="img-with-txt">
                                <div class="img-columns"><img src="assests/images/Competitive-edge(4).webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></div>
                                <div class="txt-columns">
                                    <h3 class="text-white">Competitive Advantage</h3>
                                </div>
                            </div>
                            <p class="text-white text-start">We use professional technologies and industry best
                                practices to provide you with a competitive edge. Our team of experts has created unique
                                features and functionality that tailor your app to the specific needs of your target
                                audience and positioning your app to accomplish your business targets.</p>
                        </div>
                    </div>
                    <div class="col-main">
                        <div class="main-hov">
                            <div class="img-with-txt">
                                <div class="img-columns"><img src="assests/images/Competitive-edge(2).webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></div>
                                <div class="txt-columns">
                                    <h3 class="text-white">User-Centric Design</h3>
                                </div>
                            </div>
                            <p class="text-white text-start">First and foremost, we feel that exceptional user
                                experience is critical to app success. Our user centric design approach prioritizes
                                usability and engagement by building into every interaction is simple and fun to use. We
                                research and test everything, and we provide visually appealing interfaces that meet
                                user needs with increasing retention and satisfaction.</p>
                        </div>
                    </div>
                    <div class="col-main">
                        <div class="main-hov">
                            <div class="img-with-txt">
                                <div class="img-columns"><img src="assests/images/Competitive-edge(1).webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager"></div>
                                <div class="txt-columns">
                                    <h3 class="text-white">Future-Ready Apps</h3>
                                </div>
                            </div>
                            <p class="text-white text-start">We built apps with scalability and adaptability in mind. We
                                work with the newest technologies and trends to create solutions that can easily be
                                expanded with new features as your business evolves. By adopting this future ready
                                approach for your app, it can always stay relevant and competitive by providing what and
                                when the user’s needs and market dynamics evolve.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get A Website Like This & Start Your Online Journey! -->
<section class="section-bg pt-b-80 journey-sec" id="project-in-minds">
    <div class="container">
        <div class="row justify-content-space-between project-in-mind"
            style="background-color: #59249A; border-radius: 30px;">
            <div class="col-lg-6 col-md-6">
                <h2 class="text-white">Get Your Dream Project off the Ground with Us</h2>
                <div class="main-tow-btn">
                    <a href="https://wa.me/971529502258" target="_blank">Call Now</a>

                    <a href="#" id="openPopup">Let's Build Together</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="assests/images/Get-Website.webp" loading="lazy" decoding="async" fetchpriority="high" loading="eager">
            </div>
        </div>
    </div>
</section>

<section class="proce-tab section-bg pt-b-80">
    <div class="container">
        <div class="row justify-content-space-between">
            <div class="col">
                <h2 class="text-white text-center">Here’s How We Took Businesses to the Next Level</h2>
                <p class="text-white text-center">Discover the key parameters we follow in order to build a successful
                    mobile app. The following app development process helps us delivering high-quality, fully-functional
                    mobile apps.</p>

                <!-- Tabs section -->
                <div class="tab-again">
                    <div class="tab">
                        <button class="custom-tab-btn" onclick="opentabsss(event, '1')" id="defaultOpen">
                            <div class="txt-dep">In-Depth Business Analysis</div> <span>1</span>
                        </button>
                        <button class="custom-tab-btn" onclick="opentabsss(event, '2')">
                            <div class="txt-dep">Comprehensive Market Research</div> <span>2</span>
                        </button>
                        <button class="custom-tab-btn" onclick="opentabsss(event, '3')">
                            <div class="txt-dep">Strategic Planning</div> <span>3</span>
                        </button>
                        <button class="custom-tab-btn" onclick="opentabsss(event, '4')">
                            <div class="txt-dep">Creative Web and App Development</div> <span>4</span>
                        </button>
                        <button class="custom-tab-btn" onclick="opentabsss(event, '5')">
                            <div class="txt-dep">Continuous Performance Monitoring</div> <span>5</span>
                        </button>
                        <button class="custom-tab-btn" onclick="opentabsss(event, '6')">
                            <div class="txt-dep">Ongoing Support and Improvement</div> <span>6</span>
                        </button>
                    </div>

                    <div id="1" class="tab-view">
                        <h3>In-Depth Business Analysis</h3>
                        <p>We thoroughly analyze your business and identify strengths, weaknesses, and opportunities.
                            This helps us tailor strategies that align with your goals.</p>
                    </div>

                    <div id="2" class="tab-view">
                        <h3>Comprehensive Market Research</h3>
                        <p>We do extensive market research on your audience and your competitors. With this data, we
                            make marketing decisions based on data, making them more effective.</p>
                    </div>

                    <div id="3" class="tab-view">
                        <h3>Strategic Planning</h3>
                        <p>We build a proprietary digital strategy consisting of SEO, PPC, social, and content. This
                            integrated approach creates traffic and raises conversions.</p>
                    </div>

                    <div id="4" class="tab-view">
                        <h3>Creative Web and App Development</h3>
                        <p>We have expert developers who create user-friendly websites and mobile apps to improve user
                            experience. We concentrate on responsive design and functionality for higher engagement.</p>
                    </div>

                    <div id="5" class="tab-view">
                        <h3>Continuous Performance Monitoring</h3>
                        <p>We have advanced analytics tools to track and analyze your campaign performance. It helps us
                            make data-driven decisions and fine-tune strategies to the most impact.</p>
                    </div>

                    <div id="6" class="tab-view">
                        <h3>Ongoing Support and Improvement</h3>
                        <p>We provide continuous development and updates to foster lasting corporate partnerships. Our
                            team is committed that your business succeeds and prospers in the digital environment.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-home section-bg">
    <div class="container">
        <div class="row justify-content-space-between">
            <div class="col">
                  <h2 class="text-white text-center"><span>FAQ</span>'S</h2>
                <div class="faqss">
                    <div class="quwstion">
                        <button class="accordions">What is the step to build an application?</button>
                        <div class="panel">
                            <p>We believe every great app starts with a vision. We’ll work with you through the initial
                                idea, creating your goals, key features, and user experience. You’ll have a solid plan
                                and a path to successful app creation with us, designed specifically to your audience
                                and your unique business goals.</p>
                        </div>
                    </div>

                    <div class="quwstion">
                        <button class="accordions">How Much Will It Cost to Build My App?</button>
                        <div class="panel">
                            <p>The cost of developing an app depends on its complexity, some features, and platform that
                                it uses. At Logic Work, we tailor solutions to your budget as well as the high standards
                                of performance and user engagement.</p>
                        </div>
                    </div>

                    <div class="quwstion">
                        <button class="accordions">What Are the Steps in the App Development Process?</button>
                        <div class="panel">
                            <p>We have a very clear, very collaborative process here at Logic Work. We first establish
                                strategy then planning, design, development, test, then launch. We involve you every
                                step of the way so that your vision matches what the end result will be perfectly.</p>
                        </div>
                    </div>

                    <div class="quwstion">
                        <button class="accordions">How Do You Develop Websites?</button>
                        <div class="panel">
                            <p>Logic Work develops websites by custom writing and by WordPress, with flexibility, unique
                                features and easy content management.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php
include("includes/footer.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<!--
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
<script>
VANTA.WAVES({
  el: ".hero-section",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x5588,
  shininess: 37.00
})
</script>-->
<!--
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
<script>
VANTA.BIRDS({
  el: ".hero-section",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  quantity: 3.00,
  backgroundColor: 0x0
})
</script>-->
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<!-- <script>
VANTA.NET({
  el: ".servicess-section",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  backgroundColor: 0x0
})
</script> -->

<!--
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.halo.min.js"></script>
<script>
VANTA.HALO({
  el: ".servicess-section",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  baseColor: 0x0,
  backgroundColor: 0x0
})
</script>-->
<style>
    .client-review-heading {
        font-size: 60px;
        color: white;
        font-weight: 800;
        font-family: "Roboto";
    }

    .tab-wrapper {
        background-color: #f4f4f4;
        padding: 15px;
        border-radius: 50px;
        display: inline-block;
    }

    .tablinks {
        background-color: transparent;
        border: none;
        color: #333;
        padding: 10px 30px;
        margin: 0 5px;
        font-size: 20px;
        font-weight: 700;
        border-radius: 30px;
        transition: 0.3s ease;
        min-width: 120px;
    }

    .tablinks:hover {
        background-color: #ddd;
    }

    .tablinks.active {
        background-color: #582499;
        color: white;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }

    .screen img {
        opacity: 1 !important;
        transform: none !important;
        transition: transform 0.3s ease;
        border-radius: 10px;
    }

    .screen:hover img {
        transform: scale(1.05);
    }

    .b.banner-heading h1,
    .section-heading h2 {
        font-size: 60px;
        font-weight: 700;
    }

    .section-heading h2 {
        color: #8e3df2;
    }

    .section-heading h2 span {
        color: #f77c81;
        display: block;
        font-weight: 600;
    }

    .index-page .project-in-mind h2.text-white {
        margin-bottom: 0px !important;
    }

    .industries-slider .row.justify-content-space-between {
        padding-bottom: 280px;
    }

    .industries-slider .swiper-button-prev:after {
        content: '';
        background: url(http://localhost/logic-works/assests/images/arrow-left.webp) no-repeat;
        width: 74px;
        height: 54px;
        position: absolute;
        left: 635px;
        bottom: 228px;
    }

    .industries-slider .swiper-button-next:after {
        content: '';
        position: absolute;
        background: url(http://localhost/logic-works/assests/images/arrow-right.webp);
        width: 73px;
        height: 54px;
        left: 350px;
        bottom: 235px;
    }

    .industries-slider .swiper-pagination {
        bottom: 29% !important;
        left: 48% !important;
        text-align: left !important;
    }

    .industries-slider .swiper-pagination span.swiper-pagination-bullet {
        height: 150px;
        width: 100%;
        max-width: 162px;
        border-radius: 15px;
        opacity: 0.8;
        background-size: 100%;
        background-color: #fff !important;
        position: relative;
        text-align: center;
    }

    .industries-slider .swiper-pagination span.swiper-pagination-bullet:before {
        color: white;
        position: absolute;
        bottom: 0%;
        left: 0;
        right: 0;
        margin-bottom: 10px;
        font-size: 15px;
        font-weight: 700;
    }

/* testinomial slider css */

    /* Testimonials Slider Container */
    .testimonials-wrapper {
        position: relative;
        margin: 0 auto;
        padding: 0 60px;
        max-width: 1400px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .testimonials-slider {
        display: flex;
        gap: 25px;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        padding-bottom: 10px;
        flex: 1;
        /* Hide scrollbar */
        scrollbar-width: none;
    }

    .testimonials-slider::-webkit-scrollbar {
        display: none;
    }

    .testimonial-slide-item {
        flex: 0 0 calc(25% - 19px);
        min-width: calc(25% - 19px);
    }

    .testimonial-video-box {
        display: flex;
        flex-direction: column;
        height: 100%;
        text-align: center;
         border: 1px solid #fff;
         padding: 30px;
    }

    .video-container {
        position: relative;
        overflow: hidden;
        margin-bottom: 15px;
        background: #1a1a1a;
        aspect-ratio: 1/1;
        width: 100%;
        max-height: 100%;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .testimonial-content {
        padding: 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .testimonial-content h5 {
        color: #fff;
        margin-bottom: 8px;
        font-weight: 600;
        font-size: 16px;
        line-height: 1.2;
    }

    .testimonial-content p {
        color: #ccc;
        font-size: 14px;
        margin: 0;
        line-height: 1.5;
        flex-grow: 1;
    }

    /* Navigation Buttons */
    .testimonials-nav {
        position: absolute;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        border: none;
        background: #582499;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10;
        top: 30%;
        transform: translateY(-50%);
    }

    .testimonials-nav:hover {
        background: white;
        color: #582499;
        transform: translateY(-50%) scale(1.1);
    }

    .testimonials-nav:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .testimonials-nav-prev {
        left: 10px;
    }

    .testimonials-nav-next {
        right: 10px;
    }
    .three-colss .col-lg-3:nth-child(3) h2.text-start.text-white {
  font-size: 60px !important;
  font-family: "Montserrat";
  font-weight: 600;
  background: -webkit-linear-gradient(#ffffff, #333);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

    /* Tablet - 3 columns */
    @media (max-width: 1200px) {
        .testimonial-slide-item {
            flex: 0 0 calc(33.333% - 17px);
            min-width: calc(33.333% - 17px);
        }

        .testimonials-wrapper {
            padding: 0 50px;
        }

        .testimonials-nav {
            width: 40px;
            height: 40px;
            font-size: 18px;
        }

        .video-container {
            max-height: 480px;
            min-height: 350px;
           
        }
    }

    /* Medium devices - 2 columns */
    @media (max-width: 768px) {
        .testimonial-slide-item {
            flex: 0 0 calc(50% - 12px);
            min-width: calc(50% - 12px);
        }

        .testimonials-wrapper {
            padding: 0 45px;
        }

        .testimonials-nav {
            width: 38px;
            height: 38px;
            font-size: 16px;
        }

        .testimonials-nav-prev {
            left: 5px;
        }

        .testimonials-nav-next {
            right: 5px;
        }

        .video-container {
            margin-bottom: 12px;
            max-height: 420px;
            min-height: 300px;
            aspect-ratio: 1/1;
          
        }

        .testimonial-content h5 {
            font-size: 15px;
            margin-bottom: 6px;
        }

        .testimonial-content p {
            font-size: 13px;
        }
    }

    /* Small devices - 1 column */
    @media (max-width: 576px) {
        .testimonial-slide-item {
            flex: 0 0 100%;
            min-width: 100%;
            padding: 0 10px;
        }

        .testimonials-wrapper {
            padding: 0 20px;
        }

        .testimonials-nav {
            width: 36px;
            height: 36px;
            font-size: 14px;
        }

        .testimonials-nav-prev {
            left: 5px;
        }

        .testimonials-nav-next {
            right: 5px;
        }

        .video-container {
            margin-bottom: 12px;
            aspect-ratio: 1/1;
            max-height: 450px;
            min-height: 280px;
       
        }

        .testimonial-content {
            padding: 12px;
        }

        .testimonial-content h5 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .testimonial-content p {
            font-size: 12px;
        }
    }

    /* Extra small devices */
    @media (max-width: 480px) {
        .testimonials-wrapper {
            padding: 0 15px;
        }

        .testimonials-slider {
            gap: 15px;
        }

        .testimonial-slide-item {
            flex: 0 0 100%;
            min-width: 100%;
        }

        .testimonials-nav {
            width: 34px;
            height: 34px;
            font-size: 12px;
        }

        .testimonials-nav-prev {
            left: 5px;
        }

        .testimonials-nav-next {
            right: 5px;
        }

        .video-container {
            aspect-ratio: 1/1;
            max-height: 400px;
            min-height: 250px;
            margin-bottom: 10px;
           
        }

        .testimonial-content h5 {
            font-size: 13px;
            margin-bottom: 5px;
        }

        .testimonial-content p {
            font-size: 11px;
            line-height: 1.3;
        }
    }


    /* Testimonials Slider JavaScript */

            height: 135px;
            max-width: 153px;

        }

        .industries-slider .swiper-pagination {

            left: 43% !important;

        }

        .industries-slider .swiper-button-next:after {
            display: none;

        }

        .industries-slider .swiper-button-prev:after {
            display: none;
        }
    }

    @media (max-width: 1151px) and (min-width: 768px) {
        .industries-slider .swiper-pagination span.swiper-pagination-bullet {
            height: 120px;
            max-width: 130px;

        }

        .industries-slider .swiper-pagination {

            left: 44% !important;

        }

        .industries-slider .swiper-button-next:after {
            display: none;

        }

        .industries-slider .swiper-button-prev:after {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .section-heading h2 {
            font-size: 30px;
        }

    }

    @media (max-width: 600px) {
        .client-review-heading {
            font-size: 30px;
        }

        .industries-section h2.text-white {
            margin-bottom: 90px !important;

        }
    }
</style>

<script>
    // Testimonials Slider Script
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('testimonialsSlider');
        const prevBtn = document.getElementById('testiPrevBtn');
        const nextBtn = document.getElementById('testiNextBtn');

        if (!slider || !prevBtn || !nextBtn) return;

        const slideItem = slider.querySelector('.testimonial-slide-item');
        if (!slideItem) return;

        let slideWidth = slideItem.offsetWidth;
        const gap = 25;

        function getVisibleSlides() {
            const sliderWidth = slider.clientWidth;
            return Math.round(sliderWidth / (slideWidth + gap));
        }

        function updateNavButtons() {
            const scrollLeft = slider.scrollLeft;
            const maxScroll = slider.scrollWidth - slider.clientWidth;

            prevBtn.disabled = scrollLeft <= 0;
            nextBtn.disabled = scrollLeft >= maxScroll - 10;

            prevBtn.style.opacity = scrollLeft <= 0 ? '0.5' : '1';
            nextBtn.style.opacity = scrollLeft >= maxScroll - 10 ? '0.5' : '1';
        }

        function scrollSlider(direction) {
            const visibleSlides = getVisibleSlides();
            const scrollAmount = visibleSlides * (slideWidth + gap);

            if (direction === 'next') {
                slider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                slider.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
            setTimeout(updateNavButtons, 100);
        }

        prevBtn.addEventListener('click', () => scrollSlider('prev'));
        nextBtn.addEventListener('click', () => scrollSlider('next'));

        slider.addEventListener('scroll', updateNavButtons);

        // Handle window resize
        window.addEventListener('resize', () => {
            slideWidth = slider.querySelector('.testimonial-slide-item').offsetWidth;
            updateNavButtons();
        });

        // Initial state
        updateNavButtons();
    });
</script>

<script>
    const tabButtons = document.querySelectorAll(".tablinks");
    const tabContents = document.querySelectorAll(".tabcontent");

    tabButtons.forEach(button => {
        button.addEventListener("click", () => {
            const tabName = button.getAttribute("data-tab");

            // Hide all tab contents
            tabContents.forEach(content => {
                content.style.display = "none";
            });

            // Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove("active"));

            // Show selected tab and mark button active
            document.getElementById(tabName).style.display = "block";
            button.classList.add("active");
        });
    });
</script>