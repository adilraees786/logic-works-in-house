<style>
    .slider-container-seo {
        background: black;
        padding: 80px 0;
        min-height: 100vh;
        position: relative;
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title h1 {
        color: white;
        font-size: 59px;
        font-weight: 900;
        margin-bottom: 15px;
        letter-spacing: 0.22px;
    }

    .section-title p {
        color: white;
        font-size: 29px;
        font-weight: 400;
        letter-spacing: 0.3px;
        margin: 0;
    }

    .slider-wrapper {
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
        max-width: 1140px;
        /* Limit width to fit 3 cards nicely */
        margin-left: auto;
        margin-right: auto;
        padding-top: 20px;
    }

    .slider-track {
        display: flex;

        gap: 30px;
    }

    .service-card {
        flex: 0 0 350px;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        transition: all 0.4s ease;
        border: 2px solid #ffffff;
        /* Added white border */
        cursor: pointer;


    }

    .service-card:hover {

        background: #5303B8;
        border-color: #ffffff;
        /* Keep white border on hover */
    }

    .card-image {
        width: 100%;
        height: 200px;
        background-size: cover;
        background-position: center;
        position: relative;

    }

    .card-content {
        padding: 30px 25px;
        height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-title {
        color: black;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.2;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;

    }

    .card-separator {
        width: 88.4px;
        height: 3.4px;
        background: #5303B8;
        margin-bottom: 15px;
    }

    .service-card:hover .card-separator {
        background: #ffffff;
    }

    .card-description {
        color: black;
        font-size: 17px;
        font-weight: 400;
        line-height: 20.01px;
        margin-bottom: 20px;
    }

    .service-card:hover .card-description {
        color: #ffffff;
    }

    .service-card:hover .card-title {
        color: #ffffff;
    }

    .read-more-btn {
        background: #ffffff;
        color: #5303B7;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
        align-self: flex-start;
    
    }

    .service-card:hover .read-more-btn {
        opacity: 1;
        transform: translateY(0);
    }

    .read-more-btn:hover {
        background: #f0f0f0;
        color: #5303B7;
        transform: translateY(-2px);
    }

    .pagination-controls {
        position: absolute;
        bottom: 30px;
        right: 300px;
        display: flex;
        gap: 15px;
    }

    .pagination-btn-1 {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;

    }


    @media (max-width: 768px) {
        .service-card {
            flex: 0 0 280px;
        }

        .section-title h1 {
            font-size: 2rem;
        }

        .pagination-controls {
            right: 20px;
            bottom: 20px;
        }

        .pagination-btn-1 img {
            width: 35px;
            height: 35px;
        }
    }
</style>
</head>

<body>
    <div class="slider-container-seo">
        <div class="container-fluid">
            <div class="section-title">
                <h1>Our SEO Services</h1>
                <p>Comprehensive SEO Solutions for Maximum Impact</p>
            </div>

            <div class="slider-wrapper">
                <div class="slider-track" id="sliderTrack">
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="card-image"
                            style="background-image: url(assests/images/seo-agency-dubai/slider-img-1.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">Off-Page SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam vehicula mollis urna vel dignissinm.</p>
                            </div>
                            <button class="read-more-btn">READ MORE</button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="service-card">
                        <div class="card-image"
                            style="background-image: url(assests/images/seo-agency-dubai/slider-img-2.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">Local SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam vehicula mollis urna vel dignissinm.</p>
                            </div>
                            <button class="read-more-btn">READ MORE</button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card">
                        <div class="card-image"
                            style="background-image: url(assests/images/seo-agency-dubai/slider-img-3.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">On-Page SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam vehicula mollis urna vel dignissinm.</p>
                            </div>
                            <button class="read-more-btn">READ MORE</button>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="service-card">
                        <div class="card-image"
                            style="background-image: url(assests/images/seo-agency-dubai/slider-img-1.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">Off-Page SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam vehicula mollis urna vel dignissinm.</p>
                            </div>
                            <button class="read-more-btn">READ MORE</button>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="service-card">
                        <div class="card-image"
                            style="background-image: url(assests/images/seo-agency-dubai/slider-img-3.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">On-Page SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam vehicula mollis urna vel dignissinm.</p>
                            </div>
                            <button class="read-more-btn">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-controls">
                <button class="pagination-btn-1" id="prevBtn">
                    <img src="assests/images/ai-development/arrow-1.png" alt="back">
                </button>
                <button class="pagination-btn-1" id="nextBtn">
                    <img src="assests/images/ai-development/arrow-2.png" alt="Next">
                </button>
            </div>
        </div>
    </div>


    <script>
        class NetworkingSlider {
            constructor() {
                this.sliderTrack = document.getElementById('sliderTrack');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.cards = document.querySelectorAll('.service-card');
                this.currentIndex = 0;
                this.cardsToShow = this.getCardsToShow();
                this.maxIndex = Math.max(0, this.cards.length - this.cardsToShow);

                // Mouse drag variables
                this.isDragging = false;
                this.startX = 0;
                this.currentX = 0;

                this.init();
                // Removed updateButtons() call
            }

            getCardsToShow() {
                if (window.innerWidth >= 768) return 3;  // Show 3 cards on desktop and tablet
                return 1;  // Show 1 card on mobile only
            }

            init() {
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());

                // Mouse drag events
                this.sliderTrack.addEventListener('mousedown', (e) => this.startDragging(e));
                this.sliderTrack.addEventListener('mousemove', (e) => this.drag(e));
                this.sliderTrack.addEventListener('mouseup', () => this.stopDragging());
                this.sliderTrack.addEventListener('mouseleave', () => this.stopDragging());

                window.addEventListener('resize', () => {
                    this.cardsToShow = this.getCardsToShow();
                    this.maxIndex = Math.max(0, this.cards.length - this.cardsToShow);
                    this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
                    this.updateSlider();
                    // Removed updateButtons() call
                });

                // Removed auto-play functionality
            }

            startDragging(e) {
                this.isDragging = true;
                this.startX = e.clientX;
                this.currentX = e.clientX;
            }

            drag(e) {
                if (!this.isDragging) return;

                this.currentX = e.clientX;
                const diff = this.startX - this.currentX;

                // Move slider based on drag
                const cardWidth = 350 + 30;
                const translateX = -this.currentIndex * cardWidth - diff;
                this.sliderTrack.style.transform = `translateX(${translateX}px)`;
            }

            stopDragging() {
                if (!this.isDragging) return;

                this.isDragging = false;
                const diff = this.startX - this.currentX;

                // Determine if we should move to next/previous slide
                if (Math.abs(diff) > 50) { // Minimum drag distance
                    if (diff > 0 && this.currentIndex < this.maxIndex) {
                        this.nextSlide();
                    } else if (diff < 0 && this.currentIndex > 0) {
                        this.prevSlide();
                    } else {
                        this.updateSlider(); // Reset to current position
                    }
                } else {
                    this.updateSlider(); // Reset to current position
                }
            }

            updateSlider() {
                const cardWidth = 350 + 30; // card width + gap
                const translateX = -this.currentIndex * cardWidth;
                this.sliderTrack.style.transform = `translateX(${translateX}px)`;
            }

            // Removed updateButtons() method completely

            nextSlide() {
                if (this.currentIndex < this.maxIndex) {
                    this.currentIndex++;
                    this.updateSlider();
                    // Removed updateButtons() call
                } else {
                    // Loop back to start
                    this.currentIndex = 0;
                    this.updateSlider();
                    // Removed updateButtons() call
                }
            }

            prevSlide() {
                if (this.currentIndex > 0) {
                    this.currentIndex--;
                    this.updateSlider();
                    // Removed updateButtons() call
                } else {
                    // Loop to end
                    this.currentIndex = this.maxIndex;
                    this.updateSlider();
                    // Removed updateButtons() call
                }
            }

            // Removed startAutoPlay() method completely
        }

        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new NetworkingSlider();
        });

        // Add smooth hover effects for cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-10px)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>