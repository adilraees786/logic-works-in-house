<style>
    .slider-container {
        padding: 0px 20px;
        position: relative;
        overflow: hidden;
    }

    .section-title {
        font-size: 55px;
        font-weight: 700;
        text-align: center;
        color: white;
    }

    .section-subtitle {
        text-align: center;
        color: white;
        font-size: 27px;
        font-weight: 400;
        transition: color 0.3s ease;
    }

    .polygon-slider {
        position: relative;
        overflow: hidden;
        padding: 20px 0;
    }

    .polygon-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        gap: 30px;
    }

    .polygon-card {
        flex: 0 0 calc((100% - 90px) / 4);
        /* clip-path: polygon(50% 2%, 98% 25%, 98% 75%, 98% 98%, 2% 98%, 2% 75%, 2% 25%); */
        /* clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%); */

        height: 350px;
        background: #582499;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 30px 20px;
        transition: all 0.3s ease;
        position: relative;
        cursor: pointer;
    }

    .polygon-card:hover {

        background: white;
        transform: scale(1.05);
    }

    .polygon-card:hover .polygon-title,
    .polygon-card:hover .polygon-text {
        color: #582499;
    }

    .polygon-title {
        color: white;
        font-size: 21px;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .polygon-text {
        color: white;
        font-size: 16px;
        line-height: 19px;
        transition: color 0.3s ease;
    }

    .explore-btn {
        background: white;
        color: #582499;
        border: none;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .polygon-card:hover .explore-btn {
        background: #582499;
        color: white;
        transform: translateY(-2px);
    }

    .navigation-buttons {
        display: flex;
        justify-content: end;
        gap: 20px;
    }

    .nav-btn {
        background: transparent;
        cursor: pointer;
    }

    /* Medium screen - show 2 cards */
    @media (max-width: 991px) {
        .polygon-card {
            flex: 0 0 calc((100% - 30px) / 2);
        }
    }

    /* Small screen - show 1 card */
    @media (max-width: 600px) {
        .polygon-card {
            flex: 0 0 100%;
        }

        .section-title {
            font-size: 30px;
            margin-top: 30px;
        }

        .section-subtitle {
            font-size: 22px;
            line-height: 1.2;
        }
    }
</style>

<div class="container-fluid">
    <div class="slider-container">
        <h2 class="section-title">Our Email Marketing Process</h2>
        <p class="section-subtitle">
            Structured Approach to Email Marketing Campaigns
        </p>

        <div class="polygon-slider">
            <div class="polygon-track" id="polygonTrack">
                <div class="polygon-card">
                    <h3 class="polygon-title">Discovery & Goal Setting</h3>
                    <p class="polygon-text">Understand your business, audience, and objectives to create a tailored
                        email strategy.</p>
                    <button class="explore-btn">Explore now</button>
                </div>

                <div class="polygon-card">
                    <h3 class="polygon-title">Audience Segmentation</h3>
                    <p class="polygon-text">Divide your email list based on behavior, preferences, and demographics
                        for precise targeting</p>
                    <button class="explore-btn">Explore now</button>
                </div>

                <div class="polygon-card">
                    <h3 class="polygon-title">Campaign Strategy & Planning</h3>
                    <p class="polygon-text">Develop campaign calendars, messaging, and content plans to achieve
                        measurable results.</p>
                    <button class="explore-btn">Explore now</button>
                </div>

                <div class="polygon-card">
                    <h3 class="polygon-title">Email Design & Development</h3>
                    <p class="polygon-text">Create responsive, visually appealing emails with clear calls-to-action
                        aligned with your brand.</p>
                    <button class="explore-btn">Explore now</button>
                </div>

                <div class="polygon-card">
                    <h3 class="polygon-title">Automation & Scheduling</h3>
                    <p class="polygon-text">Set up automated sequences, drip campaigns, and trigger-based emails for
                        better engagement.</p>
                    <button class="explore-btn">Explore now</button>
                </div>

                <div class="polygon-card">
                    <h3 class="polygon-title">Monitoring & Optimization</h3>
                    <p class="polygon-text">Track performance, analyze results, and optimize campaigns for higher
                        open rates and conversions.</p>
                    <button class="explore-btn">Explore now</button>
                </div>
            </div>
        </div>

        <div class="navigation-buttons">
            <button class="nav-btn" id="prevBtn" onclick="slidePolygons('prev')">
                <img src="assests/images/ai-development/arrow-1.webp" alt="">
            </button>
            <button class="nav-btn" id="nextBtn" onclick="slidePolygons('next')">
                <img src="assests/images/ai-development/arrow-2.webp" alt="">
            </button>
        </div>
    </div>
</div>

<script>
    const track = document.getElementById('polygonTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentSlide = 0;

    function getSlidesPerView() {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 991) return 2;
        return 4;
    }

    function slidePolygons(direction) {
        const totalSlides = document.querySelectorAll('.polygon-card').length;
        const slidesPerView = getSlidesPerView();

        if (direction === 'next' && currentSlide < totalSlides - slidesPerView) {
            currentSlide++;
        } else if (direction === 'prev' && currentSlide > 0) {
            currentSlide--;
        }

        const card = document.querySelector('.polygon-card');
        const gap = parseInt(window.getComputedStyle(track).gap);
        const translateX = -currentSlide * (card.offsetWidth + gap);

        track.style.transform = `translateX(${translateX}px)`;
    }

    prevBtn.addEventListener('click', () => slidePolygons('prev'));
    nextBtn.addEventListener('click', () => slidePolygons('next'));

    // Auto-slide every 5s
    setInterval(() => {
        const totalSlides = document.querySelectorAll('.polygon-card').length;
        const slidesPerView = getSlidesPerView();
        if (currentSlide < totalSlides - slidesPerView) {
            slidePolygons('next');
        } else {
            currentSlide = 0;
            track.style.transform = 'translateX(0px)';
        }
    }, 5000);

    // Recalculate position on resize
    window.addEventListener('resize', () => {
        currentSlide = 0;
        track.style.transform = 'translateX(0px)';
    });
</script>