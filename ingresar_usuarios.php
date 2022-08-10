<?php
$usuario_form=$_POST['usuario'];
$clave_form=$_POST['contra'];

include('conector_db.php');
$verif=mysqli_query($datos,"SELECT usuario, clave FROM usuarios WHERE usuario = '$usuario_form' AND clave = '$clave_form'");

if(mysqli_num_rows($verif)==1){
	$verif=mysqli_fetch_array($verif);
	header("location:clientes.php?enviado");


}
else{
	header("location:clientes.php?rechazado");
}

?>