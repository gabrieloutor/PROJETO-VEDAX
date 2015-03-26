<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br" dir="ltr" >
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="UTF-8">
            <title>Administração | Vedax Equipamentos Hidráulicos Ltda</title>
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
            <link rel="stylesheet" href="css/chosen.css" type="text/css" />
            <link rel="stylesheet" href="css/template.css" type="text/css" />
            <style type="text/css">
                html { display:none }
            </style>
            <!-- FIM CSS -->
            <!-- INICIO JAVASCRIPT -->
            
            <!-- FIM JAVASCRIPT -->
            <script src="js/mootools-core.js" type="text/javascript"></script>
            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script src="js/jquery-noconflict.js" type="text/javascript"></script>
            <script src="js/jquery-migrate.min.js" type="text/javascript"></script>
            <script src="js/core.js" type="text/javascript"></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jQuery(function () {
                    if (top == self) {
                        document.documentElement.style.display = 'block';
                    } else {
                        top.location = self.location;
                    }
                });
                window.setInterval(function () {
                    var r;
                    try {
                        r = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP")
                    } catch (e) {
                    }
                    if (r) {
                        r.open("GET", "./", true);
                        r.send(null)
                    }
                }, 840000);
                jQuery(document).ready(function () {
                    jQuery('.hasTooltip').tooltip({"html": true, "container": "body"});
                });

                jQuery(document).ready(function () {
                    jQuery('.advancedSelect').chosen({"disable_search_threshold": 10, "allow_single_deselect": true, "placeholder_text_multiple": "Selecione alguma op\u00e7\u00e3o", "placeholder_text_single": "Selecione uma op\u00e7\u00e3o", "no_results_text": "Sem resultados correspondentes"});
                });

            </script>
            <script type="text/javascript">
                jQuery(function ($) {
                    $("#form-login input[name='username']").focus();
                });
            </script>
            <style type="text/css">
                /* Responsive Styles */
                @media (max-width: 480px) {
                    .view-login .container {
                        margin-top: -170px;
                    }
                    .btn {
                        font-size: 13px;
                        padding: 4px 10px 4px;
                    }
                }
            </style>
            <!--[if lt IE 9]>
                    <script src="../media/jui/js/html5.js"></script>
            <![endif]-->
    </head>

    <body class="site com_login view-login layout-default task- itemid- ">
        <!-- Container -->
        <div class="container">
            <div id="content">
                <!-- Begin Content -->
                <div id="element-box" class="login well">
                    <img src="images/logovedax.png" alt="Vedax" />
                    <hr />
                    <div id="system-message-container">
                    </div>
                    <form action="admin.php" method="post" id="form-login" class="form-inline">
                        <fieldset class="loginform">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend input-append">
                                        <span class="add-on">
                                            <i class="icon-user hasTooltip" title="Nome de Usuário"></i>
                                            <label for="mod-login-username" class="element-invisible">
                                                Nome de Usuário						</label>
                                        </span>
                                        <input name="username" tabindex="1" id="mod-login-username" type="text" class="input-medium" placeholder="Nome de Usuário" size="15"/>
                                        <a href="http://zapt.net/vedax/index.php?option=com_users&view=remind" class="btn width-auto hasTooltip" title="Esqueceu seu nome de usuário?">
                                            <i class="icon-help"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend input-append">
                                        <span class="add-on">
                                            <i class="icon-lock hasTooltip" title="Senha"></i>
                                            <label for="mod-login-password" class="element-invisible">
                                                Senha						</label>
                                        </span>
                                        <input name="passwd" tabindex="2" id="mod-login-password" type="password" class="input-medium" placeholder="Senha" size="15"/>
                                        <a href="http://zapt.net/vedax/index.php?option=com_users&view=reset" class="btn width-auto hasTooltip" title="Esqueceu sua senha?">
                                            <i class="icon-help"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-comment hasTooltip" title="Idioma"></i>
                                            <label for="lang" class="element-invisible">
                                                Idioma							</label>
                                        </span>
                                        <select id="lang" name="lang"  class="advancedSelect">
                                            <option value="" selected="selected">Idioma - Padrão</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="btn-group pull-left">
                                        <button tabindex="3" class="btn btn-primary btn-large">
                                            <i class="icon-lock icon-white"></i> Acessar</button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="option" value="com_login"/>
                            <input type="hidden" name="task" value="login"/>
                            <input type="hidden" name="return" value="aW5kZXgucGhw"/>
                            <input type="hidden" name="d131c61bc03568915bf6ba1b89054498" value="1" />	</fieldset>
                    </form>

                </div>
                <!-- End Content -->
            </div>
        </div>
        <div class="navbar navbar-fixed-bottom hidden-phone">
            <p class="pull-right">
                &copy; 2015 VEDAX		</p>
            <a href="index.php" target="_blank" class="pull-left"><i class="icon-share icon-white"></i> Ir para página inicial do site.</a>
        </div>

    </body>
</html>