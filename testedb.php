<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Localização | TESTANDO CARACTER</title>
    </head>
    <body>
        <?php
        ini_set('default_charset', 'UTF-8');
        $login = getenv("LOGINDB");
        $senha = getenv("SENHADB");
        $nome = getenv("NOMEDB");
        $url = getenv("URLDB");
        if ($url == null) {
            $url = "127.0.0.1";
            $login = "root";
            $senha = "admin";
            $nome = "vedax";
        }
        $conexao = mysqli_connect($url, $login, $senha, $nome);
// tratamento de erros
        if (mysqli_connect_errno()) {
            echo "Não foi possível conectar: " . mysqli_connect_error();
        }
        //PEGANDO QUANTIDADE DE TIPO DE PECA, CASO 
        $resultadotipopeca = mysqli_query($conexao, "SELECT DISTINCT(peca) from produto");
        $tipopeca = mysqli_num_rows($resultadotipopeca);
        echo $tipopeca;
        $resultado = mysqli_query($conexao, "SELECT DISTINCT(norma) from produto WHERE peca = 3");
        $qtnorma = mysqli_num_rows($resultado);
        echo "QT DE NORMA: $qtnorma<br>";
        echo "COM NORMA<br>";
        for ($i = 1; $i <= $qtnorma; $i++) {
            $row = $resultado->fetch_assoc();
            echo $row['norma'] . "<br>";
            $resultadonorma = mysqli_query($conexao, "SELECT * from produto WHERE peca = 3 AND norma='$row[norma]'");
            $totalpeca = mysqli_num_rows($resultadonorma);
            for ($j = 1; $j <= $totalpeca; $j++) {
                $row = mysqli_fetch_array($resultadonorma);
                echo $row['nome'] . "<br>";
            }
            echo "<br><br>";
        }
        ?>
    </body>
</html>