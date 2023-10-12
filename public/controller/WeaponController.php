<?php
require_once '../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

if (isset($_POST["MM_registerAvatar"]) && $_POST["MM_registerAvatar"] == "formAvatar") {
    $serialAvatar = $_POST['serialAvatar'];
    $nombreAvatar = $_POST['nombreAvatar'];
    $descripcionAvatar = $_POST['descripcionAvatar'];

    // Consulta para verificar si el avatar ya existe
    $avatarData = $connection->prepare("SELECT * FROM avatars WHERE idAvatar = :serialAvatar OR nombreAvatar = :nombreAvatar");
    $avatarData->bindParam(':serialAvatar', $serialAvatar);
    $avatarData->bindParam(':nombreAvatar', $nombreAvatar);
    $avatarData->execute();
    $validationAvatar = $avatarData->fetch(PDO::FETCH_ASSOC);

    if ($validationAvatar) {
        showErrorAndRedirect("Los datos ingresados ya están registrados.", "../views/auth/index.php");
    } elseif (isEmpty([$serialAvatar, $nombreAvatar, $descripcionAvatar])) {
        showErrorAndRedirect("Existen datos vacíos en el formulario, debes ingresar todos los datos.", "../views/models/admin/createAvatar.php");
    } else {
        // Verifica si se ha enviado un archivo y si no hay errores al subirlo
        if (isFileUploaded($_FILES['imagenAvatar'])) {
            $permitidos = array("image/png", "image/jpg", "image/jpeg");
            $limite_KB = 1000;

            if (isImageValid($_FILES["imagenAvatar"], $permitidos, $limite_KB)) {
                $ruta = 'files/';
                $imagenAvatar = $ruta . $_FILES['imagenAvatar']["name"];
                createDirectoryIfNotExists($ruta);

                if (!file_exists($imagenAvatar)) {
                    $resultado = moveUploadedFile($_FILES["imagenAvatar"], $imagenAvatar);

                    if ($resultado) {
                        // Inserta los datos en la base de datos
                        $registerAvatar = $connection->prepare("INSERT INTO avatars(idAvatar, nombreAvatar, descripcionAvatar, imagenAvatar) VALUES(:serialAvatar, :nombreAvatar, :descripcionAvatar, :imagenAvatar)");
                        $registerAvatar->bindParam(':serialAvatar', $serialAvatar);
                        $registerAvatar->bindParam(':nombreAvatar', $nombreAvatar);
                        $registerAvatar->bindParam(':descripcionAvatar', $descripcionAvatar);
                        $registerAvatar->bindParam(':imagenAvatar', $imagenAvatar);
                        $registerAvatar->execute();

                        showSuccessAndRedirect("Los datos han sido registrados correctamente.", "../views/models/admin/listaAvatars.php");
                    } else {
                        showErrorAndRedirect("Error al momento de cargar la imagen del avatar.", "../views/models/admin/createAvatar.php");
                    }
                }
            } else {
                showErrorAndRedirect("Error al momento de cargar la imagen del avatar. Asegúrate de que la imagen sea de tipo PNG, JPG o JPEG y que su tamaño sea menor o igual a 1 MB.", "../views/models/admin/createAvatar.php");
            }
        } else {
            showErrorAndRedirect("Error al cargar la imagen del avatar. Asegúrate de seleccionar una imagen válida.", "../views/models/admin/createAvatar.php");
        }
    }
}

function showErrorAndRedirect($message, $location) {
    echo "<script>alert('$message');</script>";
    echo "<script>window.location = '$location';</script>";
}

function isEmpty($fields) {
    foreach ($fields as $field) {
        if (empty($field)) {
            return true;
        }
    }
    return false;
}

function isFileUploaded($file) {
    return isset($file) && $file['error'] === 0;
}

function isImageValid($file, $allowedTypes, $maxSizeKB) {
    return in_array($file["type"], $allowedTypes) && $file["size"] <= $maxSizeKB * 1024;
}

function createDirectoryIfNotExists($directory) {
    if (!file_exists($directory)) {
        mkdir($directory);
    }
}

function moveUploadedFile($file, $destination) {
    return move_uploaded_file($file["tmp_name"], $destination);
}

function showSuccessAndRedirect($message, $location) {
    echo "<script>alert('$message');</script>";
    echo "<script>window.location = '$location';</script>";
}
?>
