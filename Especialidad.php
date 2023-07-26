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
<body style="background-color: #eda900;">  
    <?php
        include 'includes/header.php';
    ?>
    <br>              
    <main>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(2, 1fr); gap: 20px;">                                     
            <table class="table">                
                <thead style="background-color: #f7f7f7;">
                    <tr>
                        <th style="color: #141d6f; font-weight: bold;" scope="col">Primer trimestre</th>                       
                    </tr>
                </thead>
                <tbody style="color: #141d6f;">
                    <tr>
                        <td style="background-color: #7a9dbc;">Criminalística General</td>
                    </tr>
                    <tr>
                        <td style="background-color: #f7f7f7;">Dactiloscopia</td>
                    </tr>
                    <tr>
                        <td style="background-color: #7a9dbc;">Medicina Forense</td>
                    </tr>
                </tbody>
            </table>
            <table class="table">                
                <thead style="background-color: #f7f7f7;">
                    <tr>
                        <th style="color: #141d6f; font-weight: bold;" scope="col">Segundo trimestre</th>                       
                    </tr>
                </thead>
                <tbody style="color: #141d6f;">
                    <tr>
                        <td style="background-color: #7a9dbc;">Balística Forense</td>
                    </tr>
                    <tr>
                        <td style="background-color: #f7f7f7;">Metodología de la Investigación Criminalística</td>
                    </tr>
                    <tr>
                        <td style="background-color: #7a9dbc;">Incendios y Explosivos</td>
                    </tr>
                </tbody>
            </table>
            <table class="table">                
                <thead style="background-color: #f7f7f7;">
                    <tr>
                        <th style="color: #141d6f; font-weight: bold;" scope="col">Tercer trimestre</th>                       
                    </tr>
                </thead>
                <tbody style="color: #141d6f;">
                    <tr>
                        <td style="background-color: #7a9dbc;">Documentoscopia</td>
                    </tr>
                    <tr>
                        <td style="background-color: #f7f7f7;">Hechos de Tránsito Terrestre</td>
                    </tr>
                    <tr>
                        <td style="background-color: #7a9dbc;">Genética Forense</td>
                    </tr>
                </tbody>
            </table>
            <table class="table">                
                <thead style="background-color: #f7f7f7;">
                    <tr>
                        <th style="color: #141d6f; font-weight: bold;" scope="col">Cuarto trimestre</th>                       
                    </tr>
                </thead>
                <tbody style="color: #141d6f;">
                    <tr>
                        <td style="background-color: #7a9dbc;">Psicología Forense</td>
                    </tr>
                    <tr>
                        <td style="background-color: #f7f7f7;">Química Forense</td>
                    </tr>
                    <tr>
                        <td style="background-color: #7a9dbc;">Sistema Penal Acusatorio</td>
                    </tr>
                </tbody>
            </table>            
        </div>          
    </main>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>