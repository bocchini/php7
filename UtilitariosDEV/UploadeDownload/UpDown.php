<?php 	

/**
 * 
 */
class UpDown
{

	public function download($link, $nomeArquivo)
	{
		//Conteúdo bruto 
		$content = file_get_contents($link);
		//Transforma o conteúdo em um arquivo real na variável está todas as informações do arquivo 
		$parse = parse_url($link);
		//Passo o path para o download
		$basename = basename($parse["path"]);

		//"Organiza" o arquivo , adiciono no nome do arquivo 
		$file = fopen( $nomeArquivo . $basename, "w+");
		//Salva o arquivo no disco
		fwrite($file, $content);
		fclose($file);
	}
}

?>