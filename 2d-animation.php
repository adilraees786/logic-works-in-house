<?php
$meta_title = "2D Animation Agency Dubai | Custom 2D Animation Services – Logic Works";
$meta_description = "Looking for a reliable 2D animation Agency Dubai? Logic Works delivers custom 2D animated video production, explainer videos, and marketing animations built to boost engagement and brand impact.
";
$keyword = '2D Animation';
$canonical = "https://logicworks.ae/2d-animation";

$custom_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://logicworks.ae/#2d-animation",
  "name": "2D Animation Services",
  "serviceType": "2D Animation",
  "alternateName": "2D Animation service in Dubai",
  "url": "https://logicworks.ae/2d-animation",
  "description": "Logic Works provides creative 2D animation services in Dubai, producing engaging visuals for brands, ads, and explainer videos.",
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
$faq_data = <<<EOD
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does 2D animation production take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most projects take 6 to 12 weeks. Duration depends on length, complexity, and revision frequency. We provide detailed timelines during initial planning."
      }
    },
    {
      "@type": "Question",
      "name": "Can you update my existing animated content?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We modify scenes, add new segments, or completely redesign animations when needed. Our team works with various animation styles and formats."
      }
    },
    {
      "@type": "Question",
      "name": "How much do 2D animation services cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pricing varies. Simple animations cost less, while detailed productions require more resources. We provide transparent quotes after understanding your specific requirements."
      }
    },
    {
      "@type": "Question",
      "name": "Will my animation work across all platforms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We optimize for different screen sizes and formats to ensure your animation plays smoothly everywhere, from social media to presentation screens."
      }
    },
    {
      "@type": "Question",
      "name": "How we match creative vision with animation excellence",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every brand tells its story differently. We spend time understanding yours first. Some companies need quick turnarounds, others want extensive creative exploration. Instead of applying generic templates, we adapt our approach. Our 2D animation company uses direct communication and visual references. The animation feels authentic because it reflects your actual message. Each movement, transition, and visual element connects directly to your objectives."
      }
    },
    {
      "@type": "Question",
      "name": "What makes our animation approach different from others?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most studios jump straight into production. We don't. Our team creates detailed plans based on proven storytelling principles. This keeps projects stable. Unlike competitors, we review each phase together and address concerns early. This approach saves both time and budget. Our 2D animation services include testing from concept stage. Client feedback shapes every iteration."
      }
    },
    {
      "@type": "Question",
      "name": "How we stay current in animation innovation",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Innovation means solving communication problems through smart visual techniques. Our team researches what audiences respond to. We monitor animation trends and adapt quickly. We use industry-standard software and test across real viewing conditions. Your content stays relevant and competitive."
      }
    },
    {
      "@type": "Question",
      "name": "What does true creative partnership look like in animation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Before any artwork begins, we discuss your project thoroughly. We understand what your business wants to achieve and how you expect audiences to respond. Each creative decision traces back to your original goals. You review concepts, not just final products. Our process stays clear, honest, and aligned with your vision."
      }
    },
    {
      "@type": "Question",
      "name": "What determines the right animation style for your project?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We analyze your audience and their preferences to determine the best animation style. Whether it's character animation, motion graphics, or kinetic typography, we focus on what serves your goals. Every visual choice and timing decision is intentional and aligned with your communication needs."
      }
    }
  ]
}
</script>
EOD;


include("includes/head.php");
include("includes/header.php");
?>
<style>
  .twod-animation-page .twod-animation-hero-sec .container h1.text-white {
    font-size: 70px;
    font-weight: 900;

  }

  .twod-animation-wcu-arrows .left-arrow,
  .twod-animation-wcu-arrows .right-arrow {
    top: 33%;
  }

  @media (max-width: 768px) {
    .twod-animation-page .twod-animation-hero-sec .container h1.text-white {
      font-size: 40px;
    }
  }

  @media (max-width: 500px) {
    .why-choice-2d {
      font-size: 30px;
    }

    .why-choice-2d-para {
      font-size: 20px;
      margin-bottom: 20
    }
      .twod-animation-wcu-arrows .left-arrow,
  .twod-animation-wcu-arrows .right-arrow {
    top: 36%;
  }
  }
