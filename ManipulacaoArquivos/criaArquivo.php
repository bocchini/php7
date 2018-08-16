<?php 

//Cria o aquivo e escreve w+ cria o arquivo e apaga o conteúdo - a+ adiciona o conteúdo
$file = fopen('log.txt', 'a+');

fwrite($file, date('Y-m-d H:i:s') . "\r\n");
fclose($file);
echo "Arquivo criado com sucesso!";
 ?>