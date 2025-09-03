



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
            font-size: 14px;
            font-weight: 700;

        }

        .lead-para {
            font-size: 22px;
            font-weight: 400;
            color: white;
        }

        .card-text {
            font-size: 11px;
            font-weight: 300;
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
            <h1 class="display-3 fw-bold text-center mb-2">CASE STUDIES</h1>
            <p class="lead-para text-center mb-4">Real Results from Real Businesses</p>
            <div class="d-flex justify-content-end mb-2">
                <button id="prevBtn" class="btn  me-2"><img src="assests/images/arrow-left.png" alt=""></button>
                <button id="nextBtn" class="btn "><img src="assests/images/arrow-right.png" alt=""></button>
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
                img: src = "assests/images/performance-marketing/case-1.webp",
                title: "Retaining 95% of organic traffic during ASICS website migration through strategic SEO techniques",
                desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..... Read More"
            },
            {
                img: src = "assests/images/performance-marketing/case-2.webp",
                title: "Increase in qualified leads by 80% for Insurance Samadhan",
                desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..... Read More"
            },
            {
                img: src = "assests/images/performance-marketing/case-3.webp",
                title: "Retaining 95% of organic traffic during ASICS website migration through strategic SEO techniques",
                desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..... Read More"
            },
            {
                img: src = "assests/images/performance-marketing/case-1.webp",
                title: "Pro Performance : 69.7% - ROAS Surge for Swiss Beauty",
                desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..... Read More"
            },
            {
                img: src = "assests/images/performance-marketing/case-2.webp",
                title: "Pro Performance : 69.7% - ROAS Surge for Swiss Beauty",
                desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..... Read More"
            }
        ];

        let current = 0;

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

            // Render pagination dots
            const dots = document.getElementById('sliderDots');
            dots.innerHTML = '';
            for (let i = 0; i < slides.length; i++) {
                const dot = document.createElement('span');
                dot.className = 'slider-dot' + (i === current ? ' active' : '');
                dot.onclick = () => {
                    current = i;
                    renderSlides();
                };
                dots.appendChild(dot);
            }
        }

        document.getElementById('prevBtn').onclick = function () {
            current = (current - 1 + slides.length) % slides.length;
            renderSlides();
        };
        document.getElementById('nextBtn').onclick = function () {
            current = (current + 1) % slides.length;
            renderSlides();
        };
        window.onresize = renderSlides;

        renderSlides();
    </script>
</body>

