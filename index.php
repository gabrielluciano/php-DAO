<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// Carrega um usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$123");
//echo $usuario;

// Insere um novo usuário
// $aluno = new Usuario();
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@luno");
// $aluno->insert();
// echo $aluno;

// Altera um usuário
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->update("professor", "!@#$");
// echo $usuario;

// Deleta um usuário

$usuario = new Usuario();

$usuario->loadById(7);
$usuario->delete();

echo $usuario;



?>