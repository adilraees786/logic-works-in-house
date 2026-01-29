<style>
    .main-heading {
        text-align: center;
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 20px;
        color: white;
    }

    .slider-section {
        color: #fff;
        padding: 10px 0;
    }

    .slider-text {
        padding: 40px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .slider-text>div {
        max-height: 500px;
        overflow-y: auto;
    }

    .slider-buttons {
        text-align: right;
    }

    .slider-buttons button {
        margin-left: 10px;
        margin-bottom: 10px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        display: none;
    }

    .slider-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-item .row {
        min-height: 500px;
        align-items: stretch;
    }

    @media (max-width: 768px) {
        .slider-text {
            padding: 20px;

        }

        .slider-text>div {
            max-height: 300px;
        }

        .slider-buttons {
            text-align: center;
        }

        .slider-image {
            max-height: 250px;
            object-fit: contain;
        }

        .main-heading {
            font-size: 30px;
        }
    }

    @media (max-width: 500px) {
        .main-heading br {
            display: none;
        }
    }
</style>


<body>
    <section class="slider-section">
        <h2 class="main-heading">Get Complete Email Marketing <br> Service in Dubai</h2>
        <p class="exter-para mb-30">Our full-suite email marketing service in Dubai covers everything needed to run high-performing campaigns from strategy to execution and optimization.</p>
        <div class="container">

            <div id="emailSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner-email">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assests/images/Email-Marketing-dubai/service-image.webp"
                                    class="img-fluid slider-image" alt="Slide 1" />
                            </div>
                            <div class="col-md-6 slider-text">
                                <div>
                                    <h2 class="fw-bold">Email Strategy & Planning</h2>
                                    <p class="text-white">We create email marketing that is in line with your business
                                        objectives and target market in Dubai. Our team evaluates your present customer
                                        base and finds the opportunities to develop it with the help of strategic email
                                        communication. Planning in detail will guarantee that each campaign will have
                                        its purpose within your sales funnel.</p>
                                    <p class="text-white">A strategic approach includes competitor analysis, audience
                                        segmentation, and content calendar development. We develop road maps that will
                                        steer your email marketing programs throughout the year. Such a basis
                                        facilitates a smooth flow of messages and enhances a better relationship with
                                        customers in the long run.</p>

                                </div>
                                <div class="slider-buttons mt-4">
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="prev"><img
                                            src="assests/images/ai-development/arrow-1.webp"
                                            alt="email-btn-prev"></button>
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="next"><img
                                            src="assests/images/ai-development/arrow-2.webp"
                                            alt="emai-btn-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assests/images/Email-Marketing-dubai/email-ser-img-2.webp"
                                    class="img-fluid slider-image" alt="Slide 2" />
                            </div>
                            <div class="col-md-6 slider-text">
                                <div>
                                    <h2 class="fw-bold">Email Design & Content Creation</h2>
                                    <p class="text-white">Our design team creates creative emails that portray your
                                        brand image and attract the attention of the reader at first sight. All email
                                        templates are mobile responsive and user-friendly. Content creation focuses on
                                        clear messaging that drives specific actions from your audience.</p>
                                    <p class="text-white">All emails are professional, with the touch of your own brand
                                        voice and personality. We write subject lines which enhance open rates and
                                        content on the body which stimulates clicks. Both visual elements and text
                                        interact to produce captivating experiences that would turn readers into
                                        customers.</p>
                                    <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt mollit anim id est laborum.</p>
                                    <p class="text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco </p> -->
                                </div>
                                <div class="slider-buttons mt-4">
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="prev"><img
                                            src="assests/images/ai-development/arrow-1.webp"
                                            alt="email-btn-prev"></button>
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="next"><img
                                            src="assests/images/ai-development/arrow-2.webp"
                                            alt="emai-btn-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assests/images/Email-Marketing-dubai/email-ser-img-3.webp"
                                    class="img-fluid slider-image" alt="Slide 3" />
                            </div>
                            <div class="col-md-6 slider-text">
                                <div>
                                    <h2 class="fw-bold">Marketing Automation & Workflows</h2>
                                    <p class="text-white">We create automated email chains that develop leads and turn
                                        prospects into paying clients. Smart workflows trigger based on customer
                                        behavior, purchase history, and engagement patterns. Automation also saves time
                                        and provides personalized messages at the most appropriate time.</p>
                                    <p class="text-white">Advanced work flows contain welcome series, cart recovery and
                                        retention campaigns. We set up triggers, which react to certain actions, and
                                        make sure that the relevant communication is provided during the customer
                                        journey. These systems work continuously to generate revenue while you focus on
                                        other business activities.</p>
                                    <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt mollit anim id est laborum.</p>
                                    <p class="text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco </p> -->
                                </div>
                                <div class="slider-buttons mt-4">
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="prev"><img
                                            src="assests/images/ai-development/arrow-1.webp"
                                            alt="email-btn-prev"></button>
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="next"><img
                                            src="assests/images/ai-development/arrow-2.webp"
                                            alt="emai-btn-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assests/images/Email-Marketing-dubai/email-ser-img-4.webp"
                                    class="img-fluid slider-image" alt="Slide 3" />
                            </div>
                            <div class="col-md-6 slider-text">
                                <div>
                                    <h2 class="fw-bold">List Building & Segmentation</h2>
                                    <p class="text-white">Our team uses effective strategies to increase your email
                                        subscriber count of qualified leads who are actually interested in purchasing
                                        your products or services. We design lead magnets, opt-in forms, and landing
                                        pages, which appeal to the right audience. Segmentation makes sure that the
                                        messages hit the people who will be most likely to respond and buy.</p>
                                    <p class="text-white">List management involves cleaning, preference and behavioral
                                        tracking. Our subscribers are grouped according to their demographics and
                                        interests and purchase behavior so that they can be targeted on messages. This
                                        methodology will enhance the relevance and enhance overall campaign performance
                                        of all email communications.</p>
                                    <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt mollit anim id est laborum.</p>
                                    <p class="text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco </p> -->
                                </div>
                                <div class="slider-buttons mt-4">
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="prev"><img
                                            src="assests/images/ai-development/arrow-1.webp"
                                            alt="email-btn-prev"></button>
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="next"><img
                                            src="assests/images/ai-development/arrow-2.webp"
                                            alt="emai-btn-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assests/images/Email-Marketing-dubai/email-ser-img-5.webp"
                                    class="img-fluid slider-image" alt="Slide 3" />
                            </div>
                            <div class="col-md-6 slider-text">
                                <div>
                                    <h2 class="fw-bold">Email Analytics & Reporting</h2>
                                    <p class="text-white">Every email campaign is carefully tracked and analyzed to
                                        measure results against your goals. We monitor opens, clicks, conversions, and
                                        revenue for each campaign. Clear reports show what content connects best with
                                        your audience.</p>
                                    <p class="text-white">Data insights guide future improvements and smarter budget
                                        use. We spot trends, top-performing content, and the best sending times for your
                                        subscribers. Ongoing optimization ensures your email marketing Dubai keeps
                                        delivering stronger results over time.</p>
                                    <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt mollit anim id est laborum.</p>
                                    <p class="text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco </p> -->
                                </div>
                                <div class="slider-buttons mt-4">
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="prev"><img
                                            src="assests/images/ai-development/arrow-1.webp"
                                            alt="email-btn-prev"></button>
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="next"><img
                                            src="assests/images/ai-development/arrow-2.webp"
                                            alt="emai-btn-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 6 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assests/images/Email-Marketing-dubai/email-ser-img-6.webp"
                                    class="img-fluid slider-image" alt="Slide 3" />
                            </div>
                            <div class="col-md-6 slider-text">
                                <div>
                                    <h2 class="fw-bold">Newsletter Management</h2>
                                    <p class="text-white">We design and manage newsletters that keep your audience
                                        updated and engaged with your business. Content includes industry news, company
                                        updates, and useful tips that build your brand’s authority. Regular
                                        communication builds trust and keeps your business in focus.</p>
                                    <p class="text-white">Our newsletter strategy covers content planning, consistent
                                        design, and tracking subscriber engagement. We mix promotional and educational
                                        content to keep readers interested. This method strengthens customer
                                        relationships and opens doors for more sales and referrals.</p>
                                    <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt mollit anim id est laborum.</p>
                                    <p class="text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco </p> -->
                                </div>
                                <div class="slider-buttons mt-4">
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="prev"><img
                                            src="assests/images/ai-development/arrow-1.webp"
                                            alt="email-btn-prev"></button>
                                    <button class="btn" data-bs-target="#emailSlider" data-bs-slide="next"><img
                                            src="assests/images/ai-development/arrow-2.webp"
                                            alt="emai-btn-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var myCarousel = document.getElementById('emailSlider');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,  
            ride: 'carousel'
        });
    });
</script> -->