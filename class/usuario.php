<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/paginaweb/class/dbConexion.php";
include_once($path);

class Usuario {

    public $nombre;
    public $apellido;
    public $email;
    public $direccion;
    public $telefono;
    public $dbConexion;


    function __construct(){
        $dbPDO= new DBConexion();
        $this->dbConexion = $dbPDO->realizarConexion();
    }

    public function crearUsuario($data){
        $sql = "INSERT INTO usuario (nombre, apellido, direccion, telefono, email) VALUES (:nombre, :apellido, :direccion, :telefono, :email)";
        $this->dbConexion
        ->prepare($sql)
        ->execute($data);
    }

    public function obtenerUsuarios(){

        $sql = "SELECT * FROM usuario";
        $usuarios = $this->dbConexion->query($sql);
        return $usuarios->fetchAll();

    }

    public function obtenerUsuarioPorId($usuarioId){

        $sql = "SELECT * FROM usuario WHERE id = $usuarioId LIMIT 1";
        $usuarios = $this->dbConexion->query($sql);
        return $usuarios->fetch();

    }

    public function actualizarUsuario($datosUsuario){
        $sql = "UPDATE usuario SET nombre ='".$datosUsuario["nombre"]."', apellido ='".$datosUsuario["apellido"]."', direccion ='".$datosUsuario["direccion"]."', telefono ='".$datosUsuario["telefono"]."', email ='".$datosUsuario["email"]."' WHERE id = ".$datosUsuario["idUsuario"];
        $this->dbConexion->query($sql);
    }

    public function eliminarUsuario($usuarioId){
        $sql = "DELETE FROM usuario WHERE id = $usuarioId";
        $this->dbConexion->query($sql);
    }

}
