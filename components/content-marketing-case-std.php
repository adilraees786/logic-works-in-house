<style>
    body {
        background: #000;
    }

    .btn-purple {
        background: #a259f7;
        color: #fff;
        border: none;
    }

    .btn-purple:hover,
    .btn-purple:focus {
        background: #F57B83;
        color: #fff;

    }

    .card {
        border-radius: 16px;

        border: none;
        transition: all 0.3s ease;
        cursor: pointer;
        padding: 20px;
    }

    .card:hover {
        background: #a259f7 !important;
        color: #fff !important;
        transform: translateY(-5px);
        /* box-shadow: 0 8px 32px rgba(162, 89, 247, 0.3); */
    }

    /* Add these new styles for button hover effects */
    .card:hover .btn-outline-light {
        background: #F57B83 !important;
        color: #fff !important;
        border-color: #F57B83 !important;
    }

    .card:hover .btn-light {
        background: #F57B83 !important;
        color: #fff !important;
    }

    .card:hover .btn-outline-light:hover {
        background: #F57B83 !important;
        color: #fff !important;
        border-color: red !important;
    }

    .card:hover .btn-light:hover {
        background: #F57B83 !important;
        color: #fff !important;
    }

    .card img {
        border-radius: 12px 12px 0 0;
        height: 200px;
        object-fit: cover;
    }

    .card-title {
        font-size: 20px;
        font-weight: 700;

    }

    .lead-para {
        font-size: 22px;
        font-weight: 400;
        color: white;
        line-height: 1.2;
    }

    .card-text {
        font-size: 14px;
        font-weight: 500;

        line-height: 15.14px;
    }




    .explore-bnt {
        background-color: #9244EF;
        color: white;
        padding: 15px 30px;
        border-radius: 10px;
        border: none;
        transition: all 0.3s ease;
        font-weight: 400;
        font-size: 11px;


    }

    .explore-bnt:hover {
        background-color: white;
        color: black;
        font-size: 15px;
        transform: translateY(-3px);
        box-shadow: 0 8px 32px rgba(162, 89, 247, 0.3);
    }

    .card:hover .card-title,
    .card:hover .card-text {
        color: white !important;
    }

    @media (max-width: 991px) {
        .card img {
            height: 140px;
        }
    }

    @media (max-width: 767px) {
        .card img {
            height: 120px;
        }
    }

    .btn-outline-light.btn-purple {
        border-color: #fff;
        color: #fff;
    }

    .btn-outline-light.btn-purple:hover {
        background: #fff;
        color: #a259f7;
    }

    /* Remove the permanent purple card styling */
    .card-purple {
        background: transparent;
        color: inherit;
    }

    .slider-dot {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #fff;
        opacity: 0.4;
        margin: 0 6px;
        border: 2px solid #a259f7;
        transition: all 0.2s;
        display: inline-block;
        cursor: pointer;
    }

    .slider-dot.active {
        background: white;
        opacity: 1;


    }
</style>


