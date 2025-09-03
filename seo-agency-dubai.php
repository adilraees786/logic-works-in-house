<?php

$meta_title = "Branding dubai Temper";
$meta_description = "Explore trending blogs from Logic Works on tailored web solutions, digital marketing, and custom software to boost business performance.";
$keyword = 'Branding dubai';
include("includes/head.php");
include("includes/header.php");
?>

<main class="seo-agency-dubai bg-black">
    <section class="consultancy-hero-sec section-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <h1 class="text-white"><span>Rank higher,</span>Reach Further: Expert Seo Services in
                        <span>Dubai</span>
                    </h1>
                    <p class="text-white">Drive Traffic, Increase Engagement, and Achieve Your Business <br> Goals with
                        Proven SEO Strategies.</p>
                    <div class="seo-btn specbtn">
                        <a class="btn bg-theme text-title" href="#0">
                            <span class="link-effect">
                                <span class="effect-1">Live Chat</span>
                                <span class="effect-1">Live Chat</span>
                            </span>
                        </a>
                        <a class="btn bg-theme text-title" id="openPopup" href="#0">
                            <span class="link-effect">
                                <span class="effect-1">Get A Quote</span>
                                <span class="effect-1">Get A Quote</span>
                            </span>
                        </a>
                        <img src="assests/images/social-media/trustandotherlogo.png" alt="trust icons" class="trustsec">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="assests/images/seo-agency-dubai/hero-image.webp">
                </div>
            </div>
        </div>
    </section>
    <section>
        <?php
        include("components/seo-matters-indubia.php");
        ?>
    </section>
    <section>
        <?php
        include("components/seo-services.php");
        ?>
    </section>
    <section class="" style="">
        <?php
        include("components/seo-process.php");
        ?>
    </section>
    <section class=""
        style="background-image: url(assests/images/serice-bg.png);  background-size: cover; background-position: center; padding: 10px">
        <div class="row align-items-center transform-row">
            <div class="col-lg-4">
                <img src="assests/images/marketing/banda.png" class="gta">
            </div>
            <div class="col-lg-8">
                <h2 class="text-white same-all text-end">We have transformed 8000+ business with our Development
                    Expertise</h2>
                <div class="digital-two-btn">
                    <a href="#">Call Now</a>
                    <a href="#" id="openPopup">Start Live Chat</a>
                </div>
            </div>
        </div>
        <div class=" mt-30" style="">
            <?php
            include("components/why-logic-seo-agency.php");
            ?>
        </div>
    </section>
    <?php
    include("includes/clint-review.php");
    ?>
</main>
<?php
include("includes/footer.php");
?>