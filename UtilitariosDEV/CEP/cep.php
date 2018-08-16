<?php 

/**
 * Busca por cep e retorna 
 */
class cep 
{
	//Retorna ARRAY com endereço
	public function buscaPorCep($cep)
	{
		$link = "https://viacep.com.br/ws/$cep/json/";

		$ch = curl_init($link);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$response = curl_exec($ch);
		curl_close($ch);

		return json_decode($response,true);
	}

}
 ?>