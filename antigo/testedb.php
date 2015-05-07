<?php

// conctando ao BD
require "config/config.ini";
$resultado = mysqli_query($conexao, "SELECT * from usuarios");
if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        echo $row["id"] . " - " . $row["nome"] . "<br/>";
    }
}
// fechamento da conexão
mysqli_close($conexao);
?>