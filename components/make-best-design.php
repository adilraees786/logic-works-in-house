webp<style>
    .branding-dubai-best-design {
        background-color: #000;
        color: white;
        text-align: center;
    }

    .branding-dubai-best-design h2 {
        font-size: 60px;
        font-weight: 700;
    }

    .branding-dubai-best-design p {
        /* color: #858585; */
        color: white;
        font-size: 18px;
        line-height: 25px;
        font-weight: 400;
    }

    .portfolio-tabs button.active {
        color: #582499;
    }

    .portfolio-image {
        width: 100%;
        height: auto;
        display: block;
    }

    .btn-group {
        background-color: white;
        color: black;
        padding: 10px 20px;
    }

    .btn {
        color: black;
        font-size: 20px;
        font-weight: 700;
    }

    .hidden {
        display: none !important;
    }

    .portfolio-row {
        display: flex;
        flex-wrap: wrap;
        margin: 0;
    }

    .portfolio-item {
        padding: 0;
        margin: 0;
    }

    @media (max-width: 768px) {
        .branding-dubai-best-design h2 {
            font-size: 30px;
        }

    }

    @media (max-width: 576px) {
        .portfolio-section h1 {
            font-size: 35px;
            letter-spacing: 1.5px;
            text-align: center;
        }
    }
</style>

<section class="branding-dubai-best-design">
    <h2>Where Dubai’s Best Brands Begin</h2>
    <p class="mb-4">Your brand should feel authentic and bold. We craft identities that stand tall <br> in Dubai’s
        fast-paced
        market. With vision and design, we help you shine</p>

    <!-- Tabs -->
    <div class="btn-group portfolio-tabs mb-5" role="group">
        <button type="button" class="btn btn-outline-black active" onclick="filterImages('all', this)">All</button>
        <button type="button" class="btn btn-outline-black" onclick="filterImages('logo', this)">Logo</button>
        <button type="button" class="btn btn-outline-black" onclick="filterImages('books', this)">Books &
            Magazines</button>
        <button type="button" class="btn btn-outline-black" onclick="filterImages('website', this)">Website</button>
        <button type="button" class="btn btn-outline-black"
            onclick="filterImages('stationery', this)">Stationery</button>
    </div>

    <!-- Portfolio Images -->
    <div class="portfolio-row" id="portfolioGrid">
        <!-- Row 1: 4 Images -->
        <div class="col-3 portfolio-item all books"><img src="assests/images/branding-dubai/image-1.webp"
                class="portfolio-image"></div>
        <div class="col-3 portfolio-item all logo"><img src="assests/images/branding-dubai/image-2.webp"
                class="portfolio-image"></div>
        <div class="col-3 portfolio-item all website"><img src="assests/images/branding-dubai/image-3.webp"
                class="portfolio-image"></div>
        <div class="col-3 portfolio-item all stationery"><img src="assests/images/branding-dubai/image-4.webp"
                class="portfolio-image"></div>

        <!-- Row 2: 2 Images -->
        <div class="col-6 portfolio-item all stationery"><img src="assests/images/branding-dubai/img-5.webp"
                class="portfolio-image"></div>
        <div class="col-6 portfolio-item all books"><img src="assests/images/branding-dubai/image-6.webp"
                class="portfolio-image"></div>

        <!-- Row 3: 4 Images -->
        <div class="col-3 portfolio-item all logo"><img src="assests/images/branding-dubai/image-7.webp"
                class="portfolio-image"></div>
        <div class="col-3 portfolio-item all website"><img src="assests/images/branding-dubai/image-8.webp"
                class="portfolio-image"></div>
        <div class="col-3 portfolio-item all stationery"><img src="assests/images/branding-dubai/image-9.webp"
                class="portfolio-image"></div>
        <div class="col-3 portfolio-item all books"><img src="assests/images/branding-dubai/image-1.webp"
                class="portfolio-image"></div>

        <!-- Row 4: 1 Image -->
        <div class="col-12 portfolio-item all books"><img src="assests/images/branding-dubai/image-10.webp"
                class="portfolio-image"></div>
    </div>
</section>

<script>
    function filterImages(category, button) {
        const items = document.querySelectorAll('.portfolio-item');
        const buttons = document.querySelectorAll('.portfolio-tabs button');

        // Update active button
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        // Filter images
        items.forEach(item => {
            if (category === 'all' || item.classList.contains(category)) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }
</script>