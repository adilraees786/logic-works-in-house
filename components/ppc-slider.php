<style>
    /* body {
            background: black;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        } */

    .main-title-ppc {
        font-size: 55px;
        font-weight: 900;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 0;
        letter-spacing: 1px;
        color: white;
        line-height: 1.2;
    }

    .subtitle {
        text-align: center;
        font-size: 35px;
        font-weight: 400;
        margin-bottom: 40px;
        color: #e0e0e0;
    }

    .service-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 0;
        display: flex;
        gap: 32px;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
    }

    .main-card {
        background: #fff;
        color: #222;
        border-radius: 16px;
        box-shadow: 0 4px 32px rgba(0, 0, 0, 0.18);
        width: 500px;
        min-width: 320px;
        max-width: 100%;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: box-shadow 0.2s;
        height: 100%;
    }

    .main-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        background: #eee;
        transition: filter 0.2s;
    }

    .main-card-body {
        padding: 32px 24px 24px 24px;
    }

    .main-card-title {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 12px;
        color: black;
        line-height: 1.2;

    }

    .main-card-text {
        font-size: 20px;
        font-weight: 400;
        margin-bottom: 24px;
        color: #555555;
    }

    .main-card .btn {
        background: #8f3fff;
        color: #fff;
        border-radius: 8px;
        font-weight: 600;
        padding: 10px 28px;
        border: none;
        transition: background 0.2s;
    }

    .main-card .btn:hover {
        background: #6d2ed6;
    }

    .side-cards {
        display: flex;
        flex-direction: column;
        gap: 20px;
        /* width: 350px;
      min-width: 350px;
      max-width: 350px; */
        overflow-y: auto;
        border-radius: 16px;
        background: transparent;
        box-shadow: 0 4px 32px rgba(0, 0, 0, 0.10);
        max-height: 600px;
        transition: max-height 0.2s;
        padding-right: 14px;
        scrollbar-width: thin;
        scrollbar-color: #8f3fff #e5e5e5;
    }

    /* .side-cards::-webkit-scrollbar {
      width: 8px;
      background: #e5e5e5;
      border-radius: 8px;
    }

    .side-cards::-webkit-scrollbar-thumb {
      background: #9142EF;
      border-radius: 8px;
    }

    .side-cards::-webkit-scrollbar-thumb:hover {
      background: #9142EF;
    } */

    .side-card {
        width: 100%;
        display: flex;
        align-items: stretch;
        background: #fff;

        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        transition: box-shadow 0.2s, background 0.2s, border 0.2s;

        min-height: 100px;
        padding: 0;
        position: relative;
        flex: 1 0 0;
        overflow: hidden;
    }

    .side-card.active {
        background: #8f3fff;
        border-color: #8f3fff;
    }

    .side-card.active .side-card-title,
    .side-card.active .side-card-text {
        color: #fff !important;
    }

    .side-card-img {
        max-width: 200px !important;
        min-width: 200px;
        object-fit: cover;
        object-position: center;
        height: 100%;
        background: #eee;
        border: none;
        display: block;
        flex-shrink: 0;
    }

    .side-card-body {
        padding: 16px 16px;
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: transparent;
    }

    .side-card-title {
        font-size: 22px;
        font-weight: 700;
        color: #222;
        margin-bottom: 6px;
        transition: color 0.2s;
        word-break: break-word;
        white-space: normal;
        overflow: unset;
        text-overflow: unset;
        width: 100%;
        min-width: 0;
        flex: none;
        line-height: 1.2;
    }

    .side-card-text {
        font-size: 16px;
        font-weight: 400;
        color: #555555;
        margin-bottom: 0;
        transition: color 0.2s;
        word-break: break-word;
        white-space: pre-line;
    }

    @media (max-width: 991px) {
        .service-section {
            flex-direction: column;
            align-items: center;
        }

        .side-cards {
            width: 100%;
            min-width: 0;
            max-width: 100%;
            flex-direction: row;
            gap: 16px;
            max-height: none !important;
            overflow-y: visible;
            padding-right: 0;
            margin-top: 16px;
        }

        .side-card {
            flex-direction: column;
            min-width: 160px;
            min-height: 180px;
            width: 100%;
            align-items: flex-start;
        }

        .side-card-img {
            width: 100%;
            height: 90px;
            border-radius: 12px 12px 0 0;
        }

        .side-card-body {
            padding: 12px 10px;
        }

        .side-card-title {
            white-space: normal;
            text-overflow: unset;
            overflow: unset;
            width: 100%;
            min-width: 0;
            flex: none;
        }
    }

    @media (max-width: 768px) {
        .main-title-ppc {
            font-size: 30px;
        }

        .subtitle {
            font-size: 20px;
            line-height: 1.2;
        }

        .main-card {
            padding: 0;
        }

        .main-card img {
            height: 180px;
        }

        .main-card-body {
            padding: 18px 10px 16px 10px;
        }

        .side-cards {
            flex-direction: column;
        }

        .side-card {
            min-width: 0;
            margin-top: 10px;
        }

        .main-card-title {
            font-size: 30px;
            line-height: 1.2;
        }

        .side-card-img {
            display: none;
        }

        .side-card-title {
            font-size: 20px;
            line-height: 1.2;
            margin-bottom: 0px;
        }
    }
