<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />

  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: black;
    }

    .choice-section {
      padding-top: 20px;
      padding-bottom: 60px;
    }

    .why-choice {
      padding: 40px 20px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .why-box {
      background: #fff;
      padding: 30px 20px;
      border-radius: 10px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.18);
      text-align: center;
      transition: all 0.3s;
      height: 100%;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      position: relative;
    }

    .why-box .icon-circle {
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }

    .why-box .icon-circle img {
      width: 42px;
      height: 42px;
      margin-bottom: 10px;
    }

    .box-title {
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 5px;
      color: #000;
    }

    .box-subtitle {
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 10px;
      color: #555;
    }

    .box-text {
      font-size: 14px;
      color: #777;
      flex-grow: 1;
      margin-bottom: 15px;
    }

    .why-box.active {
      background-color: #7F3CE0 !important;
      color: #fff;
    }

    .why-box.active .box-title,
    .why-box.active .box-subtitle,
    .why-box.active .box-text {
      color: #fff !important;
    }

    .btn-learn {
      display: none;
      background-color: #fff;
      color: #7F3CE0;
      font-weight: 600;
      padding: 6px 16px;
      border-radius: 4px;
      text-decoration: none;
      transition: 0.3s;
      margin-top: auto;
      align-self: center;
    }

    .btn-learn:hover {
      background-color: #f0f0f0;
      color: #59249A;
    }

    .why-box.active .btn-learn {
      display: inline-block;
    }

    .why-cards-row {
      margin-top: 0;
      position: relative;
      z-index: 2;
    }

    @media (max-width: 767.98px) {
      .why-box {
        margin-bottom: 20px;
      }

      .why-choice {
        padding: 20px 15px;
      }

      .box-title {
        font-size: 16px;
      }

      .box-text {
        font-size: 13px;
      }
    }
  </style>
</head>

<body>

  <section class="choice-section">
    <div class="container">
      <div class="why-choice" style="background-image: url(assests/images/top-android-app-dubai/bg-img.jpg);">
        <div class="row text-center mb-5">
          <div class="col-12">
            <h2 class="text-white fw-bold display-4 mt">Why Choose Us?</h2>
            <p class="text-white fs-5 mb-5">Choose us for smart solutions, local support, and apps that work the way your users expect.</p>
          </div>
        </div>

        <div class="row justify-content-center why-cards-row">
          <!-- Card 1 -->
          <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
            <div class="why-box">
              <div class="icon-circle">
                <img src="assests/images/top-android-app-dubai/chck-icon.png" alt="icon">
              </div>
              <h5 class="box-title">Skilled Android Developers</h5>
              <p class="box-text">
                Each developer writes clean code that works on all Android devices. Our team builds
                stable apps that load fast and perform well under pressure.
              </p>
              <a href="#" class="btn-learn">Learn More</a>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
            <div class="why-box">
              <div class="icon-circle">
                <img src="assests/images/top-android-app-dubai/chck-icon.png" alt="icon">
              </div>
              <h5 class="box-title">Dubai-Based Team</h5>
              <p class="box-text">
                Clients can meet, call, or message our team directly. Working with a Dubai-based group
                makes feedback easy and keeps everyone on the same page.
              </p>
              <a href="#" class="btn-learn">Learn More</a>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
            <div class="why-box">
              <div class="icon-circle">
                <img src="assests/images/top-android-app-dubai/chck-icon.png" alt="icon">
              </div>
              <h5 class="box-title">Timely Project Delivery</h5>
              <p class="box-text">
                Timelines are clear from the start. We meet deadlines without excuses. Every task moves
                forward with updates so you always know what’s happening next.
              </p>
              <a href="#" class="btn-learn">Learn More</a>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
            <div class="why-box">
              <div class="icon-circle">
                <img src="assests/images/top-android-app-dubai/chck-icon.png" alt="icon">
              </div>
              <h5 class="box-title">Agile Development Process</h5>
              <p class="box-text">
                The process runs in small stages. You get working builds early. Feedback comes in
                quickly, helping your android app grow the right way without confusion.
              </p>
              <a href="#" class="btn-learn">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.querySelectorAll('.why-box').forEach(function (card) {
      card.addEventListener('click', function () {
        document.querySelectorAll('.why-box.active').forEach(function (activeCard) {
          activeCard.classList.remove('active');
        });
        card.classList.add('active');
      });
    });
  </script>

</body>

</html>
