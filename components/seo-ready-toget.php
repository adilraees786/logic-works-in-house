<style>
    .seo-section {
        background: url('assests/images/seo-niche-design/seo-image.webp') no-repeat center center;
        background-size: cover; 
        background-attachment: scroll; 
        min-height: 70vh;
        position: relative;
        z-index: 1;
    }

  
    .seo-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5); 
        z-index: -1;
    }

    .bg-image {
        height: 100%;
    }

    .text-section {
        padding: 30px;
    }

    .text-section h2 {
        font-size: 55px;
        font-weight: 700;
        line-height: 1.2;
    }

    .text-section p {
        color: #CACACA;
        font-size: 18px;
        font-weight: 400;
    }

    .text-purple {
        color: #9142EF;
    }

    .btn-primary {
        background-color: #c948e4;
        border: none;
    }

    .btn-primary:hover {
        background-color: #a137c1;
    }

   
    @media (max-width: 768px) {
        .text-section h2 {
            font-size: 36px;
        }

        .text-section p {
            font-size: 16px;
        }

        .seo-section {
            min-height: 60vh;
            background-position: center top;
        }
    }

    @media (max-width: 480px) {
        .text-section {
            padding: 20px;
        }

        .text-section h2 {
            font-size: 28px;
        }

        .text-section p {
            font-size: 14px;
        }
    }
</style>

<body>
    <section class="seo-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side BG hatana better hai mobile ke liye -->
                <div class="col-md-6 d-none d-md-block bg-image"></div>

                <!-- Right Side with Content -->
                <div class="col-md-6 text-white text-section">
                    <h2>Ready to Get <br> <span class="text-purple">Found Online?</span></h2>
                    <p>Let’s transform your website into a lead-generating powerhouse. At Logic Works, we combine
                        creativity with technical excellence to deliver SEO that actually works.</p>
                    <a href="#" class="btn btn-primary mt-3">Request a Free SEO Consultation</a>
                </div>
            </div>
        </div>
    </section>
</body>
