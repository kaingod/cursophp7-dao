<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario");
echo json_encode($usuarios);*/

$root = new Usuario();

$root->loadById(2);

/*if ($root = NULL) {
	echo "Sem dados para retornar.";
}
*/
echo $root;


 ?>