<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <?php echo $titulo="Localização"; $pagina="localizacao.php" ?>
    <?php include("header.php"); ?>
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
                                            <u>
                                                <?php echo $endereco; ?>
                                            </u>
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
        <?php include("footer.php"); ?>
        <!-- FIM FOOTER-->
    </body>

</html>