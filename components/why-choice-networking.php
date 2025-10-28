<style>
  .section-title-email {
    text-align: center;
    font-weight: 900;
    font-size: 50px;
    margin-bottom: 30px;
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
      margin-bottom: 0px;
    }

  }
</style>


<body>

  <div class="container-fluid px-0 mt-30">
    <h2 class="section-title-email">WHY CHOOSE LOGIC WORKS?</h2>

    <div class="row g-0 text-center">
      <div class="row g-0 text-center">
        <div class="col-md-3 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Business-network-solutions/icon-1.webp" alt="bs-net-icon-001">
            </div>
            <h5 class="mb-2 fs-30 fw-600">Certified Network Engineers</h5>

            <button class="btn mt-2">Explore now</button>
          </div>
        </div>
        <div class="col-md-3 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Business-network-solutions/icon-2.webp" alt="bs-net-icon-002">
            </div>
            <h5 class="mb-2  fs-30 fw-600">Customized Networking for SMBs & Enterprises</h5>

            <button class="btn mt-2">Explore now</button>
          </div>
        </div>
        <div class="col-md-3 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Business-network-solutions/icon-3.webp" alt="bs-net-icon-003">
            </div>
            <h5 class="mb-2  fs-30 fw-600">24/7 Monitoring & Support</h5>

            <button class="btn mt-2">Explore now</button>
          </div>
        </div>
        <div class="col-md-3 card-container">
          <div class="p-4 custom-card">
            <div class="icon"><img src="./assests/images/Business-network-solutions/icon-4.webp" alt="bs-net-icon-004">
            </div>
            <h5 class="mb-2  fs-30 fw-600">Scalable Solutions to Grow with You</h5>

            <button class="btn mt-2">Explore now</button>
          </div>
        </div>
      </div>

      <div class="success-anchor-email text-center mt-4">
        <a href="#">Read More <span>>></span></a>
      </div>
    </div>
  </div>

</body>

</html>