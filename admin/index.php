<?php require "../config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="<?php echo $nomedesenvolvedor; ?>" >
        <title>Administração | <?php echo $empresa; ?></title>
        <link rel="icon" href="../img/favicon.ico" />

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="../js/classie.js"></script>
        <script src="../js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/login.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/agency.js"></script>
        
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/agency.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    </head>
    
    <body id="page-top" class="index">
        <!-- Container -->
        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Administração</h2>
                        <img src="../img/logos/logovedax.png"alt="<?php echo $empresa; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <form name="loginForm" id="loginForm" novalidate>
                                <div class="col-md-6">
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
                                    <div id="success"></div>
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