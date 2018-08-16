<?php

//Mês
$meses = array(
	'Janeiro' , 'Fevereiro', 'março',
	'Abril' , 'Maio' ,'Junho' ,
	'Julho' , 'Agosto' , 'Setembro',
	'Outubro' , 'Novembro' , 'Dezembro'
	 );
echo "<select>";
foreach ($meses as $index => $mes) {
	echo '<option value="' . ++$index . '">' . $mes . '</option>';
}

echo "</select>";

//Combo com o ano 100 anos
echo "<select>";
for ($i=date("Y"); $i >= date("Y") -100 ; $i--) { 
 	echo '<option value="' . $i . '">' . $i . '</option>';
}

echo "</select>";
?>