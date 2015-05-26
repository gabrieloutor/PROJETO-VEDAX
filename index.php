<?php 
require "config/config.ini";  
$filtro = array('’' => ':', '&quot;' => '"', '&amp;' => '&', '&lt;' => '<', '&gt;' => '>');
if (!isset($tipoLinguagem)){
    $urlLing="en.php";
    $img = "usa.png";
    $pag="paginas";
    $hom="home";
    $qms="quemSomos";
    $prod="produtos";
    $proc="processos";
    $emp="empresa";
    $nomeContato="Seu Nome";
    $telefoneContato="Seu Telefone";
    $emailContato="Sua Mensagem";
    $mensagemContato="Mensagem";
    $msgNomeContat="Por favor digite seu nome";
    $msgEmailContat="Por favor digite seu email";
    $msgTelContat="Por favor digite seu telefone";
    $msgMensagemContat="Por favor digite sua mensagem";
    $botaoM="Enviar Mensagem";
    $botaoProd="Fechar Produto";
    $botaoPdf="Fechar PDF";
}
$resultadocont = mysqli_query($conexao, "SELECT * from contato GROUP BY departamento");
$totalcont = mysqli_num_rows($resultadocont);
$resultadopaginas = mysqli_query($conexao, "SELECT * from $pag");
$totalpaginas = mysqli_num_rows($resultadopaginas);
$resultadohome = mysqli_query($conexao, "SELECT * from $hom");
$totalhome = mysqli_num_rows($resultadohome);
$resultadoquemSomos = mysqli_query($conexao, "SELECT * from $qms");
$totalquemSomos = mysqli_num_rows($resultadoquemSomos);
$resultadopro = mysqli_query($conexao, "SELECT * from $prod");
$totalpro = mysqli_num_rows($resultadopro);
$resultadoprocesses = mysqli_query($conexao, "SELECT * from $proc");
$totalprocessos = mysqli_num_rows($resultadoprocesses);
$resultadoClientes = mysqli_query($conexao, "SELECT * from clientes");
$totalClientes = mysqli_num_rows($resultadoClientes);
$resultadoCertificados = mysqli_query($conexao, "SELECT * from certificados");
$totalCertificados = mysqli_num_rows($resultadoCertificados);
$resultadolocalizacao = mysqli_query($conexao, "SELECT * from $emp");
$totalempresa = mysqli_num_rows($resultadolocalizacao);
$resultadoprodutos = mysqli_query($conexao, "SELECT * from $prod");
$totalprodutos = mysqli_num_rows($resultadoprodutos);
$resultadocert = mysqli_query($conexao, "SELECT * from certificados");
$ano=date("Y");
?>
<!DOCTYPE html>
<html lang='pt'>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='description' content='<?php echo $descricao ?>'>
<meta name='keywords' content='vedax,aço,conexões,flanges,forjados,carbono,empresa,produtos'>
<meta name='author' content='<?php echo $nomedesenvolvedor ?>'>
<title><?php echo $empresa ?></title>
<link rel='icon' href='img/favicon.ico' />
<link href='css/bootstrap.min.css' rel='stylesheet'>
<link href='css/bootstrap.css' rel='stylesheet'>
<link href='css/agency.css' rel='stylesheet'>
<link href='css/custom.css' rel='stylesheet'>
<link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='css/component.css' />
<script src='js/modernizr.custom.js'></script>
</head>
<body id='page-top' class='index'>
<nav class='navbar navbar-default navbar-fixed-top'>
<div class='container'>
<div class='navbar-header page-scroll'>
<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
<span class='sr-only'>Toggle navigation</span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
</button>
<a class='navbar-brand page-scroll' href='#page-top' >
<img src='img/logos/logovedax.png' alt='<?php echo $empresa ?>' id='vedaxlogo' />
</a>
</div>
<a class='iconLing' href='<?php echo $urlLing ?>' >
<img src='img/icons/<?php echo $img ?>' alt='icon' id='iconLinguagem' />
</a>
<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
<ul class='nav navbar-nav navbar-right'>
<li class='hidden'>
<a href='#page-top'></a>
</li>
<?php for ($i = 1; $i <= $totalpaginas; $i++) {
$row = mysqli_fetch_array($resultadopaginas);
$nome = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
$referencia = htmlentities($row["referencia"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<li>
<a class='page-scroll' href='#$referencia'>$nome</a>
</li>";
}?>
</ul>
</div>
</div>
</nav>
<header>
<div class='container'>
<div class='intro-text'>
<?php for ($i = 1; $i <= $totalhome; $i++) {
$row = mysqli_fetch_array($resultadohome);
$titulohome = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
$botao = htmlentities($row["botao"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<div class='intro-lead-in'>$titulohome</div>
<a href='#about' class='page-scroll btn btn-xl'>$botao</a>";
}?>
</div>
</div>
</header>
<section id='about'>
<div class='container'>
<div class='row'>
<?php for ($i = 1; $i <= $totalquemSomos; $i++) {
$row = mysqli_fetch_array($resultadoquemSomos);
$tituloQuemSomos = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
$text = htmlentities($row["texto"], ENT_COMPAT, 'ISO-8859-1', true);
$resultado = strTr($text, $filtro);
$texto=nl2br($resultado);
$fraseQuemSomos = htmlentities($row["frase"], ENT_COMPAT, 'ISO-8859-1', true);
$textoFrase = htmlentities($row["textoFrase"], ENT_COMPAT, 'ISO-8859-1', true);
$qtfoto = 2;
echo "<div class='col-lg-12 text-center'>
<h2 class='section-heading'>$tituloQuemSomos</h2>
<h3 class='section-subheading text-muted'>$fraseQuemSomos</h3>
</div>
</div>
<div class='row'>
<p class='text-muted'>$texto</p>
<p> </p>
<div class='finalempresa'>
$textoFrase<br><br></div>
<div id='imgempresa'>";
for ($i = 1; $i <= $qtfoto; $i++) {
$img = htmlentities($row["img$i"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<img src='img/about/$img' alt='Foto $i' class='vedaxempresa' /> ";
}
}?>
</div>
</div>
</div>
<a id='back-top' href='#'></a>
</section>
<section id='produts' class='bg-light-gray'>
<div class='container'>
<div class='row'>
<div class='col-lg-12 text-center'>
<?php if($urlLing=="en.php"){
    echo "<h2 class='section-heading'>Produtos</h2>";
}else{
    echo "<h2 class='section-heading'>Products</h2>";
}?>
<h3 class='section-subheading text-muted'></h3>
</div>
</div>
<div class='row'>
<?php for ($i = 1; $i <= $totalpro; $i++) {
$row = mysqli_fetch_array($resultadopro);
$nom = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
$nome = strTr($nom, $filtro);
$tip = htmlentities($row["tipo"], ENT_COMPAT, 'ISO-8859-1', true);
$tipo = strTr($tip, $filtro);
$img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<div class='col-md-4 col-sm-6 produts-item positionproduts'>
<a href='#produtsModal$i' class='produts-link' data-toggle='modal'>
<div class='produts-hover'>
<div class='produts-hover-content'>
<i class='fa fa-plus fa-3x'></i>
</div>
</div>
<img src='img/produts/inicial/$img' class='img-responsive imgproduts' alt='$nome $tipo'>
</a>
<div class='produts-caption'>
<h4>$nome</h4>
<p class='text-muted'>$tipo</p>
</div>
</div>";
}?>
</div>
</div>
</section>
<section id='processes'>
<div class='container'>
<div class='row'>
<div class='col-lg-12 text-center'>
<?php if($urlLing=="en.php"){
    echo "<h2 class='section-heading'>Processos</h2>";
}else{
    echo "<h2 class='section-heading'>Processes</h2>";
}?>
<h3 class='section-subheading text-muted'></h3>
</div>
</div>
<div class='row'>
<div class='col-lg-12'>
<ul class='timeline'>
<?php for ($i = 1; $i <= $totalprocessos; $i++) {
$row = mysqli_fetch_array($resultadoprocesses);
$titul = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
$titulo = strTr($titul, $filtro);
$ex = htmlentities($row["explicacao"], ENT_COMPAT, 'ISO-8859-1', true);
$expl = strTr($ex, $filtro);
$explicacao=nl2br($expl);
$img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
if($i%2==1 && $i!==$totalprocessos && $titulo!=="tratamento t&eacute;rmico"){
echo "
<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo</h4>
</div>
<div class='timeline-body'>
<p class='text-muted'>$explicacao</p>
</div>
</div>
</li>";
}else if($i%2==0 && $i!==$totalprocessos && $titulo!=="tratamento t&eacute;rmico"){
echo "<li class='timeline-inverted'>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo</h4>
</div>
<div class='timeline-body'>
<p class='text-muted'>$explicacao</p>
</div>
</div>
</li>";
}else if ($i%2==0 && $titulo=="tratamento t&eacute;rmico"){
echo "<li class='timeline-inverted'>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo (<a href='http://www.steeltrat.com.br' target='_blank'>Steeltrat</a>)</h4>
</div>
<div class='timeline-body'>
<p class='text-muted'>$explicacao</p>
</div>
</div>
</li>";
}
else if ($i%2!==0 && $titulo=="tratamento t&eacute;rmico"){
echo "<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo (<a href='http://www.steeltrat.com.br' target='_blank'>Steeltrat</a>)</h4>
</div>
<div class='timeline-body'>
<p class='text-muted'>$explicacao</p>
</div>
</div>
</li>";
}else if($i==$totalprocessos){
echo "<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo'>
</div>
</li>";
}
}?>
</ul>
</div>
</div>
</div>
</section>
<aside class='clients' id='clients'>
<div class='container'>
<div class='row'>
<?php for ($i = 1; $i <= $totalClientes; $i++) {
$row = mysqli_fetch_array($resultadoClientes);
$tituloCliente = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
$imgCliente = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<div class='col-md-3 col-sm-6'>
<a href='#clients'>
<img src='img/clients/$imgCliente' class='img-responsive img-centered imgclients' alt='$tituloCliente'>
</a>
</div>";
}?>
</div>
</div>
</aside>
<section id='certificates' class='bg-light-gray'>
<div class='container'>
<div class='row'>
<div class='col-lg-12 text-center'>
<?php if($urlLing=="en.php"){
    echo "<h2 class='section-heading'>Certificados</h2>";
}else{
    echo "<h2 class='section-heading'>Certificates</h2>";
}?>
<h3 class='section-subheading text-muted'></h3>
</div>
</div>
<div class='row text-center'>
<?php for ($i = 1; $i <= $totalCertificados; $i++) {
$row = mysqli_fetch_array($resultadoCertificados);
$tituloCertificad = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
$tituloCertificado = strTr($tituloCertificad, $filtro);
$imgCertificado = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
$abreviacao = htmlentities($row["abreviacao"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<div class='col-md-4 certificates'>
<span class='fa-stack fa-4x'>
<a href='#$abreviacao' class='produts-link' data-toggle='modal'>
<img src='img/certificates/$imgCertificado' class='imgcertificates' alt='$tituloCertificado'>
</a>
</span>
<h4 class='service-heading'>$tituloCertificado</h4>
</div>";
}?>
</div>
</div>
</section>
<section id='location'>
<div class='container'>
<div class='row'>
<div class='col-lg-12 text-center'>
<?php if($urlLing=="en.php"){
    echo "<h2 class='section-heading'>Localização</h2>
<h3 class='section-subheading text-muted'>Endereço</h3>";
}else{
    echo "<h2 class='section-heading'>Location</h2>
<h3 class='section-subheading text-muted'>Address</h3>";
}?>
</div>
</div>
<div class='row'>
<div class='col-sm-4'>
<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.232269276931!2d-46.87779399999999!3d-23.48814200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03a4ba9ed573%3A0x6adc5c7c4bb3d157!2sVedax+Equipamentos+Hidr%C3%A1ulicos+Ltda!5e0!3m2!1spt-BR!2sbr!4v1426962668973' style='border:0'>
</iframe>
<?php for ($i = 1; $i <= $totalempresa; $i++) {
$row = mysqli_fetch_array($resultadolocalizacao);
$nome = htmlentities($row["empresa"], ENT_COMPAT, 'ISO-8859-1', true);
$tipo = htmlentities($row["tipo"], ENT_COMPAT, 'ISO-8859-1', true);
$email = htmlentities($row["email"], ENT_COMPAT, 'ISO-8859-1', true);
$telefone = htmlentities($row["telefone"], ENT_COMPAT, 'ISO-8859-1', true);
$telefone = "+" . substr($telefone, 0, 2) . " " . substr($telefone, 2, 2) . " " . substr($telefone, -8, 4) . "-" . substr($telefone, -4, 4); // TELEFONE
$rua = htmlentities($row["rua"], ENT_COMPAT, 'ISO-8859-1', true); // RUA DA EMPRESA
$nr = $row["nr"]; // NR DA EMPRESA
$bairro = htmlentities($row["bairro"], ENT_COMPAT, 'ISO-8859-1', true); // BAIRRO DA EMPRESA
$cidade = htmlentities($row["cidade"], ENT_COMPAT, 'ISO-8859-1', true); // CIDADE DA EMPRESA
$estado = $row["estado"]; // ESTADO ONDE SE LOCALIZA A EMPRESA
$cep = $row["cep"]; // CEP DA EMPRESA
if (substr($cep, -4, 1) === '-') {
$endereco = $rua . ", " . $nr . " - " . $bairro . ", " . $cidade . " - " . $estado . ", " . $cep; // ENDERECO COMPLETO
} else {
$endereco = $rua . ", " . $nr . " - " . $bairro . ", " . $cidade . " - " . $estado . ", " . substr($cep, 0, 5) . "-" . substr($cep, -3); // ENDERECO COMPLETO
}
$coordenadasgps = $row["gpsX"] . ", " . $row["gpsY"];
$urlmaps = htmlentities($row["urlmaps"], ENT_COMPAT, 'ISO-8859-1', true);
$urlmaps = "http://maps.apple.com/?daddr=".$urlmaps;
echo "<p class='localizacao'> <span style='font-size: 12pt;'>
<u>$tipo</u> | $nome <br><br>
<img src='img/icons/icon-location.png' alt='Localização $nome'>
<u><a href='$urlmaps'>$endereco</a></u><br><br>
<img src='img/icons/icon-phone.png' alt='Telefone $nome'>
<u> $telefone</u><br><br>
</span> </p> <hr class='hrlocalizacao'>";
}?>
</div>
</div>
</div>
</section>
<section id='contact'>
<div class='container'>
<div class='row'>
<div class='col-lg-12 text-center'>
<?php if($urlLing=="en.php"){
    echo "<h2 class='section-heading'>Contato</h2>
<h3 class='section-subheading text-muted'>Fale Conosco</h3>";
}else{
    echo "<h2 class='section-heading'>Contact</h2>
<h3 class='section-subheading text-muted'>Contact Us</h3>";
}?>
</div>
</div>
<div class='row'>
<div class='col-lg-12'>
<div class='row'>
<form name='sentMessage' id='contactForm' novalidate>
<div class='col-md-6'>
<div class='form-group'>
<input name='name' type='text' class='form-control' placeholder='<?php echo $nomeContato ?> *' id='name' required data-validation-required-message='<?php echo $msgNomeContat ?>'>
<p class='help-block text-danger'></p>
</div>
<div class='form-group'>
<input name='email' type='email' class='form-control' placeholder='<?php echo $emailContato ?> *' id='email' required data-validation-required-message='<?php echo $msgEmailContat ?>'>
<p class='help-block text-danger'></p>
</div>
<div class='form-group'>
<input name='phone' type='tel' class='form-control' placeholder='<?php echo $telefoneContato ?> *' id='phone' required data-validation-required-message='<?php echo $msgTelContat ?>'>
<p class='help-block text-danger'></p>
</div>
</div>
<div class='col-md-6'>
<div class='form-group'>
<textarea name='message' class='form-control' placeholder='<?php echo $mensagemContato ?> *' id='message' required data-validation-required-message='<?php echo $msgMensagemContat ?>'></textarea>
<p class='help-block text-danger'></p>
</div>
</div>
<div class='clearfix'></div>
<div class='col-lg-12 text-center'>
<div id='success'></div>
<button type='submit' class='btn btn-xl'><?php echo $botaoM ?></button>
</div> 
</form>
<h2 class='section-heading emailsdepart'>Email Departamentos:</h2>
<ul class='grid cs-style-3'>
<?php for ($i = 1; $i <= $totalcont; $i++) {
$row = mysqli_fetch_array($resultadocont);
$email = htmlentities($row["email"], ENT_COMPAT, 'ISO-8859-1', true);
$departamento = htmlentities($row["departamento"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<li>
<figure>
<h2 class='section-email-contact'>$departamento</h2>
<figcaption>
<h3>$email</h3>
</figcaption>
</figure>
</li>";
}?>
</ul>
</div>
</div>
</div>
</div>
</section>
<footer>
<div class='container'>
<div class='row'>
<div class='col-md-4'>
<span class='copyright'>Copyright <a href='<?php echo $facebookdesenvolvedor ?>' target='_blank'>&copy;</a><?php echo "$empresa $ano"; ?> </span>
</div>
<div class='col-md-4'>
<ul class='list-inline social-buttons'>
<li><a href='#'><i class='fa fa-twitter'></i></a>
</li>
<li><a href='$facebook' target='_blank'><i class='fa fa-facebook'></i></a>
</li>
<li><a href='#'><i class='fa fa-linkedin'></i></a>
</li>
</ul>
</div>
<div class='col-md-4'>
<ul class='list-inline quicklinks'>
<li><a href='#'>Privacy Policy</a>
</li>
<li><a href='#'>Terms of Use</a>
</li>
</ul>
</div>
</div>
</div>
</footer>
<?php for ($i = 1; $i <= $totalprodutos; $i++) {
$row = mysqli_fetch_array($resultadoprodutos);
$nom = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true); 
$nome = strTr($nom, $filtro);
$tip = htmlentities($row["tipo"], ENT_COMPAT, 'ISO-8859-1', true);
$tipo = strTr($tip, $filtro);
$des = htmlentities($row["descricao"], ENT_COMPAT, 'ISO-8859-1', true);
$desc = strTr($des, $filtro);
$descricao=nl2br($desc);
$exp = htmlentities($row["explicacao"], ENT_COMPAT, 'ISO-8859-1', true);
$expl = strTr($exp, $filtro);
$expli = stripslashes($expl);
$explicacao=nl2br($expli);
$img = htmlentities($row["imgprodut"], ENT_COMPAT, 'ISO-8859-1', true);
echo"<div class='produts-modal modal fade' id='produtsModal$i' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='modal-content'>
<div class='close-modal' data-dismiss='modal'>
<div class='lr'>
<div class='rl'>
</div>
</div>
</div>
<div class='container'>
<div class='row'>
<div class='col-lg-8 col-lg-offset-2'>
<div class='modal-body'>
<h2>$nome</h2>
<p class='item-intro text-muted'>$tipo</p>
<img class='img-responsive img-centered imgprodut' src='img/produts/$img' alt='$nome $tipo'>
<p>$descricao</p>
<p>
$explicacao
</p>
<button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> $botaoProd</button>
</div>
</div>
</div>
</div>
</div>
</div>";
}
for ($i = 1; $i <= $totalCertificados; $i++) {
$row = mysqli_fetch_array($resultadocert);
$tituloCertificad = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
$tituloCertificado = strTr($tituloCertificad, $filtro);
$imgCertificado = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
$pdfCertificado = htmlentities($row["pdf"], ENT_COMPAT, 'ISO-8859-1', true);
$abreviacao = htmlentities($row["abreviacao"], ENT_COMPAT, 'ISO-8859-1', true);
echo"<div class='produts-modal modal fade' id='$abreviacao' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='modal-content'>
<div class='close-modal' data-dismiss='modal'>
<div class='lr'>
<div class='rl'>
</div>
</div>
</div>
<div class='container'>
<div class='row'>
<div class='col-lg-8 col-lg-offset-2'>
<div class='modal-body'>
<h2>$tituloCertificado</h2>
<object data='pdf/$pdfCertificado' type='application/pdf'>
<a href='pdf/$pdfCertificado'>test.pdf</a>
</object>
<button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> $botaoPdf</button>
</div>
</div>
</div>
</div>
</div>
</div>";
}?>
<script src='js/jquery.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/jquery.easing.min.js'></script>
<script src='js/classie.js'></script>
<script src='js/cbpAnimatedHeader.js'></script>
<script src='js/jqBootstrapValidation.js'></script>
<script src='js/contact_me.js'></script>
<script src='js/agency.js'></script>
</body>
</html>