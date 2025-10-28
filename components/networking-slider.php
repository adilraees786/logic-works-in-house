<style>
    .slider-container {
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
        font-weight: 600;
        letter-spacing: 0.3px;
        margin: 0;
    }

    .section-title .networking-subpara {
        color: white;
        font-size: 18px;
        font-weight: 300;
        letter-spacing: 0px;

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

    .service-card-networking {
        flex: 0 0 350px;
        background: white;

        overflow: hidden;
        position: relative;
        transition: all 0.4s ease;

        /* Added white border */
        cursor: pointer;


    }

    .service-card-networking:hover {

        background: #5303b8;
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
        font-size: 18px;
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

    .service-card-networking:hover .card-separator {
        background: #ffffff;
    }

    .service-card-networking:hover .card-title {
        color: #ffffff;
    }

    .card-description {
        color: black;
        font-size: 17px;
        font-weight: 400;
        line-height: 20.01px;
        margin-bottom: 20px;
    }

    .service-card-networking:hover .card-description {
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

    .service-card-networking:hover .read-more-btn {
        opacity: 1;
        transform: translateY(0);
    }

    .read-more-btn:hover {
        background: #f0f0f0;
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
            font-size: 30px;
        }

        .pagination-controls {
            right: 20px;
            bottom: 20px;
        }

        .pagination-btn-1 img {
            width: 35px;
            height: 35px;
        }

        .section-title p {
            font-size: 20px;
            line-height: 1.2;
            margin-bottom: 10px;
        }
    }
</style>
</head>

<body>
    <div class="slider-container">
        <div class="container-fluid">
            <div class="section-title">
                <h1>OUR NETWORKING SOLUTIONS & SERVICES</h1>
                <p>Tailored Networking Solutions for Every Business</p>
                <p class="networking-subpara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>

            <div class="slider-wrapper">
                <div class="slider-track" id="sliderTrack">
                    <!-- Card 1 -->
                    <div class="service-card-networking">
                        <div class="card-image"
                            style="background-image: url(assests/images/networking-solutions/slider-img-1.webp)"></div>
                        <div class="card-content">
                            <div>

                                <h3 class="card-title">Network Design & Implementation</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Custom-designed infrastructure tailored for your connected
                                    systems—from industrial sensors.</p>
                            </div>
                            <a href="#"><button class="read-more-btn">READ MORE</button></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="service-card-networking">
                        <div class="card-image"
                            style="background-image: url(assests/images/networking-solutions/slider-img-2.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">Cybersecurity & Firewall Protection</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Reduce latency and improve real-time processing with edge
                                    systems built right into your network flow.</p>
                            </div>
                            <a href="#"><button class="read-more-btn">READ MORE</button></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card-networking">
                        <div class="card-image"
                            style="background-image: url(assests/images/networking-solutions/slider-img-3.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">Cloud Networking </h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Onboarding, provisioning, and secure management of thousands
                                    of IoT devices made easy.</p>
                            </div>
                            <a href="#"><button class="read-more-btn">READ MORE</button></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="service-card-networking">
                        <div class="card-image"
                            style="background-image: url(assests/images/networking-solutions/slider-img-1.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">Network Security Solutions</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Advanced security protocols and monitoring systems to
                                    protect your network infrastructure from threats.</p>
                            </div>
                            <a href="#"><button class="read-more-btn">READ MORE</button></a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="service-card-networking">
                        <div class="card-image"
                            style="background-image: url(assests/images/networking-solutions/slider-img-2.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">Network Design & Implementation</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Seamless integration between your local network and cloud
                                    services for optimal performance.</p>
                            </div>
                            <a href="#"><button class="read-more-btn">READ MORE</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-controls">
                <button class="pagination-btn-1" id="prevBtn">
                    <img src="assests/images/ai-development/arrow-1.webp" alt="back">
                </button>
                <button class="pagination-btn-1" id="nextBtn">
                    <img src="assests/images/ai-development/arrow-2.webp" alt="Next">
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
                this.cards = document.querySelectorAll('.service-card-networking');
                this.currentIndex = 0;
                this.cardsToShow = this.getCardsToShow();
                this.maxIndex = Math.max(0, this.cards.length - this.cardsToShow);

                // Mouse drag variables
                this.isDragging = false;
                this.startX = 0;
                this.currentX = 0;

                this.init();
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
                });
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

                if (Math.abs(diff) > 50) {
                    if (diff > 0 && this.currentIndex < this.maxIndex) {
                        this.nextSlide();
                    } else if (diff < 0 && this.currentIndex > 0) {
                        this.prevSlide();
                    } else {
                        this.updateSlider();
                    }
                } else {
                    this.updateSlider();
                }
            }

            updateSlider() {
                const cardWidth = 350 + 30; // card width + gap
                const translateX = -this.currentIndex * cardWidth;
                this.sliderTrack.style.transform = `translateX(${translateX}px)`;
            }

            nextSlide() {
                if (this.currentIndex < this.maxIndex) {
                    this.currentIndex++;
                } else {
                    this.currentIndex = 0; // Loop back to start
                }
                this.updateSlider();
            }

            prevSlide() {
                if (this.currentIndex > 0) {
                    this.currentIndex--;
                } else {
                    this.currentIndex = this.maxIndex; // Loop to end
                }
                this.updateSlider();
            }
        }

        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            const slider = new NetworkingSlider();

            // Auto scroll har 1 second baad
            setInterval(() => {
                slider.nextSlide();
            }, 2000); // 2 second interval
        });

        // Hover effects for cards
        document.querySelectorAll('.service-card-networking').forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-10px)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>

</body>