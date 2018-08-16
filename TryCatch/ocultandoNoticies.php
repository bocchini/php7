<?php

//Oculta o erro Notice por falta de parametros
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>