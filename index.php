<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario");
echo json_encode($usuarios);*/

/*//Carrega um usuário
$root = new Usuario();
$root->loadById(2);
echo $root;*/

/*//Carrega lista de usuários pelo ID
$lista = Usuario::getList();
echo json_encode($lista);*/

/*//Carrega uma lista de usuarios buscando por login
$search = Usuario::search("i");
echo json_encode($search);*/

//Carregar usuários usando login e senha
$usuario = new Usuario();
$usuario->login("Ademir", "Ademir22");

echo $usuario;

 ?>