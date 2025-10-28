<?php
$meta_title = "Professional Logo Design Services | Logic Works";
$meta_description = "Get professional logo design services in Dubai. Unique logos specifically designed to match the essence and objectives of your brand. Get in touch with us now!";
$keyword = 'Logo Design Services Dubai';
$canonical = "https://logicworks.ae/logo-design-services-dubai";
include("includes/head.php");
include("includes/header.php");
?>
<style>
    html {
        scroll-behavior: smooth;
    }

    .log-bef:before {
        content: '';
        position: absolute;
        background: url(assests/images/logo-design/habibi.webp);
        width: 700px;
        height: 745px;
        background-size: 80%;
        left: auto;
        right: auto;
        top: 0%;
        z-index: 1;
        margin-top: -18px;
        background-repeat: no-repeat;
    }

    .testimonial-area-1 {
        margin-left: -60px !important;
        margin-right: -60px !important;
    }

    .logotab-sec p {
        margin-top: 0px;
    }

    .our-idea {
        padding-top: 0px;
    }

    div#hero-sec .web-dev .sub-contetn {
        max-width: 460px;
        margin: auto -280px auto auto;
    }

    div#hero-sec .web-dev h2.robo-font.text-start {
        margin-left: 0px;
    }

    .services {
        overflow: hidden;
    }

    .counter-sec-logo {
        background-image: url(assests/images/logo-design/tabs-bg.webp);
        background-repeat: no-repeat;
        background-position: bottom center;
        background-size: contain;
    }

    .logotab-sec {
        background-image: url(assests/images/logo-design/tabs-bg.webp);
        background-repeat: no-repeat;
        background-position: top center;
        background-size: contain;
    }

    .logojourney-sec {
        background-image: url(assests/images/logo-design/journey-bg.webp);
        background-repeat: no-repeat;
        background-position: bottom center;
    }

    .servicess-section {
        background-image: url(assests/images/serice-bg.webp);
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
        background: url(assests/images/phon-icon.webp) no-repeat;
    }

    .quwstion .panel ul li:before {
        content: '';
        position: absolute;
        background: url(assests/images/arrow-icon.webp) no-repeat;
        width: 13px;
        height: 14px;
        margin-left: -17px;
        margin-top: 5px;
    }

    .fixed-scroll-area-link li a.active:before {
        content: '';
        position: absolute;
        background: url(assests/images/arrow-icon.webp) no-repeat;
        width: 13px;
        height: 14px;
        left: 41px;
        margin-top: 8px;
    }

    .logotab-sec .main-tow-btn a:first-child:before {
        content: '';
        position: absolute;
        background: url(assests/images/right-arrow-mind.png) no-repeat;
        width: 68px;
        height: 68px;
        right: -2%;
        margin-top: -20px;
        z-index: 4;
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
        background: url(assests/images/arrow-icon.webp) no-repeat;
        width: 13px;
        height: 14px;
        left: 41px;
        margin-top: 8px;
    }

    .slider-logo ul#myTab li a {
        color: #fff;
        border: none;
    }

    .slider-logo ul#myTab li a.active {
        background-color: #59249a !important;
        color: #fff !important;
        border: 50px !important;
        border: 1px solid #fff;
        border-radius: 50px;
        box-shadow: #10edfd 0px 0px 5px 4px;
    }

    .slider-logo ul#myTab {
        border: none;
        justify-content: center;
    }

    .slider-logo ul#myTab li a {
        font-size: 14px;
        margin: 15px 0px;
    }

    .logo-design .nesw-form form input[type="button"] {
        background-image: linear-gradient(to right, #9749ea, #e97894);
        color: #fff;
        font-size: 20px;
        border: 0px;
        padding: 21px 20px;
        cursor: pointer;
    }

    .logo-design .dubai-row-mind .col-lg-4 img {
        animation: none;
    }
    .logo-design .swiper-pagination {
    position: absolute;
    text-align: center;
    transition: .3s opacity;
    transform: translate3d(0,0,0);
    z-index: 10
}
</style>
<main class="logo-design bg-black">
    <!--======== / Hero Section ========-->
    <div class="hero-section logo-design" id="hero-sec">
        <div class="container">
            <div class="hero-style7 text-center">
                <div class="row justify-content-space-between hero-row">
                    <img src="assests/images/logo-design/habibi.png" class="for-mobe">
                    <div class="col-lg-6 col-md-6 log-bef">
                        <h2 class="hero-title wow img-custom-anim-top text-smoke">LOGO</h2>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h2 class="hero-title wow img-custom-anim-top text-smoke text-center">DESIGN</h2>
                    </div>
                </div>

                <div class="row justify-content-space-between color-main testimonial-area-1">
                    <div class="col-lg-6 col-md-6">
                        <div class="sub-contetn our-idea">
                            <h2 class="robo-font text-start">OUR IDEA?</h2>
                            <div class="px-5">
                                <a href="#" class="live-chats">Live Chat</a>
                                <a href="#" id="openPopup">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 web-dev" data-aos="fade-up">
                        <div class="sub-contetn">
                            <h1 class="fw-800 text-white fs-60 text-start">#1 Professional <br>Logo Design <br><span
                                    class="fw-300 fs-50">Services in
                                    Dubai</span></h1>
                            <p class="text-start feature-card-text">We use our creativity and innovation to craft bold,
                                futuristic logo designs that set new benchmarks in branding.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Why Choose Section -->
    <section class="why-choose section-bg pt-b-80" id="choose-why">
        <div class="container">
            <div class="row justify-content-space-between">
                <div class="col">
                    <h4 class="text-white text-center">Why Choose Us</h4>
                    <h2 class="text-white text-center">Why We're the Secret Behind Memorable Logos</h2>
                    <p class="text-white text-center">Logic Works understands that every brand has its unique identity
                        and vision. We craft custom logo designs tailored to your specific needs. Our <a
                            href="https://logicworks.ae/logo-design-company">Professional logo</a>
                        designs inspire trust and make your brand unforgettable.</p>
                    <div class="columns-container">
                        <div class="col-main">
                            <div class="main-hov">
                                <div class="img-with-txt">
                                    <div class="img-columns"><img src="assests/images/Competitive-edge(3).webp"></div>
                                    <div class="txt-columns">
                                        <h3 class="text-white">Custom Creations</h3>
                                    </div>
                                </div>
                                <p class="text-white text-start">Logic Works creates logos that reflect your brand's
                                    unique identity and goals. Each design is based on thorough research to ensure it
                                    fits your vision and industry needs. We deliver logos that are eye-catching and
                                    memorable by blending creativity and strategy.
                                </p>
                            </div>
                        </div>
                        <div class="col-main">
                            <div class="main-hov">
                                <div class="img-with-txt">
                                    <div class="img-columns"><img src="assests/images/Competitive-edge(4).webp"></div>
                                    <div class="txt-columns">
                                        <h3 class="text-white">Trend Integration</h3>
                                    </div>
                                </div>
                                <p class="text-white text-start">Our designs follow current trends to keep your logo
                                    fresh and relevant. We balance modern aesthetics with originality to ensure your
                                    brand connects with today's audience. This approach enhances your brand's appeal and
                                    keeps you ahead of the competition.</p>
                            </div>
                        </div>
                        <div class="col-main">
                            <div class="main-hov">
                                <div class="img-with-txt">
                                    <div class="img-columns"><img src="assests/images/Competitive-edge(2).webp"></div>
                                    <div class="txt-columns">
                                        <h3 class="text-white">Platform Versatility</h3>
                                    </div>
                                </div>
                                <p class="text-white text-start">A professional logo boosts credibility and builds
                                    trust. Our designs communicate quality, reliability, and professionalism that help
                                    customers connect with your brand. A polished logo builds trust and credibility,
                                    strengthening your brand's reputation and fostering customer loyalty.</p>
                            </div>
                        </div>
                        <div class="col-main">
                            <div class="main-hov">
                                <div class="img-with-txt">
                                    <div class="img-columns"><img src="assests/images/Competitive-edge(1).webp"></div>
                                    <div class="txt-columns">
                                        <h3 class="text-white">Trust Building</h3>
                                    </div>
                                </div>
                                <p class="text-white text-start">We build better customer connections for your app by
                                    putting a higher priority on user-centric design and transparent communication. In
                                    order to develop an app that truly connects with your target audience and keeps them
                                    interested and devoted, we think it's important to understand their demands.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get A Website Section -->
    <section class="section-bg pt-b-80 journey-sec logojourney-sec" id="project-in-minds">
        <div class="container" style="display: block;">
            <div class="row justify-content-space-between project-in-mind"
                style="background-color: #59249A; border-radius: 30px;">
                <div class="col-lg-7 col-md-6">
                    <h2 class="text-white">Looking for a Logo That Drives Business Growth?</h2>
                    <div class="main-tow-btn">
                        <a href="#">Contact Us</a>
                        <a href="#" class="live-chats">Start Live Chat</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="assests/images/Get-Website.webp">
                </div>
            </div>

            <div class="row slider-logo">
                <div class="col">
                    <h2 class="text-white algn-centr logo-h2">Witness the Power of Creativity in Our Logo Design
                        <span>Portfolio</span>
                    </h2>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Corporate</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Vintage & Retro</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Geometric</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="gaming-tab" data-bs-toggle="tab" href="#gaming" role="tab"
                                aria-controls="gaming" aria-selected="false">Sports</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="health-tab" data-bs-toggle="tab" href="#health" role="tab"
                                aria-controls="health" aria-selected="false">Health</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="mascot-tab" data-bs-toggle="tab" href="#mascot" role="tab"
                                aria-controls="mascot" aria-selected="false">Mascot</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ecommerce-tab" data-bs-toggle="tab" href="#ecommerce" role="tab"
                                aria-controls="ecommerce" aria-selected="false">Ecommerce</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="minimalist-tab" data-bs-toggle="tab" href="#minimalist" role="tab"
                                aria-controls="minimalist" aria-selected="false">Minimalist</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="monogram-tab" data-bs-toggle="tab" href="#monogram" role="tab"
                                aria-controls="monogram" aria-selected="false">Monogram</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="luxury-tab" data-bs-toggle="tab" href="#luxury" role="tab"
                                aria-controls="luxury" aria-selected="false">Luxury & Premium</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <swiper-container class="slider-tab-01 mySwiper" thumbs-swiper=".mySwiper1"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE_big.webp"
                                        alt="logo-design-portfolio-001" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE2_BIG.webp"
                                        alt="logo-design-portfolio-002" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE3_BIG.webp"
                                        alt="logo-design-portfolio-003" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE4_BIG.webp"
                                        alt="logo-design-portfolio-004" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE5_BIG.webp"
                                        alt="logo-design-portfolio-005" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-01 mySwiper1" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE_big.webp"
                                        alt="logo-design-portfolio-006" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE2_BIG.webp"
                                        alt="logo-design-portfolio-007" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE3_BIG.webp"
                                        alt="logo-design-portfolio-008" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE4_BIG.webp"
                                        alt="logo-design-portfolio-009" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/CORPORATE5_BIG.webp"
                                        alt="logo-design-portfolio-0010" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <swiper-container class="slider-tab-02 mySwiper" thumbs-swiper=".mySwiper2"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro_BIG.webp"
                                        alt="logo-design-portfolio-0011" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro2_BIG.webp"
                                        alt="logo-design-portfolio-0012" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro3_BIG.webp"
                                        alt="logo-design-portfolio-0013" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro4_BIG.webp"
                                        alt="logo-design-portfolio-0014" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro5_BIG.webp"
                                        alt="logo-design-portfolio-0015" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-02 mySwiper2" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro_BIG.webp"
                                        alt="logo-design-portfolio-0016" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro2_BIG.webp"
                                        alt="logo-design-portfolio-0017" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro3_BIG.webp"
                                        alt="logo-design-portfolio-0018" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro4_BIG.webp"
                                        alt="logo-design-portfolio-0019" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Vintage & Retro5_BIG.webp"
                                        alt="logo-design-portfolio-0020" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <swiper-container class="slider-tab-03 mySwiper" thumbs-swiper=".mySwiper3"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric_BIG.webp"
                                        alt="logo-design-portfolio-0021" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric2_BIG.webp"
                                        alt="logo-design-portfolio-0022" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric3_BIG.webp"
                                        alt="logo-design-portfolio-0023" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric4_BIG.webp"
                                        alt="logo-design-portfolio-0024" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric5_BIG.webp"
                                        alt="logo-design-portfolio-0025" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-03 mySwiper3" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric_BIG.webp"
                                        alt="logo-design-portfolio-0026" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric2_BIG.webp"
                                        alt="logo-design-portfolio-0027" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric3_BIG.webp"
                                        alt="logo-design-portfolio-0028" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric4_BIG.webp"
                                        alt="logo-design-portfolio-0029" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric5_BIG.webp"
                                        alt="logo-design-portfolio-0030" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="gaming" role="tabpanel" aria-labelledby="gaming-tab">
                            <swiper-container class="slider-tab-04 mySwiper" thumbs-swiper=".mySwiper4"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Sports_BIG.webp"
                                        alt="logo-design-portfolio-0031" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Sports2_BIG.webp"
                                        alt="logo-design-portfolio-0032" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Sports3_BIG.webp"
                                        alt="logo-design-portfolio-0033" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Sports4_BIG.webp"
                                        alt="logo-design-portfolio-0034" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Sports5_BIG.webp"
                                        alt="logo-design-portfolio-0035" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-04 mySwiper4" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric_BIG.webp"
                                        alt="logo-design-portfolio-0036" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric2_BIG.webp"
                                        alt="logo-design-portfolio-0037" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric3_BIG.webp"
                                        alt="logo-design-portfolio-0038" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric4_BIG.webp"
                                        alt="logo-design-portfolio-0039" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Geomatric5_BIG.webp"
                                        alt="logo-design-portfolio-0040" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
                            <swiper-container class="slider-tab-05 mySwiper" thumbs-swiper=".mySwiper5"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health_BIG.webp"
                                        alt="logo-design-portfolio-0041" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health2_BIG.webp"
                                        alt="logo-design-portfolio-0042" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health3_BIG.webp"
                                        alt="logo-design-portfolio-0043" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health4_BIG.webp"
                                        alt="logo-design-portfolio-0044" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health5_BIG.webp"
                                        alt="logo-design-portfolio-0045" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-05 mySwiper5" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health_BIG.webp"
                                        alt="logo-design-portfolio-0046" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health2_BIG.webp"
                                        alt="logo-design-portfolio-0047" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health3_BIG.webp"
                                        alt="logo-design-portfolio-0048" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health4_BIG.webp"
                                        alt="logo-design-portfolio-0049" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Health5_BIG.webp"
                                        alt="logo-design-portfolio-0050" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="mascot" role="tabpanel" aria-labelledby="mascot-tab">
                            <swiper-container class="slider-tab-06 mySwiper" thumbs-swiper=".mySwiper6"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot_BIG.webp"
                                        alt="logo-design-portfolio-0051" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot2_BIG.webp"
                                        alt="logo-design-portfolio-0052" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot3_BIG.webp"
                                        alt="logo-design-portfolio-0053" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot4_BIG.webp"
                                        alt="logo-design-portfolio-0054" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot5_BIG.webp"
                                        alt="logo-design-portfolio-0055" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-06 mySwiper6" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot_BIG.webp"
                                        alt="logo-design-portfolio-0056" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot2_BIG.webp"
                                        alt="logo-design-portfolio-0057" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot3_BIG.webp"
                                        alt="logo-design-portfolio-0058" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot4_BIG.webp"
                                        alt="logo-design-portfolio-0059" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Mascot5_BIG.webp"
                                        alt="logo-design-portfolio-0060" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                            <swiper-container class="slider-tab-07 mySwiper" thumbs-swiper=".mySwiper7"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce_BIG.webp"
                                        alt="logo-design-portfolio-0061" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce2_BIG.webp"
                                        alt="logo-design-portfolio-0062" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce3_BIG.webp"
                                        alt="logo-design-portfolio-0063" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce4_BIG.webp"
                                        alt="logo-design-portfolio-0064" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce5_BIG.webp"
                                        alt="logo-design-portfolio-0065" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-07 mySwiper7" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce_BIG.webp"
                                        alt="logo-design-portfolio-0066" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce2_BIG.webp"
                                        alt="logo-design-portfolio-0067" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce3_BIG.webp"
                                        alt="logo-design-portfolio-0068" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce4_BIG.webp"
                                        alt="logo-design-portfolio-0069" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Ecommerce5_BIG.webp"
                                        alt="logo-design-portfolio-0070" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="minimalist" role="tabpanel" aria-labelledby="minimalist-tab">
                            <swiper-container class="slider-tab-08 mySwiper" thumbs-swiper=".mySwiper8"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist_BIG.webp"
                                        alt="logo-design-portfolio-0071" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist2_BIG.webp"
                                        alt="logo-design-portfolio-0072" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist3_BIG.webp"
                                        alt="logo-design-portfolio-0073" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist4_BIG.webp"
                                        alt="logo-design-portfolio-0074" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist5_BIG.webp"
                                        alt="logo-design-portfolio-0075" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-08 mySwiper8" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist_BIG.webp"
                                        alt="logo-design-portfolio-0076" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist2_BIG.webp"
                                        alt="logo-design-portfolio-0077" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist3_BIG.webp"
                                        alt="logo-design-portfolio-0078" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist4_BIG.webp"
                                        alt="logo-design-portfolio-0079" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Minimalist5_BIG.webp"
                                        alt="logo-design-portfolio-0080" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="monogram" role="tabpanel" aria-labelledby="monogram-tab">
                            <swiper-container class="slider-tab-09 mySwiper" thumbs-swiper=".mySwiper9"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram_BIG.webp"
                                        alt="logo-design-portfolio-0081" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram2_BIG.webp"
                                        alt="logo-design-portfolio-0082" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram3_BIG.webp"
                                        alt="logo-design-portfolio-0083" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram4_BIG.webp"
                                        alt="logo-design-portfolio-0084" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram5_BIG.webp"
                                        alt="logo-design-portfolio-0085" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-09 mySwiper9" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram_BIG.webp"
                                        alt="logo-design-portfolio-0086" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram2_BIG.webp"
                                        alt="logo-design-portfolio-0087" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram3_BIG.webp"
                                        alt="logo-design-portfolio-0088" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram4_BIG.webp"
                                        alt="logo-design-portfolio-0089" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Monogram5_BIG.webp"
                                        alt="logo-design-portfolio-0090" />
                                </swiper-slide>
                            </swiper-container>
                        </div>
                        <div class="tab-pane fade" id="luxury" role="tabpanel" aria-labelledby="luxury-tab">
                            <swiper-container class="slider-tab-10 mySwiper" thumbs-swiper=".mySwiper10"
                                space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG.webp"
                                        alt="logo-design-portfolio-0091" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG2.webp"
                                        alt="logo-design-portfolio-0092" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG3.webp"
                                        alt="logo-design-portfolio-0093" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG4.webp"
                                        alt="logo-design-portfolio-0095" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG5.webp"
                                        alt="logo-design-portfolio-0095" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="slider-thumb-10 mySwiper10" space-between="10" slides-per-view="5"
                                free-mode="true" watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG.webp"
                                        alt="logo-design-portfolio-0096" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG2.webp"
                                        alt="logo-design-portfolio-0097" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG3.webp"
                                        alt="logo-design-portfolio-0098" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG4.webp"
                                        alt="logo-design-portfolio-0099" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="assests/images/logo-design/Luxury&Premium_BIG5.webp"
                                        alt="logo-design-portfolio-00100" />
                                </swiper-slide>
                            </swiper-container>
                        </div>

                        <!-- <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
                            thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-01.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-02.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-03.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-01.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-02.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-03.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-01.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-02.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/slide-03.png" />
                            </swiper-slide>
                        </swiper-container>

                        <swiper-container class="mySwiper2" space-between="10" slides-per-view="5" free-mode="true"
                            watch-slides-progress="true">
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-01.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-02.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-03.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-01.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-02.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-03.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-01.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-02.png" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="assests/images/logo-design/pagi-slide-03.png" />
                            </swiper-slide>
                        </swiper-container> -->
                    </div>
                </div>
            </div>
    </section>

    <!-- Portfolio Section -->
    <section class="logotab-sec section-bg pt-b-80">
        <div class="container" style="display: block;">
            <div class="row">
                <div class="col">
                    <h2 class="text-white algn-centr logo-h2">Our Simple Process for Extraordinary Logo Design
                        Brilliance</h2>
                    <p class="text-white text-center">Our simple process combines creativity, research, and
                        collaboration to craft logos that represent your brand with precision and impact.</p>
                    <div class="unique-tab-container">
                        <button class="unique-tab-button active-tab"
                            data-target="UniqueConsultation">Consultation</button>
                        <button class="unique-tab-button" data-target="UniqueConcept">Research</button>
                        <button class="unique-tab-button" data-target="UniqueRevisions">Logo Creation</button>
                        <button class="unique-tab-button" data-target="UniqueDelivery">Delivery</button>
                    </div>
                    <div class="tab-delivery">
                        <div class="unique-tab-container">
                            <div id="UniqueConsultation" class="unique-tab-content" style="display: block;">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h3>Brand Consultation</h3>
                                        <p>We begin by thoroughly analyzing your brand's core identity. This stage is
                                            critical to make sure that logo design aligns with your brand. We create a
                                            logo that embodies your ethos and visual aesthetic. This deep connection
                                            between design and purpose helps your brand resonate with the right
                                            audience. Our goal is to ensure that every design element reflects the heart
                                            of your company.
                                        </p>
                                        <ul>
                                            <li>Identify brand values</li>
                                            <li>Define target audience</li>
                                            <li>Set design objectives</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assests/images/logo-design/Consultation.webp"
                                            alt="logo-design-sec-001" />
                                    </div>
                                </div>
                            </div>

                            <div id="UniqueConcept" class="unique-tab-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h3>Research & Inspiration</h3>
                                        <p>Once we understand your brand, we conduct extensive research into your
                                            industry landscape. We examine competitors' logos and analyze market trends.
                                            This step is about finding opportunities to differentiate your brand and
                                            making sure the design remains relevant and competitive. Our research-driven
                                            approach ensures your logo strikes the right balance between innovation and
                                            market expectations.</p>

                                        <ul>
                                            <li>Analyze competitor logos</li>
                                            <li>Explore design trends</li>
                                            <li>Gather creative inspiration</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assests/images/logo-design/Research.webp" alt="logo-design-sec-002" />
                                    </div>
                                </div>
                            </div>

                            <div id="UniqueRevisions" class="unique-tab-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h3>Logo Creation & Refinement</h3>
                                        <p>We move on to the design phase with a solid foundation. Our team develops
                                            multiple logo concepts, each reflecting the insights we gathered. We present
                                            these options for your review and ask for your feedback. The refinement
                                            process involves fine-tuning details to ensure the final logo is visually
                                            striking and adaptable across various platforms. Every design decision
                                            focuses on delivering clarity and consistency to enhance your brand's visual
                                            identity.</p>
                                        <ul>
                                            <li>Develop design concepts</li>
                                            <li>Collaborate for feedback</li>
                                            <li>Ensure scalability</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assests/images/logo-design/LogoCreation.webp"
                                            alt="logo-design-sec-003" />
                                    </div>
                                </div>
                            </div>

                            <div id="UniqueDelivery" class="unique-tab-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h3>Delivery & Launch</h3>
                                        <p>We provide all necessary files in multiple formats for versatile use once the
                                            final design is approved. These formats are optimized for digital platforms,
                                            social media, and print materials. We also supply detailed guidelines on
                                            logo usage to maintain brand consistency. Our support doesn't stop at
                                            delivery—we assist in integrating the new logo across all touchpoints.</p>

                                        <ul>
                                            <li>Provide logo files</li>
                                            <li>Optimize for platforms</li>
                                            <li>Deliver brand guidelines</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assests/images/logo-design/Delivery&Launch.webp"
                                            alt="logo-design-sec-004" />
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row justify-content-space-between newslt-row">
                    <div class="col">
                        <div class="nesw-form">
                            <form>
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <input type="tel" name="phone" placeholder="Phone Number">
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php
    include("includes/clint-review.php");
    ?>

    <section class="section-bg pt-b-80 counter-sec counter-sec-logo">
        <div class="container" style="display: block;">
            <div class="row">
                <div class="col-lg-5">
                    <h4 class="text-white">BE VISIBLE</h4>
                    <h2 class="text-white">What Makes Us a Favorite Among Leading Brands?</h2>
                    <p class="text-white">We've successfully completed hundreds of logo projects across diverse
                        industries. Our portfolio reflects versatility, innovation, and a commitment to quality that
                        clients trust.</p>
                </div>
                <div class="col-lg-3">
                    <div class="bor-coutn">
                        <h3 class="text-white">10+</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white text-end">10+ Years of Excellence</h5>
                    <p class="text-white text-end">We have provided logo design services for more than 10 years. This
                        dedication keeps us at the forefront of logo design, setting benchmarks in the industry.
                    </p>
                </div>
            </div>

            <div class="row blurb-row">
                <div class="col">
                    <div class="blurb-mod">
                        <img src="assests/images/service/100-satisfactions-Guarantee.png">
                        <hr>
                        <p class="text-white">Guaranteed Satisfaction</p>
                    </div>

                    <div class="blurb-mod">
                        <img src="assests/images/service/unique-Design.png">
                        <hr>
                        <p class="text-white">Unique Design</p>
                    </div>

                    <div class="blurb-mod">
                        <img src="assests/images/service/100-money-back.png">
                        <hr>
                        <p class="text-white">Money-Back Guarantee</p>
                    </div>

                    <div class="blurb-mod">
                        <img src="assests/images/service/Design-Consultancy.png">
                        <hr>
                        <p class="text-white">24/7 Support</p>
                    </div>

                    <div class="blurb-mod">
                        <img src="assests/images/service/award-winning.png">
                        <hr>
                        <p class="text-white">Professional Team</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section-bg pt-b-80 have-server" id="project-in-minds">
        <div class="container">
            <div class="row justify-content-space-between project-in-mind"
                style="background-color: #59249A; border-radius: 30px;">
                <div class="col-lg-7 col-md-6">
                    <h2 class="text-white">Need a Logo That Instantly <span>Grabs Attention?</span></h2>
                    <a href="#">Get Your Logo Now</a>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="assests/images/service/sercive-girl.webp">
                </div>
            </div>
        </div>
    </section> -->
    <section class="discuss-sec pb-100 section-bg">
        <div class="container">
            <div class="row dubai-row-mind align-items-center mt-0"
                style="background-color: #59249A; border-radius: 30px;">
                <div class="col-lg-4">
                    <img src="assests/images/service/sercive-girl.webp" class="dubai-agent">
                </div>
                <div class="col-lg-8">
                    <h2 class="text-white same-all">Need a Logo That Instantly Grabs Attention?</h2>
                    <!-- <h4 class="text-white fs-73 mb-50">Connect Now!</h4> -->
                    <a href="#">Get Your Logo Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section -->
    <section class="blog-service">
        <div class="container" style="display:block;">
            <h2 class="text-white same-all algn-centr">Keep Up With The Latest Trends In Branding And Logo Design
                Innovation</h2>
            <div class="row">
                <div class="col">
                    <div class="swiper centered-mode-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Logo-Design-carfting.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">Logo Design: Crafting the and Identity</h4>
                                    <p class="text-white">ch more than a simple image or text. It e face of a brand,
                                        conveying its values, identity in an instant. Whether you're new business or
                                        rebranding an existing ng an effective logo is essential to cre-</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Social-media-marketing.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">Social Media Marketing</h4>
                                    <p class="text-white">Promoting your brand through platforms like Face-book,
                                        Instagram, Twitter, and Linkedin to reach and interact with your audience.</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/SEo.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">On-Page Optimization</h4>
                                    <p class="text-white">Enhancing individual pages by optimizing titles, meta
                                        descriptions, headers, and images for better rankings.</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Logo-Design-carfting.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">How To Build Custom Data Using Luzmo Flex</h4>
                                    <p class="text-white">Bringing data to life in your applica without the usual
                                        headaches. Pau you how you can build beautiful da using the Google Analytics
                                        API, an to spend any time "massaging" th a Sep, 17, 2024 In UX, Design, Work
                                        Flow</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Logo-Design-carfting.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">Logo Design: Crafting the and Identity</h4>
                                    <p class="text-white">ch more than a simple image or text. It e face of a brand,
                                        conveying its values, identity in an instant. Whether you're new business or
                                        rebranding an existing ng an effective logo is essential to cre-</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Social-media-marketing.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">Social Media Marketing</h4>
                                    <p class="text-white">Promoting your brand through platforms like Face-book,
                                        Instagram, Twitter, and Linkedin to reach and interact with your audience.</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/SEo.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">On-Page Optimization</h4>
                                    <p class="text-white">Enhancing individual pages by optimizing titles, meta
                                        descriptions, headers, and images for better rankings.</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Logo-Design-carfting.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">How To Build Custom Data Using Luzmo Flex</h4>
                                    <p class="text-white">Bringing data to life in your applica without the usual
                                        headaches. Pau you how you can build beautiful da using the Google Analytics
                                        API, an to spend any time "massaging" th a Sep, 17, 2024 In UX, Design, Work
                                        Flow</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Logo-Design-carfting.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">Logo Design: Crafting the and Identity</h4>
                                    <p class="text-white">ch more than a simple image or text. It e face of a brand,
                                        conveying its values, identity in an instant. Whether you're new business or
                                        rebranding an existing ng an effective logo is essential to cre-</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Social-media-marketing.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">Social Media Marketing</h4>
                                    <p class="text-white">Promoting your brand through platforms like Face-book,
                                        Instagram, Twitter, and Linkedin to reach and interact with your audience.</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/SEo.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">On-Page Optimization</h4>
                                    <p class="text-white">Enhancing individual pages by optimizing titles, meta
                                        descriptions, headers, and images for better rankings.</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Logo-Design-carfting.webp">
                                    <h6>Paul Scanion <span>wrote</span></h6>
                                    <h4 class="text-white">How To Build Custom Data Using Luzmo Flex</h4>
                                    <p class="text-white">Bringing data to life in your applica without the usual
                                        headaches. Pau you how you can build beautiful da using the Google Analytics
                                        API, an to spend any time "massaging" th a Sep, 17, 2024 In UX, Design, Work
                                        Flow</p>

                                    <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                       
                            <div class="swiper-pagination"></div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-home faq-logo-deisgn section-bg">
        <div class="container">
            <div class="row justify-content-space-between">
                <div class="col">
                    <h2 class="text-white"><span>Frequently </span>Asked Questions</h2>
                    <div class="faqss">
                        <div class="quwstion">
                            <button class="accordions">How many days does it take to design a logo?</button>
                            <div class="panel">
                                <p>The time depends on the complexity of the logo.</p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">Can I request changes during the process?</button>
                            <div class="panel">
                                <p>Yes, we offer multiple revision rounds to ensure the design meets your expectations.
                                </p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">Will my logo work on all platforms?</button>
                            <div class="panel">
                                <p>Absolutely. We design scalable logos that look great on websites, social media, and
                                    print.</p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">Do you research my industry before designing?</button>
                            <div class="panel">
                                <p>Yes, thorough research ensures your logo stands out and aligns with industry trends.
                                </p>
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
                            <li><a href="#section-1" class="hire-tabs current" id="currentIDRRRRRRR">How Logic Work Sets
                                    Trends in Logo Design</a></li>
                            <li><a href="#section-2" class="hire-tabs">How Logic Work Brings Exceptional Logo Visions to
                                    Life</a></li>
                            <li><a href="#section-3" class="hire-tabs">The Numbers Prove the Power of Great Logo
                                    Design</a></li>
                            <li><a href="#section-4" class="hire-tabs">How We Drive Brand Growth Through Iconic
                                    Logos</a></li>
                            <li><a href="#section-5" class="hire-tabs">What Makes Our Logo Design Process Unmatched</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-6 col-md-6 col-stick">
                    <main>
                        <section class="sec-info" id="section-1">
                            <h2>How Logic Work Sets Trends in Logo Design</h2>
                            <ul>
                                <p>We stay ahead by following the latest design trends and technologies. We bring
                                    Minimalist, bold typography and adaptive logos for digital platforms to our clients.
                                    We aim to redefine industry standards, delivering designs that inspire and lead the
                                    way with each project.</p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-2">
                            <h2>How Logic Work Brings Exceptional Logo Visions to Life</h2>
                            <ul>
                                <p>Logic Work creates logos that represent your brand's identity with clarity and
                                    impact. We've designed over 300 logos across various industries. Our process
                                    includes research, strategy, and creativity to craft timeless designs. Every logo
                                    reflects innovation and the unique story of your brand. Clients trust us to deliver
                                    exceptional visuals that make a lasting impression.</p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-3">
                            <h2>The Numbers Prove the Power of Great Logo Design</h2>
                            <ul>
                                <p>A strong logo improves brand recognition by up to 80%. Our clients have experienced
                                    measurable growth after a logo revamp. We've delivered hundreds of successful
                                    projects and enhanced clients' brand loyalty and visibility. Each design is built to
                                    connect with your audience and leave a memorable mark.</p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-4">
                            <h2>How We Drive Brand Growth Through Iconic Logos</h2>
                            <ul>
                                <p>Our logos don't just look good—they drive results. We deliver designs that boost
                                    engagement and customer trust by combining creativity with strategy. Research-backed
                                    designs ensure relevance in competitive markets. A thoughtfully crafted logo becomes
                                    a cornerstone of your brand's success.
                                </p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-5">
                            <h2>What Makes Our Logo Design Process Unmatched</h2>
                            <ul>
                                <p>We take a unique, client-focused approach. Every project starts with understanding
                                    your brand's values and goals. We involve you at every step and make sure the final
                                    design aligns perfectly with your vision from ideation to delivery. Our iterative
                                    process guarantees satisfaction and outstanding results.
                                </p>
                            </ul>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include("includes/footer.php");
?>


<script>
    var swiperThumb1 = new Swiper(".slider-thumb-01", {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper1 = new Swiper(".slider-tab-01", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiperThumb1,
        },
    });

    var swiperThumb2 = new Swiper(".slider-thumb-02", {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".slider-tab-02", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiperThumb2,
        },
    });

    var swiperThumb3 = new Swiper(".slider-thumb-03", {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper3 = new Swiper(".slider-tab-03", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiperThumb3,
        },
    });
    var swiperThumb4 = new Swiper(".slider-thumb-04", {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper4 = new Swiper(".slider-tab-04", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiperThumb4,
        },
    });
</script>