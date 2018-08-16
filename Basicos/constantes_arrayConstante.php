<?php
//Constante simples
define('SERVIDOR','127.0.0.1');

echo (SERVIDOR);

echo "<br>";
//PHP7 é possível usar um array constante
define("BANCO_DE_DADOS",[
	'127.0.0.1',
	'root',
	'password',
	'teste',

]);

print_r(BANCO_DE_DADOS);


?>