.twod-animation-page  .our-process-sec {
  padding-bottom: 100px;
}
  /* Process Section Tabs Styling */
  .process-list {
    list-style: none;
    padding: 0;
  }

  .process-list li {
    margin-bottom: 20px;
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.4s ease;
    padding: 15px 25px;
    border-left: 4px solid transparent;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 0 10px 10px 0;
    position: relative;
    overflow: hidden;
  }

  .process-list li:hover {
    background: rgba(255, 255, 255, 0.1);
    padding-left: 35px;
  }

  .process-list li.active {
    background: linear-gradient(90deg, rgba(145, 66, 239, 0.2) 0%, rgba(145, 66, 239, 0) 100%);
    border-left: 4px solid #9142EF;
    color: #9142EF;
    padding-left: 35px;
  }

  .process-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 0;
    background: #9142EF;
    opacity: 0.1;
    transition: width 0.3s ease;
    z-index: -1;
  }

  .process-list li.active::before {
    width: 100%;
  }

  #processContentArea {
    /* background: rgba(255, 255, 255, 0.02); */
    padding: 40px;
    border-radius: 20px;
    /* border: 1px solid rgba(255, 255, 255, 0.05); */
    min-height: 300px;
  }
    .choice-para {
        text-align: center;
        color: white;
        font-size: 20px;
        font-weight: 300;
        line-height: 1.4;
        font-family: 'Roboto';
    }
  
  @media (max-width: 991px) {
    .process-list li {
        font-size: 18px;
        padding: 10px 15px;
    }
  }
  @media (max-width: 600px) {
   .twod-animation-page .our-process-sec{
    padding-bottom: 50px;
    
   }
     #processContentArea{
      padding: 0px;
     }
  }
</style>
<main class="twod-animation-page bg-black">
  <section class="section-bg twod-animation-hero-sec overflow-hidden">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-12 text-center">
          <h1 class="text-white">2D Animation Agency Dubai - Get Custom Visual Storytelling
