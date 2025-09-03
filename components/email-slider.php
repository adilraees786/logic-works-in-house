<style>
    .slider-container {
        padding: 0px 20px;
        position: relative;
    }

    .section-title {
        font-size: 64px;
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

    .section-subtitle:hover {
        color: white;
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
        padding: 20px;
    }

    .polygon-card {
        min-width: 280px;
        height: 350px;
        background: #582499;
        clip-path: polygon(50% 2%, 98% 25%, 98% 75%, 98% 98%, 2% 98%, 2% 75%, 2% 25% );


        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 30px 20px;

        transition: all 0.3s ease;
        position: relative;
        cursor: pointer;
        /* border: 3px solid black; */
    }

    .polygon-card:hover {
        background: white;
        transform: scale(1.05);

        /* border: 3px solid black; */
    }

    .polygon-card:hover .polygon-title,
    .polygon-card:hover .polygon-text {
        color: #582499;
    }

    .polygon-card:nth-child(even) {
        background: #582499;
        border: 3px solid black;
    }

    .polygon-card:nth-child(even) .polygon-title,
    .polygon-card:nth-child(even) .polygon-text {
        color: white;
    }

    .polygon-card:nth-child(even):hover {
        background: white;
        border: 3px solid black;
    }

    .polygon-card:nth-child(even):hover .polygon-title,
    .polygon-card:nth-child(even):hover .polygon-text {
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

    .polygon-card:nth-child(even) .explore-btn {
        background: white;
        color: #582499;
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
        /* width: 50px;
        height: 50px; */

        background: transparent;

        cursor: pointer;


    }







    @media (max-width: 768px) {
        .polygon-track {
            gap: 10px;
            padding: 10px;
        }

        .polygon-title {
            font-size: 15px;
        }

        .polygon-text {
            font-size: 10px;
        }

        .polygon-card {
            min-width: 200px;
            height: 300px;
            padding: 20px 15px;
        }
    }

    /* @media (max-width: 430px) {
        .polygon-card { 
            max-width: 220px;
        }
        
    } */
</style>


<body>
    <div class="container-fluid">
        <div class="slider-container">
            <h1 class="section-title">OUR PROCESS</h1>
            <p class="section-subtitle">HOW WE CREATE WINNING EMAIL CAMPAIGNS</p>

            <div class="polygon-slider">
                <div class="polygon-track" id="polygonTrack">
                    <div class="polygon-card">
                        <h3 class="polygon-title">Discovery & Planning</h3>
                        <p class="polygon-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="explore-btn">Explore now</button>
                    </div>

                    <div class="polygon-card">
                        <h3 class="polygon-title">Content Development</h3>
                        <p class="polygon-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="explore-btn">Explore now</button>
                    </div>

                    <div class="polygon-card">
                        <h3 class="polygon-title">Automation Setup</h3>
                        <p class="polygon-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="explore-btn">Explore now</button>
                    </div>

                    <div class="polygon-card">
                        <h3 class="polygon-title">Performance Analysis</h3>
                        <p class="polygon-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="explore-btn">Explore now</button>
                    </div>

                    <div class="polygon-card">
                        <h3 class="polygon-title">Optimization</h3>
                        <p class="polygon-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="explore-btn">Explore now</button>
                    </div>

                    <div class="polygon-card">
                        <h3 class="polygon-title">Results & Reporting</h3>
                        <p class="polygon-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="explore-btn">Explore now</button>
                    </div>
                </div>
            </div>

            <div class="navigation-buttons">
                <button class="nav-btn" id="prevBtn" onclick="slidePolygons('prev')">
                    <img src="assests/images/ai-development/arrow-1.png" alt="">
                </button>
                <button class="nav-btn" id="nextBtn" onclick="slidePolygons('next')">
                    <img src="assests/images/ai-development/arrow-2.png" alt="">
                </button>
            </div>
        </div>
    </div>

    <script>
        let currentSlide = 0;
        const totalSlides = 6;
        const slidesPerView = 4;
        const track = document.getElementById('polygonTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function updateNavigation() {
            prevBtn.disabled = currentSlide === 0;
            nextBtn.disabled = currentSlide >= totalSlides - slidesPerView;
        }

        function slidePolygons(direction) {
            if (direction === 'next' && currentSlide < totalSlides - slidesPerView) {
                currentSlide++;
            } else if (direction === 'prev' && currentSlide > 0) {
                currentSlide--;
            }

            const translateX = -currentSlide * (280 + 30); // card width + gap
            track.style.transform = `translateX(${translateX}px)`;
            updateNavigation();
        }

        // Initialize navigation state
        updateNavigation();

        // Auto-slide every 5 seconds
        // setInterval(() => {
        //     if (currentSlide < totalSlides - slidesPerView) {
        //         slidePolygons('next');
        //     } else {
        //         currentSlide = 0;
        //         track.style.transform = 'translateX(0px)';
        //         updateNavigation();
        //     }
        // }, 5000);

        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;

        track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        track.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            if (startX - endX > 50) {
                slidePolygons('next');
            } else if (endX - startX > 50) {
                slidePolygons('prev');
            }
        });
    </script>
</body>

</html>