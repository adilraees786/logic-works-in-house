<style>
    body {
        background: linear-gradient(135deg, #0a0a0a 0%, rgb(6, 6, 8) 30%, rgb(0, 0, 0) 70%, #0f3460 100%);
        min-height: 100vh;
        font-family: 'Arial', sans-serif;
        position: relative;
        overflow-x: hidden;

    }

    .process-section {
        background-image: url('assests/images/adword-marketing/bg-pattern.png');
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .process-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;

        pointer-events: none;
    }

    .section-title-8 {
        color: #ffffff;
        font-size: 55px;
        font-weight: 900;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0px;
    }

    .section-subtitle-6 {
        color: white;
        font-size: 29px;
        font-weight: 500;
        margin-bottom: 50px;
    }

    .process-image {
        position: relative;
        overflow: hidden;
        transition: all 0.5s ease;
    }

    .process-image img {
        width: 100%;

        object-fit: cover;
        transition: all 0.5s ease;
    }

    /* Middle content area */
    .process-content {
        padding: 0 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .content-title {
        color: white;
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .content-description {
        color: #ffffff;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .content-details {
        color: white;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .process-tabs {
        padding-left: 20px;
    }

    .tab-item {


        border-radius: 10px;
        margin-bottom: 15px;
        padding: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .tab-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;

        transform: scaleY(0);
        transition: transform 0.3s ease;
    }

    .tab-item:hover {

        border-color: #582499;
        transform: translateX(5px);
    }

    .tab-item.active {
        background: #582499;
        border-color: ;
        transform: translateX(10px);

    }

    .tab-item.active::before {
        transform: scaleY(1);
    }

    .tab-number {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        margin-right: 15px;
        min-width: 40px;
    }

    .tab-title {
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .fade-transition {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .fade-transition.show {
        opacity: 1;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 992px) {
        .section-title {
            font-size: 2.5rem;
        }

        .process-content {
            padding: 20px 0;
            margin-bottom: 30px;
        }

        .process-tabs {
            padding-left: 0;
        }
    }

    @media (max-width: 768px) {
        .section-title {
            font-size: 2rem;
        }

        .process-image img {
            height: 300px;
        }

        .process-content {
            padding: 15px 0;
        }
    }
</style>


<section>
    <div class="process-section">

        <div class="container">
            <!-- Header Section -->

            <!-- Main Content: Image + Text + Tabs -->
            <div class="row align-items-center">
                <!-- Left: Image -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="process-image">
                        <img id="processImage" src="assests/images/ai-development/Group1.png" alt="Process Image"
                            class="fade-transition show">
                    </div>
                </div>

                <!-- Middle: Content Text -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="text-center">
                        <h2 class="section-title-8">Our AI Development Process</h2>
                        <p class="section-subtitle-6">Step-by-step planning for real AI results</p>
                    </div>
                    <div class="process-content">
                        <div id="contentArea">
                            <h3 class="content-title">Discovery and Strategy</h3>
                            <p class="content-description">
                                We study goals, risks, and needs. Our AI development company maps out solutions that
                                support long-term success.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Right: Tabs -->
                <div class="col-lg-4">
                    <div class="process-tabs">
                        <div class="tab-item active" data-tab="discovery">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">01.</span>
                                <div>
                                    <h4 class="tab-title">Discovery and Strategy</h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="analysis">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">02.</span>
                                <div>
                                    <h4 class="tab-title">Data Collection and Preparation</h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="development">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">03.</span>
                                <div>
                                    <h4 class="tab-title">Model Development and Training</h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="testing">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">04.</span>
                                <div>
                                    <h4 class="tab-title">Testing and Validation/h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="deployment">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">05.</span>
                                <div>
                                    <h4 class="tab-title">Deployment and Integratio</h4>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item" data-tab="monitoring">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">06.</span>
                                <div>
                                    <h4 class="tab-title">Monitoring and Optimization</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-white mb-3" style="font-size: 1.1rem;">Start Your Networked Innovation</p>
                        <a href="#" class="btn btn-primary"
                            style="background-color: #582499; border: none; font-weight: 400; padding: 10px 32px; border-radius: 8px;">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Content data for different tabs
    const tabData = {
        discovery: {
            image: 'assests/images/ai-development/Group1.png',
            title: 'Discovery and Strategy',
            description: ' We study goals, risks, and needs. Our AI development company maps out solutions that support long-term success.',

        },
        analysis: {
            image: 'assests/images/ai-development/Group1.png',
            title: 'Data Collection and Preparation',
            description: ' We collect, clean, and organize your data. Accurate data gives better learning and more useful results.',

        },
        development: {
            image: 'assests/images/ai-development/Group1.png',
            title: 'Model Development and Training',
            description: ' This step teaches the AI to make smart choices using examples, patterns, and real-world tasks.',

        },
        testing: {
            image: 'assests/images/ai-development/Group1.png',
            title: 'Testing and Validation',
            description: ' We check the system under many cases. Good testing helps catch errors early and ensures better results.',

        },
        deployment: {
            image: 'assests/images/ai-development/Group1.png',
            title: 'Deployment and Integration',
            description: ' We connect the AI to your systems. Smooth deployment is part of reliable AI development services.',

        },
        monitoring: {
            image: 'assests/images/ai-development/Group1.png',
            title: 'Monitoring and Optimization',
            description: ' We track how the AI performs over time and fine-tune it. Smart AI software development always includes real-world feedback.'

        }
    };

    // Get elements
    const tabItems = document.querySelectorAll('.tab-item');
    const processImage = document.getElementById('processImage');
    const contentArea = document.getElementById('contentArea');

    // Function to update content
    function updateContent(tabType) {
        const data = tabData[tabType];

        // Fade out image and content
        processImage.classList.remove('show');
        contentArea.style.opacity = '0';

        // Update content after fade out
        setTimeout(() => {
            // Update image
            processImage.src = data.image;
            processImage.classList.add('show');

            // Update text content
            contentArea.innerHTML = `
                    <h3 class="content-title">${data.title}</h3>
                    <p class="content-description">${data.description}</p>
         
                `;

            // Fade in content
            contentArea.style.opacity = '1';
        }, 150);
    }

    // Add click event listeners to all tab items
    tabItems.forEach(tab => {
        tab.addEventListener('click', function () {
            // Remove active class from all tabs
            tabItems.forEach(item => item.classList.remove('active'));

            // Add active class to clicked tab
            this.classList.add('active');

            // Get the tab data attribute
            const tabType = this.getAttribute('data-tab');

            // Update content
            updateContent(tabType);
        });
    });

    // Optional: Auto-rotate tabs every 6 seconds
    let currentTabIndex = 0;
    const autoRotate = setInterval(() => {
        currentTabIndex = (currentTabIndex + 1) % tabItems.length;
        tabItems[currentTabIndex].click();
    }, 6000);

    // Pause auto-rotation when user interacts
    tabItems.forEach(tab => {
        tab.addEventListener('click', () => {
            clearInterval(autoRotate);
        });
    });

    // Add hover effects
    tabItems.forEach(tab => {
        tab.addEventListener('mouseenter', function () {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateX(8px)';
            }
        });

        tab.addEventListener('mouseleave', function () {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateX(0)';
            }
        });
    });

    // Initialize content area transition
    contentArea.style.transition = 'opacity 0.3s ease';
</script>