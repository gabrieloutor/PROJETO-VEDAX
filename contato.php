<?php require "config/config.ini"; ?>
<?php
    // Using Awesome https://github.com/PHPMailer/PHPMailer
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = getenv("LOGINEMAIL");   // SMTP username
    $mail->Password = getenv("SENHAEMAIL");                          // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

    $mail->From = 'gabriel.outor@hotmail.com';
    $mail->FromName = 'VEDAX';
    $mail->addAddress('gabriel.outor@hotmail.com');                 // Add a recipient

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $mail->Subject = 'MENSAGEM SITE VEDAX';
    $mail->Body = "Nome: $nome 
            Email: $email 
            Mensagem: $mensagem <\br>";

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("Location: http://gabrieloutor.herokuapp.com/faleconosco.php");
    }