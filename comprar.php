<?php
include("clases/conexion.php");
$base = new Base (SERVIDOR, USUARIO, PASSWORD, BASE);
$producto = new Producto ($base);
$comprar -> introducir_compra($_GET['codigo'], $_GET['producto'], $_GET['descripcion'], $_GET['precio']);
header("Location: unidad7.php?AGREGADO");
?>