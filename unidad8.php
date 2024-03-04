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
		<?php
		include("botonera.php");
		include("clases/conexion.php");
		?>
	</nav>
	</header>
	<section>
		<h2>Registro</h2>
		<div id="formulario">
			<form action="clases/cargarusuario.php" method="POST">
				<input type="email" name="email" placeholder="Correo Electrónico" max="100" required>
				<input type="password" name="pass" placeholder="Contraseña" min="4" max="10">
				<input type="submit" value="Registrarse">
			</form>
		</div>

		<h2>Ingreso</h2>
		<div id="formulario">
			<form action="clases/verificarusuario.php" method="POST">
				<input type="email" name="email" placeholder="Usuario" max="100" required>
				<input type="password" name="pass" placeholder="Contraseña" min="4" max="10">
				<input type="submit" value="Ingresar">
			</form>
		</div>
	</section>
	<aside>
	<?php 
		if (isset($_GET['REGISTRADO'])) {
		echo "<p>Usuario registrado!</p>";
		}
		?>
		<?php 
		if (isset($_GET['INGRESO'])) {
		echo "<p>Ingreso de usuario exitoso!</p>";
		}
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>