</h1>
          <p class="choice-para">Logic Works is a leading 2D animation Agency in Dubai. Our team delivers custom 2D animated video production, explainer videos, and marketing animations built to boost engagement and brand impact. Businesses trust in powerful visual storytelling. We create engaging, conversion-focused animations that help brands explain ideas, promote products, and connect emotionally with their audience. From startups to enterprises, our animations are designed to drive clarity, engagement, and measurable results.</p>
          <p class="choice-para">Our team delivers high-quality 2D animated video services in Dubai that blend creativity, strategy, and modern animation techniques. Whether you need marketing videos, explainer animations, or branded content, we turn your message into visuals that truly perform.</p>

        </div>
        <div class="col-lg-2">
          <h4 class="text-white fs-14">
            Let’s Create
            Something Amazing
          </h4>
        </div>
        <div class="col-lg-6">
          <div class="seo-btn justify-content-center">
            <a href="#">Live Chat</a>
            <a href="#" id="openPopup">Get A Quote</a>
          </div>
        </div>
        <!-- <div class="col-lg-2">
          <div class="banner-right-sm text-center">
            <h4 class="fs-23" style="color: #673F97">60%</h4>
            <h5 class="fs-12" style="color: #FEFEFE">User Retention Rate</h5>
          </div>
          <div class="banner-right-sm text-center">
            <h4 class="fs-23" style="color: #673F97">90K</h4>
            <h5 class="fs-12" style="color: #FEFEFE">Yealy Completed Project</h5>
          </div>
        </div> -->

        <!-- <div class="col-lg-4">
          <img src="assests/images/logo-design-company/banner-image.png">
        </div> -->
        <div class="col-lg-12">
          <div class="banner-bottom-area position-relative mt-30">
            <div class="row">
              <div class="col-lg-4">
                <div class="banner-left-img">
                  <img src="./assests/images/2d-animation/banner-left.webp" class="position-absolute"
                    alt="banner-left-img">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="banner-center-img">
                  <img src="./assests/images/2d-animation/banner-center.webp" class="position-absolute"
                    alt="banner-center-img">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="banner-right-img">
                  <img src="./assests/images/2d-animation/banner-right.webp" class="position-absolute"
                    alt="banner-right-img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-marquee section-bg">
    <div class="container" style="max-width: 100%; padding: 0px;">
      <div class="row marwuee-row">
        <div class="col z-2" style="padding: 0px;">
          <div class="marquee">
            <div class="marquee__row">
              <div class="marquee__item">
                <p class="marquee__text">2D Animation Services &nbsp;—&nbsp;2D Animation Services </p>
              </div>
              <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
              <div class="marquee__item">
                <p class="marquee__text">2D Animation Services &nbsp;—&nbsp;2D Animation Services </p>
              </div>
              <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
              <div class="marquee__item">
                <p class="marquee__text">2D Animation Services &nbsp;—&nbsp;2D Animation Services </p>
              </div>
              <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
            </div>
            <div aria-hidden="true" class="marquee__row">
              <div class="marquee__item">
                <p class="marquee__text">2D Animation Services &nbsp;—&nbsp;2D Animation Services </p>
              </div>
              <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
              <div class="marquee__item">
                <p class="marquee__text">2D Animation Services &nbsp;—&nbsp;2D Animation Services </p>
              </div>
              <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
              <div class="marquee__item">
                <p class="marquee__text">2D Animation Services &nbsp;—&nbsp;2D Animation Services </p>
              </div>
              <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="position-relative lg-shape-bg">
    <section class="towd-animation-wcus-sec section-bg py-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-white text-center same-all">
           Why Choose Our 2D Animation Company in Dubai?

            </h2>
            <p class="exter-para mb-50">
           Choose Logic Works for creative excellence, local expertise, and animations that connect with your audience the way you intend. As a trusted 2D animation company in Dubai, we focus on results, not just visuals.
            </p>
          </div>
          <div class="row twod-animation-wcu-slider">
            <div class="col-lg-4">
              <div class="td-animation-wcu-card text-center">
                <img src="assests/images/2d-animation/2d-animation-ser-006.webp" class="mb-20" alt="Wcu-001">
                <h4 class="text-black fw-700 fs-24">Experienced 2D Animators</h4>
                <p class="text-black fs-15 mb-20">
                  Each animator brings characters and concepts to life through fluid motion. Our team creates smooth
                  animations that capture attention and deliver your message clearly.
                </p>
                <a href="" class="btn-primary">Get Started</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="td-animation-wcu-card text-center">
                <img src="assests/images/2d-animation/2d-animation-ser-005.webp" class="mb-20" alt="Wcu-002">
                <h4 class="text-black fw-700 fs-24">Dubai-Based Creative Team</h4>
                <p class="text-black fs-15 mb-20">
                  Clients can collaborate directly with our animation studio. Working with a Dubai-based creative team
                  makes revisions simple and keeps projects moving forward smoothly.
                </p>
                <a href="" class="btn-primary">Get Started</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="td-animation-wcu-card text-center">
                <img src="assests/images/2d-animation/wcu-card-03.webp" class="mb-20" alt="Wcu-003">
                <h4 class="text-black fw-700 fs-24">On-Time Project Completion</h4>
                <p class="text-black fs-15 mb-20">
                  Schedules stay clear from project start. We deliver finished animations without delays. Every
                  milestone progresses with regular updates so you see exactly how your project develops.
                </p>
                <a href="" class="btn-primary">Get Started</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="td-animation-wcu-card text-center">
                <img src="assests/images/2d-animation/wcu-card-02.webp" class="mb-20" alt="Wcu-004">
                <h4 class="text-black fw-700 fs-24">Collaborative Creative Process</h4>
                <p class="text-black fs-15 mb-20">
                  Production moves through focused phases. You see rough animations early. Creative input flows
                  naturally, helping your 2D animation project develop in the right direction without miscommunication.
                </p>
                <a href="" class="btn-primary">Get Started</a>
              </div>
            </div>
          </div>
          <!-- <div class="twod-animation-wcu-arrows">
            <div class="left-arrow">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
            <div class="right-arrow">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <section class="twod-animation-service section-bg pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="why-choice-2d text-center fs-72 fw-900 text-white">
              Our 2D Animation Services
            </h2>
            <p class="text-white fs-25 text-center mb-50">
              Get complete animation solutions for your business needs
            </p>
          </div>
          <div class="row twod-animation-service-slider">
            <div class="col-lg-4">
              <div class="td-animation-wcu-card td-animation-service-card  ">
                <img src="assests/images/2d-animation/wcu-card-01.webp" class="" alt="slider-img-000">
                <div class="td-animation-service-card-bottom-content py-20 px-20">
                  <h4 class="fw-700 fs-24 text-primary-theme">Custom 2D Animation Production</h4>
                  <p class="fs-13 mb-20">
                    We design each sequence based on your story and brand goals. 2D animation services should
                    communicate clearly, so movements flow naturally and messages stay memorable for viewers.
                    <!-- <a href="#" class="text-primary-theme">Read More</a> -->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="td-animation-wcu-card td-animation-service-card  ">
                <img src="assests/images/2d-animation/2d-animation-ser-002.webp" class="" alt="slider-img-001">
                <div class="td-animation-service-card-bottom-content py-30 px-20">
                  <h4 class="fw-700 fs-24 text-primary-theme">Explainer Video Animation</h4>
                  <p class="fs-13 mb-20">
                    We help you explain complex ideas through visual storytelling. Audiences can understand concepts,
                    follow processes, and remember key points without confusion or information overload.
                    <!-- <a href="#" class="text-primary-theme text-decoration-none">Read
                      More</a> -->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="td-animation-wcu-card td-animation-service-card  ">
                <img src="assests/images/2d-animation/2d-animation-ser-003.webp" class="" alt="slider-img-002">
                <div class="td-animation-service-card-bottom-content py-20 px-20">
                  <h4 class="fw-700 fs-24 text-primary-theme">Commercial Animation Content</h4>
                  <p class="fs-13 mb-20">
                    We create animations for marketing campaigns and product launches. Brands can showcase features,
                    build emotional connections, and drive action through compelling animated stories.
                    <!-- <a href="#" class="text-primary-theme text-decoration-none">Read
                      More</a> -->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="td-animation-wcu-card td-animation-service-card  ">
                <img src="assests/images/2d-animation/2d-animation-ser-004.webp" class="" alt="slider-img-003">
                <div class="td-animation-service-card-bottom-content py-30 px-20">
                  <h4 class="fw-700 fs-24 text-primary-theme">Educational Animation Videos</h4>
                  <p class="fs-13 mb-20">
                    We create animations that simplify learning for students and professionals. Complex lessons turn
                    into easy visuals, making knowledge clear and engaging.
                    <!-- <a href="#" class="text-primary-theme text-decoration-none">Read
                      More</a> -->
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <a href="" class="btn-primary">Get Your Custom Ad Plan</a>
          </div>
          <div class="twod-animation-wcu-arrows twod-animation-service-arrows ">
            <div class="left-arrow">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
            <div class="right-arrow">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="discuss-sec pb-100 section-bg">
    <div class="container">
      <div class="row dubai-row-mind align-items-center mt-0" style="background-color: #59249A; border-radius: 30px;">
        <div class="col-lg-4">
          <img src="assests/images/web-dubai/dubai-agent.webp" alt="2D-Animation-banda" class="dubai-agent">
        </div>
        <div class="col-lg-8">
          <h2 class="text-white same-all mb-10">Start Your 2D Animation Project with Experts</h2>
          <!-- <h4 class="text-white fs-73 mb-50">Let’s Discuss!</h4> -->
          <a href="#">Get In Touch</a>
        </div>
      </div>
    </div>
  </section>
  <section class="our-process-sec section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h2 class="text-white text-start same-all">Our Process</h2>
          <p class="text-white fs-20">Our structured 2D animation process ensures a seamless journey from idea to delivery, combining creative planning, expert execution, and consistent results across every production stage.</p>
          <ul class="process-list">
            <li class="active" data-title="Creative Planning & Visual Blueprint
