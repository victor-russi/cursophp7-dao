<?php

require_once("config.php");


//carrega 1 usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!$@#");
//echo $usuario;


//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(1);

$usuario->update("atualizedd", "!@#$%&*");

echo $usuario;


?>