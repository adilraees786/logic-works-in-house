<?php
$meta_title = "Mobile App Development Company in Ras Al Khaimah";
$meta_description = "Need a mobile app development company in Ras Al Khaimah? Get Android, iOS, web and cross-platform app solutions built around your business goals.";
$keyword = 'Mobile App Development Company in Ras Al Khaimah';
$canonical = "https://logicworks.ae/mobile-app-development-company-ras-al-khaimah";

include("includes/head.php");
include("includes/header.php");
?>
<link rel="stylesheet" href="./assests/css/mobile-app-abu-dhabi.css?v=12">

<main class="lw-abu-dhabi">

  <!-- HERO -->
  <section id="ad-top" class="ad-hero">
    <div class="ad-hero-overlay"></div>
    <div class="ad-glow is-hero-a"></div>
    <div class="ad-glow is-hero-b"></div>

    <div class="ad-wrap ad-hero-grid">
      <div class="ad-reveal is-visible">
        <p class="ad-eyebrow">Your Idea. Our Expertise.</p>
        <h1>Mobile App<br>Development Company<br><span class="ad-grad-text">in Ras Al Khaimah</span></h1>
        <p class="ad-hero-lead">
          Looking for a Mobile App Development Company in Ras Al Khaimah that understands what your users and business actually need? Logic Works creates Android, iOS, web and cross-platform applications for startups, growing companies and established businesses. We turn ideas into easy-to-use digital products that support customer engagement, simplify everyday tasks and give your business room to grow.
        </p>
        <ul class="ad-hero-list">
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Android &amp; iOS Applications
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Arabic &amp; English Experiences
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Design, Development &amp; Launch
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Ongoing App Support
          </li>
        </ul>
        <div class="ad-hero-ctas">
          <a href="#ad-services" class="ad-btn-grad">
            Explore App Services
            <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 6l6 6-6 6M5 12h14"/></svg>
          </a>
          <a href="https://wa.me/971529502258" target="_blank" class="ad-btn-outline">
            <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.75 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.75 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM21 12c0 4.556-4.03 8.25-9 8.25a9.76 9.76 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
            Let's Talk
          </a>
        </div>
      </div>

      <div id="ad-quote" class="ad-quote ad-quote-col ad-reveal is-visible">
        <h2>Get a quote.<br>Start something great.</h2>
        <p class="ad-quote-sub">Your idea, a clear plan, and no obligation.</p>
        <?php if (isset($_GET['captcha'])): ?>
          <p class="ad-form-error is-show">
            <?php
              if ($_GET['captcha'] == 'empty') echo "Please verify that you are not a robot.";
              if ($_GET['captcha'] == 'failed') echo "Captcha verification failed. Please try again.";
            ?>
          </p>
        <?php endif; ?>
        <form id="adQuoteForm" class="ad-form" action="send_abu_dhabi_quote.php" method="POST">
          <div>
            <label class="ad-label" for="adFName">Your name <span class="ad-req">*</span></label>
            <input class="ad-field" id="adFName" name="name" type="text" placeholder="Full name" autocomplete="name" required>
          </div>
          <div>
            <label class="ad-label" for="adFEmail">Email address <span class="ad-req">*</span></label>
            <input class="ad-field" id="adFEmail" name="email" type="email" placeholder="you@company.com" autocomplete="email" required>
          </div>
          <div class="ad-form-row">
            <div>
              <label class="ad-label" for="adFPhone">Phone <span class="ad-opt">(optional)</span></label>
              <input class="ad-field" id="adFPhone" name="phone" type="tel" placeholder="+971" autocomplete="tel">
            </div>
            <div>
              <label class="ad-label" for="adFType">App type</label>
              <div class="ad-select-wrap">
                <select class="ad-field" id="adFType" name="app_type">
                  <option value="Help me choose">Help me choose</option>
                  <option value="Android App">Android App</option>
                  <option value="iOS App">iOS App</option>
                  <option value="Android + iOS App">Android + iOS App</option>
                  <option value="Web Application">Web Application</option>
                  <option value="UI/UX Design Only">UI/UX Design Only</option>
                </select>
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
              </div>
            </div>
          </div>
          <div>
            <label class="ad-label" for="adFIdea">Tell us about your idea <span class="ad-req">*</span></label>
            <textarea class="ad-field" id="adFIdea" name="message" placeholder="What would you like to build?" required></textarea>
          </div>
          <label class="ad-consent">
            <input type="checkbox" id="adFConsent" name="consent" value="1" class="ad-check-input" checked>
            <span>You may contact me about my project.</span>
          </label>
          <div class="ad-captcha-wrap" id="ad-captcha-container" style="<?php echo isset($_GET['captcha']) ? '' : 'display: none;'; ?>">
            <div class="g-recaptcha" data-sitekey="6LfxcVgsAAAAAECVQSaraQGJ25sQ1swHxBqiU6mK"></div>
            <div id="ad-captcha-error" class="ad-captcha-error"></div>
          </div>
          <p id="adFormError" class="ad-form-error"></p>
          <button type="submit" class="ad-btn-grad ad-submit">
            <span>Get My Free Quote</span>
            <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
          </button>
          <p class="ad-wa-note">
            <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z"/></svg>
            We will review your brief and get back to you shortly.
          </p>
        </form>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="ad-about" class="ad-section">
    <div class="ad-wrap ad-two-col is-about">
      <div class="ad-reveal">
        <p class="ad-eyebrow">Built for your business</p>
        <h2>Apps Designed Around How Your <span class="ad-grad-text">Business Works</span></h2>
        <div class="ad-pink-line"></div>
        <div class="ad-body">
          <p>A useful app should solve a clear business or customer problem. We start by understanding your users, daily processes and goals before recommending features or a platform.</p>
          <p>At Logic Works, we create applications for businesses across retail, hospitality, real estate, eCommerce, professional services and other growing sectors. Your app can support online orders, appointments, customer accounts, delivery tracking, payments, loyalty programs or internal operations.</p>
          <p>Our approach to Mobile App Development in Ras Al Khaimah also considers the needs of UAE users. We can plan Arabic and English interfaces, AED-ready experiences and simple navigation from the beginning.</p>
          <p>You get an application designed around your business instead of adjusting your business to fit a ready-made solution.</p>
        </div>
        <a href="https://wa.me/971529502258" target="_blank" class="ad-btn-grad ad-mt-btn">
          Get a Free App Consultation
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
      <div class="ad-visual ad-reveal">
        <div class="ad-glow is-center"></div>
        <img class="ad-about-img" src="./assests/images/cities/abu-dhabi/image-1.webp"
          alt="Mobile app development Ras Al Khaimah">
      </div>
    </div>
  </section>



  <!-- SERVICES INTRO -->
  <section id="ad-services" class="ad-section is-intro">
    <div class="ad-wrap">
      <div class="ad-center ad-reveal">
        <p class="ad-eyebrow is-center">Mobile App Development Services</p>
        <h2>The Right Solution for <span class="ad-grad-text">Every Platform</span></h2>
        <p class="ad-muted-p">Our app development services in Ras Al Khaimah cover planning, interface design, development, testing and launch.</p>
        <p class="ad-muted-p">Whether you need a customer-facing mobile app, an internal business tool or a solution that works across several devices, we help you choose an approach that matches your audience, budget and long-term plans.</p>
      </div>
    </div>
  </section>

  <!-- ANDROID -->
  <section class="ad-section is-compact-top">
    <div class="ad-wrap ad-two-col">
      <div class="ad-visual ad-reveal ad-order-2 ad-lg-order-1">
        <div class="ad-glow is-green"></div>
        <img class="ad-service-img" src="./assests/images/cities/abu-dhabi/image-2.webp"
          alt="Android app development Ras Al Khaimah">
      </div>
      <div class="ad-reveal ad-order-1 ad-lg-order-2">
        <p class="ad-eyebrow">
          <svg class="ad-ico-lg" viewBox="0 0 24 24" fill="#3ddc84"><path d="M17.6 9.48l1.84-3.18a.38.38 0 00-.66-.38l-1.86 3.22a11.62 11.62 0 00-9.84 0L5.22 5.92a.38.38 0 00-.66.38L6.4 9.48A10.78 10.78 0 001 18h22a10.78 10.78 0 00-5.4-8.52zM7 15.25a1.25 1.25 0 111.25-1.25A1.25 1.25 0 017 15.25zm10 0a1.25 1.25 0 111.25-1.25A1.25 1.25 0 0117 15.25z"/></svg>
          Android Development
        </p>
        <h2>Android Apps That Make Everyday Tasks <span class="ad-grad-text">Easier</span></h2>
        <p class="ad-body is-wide">Android applications can help businesses make shopping, bookings, deliveries and customer services available directly from a mobile device.</p>
        <p class="ad-body is-wide">We build Android apps with clear user journeys and practical features so customers can complete important tasks without unnecessary steps.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Custom Android Applications <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We create applications with features such as secure accounts, product catalogues, bookings, payments, notifications, loyalty tools, maps and business dashboards based on your requirements.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Design and Device Testing <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Our team tests layouts and important actions across different screen sizes and Android devices to create a consistent user experience.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Google Play Launch Support <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We help prepare store information, testing versions, screenshots and other requirements before submitting your application to Google Play.</p></div>
          </div>
        </div>
        <a href="https://wa.me/971529502258" target="_blank" data-plan="Android App" class="ad-quote-link ad-btn-grad ad-mt-btn">
          Get an Android App Quote
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- iOS -->
  <section class="ad-section ad-section-border">
    <div class="ad-wrap ad-two-col">
      <div class="ad-reveal">
        <p class="ad-eyebrow">
          <svg class="ad-ico-lg" viewBox="0 0 24 24" fill="#e8e2f2"><path d="M16.36 12.94c.03 2.58 2.27 3.44 2.3 3.45-.02.06-.36 1.23-1.19 2.44-.72 1.05-1.46 2.09-2.63 2.11-1.15.02-1.52-.68-2.83-.68-1.32 0-1.73.66-2.81.7-1.13.04-1.99-1.13-2.71-2.18C4.95 16.2 3.8 12.5 5.36 9.94c.77-1.27 1.93-2.01 3.04-2.01 1.13 0 1.85.68 2.79.68.87 0 1.4-.68 2.65-.68 1.06 0 1.85.49 2.47 1.13l-.56.33 1.71-.13zM14.16 4.06c.63-.76 1.05-1.82.93-2.88-.9.04-1.99.6-2.64 1.36-.58.67-1.09 1.74-.95 2.77 1.01.08 2.03-.51 2.66-1.25z"/></svg>
          iOS Development
        </p>
        <h2>iOS Experiences Built Around <span class="ad-grad-text">Your Customers</span></h2>
        <div class="ad-pink-line"></div>
        <p class="ad-body is-wide">A good iPhone or iPad application should feel natural from the first tap. We combine simple navigation with useful functionality to help customers find information and complete actions easily.</p>
        <p class="ad-body is-wide">Businesses comparing an app development agency for iOS should consider usability, security, integrations and ongoing support alongside visual design.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Native iPhone and iPad Apps <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We create iOS applications for eCommerce, bookings, customer accounts, memberships, service businesses and internal operations.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Payments and Business Integrations <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Your application can connect with payment solutions, maps, calendars, notifications, booking tools and other systems your business already uses.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">App Store Launch Support <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We assist with testing, App Store preparation and submission so you have a clear route from the final build to release.</p></div>
          </div>
        </div>
        <a href="https://wa.me/971529502258" target="_blank" data-plan="iOS App" class="ad-quote-link ad-btn-grad ad-mt-btn">
          Get an iOS App Quote
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
      <div class="ad-visual ad-reveal">
        <div class="ad-glow is-pink"></div>
        <img class="ad-service-img" src="./assests/images/cities/abu-dhabi/image-3.webp"
          alt="iOS app development Ras Al Khaimah">
      </div>
    </div>
  </section>

  <!-- WEB -->
  <section class="ad-section ad-section-border">
    <div class="ad-wrap ad-two-col">
      <div class="ad-visual ad-reveal ad-order-2 ad-lg-order-1">
        <div class="ad-glow is-purple"></div>
        <img class="ad-service-img" src="./assests/images/cities/abu-dhabi/image-4.webp"
          alt="Web and cross-platform app development Ras Al Khaimah">
      </div>
      <div class="ad-reveal ad-order-1 ad-lg-order-2">
        <p class="ad-eyebrow">
          <span class="ad-web-icon">
            <svg fill="none" stroke="#fff" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 0c2.5-2.5 3.5-5.5 3.5-9S14.5 5.5 12 3c-2.5 2.5-3.5 5.5-3.5 9s1 6.5 3.5 9zM3.5 9h17M3.5 15h17"/></svg>
          </span>
          Web &amp; Cross-Platform
        </p>
        <h2>One Experience Across Web and <span class="ad-grad-text">Mobile</span></h2>
        <div class="ad-pink-line"></div>
        <p class="ad-body is-wide">Not every business needs separate native applications. Some projects work better as web apps or cross-platform solutions that serve users across several devices.</p>
        <p class="ad-body is-wide">We help you choose an option based on how your customers will actually use the service.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Responsive Web Applications <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We develop portals, booking systems, customer dashboards and online tools that work smoothly across phones, tablets and desktop browsers.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Cross-Platform Mobile Apps <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Cross-platform development can provide a consistent experience across Android and iOS while making future updates easier to manage.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Connected Business Systems <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Our application development services can connect your app with payments, CRM platforms, inventory tools, messaging, delivery systems and other services that support daily operations.</p></div>
          </div>
        </div>
        <a href="#ad-quote" data-plan="Web Application" class="ad-quote-link ad-btn-grad ad-mt-btn">
          Get a Web App Quote
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- PURPLE CTA -->
  <section class="ad-cta-banner">
    <div class="ad-glow is-cta"></div>
    <div class="ad-wrap ad-cta-inner">
      <div class="ad-reveal">
        <h3>Your Idea Needs the Right Starting Point</h3>
        <p>Not sure whether you need Android, iOS, web or a cross-platform solution?</p>
        <p>Tell us what you want users to achieve. We can help define the essential features and choose a practical way forward.</p>
      </div>
      <div class="ad-cta-actions ad-reveal">
        <a href="#ad-quote" class="ad-btn-white">
          Talk to an App Expert
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
        <a href="tel:+971529502258" class="ad-btn-ghost">
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
          Call Our Team
        </a>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="ad-process" class="ad-section">
    <div class="ad-wrap">
      <div class="ad-center ad-reveal">
        <p class="ad-eyebrow is-center">Clear steps. No guesswork.</p>
        <h2>From Concept to a Ready-to-Use <span class="ad-grad-text">App</span></h2>
        <p class="ad-muted-p">We keep the development process clear and focused so you know what happens at every stage.</p>
      </div>
      <div class="ad-steps">
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>01</span><span class="ad-step-line"></span></div>
          <h4>Discover</h4>
          <p>We discuss your goals, audience, required features and priorities before creating a clear project scope.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>02</span><span class="ad-step-line"></span></div>
          <h4>Design</h4>
          <p>We plan user journeys and create interface screens so you can review how the app will work before development starts.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>03</span><span class="ad-step-line"></span></div>
          <h4>Develop</h4>
          <p>Our developers build the application in stages and test important functions, performance and usability throughout the project.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>04</span><span class="ad-step-line"></span></div>
          <h4>Launch</h4>
          <p>We prepare your application for release and help plan updates based on feedback and future business requirements.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="ad-faqs" class="ad-section is-faq">
    <div class="ad-wrap">
      <div class="ad-center ad-reveal">
        <p class="ad-eyebrow is-center">FAQ's</p>
        <h2>Your questions. <span class="ad-grad-text">Clear answers.</span></h2>
      </div>
      <div class="ad-faq-grid ad-reveal">
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">How much does app development cost in Ras Al Khaimah? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>The cost depends on the platforms, features, design, integrations and overall complexity. We review your requirements first so the quotation reflects what your project actually needs.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">How long does it take to develop a mobile app? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>A focused application may take several weeks, while larger platforms with custom integrations and multiple user types can take several months.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">Can the app support Arabic and English? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Yes. We can build English and Arabic experiences, including right-to-left layouts where required, so your application can serve a wider UAE audience.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">Do you provide support after the app goes live? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Yes. Logic Works can assist with maintenance, updates, performance improvements and additional features as your business and user needs develop.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="ad-final-cta">
    <div class="ad-wrap ad-final-inner">
      <div class="ad-reveal">
        <h3>Ready to Bring Your App Idea to Life?</h3>
        <p>Whether you want to improve customer service, launch a new digital product or make everyday operations easier, the right application can create a better way for people to interact with your business.</p>
        <p>Share your idea with our team and take the next step toward building an application for your business in Ras Al Khaimah.</p>
      </div>
      <a href="#ad-quote" class="ad-btn-grad ad-reveal">
        Get Your Free App Quote
        <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
      </a>
    </div>
  </section>

  <div id="adToast" class="ad-toast" aria-live="polite">
    <span class="ad-toast-icon">
      <svg fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
    </span>
    <div>
      <strong data-toast-title>Brief ready!</strong>
      <span data-toast-msg>Opening WhatsApp to send your quote request…</span>
    </div>
  </div>

</main>

<script src="./assests/js/mobile-app-abu-dhabi.js?v=3"></script>
<?php
include("includes/footer.php");
?>