" data-desc="We begin by understanding your business goals, target audience, and core message. As a trusted 2D animation agency Dubai, we translate this information into a strong creative concept and detailed storyboard. This step defines the narrative structure, animation flow, and visual direction, ensuring every scene supports your objectives and delivers your message clearly and effectively.">Creative Planning & Visual Blueprint
</li>
            <li data-title="Brand-Focused Visual Design
" data-desc="Our creative team designs custom characters, environments, icons, and visual elements that align with your brand identity. Colors, typography, and illustration styles are carefully selected to maintain consistency and recognition. This stage builds a solid visual foundation for your 2D animated video production Dubai, ensuring strong storytelling, brand alignment, and a polished, professional look.">Brand-Focused Visual Design
</li>
            <li data-title="Dynamic Animation Execution
" data-desc="Using modern animation tools and industry-proven techniques, we bring illustrations to life with smooth transitions, dynamic motion, and precise timing. Our animators focus on pacing, clarity, and visual hierarchy to keep viewers engaged. Every movement is purposeful, helping simplify complex ideas while delivering visually compelling 2D animation services Dubai.
">Dynamic Animation Execution
</li>
            <li data-title="Quality Review & Final Delivery
" data-desc="We work closely with you during the review phase, incorporating feedback and refining details to ensure the animation meets your expectations. Once approved, we deliver the final video in high-quality formats optimized for websites, social media, presentations, and digital campaigns, ensuring maximum performance across all platforms.
">Quality Review & Final Delivery
</li>
          </ul>
        </div>
        <div class="col-lg-7">
          <div class="d-flex align-items-end gap-10 pb-20">
            <img id="processImage" src="./assests/images/2d-animation/our-process-right.webp" alt="our-process-right-imAGE">
            <!-- <div class="seo-btn d-flex flex-column justify-content-center">
              <a href="#">Live Chat</a>
              <a href="#" id="openPopup">Get A Quote</a>
            </div> -->
          </div>
          <div id="processContentArea">
            <h4 id="processTitle" class="text-white fs-25 fw-900 mb-10">Creative Planning & Visual Blueprint
