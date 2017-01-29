<?php require "../config/config.ini"; ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
require '../PHPMailer/PHPMailerAutoload.php';
//$name = htmlentities($_POST['name']);
//$email = $_POST['email'];
//phone = $_POST['phone'];
//$departamento=$_POST['departament'];
//$message = nl2br(htmlentities($_POST['message']));

//$sql = "INSERT INTO `faleconosco`(`dataHora`, `nome`, `email`, `telefone`, `departamento`, `conheceu`, `mensagem`) 
//VALUES ('2012-06-18 10:34:09','$name','$email','$phone', '$departamento', 'Google', '$message');";

$stmt = $conexao->prepare("INSERT INTO faleconosco (dataHora, nome, email, telefone, departamento, conheceu, mensagem) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $dataHora, $nome, $email, $telefone, $departamento, $conheceu, $mensagem);

$dataHora = '2012-06-18 10:34:09';
$nome = htmlentities($_POST['name']);
$email = $_POST['email'];
$telefone = $_POST['phone'];
$departamento = htmlentities($_POST['departament']);
$conheceu = htmlentities($_POST['indication']);
$mensagem = nl2br(htmlentities($_POST['message']));


$stmt->execute();

//if ($conexao->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conexao->error;
//}

//"
//            HORA-> $hora_envio 
//            DIA-> $data_envio
//            Nome: $name 
//            Email: $email 
//            Telefone: $phone  
//            Mensagem: $message";
$stmt->close();
$conexao->close();
return true;