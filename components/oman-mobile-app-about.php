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
                <img src="./assests/images/mobile-app-development-company-oman/about-left-image.webp"
                    alt="App-oman-Mockup" class="mockup-img">
            </div>
            <div class="col-md-6 about-text">
                <h2>Who We Are</h2>
                <p>
                    Logic Works stands as a leading Mobile App Development Company in Oman, building reliable digital
                    infrastructures for businesses that value endurance and refined performance. As an experienced App
                    Development Agency in Oman, we create systems engineered for accuracy and safeguarded by skilled
                    Mobile App Developers in Oman who strengthen data protection and operational confidence. Every
                    project shaped through our tailored Oman mobile developers, Mobile App Development Services in Oman
                    aligns with regulatory expectations and reflects the precision of a trusted Mobile App Development
                    Company.
                </p>
                <ul>
                    <li>200+ Custom Mobile Solutions Delivered</li>
                    <li>Certified Android Finance App Developers</li>
                    <li>Enterprise-Level Security Frameworks</li>
                    <li>Compliance-Centered Development Expertise</li>
                </ul>
            </div>
        </div>
    </div>
</section>