<?php 
session_start();
date_default_timezone_set("America/Argentina/San_Luis");
$usuario = $_POST ['usuario'];
$correo = $_POST ['correo'];
$comentario = $_POST ['comentario'];

$date = date("d/m/Y G:i");

$archivo = fopen('comentarios.txt', 'a+');
$contenido = '<h3>Usuario: '.$_POST['usuario']. '</h3><p>Correo: '.$_POST['correo']. ' Comentario: '.$_POST['comentario']. '  Fecha: '.$date. '</p>';
fwrite($archivo, $contenido);
fclose($archivo);

header("Location: ../unidad3.php?comentado");
?>