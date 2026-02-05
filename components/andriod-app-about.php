<style>
    .about-section {
        background: url('./assests/images/app-development-niche-design/about-bg.webp') no-repeat center center/cover;
        background-color: black;
        background: overlay;
        /* padding: 80px 0; */
    }

    .about-content {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* .about-text h2 {
        color: white;
        font-size: 42px;
        font-weight: bold;
        margin-bottom: 20px;
    } */

    .about-text p {
        font-size: 20px;
        font-weight: 600;
        color: white;
        line-height: 30px;
    }




    .mockup-img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 991px) {
        .about-content {
            flex-direction: column-reverse;
            text-align: center;
        }


    }

    @media (max-width: 600px) {
        .about-text h2 {
            font-size: 30px;
        }

        .about-section {
            padding: 40px 0px;
        }
    }
</style>

<body>

    <section class="about-section">
        <div class="container">
            <div class="row about-content">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="./assests/images/app-development-niche-design/about-left-image.webp" alt="App-dev-Mockup"
                        class="mockup-img">
                </div>
                <div class="col-md-6 about-text">
                    <h2 class="text-white same-all text-center">Android App Development Services Dubai Businesses Trust</h2>
                    <p>
                        Our android app development services Dubai businesses rely on focus on performance, security, and user experience. We build custom Android solutions that meet technical requirements and business goals.
                    </p>
                   
                </div>
            </div>
        </div>
    </section>

</body>