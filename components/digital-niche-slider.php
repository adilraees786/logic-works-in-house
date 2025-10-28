<style>
    .slider-heading-niche {
        color: white;
        font-size: 55px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
        line-height: 1.2;
    }

    .text-logo {
        font-size: 20px;
        color: #878787;
        line-height: 30px;
        font-weight: 300;
        letter-spacing: 0%;
    }

    /* Outer container that includes buttons */
    .slider-wrapper-container {
        position: relative;
        max-width: 1000px;
        margin: auto;
        padding: 0 60px;
        /* space for prev/next buttons */
        box-sizing: border-box;
    }

    .slider-container {
        overflow: hidden;
    }

    .slider-wrapper {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

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
    }

    .slide p {
        margin-top: 8px;
        font-size: 16px;
        color: white;
    }

    /* Buttons */
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

    .image-grid img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
        background: #141414;
        padding: 10px;
    }

    /* Responsive Slides */
    @media (max-width: 768px) {
        .slide {
            min-width: 50%;
        }



        .slider-heading-niche {
            font-size: 30px;

        }
    }



    @media (max-width: 480px) {
        .slide {
            min-width: 100%;
        }
    }
</style>
</head>

<body>

    <h2 class="slider-heading-niche">Built for Businesses That Need More <br>Than a Template</h2>
    <p class="text-logo text-center">Every niche has its own language, trust signals, and buyer journey. We design with
        those differences in mind—so <br>
        your site feels familiar to your audience and irresistible to act on.</p>

    <div class="slider-wrapper-container">
        <button class="slider-btn prev-btn">&#10094;</button>

        <div class="slider-container">
            <div class="slider-wrapper" id="slider">
                <div class="slide image-grid">
                    <img src="assests/images/PPC-Niche-Design/trust-1.webp" alt="digi-nich-001"
                        style="height:150px; width: 300px;" alt="Trustpilot">

                </div>
                <div class="slide image-grid">
                    <img src="assests/images/PPC-Niche-Design/trust-2.webp" alt="digi-nich-002"
                        style="height:150px; width: 300px;" alt="Clutch">

                </div>
                <div class="slide image-grid">
                    <img src="assests/images/PPC-Niche-Design/trust-3.webp" alt="digi-nich-003"
                        style="height:150px; width: 300px;" alt="Bark">

                </div>
                <div class="slide image-grid">
                    <img src="assests/images/PPC-Niche-Design/trust-4.webp" alt="digi-nich-004"
                        style="height:150px; width: 300px;" alt="GoodFirms">

                </div>
                <div class="slide image-grid">
                    <img src="assests/images/PPC-Niche-Design/trust-1.webp" alt="digi-nich-005"
                        style="height:150px; width: 300px;" alt="Trustpilot-1">

                </div>
                <div class="slide image-grid">
                    <img src="assests/images/PPC-Niche-Design/trust-2.webp" alt="digi-nich-006"
                        style="height:150px; width: 300px;" alt="Clutch-2">

                </div>
            </div>
        </div>

        <button class="slider-btn next-btn">&#10095;</button>
    </div>


    <script>
        const slider = document.getElementById('slider');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        let slideIndex = 0;
        const totalSlides = document.querySelectorAll('.slide').length;
        const slidesToShow = 4;
        let direction = 1; // 1 = forward, -1 = backward

        function updateSlider() {
            const slideWidth = document.querySelector('.slide').offsetWidth;
            const moveX = slideWidth * slideIndex;
            slider.style.transform = `translateX(-${moveX}px)`;
            slider.style.transition = "transform 0.5s ease";
        }

        prevBtn.addEventListener('click', () => {
            if (slideIndex > 0) {
                slideIndex--;
                updateSlider();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (slideIndex < totalSlides - slidesToShow) {
                slideIndex++;
                updateSlider();
            }
        });

        // Auto scroll every 1 seconds
        setInterval(() => {
            slideIndex += direction;

            // Reverse direction at ends
            if (slideIndex >= totalSlides - slidesToShow) {
                direction = -1;
            } else if (slideIndex <= 0) {
                direction = 1;
            }

            updateSlider();
        }, 2000);
    </script>


</body>