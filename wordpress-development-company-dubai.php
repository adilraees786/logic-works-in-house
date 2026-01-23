<?php
$meta_title = "WordPress Development Company in Dubai | Logic Works";
$meta_description = "Leading WordPress development company in Dubai offering custom website design and WooCommerce development to drive performance and online growth.";
$keyword = 'WordPress Development';
$canonical = "https://logicworks.ae/wordpress-development-company-dubai";
$custom_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Logic Works",
  "url": "https://logicworks.ae/web-design-company",
  "image": "https://logicworks.ae/assests/images/head-logo.webp",
  "telephone": "+971529502258",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Dubai",
    "addressCountry": "AE"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Dubai"
  },
  "description": "Boost your online presence with professional Web Design services in Dubai. Logic Works is a leading Web Design Company that builds responsive, SEO-optimized, and user-focused websites tailored to every business need.",
  "priceRange": "$$",
  "makesOffer": {
    "@type": "Offer",
    "itemOffered": {
      "@type": "Service",
      "name": "Web Design",
      "description": "Get custom web design solutions in Dubai with Logic Works. We create visually appealing, responsive, and user-friendly websites that reflect your brand and drive engagement.",
      "areaServed": {
        "@type": "Place",
        "name": "Dubai"
      },
      "provider": {
        "@type": "Organization",
        "name": "Logic Works",
        "url": "https://logicworks.ae/"
      }
    }
  }
}
</script>

';

