<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Why Choose Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      color: #fff;
    }

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
      padding: 70px 20px;
      color: white;
      text-align: center;
      transition: transform 0.3s;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      margin-top: -60px;

    }

    .why-box:hover {
      transform: translateY(-10px);
    }

    .why-box img {
      width: 58px;
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
      flex-grow: 1;
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
      background-color: #fff;
      color: #5e2ebf;
    }

    @media (max-width: 576px) {
      .why-title {
        font-size: 2rem;
      }

      .why-box p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>

  <section class="why-section">
    <div class="container">
      <div class="why-choice-sec">
        <div class="chooose-sec"
          style="background-image: url('assests/images/ai-e-commerce/whyChooseus.jpg'); padding-top: 60px; padding-bottom: 100px; border-right: 2px solid white;  border-bottom: 2px solid white;">
          <h2 class="why-title">Why Choose Us?</h2>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
              <p>Built on OpenAI,<br> TensorFlow, and Google AI</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
         <p>Built on OpenAI,<br> TensorFlow, and Google AI</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
              <p>99.9% uptime &<br> scalable performance</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="why-box w-100">
              <img src="assests/images/ai-e-commerce/Vector.png" alt="">
              <p>Global e-commerce<br> success stories</p>
              <a href="#" class="btn-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>