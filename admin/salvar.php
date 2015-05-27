<?php
header( 'Content-Type: text/html; charset=utf-8' );
require "administracao.php";
if(!isset($_POST['salvarHome'])==false){
    $titulo=htmlentities($_POST['titulo']);
    $botao=htmlentities($_POST['botao']);
    $dados = mysqli_query($conexao, "UPDATE $hom SET titulo = '$titulo', botao='$botao' WHERE id = '1'");
}else if (!isset($_POST['salvarAbout'])==false){
    $tituloQuemSomos=htmlentities($_POST['tituloQuemSomos']);
    $fraseQuemSomos=htmlentities($_POST['fraseQuemSomos']);
    $textoQuemSomos=htmlentities($_POST['textoQuemSomos']);
    $textoFraseQuemSomos=htmlentities($_POST['textoFraseQuemSomos']);
    $dados = mysqli_query($conexao, "UPDATE $qms SET titulo = '$tituloQuemSomos', frase='$fraseQuemSomos', texto='$textoQuemSomos', textoFrase='$textoFraseQuemSomos' WHERE id = '1'");
}else{
    echo "NÃO É FORM";
}
echo "<script type=\"text/javascript\">
	document.location.replace('administracao.php');
	</script>";