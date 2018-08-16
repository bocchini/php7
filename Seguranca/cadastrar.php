<?php
/*
	Google Recapcha
	https://www.google.com/recaptcha
*/
$email = $_POST["inputEmail"];
$secret = "6LeLI2oUAAAAADCQnBRK3Gmbll1sdarMLic_V92C";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL , 'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	'secret' => $secret,
	'response' => $_POST['g-recaptcha-response'],
	//Preciso passar o ip do servidor
	'remoteip' => $_SERVER['REMOTE_ADDR']
)));

//Retorno da resposta google
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Retorna um array
$recaptcha = json_decode(curl_exec($ch), true);
curl_close($ch);

if ($recaptcha["success"] === true){
	echo "OK: " . $email;
}else {
    header("Location: recapcha.php");
}

