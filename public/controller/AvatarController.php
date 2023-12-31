<?php
require_once '../../database/connection.php';

function showAlertAndRedirect($message, $location) {
    echo "<script>alert('$message');</script>";
    echo "<script>window.location='$location';</script>";
}

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
        showAlertAndRedirect("Los datos ingresados ya están registrados.", "../views/models/admin/createAvatar.php");
    } elseif (empty($serialAvatar) || empty($nombreAvatar) || empty($descripcionAvatar)) {
        showAlertAndRedirect("Existen datos vacíos en el formulario, debes ingresar todos los datos.", "../views/models/admin/createAvatar.php");
    } else {
        // Verificamos si se ha enviado un archivo y si no hay errores al subirlo
        if (isset($_FILES['imagenAvatar']) && $_FILES['imagenAvatar']['error'] === 0) {
            $permitidos = array("image/png", "image/jpg", "image/jpeg");
            $limite_KB = 1000;

            if (in_array($_FILES["imagenAvatar"]["type"], $permitidos) && $_FILES["imagenAvatar"]["size"] <= $limite_KB * 1024) {
                $ruta = 'files/';
                $imagenAvatar = $ruta . $_FILES['imagenAvatar']["name"];
                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }
                if (!file_exists($imagenAvatar)) {
                    $resultado = @move_uploaded_file($_FILES["imagenAvatar"]["tmp_name"], $imagenAvatar);

                    if ($resultado) {
                        // Inserta los datos en la base de datos
                        $registerAvatar = $connection->prepare("INSERT INTO avatars(idAvatar, nombreAvatar, descripcionAvatar, imagenAvatar) VALUES(:serialAvatar, :nombreAvatar, :descripcionAvatar, :imagenAvatar)");
                        $registerAvatar->bindParam(':serialAvatar', $serialAvatar);
                        $registerAvatar->bindParam(':nombreAvatar', $nombreAvatar);
                        $registerAvatar->bindParam(':descripcionAvatar', $descripcionAvatar);
                        $registerAvatar->bindParam(':imagenAvatar', $imagenAvatar);
                        $registerAvatar->execute();

                        showAlertAndRedirect("Los datos han sido registrados correctamente.", "../views/models/admin/listaAvatars.php");
                    } else {
                        showAlertAndRedirect("Error al momento de cargar la imagen del avatar.", "../views/models/admin/createAvatar.php");
                    }
                }
            } else {
                showAlertAndRedirect("Error al momento de cargar la imagen del avatar. Asegúrate de que la imagen sea de tipo PNG, JPG o JPEG y que su tamaño sea menor o igual a 1 MB.", "../views/models/admin/createAvatar.php");
            }
        } else {
            showAlertAndRedirect("Error al cargar la imagen del avatar. Asegúrate de seleccionar una imagen válida.", "../views/models/admin/createAvatar.php");
        }
    }
}
?>
