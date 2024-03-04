<?php
class Producto {
    public $base;

    public $codigo;
    public $producto;
    public $descripcion;
    public $precio;
    
    function __construct($conexion) {
        $this -> base = $conexion;
    }
    public function listar_productos() {    
        $sql = $this-> base -> ejecutarsql("SELECT * FROM productos");
        return $sql;
    }  
}
?>