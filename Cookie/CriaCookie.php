<?php 

$data = array(
	"empresa"=>"Hcode treinamentos",
);
setcookie("nome_do_cookie",json_encode($data),time() + 3600);


echo "Ok cookie criado";
 ?>