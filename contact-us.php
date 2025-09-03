<?php
$meta_title = "Contact Logic Works - Start Your Digital Transformation Today!";
$meta_description = "Get in touch with Logic Works for tailored digital solutions. Our team is ready to assist with apps, websites, and marketing. Book a free consultation!";
$keyword = 'logic work Contact Us';
include("includes/head.php");
include("includes/header.php");
?>

<style>
    body {
        background-color: #010101;
    }

    .about-main-sec {
        padding-top: 100px;
        padding-bottom: 100px;
        background-image: url(assests/images/Header-Shape-1.svg);
        background-position: bottom center;
        background-repeat: no-repeat;
    }

    body {
        background-color: #010101;
    }

    header.nav-header.header-layout2 {
        background-color: #010101;
    }

    main {
        margin-top: 150px;
    }

    .about-main-sec h1 {
        font-family: 'Montserrat';
        font-size: 50px;
    }

    .about-main-sec ul {
        display: flex;
        list-style-type: none;
        padding: 0px;
        gap: 20px;
        color: #fff;
    }

    .about-main-sec ul li,
    .about-main-sec ul li a {
        color: #fff;
        font-family: 'Montserrat';
        text-decoration: none;
    }

    .about-main-content .container {
        display: block;
    }

    .about-second-row {
        padding-top: 80px;
    }

    .contact-main-content input[type=text],
    select,
    textarea,
    input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        color: #fff;
    }

    .contact-main-content input[type=submit] {
        background-color: #fff;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        color: #000;
    }

    .contact-second-row h3.text-white {
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 40px;
    }

    .mein-cont {
        text-align: left;
        padding-left: 50px;
    }


    .contact-main-content input[type=submit]:hover {
        background-color: #fff;
    }
    .blurb-ctn .img-blurb .icon {
  width: 100% !important;
  max-width: 100% !important;
  background-image: linear-gradient(to right, #994ae8, #e57699);
  padding: 25px;
  border-radius: 100px;
  color: #fff;

}

</style>

<main>
    <section class="about-main-sec section-bg pt-b-160">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-white">Contact</h1>
                    <ul>
                        <li><a href="#">Home</a></li> | <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-main-content section-bg pt-b-80">
        <div class="container">
            <div class="row contact-second-row">
                <div class="col-lg-6 col-md-7">
                    <h3 class="text-white">Get In Touch</h3>
                    <form action="send_message.php" method="POST">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name.." required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your email..." required>

                        <label for="name">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Your Phone Number.." required>

                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Write something.." style="height:200px"
                            required></textarea>

                        <input type="submit" value="Submit">
                    </form>

                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="mein-cont">
                        <h2>Main Office Location</h2>
                        <div class="blurb-ctn firt-blurb">
                            <div class="img-blurb"><img src="assests/images/message.png"></div>
                            <div class="txt-blurb"><a href="mailto:info@logicworks.ae">info@logicworks.ae</a></div>
                        </div>
                        <div class="blurb-ctn">
                            <div class="img-blurb"><img src="assests/images/telephone.png"></div>
                            <div class="txt-blurb"><a href="tel:+971529502258">UAE: +971 52 950 2258</a></div>
                        </div>
                        <div class="blurb-ctn">
                            <div class="img-blurb"><img src="assests/images/telephone.png"></div>
                            <div class="txt-blurb"><a href="tel:+13109575211">US: +1 (310) 957-5211</a></div>
                        </div>
                        <div class="blurb-ctn">
                            <div class="img-blurb"><i class="icon fa-solid fa-location-dot" style="font-size: 20px;"></i></div>
                            <div class="txt-blurb"><a href="#">UAE: PINNACLE - Sheikh Zayed Rd - Al Barsha - Al Barsha 1 -
                                    Dubai - United Arab Emirates</a></div>
                        </div>
                        <div class="blurb-ctn">
                              <div class="img-blurb"><i class="icon fa-solid fa-location-dot" style="font-size: 20px;"></i></div>
                            <div class="txt-blurb"><a href="#">US: 44075 Pipeline Plaza Ste. 215 Ashburn, VA 20147</a></div>
                        </div>

                        <!--<div class="blurb-ctn">-->
                        <!--    <div class="img-blurb"><img src="assests/images/gps.png"></div>-->
                        <!--    <div class="txt-blurb"><a href="#">115-0, Khalid shaban, Al Garhoud, Dubai</a></div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg pt-b-80 contact-sec" id="project-in-minds">
        <div class="container">
            <div class="row justify-content-space-between project-in-mind"
                style="background-color: #59249A; border-radius: 30px;">
                <div class="col-lg-7 col-md-6">
                    <h2 class="text-white">Let's Build Your Success Story Together-<span>Contact Us!</span></h2>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="ctn-btns">
                        <a href="#" class="live-chats">Live Chat</a>
                        <a href="tel:+971 52 950 2258">+971 52 950 2258</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.114142048052!2d55.33482707608313!3d25.233080230245076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d6a98ae1cf9%3A0x398860941c5d613!2sAl%20Garhoud%20Bridge%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1738167572278!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section> -->
</main>
<?php
include("includes/footer.php");
?>