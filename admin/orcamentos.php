<?php
session_start();
if ((!isset($_SESSION['login']) == true) && (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('location:index.php');
}
$logado = $_SESSION['login'];
require "../config/config.ini";
$resultadocont = mysqli_query($conexao, "SELECT * FROM faleconosco WHERE departamento = 'Orcamentos'");
$totalcont = mysqli_num_rows($resultadocont);
?>
<!DOCTYPE html>
<html lang='pt'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='description' content='<?php echo $descricao ?>'>
        <meta name='author' content='<?php echo $nomedesenvolvedor ?>'>
        <title>Orcamentos | <?php echo $empresa ?></title>
        <link rel='icon' href='../img/favicon.ico' />
        <link rel="stylesheet" href="css/style.css">
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap.no-icons.min.css" rel="stylesheet">
    </head>
    <body>
        <section class="container">
            <h2>Orçamentos Enviados pelo Site</h2>
        <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />

        <table class="order-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Data / Hora</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Mensagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i = 1; $i <= $totalcont; $i++) {
                        $row = mysqli_fetch_array($resultadocont);
                        $dataHora = date_format(date_create($row["dataHora"]), 'd/m/Y H:i:s');
                        $nome = replaceaccents($row["nome"]);
                        $email = $row["email"];
                        $telefone = $row["telefone"];
                        $mensagem = replaceaccents($row["mensagem"]);
                        echo"<tr>"
                        . "<td>$i</td>"
                        . "<td>$dataHora</td>"
                        . "<td>$nome</td>"
                        . "<td>$email</td>"
                        . "<td>$telefone</td>"
                        . "<td>$mensagem</td>";
                    }
                    ?>
            </tbody>
        </table>
        </section>
        <script src="js/index.js"></script>
    </body>
</html>
<?php mysqli_close($conexao) ?>