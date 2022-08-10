<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes</h2>
    <h3>Nuevos clientes</h3>
    <form method="POST" action="insertar_usuarios.php">
        <label>Usuario</label>
        <input type="text" name="usuario" required>
        <label>Clave</label>
        <input type="password" name="clave" required>
        <label>Nombre</label>
        <input type="text" name="nombre" required>
        <label>Apellido</label>
        <input type="text" name="apellido" required>
        <label>Edad</label>
        <input type="number" name="edad" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Sitio Web </label>
        <input type="text" name="web" required>
        <input type="submit" value="registrar">
    </form>

    <?php 
    if(isset($_GET['enviado'])){
        echo"<h3>Consulta enviada!</h3>";
    }
    ?>

    <form method="POST"  action="ingresar_usuarios.php">
        <label>Usuario</label>
        <input type="text" name="usuario">
        <label>Contraseña</label>
        <input type="password" name="contra">
        <input type="submit" value ="Comprobar">
        

    </form>
    <?php 
    if(isset($_GET['enviado'])){
        echo"<h4>Verificado!</h4>";
    }
    ?>
    <?php 
    if(isset($_GET['rechazado'])){
        echo"<h4>Usuario o clave Incorrecta!</h4>";
    }
    ?>
   
    </section>


<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>