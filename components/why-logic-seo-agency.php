<style>
    .why-section {
        padding: 60px 0;
    }

    .why-hedaing-text {
        font-size: 45px;
        color: white;
        font-weight: 900;


    }

    #text-title {
        font-size: 18px;
        font-weight: 400;
        color: white;
    }

    #text-desc {
        font-size: 18px;
        line-height: 33px;
        letter-spacing: 0px;
        font-weight: 300;
        color: white;
    }

    .slider-container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slider-image {
        width: 200px;
        margin: 0 10px;
        transition: transform 0.3s, z-index 0.3s;
        opacity: 0.7;
    }

    .slider-image.center {
        transform: scale(1.2) translateY(20px);
        z-index: 10;
        opacity: 1;
    }

    /* .nav-buttons {
        margin-top: 20px;
    } */

    .read-more-btn {
        background: #7d00ff;
        color: white;
        padding: 10px 25px;
        border: none;
        border-radius: 25px;
        font-weight: bold;
        margin-top: 20px;
    }

    .text-container {
        max-width: 500px;
    }

    @media (max-width: 450px) {
        .nav-buttons {
            margin-top: 70px !important;
        }
          .why-hedaing-text {
            font-size: 30px;
          }
    }
</style>
</head>



<div class="container why-section d-flex flex-wrap align-items-center justify-content-between">

    <!-- Left Side Text -->
    <div class="text-container">
        <h2 class="why-hedaing-text">why Choose Our SEO Agency in Dubai</h2>
        <p class="text-white">Dubai SEO Agency That Understands Local Business Needs</p>
        <p id="text-title" class="fw-bold">WE DELIVER RANKINGS THAT DRIVE BUSINESS</p>
        <p id="text-desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
        </p>
        <button class="read-more-btn">READ MORE</button>
    </div>

    <!-- Right Side Slider -->
    <div class="slider-container">
        <img src="assests/images/seo-agency-dubai/img-1.webp" class="slider-image" alt="img1">
        <img src="assests/images/seo-agency-dubai/img-2.webp" class="slider-image center" alt="img2">
        <img src="assests/images/seo-agency-dubai/img-3.webp" class=slider-image alt="img3">
    </div>

    <!-- Nav Buttons -->
    <div class="nav-buttons text-end w-100 mt-4">
        <button class="btn btn-outline-light me-2" onclick="prevSlide()">&#9664;</button>
        <button class="btn btn-outline-light" onclick="nextSlide()">&#9654;</button>
    </div>
</div>

<script>
    const images = [
        {
            src: 'assests/images/seo-agency-dubai/img-1.webp',
            title: 'Industry Knowledge',
            desc: 'Understanding Dubai’s market is important for effective SEO. Our team studies industries, competition, and audience needs closely. This research helps us design strategies that match local search habits. Customers in Dubai look for specific services, and we shape campaigns to meet those needs. A good SEO agency Dubai should not treat all companies the same. Each business requires its own plan. Our knowledge helps brands grow faster and reach the right people. Experience across many industries gives us a clear edge. This way, strategies stay effective, practical, and always fit the real needs of your business.'
        },
        {
            src: 'assests/images/seo-agency-dubai/img-2.webp',
            title: 'Data-Driven Methods',
            desc: ' Decisions in SEO must be based on data, not guesswork. We track rankings, clicks, and conversions to learn what truly brings results. Testing methods such as A/B comparisons ensure the right direction for campaigns. As one of the best SEO agency in Dubai, we use accurate research to guide strategy. Every action, from content changes to backlink building, is measured carefully. This ensures your investment leads to visible growth and avoids wasted effort. Data-driven SEO helps businesses adapt quickly to algorithm changes and shifting customer behavior. Over time, these methods build a stable online presence and long-term results.'
        },
        {
            src: 'assests/images/seo-agency-dubai/img-3.webp',
            title: 'Transparent Reporting',
            desc: 'Clear reporting keeps you updated on every step. We believe clients should always know what is done and what results come. Reports include keyword rankings, traffic growth, and performance data. Unlike many SEO agencies Dubai, we avoid difficult terms. Everything is explained in plain and simple words. Reports also show progress, challenges, and next steps. This builds trust and helps you make better choices. Transparency keeps us accountable and shows real actions behind every result. Our team makes sure reports are easy to follow. This way, you stay confident, involved, and part of the SEO process always.'
        }
    ];

    let currentIndex = 1;

    function renderSlider() {
        const sliderContainer = document.querySelector('.slider-container');
        sliderContainer.innerHTML = '';

        const prevIndex = (currentIndex + images.length - 1) % images.length;
        const nextIndex = (currentIndex + 1) % images.length;

        const img1 = document.createElement('img');
        img1.src = images[prevIndex].src;
        img1.className = 'slider-image';
        sliderContainer.appendChild(img1);

        const img2 = document.createElement('img');
        img2.src = images[currentIndex].src;
        img2.className = 'slider-image center';
        sliderContainer.appendChild(img2);

        const img3 = document.createElement('img');
        img3.src = images[nextIndex].src;
        img3.className = 'slider-image';
        sliderContainer.appendChild(img3);

        document.getElementById('text-title').innerText = images[currentIndex].title;
        document.getElementById('text-desc').innerText = images[currentIndex].desc;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        renderSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex + images.length - 1) % images.length;
        renderSlider();
    }

    // Initial Render
    renderSlider();
</script>