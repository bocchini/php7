<?php 

$dir1 = 'folder_01';
$dir2 = 'folder_02';

//Verifico se os diretorios existem se não existir crio
if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "Readme.txt";

//Verifico se o arquivo existe e crio o arquivo
if(!file_exists($dir1 . DIRECTORY_SEPARATOR .$filename)){
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename , 'w+');
	//Escrevo a data do sistema no arquivo
	fwrite($file, date("Y-m-d H:i:s"));
	fclose($file);
}

//Move o arquivo para a pasta folder2 e poderia ser renomeado
rename(
	$dir1 . DIRECTORY_SEPARATOR . $filename , //Origem
	$dir2 . DIRECTORY_SEPARATOR . $filename //Destino
);
echo('Arquivo movido');

 ?>