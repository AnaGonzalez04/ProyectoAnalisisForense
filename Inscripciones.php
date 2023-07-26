<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Hans Gross</title>
    <link rel="icon" type="image/x-icon" href="Imagenes/favicon-32x32.png">
    <link rel="stylesheet" href="CSS/estilos.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">   
</head>
<body>
    <div class="titulInscripciones">
        <h1>Formulario de Inscripción</h1>
    </div>
    <div class="Formulario">
        <form>
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" style="width:500px;">
            <br><br>
            
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            <br><br>
            
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <br><br>
            
            <label for="telefono">Número de teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
            <br><br>
            
            <label for="calle">Calle:</label>
            <input type="text" id="calle" name="calle" required>
            <br><br>
            
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>
            <br><br>
            
            <label for="poblacion">Población:</label>
            <input type="text" id="poblacion" name="poblacion" required>
            <br><br>

            <label for="nombre">Nombre de usuario:</label>
            <input type="text" id="nombre" name="nombre" style="width:500px;">
            <br><br>

            <label for="nombre">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" style="width:500px;">
            <br><br>
                        
            <div style="text-align: center;">
                <input style="align-self: center; background-color:#eda900" type="submit" value="Registrarse">
                <!--<button type="submit" style="width: 150px;">Enviar</button>-->
            </div>        
            <br><br>
        </form>
    </div>
    
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>