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

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

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
    <script>
    function change(elem){
        var listElem = document.getElementsByClassName("nav-two");
        var listElem2 = document.getElementsByClassName("list-wrap");
        for(var i = 0; i < 7; i++){
            listElem[i].childNodes[0].removeAttribute("class");
            listElem2[0].childNodes[i*2+1].setAttribute("class", "hide");
        }
        
        switch (elem.innerHTML){
            case "Selecione":
                elem.setAttribute("class", "current");
                listElem2[0].childNodes[1].setAttribute("class", "show");
                break;
            case "Região Central":
                elem.setAttribute("class", "current");
                listElem2[0].childNodes[3].removeAttribute("class");
                break;
            case "Zona Norte":
                elem.setAttribute("class", "current");
                listElem2[0].childNodes[5].removeAttribute("class");
                break;
            case "Zona Oeste":
                elem.setAttribute("class", "current");
                listElem2[0].childNodes[7].removeAttribute("class");
                break;
            case "Zona Sul":
                elem.setAttribute("class", "current");
                listElem2[0].childNodes[9].removeAttribute("class");
                break;
            case "Zona Leste":
                elem.setAttribute("class", "current");
                listElem2[0].childNodes[11].removeAttribute("class");
                break;
            case "Grande São Paulo":
                elem.setAttribute("class", "current");
                listElem2[0].childNodes[13].removeAttribute("class");
                break;
        }
}
</script>
<h3>Regiões onde a Vedax atende na Grande São Paulo:</h3>
<div id="localizacaoAtendimento">

    <ul class="nav">
        <li class="nav-two"><a onclick="change(this)" class="current" title="Selecione">Selecione</a></li>
        <li class="nav-two"><a onclick="change(this)" title="Centro">Região Central</a></li>
        <li class="nav-two"><a onclick="change(this)" title="Zona Norte">Zona Norte</a></li>
        <li class="nav-two"><a onclick="change(this)" title="Zona Oeste">Zona Oeste</a></li>
        <li class="nav-two"><a onclick="change(this)" title="Zona Sul">Zona Sul</a></li>
        <li class="nav-two"><a onclick="change(this)" title="Zona Leste">Zona Leste</a></li>
        <li class="nav-two"><a onclick="change(this)" title="Grande São Paulo">Grande São Paulo</a></li>
    </ul>

    <div class="list-wrap">
    	
        <ul id="selecione" class="show">
            <li><strong>Selecione a região de SP</strong></li> 
        </ul>

        <ul id="id11-1" class="hide">
            <li><strong>Aclimação</strong></li>
            <li><strong>Bela Vista</strong></li>
            <li><strong>Bom Retiro</strong></li>
            <li><strong>Brás</strong></li>
            <li><strong>Cambuci</strong></li>
            <li><strong>Centro</strong></li>
            <li><strong>Consolação</strong></li>
            <li><strong>Higienópolis</strong></li>
            <li><strong>Glicério</strong></li>
            <li><strong>Liberdade</strong></li>
            <li><strong>Luz</strong></li>
            <li><strong>Pari</strong></li>
            <li><strong>República</strong></li>
            <li><strong>Santa Cecília</strong></li>
            <li><strong>Santa Efigênia</strong></li>
            <li><strong>Sé</strong></li>
            <li><strong>Vila Buarque</strong></li>
        </ul>
        
        
        <ul id="id11-2" class="hide">
            <li><strong>Brasilândia</strong></li>
            <li><strong>Cachoeirinha</strong></li>
            <li><strong>Casa Verde</strong></li>
            <li><strong>Imirim</strong></li>
            <li><strong>Jaçanã</strong></li>
            <li><strong>Jardim São Paulo</strong></li>
            <li><strong>Lauzane Paulista</strong></li>
            <li><strong>Mandaqui</strong></li>
            <li><strong>Santana</strong></li>
            <li><strong>Tremembé</strong></li>
            <li><strong>Tucuruvi</strong></li>
            <li><strong>Vila Guilherme</strong></li>
            <li><strong>Vila Gustavo</strong></li>
            <li><strong>Vila Maria</strong></li>
            <li><strong>Vila Medeiros</strong></li>
        </ul>
        
        <ul id="id11-3" class="hide">
            <li><strong>Água Branca</strong></li>
            <li><strong>Bairro do Limão</strong></li>
            <li><strong>Barra Funda</strong></li>
            <li><strong>Alto da Lapa</strong></li>
            <li><strong>Alto de Pinheiros</strong></li>
            <li><strong>Butantã</strong></li>
            <li><strong>Freguesia do Ó</strong></li>
            <li><strong>Jaguaré</strong></li>
            <li><strong>Jaraguá</strong></li>
            <li><strong>Jardim Bonfiglioli</strong></li>
            <li><strong>Lapa</strong></li>
            <li><strong>Pacaembú</strong></li>
            <li><strong>Perdizes</strong></li>
            <li><strong>Perús</strong></li>
            <li><strong>Pinheiros</strong></li>
            <li><strong>Pirituba</strong></li>
            <li><strong>Raposo Tavares</strong></li>
            <li><strong>Rio Pequeno</strong></li>
            <li><strong>São Domingos</strong></li>
            <li><strong>Sumaré</strong></li>
            <li><strong>Vila Leopoldina</strong></li>
            <li><strong>Vila Sonia</strong></li>
        </ul>
        
        <ul id="id11-4" class="hide">
            <li><strong>Aeroporto</strong></li>
            <li><strong>Água Funda</strong></li>
            <li><strong>Brooklin</strong></li>
            <li><strong>Campo Belo</strong></li>
            <li><strong>Campo Grande</strong></li>
            <li><strong>Campo Limpo</strong></li>
            <li><strong>Capão Redondo</strong></li>
            <li><strong>Cidade Ademar</strong></li>
            <li><strong>Cidade Dutra</strong></li>
            <li><strong>Cidade Jardim</strong></li>
            <li><strong>Grajaú</strong></li>
            <li><strong>Ibirapuera</strong></li>
            <li><strong>Interlagos</strong></li>
            <li><strong>Ipiranga</strong></li>
            <li><strong>Itaim Bibi</strong></li>
            <li><strong>Jabaquara</strong></li>
            <li><strong>Jardim Ângela</strong></li>
            <li><strong>Jardim América</strong></li>
            <li><strong>Jardim Europa</strong></li>
            <li><strong>Jardim Paulista</strong></li>
            <li><strong>Jardim Paulistano</strong></li>
            <li><strong>Jardim São Luiz</strong></li>
            <li><strong>Jardins</strong></li>
            <li><strong>Jockey Club</strong></li>
            <li><strong>M'Boi Mirim</strong></li>
            <li><strong>Moema</strong></li>
            <li><strong>Morumbi</strong></li>
            <li><strong>Parelheiros</strong></li>
            <li><strong>Pedreira</strong></li>
            <li><strong>Sacomã</strong></li>
            <li><strong>Santo Amaro</strong></li>
            <li><strong>Saúde</strong></li>
            <li><strong>Socorro</strong></li>
            <li><strong>Vila Andrade</strong></li>
            <li><strong>Vila Mariana</strong></li>
        </ul>
        
        <ul id="id11-5" class="hide">
            <li><strong>Água Rasa</strong></li>
            <li><strong>Anália Franco</strong></li>
            <li><strong>Aricanduva</strong></li>
            <li><strong>Artur Alvim</strong></li>
            <li><strong>Belém</strong></li>
            <li><strong>Cidade Patriarca</strong></li>
            <li><strong>Cidade Tiradentes</strong></li>
            <li><strong>Engenheiro Goulart</strong></li>
            <li><strong>Ermelino Matarazzo</strong></li>
            <li><strong>Guianazes</strong></li>
            <li><strong>Itaim Paulista</strong></li>
            <li><strong>Itaquera</strong></li>
            <li><strong>Jardim Iguatemi</strong></li>
            <li><strong>José Bonifácio</strong></li>
            <li><strong>Moóca</strong></li>
            <li><strong>Parque do Carmo</strong></li>
            <li><strong>Parque São Lucas</strong></li>
            <li><strong>Parque São Rafael</strong></li>
            <li><strong>Penha</strong></li>
            <li><strong>Ponte Rasa</strong></li>
            <li><strong>São Mateus</strong></li>
            <li><strong>São Miguel Paulista</strong></li>
            <li><strong>Sapopemba</strong></li>
            <li><strong>Tatuapé</strong></li>
            <li><strong>Vila Carrão</strong></li>
            <li><strong>Vila Curuçá</strong></li>
            <li><strong>Vila Esperança</strong></li>
            <li><strong>Vila Formosa</strong></li>
            <li><strong>Vila Matilde</strong></li>
            <li><strong>Vila Prudente</strong></li>
        </ul>
        
        <ul id="id11-6" class="hide">
            <li><strong>São Caetano do sul</strong></li>
            <li><strong>São Bernardo do Campo</strong></li>
            <li><strong>Santo André</strong></li>
            <li><strong>Diadema</strong></li>
            <li><strong>Guarulhos</strong></li>
            <li><strong>Suzano</strong></li>
            <li><strong>Ribeirão Pires</strong></li>
            <li><strong>Mauá</strong></li>
            <li><strong>Embu</strong></li>
            <li><strong>Embu Guaçú</strong></li>
            <li><strong>Embu das Artes</strong></li>
            <li><strong>Itapecerica da Serra</strong></li>
            <li><strong>Osasco</strong></li>
            <li><strong>Barueri</strong></li>
            <li><strong>Jandira</strong></li>
            <li><strong>Cotia</strong></li>
            <li><strong>Itapevi</strong></li>
            <li><strong>Santana de Parnaíba</strong></li>
            <li><strong>Caierias</strong></li>
            <li><strong>Franco da Rocha</strong></li>
            <li><strong>Taboão da Serra</strong></li>
            <li><strong>Cajamar</strong></li>
            <li><strong>Arujá</strong></li>
            <li><strong>Alphaville</strong></li>
            <li><strong>Mairiporã</strong></li>
            <li><strong>ABC</strong></li>
            <li><strong>ABCD</strong></li>
        </ul>
    </div>
