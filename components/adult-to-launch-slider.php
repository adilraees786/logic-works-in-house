<style>
    .slider-heading-digital-niche {
        color: white;
        font-size: 50px;
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

    .icon-box {
        background-color: #9142EF;
        width: 48px;
        height: 48px;
        border-radius: 6px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;
    }

    .icon-box img {
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
        .slider-heading-digital-niche {
            font-size: 30px;
            line-height: 1.2;
        }

        .slider-heading-digital-niche br {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .slide {
            min-width: 100%;
        }
    }
</style>


<body>

    <h2 class="slider-heading-digital-niche">From Audit to Launch—Clear, <br>Simple, Fast</h2>
    <p class="text-logo">Our process is designed to remove confusion, save you time, and deliver a
        high-performing <br> niche website in just weeks.</p>

    <!-- Slider -->
    <div class="slider-wrapper-container">
        <button class="slider-btn prev-btn" id="prev1">&#10094;</button>
        <div class="slider-container">
            <div class="slider-wrapper" id="slider1">
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="assests/images/Adword-Niche-Design/choice-img-1.png" alt="Keyword Research">
                        </div>
                        <div class="card-title">Discovery & Niche Audit (Days 1–3)</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">

                            <img src="assests/images/Adword-Niche-Design/choice-img-2.png" alt="Ad Copy">
                        </div>
                        <div class="card-title">Conversion Blueprint (Week 1)</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="assests/images/Adword-Niche-Design/choice-img-3.png" alt="Smart Bidding">
                        </div>
                        <div class="card-title">Brand Styling (Week 2)</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="assests/images/Adword-Niche-Design/choice-img-4.png" alt="Optimization">
                        </div>
                        <div class="card-title">High-Fidelity Design (Week 2–3)</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="assets/images/Adword-Niche-Design/choice-img-4.png" alt="Optimization">
                        </div>
                        <div class="card-title">Conversion Blueprint (Week 1)</div>
                    </div>
                </div>
                <div class="slide">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="assests/images/Adword-Niche-Design/choice-img-1.png" alt="Keyword Research">
                        </div>
                        <div class="card-title">Discovery & Niche Audit (Days 1–3)</div>
                    </div>
                </div>
                <!-- You can add more slides here, if needed -->
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
            let direction = 1; // 1 = forward, -1 = backward
            const slides = slider.querySelectorAll('.slide');
            const totalSlides = slides.length;

            function updateSlider() {
                const slideWidth = slides[0].offsetWidth;
                const moveX = slideWidth * slideIndex;
                slider.style.transform = `translateX(-${moveX}px)`;
                slider.style.transition = "transform 0.5s ease";
            }

            prevBtn.addEventListener('click', () => {
                if (slideIndex > 0) {
                    slideIndex--;
                    direction = -1; // update direction when manually clicked
                    updateSlider();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (slideIndex < totalSlides - slidesToShow) {
                    slideIndex++;
                    direction = 1; // update direction when manually clicked
                    updateSlider();
                }
            });

            window.addEventListener('resize', updateSlider);

            // Auto scroll every 2 seconds
            setInterval(() => {
                slideIndex += direction;

                // Reverse direction when reaching ends
                if (slideIndex >= totalSlides - slidesToShow) {
                    direction = -1;
                } else if (slideIndex <= 0) {
                    direction = 1;
                }

                updateSlider();
            }, 2000);

            updateSlider();
        }

        // Initialize slider with 4 visible slides
        initSlider('slider1', 'prev1', 'next1', 4);
    </script>


</body>

</html>