<style>
    .about-section {

        padding: 80px 0;
    }

    .about-content {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-text h2 {
        color: white;
        font-size: 65px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .seo-span {
        color: #9142EF;

    }

    .about-text p {
        font-size: 20px;
        font-weight: 300;
        color: white;
        line-height: 30px;
    }


    .mockup-img {
        max-width: 100%;
        height: auto;
    }

    .btn-consult {
        margin-top: 25px;
        background: linear-gradient(to right, #9441EB, #F67B80);
        font-size: 20px;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 10px;
        font-weight: bold;
    }

    @media (max-width: 991.98px) {
        .about-content {
            flex-direction: column-reverse;
            text-align: center;
        }
    }

    @media (max-width:770px) {


        .about-text h2 {
            font-size: 30px;


        }
    }
</style>

<body>

    <section class="about-section">
        <div class="">
            <div class="row about-content">
                <div class="col-lg-6 col-md-12 text-center mb-md-0">

                    <img src="./assests/images/ai-for-business-automation/leftimg.webp" alt="Ai-bussiness-left"
                        class="mockup-img">
                </div>
                <div class="col-lg-6  col-md-12 about-text">
                    <h2>What Is Business <span class="seo-span">Automation with AI</span></h2>
                    <p>
                        In a fast-moving digital landscape, businesses face pressures to do more with less — to reduce
                        errors, respond quicker, and stay competitive. AI for Business Automation combines machine
                        learning, natural language processing, predictive analytics, and intelligent workflows to
                        streamline operations across sales, customer service, operations, HR and more.
                    </p>


                    <a href="#"><button class="btn-consult">See Why Businesses Trust Us</button></a>
                </div>
            </div>
        </div>
    </section>


</body>