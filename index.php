<?php

require_once ("config.php");


// Carrega um usuario

//$root =new Usuario();

//$root -> loadByID(5);

//echo $root;


// Carrega uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("E");

//echo json_encode($search);


//Carrega um usuario usando o login e senha

// $usuario = new Usuario();

// $usuario->login("user", "12345");

// echo $usuario;


//Criando um novo Usuario
//$aluno =new Usuario("aluno2","@lun02");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;

// Alterar um usuario

//$usuario = new Usuario();

//$usuario->loadByID(8);

//$usuario->update("professor", "fdsafdsa");

//echo $usuario;

//Apagar um usuario

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;


/*
$sql = new Sql();

 $usuarios =$sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */



?>