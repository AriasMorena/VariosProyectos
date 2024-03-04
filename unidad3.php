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
		<h2>Comentarios</h2>
		<div id="formulario">
			<form action="componentes/comentarios.php" method="POST">
				<input type="text" name="usuario" placeholder="Nombre y Apellido">
				<input type="mail" name="correo" placeholder="Mail">
				<textarea rows="5" name="comentario" placeholder="Comentario"></textarea>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</section>
	<aside>
		<div class="usuario">
			<h3>Comentarios</h3>
			<?php 
			$archivo = fopen('componentes/comentarios.txt', 'a+');
			fpassthru($archivo);
			fclose($archivo);
			?>
		</div>
	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
</body>
</html>