<body class="bg-dark text-white">

    <div class="container">
        <div>
            <h4 class="display-3 fw-bold text-center mb-2">Success Stories</h4>
            <p class="lead-para text-center mb-4">Verified Results Through Strategic Content Marketing</p>
            <div class="d-flex justify-content-end mb-2">
                <button id="prevBtn" class="btn  me-2"><img src="assests/images/arrow-left.webp"
                        alt="con-arrow-001"></button>
                <button id="nextBtn" class="btn "><img src="assests/images/arrow-right.webp"
                        alt="con-arrow-002"></button>
            </div>
            <div class="row g-4" id="sliderRow">
                <!-- Slides will be injected here -->
            </div>
            <!-- Pagination Dots -->
            <div class="d-flex justify-content-center my-3" id="sliderDots"></div>
            <div class="text-center mt-4">
                <button class="explore-bnt">Explore More</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const slides = [
            {
                img: src = "assests/images/content-marketing/content-img-1.webp",
                title: "Manufacturing Company",
                desc: "A manufacturer struggled with visibility. Content marketing helped attract engineers through technical articles. Blog traffic grew 240% in six months, bringing qualified leads and better-prepared prospects ready to buy."
            },
            {
                img: src = "assests/images/content-marketing/content-img-2.webp",
                title: "Professional Services Firm",
                desc: "A consulting firm needed stronger authority. Content focused on client pain points and industry insights. Guides built trust, increasing time spent on site and improving proposal requests from engaged prospects."
            },
            {
                img: src = "assests/images/content-marketing/content-img-3.webp",
                title: "Software Company",
                desc: "A SaaS startup faced tough competition. Educational content explained problems clearly. Video tutorials and optimized blogs ranked well, boosting trial sign-ups by 67% and lowering customer acquisition costs."
            },
            {
                img: src = "assests/images/content-marketing/content-img-1.webp",
                title: "Healthcare Provider",
                desc: "A medical practice needed more patients. Articles addressed common health questions people searched online. Content boosted local search rankings and doubled monthly patient inquiries within four months of launch."
            },
            {
                img: src = "assests/images/content-marketing/content-img-2.webp",
                title: "E-Commerce Brand",
                desc: "An online store dealt with cart abandonment and low repeat sales. Email content built stronger customer relationships, while blogs brought organic traffic. Customer lifetime value increased by 53% after campaigns."
            },
            {
                img: src = "assests/images/content-marketing/content-img-2.webp",
                title: "Financial Services Company",
                desc: "A wealth management firm targeted affluent clients. Strategic guides and webinars explained complex financial planning. Content built trust, increased engagement, and steadily generated qualified consultation requests from high-value prospects."
            }
        ];
        let current = 0;
        let direction = 1; // 1 = forward, -1 = backward
        let autoScrollInterval;

        function renderSlides() {
            const row = document.getElementById('sliderRow');
            row.innerHTML = '';

            let visible = 3;
            if (window.innerWidth < 768) visible = 1;
            else if (window.innerWidth < 992) visible = 2;

            for (let i = 0; i < visible; i++) {
                const idx = (current + i) % slides.length;
                const s = slides[idx];
                row.innerHTML += `
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100">
                        <img src="${s.img}" class="card-img-top" alt="slide image">
                        <div class="card-body">
                            <h5 class="card-title">${s.title}</h5>
                            <p class="card-text">${s.desc}</p>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-light btn-sm btn-purple">View Case Study</button>
                                <button class="btn btn-light btn-sm btn-purple">Get a Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            }

            // Pagination dots
            const dots = document.getElementById('sliderDots');
            dots.innerHTML = '';
            for (let i = 0; i < slides.length; i++) {
                const dot = document.createElement('span');
                dot.className = 'slider-dot' + (i === current ? ' active' : '');
                dot.onclick = () => {
                    current = i;
                    renderSlides();
                    resetAutoScroll();
                };
                dots.appendChild(dot);
            }
        }

        // Manual buttons
        document.getElementById('prevBtn').onclick = function () {
            current = (current - 1 + slides.length) % slides.length;
            renderSlides();
            resetAutoScroll();
        };

        document.getElementById('nextBtn').onclick = function () {
            current = (current + 1) % slides.length;
            renderSlides();
            resetAutoScroll();
        };

        window.onresize = renderSlides;

        // Auto-scroll with reverse
        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                const visible = window.innerWidth < 768 ? 1 : (window.innerWidth < 992 ? 2 : 3);

                // Reverse direction at ends
                if (current + visible >= slides.length) direction = -1;
                else if (current === 0) direction = 1;

                current = (current + direction + slides.length) % slides.length;
                renderSlides();
            }, 3000);
        }

        function resetAutoScroll() {
            clearInterval(autoScrollInterval);
            startAutoScroll();
        }

        renderSlides();
        startAutoScroll();
    </script>
</body>