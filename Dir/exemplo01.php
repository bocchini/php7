<?php 

$name = "images";
//Verifico se o diretório existe
if(!is_dir($name))
{
	//Crio o diretorio
	mkdir($name);
	echo "Diretório criado com sucesso!";
}else
{
	rmdir($name);
	echo "Já existe o diretório: $name , foi removido";
}


?>