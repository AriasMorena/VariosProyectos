<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct ($nom, $ape, $fec) {
        $this -> nombre = $nom;
        $this -> apellido = $ape;
        $this -> fecha_nacimiento = $fec;
    }
    private function calcular_edad() {
        date_default_timezone_set("America/Argentina/San_Luis");
        
    $fechaActual = date("d-m-Y");                       
    
    $calculo = strtotime($fechaActual) - strtotime($this->fecha_nacimiento);
    $edadActual = intval($calculo/31536000);
    
        return $edadActual;

    }
    public function imprime_caracteristicas() {
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Apellido: ".$this->apellido."</p>";
    
        $edadUsuario = $this-> calcular_edad();
        echo ("<p>Edad: ".$edadUsuario." años</p>");

    }
}
?>