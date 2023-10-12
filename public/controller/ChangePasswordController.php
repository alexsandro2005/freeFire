<?php
// Conexión a la base de datos
session_start();
require_once("../../database/connection.php");
$database = new Database();
$connection = $database->conectar();

// Funciones de encriptación y desencriptación
function encriptar($texto, $token) {
    $clave = md5($token);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $textoEncriptado = openssl_encrypt($texto, 'aes-256-cbc', $clave, 0, $iv);
    return base64_encode($iv . $textoEncriptado);
}

function desencriptar($textoEncriptado, $token) {
    $clave = md5($token);
    $textoEncriptado = base64_decode($textoEncriptado);
    $ivTamanio = openssl_cipher_iv_length('aes-256-cbc');
    $iv = substr($textoEncriptado, 0, $ivTamanio);
    $textoEncriptado = substr($textoEncriptado, $ivTamanio);
    return openssl_decrypt($textoEncriptado, 'aes-256-cbc', $clave, 0, $iv);
}

if (isset($_POST["changePassword"]) && $_POST["changePassword"] == "formPassword") {
    // Capturamos los datos para realizar la validación de la existencia del usuario
    $documento = $_POST["documento"];
    $nombreUsuario = $_POST["nombreUsuario"];
    $token = "tu_token_secreto"; // Debes definir un token secreto

    $authUser = $connection->prepare("SELECT * FROM usuarios WHERE documento = ? AND nombreUsuario = ?");
    $authUser->execute([$documento, $nombreUsuario]);
    $authentication = $authUser->fetch(PDO::FETCH_ASSOC);

    // Creamos las condiciones de acuerdo al resultado de la consulta
    if ($authentication) {
        $documentoUser = $authentication['documento'];
        $emailUser = $authentication['password'];

        $documentoEncriptado = encriptar($documentoUser, $token);

        $asunto = "Cambio de contraseña usuario " . $authentication["nombreCompleto"];
        $mensaje = "Estimado Usuario, ha solicitado un cambio de contraseña para el correo electrónico: " . $emailUser . "\n";
        $mensaje .= "Para continuar, haga clic en el siguiente enlace: http://localhost/freeFire/public/views/auth/passwords/changePassword.php?documento=" . urlencode($documentoEncriptado);

        $admin_email = "From: lamunoz0140@misena.edu.co";
        if (mail($emailUser, $asunto, $mensaje, $admin_email)) {
            // Envío de correo exitoso
        } else {
            // Error en el envío de correo
        }
    }
}
?>
