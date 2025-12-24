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
                <img src="./assests/images/Retail-App/about-left-image.webp" alt="App-retails-Mockup"
                    class="mockup-img">
            </div>
            <div class="col-md-6 about-text">
                <h2>The Minds Behind UAE Retail Platforms</h2>
                <p>
                    As a Retail App Development Company Dubai, Logic Works delivers secure retail platforms for brands.
                    Our Dubai retail app developers design systems that safeguard data and streamline operations. With
                    Retail App Development Agency Dubai, each solution aligns with Retail mobile app development Dubai
                    regulations.
                </p>
                <ul>
                    <li>200+ Retail Apps Delivered</li>
                    <li>Certified iOS & Android Developers UAE</li>
                    <li>Enterprise-Grade Security Systems</li>
                    <li>Compliance-Ready Retail Solutions</li>
                </ul>
            </div>
        </div>
    </div>
</section>