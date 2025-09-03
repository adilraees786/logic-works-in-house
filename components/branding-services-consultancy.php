

<head>
   

  
    <style>
        .hero-section {
            padding: 10px 0;
          
        }
        .hero-title {
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
            line-height: 35px;
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
            .hero-title {
                font-size: 25px;
            }

            .service-image {
               /* height: 150px;  */
            }

            .middle-image {
                /* height: 80px; */
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div>
            <div class="hero-section">
                <div class="">
                    <h1 class="hero-title">Our Branding Services</h1>
                    <p class="hero-tagline">Comprehensive Branding Solutions for Business Success</p>
                </div>
            </div>

       
            <section class="services-section">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-4 col-md-6">
                            <div class="service-column">
                                <img src="assests/images/branding-consultancy/image-1.jpg" alt="Branding Services"
                                    class="service-image">
                                <h3 class="service-title">Branding</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-column middle-column">
                                <div class="service-column">
                                    <img src="assests/images/branding-consultancy/image-2.jpg" alt="Logo Designing"
                                        class="service-image middle-image">
                                    <h3 class="service-title">Logo Designing</h3>
                                </div>
                                <div class="service-column">
                                    <img src="assests/images/branding-consultancy/image-3.jpg"
                                        alt="Web Design & Development" class="service-image middle-image">
                                    <h3 class="service-title">Web Design & Development</h3>
                                </div>
                            </div>
                        </div>

                     
                        <div class="col-lg-4 col-md-6">
                            <div class="service-column">
                                <img src="assests/images/branding-consultancy/image-4.jpg" alt="Content Creation"
                                    class="service-image">
                                <h3 class="service-title">Content Creation</h3>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
