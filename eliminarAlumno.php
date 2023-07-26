<?php include 'includes/headerUser.php'; ?>
<?php
    include_once "conexion.php";

    // Eliminar un registro de la tabla "usuario"
    if (isset($_GET['eliminar']) && is_numeric($_GET['eliminar'])) {
        $idUsuarioEliminar = $_GET['eliminar'];
        $stmtEliminar = $bd->prepare("DELETE FROM alumnos WHERE alumnos_id = :alumnos_id");
        $stmtEliminar->bindValue(':alumnos_id', $idUsuarioEliminar, PDO::PARAM_INT);
        $resultado = $stmtEliminar->execute();

        // Redireccionar a la página actual después de eliminar
        header("Location:../Admin.php");

        exit();
    }

    $sentencia = $bd->query("SELECT alumno_id, nombre, nombreUsuario, contraseña, fecha_nacimiento, direccion, email, telefono, programa_academico_id
        FROM alumnos
        WHERE alumno_id = 1;");
    $personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>