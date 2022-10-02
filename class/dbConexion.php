<?php

class DBConexion{

    public $servidor = "localhost";
    public $usuario = "root";
    public $password = "";
    public $pdo;
    public $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
    ];

    
    function __construct(){
    
        try {
              $this->pdo = new PDO("mysql:host = $this->servidor ;dbname=pagina_db", $this->usuario, $this->password, $this->options);      
              //echo "Conexión realizada Satisfactoriamente";
        } catch(PDOException $e) {
            echo "La conexión ha fallado: " . $e->getMessage();
        }

    }

    public function realizarConexion() {
        if ($this->pdo instanceof PDO) {
            return $this->pdo;
        }
    }
    
   



}