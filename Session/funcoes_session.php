<?php
require_once('config.php');

echo session_save_path();
echo "<br>";

//session_status retorna um int
switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo("As sessões estão disabilitadas");
		break;
	case PHP_SESSION_NAME:
		echo("Se há sessões habilitadas, mas não existem");
		break;
	case PHP_SESSION_ACTIVE:
		echo("Se há sessões habilitadas, e uma exista");
		break;
}

?>