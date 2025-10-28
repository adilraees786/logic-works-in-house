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
        font-weight: 600;
        margin-bottom: 20px;
    }

    .seo-span {
        color: #9142EF;
    }

    .list-heading {
        color: white;
        font-size: 32px;
        font-weight: 700;

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
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 600px) {
        .about-text h2 {
            font-size: 30px;
        }

        .list-heading {
            font-size: 30px;
        }
    }
</style>

<body>

    <section class="about-section">
        <div class="container">
            <div class="row about-content">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <h6 class="list-heading">See The Benefits Of SEO</h6>
                    <img src="assests/images/seo-niche-design/why-seo-left-image.webp" alt="App Mockup"
                        class="mockup-img">
                </div>
                <div class="col-md-6 about-text">
                    <h2><span class="seo-span">Why SEO </span>Matters for Your Business</h2>
                    <p>
                        In today’s digital-first world, being found online is no longer optional—it’s essential. SEO is
                        the foundation of long-term visibility, credibility, and growth. With the right SEO strategy,
                        your website becomes more than just an online presence—it becomes a powerful business asset.
                    </p>
                    <h6 class="list-heading">Benefits of SEO with Logic Works:</h6>
                    <ul>
                        <li>Increase organic website traffic</li>
                        <li>Build trust and credibility with your audience</li>
                        <li>Improve user experience and site performance</li>
                        <li>Generate high-quality leads and conversions</li>
                        <li>Outrank competitors in search results</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>