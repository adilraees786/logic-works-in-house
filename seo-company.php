<?php
$meta_title = "Trusted SEO Agency in Dubai | Logic Works – Rank Higher";
$meta_description = "Logic Works is a trusted SEO agency in Dubai offering data-driven SEO services to improve rankings, visibility, and long-term business growth.";
$keyword = 'Seo Company';
$canonical = "https://logicworks.ae/seo-company";
$custom_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://logicworks.ae/#seo-ccompany",
  "name": "SEO Company",
  "serviceType": "Search Engine Optimization (SEO)",
  "alternateName": "SEO Company",
  "url": "https://logicworks.ae/seo-company",
  "description": "As a results-driven SEO company, Logic Works helps businesses dominate search results through smart optimization and proven strategies.",
  "provider": {
    "@type": "Organization",
    "name": "Logic Works",
    "url": "https://logicworks.ae",
    "logo": "https://logicworks.ae/assests/images/head-logo.png",
    "telephone": "+971 52 950 2258",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Al Barsha 1, Sheikh Zayed Rd",
      "addressLocality": "Dubai",
      "addressRegion": "Dubai",
      "addressCountry": "AE"
    },
    "sameAs": [
      "https://www.facebook.com/logicworks.ae",
      "https://www.instagram.com/logicworks.ae/"
    ]
  },
  "areaServed": {
    "@type": "Place",
    "name": "Dubai, UAE"
  }
}
</script>
';

include("includes/head.php");
include("includes/header.php");
?>
<style>
    .seo-company {
        overflow: hidden;

    }

    .graph-sec h4 {
        font-weight: 600;
        text-transform: uppercase;
    }

    .graph-sec h4+img {
        width: 650px;
        text-align: right;
        display: block;
        margin-left: auto;
        margin-top: -380px;
    }

    .graph-sec h4 {
        width: 800px;
    }

    .strategic-row .col-lg-6:first-child:before {
        content: '';
        position: absolute;
        background: url(./assests/images/marketing/section-bg-img.webp);
        width: 400px;
        height: 400px;
        background-size: cover;
        left: -4.8%;
        top: -17.5%;
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

    .our-step .row:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/step-wave.png);
        width: 1028px;
        height: 226px;
        left: 15%;
        top: -8%;
        z-index: 0;
    }

    .our-info:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/info-graphic-border.png);
        width: 271px;
        height: 533px;
        background-size: 100%;
        right: 6%;
        top: -40%;
    }

    .seo-page-card.second-icon .col-lg-3:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/of-icon.png) no-repeat;
        width: 190px;
        height: 80px;
        background-size: 100%;
        left: -40%;
        z-index: 1;
        margin-top: 40px;
    }

    .seo-page-card.first-icon .col-lg-3:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/on-icon.png) no-repeat;
        width: 160px;
        height: 180px;
        background-size: 100%;
        left: -32%;
        z-index: 1;
        margin-top: 70px;
    }

    .seo-page-card.third-icon .col-lg-3:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/tech-icon.png) no-repeat;
        width: 280px;
        height: 50px;
        background-size: 100%;
        left: -54%;
        z-index: 1;
        margin-top: -20px;
    }

    .seo-page-card.third-icon .col-lg-3:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/tech-icon.png) no-repeat;
        width: 280px;
        height: 50px;
        background-size: 100%;
        left: -54%;
        z-index: 1;
        margin-top: -20px;
    }

    .seo-page-card.fourth-icon .col-lg-3:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/locll-icon.png) no-repeat;
        width: 180px;
        height: 75px;
        background-size: 100%;
        left: -37%;
        z-index: 1;
        margin-top: -100px;
    }

    .seo-page-card.fifth-icon .col-lg-3:before {
        content: '';
        position: absolute;
        background: url(assests/images/seo/ecomerce-icon.png) no-repeat;
        width: 130px;
        height: 145px;
        background-size: 100%;
        left: -28%;
        z-index: 1;
        margin-top: -190px;
    }

    @media (max-width: 600px) {
        .graph-sec h4+img {

            margin-top: 0px;
        }

        .blurb-seo-row .seo-blurb {
            display: block;
            text-align: center;
        }
    }
</style>

