<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head> 
<body>
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<?php
			function contenido_captcha() {
				$pattern = "1234567890aeiouAEIOU#$%/?";
				$clave = '';
				for ($i=0; $i<6; $i++) {
					$clave .= $pattern[rand(0, 24)];	
				}
				return $clave;
			}
			$_SESSION ['captcha'] = contenido_captcha();
			?>
			
		<h2>Consultas</h2>
		<div id="formulario">
			<form action="componentes/cargar.php" method="POST">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="apellido" placeholder="Apellido">
				<input type="mail" name="correo" placeholder="Mail" required>
				<textarea rows="5" name="consulta" placeholder="Consulta"></textarea>
				<img src= "componentes/img_captcha.php">
				<input type="text" name="codigo" placeholder="Codigo" required>
				<input type="submit" value="Enviar">
			</form>		
		</div>
	</section>
	<aside>
		<?php
		if (isset($_GET['reintentar'])) {
			echo "<p>El código es incorrecto. Vuelva a intentar.</p>";
			} ?>
		<?php

		if (isset($_GET['cargado'])) {
			echo "<p>Su consulta ha sido cargada correctamente.</p>";
			} ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
</body>
</html>