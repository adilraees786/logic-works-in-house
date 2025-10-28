<style>
    .about-section {
        background-color: black;
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

        line-height: 1.2;

    }

    .about-text p {
        font-size: 20px;
        font-weight: 300;
        color: #878787;
        line-height: 1.4;
    }

    .about-text ul {
        list-style: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .about-text ul li {
        font-size: 14px;
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
                    <img src="assests/images/digital-niche-design/left-image.webp" alt="App Mockup Digital"
                        class="mockup-img">
                </div>
                <div class="col-md-6 about-text">
                    <h2>Why Your Current Website Isn’t Working</h2>
                    <p>
                        Most business owners know their website should be their best salesperson—but here’s why it often
                        fails:
                    </p>
                    <ul>
                        <li>Generic, cookie-cutter design → Visitors don’t see themselves or your niche reflected.</li>
                        <li>Confusing navigation & layout → Leads bounce before taking action.</li>
                        <li>Weak messaging → Your site talks “about you” instead of solving their problem.</li>
                        <li>No clear conversion path → Too many clicks between a visitor and your offer.</li>
                        <li>Looks dated or untrustworthy → Hurts credibility in competitive markets.</li>
                        <li>Looks dated or untrustworthy → Hurts credibility in competitive markets.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>