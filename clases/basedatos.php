<?php
class Base {
    private $conexion;
    function __construct($serv, $usua, $pass, $base) {
        $this-> conexion = new mysqli ($serv, $usua, $pass, $base);
    }
    public function ejecutarsql($codigo) {
        $instrSQL = strtoupper(substr($codigo, 0,6));

        switch ($instrSQL) {
            case 'INSERT':
            case 'UPDATE':
            case 'DELETE':
        $verSQL = $this-> conexion -> query($codigo);
        break;
            case 'SELECT':
        $verSQL = $this-> conexion -> query($codigo);
        $mostrarProd = [];
        while ($listarProd = $verSQL-> fetch_assoc()) {
            $mostrarProd [] = $listarProd;
        }
        return $mostrarProd;
        break; }
    } 
}
?>