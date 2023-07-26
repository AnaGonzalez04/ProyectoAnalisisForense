<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="icon" type="icon">
    <title>Administrativos Hans Gross</title> 
    <link rel="icon" type="image/x-icon" href="Imagenes/favicon-32x32.png">
    <link rel="stylesheet" href="CSS/estilos.css"> 
    <link rel="stylesheet" href="CSS/admin.css">  
    <link rel="stylesheet" href="CSS/desplegable.css">     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200;500&display=swap" rel="stylesheet">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        input[type="file"] {
            border: 2px solid black; 
            padding: 5px; 
        }
    </style>
</head>
<body style="background-color: #eda900;">
    <?php
        include 'includes/headerUser.php';
    ?>
    <h1 style="color:#141d6f;">Bienvenido: Administrativo</h1>    
    <main style="padding-left: 50px;">
        <h2 style="color:#141d6f;">Seccion para archivos generales:</h2>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(2, 1fr); width: 500px; height: 600px; column-gap:130px ">
            <form action="procesar_Menu.php" method="post" enctype="multipart/form-data">
                <h3>Menu de la cafeteria</h3>
                <label for="archivo">Selecciona un archivo:</label><br>
                <input type="file" id="archivo" name="archivo" accept=".pdf, .jpg, .png" style="background-color: #ffffff; width: 500px; height:100px;" required>
                <div style="text-align:left; padding-left:200px;">
                    <input type="submit" value="Subir archivo">
                </div>
            </form>
            <form action="procesar_Actividad.php" method="post" enctype="multipart/form-data">
                <h3>Actividad semanal</h3>
                <label for="archivo">Selecciona un archivo:</label><br>
                <input type="file" id="archivo" name="archivo" accept=".pdf, .jpg, .png" style="background-color: #ffffff; width: 500px; height:100px;" required>
                <div style="text-align:left; padding-left:200px;">
                    <input type="submit" value="Subir archivo">
                </div>
            </form>
            <form action="procesar_Comunicado.php" method="post" enctype="multipart/form-data">
                <h3>Comunicados</h3>
                <label for="archivo">Selecciona un archivo:</label><br>
                <input type="file" id="archivo" name="archivo" accept=".pdf, .jpg, .png" style="background-color: #ffffff; width: 500px; height:100px;" required>
                <div style="text-align:left; padding-left:200px;">
                    <input type="submit" value="Subir archivo">
                </div>
            </form>
            <form action="procesar_HojaPago.php" method="post" enctype="multipart/form-data">
                <h3>Hoja de pago</h3>
                <label for="archivo">Selecciona un archivo:</label><br>
                <input type="file" id="archivo" name="archivo" accept=".pdf, .jpg, .png" style="background-color: #ffffff; width: 500px; height: 100px;" required>
                <br>
                <label for="fecha_inicio">Fecha de inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                <label for="fecha_fin">Fecha de fin:</label>
                <input type="date" id="fecha_fin" name="fecha_fin" required>
                <br><br>
                <label for="periodo">Periodo:</label>
                <input type="text" id="periodo" name="periodo" required>
                <br><br>
                <div style="text-align:left; padding-left:200px;">
                    <input type="submit" value="Subir archivo">
                </div>
            </form>
        </div> 

        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-6 p-5">
                <h2 style="color:#141d6f;">Archivos para Alumnos en particular:</h2>
                    <form action="buscar_alumno.php" method="post" >
                        <div style="display:grid; grid-template-columns: repeat(2, 1fr); text-align: center;">
                            <div class="form-floating">
                                <label for="floatingPassword">Nombre</label>
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre">
                            </div><br>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Email</label>
                                <input type="email" class="form-control" id="floatingInput" placeholder="ejemplo@InstitutoHansGross.com">
                            </div><br>
                            <div class="form-floating">
                            <label for="floatingPassword">Contraseña</label>
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6 p-4">
                <h2 style="text-align: center;">Resultados de busqueda:</h2>
                    <table class="table" style="text-align: center; background-color:#ffffff" >
                        <thead class="bd-info">
                            <tr>
                            <th scope="col">No.Control</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Programa Academico</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "conexion.php";
                                include  "eliminarAluno.php";
                                $sql = $conexion->query(" select * from alumnos");
                                while ($datos = $sql->fetch_objet()){ ?>
                            <tr>
                                <th><?= $datos->alumnos_id ?></th>
                                <th><?= $datos->nombre ?></th>
                                <th><?= $datos->nombreUsuario ?></th>
                                <th><?= $datos->contraseña ?></th>
                                <th><?= $datos->fecha_nacimiento ?></th>
                                <th><?= $datos->direccion ?></th>
                                <th><?= $datos->email ?></th>
                                <th><?= $datos->telefono ?></th>
                                <th>
                                    <a href="" class="btn btn small btn-warning"><i class="fa-duotone fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn small btn-danger"><i class="fa-duotone fa-trash"></i></a>
                                </th> 
                            </tr> 
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div style="text-align: center;">
            <form action="procesar_HojaPago.php" method="post" enctype="multipart/form-data">
                <h3>Horario:</h3>
                <label for="archivo">Selecciona un archivo:</label><br>
                <input type="file" id="archivo" name="archivo" accept=".pdf, .jpg, .png" style="background-color: #ffffff; width: 500px; height: 100px;" required>
                <br>                    
                <label for="periodo">Periodo:</label>
                <input type="text" id="periodo" name="periodo" required>
                <br><br>
                <div style="text-align:left; padding-left:200px;">
                    <input type="submit" value="Subir archivo">
                </div>
            </form>
            <form action="procesar_HojaPago.php" method="post" enctype="multipart/form-data">
                <h3>Calificaciones:</h3>
                <label for="archivo">Selecciona un archivo:</label><br>
                <input type="file" id="archivo" name="archivo" accept=".pdf, .jpg, .png" style="background-color: #ffffff; width: 500px; height: 100px;" required>
                <br>                    
                <label for="periodo">Periodo:</label>
                <input type="text" id="periodo" name="periodo" required>
                <br><br>
                <div style="text-align:left; padding-left:200px;">
                    <input type="submit" value="Subir archivo">
                </div>
            </form>
        </div>
    </main>     
    <?php  include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>