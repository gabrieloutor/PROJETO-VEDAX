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
}
$conexao = mysqli_connect($url, $login, $senha, $nome);
// tratamento de erros
if (mysqli_connect_errno()) {
    echo "Não foi possível conectar: " . mysqli_connect_error();
} else {
    echo "CONECTADO";
}
$resultado = mysqli_query($conexao, "SELECT * from DADOS_EMPRESA");
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        echo $row["NOME"] . "<br/>";
    }
}
?>
    </body>
</html>