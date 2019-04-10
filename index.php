<?php 

require_once('class/config.php');

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM entradas");
// echo json_encode($usuarios);

$usuario = new Usuario();

$usuario->loadById(66);

echo $usuario;

 ?>