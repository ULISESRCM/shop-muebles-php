<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Datos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<section id="mostrar_datos">
	<h1>Listar consulta</h1>
	<?php
	include("conector.php");

	$consultas=mysqli_query($datos,"SELECT * FROM consultas ");
	while($mostrar_d=mysqli_fetch_assoc($consultas)){
	?>
	<div class="listar_consulta">
	  <ul>
		<li>Nombre:<?php echo $mostrar_d ['nombre']; ?></li>
		<li>Apellido: <?php echo $mostrar_d ['apellido']; ?></li>
		<li>Correo: <?php echo $mostrar_d ['correo']; ?></li>
		<li>Edad: <?php echo $mostrar_d ['edad']; ?></li>
		<li>Motivo: <?php echo $mostrar_d ['motivo']; ?></li>
		<li>Mensaje: <?php echo $mostrar_d ['mensaje']; ?></li>

      </ul>
    </div>
   
    ?>

	</section>

</body>
</html>