<?php 

$pasta = "arquivos";
$permissao = "0775";

if(is_dir($pasta)) {
	/* 
	0 sem permissão
	1 permissão de excução
	2 permissão de gravação
	3 permissão de excução e execução
	4 somente leitura
	5 leitura e execução
	6 leitura e gravação
	7 permissão total
	*/
	mkdir($pasta, $permissão);
	echo "Diretório criado com sucesso!";
}