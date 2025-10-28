<style>
    .creative-heading-lead {
        color: white;
        font-size: 55px;
        font-weight: 700;
        line-height: 90px;
        letter-spacing: 0%;
    }

    .card-custom-lead {
        background: #000;
        padding: 20px;
        height: 100%;
        margin-top: 20px;
    }

    .icon-box-lead {
        background-color: #9142EF;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .icon-box-lead img {
        width: 40px;
        height: 40px;
    }

    .card-title-lead {
        font-weight: 700;
        margin-bottom: 8px;
        font-size: 25px;
        color: white;
        margin-top: 20px;
        line-height: 30px;
    }

    .card-text {
        font-size: 15px;
        color: white;
        line-height: 20px;

    }

    .process-btn-lead .btn-consult {

        background: linear-gradient(to right, #9441EB, #F67B80);
        font-size: 20px;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 10px;
        font-weight: bold;
    }

    @media (max-width: 770px) {
        .creative-heading-lead {
            font-size: 30px;
            line-height: 40px;
        }

        .process-btn-lead .btn-consult {
            font-size: 15px;
        }
    }
</style>

<body>
    <div class="container py-5">
        <div>
            <div class="text-center">
                <h2 class="creative-heading-lead mb-3">
                    How Our <span style="color: #9142EF;">Process Builds</span> Steady Leads
                </h2>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                            <img src="./assests/images/lead-generation/gen-icon-1.webp" alt="lead-process-icon-1">
                        </div>
                        <div class="card-title-lead">Research</div>
                        <p class="card-text text-center">We analyze industry trends, competitor positioning, and
                            customer behaviors to uncover insights guiding effective lead generation strategies.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                            <img src="./assests/images/lead-generation/gen-icon-2.webp" alt="lead-process-icon-2">
                        </div>
                        <div class="card-title-lead">Build</div>
                        <p class="card-text text-center">We design structured campaigns blending email, social, and
                            content distribution with strategic messaging targeting pain points.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                            <img src="./assests/images/lead-generation/gen-icon-3.webp" alt="lead-process-icon-3">
                        </div>
                        <div class="card-title-lead">Engage</div>
                        <p class="card-text text-center">We deliver personalized outreach, track prospect responses
                            instantly, and maintain steady communication through automated intelligent follow-ups.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                            <img src="./assests/images/lead-generation/gen-icon-4.webp" alt="lead-process-icon-4">
                        </div>
                        <div class="card-title-lead">Convert</div>
                        <p class="card-text text-center">We qualify leads using set readiness criteria, then smoothly
                            transfer them to sales with complete context.</p>
                    </div>
                </div>
                <div class="process-btn-lead text-center">
                    <a href="#"><button class="btn-consult">Secure High-Quality Leads For Growth</button></a>
                </div>
            </div>
        </div>
    </div>
</body>