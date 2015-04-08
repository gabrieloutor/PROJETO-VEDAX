<?php
$login =  getenv("LOGINDB");
$senha =  getenv("SENHADB");
$nome =  getenv("NOMEDB");
$url =  getenv("URLDB");
$conexao = mysqli_connect($url,$login,$senha,$nome);
  // tratamento de erros
  if (mysqli_connect_errno())
  {
      echo "Não foi possível conectar: " . mysqli_connect_error();
  }
  ?>