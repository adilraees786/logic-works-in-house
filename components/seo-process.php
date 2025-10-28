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


    .seo-section-seo {
        background-color: #212121;
        color: white;
        padding: 80px 0px;
    }


    .tab-content-seo {
        background: white;
        padding: 20px;
    }

    .tab-pane-seo p {
        font-size: 18px;
        font-weight: 300;
        line-height: 21px;
        letter-spacing: 0.18px;
        color: #8F8F8F;
    }

    .nav-seo {
        background: white;
    }

    .nav-seo .nav-link {
        font-size: 20px;
        color: black;
    }

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


    .skill-label {
        color: white;
    }

    h2,
    h5 {
        text-transform: uppercase;
    }

    @media (max-width: 500px) {
        h5 {
            margin-top: 10px;
        }

        .process-heading {
            font-size: 30px;
            line-height: 1.2;
        }

        .sub-process-heading {
            font-size: 20px;
            line-height: 1.2;
        }

        .seo-section-seo {
            padding: 0px;
        }
    }
</style>



<div class="bg-black text-center">
    <div class="seo-header">
        <h2 class="process-heading">How Our SEO Process Works</h2>
        <p class="sub-process-heading">Our SEO Process Focuses on Data and Growth</p>
    </div>
</div>

<div class="seo-section-seo">
    <div class="container">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-6 seo-left">
                <h5 id="processTitle" class="text-uppercase fs-30 fw-300">Research & Audit</h5>

                <ul class="nav nav-tabs nav-seo mt-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active seo-tab-btn" id="seo-tab" data-bs-toggle="tab"
                            data-bs-target="#seo" type="button" role="tab" aria-controls="seo"
                            aria-selected="true">Research</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link seo-tab-btn" id="marketing-tab" data-bs-toggle="tab"
                            data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing"
                            aria-selected="false">Strategy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link seo-tab-btn" id="social-tab" data-bs-toggle="tab"
                            data-bs-target="#social" type="button" role="tab" aria-controls="social"
                            aria-selected="false">Tracking</button>
                    </li>
                </ul>

                <div class="tab-content tab-content-seo" id="myTabContent">
                    <div class="tab-pane fade show active tab-pane-seo" id="seo" role="tabpanel"
                        aria-labelledby="seo-tab">
                        <p>Every SEO campaign starts with research and audit. We review your website and check its
                            structure carefully. Performance is measured to find technical and content gaps.
                            Audience behavior and competitor activity are also studied at this stage. These insights
                            show what works best in your industry. An SEO agency Dubai knows how to match data with
                            business goals. This way, no time is wasted on random actions. The audit highlights
                            strengths, weaknesses, and opportunities. It builds a clear plan for the next steps.
                            Strong research creates the base for long-term SEO success and steady business growth.
                        </p>
                    </div>

                    <div class="tab-pane fade tab-pane-seo" id="marketing" role="tabpanel"
                        aria-labelledby="marketing-tab">
                        <p>After the audit, we build a strategy for your goals. Web pages, titles, and content are
                            improved for higher rankings. Meta descriptions are checked to bring more clicks. We
                            also improve speed, mobile use, and site structure. As the best SEO agency in Dubai, we
                            combine proven methods with market insight. The plan is flexible and changes when search
                            rules or audience needs shift. Each update supports growth in traffic, visibility, and
                            sales. This process keeps your website strong in the long run. Clear steps and steady
                            updates create lasting results and real success online for your business.</p>
                    </div>

                    <div class="tab-pane fade tab-pane-seo" id="social" role="tabpanel" aria-labelledby="social-tab">
                        <p>SEO work does not stop after updates are made. Rankings, traffic, and conversions must be
                            tracked often. We use strong analytics tools to check performance. This helps find areas
                            that need quick improvement. Small tests and changes make campaigns stronger over time.
                            Results keep growing instead of going down. Reports are shared in clear and simple
                            words. Unlike many seo agencies Dubai, our focus is long-term success, not short gains.
                            Every update adds value and builds stronger visibility. This process keeps your business
                            growing. SEO becomes a cycle of tracking, testing, and improving for lasting online
                            results.</p>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-md-6 seo-right">
                <h5 class="text-uppercase fs-30 fw-300">Our Skills</h5>

                <div class="mt-3 skills-wrapper">
                    <p class="skill-label">Discovery & Analysis <span class="float-end">92%</span></p>
                    <div class="progress mb-3">
                        <div class="progress-bar" style="width: 92%;"></div>
                    </div>

                    <p class="skill-label">Keyword Strategy <span class="float-end">97%</span></p>
                    <div class="progress mb-3">
                        <div class="progress-bar" style="width: 97%;"></div>
                    </div>

                    <p class="skill-label">Optimization <span class="float-end">90%</span></p>
                    <div class="progress mb-3">
                        <div class="progress-bar" style="width: 90%;"></div>
                    </div>

                    <p class="skill-label">Content Creation <span class="float-end">98%</span></p>
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
        title.textContent = "Research & Audit";
    });

    document.getElementById('marketing-tab').addEventListener('click', () => {
        title.textContent = "Strategy & Optimization";
    });

    document.getElementById('social-tab').addEventListener('click', () => {
        title.textContent = "Tracking & Improvement";
    });
</script>