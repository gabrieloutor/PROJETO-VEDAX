<?
$nome=$_POST['nome'];
$email=$_POST['email'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];

$Destinatario="gabriel.outor@hotmail.com";

$Titulo="$titulo";

$mensagem1="
Uma mensagem vinda do site !
Algum vistante mandou essa mensagem pelo site.
Nome: $nome
Email: $email
Mensagem: $mensagem";

mail("$Destinatario","$Titulo", "$mensagem1","From:$email");
?>
<html>
<body>
Enviado com sucesso !
</body>
</html>