</div>

<script>
    function changeState(elem){
        var listElem = document.getElementsByClassName("nav-two");
        var listElem2 = document.getElementsByClassName("list-wrap");
        for(var i = 7; i < 21; i++){
            listElem[i].childNodes[0].removeAttribute("class");
        }
        for(var i = 0; i < 14; i++){
            listElem2[1].childNodes[i*2+1].setAttribute("class", "hide");
        }
        
        switch (elem.innerHTML){
            case "Selecione":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[1].setAttribute("class", "show");
                break;
            case "RJ - Rio de Janeiro":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[3].removeAttribute("class");
                break;
            case "MG - Minas Gerais":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[5].removeAttribute("class");
                break;
            case "ES - Espírito Santo":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[7].removeAttribute("class");
                break;
            case "SP - Litoral e Interior":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[9].removeAttribute("class");
                break;
            case "PR - Paraná":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[11].removeAttribute("class");
                break;
            case "SC - Santa Catarina":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[13].removeAttribute("class");
                break;
            case "RS - Rio Grande do Sul":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[15].removeAttribute("class");
                break;
            case "PE - Pernambuco":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[17].removeAttribute("class");
                break;
            case "BA - Bahia":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[19].removeAttribute("class");
                break;
            case "CE - Ceará":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[21].removeAttribute("class");
                break;
            case "Goiás e Distrito Federal":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[23].removeAttribute("class");
                break;
            case "AM - Amazonas":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[25].removeAttribute("class");
                break;
            case "PA - Pará":
                elem.setAttribute("class", "current");
                listElem2[1].childNodes[27].removeAttribute("class");
                break;
        }
}
</script>
<h3>Principais cidades e regiões do Brasil onde a Vedax atende:</h3><br />
<div id="localizacaoAtendimentoDois">
    <div>
        <ul class="nav">
        
            <li class="nav-two"><a onclick="changeState(this)" class="current" title="Selecione">Selecione</a></li>
            
            <li class="nav-two"><a onclick="changeState(this)" title="RJ - Rio de Janeiro">RJ - Rio de Janeiro</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="MG - Minas Gerais">MG - Minas Gerais</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="ES - Espírito Santo">ES - Espírito Santo</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="SP - Litoral e Interior">SP - Litoral e Interior</a></li>
            
            <li class="nav-two"><a onclick="changeState(this)" title="PR - Paraná">PR - Paraná</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="SC - Santa Catarina">SC - Santa Catarina</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="RS - Rio Grande do Sul">RS - Rio Grande do Sul</a></li>
            
            <li class="nav-two"><a onclick="changeState(this)" title="PE - Pernambuco">PE - Pernambuco</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="BA - Bahia">BA - Bahia</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="CE - Ceará">CE - Ceará</a></li>
            
            <li class="nav-two"><a onclick="changeState(this)" title="GO e DF - Goiás e Distrito Federal">Goiás e Distrito Federal</a></li>
            
            <li class="nav-two"><a onclick="changeState(this)" title="AM - Amazonas">AM - Amazonas</a></li>
            <li class="nav-two"><a onclick="changeState(this)" title="PA - Pará">PA - Pará</a></li>

        </ul>
    </div>
    <div class="list-wrap">
    
    	<ul id="id12-1">
           <li><strong>Selecione a região do Brasil</strong></li>
        </ul>

        <ul id="rj" class="hide">
            <li><strong>Rio de Janeiro </strong></li>
            <li><strong>São Gonçalo</strong></li>
            <li><strong>Duque de Caxias</strong></li>
            <li><strong>Nova Iguaçu</strong></li>
            <li><strong>Niterói</strong></li>
            <li><strong>Belford Roxo</strong></li>
            <li><strong>São João de Meriti</strong></li>
            <li><strong>Campos dos Goytacazes</strong></li>
            <li><strong>Petrópolis</strong></li>
            <li><strong>Volta Redonda</strong></li>
            <li><strong>Magé</strong></li>
            <li><strong>Itaboraí</strong></li>
            <li><strong>Mesquita</strong></li>
            <li><strong>Nova Friburgo</strong></li>
            <li><strong>Barra Mansa</strong></li>
            <li><strong>Macaé</strong></li>
            <li><strong>Cabo Frio</strong></li>
            <li><strong>Nilópolis</strong></li>
            <li><strong>Teresópolis</strong></li>
            <li><strong>Resende</strong></li>
        </ul>
        
        <ul id="mg" class="hide">
            <li><strong>Belo Horizonte</strong></li>
            <li><strong>Uberlândia</strong></li>
            <li><strong>Contagem</strong></li>
            <li><strong>Juiz de Fora</strong></li>
            <li><strong>Betim</strong></li>
            <li><strong>Montes Claros</strong></li>
            <li><strong>Ribeirão das Neves</strong></li>
            <li><strong>Uberaba</strong></li>
            <li><strong>Governador Valadares</strong></li>
            <li><strong>Ipatinga</strong></li>
            <li><strong>Santa Luzia</strong></li>
            <li><strong>Sete Lagoas</strong></li>
            <li><strong>Divinópolis</strong></li>
            <li><strong>Ibirité</strong></li>
            <li><strong>Poços de Caldas</strong></li>
            <li><strong>Patos de Minas</strong></li>
            <li><strong>Teófilo Otoni</strong></li>
            <li><strong>Sabará</strong></li>
            <li><strong>Pouso Alegre</strong></li>
            <li><strong>Barbacena</strong></li>
            <li><strong>Varginha</strong></li>
            <li><strong>Conselheiro Lafeiete</strong></li>
            <li><strong>Araguari</strong></li>
            <li><strong>Itabira</strong></li>
            <li><strong>Passos</strong></li>
        </ul>
        
        <ul id="es" class="hide">
            <li><strong>Serra</strong></li>
            <li><strong>Vila Velha</strong></li>
            <li><strong>Cariacica</strong></li>
            <li><strong>Vitória</strong></li>
            <li><strong>Cachoeiro de Itapemirim</strong></li>
            <li><strong>Linhares</strong></li>
            <li><strong>São Mateus</strong></li>
            <li><strong>Colatina</strong></li>
            <li><strong>Guarapari</strong></li>
            <li><strong>Aracruz</strong></li>
            <li><strong>Viana</strong></li>
            <li><strong>Nova Venécia</strong></li>
            <li><strong>Barra de São Francisco</strong></li>
            <li><strong>Santa Maria de Jetibá</strong></li>
            <li><strong>Castelo</strong></li>
            <li><strong>Marataízes</strong></li>
            <li><strong>São Gabriel da Palha</strong></li>
            <li><strong>Domingos Martins</strong></li>
            <li><strong>Itapemirim</strong></li>
            <li><strong>Afonso Cláudio</strong></li>
            <li><strong>Alegre</strong></li>
            <li><strong>Baixo Guandu</strong></li>
            <li><strong>Conceição da Barra</strong></li>
            <li><strong>Guaçuí</strong></li>
            <li><strong>Iúna</strong></li>
            <li><strong>Jaguaré</strong></li>
            <li><strong>Mimoso do Sul</strong></li>
            <li><strong>Sooretama</strong></li>
            <li><strong>Anchieta</strong></li>
            <li><strong>Pinheiros</strong></li>
            <li><strong>Pedro Canário</strong></li>
        </ul>
        
        <ul id="sp" class="hide">
            <li><strong>Bertioga</strong></li>
            <li><strong>Caraguatatuba</strong></li>
            <li><strong>Cubatão</strong></li>
            <li><strong>Guarujá</strong></li>
            <li><strong>Ilhabela</strong></li>
            <li><strong>Itanhaém</strong></li>
            <li><strong>Mongaguá</strong></li>
            <li><strong>Riviera de São Lourenço</strong></li>
            <li><strong>Santos</strong></li>
            <li><strong>São Vicente</strong></li>
            <li><strong>Praia Grande</strong></li>
            <li><strong>Ubatuba</strong></li>
            <li><strong>São Sebastião</strong></li>
            <li><strong>Peruíbe</strong></li>
            <li><strong>São José dos campos</strong></li>
            <li><strong>Campinas</strong></li>
            <li><strong>Jundiaí</strong></li>
            <li><strong>Sorocaba</strong></li>
            <li><strong>Indaiatuba </strong></li>
            <li><strong>São José do Rio Preto </strong></li>
            <li><strong>Itatiba </strong></li>
            <li><strong>Amparo </strong></li>
            <li><strong>Barueri </strong></li>
            <li><strong>Ribeirão Preto</strong></li>
            <li><strong>Marília </strong></li>
            <li><strong>Louveira </strong></li>
            <li><strong>Paulínia </strong></li>
            <li><strong>Bauru </strong></li>
            <li><strong>Valinhos </strong></li>
            <li><strong>Bragança Paulista </strong></li>
            <li><strong>Araraquara</strong></li>
            <li><strong>Americana</strong></li>
            <li><strong>Atibaia </strong></li>
            <li><strong>Taubaté </strong></li>
            <li><strong>Araras </strong></li>
            <li><strong>São Carlos </strong></li>
            <li><strong>Itupeva </strong></li>
            <li><strong>Mendonça </strong></li>
            <li><strong>Itu </strong></li>
            <li><strong>Vinhedo </strong></li>
            <li><strong>Marapoama </strong></li>
            <li><strong>Votuporanga </strong></li>
            <li><strong>Hortolândia </strong></li>
            <li><strong>Araçatuba </strong></li>
            <li><strong>Jaboticabal </strong></li>
            <li><strong>Sertãozinho</strong></li>
        </ul>
        
        
        <ul id="pr" class="hide">
            <li><strong>Curitiba</strong></li>
            <li><strong>Londrina</strong></li>
            <li><strong>Maringá</strong></li>
            <li><strong>Ponta Grossa</strong></li>
            <li><strong>Cascavel</strong></li>
            <li><strong>São José dos Pinhais</strong></li>
            <li><strong>Foz do Iguaçu</strong></li>
            <li><strong>Colombo</strong></li>
            <li><strong>Guarapuava</strong></li>
            <li><strong>Paranaguá</strong></li>
            <li><strong>Araucária</strong></li>
            <li><strong>Toledo</strong></li>
            <li><strong>Apucarana</strong></li>
            <li><strong>Pinhais</strong></li>
            <li><strong>Campo Largo</strong></li>
            <li><strong>Almirante Tamandaré</strong></li>
            <li><strong>Umuarama</strong></li>
            <li><strong>Paranavaí</strong></li>
            <li><strong>Piraquara</strong></li>
            <li><strong>Cambé</strong></li>
            <li><strong>Sarandi</strong></li>
            <li><strong>Fazenda Rio Grande</strong></li>
            <li><strong>Paranavaí</strong></li>
            <li><strong>Francisco Beltrão</strong></li>
            <li><strong>Pato Branco</strong></li>
            <li><strong>Cianorte</strong></li>
            <li><strong>Telêmaco Borba</strong></li>
            <li><strong>Castro</strong></li>
            <li><strong>Rolândia</strong></li>

        </ul>
        
        <ul id="sc" class="hide">
            <li><strong>Joinville</strong></li>
            <li><strong>Florianópolis</strong></li>
            <li><strong>Blumenau</strong></li>
            <li><strong>Itajaí</strong></li>
            <li><strong>São José</strong></li>
            <li><strong>Chapecó</strong></li>
            <li><strong>Criciúma</strong></li>
            <li><strong>Jaraguá do sul</strong></li>
            <li><strong>Lages</strong></li>
            <li><strong>Palhoça</strong></li>
            <li><strong>Balneário Camboriú</strong></li>
            <li><strong>Brusque</strong></li>
            <li><strong>Tubarão</strong></li>
            <li><strong>São Bento do Sul</strong></li>
            <li><strong>Caçador</strong></li>
            <li><strong>Concórdia</strong></li>
            <li><strong>Camboriú</strong></li>
            <li><strong>Navegantes</strong></li>
            <li><strong>Rio do Sul</strong></li>
            <li><strong>Araranguá</strong></li>
            <li><strong>Gaspar</strong></li>
            <li><strong>Biguaçu</strong></li>
            <li><strong>Indaial</strong></li>
            <li><strong>Mafra</strong></li>
            <li><strong>Canoinhas</strong></li>
            <li><strong>Itapema</strong></li>

        </ul>
        
        <ul id="rs" class="hide">
            <li><strong>Porto Alegre</strong></li>
            <li><strong>Caxias do Sul</strong></li>
            <li><strong>Pelotas</strong></li>
            <li><strong>Canoas</strong></li>
            <li><strong>Santa Maria</strong></li>
            <li><strong>Gravataí</strong></li>
            <li><strong>Viamão</strong></li>
            <li><strong>Novo Hamburgo</strong></li>
            <li><strong>São Leopoldo</strong></li>
            <li><strong>Rio Grande</strong></li>
            <li><strong>Alvorada</strong></li>
            <li><strong>Passo Fundo</strong></li>
            <li><strong>Sapucaia do Sul</strong></li>
            <li><strong>Uruguaiana</strong></li>
            <li><strong>Santa Cruz do Sul</strong></li>
            <li><strong>Cachoeirinha</strong></li>
            <li><strong>Bagé</strong></li>
            <li><strong>Bento Gonçalves</strong></li>
            <li><strong>Erechim</strong></li>
            <li><strong>Guaíba</strong></li>
            <li><strong>Cachoeira do Sul</strong></li>
            <li><strong>Santana do Livramento</strong></li>
            <li><strong>Esteio</strong></li>
            <li><strong>Ijuí</strong></li>
            <li><strong>Alegrete</strong></li>
        </ul>
        
        
        <ul id="pe" class="hide">
            <li><strong>Recife</strong></li>
            <li><strong>Jaboatão dos Guararapes</strong></li>
            <li><strong>Olinda</strong></li>
            <li><strong>Bandeira caruaru.jpg Caruaru</strong></li>
            <li><strong>Petrolina</strong></li>
            <li><strong>Paulista</strong></li>
            <li><strong>Cabo de Santo Agostinho</strong></li>
            <li><strong>Camaragibe</strong></li>
            <li><strong>Garanhuns</strong></li>
            <li><strong>Vitória de Santo Antão</strong></li>
            <li><strong>Igarassu</strong></li>
            <li><strong>São Lourenço da Mata</strong></li>
            <li><strong>Abreu e Lima</strong></li>
            <li><strong>Santa Cruz do Capibaribe</strong></li>
            <li><strong>Ipojuca</strong></li>
            <li><strong>Serra Talhada</strong></li>
            <li><strong>Araripina</strong></li>
            <li><strong>Gravatá</strong></li>
            <li><strong>Carpina</strong></li>
            <li><strong>Goiana</strong></li>
            <li><strong>Belo Jardim</strong></li>
            <li><strong>Arcoverde</strong></li>
            <li><strong>Ouricuri</strong></li>
            <li><strong>Escada</strong></li>
            <li><strong>Pesqueira</strong></li>
            <li><strong>Surubim</strong></li>
            <li><strong>Palmares</strong></li>
            <li><strong>Bezerros</strong></li>

        </ul>
        
        <ul id="ba" class="hide">
            <li><strong>Salvador</strong></li>
            <li><strong>Feira de Santana</strong></li>
            <li><strong>Vitória da Conquista</strong></li>
            <li><strong>Camaçari</strong></li>
            <li><strong>Itabuna</strong></li>
            <li><strong>Juazeiro</strong></li>
            <li><strong>Lauro de Freitas</strong></li>
            <li><strong>Ilhéus</strong></li>
            <li><strong>Jequié</strong></li>
            <li><strong>Teixeira de Freitas</strong></li>
            <li><strong>Alagoinhas</strong></li>
            <li><strong>Barreiras</strong></li>
            <li><strong>Porto Seguro</strong></li>
            <li><strong>Simões Filho</strong></li>
            <li><strong>Paulo Afonso</strong></li>
            <li><strong>Eunápolis</strong></li>
            <li><strong>Santo Antônio de Jesus</strong></li>
            <li><strong>Valença</strong></li>
            <li><strong>Candeias</strong></li>
            <li><strong>Guanambi</strong></li>
            <li><strong>Jacobina</strong></li>
            <li><strong>Serrinha</strong></li>
            <li><strong>Senhor do Bonfim</strong></li>
            <li><strong>Dias d'Ávila</strong></li>
            <li><strong>Luís Eduardo Magalhães</strong></li>
            <li><strong>Itapetinga</strong></li>
            <li><strong>Irecê</strong></li>
            <li><strong>Campo Formoso</strong></li>
            <li><strong>Casa Nova</strong></li>
            <li><strong>Brumado</strong></li>
            <li><strong>Bom Jesus da Lapa</strong></li>
            <li><strong>Conceição do Coité</strong></li>
            <li><strong>Itamaraju</strong></li>
            <li><strong>Itaberaba</strong></li>
            <li><strong>Cruz das Almas</strong></li>
            <li><strong>Ipirá</strong></li>
            <li><strong>Santo Amaro</strong></li>
            <li><strong>Euclides da Cunha</strong></li>
        </ul>
        
        <ul id="ce" class="hide">
			<li><strong>Fortaleza</strong></li>
            <li><strong>caucacia</strong></li>
            <li><strong>Juazeiro do Norte</strong></li>
            <li><strong>Maracanaú</strong></li>
            <li><strong>Sobral</strong></li>
            <li><strong>Crato</strong></li>
            <li><strong>Itapipoca</strong></li>
            <li><strong>Maranguape</strong></li>
            <li><strong>Iguatu</strong></li>
            <li><strong>Quixadá</strong></li>
            <li><strong>Canindé</strong></li>
            <li><strong>Pacajus</strong></li>
            <li><strong>Crateús</strong></li>
            <li><strong>Aquiraz</strong></li>
            <li><strong>Pacatuba</strong></li>
            <li><strong>Quixeramobim</strong></li>
        </ul>
        
        <ul id="ma" class="hide">
			<li><strong>São Luís</strong></li>
            <li><strong>Imperatriz</strong></li>
            <li><strong>São José de Ribamar</strong></li>
            <li><strong>Timon</strong></li>
            <li><strong>Caxias</strong></li>
            <li><strong>Codó</strong></li>
            <li><strong>Paço do Lumiar</strong></li>
            <li><strong>Açailândia</strong></li>
            <li><strong>Bacabal</strong></li>
            <li><strong>Balsas</strong></li>
            <li><strong>Barra do Corda</strong></li>
        </ul>
        
         <ul id="pi" class="hide">
			<li><strong>Teresina</strong></li>
            <li><strong>São Raimundo Nonato</strong></li>
            <li><strong>Parnaíba</strong></li>
            <li><strong>Picos</strong></li>
            <li><strong>Uruçuí</strong></li>
            <li><strong>Floriano</strong></li>
            <li><strong>Piripiri</strong></li>
            <li><strong>Campo Maior</strong></li>
        </ul>
                
        <ul id="go" class="hide">
			<li><strong>Goiânia</strong></li>
            <li><strong>Aparecida de Goiânia</strong></li>
            <li><strong>Anápolis</strong></li>
            <li><strong>Rio Verde</strong></li>
            <li><strong>Luziânia</strong></li>
            <li><strong>Águas Lindas de Goiás</strong></li>
            <li><strong>Valparaíso de Goiás</strong></li>
            <li><strong>Trindade</strong></li>
            <li><strong>Formosa</strong></li>
            <li><strong>Novo Gama</strong></li>
            <li><strong>Itumbiara</strong></li>
            <li><strong>Senador Canedo</strong></li>
            <li><strong>Catalão</strong></li>
            <li><strong>Jataí</strong></li>
            <li><strong>Planaltina</strong></li>
            <li><strong>Caldas Novas</strong></li>
        </ul>
        
        <ul id="ms" class="hide">
			<li><strong>Campo Grande</strong></li>
            <li><strong>Dourados</strong></li>
            <li><strong>Três Lagoas</strong></li>
            <li><strong>Corumbá</strong></li>
            <li><strong>Ponta Porã</strong></li>
        </ul>
        
        <ul id="mt" class="hide">
			<li><strong>Cuiabá</strong></li>
            <li><strong>Várzea Grande</strong></li>
            <li><strong>Rondonópolis</strong></li>
            <li><strong>Sinop</strong></li>
            <li><strong>Tangará da Serra</strong></li>
            <li><strong>Cáceres</strong></li>
            <li><strong>Sorriso</strong></li>
        </ul>
        
        <ul id="am" class="hide">
			<li><strong>Manaus</strong></li>
            <li><strong>Parintins</strong></li>
            <li><strong>Itacoatiara</strong></li>
            <li><strong>Manacapuru</strong></li>
            <li><strong>Coari</strong></li>
            <li><strong>Centro Amazonense</strong></li>

        </ul>
        
        <ul id="pa" class="hide">
            <li><strong>Belém</strong></li>
            <li><strong>Ananindeua</strong></li>
            <li><strong>Santarém</strong></li>
            <li><strong>Marabá</strong></li>
            <li><strong>Castanhal</strong></li>
            <li><strong>Parauapebas</strong></li>
            <li><strong>Itaituba</strong></li>
            <li><strong>Cametá</strong></li>
            <li><strong>Bragança </strong></li>
            <li><strong>Abaetetuba</strong></li>
            <li><strong>Bragança</strong></li>
            <li><strong>Marituba</strong></li>
        </ul>

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
</li>
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
    
