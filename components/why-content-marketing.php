<!DOCTYPE html>
<html lang="en">

<head>
  
    <style>
        .content-title {
            font-size: 72px;
            font-weight: bold;
            letter-spacing: 0.72px;
            color: white;
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
        @media (max-width: 500px) {
            .content-title {
            font-size: 40px;
        }
         .content-subtitle-content{
            font-size: 20px;
            line-height: 21px;
         }
    }
    </style>
</head>

<body>
    <div class="content-section py-5">
        <div class="container">
            <div>
                <div style="text-align: center;">
                    <h1 class="content-title">Why Content Marketing?</h1>
                    <p class="content-subtitle-content">Why Your Business Needs a Strong Content Strategy?</p>
                </div>

                <div class="row align-items-center">
                    <!-- Left Side Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="assests/images/content-marketing/branding.webp" alt="Brand Awareness"
                            class="img-fluid rounded shadow">
                    </div>

                    <!-- Right Side Tabs -->
                    <div class="col-md-6">
                        <h2 class="text-white fw-bold mb-3"><span class="fs-20">Why Your</span> Business Needs a Strong Content Strategy?</h2>
                        <p class="text-white mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam,
                        </p>

                        <!-- Accordion -->
                        <div class="accordion" id="contentAccordion">
                            <!-- Accordion Item 1 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Increase Brand Awareness
                                        <span class="toggle-icon">-</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam,
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 2 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Boost SEO & Rankings
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam,
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Generate More Leads & Conversions
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam,
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 4 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Build Customer Trust
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam,
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 5 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Improve Customer Retention
                                        <span class="toggle-icon">+</span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#contentAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam,
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary-btn">Get Started Now</a>
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

</html>