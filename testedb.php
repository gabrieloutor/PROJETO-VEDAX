<?php
// INICIO CONEXAO BANCO DE DADOS
$login = getenv("LOGINDB");
$senha = getenv("SENHADB");
$nome = getenv("NOMEDB");
$urldb = getenv("URLDB");
if ($urldb == null) {
    $urldb = "127.0.0.1";
    $login="root";
    $senha="admin";
    $nome="vedax";
}
$db=new mysqli($urldb,$login,$senha,$nome);
$statement=$db->prepare("SELECT * FROM produto");
$statement->bind_param($urldb, $statement)
//$statement->execute();
// tratamento de erros
/*if (mysqli_connect_errno()) {
    echo "Não foi possível conectar: " . mysqli_connect_error();
}else{
    echo "CONECTADO";
}
 * 
 */
?>