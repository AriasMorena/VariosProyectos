<?php
include("conexion.php");

$contrasenia = password_hash($_POST['pass'], PASSWORD_DEFAULT, array('cost' => 4));
$cargar -> cargar ($_POST['email'], $contrasenia);

header("Location: ../unidad8.php?REGISTRADO");
?>