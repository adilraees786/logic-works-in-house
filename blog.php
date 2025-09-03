<?php

$meta_title = "Read Trending Blogs on Logic Works";
$meta_description = "Explore trending blogs from Logic Works on tailored web solutions, digital marketing, and custom software to boost business performance.";
$keyword = 'logic work blogs';
include("includes/head.php");
include("includes/header.php");
?>
<style>
  main {
    margin-top: 120px;
  }

  header.nav-header.header-layout2 {
    background-color: #010101;
  }

  .blog-slidrrr .swiper-button-prev {
    background: url(assests/images/portfolio/left-icon.png);
    background-repeat: no-repeat;
    width: 57px;
    height: 57px;
    transform: rotate(-180deg);
    opacity: 1;
    z-index: 1;
  }

  .blog-slidrrr .swiper-button-next {
    background: url(assests/images/portfolio/left-icon.png);
    background-repeat: no-repeat;
    width: 57px;
    height: 57px;
    opacity: 1;
    z-index: 1;
  }

  p.post-date:before {
    content: '';
    position: absolute;
    background: url(assests/images/blog/date-icon.png);
    background-repeat: no-repeat;
    width: 8px;
    height: 12px;
    right: 4%;
    top: 3%;
  }

  p.post-minute:before {
    content: '';
    position: absolute;
    background: url(assests/images/blog/time-icon.png);
    background-repeat: no-repeat;
    width: 12px;
    height: 11px;
    right: 3%;
    margin-top: 7px;
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

  @media (max-width: 1440px) and (min-width: 1152px) {
    main {
      margin-top: 116px;
    }
  }

  @media (max-width: 981px) {
    main {
      margin-top: 150px;
    }
  }

  @media (max-width: 600px) {
    main {
      margin-top: 120px;
    }
  }
</style>
<main>
  <section class="blog-hero-sec section-bg"
    style="background-image:url(assests/images/blog/blog-bg.jpg); background-repeat: no-repeat; background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="text-white">Insights & Innovations from Logic Works – Read the <span>Trending Blogs</span></h1>
          <a href="#" id="openPopup">Get Started</a>
        </div>
        <div class="col-lg-3">
        </div>
      </div>
    </div>
  </section>

  <section class="section-bg blog-slide-sec pt-b-80">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="same-all text-white algn-centr">Read What's Trending in Technology</h2>
          <p class="algn-centr text-white">Logic Works provides insightful blogs on tailored web and mobile solutions,
            digital marketing strategies, and custom software development, focusing on enhancing business performance
            and improving user experiences across platforms.</p>

          <div class="slid-inrr">
            <div class="swiper blog-slidrrr">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#">
                    <img src="assests/images/blog/caroual-blog-1.jpg">
                    <div class="horrific-content">
                      <h2 class="text-white">How He Has Found Peace During This Horrific</h2>
                      <p class="post-author">By: Maheen Sabeeh</p>
                      <p class="post-date-slider">Sep 18, 2024</p>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img src="assests/images/blog/caroual-blog-2.jpg">
                    <div class="horrific-content">
                      <h2 class="text-white">How He Has Found Peace During This Horrific</h2>
                      <p class="post-author">By: Maheen Sabeeh</p>
                      <p class="post-date-slider">Sep 18, 2024</p>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img src="assests/images/blog/caroual-blog-3.jpg">
                    <div class="horrific-content">
                      <h2 class="text-white">How He Has Found Peace During This Horrific</h2>
                      <p class="post-author">By: Maheen Sabeeh</p>
                      <p class="post-date-slider">Sep 18, 2024</p>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img src="assests/images/blog/caroual-blog-1.jpg">
                    <div class="horrific-content">
                      <h2 class="text-white">How He Has Found Peace During This Horrific</h2>
                      <p class="post-author">By: Maheen Sabeeh</p>
                      <p class="post-date-slider">Sep 18, 2024</p>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img src="assests/images/blog/caroual-blog-2.jpg">
                    <div class="horrific-content">
                      <h2 class="text-white">How He Has Found Peace During This Horrific</h2>
                      <p class="post-author">By: Maheen Sabeeh</p>
                      <p class="post-date-slider">Sep 18, 2024</p>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img src="assests/images/blog/caroual-blog-3.jpg">
                    <div class="horrific-content">
                      <h2 class="text-white">How He Has Found Peace During This Horrific</h2>
                      <p class="post-author">By: Maheen Sabeeh</p>
                      <p class="post-date-slider">Sep 18, 2024</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-bg blogs-all" style="background-image:url(assests/images/serice-bg.png);">
    <div class="container" style="display: block;">
      <div class="row">
        <div class="col">
          <h2 class="text-white">Digital Marketing</h2>
          <a href="#" class="text-white">View all</a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-01.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Result-Driven Digital Marketing for Lead Generation</h4>
            <p class="post-except text-white">Get high-quality leads with campaigns tailored to reach and convert your
              target audience.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-02.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">SEO Strategies that Drive Organic Traffic</h4>
            <p class="post-except text-white">Rank higher and grow organically with strategies designed to boost
              visibility and attract relevant users.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>

      <div class="row post-row-last">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-03.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">PPC Campaigns that Maximize ROI</h4>
            <p class="post-except text-white">Smart advertising strategies focused on maximizing clicks and conversions
              within your budget.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-04.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Content Marketing That Converts</h4>
            <p class="post-except text-white">Engage your audience with valuable content crafted to drive conversions
              and support business growth.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="display: block;">
      <div class="row">
        <div class="col">
          <h2 class="text-white">Web Development</h2>
          <a href="#" class="text-white">View all</a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-05.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Custom Web Solutions for Unique Business Needs</h4>
            <p class="post-except text-white">Tailored web solutions that adapt to your specific goals, ensuring a
              smooth user experience and high ROI.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-06.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Boost Your Brand with Responsive Web Design</h4>
            <p class="post-except text-white">Reach more customers with web designs that look perfect on any device and
              attract modern users.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>

      <div class="row post-row-last">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-07.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Achieve Peak Performance with Optimized Web Development</h4>
            <p class="post-except text-white">Fast, secure, and scalable websites that elevate user experience and
              support your business growth.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-08.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">E-commerce Development for High-Converting Online Stores</h4>
            <p class="post-except text-white">Launch a powerful online store designed to maximize sales and drive
              customer loyalty.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="display: block;">
      <div class="row">
        <div class="col">
          <h2 class="text-white">Mobile App Development</h2>
          <a href="#" class="text-white">View all</a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-09.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Transform Ideas into Powerful Mobile Apps</h4>
            <p class="post-except text-white">From concept to launch, we create apps that captivate users and drive
              tangible results.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-10.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Native Mobile Apps for Peak Performance</h4>
            <p class="post-except text-white">Leverage device-specific features to offer a seamless and engaging mobile
              experience.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>

      <div class="row post-row-last">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-11.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Cross-Platform Apps to Reach More Users</h4>
            <p class="post-except text-white">Save costs while reaching both Android and iOS users with a single,
              optimized app.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-12.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">UI/UX Design for User-Centric Mobile Experiences</h4>
            <p class="post-except text-white">We design visually appealing apps that keep users engaged and coming back.
            </p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="display: block;">
      <div class="row">
        <div class="col">
          <h2 class="text-white">Digital Transformation</h2>
          <a href="#" class="text-white">View all</a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-13.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Empower Your Business with Digital Transformation</h4>
            <p class="post-except text-white">Future-proof your business with a strategy that leverages technology for
              growth and efficiency.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-14.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Streamline Operations with Cloud Solutions</h4>
            <p class="post-except text-white">Enable seamless collaboration and flexibility with our scalable cloud
              migration services.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>

      <div class="row post-row-last">
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-15.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Data-Driven Insights for Better Decision Making</h4>
            <p class="post-except text-white">Use real-time data analytics to make informed decisions that propel your
              business forward.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-lg-6" style="display:flex; gap: 20px;">
          <div class="blog-img-tab">
            <img src="assests/images/blog/post-16.jpg">
          </div>
          <div class="blog-content-tab">
            <p class="post-date text-white">Posted on October 19, 2024</p>
            <h4 class="text-white">Custom Software Solutions for Complete Transformation</h4>
            <p class="post-except text-white">Overhaul your processes and improve performance with software designed to
              meet your goals.</p>
            <p class="text-white post-minute">15 Minutes</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color:#272727;">
    <div class="container" style="max-width: 100%; padding: 0px;">
      <div class="row">
        <div class="col" style="padding: 0px;">
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
        </div>
      </div>
    </div>
  </section>

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
                  <p class="text-white">ch more than a simple image or text. It e face of a brand, conveying its values,
                    identity in an instant. Whether you're new business or rebranding an existing ng an effective logo
                    is essential to cre-</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Social-media-marketing.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">Social Media Marketing</h4>
                  <p class="text-white">Promoting your brand through platforms like Face-book, Instagram, Twitter, and
                    Linkedin to reach and interact with your audience.</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/SEo.jpg">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">On-Page Optimization</h4>
                  <p class="text-white">Enhancing individual pages by optimizing titles, meta descriptions, headers, and
                    images for better rankings.</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Logo-Design-carfting.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">How To Build Custom Data Using Luzmo Flex</h4>
                  <p class="text-white">Bringing data to life in your applica without the usual headaches. Pau you how
                    you can build beautiful da using the Google Analytics API, an to spend any time "massaging" th a
                    Sep, 17, 2024 In UX, Design, Work Flow</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Logo-Design-carfting.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">Logo Design: Crafting the and Identity</h4>
                  <p class="text-white">ch more than a simple image or text. It e face of a brand, conveying its values,
                    identity in an instant. Whether you're new business or rebranding an existing ng an effective logo
                    is essential to cre-</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Social-media-marketing.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">Social Media Marketing</h4>
                  <p class="text-white">Promoting your brand through platforms like Face-book, Instagram, Twitter, and
                    Linkedin to reach and interact with your audience.</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/SEo.jpg">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">On-Page Optimization</h4>
                  <p class="text-white">Enhancing individual pages by optimizing titles, meta descriptions, headers, and
                    images for better rankings.</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Logo-Design-carfting.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">How To Build Custom Data Using Luzmo Flex</h4>
                  <p class="text-white">Bringing data to life in your applica without the usual headaches. Pau you how
                    you can build beautiful da using the Google Analytics API, an to spend any time "massaging" th a
                    Sep, 17, 2024 In UX, Design, Work Flow</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Logo-Design-carfting.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">Logo Design: Crafting the and Identity</h4>
                  <p class="text-white">ch more than a simple image or text. It e face of a brand, conveying its values,
                    identity in an instant. Whether you're new business or rebranding an existing ng an effective logo
                    is essential to cre-</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Social-media-marketing.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">Social Media Marketing</h4>
                  <p class="text-white">Promoting your brand through platforms like Face-book, Instagram, Twitter, and
                    Linkedin to reach and interact with your audience.</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/SEo.jpg">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">On-Page Optimization</h4>
                  <p class="text-white">Enhancing individual pages by optimizing titles, meta descriptions, headers, and
                    images for better rankings.</p>

                  <p class="text-white date-post">Sep, 17, 2024 In UX, Design, Work Flow</p>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="col">
                  <img src="assests/images/service/Logo-Design-carfting.png">
                  <h6>Paul Scanion <span>wrote</span></h6>
                  <h4 class="text-white">How To Build Custom Data Using Luzmo Flex</h4>
                  <p class="text-white">Bringing data to life in your applica without the usual headaches. Pau you how
                    you can build beautiful da using the Google Analytics API, an to spend any time "massaging" th a
                    Sep, 17, 2024 In UX, Design, Work Flow</p>

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

  <section class="section-bg pt-b-150 journey-sec" id="project-in-minds">
    <div class="container">
      <div class="row justify-content-space-between project-in-mind"
        style="background-color: #59249A; border-radius: 30px;">
        <div class="col-lg-6 col-md-6">
          <h2 class="text-white">Get A Website Like This & Start Your Online Journey!</h2>
          <div class="main-tow-btn">
            <a href="#">Call Now</a>
            <a href="#" class="live-chats">Start Live Chat</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <img src="assests/images/Get-Website.png">
        </div>
      </div>
    </div>
  </section>
</main>

<?php
include("includes/footer.php");
?>