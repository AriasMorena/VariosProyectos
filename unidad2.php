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
		<h2>Eventos</h2>
		<div id="formulario">
			<form action="componentes/calculo_fecha.php" method="POST">
				<input type="number" name="day" placeholder="Día" min="01" max="31">
				<input type="number" name="month" placeholder="Mes" min="01" max="12">
				<input type="number" name="year" placeholder="Año" min="2023" max="2024">
				<input type="submit" value="Calcular">
			</form>
		</div>
	</section>
	<aside>
		<?php 
		if (isset($_GET['dias'])) { ?>
		<p>Faltan <?php echo $_GET['dias'];?> días para el evento.</p>
		<?php } ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>