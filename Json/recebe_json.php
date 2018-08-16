<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

//Sem o true vira objeto, com true vira array
$data = json_decode($json,true);


var_dump($data);
 ?>