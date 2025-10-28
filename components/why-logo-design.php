<style>
    .logo-section {
        background-color: #000;
        color: #fff;
    }

    .logo-img {
        max-width: 350px;
    }

    .heading {
        font-size: 50px;
        font-weight: 700;
    }

    .sub-heading {
        font-size: 20px;
        color: #878787;
    }

    .card {
        background-color: #141414;
        color: #fff;
        border-radius: 10px;
        padding: 30px 15px 15px 15px;
        position: relative;
        text-align: center;
    }

    .check-icon {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #7b3aed;
        color: #fff;
        border-radius: 10px;
        padding: 5px 8px;
        font-size: 20px;
    }

    .card p {
        color: white;
        margin-top: 30px;
        margin-bottom: 0;


    }

    @media (max-width: 991.98px) {
        .logo-section .row.align-items-center {
            display: flex;
            flex-direction: column-reverse;
        }
    }

    @media (max-width: 600px) {
        .heading {
            font-size: 30px;
        }

    }
</style>

<section class="logo-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side Image -->
            <div class="col-lg-6 text-center">
                <img src="assests/images/Logo-design-niche/left-logo.webp" alt="Logo Design" class="img-fluid logo-img">
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-6 text-center">
                <h2 class="heading">Why Logo Design Matters</h2>
                <p class="sub-heading">Your First Impression, Done Right</p>

                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <span class="check-icon">&#10003;</span>
                            <p>A strong logo creates instant recognition</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <span class="check-icon">&#10003;</span>
                            <p>Builds trust and credibility with customers</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <span class="check-icon">&#10003;</span>
                            <p>Reflects your values and brand personality</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <span class="check-icon">&#10003;</span>
                            <p>Sets you apart from <br>competitors</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>