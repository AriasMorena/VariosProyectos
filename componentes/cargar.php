<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];
$codigo = $_POST['codigo'];

if ($codigo == $_SESSION['captcha']) {
    $conexion = mysqli_connect('localhost', 'root', '', 'phpavanzado') or exit ('no se pudo conectar a la base');
    mysqli_query($conexion, "INSERT INTO consultas VALUES ('$nombre', '$apellido', '$correo', '$consulta', '$codigo')");
    header("Location: ../unidad5.php?cargado");
} else {
    header("Location: ../unidad5.php?reintentar");
}
?>
