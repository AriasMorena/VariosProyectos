<?php
$imagen_og = imagecreatefromjpeg("imagenes/unidad4.jpg");
$alto = 150;
$ancho = 150;

$imagen_cop = imagecreatetruecolor($ancho, $alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($imagen_cop, $imagen_og, 0,0,0,0, $ancho, $alto, imagesx($imagen_og), imagesy($imagen_og));
imagejpeg($imagen_cop, "imagenes/uni4_thumb.jpg");
imagedestroy($imagen_cop);

?>