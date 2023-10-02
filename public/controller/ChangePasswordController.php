<?php
    // conexion base de datos

    session_start();
    require_once("../../database/connection.php");
    $database = new Database();
    $connection = $database->conectar();


    // creamos una funcion para encriptar el numero de documento del usuario

    function encriptar($texto, $token){
        $clave = md5($token); // generamos una clave a partir de un token especial
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $textoEncriptado = openssl_encrypt($texto, 'aes-256-cbc',$clave, 0, $iv);
        return base64_encode($iv . $textoEncriptado);
    }

    // creamos una funcion para desencriptar el numero de documento 

    function desencriptar($textoEncriptado, $token){
        $clave = md5($token);
        $textoEncriptado = base64_decode($textoEncriptado);
        $ivTamaño = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($textoEncriptado, 0, $ivTamaño);
        $textoEncriptado = substr($textoEncriptado, $ivTamaño);
        return openssl_decrypt($textoEncriptado,'aes-256-cbc',$clave, 0, $iv);
    }


    if((isset($_POST["changePassword"])) && ($_POST["changePassword"] == "formPassword")){

        // capturamos los datos para realizar la validacion de la existencia del usuario

        $documento = $_POST["documento"];
        $nombreUsuario = $_POST["nombreUsuaurio"];


        $authUser = $connection->prepare("SELECT * FROM usuarios WHERE documento = ? AND nombreUsuario = ?'");
        $authUser->execute([$documento, $nombreUsuario]);
        $authentication = $authUser->fetch(PDO::FETCH_ASSOC);


        // creamos las condicionales de acuerdo al resultado de la consulta

        if($authentication){
            $documentoUser = $authentication['$documento'];
            $emailUser = $authentication['password'];

            $documentoEncriptado = encriptar($documentoUser, $token);

            $asunto = "Cambio de contraseña usuario "  . $authentication["nombreCompleto"] . "";
            $message = "Estimado Usuario ha solicitado un cambio de contraseña para el correo electronico: " . $emailUser . "\n";
            $mesage .= "Para continuar has click en el siguiente enlace : http://http://localhost/freeFire/public/views/auth/passwords/changePassword.php?smtp=". urlencode($documentoEncriptado);
            
            $admin_email = "From: lamunoz0140@misena.edu.co";
            if(mail($emailIUser,$asunto,$mesage,$admin_email)){
                
            }


        }
    }


?>