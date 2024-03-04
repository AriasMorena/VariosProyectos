<?php
include("conexion.php");

$usuario = $_POST['email'];
$contrasenia = $_POST['pass'];

$resultado = $verificar -> verificar($_POST['email']);
$incriptada = mysqli_fetch_assoc($resultado);
$valida = password_verify($contrasenia, $incriptada['pass']);

if ($valida) {
   header("Location: ../unidad8.php?INGRESO");
} else {
   header("Location: ../unidad8.php");
}
?>