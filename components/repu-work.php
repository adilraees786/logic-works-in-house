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

    .how-we-work-section {
        background-color: #01010194;
        background-blend-mode: overlay;
    }

    .how-we-work-title {
        font-size: 55px;
        font-weight: 900;
        letter-spacing: 3.2%;

    }

    .how-we-work-subtitle {
        font-size: 28px;
        line-height: 1.2;
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
    }

    .tab-card p {
        color: white;
        font-size: 12px;
        margin-bottom: 0;
    }

    @media (max-width: 991px) {
        .work-container {
            flex-direction: column;
            padding: 0px;
        }
    }

    @media (max-width: 600px) {
        .how-we-work-title {
            font-size: 30px;

        }

        .how-we-work-subtitle {
            font-size: 20px;
        }

        .left-content {
            padding: 0px;
        }

        .tab-card img {
            display: none;
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
                    <h2 class="text-white same-all text-center">HOW WE WORK </h2>
                    <div class="exter-para">How Our Online Reputation Management Agency Dubai Restores and Protects Brands</div>
                </div>
                <div class="work-container">
                    <!-- Left Content -->
                    <div class="left-content">
                        <h2 id="service-title">Reputation Audit & Analysis</h2>
                        <p id="service-description">
                            We review every part of your online presence, including search results, reviews, and social
                            media. Our audit highlights negative mentions, missing opportunities, and key improvement
                            areas.
                        </p>
                        <p id="service-description-2">
                            You get a clear report showing what affects your brand image and how to fix it quickly and
                            effectively.
                        </p>
                        <div class="live-chat-btns">
                            <a  href="javascript:void(0)" onclick="openTawkChat()" class="live-chats">Live Chat</a>
                            <a href="#" id="openPopup">Get A Quote</a>
                        </div>
                    </div>
                    <!-- Right Tabs -->
                    <div class="right-tabs">
                        <div class="tab-card active" data-tab="0">
                            <img src="assests/images/online-reputataion-management/step-1.webp" alt="">
                            <div>
                                <h3>Reputation Audit & Analysis</h3>
                                <p>We review every part of your online presence, including search results, reviews, and
                                    social media.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="1">
                            <img src="assests/images/online-reputataion-management/step-2.webp" alt="">
                            <div>
                                <h3>Review & Rating Management</h3>
                                <p>We monitor reviews across all major platforms in real time. Instant alerts let us
                                    respond fast and maintain customer trust.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="2">
                            <img src="assests/images/online-reputataion-management/step-3.webp" alt="">
                            <div>
                                <h3>Negative Content Suppression</h3>
                                <p>We push harmful or outdated content out of top search results using optimized,
                                    positive material.</p>
                            </div>
                        </div>
                        <div class="tab-card" data-tab="3">
                            <img src="assests/images/online-reputataion-management/step-4.webp" alt="">
                            <div>
                                <h3>Crisis Communication Strategy</h3>
                                <p>We prepare your business for unexpected issues through structured crisis plans.</p>
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
                title: "Reputation Audit & Analysis",
                desc1: "We review every part of your online presence, including search results, reviews, and social media. Our audit highlights negative mentions, missing opportunities, and key improvement areas.",
                desc2: "You get a clear report showing what affects your brand image and how to fix it quickly and effectively."
            },
            {
                title: "Review & Rating Management",
                desc1: "We monitor reviews across all major platforms in real time. Instant alerts let us respond fast and maintain customer trust. Our system encourages positive reviews from satisfied clients, improving your ratings naturally.",
                desc2: "This steady process builds lasting credibility and strengthens your brand reputation."
            },
            {
                title: "Negative Content Suppression",
                desc1: "We push harmful or outdated content out of top search results using optimized, positive material. Strategic publishing and SEO techniques ensure damaging links lose visibility.",
                desc2: "Consistent updates keep your brand viewed in a positive light. Long-term protection starts with smart, ongoing content management."
            },
            {
                title: "Crisis Communication Strategy",
                desc1: "We prepare your business for unexpected issues through structured crisis plans. Fast, professional responses stop problems from spreading online. After a crisis, we rebuild trust with clear communication and positive engagement.",
                desc2: "Our goal is quick recovery and restoring brand confidence."
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