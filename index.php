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
        <link rel="icon" href="img/favicon.ico" />

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
                        <img src="img/logos/logovedax.png" alt="<?php echo $empresa; ?>" id="vedaxlogo" />
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
                    <?php
                    $resultadohome = mysqli_query($conexao, "SELECT * from home");
                    $totalhome = mysqli_num_rows($resultadohome);
                    for ($i = 1; $i <= $totalhome; $i++) {
                        $row = mysqli_fetch_array($resultadohome);
                        $titulohome = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
                        $botao = htmlentities($row["botao"], ENT_COMPAT, 'ISO-8859-1', true);
                        echo "<div class=\"intro-lead-in\">$titulohome</div>
                    <a href=\"#about\" class=\"page-scroll btn btn-xl\">$botao</a>";
                    }
                    ?>
                    
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                        <?php
                    $resultadoquemSomos = mysqli_query($conexao, "SELECT * from quemSomos");
                    $totalquemSomos = mysqli_num_rows($resultadoquemSomos);
                    for ($i = 1; $i <= $totalquemSomos; $i++) {
                        $row = mysqli_fetch_array($resultadoquemSomos);
                        $tituloQuemSomos = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
                        $fraseQuemSomos = htmlentities($row["frase"], ENT_COMPAT, 'ISO-8859-1', true);
                        $textoFrase = htmlentities($row["textoFrase"], ENT_COMPAT, 'ISO-8859-1', true);
                        $qtfoto = 2;
                        echo "<div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading\">$tituloQuemSomos</h2>
                        <h3 class=\"section-subheading text-muted\">$fraseQuemSomos</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <p class=\"text-muted\">A Vedax é uma empresa estabelecida no mercado desde 1975, especializada na fabricação de forjados, na linha de Flanges, Conexões tubulares e Forjados Especiais nos materiais Aço Liga, Inox e Carnono, obedecendo às especificações de normas nacionais e internacionais de fabricação.</p>
                    <p class=\"text-muted\">Nossos rígidos padrões de controle de qualidade nos levaram à conformidade em todas as fases produtivas, desde a compra de matéria-prima, até ensaios de laboratórios, buscando certificar que todas as características do material estejam de acordo com as normas estipuladas.</p>
                    <p class=\"text-muted\">Em decorrência de anos de experiência a Vedax adquiriu <i>know-how</i> no processo de forjamento e tratamento térmico de Anéis, Discos, Flanges e Conexões, com base nas normas ASME, API, DNV, entre outras. Esta capacidade foi conquistada graças à tecnologia investida em nossos processos de fabricação e capacitação de nossos funcionários. Isso possibilitou um grau de funcionamento adequado aos mais rigorosos requisitos, controlando - a cada etapa de fabricação - os pontos relevantes, o que garante produtos de excelente qualidade.</p>
                    <p> </p>
                            <div class=\"finalempresa\">
                        $textoFrase<br><br></div>
                    <div id=\"imgempresa\">";
                        for ($i = 1; $i <= $qtfoto; $i++) {
                            $img = htmlentities($row["img$i"], ENT_COMPAT, 'ISO-8859-1', true);
                            echo "<img src=\"img/about/$img\" alt=\"Foto $i\" class=\"vedaxempresa\" /> ";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <a id="back-top" href="#"></a>
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
                        echo "<div class=\"col-md-4 col-sm-6 produts-item positionproduts\">
                        <a href=\"#produtsModal$i\" class=\"produts-link\" data-toggle=\"modal\">
                            <div class=\"produts-hover\">
                                <div class=\"produts-hover-content\">
                                    <i class=\"fa fa-plus fa-3x\"></i>
                                </div>
                            </div>
                            <img src=\"img/produts/$img\" class=\"img-responsive imgproduts\" alt=\"$nome $tipo\">
                        </a>
                        <div class=\"produts-caption\">
                            <h4>$nome</h4>
                            <p class=\"text-muted\">$tipo</p>
                        </div>
                    </div>";
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="processes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Processos</h2>
                        <h3 class="section-subheading text-muted">FRASE PROCESSOS</h3>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <?php
                    $resultadoprocesses = mysqli_query($conexao, "SELECT * from processos");
                    $totalprocessos = mysqli_num_rows($resultadoprocesses);
                    for ($i = 1; $i <= $totalprocessos; $i++) {
                        $row = mysqli_fetch_array($resultadoprocesses);
                        $titulo = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
                        $explicacao = htmlentities($row["explicacao"], ENT_COMPAT, 'ISO-8859-1', true);
                        $img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                        if($i%2==1 && $i!==$totalprocessos){
                            echo "<li>
                            <div class=\"timeline-image\">
                                <img class=\"img-circle img-responsive\" src=\"img/processes/$img\" alt=\"$titulo\">
                            </div>
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h4>$titulo</h4>
                                </div>
                                <div class=\"timeline-body\">
                                    <p class=\"text-muted\">$explicacao</p>
                                </div>
                            </div>
                        </li>";
                        }else if($i%2==0 && $i!==$totalprocessos){
                            echo "<li class=\"timeline-inverted\">
                            <div class=\"timeline-image\">
                                <img class=\"img-circle img-responsive\" src=\"img/processes/$img\" alt=\"$titulo\">
                            </div>
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h4>$titulo</h4>
                                </div>
                                <div class=\"timeline-body\">
                                    <p class=\"text-muted\">$explicacao</p>
                                </div>
                            </div>
                        </li>";
                        }else if($i==$totalprocessos){
                            echo "<li class=\"timeline-inverted\">
                            <div class=\"timeline-image\">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>";
                        }
                        
                    }
                    ?>
                    </ul>
                </div>
            </div>
            </div>
        </section>
        
        <!-- Clients Aside -->
        <aside class="clients" id="clients">
            <div class="container">
                <div class="row">
                    <?php
                    $resultadoClientes = mysqli_query($conexao, "SELECT * from clientes");
                    $totalClientes = mysqli_num_rows($resultadoClientes);
                    for ($i = 1; $i <= $totalClientes; $i++) {
                        $row = mysqli_fetch_array($resultadoClientes);
                        $tituloCliente = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
                        $imgCliente = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                        echo "<div class=\"col-md-3 col-sm-6\">
                        <a href=\"#clients\">
                            <img src=\"img/clients/$imgCliente\" class=\"img-responsive img-centered imgclients\" alt=\"$tituloCliente\">
                        </a>
                    </div>";
                    }
                    ?>
                </div>
            </div>
        </aside>

        <!-- Certificates Section -->
        <section id="certificates" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Certificados</h2>
                        <h3 class="section-subheading text-muted">FRASE CERTIFICADOS</h3>
                    </div>
                </div>
                
                <div class="row text-center">
                    <?php
                    $resultadoCertificados = mysqli_query($conexao, "SELECT * from certificados");
                    $totalCertificados = mysqli_num_rows($resultadoCertificados);
                    for ($i = 1; $i <= $totalCertificados; $i++) {
                        $row = mysqli_fetch_array($resultadoCertificados);
                        $tituloCertificado = htmlentities($row["titulo"], ENT_COMPAT, 'ISO-8859-1', true);
                        $imgCertificado = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                        $abreviacao = htmlentities($row["abreviacao"], ENT_COMPAT, 'ISO-8859-1', true);
                        echo "<div class=\"col-md-4 certificates\">
                        <span class=\"fa-stack fa-4x\">
                            <a href=\"#$abreviacao\" class=\"produts-link\" data-toggle=\"modal\">
                                <img src=\"img/certificates/$imgCertificado\" class=\"imgcertificates\" alt=\"$tituloCertificado\">
                            </a>
                        </span>
                        <h4 class=\"service-heading\">$tituloCertificado</h4>
                    </div>";
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section id="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Localização</h2>
                        <h3 class="section-subheading text-muted">Endereço</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.232269276931!2d-46.87779399999999!3d-23.48814200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03a4ba9ed573%3A0x6adc5c7c4bb3d157!2sVedax+Equipamentos+Hidr%C3%A1ulicos+Ltda!5e0!3m2!1spt-BR!2sbr!4v1426962668973" style="border:0">
                        </iframe>
                        
                            <?php
                            $resultadolocalizacao = mysqli_query($conexao, "SELECT * from empresa");
                            $totalempresa = mysqli_num_rows($resultadolocalizacao);
                            for ($i = 1; $i <= $totalempresa; $i++) {
                                $row = mysqli_fetch_array($resultadolocalizacao);
                                $nome = htmlentities($row["empresa"], ENT_COMPAT, 'ISO-8859-1', true);
                                $tipo = htmlentities($row["tipo"], ENT_COMPAT, 'ISO-8859-1', true);
                                $email = htmlentities($row["email"], ENT_COMPAT, 'ISO-8859-1', true);
                                $telefone = htmlentities($row["telefone"], ENT_COMPAT, 'ISO-8859-1', true);
                                $telefone = "+" . substr($telefone, 0, 2) . " " . substr($telefone, 2, 2) . " " . substr($telefone, -8, 4) . "-" . substr($telefone, -4, 4); // TELEFONE
                                $rua = htmlentities($row["rua"], ENT_COMPAT, 'ISO-8859-1', true); // RUA DA EMPRESA
                                $nr = $row["nr"]; // NR DA EMPRESA
                                $bairro = htmlentities($row["bairro"], ENT_COMPAT, 'ISO-8859-1', true); // BAIRRO DA EMPRESA
                                $cidade = htmlentities($row["cidade"], ENT_COMPAT, 'ISO-8859-1', true); // CIDADE DA EMPRESA
                                $estado = $row["estado"]; // ESTADO ONDE SE LOCALIZA A EMPRESA
                                $cep = $row["cep"]; // CEP DA EMPRESA
                                if (substr($cep, -4, 1) === '-') {
                                    $endereco = $rua . ", " . $nr . " - " . $bairro . ", " . $cidade . " - " . $estado . ", " . $cep; // ENDERECO COMPLETO
                                } else {
                                    $endereco = $rua . ", " . $nr . " - " . $bairro . ", " . $cidade . " - " . $estado . ", " . substr($cep, 0, 5) . "-" . substr($cep, -3); // ENDERECO COMPLETO
                                }
                                $coordenadasgps = $row["gpsX"] . ", " . $row["gpsY"];
                                $urlmaps = htmlentities($row["urlmaps"], ENT_COMPAT, 'ISO-8859-1', true);
                                $urlmaps = "http://maps.apple.com/?daddr=" . $urlmaps;
                                echo " <p class=\"localizacao\"> <span style=\"font-size: 12pt;\">
                                <u>$tipo</u> | $nome <br><br>
                                <img src=\"img/icons/icon-location.png\" alt=\"Localização $nome\">
                                <u><a href=\"$urlmaps\">$endereco</a></u><br><br>
                                <img src=\"img/icons/icon-phone.png\" alt=\"Telefone $nome\">
                                <u> $telefone</u><br><br>
                            </span> </p> <hr>";
                            }
                            ?>

                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Contato</h2>
                        <h3 class="section-subheading text-muted">Fale Conosco</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="col-md-6">
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Mensagem *" id="message" required data-validation-required-message="Por favor digite sua mensagem."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                                </div> 
                            </form>
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

        <!-- produts Modals -->
        <!-- Use the modals below to showcase details about your produts projects! -->

        <!-- produts Modal 1 -->
        <div class="produts-modal modal fade" id="produtsModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <img class="img-responsive img-centered" src="img/produts/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this produts item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
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

        <!-- produts Modal 2 -->
        <div class="produts-modal modal fade" id="produtsModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <img class="img-responsive img-centered" src="img/produts/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- produts Modal 3 -->
        <div class="produts-modal modal fade" id="produtsModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <img class="img-responsive img-centered" src="img/produts/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this produts sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- produts Modal 4 -->
        <div class="produts-modal modal fade" id="produtsModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <img class="img-responsive img-centered" src="img/produts/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great produts, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this produts sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Produts Modal 5 -->
        <div class="produts-modal modal fade" id="produtsModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <img class="img-responsive img-centered" src="img/produts/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this produts sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BRTUV -->
        <div class="produts-modal modal fade" id="BRTUV" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>BRTUV ISO 9001</h2>
                                <object data="pdf/BRTUV.pdf" type="application/pdf">
                                    <a href="pdf/BRTUV.pdf">test.pdf</a>
                                </object>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close PDF</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CRCC PETROBRAS -->
        <div class="produts-modal modal fade" id="CRCC" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>CRCC Petrobras</h2>
                                <object data="pdf/CRCC.pdf" type="application/pdf">
                                    <a href="pdf/CRCC.pdf">test.pdf</a>
                                </object>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close PDF</button>
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
        
        <!-- NEW RELIC JS -->
        <script src="js/newrelic.js" type="text/javascript"></script>

    </body>

</html>
