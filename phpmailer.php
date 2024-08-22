<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Retrieve form data
$email = $_POST['email'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Set up SMTP configuration if required (example for Gmail)

$mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "hatcode35@gmail.com"; //your gmail
    $mail->Password = 'ozzgvflshcgteniq'; //your gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    //$mail->setFrom($senderEmail, 'Sender Name');


// Set up the email headers
$mail->setFrom($email);
$mail->addAddress('kbarinas0@gmail.com', 'Recipient Name');
$mail->Subject = 'New Message';
$mail->Body = $message;

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully.';
    header("Location:index.html");
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
