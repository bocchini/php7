<?php 
$nome = "Glaucio";


function teste(){
	//variável $nome não pertence no escopo
	echo $nome;
}

function teste1()
{
	// usa a variável $nome como global
	global $nome;
	echo $nome;
}

function teste2(){
	//variável local da função
	$nome = "João";
	echo $nome;
}

teste1();

 ?>