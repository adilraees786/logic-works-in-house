<style>
    .slider-heading {
        color: white;
        font-size: 55px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
    }

    .text-logo {
        font-size: 20px;
        color: #878787;
        line-height: 30px;
        font-weight: 300;
        letter-spacing: 0%;
        text-align: center;
    }

    .slider-wrapper-container {
        position: relative;
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 60px;
        box-sizing: border-box;
    }

    .slider-container {
        overflow: hidden;
    }

    .slider-wrapper {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    /* Show 4 slides at a time */
    .slide {
        min-width: 25%;
        box-sizing: border-box;
        padding: 10px;
        text-align: center;
    }

    .slide img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        background: #141414;
        padding: 10px;
    }

    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: white;
        border: none;
        color: #9142EF;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 18px;
        border-radius: 50%;
        z-index: 2;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }

    .card-custom {
        background-color: #141414;
        border: none;
        border-radius: 12px;
        padding: 20px;
        height: 100%;
    }

    .icon-box-niche {
        background-color: #9142EF;
        width: 48px;
        height: 48px;
        border-radius: 6px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;
    }

    .icon-box-niche img {
        width: 40px;
        height: 40px;
        background-color: #9142EF;
    }

    .card-title {
        font-weight: 700;
        margin-bottom: 8px;
        font-size: 25px;
        color: white;
        line-height: 40px;
    }

    .card-text {
        font-size: 20px;
        color: white;
        margin-bottom: 12px;
        line-height: 30px;
        min-height: 60px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .slide {
            min-width: 50%;
        }
    }

    @media (max-width: 600px) {
        .slider-heading {
            font-size: 30px;

        }
    }

    @media (max-width: 480px) {
        .slide {
            min-width: 100%;
        }
    }
</style>


<body>

    <h2 class="slider-heading">From Audit to Launch—Clear, Simple, Fast</h2>
    <p class="text-logo">Our process is designed to remove confusion, save you time, and deliver a
        high-performing <br> niche website in just weeks.</p>

    <!-- Slider -->
    <div class="slider-wrapper-container">
        <button class="slider-btn prev-btn" id="prev1">&#10094;</button>
        <div class="slider-container">
            <div class="slider-wrapper" id="slider1">
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box-niche">
                            <img src="assests/images/Adword-Niche-Design/choice-img-1.png" alt="Keyword Research">
                        </div>
                        <div class="card-title">Custom Website Development</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box-niche">

                            <img src="assests/images/Adword-Niche-Design/choice-img-2.png" alt="Ad Copy">
                        </div>
                        <div class="card-title">E-Commerce Development</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box-niche">
                            <img src="assests/images/Adword-Niche-Design/choice-img-3.png" alt="Smart Bidding">
                        </div>
                        <div class="card-title">CMS Development</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box-niche">

                            <img src="assests/images/Adword-Niche-Design/choice-img-2.png" alt="Ad Copy">
                        </div>
                        <div class="card-title">E-Commerce Development</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box-niche">
                            <img src="assests/images/Adword-Niche-Design/choice-img-3.png" alt="Smart Bidding">
                        </div>
                        <div class="card-title">Custom Website Development</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box-niche">
                            <img src="assests/images/Adword-Niche-Design/choice-img-1.png" alt="Keyword Research">
                        </div>
                        <div class="card-title">E-Commerce Development</div>
                    </div>
                </div>

            </div>
        </div>
        <button class="slider-btn next-btn" id="next1">&#10095;</button>
    </div>

    <script>
        function initSlider(sliderId, prevBtnId, nextBtnId, slidesToShow = 4) {
            const slider = document.getElementById(sliderId);
            const prevBtn = document.getElementById(prevBtnId);
            const nextBtn = document.getElementById(nextBtnId);

            let slideIndex = 0;
            const slides = slider.querySelectorAll('.slide');
            const totalSlides = slides.length;

            function updateSlider() {
                const slideWidth = slides[0].offsetWidth;
                const moveX = slideWidth * slideIndex;
                slider.style.transform = `translateX(-${moveX}px)`;
            }

            prevBtn.addEventListener('click', () => {
                if (slideIndex > 0) {
                    slideIndex--;
                } else {
                    slideIndex = totalSlides - slidesToShow; // last tak wapas bhej do
                }
                updateSlider();
            });

            nextBtn.addEventListener('click', () => {
                if (slideIndex < totalSlides - slidesToShow) {
                    slideIndex++;
                } else {
                    slideIndex = 0; // agar last slide hai to wapas start pe
                }
                updateSlider();
            });

            window.addEventListener('resize', updateSlider);

            updateSlider();

            // Auto scroll har 1 sec baad
            setInterval(() => {
                if (slideIndex < totalSlides - slidesToShow) {
                    slideIndex++;
                } else {
                    slideIndex = 0; // reset to start
                }
                updateSlider();
            }, 1000); // 1000ms = 1 second
        }

        // Initialize slider with 4 visible slides
        initSlider('slider1', 'prev1', 'next1', 4);
    </script>


</body>

</html>