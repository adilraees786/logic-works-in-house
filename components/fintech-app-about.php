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
        font-size: 40px;
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



<section class="about-section">
    <div class="container">
        <div class="row about-content">
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <img src="./assests/images/android-finance-app-development-company/about-finance-removebg-preview.webp"
                    alt="App-finance-Mockup" class="mockup-img">
            </div>
            <div class="col-md-6 about-text">
                <h2>Who Powers Your Digital Finance</h2>
                <p>
                   As a Fintech App Development Company, Logic Works engineers resilient financial platforms for institutions.
Our fintech app developers dubai architect systems that preserve data and accelerate operations.
With Fintech App Development Services, each solution aligns with Fintech App Development Dubai regulations frameworks.

                </p>
                <ul>
                    <li>200+ Fintech Platforms Delivered</li>
                    <li>Certified iOS & Android Developers UAE</li>
                    <li>Enterprise-Grade Financial Security</li>
                    <li>Compliance-Ready Fintech Solutions</li>
                </ul>
            </div>
        </div>
    </div>
</section>