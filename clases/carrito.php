<?php 
class Carrito {
    public $base;

    function __construct($conexion) {
        $this-> base = $conexion;
    }
    public function introducir_compra($codigo, $producto, $descripcion, $precio) {
        $sql = $this-> base -> ejecutarsql("INSERT INTO compras VALUES (DEFAULT, '$codigo', '$producto', '$descripcion', $precio)");
        return $sql;
    }
    public function eliminar_compra($codigo) {
        $sql = $this-> base -> ejecutarsql("DELETE FROM compras WHERE codigo = $codigo");
        return $sql; 
    }
    public function listar_compra() {
        $sql = $this-> base -> ejecutarsql("SELECT * FROM compras");
        return $sql;
    }
}
?>