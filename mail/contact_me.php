<?php require "../config/config.ini"; ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
require '../PHPMailer/PHPMailerAutoload.php';
$name = htmlentities($_POST['name']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$departamento=$_POST['departament'];
$message = nl2br(htmlentities($_POST['message']));
$mail = new PHPMailer;
$mail->isSMTP();    
$mail->isHTML(true);  // Set mailer to use SMTP
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
$mail->addAddress($destinatario); 

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->Subject = 'Site Vedax';
$mail->Body = "
    <html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='content-type' content='text/html; charset=iso-8859-1' />
        <style>
            body{
                font-family: 'Calibri, Arial, Helvetica, sans-serif';
            }
            h1 {
                font-size: 20pt;
                color:#666666;
                text-align: left;
                line-height: 1PX;
                }
            h2 {
                font-size: 15pt;
                color:#666666;
                text-align: left;
                }

            hr{
                width: 100%;
                float:left;
                border: 0;
                height: 2px;
                background: #0086ce;
            }
            a{
                color: #0086ce;
            }
            a:visited {
                color: #0086ce;
            }
            section{
                font-size: 16px;
                color:#666666;
            }
        </style>
    </head>
    <body>
            <br/>HORA-> $hora_envio <br/>
            <br/>DIA-> $data_envio <br/>
            <br/>Nome: $name <br/>
            <br/>Email: $email <br/>
            <br/>Telefone: $phone  <br/>
            <br/>Mensagem: $message <br/>
            <BR>
        <h1>
            <!-- ALTERE A LINHA A BAIXO COM SEU NOME -->
            Website Vedax
        </h1>
        <h2>
            <!-- ALTERE A LINHA A BAIXO COM SEU DEPARTAMENTO -->
            Tecnologia da Informação / Information Tecnology
        </h2>
        <hr>
        <section>
            <h2>
                <!-- NÃO ALTERE A LINHA A BAIXO -->
                Flanges e Forjados Especiais / Flanges and Special Forgings
            </h2>
            <!-- NÃO ALTERE A LINHA A BAIXO -->
            <img src='http://gabrieloutor.herokuapp.com/images_assinatura/icon_telephone.jpg'> + 55 11 4161-3597 <br>
            <!-- ALTERE A LINHA A BAIXO COM SEU EMAIL DA VEDAX -->
            <img src='http://gabrieloutor.herokuapp.com/images_assinatura/icon_email.png'> <a href='mailto:vedaxflanges@hotmail.com' target='_blank'>vedaxflanges@hotmail.com</a><br>
            <!-- NÃO ALTERE A LINHA ABAIXO -->
            <img src='http://gabrieloutor.herokuapp.com/images_assinatura/icon_facebook.png'> <a href='https://www.facebook.com/vedax.conexoes.forjados' target='_blank'>https://www.facebook.com/vedax.conexoes.forjados</a><br>
            <!-- NÃO ALTERE A LINHA ABAIXO -->
            <img src='http://gabrieloutor.herokuapp.com/images_assinatura/icon_website.png'> <a href='http://www.vedax.ind.br' target='_blank'>http://www.vedax.ind.br</a><br>
        </section>
        <hr>
        <!-- NÃO ALTERE A LINHA ABAIXO -->
        <img src='http://gabrieloutor.herokuapp.com/images_assinatura/logo_vedax.png'>
        </body>
        </html>";
$mail->AltBody = "
            HORA-> $hora_envio 
            DIA-> $data_envio
            Nome: $name 
            Email: $email 
            Telefone: $phone  
            Mensagem: $message";
$mail->send();

return true;