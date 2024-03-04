<?php 
session_start();
date_default_timezone_set("America/Argentina/San_Luis");
$day = $_POST ['day'];
$month = $_POST ['month'];
$year = $_POST ['year'];

$evento = date("$day-$month-$year");
$fechaActual = date("d-m-Y");                       

$calculo = strtotime($fechaActual) - strtotime($evento);
$faltante = intval($calculo/86400);

header("Location: ../unidad2.php?dias=$faltante");
?>