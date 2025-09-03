<style>
    .ppc-sectionn {
        min-height: 100vh;
    }

    .row-full-height {
        height: 100%;
        display: flex;
        flex-wrap: nowrap;
    }

    .col-equal {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ppc-img {
        height: 100%;
        width: auto;
        object-fit: contain; /* or 'cover' if you want it to fill */
        display: block;
        position: relative;
        right: -30px; /* Adjust for overlap */
    }

    .ppc-right {
        background-color: #141414;
        color: white;
        padding: 40px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .ppc-title {
        font-size: 65px;
        font-weight: bold;
    }

    .ppc-title span {
        color: #a259ff;
    }

    .ppc-text {
        font-size: 20px;
        font-weight: 300;
        color: white;
    }

    .ppc-btn {
        background-color: #fc5b62;
        color: white;
        border: none;
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 6px;
        text-decoration: none;
    }

    .ppc-btn:hover {
        background-color: #e14a50;
    }
</style>

<body>
    <div class="container-fluid ppc-sectionn">
        <div class="row row-full-height g-0">
            <!-- Left Side Image -->
            <div class="col-md-4 col-equal">
                <img src="assests/images/PPC-Niche-Design/ready-left-img.png" alt="Robot PPC" class="ppc-img">
            </div>

            <!-- Right Side Content -->
            <div class="col-md-8 ppc-right">
                <h2 class="ppc-title">Ready to Scale Your <br> <span>Business with PPC?</span></h2>
                <p class="ppc-text">Don’t waste another dollar on ads that don’t convert. <br>Let’s build a smarter,
                    results-driven PPC strategy for you <br> — starting today.</p>
                <a href="#" class="ppc-btn">Get My Free PPC Audit Now</a>
            </div>
        </div>
    </div>
</body>
