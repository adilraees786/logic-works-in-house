<style>
    .section-heading-app-dev {
        color: white;
        font-weight: 700;
        font-size: 55px;
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
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;
    }

    .icon-box img {
        width: 24px;
        height: 24px;

    }

    .card-title {
        font-weight: 700;
        margin-bottom: 8px;
        font-size: 30px;
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

    .get-in-touch {
        font-weight: 600;
        font-size: 20px;
        color: white;
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        text-decoration: none;
    }

    .get-in-touch img {
        margin-left: 10px;
        width: 16px;
        height: 16px;
        fill: #9142EF;
    }

    @media (max-width: 600px) {
        .section-heading-app-dev {
            font-size: 30px;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 0px;
        }
    }
</style>


<body>

    <div class="container py-5">
        <div>
            <h2 class="section-heading-app-dev mb-4"><b>Our App</b> Development Services</h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <!-- Apple Icon SVG -->
                            <img src="./assests/images/app-development-niche-design/service-img-1.webp" alt="img-1">
                        </div>
                        <div class="card-title">iOS App Development</div>
                        <div class="card-text">Elegant, secure, and high-performance apps for Apple devices.</div>
                        <a href="#" class="get-in-touch">Get In Touch
                            <img class="arrow" src="./assests/images/ai-development/arrow-f.webp" alt="arrow-f">
                        </a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <!-- Android Icon SVG -->
                            <img src="./assests/images/app-development-niche-design/service-img-2.webp" alt="img-2">
                        </div>
                        <div class="card-title">Android App Development</div>
                        <div class="card-text">Scalable and feature-rich solutions for Android users.</div>
                        <a href="#" class="get-in-touch">Get In Touch
                            <img class="arrow" src="./assests/images/ai-development/arrow-f.webp" alt="arrow-f">
                        </a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <!-- Cross-Platform Icon SVG (React logo stylized) -->
                            <img src="./assests/images/app-development-niche-design/service-img-3.webp" alt="img-3">
                        </div>
                        <div class="card-title">Cross-Platform Development</div>
                        <div class="card-text">Build once, deploy everywhere with React Native / Flutter.</div>
                        <a href="#" class="get-in-touch">Get In Touch
                            <img class="arrow" src="./assests/images/ai-development/arrow-f.webp" alt="arrow-f">
                        </a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <!-- UI/UX Icon SVG -->
                            <img src="./assests/images/app-development-niche-design/service-img-4.webp" alt="img-4">
                        </div>
                        <div class="card-title">UI/UX Design</div>
                        <div class="card-text">Engaging and intuitive interfaces.</div>
                        <a href="#" class="get-in-touch">Get In Touch
                            <img class="arrow" src="./assests/images/ai-development/arrow-f.webp" alt="arrow-f">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>