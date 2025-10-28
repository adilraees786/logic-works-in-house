<style>
    .hero-section {
        padding: 10px 0;

    }

    .hero-title-brand {
        color: white;
        font-size: 50px;
        font-weight: 700;
        letter-spacing: normal;
    }

    .hero-tagline {
        color: white;
        font-size: 21px;
        font-weight: 500;
        letter-spacing: 0.17px;
        line-height: 1.2;
    }

    .service-column {
        margin-bottom: 35px;
        position: relative;
    }

    .service-image {
        /* width: 100%;
            height: 200px; */
        object-fit: cover;

    }

    .service-title {
        color: white;
        font-size: 20px;
        font-weight: 500;
        margin: 0;
        text-align: left;
        position: absolute;
        bottom: 15px;
        left: 4%;

        white-space: nowrap;
    }

    .middle-column {
        display: flex;
        flex-direction: column;

    }

    .middle-image {
        /* height: 100px; */
    }



    @media (max-width: 768px) {
        .hero-title-brand {
            font-size: 30px;
        }

        .service-image {
            /* height: 150px;  */
        }

        .middle-image {
            /* height: 80px; */
        }

        .hero-section {
            padding: 0px 0px;

        }
    }
</style>


<body>

    <div class="container">
        <div>
            <div class="hero-section">
                <div class="">
                    <h6 class="hero-title-brand">Our Branding Consulting Services</h6>
                    <p class="hero-tagline">Professional Brand Solutions for Business Success</p>
                </div>
            </div>


            <section class="services-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="service-column">
                                <img src="assests/images/branding-consultancy/image-1.webp" alt="Branding Services"
                                    class="service-image">
                                <h3 class="service-title">Brand Strategy Development</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-column middle-column">
                                <div class="service-column">
                                    <img src="assests/images/branding-consultancy/image-2.webp" alt="Logo Designing"
                                        class="service-image middle-image">
                                    <h3 class="service-title">Visual Identity Design</h3>
                                </div>
                                <div class="service-column">
                                    <img src="assests/images/branding-consultancy/image-3.webp"
                                        alt="Web Design & Development" class="service-image middle-image">
                                    <h3 class="service-title">Brand Messaging Framework</h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="service-column">
                                <img src="assests/images/branding-consultancy/image-4.webp" alt="Content Creation"
                                    class="service-image">
                                <h3 class="service-title">Brand Audit & Analysis</h3>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>