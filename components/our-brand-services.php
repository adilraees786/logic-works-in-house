<style>
    /* body {
            background: #000;
            color: white;
            font-family: 'Arial', sans-serif;
        } */

    .service-image-container {
        padding: 20px;
        position: relative;
    }

    .service-image-container img {
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        transition: all 0.3s ease;
    }

    .service-content-container {
        /* padding: 40px; */
        /* height: 100vh; */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    #contentTitle {
        color: white;
        font-weight: bold;
        margin-bottom: 30px;
        font-size: 2.5rem;
    }

    .slider-controls {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }

    .slider-btn {
        background: transparent;
        border: 2px solid #6f42c1;
        color: #6f42c1;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-left: 10px;
        font-size: 18px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .slider-btn:hover {
        background: #6f42c1;
        color: white;
    }

    .slider-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .nav-tabs {
        border-bottom: 2px solid #333;
        margin-bottom: 30px;
        background-color: white;
        border-radius: 20px;

    }

    .nav-tabs .nav-link {
        background: transparent;
        border: none;
        color: #232323;
        padding: 15px 25px;
        margin-right: 10px;
        border-radius: 8px 8px 0 0;
        transition: all 0.3s ease;
        font-size: 15px;
        font-weight: bold;
    }

    .nav-tabs .nav-link:hover {
        background: rgba(111, 66, 193, 0.2);
        color: #6f42c1;
    }

    .nav-tabs .nav-link.active {
        background: #6f42c1;
        color: white;
        border: none;
    }

    .tab-content {
        margin-top: 20px;
    }

    .tab-pane {
        display: none;
    }

    .tab-pane.show {
        display: block;
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .content-text p {
        font-size: 16px;
        line-height: 18px;
        margin-bottom: 20px;
        font-weight: 400;
        color: #555555;
    }

    .view-more {
        color: white;
        text-decoration: none;
        font-weight: 400;
        font-size: 19px;
        transition: color 0.3s ease;
    }

    .view-more:hover {
        color: #8a5cf6;
    }

    .fade-in {
        animation: fadeIn 0.5s ease;
    }

    .discover-heading {
        color: white;
        font-size: 72px;
        font-weight: bold;
        text-transform: uppercase;
        margin: 80px 0 -50px;
        letter-spacing: 3px;

    }

    @media (max-width: 576px) {
        .discover-heading {
            font-size: 35px;
            margin: 60px 0 -30px;
            letter-spacing: 1.5px;
            text-align: center;
        }

        .service-image-container img {
            margin-top: 15px;

        }

        .nav-tabs {
            border-bottom: none;
            margin-bottom: opx;
            background-color: white;
            border-radius: 0px;

        }
    }
</style>


<body>
    <div class="container">
        <div class="container-fluid">
            <!--  heading at the top -->
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="discover-heading">Our Brand Services</h1>
                </div>
            </div>

            <div class="row min-vh-100 align-items-center">
                <!-- Left side - Image -->
                <div class="col-md-6 h-100 d-flex align-items-center">
                    <div class="service-image-container w-100 h-100 d-flex align-items-center justify-content-center">
                        <img id="serviceImage" src="assests/images/branding-dubai/brand.png" alt="Service Image"
                            class="img-fluid">
                    </div>
                </div>

                <!-- Right side - Content -->
                <div class="col-md-6 h-100 d-flex align-items-center">
                    <div class="service-content-container w-100 h-100 d-flex flex-column justify-content-center">
                        <h1 id="contentTitle" class="display-4">Brand Strategy Development</h1>

                        <!-- Slider controls above tabs -->
                        <!-- <div class="slider-controls">
                            <button id="prevBtn" class="slider-btn" onclick="previousSlide()">&lt;</button>
                            <button id="nextBtn" class="slider-btn" onclick="nextSlide()">&gt;</button>
                        </div> -->

                        <!-- Tabs -->
                        <div class="service-tabs">
                            <ul class="nav nav-tabs" id="serviceTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" onclick="changeContent(0)" type="button">Brand
                                        Strategy</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" onclick="changeContent(1)" type="button">Logo
                                        Design</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" onclick="changeContent(2)" type="button">Visual
                                        Identity</button>
                                </li>
                            </ul>
                        </div>

                        <!-- Content below tabs -->
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="content-0">
                                <div class="content-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <a href="#" class="view-more">View More About Us</a>
                            </div>
                            <div class="tab-pane fade" id="content-1">
                                <div class="content-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <a href="#" class="view-more">View More About Us</a>
                            </div>
                            <div class="tab-pane fade" id="content-2">
                                <div class="content-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <a href="#" class="view-more">View More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Data for each tab/slide
        const services = [
            {
                title: "Brand Strategy Development",
                image: src = "assests/images/branding-dubai/brand.png",
                content: `<div class="content-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <a href="#" class="view-more">View More About Us</a>`
            },
            {
                title: "Logo Design",
                image: src = "assests/images/branding-dubai/brand.png",
                content: `<div class="content-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="view-more">View More About Us</a>`
            },
            {
                title: "Visual Identity",
                image: src = "assests/images/branding-dubai/brand.png",
                content: `<div class="content-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <a href="#" class="view-more">View More About Us</a>`
            }
        ];

        let currentIndex = 0;

        function updateContent(index) {
            // Update image
            document.getElementById('serviceImage').src = services[index].image;
            // Update title
            document.getElementById('contentTitle').textContent = services[index].title;
            // Update tab content
            document.querySelectorAll('.tab-pane').forEach((pane, i) => {
                if (i === index) {
                    pane.classList.add('show', 'active', 'fade-in');
                    pane.innerHTML = services[i].content;
                } else {
                    pane.classList.remove('show', 'active', 'fade-in');
                }
            });
            // Update active tab
            document.querySelectorAll('#serviceTabs .nav-link').forEach((tab, i) => {
                tab.classList.toggle('active', i === index);
            });
            // Update slider buttons
            document.getElementById('prevBtn').disabled = (index === 0);
            document.getElementById('nextBtn').disabled = (index === services.length - 1);
        }

        function changeContent(index) {
            currentIndex = index;
            updateContent(currentIndex);
        }

        function previousSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateContent(currentIndex);
            }
        }

        function nextSlide() {
            if (currentIndex < services.length - 1) {
                currentIndex++;
                updateContent(currentIndex);
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function () {
            updateContent(currentIndex);
        });
    </script>
</body>