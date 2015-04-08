<?php

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
if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        echo $row["NOME"] . "<br/>";
    }
}
?>