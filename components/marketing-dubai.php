<style>
    .main-section {
        display: flex;
        flex-wrap: wrap;
        min-height: 100vh;
        align-items: center;
        padding: 0 50px;
    }

    .left-content {
        flex: 1;
        display: flex;
        align-items: center;
        padding: 20px;
    }

    .left-inner {
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
    }

    .vertical-heading {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 48px;
        font-weight: bold;
        color: #fff;
        letter-spacing: 1.2px;
        margin-right: 30px;
        line-height: 60px;

    }

    .description {
        max-width: 500px;
    }

    .description p {
        font-size: 12px;
        line-height: 15px;
        letter-spacing: 0.36px;
        color: white;
    }

    .description h5 {
        font-size: 24px;
        margin-top: 30px;
        color: white;
    }

    .description h6 {
        font-size: 12px;
        font-weight: 900;
        margin-top: 30px;
        color: #582499;
    }

    .get-started-btn {
        background: linear-gradient(to right, #9D50BB, #6E48AA);
        border: none;
        padding: 10px 30px;
        color: white;
        margin-top: 20px;
    }

    .right-content {
        flex: 1;
        text-align: center;
        padding: 20px;
    }

    .right-content img {
        max-width: 100%;
        height: auto;

    }

    .description .success-anchor a {
        font-size: 16px;
        text-transform: uppercase;
        background-color: #582499;
        padding: 18px 0px 18px 50px;
        color: #fff;
        text-decoration: none;
        width: 100%;
 
    }

    .description .success-anchor a span {
        background-color: #8E3DF3;
        padding: 18px 25px;
        border-left: 2px solid #fff;
        margin-left: 30px;
    }

    @media (max-width: 768px) {
        .main-section {
            flex-direction: column;
            padding: 30px 15px;
        }

        .left-inner {
            flex-direction: column;
            align-items: flex-start;
        }

        .vertical-heading {
            writing-mode: horizontal-tb;
            transform: rotate(0deg);
            margin-bottom: 20px;
            margin-right: 0;
            font-size: 30px;
            white-space: nowrap;
            line-height: 35px;
        }

        .description {
            margin-bottom: 30px;
        }

        .right-content {
            padding: 0;
        }
    }
</style>


<body>

    <div class="main-section">
        <!-- Left Side -->
        <div class="left-content">
            <div class="left-inner">
                <div class="vertical-heading"><span class="fs-18 fw-300">why</span><br>DIGITAL MARKETING <br>IN DUBAI?
                </div>

                <div class="description">
                    <p>
                        Dubai is a global business hub where digital presence matters more than ever. With millions of
                        tech-savvy consumers, businesses need to leverage online platforms to stay competitive. From
                        search engine visibility to social media engagement, digital marketing connects your brand with
                        the right audience at the right time.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.

                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip. Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                    </p>

                    <h5>Muhammad Haris</h5>
                    <h6>Project Manager</h6><br>

                    <div class="success-anchor">
                        <a href="#">Read More <span></span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div class="right-content">
            <img src="assests/images/digital-marketing-agency-dubai/right-side-img.png" alt="Dubai Skyline">
        </div>
    </div>

</body>