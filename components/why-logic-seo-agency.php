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
    }
</style>
</head>



<div class="container why-section d-flex flex-wrap align-items-center justify-content-between">

    <!-- Left Side Text -->
    <div class="text-container">
        <h1 class="why-hedaing-text"><span class="fs-20 fw-300">why</span> Logic Works for SEO?</h1>
        <p class="text-white">WE DELIVER RANKINGS THAT DRIVE BUSINESS</p>
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
            title: 'WHY LOGIC WORKS',
            desc: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint .'
        },
        {
            src: 'assests/images/seo-agency-dubai/img-2.webp',
            title: 'SEO THAT WORKS',
            desc: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint .'
        },
        {
            src: 'assests/images/seo-agency-dubai/img-3.webp',
            title: 'RANK HIGHER',
            desc: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint .'
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