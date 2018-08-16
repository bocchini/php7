<?php 
//passa um array de int
function soma(int ...$valores)
{
	return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(115,3,2);
echo "<br>";

//O retorno será em string
function soma2(int ...$valores):string
{
	return array_sum($valores);
}

var_dump(soma2(2,5));
?>