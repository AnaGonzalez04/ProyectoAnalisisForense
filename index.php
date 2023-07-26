<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="icon" type="icon">
    <title>Instituto Hans Gross</title> 
    <link rel="icon" type="image/x-icon" href="Imagenes/favicon-32x32.png">
    <link rel="stylesheet" href="CSS/estilos.css">     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200;500&display=swap" rel="stylesheet">   
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <section class="seccion-inicio" id="inicio">

		<div class="tarjeta-inicio">
			<h1>Instituto De Ciencias Forenses De Nayarit Hans Gross</h1>
			<p>¡Estudia la Licenciatura en Ciencia Forense! Te compartimos nuestro plan de estudio. </p>
			<!--<button class="boton">Cotizar Evento</button>-->
			<a href=# class="boton">Plan de estudios</a>
		</div>

		<div class="img-contenedor">

			<div class="carrusel">
				<img src="Imagenes/inscripciones.jpg" alt="">
			</div>

		</div>			
	</section>
    <div style="gap: 30px; display: grid; grid-template-columns: repeat(2, 3fr); grid-template-rows: repeat(1, 1fr);">
        <div class="article" style="border: 50px solid #ffffff;">
            <h1>Nuestro Nombre</h1>
            <p>El instituto lleva su nombre en honor al criminólogo austriaco, Hans Gross. Conocido como uno de los pioneros 
                en el campo de la criminología y se le considera una figura importante en el desarrollo de la ciencia forense.            
            </p>
            <p>Nacido el 26 de diciembre de 1847, Gross realizó importantes contribuciones al estudio del delito y al sistema 
                de justicia penal. Es conocido por su obra "Handbuch für Untersuchungsrichter" (Manual para jueces de 
                instrucción), publicada en 1893. En este libro, Gross estableció los fundamentos de la criminología científica 
                y abordó temas como la investigación criminal, la recolección de pruebas, la psicología criminal y la medicina 
                forense. También desempeñó un papel activo en el campo práctico de la justicia penal. Fue juez y fiscal en 
                varios tribunales austriacos y participó en numerosos casos de alto perfil.
            </p>
            <p>
                La obra y los estudios de Hans Gross tuvieron un impacto significativo en el desarrollo de la criminología y 
                la aplicación de la ciencia forense en la investigación criminal. Sus ideas y métodos influyeron en la 
                formación de futuros criminólogos y expertos forenses, como quienes se forman en nuestro instituto.
            </p>
        </div>
        <div class="image">
            <img src="Imagenes/gross.jpg" alt="Imagen" style="width: 80%;">
        </div>
    </div>
	<!-- Fin sección de inicio-->        
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>