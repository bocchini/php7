<?php

//para visualizar os erros comente o header

header("Content-Type: image/png");

//Largue e altura da tela
$image = imagecreate(256,256);

//Paleta de cores a primeira cor que vc cria vira cor de fundo padrão rgb
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//tamanho da fonte de 1 a 5, proximo é o deslocamento margin esquerda 60, 120 margin topo 
imagestring($image, 5, 60, 120, 'Curso php 7', $red );
imagepng($image);

//Liberar memóra
imagedestroy($image);
?>