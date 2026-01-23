<style>
    .matter-head {
        font-size: 50px;
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
                <h2 class="matter-head">Why Choose Us?</h2>
                <p class="text-whitee-50">Understanding Our TikTok Shop Marketing Services</p>
                <!-- <p class="text-white">Our Facebook marketing agency helps businesses grow with proven ad strategies. We
                    design, manage, and improve campaigns that bring more sales. Every campaign is optimized to cut
                    waste and deliver clear results.</p> -->

                <!-- Tabs -->
                <div id="tabs">
                    <div class="tab-box active" data-tab="tab1">
                        <h3 class="text-tittle">Preparing Your TikTok Shop From the Start</h3>
                        <div class="tab-content-box">
                            We manage TikTok Shop setup Dubai with precision, aligning product catalogs, logistics, and platform guidelines so brands launch smoothly. This early structure prevents friction and keeps your TikTok Shop marketing agency Dubai foundation stable from day one.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab2">
                        <h3 class="text-tittle">Content That Feels Native, Not Promotional</h3>
                        <div class="tab-content-box">
                            As a TikTok eCommerce marketing agency, we produce videos that feel natural, timely, and engaging. Our approach blends social media marketing for TikTok Shop with platform culture, viewing habits, and short attention cycles that stop the scroll.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab3">
                        <h3 class="text-tittle">Creators That Match the Brand Voice</h3>
                        <div class="tab-content-box">
                            We connect brands with creators who genuinely fit their identity. Our tiktok shop management services Dubai focus on partnerships that feel authentic, build trust, and increase everyday discovery without forced promotion.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab4">
                        <h3 class="text-tittle">Live Shopping Experiences Worth Watching</h3>
                        <div class="tab-content-box">
                            Live sessions are planned with purpose. Using TikTok Shop growth services Dubai, we guide hosts, structure conversations, support live responses, and keep energy genuine while products remain the focus.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab5">
                        <h3 class="text-tittle">Thoughtful Promotion Without Disruption</h3>
                        <div class="tab-content-box">
                           Paid visibility supports growth when applied carefully. We test and refine promotions using agency insight, optimizing reach and targeting without damaging authenticity or community confidence. 
                        </div>
                    </div>
                </div>

                <div class="live-chat-btns">

                     <a href="javascript:void(0)" onclick="openTawkChat()">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img id="tab-image-brand" src="assests/images/Tiktok-shop-marketing-agency/choice-image.webp"
                    alt="Tab Image" class="right-img-brand">
            </div>

        </div>
    </div>


    <script>
        const tabs = document.querySelectorAll(".tab-box");
        const image = document.getElementById("tab-image-brand");

        const imageMap = {
            tab1: "assests/images/Tiktok-shop-marketing-agency/choice-image.webp",
            tab2: "assests/images/Tiktok-shop-marketing-agency/choice-image.webp",
            tab3: "assests/images/Tiktok-shop-marketing-agency/choice-image.webp",
            tab4: "assests/images/Tiktok-shop-marketing-agency/choice-image.webp",
            tab5: "assests/images/Tiktok-shop-marketing-agency/choice-image.webp",
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