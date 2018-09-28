<?php 

require_once("config.php");

// Antes fazia assim
//$sql = new Sql();

//$usuarios = $sql->select("select * from tb_usuarios ");

//echo json_encode($usuarios);

//Agora faz desse jeito

/*Carrega apenas um usuario
$variavel = new Usuario();
$variavel ->loadById(1);
echo $variavel;
*/

/*
// Carrega uma lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);
*/

/*
//carrega uma lista de usuarios pelo login
$search = Usuario::search("jo");

echo json_encode($search);
*/

/*
//Carrega o usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("jose", "123");
echo $usuario;
*/

/*
//INSERE NO BANCO COM PROCEDURE E RETORNA OS VALORES
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@luno");
$aluno->insert();
echo $aluno;
*/

/*ISERT um novo usuario
$aluno1 = new Usuario("luizinho","@luno1");
$aluno1->insert();
echo $aluno1;
*/

/* //Alterar o usuario
$usuario = new Usuario();
$usuario->loadById(2);
$usuario->update("professor", "!@#$%*");

echo $usuario;
*/

//Deletar um usuario
$usuario = new Usuario();
$usuario->loadById(2);
$usuario->delete();
echo $usuario;
	

?>