<?php
//include_once('phpmailer.php'); //Chama o arquivo phpmailer.php com as funções para realizar o envio.
//#########################################
// Recebe as informações do formulário
//#########################################
echo "cheguei aqui";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
//#########################################
// Dados da conta de e-mail que fará o envio
//#########################################
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'gabriel.outor@hotmail.com';                 // SMTP username
$mail->Password = getenv("PASSWORD");                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->From = 'gabriel.outor@hotmail.com';
$mail->FromName = 'Mailer';
$mail->isHTML(true); 

$mail->Subject = "Contato - " . $assunto;
$mail->Body    = "Nome: $nome <BR<BR>
    E-Mail: $email <BR><BR>
    Telefone: $telefone <BR><BR>
    Assunto: $assunto <BR><BR>
    Mensagem: $msg <BR><BR>";
echo "cheguei aqui2";
    if (isset($_POST['submit'])) {
        if($nome && $email && $assunto && $mensagem) {
                if($mail->send()){
                    echo "<script>alert('Contato enviado!');</script>";
               //     echo "<script>window.location = 'faleconosco.php';</script>"; //Altere aqui para o endereço de sua página.
               //     exit;
                }else{
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                }
       }
       else {
            echo "<script>alert('Preencha todos os campos!');</script>";
        //    echo "<script>window.location = 'faleconosco.php';</script>"; //Altere aqui para o endereço de seu formulário
       //     exit;
       }
    }
?>