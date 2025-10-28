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
        font-size: 18px;
        font-weight: 700;

    }

    .lead-para {
        font-size: 22px;
        font-weight: 400;
        color: white;
    }

    .card-text {
        font-size: 12px;
        font-weight: 300;
        color: black;
        line-height: 1.2;
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

    <div class="container py-5">
        <div>
            <h2 class="display-3 fw-bold text-center mb-2">Case Studies</h2>
            <p class="lead-para text-center mb-4">Proven Performance Results</p>
            <div class="d-flex justify-content-end mb-2">
                <button id="prevBtn" class="btn  me-2"><img src="assests/images/arrow-left.webp"
                        alt="arrow-001"></button>
                <button id="nextBtn" class="btn "><img src="assests/images/arrow-right.webp" alt="arrow-002"></button>
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


    <script>
        const slides = [
            {
                img: "assests/images/performance-marketing/case-img-001.webp",
                title: "SaaS Platform: 340% Lead Quality Improvement",
                desc: "LA B2B software firm faced poor leads. We added precise targeting and optimized forms. Lead quality improved 340%. Sales teams closed more deals faster."
            },
            {
                img: "assests/images/performance-marketing/case-img-002.webp",
                title: "E-commerce Brand: 280% Revenue Growth in 6 Months",
                desc: "A fashion store needed steady growth. We ran social ads with email flows. Revenue grew 280% in six months. Profits stayed strong throughout."
            },
            {
                img: "assests/images/performance-marketing/case-img-003.webp",
                title: "Healthcare Provider: 150% Patient Acquisition Increase",
                desc: "A medical clinic wanted more bookings. We focused on local ads and search campaigns. Patient inquiries rose 150%. Compliance and trust remained priorities."
            },
            {
                img: "assests/images/performance-marketing/case-img-004.webp",
                title: "Financial Services: 400% Qualified Lead Boost",
                desc: "An investment firm lacked good leads. We built content campaigns, LinkedIn ads, and automation. Qualified leads increased 400%. Their sales team gained high-value clients."
            },
            {
                img: "assests/images/performance-marketing/case-img-005.webp",
                title: "Technology Startup: 250% User Acquisition Growth",
                desc: "A mobile app startup needed users. We used paid ads, influencers, and referral programs. User growth jumped 250%. The strategy created steady adoption rates."
            },
            {
                img: "assests/images/performance-marketing/case-img-006.webp",
                title: "Manufacturing Company: 180% B2B Sales Pipeline Growth",
                desc: "An equipment maker wanted bigger deals. We built account-based outreach and targeted campaigns. Sales pipeline grew 180%. They closed larger contracts with shorter cycles."
            },
            {
                img: "assests/images/performance-marketing/case-img-007.webp",
                title: "Retail Chain: 220% Online Sales Increase",
                desc: "A retail brand needed e-commerce growth. We connected online ads with store promotions. Online sales rose 220%. Both digital and in-store performance improved together."
            },
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