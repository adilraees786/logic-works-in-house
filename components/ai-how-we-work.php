<style>
    .creative-heading-lead {
        color: white;
        font-size: 69px;
        font-weight: 700;
        line-height: 90px;
        letter-spacing: 0%;
    }

    .card-custom-lead {
        background: #000;
        padding: 20px;
        height: 100%;
        margin-top: 20px;
        border-radius: 10px;
       
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
     
        font-size: 25px;
        color: white;
        margin-top: 20px;
        line-height: 30px;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .creative-heading-lead {
            font-size: 48px;
            line-height: 60px;
        }
    }

    @media (max-width: 768px) {
        .creative-heading-lead {
            font-size: 38px;
            line-height: 50px;
        }
    }
</style>

<body style="background: #111;">
    <div class="container py-5">
        <div>
            <div class="text-center">
                <h2 class="creative-heading-lead mb-3">
                    How We Work
                </h2>
            </div>

          
            <div class="row justify-content-center g-4 text-center">
               
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                            <img src="./assests/images/ai-for-business-automation/cap-icon-1.webp" alt="">
                        </div>
                        <div class="card-title-lead">Assessment & Discovery</div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                            <img src="./assests/images/ai-for-business-automation/icon-2.webp" alt="">
                        </div>
                        <div class="card-title-lead">Strategy & Design</div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                         <img src="./assests/images/ai-for-business-automation/icon-3.webp" alt="">
                        </div>
                        <div class="card-title-lead">Development & Integration</div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                             <img src="./assests/images/ai-for-business-automation/icon-4.webp" alt="">
                        </div>
                        <div class="card-title-lead">Deployment & Testing</div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="card-custom-lead d-flex flex-column align-items-center text-center">
                        <div class="icon-box-lead">
                            <img src="./assests/images/ai-for-business-automation/icon-5.webp" alt="">
                        </div>
                        <div class="card-title-lead">Maintenance, Support & Optimization</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>