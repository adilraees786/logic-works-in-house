<?php
$meta_title = "Logic Works - Custom Solutions for Business Success";
$meta_description = "Logic Works provides customized web, app, and software solutions for your business to increase growth.";
$keyword = 'logic work services';
$canonical = "https://logicworks.ae/services";
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
        background-image: url(assests/images/serice-bg.webp);
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

    .service-page .row.justify-content-space-between.project-in-mind img {
        transform: none !important;
        margin-bottom: 0px;
    }

    .service-page .project-in-mind img {
        margin-top: -150px;
        width: 70%;
    }

    .service-page .project-in-mind h2.text-white {
        margin-bottom: 60px;
        font-size: 70px;
        font-weight: 600;
    }

    .service-page .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        display: none;
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

    @media screen and (min-width: 1200px) and (max-width: 1400px) {
        .service-page .row.justify-content-space-between.project-in-mind img {
            transform: none !important;
            margin-bottom: -30px;
        }
    }
</style>
<main class="service-page bg-black overflow-hidden">
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
                    <img src="assests/images/service/header-character.webp" alt="service-header-banner">
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
                                <p class="text-white">We craft fast, secure, and scalable mobile apps tailored to your business, built to engage users, boost growth, and perform flawlessly across platforms.</p>
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
                    <img src="assests/images/service/digtial.webp" alt="sec-digital" class="scrol-img">
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
                    <img src="assests/images/service/web-design.webp" alt="ser-web-design" class="scrol-img">
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
                    <img src="assests/images/service/app-development.webp" alt="ser-app-dev" class="scrol-img">
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
                    <img src="assests/images/service/log-deisgn.webp" alt="ser-logo-design" class="scrol-img">
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
                        <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
                    </div>
                    <div aria-hidden="true" class="marquee__row">
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works&nbsp;&mdash;&nbsp;Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
                        <div class="marquee__item">
                            <p class="marquee__text">Logic Works</p>
                        </div>
                        <span class="marquee__separator"><img src="assests/images/service/Star.webp"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <?php
    $blog_posts = [];
    $blog_api_url = 'https://logicworks.ae/blog/wp-json/wp/v2/posts?per_page=10&_embed';
    $blog_ctx = stream_context_create([
        'http' => [
            'timeout' => 12,
            'header' => "User-Agent: LogicWorksSite/1.0\r\nAccept: application/json\r\n",
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
    ]);
    $blog_json = @file_get_contents($blog_api_url, false, $blog_ctx);
    if ($blog_json) {
        $decoded_posts = json_decode($blog_json, true);
        if (is_array($decoded_posts)) {
            foreach ($decoded_posts as $post) {
                $title = html_entity_decode($post['title']['rendered'] ?? '', ENT_QUOTES, 'UTF-8');
                $excerpt = html_entity_decode(strip_tags($post['excerpt']['rendered'] ?? ''), ENT_QUOTES, 'UTF-8');
                $excerpt = trim(str_replace(["\r\n", "\r", "\n", "\t"], ' ', $excerpt));
                while (strpos($excerpt, '  ') !== false) {
                    $excerpt = str_replace('  ', ' ', $excerpt);
                }
                if (function_exists('mb_strlen') && mb_strlen($excerpt) > 120) {
                    $excerpt = rtrim(mb_substr($excerpt, 0, 120)) . '...';
                } elseif (strlen($excerpt) > 120) {
                    $excerpt = rtrim(substr($excerpt, 0, 120)) . '...';
                }
                $image = $post['_embedded']['wp:featuredmedia'][0]['source_url']
                    ?? 'assests/images/service/Logo-Design-carfting.webp';
                $link = $post['link'] ?? 'https://logicworks.ae/blog/';
                $date_label = '';
                $time_label = '';
                if (!empty($post['date'])) {
                    try {
                        $blog_dt = new DateTime($post['date']);
                        $date_label = $blog_dt->format('F j, Y');
                        $time_label = $blog_dt->format('g:i a');
                    } catch (Exception $e) {
                        $date_label = '';
                        $time_label = '';
                    }
                }

                $blog_posts[] = [
                    'title' => $title,
                    'excerpt' => $excerpt,
                    'image' => $image,
                    'link' => $link,
                    'date' => $date_label,
                    'time' => $time_label,
                ];
            }
        }
    }
    ?>
    <style>
        .blog-service {
            background-color: #0a0a0a;
            padding: 80px 0 60px;
        }

        .blog-service .container {
            max-width: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
        }

        .blog-service h2.text-white.same-all.algn-centr {
            max-width: 1160px;
            margin: 0 auto 50px;
            padding: 0 20px;
            text-align: center;
        }

        .blog-service .row,
        .blog-service .row > .col {
            margin: 0;
            padding: 0;
            width: 100%;
            max-width: 100%;
        }

        .blog-service .swiper-slide {
            height: auto;
            display: flex;
        }

        .blog-service a.lw-blog-card {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            background: #000;
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 12px;
            overflow: hidden;
            text-decoration: none;
            color: #fff;
            padding: 0;
            transition: border-color 0.25s ease, transform 0.25s ease;
        }

        .blog-service a.lw-blog-card:hover {
            background: #000;
            border-color: rgba(255, 255, 255, 0.45);
            transform: translateY(-4px);
        }

        .blog-service .lw-blog-card__media {
            width: 100%;
            aspect-ratio: 16 / 10;
            overflow: hidden;
            background: #111;
        }

        .blog-service .lw-blog-card__media img,
        .blog-service a.lw-blog-card img {
            width: 100%;
            height: 100%;
            min-height: 0;
            object-fit: cover;
            display: block;
            border-radius: 0;
        }

        .blog-service .lw-blog-card__body {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 22px 22px 20px;
            gap: 12px;
        }

        .blog-service a.lw-blog-card h4,
        .blog-service .lw-blog-card__body h4 {
            margin: 0;
            min-height: 0;
            color: #fff;
            font-size: 22px;
            line-height: 1.35;
            font-weight: 700;
            font-family: "Manrope", "Montserrat", sans-serif;
        }

        .blog-service a.lw-blog-card p,
        .blog-service .lw-blog-card__body p {
            margin: 0;
            min-height: 0;
            color: rgba(255, 255, 255, 0.85);
            font-size: 15px;
            line-height: 1.55;
            flex: 1;
        }

        .blog-service .lw-blog-card__meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 18px;
            margin-top: 8px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 13px;
        }

        .blog-service .lw-blog-card__meta span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .blog-service .lw-blog-card__meta i {
            font-size: 12px;
            opacity: 0.85;
        }

        .blog-service .centered-mode-slider {
            width: 100%;
            max-width: 100%;
            padding: 0 0 40px;
            overflow: hidden;
        }
    </style>
    <section class="blog-service">
        <div class="container" style="display:block;">
            <h2 class="text-white same-all algn-centr">Insights, Stories, and Inspiration: Journey through our Blog</h2>
            <div class="row">
                <div class="col">
                    <div class="swiper centered-mode-slider">
                        <div class="swiper-wrapper">
                            <?php if (!empty($blog_posts)): ?>
                                <?php foreach ($blog_posts as $blog_post): ?>
                                    <div class="swiper-slide">
                                        <a class="lw-blog-card" href="<?php echo htmlspecialchars($blog_post['link'], ENT_QUOTES, 'UTF-8'); ?>">
                                            <div class="lw-blog-card__media">
                                                <img src="<?php echo htmlspecialchars($blog_post['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                                    alt="<?php echo htmlspecialchars($blog_post['title'], ENT_QUOTES, 'UTF-8'); ?>"
                                                    loading="lazy">
                                            </div>
                                            <div class="lw-blog-card__body">
                                                <h4><?php echo htmlspecialchars($blog_post['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                                                <p><?php echo htmlspecialchars($blog_post['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                                                <div class="lw-blog-card__meta">
                                                    <?php if (!empty($blog_post['date'])): ?>
                                                        <span><i class="fa-regular fa-calendar"></i><?php echo htmlspecialchars($blog_post['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                                                    <?php endif; ?>
                                                    <?php if (!empty($blog_post['time'])): ?>
                                                        <span><i class="fa-regular fa-clock"></i><?php echo htmlspecialchars($blog_post['time'], ENT_QUOTES, 'UTF-8'); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="swiper-slide">
                                    <a class="lw-blog-card" href="https://logicworks.ae/blog/">
                                        <div class="lw-blog-card__media">
                                            <img src="assests/images/service/Logo-Design-carfting.webp" alt="Logic Works Blog">
                                        </div>
                                        <div class="lw-blog-card__body">
                                            <h4>Visit Our Blog</h4>
                                            <p>Explore the latest insights, stories, and digital strategies from Logic Works.</p>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
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
                    <p class="text-white">Logic Works has over 5+ years of experience delivering tailored software
                        solutions that drive actual results. We've completed 700+ projects, helping clients—from top
                        industry players to startups—achieve up to 80% improvements in efficiency. Let us build the
                        high-impact software your business needs to grow.</p>
                </div>
                <div class="col-lg-3">
                    <div class="bor-coutn">
                        <h3 class="text-white">5+</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white text-end">5+ YEARS OF EXPERIENCE</h5>
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
        <?php
        include("includes/clint-review.php");
        ?>
    </section>

    <!-- Have A Project In Mind? -->
    <section class="section-bg pt-b-80 have-server py-20 mb-20" id="project-in-minds">
        <div class="container">
            <div class="row justify-content-space-between project-in-mind"
                style="background-color: #59249A; border-radius: 30px; ">
                <div class="col-lg-7 col-md-6">
                    <h2 class="text-white">Don't Just Dream It, Achieve It <span>Join Us Now!</span></h2>
                    <a href="#" id="openPopup">Get Started!</a>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="assests/images/service/sercive-girl.webp" alt="service-cta-girl">
                </div>
            </div>
        </div>

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
                        <img src="assests/images/Goodfirms.webp">
                        <img src="assests/images/Trust.webp">
                        <img src="assests/images/Clutch.webp">
                        <img src="assests/images/Bark.webp">
                    </div>
                    <div class="live-chat-btns">
                          <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
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
                  <h2 class="text-white text-center"><span>FAQ</span>'S</h2>
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

  
</main>

<?php
include("includes/footer.php");
?>


<script>
    var swiper = new Swiper(".centered-mode-slider", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            0: {
                slidesPerView: 1.1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });

</script>

<script>
    var swiper = new Swiper(".pro-ser-slider", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        // Mobile responsive breakpoints
        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            }
        }
    });

</script>