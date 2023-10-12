<?php
require_once '../../database/connection.php';
require_once '../controller/funciones/funciones.php';

$database = new Database();
$connection = $database->conectar();

// Configuración de la zona horaria
date_default_timezone_set('America/Bogota');

if (isset($_POST["MM_register"]) && $_POST["MM_register"] == "formRegister") {
    // Obtener datos del formulario
    $tipoDocumento = $_POST['tipoDocumento'];
    $documento = $_POST['documento'];
    $genero = $_POST['genero'];
    $estadoUsuario = $_POST['estadoUsuario'];
    $idRol = $_POST['idRol'];
    $correoElectronico = $_POST['correoElectronico'];
    $password = $_POST['password'];
    $nombreCompleto = $_POST['nombreCompleto'];
    $nombreUsuario = $_POST['nombreUsuario'];

    // Consultar si el usuario ya existe en la base de datos
    $existingUser = checkExistingUser($connection, $documento, $nombreUsuario, $correoElectronico);

    if ($existingUser) {
        showErrorAndRedirect("Estimado Usuario, los datos ingresados ya están registrados.", "../views/auth/index.php");
    } elseif (isAnyFieldEmpty([$tipoDocumento, $documento, $genero, $estadoUsuario, $idRol, $correoElectronico, $password, $nombreCompleto, $nombreUsuario])) {
        showErrorAndRedirect("Estimado Usuario, Existen Datos Vacíos En El Formulario", "../views/auth/index.php");
    } else {
        // Hash de la contraseña
        $user_password = password_hash($password, PASSWORD_DEFAULT);

        // Registrar el usuario en la base de datos
        $userRegistered = registerUser($connection, $documento, $nombreCompleto, $nombreUsuario, $user_password, $idRol, $genero, $estadoUsuario, $correoElectronico, $tipoDocumento);

        if ($userRegistered) {
            // Insertar en la tabla detalle nivel usuario
            $inserted = insertUserDetailLevel($connection, $documento);
            if ($inserted) {
                showSuccessAndRedirect("Registro Exitoso, Gracias por registrarte, puedes iniciar sesión.", "../views/auth/");
            } else {
                showErrorAndRedirect("Error al registrar el detalle del nivel del usuario.", "../views/auth/index.php");
            }
        } else {
            showErrorAndRedirect("Error al registrar el usuario.", "../views/auth/index.php");
        }
    }
}

function showErrorAndRedirect($message, $location) {
    echo "<script>alert ('$message');</script>";
    echo "<script>window.location = '$location';</script>";
}
?>
