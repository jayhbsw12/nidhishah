<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit('Method not allowed');
}

// ---- Collect & sanitise ----
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$mobile   = trim($_POST['mobile'] ?? '');
$location = trim($_POST['location'] ?? '');

// ---- Sanitize ----
$name     = substr(strip_tags($name), 0, 120);
$email    = filter_var($email, FILTER_SANITIZE_EMAIL);
$mobile   = substr(preg_replace('/\D+/', '', $mobile), 0, 15);
$location = substr(strip_tags($location), 0, 120);

if ($name === '' || $mobile === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Invalid form data');
}

$subject = 'Received Inquiry From Website(Footer) : www.drnidhishah.com';

$e = fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');

$text = "$subject
Name: $name
Email: $email
Mobile: $mobile
Location: $location";

$html = '<!doctype html>
<html>
<body style="font-family:Arial;background:#fff">
<div style="max-width:500px;margin:auto;border-top:5px solid #9D7458;padding:20px">
<h2>' . $e($subject) . '</h2>
<p style="font-size:16px"><strong>Name:</strong> ' . $e($name) . '</p>
<p style="font-size:16px"><strong>Email:</strong> ' . $e($email) . '</p>
<p style="font-size:16px"><strong>Mobile:</strong> ' . $e($mobile) . '</p>
<p style="font-size:16px"><strong>Location:</strong> ' . $e($location) . '</p>
</div>
</body>
</html>';


try {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'digital@hbsoftweb.com';
    $mail->Password = 'kunrcsphngzituka';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('digital@hbsoftweb.com', 'HB Softweb');
    $mail->addAddress('jaymodihbsoftweb@gmail.com');
    $mail->addCC('digital@hbsoftweb.com');

    $mail->addReplyTo("nidhishah0002@gmail.com", 'Dr. Nidhi Shah');

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $html;
    $mail->AltBody = $text;

    $mail->send();
    header('Location: ../thank-you.php');
    exit;

} catch (Exception $e) {
    http_response_code(500);
    error_log($e->getMessage());
    echo 'Something went wrong. Please try again.';
}
