<?php
$meta_title = "Logic Works | Leading Digital Marketing Experts";
$meta_description = "Boost your brand with Logic Works, experts in SEO, PPC, and social media marketing. Get results-driven strategies today.";
$keyword = 'logic work digital marketing';
include("includes/head.php");
include("includes/header.php");
?>
<style>
    #portfolio-hero h1 {
        font-size: 84px;
        margin-bottom: 30px;
    }

    .service-hero-sec p,
    .service-hero-sec li {
        font-size: 17px;
        font-family: 'Montserrat';
        font-weight: 500;
    }

    .strategic-row .col-lg-6:first-child:before {
        content: '';
        position: absolute;
        background: url(./assests/images/marketing/section-bg-img.png);
        width: 401px;
        height: 401px;
        background-size: 50%;
        background-repeat: no-repeat;
        left: -4.8%;
        top: -17.5%;
    }

    .transform-row .digital-two-btn a:first-child:before {
        content: '';
        background: url(assests/images/phon-icon.png) no-repeat;
        background-size: 100%;
        width: 60px;
        height: 60px;
        position: absolute;
        right: -6%;
        top: 0%;
        transition: 0.5s all ease-in-out;
    }

    .brief-sec .main-tow-btn a#openPopup:before {
        content: '';
        position: absolute;
        background: url(assests/images/marketing/phone.png) no-repeat;
        width: 66px;
        height: 66px;
        background-size: 100%;
        right: 0%;
        top: -1%;
        background-color: #fff;
        border-radius: 100px;
        transition: 0.5s all ease-in-out;
    }

    .head-service p.text-white.algn-centr {
        margin: 30px auto 150px auto;
        font-size: 22px;
    }
