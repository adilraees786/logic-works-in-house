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
            <form id="popupForm" action="popup_limited_offer.php" method="POST" required>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <textarea id="message" name="message" placeholder="Your Message" style="height:200px"
                    required></textarea>
                <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="6LfxcVgsAAAAAECVQSaraQGJ25sQ1swHxBqiU6mK"></div>
                    <div id="popup-captcha-error" style="color:red; margin-top:8px;"></div>
                </div>
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

                        <!-- Mobile Accordion: Digital Marketing -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Digital Marketing <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <!-- Nested Accordion: Social Media -->
                                <li>
                                    <h4 class="accordion-toggle" style="font-size: 14px; background: #9c44b0; color: #fff; padding: 8px;">Social Media Marketing <i class="fas fa-chevron-down"></i></h4>
                                    <ul class="accordion-content" style="padding-left: 15px;">
                                        <li><a href="<?php echo $base_url; ?>facebook-advertising-agency-dubai">Facebook</a></li>
                                        <li><a href="<?php echo $base_url; ?>linkedin-advertising-agency-dubai">LinkedIn</a></li>
                                        <li><a href="<?php echo $base_url; ?>twitter-advertising-agency-dubai">Twitter</a></li>
                                        <li><a href="<?php echo $base_url; ?>instagram-advertising-agency-dubai">Instagram</a></li>
                                        <li><a href="<?php echo $base_url; ?>tiktok-shop-marketing-agency-dubai">TikTok Shop</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo $base_url; ?>seo-company">Search Engine Optimization</a></li>
                                <li><a href="<?php echo $base_url; ?>ppc-marketing-company">Pay-Per-Click</a></li>
                                <li><a href="<?php echo $base_url; ?>content-marketing">Content Marketing</a></li>
                                <li><a href="<?php echo $base_url; ?>email-marketing-dubai">Email Marketing</a></li>
                                <li><a href="<?php echo $base_url; ?>online-reputataion-management">Online Reputation Management</a></li>
                            </ul>
                        </div>

                        <!-- Mobile Accordion: App Development -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">App Development <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>android-app-development">Android App Development</a></li>
                                <li><a href="<?php echo $base_url; ?>ios-app-development">iOS App Development</a></li>

                            </ul>
                        </div>

                        <!-- Mobile Accordion: Web Development -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Web Development <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>wordpress-development-company-dubai">Wordpress Development</a></li>
                                <li><a href="<?php echo $base_url; ?>shopify-development-services-dubai">Shopify Development</a></li>
                                <li><a href="<?php echo $base_url; ?>custom-website-development-company-dubai">Custom Website Development</a></li>
                                <li><a href="<?php echo $base_url; ?>domain-hosting-services-dubai">Domain & Hosting</a></li>
                                <li><a href="<?php echo $base_url; ?>website-maintenance-services-dubai">Website Maintenance & Security</a></li>
                            </ul>
                        </div>

                        <!-- Mobile Accordion: Design -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Design <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>ui-ux-design-company-dubai">UI UX Design</a></li>
                                <li><a href="<?php echo $base_url; ?>graphic-design-company-dubai">Graphics Designing</a></li>
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
                        <!-- Mobile Accordion: Video Animation -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Video Animation <i class="fas fa-chevron-down"></i></h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>2d-animation">2D Animation</a></li>
                                <li><a href="<?php echo $base_url; ?>3d-animation">3D Animation</a>
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
                                                        <li><a href="<?php echo $base_url; ?>digital-marketing-agency" class="service-trigger"
                                                                data-target="digital-marketing-sub">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/digital-marketing-consultancy.png" alt="Digital Marketing">
                                                                Digital Marketing <i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="<?php echo $base_url; ?>app-development-agency" class="service-trigger"
                                                                data-target="app-dev-sub">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/6.png" alt="App Development">
                                                                App Development <i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="<?php echo $base_url; ?>web-development-agency" class="service-trigger"
                                                                data-target="web-dev-sub">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/web-design-icon.png" alt="Web Development">
                                                                Web Development <i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="<?php echo $base_url; ?>graphic-design-company-dubai" class="service-trigger"
                                                                data-target="design-sub">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/logo-designs.png" alt="Design">
                                                                Design <i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="<?php echo $base_url; ?>video-animation" class="service-trigger"
                                                                data-target="video-sub">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/animation.png" alt="Animation">
                                                            Video Animation <i class="fas fa-chevron-right"></i></a></li>

                                                    </ul>
                                                </div>

                                                <!-- Column 2: Specific Services (Dynamic) - Hidden by Default -->
                                                <div class="mega-menu-col" id="sub-service-col" style="display: none;">
                                                    <h3 class="mega-menu-title" id="sub-service-title">Details</h3>
                                                    <!-- Digital Marketing Sub Services -->
                                                    <ul class="mega-menu-list sub-list" id="digital-marketing-sub">
                                                        <li><a href="<?php echo $base_url; ?>social-media-marketing-agency" class="sub-service-trigger"
                                                                data-target="smm-sub-sub">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/social-media-marketing.png" alt="SMM">
                                                                Social Media Marketing <i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="<?php echo $base_url; ?>seo-company">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/seo.png" alt="SEO">
                                                                Search Engine Optimization</a></li>
                                                        <li><a href="<?php echo $base_url; ?>ppc-marketing-company">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/5.png" alt="PPC">
                                                                Pay-Per-Click</a></li>
                                                        <li><a href="<?php echo $base_url; ?>content-marketing">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/4.png" alt="Content Marketing">
                                                                Content Marketing</a></li>
                                                        <li><a href="<?php echo $base_url; ?>email-marketing-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/social.png" alt="Email Marketing">
                                                                Email Marketing</a></li>
                                                        <li><a href="<?php echo $base_url; ?>online-reputataion-management">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/digital.png" alt="ORM">
                                                                Online Reputation Management</a></li>
                                                    </ul>

                                                    <!-- App Development Sub Services -->
                                                    <ul class="mega-menu-list sub-list" id="app-dev-sub">
                                                        <li><a href="<?php echo $base_url; ?>ai-development">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/ai.png" alt="AI">
                                                                AI Development</a></li>
                                                        <li><a href="<?php echo $base_url; ?>android-app-development">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/android.png" alt="AI">
                                                                Android App Development</a></li>
                                                        <li><a href="<?php echo $base_url; ?>ios-app-development">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/ios.png" alt="AI">
                                                                iOS App Development</a></li>
                                                    </ul>

                                                    <!-- Web Development Sub Services -->
                                                    <ul class="mega-menu-list sub-list" id="web-dev-sub">
                                                        <li><a href="<?php echo $base_url; ?>wordpress-development-company-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/wordress-development.png" alt="Wordpress">
                                                                Wordpress Development</a></li>
                                                        <li><a href="<?php echo $base_url; ?>shopify-development-services-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/shopify-development.png" alt="Shopify">
                                                                Shopify Development</a></li>
                                                        <li><a href="<?php echo $base_url; ?>custom-website-development-company-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/custom-website-development.png" alt="Custom Website">
                                                                Custom Website Development</a></li>
                                                        <li><a href="<?php echo $base_url; ?>domain-hosting-services-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/domain-Hosting.png" alt="Domain">
                                                                Domain & Hosting</a></li>
                                                        <li><a href="<?php echo $base_url; ?>website-maintenance-services-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/website-maintenance-security.png" alt="Security">
                                                                Website Maintenance & Security</a></li>
                                                    </ul>

                                                    <!-- Design Sub Services -->
                                                    <ul class="mega-menu-list sub-list" id="design-sub">
                                                        <li><a href="<?php echo $base_url; ?>ui-ux-design-company-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/logo.png" alt="UI UX">
                                                                UI UX Design</a></li>
                                                        <li><a href="<?php echo $base_url; ?>graphic-design-company-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/menu/logo-designs.png" alt="Graphic Design">
                                                                Graphic Design</a></li>
                                                    </ul>

                                                    <!-- Video Animation Sub Services -->
                                                    <ul class="mega-menu-list sub-list" id="video-sub">
                                                        <li><a href="<?php echo $base_url; ?>2d-animation">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/2d-animation.png" style="height: 40px; width: 40px;" alt="2D Animation">
                                                                2D Animation</a></li>
                                                        <li><a href="<?php echo $base_url; ?>3d-animation">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/3d-animation.png" style="height: 40px; width: 40px;" alt="3D Animation">
                                                                3D Animation</a></li>
                                                      
                                                    </ul>   
                                                </div>

                                                <!-- Column 3: Level 3 Services (Dynamic) - Hidden by Default -->
                                                <div class="mega-menu-col" id="triple-sub-service-col" style="display: none;">
                                                    <h3 class="mega-menu-title" id="triple-sub-service-title">Details</h3>
                                                    <!-- SMM Sub Services -->
                                                    <ul class="mega-menu-list sub-sub-list" id="smm-sub-sub">
                                                        <li><a href="<?php echo $base_url; ?>facebook-advertising-agency-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/fb.png" alt="Facebook">
                                                                Facebook</a></li>
                                                        <li><a href="<?php echo $base_url; ?>linkedin-advertising-agency-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/linkedin.png" alt="LinkedIn">
                                                                LinkedIn</a></li>
                                                        <li><a href="<?php echo $base_url; ?>twitter-advertising-agency-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/twitter.png" alt="Twitter">
                                                                Twitter</a></li>
                                                        <li><a href="<?php echo $base_url; ?>instagram-advertising-agency-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/instagram.png" alt="Instagram">
                                                                Instagram</a></li>
                                                        <li><a href="<?php echo $base_url; ?>tiktok-shop-marketing-agency-dubai">
                                                                <img src="<?php echo $base_url; ?>assests/images/sercices-icons/tiktok-shop.png" alt="TikTok">
                                                                TikTok Shop</a></li>
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
            box-shadow: 0 15px 40px #f77c81;
            display: none;
            z-index: 9999;
            border-top: 1px solid #222;
            border-bottom: 1px solid #222;
            border-radius: 0;
              
        }

        .mega-menu-wrapper:hover {
             box-shadow: 0 15px 40px #B454C7;
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
            display: flex;
            align-items: center;
            line-height: 1.4;
            padding: 5px 0;
        }

        .mega-menu-list li a img {
            width: 28px;
            height: 28px;
            margin-right: 12px;
            object-fit: contain;
        }

        .mega-menu-list li a:hover {
            color: #B454C7;
            padding-left: 8px;
        }

        .mega-menu-list li a i {
            margin-left: auto;
            font-size: 12px;
        }

        .service-trigger, .sub-service-trigger {
            cursor: pointer;
            position: relative;
        }

        .service-trigger.active-service, .sub-service-trigger.active-service {
            color: #B454C7 !important;
            font-weight: 700;
        }

        .service-trigger i, .sub-service-trigger i {
            float: right;
            margin-top: 4px;
            font-size: 12px;
            transition: transform 0.3s;
        }

        .service-trigger.active-service i, .sub-service-trigger.active-service i {
            transform: translateX(5px);
        }

        .sub-list, .sub-sub-list {
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

        /* Mobile Menu Icon Styling */
        .mobile-menu .accordion-content li a {
            display: flex;
            align-items: center;
        }
        
        .mobile-menu .accordion-content li a img {
            width: 22px;
            height: 22px;
            margin-right: 10px;
            object-fit: contain;
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
                toggle.addEventListener("click", function (e) {
                    e.stopPropagation();
                    const content = this.nextElementSibling;
                    if (!content) return;
                    
                    const isActive = this.classList.contains("active");

                    // Close others, but don't close parents
                    document.querySelectorAll(".accordion-toggle").forEach(t => {
                        if (t !== this && !t.nextElementSibling.contains(this)) {
                            t.classList.remove("active");
                            if(t.nextElementSibling) t.nextElementSibling.style.display = "none";
                        }
                    });

                    // Toggle current one
                    if (!isActive) {
                        this.classList.add("active");
                        content.style.display = "block";
                    } else {
                        this.classList.remove("active");
                        content.style.display = "none";
                    }
                });
            });

            // Mega Menu Hover Logic
            const serviceTriggers = document.querySelectorAll('.service-trigger');
            const subLists = document.querySelectorAll('.sub-list');
            const subCol = document.getElementById('sub-service-col');
            const subTitle = document.getElementById('sub-service-title');
            
            const subServiceTriggers = document.querySelectorAll('.sub-service-trigger');
            const subSubLists = document.querySelectorAll('.sub-sub-list');
            const subSubCol = document.getElementById('triple-sub-service-col');
            const subSubTitle = document.getElementById('triple-sub-service-title');

            serviceTriggers.forEach(trigger => {
                trigger.addEventListener('mouseenter', function () {
                    const targetId = this.getAttribute('data-target');
                    const categoryName = this.innerText.trim();

                    // Reset sub-sub levels
                    if (subSubCol) subSubCol.style.display = 'none';
                    subSubLists.forEach(l => l.style.display = 'none');
                    subServiceTriggers.forEach(t => t.classList.remove('active-service'));

                    // Show sub-level 2
                    subLists.forEach(list => list.style.display = 'none');
                    if (subCol) subCol.style.display = 'block';

                    const targetList = document.getElementById(targetId);
                    if (targetList) targetList.style.display = 'block';
                    if (subTitle) subTitle.innerText = categoryName;

                    serviceTriggers.forEach(t => t.classList.remove('active-service'));
                    this.classList.add('active-service');
                });
            });

            // Column 2 Hover Logic: Handle sub-sub levels (Fixed for Social Media)
            const allSubLinks = document.querySelectorAll('.sub-list li a');
            allSubLinks.forEach(link => {
                link.addEventListener('mouseenter', function () {
                    if (this.classList.contains('sub-service-trigger')) {
                        const targetId = this.getAttribute('data-target');
                        const serviceName = this.innerText.trim();

                        // Show sub-level 3
                        subSubLists.forEach(list => list.style.display = 'none');
                        if (subSubCol) subSubCol.style.display = 'block';

                        const targetList = document.getElementById(targetId);
                        if (targetList) targetList.style.display = 'block';
                        if (subSubTitle) subSubTitle.innerText = serviceName;

                        subServiceTriggers.forEach(t => t.classList.remove('active-service'));
                        this.classList.add('active-service');
                    } else {
                        // Hide sub-level 3 if hovering over a sibling that has no sub-sub services
                        if (subSubCol) subSubCol.style.display = 'none';
                        subSubLists.forEach(list => list.style.display = 'none');
                        subServiceTriggers.forEach(t => t.classList.remove('active-service'));
                    }
                });
            });

            // Reset dynamic columns when hovering over static columns (Industries, Locations)
            const staticCols = document.querySelectorAll('.mega-menu-col');
            if (staticCols.length >= 5) {
                const industriesCol = staticCols[3];
                const locationsCol = staticCols[4];

                [industriesCol, locationsCol].forEach(col => {
                    if (col) {
                        col.addEventListener('mouseenter', function () {
                            if (subCol) subCol.style.display = 'none';
                            if (subSubCol) subSubCol.style.display = 'none';
                            subLists.forEach(l => l.style.display = 'none');
                            subSubLists.forEach(l => l.style.display = 'none');
                            serviceTriggers.forEach(t => t.classList.remove('active-service'));
                            subServiceTriggers.forEach(t => t.classList.remove('active-service'));
                        });
                    }
                });
            }

            // Reset menu when leaving the entire mega menu
            const megaMenuArea = document.querySelector('.mega-menu-wrapper');
            if (megaMenuArea) {
                megaMenuArea.addEventListener('mouseleave', function () {
                    // Optional: You can choose to reset everything here if desired
                    // if (subCol) subCol.style.display = 'none';
                    // if (subSubCol) subSubCol.style.display = 'none';
                });
            }

            // Prevent mega menu from closing when clicking inside
            const megaMenu = document.querySelector('.mega-menu-wrapper');
            if (megaMenu) {
                megaMenu.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            }

            // Popup Form reCAPTCHA Validation
            const popupForm = document.getElementById("popupForm");
            if (popupForm) {
                popupForm.addEventListener("submit", function(e) {
                    var response = "";
                    try {
                        // Dynamically find the index of the reCAPTCHA within this form
                        var allWidgets = document.querySelectorAll('.g-recaptcha');
                        var popupWidget = popupForm.querySelector('.g-recaptcha');
                        var widgetIndex = Array.from(allWidgets).indexOf(popupWidget);
                        
                        if (widgetIndex !== -1) {
                            response = grecaptcha.getResponse(widgetIndex);
                        } else {
                            response = grecaptcha.getResponse(); // Fallback
                        }
                    } catch (err) {
                        response = grecaptcha.getResponse(); // Fallback
                    }

                    var errorDiv = document.getElementById("popup-captcha-error");
                    if (response.length === 0) {
                        e.preventDefault();
                        errorDiv.innerHTML = "Please verify that you are not a robot.";
                        return false;
                    }
                    errorDiv.innerHTML = "";
                });
            }
        });
    </script>