<style>
    .creative-heading {
        color: white;
        font-size: 55px;
        font-weight: 700;
        line-height: 106px;
        letter-spacing: 0%;


    }



    .card-custom {
        background-color: #141414;
        border: none;
        border-radius: 12px;
        padding: 20px;
        height: 100%;
        margin-top: 20px;
    }

    .icon-box {
        position: absolute;
        margin-top: -50px;
        background-color: #9142EF;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .icon-box img {

        width: 40px;
        height: 40px;

    }

    .card-title {
        font-weight: 700;
        margin-bottom: 8px;
        font-size: 25px;
        color: white;
        line-height: 40px;
        margin-top: 20px;
        line-height: 30px;
    }

    .card-text {
        font-size: 20px;
        color: white;
        margin-bottom: 12px;
        line-height: 30px;
        min-height: 60px;
    }

    @media (max-width:770px) {
        .creative-heading {
            font-size: 40px;
            line-height: 50px;

        }

        /* .icon-box {
            position: none !important;
            margin-top: -39px;
        } */

    }
    @media (max-width:600px) {
        .creative-heading {
            font-size: 30px;
            line-height: 1.2;
          
        }

       

    }
</style>


<body>

    <div class="container py-5">
        <div>
            <div class="text-center">
                <h2 class="creative-heading mb-3">How We Capture <span style="color: #9142EF">Leads</span> for You
                </h2>

            </div>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="./assests/images/lead-generation/lead-1.webp" alt="lead-gen-icon-1">
                        </div>
                        <div class="card-title">Custom Website Design</div>
                        <p class="text-white">Engaging websites designed to capture and convert leads.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="./assests/images/lead-generation/lead-2.webp" alt="lead-gen-icon-2">
                        </div>
                        <div class="card-title">Social Media Marketing</div>
                        <p class="text-white">Targeted campaigns build awareness and attract qualified leads.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="./assests/images/lead-generation/lead-3.webp" alt="lead-gen-icon-3">
                        </div>
                        <div class="card-title">Email Marketing</div>
                        <p class="text-white">Personalized emails nurture prospects and drive consistent sales.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-custom d-flex flex-column">
                        <div class="icon-box">
                            <img src="./assests/images/lead-generation/lead-4.webp" alt="lead-gen-icon-4">
                        </div>
                        <div class="card-title">Paid Advertising</div>
                        <p class="text-white">Data-driven ads maximize visibility and generate steady leads.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>