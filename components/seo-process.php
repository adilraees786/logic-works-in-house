<style>
  

    .process-heading {
        color: white;
        font-size: 72px;
        font-weight: 900;
        line-height: 72px;
        letter-spacing: 0.58px;
    }

    .sub-process-heading {
        color: white;
        font-size: 30px;
        font-weight: 300;
        line-height: 30px;
        letter-spacing: 0.73px;
        margin-bottom: 30px;
    }

    .tab-content {
        background: white;
        padding: 20px;

    }

    .tab-pane p {
        font-size: 18px;
        font-weight: 300;
        line-height: 21px;
        letter-spacing: 0.18px;
        color: #8F8F8F;
    }

    .nav {
        background: white;
    }

    .nav-link {
        font-size: 20px;
        color: black;
    }

    /* .nav-link:hover {
            background: white !important;
        } */

    .nav-tabs .nav-link.active {

        color: black;
    }

    .progress {
        height: 20px;
        background-color: white;

        display: flex;
        align-items: center;

    }

    .progress-bar {
  
        height: 8px;
        background: linear-gradient(to right, #6979FF, #4CBEFE);
        border-radius: 5px;
    }


    h2,
    h5 {
        text-transform: uppercase;
    }

    @media (max-width: 450px) {
        h5 {
            margin-top: 10px;
        }
    }
</style>


<body>

    <div class="bg-black text-center">
        <div>
            <h2 class="process-heading">OUR PROCESS</h2>
            <p class="sub-process-heading">How We Optimize Your Online Presence</p>
        </div>
    </div>
    <div class="" style=" background-color: #212121; color: white;   padding: 80px 0px;">
        <div class="container">

            <div class="row">
                <!-- Left Section -->
                <div class="col-md-6">
                    <h5 id="processTitle" class="text-uppercase fs-30 fw-300">SEO Process</h5>

                    <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo"
                                type="button" role="tab" aria-controls="seo" aria-selected="true">SEO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing"
                                type="button" role="tab" aria-controls="marketing"
                                aria-selected="false">Marketing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social"
                                type="button" role="tab" aria-controls="social" aria-selected="false">Social
                                Media</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum/Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                        <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum/Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum/Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-md-6">
                    <h5 class="text-uppercase fs-30 fw-300">Our Skills</h5>

                    <div class="mt-3">
                        <p style="color: white;">Discovery & Analysis <span class="float-end">92%</span></p>
                        <div class="progress mb-3">
                            <div class="progress-bar" style="width: 92%;"></div>
                        </div>

                        <p style="color: white;">Keyword Strategy <span class="float-end">97%</span></p>
                        <div class="progress mb-3">
                            <div class="progress-bar" style="width: 97%;"></div>
                        </div>

                        <p style="color: white;">Optimization <span class="float-end">90%</span></p>
                        <div class="progress mb-3">
                            <div class="progress-bar" style="width: 90%;"></div>
                        </div>

                        <p style="color: white;">Content Creation <span class="float-end">98%</span></p>
                        <div class="progress mb-3">
                            <div class="progress-bar" style="width: 98%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const title = document.getElementById('processTitle');

        document.getElementById('seo-tab').addEventListener('click', () => {
            title.textContent = "SEO Process";
        });

        document.getElementById('marketing-tab').addEventListener('click', () => {
            title.textContent = "Marketing Process";
        });

        document.getElementById('social-tab').addEventListener('click', () => {
            title.textContent = "Social Media Process";
        });
    </script>