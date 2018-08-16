<?php

$empresa = "Pages Digital";

//str_replace = primeiro parametro o que será trocado, segundo parametro pelo que? terceiro em que lugar
$empresa = str_replace("a", "0", $empresa);

echo "$empresa<br>";



$palavraProcurada = "mãe";
$frase = "A repetição é a mãe da repetição";
$indiceDaPalavraAchada = strpos($frase, $palavraProcurada );

$texto = substr($frase, 0, $indiceDaPalavraAchada);

$texto2 = substr($frase, $indiceDaPalavraAchada + strlen($palavraProcurada),strlen($frase));

echo "$texto2";
?>