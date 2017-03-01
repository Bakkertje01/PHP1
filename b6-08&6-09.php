<?php

/* 
 *  Filename   :
 *  Assignment :
 *  Created    :
 *  Desription :
 *  Programmer :
 */


// put your code here
$datum = "14062016";
$dag = round($datum/1000000);
$maand = round($datum % 100000 / 10000);
$jaar = ($datum % 10000);

//modulo pakt achterste getallen, delen door de voorste

echo $dag."-".$maand."-".$jaar;

//$jaar

?>