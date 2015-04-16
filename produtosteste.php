<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <?php
    if (empty($titulo)) {
        $titulo = "Produtos";
    }
    ?>
    <?php
    if (empty($tipopeca)) {
        $tipopeca = 99;
    }
    ?>
    <?php
    if (empty($tituloproduto)) {
        $tituloproduto = "Produtos";
    }
    ?>
    <?php
    if (empty($descricaoproduto)) {
        $descricaopadrao = "Produtos em conformidade com os padrões mais conhecidos, como o código ASME, apto para tanto líquido e gás de transporte de fluidos e transformação.";
        $descricaoproduto = $descricaopadrao;
    }
    ?>
    <?php $pagina = "produtos.php" ?>
    <?php include("layout/header.php"); ?>
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
                                            <img src="images/logovedax.png"alt="<?php echo $empresa; ?>" />
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
                                                <h1><?php echo $tituloproduto; ?></h1>
                                                <h2>FÁBRICA VEDAX</h2>
                                            </div>
                                            <div class="block clearfix">
                                                <?php echo $descricaoproduto; ?><br><br> 
                                            </div>
                                                        <?php
                                                        for($i=1;$i<=4;$i++){
                                                            $resultado = mysqli_query($conexao, "SELECT * FROM produto WHERE peca = $i");
                                                            $norma=mysqli_query($conexao, "SELECT DISTINCT(norma) from produto WHERE peca = $i");
                                                            $norma=mysqli_num_rows($norma);
                                                            $row = mysqli_fetch_array($norma);
                                                            $totalpeca = mysqli_num_rows($row);
                                                            $totaltabela = (int) $totalpeca / 4;
                                                            $resto = $totalpeca % 4;
                                                            for($j=1;$j<=$norma;$j++){
                                                                echo "<div class=\"block clearfix\">
                                                                        <table class=\"columns-3\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">     
                                                                            <tbody> ";
                                                                for($g=1;$g<=$totaltabela;$g++){
                                                                    echo "<tr>";
                                                                    for($h=1;$h<=4;$h++){
                                                                        $row = mysqli_fetch_array($resultado);
                                                                        $produto = htmlentities($row["nome"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        $bitola = htmlentities($row["bitola"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        $classe = htmlentities($row["classe"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        if ($classe == "") {
                                                                            $classe = "";
                                                                        } else {
                                                                            $classe = "Classe : $classe";
                                                                        }
                                                                        $img = htmlentities($row["img"], ENT_COMPAT, 'ISO-8859-1', true);
                                                                        echo "<td align=\"center\"  id=\"mouse\">
                                                                        <h3>$produto</h3>
                                                                            <div id=\"comentario\"> Bitola: $bitola </br> $classe </div>            
                                                                        <p><img src=\"images/produto/$img\" alt=\"\"></p>
                                                                    </td>";
                                                                    }echo"</tr>";
                                                                }
                                                                echo "</tbody></table></div>";
                                                            }
                                                        }
                                                        //echo"$tipopeca / $totaltabela / $resto</br>";
                                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INICIO FOOTER-->
            <?php include("layout/footer.php"); ?>
            <!-- FIM FOOTER-->
    </body>
</html>