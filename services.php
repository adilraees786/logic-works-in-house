<?php
$meta_title = "Logic Works - Custom Solutions for Business Success";
$meta_description = "Logic Works provides customized web, app, and software solutions for your business to increase growth.";
$keyword = 'logic work services';
include("includes/head.php");
include("includes/header.php");
?>
<style>
    section {
        margin-top: -1px;
    }

    .service-hero-sec .container .col-lg-7:before {
        content: '';
        position: absolute;
        background: url(http://localhost/Logic-Works/assests/images/service/Rocket.png);
        background-repeat: no-repeat;
        width: 131px;
        height: 283px;
        background-size: 100%;
        right: -10%;
        top: -5%;
    }

    .pro-ser-slider .swiper-slide:before {
        content: '';
        position: absolute;
        background: url(assests/images/service/side-corner.png);
        background-repeat: no-repeat;
        width: 166px;
        height: 176px;
        background-position: center center;
        background-size: 100%;
    }

    .smee-ser .col-lg-7:before {
        content: '';
        position: absolute;
        background: url(assests/images/service/dots.png) no-repeat;
        width: 220px;
        height: 220px;
        left: -4%;
        top: -10%;
        z-index: 0;
    }

    .best-service-sec {
        background-image: url(assests/images/serice-bg.png);
        background-repeat: no-repeat;
        background-position: 0 100px;
        background-size: contain;
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

    .marquee {
        display: flex;
        flex-direction: row;
        line-height: 1.1;
        text-transform: uppercase;
        overflow: hidden;
        background-color: #272727;
        box-shadow: 0px 0px 10px 2px #FFC1C4;
    }

    .marquee:hover>.marquee__row {
        animation-play-state: paused;
    }

    .marquee__row {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        flex-shrink: 0;
        animation: marquee;
        animation-duration: 15000ms;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    .pro-ser-slider .swiper-slide {
        background-color: #8e3df2;
        border-radius: 40px;
        padding-bottom: 170px !important;
    }

    .marquee__item {
        width: auto;
        padding: 30px;
        cursor: pointer;
        overflow: hidden;
    }

    .marquee__separator {
        width: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
    }

    .marquee__text {
        font-size: 70px;
        margin-bottom: 0px;
        color: #FFFFFF00;
        font-weight: bold;
        -webkit-text-stroke-width: 3px;
        stroke-width: 3px;
        -webkit-text-stroke-color: #ffffff;
        stroke: #ffffff;
        font-family: 'Roboto';
    }

    @media (prefers-reduced-motion: reduce) {
        .marquee__row {
            animation: none;
            -webkit-animation: none;
        }
    }

    /*@media screen and (max-width: 640px) {
  .marquee__item {
    padding: 0.625rem 0.75rem;
  }
  .marquee__text {
    font-size: 1rem;
    line-height: 1.1;
  }
}*/
    @keyframes marquee {
        from {
            transform: translate3d(0, 0, 0);
        }

        to {
            transform: translate3d(-100%, 0, 0);
        }
    }
</style>
<main>
    <!-- Hero Sec -->
    <section class="service-hero-sec section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="text-white">We Offer Feature-Packed <span>Software</span> Solutions to Startups and
                        Growing Businesses</h1>
                    <a href="#" id="openPopup">Get Started</a>
                </div>
                <div class="col-lg-5">
                    <img src="assests/images/service/header-character.png">
                </div>
            </div>
        </div>
    </section>

    <!-- Slider Section -->
    <section class="best-service-sec section-bg">
        <div class="container" style="display:block; max-width: 100%; padding: 0;">
            <div class="row head-service">
                <div class="col">
                    <h2 class="text-white algn-centr same-all">What Logic Works Brings to Your <span>Success!</span>
                    </h2>
                    <p class="text-white algn-centr">Logic Works specializes in customized solutions that help
                        businesses succeed. By bringing together development, design, and marketing expertise, we focus
                        on providing reliable and results-driven services that go beyond expectations and help you
                        achieve your goals.</p>
                </div>
            </div>

            <div class="row justify-content-space-between slid-row">
                <div class="col">
                    <div class="swiper pro-ser-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assests/images/service/Seo-Icon.png">
                                <h4 class="text-white">Search Engine Optimization</h4>
                                <p class="text-white">We take proven SEO strategies and boost your visibility online
                                    using improved SEO, more organic traffic, and improved rankings. With a
                                    results-driven approach, not only will your website be more visible in search
                                    engines, but it will also lead more qualified leads to your website.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/web-design-icon.png">
                                <h4 class="text-white">Mobile App Development</h4>
                                <p class="text-white">Our mobile applications are created to reach your audience while
                                    they are on the move. Regardless of your sector or desired demographic, our primary
                                    goal is to prioritize user-friendly design and interaction in developing solutions
                                    that promote satisfaction and loyalty.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/web-development-icon.png">
                                <h4 class="text-white">Web Development</h4>
                                <p class="text-white">We make responsive, high-performance, business-driven websites.
                                    Our sites will attract attention, provide an outstanding user experience, and
                                    achieve the results you want. We provide tailored solutions for everyone, a startup
                                    or a well-established company.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/app-development-icon.png">
                                <h4 class="text-white">Web App Development</h4>
                                <p class="text-white">Secure, Scalable Web Applications for Your Operations. Our custom
                                    solutions are designed to enhance productivity and your business operations. We
                                    strive to deliver a flawless user experience that meets the unique demands of your
                                    industry.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/logo-design-icon.png">
                                <h4 class="text-white">Graphic Design</h4>
                                <p class="text-white">Our graphic design services provide visually compelling designs
                                    that will blow your mind! Bringing memorable, high-quality designs that fit your
                                    identity drives engagement and helps you stand out and communicate effectively with
                                    your audience.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/Seo-Icon.png">
                                <h4 class="text-white">Search Engine Optimization</h4>
                                <p class="text-white">We take proven SEO strategies and boost your visibility online
                                    using improved SEO, more organic traffic, and improved rankings. With a
                                    results-driven approach, not only will your website be more visible in search
                                    engines, but it will also lead more qualified leads to your website.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/ecommerce-dev.png">
                                <h4 class="text-white">E-commerce Development</h4>
                                <p class="text-white">Our e-commerce platforms are intended to fuel sales and enhance
                                    user satisfaction. We make an online store on small and enterprise levels. Our
                                    developers deliver an intuitive, secure store with integrated payment solutions that
                                    promote repeat shopping.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/digital-marketing.png">
                                <h4 class="text-white">Digital Marketing</h4>
                                <p class="text-white">Our digital marketing services aim to enlarge your reach and build
                                    your brand through strategies. What we effectively do is combine SEO, social media,
                                    and targeted campaigns to reach your audience in the right way, which will grow your
                                    customer base and sustain the results.</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/app-development-icon.png">
                                <h4 class="text-white">App Development</h4>
                                <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="assests/images/service/content-writer.png">
                                <h4 class="text-white">Content Writing</h4>
                                <p class="text-white">Our content writing services provide content that resonates with
                                    your audience and converts. We craft messages that serve to strengthen your brand,
                                    bolster your goals, and help build your audience and your customer loyalty.</p>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container smee-ser">
            <div class="row">
                <div class="col-lg-7">
                    <img src="assests/images/service/digtial.png" class="scrol-img">
                    <h2 class="text-white same-all">Strategic Digital Marketing</h2>
                    <p class="text-white">We have helped clients grow across industries with our data-driven digital
                        marketing strategies. We have advanced targeting and analytics by which clients have a 200%
                        increase in online visibility in many cases. Our goal is to have the highest ROI, meaning every
                        campaign is aimed toward continuous, scalable growth that relies on current trends and customer
                        behaviors.</p>
                </div>
                <div class="col-lg-5">
                    <h2 class="text-white same-all">Let Your Traffic Soar Beyond Limits!</h2>
                    <p class="text-white">Brands partnering with us see more than a 50% rise in organic traffic on
                        average, with some achieving up to 120% increases in lead generation through targeted
                        strategies. We focus on SEO optimization and conversion-driven tactics, which help clients hit a
                        wider audience and simultaneously create a loyal customer base, promoting their digital success.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="container smee-ser" id="right-smee-ser">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="text-white same-all">Custom Web Development</h2>
                    <p class="text-white">Based on over 500+ successfully delivered websites through our custom web
                        development services, we are at the top of the bar. We build digital experiences through
                        custom-made websites that inspire and convert your visitors into high-ticket clients. We use the
                        latest technologies and trends, and to integrate this into each site, it is secure, scalable,
                        and optimized for performance. Join us to build a platform that creates a standout difference
                        and works through results.</p>
                    <a href="#">Read More</a>
                </div>
                <div class="col-lg-7">
                    <img src="assests/images/service/web-design.png" class="scrol-img">
                    <h2 class="text-white same-all">We Create Trends, Not Just Websites!</h2>
                    <p class="text-white">Being rooted in innovation, we create websites that connect users and set the
                        design trends in various industries. That's because we combine advanced functionality with
                        visually engaging design — every website we build not only looks great but is proven to deliver
                        measurable results.</p>
                </div>
            </div>
        </div>

        <div class="container smee-ser">
            <div class="row">
                <div class="col-lg-7">
                    <img src="assests/images/service/app-development.png" class="scrol-img">
                    <h2 class="text-white same-all">Custom App Development</h2>
                    <p class="text-white">With our custom app development services, brands can take the lead in this
                        mobile-first era. We have launched 300+ apps, and we are experts at developing user-focused,
                        high-performance applications that generate engagement and retention. No matter if you are
                        targeting iOS, Android, or cross-platform, our team ensures that you are delivering a smooth
                        user experience while meeting your business objectives and scaling with your growth.</p>
                </div>
                <div class="col-lg-5">
                    <h2 class="text-white same-all">Apps That Shape the Future!</h2>
                    <p class="text-white">Our apps are built to not just meet today's demands but exceed them and set
                        the bar for the future. Our brains behind the app development team use advanced technology like
                        AI, machine learning, and real-time analytics. Every app we create is future-ready, secure, and
                        provides a long-term source of user loyalty.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="container smee-ser" id="right-smee-ser">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="text-white same-all">Innovative Graphic Design</h2>
                    <p class="text-white">Our graphic design services have helped over 200 brands globally. We design to
                        invite your audience to your business. We consider graphics as long-term assets that tell your
                        brand's true story and resonate with your audience. Every design is optimized for performance
                        across digital channels, ensuring it attracts, engages, and converts effectively. Partner with
                        Logic Works to give your brand the revamp it deserves.</p>
                    <a href="#">Read More</a>
                </div>
                <div class="col-lg-7">
                    <img src="assests/images/service/log-deisgn.png" class="scrol-img">
                    <h2 class="text-white same-all">Where Creativity Knows No Bounds!</h2>
                    <p class="text-white">Our designs break the mold, blending creativity with strategic intent. From
                        logos to full-scale branding projects, our work is infused with unique artistry and targeted
                        design principles, making each project a trendsetting success. Experience the power of graphics
                        that not only captivate but drive measurable impact, pushing your brand beyond boundaries.</p>
                </div>
            </div>
        </div>

        <div class="row marwuee-row">
            <div class="col">
                <div class="marquee">
                    <div class="marquee__row">
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works&nbsp;&mdash;&nbsp;Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.png"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.png"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.png"></span>
                    </div>
                    <div aria-hidden="true" class="marquee__row">
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works&nbsp;&mdash;&nbsp;Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.png"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.png"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.png"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-service">
        <div class="container" style="display:block;">
            <h2 class="text-white same-all algn-centr">Insights, Stories, and Inspiration: Journey through our Blog</h2>
            <div class="row">
                <div class="col">
                    <div class="swiper centered-mode-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col">
                                    <img src="assests/images/service/Logo-Design-carfting.png">
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
                                    <img src="assests/images/service/Social-media-marketing.png">
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
                                    <img src="assests/images/service/SEo.jpg">
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
                                    <img src="assests/images/service/Logo-Design-carfting.png">
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
                                    <img src="assests/images/service/Logo-Design-carfting.png">
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
                                    <img src="assests/images/service/Social-media-marketing.png">
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
                                    <img src="assests/images/service/SEo.jpg">
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
                                    <img src="assests/images/service/Logo-Design-carfting.png">
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
                                    <img src="assests/images/service/Logo-Design-carfting.png">
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
                                    <img src="assests/images/service/Social-media-marketing.png">
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
                                    <img src="assests/images/service/SEo.jpg">
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
                                    <img src="assests/images/service/Logo-Design-carfting.png">
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

    <!-- Counter Section -->
    <section class="section-bg pt-b-80 counter-sec">
        <div class="container" style="display: block;">
            <div class="row">
                <div class="col-lg-5">
                    <h4 class="text-white">BE VISIBLE</h4>
                    <h2 class="text-white">When It's About Custom Software – Logic Works Leads the Way!</h2>
                    <p class="text-white">Logic Works has over 10 years of experience delivering tailored software
                        solutions that drive actual results. We've completed 700+ projects, helping clients—from top
                        industry players to startups—achieve up to 80% improvements in efficiency. Let us build the
                        high-impact software your business needs to grow.</p>
                </div>
                <div class="col-lg-3">
                    <div class="bor-coutn">
                        <h3 class="text-white">10+</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white text-end">10+ YEARS OF EXPERIENCE</h5>
                    <p class="text-white text-end">Our team integrates advanced technologies like AI, cloud computing,
                        and data analytics, crafting future-proof software that maximizes ROI. Partner with Logic Works
                        for strategic, data-driven solutions that empower your business in a competitive digital world.
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

    <!-- Have A Project In Mind? -->
    <section class="section-bg pt-b-80 have-server" id="project-in-minds">
        <div class="container">
            <div class="row justify-content-space-between project-in-mind"
                style="background-color: #59249A; border-radius: 30px;">
                <div class="col-lg-7 col-md-6">
                    <h2 class="text-white">Don't Just Dream It, Achieve It <span>Join Us Now!</span></h2>
                    <a href="#" id="openPopup">Get Started!</a>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="assests/images/service/sercive-girl.png">
                </div>
            </div>
        </div>
        <?php
        include("includes/clint-review.php");
        ?>
    </section>

    <!-- review section -->
    <!-- <section class="our-case-section section-bg pt-b-80 service-main-review">
        <div class="container">
            <div class="row justify-content-space-between our-reviews">
                <div class="col">
                    <h2 class="text-center text-white">Hear What Clients Love About <span>Logic Works!</span></h2>
                    <p class="text-white text-center">Clients consistently praise our innovative solutions, thoughtful
                        support, and the tangible results we deliver to them.</p>
                </div>
            </div>

            <div class="row justify-content-space-between slider-reviews">
                <div class="col-lg-5 col-md-6">
                    <div class="text-start reive-images">
                        <img src="assests/images/Goodfirms.png">
                        <img src="assests/images/Trust.png">
                        <img src="assests/images/Clutch.png">
                        <img src="assests/images/Bark.png">
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
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/reviews-001.jpg">
                                </div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">Jade Thompson</h4>
                                    <h6 class="text-white">Creative Manager, Givingli</h6>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">Logic Works transformed our online presence. Their team is
                                        responsive and truly understands our needs. Highly recommend it!</p>
                                </div>
                            </div>

                            <div class="tesi-roww">
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/Layer-525.png"></div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">David Kim</h4>
                                    <h6 class="text-white">Owner, Babbage</h6>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">The custom app they developed exceeded our expectations! Their
                                        creativity and professionalism made the entire process seamless.</p>
                                </div>
                            </div>

                            <div class="tesi-roww">
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/people-3.png"></div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">Emily Carter</h4>
                                    <h6 class="text-white">John Rousey</h6>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">Working with Logic Works was a game-changer for us. Their
                                        insights and strategies helped us grow our business exponentially!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Ask any Q -->
    <section class="faq-home section-bg">
        <div class="container">
            <div class="row justify-content-space-between">
                <div class="col">
                    <h2 class="text-white"><span>Frequently </span>Asked Questions</h2>
                    <div class="faqss">
                        <div class="quwstion">
                            <button class="accordions">What is custom software development?</button>
                            <div class="panel">
                                <p>Customized software development is designed specifically to address the individual
                                    requirements of your company. Logic Works creates tailor-made solutions to propel
                                    your business forward with accuracy and intention.</p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">What are the benefits of using custom software in
                                business?</button>
                            <div class="panel">
                                <p>Custom software is necessary for businesses that are looking to scale their overall
                                    operations. It is the right time for you to get custom software from Logic Works to
                                    improve your operational efficiency and ROI. We provide custom solutions to
                                    streamline processes, reduce costs, and provide a great user experience. This
                                    tailored approach keeps businesses ahead of the game within the industry.</p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">How fast can you develop custom software?</button>
                            <div class="panel">
                                <p>The time needed to build custom software depends on the project's complexity and its
                                    requirements.</p>
                            </div>
                        </div>

                        <div class="quwstion">
                            <button class="accordions">What are the perks of having a mobile app?</button>
                            <div class="panel">
                                <p>Mobile app development has the advantage of increased customer engagement,
                                    accessibility, market accessibility, and so on. However, apps can help increase
                                    sales and customer loyalty.</p>
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
                            <li><a href="#section-1" class="hire-tabs current" id="currentIDRRRRRRR">How Logic Work is
                                    Adapting Its Strategy for the Next Era of Technology
                                </a></li>
                            <li><a href="#section-2" class="hire-tabs">Logic Work's Key Insights on Custom Software
                                    Development</a></li>
                            <li><a href="#section-3" class="hire-tabs">What Sets Logic Work Apart in the $700 Billion
                                    App Industry</a></li>
                            <li><a href="#section-4" class="hire-tabs">How Logic Work Stays Ahead with Data-Driven
                                    Insights</a></li>
                            <li><a href="#section-5" class="hire-tabs">The Web Development Trends We Follow</a></li>
                            <!-- <li><a href="#section-6" class="hire-tabs">Reasons to Outsource Your Mobile App Development in Dubai</a></li>
                        <li><a href="#section-7" class="hire-tabs">5 Reasons to Trust Trango Tech for Mobile App Development in UAE</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-6 col-md-6 col-stick">
                    <main>
                        <section class="sec-info" id="section-1">
                            <h2>How Logic Work is Adapting Its Strategy for the Next Era of Technology</h2>
                            <ul>
                                <p>We continue to lead the way in the technology world with the integration of the
                                    recent applications of AI, machine learning, and cloud infrastructure into our
                                    portfolio. Thanks to our flexible approach, we are able to create high-performance
                                    software and applications that address trending topics. Successful. We have clients
                                    who have experienced between 80% and 100% improved efficiency and customer
                                    engagement, and we are committed to delivering flexible, scalable technology to meet
                                    modern business needs. We've got a team that can steer companies through rapid tech
                                    evolutions and stay competitive, innovative, and prepared for tomorrow.</p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-2">
                            <h2>Logic Work's Key Insights on Custom Software Development</h2>
                            <ul>
                                <p>Logic Work specializes in designing and implementing custom software products to
                                    maintain continuous productivity and growth in a fast-progressing digital landscape.
                                    However, our data indicates that we can save operational efficiency of up to 80% for
                                    clients looking for ways to optimize their workflows. We are equipped with
                                    specialized expertise in leveraging data-driven insights and tailoring each solution
                                    to business goals across sectors to maximize the impact. Clients can scale
                                    confidently with us because of our seamless integrations and future-ready frameworks
                                    supported by a team that fully understands the critical demands of custom software
                                    development.</p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-3">
                            <h2>What Sets Logic Work Apart in the $700 Billion App Industry</h2>
                            <ul>
                                <p>Logic Work is known for its client-focused approach in the competitive app
                                    development industry, which has helped push a 70% user retention rate on all
                                    projects. Our clients can connect with a global audience with our expertise in iOS,
                                    Android, and hybrid apps. Quality and innovation are our priorities, and we provide
                                    high-performing, feature-rich applications that increase engagement and generate
                                    revenue. We're trusted to create apps for everything from startups to industry
                                    leaders to applications for a rapidly growing market but with superior user
                                    experiences.</p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-4">
                            <h2>How Logic Work Stays Ahead with Data-Driven Insights</h2>
                            <ul>
                                <p>Core to our approach is data-driven decision-making, allowing us to adapt our
                                    strategies in real time with real-time analytics and predictive modeling. We use
                                    user studies and industry trends to identify, develop, and deliver highly optimized
                                    digital solutions to increase your conversion rate up to 55%. Clients also benefit
                                    from our data-driven insights, which allow them to make informed business decisions
                                    amidst their digital investments. By building integrated customized dashboards and
                                    performance tracking, we aid businesses in turning raw data into valuable insights
                                    so that they remain competitive in the present-day fast-paced environment.</p>
                            </ul>
                        </section>
                        <section class="sec-info" id="section-5">
                            <h2>The Web Development Trends We Follow</h2>
                            <ul>
                                <p>Logic work keeps up with the latest web development trends to adopt a competitive
                                    advantage and brings dynamic, responsive websites that modern users expect. We've
                                    worked on progressive web apps, enhanced security features, and AI-driven
                                    personalization, contributing to up to a 50% increase in user engagement with
                                    clients. We make sure you get outstanding performance and user satisfaction from
                                    every site. By staying informed on trends, we deliver advanced, sustainable web
                                    experiences to our clients that separate themselves from the crowd.</p>
                            </ul>
                        </section>
                        <!--   <section class="sec-info" id="section-6">
                        <h2>Reasons to Outsource Your Mobile App Development in Dubai</h2>
                        <ul>
                            <p>
                                Outsourcing mobile app development in Dubai offers several strategic advantages, making it a popular choice among businesses aiming for efficient and cost-effective app development solutions.<br />
                                Here are compelling reasons to consider outsourcing your app development project to Dubai:
                            </p>
                            <h3>Access to Expertise and Talent Pool</h3>
                            <p>
                                Dubai boasts a diverse ecosystem with a diverse pool of skilled developers, designers, and tech professionals.<br />
                                Outsourcing to Dubai allows businesses to take advantage of this large talent pool and benefit from expertise in mobile app development, UI/UX design, emerging technologies, and industry-specific knowledge.
                            </p>
                            <h3>Cost Efficiency and Budget Control</h3>
                            <p>
                                Another compelling reason for off-shore app development is that you'll find cost-effective mobile app development services than hiring an in-house team within the region.<br />
                                It eliminates the need for upfront investments in infrastructure, recruitment, training, and employee benefits.<br />
                                Moreover, outsourcing allows businesses to choose flexible engagement models and scale resources as per project requirements, optimizing budget allocation and cost control.
                            </p>
                            <h3>Focus on Core Business Activities</h3>
                            <p>
                                If you externalize your project in Dubai, it will give you an advantage to focus on core competencies and strategic initiatives to oversee app development processes. This enables faster time-to-market for
                                apps, enhances business agility, and improves overall operational efficiency.
                            </p>
                            <h3>Faster Time-to-Market</h3>
                            <p>
                                Experienced mobile app development companies in Dubai follow streamlined development processes and best practices, accelerating the app development lifecycle.<br />
                                They make use of proven methodologies, agile frameworks, and robust project management practices to ensure timely delivery of high-quality apps that meet client expectations.
                            </p>
                            <h3>Access to State-of-the-Art Infrastructure and Technology</h3>
                            <p>
                                Outsourcing to Dubai provides access to state-of-the-art infrastructure, advanced development tools, and cutting-edge technologies essential for developing innovative and scalable mobile apps.<br />
                                This includes cloud computing platforms, AI-powered development tools, and secure data management systems, ensuring enhanced app performance, scalability, and security.
                            </p>
                            <h3>Enhanced Flexibility and Scalability</h3>
                            <p>
                                Hire app developer in Dubai offers flexibility to choose resources based on project requirements and business dynamics.<br />
                                It enables businesses to respond swiftly to market changes, customer feedback, and emerging trends, ensuring adaptability and competitiveness in a dynamic digital landscape.
                            </p>
                            <h3>Regulatory Compliance and Data Security</h3>
                            <p>
                                Mobile app development companies in Dubai adhere to stringent regulatory standards and data protection laws, ensuring compliance with international security protocols.<br />
                                They implement robust security measures, encryption techniques, and data privacy practices to safeguard sensitive information and mitigate cybersecurity risks.
                            </p>
                            <p>
                                In conclusion, outsourcing app development to Dubai facilitates businesses with access to specialized expertise, cost efficiencies, faster time-to-market, scalability, and regulatory compliance. Thereby,
                                making it a strategic choice for accelerating digital transformation and achieving business objectives.
                            </p>
                        </ul>
                    </section> -->
                        <!--     <section class="sec-info" id="section-7">
                        <h2>5 Reasons to Trust Trango Tech for Mobile App Development in UAE</h2>
                        <ul>
                            <p>Trango Tech stands out as a premier choice for mobile app development in the UAE, offering a compelling array of reasons to trust their expertise and commitment to excellence:</p>
                            <h3>1. Extensive Industry Experience</h3>
                            <p>
                                Having worked on mobile app development for more than 20 years, Trango Tech has successfully entered the UAE market.<br />
                                They have a wealth of experience and ideas about the creation and implementation of successful apps in different fields including health, retail and other businesses to serving their clients' needs.
                            </p>
                            <h3>2. Accomplished Results</h3>
                            <p>
                                The following entity has established significant experience in delivering effective mobile app solutions with proven successful mobile app projects.<br />
                                Their portfolio consists of apps that have indeed received users' attention and achieved high levels of engagement, smooth integration into everyday life, as well as tangible practical results for the
                                businesses involved.
                            </p>
                            <h3>3. Team of Skilled Developers and Designers</h3>
                            <p>
                                Through a team of developers, designers, and strategists, Trango Tech guarantees the apps are developed with excellence in mind.<br />
                                Their personnel makes efficient use of newer technologies and makes use of proven methodologies to develop superb solutions, which meet the requirements of their clients.
                            </p>
                            <h3>4. Client-Centric Approach</h3>
                            <p>
                                Trango Tech's ultimate priority is always the satisfaction of its client. They value openness about the goals, processes, and mutual cooperation during the development of the application.<br />
                                Starting from the conceptualization of the ideas to the construction of the solutions, and even after the implementation of the solutions, they are dedicated to the provision of solutions that meet the needs
                                of their clients.
                            </p>
                            <h3>5. Quality and innovations</h3>
                            <p>Quality assurance and constant innovation are two of Trango Tech's primary focuses. They follow strict testing procedures to produce high quality, bug-free, secure, and scalable applications.</p>
                            <p>Through continued market analysis on the trends and developments within the sector, they provide innovative solutions that ensure that businesses and organizations remain relevant in the market.</p>
                        </ul>
                    </section> -->
                    </main>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include("includes/footer.php");
?>