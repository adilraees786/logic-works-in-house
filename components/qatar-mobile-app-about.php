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
                <img src="./assests/images/mobile-app-development-company-qater/about-left-image.webp"
                    alt="App-finance-Mockup" class="mockup-img">
            </div>
            <div class="col-md-6 about-text">
                <h2>Who We Are</h2>
                <p>
                    Logic Works operates as one of the top Software development companies in Qatar, creating robust
                    digital ecosystems for organizations whose demands include longevity, clarity, and smooth
                    performance. As an experienced App Development Agency based in Qatar, we craft platforms that work
                    with exactness and stability, enabled by experienced Mobile App Developers in Qatar who know exactly
                    how to secure the data and ensure business continuity. Each solution created under our customized
                    Mobile App Development Services in Qatar caters to operational objectives with maximum adherence to
                    strict technological standards, reflecting the depth of a trusted Mobile App Development Company.
                </p>
                <ul>
                    <li>200+ Custom Mobile Solutions Delivered</li>
                    <li>Certified Mobile App Developers in Qatar</li>
                    <li>Enterprise-Level Security Frameworks</li>
                    <li>Compliance-Centered Development Expertise</li>
                </ul>
            </div>
        </div>
    </div>
</section>