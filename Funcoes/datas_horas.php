<?php 
echo date("d/m/Y  H:i:s") . ('<br>');

echo time();
echo "<br>";


//Passo uma data padrão en
$ts = strtotime("2001-09-11");

//formato para br
echo date("l, d/m/Y",$ts);

?>