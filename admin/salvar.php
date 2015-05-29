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
    $titulo=htmlentities($_POST['tituloQuemSomos']);
    $frase=htmlentities($_POST['fraseQuemSomos']);
    $pagina = mysqli_query($conexao, "UPDATE paginas SET titulo$db='$titulo', frase$db='$frase' WHERE id = '1'");
    $textoQuemSomos=htmlentities($_POST['textoQuemSomos']);
    $textoFraseQuemSomos=htmlentities($_POST['textoFraseQuemSomos']);
    $dados = mysqli_query($conexao, "UPDATE quemsomos SET texto$db='$textoQuemSomos', textoFrase$db='$textoFraseQuemSomos' WHERE id = '1'");
}else if (!isset($_POST['salvarProducts'])==false){
    $titulo=htmlentities($_POST['tituloProdutos']);
    $frase=htmlentities($_POST['fraseProdutos']);
    $pagina = mysqli_query($conexao, "UPDATE paginas SET titulo$db='$titulo', frase$db='$frase' WHERE id = '2'");
    for($i=1;$i<=$_POST['salvarProducts'];$i++){
        $nome=htmlentities($_POST["nome$i"]);
        $tipo=htmlentities($_POST["tipo$i"]);
        $dados = mysqli_query($conexao, "UPDATE produtos SET nome$db = '$nome', tipo$db='$tipo' WHERE id = '$i'");
    }
}else if (!isset($_POST['salvarProcessos'])==false){
    $titulo=htmlentities($_POST['tituloProcessos']);
    $frase=htmlentities($_POST['fraseProcessos']);
    $pagina = mysqli_query($conexao, "UPDATE paginas SET titulo$db='$titulo', frase$db='$frase' WHERE id = '3'");
    for($i=1;$i<=$_POST['salvarProcessos']-1;$i++){
        $titulo=htmlentities($_POST["titulo$i"]);
        $explicacao=htmlentities($_POST["explicacao$i"]);
        $dados = mysqli_query($conexao, "UPDATE processos SET titulo$db = '$titulo', explicacao$db='$explicacao' WHERE id = $i");
      
    }
}else if (!isset($_POST['salvarLocalizacao'])==false){
    $titulo=htmlentities($_POST['tituloLocalizacao']);
    $frase=htmlentities($_POST['fraseLocalizacao']);
    $pagina = mysqli_query($conexao, "UPDATE paginas SET titulo$db='$titulo', frase$db='$frase' WHERE id = '5'");
    for($i=1;$i<=$_POST['salvarLocalizacao'];$i++){
        $empresa=htmlentities($_POST["empresa$i"]);
        $tipo=htmlentities($_POST["tipo$i"]);
        $telefone=htmlentities($_POST["telefone$i"]);
        $rua=htmlentities($_POST["rua$i"]);
        $nr=htmlentities($_POST["nr$i"]);
        $bairro=htmlentities($_POST["bairro$i"]);
        $cidade=htmlentities($_POST["cidade$i"]);
        $estado=htmlentities($_POST["estado$i"]);
        $cep=htmlentities($_POST["cep$i"]);
        $dados = mysqli_query($conexao, "UPDATE empresa SET empresa = '$empresa', tipo$db='$tipo', telefone='$telefone', rua='$rua', nr='$nr', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep' WHERE id = $i");
    }
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