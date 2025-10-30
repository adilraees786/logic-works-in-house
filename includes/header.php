<?php $base_url = 'https://logicworks.ae/'; ?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKLQ746R" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--********************************
           Code Start From Here
    ******************************** -->

    <div id="popup" class="popup">
        <div class="popup-content popup-form" style="background-image: url(<?php echo $base_url; ?>assests/images/popup-background.jpg);
               width:100%; 
               max-width:700px; 
               height:80vh; 
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

                        <!-- Accordion Section 1 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Logo & Branding<i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>logo-design-services-dubai">
                                        Logo
                                        Design</a></li>
                                <li><a href="<?php echo $base_url; ?>real-estate-logo-design-dubai">

                                        Logo design Niche </a></li>
                                <li><a href="<?php echo $base_url; ?>logo-design-company">
                                        Logo Design
                                        Company</a></li>
                                <li><a href="<?php echo $base_url; ?>branding-services">
                                        Branding</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>branding-dubai">Branding
                                        Dubai
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>branding-consultancy">Branding
                                        Consultancy
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>seo-consultancy">Branding Dubai SEO
                                        cosultancy
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>website-designer">Branding Dubai Website
                                        Designer
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>B2B-marketing">Branding Dubai B2B
                                        Marketing
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>content-marketing">Branding Dubai Content
                                        Marketing
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>perfromance-marketing">Branding Dubai Perfromance
                                        Marketing
                                    </a></li>
                            </ul>
                        </div>

                        <!-- Accordion Section 2 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Web Design & Development <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>web-design-company">
                                        Web
                                        Design</a></li>
                                <li><a href="<?php echo $base_url; ?>web-design-solutions-in-dubai">
                                        Web Design Solutions in
                                        Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>web-development-dubai">
                                        Web
                                        Development Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>web-development-agency">
                                        Web
                                        Development</a></li>
                                <li><a href="<?php echo $base_url; ?>real-estate-web-development-company-dubai">Niche
                                        Design
                                        Web
                                        Development
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>digital-niche-design">Digital Niche
                                        Design
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>web-development-technology">Web
                                        Development
                                        Technology
                                    </a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 3 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Mobile App Development<i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>android-app-development-services">

                                        Android App Development Services</a></li>
                                <li><a href="<?php echo $base_url; ?>android-app-development">
                                        Android App Development</a></li>
                                <li><a href="<?php echo $base_url; ?>android-app-development-dubai">
                                        Android App development Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>app-development-services-dubai">
                                        App Development
                                        Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>app-development-technology"> App
                                        Development
                                        Technology</a></li>
                                <li><a href="<?php echo $base_url; ?>real-estate-app-development-company-dubai">
                                        App Development Niche Design
                                    </a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 4 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Digital Marketing <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>digital-marketing-consultancy">
                                        Digital Marketing Consultancy</a></li>
                                <li><a href="<?php echo $base_url; ?>digital-marketing-agency-dubai">

                                        Digital Marketing agency Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>digital-marketing-agency">
                                        Digital Marketing</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>perfromance-marketing">Perfromance Marketing
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>content-marketing">Content
                                        Marketing
                                    </a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 5 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Social Media & PPC <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>social-media-marketing-dubai">
                                        Social Media Marketing Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>facebook-instagram-marketing-agency">Facebook &
                                        Instagram
                                        Marketing Agency
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>facebook-instagram-marketing-dubai">

                                        Facebook Instagram Marketing Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>ppc-marketing-company">PPC
                                        Marketing Company
                                    </a></li>
                                <li><a href="<?php echo $base_url; ?>adword-marketing-company">
                                        Adword Marketing
                                        Company</a></li>
                                <li><a href="<?php echo $base_url; ?>google-adword-marketing-agency-dubai">Adword Niche
                                        Design
                                    </a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 6 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">SEO & Online Presence <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>seo-agency-dubai">

                                        Seo Agency Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>seo-company">
                                        SEO</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>real-estate-seo-agency-dubai">

                                        SEO niche Design</a></li>
                                <li><a href="<?php echo $base_url; ?>online-reputataion-management">
                                        Online Reputataion Management</a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 7 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Animation & Video <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>2d-animation">
                                        2D Animation</a></li>
                                <li><a href="<?php echo $base_url; ?>3d-animation">
                                        3D
                                        Animation</a></li>
                                <li><a href="<?php echo $base_url; ?>video-animation">
                                        Video Animation</a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 8 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">AI & Automation <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>ai-for-business-automation">

                                        Ai For Business Automation</a></li>
                                <li><a href="<?php echo $base_url; ?>ai-e-commerce">
                                        AI for E-commerce</a>
                                </li>
                                <li><a href="<?php echo $base_url; ?>ai-development">
                                        Ai Development</a></li>
                                <li><a href="<?php echo $base_url; ?>ai-chatbot">Ai
                                        Chatbot
                                    </a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 9 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Networking & Cloud <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>network-security">

                                        Networking Security</a></li>
                                <li><a href="<?php echo $base_url; ?>business-networking-solutions">Business
                                        Networking
                                        Solutions
                                    </a></li>
                                <li><a href="network-security">Network Security</a></li>
                                <li><a href="<?php echo $base_url; ?>iot-networking-services"> IoT Networking
                                        Services</a></li>
                                <li><a href="<?php echo $base_url; ?>cloud-networking">

                                        Cloud Networking</a></li>
                            </ul>
                        </div>
                        <!-- Accordion Section 10 -->
                        <div class="service-section">
                            <h3 class="accordion-toggle">Email & Lead Generation <i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="accordion-content">
                                <li><a href="<?php echo $base_url; ?>email-marketing-dubai">
                                        Email Marketing Dubai</a></li>
                                <li><a href="<?php echo $base_url; ?>email-marketing-agency">
                                        Email Marketing Agency</a></li>
                                <li><a href="<?php echo $base_url; ?>lead-generation">Lead
                                        Generation
                                    </a></li>
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
                                        <ul class="sub-menu"
                                            style="height: 500px; overflow-y: auto; overflow-x: hidden;">
                                            <section class="services-section-head">
                                                <!-- LEFT SIDE NAV -->
                                                <div class="nav flex-column nav-tabs-header" id="v-tabs" role="tablist">
                                                    <button class="nav-link-head active" id="tab1" data-bs-toggle="tab"
                                                        data-bs-target="#content1" type="button">
                                                        <img src="assests/images/sercices-icons/logo.png" alt=""> Logo &
                                                        Branding
                                                    </button>
                                                    <button class="nav-link-head" id="tab2" data-bs-toggle="tab"
                                                        data-bs-target="#content2" type="button">
                                                        <img src="assests/images/sercices-icons/web.png" alt=""> Web
                                                        Design & Development
                                                    </button>
                                                    <button class="nav-link-head" id="tab3" data-bs-toggle="tab"
                                                        data-bs-target="#content3" type="button">
                                                        <img src="assests/images/sercices-icons/mobile.png" alt="">
                                                        Mobile App Development
                                                    </button>
                                                    <button class="nav-link-head" id="tab4" data-bs-toggle="tab"
                                                        data-bs-target="#content4" type="button">
                                                        <img src="assests/images/sercices-icons/digital.png" alt="">
                                                        Digital Marketing
                                                    </button>
                                                    <button class="nav-link-head" id="tab5" data-bs-toggle="tab"
                                                        data-bs-target="#content5" type="button">
                                                        <img src="assests/images/sercices-icons/social.png" alt="">
                                                        Social Media & PPC
                                                    </button>
                                                    <button class="nav-link-head" id="tab6" data-bs-toggle="tab"
                                                        data-bs-target="#content6" type="button">
                                                        <img src="assests/images/sercices-icons/seo.png" alt=""> SEO &
                                                        Online Presence
                                                    </button>
                                                    <button class="nav-link-head" id="tab7" data-bs-toggle="tab"
                                                        data-bs-target="#content7" type="button">
                                                        <img src="assests/images/sercices-icons/animation.png" alt="">
                                                        Animation & Video
                                                    </button>
                                                    <button class="nav-link-head" id="tab8" data-bs-toggle="tab"
                                                        data-bs-target="#content8" type="button">
                                                        <img src="assests/images/sercices-icons/ai.png" alt=""> AI &
                                                        Automation
                                                    </button>
                                                    <button class="nav-link-head" id="tab9" data-bs-toggle="tab"
                                                        data-bs-target="#content9" type="button">
                                                        <img src="assests/images/sercices-icons/web.png" alt="">
                                                        Networking & Cloud
                                                    </button>
                                                    <button class="nav-link-head" id="tab10" data-bs-toggle="tab"
                                                        data-bs-target="#content10" type="button">
                                                        <img src="assests/images/sercices-icons/web.png" alt=""> Email &
                                                        Lead Generation
                                                    </button>
                                                </div>

                                                <!-- RIGHT SIDE CONTENT -->
                                                <div class="tab-content-service-right tab-content">
                                                    <div class="tab-pane-header fade show active" id="content1">
                                                        <h3>Logo & Branding</h3>
                                                        <ul>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>logo-design-services-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/logo-designs.png">
                                                                    Logo
                                                                    Design</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>real-estate-logo-design-dubai">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="logo niche design">
                                                                    Logo design Niche </a></li>
                                                            <li><a href="<?php echo $base_url; ?>logo-design-company"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/logo-designs.png">
                                                                    Logo Design
                                                                    Company</a></li>
                                                            <li><a href="<?php echo $base_url; ?>branding-services"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/5.png">
                                                                    Branding</a></li>
                                                            <li><a href="<?php echo $base_url; ?>branding-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Branding
                                                                    Dubai
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>branding-consultancy"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Branding
                                                                    Consultancy
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>seo-consultancy"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Branding Dubai SEO
                                                                    cosultancy
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>website-designer"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Branding Dubai Website
                                                                    Designer
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>B2B-marketing"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Branding Dubai B2B
                                                                    Marketing
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>content-marketing"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Branding Dubai Content
                                                                    Marketing
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>perfromance-marketing"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Branding Dubai Perfromance
                                                                    Marketing
                                                                </a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content2">
                                                        <h3>Web Design & Development</h3>
                                                        <ul>
                                                            <li><a href="<?php echo $base_url; ?>web-design-company"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/3.png">
                                                                    Web
                                                                    Design</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>web-design-solutions-in-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/3.png">
                                                                    Web Design Solutions in
                                                                    Dubai</a></li>
                                                            <li><a href="<?php echo $base_url; ?>web-development-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/web-design-icon.png">
                                                                    Web
                                                                    Development Dubai</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>web-development-agency"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/web-design-icon.png">
                                                                    Web
                                                                    Development</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>real-estate-web-development-company-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="niche-design-web-development">Niche Design
                                                                    Web
                                                                    Development
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>digital-niche-design"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="niche-design-web-development">Digital Niche
                                                                    Design
                                                                </a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>web-development-technology"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="niche-design-web-development">Web
                                                                    Development
                                                                    Technology
                                                                </a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content3">
                                                        <h3>Mobile App Development</h3>
                                                        <ul>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>android-app-development-services">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="Android App Development Services">
                                                                    Android App Development Services</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>android-app-development"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="Android App Development Services">
                                                                    Android App Development</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>android-app-development-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Dubai.png"
                                                                        class="custom-header-icon"
                                                                        alt="Android App Development Dubai">
                                                                    Android App development Dubai</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>app-development-services-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/6.png">
                                                                    App Development
                                                                    Dubai</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>app-development-technology"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt=" App Development Technology"> App
                                                                    Development
                                                                    Technology</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>real-estate-app-development-company-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="app-development-niche-design">
                                                                    App Development Niche Design
                                                                </a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content4">
                                                        <h3>Digital Marketing</h3>
                                                        <ul>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>digital-marketing-consultancy"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/digital-marketing-consultancy.png">
                                                                    Digital Marketing Consultancy</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>digital-marketing-agency-dubai">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="seo agency dubai">
                                                                    Digital Marketing agency Dubai</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>digital-marketing-agency"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/8.png">
                                                                    Digital Marketing</a>
                                                            </li>
                                                            <li><a href="<?php echo $base_url; ?>perfromance-marketing"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Perfromance Marketing
                                                                </a></li>
                                                            <li><a href="<?php echo $base_url; ?>content-marketing"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Content
                                                                    Marketing
                                                                </a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content5">
                                                        <h3>Social Media & PPC</h3>
                                                        <ul>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>social-media-marketing-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/social-media-marketing.png">
                                                                    Social Media Marketing Dubai</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>facebook-instagram-marketing-agency"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="facebook-&-insta">Facebook & Instagram
                                                                    Marketing Agency
                                                                </a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>facebook-instagram-marketing-dubai">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="Android App Development Services">
                                                                    Facebook Instagram Marketing Dubai</a></li>
                                                            <li><a href="<?php echo $base_url; ?>ppc-marketing-company"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">PPC
                                                                    Marketing Company
                                                                </a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>adword-marketing-company"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/3.png">
                                                                    Adword Marketing
                                                                    Company</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>google-adword-marketing-agency-dubai"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="app-development-niche-design">Adword Niche
                                                                    Design
                                                                </a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content6">
                                                        <h3>SEO & Online Presence</h3>
                                                        <ul>
                                                            <li><a href="<?php echo $base_url; ?>seo-agency-dubai">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="seo agency dubai">
                                                                    Seo Agency Dubai</a></li>
                                                            <li><a href="<?php echo $base_url; ?>seo-company"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/seo.png">
                                                                    SEO</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>real-estate-seo-agency-dubai">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="seo niche design">
                                                                    SEO niche Design</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>online-reputataion-management"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Dubai.png"
                                                                        class="custom-header-icon"
                                                                        alt="Online Reputataion Management">
                                                                    Online Reputataion Management</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content7">
                                                        <h3>Animation & Video</h3>
                                                        <ul>
                                                            <li><a href="<?php echo $base_url; ?>2d-animation"> <img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/2DAnimation.png"
                                                                        class="custom-header-icon" alt="2D Animation">
                                                                    2D Animation</a></li>
                                                            <li><a href="<?php echo $base_url; ?>3d-animation"> <img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/3D Animation.png"
                                                                        class="custom-header-icon" alt="3D Animation">
                                                                    3D
                                                                    Animation</a></li>
                                                            <li><a href="<?php echo $base_url; ?>video-animation"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/7.png">
                                                                    Video Animation</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content8">
                                                        <h3>AI & Automation</h3>
                                                        <ul>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>ai-for-business-automation">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="logo niche design">
                                                                    Ai For Business Automation</a></li>
                                                            <li><a href="<?php echo $base_url; ?>ai-e-commerce"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="AI for E-commerce"> AI
                                                                    for E-commerce</a></li>
                                                            <li><a href="<?php echo $base_url; ?>ai-development"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/Ai Development.png"
                                                                        class="custom-header-icon" alt="Ai Development">
                                                                    Ai Development</a></li>
                                                            <li><a href="<?php echo $base_url; ?>ai-chatbot"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="Branding Dubai">Ai
                                                                    Chatbot
                                                                </a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content9">
                                                        <h3>Networking & Cloud</h3>
                                                        <ul>
                                                            <li><a href="<?php echo $base_url; ?>network-security">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/net.png"
                                                                        class="custom-header-icon" alt="Network">
                                                                    Networking Security</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>business-networking-solutions"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="app-development-niche-design">Business
                                                                    Networking
                                                                    Solutions
                                                                </a></li>
                                                            <li><a href="network-security">Network Security</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>iot-networking-services"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/IoT Networking Services.png"
                                                                        class="custom-header-icon"
                                                                        alt=" IoT Networking Services"> IoT Networking
                                                                    Services</a></li>
                                                            <li><a href="<?php echo $base_url; ?>cloud-networking">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="logo niche design">
                                                                    Cloud Networking</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-pane-header fade" id="content10">
                                                        <h3>Email & Lead Generation</h3>
                                                        <ul>
                                                            <li><a href="<?php echo $base_url; ?>email-marketing-dubai">
                                                                    <img src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Services.png"
                                                                        class="custom-header-icon"
                                                                        alt="logo niche design">
                                                                    Email Marketing Dubai</a></li>
                                                            <li><a
                                                                    href="<?php echo $base_url; ?>email-marketing-agency"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/Android App Development Dubai.png"
                                                                        class="custom-header-icon"
                                                                        alt="Email Marketing Agency">
                                                                    Email Marketing Agency</a></li>
                                                            <li><a href="<?php echo $base_url; ?>lead-generation"><img
                                                                        src="<?php echo $base_url; ?>assests/images/menu/icon/AI for E-commerce.png"
                                                                        class="custom-header-icon"
                                                                        alt="app-development-niche-design">Lead
                                                                    Generation
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                        </ul>
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
        .services-section-head {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            padding: 40px;
            background: #0b0b0b;
            color: #fff;
            align-items: flex-start;
        }


        .nav-tabs-header {
            display: flex;
            flex-direction: column;
            gap: 15px;
            flex: 0 0 260px;
        }

        .nav-tabs-header .nav-link-head {
            background: #141414;
            border: none;
            color: #fff;
            text-align: left;
            padding: 15px 15px 15px 65px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
            transition: all 0.3s ease;
            overflow: hidden;
        }


        .nav-tabs-header .nav-link-head::before {
            content: "";
            width: 40px;
            height: 40px;
            background: #1B1B1B;
            border-radius: 8px;
            position: absolute;
            left: 15px;
            transition: all 0.3s ease;
        }


        .nav-tabs-header .nav-link-head img {
            width: 20px;
            height: 20px;
            position: absolute;
            left: 25px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            filter: brightness(0) invert(1) contrast(1.2);

            transition: all 0.3s ease;
        }

        /* Hover & Active States */

        .nav-tabs-header .nav-link-head.active::before {
            background: #B454C7;
        }

        .nav-tabs-header.nav-link-head:hover {
            background: #1c1c1c;
        }

        .nav-tabs-header .nav-link-head.active {
            background: #B454C7;
            color: #000;
        }

        /* Right content area */
        .tab-content-service-right {
            flex: 1;
            background: #141414;
            padding: 40px;
            border-radius: 12px;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .tab-pane-header {
            width: 100%;
            display: none;

        }

        .tab-pane-header h3 {
            font-weight: 600;
            margin-bottom: 20px;
        }

        .tab-pane-header ul {
            list-style: none;
            padding: 0;
        }

        .tab-pane-header ul li {
            margin-bottom: 10px;
        }

        .tab-pane-header ul li a {
            color: #ccc;
            text-decoration: none;
            transition: 0.3s;
        }

        .tab-pane-headerul li a:hover {
            color: #fff;
            text-decoration: underline;
        }

        @media (max-width: 991px) {
            .services-section-head {
                flex-direction: column;
            }

            .tab-content-service-right {
                margin-left: 0;
                margin-top: 30px;
            }

            .nav-tabs-header .nav-link-head {
                padding: 12px 12px 12px 55px;
            }

            .nav-tabs-header .nav-link-head::before {
                width: 35px;
                height: 35px;
            }

            .nav-tabs-header .nav-link-head img {
                left: 22px;
                width: 18px;
                height: 18px;
            }
        }




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

        .accordion-toggle.active {
            background: #B454C7;
        }

        .accordion-toggle i {
            transition: transform 0.3s ease;
        }

        .accordion-toggle.active i {
            transform: rotate(180deg);
        }

        @media (max-width: 500px) {
            .popup-form p {
                font-size: 30px;
                line-height: 1;
            }

            .popup-form p span {
                font-size: 50px;
            }
        }

        @media (max-width: 1024px) {
            header .header-button a.btn.bg-theme.text-title {
                display: none !important;
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
        });
    </script>