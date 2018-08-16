<?php 

require_once('config.php');

//vejo que está logado na sessão
echo $_SESSION['nome'];

//removo a sessão
session_unset($_SESSION['nome']);
 ?>