<style>
    .how-we-work-section {
        /* background: rgba(80, 0, 150, 0.7); */
        background-image: url('assests/images/online-reputataion-management/work-bg.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 60px 0;
        min-height: 100vh;
        color: white;
    }

    .how-we-work-title {
        font-size: 72px;
        font-weight: 900;
        letter-spacing: 3.2%;

    }

    .how-we-work-subtitle {
        font-size: 28px;
        color: white;
        margin-bottom: 40px;
    }

    .work-container {

        border-radius: 20px;

        padding: 40px 30px;
        display: flex;
        gap: 30px;
        align-items: stretch;
    }

    .left-content,
    .right-tabs {
        flex: 1;
    }

    .left-content {
        /* border: 1px dashed; */
        border-radius: 4px;
        padding: 32px 28px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .left-content h2 {
        font-size: 36px;
        font-weight: 900;
        margin-bottom: 18px;
    }

    .left-content p {
        font-size: 18px;
        color: white;
        margin-bottom: 12px;
    }



    .right-tabs {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .tab-card {
        background-color: #622da2;
        border-radius: 12px;
        padding: 20px 22px;
        cursor: pointer;
        transition: background 0.2s, box-shadow 0.2s;
        display: flex;
        align-items: flex-start;
        gap: 18px;
        border: 2px solid transparent;
    }

    .tab-card.active,
    .tab-card:hover {
        background-color: #9142ef;
        border-color: gray;
        box-shadow: 0 2px 12px 0 rgba(255, 123, 255, 0.08);
    }

    .tab-card img {
        margin-top: 2px;
    }

    .tab-card h3 {
        font-size: 21px;
        font-weight: 900;
        margin-bottom: 6px;
    }

    .tab-card p {
        color: white;
        font-size: 12px;
        margin-bottom: 0;
    }

    @media (max-width: 991px) {
        .work-container {
            flex-direction: column-reverse;
        }

    }

    @media (max-width: 600px) {
        .how-we-work-section {
            padding: 30px 0px;
        }

        .work-container {
            padding: 0px;
        }

        .left-content {
            padding: 0px;
        }

        .how-we-work-title {
            font-size: 30px;
        }

        .tab-card img {
            display: none;
        }

        .how-we-work-subtitle {
            font-size: 20px;
            line-height: 1.2;
        }
    }
</style>
</head>

<body>
    <div class="how-we-work-section">
        <div class="container">
            <div>
                <div class="text-center mb-5">
                    <div class="how-we-work-title">How Our Process Works</div>
                    <div class="how-we-work-subtitle">Proven Framework for Consistent Social Advertising Success</div>
                </div>
                <div class="work-container">
                    <!-- Left Content -->
                    <div class="left-content">
                        <h2 id="service-title">Audience Research & Competitive Analysis</h2>
                        <p id="service-description">
                            We look at how your target customers act online and study competitor ads. This helps us find
                            areas where they miss chances.
                        </p>
                        <p id="service-description-2">
                            Our research shows what messages attract people and which audiences work best. This allows
                            us to build campaigns that connect better.
                        </p>
                        <div class="live-chat-btns">
                              <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                            <a href="#" id="openPopup">Get A Quote</a>
                        </div>
                    </div>
                    <!-- Right Tabs -->
                    <div class="right-tabs">
                        <div class="tab-card active" data-tab="0">
                            <img src="assests/images/online-reputataion-management/step-1.webp" alt="">
                            <div>
                                <h3>Audience Research</h3>
                                <p>We look at how your target customers act online and study competitor ads. This helps
                                    us find areas where they miss chances.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="1">
                            <img src="assests/images/online-reputataion-management/step-2.webp" alt="">
                            <div>
                                <h3>Campaign Architecture</h3>
                                <p>We organize ad accounts into clear groups, each serving a different goal. This
                                    structure helps campaigns run smoothly and avoid wasted budget.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="2">
                            <img src="assests/images/online-reputataion-management/step-3.webp" alt="">
                            <div>
                                <h3>Launch Execution</h3>
                                <p>We launch campaigns with budget control and set up conversion tracking. This makes
                                    sure spending is effective and results are measured properly.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="3">
                            <img src="assests/images/online-reputataion-management/step-4.webp" alt="">
                            <div>
                                <h3>Performance Refinement</h3>
                                <p>We study campaign data to improve ad targeting and content. Insights gained help us
                                    refine strategies and boost overall performance steadily.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Tab data for left content
        const tabData = [
            {
                title: "Audience Research & Competitive Analysis",
                desc1: "We look at how your target customers act online and study competitor ads. This helps us find areas where they miss chances.",
                desc2: "Our research shows what messages attract people and which audiences work best. This allows us to build campaigns that connect better."
            },
            {
                title: "Campaign Architecture & Creative Strategy",
                desc1: "We organize ad accounts into clear groups, each serving a different goal. This structure helps campaigns run smoothly and avoid wasted budget.",
                desc2: "Creative designs and ad copies are developed with tested audience segments. This ensures ads stay engaging while targeting people most likely to buy."
            },
            {
                title: "Launch Execution & Performance Tracking",
                desc1: "We launch campaigns with budget control and set up conversion tracking. This makes sure spending is effective and results are measured properly.",
                desc2: "Our team monitors campaigns daily to spot problems quickly. Winning ads are scaled while weak ones are fixed or replaced immediately."
            },
            {
                title: "Performance Refinement & Growth Scaling",
                desc1: "We study campaign data to improve ad targeting and content. Insights gained help us refine strategies and boost overall performance steadily.",
                desc2: "Strong ads get more budget for wider reach, while poor performers are removed. This process ensures consistent growth with efficient spending."
            }
        ];

        // Tab click handler
        document.querySelectorAll('.tab-card').forEach(tab => {
            tab.addEventListener('click', function () {
                // Remove active class from all tabs
                document.querySelectorAll('.tab-card').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
                // Get tab index
                const idx = parseInt(this.getAttribute('data-tab'));
                // Update left content
                document.getElementById('service-title').textContent = tabData[idx].title;
                document.getElementById('service-description').textContent = tabData[idx].desc1;
                document.getElementById('service-description-2').textContent = tabData[idx].desc2;
            });
        });
    </script>
</body>