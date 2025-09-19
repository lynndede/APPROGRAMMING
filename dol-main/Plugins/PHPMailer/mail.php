<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (always from project root)
require dirname(__DIR__, 2) . '/vendor/autoload.php';

$mail = new PHPMailer(true);
require __DIR__ . '/../../vendor/autoload.php';


try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'lynn.dede@strathmore.edu';
    $mail->Password   = 'jckq perq lpsp ezqn';  // Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('lynn.dede@strathmore.edu', 'Lynn Dede');
    $mail->addAddress('lynndede30@gmail.com', 'Patience Rifera');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to Lynn’s Bakery!';
    $mail->Body    = 'Welcome to <b>Lynn’s Bakery</b>! 🍰<br>We aim to provide the best baked goods in town.';

    $mail->send();
    echo '✅ Message has been sent successfully';
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
