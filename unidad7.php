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
		<h2>Compras</h2>
		<table>
			<tr>
				<th>Código</th>
				<th>Producto</th>
				<th>Descripción</th>
				<th>Precio</th>
			</tr>
			<?php include("clases/conexion.php");
			$base = new Base (SERVIDOR, USUARIO, PASSWORD, BASE);
			$producto = new Producto ($base);
			$mostrarProd = $producto -> listar_productos();

			for($i=0; $i<count($mostrarProd); $i++) {
				?>
				<tr>
					<td>
						<?php echo $mostrarProd [$i]['codigo'];?>
					</td>
					<td>
						<?php echo $mostrarProd [$i]['producto'];?>
					</td>
					<td>
						<?php echo $mostrarProd [$i]['descripcion'];?>
					</td>
					<td>
						<?php echo $mostrarProd [$i]['precio'];?>
					</td>
					<td><a href="comprar.php?codigo=<?php echo $mostrarProd[$i]['codigo']?>&producto=<?php echo $mostrarProd[$i]['producto']?>&descripcion=<?php echo $mostrarProd[$i]['descripcion']?>&precio=<?php echo $mostrarProd[$i]['precio']; ?>">Comprar</a></td>
				</tr>
			<?php } ?>
		</table>
		</section>	
		<aside>
			<h3>Carrito</h3>
			<table>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
			</tr>
			<?php
			$comprar = new Carrito ($base);
			$listarProd = $comprar -> listar_compra();
			
			for($i=0; $i<count($listarProd); $i++) { ?>
				<tr>
					<td>
						<?php echo $listarProd [$i]['producto'];?>
					</td>
					<td>
						<?php echo $listarProd [$i]['precio'];?>
					</td>
					<td><a href="eliminar.php?codigo=<?php echo $listarProd[$i]['codigo']?>&producto=<?php echo $listarProd[$i]['producto']?>&precio=<?php echo $listarProd[$i]['precio']; ?>">Eliminar</a></td>
				</tr>
				<?php } ?>
		    </table>
         </aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>
	</div>
</body>
</html>