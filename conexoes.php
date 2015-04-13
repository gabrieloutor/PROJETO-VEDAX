<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $descricao; ?>">
        <meta name="keywords" content="vedax,aço,conexões,flanges,forjados,carbono,empresa,produtos">
        <meta name="author" content="<?php echo $nomedesenvolvedor; ?>">
        <title>Produtos | <?php echo $empresa; ?></title>
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
        <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
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
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
        <link rel="stylesheet" href="css/ruds.css" type="text/css" >
        <link rel="stylesheet" href="css/tmpl.default.css" type="text/css" >
        <link rel="stylesheet" href="css/nivo-slider.min.css" type="text/css" >
        <link rel="stylesheet" href="css/default.css" type="text/css" >
        <link rel="stylesheet" href="css/media.1024.css" type="text/css" >
        <link rel="stylesheet" href="css/media.980.css" type="text/css" >
        <link rel="stylesheet" href="css/media.768.css" type="text/css" >
        <link rel="stylesheet" href="css/media.480.css" type="text/css" >
        <link rel="stylesheet" href="css/ext.default.css" type="text/css" >
        <link rel="stylesheet" href="css/ext.asmenu.css" type="text/css" >
        <link rel="stylesheet" href="css/ext.artslider.css" type="text/css" >
        <style type="text/css">
            h1
            {
                font-size:44px;
                text-align: center;
                font-family: 'Frutiger47CondensedLight';
                font-weight:normal;
                color:#333;
            }
            h2,
            h3,
            h4,
            h5 {
                font-family: Tahoma, Geneva, sans-serif, Arial;
            }
            #as-menu,#as-menu ul.as-menu li {
                border-radius:5px;
            }
            #as-menu ul.as-menu>li>a,#as-menu ul.as-menu>li>span {
                font-size:15px;
                font-family:'Advent Pro',Arial,serif;
                font-weight:600;
            }
            #as-menu ul.as-menu>li.active>a,#as-menu ul.as-menu>li.asHover>a,#as-menu ul.as-menu>li.current>a,#as-menu ul.as-menu>li.active>span,#as-menu ul.as-menu>li.asHover>span,#as-menu ul.as-menu>li.current>span,#as-menu ul.as-menu>li>a:hover,#as-menu ul.as-menu>li>span:hover,#as-menu ul.as-menu ul li a:hover,#as-menu ul.as-menu ul li span:hover,#as-menu ul.as-menu ul li.active>a,#as-menu ul.as-menu ul li.asHover>a,#as-menu ul.as-menu ul li.active>span,#as-menu ul.as-menu ul li.asHover>span {
            }
            #as-menu ul.as-menu ul {
                width:200px;
                -webkit-border-radius:0px;
                -moz-border-radius:0px;
                border-radius:0px;
                -webkit-border-bottom-right-radius:5px;
                -moz-border-radius-bottomright:5px;
                border-bottom-right-radius:5px;
                -webkit-border-bottom-left-radius:5px;
                -moz-border-radius-bottomleft:5px;
                border-bottom-left-radius:5px;
            }
            #as-menu ul.as-menu ul li a,#as-menu ul.as-menu ul li span {
                font-size:15px;
                font-family:'Advent Pro',Arial,serif;
                font-weight:600;
            }
            #as-menu ul.as-menu li li:hover ul,#as-menu ul.as-menu li li.asHover ul,#as-menu ul.as-menu li li li:hover ul,#as-menu ul.as-menu li li li.asHover ul {
                left: 191px;
            }
            .facebook
            {
                color:#ff0000;
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
        <script src="js/jquery.nivo.slider.min.js" type="text/javascript"></script>
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
                                                    <li class="current active">
                                                        <a href="produtos.php">Produtos</a>
                                                        <ul>
                                                            <li>
                                                                <a href="aneis.php" >Anéis e Discos</a>
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
                <div id="slider-row">
                    <div class="moduletable  ">
                        <div class="moduletable-wrapper">
                            <div class="vt_nivo_slider">
                                <div id="vtnivo89" class="slider-wrapper theme-default theme-default89 nivocontrol-bottomright nivo-bullets05 nivo-arrows10 captionposition-topleft captionrounded-all"
                                     style="height: auto; width: auto;">
                                    <div class="ribbon">
                                    </div>
                                    <div id="vt_nivo_slider89" class="nivoSlider">
                                        <?php
                                        $qtfoto = 1;
                                        for ($i = 1; $i <= $qtfoto; $i++) {
                                            echo "<img src=\"images/produto$i.jpg\" alt=\"Foto $i\" />";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery.noConflict();
                                jQuery(window).load(function () {
                                    jQuery('#vt_nivo_slider89').nivoSlider({
                                        effect: 'fold',
                                        // Specify sets like: 'fold,fade,sliceDown'
                                        slices: 15,
                                        // For slice animations
                                        boxCols: 8,
                                        // For box animations
                                        boxRows: 4,
                                        // For box animations
                                        animSpeed: 500,
                                        // Slide transition speed
                                        pauseTime: 3000,
                                        // How long each slide will show
                                        startSlide: 2,
                                        // Set starting Slide (0 index)
                                        directionNav: false,
                                        // Next & Prev navigation
                                        controlNav: false,
                                        // 1,2,3... navigation
                                        controlNavThumbs: false,
                                        // Use thumbnails for Control Nav
                                        pauseOnHover: true,
                                        // Stop animation while hovering
                                        manualAdvance: false,
                                        // Force manual transitions
                                        prevText: 'Prev',
                                        // Prev directionNav text
                                        nextText: 'Next',
                                        // Next directionNav text
                                        randomStart: true,
                                        // Start on a random slide
                                        beforeChange: function () {
                                        },
                                        // Triggers before a slide transition
                                        afterChange: function () {
                                        },
                                        // Triggers after a slide transition
                                        slideshowEnd: function () {
                                        },
                                        // Triggers after all slides have been shown
                                        lastSlide: function () {
                                        },
                                        // Triggers when last slide is shown
                                        afterLoad: function () {
                                        } // Triggers when slider has loaded
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <!-- FIM HEADER-->
                <!-- INICIO CONTEUDO -->
                <div id="content-row">
                    <div class="container">
                        <div class="content-inner-row">
                            <div id="component" class="span12">
                                <div class="main-content">
                                    <div class="ruds">
                                        <div class="text-item">

                                            <div class="titles">
                                                <h1>PRODUTOS</h1>
                                                <h2>FÁBRICA VEDAX</h2>
                                            </div>
                                            <div class="block clearfix">
                                                Produtos em conformidade com os padrões mais conhecidos, como o código ASME, apto para tanto líquido e gás de transporte de fluidos e transformação.&nbsp; &nbsp;<br><br>   
                                            </div>
                                            <div class="block clearfix">
                                                <table class="columns-3" width="100%" border="0" cellpadding="0" cellspacing="0">     
                                                    <tbody>  
                                                        <?php
                                                        $tipopeca = 3;
                                                        if ($tipopeca != 0 && $tipopeca != 1 && $tipopeca != 2 && $tipopeca != 3) {
                                                            $resultado = mysqli_query($conexao, "SELECT * FROM produto");
                                                        } else {
                                                            $resultado = mysqli_query($conexao, "SELECT * FROM produto WHERE peca = $tipopeca");
                                                        }
                                                        $totalpeca = mysqli_num_rows($resultado);
                                                        $totaltabela = (int) $totalpeca / 4;

                                                        $resto = $totalpeca % 4;

                                                        if ($resto == 0) {
                                                            for ($i = 1; $i < $totaltabela; $i++) {
                                                                if ($resultado) {
                                                                    echo "<tr align=\"center\">";
                                                                    for ($j = 1; $j <= 4; $j++) {
                                                                        $row = mysqli_fetch_array($resultado);
                                                                        $produto = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        $img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        echo "<td align=\"center\">
                                                                <h3>$produto</h3>             
                                                                <p><img src=\"images/produto/$img\" alt=\"\"></p>
                                                            </td>";
                                                                    }
                                                                    echo "</tr>";
                                                                }
                                                            }
                                                        } else if ($totaltabela > 1 && $resto != 0) {
                                                            for ($i = 1; $i < $totaltabela; $i++) {
                                                                if ($resultado) {
                                                                    echo "<tr align=\"center\">";
                                                                    for ($j = 1; $j <= 4; $j++) {
                                                                        $row = mysqli_fetch_array($resultado);
                                                                        $produto = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        $img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        echo "<td align=\"center\">
                                                                <h3>$produto</h3>             
                                                                <p><img src=\"images/produto/$img\" alt=\"\"></p>
                                                            </td>";
                                                                    }
                                                                    echo "</tr>";
                                                                }
                                                            }
                                                            echo "<tr align=\"center\">";
                                                            for ($i = 1; $i <= $resto; $i++) {
                                                                if ($resultado) {
                                                                    $row = mysqli_fetch_array($resultado);
                                                                    $produto = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                    $img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                    if ($resto == 1) {
                                                                        echo "<td colspan=\"4\">
                                                                <h3>$produto</h3>             
                                                                <p><img src=\"images/produto/$img\" alt=\"\"></p>
                                                            </td>";
                                                                    }
                                                                    if ($resto == 2) {
                                                                        echo "<td colspan=\"2\">
                                                                <h3>$produto</h3>             
                                                                <p><img src=\"images/produto/$img\" alt=\"\"></p>
                                                            </td>";
                                                                    }
                                                                    if ($resto == 3) {
                                                                        echo "<td colspan=\"1\">
                                                                <h3>$produto</h3>             
                                                                <p><img src=\"images/produto/$img\" alt=\"\"></p>
                                                            </td>";
                                                                    }
                                                                }
                                                            }echo "</tr>";
                                                        } else if ($totaltabela < 1) {
                                                            if ($resultado) {
                                                                echo "<tr align=\"center\">";
                                                                for ($j = 1; $j <= $totalpeca; $j++) {
                                                                    $row = mysqli_fetch_array($resultado);
                                                                    $produto = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                    $img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                    echo "<td align=\"center\">
                                                                <h3>$produto</h3>             
                                                                <p><img src=\"images/produto/$img\" alt=\"\"></p>
                                                            </td>";
                                                                }
                                                                echo "</tr>";
                                                            }
                                                        }
                                                        ?>
                                                    </tbody></table></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INICIO FOOTER-->
            <?php include("footer.php"); ?>
            <!-- FIM FOOTER-->
    </body>
</html>