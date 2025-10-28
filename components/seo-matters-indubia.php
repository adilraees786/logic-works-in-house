<style>
    .seo-section {
        background: url('assests/images/seo-agency-dubai/bg-img.webp') no-repeat center center/cover;
        position: relative;
        color: white;
        padding: 100px 0;
        z-index: 1;
    }

    .seo-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.6);
        /* Dark overlay */
        z-index: -1;
    }

    .seo-heading {
        font-size: 72px;
        font-weight: 900;
        line-height: 72px;
        letter-spacing: 0.58px;
    }

    .seo-subheading {
        font-size: 30px;
        font-weight: 300;
        line-height: 30px;
        letter-spacing: 0.73px;
    }

    .seo-image {
        max-width: 100%;

        box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        position: relative;
        z-index: 2;
    }

    .seo-text {
        background: white;

        padding: 80px;

        margin-left: -100px;
        /* To overlap image */
        text-align: center;
        position: relative;
        z-index: 3;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    .seo-text p {
        font-size: 18px;
        font-weight: 300;
        line-height: 21px;
        letter-spacing: 0.54px;
        color: #9696A2;
    }

    .seo-text h6 {
        color: black;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;

    }

    .seo-text .success-anchor a {
        font-size: 16px;
        text-transform: uppercase;
        background-color: #8E3DF3;
        padding: 18px 0px 18px 50px;
        color: #fff;
        text-decoration: none;


    }

    .seo-text .success-anchor a:hover {
        background-color: #582499;

        color: white;
    }

    .seo-text .success-anchor a span {
        background-color: #8E3DF3;
        padding: 18px 25px;
        border-left: 2px solid #fff;
        margin-left: 30px;
    }

    @media (max-width: 768px) {
        .seo-text {
            margin-left: 0px;
        }

        .seo-text h6 {
            font-size: 35px;
        }

        .seo-heading {
            font-size: 30px;
            line-height: 40px;
        }
    }

    @media (max-width: 500px) {
        .seo-text {
            padding: 26px;
        }

    }
</style>




<section class="seo-section">
    <div class="container">
        <div>
            <div class="d-flex flex-column align-items-center text-center mb-20">
                <h2 class="seo-heading">Why Businesses in Dubai Need SEO</h2>
                <h6 class="seo-subheading mt-20">SEO Helps Dubai Businesses Reach Local Customers</h6>
            </div>

            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="assests/images/seo-agency-dubai/left-img.webp" alt="SEO Image" class="seo-image">
                </div>

                <!-- Right Text -->
                <div class="col-md-6">
                    <div class="seo-text">
                        <h6>Drive Organic Traffic in a Competitive Market</h6>
                        <p>The best SEO agency in Dubai ensures your business stands out in a competitive market. Strong
                            search visibility helps attract customers who are actively searching for your services.
                        </p>
                        <p>Working with the best SEO agency in Dubai also means strategies are built around local search
                            behavior. This increases reach, builds trust, and drives consistent growth for your brand.
                        </p>
                        <div class="success-anchor mt-50">
                            <a href="#">Read More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>