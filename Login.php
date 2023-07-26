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
        <style>
            main {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50vh; /* Ajusta la altura según tus necesidades */
            }
        </style>
    </head>
<body style="background-color: #eda900; align-content: center;">
    <?php
        include 'includes/header.php';
    ?>
    <main>
        <br><br>
        <h1>Iniciar sesión</h1>   <br>
        <label>Ingresar como:</label><br>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-template-rows: repeat(1, 1fr); gap: 20px;">
                <div>
                    <input type="radio" id="Admin" name="userType" value="Administrativo">
                    <label for="Administrativo">Administrativo</label>
                </div>
                <div>
                    <input type="radio" id="Estudiante" name="userType" value="Estudiante" checked>
                    <label for="Estudiante">Estudiante</label>
                </div>
                <div>
                    <input type="radio" id="Aspirante" name="userType" value="Aspirante">
                    <label for="Aspirante">Aspirante</label>
                </div>
        </div>    
             
        <div class="card" style=" background-color: #141d6f; width: 500px; height: 350px;"><br>
            <img src="Imagenes/userIcon.png" alt="Usuario" style="width: 100px; margin: 20px;"><br>
                <div class="container" style="display: flex;">
                <form method = "post" action="Admin.php">
                    <br><label for="usuario" style="color: #ffffff;">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required style="width: 350px;">
                    <br><br>                    
                    <label for="contrasena" style="color: #ffffff;">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required style="height: 40px; width: 350px;">
                    <br><br>
                    <div style="text-align:left; padding-left:70px;">
                        <input style=" background-color:#eda900; size:150%;" type="submit" value="Acceder" onclick="validateForm()"><br><br> 
                    </div>                                                                                                                         
                </form> 

            </div>           
        </div><br><br>
    </main> 
    <br><br>   

    <?php
        include 'includes/footer.php';
    ?>    
</body>
</html>