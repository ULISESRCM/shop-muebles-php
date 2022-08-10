<?php
$nombre_formu =$_POST['nombre'];
$apellido_formu=$_POST['apellido'];
$edad_formu=$_POST['edad'];
$correo_formu=$_POST['correo'];
$motivo_formu=$_POST['motivo'];
$mensaje_formu=$_POST['mensaje']; 


$cuerpo="nombre:".$nombre_formu."\r\n"."apellido".$apellido_formu."\r\n"."correo".$correo_formu."\r\n"."mensaje".$mensaje_formu;

$respuesta = "From: $nombre_formu $apellido_formu <correo_formu>";

mail("ulisesrc001@gmail.com, fox_89816@hotmail.com","consulta eviada desde mi sitio" , $cuerpo, $respuesta);

mail("$correo_formu","consulta exitosa","CURSO DE PROGRAMACION PHP Y MYSQL","FELICITACIONES!!");
include('conector.php');

mysqli_query($datos, "INSERT INTO consultas VALUES (default,'$nombre_formu','$apellido_formu','$edad_formu','$correo_formu','$motivo_formu','$mensaje_formu')");


header("location:contacto.php?enviado");

?>