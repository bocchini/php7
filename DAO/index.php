<?php 
require_once("config.php");


/*Carrega um usuário
$root = new Usuario();
$root->loadById(1);
echo $root;
*/

/*Carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);*/


/*Carrega uma lista de usuários buscando pelo login
$search = Usuario::search('ro');
echo json_encode($search);*/

/*Carrega o usuário pelo login ou senha
$usuario = new Usuario();
$usuario->login('root','root');

echo $usuario;*/

/*Insert o usuário
$aluno = new Usuario('aluno', 'aluno12');
$aluno->insert();
$result = $aluno->search($aluno-> getoDeslogin());
echo json_encode($result);
*/
/*Update
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->update('professor','123professor123');

echo $usuario;*/

//Delete
$usuario = new Usuario();
$usuario->loadById(2);
$usuario->delete();
echo $usuario;
?>