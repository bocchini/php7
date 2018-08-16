<?php 

//Crio o arquivo
$flie = fopen("texte.txt", "w+");

fclose($flie);

unlink("texte.txt");

 ?>