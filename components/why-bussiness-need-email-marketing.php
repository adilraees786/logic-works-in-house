<style>
 

    .left-section img {
        max-width: 100%;
        height: auto;
    }

    .right-section {
        background: url("./assests/images/email-marketing-agency/need-img-2.webp") no-repeat center center / cover;
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
        font-weight: 700;
    }

    /* Responsive Styling */
    @media (max-width: 992px) {
        .right-section {

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

        .hero-section h2 {
            font-size: 30px;
        }

      
    }
</style>


<body>

    <!-- Hero Section -->
    <section class="hero-section">

        <div class="row align-items-center">
            <!-- Left Section -->
            <div class="col-lg-6 mb-4 mb-lg-0 left-section text-center">
                <img src="./assests/images/email-marketing-agency/need-img-1.webp" alt="Business Meeting"
                    class="img-fluid">
            </div>

            <!-- Right Section -->
            <div class="col-lg-6 right-section">
                <div class="content-wrapper">
                    <h2 class="text-white fs-50 fw-600">Industries We Serve with Email Marketing</h2>
                    <!-- <p class="text-white fs-4"></p> -->
                    <p class="hero-description">
                        Logic Works is a full service email marketing agency. We support businesses in e-commerce,
                        healthcare, education, technology, and local services. Our campaigns help brands connect with
                        customers and improve engagement. All strategies drive measurable growth through focused email
                        marketing solutions.
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