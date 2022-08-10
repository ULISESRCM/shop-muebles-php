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
    <h2>Noticias</h2>
    <?php
    $noticias= array(
                        array('Celulares','El primer teléfono celular de la historia fue el Motorola DynaTAC 8000X, visto por primera vez en 1983. Tenía un peso de 780 gr y medía aproximadamente 33 x 9 x 4.5cm. Obviamente era analógico, y tenía un display pequeño. La batería tenía una durabilidad de no más de una hora hablando u 8 horas en stand-by.','telefonos.jpg'),
                        array('tecnologia','La resolución y el tamaño de la pantalla son importantes porque utilizamos el celular para ver contenidos, mensajes y jugar. Las innovaciones incluyen pantallas más grandes, full HD y con video 4K y 8K. Con pantallas cada vez más grandes y sin bordes, el smartphone amenaza con sustituir al PC, el portátil y a la tablet.','flex.jpg'),
                        array('navegacion','En telecomunicaciones, 5G son las siglas utilizadas para referirse a la quinta generación de tecnologías de telefonía móvil.1​ Es la sucesora de la tecnología 4G la cual le provee conectividad a la mayoría de teléfonos móviles actuales.2​ De acuerdo a la Asociación GSM, para 2025, se prevé que las redes 5G contarán con más de 1.7 mil de millones de subscriptores en el mundo.3​ Como su predecesor, las redes 5G son redes de celdas, cuya área de servicio está dividida en pequeñas regiones geográficas que llevan como nombre celdas','5g.jpg'),
                        array('Fibra Óptica','En junio 2015, la empresa Prysmian Energía Cables y Sistemas de Argentina llevó a cabo la reinauguración y puesta en marcha de la planta de producción de cables de fibra óptica, sita en la Ciudad Autónoma de Buenos Aires.','fibra.jpg')

                        

                    );
    ?>

    <?php

    $numerodenotas= count($noticias);
    for ($i=0; $i < $numerodenotas; $i++) { ?>
        <div class="not">
           <h3>
              <?php echo $noticias[$i][0]; ?> 
           </h3>
           <p> <?php echo $noticias[$i][1] ?></p>

           <img src="imagenes/<?php echo $noticias [$i][2]; ?>">
        
    </div>

    <?php
    }
    ?>


    

    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>