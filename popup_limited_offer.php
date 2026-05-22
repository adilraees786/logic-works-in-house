<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/vendor/autoload.php';

if (!function_exists('phpmailer_configure_smtp')) {
    function phpmailer_configure_smtp(PHPMailer $mail): void
    {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'production@eliteprowebsite.com';
        $mail->Password   = 'dpcc kqpf atqd aupm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = PHPMailer::CHARSET_UTF8;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ================== RECAPTCHA VERIFY ==================
    $secretKey = "6LfxcVgsAAAAAFRsXRAD2mLb2HDibR1WdS8nJke1";

    if (empty($_POST['g-recaptcha-response'])) {
        header("Location: contact-us.php?captcha=empty");
        exit;
    }

    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret'   => $secretKey,
        'response' => $recaptchaResponse
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $captchaSuccess = json_decode($response);

    if (!$captchaSuccess->success) {
        header("Location: contact-us.php?captcha=failed");
        exit;
    }
    // ================== END CAPTCHA ==================

    $mail = new PHPMailer(true);

    try {
        phpmailer_configure_smtp($mail);

        $replyName  = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
        $replyEmail = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
        if ($replyEmail !== '' && filter_var($replyEmail, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($replyEmail, $replyName);
        }

        $mail->setFrom('production@eliteprowebsite.com', 'Logic Works');
        $mail->addAddress('info@logicworks.ae');
        $mail->addAddress('officialamericandigitalusa@gmail.com');
        $mail->addBCC('production8417@gmail.com');
        $mail->addBCC('marketing@americandigitalagency.us');

        $name    = htmlspecialchars($_POST['name']);
        $email   = htmlspecialchars($_POST['email']);
        $phone   = htmlspecialchars($_POST['phone']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $mail->isHTML(true);
        $mail->Subject = 'New Limited Time Offer Submission';
        $mail->Body    = "<h2>New Message from Limited Time Offer</h2>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Phone:</strong> $phone</p>
                          <p><strong>Message:</strong><br>$message</p>";
        $mail->AltBody = "New Message from Limited Time Offer\n\nName: $name\nEmail: $email\nPhone: $phone\nMessage: " . strip_tags($message);

        $mail->send();

        header("Location: thankyou.php");
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
