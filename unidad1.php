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
		<h2>Agenda de clases</h2>
		<div id="formulario">
			<form action="componentes/insertar_clases.php" method="POST">
				<input type="text" name="unidad" placeholder="Unidad">
				<input type="date" name="fecha" placeholder="Fecha">
				<input type="submit" value="Agendar">
			</form>
		</div>
	</section>
	<aside>
		<?php 
		include ("componentes/ver_clases.php"); 
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>