</style>
<main class="digital-marketing bg-black">
    <section class="service-hero-sec section-bg digital-main" id="portfolio-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <h1 class="text-white">Digital <span>Marketing</span></h1>
                    <p class="text-white">Take your business to new heights with Logic Works. We are the experts in
                        digital marketing services. We create strategies that increase your online visibility. Our
                        services drive measurable results. Our team blends creativity with data-driven insights. Let us
                        turn clicks into customers and help your business thrive online!</p>
                    <ul class="text-white" style="font-size:17px;">
                        <li>SEO strategies to improve your rankings.</li>
                        <li>PPC campaigns designed for high ROI.</li>
                        <li>Social media marketing to connect with your audience.</li>
                        <li>Content marketing to build brand awareness and trust.</li>
                        <li>Data analysis to refine and optimize your campaigns.</li>
                    </ul>

                    <div class="live-chat-btns">
                        <a href="#" class="live-chats">Live Chat</a>
                        <a href="#" id="openPopup">Get A Quote</a>
                    </div>
                    <!-- <img src="assests/images/social-media/trustandotherlogo.png" alt="trust icons" class="trustsec mt-30"> -->
                    <div class="trust-icons">
                        <a href="#0"><img src="assests/images/trust-pilot.png" alt=""></a>
                        <a href="#0"><img src="assests/images/Clutch.png" alt=""></a>
                        <a href="#0"><img src="assests/images/Bark.png" alt=""></a>
                        <a href="#0"><img src="assests/images/Goodfirms.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <img src="assests/images/marketing/banner-image.png" class="bannn">
                </div>
            </div>
        </div>
    </section>

    <section class="digital-next-sec section-bg"
        style="background-image: url(assests/images/marketing/bg-pattern.png);">
        <div class="container" style="display:block; padding: 0;">
            <div class="row head-service">
                <div class="col">
                    <h2 class="text-white algn-centr same-all">Proven Digital Marketing Expertise Trusted by
                        <span>Leading Brands</span>
                    </h2>
                    <p class="text-white algn-centr">Logic Works is Trusted by Industry Leaders for High-Impact Digital
                        Marketing Solution</p>
                </div>
            </div>
            <div class="row strategic-row">
                <div class="col-lg-6 col-sm-6">
                    <img src="assests/images/marketing/next-level.png" class="scrol-img">
                </div>
                <div class="col-lg-6 col-sm-6">
                    <h2 class="text-white same-all spe">Designed to Accelerate Your Brand's Growth</h2>
                    <p class="text-white">Logic Works' professional marketing strategies accelerate your brand's growth.
                        We improve your rankings with SEO. We also increase click rate with PPC and boost engagement
                        with social media. Our campaigns are designed to attract quality traffic and convert leads into
                        loyal customers. We continuously optimize for better results. Our team uses data to create
                        effective campaigns. This approach brings measurable growth. We help you build trust and
                        increase revenue.</p>
                    <div class="live-chat-btns">
                        <a href="#" class="live-chats">Live Chat</a>
                        <a href="#" id="openPopup">Get A Quote</a>
                    </div>
                </div>
            </div>

            <div class="row blurb-row-digits" style="background-color: #59249A;">
                <div class="col-lg-3">
                    <div class="blurb-main">
                        <img src="assests/images/marketing/world.png">
                        <h3 class="text-white">WORLDWIDE OPERATIONS</h3>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="blurb-main">
                        <img src="assests/images/marketing/award.png">
                        <h3 class="text-white">AWARD WINNING DESIGNERS</h3>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="blurb-main">
                        <img src="assests/images/marketing/unlimited.png">
                        <h3 class="text-white">UNLIMITED REVISIONS</h3>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="blurb-main">
                        <img src="assests/images/marketing/money.png">
                        <h3 class="text-white">MONEY BACK GUARANTEE</h3>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="blurb-main">
                        <img src="assests/images/marketing/fastest.png">
                        <h3 class="text-white">FASTEST TURNAROUND TIME</h3>
                    </div>
                </div>
            </div>

            <div class="row our-excellence">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h2 class="text-white algn-centr same-all">Holistic Digital Strategies Designed for <span>Business
                            Success </span></h2>
                </div>
                <div class="col-lg-2"></div>
            </div>



            <div class="tab-content pb-50">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo"
                            type="button" role="tab" aria-controls="seo" aria-selected="true">
                            <h4 class="text-white"><img src="assests/images/marketing/check-icon.png"> SOCIAL MEDIA
                                MARKETING</h4>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ppc-tab" data-bs-toggle="tab" data-bs-target="#ppc" type="button"
                            role="tab" aria-controls="ppc" aria-selected="false">
                            <h4 class="text-white"><img src="assests/images/marketing/check-icon.png"> SEARCH ENGINE
                                OPTIMIZATION</h4>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social"
                            type="button" role="tab" aria-controls="social" aria-selected="false">
                            <h4 class="text-white"><img src="assests/images/marketing/check-icon.png"> ONLINE REPUTATION
                                MANAGEMENT</h4>
                        </button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="content-tab" data-bs-toggle="tab" data-bs-target="#content" type="button" role="tab" aria-controls="content" aria-selected="false"><h4 class="text-white"><img src="assests/images/marketing/check-icon.png"> Content Marketing</h4></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab" aria-controls="email" aria-selected="false"><h4 class="text-white"><img src="assests/images/marketing/check-icon.png"> Email Marketing</h4></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="ecommerce-tab" data-bs-toggle="tab" data-bs-target="#ecommerce" type="button" role="tab" aria-controls="ecommerce" aria-selected="false"><h4 class="text-white"><img src="assests/images/marketing/check-icon.png"> E-commerce Marketing</h4></button>
            </li> -->
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/facebook.png">
                                <img src="assests/images/marketing/instagram.png">
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/twitter.png">
                                <img src="assests/images/marketing/linkdein.png">
                            </div>

                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/youtube.png">
                                <img src="assests/images/marketing/pinterest.png">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ppc" role="tabpanel" aria-labelledby="ppc-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/keyword.png">
                                <img src="assests/images/marketing/contentCreation.png">
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/onPageSEO.png">
                                <img src="assests/images/marketing/UserExperience.png">
                            </div>

                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/backlinking.png">
                                <img src="assests/images/marketing/TechnicalSEO.png">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/Encouragepositive.png">
                                <img src="assests/images/marketing/Monitoryouronline.png">
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/Respond.png">
                                <img src="assests/images/marketing/Createpromote.png">
                            </div>

                            <div class="col-lg-4 col-sm-4">
                                <img src="assests/images/marketing/AddressNegative.png">
                                <img src="assests/images/marketing/Optimizesocialmedia.png">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="content-tab">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assests/images/marketing/facebook.png">
                    <img src="assests/images/marketing/instagram.png">
                </div>
                <div class="col-lg-4">
                    <img src="assests/images/marketing/twitter.png">
                    <img src="assests/images/marketing/linkdein.png">
                </div>

                <div class="col-lg-4">
                    <img src="assests/images/marketing/youtube.png">
                    <img src="assests/images/marketing/pinterest.png">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assests/images/marketing/facebook.png">
                    <img src="assests/images/marketing/instagram.png">
                </div>
                <div class="col-lg-4">
                    <img src="assests/images/marketing/twitter.png">
                    <img src="assests/images/marketing/linkdein.png">
                </div>

                <div class="col-lg-4">
                    <img src="assests/images/marketing/youtube.png">
                    <img src="assests/images/marketing/pinterest.png">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assests/images/marketing/facebook.png">
                    <img src="assests/images/marketing/instagram.png">
                </div>
                <div class="col-lg-4">
                    <img src="assests/images/marketing/twitter.png">
                    <img src="assests/images/marketing/linkdein.png">
                </div>

                <div class="col-lg-4">
                    <img src="assests/images/marketing/youtube.png">
                    <img src="assests/images/marketing/pinterest.png">
                </div>
              </div>
            </div> -->
                </div>
            </div>


            <!-- <div class="row our-excellence-check">
                <div class="col-lg-4">
                    <h4 class="text-white"><img src="assests/images/marketing/check-icon.png"> SEO Services</h4>
                    <img src="assests/images/marketing/facebook.png">
                    <img src="assests/images/marketing/instagram.png">
                </div>

                <div class="col-lg-4">
                    <h4 class="text-white">PPC Campaigns</h4>
                    <img src="assests/images/marketing/twitter.png">
                    <img src="assests/images/marketing/linkdein.png">
                </div>

                <div class="col-lg-4">
                    <h4 class="text-white">Social Media Marketing</h4>
                    <img src="assests/images/marketing/youtube.png">
                    <img src="assests/images/marketing/pinterest.png">
                </div>
            </div> -->
        </div>
        </div>
    </section>

    <section class="brief-sec section-bg" style="background-image: url('assests/images/marketing/bg-pattern-2.png');">
        <div class="container" style="max-width: 100%; padding: 0; display: block;">
            <div class="row brif-row" style="background-image: linear-gradient(to right, #9749EA, #E97894);">
                <div class="col-lg-6">
                    <h2 class="text-white same-all">Get Results-Driven Marketing<br>Contact Us for a Free Consultation!
                    </h2>
                    <p class="text-white">Find Out how our custom marketing strategies can boost your online presence
                        and drive real business growth. Let's achieve success together.</p>
                    <div class="main-tow-btn">
                        <a href="#">Get A Quote</a>
                        <a href="#" id="openPopup">Discuss Your Project</a>
                    </div>
                </div>

                <div class="col-lg-6 t-none">
                    <img src="assests/images/marketing/breifing-img.png">
                </div>
            </div>

            <div class="row raise-row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h2 class="text-white same-all text-center">Why Logic Works Outperforms Other Digital Marketing
                        Agencies</h2>
                    <!-- <p class="text-white text-center">WITH OUR DIGITAL MARKETING SOLUTIONS</p> -->
                </div>
                <div class="col-lg-2"></div>
            </div>

            <div class="row customized-row">
                <div class="col-lg-3" style="background-image: url(assests/images/marketing/setting-bg.png);">
                    <img src="assests/images/marketing/audit1.png">
                    <h2 class="text-center">Customized Strategies</h2>
                    <p class="text-center">We create strategies tailored to your business needs and make sure they align
                        with your goals, target audience, and industry trends for the best possible results.</p>
                </div>

                <div class="col-lg-3" style="background-image: url(assests/images/marketing/people-bg.png);">
                    <img src="assests/images/marketing/strategy1.png">
                    <h2 class="text-center">Proven Results </h2>
                    <p class="text-center">Our campaigns drive measurable success across industries, boosting traffic,
                        conversions, and brand engagement to create accurate results for every client.</p>
                </div>

                <div class="col-lg-3" style="background-image: url(assests/images/marketing/state-bg.png);">
                    <img src="assests/images/marketing/content1.png">
                    <h2 class="text-center">Business Growth</h2>
                    <p class="text-center">Our marketing helps your business expand its online presence, increase sales,
                        and build long-term customer relationships.</p>
                </div>

                <div class="col-lg-3" style="background-image: url(assests/images/marketing/last-one.png);">
                    <img src="assests/images/marketing/monitoring1.png">
                    <h2 class="text-center">Years of Experience</h2>
                    <p class="text-center">We have years of expertise in digital marketing. Our team has the knowledge
                        and skills to execute successful campaigns. </p>
                </div>
            </div>

            <div class="row align-items-center transform-row">
                <div class="col-lg-4 t-none">
                    <img src="assests/images/marketing/banda.png" class="gta">
                </div>
                <div class="col-lg-8">
                    <h2 class="text-white same-all text-end">Ready to Grow Your Brand? Contact Us Today and Start
                        Driving Results!</h2>
                    <div class="digital-two-btn">
                        <a href="#">Call Now</a>
                        <a href="#" id="openPopup">Get A Quote</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="done-right-sec section-bg pt-b-80"
        style="background-image: url(assests/images/marketing/bg-pattern-3.png);">
        <div class="container" style="display: block;">
            <div class="row done-row">
                <div class="col text-center">
                    <h2 class="text-white same-all  text-center">A Strategic Approach to Achieving Digital Growth and
                        Success</h2>
                    <p class="text-white  text-center">Our approach ensures a tailored and effective strategy for your
                        brand. We focus on clear communication throughout the process. We deliver measurable results
                        that drive success with precise planning.</p>
                    <img src="assests/images/marketing/progress-bar.png">
                </div>
            </div>

            <div class="row done-four-col">
                <div class="col-lg-3">
                    <div class="blurb-four">
                        <h4 class="text-white">REACH OUT TO US</h4>
                        <span>1</span>
                    </div>
                    <p class="text-white">The first step is a consultation. You share your goals, and we listen
                        carefully to understand your business needs and expectations.</p>
                </div>

                <div class="col-lg-3">
                    <div class="blurb-four">
                        <h4 class="text-white">INFORMATION GATHERING</h4>
                        <span>2</span>
                    </div>
                    <p class="text-white">We gather all the necessary information about your brand and target audience.
                        This helps us understand your market position and plan effectively</p>
                </div>

                <div class="col-lg-3">
                    <div class="blurb-four">
                        <h4 class="text-white">STRATEGY DEVELOPMENT</h4>
                        <span>3</span>
                    </div>
                    <p class="text-white">We create a customized digital marketing strategy based on your goals. Each
                        step is carefully designed to align with your brand's vision for maximum results.</p>
                </div>

                <div class="col-lg-3">
                    <div class="blurb-four">
                        <h4 class="text-white">PERFORMANCE MONITORING </h4>
                        <span>4</span>
                    </div>
                    <p class="text-white">Once the strategy is live, we closely monitor its performance. Our team
                        continuously tracks results and optimizes the campaign for better outcomes.
                    </p>
                </div>
            </div>

            <div class="row digit-lasrt-row">
                <div class="col text-center">
                    <div class="digital-btn">
                        <a href="#">Get Started</a>
                        <a href="#" id="openPopup">Live Chat</a>
                    </div>
                </div>
            </div>
        </div>
      
    </section>

    <!-- review section -->
    <!-- <section class="our-case-section section-bg pt-b-80 service-main-review">
        <div class="container">
            <div class="row justify-content-space-between our-reviews">
                <div class="col">
                    <h2 class="text-center text-white">What Clients Are Saying About Logic Works'
                        <span>Marketing Expertise</span>
                    </h2>
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
                                    <h4 class="text-white">Ava Shie</h4>
                                    <h6 class="text-white">Creative Manager, Givingli</h6>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">Logic Works understood our needs and created a plan that
                                        exceeded expectations.</p>
                                </div>
                            </div>

                            <div class="tesi-roww">
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/Layer-525.png"></div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">Jack Ray</h4>
                                    <h6 class="text-white">Owner, Babbage</h6>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">Thanks to Logic Works, we saw a quick boost in engagement and
                                        sales.</p>
                                </div>
                            </div>

                            <div class="tesi-roww">
                                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/people-3.png"></div>
                                <div class="col-lg-8 col-md-6 testi-txt">
                                    <h4 class="text-white">Noah Tris</h4>
                                    <h6 class="text-white">Owner, Rousey</h6>
                                    <img src="assests/images/start-revews.png">
                                    <p class="text-white">Working with Logic Works changed our business. Their expertise
                                        helped us hit our goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section>
        <?php
  include("includes/clint-review.php");
  ?>
    </section>
</main>

<?php
include("includes/footer.php");
?>