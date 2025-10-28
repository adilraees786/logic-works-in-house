<style>
    .process-section {
        background-image: url('assests/images/adword-marketing/bg-pattern.webp');
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
        font-size: 50px;
        font-weight: 900;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0px;
        white-space: nowrap;

    }

    .section-subtitle-6 {
        color: white;
        font-size: 29px;
        font-weight: 500;
        margin-bottom: 50px;

        white-space: nowrap;
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

    @media (max-width: 600px) {
        .process-section {
            padding: 0px;
        }

        .section-subtitle-6 {
            font-size: 20px;
            margin-bottom: 0px;
            line-height: 1.2;
        }

        .section-title-8 {
            font-size: 30px;
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
                        <img id="processImage" src="assests/images/website-designer/process-img.webp"
                            alt="Process Image" class="fade-transition show">
                    </div>
                </div>

                <!-- Middle: Content Text -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="text-center">
                        <h2 class="section-title-8">Our Website <br> Design Process</h2>
                        <p class="section-subtitle-6">Step-by-Step Approach <br> for Clear Results</p>
                    </div>
                    <div class="process-content">
                        <div id="contentArea">
                            <h3 class="content-title">Discovery & Planning</h3>
                            <p class="content-description">
                                We define goals for the website. We structure pages and outline layouts to meet business
                                needs.
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
                                    <h4 class="tab-title">Discovery & Planning</h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="analysis">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">02.</span>
                                <div>
                                    <h4 class="tab-title">Design</h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="development">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">03.</span>
                                <div>
                                    <h4 class="tab-title">Development</h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="testing">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">04.</span>
                                <div>
                                    <h4 class="tab-title">Test & Launch</h4>
                                </div>
                            </div>
                        </div>

                        <div class="tab-item" data-tab="deployment">
                            <div class="d-flex align-items-center">
                                <span class="tab-number">05.</span>
                                <div>
                                    <h4 class="tab-title">Support</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-4">
                        <p class="text-white mb-3" style="font-size: 1.1rem;">Get Started Your Project </p>
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
            image: 'assests/images/website-designer/process-img.webp',
            title: 'Discovery & Planning',
            description: 'We define goals for the website. We structure pages and outline layouts to meet business needs.',

        },
        analysis: {
            image: 'assests/images/website-designer/process-img-2.webp',
            title: 'Design',
            description: 'We create clean, on-brand visuals that communicate your message. This keeps visitors engaged and focused on important content.',

        },
        development: {
            image: 'assests/images/website-designer/process-img-3.webp',
            title: 'Development',
            description: 'We build fast, responsive pages that work on all devices. This ensures a smooth and reliable user experience.',

        },
        testing: {
            image: 'assests/images/website-designer/process-img-4.webp',
            title: 'Test & Launch',
            description: 'We check every function and fix any issues. Then we publish the website so it performs properly online',

        },
        deployment: {
            image: 'assests/images/website-designer/process-img-5.webp',
            title: 'Support',
            description: 'We provide ongoing updates and regular maintenance. This keeps websites secure, functional, and up to date.',

        },

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