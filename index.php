<?php 
require "config/config.ini";
if (!isset($tipoLinguagem)){
    $db="";
    $urlLing="en.php";
    $img = "usa.png";
    $nomeContato="Seu Nome";
    $telefoneContato="Seu Telefone";
    $emailContato="Seu Email";
    $mensagemContato="Mensagem";
    $dep="Selecione um Departamento * ";
    $msgNomeContat="Por favor digite seu nome";
    $msgEmailContat="Por favor digite seu email";
    $msgTelContat="Por favor digite seu telefone";
    $msgMensagemContat="Por favor digite sua mensagem";
    $msgDepartaments="Por favor selecione um departamento";
    $botaoM="Enviar Mensagem";
    $botaoProd="Fechar Produto";
    $botaoPdf="Fechar PDF";
}
$resultadoconta = mysqli_query($conexao, "SELECT * from contato GROUP BY departamento$db");
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
$resultadodescricaco = mysqli_query($conexao, "SELECT * from empresa");
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
<?php 
$row = mysqli_fetch_array($resultadodescricaco);
$descricao=replaceaccents($row["descricao$db"]);
?>
<meta name='description' content='<?php echo $descricao ?>'>
<meta name='keywords' content='vedax,aço,conexões,flanges normativos,flanges forjados,aneis forjados,conexoes forjadas,flanges especiais,forjados especiais,flanges,forjados,carbono,empresa,produtos,comprar,anéis,discos,tubos,metalurgia,hidraulicos,niquel'>
<meta name='author' content='<?php echo $nomedesenvolvedor ?>'>
<title><?php echo $empresa ?></title>
<link rel='icon' href='img/favicon.ico' />
<link href='css/bootstrap.min.css' rel='stylesheet'>
<link href='css/bootstrap.css' rel='stylesheet'>
<link href='css/agency.css' rel='stylesheet'>
<link rel='stylesheet' href='css/flickity.css' media='screen'>
<link href='css/custom.css' rel='stylesheet'>
<link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='css/component.css' />
<script src='js/modernizr.custom.js'></script>
<script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65233045-1', 'auto');
  ga('send', 'pageview');

