<style>
    .how-we-work-section {
         background: rgba(80, 0, 150, 0.7); 
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
  
        max-width: 900px;
        margin: 0 auto;
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
                       <h2 class="dubai-all text-white text-center">Our Roadmap to Results</h2>
                    <div class="how-we-work-subtitle">A structured framework delivering consistent paid growth with precision and clarity through expert Instagram Advertising services.</div>
                </div>
                <div class="work-container">
                    <!-- Left Content -->
                    <div class="left-content">
                        <h2 id="service-title">Audience Insight & Market Analysis for Instagram Ads</h2>
                        <p id="service-description">
                            We examine how target customers engage across Instagram and other platforms while closely reviewing competitor campaigns. This uncovers opportunities often missed by others. Our research identifies which stories capture attention and which demographics respond most actively. This precision enables us to craft Instagram marketing services Dubai that feel personal, timely, and relevant.
                        </p>
                       
                        <div class="live-chat-btns">
                            <a href="#" class="live-chats">Live Chat</a>
                            <a href="#" id="openPopup">Get A Quote</a>
                        </div>
                    </div>
                    <!-- Right Tabs -->
                    <div class="right-tabs">
                        <div class="tab-card active" data-tab="0">
                            <img src="assests/images/online-reputataion-management/step-1.webp" alt="">
                            <div>
                                <h3>Audience Insight & Market</h3>
                                <p>We examine how target customers engage across Instagram and other platforms while closely reviewing competitor campaigns.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="1">
                            <img src="assests/images/online-reputataion-management/step-2.webp" alt="">
                            <div>
                                <h3>Campaign Architecture & Creative</h3>
                                <p>We organize accounts into outcome-focused clusters to maximize efficiency and minimize wasted spend.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="2">
                            <img src="assests/images/online-reputataion-management/step-3.webp" alt="">
                            <div>
                                <h3>Launch Oversight and Metric</h3>
                                <p>Campaigns are deployed with precise budgets and robust conversion setups. This ensures optimal performance and </p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="3">
                            <img src="assests/images/online-reputataion-management/step-4.webp" alt="">
                            <div>
                                <h3>Optimization and Scalable Growth</h3>
                                <p>We analyze metrics to refine targeting and enhance storytelling. Every insight improves reach, relevance, and campaign </p>
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
                title: "Audience Insight & Market Analysis for Instagram Ads",
                desc1: "We examine how target customers engage across Instagram and other platforms while closely reviewing competitor campaigns. This uncovers opportunities often missed by others. Our research identifies which stories capture attention and which demographics respond most actively. This precision enables us to craft Instagram marketing services Dubai that feel personal, timely, and relevant.",
             
            },
            {
                title: "Campaign Architecture & Creative Strategy",
                desc1: "We organize accounts into outcome-focused clusters to maximize efficiency and minimize wasted spend. Content concepts and messaging are tailored to verified audience segments. As a trusted Instagram Advertising Agency Dubai, we ensure campaigns remain compelling and reach users ready to act.",
              
            },
            {
                title: "Launch Oversight and Metric Tracking",
                desc1: "Campaigns are deployed with precise budgets and robust conversion setups. This ensures optimal performance and clear results. As a reliable Instagram ad agency Dubai, we monitor activity daily, scaling high performers while quickly adjusting or replacing underperformers.",
               
            },
            {
                title: "Optimization and Scalable Growth",
                desc1: "We analyze metrics to refine targeting and enhance storytelling. Every insight improves reach, relevance, and campaign outcomes over time. Top-performing creatives receive increased investment for wider exposure, while low-impact assets are paused. This disciplined approach ensures predictable growth through smart resource allocation.",
               
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