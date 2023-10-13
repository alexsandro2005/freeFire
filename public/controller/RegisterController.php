<?php
require_once '../../database/connection.php';
require_once '../controller/funciones/funciones.php';

$database = new Database();
$connection = $database->conectar();

// Configuración de la zona horaria
date_default_timezone_set('America/Bogota');

function registerUser($connection, $documento, $nombreCompleto, $nombreUsuario, $avatar, $user_password, $idRol, $genero, $estadoUsuario, $correoElectronico, $tipoDocumento) {
    // Prepara la consulta SQL usando sentencias preparadas
    $query = "INSERT INTO usuario(documento, nombreCompleto, nombreUsuario, avatar, password, idRol, genero, estadoUsuario, correoElectronico, tipoDocumento, puntosAcumulados,fecha_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0,NOW())";
    $stmt = $connection->prepare($query);

    $estadoUsuario = 1;

    // Bind de los parámetros
    $stmt->bindParam(1, $documento);
    $stmt->bindParam(2, $nombreCompleto);
    $stmt->bindParam(3, $nombreUsuario);
    $stmt->bindValue(4, $avatar, PDO::PARAM_NULL);    
    $stmt->bindParam(5, $user_password);
    $stmt->bindParam(6, $idRol);
    $stmt->bindParam(7, $genero);
    $stmt->bindParam(8, $estadoUsuario);
    $stmt->bindParam(9, $correoElectronico);
    $stmt->bindParam(10, $tipoDocumento);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        return true; // Registro exitoso
    } else {
        return false; // Error al registrar el usuario
    }
}

function insertUserDetailLevel($connection, $documento) {
    // Prepara la consulta SQL usando sentencias preparadas
    $query = "INSERT INTO detalle_nivel(id_jugador, id_nivel) VALUES (?, 1)";
    $stmt = $connection->prepare($query);

    // Bind de los parámetros
    $stmt->bindParam(1, $documento);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        return true; // Registro exitoso
    } else {
        return false; // Error al registrar el usuario
    }
}

function showErrorAndRedirect($message, $location) {
    echo "<script>alert ('$message');</script>";
    echo "<script>window.location = '$location';</script>";
}

function showSuccessAndRedirect($message, $location) {
    echo "<script>alert ('$message');</script>";
    echo "<script>window.location = '$location';</script>";
}

function checkExistingUser($connection, $documento, $nombreUsuario, $correoElectronico) {
    // Prepara la consulta SQL usando sentencias preparadas
    $query = "SELECT COUNT(*) as count FROM usuario WHERE documento = :documento OR nombreUsuario = :nombreUsuario OR correoElectronico = :correoElectronico";
    $stmt = $connection->prepare($query);

    // Bind de los parámetros
    $stmt->bindParam(':documento', $documento);
    $stmt->bindParam(':nombreUsuario', $nombreUsuario);
    $stmt->bindParam(':correoElectronico', $correoElectronico);

    // Ejecuta la consulta
    $stmt->execute();

    // Obtiene el resultado
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si count es mayor que 0, significa que el usuario ya existe
    return $result['count'] > 0;
}

function isAnyFieldEmpty($fields) {
    foreach ($fields as $field) {
        if (empty($field)) {
            return true; // Retorna true si encuentra al menos un campo vacío
        }
    }
    return false; // Retorna false si todos los campos están llenos
}

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

    // CONSULTA SQL PARA VERIFICAR SI EL USUARIO YA EXISTE EN LA BASE DE DATOS

    $data = $connection->prepare("SELECT * FROM usuario WHERE documento = '$documento' OR nombreUsuario = '$nombreUsuario' OR correoElectronico = '$correoElectronico'");
    $data->execute();
    $register_validation = $data->fetchAll();
    // CONDICIONALES DEPENDIENDO EL RESULTADO DE LA CONSULTA
    if ($register_validation) {
        // SI SE CUMPLE LA CONSULTA ES PORQUE EL USUARIO YA EXISTE
        echo '<script> alert ("// Estimado Usuario, los datos ingresados ya estan registrados. //");</script>';
        echo '<script> window.location= "../views/auth/index.php"</script>';
    } elseif ($tipoDocumento == "" || $documento == "" || $genero == "" || $estadoUsuario == "" || $idRol == "" || $correoElectronico == "" || $password == "" || $nombreCompleto == "" || $nombreUsuario == "") {
        // CONDICIONAL DEPENDIENDO SI EXISTEN ALGUN CAMPO VACIO EN EL FORMULARIO DE LA INTERFAZ
        echo '<script> alert ("Estimado Usuario, Existen Datos Vacios En El Formulario");</script>';
        echo '<script> window.location="../views/auth/index.php"</script>';
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
