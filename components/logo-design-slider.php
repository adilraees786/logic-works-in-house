<style>
    .slider-heading {
        color: white;
        font-size: 50px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
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
        background-color: black;
        border: none;
        color: #fff;
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

    /* Responsive Slides */
    @media (max-width: 768px) {
        .slide {
            min-width: 50%;
        }

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
</head>

<body>

    <h2 class="slider-heading">Types of Logos We Create</h2>

    <div class="slider-wrapper-container">
        <button class="slider-btn prev-btn">&#10094;</button>

        <div class="slider-container">
            <div class="slider-wrapper" id="slider">
                <div class="slide">
                    <img src="assests/images/Logo-design-niche/slider-img-1.webp" alt="Logo 1">
                    <p class="text-white">Wordmark</p>
                </div>
                <div class="slide">
                    <img src="assests/images/Logo-design-niche/slider-img-2.webp" alt="Logo 2">
                    <p class="text-white">Combination Marks</p>
                </div>
                <div class="slide">
                    <img src="assests/images/Logo-design-niche/slider-img-3.webp" alt="Logo 3">
                    <p class="text-white">Mascot</p>
                </div>
                <div class="slide">
                    <img src="assests/images/Logo-design-niche/slider-img-4.webp" alt="Logo 4">
                    <p class="text-white">Modern Rebrands</p>
                </div>
                <div class="slide">
                    <img src="assests/images/Logo-design-niche/slider-img-1.webp" alt="Logo 5">
                    <p class="text-white">Iconic Style</p>
                </div>
                <div class="slide">
                    <img src="assests/images/Logo-design-niche/slider-img-2.webp" alt="Logo 6">
                    <p class="text-white">Minimalist</p>
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

        function updateSlider() {
            const slideWidth = document.querySelector('.slide').offsetWidth;
            const moveX = slideWidth * slideIndex;
            slider.style.transform = `translateX(-${moveX}px)`;
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
            } else {
                //  agar last slide aa jaye to wapas start pe le aao
                slideIndex = 0;
            }
            updateSlider();
        });

        //  Auto scroll har 1 second baad
        setInterval(() => {
            if (slideIndex < totalSlides - slidesToShow) {
                slideIndex++;
            } else {
                slideIndex = 0;
            }
            updateSlider();
        }, 1000); // 1 second = 1000 ms
    </script>


</body>