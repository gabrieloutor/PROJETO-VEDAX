<?php require "../config/config.ini"; ?>
<!DOCTYPE html>
<html>
    <?php $titulo = "Página Inicial";
    $pagina = "index.php"
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $descricao; ?>">
        <meta name="keywords" content="vedax,aço,conexões,flanges,forjados,carbono,empresa,produtos">
        <meta name="author" content="<?php echo $nomedesenvolvedor; ?>">
        <title><?php echo $titulo; ?> | <?php echo $empresa; ?></title>
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
        <link rel="icon" href="images/icons/favicon.ico" >
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- FIM FAVICON -->
        <!-- INICIO CSS -->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
        <link rel="stylesheet" href="css/tmpl.default.css" type="text/css" >
        <link rel="stylesheet" href="css/nivo-slider.min.css" type="text/css" >
        <link rel="stylesheet" href="css/default.css" type="text/css" >
        <link rel="stylesheet" href="css/media.1280.css" type="text/css" >
        <link rel="stylesheet" href="css/media.1024.css" type="text/css" >
        <link rel="stylesheet" href="css/media.980.css" type="text/css" >
        <link rel="stylesheet" href="css/media.768.css" type="text/css" >
        <link rel="stylesheet" href="css/media.480.css" type="text/css" >
        <link rel="stylesheet" href="css/ext.default.css" type="text/css" >
        <link rel="stylesheet" href="css/ext.asmenu.css" type="text/css" >
        <link rel="stylesheet" href="css/ext.artslider.css" type="text/css" >
        <style type="text/css">
            form{
                font-size: 13px;
                font-family: arial, Tahoma, sans-serif;
            }
            h2 {
                margin-bottom: 20px;
                color: #133141;
            }
            input, textarea {
                padding: 10px;
                border: 1px solid #E5E5E5;
                width: 200px;
                color: #999999;
                box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
                -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
                -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
            }
            textarea {
                width: 400px;
                height: 150px;
                max-width: 400px;
                line-height: 18px;
            }
            input:hover, textarea:hover,
            input:focus, textarea:focus {
                border-color: 1px solid #C9C9C9;
                box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
                -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
                -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;     
            }
            .form label {
                margin-bottom: 10px;
                color: #999999;
                display: block;
            }
            input[type="submit"] {
                width: 100px;
                height: 40px;
                background-color: #133141;
                color: #FFF;
                border-radius: 3px;
                moz-border-radius: 3px;
                -webkit-border-radius: 3px;                     
            }
            table {
                width:100%;
            }
            table tr{
                text-align: center;
            }
            table tr td{
                font-size:16px;
                position: relative;
            }
            #face{
                display:inline-table;
            }
            #mouse {
                font-size:16px;
                position: relative;
            }
            #comentario {
                position:relative;
                padding:2px;
                background:#333;
                color:#fff;
                display: block;
                width:auto;
                opacity: 0;
                -webkit-transition: all 300ms ease;
                -moz-transition: all 300ms ease;
                -ms-transition: all 300ms ease;
                -o-transition: all 300ms ease;
                transition: all 300ms ease;
                text-align:center;
            }
            #mouse:hover  #comentario{
                opacity: 0.7;
            }
            .item_fulltext
            {
                text-align:justify;
                text-indent:20px

            }
            .finalempresa
            {
                font-size:28px;
                text-align: center;
                font-family: 'BellGothicStdBlack';
                font-weight:bold;
                line-height:100%;
                color:#0D3B97;/*#FF9966*/
            }
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
                font: 44px 'Frutiger47CondensedLight';
                text-align: center;
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
    </head>
    <body>
        <nav>
        <ul>
<li><a href="#">Home</a></li> 
<li><a href="#">Tutoriais CSS</a></li> 
<li><a href="#">Normas XHTML do W3C</a></li> 
<li><a href="#">Posicionamento CSS</a></li> 
<li><a href="#">Contato</a></li> 
</ul>
        </nav>
    </body>
</html>