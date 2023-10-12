<?php
session_start();
require_once "../../database/connection.php";
$db = new Database();
$connection = $db->conectar();

if (isset($_POST["iniciarSesion"])) {
    $emailUser = $_POST["email"];
    $passwordLog = $_POST['password'];

    // Realiza la consulta de autenticación
    $authValidation = $connection->prepare("SELECT * FROM usuario WHERE correoElectronico = :email AND estadoUsuario = 1");
    $authValidation->bindParam(':email', $emailUser);
    $authValidation->execute();
    $authSession = $authValidation->fetch();

    if ($authSession && password_verify($passwordLog, $authSession['password'])) {
        // Si la autenticación es exitosa
        $_SESSION['id_user'] = $authSession['documento'];
        $_SESSION['nombres'] = $authSession['nombreCompleto'];
        $_SESSION['rol'] = $authSession['idRol'];
        $_SESSION['usuario'] = $authSession['nombreUsuario'];
        $_SESSION['email'] = $authSession['correoElectronico'];

        date_default_timezone_set("America/Bogota");
        $userentry = $connection->prepare("INSERT INTO entrada_jugadores(horario_entrada, documento) VALUES (NOW(), :id_user)");
        $userentry->bindParam(':id_user', $_SESSION['id_user']);
        $userentry->execute();

        if ($_SESSION['rol'] == 2) {
            if ($authSession['avatar'] != null) {
                header("Location:../views/models/player/index.php");
            } else {
                header("Location:../views/models/player/avatarSelect.php?status=1");
            }
        } elseif ($_SESSION['rol'] == 1) {
            header("Location:../views/models/admin/index.php");
        } else {
            session_destroy();
            echo '<script>alert("No tienes permiso para acceder a este tipo de cuenta.");</script>';
            echo '<script>window.location="../views/auth/error.php"</script>';
        }
    } else {
        // Autenticación fallida
        echo '<script>alert("Los datos ingresados son incorrectos, Por favor inténtelo nuevamente.");</script>';
        echo '<script>window.location="../views/auth/error.php"</script>';
    }
}
?>
