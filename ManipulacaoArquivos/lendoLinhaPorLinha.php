<?php 
//Lê um arquivo e retorna linha, coluna organizado
$filename = 'usuarios.csv';

if(file_exists($filename)){

	$file = fopen($filename, 'r');
	
	//Pega o cabeçario do arquivo
	$hearders = explode(",", fgets($file));
	//Array do retorno organizado linha coluna
	$data = array();

	//Vai ler linha por linha
	while ( $row = fgets($file)) {
		$rowData = (explode(',', $row));
		$linha = array();
		//Organiza chave valor
		for($i = 0; $i < count($hearders); $i++){
			$linha[$hearders[$i]] = $rowData[$i];
		}

		array_push($data, $linha);
	}
	fclose($file);
}else{

	echo "Arquivo não encontrado!";
}

	echo json_encode($data);

 ?>