include("includes/head.php");
include("includes/header.php");
?>
<style>
    .transform-row .digital-two-btn a:first-child:hover:before {
        right: -0%;
        transition: 0.5s all ease-in-out;
    }

    .transform-row .digital-two-btn a:first-child:before {
        content: '';
        background: url(assests/images/phon-icon.webp) no-repeat;
        background-size: 100%;
        width: 60px;
        height: 60px;
        position: absolute;
        right: -6%;
        top: 0%;
        transition: 0.5s all ease-in-out;
    }

    .web-slider .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .slid-inrr .swiper-button-prev {
        background: url(assests/images/website/service-arrow-left.png) no-repeat;
        position: absolute;
        width: 76px;
        height: 54px;
        background-size: 100%;
        left: unset !important;
        right: 11%;
        top: 5%;
    }

    .slid-inrr .swiper-button-next {
        background: url(assests/images/website/service-arrow-right.png);
        width: 76px;
        height: 54px;
        background-size: 100%;
        left: unset !important;
        right: 3%;
        top: 5%;
    }

    .web-slider .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 400px;
        height: 572px;
    }

    .web-slider .swiper-slide img {
        display: block;
        width: 100%;
    }

    .slider-web .swiper-button-prev {
        background: url(assests/images/website/left-arrow.png);
        background-size: 100%;
        position: absolute;
        width: 46px;
        height: 46px;
        top: 4%;
        left: 0;
    }

    .slider-web .swiper-button-next {
        background: url(assests/images/website/right-arrow.png);
        background-size: 100%;
        position: absolute;
        width: 46px;
        height: 46px;
        top: 4%;
        right: 0%;
    }

    /* new css */
    .seo-hero-sec.wdsd1 p.text-white {
        font-size: 22px;
        font-weight: 500;
        margin: 20px 0 -10px !important;
        font-family: 'Montserrat';
    }

    .seo-hero-sec.wdsd1 {
        padding-top: 160px;
        padding-bottom: 70px;
    }

    img.trustsec {
        width: 390px;
        object-fit: contain;
    }

    .seo-hero-sec.wdsd1 h1.text-white {
        font-size: 50px;
    }

    .wdsd-mainbg section {
        background: unset !important;
    }

    .wdsd-mainbg {
        background: url('assests/images/website/second-bg.webp');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
        background-color: #000;
    }

    .ssr .our-content-slider {
        position: relative;
        padding-top: 60px;
    }

    .ssr .our-content-slider:after {
        position: absolute;
        content: '';
        left: 50%;
        top: 0px;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 40px solid transparent;
        border-right: 40px solid transparent;
        border-top: 40px solid #dad9d7;
    }

    img.bde {
        margin-top: -80px;
        animation: none;
    }

    .tab-delivery .unique-tab-content h3 {
        font-size: 26px;
        font-weight: 600;
    }

    .huge-bg-img {
        background: url('assests/images/social-media/huge-bg.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: bottom;
        background-color: #000;
    }

    .huge-bg-img section {
        background: unset !important;
    }

    .huge-bg-img .background-video {
        display: none;
    }

    .wweb-deign-sec .unique-tab-container button.unique-tab-button {
        font-family: 'Montserrat';
        font-size: 16px;
    }

    .link-image {
        display: flex;
        justify-content: start;
        align-items: center;
        gap: 5px;

    }

    .link-image a img {
        width: 100px;
        height: 50px;
        object-fit: contain;
        margin: 0;
        padding: 0;
        display: block;
    }

    @media (max-width:767px) {
        ::-webkit-scrollbar {
            width: 0;
        }

        .seo-hero-sec.wdsd1 h1.text-white {
            font-size: 33px;
        }

        .seo-hero-sec.wdsd1 p.text-white {
            font-size: 16px;
            font-weight: 600;
        }

        img.bansec {
            height: 0;
        }

        .wdsd1 {
            margin-bottom: -80px;
        }

        .slider-web .swiper-button-next,
        .slider-web .swiper-button-prev {
            top: 50%;
        }

        .web-second-sec p.main-head {
            font-size: 25px;
            font-weight: 700;
        }

        .slider-logo .mySwiper2 swiper-slide img {
            width: 80%;
        }

        .port-web .row.align-items-center.transform-row {
            flex-direction: column-reverse;
        }

        .seo-btn a {
            padding: 10px 0 13px;
        }

        h2.mnhead {
            text-align: center !important;
            text-transform: capitalize;
            font-size: 32px !important;
            margin-top: 50px;
        }

        .digital-two-btn a {
            padding: 14px 40px 14px 40px !important;
            width: 80% !important;
        }

        img.bde {
            margin-top: 60px;
            animation: none;
            margin-bottom: -30px;
        }

        .port-web {
            padding-bottom: 10px;
        }

        .row.matters-row h2,
        .row.matters-row p {
            text-align: center;
        }

        .row.matters-row h2 {
            font-size: 34px !important;
        }
    }
</style>
<main class="wordpress-development-company-dubai">
    <div class="wdsd-mainbg">
        <!-- Hero section -->
        <section class="seo-hero-sec section-bg wdsd1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="text-white"><span>Wordpress</span> Development Company in Dubai
                            Dubai!
                        </h1>
                        <p class="text-white">As a leading WordPress development company in Dubai, LogicWorks builds
                            high-performance digital platforms designed to compete in demanding regional and global
                            markets. We specialize in robust WooCommerce solutions developed with precision and care.
                            Connect with our team to transform your vision into impactful digital experiences that
                            support long-term, sustainable growth.</p>
                        <div class="seo-btn">
                            <a class="btn bg-theme text-title" href="javascript:void(0)" onclick="openTawkChat()">
                                <span class="link-effect">
                                    <span class="effect-1">Live Chat</span>
                                    <span class="effect-1">Live Chat</span>
                                </span>
                            </a>
                            <a class="btn bg-theme text-title" id="openPopup" href="#0">
                                <span class="link-effect">
                                    <span class="effect-1">Get A Quote</span>
                                    <span class="effect-1">Get A Quote</span>
                                </span>
                            </a>
                        </div>
                        <!-- <img src="assests/images/social-media/trustandotherlogo.webp" alt="trust icons"
                            class="trustsec mt-30"> -->
                        <div class="link-image mt-15">
                            <a href="https://www.goodfirms.co/company/logicworks-information-technology-llc"
                                target="_blank"><img src="assests/images/Goodfirms.webp"></a>
                            <a href="https://www.trustpilot.com/review/logicworks.ae" target="_blank"><img
                                    src="assests/images/Trust.webp"></a>
                            <a href="https://clutch.co/profile/logic-works-0#contact" target="_blank"><img
                                    src="assests/images/Clutch.webp"></a>
                            <a href="https://www.bark.com/en/gb/company/logicworks-information-technology-llc/kwqD4l/"
                                target="_blank"><img src="assests/images/Bark.webp"></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="assests/images/website/banner-ikmage.webp" alt="Ikimage" class="bansec">
                    </div>
                </div>
            </div>
        </section>

        <section class="web-second-sec section-bg" style="background-image:url(assests/images/website/second-bg.webp);">
            <div class="container" style="display: block;">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center text-white same-all">Wordpress Development Agency Dubai That Turns
                            Interest Into Results
                        </h2>
                        <p class="text-white text-center">We operate as a WordPress development agency in Dubai driven
                            by purposeful execution. Every platform is researched, refined, and scaled with intent. Our
                            builds reduce friction, enhance navigation, and convert traffic into measurable business
                            outcomes.</p>

                        <div class="web-slider">
                            <div class="swiper slider-web">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="web-content-slider">
                                            <h2 class="text-center text-white">Purpose Aligned Digital Builds</h2>
                                            <p class="text-white">We create platforms that align precisely with business
                                                ambitions. Our WordPress development agency Dubai team plans streamlined
                                                structures that feel effortless while performing at speed. Clear
                                                navigation builds trust. From discovery to delivery, we manage each
                                                phase with clarity and control. Compatibility across browsers and
                                                devices comes standard, while modular development supports future
                                                growth.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="web-content-slider">
                                            <h2 class="text-center text-white">Conversion Focused Page Crafting</h2>
                                            <p class="text-white">We design websites that turn clicks into meaningful
                                                engagement. As a WordPress development company in Dubai, we create
                                                intentional layouts supported by persuasive messaging and clear
                                                calls-to-action. Each page is optimized for speed, responsiveness, and
                                                cross-device performance. Our structured approach enhances
                                                long-term performance while aligning every design decision with business
                                                objectives and measurable results.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="web-content-slider">
                                            <h2 class="text-center text-white">Online Store Engineering</h2>
                                            <p class="text-white">We build eCommerce stores designed to sell never to
                                                guess. With WordPress development for eCommerce, transactions remain
                                                secure, smooth, and reliable. Category flow feels intuitive, performance
                                                builds confidence, and speed drives conversions.
                                                Our solutions include smart product discovery, inventory management, and
                                                technical optimization that improves visibility. Customers return
                                                because the shopping journey feels effortless, making reliability a core
                                                part of your brand story.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="web-content-slider">
                                            <h2 class="text-center text-white">Interactive Interface Assembly</h2>
                                            <p class="text-white">We craft engaging interfaces that respond naturally to
                                                users. Our WordPress developer Dubai specialists design clean,
                                                purpose-driven layouts that load fast and feel lightweight. Smooth
                                                transitions, modern tooling, and responsive behavior ensure consistent
                                                experiences across all devices. Accessibility remains a priority, where
                                                visual appeal meets functional performance to maintain long-term
                                                stability.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="web-content-slider">
                                            <h2 class="text-center text-white">System Core Construction</h2>
                                            <p class="text-white">We engineer powerful foundations that operate
                                                seamlessly behind the scenes. Databases integrate smoothly with logic
                                                layers while security and scalability guide every architectural
                                                decision. Platforms remain stable during traffic spikes, communication
                                                between systems stays fluid, and performance holds steady under pressure
                                                allowing creativity to shine on the surface.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="web-content-slider">
                                            <h2 class="text-center text-white">Brand Focused Site Architecture</h2>
                                            <p class="text-white">We design refined digital presences that clearly
                                                reflect brand identity. Through WordPress website development, each site
                                                feels modern, approachable, and uncluttered. Search-ready structures
                                                support discoverability, while thoughtful visuals build credibility.
                                                Whether informational or service-driven, our architectures encourage
                                                engagement through intuitive flow.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <p class="text-center text-white main-head">BEGIN YOUR DIGITAL BUILD EXPERIENCE NOW</p>
                        <a href="#" id="openPopup">START NOW!</a>
                    </div>
                </div>

                <div class="row mt-5 serive-slider-row ssr">
                    <div class="col">
                        <h2 class="text-center text-white same-all">OUR SERVICES</h2>
                        <p class="text-white text-center">WordPress Development Services Dubai</p>

                        <div class="slid-inrr">
                            <div class="swiper port-slid-mine">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/website/custom-solutions.webp" alt="ser-img-1">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">BESPOKE DIGITAL STRUCTURES</h2>
                                                <p class="text-white">We craft platforms aligned with real business
                                                    goals. As a WordPress development company in Dubai, every build is
                                                    planned with precision. Each solution feels distinctive, purposeful,
                                                    and focused on progress where every element supports measurable
                                                    objectives.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/website/corporate-webiste.webp" alt="ser-img-2">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">ADAPTIVE LAYOUT THINKING</h2>
                                                <p class="text-white">We design platforms built for discoverability.
                                                    Fast-loading pages follow SEO best practices while maintaining
                                                    clarity and structure. Organic visibility grows steadily through
                                                    thoughtful content and technical optimization.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/website/seo-optimization.webp" alt="ser-img-3">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">ADVANCED BUILD TOOLS</h2>
                                                <p class="text-white">We use modern technologies to deliver dependable
                                                    results. Our WordPress development agency Dubai team stays ahead of
                                                    innovation, applying contemporary frameworks that enhance speed,
                                                    security, and everyday usability.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/website/ModernTechnologies.webp" alt="ser-img-4">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">ONGOING PLATFORM CARE</h2>
                                                <p class="text-white">Performance protection continues long after
                                                    launch. Regular updates, proactive issue resolution, secure backups,
                                                    and monitoring ensure lasting stability and peace of mind.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/website/WebsiteMaintenance.webp" alt="ser-img-5">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">ON SCHEDULE EXECUTION</h2>
                                                <p class="text-white">We respect timelines without sacrificing quality.
                                                    Delivery remains transparent, efficient, and dependable ensuring
                                                    launches happen exactly when promised.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/website/TimelyDelivery.webp" alt="ser-img-6">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">TIMELY DELIVERY</h2>
                                                <p class="text-white">We deliver projects on time without delays. Our
                                                    process is quick and efficient. You get a ready-to-launch website on
                                                    schedule. We stick to deadlines while maintaining quality. Timely
                                                    delivery ensures your business stays on track.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <section class="section-bg port-web" id="port-web">
        <div class="container" style="display: block;">
            <div class="row slider-logo">
                <div class="col">
                    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="mySwiper" thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
                        <swiper-slide>
                            <img src="assests/images/website/gametimewellness.webp" alt="slider-image01" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/captbutch.webp" alt="slider-image02" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/depatieroof.webp" alt="slider-image03" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/slider-01.webp" alt="slider-image04" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/funkifitgame.webp" alt="slider-image05" />
                        </swiper-slide>
                    </swiper-container>

                    <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                        watch-slides-progress="true">
                        <swiper-slide>
                            <img src="assests/images/website/gtwlogo.webp" alt="bottom-1" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/cblogo.webp" alt="bottom-2" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/drlogo.webp" alt="bottom-3" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/cuclogo.webp" alt="bottom-4" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assests/images/website/ffg-logo.webp" alt="bottom-5" />
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>

            <div class="row align-items-center transform-row">
                <div class="col-lg-4">
                    <img src="assests/images/marketing/banda.webp" alt="Markrting-bnda" class="bde">
                </div>
                <div class="col-lg-8">
                    <h2 class="text-white same-all text-end mnhead">WordPress Web Development Services</h2>
                    <div class="digital-two-btn">
                        <a href="tel:+971529502258">Call Now</a>
                        <a href="#" id="openPopup">Get a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg matter-sec" style="background-image: url(assests/images/website/matters.webp);">
        <div class="container" style="display: block;">
            <div class="row matters-row">
                <div class="col-lg-12">
                    <h2 class="text-white same-all">Professional WordPress Development Services Dubai Has to Offer</h2>
                    <p class="text-white">We build scalable digital products that elevate ambitious founders globally
                        through thoughtful architecture and purposeful execution.</p>
                </div>
            </div>

            <div class="row matter-three-col">
                <div class="col-lg-4" style="background-color: #59249A;">
                    <h3 class="text-white">Strengthens Brand Confidence</h3>
                    <p class="text-white">A refined platform builds immediate trust. Partnering with a WordPress
                        development company in Dubai signals credibility and professionalism. Visitors feel secure
                        exploring polished digital spaces, while thoughtful structure reflects organizational values and
                        capability.</p>
                </div>

                <div class="col-lg-4" style="background-color: #59249A;">
                    <h3 class="text-white">Expands Online Discovery</h3>
                    <p class="text-white">Strategically built platforms improve search visibility and organic reach.
                        SEO-optimized structures attract consistent traffic, extend brand presence, and open new
                        opportunities for engagement and recognition.</p>
                </div>

                <div class="col-lg-4" style="background-color: #59249A;">
                    <h3 class="text-white">Drives Meaningful Actions</h3>
                    <p class="text-white">Intentional layouts guide users toward decisions. Clear calls-to-action,
                        smooth navigation, and conversion-focused planning reduce hesitation and increase
                        engagement—making interaction feel effortless and natural.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <div class="huge-bg-img">
        <section class="logotab-sec wweb-deign-sec section-bg pt-b-80">
            <video class="background-video" autoplay muted loop>
                <source src="assests/images/v2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container" style="display: block;">
                <div class="row">
                    <div class="col">
                        <h2 class="text-white algn-centr logo-h2">A Refined Workflow Behind Outstanding Web Builds</h2>
                        <!-- <p class="text-white text-center">Explain your logo design process clearly so that potential clients know exactly what to expect. Keep it simple and approachable.</p> -->
                        <div class="unique-tab-container">
                            <button class="unique-tab-button active-tab"
                                data-target="UniqueConsultation">Discovery</button>
                            <button class="unique-tab-button" data-target="UniqueConcept">Planning</button>
                            <button class="unique-tab-button" data-target="UniqueRevisions">Build Phase</button>
                            <button class="unique-tab-button" data-target="UniqueDelivery">Validation Release</button>
                        </div>
                        <div class="tab-delivery" style="background-image: url(assests/images/website/tab-bg.webp);">
                            <div class="unique-tab-container">
                                <div id="UniqueConsultation" class="unique-tab-content" style="display: block;">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h3>Discovery</h3>
                                            <p>We begin by listening. As a WordPress development company in Dubai, we
                                                uncover goals, audience behavior, and market positioning through
                                                research and insight. This clarity forms the foundation for confident
                                                progress.
                                            </p>

                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assests/images/web-design/Research.webp" alt="research" />
                                        </div>
                                    </div>
                                </div>

                                <div id="UniqueConcept" class="unique-tab-content">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h3>Planning</h3>
                                            <p>We define a clear roadmap aligned with business objectives. Experience
                                                flow, visibility, and structure are mapped carefully, creating a
                                                framework that supports sustainable growth and long-term value.</p>

                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assests/images/web-design/Strategy.webp" alt="Strategy" />
                                        </div>
                                    </div>
                                </div>

                                <div id="UniqueRevisions" class="unique-tab-content">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h3>Build Phase</h3>
                                            <p>Our experts assemble secure, scalable platforms through WordPress website
                                                development. Design and functionality integrate seamlessly, while modern
                                                tools enhance speed, usability, and performance.</p>

                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assests/images/web-design/Creation-&-Development.webp"
                                                alt="Create" />
                                        </div>
                                    </div>
                                </div>

                                <div id="UniqueDelivery" class="unique-tab-content">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h3>Validation Release</h3>
                                            <p>We test across devices and environments to ensure stability, safety, and
                                                consistency. Performance tuning and visibility checks happen before
                                                launch, ensuring a calm, controlled release and reliable performance
                                                thereafter.</p>

                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assests/images/web-design/Test-and-Development.webp"
                                                alt="Test-and-Dev" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-space-between faq-home faq-logo-deisgn">
                    <div class="col">
                        <h2 class="text-white text-center"><span>FAQ</span>'S</h2>
                        <div class="faqss">
                            <div class="quwstion">
                                <button class="accordions">How much does a WordPress website cost in Dubai?</button>
                                <div class="panel">
                                    <p>Costs depend on scope, features, and complexity. Basic sites require less
                                        investment, while advanced functionality increases pricing. Working with a
                                        wordpress developer in Dubai means investing in strategy, performance, and
                                        long-term stability not just design.</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">What are the benefits of WordPress development?</button>
                                <div class="panel">
                                    <p>WordPress offers flexibility, scalability, and control. From simple updates to
                                        future expansion, it grows with your business. Our WordPress website development
                                        approach keeps platforms secure, adaptable, and easy to manage.</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">Why choose a WordPress development agency in Dubai?</button>
                                <div class="panel">
                                    <p>Local expertise makes a difference. A WordPress development agency Dubai
                                        understands regional markets, compliance needs, and audience behavior—while
                                        maintaining global quality standards.</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">Is WordPress suitable for online stores and eCommerce
                                    projects?</button>
                                <div class="panel">
                                    <p>WAbsolutely. We build conversion-driven online stores using WordPress development
                                        for eCommerce combined with WooCommerce development services. Checkout flows
                                        remain smooth, fast, and easy to manage as inventories grow.</p>
                                </div>
                            </div>
                            <div class="quwstion">
                                <button class="accordions">Do you offer ongoing WordPress development services in
                                    Dubai?</button>
                                <div class="panel">
                                    <p>Yes. Our WordPress development services Dubai include maintenance, security
                                        updates, optimization, and performance monitoring. Consistent support keeps
                                        platforms stable, secure, and stress-free over time.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
     <section>
            <?php
            include("includes/clint-review.php");
            ?>

        </section>

    </div>
</main>


<?php
include("includes/footer.php");
?>

<script>
    var swiper = new Swiper(".slider-web", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
</script>