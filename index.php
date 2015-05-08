<!DOCTYPE html>
<?php require "config/config.ini"; ?>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $descricao; ?>">
        <meta name="keywords" content="vedax,aço,conexões,flanges,forjados,carbono,empresa,produtos">
        <meta name="author" content="<?php echo $nomedesenvolvedor; ?>">

        <title><?php echo $empresa; ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/agency.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top" >
                        <img src="img/logovedax.png" alt="<?php echo $empresa; ?>" id="vedaxlogo" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <?php
                        $resultadopaginas = mysqli_query($conexao, "SELECT * from paginas");
                        $totalpaginas = mysqli_num_rows($resultadopaginas);
                        for ($i = 1; $i <= $totalpaginas; $i++) {
                            $row = mysqli_fetch_array($resultadopaginas);
                            $nome = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
                            $referencia = htmlentities($row["referencia"], ENT_COMPAT, 'ISO-8859-1', true);
                            echo "<li>
                            <a class=\"page-scroll\" href=\"#$referencia\">$nome</a>
                        </li>";
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Bem vindo a Vedax!</div>
                    <div class="intro-heading">LEMA da VEDAX</div>
                    <a href="#services" class="page-scroll btn btn-xl">Conheça-nos</a>
                </div>
            </div>
        </header>

        <!-- Services Section -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Serviços</h2>
                        <h3 class="section-subheading text-muted">FRASE SERVICOS</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">TIPO SERVICO 1 --</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">TIPO SERVICO 2 -- QUALIDADE</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">TIPO SERVICO 3 -- </h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produts Grid Section -->
        <section id="produts" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Produtos</h2>
                        <h3 class="section-subheading text-muted">FRASE PRODUTOS</h3>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $resultado = mysqli_query($conexao, "SELECT * from produtos");
                    $total = mysqli_num_rows($resultado);
                    for ($i = 1; $i <= $total; $i++) {
                        $row = mysqli_fetch_array($resultado);
                        $nome = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
                        $tipo = htmlentities($row["tipo"], ENT_COMPAT, 'ISO-8859-1', true);
                        $img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                        echo "<div class=\"col-md-4 col-sm-6 portfolio-item\">
                        <a href=\"#portfolioModal$i\" class=\"portfolio-link\" data-toggle=\"modal\">
                            <div class=\"portfolio-hover\">
                                <div class=\"portfolio-hover-content\">
                                    <i class=\"fa fa-plus fa-3x\"></i>
                                </div>
                            </div>
                            <img src=\"img/$img\" class=\"img-responsive\" alt=\"\">
                        </a>
                        <div class=\"portfolio-caption\">
                            <h4>$nome</h4>
                            <p class=\"text-muted\">$tipo</p>
                        </div>
                    </div>";
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Empresa</h2>
                        <h3 class="section-subheading text-muted">Quem somos</h3>
                    </div>
                </div>
                <div class="row">
                    <p>A Vedax é uma empresa estabelecida no mercado desde 1975, especializada na fabricação de forjados, na linha de Flanges, Conexões tubulares e Forjados Especiais nos materiais Aço Liga, Inox e Carnono, obedecendo às especificações de normas nacionais e internacionais de fabricação.</p>
                    <p>Nossos rígidos padrões de controle de qualidade nos levaram à conformidade em todas as fases produtivas, desde a compra de matéria-prima, até ensaios de laboratórios, buscando certificar que todas as características do material estejam de acordo com as normas estipuladas.</p>
                    <p>Em decorrência de anos de experiência a Vedax adquiriu <i>know-how</i> no processo de forjamento e tratamento térmico de Anéis, Discos, Flanges e Conexões, com base nas normas ASME, API, DNV, entre outras. Esta capacidade foi conquistada graças à tecnologia investida em nossos processos de fabricação e capacitação de nossos funcionários. Isso possibilitou um grau de funcionamento adequado aos mais rigorosos requisitos, controlando - a cada etapa de fabricação - os pontos relevantes, o que garante produtos de excelente qualidade.</p>
                    <p> </p>
                    <div class="finalempresa">
                        A VEDAX AJUDANDO A CONSTRUIR O MAIOR SÍMBOLO BRASILEIRO<br><br></div>
                    <div id="imgempresa">
                        <?php
                        $qtfoto = 2;
                        for ($i = 1; $i <= $qtfoto; $i++) {
                            echo "<img src=\"img/empresa$i.png\" alt=\"Foto $i\" id=\"vedaxempresa$i\" /> ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section id="location" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Localização</h2>
                        <h3 class="section-subheading text-muted">FRASE LOCALIZACAO.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.232269276931!2d-46.87779399999999!3d-23.48814200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03a4ba9ed573%3A0x6adc5c7c4bb3d157!2sVedax+Equipamentos+Hidr%C3%A1ulicos+Ltda!5e0!3m2!1spt-BR!2sbr!4v1426962668973" style="border:0">
                        </iframe>
                        <p id="localizacao">
                            <span style="font-size: 12pt;">
                                Fábrica e Escritório | <?php echo $empresa; ?><br><br>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="22" height="22" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve"><path d="M11 22c0 0-7-8-7-15s7-7 7-7 7 0 7 7S11 22 11 22zM15.9 6.1c-0.2-1.2-0.9-2.3-1.9-3C14 3 13.9 3 13.9 2.9c-0.1-0.1-0.3-0.2-0.5-0.3 -0.1-0.1-0.3-0.2-0.4-0.2 -0.1-0.1-0.3-0.1-0.4-0.1 -0.2-0.1-0.3-0.1-0.5-0.2C11.7 2 11.4 2 11 2c0 0 0 0 0 0 0 0 0 0 0 0 -0.3 0-0.7 0-1 0.1C9.3 2.2 8.7 2.5 8.2 2.8c0 0 0 0 0 0C8 3 7.8 3.2 7.6 3.3 7.6 3.4 7.5 3.4 7.4 3.5 7.3 3.6 7.2 3.8 7.1 3.9 7 4 6.9 4.1 6.8 4.3 6.8 4.4 6.7 4.5 6.7 4.6 6.6 4.7 6.5 4.9 6.4 5.1c0 0.1 0 0.2-0.1 0.2C6.2 5.6 6.1 5.8 6.1 6 6 6.4 6 6.7 6 7c0 5 5 12 5 12s5-7 5-12C16 6.7 16 6.4 15.9 6.1zM8 7c0-1.7 1.3-3 3-3s3 1.3 3 3 -1.3 3-3 3S8 8.7 8 7z"></path></svg>
                                <u><a href="<?php echo $urlmaps; ?>"> <?php echo $endereco; ?></a></u><br><br>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="22" height="22" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve"><path d="M17.3 22H17c-2.9 0-8.5-2.8-11.4-5.6S0 7.9 0 5V4.7l0.2-0.3C1.3 2.8 3.4 0 5 0c1.6 0 4.2 2.6 5 4.4 0.6 1.4 0.1 2.2-0.3 2.6C9.1 7.6 8.5 8 8.1 8.3 7.3 8.7 7.3 8.8 7.3 9c0 0.9 1.3 2.2 2.4 3.3 1.1 1.1 2.4 2.4 3.3 2.4 0.2 0 0.3 0 0.7-0.7 0.3-0.5 0.6-1 1.2-1.6 0.4-0.4 0.9-0.6 1.4-0.6 2.2 0 5.6 3.5 5.6 5.3 0 1.6-2.8 3.7-4.4 4.8L17.3 22zM2 5.3c0.2 2.5 2.7 7.4 5 9.7 2.3 2.3 7.2 4.8 9.7 5 1.6-1.1 3.2-2.5 3.3-3 -0.1-0.7-2.5-3.2-3.6-3.2 -0.4 0.4-0.7 0.8-0.9 1.2 -0.5 0.8-1 1.7-2.4 1.7 -1.7 0-3.3-1.5-4.7-3 -1.5-1.5-3-3-3-4.7 0-1.4 0.9-2 1.7-2.4 0.4-0.3 0.8-0.5 1.3-0.9 0 0-0.1-0.4-0.5-1.1C6.9 3.2 5.4 2.1 5 2 4.5 2.1 3.1 3.6 2 5.3z"></path></svg>
                                <u> <?php echo $telefone; ?></u><br><br>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="22" height="22" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve"><path d="M20 19H2c-1.1 0-2-0.9-2-2V5c0-1.1 0.9-2 2-2h18c1.1 0 2 0.9 2 2v12C22 18.1 21.1 19 20 19zM19 17l-5.7-5L11 14l-2.3-2L3 17H19zM2 16l5.6-5L2 6V16zM3 5l8 7 8-7H3zM20 6l-5.6 5 5.6 5V6z"></path></svg>
                                <a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a><br><br>
                                GPS: Digite as coordenadas <u><?php echo $coordenadasgps; ?></u>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted">FRASE LOCALIZACAO -- PERTO DA ...</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients Aside -->
        <aside class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Fale Conosco</h2>
                        <h3 class="section-subheading text-muted">FRASE FALE CONOSCO.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">

                            <div class="col-md-6">
                                <form name="sentMessage" id="contactForm" novalidate>
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Por favor digite seu nome.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Por favor digite seu email.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" type="tel" class="form-control" placeholder="Seu Telefone *" id="phone" required data-validation-required-message="Por favor digite seu telefone.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Mensagem *" id="message" required data-validation-required-message="Por favor digite sua mensagem."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.232269276931!2d-46.87779399999999!3d-23.48814200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03a4ba9ed573%3A0x6adc5c7c4bb3d157!2sVedax+Equipamentos+Hidr%C3%A1ulicos+Ltda!5e0!3m2!1spt-BR!2sbr!4v1426962668973" style="border:0">
                                </iframe>
                                <p id="localizacao">
                                    <span style="font-size: 12pt;">
                                        Fábrica e Escritório | <?php echo $empresa; ?><br><br>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="22" height="22" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve"><path d="M11 22c0 0-7-8-7-15s7-7 7-7 7 0 7 7S11 22 11 22zM15.9 6.1c-0.2-1.2-0.9-2.3-1.9-3C14 3 13.9 3 13.9 2.9c-0.1-0.1-0.3-0.2-0.5-0.3 -0.1-0.1-0.3-0.2-0.4-0.2 -0.1-0.1-0.3-0.1-0.4-0.1 -0.2-0.1-0.3-0.1-0.5-0.2C11.7 2 11.4 2 11 2c0 0 0 0 0 0 0 0 0 0 0 0 -0.3 0-0.7 0-1 0.1C9.3 2.2 8.7 2.5 8.2 2.8c0 0 0 0 0 0C8 3 7.8 3.2 7.6 3.3 7.6 3.4 7.5 3.4 7.4 3.5 7.3 3.6 7.2 3.8 7.1 3.9 7 4 6.9 4.1 6.8 4.3 6.8 4.4 6.7 4.5 6.7 4.6 6.6 4.7 6.5 4.9 6.4 5.1c0 0.1 0 0.2-0.1 0.2C6.2 5.6 6.1 5.8 6.1 6 6 6.4 6 6.7 6 7c0 5 5 12 5 12s5-7 5-12C16 6.7 16 6.4 15.9 6.1zM8 7c0-1.7 1.3-3 3-3s3 1.3 3 3 -1.3 3-3 3S8 8.7 8 7z"></path></svg>
                                        <u><a href="<?php echo $urlmaps; ?>"> <?php echo $endereco; ?></a></u><br><br>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="22" height="22" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve"><path d="M17.3 22H17c-2.9 0-8.5-2.8-11.4-5.6S0 7.9 0 5V4.7l0.2-0.3C1.3 2.8 3.4 0 5 0c1.6 0 4.2 2.6 5 4.4 0.6 1.4 0.1 2.2-0.3 2.6C9.1 7.6 8.5 8 8.1 8.3 7.3 8.7 7.3 8.8 7.3 9c0 0.9 1.3 2.2 2.4 3.3 1.1 1.1 2.4 2.4 3.3 2.4 0.2 0 0.3 0 0.7-0.7 0.3-0.5 0.6-1 1.2-1.6 0.4-0.4 0.9-0.6 1.4-0.6 2.2 0 5.6 3.5 5.6 5.3 0 1.6-2.8 3.7-4.4 4.8L17.3 22zM2 5.3c0.2 2.5 2.7 7.4 5 9.7 2.3 2.3 7.2 4.8 9.7 5 1.6-1.1 3.2-2.5 3.3-3 -0.1-0.7-2.5-3.2-3.6-3.2 -0.4 0.4-0.7 0.8-0.9 1.2 -0.5 0.8-1 1.7-2.4 1.7 -1.7 0-3.3-1.5-4.7-3 -1.5-1.5-3-3-3-4.7 0-1.4 0.9-2 1.7-2.4 0.4-0.3 0.8-0.5 1.3-0.9 0 0-0.1-0.4-0.5-1.1C6.9 3.2 5.4 2.1 5 2 4.5 2.1 3.1 3.6 2 5.3z"></path></svg>
                                        <u> <?php echo $telefone; ?></u><br><br>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="22" height="22" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve"><path d="M20 19H2c-1.1 0-2-0.9-2-2V5c0-1.1 0.9-2 2-2h18c1.1 0 2 0.9 2 2v12C22 18.1 21.1 19 20 19zM19 17l-5.7-5L11 14l-2.3-2L3 17H19zM2 16l5.6-5L2 6V16zM3 5l8 7 8-7H3zM20 6l-5.6 5 5.6 5V6z"></path></svg>
                                        <a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a><br><br>
                                        GPS: Digite as coordenadas <u><?php echo $coordenadasgps; ?></u>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright <a href="<?php echo $facebookdesenvolvedor; ?>" target="_blank">&copy;</a> <?php echo $empresa; ?> <?php echo date("Y"); ?></span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Portfolio Modals -->
        <!-- Use the modals below to showcase details about your portfolio projects! -->

        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 4 -->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 5 -->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 6 -->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/agency.js"></script>

    </body>

</html>
