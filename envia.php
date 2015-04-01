<?php
include_once('phpmailer.php'); //Chama o arquivo phpmailer.php com as funções para realizar o envio.
//#########################################
// Recebe as informações do formulário
//#########################################
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
//#########################################
// Dados da conta de e-mail que fará o envio
//#########################################
$password =  getenv("PASSWORD");
$smtp = new Smtp("smtp.live.com"); //Endereço do SMTP, geralmente localhost.
$smtp->user = "gabriel.outor@hotmail.com";  //Conta de email
$smtp->pass = getenv("PASSWORD"); //Senha da Conta de e-mail.
$smtp->debug = false; //Somente para usuários avançados que desejam o log do envio para testes.
//#########################################
// Envio do formulário
//#########################################
$to = "gabriel.outor@hotmail.com"; //Informe aqui o e-mail que deve receber a mensagem do formulário.
$from = $email;
$subject = "Contato - " . $assunto;
$msg = "Nome: $nome <BR<BR>
    E-Mail: $email <BR><BR>
    Telefone: $telefone <BR><BR>
    Assunto: $assunto <BR><BR>
    Mensagem: $msg <BR><BR>";
    if (isset($_POST['submit'])) {
        if($nome && $email && $assunto && $mensagem) {
                if($smtp->Send($to, $from, $subject, $msg)){
                    echo "<script>alert('Contato enviado!');</script>";
                    echo "<script>window.location = 'faleconosco.php';</script>"; //Altere aqui para o endereço de sua página.
                    exit;
                }
       }
       else {
            echo "<script>alert($password);</script>";
            echo "<script>window.location = 'faleconosco.php';</script>"; //Altere aqui para o endereço de seu formulário
            exit;
       }
    }
?>