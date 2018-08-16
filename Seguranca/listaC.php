<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

	//Tratando o comando
	$cmd = escapeshellcmd($_POST["cmd"]);
	var_dump($cmd);
	echo "<pre>";

	$comando = system('dir c:', $retorno);

	echo "</pre>";

}
?>

<form method="post">
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>
