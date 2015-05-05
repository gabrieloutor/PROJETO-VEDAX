<?php

/* conextando ao BD */
require "../config/config.ini";

$usuario = $_POST["login"];
$senha = $_POST["password"];
$senha = sha1($senha);

/* Criando a consulta */
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
        header("Location: administracao.php");
    } else {
        header("Location: erro.php");
    }


    /* Fechando o statement */
    $stmt->close();
} else
    echo "Falha no statement, avise ao CPD";

/* Close connection */
$conexao->close();

// http://php.net/manual/en/mysqli-stmt.bind-result.php	
// http://php.net/manual/pt_BR/mysqli-stmt.bind-param.php
?>		

