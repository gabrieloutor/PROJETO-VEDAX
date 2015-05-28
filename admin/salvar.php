<?php
header( 'Content-Type: text/html; charset=utf-8' );
require "../config/config.ini";
// ATRIBUICOES A VARIAVEIS
if ($_POST['tipoLinguagem']!=="BRA"){
    $db="";
}else if($_POST['tipoLinguagem']=="BRA"){
    $db="_en";
}


if(!isset($_POST['salvarHome'])==false){
    $titulo=htmlentities($_POST['titulo']);
    $botao=htmlentities($_POST['botao']);
    $mysqli_query = mysqli_query($conexao, "UPDATE `home` SET `titulo$db` = '$titulo', `botao$db` = '$botao' WHERE id = '1'");
}else if (!isset($_POST['salvarAbout'])==false){
    $tituloQuemSomos=htmlentities($_POST['tituloQuemSomos']);
    $fraseQuemSomos=htmlentities($_POST['fraseQuemSomos']);
    $textoQuemSomos=htmlentities($_POST['textoQuemSomos']);
    $textoFraseQuemSomos=htmlentities($_POST['textoFraseQuemSomos']);
    $dados = mysqli_query($conexao, "UPDATE quemsomos SET titulo$db = '$tituloQuemSomos', frase$db='$fraseQuemSomos', texto$db='$textoQuemSomos', textoFrase$db='$textoFraseQuemSomos' WHERE id = '1'");
}else{
    echo "NÃO É FORM";
}

//REDIRECIONAMENTO DE PAGINA
if ($_POST['tipoLinguagem']!=="BRA"){
    echo "<script type=\"text/javascript\">
	document.location.replace('administracao.php');
	</script>";
}else if($_POST['tipoLinguagem']=="BRA"){
    echo "<script type=\"text/javascript\">
	document.location.replace('en.php');
	</script>";
}