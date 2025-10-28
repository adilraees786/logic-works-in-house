<style>
    .skills-section {
        color: #fff;
        text-align: center;
      
        display: flex;
        justify-content: center;
        align-items: center;
   
       
    }

    .skills-section .container {
    
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 1200px;
    }

    .circle {
        width: 140px;
        height: 140px;
        border: 3px solid white;
        border-radius: 50%;
        position: relative;
        background-color: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .circle img {
        max-width: 60%;
        height: auto;
    }

    .circle-number {
        position: absolute;
        top: -12px;
        right: -12px;
        background-color: #5c2cac;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        font-weight: bold;
        font-size: 16px;
        z-index: 2;
    }

    .skill-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        max-width: 180px;
    }

    .vector-img {
        height: 40px;
        width: auto;
    }

    .process-flow {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        flex-wrap: wrap;
        gap: 20px; /* space between steps */
    }

    .step-group {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 10px;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
        .vector-img {
            display: none !important;
        }

        .process-flow {
            flex-direction: column !important;
        }

        .step-group {
            flex-direction: column;
            margin: 15px 0;
        }
    }
</style>

<section class="skills-section text-white">
    <div class="container py-5">
        <div>
            <h2 class="same-all mb-4">Our Approach to App Development</h2>

            <div class="process-flow">

                <!-- Step 1 -->
                <div class="step-group">
                    <div class="skill-card">
                        <div class="circle">
                            <div class="circle-number">01</div>
                            <img src="assests/images/app-development-dubai/language.webp" alt="Language Icon">
                        </div>
                        <h5 class="fw-bold mt-3">Collaborative Planning</h5>
                    </div>
                    <!-- Arrow -->
                    <img src="assests/images/app-development-dubai/vector.webp" alt="vector"
                        class="vector-img d-none d-md-block mx-3">
                </div>

                <!-- Step 2 -->
                <div class="step-group">
                    <div class="skill-card">
                        <div class="circle">
                            <div class="circle-number">02</div>
                            <img src="assests/images/app-development-dubai/database.webp" alt="Database Icon">
                        </div>
                        <h5 class="fw-bold mt-3">User-Centered Design</h5>
                    </div>
                    <!-- Arrow -->
                    <img src="assests/images/app-development-dubai/vector.webp" alt="vector"
                        class="vector-img d-none d-md-block mx-3">
                </div>

                <!-- Step 3 -->
                <div class="step-group">
                    <div class="skill-card">
                        <div class="circle">
                            <div class="circle-number">03</div>
                            <img src="assests/images/app-development-dubai/download.webp" alt="Download Icon">
                        </div>
                        <h5 class="fw-bold mt-3">Continuous Testing & Improvement</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
