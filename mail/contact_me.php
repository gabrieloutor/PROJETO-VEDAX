<?php require "../config/config.ini"; ?>
<?php
header("Content-Type: text/html; charset=ISO-8859-1", true); 
date_default_timezone_set('America/Sao_Paulo');
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
require '../PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$departamento=replaceaccents($_POST['departament']);
$message = $_POST['message'];
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $smtp;                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = $emailcontato;               // SMTP username
$mail->Password = $senha;                         // SMTP password
$mail->SMTPSecure = 'tls';                        // Enable encryption, only 'tls' is accepted

if ($_POST['tipoLinguagem']!=="BRA"){
    $db="";
}else if($_POST['tipoLinguagem']=="BRA"){
    $db="_en";
}
$departamento=htmlentities($departamento);
$dados = mysqli_query($conexao, "SELECT * from contato WHERE departamento$db='$departamento'");
$row = mysqli_fetch_array($dados);

$destinatario=$row[1];
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