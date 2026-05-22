<style>
    .how-we-work-section {
        /* background: rgba(80, 0, 150, 0.7);  */
        /* background-image: url('assests/images/online-reputataion-management/work-bg.webp'); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 60px 0;
        min-height: 100vh;
        color: white;
    }

    .how-we-work-title {
        font-size: 55px;
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

        .left-content h2 {
            font-size: 30px;
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
                      <h2 class="text-white same-all">LinkedIn Advertising Firm Dubai Framework</h2>
                    <div class="how-we-work-subtitle">Structured methodology delivering predictable sponsored revenue</div>
                </div>
                <div class="work-container">
                    <!-- Left Content -->
                    <div class="left-content">
                        <h2 id="service-title">Market Signals and Competitor Insights</h2>
                        <p id="service-description">
                           We study decision-makers’ behavior on professional networks and analyze competitor campaigns. This research uncovers actionable patterns, revealing which narratives resonate and which personas respond first. Our LinkedIn Advertising Agency Dubai uses these insights to shape timely, relevant outreach.
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
                                <h3>Market Signals and Competitor</h3>
                                <p>We study decision-makers’ behavior on professional networks and analyze competitor campaigns.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="1">
                            <img src="assests/images/online-reputataion-management/step-2.webp" alt="">
                            <div>
                                <h3>Campaign Architecture</h3>
                                <p>Each campaign is built around defined commercial objectives, keeping spend controlled and execution efficient</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="2">
                            <img src="assests/images/online-reputataion-management/step-3.webp" alt="">
                            <div>
                                <h3>Controlled Deployment</h3>
                                <p>Programs are launched with calibrated budgets and precise conversion tracking.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="3">
                            <img src="assests/images/online-reputataion-management/step-4.webp" alt="">
                            <div>
                                <h3>Iteration and Scalable</h3>
                                <p>Performance data informs targeting adjustments and storytelling refinement.</p>
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
                title: "Market Signals and Competitor Insights",
                desc1: "We study decision-makers’ behavior on professional networks and analyze competitor campaigns. This research uncovers actionable patterns, revealing which narratives resonate and which personas respond first. Our LinkedIn Advertising Agency Dubai uses these insights to shape timely, relevant outreach.",
             
            },
            {
                title: "Campaign Architecture and Creative Direction",
                desc1: "Each campaign is built around defined commercial objectives, keeping spend controlled and execution efficient. Creative messaging and copy reflect proven audience behavior. Businesses relying on a LinkedIn Marketing Company Dubai get communications that engage leaders ready to act.",
              
            },
            {
                title: "Controlled Deployment and Ongoing Monitoring",
                desc1: "Programs are launched with calibrated budgets and precise conversion tracking. Daily monitoring identifies friction early; high-performing placements expand while underperforming elements are quickly optimized by our LinkedIn ads agency Dubai team.",
                
            },
            {
                title: "Iteration and Scalable Growth",
                desc1: "Performance data informs targeting adjustments and storytelling refinement. High-impact assets are amplified, while low-performing executions are paused. This disciplined approach drives sustained growth using advanced LinkedIn marketing services in Dubai.",
             
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