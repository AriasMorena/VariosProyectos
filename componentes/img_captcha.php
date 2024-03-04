<?php
session_start();
header("Content-Type: image/jpeg");

$img = imagecreate(120, 50);
$colorfondo = imagecolorallocate($img, 245, 90, 66);
$colortxt = imagecolorallocate($img, 15, 15, 15);
imagestring ($img, 5, 30, 15, $_SESSION['captcha'], $colortxt);
imagejpeg($img);
?>