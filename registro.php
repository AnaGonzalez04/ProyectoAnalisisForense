<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hans_gross";

if ($_POST['type'] == 'Registrarse') {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuario (nombre, apellido, telefono, correo, usuario, contrasena, tipoUsuario) VALUES 
        ('" . $_POST['nombre'] . "', '" . $_POST['apellido'] . "', '" . $_POST['telefono'] . "', '" . $_POST['correo'] . "', '" . $_POST['usuario'] . "', '" . sha1($_POST['conrasena']) . "', 1)";
        // use exec() because no results are returned
        $conn->exec($sql);
        session_start();
        $_SESSION['session'] = true;
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['apellido'] = $_POST['apellido'];
        $_SESSION['telefono'] = $_POST['telefono'];
        $_SESSION['correo'] = $_POST['correo'];
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['tipoUsuario'] = 1;

        header('Location:  cuenta.php');

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

$conn = null;
?>