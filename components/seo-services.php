<style>
    .slider-container-seo {
        background: black;
        padding: 80px 0;
        position: relative;
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title h2 {
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
        margin-left: auto;
        margin-right: auto;
        padding-top: 20px;
    }

    .slider-track {
        display: flex;
        gap: 30px;
        transition: transform 0.5s ease;
    }

    .service-card {
        flex: 0 0 calc((100% - 60px) / 3);
        background: white;
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        transition: all 0.4s ease;
        border: 2px solid #ffffff;
        cursor: pointer;
    }

    .service-card:hover {
        background: #5303B8;
        border-color: #ffffff;
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

    .service-card:hover .card-description,
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

    /* === Responsive Breakpoints Fixed === */
    @media (max-width: 991px) and (min-width: 768px) {

        /* Medium screens: show 2 cards */
        .service-card {
            flex: 0 0 calc((100% - 30px) / 2);
        }

        .pagination-controls {
            right: 100px;
        }
    }

    @media (max-width: 767px) {

        /* Small screens: show 1 card */
        .slider-container-seo {
            padding: 40px 0;
        }

        .service-card {
            flex: 0 0 100%;
        }

        .section-title h2 {
            font-size: 45px;
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

    @media (max-width: 500px) {
        .section-title h2 {
            font-size: 30px;
            margin-bottom: 0px;
        }

        .section-title p {
            font-size: 20px;
        }
    }
</style>

<body>
    <div class="slider-container-seo">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Our SEO Services</h2>
                <p>Proven SEO Services Helping Brands Achieve Online Success</p>
            </div>

            <div class="slider-wrapper">
                <div class="slider-track" id="sliderTrack">
                    <!-- Cards here (unchanged) -->
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="card-image"
                            style="background-image: url(assests/images/seo-agency-dubai/slider-img-1.webp)"></div>
                        <div class="card-content">
                            <div>
                                <h3 class="card-title">On-Page SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">We optimize titles, content, and site structure for better
                                    visibility. This makes your website faster, user-friendly, and easier to rank.</p>
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
                                <h3 class="card-title">Off-Page SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">Our team builds strong backlinks to improve authority. These
                                    efforts boost search rankings and strengthen your brand’s online reputation.</p>
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
                                <h3 class="card-title">Local SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">We optimize Google Business Profiles and local directories.
                                    This helps Dubai customers find your business quickly and build trust.</p>
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
                                <h3 class="card-title">SEO Strategy</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">We create data-driven SEO strategies to grow visibility and
                                    drive consistent organic traffic.</p>
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
                                <h3 class="card-title">Technical SEO</h3>
                                <div class="card-separator"></div>
                                <p class="card-description">We fix crawl errors, improve site speed, and enhance index
                                    efficiency for better Google performance.</p>
                            </div>
                            <button class="read-more-btn">READ MORE</button>
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
                this.cards = document.querySelectorAll('.service-card');
                this.currentIndex = 0;
                this.direction = 1;
                this.cardsToShow = this.getCardsToShow();
                this.maxIndex = Math.max(0, this.cards.length - this.cardsToShow);

                this.isDragging = false;
                this.startX = 0;
                this.currentX = 0;

                this.init();
                this.startAutoSlide();
            }

            getCardsToShow() {
                if (window.innerWidth >= 992) return 3;
                if (window.innerWidth >= 768) return 2;
                return 1;
            }

            init() {
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());

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
                const cardWidth = this.sliderTrack.querySelector('.service-card').offsetWidth + 30;
                const translateX = -this.currentIndex * cardWidth - diff;
                this.sliderTrack.style.transform = `translateX(${translateX}px)`;
            }

            stopDragging() {
                if (!this.isDragging) return;
                this.isDragging = false;
                const diff = this.startX - this.currentX;
                if (Math.abs(diff) > 50) {
                    if (diff > 0 && this.currentIndex < this.maxIndex) this.nextSlide();
                    else if (diff < 0 && this.currentIndex > 0) this.prevSlide();
                    else this.updateSlider();
                } else this.updateSlider();
            }

            updateSlider() {
                const cardWidth = this.sliderTrack.querySelector('.service-card').offsetWidth + 30;
                const translateX = -this.currentIndex * cardWidth;
                this.sliderTrack.style.transform = `translateX(${translateX}px)`;
            }

            nextSlide() {
                if (this.currentIndex < this.maxIndex) this.currentIndex++;
                else this.currentIndex = 0;
                this.updateSlider();
            }

            prevSlide() {
                if (this.currentIndex > 0) this.currentIndex--;
                else this.currentIndex = this.maxIndex;
                this.updateSlider();
            }

            startAutoSlide() {
                setInterval(() => {
                    if (this.direction === 1) {
                        if (this.currentIndex < this.maxIndex) this.currentIndex++;
                        else this.direction = -1;
                    } else {
                        if (this.currentIndex > 0) this.currentIndex--;
                        else this.direction = 1;
                    }
                    this.updateSlider();
                }, 3000);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            new NetworkingSlider();
        });

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