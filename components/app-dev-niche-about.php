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
    }
</style>

<body>

    <section class="about-section">
        <div class="container">
            <div class="row about-content">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="./assests/images/android-real-estate-app-development-company/about-img.webp" alt="App-real-state-Mockup"
                        class="mockup-img">
                </div>
                <div class="col-md-6 about-text">
                    <h2>About Us</h2>
                    <p>
                        At Logic Works, we specialize in creating innovative, user-friendly, and scalable mobile
                        applications that help businesses grow and succeed in the digital world. With a team of
                        experienced developers, designers, and strategists, we deliver end-to-end app development
                        solutions tailored to your unique goals.
                    </p>
                    <ul>
                        <li>100+ Apps Delivered</li>
                        <li>Expert iOS & Android Developers</li>
                        <li>End-to-End Support</li>
                        <li>Agile & Scalable Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>