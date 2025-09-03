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


        @media (max-width: 500px) {
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
                font-size: 35px;
            }

            .fw-bold-web {
                font-size: 18px;
            }
        }
    </style>
</head>

<kamis>
    <div class="section-bg inner-banner threed-animation-hero-sec position-relative z-1">
        <!-- <p>elaborated code and creative design</p> -->
        <h2 class="fs-72 fw-900">WHY CHOOSE US</h2>
        <p class="web-para">Your Trusted Digital Marketing Partner in Dubai</p>

        <div class="slider-container">
            <button class="slider-btn prev-btn">
                <img src="assests/images/android-app-development/left-arrow.png" alt="left-arrow">
            </button>

            <div class="slider-wrapper">
                <div class="slide left-slide">
                    <img src="assests/images/website-designer/img-1.jpg" alt="">
                </div>

                <div class="slide center-slide" id="center-slide">
                    <img src="assests/images/digital-marketing-agency-dubai/img-1.png" alt="">
                    <div class="info">
                        <h5 class="fw-bold-web">Local Expertise</h5>
                        <p>Deep understanding of Dubai's market and audience.</p>
                    </div>
                </div>

                <div class="slide right-slide">
                    <img src="assests/images/website-designer/img-2.jpg" alt="">
                </div>
            </div>

            <button class="slider-btn next-btn">
                <img src="assests/images/android-app-development/right-arrow.png" alt="right-arrow">
            </button>
        </div>

        <p class="text-white fs-18 fw-400 mt-10">START YOUR MARKETING JOURNEY TODAY!</p>
        <button class="start-btn">START NOW!</button>
        <div class="">
            <?php
            include("components/agency-award-section.php");
            ?>
        </div>

    </div>
    <script>
        const centerSlide = document.getElementById("center-slide").querySelector("img");
        const infoBox = document.getElementById("center-slide").querySelector(".info");

        const slidesData = [
            {
                img: "assests/images/digital-marketing-agency-dubai/img-2.png",
                title: "Local Expertise",
                text: "Deep understanding of Dubai's market and audience."
            },
            {
                img: "assests/images/digital-marketing-agency-dubai/img-2.png",
                title: "RESPONSIVE WEBSITES",
                text: "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
            },
            {
                img: "assests/images/digital-marketing-agency-dubai/img-2.png",
                title: "SEO OPTIMIZED",
                text: "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
            }
        ];

        let current = 0;

        function updateCenterSlide() {
            centerSlide.src = slidesData[current].img;
            infoBox.querySelector("h5").innerText = slidesData[current].title;
            infoBox.querySelector("p").innerText = slidesData[current].text;
        }

        document.querySelector(".next-btn").addEventListener("click", () => {
            current = (current + 1) % slidesData.length;
            updateCenterSlide();
        });

        document.querySelector(".prev-btn").addEventListener("click", () => {
            current = (current - 1 + slidesData.length) % slidesData.length;
            updateCenterSlide();
        });

        updateCenterSlide();
    </script>
</kamis>