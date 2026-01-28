<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ================== RECAPTCHA VERIFY ==================
    $secretKey = "6LfxcVgsAAAAAFRsXRAD2mLb2HDibR1WdS8nJke1"; // YOUR SECRET KEY

    if (empty($_POST['g-recaptcha-response'])) {
    header("Location: contact-us.php?captcha=failed");
exit;

;
    }

    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}");
    $captchaSuccess = json_decode($verify);

    if (!$captchaSuccess->success) {
        die("Captcha verification failed.");
    }
    // ================== END CAPTCHA ==================

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'admin@logicworks.ae';
        $mail->Password   = 'Xyzxyz123$@';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('admin@logicworks.ae', 'Logic Works');
        $mail->addAddress('info@logicworks.ae');
        $mail->addAddress('officialamericandigitalusa@gmail.com');
        $mail->addBCC('production8417@gmail.com');

        $name     = htmlspecialchars($_POST['name']);
        $email    = htmlspecialchars($_POST['email']);
        $phone    = htmlspecialchars($_POST['phone']);
        $services = isset($_POST['services']) ? implode(', ', $_POST['services']) : 'None selected';
        $message  = nl2br(htmlspecialchars($_POST['message']));

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "<h2>New Message</h2>
                       <p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Phone:</strong> $phone</p>
                       <p><strong>Services:</strong> $services</p>
                       <p><strong>Message:</strong><br>$message</p>";

        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nServices: $services\nMessage: " . strip_tags($message);

        $mail->send();

        header("Location: thankyou.php");
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
