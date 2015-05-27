<?php require "../config/config.ini"; ?>
<?php
session_start();
if (!isset($_POST['login'])){
    $error = "";
}   else {
    $usuario = $_POST["login"];
    $senh = $_POST["password"];
    $senha = sha1($senh);
    $query = "SELECT id, nome, senha, acesso FROM usuarios WHERE nome=? AND senha=?";
    if ($stmt = mysqli_prepare($conexao, $query)) {
        mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $nome, $password, $acesso);
        mysqli_stmt_fetch($stmt);
        if ($usuario == $nome && $senha == $password) {
            $_SESSION['login'] = $usuario;
            $_SESSION['password'] = $senha;
            header("Location: administracao.php");
        } else {
            unset ($_SESSION['login']);
            unset ($_SESSION['password']);
            $error = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Usuário ou Senha incorretos</strong></div>";
           
        }
        $stmt->close();
    } else {
        unset ($_SESSION['login']);
        unset ($_SESSION['password']);
        $error = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><strong>Usuário ou Senha incorretos</strong></div>";
    }
    $conexao->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="<?php echo $nomedesenvolvedor; ?>" >
        <title>Administração | <?php echo $empresa; ?></title>
        <link rel="icon" href="../img/favicon.ico" />
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="../js/classie.js"></script>
        <script src="../js/cbpAnimatedHeader.js"></script>
        <script src="../js/agency.js"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/agency.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    </head>
    
    <body id="page-top" class="index">
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Administração</h2>
                        <img src="../img/logos/logovedax.png" alt="<?php echo $empresa; ?>" id="logovedax" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <form action="index.php" method="POST" id="loginForm" novalidate>
                                <div class="col-md-6 formadmin">
                                    <div class="form-group">
                                        <input name="login" type="text" class="form-control" placeholder="Seu Login *" id="name" required data-validation-required-message="Por favor digite seu login.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" placeholder="Sua Senha *" id="password" required data-validation-required-message="Por favor digite sua senha.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"><?php echo $error; ?></div>
                                    <button type="submit" class="btn btn-xl">Acessar</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    
</html>
<?php mysqli_close($conexao)  ?>