</h4>
            <p id="processDesc" class="text-white fs-18">
           We begin by understanding your business goals, target audience, and core message. As a trusted 2D animation agency Dubai, we translate this information into a strong creative concept and detailed storyboard. This step defines the narrative structure, animation flow, and visual direction, ensuring every scene supports your objectives and delivers your message clearly and effectively.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- slider -->
  <section class="section-bg port-web" id="port-web">
    <div class="container" style="display: block;">
      <p class="why-choice-2d text-white text-center fs-52 fw-900" style="line-height: 1.2;">Check Out Our Creative
        Portfolio</p>
      <div class="row slider-logo">
        <div class="col">
          <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
            thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
            <swiper-slide>
              <img src="assests/images/website/gametimewellness.webp" alt="2d-bottom-slider-001" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/captbutch.webp" alt="2d-bottom-slider-002" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/depatieroof.webp" alt="2d-bottom-slider-003" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/slider-01.webp" alt="2d-bottom-slider-4" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/funkifitgame.webp" alt="2d-bottom-slider-005" />
            </swiper-slide>
          </swiper-container>

          <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
            watch-slides-progress="true">
            <swiper-slide>
              <img src="assests/images/website/gtwlogo.webp" alt="bottom-small-img-001" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/cblogo.webp" alt="bottom-small-img-002" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/drlogo.webp" alt="bottom-small-img-003" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/cuclogo.webp" alt="bottom-small-img-004" />
            </swiper-slide>
            <swiper-slide>
              <img src="assests/images/website/ffg-logo.webp" alt="bottom-small-img-005" />
            </swiper-slide>
          </swiper-container>
        </div>
      </div>

      <div class="row align-items-center transform-row">
        <div class="col-lg-4">
          <img src="assests/images/marketing/banda.webp" alt="2d-banda-img" class="bde">
        </div>
        <div class="col-lg-8">
          <h2 class="text-white same-all text-end mnhead">Build Engaging, Professional, and Results-Driven 2D Animations
            with Logic Works
          </h2>
          <div class="digital-two-btn">
             <a href="https://wa.me/971529502258" target="_blank">Call Now</a>
            <a href="#" id="openPopup">Get a quote</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include("includes/clint-review.php");
  ?>
  <div class="position-relative section-bg-wrapper overflow-hidden z-1">
    <!-- <img src="assests/images/ai-chatbot/sec-left.webp" alt="2d-ques-left" class="sec-left-img position-absolute z-0">
    <img src="assests/images/ai-chatbot/sec-right.webp" alt="2d-ques-right" class="sec-right-img position-absolute z-0"> -->
    <section class="faq-home section-bg">
      <div class="container">
        <div class="row justify-content-space-between">
          <div class="col">
              <h2 class="text-white text-center"><span>FAQ</span>'S</h2>
            <div class="faqss">
              <div class="quwstion">
                <button class="accordions">How does your 2D animation process ensure quality results?
</button>
                <div class="panel">
                  <p>Our process combines creative planning, professional design, and structured production. Each project goes through concept development, visual design, animation, and quality review to ensure the final video is clear, engaging, and aligned with your business goals.
</p>
                </div>
              </div>

              <div class="quwstion">
                <button class="accordions">Can you adapt 2D animations for different marketing platforms?
</button>
                <div class="panel">
                  <p>Yes. We optimize every animation for its intended platform, whether it’s a website, social media, digital ads, presentations, or internal use. This ensures your 2D animation services Dubai deliver consistent performance across all channels.
</p>
                </div>
              </div>

              <div class="quwstion">
                <button class="accordions">Do you help with scripting and messaging for animated videos?
