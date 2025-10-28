<style>
    .section-title {
        color: white;
        font-size: 70px;
        font-weight: bold;
    }

    .section-title span {
        color: #9142EF;
    }

    .text-simpe {
        font-size: 20px;
        font-weight: 300;
        color: #878787;
        line-height: 30px;
    }

    .step {
        margin-bottom: 2.5rem;
    }

    .step h5 {
        font-size: 20px;
        color: #9547EB;
        margin-bottom: 0.5rem;
    }

    .step-number {
        font-size: 2rem;
        font-weight: bold;
        color: #aaa;
        min-width: 50px;
        text-align: center;
    }

    .dotted-line {
        max-width: 200px;
        height: 50px;
    }

    .step-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .step-text {
        max-width: 300px;
    }

    .step-text p {
        color: white;
        font-size: 20px;
        line-height: 30px;
        font-weight: 300;
    }

    .bottom-text {
        font-size: 50px;
        font-weight: 900;
        line-height: 1.2;
        margin-top: 40px;
        color: #878787;
    }

    /* Mobile adjustments */
    @media (max-width: 768px) {
        .step-content {
            flex-direction: column;
            align-items: flex-start;
        }

        .step-number {
            text-align: left;
        }

        .section-title {
            font-size: 30px;
        }

        .bottom-text {
            font-size: 30px;

        }

        .bottom-text br {
            display: none;

        }
    }
</style>
</head>

<body>

    <section class="py-5">
        <div class="container">
            <div>
                <div class="text-center">
                    <h2 class="section-title">
                        Simple Process, <span>Big Results</span>
                    </h2>
                    <p class="text-simpe">
                        Getting started with PPC doesn’t have to be complicated — here’s how we make it easy:
                    </p>
                </div>
                <div class="row align-items-center">

                    <!-- Left Column -->
                    <div class="col-md-6 mb-4 mb-md-0">


                        <!-- Step 1 -->
                        <div class="step">
                            <div class="step-content">
                                <div class="step-text">
                                    <h5>Request Your Free Audit</h5>
                                    <p class=" mb-0">
                                        Fill out the short form and our team reviews your current PPC performance.
                                    </p>
                                </div>
                                <span class="step-number">01</span>
                                <img src="assests/images/PPC-Niche-Design/vecotor-1.png" alt="line-001"
                                    class="dotted-line d-none d-md-block">
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="step">
                            <div class="step-content">
                                <div class="step-text">
                                    <h5>Get Your Custom PPC Plan</h5>
                                    <p class="mb-0">
                                        We’ll send you a detailed report showing wasted spend, missed opportunities,
                                        and a step-by-step strategy.
                                    </p>
                                </div>
                                <span class="step-number">02</span>
                                <img src="assests/images/PPC-Niche-Design/vecotor-2.png" alt="line-002"
                                    class="dotted-line d-none d-md-block">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="step">
                            <div class="step-content">
                                <div class="step-text">
                                    <h5>Launch & Grow</h5>
                                    <p class="mb-0">
                                        We optimize your campaigns, track performance, and scale results — so you can
                                        focus on running your business.
                                    </p>
                                </div>
                                <span class="step-number">03</span>
                                <img src="assests/images/PPC-Niche-Design/vecotor-3.png" alt="line-003"
                                    class="dotted-line d-none d-md-block">
                            </div>
                        </div>

                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6 text-center">
                        <img src="assests/images/PPC-Niche-Design/left-img.webp" alt="process-image" class="img-fluid">
                    </div>
                </div>
                <div class="text-center">
                    <h6 class="bottom-text">From first click to lasting growth — <br> we’ve got your PPC covered.</h6>
                </div>
            </div>
        </div>
    </section>

</body>

</html>