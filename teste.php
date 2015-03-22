<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>The Walking Dead</title>    
    <style type="text/css">
#exemplo{
 width:90%;
 height:auto;
 padding:10px;
 background:#d3d3d3;
 position:relative;
}
#mouse {
 width:200px;
 height:100px;
 font-size:16px;
 background:#abcdef;
 position: relative;
 top: 5px;
 left:50px;
 line-height:100px;
}
#comentario {
 position:relative; top:-80px;
 left:170px;
 padding:2px;
 line-height:20px;
 background:#333;
 color:#fff;
 display: block;
 width:120px;
 opacity: 0;

        -webkit-transition: all 300ms ease;
 -moz-transition: all 300ms ease;
 -ms-transition: all 300ms ease;
 -o-transition: all 300ms ease;
 transition: all 300ms ease;
}
#mouse:hover  #comentario{
      opacity: 1;
}
    </style>
</head>

     <body>

<div id="exemplo">
 <div id="mouse"> Passe o mouse aqui!
         <div id="comentario"> Esse é um comentário. </div>
   </div>
</div>
     </body>

</html>