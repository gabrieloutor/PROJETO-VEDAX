<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <?php $titulo = "Empresa";
    $pagina = "empresa.php" ?>
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
                                                    <li>
                                                        <a href="index.php">Home</a>

                                                    </li>
                                                    <li class="current active">
                                                        <a href="empresa.php">Empresa</a>

                                                    </li>
                                                    <li>
                                                        <a href="produtos.php">Produtos</a>
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
                <!-- FIM HEADER-->
                <div id="content-row">
                    <div class="container">
                        <div class="content-inner-row">
                            <div id="component" class="span12">
                                <div id="system-message-container">
                                </div>
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
        </div>
        <!-- INICIO FOOTER-->
<?php include("layout/footer.php"); ?>
        <!-- FIM FOOTER-->
    </body>

</html>
<?php mysqli_close($conexao)  ?>