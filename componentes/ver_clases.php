<?php 
include("conexion.php");
$agendar= mysqli_query($conexion, "SELECT * FROM clases");
while ($mostrar= mysqli_fetch_assoc($agendar)) {
?> 

  <div class="agenda">
    <p>
      Clase: <?php echo $mostrar ['id_clase'];?><br>
      Unidad: <?php echo $mostrar ['unidad'];?><br>
      Fecha: <?php echo $mostrar ['fecha'];?>
  </p>
</div>

<?php } ?>

 