<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/paginaweb/class/usuario.php";
include_once($path);


$usuario = new Usuario();

$usuario->eliminarUsuario($_GET["idUser"]);
header("Location: ../listadoUsuarios.php");
die();
