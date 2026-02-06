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
                <h2 class="matter-head">Why Partner With an Instagram Advertising Company Dubai</h2>
                <p class="text-whitee-50">Instagram Marketing Agency Dubai That Turns Attention Into Action</p>
                <p class="text-white">We operate as a growth-focused Instagram Advertising Agency Dubai. Every campaign is thoughtfully tested, optimized, and scaled. Each rollout minimizes unnecessary spend, sharpens targeting accuracy, and converts interest into measurable outcomes with expert Instagram marketing services Dubai execution.</p>

                <!-- Tabs -->
                <div id="tabs">
                    <div class="tab-box active" data-tab="tab1">
                        <h3 class="text-tittle">Consistent Revenue Growth Through Instagram Advertising</h3>
                        <div class="tab-content-box">
                        Our creative campaigns guide engagement toward loyal audiences. Instagram Advertising Agency Dubai ensures measurable and sustained revenue growth month after month.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab2">
                        <h3 class="text-tittle">Complete Instagram Campaign Management</h3>
                        <div class="tab-content-box">
                           We manage strategy, execution, monitoring, and analytics from start to finish. Each initiative evolves through careful adjustments and performance optimization.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab3">
                        <h3 class="text-tittle">Multi-Platform Visibility Across Instagram & Meta</h3>
                        <div class="tab-content-box">
                          Your content reaches Instagram Feed, Stories, Reels, and Meta placements. Expanded exposure builds recognition, credibility, and tangible results across your audience.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab4">
                        <h3 class="text-tittle">Outcome-Driven Precision</h3>
                        <div class="tab-content-box">
                           Every element is evaluated, tested, and optimized. Campaigns consistently drive clicks, inquiries, signups, loyalty, and authentic engagement.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab5">
                        <h3 class="text-tittle">Transparent Reporting from an Instagram Ad Agency Dubai</h3>
                        <div class="tab-content-box">
                    Instagram ad agency Dubai delivers clear insights. Clients track budgets, monitor performance, and follow ongoing campaign progress with complete accountability.
                        </div>
                    </div>
                   
                </div>

                <div class="live-chat-btns">

                     <a href="javascript:void(0)" onclick="openTawkChat()">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img id="tab-image-brand" src="assests/images/fb-instagram-marketingt/instagram-choice-image.webp"
                    alt="Tab Image" class="right-img-brand">
            </div>

        </div>
    </div>


    <script>
        const tabs = document.querySelectorAll(".tab-box");
        const image = document.getElementById("tab-image-brand");

        const imageMap = {
            tab1:"assests/images/fb-instagram-marketingt/instagram-choice-image.webp",
                tab2:"assests/images/fb-instagram-marketingt/instagram-choice-image.webp",
                tab3:"assests/images/fb-instagram-marketingt/instagram-choice-image.webp",
            tab4:"assests/images/fb-instagram-marketingt/instagram-choice-image.webp",
            tab5:"assests/images/fb-instagram-marketingt/instagram-choice-image.webp",
            
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