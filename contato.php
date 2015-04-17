<?php
// Using Awesome https://github.com/PHPMailer/PHPMailer
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = getenv("MAILGUN_SMTP_LOGIN");   // SMTP username
$mail->Password = getenv("MAILGUN_SMTP_PASSWORD");                          // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'gabriel.outor@hotmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('gabriel.outor@hotmail.com');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Hello';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}