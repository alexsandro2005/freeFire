<?php
require_once '../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

if (isset($_POST["MM_registerWorld"]) && $_POST["MM_registerWorld"] == "formWorld") {
    $idMundo = $_POST['idMundo'];
    $nombreMundo = $_POST['nombreMundo'];

    // Consulta para verificar si el mundo ya existe
    $worldData = $connection->prepare("SELECT * FROM mundos WHERE idMundo = :idMundo OR nombreMundo = :nombreMundo");
    $worldData->bindParam(':idMundo', $idMundo);
    $worldData->bindParam(':nombreMundo', $nombreMundo);
    $worldData->execute();
    $validationWorld = $worldData->fetch(PDO::FETCH_ASSOC);

    if ($validationWorld) {
        showErrorAndRedirect("Los datos ingresados ya están registrados.", "../views/models/admin/createWorld.php");
    } elseif (isEmpty([$idMundo, $nombreMundo])) {
        showErrorAndRedirect("Existen datos vacíos en el formulario, debes ingresar todos los datos.", "../views/models/admin/createWorld.php");
    } else {
        // Verifica si se ha enviado un archivo y si no hay errores al subirlo
        if (isFileUploaded($_FILES['imagenMundo'])) {
            $permitidos = ["image/png", "image/jpg", "image/jpeg"];
            $limite_KB = 7000;

            if (isImageValid($_FILES["imagenMundo"], $permitidos, $limite_KB)) {
                $ruta = 'worlds/';
                $imagenMundo = $ruta . $_FILES['imagenMundo']["name"];
                createDirectoryIfNotExists($ruta);

                if (!file_exists($imagenMundo)) {
                    $resultado = moveUploadedFile($_FILES["imagenMundo"], $imagenMundo);

                    if ($resultado) {
                        // Inserta los datos en la base de datos
                        $registerWorld = $connection->prepare("INSERT INTO mundos(idMundo, nombreMundo, imagenMundo) VALUES(:idMundo, :nombreMundo, :imagenMundo)");
                        $registerWorld->bindParam(':idMundo', $idMundo);
                        $registerWorld->bindParam(':nombreMundo', $nombreMundo);
                        $registerWorld->bindParam(':imagenMundo', $imagenMundo);
                        $registerWorld->execute();

                        showSuccessAndRedirect("Los datos han sido registrados correctamente.", "../views/models/admin/listaWorlds.php");
                    } else {
                        showErrorAndRedirect("Error al momento de cargar la imagen del mundo.", "../views/models/admin/createWorld.php");
                    }
                }
            } else {
                showErrorAndRedirect("Error al momento de cargar la imagen del mundo. Asegúrate de que la imagen sea de tipo PNG, JPG o JPEG y que su tamaño sea menor o igual a 7 MB.", "../views/models/admin/createWorld.php");
            }
        } else {
            showErrorAndRedirect("Error al cargar la imagen del mundo. Asegúrate de seleccionar una imagen válida.", "../views/models/admin/createWorld.php");
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