</style>
</head>

<body>
    <div class="container d-block">
        <div class="">
            <h2 class="text-white text-center same-all">Our PPC Management Services in Dubai</h2>
            <div class="subtitle">Strategic Advertising Solutions for Business Growth</div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- Main Card (left) -->
                <div class="main-card" id="mainCard">
                    <img src="assests/images/ppc-marketing-company/ser-img-1.webp" id="mainCardImg" alt="Service Image">
                    <div class="main-card-body">
                        <div class="main-card-title" id="mainCardTitle">Google Ads Campaign Management</div>
                        <div class="main-card-text" id="mainCardText">
                           Our PPC campaign management Dubai solutions focus on search, display, shopping, and remarketing campaigns. We handle keyword research, ad copy creation, bid optimization, and A/B testing to maximize conversions.
                        </div>
                        <button class="btn" id="mainCardBtn">READ MORE</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Side Cards (right) -->
                <div class="side-cards" id="sideCards">
                    <!-- Cards will be injected by JS -->
                </div>
            </div>
        </div>
    </div>
    <script>
        // Array of all services (unique text for each)
        const services = [
            {
                title: "Google Ads Campaign Management",
                img: "assests/images/ppc-marketing-company/ser-img-1.webp",
                btn: "READ MORE",
                text: "Our PPC campaign management Dubai solutions focus on search, display, shopping, and remarketing campaigns. We handle keyword research, ad copy creation, bid optimization, and A/B testing to maximize conversions."
            },
            {
                title: "Microsoft Bing Advertising",
                img: "assests/images/ppc-marketing-company/ser-img-2.webp",
                btn: "READ MORE",
                text: "Expand reach beyond Google with Bing Ads. We optimize campaigns to capture high-intent traffic at lower CPCs through targeted pay per click services Dubai strategies."
            },
            {
                title: "Social Media Advertising",
                img: "assests/images/ppc-marketing-company/ser-img-3.webp",
                btn: "READ MORE",
                text: "We design high-converting paid social campaigns across Meta, Instagram, LinkedIn, and YouTube,delivering audience-driven PPC advertising services in Dubai that boost engagement and sales."
            },
            {
                title: "E-commerce PPC Management",
                img: "assests/images/ppc-marketing-company/ser-img-1.webp",
                btn: "READ MORE",
                text: "We manage high-performance shopping and search campaigns that increase product visibility and sales. As a data-driven PPC agency in Dubai, we optimize product feeds, bidding strategies, and remarketing to maximize ROAS and scale e-commerce growth."
            },
            {
                title: "Landing Page Optimization",
                img: "assests/images/ppc-marketing-company/ser-img-2.webp",
                btn: "READ MORE",
                text: "We design and optimize conversion-focused landing pages that align perfectly with your ads. Our approach improves Quality Scores, reduces cost-per-click, and increases lead conversions across all PPC marketing services in Dubai."
            },
            {
                title: "Conversion Tracking Setup",
                img: "assests/images/ppc-marketing-company/ser-img-3.webp",
                btn: "READ MORE",
                text: "Accurate data drives better results. We implement advanced conversion tracking to measure leads, sales, and key user actions, enabling smarter optimization across all PPC campaign management services in Dubai."
            },
        ];


        const sideCards = document.getElementById('sideCards');
        services.forEach((service, idx) => {
            const card = document.createElement('div');
            card.className = 'side-card' + (idx === 0 ? ' active' : '');
            card.setAttribute('data-idx', idx);
            card.innerHTML = `
        <img src="${service.img}" class="side-card-img" alt="${service.title}">
        <div class="side-card-body">
          <div class="side-card-title" title="${service.title}">${service.title}</div>
          <div class="side-card-text">${service.text}</div>
        </div>
      `;
            sideCards.appendChild(card);
        });


        sideCards.addEventListener('click', function (e) {
            let card = e.target;
            while (card && !card.classList.contains('side-card')) card = card.parentElement;
            if (!card) return;
            const idx = +card.getAttribute('data-idx');

            document.getElementById('mainCardImg').src = services[idx].img;
            document.getElementById('mainCardImg').alt = services[idx].title;
            document.getElementById('mainCardTitle').textContent = services[idx].title;
            document.getElementById('mainCardText').textContent = services[idx].text;
            document.getElementById('mainCardBtn').textContent = services[idx].btn;

            document.querySelectorAll('.side-card').forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        });


        function setSideCardsHeight() {
            const mainCard = document.getElementById('mainCard');
            const sideCards = document.getElementById('sideCards');
            if (window.innerWidth > 991) {

                const mainCardHeight = mainCard.offsetHeight;

                sideCards.style.maxHeight = mainCardHeight + 'px';

                const sideCardEls = sideCards.querySelectorAll('.side-card');
                const minHeight = Math.floor((mainCardHeight - 40) / 3);
                sideCardEls.forEach(card => {
                    card.style.minHeight = minHeight + 'px';
                });
            } else {

                sideCards.style.maxHeight = '';
                sideCards.querySelectorAll('.side-card').forEach(card => {
                    card.style.minHeight = '';
                });
            }
        }
        window.addEventListener('load', setSideCardsHeight);
        window.addEventListener('resize', setSideCardsHeight);
    </script>
</body>