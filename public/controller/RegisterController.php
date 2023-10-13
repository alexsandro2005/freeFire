<?php
require_once '../../database/connection.php';
require_once './funciones/funciones.php';

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
        // VARIABLES QUE CONTIENE EL NUMERO DE ENCRIPTACIONES DE LAS CONTRASEÑAS
        $pass_encriptaciones = [
            'cost' => 15,
        ];
        $user_password = password_hash($password, PASSWORD_DEFAULT, $pass_encriptaciones);

        $registerUser = $connection->prepare("INSERT INTO usuario(documento,nombreCompleto,nombreUsuario,password,idRol,fecha_registro,genero,estadoUsuario,correoElectronico,tipoDocumento) VALUES('$documento','$nombreCompleto','$nombreUsuario','$user_password','$idRol',NOW(),'$genero','$estadoUsuario','$correoElectronico','$tipoDocumento')");
        $registerUser->execute();

        if ($registerUser) {
            $insertDetalleNivelUsuario = $connection->prepare("INSERT INTO detalle_nivel (id_jugador, id_nivel) VALUES('$documento', 1)");
            $insertDetalleNivelUsuario->execute();

            // creamos una funcion para encriptar el numero de documento del usuario
            if ($insertDetalleNivelUsuario) {

                echo '<script>alert ("Registro Exitoso, Gracias por registrarte, puedes iniciar sesion.");</script>';
                echo '<script>window.location="../views/auth/"</script>';
            }
        }
    }
}
