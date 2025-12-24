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
        max-width: 70%;
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
                    <img src="./assests/images/health-care-app/about-img.webp" alt="App-dev-healthcare"
                        class="mockup-img">
                </div>
                <div class="col-md-6 about-text">
                    <h2>Building Secure, Patient-Centric Apps</h2>
                    <p>
                        As a Healthcare App Development Company, Logic Works builds reliable digital health platforms
                        for clinics and medical brands. Our team creates solutions that secure patient records and
                        support streamlined care journeys. With Healthcare App Development in Dubai, every product meets
                        strict medical rules. It also follows the standards for safety and performance in Healthcare
                        Mobile App Development Services in Dubai.
                    </p>
                    <ul>
                        <li>200+ Healthcare Apps Delivered</li>
                        <li>Certified mHealth App Developers Dubai</li>
                        <li>HIPAA / GDPR-Compliant Security Frameworks</li>
                        <li>EMR & EHR Software Solutions UAE</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>