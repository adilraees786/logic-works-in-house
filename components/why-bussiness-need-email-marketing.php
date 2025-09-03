

<head>
  





    <style>
        .hero-section {
            /* padding: 60px 0; */
            /* position: relative; */
        }

        .left-section img {
            max-width: 100%;
            height: auto;
        }

        .right-section {
            background: url("./assests/images/email-marketing-agency/need-img-2.png") no-repeat center center / cover;
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

            .content-wrapper h1 {
                font-size: 28px;
            }

            .content-wrapper p {
                font-size: 14px;
            }
        }
    </style>


<body>

    <!-- Hero Section -->
    <section class="hero-section">

        <div class="row align-items-center">
            <!-- Left Section -->
            <div class="col-lg-6 mb-4 mb-lg-0 left-section text-center">
                <img src="./assests/images/email-marketing-agency/need-img-1.png" alt="Business Meeting"
                    class="img-fluid">
            </div>

            <!-- Right Section -->
            <div class="col-lg-6 right-section">
                <div class="content-wrapper">
                    <h1 class="text-white">Why Business</h1>
                    <p class="text-white fs-4">NEED EMAIL MARKETING</p>
                    <p class="hero-description">
                        In Dubai's fast-paced, tech-driven market, staying connected with customers is essential.
                        Email marketing offers a direct, personal way to reach your audience with updates, offers,
                        and tailored content, ensuring your brand stays top-of-mind.
                    </p>
                    <div class="success-anchor-email">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


</body>

</html>