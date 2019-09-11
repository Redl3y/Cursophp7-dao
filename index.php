<?php     

require_once("config.php");
//Carrega um usuario
//$jose = new Usuario();
//$jose->loadbyId(2);
//echo $jose;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("red","1234567");

//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@alun0");

$aluno->insert();

echo $aluno;

*/

$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("professor", "!@#$%");

echo $usuario;
?>