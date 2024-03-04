<?php
class Verificar {
    public $base;

    public $usuario;
    public $contrasenia;

    function __construct($conexion) {
        $this -> base = $conexion;
    }
    public function verificar($usuario) {    
        $SQL = $this-> base -> ejecutarsql("SELECT pass FROM registro WHERE email = '$usuario'");
        return $SQL;
    }
}
?>