<style>
.slider-heading {
    color: white;
    font-size: 50px;
    font-weight: 700;
    text-align: center;           
    align-items: center;   
    margin-bottom: 30px;      
              
}


    .slider-container {
        position: relative;
        width: 100%;
        max-width: 1000px;
        margin: auto;
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
    }

    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #333;
        border: none;
        color: #fff;
        padding: 10px 15px;
        cursor: pointer;
        z-index: 100;
        font-size: 18px;
        border-radius: 50%;
    }

    .prev-btn {
        left: 20px;
    }

    .next-btn {
        right: 20px;
    }

    @media (max-width: 768px) {
        .slide {
            min-width: 50%;
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

    <div class="slider-container">
        <button class="slider-btn prev-btn">&#10094;</button>

        <div class="slider-wrapper" id="slider">
            <div class="slide">
                <img src="assests/images/Logo-design-niche/slider-img-1.png" alt="Logo 1">
                <p class="text-white">Wordmark</p>
            </div>
            <div class="slide">
                <img src="assests/images/Logo-design-niche/slider-img-2.png" alt="Logo 2">
                <p class="text-white">Combination Marks</p>
            </div>
            <div class="slide">
                <img src="assests/images/Logo-design-niche/slider-img-3.png" alt="Logo 3">
                <p class="text-white">Mascot</p>
            </div>
            <div class="slide">
                <img src="assests/images/Logo-design-niche/slider-img-4.png" alt="Logo 4">
                <p class="text-white">Modern Rebrands</p>
            </div>
            <div class="slide">
                <img src="assests/images/Logo-design-niche/slider-img-1.png" alt="Logo 5">
                <p class="text-white">Iconic Style</p>
            </div>
            <div class="slide">
                <img src="assests/images/Logo-design-niche/slider-img-2.png" alt="Logo 6">
                <p class="text-white">Minimalist</p>
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
                updateSlider();
            }
        });
    </script>

</body>