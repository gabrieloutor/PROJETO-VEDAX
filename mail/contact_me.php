<?php require "../config/config.ini"; ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
require '../PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$departamento=$_POST['departaments'];
$message = $_POST['message'];
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $smtp;                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = $emailcontato;               // SMTP username
$mail->Password = $senha;                         // SMTP password
$mail->SMTPSecure = 'tls';                        // Enable encryption, only 'tls' is accepted

$mail->From = $destinatario;
$mail->FromName = 'VEDAX';
$mail->addAddress($destinatario);                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->Subject = 'Site Vedax';
$mail->Body = "MENSAGEM ENVIADA 
            HORA-> $hora_envio 
            DIA-> $data_envio
            Nome: $name 
            Email: $email 
            Telefone: $phone  
            Departamento: $departamento
            Mensagem: $message ";
$mail->send();
return true;