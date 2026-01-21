<?php $base_url = 'http://localhost/logic-works-house/'; ?>


<body>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN2WVGBS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!--********************************
           Code Start From Here
    ******************************** -->

    <div id="popup" class="popup">
        <div class="popup-content popup-form" style="background-image: url(<?php echo $base_url; ?>assests/images/popup-background.jpg);
               width:100%; 
               max-width:700px; 
               height:70vh; 
               overflow-y:auto; 
               padding:30px; 
                box-sizing:border-box;  
               border-radius:10px; 
               background-size:cover; 
            position: relative;
               background-position:center;">
            <button id="closePopup" class="close"
                style="position:absolute; top:15px; right:15px; background:#fff; border:none; padding:5px 10px; border-radius:50%; cursor:pointer;">X</button>
            <p>LIMITED TIME OFFER <span>50%</span> OFF ALL SERVICES</p>
            <form action="popup_limited_offer.php" method="POST" required>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <textarea id="message" name="message" placeholder="Your Message" style="height:200px"
                    required></textarea>
                <input type="submit" value="Let's Talk To An Expert!">
            </form>
        </div>
    </div>

    <div class="popup-box">

    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="<?php echo $base_url; ?>"><img
                                src="<?php echo $base_url; ?>frisk/assets/img/head-logo.png" alt="Ovation"
                                style="width:165px;"></a>
                    </div>
                    <p class="about-text">We are digital agency that helps businesses develop immersive and engaging</p>
                    <div class="sidebar-wrap">
                        <span>27 Division St, New York,</span>
                        <span>NY 10002, USA</span>
                    </div>
                    <div class="sidebar-wrap">
                        <span><a href="tel:+971529502258">+971 52 950 2258 </a></span>
                        <span><a href="mailto:info@logicworks.com">info@logicworks.com</a></span>
                    </div>
                    <div class="social-btn style2">
                        <a href="https://www.facebook.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                            </span>
                        </a>
                        <a href="https://instagram.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                            </span>
                        </a>
                        <a href="https://twitter.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                            </span>
                        </a>
                        <a href="https://dribbble.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo $base_url; ?>index">
                    <img src="<?php echo $base_url; ?>assests/images/head-logo.webp" alt="Ovation" style="width:165px;">
                </a>
            </div>

            <div class="mobile-menu">
                <ul>
                    <li><a href="<?php echo $base_url; ?>">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>about">About</a></li>

                    <li class="menu-item-has-children">
                        <a href="<?php echo $base_url; ?>services">Services</a>

                        <!-- Mobile Accordion: Social Media Marketing -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Social Media Marketing <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>facebook-advertising-agency-dubai">Facebook
                                        Advertising</a></li>
                                <li><a href="<?php echo $base_url; ?>linkedin-advertising-agency-dubai">LinkedIn
                                        Advertising</a></li>
                                <li><a href="<?php echo $base_url; ?>twitter-advertising-agency-dubai">Twitter
                                        Advertising</a></li>
                                <li><a href="<?php echo $base_url; ?>instagram-advertising-agency-dubai">Instagram
                                        Advertising</a></li>
                            </ul>
                        </div>

                        <!-- Mobile Accordion: Web Design & Development -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Web Design & Development <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>ui-ux-design-company-dubai">UI UX Design</a></li>
                                <li><a href="<?php echo $base_url; ?>wordpress-development-company-dubai">Wordpress
                                        Development</a></li>
                                <li><a href="<?php echo $base_url; ?>shopify-development-services-dubai">Shopify
                                        Development</a></li>
                                <li><a href="<?php echo $base_url; ?>custom-website-development-company-dubai">Custom
                                        Website Development</a></li>
                                <li><a href="<?php echo $base_url; ?>website-maintenance-services-dubai">Website
                                        Maintenance & Security</a></li>
                                <li><a href="<?php echo $base_url; ?>graphic-design-company-dubai">Graphics
                                        Designing</a></li>
                                <li><a href="<?php echo $base_url; ?>domain-hosting-services-dubai">Domain & Hosting</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mobile Accordion: Digital Marketing -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Digital Marketing <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>tiktok-shop-marketing-agency-dubai">TikTok Shop</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mobile Accordion: Industries -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Industries <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>retail-app-development-company-dubai">Retail</a>
                                </li>
                                <li><a
                                        href="<?php echo $base_url; ?>healthcare-app-development-company-dubai">Healthcare</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>real-estate-app-development-company-dubai">Real
                                        Estate</a></li>
                                <li><a
                                        href="<?php echo $base_url; ?>ecommerce-app-development-company-dubai">Ecommerce</a>
                                </li>
                                <li><a
                                        href="<?php echo $base_url; ?>food-delivery-app-development-company-dubai">Food</a>
                                </li>
                                <li><a
                                        href="<?php echo $base_url; ?>insurance-app-development-company-dubai">Insurance</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>fintech-app-development-company-dubai">Fintech</a>
                                </li>
                                <li><a
                                        href="<?php echo $base_url; ?>enterprise-app-development-company-dubai">Enterprise</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>dating-app-development-company-dubai">Dating</a>
                                </li>
                                <li><a
                                        href="<?php echo $base_url; ?>automotive-app-development-company-dubai">Automotive</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>law-firm-mobile-app-development-dubai">Law Firm</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>hotel-app-development-services-dubai">Hotel</a>
                                </li>
                                <li><a
                                        href="<?php echo $base_url; ?>restaurant-app-development-company-dubai">Restaurant</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>travel-app-development-dubai">Travel</a></li>
                            </ul>
                        </div>

                        <!-- Mobile Accordion: Locations -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Locations <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>mobile-app-development-company-uae">UAE</a></li>
                                <li><a href="<?php echo $base_url; ?>mobile-app-development-company-kuwait">Kuwait</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>mobile-app-development-company-qatar">Qatar</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>mobile-app-development-company-saudi-arabia">Saudi
                                        Arabia</a></li>
                                <li><a href="<?php echo $base_url; ?>mobile-app-development-company-oman">Oman</a></li>
                                <li><a href="<?php echo $base_url; ?>mobile-app-development-company-bahrain">Bahrain</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li><a href="<?php echo $base_url; ?>portfolio">Portfolio</a></li>
                    <li><a href="<?php echo $base_url; ?>blog">Blog</a></li>
                    <li><a href="<?php echo $base_url; ?>contact">Contact</a></li>
                </ul>
            </div>

            <div class="sidebar-wrap">
                <span><a href="tel:+971529502258">+971 52 950 2258 </a></span>
                <span><a href="mailto:info@logicworks.com">info@logicworks.com</a></span>
            </div>
        </div>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="nav-header header-layout2">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="<?php echo $base_url; ?>index"><img
                                        src="<?php echo $base_url; ?>assests/images/head-logo.webp" alt="logo"
                                        style="width:165px;"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo $base_url; ?>">
                                            <span class="link-effect">
                                                <span class="effect-1">Home</span>
                                                <span class="effect-1">Home</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo $base_url; ?>about">
                                            <span class="link-effect">
                                                <span class="effect-1">About</span>
                                                <span class="effect-1">About</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo $base_url; ?>services">
                                            <span class="link-effect">
                                                <span class="effect-1">Service</span>
                                                <span class="effect-1">Service</span>
                                            </span>
                                        </a>
                                        <div class="mega-menu-wrapper">
                                            <div class="mega-menu-container">
                                                <!-- Column 1: Services -->
                                                <div class="mega-menu-col">
                                                    <h3 class="mega-menu-title">Services</h3>
                                                    <ul class="mega-menu-list">
                                                        <li><a href="javascript:void(0)" class="service-trigger"
                                                                data-target="social-media">Social Media Marketing <i
                                                                    class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="service-trigger"
                                                                data-target="web-design">Web Design & Development <i
                                                                    class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="service-trigger"
                                                                data-target="digital-marketing">Digital Marketing <i
                                                                    class="fas fa-chevron-right"></i></a></li>

                                                    </ul>
                                                </div>

                                                <!-- Column 2: Specific Services (Dynamic) - Hidden by Default -->
                                                <div class="mega-menu-col" id="sub-service-col" style="display: none;">
                                                    <h3 class="mega-menu-title" id="sub-service-title">Details</h3>
                                                    <!-- Social Media Sub Services -->
                                                    <ul class="mega-menu-list sub-list" id="social-media">
                                                        <li><a
                                                                href="<?php echo $base_url; ?>facebook-advertising-agency-dubai">Facebook
                                                                Advertising</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>linkedin-advertising-agency-dubai">LinkedIn
                                                                Advertising</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>twitter-advertising-agency-dubai">Twitter
                                                                Advertising</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>instagram-advertising-agency-dubai">Instagram
                                                                Advertising</a></li>
                                                    </ul>

                                                    <!-- Web Design Sub Services -->
                                                    <ul class="mega-menu-list sub-list split-column-list"
                                                        id="web-design">
                                                        <li><a
                                                                href="<?php echo $base_url; ?>ui-ux-design-company-dubai">UI
                                                                UX Design</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>wordpress-development-company-dubai">Wordpress
                                                                Development</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>shopify-development-services-dubai">Shopify
                                                                Development</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>custom-website-development-company-dubai">Custom
                                                                Website Development</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>website-maintenance-services-dubai">Website
                                                                Maintenance & Security</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>graphic-design-company-dubai">Graphics
                                                                Designing</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>domain-hosting-services-dubai">Domain
                                                                & Hosting</a></li>
                                                    </ul>
                                                    <!-- Digital Marketing Sub Services -->
                                                    <ul class="mega-menu-list sub-list split-column-list"
                                                        id="digital-marketing">
                                                        <li><a
                                                                href="<?php echo $base_url; ?>tiktok-shop-marketing-agency-dubai ">TikTok
                                                                Shop</a></li>

                                                    </ul>

                                                </div>

                                                <!-- Column 3: Industries -->
                                                <div class="mega-menu-col">
                                                    <h3 class="mega-menu-title text-center">Industries</h3>
                                                    <ul class="mega-menu-list split-column-list">
                                                        <li><a
                                                                href="<?php echo $base_url; ?>retail-app-development-company-dubai">Retail</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>healthcare-app-development-company-dubai">Healthcare</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>real-estate-app-development-company-dubai">Real
                                                                Estate</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>ecommerce-app-development-company-dubai">Ecommerce</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>food-delivery-app-development-company-dubai">Food</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>insurance-app-development-company-dubai">Insurance</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>fintech-app-development-company-dubai">Fintech</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>enterprise-app-development-company-dubai">Enterprise</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>dating-app-development-company-dubai">Dating</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>automotive-app-development-company-dubai">Automotive</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>law-firm-mobile-app-development-dubai">Law
                                                                Firm</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>hotel-app-development-services-dubai">Hotel</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>restaurant-app-development-company-dubai">Restaurant</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>travel-app-development-dubai">Travel</a>
                                                        </li>
                                                    </ul>
                                                </div>



                                                <!-- Column 4: Locations -->
                                                <div class="mega-menu-col">
                                                    <h3 class="mega-menu-title">Locations</h3>
                                                    <ul class="mega-menu-list">

                                                        <li><a
                                                                href="<?php echo $base_url; ?>mobile-app-development-company-uae">UAE</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>mobile-app-development-company-kuwait">Kuwait</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>mobile-app-development-company-qatar">Qatar</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>mobile-app-development-company-saudi-arabia">Saudi
                                                                Arabia</a></li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>mobile-app-development-company-oman">Oman</a>
                                                        </li>
                                                        <li><a
                                                                href="<?php echo $base_url; ?>mobile-app-development-company-bahrain">Bahrain</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo $base_url; ?>portfolio">
                                            <span class="link-effect">
                                                <span class="effect-1">Portfolio</span>
                                                <span class="effect-1">Portfolio</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo $base_url; ?>blog">
                                            <span class="link-effect">
                                                <span class="effect-1">Blog</span>
                                                <span class="effect-1">Blog</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $base_url; ?>contact-us">
                                            <span class="link-effect">
                                                <span class="effect-1">Contact</span>
                                                <span class="effect-1">Contact</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hedr-phone" href="tel:+971529502258">
                                            <span class="link-effect">
                                                <span class="effect-1">+971 52 950 2258</span>
                                                <span class="effect-1">+971 52 950 2258</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a class="btn bg-theme text-title" id="openPopup">
                                    <span class="link-effect">
                                        <span class="effect-1">Get Started Free</span>
                                        <span class="effect-1">Get Started Free</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header End -->
    <style>
        .mega-menu-wrapper {
            position: absolute;
            top: 80%;
            left: 0;
            width: 100vw;
            margin-left: calc(-50vw + 50%);
            background: #000;
            padding: 40px 0;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.7);
            display: none;
            z-index: 9999;
            border-top: 1px solid #222;
            border-bottom: 1px solid #222;
            border-radius: 0;
        }

        /* Hover Bridge to keep menu open when moving cursor from menu item to mega menu */
        .mega-menu-wrapper::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 0;
            width: 100%;
            height: 20px;
            background: transparent;
        }

        .menu-item-has-children {
            position: relative;
        }

        @media (min-width: 992px) {
            .nav-header .menu-item-has-children {
                position: static !important;
            }

            .sticky-wrapper {
                position: relative;
                /* Removed !important to allow fixed positioning on scroll */
            }
        }

        /* Styling for the header when it becomes sticky */
        .sticky-wrapper.header-sticky {
            background-color: #000 !important;
            border-bottom: 1px solid #222;
        }

        .menu-item-has-children:hover .mega-menu-wrapper {
            display: block;
        }

        .mega-menu-container {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .mega-menu-col {
            flex: 1;
            min-width: 200px;
        }

        .mega-menu-title {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 25px;
            border-bottom: 2px solid #B454C7;
            padding-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .mega-menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .mega-menu-list li {
            margin-bottom: 3px;
            display: block !important;
            float: none !important;
            width: 100%;
        }

        /* Split long lists into 2 columns to reduce height */
        .split-column-list {
            display: block;
            column-count: 2;
            column-gap: 30px;
        }

        /* Ensure sub-lists stay hidden until clicked even if they have the split-column class */
        .sub-list.split-column-list:not([style*="display: block"]) {
            display: none;
        }

        .split-column-list li {
            break-inside: avoid;
        }

        .mega-menu-list li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 15px;
            transition: all 0.3s ease;
            display: block;
            line-height: 1.4;
        }

        .mega-menu-list li a:hover {
            color: #B454C7;
            padding-left: 8px;
        }

        .service-trigger {
            cursor: pointer;
            position: relative;

        }

        .service-trigger.active-service {
            color: #B454C7 !important;
            font-weight: 700;
        }

        .service-trigger i {
            float: right;
            margin-top: 4px;
            font-size: 12px;
            transition: transform 0.3s;
        }

        .service-trigger.active-service i {
            transform: translateX(5px);
        }

        .sub-list {
            display: none;
        }

        #sub-placeholder {
            color: #888;
            font-size: 14px;
            padding: 10px 0;
        }

        /* Mobile Menu Accordion */
        .accordion-toggle {
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #B454C7;
            padding: 10px 12px;
            border-radius: 6px;
            color: #000;
        }

        .accordion-content {
            display: none;
            padding-left: 20px;
            margin-top: 8px;
        }

        .accordion-content li {
            margin-bottom: 6px;
        }

        .accordion-toggle.active i {
            transform: rotate(180deg);
        }

        @media (max-width: 991px) {
            .mega-menu-wrapper {
                position: static;
                width: 100%;
                transform: none;
                display: none;
                padding: 20px;
            }

            .menu-item-has-children:hover .mega-menu-wrapper {
                display: none;
                /* Hide on mobile hover, use accordion instead */
            }
        }

        /* Desktop responsiveness adjustments */
        @media (min-width: 992px) and (max-width: 1200px) {
            .mega-menu-wrapper {
                padding: 30px;
                max-width: 950px;
            }

            .mega-menu-col {
                min-width: 150px;
                gap: 15px;
            }
        }
    </style>
    <!-- ==== -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggles = document.querySelectorAll(".accordion-toggle");

            toggles.forEach(toggle => {
                toggle.addEventListener("click", function () {
                    const content = this.nextElementSibling;
                    const isActive = this.classList.contains("active");

                    // Close all others
                    document.querySelectorAll(".accordion-toggle").forEach(t => {
                        t.classList.remove("active");
                        t.nextElementSibling.style.display = "none";
                    });

                    // Toggle current one
                    if (!isActive) {
                        this.classList.add("active");
                        content.style.display = "block";
                    }
                });
            });

            // Mega Menu Click Logic
            const serviceTriggers = document.querySelectorAll('.service-trigger');
            const subLists = document.querySelectorAll('.sub-list');
            const subCol = document.getElementById('sub-service-col');
            const subTitle = document.getElementById('sub-service-title');

            serviceTriggers.forEach(trigger => {
                trigger.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const targetId = this.getAttribute('data-target');
                    const categoryName = this.innerText.trim();

                    // Hide all lists and show the column
                    subLists.forEach(list => list.style.display = 'none');
                    if (subCol) subCol.style.display = 'block';

                    // Show target list
                    const targetList = document.getElementById(targetId);
                    if (targetList) {
                        targetList.style.display = 'block';
                    }

                    // Update Title
                    if (subTitle) subTitle.innerText = categoryName;

                    // Active state for trigger
                    serviceTriggers.forEach(t => t.classList.remove('active-service'));
                    this.classList.add('active-service');
                });
            });

            // Reset menu when it closes (optional, but keeps UI clean)
            const serviceMenuParent = document.querySelector('.menu-item-has-children');
            if (serviceMenuParent) {
                serviceMenuParent.addEventListener('mouseleave', function () {
                    // if (subCol) subCol.style.display = 'none'; // Uncomment if you want it to reset on leave
                });
            }

            // Prevent mega menu from closing when clicking inside
            const megaMenu = document.querySelector('.mega-menu-wrapper');
            if (megaMenu) {
                megaMenu.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            }
        });
    </script>