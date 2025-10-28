<style>
    .about-section {

        padding: 80px 0;
    }

    .about-content {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-text h2 {
        color: white;
        font-size: 65px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .seo-span {
        color: #9142EF;
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

    .btn-consult {
        margin-top: 25px;
        background: linear-gradient(to right, #9441EB, #F67B80);
        font-size: 20px;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 10px;
        font-weight: bold;
    }

    @media (max-width: 770px) {


        .about-text h2 {
            font-size: 40px;
            text-align: center;

        }
    }

    @media (max-width: 600px) {


        .about-text h2 {
            font-size: 30px;


        }
    }
</style>

<body>

    <section class="about-section">
        <div class="">
            <div class="row about-content">
                <div class="col-lg-6 col-md-12 text-center mb-4 mb-md-0">

                    <img src="./assests/images/lead-generation/why-lead-left.webp" alt="lead-gen-left"
                        class="mockup-img">
                </div>
                <div class="col-lg-6  col-md-12 about-text">
                    <h2>Why Choose <span class="seo-span">Logic Works</span> for Lead Acquisition</h2>
                    <p>
                        We focus on bringing you real leads that turn into sales. Our process uses clear targeting,
                        smart systems, and constant improvements. You get prospects who fit your business needs and are
                        ready to talk. The goal is simple: more sales, faster growth, less wasted effort.
                    </p>

                    <ul>
                        <li>Clear and Accurate Targeting Methods</li>
                        <li>Smart and Reliable Lead Qualification</li>
                        <li>Fast and Consistent Prospect Delivery</li>
                        <li>Ongoing Performance and Process Improvement</li>

                    </ul>
                    <a href="#"><button class="btn-consult">See Why Businesses Trust Us</button></a>
                </div>
            </div>
        </div>
    </section>


</body>