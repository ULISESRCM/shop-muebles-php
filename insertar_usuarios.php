<?php
$usuario_formu=$_POST['usuario'];
$clave_formu=$_POST['clave'];
$nombre_formu=$_POST['nombre'];
$apellido_formu=$_POST['apellido'];
$edad_formu=$_POST['edad'];
$email_formu=$_POST['email'];
$web_formu=$_POST['web'];

$cuerpo ="nombre".$nombre_formu."\r\n"."apellido".$apellido_formu."\r\n"."usuario".$usuario_formu."\r\n"."clave".$clave_formu;

$respuesta ="From:$nombre_formu, $apellido_formu, <email_formu>";

mail("ulisesrc001@gmail.com, fox_89816@hotmail.com","registro de datos",$cuerpo, $respuesta);

include('conector_db.php');

mysqli_query($datos, "INSERT INTO usuarios VALUES ('$usuario_formu','$clave_formu','$nombre_formu','$apellido_formu', '$edad_formu','$email_formu','$web_formu')");

header("Location:clientes.php?enviado");
?>