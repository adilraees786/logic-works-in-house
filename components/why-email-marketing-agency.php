<style>
    .section-wrapper {
        padding: 60px 20px;
    }

    .image-box img {
        max-width: 100%;
        border-radius: 10px;
    }

    .text-content h2 {
        font-weight: bold;
        margin-bottom: 25px;
    }



    /* Fixed Spacing Issue in Accordion */
    .plain-accordion .accordion-item {
        background-color: transparent !important;
        border: none !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .plain-accordion .accordion-header {
        margin: 0 !important;
        padding: 0 !important;
    }

    .plain-accordion .accordion-header h2 {
        margin: 0 !important;
        padding: 0 !important;
    }

    .plain-accordion .accordion-button {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
        color: white !important;
        padding: 0.5rem 0 !important;
    }

    .plain-accordion .accordion-button::after {
        display: none !important;
    }

    .plain-accordion .accordion-body {
        background-color: transparent !important;
        border: none !important;
        color: white !important;
        padding: 0.25rem 0 0.75rem 0 !important;
        font-size: 11px;
        font-weight: 300;
        line-height: 1.3;
    }

    .Question {
        color: white;
        font-size: 18px;
        font-weight: 700;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .toggle-icon {
        font-size: 20px;
        font-weight: bold;
        color: white;
    }

    .explore-button {
        background-color: #582499;
        font-family: "Montserrat";
        color: #fff;
      
        padding: 10px 20px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
    }

    @media (max-width: 767.98px) {
        .image-box img {
            width: 100%;
            /* Adjust this percentage as needed */
            max-width: 300px;
            margin-left: 20px;
            display: block;
        }
    }
</style>


<body>

    <div class="container section-wrapper">
        <div class="row align-items-start">
            <div class="col-md-6 image-box mt-4 mt-md-0">
                <img src="assests/images/email-marketing-agency/email-side-img.png" alt="Email Marketing Image">
            </div>
            <div class="col-md-6 text-content">
                <h2 class="text-white">Why Email Marketing?</h2>
                <p class="text-white">Email marketing is one of the most powerful and cost-effective digital marketing
                    strategies for business growth, customer engagement, and sales conversion. Here’s why:</p>

                <div class="accordion plain-accordion" id="emailAccordion">

                    <!-- Accordion Items -->
                    <!-- Repeat as needed -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="Question">High ROI (Return on Investment)
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="Question">Direct & Personalized Communication
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="Question">Builds Long-Term Customer Relationships
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="Question">Boosts Sales & Conversions
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="Question">Automates Marketing for 24/7 Engagement
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                        </div>
                    </div>

                </div>

                <button class="explore-button mt-4">Explore now</button>
            </div>
        </div>
    </div>



    <!-- Toggle Icon Script -->
    <script>
        const buttons = document.querySelectorAll('.accordion-button');
        buttons.forEach(button => {
            const icon = button.querySelector('.toggle-icon');
            button.addEventListener('click', () => {
                setTimeout(() => {
                    // Reset all icons to +
                    document.querySelectorAll('.toggle-icon').forEach(i => i.textContent = '+');
                    // If current is open, set to −
                    if (!button.classList.contains('collapsed')) {
                        icon.textContent = '−';
                    }
                }, 300);
            });
        });
    </script>
</body>

</html>