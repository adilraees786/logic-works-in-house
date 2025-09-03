
    <style>
       

        .why-android-title {
            text-align: center;
            font-size: 56px;
            font-weight: 800;
            margin-bottom: 10px;
            color:white;
        }

        .why-android-subtitle {
            text-align: center;
            font-size: 20px;
            font-weight: 400;
            color: #ccc;
            margin-bottom: 50px;
        }

        .android-img {
          
            max-width: 200px;
        }

        .side-card {
            display: flex;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .side-card:hover {
            transform: translateY(-5px);
        }

        .side-card img {
            width: 120px;
            object-fit: cover;
        }

        .side-card-body {
            padding: 16px;
            color: #000;
            flex: 1;
        }

        .side-card-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .side-card-text {
            font-size: 14px;
            line-height: 1.4;
        }

        .main-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            justify-content: space-between;

            transition: height 0.3s ease;

        }

        .main-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .main-card-body {
            padding: 24px;
            color: #000;
        }

        .main-card-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .main-card-text {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .main-card .btn {
            background: #6e3eff;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 20px;
            font-size: 14px;
            margin-top: 10px;
        }

        @media (max-width: 991px) {
            .android-img {
                margin-bottom: 30px;
            }

            .main-card {
                height: auto !important;
            }
        }
    </style>


<body>
    <div class="container">
        <div>
            <h2 class="why-android-title">Why Work With Us?</h2>
            <p class="why-android-subtitle">Why Businesses Trust Our SEO Expertise</p>

            <div class="row align-items-start">
                <!-- Left Side Image -->
                <div class="col-lg-3 text-center mb-4 mb-lg-0">
                    <img src="assests/images/branding-dubai/seo-banda.webp" alt="Android"  />
                </div>

                <!-- Side Cards -->
                <div class="col-lg-5">
                    <div class="side-card" onclick="updateMainCard(0)">
                        <img src="assests/images/branding-dubai/seo-img-1.webp" alt="" />
                        <div class="side-card-body">
                            <div class="side-card-title">Proven Track Record</div>
                            <div class="side-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt.</div>
                        </div>
                    </div>
                    <div class="side-card" onclick="updateMainCard(1)">
                         <img src="assests/images/branding-dubai/seo-img-2.webp" alt="" />
                        <div class="side-card-body">
                            <div class="side-card-title">Google Algorithm Experts</div>
                            <div class="side-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt.</div>
                        </div>
                    </div>
                    <div class="side-card" onclick="updateMainCard(2)">
                       <img src="assests/images/branding-dubai/seo-img-3.webp" alt="" />
                        <div class="side-card-body">
                            <div class="side-card-title">Tailored SEO Strategies</div>
                            <div class="side-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt.</div>
                        </div>
                    </div>
                </div>

                <!-- Main Card -->
                <div class="col-lg-4">
                    <div class="main-card" id="mainCard">
                        <img src="assests/images/branding-dubai/seo-img-1.webp" id="mainCardImg" alt="Main" />
                        <div class="main-card-body">
                            <div class="main-card-title" id="mainCardTitle">Proven Track Record</div>
                            <div class="main-card-text" id="mainCardText">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt.</div>
                            <button class="btn" id="mainCardBtn">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const services = [
            {
                title: "Proven Track Record",
                text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.",
                img: "assests/images/branding-dubai/seo-img-1.webp"
            },
            {
                title: "Tailored SEO Strategies",
                text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.",
                img: "assests/images/branding-dubai/seo-img-2.webp"
            },
            {
                title: "Tailored SEO Strategies",
                text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.",
                img: src = "assests/images/branding-dubai/seo-img-3.webp"
            }
        ];

        function updateMainCard(idx) {
            document.getElementById("mainCardTitle").textContent = services[idx].title;
            document.getElementById("mainCardText").textContent = services[idx].text;
            document.getElementById("mainCardImg").src = services[idx].img;

         
            document.getElementById("mainCardBtn").textContent = "READ MORE";
            document.getElementById("mainCardBtn").style.display = "inline-block";
        }

        function matchMainCardHeight() {
            const sideCards = document.querySelectorAll('.side-card');
            const mainCard = document.getElementById('mainCard');

            if (window.innerWidth > 991 && sideCards.length >= 3) {
                const totalHeight =
                    sideCards[0].offsetHeight +
                    sideCards[1].offsetHeight +
                    sideCards[2].offsetHeight +
                    40;

                mainCard.style.height = totalHeight + 'px';
            } else {
                mainCard.style.height = 'auto';
            }
        }

        window.addEventListener('load', matchMainCardHeight);
        window.addEventListener('resize', matchMainCardHeight);
    </script>
</body>

