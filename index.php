<?php 

require_once("config.php");

// Antes fazia assim
//$sql = new Sql();

//$usuarios = $sql->select("select * from tb_usuarios ");

//echo json_encode($usuarios);

//Agora faz desse jeito

$variavel = new Usuario();

$variavel ->loadById(1);

echo $variavel;



?>