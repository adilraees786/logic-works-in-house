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
        font-weight: 700;
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



<section class="about-section">
    <div class="container">
        <div class="row about-content">
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <img src="./assests/images/Retail-App/about-left-image.webp"
                    alt="App-retails-Mockup" class="mockup-img">
            </div>
            <div class="col-md-6 about-text">
                <h2>Who We Are</h2>
                <p>
                    Logic Works Retail App  Android UAE applications for banks, fintech startups, and investment
                    firms. We build mobile platforms that handle sensitive transactions securely. Our team understands
                    regulatory compliance and financial security standards. Each app we deliver protects user accounts
                    and meets strict industry requirements.
                </p>
                <ul>
                    <li>200+ Financial Apps Built</li>
                    <li>Certified Android Finance App Developers</li>
                    <li>Bank-Level Security Standards</li>
                    <li>Regulatory Compliance Expert</li>
                </ul>
            </div>
        </div>
    </div>
</section>