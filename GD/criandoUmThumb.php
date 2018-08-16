<?php 

header("Content-type: image/jpeg");
$file = 'wallpaper.jpg';

$new_width = 256;
$new_height = 256;


list($old_width, $old_height) = getimagesize($file);

//Deste jeito é criado em 16 milhoes de cores
$new_image = imagecreatetruecolor($new_width, $new_height);

$old_image = imagecreatefromjpeg($file);

// Os parametros 0,0 da ondem começa o recorte tanto na imagem destino (2 primeiros parametros), e 00 na imagem de origem, próximos parametros largura da imagem destino e depois altura, próximos largura e altura da origem
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width,$new_height, $old_width, $old_height);

imagejpeg($new_image);

//Depois limpar as duas imagens da memória
imagedestroy($new_image);
imagedestroy($old_image);

?>