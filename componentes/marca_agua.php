<?php
$imagen = "../imagenes/programacion.jpg";
$marca = "../imagenes/marca.png";
$img = imagecreatefrompng($marca);
$extension1 = substr($imagen, -3);
$extension2 = strtolower($extension1);
switch ($extension2) {
    case 'gif':
        $img2 = imagecreatefromgif($imagen);
        break;
    case 'jpg':
        $img2 = imagecreatefromjpeg($imagen);
        break;
    case 'png':
        $img2 = imagecreatefrompng($imagen);
        break; }
imagecopy($img2, $img, (imagesx($img2)/250), (imagesy($img2)/250), (imagesx($img)/250), (imagesy($img)/250), imagesx($img), imagesy($img));
header("Content-Type: image/jpeg");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);
?>