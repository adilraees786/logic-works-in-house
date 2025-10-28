<style>
    .email-section {
        min-height: 500px;
        height: auto;
        overflow: hidden;
        color: white;
        padding: 40px 0;

    }

    .email-section .row {
        margin: 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 50px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .section-header p {
        font-size: 24px;
        font-weight: 400;
        margin: 0;
        color: white;
    }

    .left-section {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-color: #2C2A2A;
    }

    .left-section .content {
        max-width: 500px;
    }

    .left-section .content h2 {
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .left-section .content p {
        font-size: 18px;
        font-weight: 300;
        line-height: 30px;
        color: white;
    }

    .progress-label {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 5px;
        color: white;
    }

    .progress {
        height: 10px;
        background-color: #333;
    }

    .progress-bar {
        background-color: #582499;
    }

    .btn-purple-email {
        background-color: #582499;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
        border: none;
        border-radius: 4px;
    }

    .btn-purple-email:hover {
        background-color: #732d91;
    }

    .right-image-section-email {
        position: relative;
        overflow: hidden;
        max-height: 600px;
    }

    .right-image-section-email img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .image-overlay-text {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        padding: 20px;


        max-width: 80%;
    }

    .image-overlay-text h5 {
        font-weight: 700;
        font-size: 24px;
        line-height: 30px;
        margin: 0;
    }

    .image-overlay-text p {
        font-weight: 300;
        font-size: 15px;
        line-height: 22px;
        margin-top: 8px;
        color: white;
    }

    @media (max-width: 768px) {
        .email-section {
            padding: 20px 10px;

        }



        .section-header h2 {
            font-size: 30px;
        }

        .section-header h2 br {
            display: none;
        }

        .section-header p {
            font-size: 18px;
        }

        .left-section,
        .right-image-section-email {
            height: auto;
            margin-top: 10px;

        }

        .right-image-section-email img {
            height: auto;
        }

        .image-overlay-text {
            position: static;
            background-color: transparent;
            padding: 10px 0;
        }

        .image-overlay-text h5 {
            font-size: 20px;
        }

        .image-overlay-text p {
            font-size: 14px;
        }
    }
</style>

<section class="email-section">
    <div class="section-header">
        <h2>Emails Failing to Reach the <br> Right Audience?</h2>
        <!-- <p>The ROI Powerhouse for Your Business</p> -->
    </div>

    <div class="email-marketing row g-0">
        <!-- Left Side -->
        <div class="col-lg-6 col-md-12 left-section">
            <div class="content">
                <h2>We Deliver Precise Targeting That Boosts Engagement</h2>
                <p>Poor targeting wastes effort. It reduces conversions. We use data-driven segmentation and behavior
                    insights. Emails reach the right audience every time. Messages land in inboxes of people ready to
                    engage. This boosts open rates, drives clicks, and maximizes sales opportunities.</p>

                <div class="mt-4">
                    <!-- First Progress -->
                    <div class="progress-label">
                        <span>TOP PROJECT</span>
                        <span>80%</span>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <!-- Second Progress -->
                    <div class="progress-label">
                        <span>TOP PROJECT</span>
                        <span>90%</span>
                    </div>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <a href="#" class="btn btn-purple-email">Get Started</a>
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div class="col-lg-6 col-md-12 right-image-section-email">
            <img src="assests/images/Email-Marketing-dubai/right-image.webp" alt="Email Marketing">
            <div class="image-overlay-text">
                <h5>Building Brands on the Email Marketing</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1</p>
            </div>
        </div>
    </div>
</section>