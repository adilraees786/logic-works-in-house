<style>
    .how-we-work-section {
        /* background: rgba(80, 0, 150, 0.7); */
        /* background-image: url('assests/images/online-reputataion-management/work-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat; */
        padding: 20px 0;
        /* min-height: 100vh; */
    }

    .how-we-work-title {
        font-size: 72px;
        font-weight: 900;
        letter-spacing: 3.2%;
        color: white;
    }

    .how-we-work-subtitle {
        font-size: 28px;
        color: white;

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
        color: white;
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
        font-size: 25px;
        font-weight: 900;
        margin-bottom: 6px;
        color: white;
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

    @media (max-width: 768px) {
        .how-we-work-title {
            font-size: 30px;
        }

        .how-we-work-subtitle {
            font-size: 20px;
        }

        .tab-card h3 {
            font-size: 20px;
        }

        .left-content {
            padding: 0px;
        }
    }

    @media (max-width: 500px) {
        .tab-card img {
            display: none;
        }

        .work-container {
            padding: 0px;
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
                    <div class="how-we-work-subtitle">A Systematic Method That Produces Consistent Results</div>
                </div>
                <div class="work-container">
                    <!-- Left Content -->
                    <div class="left-content">
                        <h2 id="service-title">Audience Research & Market Analysis</h2>
                        <p id="service-description">
                            Our research examines Dubai market demographics and analyzes competitor advertising
                            approaches. Understanding customer behavior patterns helps build campaigns that resonate
                            with target audiences effectively.
                        </p>
                        <p id="service-description-2">
                            Customer pain points and buying triggers guide creative direction. This foundation creates
                            campaigns that speak directly to ideal customers.
                        </p>
                        <div class="live-chat-btns">
                            <a href="#" class="live-chats">Live Chat</a>
                            <a href="#" id="openPopup">Get A Quote</a>
                        </div>
                    </div>
                    <!-- Right Tabs -->
                    <div class="right-tabs">
                        <div class="tab-card active" data-tab="0">
                            <img src="assests/images/online-reputataion-management/step-1.webp" alt="icon-001">
                            <div>
                                <h3>Audience Research & Market Analysis</h3>
                                <p>Our research examines Dubai market demographics and analyzes competitor advertising
                                    approaches.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="1">
                            <img src="assests/images/online-reputataion-management/step-2.webp" alt="icon-002">
                            <div>
                                <h3>Campaign Architecture & Creative Strategy</h3>
                                <p>Strategic account structures separate audiences, objectives, and ad sets for clean
                                    performance tracking.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="2">
                            <img src="assests/images/online-reputataion-management/step-3.webp" alt="icon-003">
                            <div>
                                <h3>Launch & Active Monitoring</h3>
                                <p>Campaigns launch with controlled daily budgets and conservative bid strategies.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="3">
                            <img src="assests/images/online-reputataion-management/step-4.webp" alt="icon-004">
                            <div>
                                <h3>Scaling & Performance Enhancement</h3>
                                <p>Winning ad sets receive increased investment while underperforming elements get
                                    paused or restructured.</p>
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
                title: "Audience Research & Market Analysis",
                desc1: "Our research examines Dubai market demographics and analyzes competitor advertising approaches. Understanding customer behavior patterns helps build campaigns that resonate with target audiences effectively.",
                desc2: "Customer pain points and buying triggers guide creative direction. This foundation creates campaigns that speak directly to ideal customers."
            },
            {
                title: "Campaign Architecture & Creative Strategy",
                desc1: "Strategic account structures separate audiences, objectives, and ad sets for clean performance tracking. Creative assets align with customer journey stages while maintaining brand consistency throughout campaigns.",
                desc2: "Testing frameworks identify winning combinations fast. Clear messaging and strong calls to action drive immediate response."
            },
            {
                title: "Launch & Active Monitoring",
                desc1: "Campaigns launch with controlled daily budgets and conservative bid strategies. Performance monitoring happens continuously with adjustments made based on real-time data signals and engagement patterns.",
                desc2: "Quick response to performance changes prevents budget waste. Early optimization captures momentum while markets stay responsive."
            },
            {
                title: "Scaling & Performance Enhancement",
                desc1: "Winning ad sets receive increased investment while underperforming elements get paused or restructured. Audience expansion through lookalike modeling and interest layering grows reach systematically without sacrificing efficiency.",
                desc2: "Scaling happens gradually based on performance thresholds. Sustainable growth maintains profitability throughout expansion phases."
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