</script>
<style type="text/css">
::-webkit-scrollbar {width:10px;}
::-webkit-scrollbar-track {background:#efefef;-webkit-box-shadow:inset 0 0 4px rgba(0,0,0,0.1);}
::-webkit-scrollbar-thumb {border-radius:5px;-webkit-box-shadow:inset 0 0 4px rgba(0,0,0,0.5);}
::-webkit-scrollbar-thumb {background:#007cd2;}
</style>
</head>
<body id='page-top' class='index'>
<div id='loader'></div>
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
<img src='img/logos/logovedax.png' alt='<?php echo $empresa ?>' id='vedaxlogo' title='Logo Vedax' />
</a>
<a class='iconLing' href='<?php echo $urlLing ?>' >
<img src='img/icons/<?php echo $img ?>' alt='icon' id='iconLinguagem' />
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
<div class='intro-text'>
<?php for ($i = 1; $i <= $totalhome; $i++) {
$row = mysqli_fetch_array($resultadohome);
$titulohome = replaceaccents($row["titulo$db"]);
$botao = replaceaccents($row["botao$db"]);
echo "<div class='intro-lead-in'>$titulohome</div>
<a href='#about' class='page-scroll btn btn-xl'>$botao</a>";
}?>
</div>
</div>
</header>
<section id='about' class='bg-light-gray'>
<div class='container'>
<div class='row'>
<div class='col-lg-12 text-center'>
<h2 class='section-heading'><?php echo $tituloQuemSomos ?></h2>
<h3 class='section-subheading text-muted'><?php echo $fraseQuemSomos ?></h3>
</div>
</div>
<div class='row'>
<?php for ($i = 1; $i <= $totalquemSomos; $i++) {
$row = mysqli_fetch_array($resultadoquemSomos);
$text = replaceaccents($row["texto$db"]);
$texto=nl2br($text);
$textoFrase = replaceaccents($row["textoFrase$db"]);
$qtfoto = 2;
echo "<p class='large text-muted textoQuemSomos'>$texto</p>
<p> </p>
<div class='finalempresa'>
$textoFrase<br><br></div>
<div id='imgempresa'>";
for ($i = 1; $i <= $qtfoto; $i++) {
$img = htmlentities($row["img$i"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<img src='img/about/$img' alt='Foto $i' class='vedaxempresa' /> ";
}
}
if($db){
echo "<iframe class='vedaxempresa'
src='https://www.youtube.com/embed/bbBwZrxzsC0' allowfullscreen>
</iframe>";
}else{
echo "<iframe class='vedaxempresa'
src='https://www.youtube.com/embed/unxHiQV2XdI' allowfullscreen>
</iframe>";    
}
?>

</div>
</div>
</div>
<a class='back-top page-scroll' href='#page-top'></a>
</section>
<section id='produts' >
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
<img src='img/produts/inicial/$img' class='img-responsive imgproduts' alt='$nome $tipo' title='$nome $tipo'>
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
<section id='processes' class='bg-light-gray'>
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
$titulo = replaceaccents($row["titulo$db"]);
$titulot = replaceaccents($row["titulo"]);
$expl = replaceaccents($row["explicacao$db"]);
$explicacao=nl2br($expl);
$img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
if($i%2==1 && $i!==$totalprocessos && $titulot!=="TRATAMENTO TÉRMICO"){
echo "
<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo' title='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo</h4>
</div>
<div class='timeline-body'>
<p class='large text-muted'>$explicacao</p>
</div>
</div>
</li>";
}else if($i%2==0 && $i!==$totalprocessos && $titulot!=="TRATAMENTO TÉRMICO"){
echo "<li class='timeline-inverted'>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo' title='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo</h4>
</div>
<div class='timeline-body'>
<p class='large text-muted'>$explicacao</p>
</div>
</div>
</li>";
}else if ($i%2==0 && $titulot=="TRATAMENTO TÉRMICO"){
echo "<li class='timeline-inverted'>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo' title='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo (<a href='http://www.steeltrat.com.br' target='_blank'>Steeltrat</a>)</h4>
</div>
<div class='timeline-body'>
<p class='large text-muted'>$explicacao</p>
</div>
</div>
</li>";
}
else if ($i%2!==0 && $titulot=="TRATAMENTO TÉRMICO"){
echo "<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo' title='$titulo'>
</div>
<div class='timeline-panel'>
<div class='timeline-heading'>
<h4>$titulo (<a href='http://www.steeltrat.com.br' target='_blank'>Steeltrat</a>)</h4>
</div>
<div class='timeline-body'>
<p class='large text-muted'>$explicacao</p>
</div>
</div>
</li>";
}else if($i==$totalprocessos){
echo "<li>
<div class='timeline-image'>
<img class='img-circle img-responsive' src='img/processes/$img' alt='$titulo' title='$titulo'>
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
$tituloCliente = replaceaccents($row["titulo"]);
$imgCliente = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
echo "<div class='col-md-3 col-sm-6 clients'>
<a href='#clients' class='page-scroll'>
<img src='img/clients/$imgCliente' class='img-responsive img-centered imgclients' alt='$tituloCliente' title='$tituloCliente'>
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
$tituloCertificado = replaceaccents($row["titulo"]);
$imgCertificado = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
$abreviacao = replaceaccents($row["abreviacao"]);
echo "<div class='col-md-4 certificates'>
<span class='fa-stack fa-4x'>
<a href='#$abreviacao' class='produts-link' data-toggle='modal'>
<img src='img/certificates/$imgCertificado' class='imgcertificates' alt='$tituloCertificado' title='$tituloCertificado'>
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
<iframe id='framelocation' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.232269276931!2d-46.87779399999999!3d-23.48814200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03a4ba9ed573%3A0x6adc5c7c4bb3d157!2sVedax+Equipamentos+Hidr%C3%A1ulicos+Ltda!5e0!3m2!1spt-BR!2sbr!4v1426962668973' style='border:0'>
</iframe>
<?php for ($i = 1; $i <= $totalempresa; $i++) {
$row = mysqli_fetch_array($resultadolocalizacao);
$nome = replaceaccents($row["empresa"]);
$tipo = replaceaccents($row["tipo$db"]);
$telefone = htmlentities($row["telefone"], ENT_COMPAT, 'ISO-8859-1', true);
$telefone = "+" . substr($telefone, 0, 2) . " " . substr($telefone, 2, 2) . " " . substr($telefone, -8, 4) . "-" . substr($telefone, -4, 4); // TELEFONE
$rua = replaceaccents($row["rua"]);
$nr = $row["nr"]; // NR DA EMPRESA
$bairro = replaceaccents($row["bairro"]);
$cidade = replaceaccents($row["cidade"]);
$estado = $row["estado"]; // ESTADO ONDE SE LOCALIZA A EMPRESA
$cep = $row["cep"]; // CEP DA EMPRESA
if (substr($cep, -4, 1) === '-') {
$endereco = $rua . ", " . $nr . " - " . $bairro . ", " . $cidade . " - " . $estado . ", " . $cep; // ENDERECO COMPLETO
} else {
$endereco = $rua . ", " . $nr . " - " . $bairro . ", " . $cidade . " - " . $estado . ", " . substr($cep, 0, 5) . "-" . substr($cep, -3); // ENDERECO COMPLETO
}
$urlmaps = htmlentities($row["urlmaps"], ENT_COMPAT, 'ISO-8859-1', true);
$urlmaps = "http://maps.apple.com/?daddr=".$urlmaps;
echo "<p class='localizacao'> <span style='font-size: 12pt;'>
<u>$tipo</u> | $nome <br><br>
<img src='img/icons/icon-location.png' alt='Localização $nome'>
<u><a href='$urlmaps' target='_blank'>$endereco</a></u><br><br>
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
<div class='form-group'>
<select name='departament' class='form-control' id='departament' required data-validation-required-message='<?php echo $msgDepartaments; ?>'>
<option value=''><?php echo $dep ?></option>
<?php for ($i = 1; $i <= $totalcont; $i++) {
$row = mysqli_fetch_array($resultadoconta);
$email = replaceaccents($row["email"]);
$departamento = replaceaccents($row["departamento$db"]);
echo "<option value='$departamento'>$departamento</option>";
}?>
</select>
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
<input type='hidden' name='tipoLinguagem' id='tipoLinguagem' value='<?php echo $tipoLinguagem ?>'>
<button type='submit' class='btn btn-xl'><?php echo $botaoM ?></button>
</div> 
</form>
</div>
</div>
</div>
</div>
</section>
<footer>
<div class='container'>
<div class='row'>
<div class='col-md-4'>
<span class='copyright'>Copyright &copy; <?php echo "$empresa $ano"; ?> </span>
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
<li><a href='http://www.google.com/safebrowsing/diagnostic?site=www.vedax.ind.br' target='_blank' ><img src='img/google-safe-browsing.png' alt ='' /></a>
</li><br>
<?php
if($db){
echo "<li>Developed by: <a href='https://www.facebook.com/gabriel.outor' target='_blank' >Gabriel Outor</a>
</li>";
}else{
echo "<li>Desenvolvido por: <a href='https://www.facebook.com/gabriel.outor' target='_blank' >Gabriel Outor</a>
</li>";    
}
?>
</ul>
</div>
</div>
</div>
</footer>
<?php for ($i = 1; $i <= $totalprodutos; $i++) {
$row = mysqli_fetch_array($resultadoprodutos);
$nome = replaceaccents($row["nome$db"]);
$tipo = replaceaccents($row["tipo$db"]);
$desc = replaceaccents($row["descricao$db"]);
$descricao=nl2br($desc);
$expl = replaceaccents($row["explicacao$db"]);
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
    
<div class='flexslider'>
  <ul class='slides'>
    <li>
      <img src='img/produts/produtanelediscoforjado.jpg' />
    </li>
    <li>
      <img src='img/produts/produtanelediscoforjado.jpg' />
    </li>
    <li>
      <img src='img/produts/produtanelediscoforjado.jpg' />
    </li>
  </ul>
</div>

<p class='text-muted large'>$descricao</p>
<p class='text-muted large'>
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
<object data='pdf/$pdfCertificado' type='application/pdf'>
<a href='pdf/$pdfCertificado'>test.pdf</a>
</object>
<br>
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
<script src='js/flickity.pkgd.min.js'></script>
<script src='js/cbpAnimatedHeader.js'></script>
<script src='js/jqBootstrapValidation.js'></script>
<script src='js/contact_me.js'></script>
<script src='js/agency.js'></script> 
<script type='text/javascript'>
		// Este evendo é acionado após o carregamento da página
		jQuery(window).load(function() {
			//Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
			jQuery("#loader").delay(2000).fadeOut("slow");
		});
</script>
</body>
</html>
<?php mysqli_close($conexao)  ?>