<style>
    .about-section {
        background: url('./assests/images/app-development-niche-design/about-bg.webp') no-repeat center center/cover;
        background-color: black;
        background: overlay;
        padding: 80px 0;
    }

    .about-content {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-text h2 {
        color: white;
        font-size: 55px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .about-text p {
        font-size: 20px;
        font-weight: 300;
        color: white;
        line-height: 30px;
    }

    .about-text ul {
        list-style: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .about-text ul li {
        font-size: 19px;
        font-weight: 700;
        color: white;
        margin-bottom: 10px;
        position: relative;
        padding-left: 25px;
    }

    .about-text ul li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #9547EB;
        font-weight: bold;
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
                    <img src="./assests/images/android-real-estate-app-development-company/about-left-image-hero.webp"
                        alt="App-dev-Mockup" class="mockup-img">
                </div>
                <div class="col-md-6 about-text">
                    <h2>Who We Are</h2>
                    <p>
                        Logic Works specializes in Android real estate app development for modern property businesses.
                        We create mobile apps that connect buyers, sellers, and agents in real time. Our team focuses on
                        performance, scalability, and user-friendly designs that help you close more deals and grow your
                        business faster.
                    </p>
                    <ul>
                        <li>100+ Real Estate Apps Delivered</li>
                        <li>Expert Android App Developers</li>
                        <li>Complete End-to-End Support</li>
                        <li>Agile and Scalable Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>