<main class="seo-company bg-black">
    <!-- Hero section -->
    <section class="seo-hero-sec section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="text-white"><span>Logic Works</span> – Trusted SEO Services Agency in Dubai
                    </h1>
                    <p class="text-white">Boost your online visibility, attract high-intent traffic, and increase conversions with Logic Works, a trusted SEO services agency in Dubai delivering data-driven, ROI-focused search engine optimization strategies for businesses of all sizes.</p>
                    <div class="seo-btn">
                        <a href="#">Live Chat</a>
                        <a href="#" id="openPopup">Get A Quote</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img src="assests/images/seo/banr-image.webp" alt="Banner-image-seo">
                </div>
            </div>
        </div>
    </section>
         <section class="twod-animation-service section-bg  pt-80 mb-80">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-white algn-centr same-all mb-20">
                       Core Pillars Of SEO
                    </h2>
                    <!-- <p class="heading-h2-subpara text-white fs-22 text-center mb-50">
                        Businesses rely on us for proven strategies that protect their online image and build lasting
                        credibility.
                    </p> -->
                </div>
                <div class="row twod-animation-service-slider">
                    <div class="col-lg-4">
                        <div class="td-animation-wcu-card td-animation-service-card  ">
                            <img src="assests/images/seo/pillar-image-1.webp"
                                alt="online-repo-img-004">
                            <div class="td-animation-service-card-bottom-content py-50 px-20">
                                <h4 class="fw-700 fs-24 text-primary-theme">On-Page SEO</h4>
                                <p class="fs-13 mb-20">
                                    Optimize every on-site element for higher rankings and better user experience. Our search engine optimization services in Dubai include keyword optimization, content structure, internal linking, metadata enhancement, and UX alignment to ensure search engines and users love your site..
                                    <!-- <a href="#"
                                        class="text-primary-theme text-decoration-none">Read
                                        More</a> -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="td-animation-wcu-card td-animation-service-card  ">
                            <img src="assests/images/seo/pillar-image-2.webp"
                                alt="online-repo-img-001">
                            <div class="td-animation-service-card-bottom-content py-65 px-20">
                                <h4 class="fw-700 fs-24 text-primary-theme">Off-Page SEO</h4>
                                <p class="fs-13 mb-20">
                               Build authority and trust with ethical link-building and brand mentions. As a search engine optimization agency in Dubai, we focus on high-quality backlinks, digital PR, citations, and outreach strategies that strengthen domain authority and improve rankings.
                                    <!-- <a href="#"
                                        class="text-primary-theme text-decoration-none">Read
                                        More</a> -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="td-animation-wcu-card td-animation-service-card">
                            <img src="assests/images/seo/pillar-image-3.webp"
                                alt="online-repo-img-002">
                            <div class="td-animation-service-card-bottom-content py-75 px-20">
                                <h4 class="fw-700 fs-24 text-primary-theme">Technical SEO</h4>
                                <p class="fs-13 mb-20">
                                 Our technical SEO specialists ensure your website is crawlable, fast, secure, and compliant with Google’s latest standards. From site speed and schema to mobile optimization and indexation, we fix issues that block growth.
                                    <!-- <a href="#"
                                        class="text-primary-theme text-decoration-none">Read
                                        More</a> -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="td-animation-wcu-card td-animation-service-card  ">
                            <img src="assests/images/seo/pillar-image-4.webp"
                                alt="online-repo-img-003">
                            <div class="td-animation-service-card-bottom-content py-75 px-20">
                                <h4 class="fw-700 fs-24 text-primary-theme">Ecommerce SEO</h4>
                                <p class="fs-13 mb-20">
                                    Drive qualified traffic and sales with tailored ecommerce SEO strategies. We optimize product pages, categories, filters, and structured data to improve visibility and conversions for online stores across Dubai.
                                    <!-- <a href="#"
                                        class="text-primary-theme text-decoration-none">Read
                                        More</a> -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="td-animation-wcu-card td-animation-service-card  ">
                            <img src="assests/images/seo/pillar-image-5.webp"
                                alt="online-repo-img-003">
                            <div class="td-animation-service-card-bottom-content py-75 px-20">
                                <h4 class="fw-700 fs-24 text-primary-theme">Content SEO</h4>
                                <p class="fs-13 mb-20">
                                   High-quality content fuels rankings. Our SEO content strategies focus on search intent, semantic keywords, topical authority, and conversion-driven copy helping brands rank higher and engage better..
                                    <!-- <a href="#"
                                        class="text-primary-theme text-decoration-none">Read
                                        More</a> -->
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="d-flex justify-content-center">
                    <!-- <a href="" class="btn-primary">View Case Studies</a> -->
                </div>
                <div class="twod-animation-wcu-arrows twod-animation-service-arrows ">
                    <div class="left-arrow">

                        <img src="assests/images/android-app-development/left-arrow.png" alt="">
                    </div>
                    <div class="right-arrow">

                        <img src="assests/images/android-app-development/right-arrow.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="digital-next-sec seo-second-sec section-bg"
        style="background-image: url(assests/images/marketing/bg-pattern.webp);">
        <div class="container" style="display:block; padding: 0;">
            <div class="row head-service">
                <div class="col">
                    <h2 class="text-white algn-centr same-all">Achieve Top Search Rankings with a Trusted SEO Services Company in Dubai</h2>
                </div>
            </div>
            <div class="row strategic-row align-items-center mb-50">
                <div class="col-lg-6">
                    <img src="assests/images/seo/seo-main.webp" alt="Seo-img" class="scrol-img">
                </div>
                <div class="col-lg-6">
                    <p class="text-white">Logic Works is a results-oriented SEO services company in Dubai, helping brands dominate search results through proven, ethical, and scalable SEO strategies. Our expert SEO team combines technical expertise, content intelligence, and local market insights to deliver measurable growth across competitive industries in Dubai and the UAE.</p>
                    <div class="row blurb-seo-row">
                        <div class="col-lg-6">
                            <div class="seo-blurb">
                                <div class="seo-icon"><img src="assests/images/seo/improve.webp" alt="improve"></div>
                                <div class="seo-text">
                                    <h3 class="text-white">Increase organic traffic</h3>
                                </div>
                            </div>

                            <div class="seo-blurb">
                                <div class="seo-icon"><img src="assests/images/seo/analyze.webp" alt="analyze"></div>
                                <div class="seo-text">
                                    <h3 class="text-white">Rank for high-value keywords</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="seo-blurb">
                                <div class="seo-icon"><img src="assests/images/seo/drive.webp" alt="drive"></div>
                                <div class="seo-text">
                                    <h3 class="text-white">Improve conversions & ROI</h3>
                                </div>
                            </div>

                            <div class="seo-blurb">
                                <div class="seo-icon"><img src="assests/images/seo/boost.webp" alt="boost"></div>
                                <div class="seo-text">
                                    <h3 class="text-white">Strengthen long-term digital visibility</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="live-chat-btns">
                        <a href="#" class="live-chats">Live Chat</a>
                        <a href="#" id="openPopup">Get A Quote</a>
                    </div>
                </div>
            </div>

       
  

             <!-- <div class="row info-graphic align-items-center">
                <div class="col-lg-5">
                    <div class="our-info">
                        <h2 class="text-white">Core Pillars Of SEO</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="seo-page-card first-last first-icon animate__fadeInLeft" data-aos="fade-up">
                        <div class="row align-items-center">

                            <div class="col-lg-3">
                                <img class="circle-icon" src="assests/images/seo/on-page-icon.png">
                            </div>

                            <div class="col-lg-8">
                                <h4>On-Page SEO</h4>
                                <p>Optimize website structure, titles, meta descriptions, and URLs. Focus on keyword
                                    integration, internal linking, and user-friendly design. Improve content relevance,
                                    page speed, and mobile compatibility for higher rankings.</p>
                            </div>

                            <div class="col-lg-1">
                                <img src="assests/images/seo/on-page-bar.png">
                            </div>

                        </div>
                    </div>

                    <div class="seo-page-card second-fourth second-icon animate__fadeInLeft" data-aos="fade-up">
                        <div class="row align-items-center">

                            <div class="col-lg-3">
                                <img class="circle-icon" src="assests/images/seo/off-page-icon.png">
                            </div>

                            <div class="col-lg-8">
                                <h4>Off-Page SEO</h4>
                                <p>Build backlinks from trusted sites to enhance domain authority. Engage in social
                                    media, forums, and online communities. Focus on creating shareable content and
                                    promoting brand mentions across the web.</p>
                            </div>

                            <div class="col-lg-1">
                                <img src="assests/images/seo/off-page-bar.png">
                            </div>

                        </div>
                    </div>

                    <div class="seo-page-card third-only third-icon animate__fadeInLeft" data-aos="fade-up">
                        <div class="row align-items-center">

                            <div class="col-lg-3">
                                <img class="circle-icon" src="assests/images/seo/technical-icon.png">
                            </div>

                            <div class="col-lg-8">
                                <h4>Technical SEO</h4>
                                <p>Ensure website speed, mobile responsiveness, and secure browsing. Optimize XML
                                    sitemaps, fix broken links, and improve website navigation. Implement structured
                                    data for better search engine understanding and ranking.</p>
                            </div>

                            <div class="col-lg-1">
                                <img src="assests/images/seo/technical-icon-bar.png">
                            </div>

                        </div>
                    </div>

                    <div class="seo-page-card second-fourth fourth-icon animate__fadeInLeft" data-aos="fade-up">
                        <div class="row align-items-center">

                            <div class="col-lg-3">
                                <img class="circle-icon" src="assests/images/seo/local-icon.png">
                            </div>

                            <div class="col-lg-8">
                                <h4>Ecommerce SEO</h4>
                                <p>Optimize product pages with detailed descriptions, images, and keywords. Improve site
                                    structure, filters, and navigation for better user experience. Focus on optimizing
                                    conversion rates and building trust through reviews.</p>
                            </div>

                            <div class="col-lg-1">
                                <img src="assests/images/seo/local-bar.png">
                            </div>

                        </div>
                    </div>

                    <div class="seo-page-card first-last fifth-icon animate__fadeInLeft" data-aos="fade-up">
                        <div class="row align-items-center">

                            <div class="col-lg-3">
                                <img class="circle-icon" src="assests/images/seo/ecommerce-icon.png">
                            </div>

                            <div class="col-lg-8">
                                <h4>Content SEO</h4>
                                <p>Create high-quality, keyword-rich content that adds value. Focus on readability,
                                    proper formatting, and engaging multimedia. Regularly update content, target user
                                    intent, and optimize for featured snippets to rank higher.</p>
                            </div>

                            <div class="col-lg-1">
                                <img src="assests/images/seo/ecommerce-icon-bar.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>  -->

            <div class="row tablet-show">
                <div class="col">
                    <img src="assests/images/seo/Group-tab.png" />
                </div>
            </div>

            <div class="row our-step">
                <div class="col">
                    <h2 class="text-white same-all text-center">Our Proven 4-Step SEO Process</h2>

                    <div class="row">
                        <div class="col-lg-3 animate__fadeInLeft" data-aos="fade-right" data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <h2 class="text-white counter-txt" style="background-color: #EDAF34;">1</h2>
                            <hr>
                            <div class="step-bg">
                                <h2>In-Depth SEO Audit</h2>
                                <p>We conduct a comprehensive SEO audit covering technical issues, competitors, keyword gaps, and growth opportunities building a custom roadmap aligned with your business goals.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 animate__fadeInLeft" data-aos="fade-right" data-aos-offset="400"
                            data-aos-easing="ease-in-sine">
                            <h2 class="text-white counter-txt" style="background-color: #03A3C5;">2</h2>
                            <hr>
                            <div class="step-bg py-50">
                                <h2>Keyword Research & Optimization</h2>
                                <p>Our team identifies high-intent, locally targeted keywords such as local SEO services Dubai to drive qualified traffic and faster ROI.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 animate__fadeInLeft" data-aos="fade-right" data-aos-offset="500"
                            data-aos-easing="ease-in-sine">
                            <h2 class="text-white counter-txt" style="background-color: #463D76;">3</h2>
                            <hr>
                            <div class="step-bg py-50">
                                <h2>On-Page & Technical SEO</h2>
                                <p>We implement on-page and technical enhancements to strengthen site health, rankings, and user experience.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 animate__fadeInLeft" data-aos="fade-right" data-aos-offset="600"
                            data-aos-easing="ease-in-sine">
                            <h2 class="text-white counter-txt" style="background-color: #D1342F;">4</h2>
                            <hr>
                            <div class="step-bg py-50">
                                <h2>Ongoing Monitoring & Reporting</h2>
                                <p>Transparent reporting, performance tracking, and continuous optimization ensure consistent growth and adaptability to algorithm updates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center transform-row">
                <div class="col-lg-4">
                    <img src="assests/images/marketing/banda.webp" alt="seo-company-001">
                </div>
                <div class="col-lg-8">
                    <h2 class="text-white same-all text-end">Start Ranking Higher with the Best SEO Services in Dubai
