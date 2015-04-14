<?php

/* exemplo foreach 1: somente valores */



$a = array(1, 2, 3, 17);



foreach ($a as $v) {


echo "Valor atual de \$a: $v.\n </br>";

}

/* exemplo foreach 2: valores (com a sua notação de chave de acesso mostrado
para ilustração) */

$a = array(1, 2, 3, 17);

$i = 0; /* para exemplo somente */

foreach ($a as $v) {

echo "\$a[$i] => $v.\n s</br>";


$i++; 

}

/* exemplo foreach 3: chaves e valores */

$a = array (


"um" => 1,


"dois" => 2,


"três" => 3,


"dezessete" => 17

);



foreach ($a as $k => $v) {


echo "\$a[$k] => $v.\n </br>";

}


/* exemplo foreach 4: arrays multidimensionais */



$a = array();

$a[0][0] = "a";

$a[0][1] = "b";

$a[1][0] = "y";

$a[1][1] = "z";



foreach ($a as $v1) {


foreach ($v1 as $v2) { 


echo "$v2\n </br>";


} 

}

/* exemplo foreach 5: arrays dinâmicos */



foreach (array(1, 2, 3, 4, 5) as $v) {


echo "$v\n </br>";

}

?>