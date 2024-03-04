<?php
include("clases/usuarios.php");

if ($_POST) {
$usuarios = new Usuarios($_POST['nombre'], $_POST['apellido'], $_POST['nacimiento']);
$usuarios-> imprime_caracteristicas();
}
?>