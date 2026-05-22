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
                <p class="text-whitee-50">TikTok Shop UAE: A New Way to Drive Engaging Commerce</p>
                <!-- <p class="text-white">Our Facebook marketing agency helps businesses grow with proven ad strategies. We
                    design, manage, and improve campaigns that bring more sales. Every campaign is optimized to cut
                    waste and deliver clear results.</p> -->

                <!-- Tabs -->
                <div id="tabs">
                    <div class="tab-box active" data-tab="tab1">
                        <h3 class="text-tittle">Launching Your TikTok Shop UAE the Right Way</h3>
                        <div class="tab-content-box">
                          We handle the complete TikTok Shop setup process, from aligning product catalogs and delivery workflows to meeting platform requirements. This structured preparation allows brands to launch with confidence while ensuring their TikTok Shop marketing UAE strategy is built on a scalable foundation.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab2">
                        <h3 class="text-tittle">Content That Feels Natural in the Feed</h3>
                        <div class="tab-content-box">
                            As an experienced TikTok Shop marketing team, we create videos that resonate organically with viewers. Social media marketing for TikTok Shop is woven seamlessly into content that reflects trends, cultural moments, and relatable storytelling that stops the scroll and sparks interest.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab3">
                        <h3 class="text-tittle">Creators Aligned With Your Brand Identity</h3>
                        <div class="tab-content-box">
                           We connect brands with creators who authentically represent their message. Through managed tiktok shop management services Dubai collaborations, we build credibility, expand reach, and encourage consistent discovery without content feeling scripted or forced.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab4">
                        <h3 class="text-tittle">Live Shopping Moments That Capture Attention</h3>
                        <div class="tab-content-box">
                            With the right structure, live shopping becomes an experience. TikTok Shop growth services Dubai help hosts guide sessions, interact naturally with viewers, and present products smoothly. Each live event is designed to entertain, engage, and showcase offerings without pressure.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab5">
                        <h3 class="text-tittle">Promotions That Feel Intentional</h3>
                        <div class="tab-content-box">
                           We extend visibility in ways that respect your audience. Our TikTok Shop marketing expertise guides testing, audience segmentation, and subtle refinements so promotions feel relevant, trustworthy, and aligned with your shop’s voice.
                        </div>
                    </div>
                </div>

                <div class="live-chat-btns">

                <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
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