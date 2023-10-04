<?php

// conexion base de datos

require_once '../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

// TRAEMOS LA FECHA Y HORA ACTUAL DE COLOMBIA

date_default_timezone_set('America/Bogota');

if ((isset($_POST["MM_register"])) && ($_POST["MM_register"] == "formRegister")) {
    // DECLARACION DE LOS VALORES DE LAS VARIABLES DEPENDIENDO DEL TIPO DE CAMPO QUE TENGA EN EL FORMULARIO

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

    $data = $connection->prepare("SELECT * FROM usuario WHERE documento= '$documento' OR nombreUsuario = '$nombreUsuario' OR correoElectronico = '$correoElectronico'");
    $data->execute();
    $register_validation = $data->fetchAll();

    // CONDICIONALES DEPENDIENDO EL RESULTADO DE LA CONSULTA
    if ($register_validation) {
        // SI SE CUMPLE LA CONSULTA ES PORQUE EL USUARIO YA EXISTE
        echo '<script> alert ("// Estimado Usuario, los datos ingresados ya estan registrados. //");</script>';
        echo '<script> window.location= "../views/auth/index.php"</script>';
    } else if ($tipoDocumento == "" || $documento == "" || $genero == "" || $estadoUsuario == "" || $idRol == "" || $correoElectronico == "" || $password == "" || $nombreCompleto == "" || $nombreUsuario == "") {
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
            // creamos una funcion para encriptar el numero de documento del usuario
            
            function encriptar($texto, $token)
            {
                $clave = md5($token); // generamos una clave a partir de un token especial
                $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
                $textoEncriptado = openssl_encrypt($texto, 'aes-256-cbc', $clave, 0, $iv);
                return base64_encode($iv . $textoEncriptado);
            }
            $token = "11SXDLSLDDDDKFE332KDKS";

            $documentoEncriptado = encriptar($documento, $token);

            echo '<script>alert ("Registro Exitoso ¡Bienvenido/a!, ¡ahora selecciona tu avatar, puedes escoger el que quieras!.");</script>';
            echo '<script>window.location="../views/auth/avatarSelect.php?smtp=' . $documentoEncriptado .'"</script>';
        }

    }
} 

