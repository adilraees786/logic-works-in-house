
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: black;
      color: white;
      padding: 60px 0;
    }

    .container-111 {
      width: 100%;
      padding-right: var(--bs-gutter-x, 0.75rem);
      padding-left: var(--bs-gutter-x, 0.75rem);
      margin-right: auto;
      margin-left: auto;
    }

    @media (min-width: 576px) {
      .container-111 {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {
      .container-111 {
        max-width: 720px;
      }
    }

    @media (min-width: 992px) {
      .container-111 {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .container-111 {
        max-width: 1140px;
      }
    }

    @media (min-width: 1400px) {
      .container-111 {
        max-width: 1320px;
      }
    }

    .icon-box {

      padding: 30px 20px;
      border-radius: 15px;
      transition: all 0.3s ease;
      height: 100%;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }

    

    .icon-box img {
      font-size: 50px;
      margin-bottom: 20px;
      color: white;
    }

    h2.section-title {
      font-weight: 700;
      text-align: center;
      margin-bottom: 50px;
      color: white;
    }

    @media (max-width: 767px) {
      .icon-box {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="container-111">
    <div class="head">
      <h2 class="section-title">HOW AI HELPS YOUR <br>E-COMMERCE BUSINESS</h2>
    </div>

    <div class="row g-4 justify-content-center">

      <div class="col-md-4">
        <div class="icon-box">
      <img src="assests/images/ai-e-commerce/boost-1.png" alt="boost-1">
          <p class="text-white fs-25 fw-400">Boost conversion rates with <br>hyper-personalized <br> experiences</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="icon-box">
         <img src="assests/images/ai-e-commerce/boost-2.png" alt="boost-2">
          <p class="text-white fs-25 fw-400">Automate repetitive <br> tasks like support & follow-ups</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="icon-box">
        <img src="assests/images/ai-e-commerce/boost-3.png" alt="boost-3">
          <p class="text-white fs-25 fw-400">Forecast demand &  optimize <br> stock levels</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="icon-box">
           <img src="assests/images/ai-e-commerce/boost-4.png" alt="boost-4">
          <p class="text-white fs-25 fw-400">Understand customer needs <br> via behavior & <br>sentiment analysis</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="icon-box">
           <img src="assests/images/ai-e-commerce/boost-5.png" alt="boost-5">
          <p class="text-white fs-25 fw-400">Increase revenue through <br> smarter upsell & cross-sell</p>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
