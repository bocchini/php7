<?php 
$images = scandir("images");

$data = array();

foreach ($images as $img) {
	//Procuro se a extenensão tem img
	if (!in_array($img, array(".",". ."))) {
		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		//Vejo o tamanho do arquivo
		$info['size'] = filesize($filename);
		//Data de modificação
		$info['modified'] = date('d/m/Y H:i:s',filemtime($filename));

		$info['url'] = 'http://localhost/php7Curso/Dir/' .str_replace("\\","/", $filename);
		array_push($data, $info);
	}
}

echo json_encode($data);
 ?>