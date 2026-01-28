<style>
    .content-title {
        font-size: 42px;
        font-weight: bold;
        letter-spacing: 0.72px;
        color: white;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .content-subtitle-content {
        font-size: 30px;
        font-weight: 400;
        color: white;
    }

    .accordion-button {
        background-color: white !important;
        color: black;
        font-size: 20px;
        font-weight: bold;
        border: none !important;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .accordion-button:not(.collapsed) {
        background-color: white !important;
        color: black !important;
        box-shadow: none !important;

    }

    /* Hide Bootstrap default icon */
    .accordion-button::after {
        display: none;
    }

    /* Custom + / - icon */
    .toggle-icon {
        font-size: 24px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .accordion-button.collapsed .toggle-icon {
        content: '+';
    }

    .accordion-button:not(.collapsed) .toggle-icon {
        content: '-';
    }

    .accordion-body {
        background-color: #efeff0;
        color: black;
    }

    .btn-primary-btn {
        background-color: #582499;
        color: white;
        border: none;
        padding: 15px 50px;
    }

    .btn-primary-btn:hover {
        background-color: #582499 !important;
        color: white;
    }

    @media (max-width: 600px) {
        .content-title {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .content-subtitle-content {
            font-size: 20px;
            line-height: 21px;
        }
    }
</style>


<body>
    <div class="content-section py-5">
        <div class="container">
            <div>
                <div style="text-align: center;">
                    <h4 class="content-title">Why Choose Our Content Marketing Agency Dubai?</h4>
                    <p class="exter-para mb-4">Strategic content is no longer optional, it’s essential for visibility, authority, and long-term growth. Our content marketing services Dubai help businesses stand out by delivering the right message to the right audience at the right time.</p>
                    <p class="exter-para mb-4">As a creative content marketing company in Dubai, we focus on strategy first, execution second, and results always.</p>
                </div>

                <div class="row align-items-center">
                    <!-- Left Side Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="assests/images/content-marketing/branding.webp" alt="Brand Awareness"
                            class="img-fluid rounded shadow">
                    </div>

                    <!-- Right Side Tabs -->
                    <div class="col-md-6">
                        <h2 class="text-white fw-bold mb-3"><span class="fs-20">Why Your</span> Business Needs a Strong
                            Content Strategy?</h2>
                        <p class="text-white mb-4">
                          A strong content strategy helps businesses educate audiences, build trust, and stay competitive. Our professional content writing services in Dubai ensure your brand communicates clearly, consistently, and convincingly across all digital touchpoints.
                        </p>
                        <p class="text-white">With Logic Works, content becomes a growth asset, not just words on a page.</p>
                        <!-- Accordion -->
                        <div class="accordion" id="contentAccordion">
                            <!-- Accordion Item 1 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     Expert Content Strategy Development
                                        <span class="toggle-icon">-</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                     Our team researches your market deeply before creating content plans. Competitor analysis reveals content gaps your business can fill. Audience research uncovers the exact questions prospects ask before buying. Strategic planning ensures every piece of content supports SEO performance, brand positioning, and lead generation.
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 2 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Audience-Focused Content Creation
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                       Our content creation services Dubai are designed to engage real users. We craft blogs, landing pages, website copy, and branded content that speak directly to customer pain points and decision stages.
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                      Multi-Channel Content Distribution
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                     We amplify your content across websites, search engines, email campaigns, and social platforms to ensure maximum visibility and engagement.
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 4 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                     Performance-Based Optimization
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                      Content performance is continuously tracked and optimized. We refine messaging, keywords, and formats to improve rankings, traffic quality, and conversions.
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 5 -->
                            <!-- <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Transparent Results Tracking
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                        Monthly reports show exact traffic, leads, and sales generated from content
                                        efforts. Clear metrics demonstrate return on investment. Performance data
                                        informs strategy adjustments. Clients see precisely how content contributes to
                                        revenue growth.
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <a href="#" id="openPopup" class="btn btn-primary-btn">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Script to toggle + and - -->
    <script>
        document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', function () {
                setTimeout(() => {
                    document.querySelectorAll('.accordion-button').forEach(btn => {
                        const icon = btn.querySelector('.toggle-icon');
                        if (btn.classList.contains('collapsed')) {
                            icon.textContent = '+';
                        } else {
                            icon.textContent = '-';
                        }
                    });
                }, 200);
            });
        });
    </script>
</body>