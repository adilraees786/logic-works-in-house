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
        line-height: 1.4;
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
</style>
</head>

<body>

    <div class="container py-5">
        <div class="row align-items-center">

            <!-- LEFT SIDE TABS -->
            <div class="col-md-6">
                <h2 class="matter-head">Why Partner with Us?</h2>
                <p class="text-whitee-50">We Build Strong Brand Foundations That Last</p>
                <p class="text-white">We build brands that grow and stay recognized. Our process includes research,
                    design, and strategy. Each step gives clear direction and focus. Results are tracked to ensure
                    progress. This keeps your brand strong and competitive.</p>

                <!-- Tabs -->
                <div id="tabs">
                    <div class="tab-box active" data-tab="tab1">
                        <h5 class="text-tittle">Strategic Brand Foundation</h5>
                        <div class="tab-content-box">
                            We create clear positioning and strong identity systems that improve recognition and support
                            lasting growth.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab2">
                        <h5 class="text-tittle">Complete Brand Development</h5>
                        <div class="tab-content-box">
                            Our process includes research, planning, design, and implementation for reliable branding
                            outcomes every time.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab3">
                        <h5 class="text-tittle">Multi-Industry Experience</h5>
                        <div class="tab-content-box">
                            We have worked across technology, healthcare, retail, and services, building strong brands
                            in competitive markets.
                        </div>
                    </div>
                    <div class="tab-box" data-tab="tab4">
                        <h5 class="text-tittle">Performance-Driven Approach</h5>
                        <div class="tab-content-box">
                            We track measurable brand results and monitor customer engagement, ensuring strategies bring
                            consistent positive outcomes.
                        </div>
                    </div>
                </div>

                <div class="live-chat-btns">

                      <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img id="tab-image-brand" src="assests/images/branding-consultancy/partaner-img-001.webp"
                    alt="Tab Image" class="right-img-brand">
            </div>

        </div>
    </div>


    <script>
        const tabs = document.querySelectorAll(".tab-box");
        const image = document.getElementById("tab-image-brand");

        const imageMap = {
            tab1: "assests/images/branding-consultancy/partaner-img-001.webp",
            tab2: "assests/images/branding-consultancy/partaner-img-002.webp",
            tab3: "assests/images/branding-consultancy/partaner-img-003.webp",
            tab4: "assests/images/branding-consultancy/partaner-img-004.webp"
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