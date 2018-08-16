<?php 

$image = imagecreatefromjpeg('certificado.jpg');


$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//Array com os nomes e caminhos das Fontes
$font = array("Bevan"=>__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR. "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf",
"Playball"=>__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf");


//0 é o angulo da fonte e caminho da fonte
imagettftext($image, 32, 0, 320, 250, $titleColor, $font['Bevan'], 'Certificado');
imagettftext($image, 32, 0, 375, 350, $titleColor, $font['Playball'], 'Américo ');
imagestring($image, 3, 440, 370, "Concluido em " .date('d/m/Y') , $titleColor);

header("Content-type: image/jpeg");

//com os parametros vc baixa autmaticamente para o disco o próximo parametro é escala de qualidade de 0 a 100
imagejpeg($image);
imagedestroy($image);

 ?>