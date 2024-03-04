<?php
class Cargar {
    public $base;

    public $usuario;
    public $contrasenia;

    function __construct($conexion) {
        $this -> base = $conexion;
    }
    public function cargar($usuario, $contrasenia) {    
        $sql = $this-> base -> ejecutarsql("INSERT INTO registro VALUES('$usuario', '$contrasenia')");
        return $sql;
    }
}
?>