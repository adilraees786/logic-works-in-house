<style>
  .section-title-email {
    text-align: center;
    font-weight: 900;
    font-size: 52px;
    margin-bottom: 5px;
    color: white;
  }

  .subtitle-email {
    text-align: center;
    font-size: 20px;
    margin-bottom: 40px;
    color: white;
  }

  .custom-card {
    background-color: #582499;
    color: white;
    transition: all 0.3s ease;
    border-radius: 0;
    height: 100%;
    cursor: pointer;
  }

  .custom-card h5,
  .custom-card p {
    color: white;
    transition: all 0.3s ease;
  }

  .custom-card p {
    font-size: 18px;
    line-height: 29px;
    margin-bottom: 20px;
    min-height: 60px;
  }

  .custom-card .icon img {
    transition: all 0.3s ease;
  }

  .custom-card .btn {
    background-color: white;
    color: #582499;
    border: none;
    transition: all 0.3s ease;
  }

  .custom-card:hover {
    background-color: white;
    color: #582499;
  }

  .custom-card:hover h5,
  .custom-card:hover p {
    color: #582499;
  }

  .custom-card:hover .btn {
    background-color: #582499;
    color: white;
  }

  .custom-card:hover .icon img {
    /* Icon color change using filter */
    filter: brightness(0) saturate(100%) invert(22%) sepia(84%) saturate(763%) hue-rotate(242deg) brightness(90%) contrast(101%);
  }

  .card-container {
    overflow: hidden;
  }

  .custom-card .icon {
    font-size: 2rem;
    margin-bottom: 10px;
  }

  .container-fluid .success-anchor-email a {
    font-size: 16px;
    text-transform: uppercase;
    background-color: #582499;
    padding: 18px 0px 18px 50px;
    color: #fff;
    text-decoration: none;


  }


  .container-fluid .success-anchor-email a span {
    background-color: #8E3DF3;
    padding: 18px 25px;
    border-left: 2px solid #fff;
    margin-left: 30px;
  }

  @media (max-width: 768px) {
    .card-container {
      margin-top: 20px;
    }

  }

  @media (max-width: 600px) {
    .section-title-email {
      font-size: 30px;
    }

  }
</style>


<body>

  <div class="container-fluid px-0 mt-30">
    <h2 class="section-title-email">Why Choose Logic Works?</h2>
    <p class="subtitle-email">Trusted Email Marketing Partner for Dubai Business Success</p>
    <div class="row g-0 text-center">
      <div class="row g-0 text-center">
        <div class="col-lg-3 col-md-6 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Email-Marketing-dubai/icon-2.png" alt="icon-001"></div>
            <h5 class="mb-2 fs-30 fw-600">Proven Email Campaign Success</h5>
            <p>We create email campaigns that deliver strong business results.</p>
            <!-- <button class="btn mt-2">Explore now</button> -->
          </div>
        </div>
        <div class="col-lg-3 col-md-6 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Email-Marketing-dubai/icon-1.png" alt="icon-002"></div>
            <h5 class="mb-2  fs-30 fw-600">Dubai Market Understanding</h5>
            <p>We understand local business culture and customer preferences.</p>
            <!-- <button class="btn mt-2">Explore now</button> -->
          </div>
        </div>
        <div class="col-lg-3 col-md-6 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Email-Marketing-dubai/icon-3.png" alt="icon-003"></div>
            <h5 class="mb-2  fs-30 fw-600">Advanced Automation Systems</h5>
            <p>We build email sequences that work automatically.</p>
            <!-- <button class="btn mt-2">Explore now</button> -->
          </div>
        </div>
        <div class="col-lg-3 col-md-6 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Email-Marketing-dubai/icon-4.png" alt="icon-004"></div>
            <h5 class="mb-2  fs-30 fw-600">Performance-Based Optimization</h5>
            <p>We improve campaigns using real engagement data.</p>
            <!-- <button class="btn mt-2">Explore now</button> -->
          </div>
        </div>
      </div>

      <!-- <div class="success-anchor-email text-center">
        <a href="#">Read More <span>>></span></a>
      </div> -->
    </div>
  </div>

</body>

</html>