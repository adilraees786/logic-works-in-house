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
        box-shadow: 0 8px 32px rgba(162, 89, 247, 0.3);
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
    }

    .card-text {
        font-size: 12px;
        font-weight: 500;
        font: Roboto;
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
        color: #9244EF;
        font-size: 12px;

        transform: translateY(-3px);

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

        .lead-para {
            font-size: 20px;
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
            <h1 class="display-3 fw-bold text-center mb-2">Success Stories</h1>
            <p class="lead-para text-center mb-4">Projects That Made a Difference</p>
            <div class="d-flex justify-content-end mb-2">
                <button id="prevBtn" class="btn  me-2"><img src="assests/images/arrow-left.webp" alt=""></button>
                <button id="nextBtn" class="btn "><img src="assests/images/arrow-right.webp" alt=""></button>
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
                img: "assests/images/app-development-technology/img1.webp",
                title: "E-Commerce App",
                desc: "We built a smooth online store with fast checkout, real-time stock updates, and simple product filters. It helped increase repeat orders and reduced cart drop-offs for a mid-size retailer."
            },
            {
                img: "assests/images/app-development-technology/img2.webp",
                title: "Healthcare Platform",
                desc: "We developed a system for patient scheduling, secure messaging, and health record access. It cut down phone calls and gave patients an easier way to manage their appointments."
            },
            {
                img: "assests/images/app-development-technology/img3.webp",
                title: "SaaS Application",
                desc: "This platform helped small businesses manage internal workflows. We built tools for task tracking, billing, and user roles. The app runs smoothly across devices with minimal learning curve."
            },
            {
                img: "https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=600&q=80",
                title: "Fintech Platform",
                desc: "We built a secure app for personal budgeting and expense tracking. It syncs with bank feeds, shows clear reports, and offers smart suggestions without slowing down or crashing."
            },
            {
                img: "https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80",
                title: "Edtech Solutions",
                desc: "We created a mobile-first learning app with quizzes, video lessons, and progress tracking. Teachers use the backend to upload content, and students learn on the go without confusion."
            }
        ];

        let current = 0;
        let direction = 1; // 1 = forward, -1 = backward
        let autoScroll;

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
                        <img src="${s.img}" class="card-img-top" alt="...">
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

            // Render dots
            const dots = document.getElementById('sliderDots');
            dots.innerHTML = '';
            for (let i = 0; i < slides.length; i++) {
                const dot = document.createElement('span');
                dot.className = 'slider-dot' + (i === current ? ' active' : '');
                dot.onclick = () => {
                    current = i;
                    renderSlides();
                    restartAutoScroll();
                };
                dots.appendChild(dot);
            }
        }

        function nextSlide() {
            current += direction;
            if (current >= slides.length - 1 || current <= 0) {
                direction *= -1; // Reverse direction at ends
            }
            renderSlides();
        }

        function startAutoScroll() {
            autoScroll = setInterval(nextSlide, 3000); // 3 seconds
        }

        function restartAutoScroll() {
            clearInterval(autoScroll);
            startAutoScroll();
        }

        document.getElementById('prevBtn').onclick = function () {
            direction = -1;
            nextSlide();
            restartAutoScroll();
        };

        document.getElementById('nextBtn').onclick = function () {
            direction = 1;
            nextSlide();
            restartAutoScroll();
        };

        window.onresize = renderSlides;

        renderSlides();
        startAutoScroll();
    </script>

</body>