<?php

function trataNome($nome)
{
	if (!$nome) {
		throw new Exception('Nenhum nome informado' . '<br>', 1);
		
	}

	echo ucfirst($nome) . "<br>";
}

try {
	trataNome("João");
	trataNome('');
} catch (Exception $e) {
	echo $e->getMessage();
} finally{
	echo "Executou try";
}
?>