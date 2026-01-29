<style>
    .hero-section {
        /* padding: 60px 0; */
        /* position: relative; */
        margin-top: 60px;
    }

    .left-section-email img {
        max-width: 100%;
        height: auto;
    }

    .right-section {
        background: url("./assests/images/Email-Marketing-dubai/right-side-bg-image.webp") no-repeat center center / cover;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        color: white;
        height: 100%;
        max-height: 650px;
        text-align: center;
        position: absolute;
        right: 20px;
    }

    .content-wrapper {
        max-width: 500px;
    }

    .hero-description {
        font-size: 18px;
        line-height: 1.5;
        color: white;
        opacity: 0.9;
        margin-top: 20px;
    }

    .success-anchor-email a {
        font-size: 18px;
        text-transform: uppercase;
        background-color: white;
        padding: 10px 30px;
        color: #582499;
        text-decoration: none;
        display: inline-block;
        margin-top: 30px;
        border-radius: 5px;
    }

    .success-anchor-email a:hover {
        background-color: #582499;
        color: white;
    }

    /* Responsive Styling */
    @media (max-width: 992px) {
        .right-section {
            margin-top: 30px;
            min-height: 300px;
            position: relative;
            right: 0px;
            display: flex;
            justify-content: center;

            align-items: center;
            text-align: center;

        }
    }


    @media (max-width: 768px) {
        .hero-description {
            font-size: 16px;
        }


        .success-anchor-email a {
            font-size: 16px;
            padding: 10px 20px;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            padding: 30px 0;
        }

        .content-wrapper h2 {
            font-size: 30px;
        }

        .content-wrapper p {
            font-size: 16px;
        }
    }
</style>


<body>

    <!-- Hero Section -->
    <section class="hero-section">

        <div class="row align-items-center">
            <!-- Left Section -->
            <div class="col-lg-6 mb-4 mb-lg-0 left-section-email text-center">
                <img src="./assests/images/Email-Marketing-dubai/lefftt-img.webp" alt="Business Meeting"
                    class="img-fluid">
            </div>

            <!-- Right Section -->
            <div class="col-lg-6 right-section">
                <div class="content-wrapper">
                    <h2 class="text-white fs-42 fw-700">Facing Low Email Engagement and Sales Issues?<h2>
            
                            <p class="hero-description">
                                Low email engagement rates reduce your marketing effectiveness and limit business growth
                                potential. Logic Works creates email marketing Dubai campaigns that people actually want
                                to read and act upon. We create relevant content, send at the right time, and use clear
                                calls-to-action. These strategies raise open rates, increase clicks, and drive more
                                sales.
                            </p>
                            <!-- <div class="success-anchor-email">
                                <a href="#">Read More</a>
                            </div> -->
                </div>
            </div>
        </div>

    </section>


</body>