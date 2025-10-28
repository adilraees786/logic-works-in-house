<style>
  .why-section {
    padding: 60px 0;

  }

  .why-choice-sec {
    padding: 40px 20px;
    /* background-size: cover;
      background-repeat: no-repeat;
      background-position: center; */


  }


  .why-title {
    font-size: 3rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 50px;
    color: white;
  }

  .why-box {
    background-color: #8e44ff;
    border: 1px solid white;
    padding: 30px 20px;
    color: white;
    text-align: center;
    transition: transform 0.3s;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);

    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-top: -60px;

  }

  .why-box:hover {
    transform: translateY(-10px);
  }

  .why-box img {
    max-width: 58px;
    height: 58px;
    object-fit: contain;
    background: white;
    border-radius: 50%;
    padding: 15px;
    /* margin: 0 auto 20px; */
  }

  .why-box p {
    font-size: 28px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
    color: white;
  }

  .btn-2 {
    background-color: white;
    color: #8E3DF3;
    font-weight: 400;
    padding: 10px 32px;
    font-size: 14px;
    font-weight: 400;
    transition: 0.3s;
    display: inline-block;
    text-align: center;
    align-self: center;
    text-decoration: none;
  }

  .btn-2:hover {
    background-color: #5e2ebf;
    color: white;
  }

  @media (max-width: 768PX) {
    .why-box {
      margin-top: 10px !important;
    }

    .why-title {
      font-size: 30px;
      margin-bottom: 0px;

    }
  }

  @media (max-width: 576px) {
    .why-title {
      font-size: 2rem;
    }

    .why-box p {
      font-size: 20px;
      margin-top: 10px;
    }
  }
</style>


<body>

  <section class="why-section">
    <div class="container">
      <div class="why-choice-sec">
        <div class="chooose-sec"
          style="background-image: url('assests/images/ai-e-commerce/whyChooseus.webp'); padding-top: 60px; padding-bottom: 100px; border-right: 2px solid white;  border-bottom: 2px solid white;">
          <h2 class="why-title">Why Partner with Logic Works</h2>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
              <p>Expert Team in AI E-commerce</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
              <p>Scalable Solutions for Business Growth</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
              <p>Focused on Sales and Conversions</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
              <p>Reliable Support for Every Store</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>