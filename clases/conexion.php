<?php
include("basedatos.php");
include("producto.php");
include("carrito.php");
include("cargar.php");
include("verificar.php");

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BASE', 'phpavanzado');

$base = new Base (SERVIDOR, USUARIO, PASSWORD, BASE);
$producto = new Producto ($base);
$comprar = new Carrito ($base);
$cargar = new Cargar ($base);
$verificar = new Verificar ($base);
?>