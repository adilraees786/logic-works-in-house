<style>
    .process-section {
        background: #000;
        padding: 0;
    }

    .process-header {
        background: #9244EF;
        text-align: center;
        padding: 10px 0;
        margin: 0;
        position: relative;
        border: 1px dashed white;
    }



    .process-header h2 {
        color: white;
        font-size: 65px;
        font-weight: 700;
        margin: 0 0 10px 0;
        letter-spacing: 0%;
    }

    .process-header p {
        color: white;
        font-size: 35px;
        font-weight: 400;
        margin: 0;
        opacity: 0.95;

    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 300px);
        gap: 0;
        margin-top: 20px;
        border: 3px solid gray;
    }

    .process-item {
        position: relative;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .process-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;


        display: flex;
        align-items: flex-end;
        padding: 30px;
    }

    .process-overlay.center {
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .process-overlay.bottom-right {
        justify-content: flex-end;
    }

    .process-text {
        color: white;
        z-index: 2;
    }

    .process-text h3 {
        font-size: 1.8rem;
        font-weight: bold;
        margin: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        line-height: 1.2;
    }

    .process-text .highlight {
        background: #F57B83;
        padding: 2px 16px;
        border-radius: 3px;
        font-size: 0.9rem;
        display: inline-block;
        margin-bottom: 5px;
        cursor: pointer;
    }

    /* Background images for each item */
    .item-1 {
        background-image: url('assests/images/performance-marketing/frame-1.webp');
    }

    .item-2 {
          background-image: url('assests/images/performance-marketing/frame-2.webp');
    }

    .item-3 {
         background-image: url('assests/images/performance-marketing/frame-3.webp');
    }

    .item-4 {
  background-image: url('assests/images/performance-marketing/frame-4.webp');
    }

    .item-5 {
         background-image: url('assests/images/performance-marketing/frame-5.webp');
    }

    .item-6 {
          background-image: url('assests/images/performance-marketing/frame-6.webp');
    }

    @media (max-width: 768px) {
        .process-grid {
            grid-template-columns: 1fr;
            grid-template-rows: repeat(6, 250px);
        }

        .process-header h2 {
            font-size: 2rem;
        }

        .process-text h3 {
            font-size: 1.5rem;
        }

        .process-overlay {
            padding: 20px;
        }
    }

    @media (max-width: 992px) and (min-width: 769px) {
        .process-grid {
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(3, 280px);
        }
    }

    /* our process section css end */
</style>

<body>
    <section class="process-section bg-black">
        <!-- Header with purple background -->
        <div class="process-header">
            <h2>Industry Specific Expertise</h2>
            <p>Real Results from Real Businesses</p>
        </div>

        <!-- Process Grid -->
        <div class="process-grid">
            <!-- 1 -->
            <div class="process-item item-1">
                <div class="process-overlay">
                    <div class="process-text">
                        <h3>Performance for <br>
                            D2C & E-commerce</h3>
                        <div class="highlight">Explore More</div>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="process-item item-2">
                <div class="process-overlay">
                    <div class="process-text">
                        <h3>Performance for <br>
                            Social Commerce</h3>
                            <div class="highlight">Explore More</div>
                    </div>
                </div>
            </div>

            <!-- 3  -->
            <div class="process-item item-3">
                <div class="process-overlay">
                    <div class="process-text">
                        <h3>Performance for<br>
                            Mobile Apps </h3>
                        <div class="highlight">Explore More</div>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="process-item item-4">
                <div class="process-overlay">
                    <div class="process-text">
                        <h3>Performance for <br>
                            Marketplace</h3>
                        <div class="highlight">Explore More</div>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="process-item item-5">
                <div class="process-overlay">
                    <div class="process-text">
                        <h3>Performance for <br>
                            Omnichannel</h3>
                        <div class="highlight">Explore More</div>
                    </div>
                </div>
            </div>

            <!--6 -->
            <div class="process-item item-6">
                <div class="process-overlay">
                    <div class="process-text">
                        <h3>Performance for <br>
                            B2B</h3>
                        <div class="highlight">Explore More</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>