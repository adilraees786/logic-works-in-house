<?php
  $meta_title = "Creative Branding Services by Logic Works";
            $meta_description = "Logic Works offers creative branding services, including logo design, messaging, and identity development to amplify your brand and drive success.";
$keyword = 'logic work branding';
$custom_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Logic Works",
  "url": "https://logicworks.ae/branding-services",
  "image": "https://logicworks.ae/assests/images/head-logo.png",
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
  "description": "Define a unique identity for your business with professional Branding Services in Dubai. Logic Works delivers creative logo design, brand strategy, and visual identity systems that resonate with your target audience.",
  "priceRange": "$$",
  "makesOffer": {
    "@type": "Offer",
    "itemOffered": {
      "@type": "Service",
      "name": "Branding Services",
      "description": "Establish a powerful and memorable brand identity with our expert Branding Services in Dubai. Logic Works specializes in logo design, brand strategy, visual identity, and brand guidelines that make your business stand out in the market.",
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
    .tab-panel {
        display: none;
    }

    .tab-panel.active {
        display: block;
    }

    [data-tab-content] {
        display: none;
    }

    [data-tab-content].active {
        display: block;
    }




    .tab.active {
        font-weight: bold;
        border-bottom: 2px solid white;
    }
</style>


<main class="branding-page">
    <div class="branding-hero-bg" style="background-image:url(assests/images/website/second-bg.png);">
        <!-- Hero section -->
        <section class="seo-hero-sec section-bg branding-hero-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="text-white"><span>#1 Creative Branding</span> Services to Amplify Your Brand's Voice
                        </h1>
                        <p class="text-white">Logic Works creates innovative branding strategies. Our services include
                            logo design and identity development. We craft targeted messaging to enhance visibility. Our
                            focus is impactful designs and storytelling. We deliver market-driven solutions for lasting
                            impressions. Trust us to shape your unique identity. Let's bring your vision to life</p>
                        <div class="seo-btn brand-btn">
                            <a href="#">Get a Free Branding Consultation</a>
                            <a href="#" id="openPopup">Explore Our Branding Services</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="assests/images/Branding/banner-image.png">
                    </div>
                </div>
            </div>
        </section>

        <section class="branding-main-sec section-bg pt-b-80">
            <div class="container" style="display: block;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center text-white same-all">Why Companies Depend on Our Creative Branding
                            Expertise</h2>
                        <p class="text-center text-white app-txt">Logic Works is trusted for impactful branding
                            solutions. We help brands thrive with strategies that ensure clarity, consistency, and
                            market success.</p>
                    </div>
                </div>

                <div class="row branding-row">
                    <div class="col-lg-4" style="background-image: url(assests/images/Branding/col-bg-01.png);">
                        <h3 class="text-white">Consistent Quality & Results</h3>
                        <p class="text-white">We are committed to excellence in every project. Our team delivers the
                            best work that guarantees measurable outcomes.</p>
                    </div>

                    <div class="col-lg-4" style="background-image: url(assests/images/Branding/col-bg-02.png);">
                        <h3 class="text-white">Competitive Pricing</h3>
                        <p class="text-white">Our competitive pricing ensures you receive excellent value. Quality and
                            affordability go hand in hand with us.</p>
                    </div>

                    <div class="col-lg-4" style="background-image: url(assests/images/Branding/col-bg-03.png);">
                        <h3 class="text-white">Client-Centric Approach</h3>
                        <p class="text-white">Your satisfaction is our focus from start to finish. We work closely with
                            you to understand and achieve your goals.</p>
                    </div>
                </div>

                <div class="row btn-brand text-center">
                    <div class="col-lg-12">
                        <p class="text-white">YOUR BRAND DESERVES TO STAND OUT-LET US MAKE IT HAPPEN!</p>
                        <a href="#" class="dark-color">START NOW!</a>
                    </div>
                </div>

                <div class="row mt-5 serive-slider-row">
                    <div class="col">
                        <h2 class="text-center text-white same-all">Strategic Branding Solutions Designed to Dominate
                            the Market</h2>
                        <p class="text-white text-center">WE OFFER A COMPREHENSIVE RANGE OF SERVICES TO ELEVATE YOUR
                            BRAND:</p>

                        <div class="slid-inrr">
                            <div class="swiper port-slid-mine">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/website/logo-design-excellence.jpg">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">Logo Design Excellence</h2>
                                                <p class="text-white">We create logos that embody your brand's
                                                    personality and values. Each design ensures recognition and leaves a
                                                    lasting impression. With market research and attention to trends,
                                                    our logos elevate visual identity and establish a professional brand
                                                    presence.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/Branding/brand-strategy.jpg">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">Strategic Brand Identity Development</h2>
                                                <p class="text-white">Our brand identity solutions ensure consistency
                                                    across platforms. We define colors, typography, and visuals that
                                                    resonate with your audience. A strong identity builds trust and
                                                    credibility. It distinguishes your business and solidifies your
                                                    position in competitive markets.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/Branding/brand-messaging.jpg">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">Brand Messaging and Positioning</h2>
                                                <p class="text-white">We build cohesive social media profiles tailored
                                                    to your audience. Our engaging visuals and consistent themes enhance
                                                    recognition. These strategies amplify your digital presence. We
                                                    ensure increased visibility, stronger connections, and an active
                                                    online voice for your brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/Branding/website-design.jpg">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">Website Design and Optimization</h2>
                                                <p class="text-white">We design websites that blend aesthetics with
                                                    functionality. Our sites load quickly and adapt to all devices. Each
                                                    detail reflects your brand identity. These designs attract traffic,
                                                    boost engagement, and drive conversions for measurable business
                                                    growth.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-serve-slider">
                                            <img src="assests/images/Branding/packaging-and-branding.webp">
                                            <div class="our-content-slider">
                                                <h2 class="text-white">Packaging and Product Branding</h2>
                                                <p class="text-white">We create packaging that captures attention and
                                                    conveys value. Our designs align with your brand identity and market
                                                    demands. Eye-catching visuals enhance shelf presence. They influence
                                                    purchase decisions and ensure your products stand out in competitive
                                                    spaces.</p>
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
            </div>
        </section>
    </div>
    <section class="app-slider-sec section-bg pt-b-80">
        <div class="container" style="display: block;">

            <div class="row tab-app-row">
                <div class="col">
                    <h2 class="text-white text-center same-all">Dubai's Leading Branding Services for Every Industry
                    </h2>
                    <p class="text-white text-center app-txt">Achieve success with strategic branding solutions.
                        Increase recognition and engagement in competitive markets.</p>

                    <div class="tab-app">
                        <ul class="tabs">
                            <li data-tab-target="#home" class="active tab text-white">Real Estate</li>
                            <li data-tab-target="#fashion" class="tab text-white">Fashion and Lifestyle</li>
                            <li data-tab-target="#hospitality" class="tab text-white">Hospitality</li>
                            <li data-tab-target="#technology" class="tab text-white">Technology</li>
                            <li data-tab-target="#healthcare" class="tab text-white">Healthcare</li>
                            <li data-tab-target="#education" class="tab text-white">Education</li>
                            <li data-tab-target="#finance" class="tab text-white">Finance</li>
                            <li data-tab-target="#food-and-beverage" class="tab text-white">Food and Beverage</li>
                            <li data-tab-target="#automotive" class="tab text-white">Automotive</li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/rlogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="fashion" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo1 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion1pro.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion2pro.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion3pro.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion4pro.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion5pro.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion1.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion2.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion3.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion4.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fashion5.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="hospitality" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo2 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hlogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="technology" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo3 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider3">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/tlogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="healthcare" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo4 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider4">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/hclogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="education" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo5 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider5">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/elogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="finance" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo6 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider6">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fnlogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="food-and-beverage" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo7 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider7">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/fblogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="automotive" data-tab-content="" class="active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div thumbsSlider="" class="swiper brand-logo8 spbb">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo1.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo2.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo3.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo4.png" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo5.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="swiper brand-logo-slider8">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo1mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo2mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo3mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo4mockup.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assests/images/Branding/alogo5mockup.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg web-dev-pag" id="transform-app">
        <div class="container" style="display: block; max-width: 100%;">
            <div class="row align-items-center transform-row">
                <div class="col-lg-4">
                    <img src="assests/images/marketing/banda.png" class="gta">
                </div>
                <div class="col-lg-8">
                    <h2 class="text-white same-all text-end">We have transformed 8000+ business with our Development
                        Expertise</h2>
                    <div class="digital-two-btn">
                        <a href="#">Call Now</a>
                        <a href="#" id="openPopup">Start Live Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="huge-bg-img" style="background:url('assests/images/social-media/huge-bg.png');">
        <section class="section-bg brand-build pt-b-80"
            style="background-image: url(assests/images/Branding/bg-image.png);">
            <div class="container" style="display: block;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-white same-all text-center">LET'S BUILD YOUR BRAND ONLINE!</h2>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="text-white">AT LOGIC WORKS, WE'RE PASSIONATE ABOUT TURNING IDEAS INTO IMPACTFUL
                            DIGITAL EXPERIENCES CONTACT US TODAY FOR A CONSULTATION AND TAKE THE FIRST STEP TOWARDS
                            BUILDING A WEBSITE THAT SPEAKS FOR YOUR BRAND.</p>
                        <p class="text-white">READY TO MAKE YOUR MARK? LET'S START CRAFTING YOUR DIGITAL IDENTITY!</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="brand-dev-img">
                            <img src="assests/images/Branding/brand-online.png" alt="App Development">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-white same-all text-center">Our Simple Process for Extraordinary Branding</h2>
                        <p class="text-white text-center">Our experts are dedicated to boosting your brand recognition.
                            They help you achieve visible results in no time.</p>
                    </div>
                </div>

                <div class="row brand-tab-row">
                    <div class="col-lg-4">
                        <div class="tabs">
                            <div class="tab-buttons">
                                <button class="tab-btn active" data-tab="tab1">Discovery & Research</button>
                                <button class="tab-btn" data-tab="tab2">Strategic Planning</button>
                                <button class="tab-btn" data-tab="tab3">Creative Development</button>
                                <button class="tab-btn" data-tab="tab4">Implementation and Support</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-panel active" id="tab1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="assests/images/Branding/tab-image.png">
                                        <div class="tab-cotnt">
                                            <h2 class="text-white">Discovery & Research</h2>
                                            <p class="text-white">We start by understanding your brand's goals. We
                                                research your market, competitors, and audience. This helps us identify
                                                key opportunities. Our insights guide the creation of a strong brand
                                                strategy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-panel" id="tab2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="assests/images/Branding/strategy.png">
                                        <div class="tab-cotnt">
                                            <h2 class="text-white">Strategic Planning</h2>
                                            <p class="text-white">We develop a clear branding strategy. This includes
                                                positioning, messaging, and visual identity. We align everything with
                                                your business objectives. Our plan ensures consistency and maximizes
                                                impact across all platforms. You're involved in every step.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-panel" id="tab3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="assests/images/Branding/creative.png">
                                        <div class="tab-cotnt">
                                            <h2 class="text-white">Creative Development</h2>
                                            <p class="text-white">Our team designs compelling brand visuals. Logos,
                                                color schemes, and typography are crafted to tell your story. We focus
                                                on creating a unique identity. This ensures your brand stands out and
                                                captures attention in your industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-panel" id="tab4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="assests/images/Branding/team.png">
                                        <div class="tab-cotnt">
                                            <h2 class="text-white">Implementation and Support</h2>
                                            <p class="text-white">We launch your brand with precision. Our team ensures
                                                smooth execution across all channels. From websites to social media, we
                                                maintain consistency. Continuous support helps your brand stay relevant.
                                                This helps you thrive in an ever-changing market.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="digital-two-btn global-dtb">
                            <a href="#">Discuss Your Project</a>
                            <a href="#" id="openPopup">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-home section-bg">
            <div class="container">
                <div class="row justify-content-space-between">
                    <div class="col">
                        <h2 class="text-white"><span>Frequently </span>Asked Questions</h2>
                        <div class="faqss">
                            <div class="quwstion">
                                <button class="accordions">Why is branding important for my business?</button>
                                <div class="panel">
                                    <p>Branding builds trust and recognition. It sets your business apart from
                                        competitors</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">Do Logic works offer rebranding services?</button>
                                <div class="panel">
                                    <p>Yes, we refresh brands to improve their image, market position, and audience
                                        connection.</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">How fast can you develop custom software?</button>
                                <div class="panel">
                                    <p>The time needed to build custom software depends on the project's complexity and
                                        its requirements.</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">How much does branding cost?</button>
                                <div class="panel">
                                    <p>Costs depend on your needs. We offer custom pricing based on your goals and
                                        business size.</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">Can you help with social media branding?</button>
                                <div class="panel">
                                    <p>Yes, we create strategies for consistent messaging and engaging visuals across
                                        platforms.</p>
                                </div>
                            </div>

                            <div class="quwstion">
                                <button class="accordions">Will I be involved in the branding process?</button>
                                <div class="panel">
                                    <p>Yes, we involve you at every step to ensure the final result aligns with your
                                        vision.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="animated-row section new-york-hire constructionpage_custom_faqs_section pt-b-80 section-bg"
            id="hireobserverID">
            <div class="bg-white-heading-custom">
                <div class="container">
                    <div class="row white-bg-heading-custom-row">
                        <div class="col-md-12">
                            <h2 class="section-title"><span>Questionnaire</span> Section&nbsp;</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <nav id="sidenavcustomnavccnav" class="sidenavcustomnavccnav">
                            <ul class="faq_section">
                                <li><a href="#section-1" class="hire-tabs current" id="currentIDRRRRRRR">How Logic Works
                                        Sets Trends in Branding</a></li>
                                <li><a href="#section-2" class="hire-tabs">How Logic Works Brings Exceptional Branding
                                        Visions to Life</a></li>
                                <li><a href="#section-3" class="hire-tabs">The Numbers Prove the Power of Great
                                        Branding</a></li>
                                <li><a href="#section-4" class="hire-tabs">How We Drive Brand Growth Through
                                        Comprehensive Solutions</a></li>
                                <li><a href="#section-5" class="hire-tabs">What Makes Our Branding Process Unmatched</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-md-6 col-stick">
                        <main>
                            <section class="sec-info" id="section-1">
                                <h2>How Logic Works Sets Trends in Branding</h2>
                                <ul>
                                    <p>We lead the industry with innovative branding solutions. By using the latest
                                        trends, we create strategies that work. Every element is designed for impact and
                                        consistency. From brand identity to messaging, we handle it all. Our approach
                                        ensures creativity and functionality. This keeps your brand relevant in any
                                        market. Digital, print, and experiential branding are part of our services. Each
                                        project helps businesses stand out and grow. At Logic Works, we redefine
                                        industry standards with every project.</p>
                                </ul>
                            </section>
                            <section class="sec-info" id="section-2">
                                <h2>How Logic Works Brings Exceptional Branding Visions to Life</h2>
                                <ul>
                                    <p>We bring brands to life with strategy and precision. Our expertise includes brand
                                        development and targeted campaigns. We focus on aligning your brand with your
                                        vision. From identity design to marketing collateral, every step is refined.
                                        Each project reflects your unique story and values. Clients trust us to deliver
                                        branding that connects with audiences. At Logic Works, we craft solutions that
                                        resonate and leave lasting impressions.</p>
                                </ul>
                            </section>
                            <section class="sec-info" id="section-3">
                                <h2>The Numbers Prove the Power of Great Branding</h2>
                                <ul>
                                    <p>Strong branding creates measurable results for businesses. A powerful brand can
                                        increase recognition by up to 80%. Many clients see growth after working with
                                        us. We've completed hundreds of projects across various industries. Every
                                        project enhances visibility and builds trust. Our solutions focus on creating
                                        strong audience connections. With strategic planning, we make branding a tool
                                        for success. Numbers show the value of impactful branding.</p>
                                </ul>
                            </section>
                            <section class="sec-info" id="section-4">
                                <h2>How We Drive Brand Growth Through Comprehensive Solutions</h2>
                                <ul>
                                    <p>Our branding solutions go beyond visuals. We focus on strategies that deliver
                                        growth and trust. Research guides every decision to ensure relevance. Each
                                        solution combines creativity and market insights. Our services include identity
                                        creation, messaging, and campaigns. These solutions are customized to meet
                                        business goals. A cohesive brand becomes the key to long-term success. At Logic
                                        Works, we deliver branding that makes an impact. Our goal is to create solutions
                                        that help businesses excel.</p>
                                </ul>
                            </section>
                            <section class="sec-info" id="section-5">
                                <h2>What Makes Our Branding Process Unmatched</h2>
                                <ul>
                                    <p>We understand your goals and audience. Collaboration is a key part of our
                                        process. Your input is included at every step of the way. From planning to
                                        delivery, we ensure satisfaction. Every solution reflects your values and
                                        identity. Our team works with care and precision. Strategy guides every decision
                                        for the best results. At Logic Works, our process creates solutions that stand
                                        out.</p>
                                </ul>
                            </section>
                        </main>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
include("includes/footer.php");
?>

<script>
    // Swiper for the "home" tab (already working)
    var swiper = new Swiper(".brand-logo", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper2 = new Swiper(".brand-logo-slider", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    // Swiper for the "fashion" tab
    var swiper1 = new Swiper(".brand-logo1", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper3 = new Swiper(".brand-logo-slider1", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper1,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
    // Swiper for the "hospitality" tab
    var swiper4 = new Swiper(".brand-logo2", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper5 = new Swiper(".brand-logo-slider2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper4,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    // Swiper for the "technology" tab
    var swiper6 = new Swiper(".brand-logo3", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper7 = new Swiper(".brand-logo-slider3", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper6,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
    // Swiper for the "healthcare" tab
    var swiper8 = new Swiper(".brand-logo4", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper9 = new Swiper(".brand-logo-slider4", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper8,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
    // Swiper for the "education" tab
    var swiper10 = new Swiper(".brand-logo5", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper11 = new Swiper(".brand-logo-slider5", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper10,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
    // Swiper for the "finance" tab
    var swiper12 = new Swiper(".brand-logo6", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper13 = new Swiper(".brand-logo-slider6", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper12,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
    // Swiper for the "food-and-beverage" tab
    var swiper14 = new Swiper(".brand-logo7", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper15 = new Swiper(".brand-logo-slider7", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper14,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    // Swiper for the "food-and-beverage" tab
    var swiper16 = new Swiper(".brand-logo8", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper17 = new Swiper(".brand-logo-slider8", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper16,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
    // Call swiper.update() in case you dynamically add more slides
    swiper.update();
    swiper2.update();
    swiper1.update();
    swiper3.update();
    swiper4.update();
    swiper5.update();
    swiper6.update();
    swiper7.update();
    swiper8.update();
    swiper9.update();
    swiper10.update();
    swiper11.update();
    swiper12.update();
    swiper13.update();
    swiper14.update();
    swiper15.update();
    swiper16.update();
    swiper17.update();
</script>







<script>
    document.addEventListener("DOMContentLoaded", () => {
        const tabButtons = document.querySelectorAll(".tab-btn");
        const tabPanels = document.querySelectorAll(".tab-panel");

        tabButtons.forEach(button => {
            button.addEventListener("click", () => {
                // Remove active class from all buttons and panels
                tabButtons.forEach(btn => btn.classList.remove("active"));
                tabPanels.forEach(panel => panel.classList.remove("active"));

                // Add active class to the clicked button and corresponding panel
                button.classList.add("active");
                const targetPanel = document.getElementById(button.dataset.tab);
                targetPanel.classList.add("active");
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".tab");
        const tabContents = document.querySelectorAll("[data-tab-content]");

        // Remove active class from all tab contents except the first one
        tabContents.forEach((content, index) => {
            if (index !== 0) {
                content.classList.remove("active");
            }
        });

        // Remove active class from all tabs except the first one
        tabs.forEach((tab, index) => {
            if (index !== 0) {
                tab.classList.remove("active");
            }
        });

        tabs.forEach((tab) => {
            tab.addEventListener("click", function () {
                const target = document.querySelector(tab.dataset.tabTarget);

                // Remove active class from all tabs and contents
                tabs.forEach((t) => t.classList.remove("active"));
                tabContents.forEach((content) => content.classList.remove("active"));

                // Add active class to the clicked tab and corresponding content
                tab.classList.add("active");
                target.classList.add("active");
            });
        });
    });
</script>