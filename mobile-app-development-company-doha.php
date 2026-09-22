<?php
$meta_title = "Mobile App Development Company in Doha";
$meta_description = "Logic Works builds custom mobile applications for Doha businesses, including Android, iOS, and cross-platform solutions designed for Qatar’s growing digital market.";
$keyword = 'Mobile App Development Company in Doha';
$canonical = "https://logicworks.ae/mobile-app-development-company-doha";

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
        <h1>Mobile App<br>Development Company<br><span class="ad-grad-text">in Doha</span></h1>
        <p class="ad-hero-lead">
          Doha’s rapidly growing business landscape, from West Bay’s corporate hub to Lusail’s smart city developments, is creating new opportunities for businesses to deliver better digital experiences. As a Mobile App Development Company in Doha, Logic Works builds custom Android, iOS, and cross-platform applications that help companies improve customer engagement and streamline operations.
        </p>
        <ul class="ad-hero-list">
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Custom Mobile Applications
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Android &amp; iOS Solutions
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Business-Focused Technology
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Design, Development &amp; Support
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
              <input class="ad-field" id="adFPhone" name="phone" type="tel" placeholder="+974" autocomplete="tel">
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
        <h2>Building Digital Experiences for Qatar’s <span class="ad-grad-text">Growing Businesses</span></h2>
        <div class="ad-pink-line"></div>
        <div class="ad-body">
          <p>Doha has become a center for innovation, tourism, real estate, finance, and modern services. Businesses across areas such as West Bay, Lusail City, The Pearl-Qatar, and Msheireb are adopting digital solutions to provide faster, more convenient experiences for customers.</p>
          <p>At Logic Works, we create mobile applications that help businesses improve the way they connect with users. Whether you operate a hospitality brand, real estate company, retail business, healthcare service, or corporate organization, we develop solutions that match your operational needs.</p>
          <p>Our applications can support hotel and reservation platforms, property solutions, online shopping experiences, customer portals, service booking systems, and internal business tools.</p>
          <p>By combining strategic planning, intuitive UI/UX design, and modern technology, we help businesses create digital products that are practical, scalable, and ready for future growth.</p>
        </div>
        <a href="https://wa.me/971529502258" target="_blank" class="ad-btn-grad ad-mt-btn">
          Get a Free App Consultation
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
      <div class="ad-visual ad-reveal">
        <div class="ad-glow is-center"></div>
        <img class="ad-about-img" src="./assests/images/cities/abu-dhabi/image-1.webp"
          alt="Mobile app development Doha">
      </div>
    </div>
  </section>



  <!-- SERVICES INTRO -->
  <section id="ad-services" class="ad-section is-intro">
    <div class="ad-wrap">
      <div class="ad-center ad-reveal">
        <p class="ad-eyebrow is-center">Mobile App Development Services</p>
        <h2>Mobile App Development Services <span class="ad-grad-text">in Doha</span></h2>
        <p class="ad-muted-p">Every business requires a different digital strategy. Our mobile app development solutions cover everything from initial planning and design to development, testing, launch, and ongoing improvements.</p>
        <p class="ad-muted-p">We help businesses choose the right platform and features based on their customers, industry, and long-term goals.</p>
        <p class="ad-muted-p">Whether you need a customer engagement app, hospitality solution, eCommerce platform, or enterprise application, our team creates technology that supports your business objectives.</p>
      </div>
    </div>
  </section>

  <!-- ANDROID -->
  <section class="ad-section is-compact-top">
    <div class="ad-wrap ad-two-col">
      <div class="ad-visual ad-reveal ad-order-2 ad-lg-order-1">
        <div class="ad-glow is-green"></div>
        <img class="ad-service-img" src="./assests/images/cities/abu-dhabi/image-2.webp"
          alt="Android app development Doha">
      </div>
      <div class="ad-reveal ad-order-1 ad-lg-order-2">
        <p class="ad-eyebrow">
          <svg class="ad-ico-lg" viewBox="0 0 24 24" fill="#3ddc84"><path d="M17.6 9.48l1.84-3.18a.38.38 0 00-.66-.38l-1.86 3.22a11.62 11.62 0 00-9.84 0L5.22 5.92a.38.38 0 00-.66.38L6.4 9.48A10.78 10.78 0 001 18h22a10.78 10.78 0 00-5.4-8.52zM7 15.25a1.25 1.25 0 111.25-1.25A1.25 1.25 0 017 15.25zm10 0a1.25 1.25 0 111.25-1.25A1.25 1.25 0 0117 15.25z"/></svg>
          Android Development
        </p>
        <h2>Android Applications Designed for <span class="ad-grad-text">Qatar’s Mobile Users</span></h2>
        <p class="ad-body is-wide">Android applications provide businesses with a powerful way to reach customers across different devices and locations.</p>
        <p class="ad-body is-wide">Our development approach focuses on creating applications that are easy to navigate, reliable, and aligned with real customer needs.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Custom Android Applications <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We develop Android apps for businesses across Doha, including retail ordering platforms, hotel service applications, delivery solutions, booking systems, and customer management tools.</p><p>Features can include secure accounts, payment integration, location services, notifications, product catalogues, and customized dashboards.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">User Experience and Device Testing <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>A successful application needs consistent performance. We test important features, layouts, and user journeys to create a smooth experience across supported devices.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Google Play Launch Support <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We assist businesses with testing, store preparation, and launch requirements to help bring applications successfully to users.</p></div>
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
        <h2>iOS Applications for Premium <span class="ad-grad-text">Customer Experiences</span></h2>
        <div class="ad-pink-line"></div>
        <p class="ad-body is-wide">Businesses serving professional and premium audiences need applications that feel simple, secure, and reliable.</p>
        <p class="ad-body is-wide">Our iOS solutions help companies create polished digital experiences for customers using iPhones and iPads.</p>
        <p class="ad-body is-wide">For businesses searching for an experienced development partner in Qatar, we focus on usability, performance, security, and long-term scalability.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">iPhone and iPad Solutions <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We create iOS applications for hospitality services, retail brands, healthcare providers, real estate companies, and professional organizations.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Smart Integrations <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Applications can connect with payment gateways, booking systems, maps, notifications, APIs, and other business tools.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">App Store Preparation <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We support testing, final adjustments, and submission requirements to help businesses move smoothly toward launch.</p></div>
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
          alt="iOS app development Doha">
      </div>
    </div>
  </section>

  <!-- WEB -->
  <section class="ad-section ad-section-border">
    <div class="ad-wrap ad-two-col">
      <div class="ad-visual ad-reveal ad-order-2 ad-lg-order-1">
        <div class="ad-glow is-purple"></div>
        <img class="ad-service-img" src="./assests/images/cities/abu-dhabi/image-4.webp"
          alt="Web and cross-platform app development Doha">
      </div>
      <div class="ad-reveal ad-order-1 ad-lg-order-2">
        <p class="ad-eyebrow">
          <span class="ad-web-icon">
            <svg fill="none" stroke="#fff" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 0c2.5-2.5 3.5-5.5 3.5-9S14.5 5.5 12 3c-2.5 2.5-3.5 5.5-3.5 9s1 6.5 3.5 9zM3.5 9h17M3.5 15h17"/></svg>
          </span>
          Web &amp; Cross-Platform
        </p>
        <h2>Flexible Digital Solutions Across <span class="ad-grad-text">Web and Mobile</span></h2>
        <div class="ad-pink-line"></div>
        <p class="ad-body is-wide">Modern customers expect businesses to provide connected experiences across multiple platforms.</p>
        <p class="ad-body is-wide">We develop responsive web applications and cross-platform solutions that allow businesses to serve users through mobile devices, tablets, and desktop platforms.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Responsive Web Applications <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We build customer portals, booking systems, dashboards, and online services designed for smooth performance across devices.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Cross-Platform Applications <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Cross-platform development helps businesses provide consistent Android and iOS experiences while maintaining flexibility for future updates.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Connected Business Platforms <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Our application solutions can integrate with CRM systems, payment platforms, inventory tools, APIs, and other technologies that improve business efficiency.</p></div>
          </div>
        </div>
        <a href="#ad-quote" data-plan="Web Application" class="ad-quote-link ad-btn-grad ad-mt-btn">
          Explore Your Options
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
        <h3>Turn your business idea into a powerful app experience.</h3>
        <p>We help Qatar businesses create applications that improve customer connections, simplify operations, and support long-term growth.</p>
      </div>
      <div class="ad-cta-actions ad-reveal">
        <a href="#ad-quote" class="ad-btn-white">
          Discuss Your App Idea
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
        <h2>A Clear Journey From Concept to <span class="ad-grad-text">Successful Launch</span></h2>
        <p class="ad-muted-p">Every successful application starts with a structured plan. Our process helps businesses move from an initial idea to a reliable digital product.</p>
      </div>
      <div class="ad-steps">
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>01</span><span class="ad-step-line"></span></div>
          <h4>Strategy</h4>
          <p>We understand your goals, users, business requirements, and technical needs before defining the right direction.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>02</span><span class="ad-step-line"></span></div>
          <h4>Design</h4>
          <p>Our team creates user flows and interfaces focused on usability, accessibility, and customer experience.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>03</span><span class="ad-step-line"></span></div>
          <h4>Development</h4>
          <p>We develop your application while testing functionality, performance, security, and integrations.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>04</span><span class="ad-step-line"></span></div>
          <h4>Launch &amp; Improvement</h4>
          <p>We prepare your app for release and continue supporting updates, improvements, and future enhancements.</p>
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
          <button type="button" class="ad-acc-btn">What businesses in Doha can benefit from mobile applications? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Mobile applications can support many Doha industries, including hospitality, tourism, retail, healthcare, real estate, education, and professional services by improving customer access and operational efficiency.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">Can mobile apps support businesses in Lusail and West Bay? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Yes. Mobile applications can help businesses in commercial areas like Lusail and West Bay improve customer services, manage operations, and provide convenient digital experiences.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">What features are useful for hospitality and service businesses in Doha? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Businesses can benefit from features such as booking systems, customer accounts, online payments, notifications, loyalty programs, and personalized service options.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">Can you connect an app with existing business software? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Yes. Applications can be integrated with CRM platforms, payment systems, APIs, inventory tools, and other software solutions to create a connected workflow.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="ad-final-cta">
    <div class="ad-wrap ad-final-inner">
      <div class="ad-reveal">
        <h3>Build Your Next Digital Experience With Logic Works</h3>
        <p>From hospitality and retail to enterprise solutions, the right mobile application can help Doha businesses improve customer engagement and operate more efficiently.</p>
        <p>Partner with Logic Works to create a scalable mobile solution designed for Qatar’s growing digital market.</p>
      </div>
      <a href="#ad-quote" class="ad-btn-grad ad-reveal">
        Start Your App Project Today
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
