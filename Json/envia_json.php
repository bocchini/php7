<?php

//Crio um array para envio das informações
$pessoas = array();

array_push($pessoas,array(
		'nome' => 'João',
		'idade'=> 20,

	));

array_push($pessoas,array(
		'nome'=>'Glaucio',
		'idade'=>25,
	));

echo json_encode($pessoas);

?>