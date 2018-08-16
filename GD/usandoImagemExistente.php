<?php 

$image = imagecreatefromjpeg('certificado.jpg');


$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, 'Certificado', $titleColor);
imagestring($image, 5, 440, 350, "Américo Luiz", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em " .date('d/m/Y') , $titleColor);

header("Content-type: image/jpeg");

//com os parametros vc baixa autmaticamente para o disco o próximo parametro é escala de qualidade de 0 a 100
imagejpeg($image,'certificado' . date('d/m/y').'jpg', 10);
imagedestroy($image);

 ?>