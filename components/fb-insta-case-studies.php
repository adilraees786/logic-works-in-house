<style>
    .btn-purple {
        background: #a259f7;
        color: #fff;
        border: none;
    }




    .card {
        border-radius: 16px;
        background-color: #a259f7;
        border: none;
        transition: all 0.3s ease;
        cursor: pointer;
        padding: 20px;
    }

    .card:hover {
        background: white !important;
        color: black !important;
        transform: translateY(-5px);

    }

    /* Add these new styles for button hover effects */


    .card img {
        border-radius: 12px 12px 0 0;
        height: 200px;
        object-fit: cover;
    }

    .card-title {
        color: white;
        font-size: 24px;
        font-weight: 700;

    }

    .lead-para {
        font-size: 22px;
        font-weight: 400;
        color: white;
    }

    .card-text {
        font-size: 20px;
        font-weight: 500;
        color: white;
        line-height: 25px;
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
        font-weight: 400;
        transform: translateY(-3px);
    }

    .card:hover .card-title,
    .card:hover .card-text {
        color: black !important;
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

    @media (max-width: 576px) {
        .card-title {
            font-size: 20px;
        }

        .lead-para {
            font-size: 15px;
        }

        .card-text {
            font-size: 16px;
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
            <h2 class="display-3 fw-bold text-center mb-2">Success Stories <br> (Case Studies)</h2>
            <p class="lead-para text-center mb-4">Real Dubai Businesses Growing Through Facebook Marketing</p>

            <div class="row g-4" id="sliderRow">
                <!-- Slides will be injected here -->
            </div>
            <!-- Pagination Dots -->
            <div class="d-flex justify-content-center my-3" id="sliderDots"></div>
            <div class="text-center mt-4">
                <button class="explore-bnt">Explore More</button>
            </div>
            <div class="d-flex justify-content-end">
                <button id="prevBtn" class="btn  me-2"><img src="assests/images/arrow-left.webp" alt=""></button>
                <button id="nextBtn" class="btn "><img src="assests/images/arrow-right.webp" alt=""></button>
            </div>
        </div>
    </div>


    <script>
        const slides = [
            {
                img: src = "assests/images/fb-insta-ads/success-img-01.webp",
                title: "E-commerce Sales Growth",
                desc: "Boosted online sales with optimized ad targeting.",
            },
            {
                img: src = "assests/images/fb-insta-ads/success-img-02.webp",
                title: "Restaurant Customer Increase",
                desc: "Filled tables using local awareness Facebook campaigns.",
            },
            {
                img: src = "assests/images/fb-insta-ads/success-img-03.webp",
                title: "Real Estate Leads",
                desc: "Generated quality buyer leads with video ads.",
            },
            {
                img: src = "assests/images/fb-insta-ads/success-img-4.webp",
                title: "Fitness Center Memberships",
                desc: "Increased sign-ups through Instagram reel promotions.",
            },
            {
                img: src = "assests/images/fb-insta-ads/success-img-5.webp",
                title: "Fashion Brand Reach",
                desc: "Expanded audience using influencer-style ad creatives.",
            },
            {
                img: src = "assests/images/fb-insta-ads/success-img-06.webp",
                title: "Clinic Appointment Bookings",
                desc: "Secured patient bookings through targeted retargeting ads.",
            },
            {
                img: src = "assests/images/fb-insta-ads/success-img-07.webp",
                title: "Travel Agency Packages",
                desc: "Sold tour packages via engaging carousel campaigns.",
            },
            {
                img: src = "assests/images/fb-insta-ads/success-img-08.webp",
                title: "Tech Product Launch",
                desc: "Created buzz with Facebook video ad campaigns.",
            },
        ];

        let current = 0;
        let direction = 1; // 1 = forward, -1 = backward
        let autoScrollInterval;

        function renderSlides() {
            const row = document.getElementById("sliderRow");
            row.innerHTML = "";
            let visible = 3;
            if (window.innerWidth < 768) visible = 1;
            else if (window.innerWidth < 992) visible = 2;

            for (let i = 0; i < visible; i++) {
                const idx = (current + i + slides.length) % slides.length;
                const s = slides[idx];
                row.innerHTML += `
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100">
            <img src="${s.img}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">${s.title}</h5>
              <p class="card-text">${s.desc}</p>
            </div>
          </div>
        </div>
      `;
            }

            // Render pagination dots
            const dots = document.getElementById("sliderDots");
            dots.innerHTML = "";
            for (let i = 0; i < slides.length; i++) {
                const dot = document.createElement("span");
                dot.className = "slider-dot" + (i === current ? " active" : "");
                dot.onclick = () => {
                    current = i;
                    renderSlides();
                };
                dots.appendChild(dot);
            }
        }

        function nextSlide() {
            if (current + 1 >= slides.length - 1) direction = -1;
            else if (current <= 0) direction = 1;
            current += direction;
            renderSlides();
        }

        function startAutoScroll() {
            stopAutoScroll();
            autoScrollInterval = setInterval(nextSlide, 2000);
        }

        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }

        document.getElementById("prevBtn").onclick = function () {
            current = (current - 1 + slides.length) % slides.length;
            direction = -1;
            renderSlides();
            startAutoScroll();
        };

        document.getElementById("nextBtn").onclick = function () {
            current = (current + 1) % slides.length;
            direction = 1;
            renderSlides();
            startAutoScroll();
        };

        window.onresize = renderSlides;

        renderSlides();
        startAutoScroll();
    </script>
</body>