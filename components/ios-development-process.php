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
        font-size: 55px;
        font-weight: 900;
        letter-spacing: 3.2%;
        color: white;
        line-height: 1.2;
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
            flex-direction: column-reverse;
        }
    }

    @media (max-width: 575px) {
        .how-we-work-title {
            font-size: 30px;
        }

        .how-we-work-subtitle {
            font-size: 20px;
        }

        .tab-card img {
            display: none;
        }

        .work-container {
            padding: 0px;
        }

        .left-content {
            padding: 0px;
        }

        .left-content h2 {
            font-size: 28px;
        }

        .tab-card h3 {
            font-size: 20px;
        }
    }
</style>
</head>

<body>
    <div class="how-we-work-section">
        <div class="container">
            <div>
                <div class="text-center mb-5">
                    <div class="how-we-work-title">Our App Development Process</div>
                    <div class="how-we-work-subtitle">Structured iOS App Development from Idea to Launch</div>
                </div>
                <div class="work-container">
                    <!-- Left Content -->
                    <div class="left-content">
                        <h2 id="service-title">Discovery & Planning</h2>
                        <p id="service-description">
                            We start by listening to your business goals and target audience needs. Many apps fail
                            because developers skip proper planning stages. Our iOS app developers research your market
                            and analyzes successful competitor apps.
                        </p>
                        <p id="service-description-2">
                            Understanding user behavior guides every decision we make. We identify problems your app
                            will solve for real people. Clear project scope prevents budget overruns and missed
                            deadlines.
                        </p>
                        <div class="live-chat-btns">
                              <a href="https://wa.me/971529502258" target="_blank" class="live-chats">Live Chat</a>
                            <a href="#" id="openPopup">Get A Quote</a>
                        </div>
                    </div>
                    <!-- Right Tabs -->
                    <div class="right-tabs">
                        <div class="tab-card active" data-tab="0">
                            <img src="assests/images/ios-app-development/process-icon-1.png" alt="ios-process-001">
                            <div>
                                <h3>Discovery & Planning</h3>
                                <p>We start by listening to your business goals and target audience needs.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="1">
                            <img src="assests/images/ios-app-development/icon-2.png" alt="ios-process-002">
                            <div>
                                <h3>Interface Design & Prototyping</h3>
                                <p>Great design makes the difference between apps users love and apps they delete.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="2">
                            <img src="assests/images/ios-app-development/icon-3.png" alt="ios-process-003">
                            <div>
                                <h3>Development & Quality Testing</h3>
                                <p>We build your iOS application using native Swift programming. Clean code architecture
                                    makes apps easier to maintain and update.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="3">
                            <img src="assests/images/ios-app-development/Testing.png" alt="ios-process-004">
                            <div>
                                <h3>Launch & Continuous Support</h3>
                                <p>App Store submission requires careful preparation and documentation. We handle
                                    screenshots, descriptions, and all required materials.</p>
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
                title: "Discovery & Planning",
                desc1: "We start by listening to your business goals and target audience needs. Many apps fail because developers skip proper planning stages. Our iOS app developers research your market and analyzes successful competitor apps.",
                desc2: "Understanding user behavior guides every decision we make. We identify problems your app will solve for real people. Clear project scope prevents budget overruns and missed deadlines."
            },
            {
                title: "Interface Design & Prototyping",
                desc1: "Great design makes the difference between apps users love and apps they delete. We create wireframes that map out user flows and interactions. Visual designs reflect your brand while following iOS best practices.",
                desc2: "Interactive prototypes let you experience the app before development starts. Early feedback saves time and prevents costly changes later. Our designs focus on making complex tasks feel simple."
            },
            {
                title: "Development & Quality Testing",
                desc1: "We build your iOS application using native Swift programming. Clean code architecture makes apps easier to maintain and update. Our development follows Apple's best practices for reliability.",
                desc2: "Testing happens throughout the build process. We check functionality on different iPhone and iPad models. Real device testing catches issues that simulators miss. Bug fixes happen immediately so quality never suffers."
            },
            {
                title: "Launch & Continuous Support",
                desc1: "App Store submission requires careful preparation and documentation. We handle screenshots, descriptions, and all required materials. Our iOS app developers monitor the review process and respond to Apple's feedback.",
                desc2: "After launch, we keep your app working well. We fix bugs fast and add new features users want. Updates make sure your app works with the latest iOS versions. We track performance to spot and solve issues early."
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