<head>
  <style>
    kamis {
      background: #000;
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
      display: block;
    }

    .web-para {
      font-size: 30px;
      font-weight: 500;
      color: white;
    }

    .fw-bold-web {
      font-size: 24px;
      color: #582499;
      font-weight: 700;
      letter-spacing: 0.85px;
    }

    .slider-container {
      position: relative;
      max-width: 1000px;
      margin: 0 auto;
      overflow: hidden;
      padding: 50px 0;
    }

    .slider-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      height: 400px;
    }

    .slide {
      position: absolute;
      transition: all 0.6s ease;
      opacity: 0.5;
      transform: scale(0.8);
      z-index: 1;
      border-radius: 10px;
      overflow: hidden;
    }

    .slide img {
      width: 100%;
      border-radius: 10px;
      display: block;
    }

    .center-slide {
      opacity: 1;
      transform: scale(1);
      z-index: 3;
    }

    .left-slide {
      left: 0;
      transform: translateX(-60%) scale(0.8);
      z-index: 2;
      opacity: 0.6;
    }

    .right-slide {
      right: 0;
      transform: translateX(60%) scale(0.8);
      z-index: 2;
      opacity: 0.6;
    }

    .info {
      position: absolute;
      bottom: 60px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(255, 255, 255, 0.95);
      color: #000;
      padding: 20px;
      border-radius: 8px;
      width: 80%;
      display: none;
    }

    .center-slide .info {
      display: block;
    }

    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 4;
      background: transparent;
      border: none;
      padding: 0;
      cursor: pointer;
    }

    .slider-btn img {
      width: 40px;
      height: 40px;
      object-fit: contain;
      display: block;
    }

    .prev-btn {
      left: 5%;
    }

    .next-btn {
      right: 5%;
    }

    .start-btn {
      background: #582499;
      color: #fff;
      font-size: 24px;
      padding: 12px 30px;
      border: none;
      margin-top: 20px;
      font-weight: 400;
    }

    kamis .threed-animation-hero-sec {
      padding: 100px 0 0 0;
    }

    @media (max-width: 600px) {
      .slider-wrapper {
        height: auto;
        flex-direction: column;
      }

      .slide {
        position: relative;
        transform: scale(1) !important;
        opacity: 1 !important;
        margin-bottom: 20px;
      }

      .left-slide,
      .right-slide {
        display: none;
      }

      .info {
        width: 95%;
        font-size: 14px;
        padding: 15px;
        position: relative;
        bottom: auto;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 10px;
        text-align: center;
      }

      .slider-btn {
        top: auto;
        bottom: -40px;
      }

      .prev-btn {
        left: 20%;
      }

      .next-btn {
        right: 20%;
      }

      .slider-btn img {
        width: 60px;
        height: 60px;
      }

      .web-para {
        font-size: 20px;
        line-height: 1.2;
      }

      .fw-bold-web {
        font-size: 20px;
      }

      .website-slider-heading {
        font-size: 30px;
      }

    }
  </style>
</head>

<kamis>
  <div class="section-bg inner-banner threed-animation-hero-sec position-relative z-1">
    <h2 class="website-slider-heading fs-55 fw-900">Why Choose Logic Works</h2>
    <p class="web-para">Trusted Website Designers for Lasting Online Success</p>

    <div class="slider-container">
      <button class="slider-btn prev-btn">
        <img src="assests/images/android-app-development/left-arrow.png" alt="left-arrow">
      </button>

      <div class="slider-wrapper">
        <div class="slide left-slide">
          <img src="assests/images/website-designer/img-2.webp" alt="web-des-001">
        </div>

        <div class="slide center-slide" id="center-slide">
          <img src="assests/images/website-designer/img-center-001.webp" alt="web-des-002">
          <div class="info">
            <h5 class="fw-bold-web">Simple and Clean Design</h5>
            <p>Our website designers create layouts that are clear, modern, and easy for visitors to follow.</p>
          </div>
        </div>

        <div class="slide right-slide">
          <img src="assests/images/website-designer/img-2.webp" alt="web-des-003">
        </div>
      </div>

      <button class="slider-btn next-btn">
        <img src="assests/images/android-app-development/right-arrow.png" alt="right-arrow">
      </button>
    </div>

    <p class="text-white fs-18 fw-400 mt-10">START YOUR MARKETING JOURNEY TODAY!</p>
    <button class="start-btn">START NOW!</button>


  </div>
  <script>
    const centerSlide = document.getElementById("center-slide").querySelector("img");
    const infoBox = document.getElementById("center-slide").querySelector(".info");

    const slidesData = [
      {
        img: "assests/images/website-designer/img-center-001.webp",
        title: "Simple and Clean Design",
        text: "Our website designers create layouts that are clear, modern, and easy for visitors to follow."
      },
      {
        img: "assests/images/website-designer/img-center-002.webp",
        title: "User-Friendly Navigation",
        text: "Website designers ensure smooth browsing with menus and paths that guide users without confusion or delay."
      },
      {
        img: "assests/images/website-designer/img-center-003.webp",
        title: "SEO-Friendly Structure",
        text: "Pages built by website designers include proper coding, speed, and layout that help search visibility improve."
      },
      {
        img: "assests/images/website-designer/img-center-004.webp",
        title: "On-Time Project Delivery",
        text: "Our team respects deadlines, ensuring every project is completed within the agreed timeline."
      },
      {
        img: "assests/images/website-designer/img-center-005.webp",
        title: "Affordable Pricing",
        text: "We provide fair packages, giving businesses quality design without stretching budgets beyond planned limits."
      }
    ];

    let current = 0;

    function updateCenterSlide() {
      centerSlide.src = slidesData[current].img;
      infoBox.querySelector("h5").innerText = slidesData[current].title;
      infoBox.querySelector("p").innerText = slidesData[current].text;
    }

    document.querySelector(".next-btn").addEventListener("click", () => {
      nextSlide();
    });

    document.querySelector(".prev-btn").addEventListener("click", () => {
      prevSlide();
    });

    function nextSlide() {
      current = (current + 1) % slidesData.length;
      updateCenterSlide();
    }

    function prevSlide() {
      current = (current - 1 + slidesData.length) % slidesData.length;
      updateCenterSlide();
    }


    setInterval(() => {
      nextSlide();
    }, 2000);

    updateCenterSlide();

  </script>
</kamis>