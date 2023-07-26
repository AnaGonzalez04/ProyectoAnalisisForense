<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hans_gross";

if ($_POST['type'] == 'Acceder') {
    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM administrativos WHERE administrativos_id='" . $_POST['administrativos'] . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['contrasena']) {
                session_start();
                $_SESSION['session'] = true;
                $_SESSION['administrativo_id'] = $row['administrativo_id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['nombreUsuario'] = $row['nombreUsuario'];
                $_SESSION['contraseña'] = $row['contraseña'];
                $_SESSION['fecha_nacimiento'] = $row['fecha_nacimiento'];
                $_SESSION['direccion'] = $row['direccion'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['telefono'] = $row['telefono'];
                $_SESSION['programa_academico_id'] = $row['programa_academico_id'];

                header('Location:  headerUser.php');
            } else {
                echo "error";
            }
        } else {
            echo "usuario no existe";
        }


    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
$conn = null;
?>