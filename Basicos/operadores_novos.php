<?php

$a = 24;
$b = 20;

echo ("space ship, ele vai mostrar 1 para maior, -1 para menor ou igual <br>");
var_dump($a <=> $b);

echo "<br> Condicional nullo <br>";
$c = null;
$d = null;

//Mostra o c, se for nullo, mostra o d se for nulo mostra o a
echo $c ?? $d ?? $a;

?>