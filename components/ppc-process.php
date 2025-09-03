<style>
  .ppc-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 80px 20px;
  }

  .header-section {
    text-align: center;
  }

  .main-title {
    font-size: 48px;
    font-weight: 900;
    line-height: 1.2;
  }

  .subtitle {
    font-size: 18px;
    color: white;
    margin-top: 10px;
  }

  .step {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .step.reverse {
    flex-direction: row-reverse;
  }

  .step-image {
    max-width: 380px;
    /* height: 380px; */
    /* transform: rotate(45deg); */
    overflow: hidden;
    flex-shrink: 0;
 
  }

  .step-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .step-number {
    font-size: 40px;
    font-weight: bold;
    color: #fff;
  }

  .step-title {
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #fff;
    line-height: 1.4;
  }

  .step-description {
    font-size: 14px;
    color: white;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .step-button {
    background-color: #9142EF;
    color: #fff;
    padding: 10px 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .step-button:hover {
    background-color: #7c36c6;
  }
  /* .step.step-1 {
        max-width: 740px;
  }
  .step-1 .step-content {
    right: 40px;
    top: 190px;
  } */

  @media (max-width: 768px) {
    .step,
    .step.reverse {
      flex-direction: column;
      text-align: center;
    }

    .step-content {
      text-align: center;
    }

    .step-image {
      margin-bottom: 20px;
    }
  }
</style>

<div class="ppc-container">
  <div class="header-section">
    <h1 class="main-title">HOW <br> OUR PPC PROCESS WORKS</h1>
    <p class="subtitle">A Proven Strategy That Delivers Real Results</p>
  </div>

  <!-- Step 1 -->
  <div class="step"> 
     <div class="step-image">
      <img src="assests/images/ppc-marketing-company/square-img-11.png" alt="Step 1" class="image-1">
    </div>
    <div class="step-content">
      <div class="step-number">1</div>
      <div class="step-title">Market Research & Audience Targeting</div>
      <div class="step-description">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's 
        standard dummy text ever since the 1500s
      </div>
      <a href="#" class="step-button">SEE HOW WE DO IT</a>
    </div>
   
  </div>

  <!-- Step 2 -->
  <div class="step"> 
    <div class="step-content">
      <div class="step-number">2</div>
      <div class="step-title">Ad Creation & Landing<br>Page Optimization</div>
      <div class="step-description">
        Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry. Lorem Ipsum has been the
        industry's <br>
        standard dummy text ever since the 1500s
      </div>
      <a href="#" class="step-button">SEE HOW WE DO IT</a>
    </div>
    <div class="step-image">
      <img src="assests/images/ppc-marketing-company/square-img-2.png" alt="Step 2" class="image-2">
    </div>
  </div>

  <!-- Step 3 -->
  <div class="step reverse position-relative"> 
    <div class="step-content">
      <div class="step-number">3</div>
      <div class="step-title">Campaign Launch &<br>AI Optimization</div>
      <div class="step-description">
        Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry. Lorem Ipsum has been the
        industry's <br>
        standard dummy text ever since the 1500s
      </div>
      <a href="#" class="step-button">SEE HOW WE DO IT</a>
    </div>
    <div class="step-image">
      <img src="assests/images/ppc-marketing-company/square-img-3.png" alt="Step 3" class="image-3">
    </div>
  </div>

  <!-- Step 4 -->
  <div class="step"> 
    <div class="step-content">
      <div class="step-number">4</div>
      <div class="step-title">Conversion Tracking &<br>Scaling</div>
      <div class="step-description">
        Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry. Lorem Ipsum has been the
        industry's <br>
        standard dummy text ever since the 1500s
      </div>
      <a href="#" class="step-button">SEE HOW WE DO IT</a>
    </div>
    <div class="step-image">
      <img src="assests/images/ppc-marketing-company/square-img-4.png" alt="Step 4" class="image-4">
    </div>
  </div>
</div>






