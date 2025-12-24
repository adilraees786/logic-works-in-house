<style>
    .about-section {
        background: url('./assests/images/app-development-niche-design/about-bg.webp') no-repeat center center/cover;

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
        font-size: 20px;
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

    @media (max-width: 768px) {
        .about-content {
            flex-direction: column-reverse;
        }
    }

    @media (max-width: 600px) {
        .about-text h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .about-section {
            padding: 40px 0;
        }
    }
</style>



    <section class="about-section">
        <div class="container">
            <div class="row about-content">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="./assests/images/android-real-estate-app-development-company/about-img.webp"
                        alt="App-real-state-Mockup" class="mockup-img">
                </div>
                <div class="col-md-6 about-text">
                    <h2>Shaping the Future of Property Technology</h2>
                    <p>
                        As a Real Estate App Development Company, Logic Works builds reliable property technology
                        solutions for agencies and developers. Our Dubai real estate app developers create platforms
                        that secure data and simplify every stage of real estate operations. With our Real Estate Mobile
                        App Development Dubai expertise, each product aligns with Real Estate App Development services
                        Dubai standards and supports UAE real estate Technology solutions.
                    </p>
                    <ul>
                        <li>200+ Real Estate Apps Delivered</li>
                        <li>Certified iOS & Android Developers UAE</li>
                        <li>Enterprise-Grade Property Tech Systems</li>
                        <li>Compliance-Ready Real Estate Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

