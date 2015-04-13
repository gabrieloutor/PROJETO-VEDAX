<?php require "config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <?php $titulo="Fale Conosco"; $pagina="faleconosco.php" ?>
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
        <?php include("footer.php"); ?>
        <!-- FIM FOOTER-->
    </body>

</html>