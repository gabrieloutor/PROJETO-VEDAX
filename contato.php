<?php require "config/config.ini"; ?>
<?php
    echo $titulo;
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
    $mail->Body = "MENSAGEM ENVIADA ÀS $hora_envio NO DIA $data_envio
            Nome: $nome 
            Email: $email 
            Mensagem: $mensagem ";

    if (!$mail->send()) {
        echo '<script>alert("Mensagem não enviada, tente novamente mais tarde!")</script>';
    } else {
        echo '<script>alert("Mensagem enviada com Sucesso!")</script>';
    }
    header("Location: $redirecionar");