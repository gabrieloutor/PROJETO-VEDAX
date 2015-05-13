<?php
require "../config/config.ini";
$usuario = $_POST["login"];
$senha = $_POST["password"];
$query = "SELECT id, nome, senha FROM usuarios WHERE nome=? AND senha=?";
/* Criar um prepared statement */
if ($stmt = mysqli_prepare($conexao, $query)) {

    /* Vinculando os parâmetros
      s - string, b - blob, i - int, etc */
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);

    /* Executando */
    mysqli_stmt_execute($stmt);

    /* Vinculando os resultados */
    mysqli_stmt_bind_result($stmt, $id, $nome, $password);

    /* Buscar valores */
    mysqli_stmt_fetch($stmt);

    if ($usuario == $nome && $senha == $password) {
        return true; 
    } else {
        return true;
    }
    $stmt->close();
} else{
    return true;
}
$conexao->close();
?>		

