<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <?php
    $titulo = "Fale Conosco";
    $pagina = "faleconosco.php"
    ?>
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
                                                    <li>
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
                                    <form method="post" action="contato.php">
                                        <label for="name" >Nome</label>
                                        <input type="text" placeholder="Seu Nome" name="nome" /><br><br>
                                        <label for="email" >E-mail</label>
                                        <input type="text" placeholder="email@exemplo.com.br" name="email" /><br><br>
                                        <label for="mensagem" >Mensagem</label>
                                        <textarea placeholder="Escreva sua mensagem" name="mensagem" ></textarea><br><br>
                                        <input type="submit" value="Enviar" />
                                    </form>
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