<?php 

$link = '';

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
//Escreve o arquivo no disco
fwrite($file, $content);

fclose($file);
?>


<img src="<?= $basename ?>">