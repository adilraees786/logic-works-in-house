<head>

    <style>
        .section-container {

            max-width: 1200px;
            margin: auto;
            position: relative;
        }

        .main-heading {
            text-align: center;
            font-weight: 600;
            font-size: 55px;
            color: white;

        }

        .sub-heading {
            text-align: center;
            font-size: 20px;
            color: #878787;

            font-weight: 600;
        }

        /* Position image overlapping the heading */
        .heading-image-container {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 3rem auto;
        }

        .heading-image-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            position: relative;
            top: -25px;
            z-index: 1;
        }

        /* Cards container */
        .cards-row {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .cards-col {
            flex: 1 1 45%;
            min-width: 280px;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .card-custom {
            background: #1e1e1e;
            border-radius: 10px;
            padding: 1.2rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .card-text {
            flex: 1;
            font-size: 16px;
            color: #FFFFFF;
            line-height: 25px;
        }

        .card-number {
            background: #9142EF;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 1rem;
            flex-shrink: 0;
        }

        @media (max-width: 767px) {
            .cards-row {
                flex-direction: column;
                gap: 2rem;
            }

            .sub-heading {
                font-size: 15px;
            }

            .heading-image-container {
                display: none;
            }

            .main-heading {
                font-size: 30px;
            }

            .cards-col {
                flex: 1 1 100%;
            }

            /* Adjust image size and position for smaller screens */
            /* .heading-image-container {
                width: 70px;
                height: 70px;
                margin-bottom: 1.5rem;
            }

            .heading-image-container img {
                top: 0;
            } */
        }
    </style>
</head>

<body>
    <section class="section-container">

        <div class="heading-wrapper" style="display: flex; align-items: center; justify-content: center; gap: 20px;">
            <h2 class="main-heading">
                Why Your Current Website May Be Holding You Back
            </h2>
            <div class="heading-image-container" style="width: 300px; height: 300px;">
                <img src="assests/images/niche-web-dev/3d-image.webp" alt="3D Cubes"
                    style="width: 100%; height: 100%; object-fit: contain;" />
            </div>
        </div>

        <p class="sub-heading">
            A website should generate leads, build trust, and grow with your business. But here’s <br> where most sites
            fall short:
        </p>

        <div class="cards-row">
            <!-- Left Column Cards -->
            <div class="cards-col">
                <div class="card-custom">
                    <p class="card-text">
                        Slow loading speeds — Visitors bounce before they even see your offer.
                    </p>
                    <div class="card-number">01</div>
                </div>

                <div class="card-custom">
                    <p class="card-text">
                        Security risks — Outdated plugins and weak setups leave businesses vulnerable to attacks.
                    </p>
                    <div class="card-number">03</div>
                </div>

                <div class="card-custom">
                    <p class="card-text">
                        Generic templates — Your site looks like everyone else’s, blending in instead of standing out.
                    </p>
                    <div class="card-number">05</div>
                </div>
            </div>

            <!-- Right Column Cards -->
            <div class="cards-col">
                <div class="card-custom">
                    <p class="card-text">
                        Poor mobile experience — Over 60% of users browse on phones, yet most sites break on small
                        screens.
                    </p>
                    <div class="card-number">02</div>
                </div>

                <div class="card-custom">
                    <p class="card-text">
                        Hard to update — You waste time struggling with changes instead of focusing on growth.
                    </p>
                    <div class="card-number">04</div>
                </div>

                <div class="card-custom">
                    <p class="card-text">
                        No scalability — As your business grows, your site can’t keep up with new needs.
                    </p>
                    <div class="card-number">06</div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>