</h2>
                    <div class="digital-two-btn">
                         <a href="tel:+971529502258">Call Now</a>
                        <a href="javascript:void(0)" onclick="openTawkChat()">Start Live Chat</a>
                    </div>
                </div>
            </div>

            <div class="row results-row pb-0 pt-50 ">
                <div class="col graph-sec">
                    <h2 class="text-white same-all text-center"> RESULTS THAT SPEAK FOR THEMSELVES"</h2>
                    <div>
    <p class="exter-para mb-10">Recognized across platforms for excellence in search engine marketing agency Dubai services and SEO performance.</p>
    <p class="exter-para mb-10">Logic Works is more than SEO. As a full-service search engine marketing agency in Dubai, we also deliver paid growth solutions, including Google Ads and SEM services in Dubai, ensuring complete visibility across organic and paid search channels</p>
  
</div>
                    <h4 class="text-white"><img src="assests/images/seo/la1.png"> 10+ years of SEO expertise</h4>
                    <h4 class="text-white"><img src="assests/images/seo/la2.png"> 95% client retention rate</h4>
                    <h4 class="text-white"><img src="assests/images/seo/la3.png"> 100+ websites ranked on Page 1</h4>
                    <h4 class="text-white"><img src="assests/images/seo/la4.png"> 50K+ monthly organic visitors generated</h4>
                    <img src="assests/images/seo/Result.webp" alt="result-seo" />
                </div>
            </div>

        </div>
        </div>


        </div>
        </div>

    </section>
 
    <section class="">
        <?php
        include("includes/clint-review.php");
        ?>
    </section>
    <!-- review section -->
    <!-- <section class="our-case-section section-bg pt-b-80 service-main-review">
        <div class="container">
            <div class="row justify-content-space-between our-reviews">
                <div class="col">
                    <h2 class="text-center text-white">See How <span>Logic Works SEO</span> Drives Client's Growth
                    </h2>
                    <p class="text-white text-center">Clients consistently praise our innovative solutions, thoughtful support, and the tangible results we deliver to them.</p>
                </div>
            </div>

            <div class="row justify-content-space-between slider-reviews">
                <div class="col-lg-5 col-md-6">
                    <div class="text-start reive-images">
                        <img src="assests/images/Goodfirms.webp">
                        <img src="assests/images/Trust.webp">
                        <img src="assests/images/Clutch.webp">
                        <img src="assests/images/Bark.webp">
                    </div>
                    <div class="live-chat-btns">
                        <a href="#" class="live-chats">Live Chat</a>
                        <a href="#" id="openPopup">Get A Quote</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="main-vertical-slide">
                        <div class="testi-mainn">
                            <div class="tesi-roww">
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/reviews-001.jpg"></div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">Emily W.</h4>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">Their SEO strategies boosted our rankings and delivered great results!</p>
                                </div>
                            </div>

                            <div class="tesi-roww">
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/Layer-525.png"></div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">James R.</h4>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">Logic Works made SEO simple and effective for our business.</p>
                                </div>
                            </div>

                            <div class="tesi-roww">
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/people-3.png"></div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">Emma P.</h4>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">We saw immediate improvements in traffic and conversions with Logic Works.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
       <section class="faq-home section-bg mt-50">
        <div class="container">
            <div class="row justify-content-space-between">
                <div class="col">
                    <h2 class="text-white text-center"><span>FAQ</span>'S</h2>
                    <div class="faqss">
                        <div class="quwstion">
                            <button class="accordions">What does an SEO services agency in Dubai do?</button>
                            <div class="panel">
                                <p>An SEO services agency in Dubai helps businesses improve their search engine rankings, organic traffic, and online visibility through technical SEO, content optimization, link building, and local SEO strategies.</p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">How long does SEO take to show results in Dubai?
</button>
                            <div class="panel">
                                <p>SEO typically shows measurable improvements within 3–6 months, depending on competition, website health, and keyword difficulty.
                                </p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">Do you offer local SEO services in Dubai?</button>
                            <div class="panel">
                                <p>Yes, we specialize in local SEO services Dubai, optimizing Google Business Profiles, local citations, and location-based keywords to help businesses rank in local searches.</p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions"> Is SEO better than paid ads?</button>
                            <div class="panel">
                                <p>SEO delivers long-term, sustainable traffic, while paid ads offer instant visibility. Many businesses benefit from combining SEO with SEM services in Dubai for maximum reach.
                                </p>
                            </div>
                        </div>
                        <div class="quwstion">
                            <button class="accordions"> Why choose Logic Works as your SEO consultant in Dubai?</button>
                            <div class="panel">
                                <p>Our team combines technical expertise, data-driven strategies, transparent reporting, and deep local market knowledge making us a trusted SEO consultant in Dubai for growth-focused brands.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include("includes/footer.php");
?>