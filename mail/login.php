<?php
require "../config/config.ini";
$usuario = $_POST["login"];
$pass = $_POST["password"];
$senha = sha1($pass);
$query = "SELECT id, nome, senha, acesso FROM usuarios WHERE nome=? AND senha=?";
/* Criar um prepared statement */
if ($stmt = mysqli_prepare($conexao, $query)) {

    /* Vinculando os parâmetros
      s - string, b - blob, i - int, etc */
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);

    /* Executando */
    mysqli_stmt_execute($stmt);

    /* Vinculando os resultados */
    mysqli_stmt_bind_result($stmt, $id, $nome, $password, $acesso);

    /* Buscar valores */
    mysqli_stmt_fetch($stmt);

    if ($usuario == $nome && $senha == $password) {
        return false;
    } else {
        return false;
    }
    $stmt->close();
} else
    return false;
$conexao->close();
?>		

