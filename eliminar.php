<?php
include("clases/conexion.php");
$base = new Base (SERVIDOR, USUARIO, PASSWORD, BASE);
$comprar = new Carrito ($base);
$comprar -> eliminar_compra ($_GET['codigo']);
header("Location: unidad7.php?ELIMINADO");
?>