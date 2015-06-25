<?php 
session_start(); 
if((!isset ($_SESSION['login']) == true) && (!isset ($_SESSION['password']) == true)) { 
    unset($_SESSION['login']); 
    unset($_SESSION['password']); 
    header('location:index.php'); 
} 
$logado = $_SESSION['login'];
require "../config/config.ini";  
if (!isset($tipoLinguagem)){
    $tipoLinguagem="USA";
    $db="";
    $urlLing="en.php";
    $img = "usa.png";
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
$resultadocont = mysqli_query($conexao, "SELECT * from contato GROUP BY departamento$db");
$totalcont = mysqli_num_rows($resultadocont);
$resultadopaginas = mysqli_query($conexao, "SELECT * from paginas");
$totalpaginas = mysqli_num_rows($resultadopaginas);
$resultadohome = mysqli_query($conexao, "SELECT * from home");
$totalhome = mysqli_num_rows($resultadohome);
$resultadoquemSomos = mysqli_query($conexao, "SELECT * from quemsomos");
$totalquemSomos = mysqli_num_rows($resultadoquemSomos);
$resultadopro = mysqli_query($conexao, "SELECT * from produtos");
$totalpro = mysqli_num_rows($resultadopro);
$resultadoprocesses = mysqli_query($conexao, "SELECT * from processos");
$totalprocessos = mysqli_num_rows($resultadoprocesses);
$resultadoClientes = mysqli_query($conexao, "SELECT * from clientes");
$totalClientes = mysqli_num_rows($resultadoClientes);
$resultadoCertificados = mysqli_query($conexao, "SELECT * from certificados");
$totalCertificados = mysqli_num_rows($resultadoCertificados);
$resultadolocalizacao = mysqli_query($conexao, "SELECT * from empresa");
$totalempresa = mysqli_num_rows($resultadolocalizacao);
$resultadoprodutos = mysqli_query($conexao, "SELECT * from produtos");
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
<meta name='author' content='<?php echo $nomedesenvolvedor ?>'>
<title>Administração | <?php echo $empresa ?></title>
<link rel='icon' href='../img/favicon.ico' />
<link href='../css/bootstrap.min.css' rel='stylesheet'>
<link href='../css/bootstrap.css' rel='stylesheet'>
<link href='../css/agency.css' rel='stylesheet'>
<link href='../css/custom.css' rel='stylesheet'>
<link href='css/custom.css' rel='stylesheet'>
<link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='../css/component.css' />
<script src='../js/modernizr.custom.js'></script>
<script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<style type="text/css">
::-webkit-scrollbar {width:10px;}
::-webkit-scrollbar-track {background:#efefef;-webkit-box-shadow:inset 0 0 4px rgba(0,0,0,0.1);}
::-webkit-scrollbar-thumb {border-radius:5px;-webkit-box-shadow:inset 0 0 4px rgba(0,0,0,0.5);}
::-webkit-scrollbar-thumb {background:#007cd2;}
</style>
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
<img src='../img/logos/logovedax.png' alt='<?php echo $empresa ?>' id='vedaxlogo' title='Logo Vedax' />
</a>
<a class='iconLing' href='<?php echo $urlLing ?>' >
<img src='../img/icons/<?php echo $img ?>' alt='icon' id='iconLinguagem' />
</a>
</div>
<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
<ul class='nav navbar-nav navbar-right'>
<li class='hidden'>
<a href='#page-top'></a>
</li>
<?php for ($i = 1; $i <= $totalpaginas; $i++) {
$row = mysqli_fetch_array($resultadopaginas);
if($i==1){
    $tituloQuemSomos=replaceaccents($row["titulo$db"]);
    $fraseQuemSomos=replaceaccents($row["frase$db"]);
}
if($i==2){
    $tituloProdutos=replaceaccents($row["titulo$db"]);
    $fraseProdutos=replaceaccents($row["frase$db"]);
}
if($i==3){
    $tituloProcessos=replaceaccents($row["titulo$db"]);
    $fraseProcessos=replaceaccents($row["frase$db"]);
}
if($i==4){
    $tituloCertificado=replaceaccents($row["titulo$db"]);
    $fraseCertificado=replaceaccents($row["frase$db"]);
}
if($i==5){
    $tituloLocalizacao=replaceaccents($row["titulo$db"]);
    $fraseLocalizacao=replaceaccents($row["frase$db"]);
}
if($i==6){
    $tituloContato=replaceaccents($row["titulo$db"]);
    $fraseContato=replaceaccents($row["frase$db"]);
}
$nome = replaceaccents($row["nome$db"]);
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
<form action='salvar.php' method='POST' name='homeForm'>
<div class='intro-text'>
<?php for ($i = 1; $i <= $totalhome; $i++) {
$row = mysqli_fetch_array($resultadohome);
$titulohome = replaceaccents($row["titulo$db"]);
$botao = replaceaccents($row["botao$db"]);
echo "<div id='aviso'>Não utilize \"\" ou caracteres especiais no Site!</div>
<div class='intro-lead-in'><input class='campo_titulohome' name='titulo' type='text' value='$titulohome'></div>
<a class='btn btn-xl'><input class='campo_botaohome' name='botao' type='text' value='$botao'></a>";
}?>
</div>
<input type='hidden' name='salvarHome' value='1'>
<input type='hidden' name='tipoLinguagem' value='<?php echo $tipoLinguagem ?>'>
<input type='submit' class='salvarhome' value='Salvar Home'>
</form>
</div>
</header>
<section id='about' class='bg-light-gray'>
<div class='container'>
<form action='salvar.php' method='POST' name='salvarAbout' novalidate>
<div class='row'>
<div class='col-lg-12 text-center'>
<h2 class='section-heading'><input class='campo_titulohome' name='tituloQuemSomos' type='text' value='<?php echo $tituloQuemSomos ?>'></h2>
<h3 class='section-subheading text-muted'><input class='campo_titulohome' name='fraseQuemSomos' type='text' value='<?php echo $fraseQuemSomos ?>'></h3>
</div>
</div>
<div class='row'>
<?php for ($i = 1; $i <= $totalquemSomos; $i++) {
$row = mysqli_fetch_array($resultadoquemSomos);
$texto = replaceaccents($row["texto$db"]);
$textoFrase = replaceaccents($row["textoFrase$db"]);
$qtfoto = 2;
echo "<p class='text-muted'><textarea name='textoQuemSomos' class='campo_texto' >$texto</textarea></p>
<p> </p>
<div class='finalempresa'>
<textarea name='textoFraseQuemSomos' class='campo_textoFrase' >$textoFrase</textarea><br><br></div>
<div id='imgempresa'>";
for ($i = 1; $i <= $qtfoto; $i++) {
$img = htmlentities($row["img$i"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<img src='../img/about/$img' alt='Foto $i' class='vedaxempresa' /> ";
}
}?>
</div>
</div>
<input type='hidden' name='tipoLinguagem' value='<?php echo $tipoLinguagem ?>'>
<input type='hidden' name='salvarAbout' value='1'><br/>
<input type='submit' class='salvarabout' value='Salvar Quem Somos'>
</form>
</div>
<a id='back-top' href='#'></a>
</section>
<section id='produts'>
<div class='container'>
<form action='salvar.php' method='POST' name='salvarProducts' novalidate>
<div class='row'>
<div class='col-lg-12 text-center'>
<h2 class='section-heading'><input class='campo_titulohome' name='tituloProdutos' type='text' value='<?php echo $tituloProdutos ?>'></h2>
<h3 class='section-subheading text-muted'><input class='campo_titulohome' name='fraseProdutos' type='text' value='<?php echo $fraseProdutos ?>'></h3>
</div>
</div>
<div class='row'>
<?php for ($i = 1; $i <= $totalpro; $i++) {
$row = mysqli_fetch_array($resultadopro);
$nome = replaceaccents($row["nome$db"]);
$tipo = replaceaccents($row["tipo$db"]);
$img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<div class='col-md-4 col-sm-6 produts-item positionproduts'>
<a href='#produtsModal$i' class='produts-link' data-toggle='modal'>
<div class='produts-hover'>
<div class='produts-hover-content'>
<i class='fa fa-plus fa-3x'></i>
</div>
</div>
<img src='../img/produts/inicial/$img' class='img-responsive imgproduts' alt='$nome $tipo'>
</a>
<div class='produts-caption'>
<h4><input class='campo_botaohome' name='nome$i' type='text' value='$nome'></h4>
<p class='text-muted'><input class='campo_botaohome' name='tipo$i' type='text' value='$tipo'></p>
</div>
</div>";
}?>
<input type='hidden' name='tipoLinguagem' value='<?php echo $tipoLinguagem ?>'>
<input type='hidden' name='salvarProducts' value='<?php echo $totalpro ?>'><br/>
<input type='submit' class='salvarabout' value='Salvar Produto'>
</div>
</form>
</div>
</section>
<section id='processes' class='bg-light-gray'>
<div class='container'>
<form action='salvar.php' method='POST' name='salvarProcessos' novalidate>
<div class='row'>
<div class='col-lg-12 text-center'>
<h2 class='section-heading'><input class='campo_titulohome' name='tituloProcessos' type='text' value='<?php echo $tituloProcessos ?>'></h2>
<h3 class='section-subheading text-muted'><input class='campo_titulohome' name='fraseProcessos' type='text' value='<?php echo $fraseProcessos ?>'></h3>
</div>
</div>
<div class='row'>
<div class='col-lg-12'>
<ul class='timeline'>
<?php for ($i = 1; $i <= $totalprocessos; $i++) {
$row = mysqli_fetch_array($resultadoprocesses);
$titulo = replaceaccents($row["titulo$db"]);
$explicacao = replaceaccents($row["explicacao$db"]);
$img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
if($i%2==1 && $i!==$totalprocessos && $titulo!=="tratamento térmico"){
echo "
<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='../img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4><input class='campo_botaohome' name='titulo$i' type='text' value='$titulo'></h4>
</div>
<div class='timeline-body'>
<p class='text-muted'><textarea name='explicacao$i' class='campo_textoExplicacao' >$explicacao</textarea></p>
</div>
</div>
</li>";
}else if($i%2==0 && $i!==$totalprocessos && $titulo!=="tratamento térmico"){
echo "<li class='timeline-inverted'>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='../img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4><input class='campo_botaohome' name='titulo$i' type='text' value='$titulo'></h4>
</div>
<div class='timeline-body'>
<p class='text-muted'><textarea name='explicacao$i' class='campo_textoExplicacao' >$explicacao</textarea></p>
</div>
</div>
</li>";
}else if ($i%2==0 && $titulo=="tratamento térmico"){
echo "<li class='timeline-inverted'>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='../img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4><input class='campo_botaohome' name='titulo$i' type='text' value='$titulo'> (<a href='http://www.steeltrat.com.br' target='_blank'>Steeltrat</a>)</h4>
</div>
<div class='timeline-body'>
<p class='text-muted'><textarea name='explicacao$i' class='campo_textoExplicacao' >$explicacao</textarea></p>
</div>
</div>
</li>";
}
else if ($i%2!==0 && $titulo=="tratamento térmico"){
echo "<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='../img/processes/$img' alt='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4><input class='campo_botaohome' name='titulo$i' type='text' value='$titulo'> (<a href='http://www.steeltrat.com.br' target='_blank'>Steeltrat</a>)</h4>
</div>
<div class='timeline-body'>
<p class='text-muted'><textarea name='explicacao$i' class='campo_textoExplicacao' >$explicacao</textarea></p>
</div>
</div>
</li>";
}else if($i==$totalprocessos){
echo "<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='../img/processes/$img' alt='$titulo'>
</div>
</li>";
}
}?>
</ul>
</div>
</div>
<input type='hidden' name='tipoLinguagem' value='<?php echo $tipoLinguagem ?>'>
<br/><br/><input type='hidden' name='salvarProcessos' value='<?php echo $totalprocessos ?>'><br/>
<input type='submit' class='salvarabout' value='Salvar Processo'>
</form>
</div>
</section>
<aside class='clients' id='clients'>
<div class='container'>
<div class='row'>
<?php for ($i = 1; $i <= $totalClientes; $i++) {
$row = mysqli_fetch_array($resultadoClientes);
$tituloCliente = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
$imgCliente = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<div class='col-md-3 col-sm-6 clients'>
<a href='#clients'>
<img src='../img/clients/$imgCliente' class='img-responsive img-centered imgclients' alt='$tituloCliente' title='$tituloCliente' >
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
<h2 class='section-heading'><?php echo $tituloCertificado; ?></h2>
<h3 class='section-subheading text-muted'><?php echo $fraseCertificado; ?></h3>
</div>
</div>
<div class='row text-center'>
<?php for ($i = 1; $i <= $totalCertificados; $i++) {
$row = mysqli_fetch_array($resultadoCertificados);
$tituloCertificado = replaceaccents($row["titulo"]);
$imgCertificado = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
$abreviacao = replaceaccents($row["abreviacao"]);
echo "<div class='col-md-4 certificates'>
<span class='fa-stack fa-4x'>
<a href='#$abreviacao' class='produts-link' data-toggle='modal'>
<img src='../img/certificates/$imgCertificado' class='imgcertificates' alt='$tituloCertificado' title='$tituloCertificado'>
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
<form action='salvar.php' method='POST' name='salvarLocalizacao' novalidate>
<div class='row'>
<div class='col-lg-12 text-center'>
<h2 class='section-heading'><input class='campo_titulohome' name='tituloLocalizacao' type='text' value='<?php echo $tituloLocalizacao ?>'></h2>
<h3 class='section-subheading text-muted'><input class='campo_titulohome' name='fraseLocalizacao' type='text' value='<?php echo $fraseLocalizacao ?>'></h3>
</div>
</div>
<div class='row'>
<div class='col-sm-4'>
<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.232269276931!2d-46.87779399999999!3d-23.48814200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03a4ba9ed573%3A0x6adc5c7c4bb3d157!2sVedax+Equipamentos+Hidr%C3%A1ulicos+Ltda!5e0!3m2!1spt-BR!2sbr!4v1426962668973' style='border:0'>
</iframe>
<?php for ($i = 1; $i <= $totalempresa; $i++) {
$row = mysqli_fetch_array($resultadolocalizacao);
$nome = replaceaccents($row["empresa"]);
$tipo = replaceaccents($row["tipo$db"]);
$telefone = htmlentities($row["telefone"], ENT_COMPAT, 'ISO-8859-1', true);
$rua = replaceaccents($row["rua"]);
$nr = $row["nr"]; // NR DA EMPRESA
$bairro = replaceaccents($row["bairro"]);
$cidade = replaceaccents($row["cidade"]);
$estado = $row["estado"]; // ESTADO ONDE SE LOCALIZA A EMPRESA
$cep = $row["cep"]; // CEP DA EMPRESA
$urlmaps = htmlentities($row["urlmaps"], ENT_COMPAT, 'ISO-8859-1', true);
$urlmaps = "http://maps.apple.com/?daddr=".$urlmaps;
echo "<p class='localizacao'> <span style='font-size: 12pt;'>
<u><input class='campo_botaohome' name='tipo$i' type='text' value='$tipo'></u> | <input class='campo_botaohome' name='empresa$i' type='text' value='$nome'> <br><br>
<img src='../img/icons/icon-phone.png' alt='Telefone $nome'>
Telefone: <input class='campo_botaohome' name='telefone$i' type='text' value='$telefone'><br> <u>*APENAS O NÚMERO COM DDD DO PAIS E DO ESTADO TUDO JUNTO</u></br></br>
<img src='../img/icons/icon-location.png' alt='Localização $nome'>
Rua: <input class='campo_botaohome' name='rua$i' type='text' value='$rua'><br><br>
Nr: <input class='campo_botaohome' name='nr$i' type='text' value='$nr'><br><br>
Bairro: <input class='campo_botaohome' name='bairro$i' type='text' value='$bairro'><br><br>
Cidade: <input class='campo_botaohome' name='cidade$i' type='text' value='$cidade'><br><br>
Estado: <input class='campo_botaohome' name='estado$i' type='text' value='$estado'><br><br>
Cep: <input class='campo_botaohome' name='cep$i' type='text' value='$cep'><br><br>
<br><br>
</span> </p> <hr class='hrlocalizacao'>";
}?>
</div>
</div>
<input type='hidden' name='tipoLinguagem' value='<?php echo $tipoLinguagem ?>'>
<br/><br/><input type='hidden' name='salvarLocalizacao' value='<?php echo $totalempresa ?>'><br/>
<input type='submit' class='salvarabout' value='Salvar Localizacao'>
</form>
</div>
</section>
<section id='contact'>
<div class='container'>
<div class='row'>
<div class='col-lg-12 text-center'>
<h2 class='section-heading'><?php echo $tituloContato; ?></h2>
<h3 class='section-subheading text-muted'><?php echo $fraseContato; ?></h3>
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
$email = replaceaccents($row["email"]);
$departamento = replaceaccents($row["departamento$db"]);
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
<li><a href='<?php echo $facebook ?>' target='_blank'><i class='fa fa-facebook'></i></a>
</li>
<li><div class="fb-like" data-href="<?php echo $facebook; ?>" data-width="40" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
</li>
</ul>
</div>
<div class='col-md-4'>
<ul class='list-inline quicklinks'>
<li><a href='http://www.google.com/safebrowsing/diagnostic?site=www.vedax.ind.br' target='_blank' ><img src='../img/google-safe-browsing.png' alt ='' /></a>
</li>
</ul>
</div>
</div>
</div>
</footer>
<?php for ($i = 1; $i <= $totalprodutos; $i++) {
$row = mysqli_fetch_array($resultadoprodutos);
$nome = replaceaccents($row["nome"]);
$tipo = replaceaccents($row["tipo"]);
$descricao = replaceaccents($row["descricao"]);
$explicacao = replaceaccents($row["explicacao"]);
$img = htmlentities($row["imgprodut"], ENT_COMPAT, 'ISO-8859-1', true);
echo"<form action='salvar.php' method='POST' name='salvarProdutosProntos' novalidate>
<div class='produts-modal modal fade' id='produtsModal$i' tabindex='-1' role='dialog' aria-hidden='true'>
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
<h2><input class='campo_botaohome' name='nome$i' type='text' value='$nome'></h2>
<p class='item-intro text-muted'><input class='campo_botaohome' name='tipo$i' type='text' value='$tipo'></p>
<img class='img-responsive img-centered imgprodut' src='../img/produts/$img' alt='$nome $tipo'>
<textarea name='descricao$i' class='campo_textoExplicacao' >$descricao</textarea>
<textarea name='explicacao$i' class='campo_textoExplicacao' >$explicacao</textarea>
<button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> $botaoProd</button>
<input type='hidden' name='tipoLinguagem' value='$tipoLinguagem'>
<br/><br/><input type='hidden' name='salvarProdutosProntos' value='$totalprodutos'><br/>
<input type='submit' class='salvarabout' value='Salvar Produto'>
</div>
</div>
</div>
</div>
</div>
</div>
</form>";
} ?>
<?php for ($i = 1; $i <= $totalCertificados; $i++) {
$row = mysqli_fetch_array($resultadocert);
$tituloCertificado = replaceaccents($row["titulo"]);
$imgCertificado = replaceaccents($row["img"]);
$pdfCertificado = replaceaccents($row["pdf"]);
$abreviacao = replaceaccents($row["abreviacao"]);
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
<object data='../pdf/$pdfCertificado' type='application/pdf'>
<a href='../pdf/$pdfCertificado'>test.pdf</a>
</object>
<button type='button' class='btn btn-primary' data-dismiss='modal'><i class='fa fa-times'></i> $botaoPdf</button>
</div>
</div>
</div>
</div>
</div>
</div>";
}?>
<script src='../js/jquery.js'></script>
<script src='../js/bootstrap.min.js'></script>
<script src='../js/jquery.easing.min.js'></script>
<script src='../js/classie.js'></script>
<script src='../js/cbpAnimatedHeader.js'></script>
<script src='../js/jqBootstrapValidation.js'></script>
<script src='../js/agency.js'></script>
</body>
</html>
<?php mysqli_close($conexao)  ?>