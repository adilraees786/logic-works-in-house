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
        font-size: 14px;
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

    .explore-button:hover {
        background-color: white;
        color: #582499;
        font-weight: 900;

    }

 
</style>


<body>

    <div class="container section-wrapper">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-12 image-box mt-4 mt-md-0">
                <img src="assests/images/email-marketing-agency/email-side-img.webp" alt="Email Marketing Image">
            </div>
            <div class="col-lg-6 col-md-12 text-content">
                <h2 class="text-white">Why Choose Email Marketing?</h2>
                <p class="text-white">Email marketing advertising agencies help companies connect directly with
                    customers. They cut marketing costs while giving accurate campaign results. Stronger relationships
                    lead to more repeat purchases.</p>

                <div class="accordion plain-accordion" id="emailAccordion">

                    <!-- Accordion Items -->
                    <!-- Repeat as needed -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="Question">Direct Connection with Customers
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Email marketing lets businesses talk directly to customers without middle steps.
                                Messages go straight to inboxes, making communication personal and effective. This
                                direct link builds trust, keeps audiences informed, and creates stronger customer bonds
                                over time.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="Question">Cost-effective marketing strategy
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Compared to print or paid ads, email marketing costs far less while delivering
                                measurable results. It helps businesses of all sizes promote products and services
                                efficiently. With minimal spending, companies can reach wide audiences and maximize
                                returns.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="Question">Measurable results and analytics
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Email campaigns provide clear data such as open rates, click-throughs, and conversions.
                                Businesses can track performance easily and see what works. This real-time insight helps
                                improve future campaigns, ensuring strategies stay relevant and focused on results.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="Question">Builds long-term customer relationships
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Regular email communication strengthens trust and loyalty between brands and customers.
                                Sharing updates, offers, and helpful content keeps businesses connected. Over time,
                                these consistent interactions build relationships that encourage repeat business and
                                long-term customer retention.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="Question">Drives repeat sales and engagement
                                    <span class="toggle-icon">+</span></span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#emailAccordion">
                            <div class="accordion-body">
                                Targeted email campaigns remind customers of products, offer discounts, and highlight
                                new arrivals. Personalized messages encourage repeat purchases and active engagement.
                                This steady communication boosts customer lifetime value and keeps businesses growing
                                with ongoing sales opportunities.
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