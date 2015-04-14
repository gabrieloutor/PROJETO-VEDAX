<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Localização | TESTANDO CARACTER</title>
    </head>
    <body>
<?php
ini_set('default_charset','UTF-8'); 
$login = getenv("LOGINDB");
$senha = getenv("SENHADB");
$nome = getenv("NOMEDB");
$url = getenv("URLDB");
if ($url == null) {
    $url = "127.0.0.1";
    $login="root";
    $senha="admin";
    $nome="vedax";
}
$conexao = mysqli_connect($url, $login, $senha, $nome);
// tratamento de erros
if (mysqli_connect_errno()) {
    echo "Não foi possível conectar: " . mysqli_connect_error();
} else {
    echo "CONECTADA<br/>";
}
$tipopeca=0;
$resultado = mysqli_query($conexao, "SELECT * FROM produto");
if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        //echo htmlspecialchars($row["NOME"]) "<br/>";
        $norma=$row["norma"];
        if(in_array("ASME B 16.5",$norma)){
            echo "ASM";
        }
        //$telefone=$row["telefone"];
        //echo substr($telefone, 0, 2) . "<br/>";
        //echo substr($telefone, -1) . "<br/>";
        //foreach ($norma as $key => $value) {
        //    echo "$norma e norma:$key";
        //}
    }
}
?>
    </body>
</html>