<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $descricao; ?>" />
        <meta name="keywords" content="vedax,aço,conexões,flanges,forjados,carbono,empresa">
        <meta name="author" content="<?php echo $nomedesenvolvedor; ?>">
        <title>Fale Conosco | <?php echo $empresa; ?></title>
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
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/tmpl.default.css" type="text/css" />
        <link rel="stylesheet" href="css/nivo-slider.min.css" type="text/css" />
        <link rel="stylesheet" href="css/default.css" type="text/css" />
        <link rel="stylesheet" href="css/media.1024.css" type="text/css" />
        <link rel="stylesheet" href="css/media.980.css" type="text/css" />
        <link rel="stylesheet" href="css/media.768.css" type="text/css" />
        <link rel="stylesheet" href="css/media.480.css" type="text/css" />
        <link rel="stylesheet" href="css/ext.default.css" type="text/css" />
        <link rel="stylesheet" href="css/ext.asmenu.css" type="text/css" />
        <link rel="stylesheet" href="css/ext.artslider.css" type="text/css" />
        <style type="text/css">
            h1
            {
                font-size:44px;
                text-align: center;
                font-family: 'Frutiger47CondensedLight';
                font-weight:normal;
                color:#333;/*#32B4FF*/
            }
            label
            {
                font-size:15px;
                font-family: Tahoma, Geneva, sans-serif, Arial;
                font-weight:normal;
                color:#333;/*#32B4FF*/
            }
            .item_fulltext
            {
                text-align:justify;
                text-indent:20px

            }
            h2,
            h3,
            h4,
            h5 {
                font-family: Tahoma, Geneva, sans-serif, Arial;
            }
            #as-menu,
            #as-menu ul.as-menu li {
                border-radius: 5px;
            }

            #as-menu ul.as-menu>li>a,
            #as-menu ul.as-menu>li>span {
                font-size: 15px;
                font-family:'Advent Pro',Arial,serif;
                font-weight: 600;
            }

            #as-menu ul.as-menu>li.active>a,
            #as-menu ul.as-menu>li.asHover>a,
            #as-menu ul.as-menu>li.current>a,
            #as-menu ul.as-menu>li.active>span,
            #as-menu ul.as-menu>li.asHover>span,
            #as-menu ul.as-menu>li.current>span,
            #as-menu ul.as-menu>li>a:hover,
            #as-menu ul.as-menu>li>span:hover,
            #as-menu ul.as-menu ul li a:hover,
            #as-menu ul.as-menu ul li span:hover,
            #as-menu ul.as-menu ul li.active>a,
            #as-menu ul.as-menu ul li.asHover>a,
            #as-menu ul.as-menu ul li.active>span,
            #as-menu ul.as-menu ul li.asHover>span {}

            #as-menu ul.as-menu ul {
                width: 200px;
                -webkit-border-radius: 0px;
                -moz-border-radius: 0px;
                border-radius: 0px;
                -webkit-border-bottom-right-radius: 5px;
                -moz-border-radius-bottomright: 5px;
                border-bottom-right-radius: 5px;
                -webkit-border-bottom-left-radius: 5px;
                -moz-border-radius-bottomleft: 5px;
                border-bottom-left-radius: 5px;
            }

            #as-menu ul.as-menu ul li a,
            #as-menu ul.as-menu ul li span {
                font-size: 15px;
                font-family:'Advent Pro',Arial,serif;
                font-weight: 600;
            }

            #as-menu ul.as-menu li li:hover ul,
            #as-menu ul.as-menu li li.asHover ul,
            #as-menu ul.as-menu li li li:hover ul,
            #as-menu ul.as-menu li li li.asHover ul {
                left: 191px;
            }

            .facebook {
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
                                                    <li>
                                                        <a href="localizacao.php">Localização</a>
                                                    </li>
                                                    <li class="current active">
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
                                        <h1>Fale Conosco</h1>
                                    </div>
                                    <form action="formail.php" method="POST">
                                        <font face="Arial Narrow">
                                        <input type="hidden" name="emaildest" value="gabriel.outor@hotmail.com"></font>
                                        <font face="Arial Narrow">
                                        <input type="hidden" name="redirecionar" value="http://gabrieloutor.herokuapp.com/faleconosco.php">
                                        </font>
                                        <center>
                                            <table width="635" bgcolor="#000000" border="0" align="center" cellspacing="0" cellpadding="1" height="270">
                                                <tr>
                                                    <td width="633" height="268">
                                                        <div align="center">
                                                            <center>
                                                                <table width="344" bgcolor="#C4C4AA" border="1" cellspacing="0" cellpadding="3" style="border-collapse: collapse" bordercolor="#111111" height="271">
                                                                    <tr>
                                                                        <td width="93" height="22"><font face="Tahoma" size="2">Seu nome:</font></td>
                                                                        <td width="239" height="22">
                                                                            <font face="Arial Narrow">
                                                                            <input type="text" size="70" name="nome" value=""></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="93" height="22"><font face="Tahoma" size="2">Seu E-mail:</font></td>
                                                                        <td width="239" height="22">
                                                                            <font face="Arial Narrow">
                                                                            <input type="text" size="70" name="email" value=""></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="93" height="22"><font face="Tahoma" size="2">Assunto:</font></td>
                                                                        <td width="239" height="22">
                                                                            <font face="Arial Narrow">
                                                                            <input type="text" size="70" name="assunto" value=""></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="93" height="100"><font face="Tahoma" size="2">Mensagem:</font></td>
                                                                        <td width="239" height="100">
                                                                            <font face="Arial Narrow">
                                                                            <textarea cols="60" rows="6" name="mensagem"></textarea></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="center" width="331" height="71">
                                                                            <font face="Arial Narrow">
                                                                            <input type="submit" value=" Enviar " style="float: left; font-family: Tahoma"></font><font face="Tahoma"><input type="reset" value=" Limpar " style="float: left"></font><font face="Arial Narrow">&nbsp;&nbsp;&nbsp;
                                                                            </font></td>
                                                                    </tr>
                                                                </table>
                                                            </center>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>
                                    </form>

                                    <p align="center">
                                        <a href="corpo.asp"><strong><font color="#000000" face="Tahoma" size="3">Voltar</font></strong></a></p>

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