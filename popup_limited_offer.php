<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;      // Enable verbose debug output
    $mail->isSMTP();                            // Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';   // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                   // Enable SMTP authentication
    $mail->Username   = 'admin@logicworks.ae';  // SMTP username
    $mail->Password   = 'Xyzxyz123$@';          // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable SSL encryption
    $mail->Port       = 587;                    // TCP port to connect to


    // Recipients
    $mail->setFrom('admin@logicworks.ae', 'Logic Works');//admin@logicworks.ae
    $mail->addAddress('seo@americanbranddesigner.com', 'Logic Works'); // Add a recipient
    $mail->addBCC('production8430@gmail.com'); 
    $mail->addBCC('production8411@gmail.com'); 

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Add files if they are uploaded
    /* 
    if (isset($_FILES['attachments']) && $_FILES['attachments']['error'][0] == UPLOAD_ERR_OK) {
        for ($i = 0; $i < count($_FILES['attachments']['tmp_name']); $i++) {
            $mail->addAttachment($_FILES['attachments']['tmp_name'][$i], $_FILES['attachments']['name'][$i]);
        }
    }
    */

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Limited Time Offer Submission';
    $mail->Body    = "<h2>New Message from Limited Time Offer</h2>
                      <p><strong>Name:</strong> $name</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Phone:</strong> $phone</p>
                      <p><strong>Message:</strong></p>
                      <p>$message</p>";
    $mail->AltBody = "New Message from Limited Time Offer\n\nName: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    $mail->send();

    // Redirect to thank you page
    header("Location: thankyou.php");
    exit;

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
