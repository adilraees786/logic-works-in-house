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
        $mail->Username   = 'production8411@gmail.com';
        $mail->Password   = 'coanmvpaupwtpjij';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = PHPMailer::CHARSET_UTF8;
    }
}

$page = 'mobile-app-development-company-abu-dhabi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $secretKey = "6LfxcVgsAAAAAFRsXRAD2mLb2HDibR1WdS8nJke1";

    if (empty($_POST['g-recaptcha-response'])) {
        header("Location: {$page}?captcha=empty#ad-quote");
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

    if (!$captchaSuccess || empty($captchaSuccess->success)) {
        header("Location: {$page}?captcha=failed#ad-quote");
        exit;
    }

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

        $name     = htmlspecialchars($_POST['name'] ?? '');
        $email    = htmlspecialchars($_POST['email'] ?? '');
        $phone    = htmlspecialchars($_POST['phone'] ?? '');
        $appType  = htmlspecialchars($_POST['app_type'] ?? 'Not selected');
        $message  = nl2br(htmlspecialchars($_POST['message'] ?? ''));
        $consent  = !empty($_POST['consent']) ? 'Yes' : 'No';

        $mail->isHTML(true);
        $mail->Subject = 'New Abu Dhabi App Quote Request';
        $mail->Body = "<h2>Abu Dhabi Mobile App Quote</h2>
                       <p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Phone:</strong> $phone</p>
                       <p><strong>App Type:</strong> $appType</p>
                       <p><strong>Consent to contact:</strong> $consent</p>
                       <p><strong>Project Idea:</strong><br>$message</p>
                       <p><em>Source: Abu Dhabi App Development page</em></p>";

        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nApp Type: $appType\nConsent: $consent\nIdea: " . strip_tags($message);

        $mail->send();

        header("Location: thankyou.php");
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
