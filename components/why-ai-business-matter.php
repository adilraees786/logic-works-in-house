<style>
    .why-section {
        background-color: #1E0637;
        color: white;
    }

    .brain-img {
        width: 90%;
        /* max-width: 500px; */
    }

    .overlay-text {
        position: absolute;
        top: 5px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 42px;
        font-weight: 700;
        color: white;
    }

    .text-gradient {
        color: #9142EF;
        font-weight: 600;
        font-size: 32;
    }

    .btn-gradient {
        background: linear-gradient(90deg, #9441EB, #F67B80);
        color: white;
        border: none;
        font-size: 20px;
        font-weight: 600;
        padding: 5px 20px;
        border-radius: 10px;


    }

    .btn-container {
        display: flex;
        justify-content: flex-end;

    }

    .why-content p {
        color: white;
        margin-bottom: 18px;

    }

    @media  (max-width: 768px) {
        .overlay-text {

            margin-bottom: 50px;
            top: 0px;
            text-align: center;
        }

        .brain-img {
            margin-top: 50px;
            width: 60%;
        }

        .btn-container {
            justify-content: start;
        }
    }
</style>

<body>

    <section class="why-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <h2 class="overlay-text">Why It Matters</h2>

                <div class="col-lg-6  col-md-12 text-center position-relative mb-4 mb-md-0">

                    <img src="assests/images/ai-for-business-automation/brain-img.webp" alt="AI Brain"
                        class="img-fluid brain-img">

                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="why-content">
                        <div class="btn-container">
                            <a href="#"><button class="btn btn-gradient mb-4">Get My Free Consultation</button></a>
                        </div>
                        <h5 class="mt-3 text-gradient">Operational Efficiency</h5>
                        <p>Automated workflows eliminate manual, repetitive tasks, freeing your team to focus on
                            value-adding activities.</p>

                        <h5 class="text-gradient">Cost Reduction & Resource Optimization</h5>
                        <p>Lower labor costs, fewer errors, and more consistent quality with AI-driven automation.</p>

                        <h5 class="text-gradient">Scalability</h5>
                        <p>Easily scale processes without a linear increase in human effort or overhead.</p>

                        <h5 class="text-gradient">Enhanced Customer Experience</h5>
                        <p>Faster, more accurate responses via chatbots & virtual assistants; consistent service across
                            channels.</p>

                        <h5 class="text-gradient">Data-Driven Decisions</h5>
                        <p>AI provides insights, forecasts, and real-time analytics to guide strategy.</p>

                        <h5 class="text-gradient">Better Compliance & Risk Management</h5>
                        <p>Automated monitoring and reporting help ensure regulatory compliance and reduce risk.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>