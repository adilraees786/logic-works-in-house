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
                <h2 class="matter-head">Why Teams Choose To Work With Us</h2>
                <p class="text-whitee-50">Twitter Advertising Agency Dubai Turning Attention Into Meaningful Action</p>
                <p class="text-white">As a Twitter Advertising Agency Dubai, we design strategy-driven campaigns that are tested, refined, and scaled with purpose. Every rollout reduces waste, sharpens audience targeting, transforms clicks into engagement, and builds sustainable momentum.</p>

                <!-- Tabs -->
                <div id="tabs">
                    <div class="tab-box active" data-tab="tab1">
                        <h3 class="text-tittle">Long-Term Audience Momentum</h3>
                        <div class="tab-content-box">
                          We guide brands to create lasting relationships with committed communities. Through consistent, relevant, and thoughtfully positioned campaigns, Twitter marketing services Dubai help maintain engagement across evolving conversations.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab2">
                        <h3 class="text-tittle">End-to-End Campaign Management</h3>
                        <div class="tab-content-box">
                           From planning and execution to observation and insights, we manage campaigns fully from start to finish. Each iteration grows stronger through continuous testing and optimization, guided by expert Twitter marketing service Dubai principles.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab3">
                        <h3 class="text-tittle">Expanded Platform Presence</h3>
                        <div class="tab-content-box">
                           Your message reaches audiences naturally across feeds, discussions, and extended visibility zones. Coordinated reach strategies reinforce trust, elevate brand authority, and increase overall confidence in your offerings.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab4">
                        <h3 class="text-tittle">Precision-Led Execution</h3>
                        <div class="tab-content-box">
                        Campaign components are continuously reviewed, refined, and optimized. Actions, questions, signups, and loyalty growth are driven with accuracy, ensuring that audience engagement remains meaningful.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab5">
                        <h3 class="text-tittle">Transparent Reporting</h3>
                        <div class="tab-content-box">
                           A Twitter ads agency Dubai ensures full visibility. Clients can track trends, performance shifts, and account growth with shared access, making all results measurable and actionable.
                        </div>
                    </div>
                </div>

                <div class="live-chat-btns">

                     <a href="javascript:void(0)" onclick="openTawkChat()">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                  <img id="tab-image-brand" src="assests/images/fb-instagram-marketingt/twitter-choice-image.webp" alt="Tab Image"
                    class="right-img-brand">>
            </div>

        </div>
    </div>


    <script>
        const tabs = document.querySelectorAll(".tab-box");
        const image = document.getElementById("tab-image-brand");

        const imageMap = {
            tab1: "assests/images/fb-instagram-marketingt/twitter-choice-image.webp",
            tab2: "assests/images/fb-instagram-marketingt/twitter-choice-image.webp",
            tab3: "assests/images/fb-instagram-marketingt/twitter-choice-image.webp",
            tab4: "assests/images/fb-instagram-marketingt/twitter-choice-image.webp",
            tab5: "assests/images/fb-instagram-marketingt/twitter-choice-image.webp",
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