<style>
    .main-container {
        min-height: 100vh;
        position: relative;
    }

    .hero-section {
        text-align: center;
        padding: 80px 0 60px;
        position: relative;
    }





    .content-section {
        display: flex;
        min-height: 80vh;
        position: relative;
    }

    .tabs-container {
        flex: 1;
        padding: 40px;
        position: relative;
        max-height: 450px;

        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: white #5f2c9d;

        border-radius: 10px;

    }


    .tab-item {
        background: #311752;

        padding: 25px;

        position: relative;
        cursor: pointer;
        transition: all 0.3s ease;

        min-height: 120px;
    }

    .tab-item:last-child {
        margin-bottom: 0;
    }

    .tab-item:hover {
        transform: translateX(10px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .tab-item.active {
        background: #602b9d;
        transform: translateX(15px);
    }

    .tab-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: white;
    }

    .tab-content {
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.9);
    }

    .read-more {
        color: white;
        text-decoration: underline;
        font-weight: 500;
        cursor: pointer;
        margin-top: 10px;
        display: inline-block;
    }

    .image-container {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding: 40px;
        position: relative;
        /* height: 80vh; */
    }

    .image-wrapper {
        width: 100%;
        max-width: 500px;
        height: 500px;


        overflow: hidden;
        position: relative;

        display: flex;
        align-items: center;
        justify-content: center;

    }

    .tab-image {
        width: 100%;
        /* height: 100%; */
        object-fit: cover;
        transition: all 0.5s ease;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;

    }

    .tab-image.active {
        opacity: 1;
        transform: scale(1.02);
    }

    .image-placeholder {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 40px;
        color: white;
    }

    .trust-block {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        transform: rotate(-5deg);
    }

    .trust-text {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        text-align: center;
        margin: 0;
    }



    @media (max-width: 768px) {
        .content-section {
            flex-direction: column;
        }

        .main-title {
            font-size: 2.5rem;
        }

        .image-container {
            height: 500px;
            position: relative;
        }
    }

    .image-placeholder,
    .tab-image {
        display: none;
    }

    .tab-image.active {
        display: block;
        opacity: 1;
        transition: opacity 0.5s;
        width: 100%;
        /* height: 100%; */
        object-fit: cover;
        border-radius: 20px;
    }

    /* Hide scroll bars for webkit browsers */
    .image-container::-webkit-scrollbar,
    .image-wrapper::-webkit-scrollbar {
        display: none;
    }

    /* Hide scroll bars for Firefox */
    .image-container,
    .image-wrapper {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    @media (max-width: 600px) {
        .tabs-container {
            padding: 0px;
        }

        .image-container {
            padding: 20px 0px;
        }

        .hero-section {
            padding: 20px 0px;
        }
         .image-wrapper {
            height: 300px;
    }
}
</style>



<div class="scroll-indicator">
    <div class="scroll-progress" id="scrollProgress"></div>
</div>

<div class="container">
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="text-center">
                <p class="text-white text-center video-all-para">Why Your Online Reputation Defines Business Success
                </p>
                <h2 class="text-white same-all text-center">Strong Reputation Builds Trust and Drives
                    Growth
                </h2>
<p class="exter-para">Working with a reliable online reputation management company in Dubai ensures your brand earns trust, controls first impressions, and stays competitive in a review-driven digital landscape.</p>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-section mt-30">
            <div class="tabs-container">
                <div class="tab-item active" data-tab="trust">
                    <h3 class="tab-title">Trust Builds Sales, Doubt Destroys Them</h3>
                    <div class="tab-content">
                        People always check reviews before buying. Good feedback builds trust. Bad results push
                        customers away. Our reputation management helps create trust that brings more sales and
                        loyal customers.
                        <!-- <div class="read-more">Read More</div> -->
                    </div>
                </div>

                <div class="tab-item" data-tab="conversions">
                    <h3 class="tab-title">Search Results Control First Impressions</h3>
                    <div class="tab-content">
                        Most people only see Google’s first page. Negative links drive them off. We push harmful
                        content down and promote positive results that show your brand in the best light.
                        <!-- <div class="read-more">Read More</div> -->
                    </div>
                </div>

                <div class="tab-item" data-tab="seo">
                    <h3 class="tab-title">Review Platforms Influence Every Decision</h3>
                    <div class="tab-content">
                        Ratings guide what people buy every day. One bad review can stay online forever. We respond
                        fast and help customers share positive feedback.
                        <!-- <div class="read-more">Read More</div> -->
                    </div>
                </div>

                <div class="tab-item" data-tab="branding">
                    <h3 class="tab-title">Brand Perception Impacts Long-Term Growth</h3>
                    <div class="tab-content">
                        A good reputation brings customers, investors, and skilled employees. Bad impressions stop
                        growth. We keep your brand positive and trustworthy online.
                        <!-- <div class="read-more">Read More</div> -->
                    </div>
                </div>

                <div class="tab-item" data-tab="reputation">
                    <h3 class="tab-title">Crisis Prevention Saves Money and Stress</h3>
                    <div class="tab-content">
                        Small problems grow if ignored. Negative posts spread quickly online. We catch issues early
                        and fix them before they cause damage.
                        <!-- <div class="read-more">Read More</div> -->
                    </div>
                </div>
            </div>

            <div class="image-container">
                <div class="image-wrapper">
                    <img src="assests/images/online-reputataion-management/orm-slider-img-1.webp"
                        class="tab-image active" id="trust-image" alt="Trust">
                    <img src="assests/images/online-reputataion-management/orm-slider-img-2.webp" class="tab-image"
                        id="conversions-image" alt="Conversions">
                    <img src="assests/images/online-reputataion-management/orm-slider-img-3.webp" class="tab-image"
                        id="seo-image" alt="SEO">
                    <img src="assests/images/online-reputataion-management/orm-slider-img-4.webp" class="tab-image"
                        id="branding-image" alt="Branding">
                    <img src="assests/images/online-reputataion-management/orm-slider-img-5.webp" class="tab-image"
                        id="reputation-image" alt="Reputation">
                </div>

                <!-- CTA Section moved inside image container -->
                <!-- <div class="live-chat-btns">
                    <a href="#" class="live-chats">Live Chat</a>
                    <a href="#" id="openPopup">Get A Quote</a>

                </div> -->
                <!-- <p class="text-white text-center video-all-para mt-2">let's Grow Your
                    Business</p> -->
            </div>
        </div>
    </div>
</div>



<script>
    const tabItems = document.querySelectorAll('.tab-item');
    const tabsContainer = document.querySelector('.tabs-container');
    const images = {
        trust: document.getElementById('trust-image'),
        conversions: document.getElementById('conversions-image'),
        seo: document.getElementById('seo-image'),
        branding: document.getElementById('branding-image'),
        reputation: document.getElementById('reputation-image')
    };

    // Function to update active tab based on scroll position
    function updateActiveTab() {
        const containerRect = tabsContainer.getBoundingClientRect();
        const containerTop = containerRect.top;
        const containerHeight = containerRect.height;

        let activeTab = null;
        let minDistance = Infinity;

        tabItems.forEach((tab) => {
            const tabRect = tab.getBoundingClientRect();
            const tabCenter = tabRect.top + tabRect.height / 2;
            const containerCenter = containerTop + containerHeight / 2;
            const distance = Math.abs(tabCenter - containerCenter);

            if (distance < minDistance) {
                minDistance = distance;
                activeTab = tab;
            }
        });

        // --- Handle first and last tab ---
        if (tabsContainer.scrollTop === 0) {
            activeTab = tabItems[0];
        } else if (
            tabsContainer.scrollTop + tabsContainer.clientHeight >=
            tabsContainer.scrollHeight - 1
        ) {
            activeTab = tabItems[tabItems.length - 1];
        }

        // Remove active class from all tabs and images
        tabItems.forEach(t => t.classList.remove('active'));
        Object.values(images).forEach(img => img.classList.remove('active'));

        // Add active class to selected tab and corresponding image
        if (activeTab) {
            activeTab.classList.add('active');
            const tabType = activeTab.dataset.tab;
            if (images[tabType]) {
                images[tabType].classList.add('active');
            }
        }
    }

    // Listen for scroll inside tabs container
    tabsContainer.addEventListener('scroll', updateActiveTab);

    // Page scroll progress bar
    window.addEventListener('scroll', () => {
        const scrollProgress = document.getElementById('scrollProgress');
        const scrollTop = window.scrollY;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrolled = (scrollTop / docHeight) * 100;
        scrollProgress.style.width = scrolled + '%';
    });

    // Tab click event
    tabItems.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active from all
            tabItems.forEach(t => t.classList.remove('active'));
            Object.values(images).forEach(img => img.classList.remove('active'));

            // Add active to clicked tab + image
            tab.classList.add('active');
            const tabType = tab.dataset.tab;
            if (images[tabType]) {
                images[tabType].classList.add('active');
            }

            // Scroll to clicked tab inside container
            tabsContainer.scrollTo({
                top: tab.offsetTop - tabsContainer.clientHeight / 2 + tab.clientHeight / 2,
                behavior: 'smooth'
            });
        });
    });

    // Initialize active tab on page load
    updateActiveTab();

</script>