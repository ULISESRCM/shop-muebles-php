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
    <h2>Contáctenos</h2>
    <form method="POST" action="enviar_consulta.php">
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Ej:Juan" required maxlength="30">
        <label>Apellido</label>
        <input type="text" name="apellido" placeholder="Ej:Perez" required maxlength="30">
        <label>Edad</label>
        <input type="text" name="edad" placeholder="15" required maxlength="3">
        <label>Correo</label>
        <input type="email" name="correo" placeholder="juanperez@gmail.com" required maxlength="50">
        <label>motivo</label>
        <input type="text" name="motivo" placeholder="texto" required maxlength="30">
        <label>Mensaje</label>
        <textarea name="mensaje" placeholder="ingrese" rows="5" required>    
        </textarea>
        <input type="submit" value ="enviar">

        
    </form>

    <?php 
    if(isset($_GET['enviado'])){
        echo"<h3>Consulta enviada!</h3>";
    }

    ?>


   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>