</button>
                <div class="panel">
                  <p>Absolutely. Our team assists with scriptwriting and message structuring to ensure your content is concise, persuasive, and easy to understand. Strong storytelling is a key part of successful 2D animated video production Dubai.
</p>
                </div>
              </div>

              <div class="quwstion">
                <button class="accordions">Can you match an existing brand style or visual identity?</button>
                <div class="panel">
                  <p>Yes. We carefully follow your brand guidelines, including colors, fonts, tone, and visual style. If guidelines don’t exist, we help define a look that aligns with your brand personality and target audience.</p>
                </div>
              </div>
              <div class="quwstion">
                <button class="accordions">Is 2D animation suitable for long-term marketing use?</button>
                <div class="panel">
                  <p>2D animations are highly versatile and evergreen. They can be reused across multiple campaigns, platforms, and audiences, making them a cost-effective solution for long-term branding, education, and marketing efforts.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
   
  </div>
  <!-- <section class="section-bg journey-sec our-case-section" id="project-in-minds">
    <div class="container" style="display:block;">
      <div class="row justify-content-space-between our-reviews">
        <div class="col">
          <h2 class="text-center text-white">Trusted Worldwide for Expert Digital Marketing Consultancy</h2>
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
                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/portfolio/people-2.png"></div>
                <div class="col-lg-8 col-md-6 testi-txt">
                  <h4 class="text-white">Omar Hassan</h4>
                  <h6 class="text-white">Manager</h6>
                  <img src="assests/images/start-revews.png">
                  <p class="text-white">Logic Works provided expert guidance that completely transformed our marketing
                    approach. Their consultancy helped us create a clear and effective strategy.</p>
                </div>
              </div>
              <div class="tesi-roww">
                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/reviews-001.jpg"></div>
                <div class="col-lg-8 col-md-6 testi-txt">
                  <h4 class="text-white">Sarah L.</h4>
                  <h6 class="text-white">Marketing Manager</h6>
                  <img src="assests/images/start-revews.png">
                  <p class="text-white">Before working with Logic Works, we struggled with inefficient marketing. Their
                    insights helped us refine our approach and maximize results.</p>
                </div>
              </div>

              <div class="tesi-roww">
                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/Layer-525.png"></div>
                <div class="col-lg-8 col-md-6 testi-txt">
                  <h4 class="text-white">James R.</h4>
                  <h6 class="text-white">Owner, Babbage</h6>
                  <img src="assests/images/start-revews.png">
                  <p class="text-white">Logic Works helped us refine our targeting strategy, making a huge impact on our
                    brand's visibility and engagement.</p>
                </div>
              </div>

              <div class="tesi-roww">
                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/people-3.png"></div>
                <div class="col-lg-8 col-md-6 testi-txt">
                  <h4 class="text-white">Emma W</h4>
                  <h6 class="text-white">Director</h6>
                  <img src="assests/images/start-revews.png">
                  <p class="text-white">Their SEO consultancy positioned us as an industry leader. We now attract more
                    high-intent customers and maintain a strong online presence.</p>
                </div>
              </div>
              <div class="tesi-roww">
                <div class="col-lg-4 col-md-6 testi-img"><img src="assests/images/portfolio/people-5.png"></div>
                <div class="col-lg-8 col-md-6 testi-txt">
                  <h4 class="text-white">David P</h4>
                  <h6 class="text-white">Quality Assurance</h6>
                  <img src="assests/images/start-revews.png">
                  <p class="text-white">We improved customer retention and engagement with Logic Works' consultancy.
                    Their data-backed insights helped us refine our messaging and marketing strategy.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->


</main>
<?php
include("includes/footer.php");
?>

  <script>
    document.querySelectorAll('.process-list li').forEach(item => {
      item.addEventListener('click', function() {
        // Remove active class from all items
        document.querySelectorAll('.process-list li').forEach(li => li.classList.remove('active'));
        
        // Add active class to clicked item
        this.classList.add('active');
        
        // Get data from attributes
        const title = this.getAttribute('data-title');
        const desc = this.getAttribute('data-desc');
        
        // Update content with a small fade effect
        const contentArea = document.getElementById('processContentArea');
        contentArea.style.opacity = '0';
        contentArea.style.transition = 'opacity 0.3s ease';
        
        setTimeout(() => {
          document.getElementById('processTitle').innerText = title;
          document.getElementById('processDesc').innerText = desc;
          contentArea.style.opacity = '1';
        }, 300);
      });
    });
  </script>