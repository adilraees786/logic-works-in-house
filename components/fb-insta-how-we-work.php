<style>
    .how-we-work-section {
        /* background: rgba(80, 0, 150, 0.7); */
        /* background-image: url('assests/images/online-reputataion-management/work-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat; */
        padding: 60px 0;
        min-height: 100vh;
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
            flex-direction: column;
        }
    }
</style>
</head>

<body>
    <div class="how-we-work-section">
        <div class="container">
            <div>
                <div class="text-center mb-5">
                    <div class="how-we-work-title">HOW WE WORK</div>
                    <div class="how-we-work-subtitle">A Proven Formula for Social Media Success</div>
                </div>
                <div class="work-container">
                    <!-- Left Content -->
                    <div class="left-content">
                        <h2 id="service-title">Step-by-Step Process</h2>
                        <p id="service-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p id="service-description-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
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
                                <h3>Step-by-Step Process</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="1">
                            <img src="assests/images/online-reputataion-management/step-2.webp" alt="">
                            <div>
                                <h3>Business & Audience Research</h3>
                                <p>Manage and improve your online reviews and ratings across all major platforms.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="2">
                            <img src="assests/images/online-reputataion-management/step-3.webp" alt="">
                            <div>
                                <h3>Creative Ad Design & Copywriting</h3>
                                <p>Suppress negative or unwanted content from search results and protect your brand.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="3">
                            <img src="assests/images/online-reputataion-management/step-4.webp" alt="">
                            <div>
                                <h3>Targeted Ad Launch</h3>
                                <p>Develop and implement effective crisis communication plans for your business.</p>
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
                title: "Step-by-Step Process",
                desc1: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.",
                desc2: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            },
            {
                title: "Business & Audience Research",
                desc1: "We help you manage and improve your online reviews and ratings across all major platforms. Our team monitors, responds, and strategizes to boost your brand's reputation.",
                desc2: "Increase customer trust and attract new clients with a positive online presence."
            },
            {
                title: "Creative Ad Design & Copywriting",
                desc1: "Our experts work to suppress negative or unwanted content from search results, ensuring your best foot is always forward online.",
                desc2: "Protect your brand image and minimize the impact of harmful content."
            },
            {
                title: "Targeted Ad Launch",
                desc1: "We develop and implement effective crisis communication plans to help you navigate challenging situations and maintain public trust.",
                desc2: "Be prepared for any PR crisis with our expert guidance and support."
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