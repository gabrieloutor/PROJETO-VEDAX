<?php require "config/config.ini"; ?>
<?php
    if ($urldb=="127.0.0.1") {
        echo '<script>alert("Mensagem não enviada, tente novamente mais tarde!")</script>';
        header("Location: $redirecionar");
        exit;
    }
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
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
            Nome: $nome 
            Email: $email 
            Mensagem: $mensagem ";

    if (!$mail->send()) {
        echo '<script>alert("Mensagem não enviada, tente novamente mais tarde!")</script>';
    } else {
        echo '<script>alert("Mensagem enviada com Sucesso!")</script>';
    }
    header("Location: $redirecionar");