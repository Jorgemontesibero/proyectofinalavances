<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/paginaweb/class/usuario.php";
include_once($path);

$usuario = new Usuario();
$usuario->crearUsuario($_REQUEST);
header("Location: ../listadoUsuarios.php");
die();