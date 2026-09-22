<?php
$meta_title = "Mobile App Development Company in Kuwait City | Logic Works";
$meta_description = "Build custom mobile solutions with a Mobile App Development Company in Kuwait City. Logic Works creates Android, iOS, and web applications for growing businesses.";
$keyword = "Mobile App Development Company in Kuwait City";
$canonical = "https://logicworks.ae/mobile-app-development-company-kuwait-city";

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
        <h1>Mobile App<br>Development Company<br><span class="ad-grad-text">in Kuwait City</span></h1>
          <p class="ad-hero-lead">Kuwait City businesses are continuously looking for smarter ways to serve customers, automate processes, and improve daily operations through technology. Working with a Mobile App Development Company in Kuwait City, Logic Works helps businesses create custom Android, iOS, and cross-platform applications that deliver practical solutions and better digital experiences.</p>
          <p class="ad-hero-lead">From customer-focused mobile apps to internal business platforms, we develop applications that are built around your goals, users, and long-term growth plans.</p>
        <ul class="ad-hero-list">
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Custom Mobile Applications
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Android &amp; iOS Development
          </li>
          <li>
            <svg class="ad-check" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Business-Focused Solutions
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
              <input class="ad-field" id="adFPhone" name="phone" type="tel" placeholder="+965" autocomplete="tel">
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
        <h2>Helping Kuwait Businesses Build <span class="ad-grad-text">Better Digital Experiences</span></h2>
        <div class="ad-pink-line"></div>
        <div class="ad-body">
          <p>A mobile application should do more than represent your brand. It should make interactions easier, improve efficiency, and create value for both customers and businesses.</p>
          <p>At Logic Works, we help companies transform ideas into reliable digital products through strategic planning, intuitive UI/UX design, and modern development practices.</p>
          <p>Our solutions support businesses across eCommerce, healthcare, retail, logistics, hospitality, real estate, and professional services. Whether you need a customer app, booking platform, delivery solution, or business management tool, we focus on creating experiences that are simple, secure, and scalable.</p>
          <p>For Kuwait City businesses, we also consider important requirements such as bilingual experiences, user-friendly interfaces, payment integrations, and solutions designed for mobile-first audiences.</p>
        </div>
        <a href="https://wa.me/971529502258" target="_blank" class="ad-btn-grad ad-mt-btn">
          Get a Free App Consultation
          <svg class="ad-ico" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
      <div class="ad-visual ad-reveal">
        <div class="ad-glow is-center"></div>
        <img class="ad-about-img" src="./assests/images/cities/abu-dhabi/image-1.webp"
          alt="Mobile app development Kuwait City">
      </div>
    </div>
  </section>



  <!-- SERVICES INTRO -->
  <section id="ad-services" class="ad-section is-intro">
    <div class="ad-wrap">
      <div class="ad-center ad-reveal">
        <p class="ad-eyebrow is-center">Mobile App Development Services</p>
        <h2>Mobile App Development Services <span class="ad-grad-text">in Kuwait City</span></h2>
          <p class="ad-muted-p">Every business has different challenges, customers, and workflows. Our mobile app development services in Kuwait City are designed to create solutions that match your specific requirements.</p>
          <p class="ad-muted-p">From initial planning and interface design to development, testing, and launch, we manage the complete application journey.</p>
          <p class="ad-muted-p">Whether you need a simple business app or a more advanced digital platform, our team helps you choose the right technology, features, and approach to create a solution that supports your objectives.</p>



      </div>
    </div>
  </section>

  <!-- ANDROID -->
  <section class="ad-section is-compact-top">
    <div class="ad-wrap ad-two-col">
      <div class="ad-visual ad-reveal ad-order-2 ad-lg-order-1">
        <div class="ad-glow is-green"></div>
        <img class="ad-service-img" src="./assests/images/cities/abu-dhabi/image-2.webp"
          alt="Mobile app development Kuwait City Android">
      </div>
      <div class="ad-reveal ad-order-1 ad-lg-order-2">
        <p class="ad-eyebrow">
          <svg class="ad-ico-lg" viewBox="0 0 24 24" fill="#3ddc84"><path d="M17.6 9.48l1.84-3.18a.38.38 0 00-.66-.38l-1.86 3.22a11.62 11.62 0 00-9.84 0L5.22 5.92a.38.38 0 00-.66.38L6.4 9.48A10.78 10.78 0 001 18h22a10.78 10.78 0 00-5.4-8.52zM7 15.25a1.25 1.25 0 111.25-1.25A1.25 1.25 0 017 15.25zm10 0a1.25 1.25 0 111.25-1.25A1.25 1.25 0 0117 15.25z"/></svg>
          Android Development
        </p>
        <h2>Android Applications Designed for <span class="ad-grad-text">Better Accessibility</span></h2>
          <p class="ad-body is-wide">Android continues to be an important platform for businesses that want to reach a wider audience through mobile technology.</p>
          <p class="ad-body is-wide">Our team creates Android applications with clean interfaces, reliable performance, and features that help users complete tasks easily.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Custom Android Development <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We create Android solutions for eCommerce, bookings, customer services, memberships, deliveries, and internal business operations. Applications can include secure accounts, payment options, location services, notifications, product catalogues, and custom dashboards.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Interface Design and Testing <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>A successful app requires careful attention to usability. We design clear user journeys and test important functions across different devices to maintain a smooth experience.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Google Play Deployment <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We support app preparation, testing versions, store requirements, and launch assistance to help businesses publish their applications successfully.</p></div>
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
        <h2>iOS Applications Built for <span class="ad-grad-text">Premium User Experiences</span></h2>
        <div class="ad-pink-line"></div>
          <p class="ad-body is-wide">iOS users expect applications that feel fast, secure, and effortless to navigate.</p>
          <p class="ad-body is-wide">We create iPhone and iPad applications that combine modern design with practical functionality to help businesses provide better customer experiences.</p>
          <p class="ad-body is-wide">When choosing app developers in Kuwait City, businesses should consider technical expertise, design quality, security, and long-term support.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">iPhone and iPad Applications <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We build iOS solutions for online services, eCommerce platforms, booking systems, customer accounts, and business applications.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Secure Integrations and Features <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Your app can connect with payment gateways, maps, notifications, calendars, and other business systems to improve functionality.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">App Store Launch Support <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We help prepare applications for testing, review, and App Store submission so businesses can move confidently toward launch.</p></div>
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
          alt="Mobile app development Kuwait City iOS">
      </div>
    </div>
  </section>

  <!-- WEB -->
  <section class="ad-section ad-section-border">
    <div class="ad-wrap ad-two-col">
      <div class="ad-visual ad-reveal ad-order-2 ad-lg-order-1">
        <div class="ad-glow is-purple"></div>
        <img class="ad-service-img" src="./assests/images/cities/abu-dhabi/image-4.webp"
          alt="Mobile app development Kuwait City web">
      </div>
      <div class="ad-reveal ad-order-1 ad-lg-order-2">
        <p class="ad-eyebrow">
          <span class="ad-web-icon">
            <svg fill="none" stroke="#fff" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 0c2.5-2.5 3.5-5.5 3.5-9S14.5 5.5 12 3c-2.5 2.5-3.5 5.5-3.5 9s1 6.5 3.5 9zM3.5 9h17M3.5 15h17"/></svg>
          </span>
          Web &amp; Cross-Platform
        </p>
        <h2>Applications That Work Across <span class="ad-grad-text">Web and Mobile</span></h2>
        <div class="ad-pink-line"></div>
          <p class="ad-body is-wide">Businesses today need digital solutions that are accessible across multiple devices and platforms.</p>
          <p class="ad-body is-wide">Our team creates flexible web applications and cross-platform solutions that help businesses provide consistent experiences for customers.</p>
        <div class="ad-acc">
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Responsive Web Platforms <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>We develop web-based solutions such as customer portals, dashboards, booking platforms, and online services that work smoothly across devices.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Cross-Platform Development <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Cross-platform applications allow businesses to reach Android and iOS users while maintaining a more efficient development approach.</p></div>
          </div>
          <div class="ad-acc-item">
            <button type="button" class="ad-acc-btn">Connected Business Systems <span class="ad-acc-plus">+</span></button>
            <div class="ad-acc-panel"><p>Our application development services include connecting digital platforms with CRM systems, payment solutions, inventory tools, APIs, and other essential business technologies.</p></div>
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
        <h3>Build a Solution That Matches Your Vision</h3>
        <p>We help businesses create applications that support customers, simplify operations, and prepare them for future growth.</p>
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
        <h2>A Practical Development Journey From Start <span class="ad-grad-text">to Finish</span></h2>
        <p class="ad-muted-p">A successful application requires planning, collaboration, and a clear development process. We keep every stage organized so businesses understand how their project moves forward.</p>
      </div>
      <div class="ad-steps">
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>01</span><span class="ad-step-line"></span></div>
          <h4>Research</h4>
          <p>We understand your business goals, audience, competitors, and required features before defining the right solution.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>02</span><span class="ad-step-line"></span></div>
          <h4>Design</h4>
          <p>Our team creates user flows and interface designs focused on usability, accessibility, and customer experience.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>03</span><span class="ad-step-line"></span></div>
          <h4>Development</h4>
          <p>We build the application step by step while testing performance, functionality, and security throughout the process.</p>
        </div>
        <div class="ad-step ad-reveal">
          <div class="ad-step-num"><span>04</span><span class="ad-step-line"></span></div>
          <h4>Launch</h4>
          <p>We prepare your application for release and continue supporting improvements, updates, and future enhancements.</p>
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
          <button type="button" class="ad-acc-btn">How much does mobile app development cost in Kuwait City? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>The cost depends on the application type, required features, design complexity, integrations, and development requirements. Every project needs a customized approach based on business goals.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">How long does it take to build a mobile application? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>The timeline depends on the scope of the project. Simple applications can be completed faster, while advanced platforms with custom features and integrations require more planning and testing.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">Can you develop Arabic and English mobile applications? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Yes. We create bilingual applications with Arabic and English support, including right-to-left layouts where required for Kuwait audiences.</p></div>
        </div>
        <div class="ad-acc-item">
          <button type="button" class="ad-acc-btn">Do you provide maintenance after app launch? <span class="ad-acc-plus">+</span></button>
          <div class="ad-acc-panel"><p>Yes. Logic Works provides ongoing support, updates, improvements, and technical assistance to help your application remain reliable as your business grows.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="ad-final-cta">
    <div class="ad-wrap ad-final-inner">
      <div class="ad-reveal">
        <h3>Let's Create Your Next Digital Solution</h3>
        <p>A well-built application can help your business improve customer relationships, automate processes, and create stronger digital experiences.</p>
        <p>Partner with Logic Works to develop a mobile solution designed around your goals in Kuwait City.</p>
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
