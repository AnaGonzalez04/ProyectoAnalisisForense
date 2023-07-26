<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="icon" type="icon">
    <title>Instituto Hans Gross</title> 
    <link rel="icon" type="image/x-icon" href="Imagenes/favicon-32x32.png">
    <link rel="stylesheet" href="CSS/estilos.css">     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200;500&display=swap" rel="stylesheet"> </head>
    <?php
        include 'includes/header.php';
    ?>
</head>
<body style="background-color: #eda900;">    
    <main style="background-color: #eda900; padding: 40px;">
        <h4 style="font-weight: bold;">Sitio desarrollado por:</h4>        
        <div style=" background-color: #ffffff; display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(1, 1fr); width: 1100px; height: 270px; gap: 20px">
            <div class="card" style="width: 550px; height: 250px; padding: 60px;">
                <img src="Imagenes/Ana.jpg" alt="Avatar" width="50%">
                <div class="container">
                    <h4><b>ISC Ana Gonzalez</b></h4>
                    <p>telefono:</p>
                    <a style="color: #141d6f;" href="tel:+523111066017">+52 311 106 6017</a><br><br>
                    <p>E-mail:</p>
                    <a style="color: #141d6f;" href="mailto:ancagonzalezco@ittepic.edu.mx">ancagonzalezco@ittepic.edu.mx</a>
                </div>
            </div>            
            <div class="card" style="width: 550px; height: 250px;"s>
                <img src="Imagenes/Sebas.jpg" alt="Avatar" width="35%">
                <div class="container">
                    <h4><b>ISC Sebastian Paredes</b></h4>
                    <p>telefono:</p>
                    <a style="color: #141d6f;" href="tel:+523271093482">+52 327 109 3482</a><br><br>
                    <p>E-mail:</p>
                    <a style="color: #141d6f;" href="mailto:separedescu@ittepic.edu.mx">separedescu@ittepic.edu.mx</a>
                </div>
            </div>
        </div>
        <br>
        <h3 style="font-weight: bold;">Proyecto: 'Instituto Hans Gross'</h3>
        <p style="max-width: 900px;">El Instituto de Ciencias Forenses de Nayarit "Hans Gross" es una institución 
            dedicada a la formación de profecionales de las ciencias forenses en el estado 
            de Nayarit, México. El instituto lleva el nombre del Dr. Hans Gross, reconocido 
            como uno de los fundadores de la criminología moderna. A través de sus programas 
            de educación y entrenamiento, contribuye al desarrollo de recursos humanos 
            especializados en ciencias forenses.</p><br>                       
    </main>
    <?php
        include 'includes/footer.php';
    ?>           
</body>    
</html>