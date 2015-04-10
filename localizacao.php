<?php require "config.ini"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" >
        <meta name="description" content="<?php echo $descricao; ?>" >
        <meta name="keywords" content="vedax,aço,conexões,flanges,forjados,carbono,empresa,localizacao">
        <meta name="author" content="<?php echo $nomedesenvolvedor; ?>" >
        <title>Localização | <?php echo $empresa; ?></title>
        <!-- INICIO FAVICON -->
        <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="images/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
        <link rel="manifest" href="images/icons/manifest.json">
        <link rel="icon" href="images/icons/favicon.ico" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- FIM FAVICON -->
        <!-- INICIO CSS -->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="css/tmpl.default.css" type="text/css"/>
        <link rel="stylesheet" href="css/media.1024.css" type="text/css"/>
        <link rel="stylesheet" href="css/media.980.css" type="text/css"/>
        <link rel="stylesheet" href="css/media.768.css" type="text/css"/>
        <link rel="stylesheet" href="css/media.480.css" type="text/css"/>
        <link rel="stylesheet" href="css/ext.default.css" type="text/css"/>
        <link rel="stylesheet" href="css/ext.asmenu.css" type="text/css"/>
        <style type="text/css">
            #localizacao
            {
                    float: left;
                    line-height: 22px;
                    padding-right: 30px;
            }
            #localizacao
             .endereco
            {
                    font-size: 20px;
            }
            #localizacao .endereco1
            {
                    font-size: 14px;
                    text-decoration: underline;
            }
            #localizacao .gps
            {
                    font-size: 15px;
            }
            #localizacao
             .gps1
            {
                    font-size: 14px;
                    text-decoration: underline;
            }
            h1
            {
                    color: #333;
                    font-family: 'Frutiger47CondensedLight';
                    font-size: 44px;
                    font-weight: normal;
                    text-align: center;
            }
            h2, h3, h4, h5
            {
                    font-family: Tahoma, Geneva, sans-serif,
             Arial;
            }
            #as-menu, #as-menu ul.as-menu li
            {
                    border-radius: 5px;
            }
            #as-menu
             ul.as-menu>li>a, #as-menu ul.as-menu>li>span
            {
                    font-family: 'Advent Pro',Arial,serif;
                    font-size: 15px;
                    font-weight: 600;
            }
            #as-menu ul.as-menu>li.active>a,
             #as-menu ul.as-menu>li.asHover>a, #as-menu ul.as-menu>li.current>a, #as-menu
             ul.as-menu>li.active>span, #as-menu ul.as-menu>li.asHover>span, #as-menu
             ul.as-menu>li.current>span, #as-menu ul.as-menu>li>a:hover, #as-menu ul.as-menu>li>span:hover,
             #as-menu ul.as-menu ul li a:hover, #as-menu ul.as-menu ul li span:hover,
             #as-menu ul.as-menu ul li.active>a, #as-menu ul.as-menu ul li.asHover>a,
             #as-menu ul.as-menu ul li.active>span, #as-menu ul.as-menu ul li.asHover>span
            {
            }
            #as-menu ul.as-menu ul
            {
                    border-bottom-left-radius: 5px;
                    border-bottom-right-radius: 5px;
                    border-radius: 0px;
                    moz-border-radius: 0px;
                    moz-border-radius-bottomleft: 5px;
                    moz-border-radius-bottomright: 5px;
                    webkit-border-bottom-left-radius: 5px;
                    webkit-border-bottom-right-radius: 5px;
                    webkit-border-radius: 0px;
                    width: 200px;
            }
            #as-menu ul.as-menu ul li a, #as-menu ul.as-menu ul li span
            {
                    font-family: 'Advent Pro',Arial,serif;
                    font-size: 15px;
                    font-weight: 600;
            }
            #as-menu
             ul.as-menu li li:hover ul, #as-menu ul.as-menu li li.asHover ul, #as-menu
             ul.as-menu li li li:hover ul, #as-menu ul.as-menu li li li.asHover ul
            {
                    left: 191px;
            }
            .facebook
            {
                    color: #ff0000;
            }
            </style>
            <!-- FIM CSS -->
            <!-- INICIO JAVASCRIPT -->
            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script src="js/jquery-noconflict.js" type="text/javascript"></script>
            <script src="js/jquery-migrate.min.js" type="text/javascript"></script>
            <script src="js/caption.js" type="text/javascript"></script>
            <script src="js/bootstrap.js" type="text/javascript"></script>
            <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
            <script src="js/touch.gallery.js" type="text/javascript"></script>
            <script src="js/scripts.js" type="text/javascript"></script>
            <script src="js/script.js" type="text/javascript"></script>
            <script src="js/jquery.mobilemenu.js" type="text/javascript"></script>
            <script src="js/jquery.hovermenu.js" type="text/javascript"></script>
            <script type="text/javascript">
                jQuery(window).on('load', function () {
                    new JCaption('img.caption');
                });
                jQuery.noConflict();
            </script>
            <!-- FIM JAVASCRIPT -->
        </head>
        <body class="com_content view-article task- itemid-101 body__">
        <div class="wrapper">
            <div class="wrapper-inner">
                <!-- INICIO HEADER -->
                <div id="header-row">
                    <div class="wrapper">
                        <div class="container">
                            <div class="row">
                                <header>
                                    <div id="logo" class="span">
                                        <a href="index.php">
                                            <img src="images/logovedax.png" alt="VEDAX" />
                                        </a>
                                    </div>
                                    <nav class="moduletable navigation ">
                                        <div class="moduletable-wrapper">
                                            <script type="text/javascript">
                                                jQuery(function () {
                                                    jQuery('.as-menu').mobileMenu({});
                                                });
                                            </script>
                                            <!-- INICIO MENU -->
                                            <div id="as-menu" class="menu-wrapper">
                                                <ul class="as-menu ">
                                                    <li>
                                                        <a href="index.php">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="empresa.php">Empresa</a>
                                                    </li>
                                                    <li>
                                                        <a href="produtos.php">Produtos</a>
                                                        <ul>
                                                            <li>
                                                                <a href="aneis.php">Anéis e Discos</a>
                                                            </li>
                                                            <li>
                                                                <a href="conexoes.php">Conexões</a>
                                                            </li>
                                                            <li>
                                                                <a href="flanges.php">Flanges</a>
                                                            </li>
                                                            <li>
                                                                <a href="flangesespeciais.php">Flanges Especiais</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="servicos.php">Serviços</a>
                                                        <ul>
                                                            <li>
                                                                <a href="tratamentotermico.php">Tratamento Térmico</a>
                                                            </li>
                                                            <li>
                                                                <a href="soldagem.php">Soldagem</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="current active">
                                                        <a href="localizacao.php">Localização</a>
                                                    </li>
                                                    <li>
                                                        <a href="faleconosco.php">Fale Conosco</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- FIM MENU -->
                                            <script type="text/javascript">
                                                jQuery(function () {
                                                    jQuery('ul.as-menu').asmenu({
                                                        hoverClass: 'asHover',
                                                        pathClass: 'overideThisToUse',
                                                        pathLevels: 1,
                                                        delay: 500,
                                                        speed: 'normal',
                                                        autoArrows: false,
                                                        dropShadows: true,
                                                        disableHI: false,
                                                        onInit: function () {
                                                        },
                                                        onBeforeShow: function () {
                                                        },
                                                        onShow: function () {
                                                        },
                                                        onHide: function () {
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </nav>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIM HEADER-->
                <div id="content-row">
                    <div class="container">
                        <div class="content-inner-row">
                            <div id="component" class="span12">
                                <div id="system-message-container">
                                </div>
                                <div class="page-item page-item__">
                                    <div class="item_header">
                                        <h1>
                                            Localização
                                        </h1>
                                    </div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.232269276931!2d-46.87779399999999!3d-23.48814200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03a4ba9ed573%3A0x6adc5c7c4bb3d157!2sVedax+Equipamentos+Hidr%C3%A1ulicos+Ltda!5e0!3m2!1spt-BR!2sbr!4v1426962668973"
                                            width="600" height="450" frameborder="0" style="border:0">
                                    </iframe>
                                    <p id="localizacao">
                                        <span style="font-size: 12pt;">
                                            Fábrica e Escritório | <?php echo $empresa; ?>
                                            <br>
                                            <br>
                                                <address><?php echo $endereco; ?></address>
                                            <br>
                                            <br>
                                            Telefone:
                                            <u>
                                                <?php echo $telefone; ?>
                                            </u>
                                            <br>
                                            <br>
                                            GPS: Digite as coordenadas
                                            <u>
                                                <?php echo $coordenadasgps; ?>
                                            </u>
                                            <br>
                                            <br>
                                            Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- INICIO FOOTER-->
        <div id="footer">
            <div id="footer-row">
                <div class="container">
                    <div class="row">
                        <div class="footer-row-1">
                            <div class="moduletable contactus ">
                                <div class="moduletable-wrapper">
                                    <div class="mod-custom mod-custom__contactus">
                                        <h4>
                                            <span class="facebook">
                                                <a target="_blank" href="<?php echo $facebook; ?>">Facebook</a>
                                            </span>
                                        </h4>
                                        <h4>
                                            <span class="icon-phone">
                                                &#9743; <?php echo $telefone; ?>
                                                <br />

                                            </span>
                                        </h4>
                                        <h4>
                                            <span class="adress">
                                                &#9758; <?php echo $endereco; ?>
                                                <br />
                                            </span>
                                        </h4>
                                        <h4>
                                            <span class="icon-mail">
                                                &#9993; Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copyright-row">
                <div class="container">
                    <div id="trademark">
                        Copyright &copy; <?php echo date("Y"); ?> | <?php echo $empresa; ?>
                    </div>
                    <div id="copyright-menu" class="row">
                        <div id="ascopy">
                            <a href="<?php echo $linkfacedesenvolvedor; ?>" target="_blank">
                                &nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por:&nbsp;<?php echo $nomedesenvolvedor; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM FOOTER-->
        <div id="back-top">
            <a href="#"><span></span></a>
        </div>
    </body>

</html>