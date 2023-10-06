<?php

require_once "../../../database/connection.php";
$db = new Database();
$connection = $db->conectar();

$listAvatars = $connection->prepare("SELECT * FROM avatars");
$listAvatars->execute();
$avatars = $listAvatars->fetchAll(PDO::FETCH_ASSOC);

$documento = $_GET['smtp'];

if ((isset($_POST["AvatarSelect"])) && ($_POST["AvatarSelect"] == "formAvatarSelect")) {
    // creamos una funcion para desencriptar el numero de documento

    function desencriptar($textoEncriptado, $token)
    {
        $clave = md5($token); // Generar clave a partir de la semilla
        $textoEncriptado = base64_decode($textoEncriptado);
        $ivTamanio = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($textoEncriptado, 0, $ivTamanio);
        $textoEncriptado = substr($textoEncriptado, $ivTamanio);
        return openssl_decrypt($textoEncriptado, 'aes-256-cbc', $clave, 0, $iv);
    }

    $token = "11SXDLSLDDDDKFE332KDKS";

    $documentoPlayer = desencriptar($documento, $token);
    // asingamos las variables
    $idAvatar = $_POST['idAvatar'];
    
    $usuarioAsignado = $connection->prepare("SELECT * FROM usuario WHERE documento = '$documentoPlayer' ");
    $usuarioAsignado->execute();
    $usuarioSelect = $usuarioAsignado->fetchAll(PDO::FETCH_ASSOC);
    // CONDICIONALES DEPENDIENDO EL RESULTADO DE LA CONSULTA
    if ($usuarioSelect) {
        $update = $connection->prepare("UPDATE usuario SET avatar='$idAvatar' WHERE documento='$documentoPlayer'");
        $update->execute();
        // SI SE CUMPLE LA CONSULTA ES PORQUE EL USUARIO YA EXISTE
        echo '<script> alert ("//¡Estimado Usuario tu avatar ha sido seleccionado, puedes iniciar sesion! //");</script>';
        echo '<script> window.location= "../index.php"</script>';
    } else if ($idAvatar == "" || $documentoPlayer == "") {
        // CONDICIONAL DEPENDIENDO SI EXISTEN ALGUN CAMPO VACIO EN EL FORMULARIO DE LA INTERFAZ
        echo '<script> alert (" //Estimado usuario existen datos vacios. //");</script>';
        echo '<script> windows.location= "./index.php"</script>';
    } else {

        echo '<script>alert("// Estimado Usuario la actualizacion no se realizo correctamente. //");</script>';
        echo '<script>windows.location="./index.php"</script>';
    }

}

?>