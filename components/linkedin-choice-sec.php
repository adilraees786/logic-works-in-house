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
                <h2 class="matter-head">Why Partner with a LinkedIn Marketing Company</h2>
                <p class="text-whitee-50">Transform Interest into Revenue with LinkedIn Advertising</p>
                <p class="text-white">As a LinkedIn Advertising Agency Dubai, we focus on momentum. Campaigns are refined, expanded, and optimized thoughtfully. Every launch reduces inefficiencies, sharpens audience targeting, and converts engagement into measurable business results.</p>

                <!-- Tabs -->
                <div id="tabs">
                    <div class="tab-box active" data-tab="tab1">
                        <h3 class="text-tittle">Momentum that Converts into Deals</h3>
                        <div class="tab-content-box">
                        We guide audiences from passive scrolling to decisive action. By leveraging LinkedIn marketing services Dubai, we transform professional curiosity into tangible commercial outcomes that are trackable and reliable.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab2">
                        <h3 class="text-tittle">One Expert Managing Every Campaign Stage</h3>
                        <div class="tab-content-box">
                            From initial strategy to launch, monitoring, and optimization, we manage each campaign end-to-end. Every initiative evolves through testing, learning, and deliberate tuning under guidance from a trusted LinkedIn Marketing Company Dubai.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab3">
                        <h3 class="text-tittle">Visibility Where Decision-Makers Engage</h3>
                        <div class="tab-content-box">
                          Campaigns appear naturally in LinkedIn feeds, messaging prompts, and curated placements. As your reach scales through LinkedIn marketing services in Dubai, credibility builds gradually, and measurable business outcomes follow.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab4">
                        <h3 class="text-tittle">Execution with Business Impact</h3>
                        <div class="tab-content-box">
                           We continuously assess components, compare variations, and optimize delivery paths. Campaigns drive signups, conversations, pipeline activity, loyalty, and authentic professional engagement. A dedicated LinkedIn Advertising Agency Dubai ensures all efforts are purposeful.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab5">
                        <h3 class="text-tittle">Transparent Reporting from a LinkedIn Ads Agency Dubai</h3>
                        <div class="tab-content-box">
                      A reliable LinkedIn ads agency Dubai delivers full visibility. Clients receive detailed reporting on budgets, performance trends, and campaign insights, ensuring steady growth through strategic collaboration.
                        </div>
                    </div>
                   
                </div>

                <div class="live-chat-btns">

                     <a href="javascript:void(0)" onclick="openTawkChat()">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img id="tab-image-brand" src="assests/images/fb-instagram-marketingt/linkedin-choice-image.webp"
                    alt="Tab Image" class="right-img-brand">
            </div>

        </div>
    </div>


    <script>
        const tabs = document.querySelectorAll(".tab-box");
        const image = document.getElementById("tab-image-brand");

        const imageMap = {
            tab1:"assests/images/fb-instagram-marketingt/linkedin-choice-image.webp",
                tab2:"assests/images/fb-instagram-marketingt/linkedin-choice-image.webp",
                tab3:"assests/images/fb-instagram-marketingt/linkedin-choice-image.webp",
            tab4:"assests/images/fb-instagram-marketingt/linkedin-choice-image.webp",
            tab5:"assests/images/fb-instagram-marketingt/linkedin-choice-image.webp",
            
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