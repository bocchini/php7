<?php  

require_once('config.php');

$sql = new Sql();
$usuarios = $sql->select('SELECT * FROM tb_usuarios ORDER BY deslogin');

$headers = array();
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");
//Primeiro foreach é para as linhas que vieram do banco
foreach ($usuarios as $row) {
	$data = array();
	//Este foreach para as colunas que vieram do banco
	foreach ($row as $key => $value) {
		array_push($data, $value);
	}

	fwrite($file, implode(",", $data). "\r\n");
}

fclose($file);
?>