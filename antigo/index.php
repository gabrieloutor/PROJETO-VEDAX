<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <?php $titulo = "Página Inicial";
    $pagina = "index.php" ?>
<?php include("layout/header.php"); ?>
    <body class="com_content view-article task- itemid-101 body__">
        <a name="home"></a>
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
                                            <img src="images/logovedax.png" alt="<?php echo $empresa; ?>" />
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
                                                    <li class="item-101 current active">
                                                        <a href="#home">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="#empresa">Empresa</a>
                                                    </li>
                                                    <li>
                                                        <a href="produtos.php">Produtos</a>
                                                    </li>
                                                    <li>
                                                        <a href="servicos.php">Serviços</a>
                                                        <ul>
                                                            <li>
                                                                <a href="soldagem.php">Soldagem</a>
                                                            </li>
                                                            <li>
                                                                <a href="tratamentotermico.php">Tratamento Térmico</a>
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
                <a name="home"></a>
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
                                        $qtfoto = 3;
                                        for ($i = 1; $i <= $qtfoto; $i++) {
                                            echo "<img src=\"images/slide$i.jpg\" alt=\"Foto $i\" />";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <a name="empresa"></a>
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
                                        directionNav: true,
                                        // Next & Prev navigation
                                        controlNav: true,
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
                        <div class="content-inner row">
                            <div class="page-item page-item__">

                                    <div class="item_header">
                                        <h1>A VEDAX</h1>					
                                    </div>
                                    <div class="item_fulltext">
                                        <p><span style="font-size: 12pt;">A Vedax é uma empresa estabelecida no mercado desde 1975, especializada na fabricação de forjados, na linha de Flanges, Conexões tubulares e Forjados Especiais nos materiais Aço Liga, Inox e Carnono, obedecendo às especificações de normas nacionais e internacionais de fabricação.</span></p>
                                        <p><span style="font-size: 12pt;">Nossos rígidos padrões de controle de qualidade nos levaram à conformidade em todas as fases produtivas, desde a compra de matéria-prima, até ensaios de laboratórios, buscando certificar que todas as características do material estejam de acordo com as normas estipuladas.</span></p>
                                        <p><span style="font-size: 12pt;">Em decorrência de anos de experiência a Vedax adquiriu <i>know-how</i> no processo de forjamento e tratamento térmico de Anéis, Discos, Flanges e Conexões, com base nas normas ASME, API, DNV, entre outras. Esta capacidade foi conquistada graças à tecnologia investida em nossos processos de fabricação e capacitação de nossos funcionários. Isso possibilitou um grau de funcionamento adequado aos mais rigorosos requisitos, controlando - a cada etapa de fabricação - os pontos relevantes, o que garante produtos de excelente qualidade.</span></p>
                                        <p> </p>
                                    </div>
                                    <div class="finalempresa">
                                        A VEDAX AJUDANDO A CONSTRUIR O MAIOR SÍMBOLO BRASILEIRO<br><br></div>
                                    <div id="imgempresa">
                                        <?php
                                        $qtfoto = 2;
                                        for ($i = 1; $i <= $qtfoto; $i++) {
                                            echo "<img src=\"images/empresa$i.png\" alt=\"Foto $i\" /> ";
                                        }
                                        ?>
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
<?php mysqli_close($conexao)  ?>