<img class='img-responsive img-centered imgprodut' src='img/produts/$img' alt='$nome $tipo' title='$nome $tipo' >

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
</body>
</html>
<script async src='js/jquery.js'></script>
<script async src='js/modernizr.custom.js'></script>
<script async src='js/bootstrap.min.js'></script>
<script async src='js/jquery.easing.min.js'></script>
<script async src='js/classie.js'></script>
<script async src='js/flickity.pkgd.min.js'></script>
<script async src='js/cbpAnimatedHeader.js'></script>
<script async src='js/jqBootstrapValidation.js'></script>
<script async src='js/contact_me.js'></script>
<script async src='js/agency.js'></script> 
<script type='text/javascript'>
		// Este evendo é acionado após o carregamento da página
		jQuery(window).load(function() {
			//Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
			jQuery("#loader").delay(2000).fadeOut("slow");
		});
</script>
<link href='css/bootstrap.min.css?v=1.0.0' rel='stylesheet'>
<link href='css/bootstrap.css?v=1.0.0' rel='stylesheet'>
<link href='css/agency.css?v=1.0.0' rel='stylesheet'>
<link rel='stylesheet' href='css/flickity.css?v=1.0.0' media='screen'>
<link href='css/custom.css?v=1.0.1' rel='stylesheet'>
<link href='font-awesome/css/font-awesome.min.css?v=1.0.0' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='css/component.css?v=1.0.0' />
<?php mysqli_close($conexao)  ?>