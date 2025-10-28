<?php
http_response_code(404);
?>
<?php
$meta_title = "Logic Works";
$meta_description = "";
$keyword = '';
include("includes/head.php");
include("includes/header.php");
?>
<main class="page-not-found">
  <div class="not-found-bg">
    <div class="not-found-overlay"></div>
    <div class="not-found-content">
      <h2>404</h2>
      <h3>Oops! Page Not Found</h3>
      <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
      <a href="./">Go Back Home</a>
    </div>
  </div>
</main>
<?php
include("includes/footer.php");
?>
<style>
  .not-found-bg {
    background: url('assests/images/page-not-found.webp') center center / cover no-repeat;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    background-color: black;
  
  }

  .not-found-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
  
  }

  .not-found-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding: 20px;
  }



  .not-found-overlay {
    position: absolute;
    inset: 0;

  }


  .not-found-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding: 20px;
  }

  .not-found-content h2 {
    font-size: 80px;
    margin: 0;
    color: white;
  }

  .not-found-content h3 {
    font-size: 28px;
    margin: 10px 0;
  }

  .not-found-content p {
    max-width: 600px;
    margin: 0 auto 20px;
    font-size: 16px;
    color: #ddd;
  }

  .not-found-content a {
    display: inline-block;
    background: linear-gradient(to right, #9441EB, #F67B80);
    color: #fff;
    padding: 12px 30px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 16px;
    transition: 0.3s;
  }
 
</style>