<?php require "config/config.ini"; ?>
<?php
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
if ($urldb == "127.0.0.1") {
        echo "No arguments Provided!";
	return false;
}
// Using Awesome https://github.com/PHPMailer/PHPMailer
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $smtp;                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $destinatario;   // SMTP username
$mail->Password = $senha;                         // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = $destinatario;
$mail->FromName = 'VEDAX';
$mail->addAddress($destinatario);                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->Subject = 'MENSAGEM SITE VEDAX';
$mail->Body = "MENSAGEM ENVIADA HORA-> $hora_envio DIA-> $data_envio
            Nome: $name 
            Email: $email 
            Mensagem: $message ";

if (!$mail->send()) {
    return false;
} else {
    return true;
}
