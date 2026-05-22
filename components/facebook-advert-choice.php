<style>
    .matter-head {
        font-size: 40px;
        font-weight: 700;
        color: white;
    }

    .text-whitee-50 {
        font-size: 23px;
        font-weight: 400;
        color: white;
    }

    .tab-box {
        cursor: pointer;
        padding: 15px 10px 15px 50px;

        background-color: #fff;
        color: #000;
        margin-bottom: 15px;
        transition: all 0.3s ease-in-out;
        position: relative;

    }

    .tab-box::before {
        content: "";
        width: 12px;
        height: 12px;
        background-color: #9142ef;
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 2px;
    }

    .text-tittle {
        font-size: 22px;
        font-weight: 500;
        margin: 0;
    }

    .tab-content-box {
        margin-top: 10px;
        padding: 10px 0 0 0;
        display: none;
        font-size: 15px;
        color: #444;
    }

    .tab-box.active .tab-content-box {
        display: block;
    }

    .right-img-brand {
        max-width: 450px !important;

    }



    @media screen and (max-width: 768px) {
        .matter-head {
            font-size: 30px;
        }

        .text-whitee-50 {
            font-size: 18px;
        }

        .text-tittle {
            font-size: 18px;
        }

        .tab-box {
            flex-direction: column;
            align-items: flex-start;
            padding-left: 45px;
        }

        .right-img-brand {
            max-width: 250px !important;
        }
    }
    /* Desktop / md and above → IMAGE LEFT */
@media screen and (min-width: 768px) {
    .custom-row {
        flex-direction: row-reverse;
    }
}

/* Mobile → TEXT UP, IMAGE DOWN (normal order) */
@media screen and (max-width: 767px) {
    .custom-row {
        flex-direction: column;
    }
}

</style>
</head>

<body>

    <div class="container py-5">
     <div class="row align-items-center custom-row">


            <!-- LEFT SIDE TABS -->
            <div class="col-md-6">
                <h2 class="matter-head">Why Partner with a Facebook Marketing Company in Dubai</h2>
                <p class="text-whitee-50">Trusted Facebook Ad Management Agency Dubai for Measurable Growth</p>
                <p class="text-white">We build Facebook Advertising campaigns, obsessed with momentum. We experiment, analyze, and adjust promotions thoughtfully. Every rollout saves budget, clarifies audiences, guiding engagement toward measurable business wins.</p>

                <!-- Tabs -->
                <div id="tabs">
                    <div class="tab-box active" data-tab="tab1">
                        <h3 class="text-tittle">Turn Interest into Sales with Facebook Advertising in Dubai</h3>
                        <div class="tab-content-box">
                          Our Facebook advertising campaigns in Dubai are designed for momentum. We continuously test, analyze, and refine promotions. Every rollout ensures budget efficiency, audience clarity, and measurable business growth.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab2">
                        <h3 class="text-tittle">Measured Profit Acceleration Through Facebook Ads</h3>
                        <div class="tab-content-box">
                            Through precise storytelling and messaging, we target loyal buyers and consistently fuel revenue growth via Facebook advertising.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab3">
                        <h3 class="text-tittle">Complete Facebook Ad Campaign Management</h3>
                        <div class="tab-content-box">
                           From strategy to execution, monitoring, and reporting, we oversee campaigns end-to-end. Each step evolves thoughtfully, incorporating iterative optimization for better conversions
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab4">
                        <h3 class="text-tittle">Expanding Platform Reach</h3>
                        <div class="tab-content-box">
                           Your campaigns appear across Facebook, Instagram, Messenger, and Audience Network. Wider visibility enhances credibility and ensures provable returns.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab5">
                        <h3 class="text-tittle">Outcome-Driven Facebook Advertising Strategy</h3>
                        <div class="tab-content-box">
                           Every campaign element undergoes rigorous testing and evaluation. Initiatives drive orders, inquiries, registrations, retention, and authentic audience engagement.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab6">
                        <h3 class="text-tittle">Transparent Reporting by a Facebook Advertising Agency Dubai</h3>
                        <div class="tab-content-box">
                          As a trusted Facebook ad management agency Dubai, we provide clear reporting. Teams and stakeholders monitor spend, performance, and progress with full transparency.
                        </div>
                    </div>
                </div>

                <div class="live-chat-btns">

                <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img id="tab-image-brand" src="assests/images/fb-instagram-marketingt/choice-image.webp"
                    alt="Tab Image" class="right-img-brand">
            </div>

        </div>
    </div>


    <script>
        const tabs = document.querySelectorAll(".tab-box");
        const image = document.getElementById("tab-image-brand");

        const imageMap = {
            tab1:"assests/images/fb-instagram-marketingt/choice-image.webp",
                tab2:"assests/images/fb-instagram-marketingt/choice-image.webp",
                tab3:"assests/images/fb-instagram-marketingt/choice-image.webp",
            tab4:"assests/images/fb-instagram-marketingt/choice-image.webp",
            tab5:"assests/images/fb-instagram-marketingt/choice-image.webp",
            tab6:"assests/images/fb-instagram-marketingt/choice-image.webp",
        };

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                tabs.forEach(t => t.classList.remove("active"));
                tab.classList.add("active");

                const selected = tab.getAttribute("data-tab");
                image.src = imageMap[selected];
            });
        });


    </script>

</body>