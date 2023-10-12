<?php
require_once '../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

if (isset($_POST["MM_registerRange"]) && $_POST["MM_registerRange"] == "formRange") {
    $nombreRango = $_POST['nombreRango'];
    $puntosRequeridos = $_POST['puntosRequeridos'];

    // Consulta para verificar si el rango ya existe
    $rangeValidation = $connection->prepare("SELECT * FROM rangos WHERE nombreRango = :nombreRango OR puntosRequeridos = :puntosRequeridos");
    $rangeValidation->bindParam(':nombreRango', $nombreRango);
    $rangeValidation->bindParam(':puntosRequeridos', $puntosRequeridos);
    $rangeValidation->execute();
    $range = $rangeValidation->fetch(PDO::FETCH_ASSOC);

    if ($range) {
        showErrorAndRedirect("Los datos ingresados ya están registrados.", "../views/models/admin/createLevel.php");
    } elseif (empty($nombreRango) || empty($puntosRequeridos)) {
        showErrorAndRedirect("Existen datos vacíos en el formulario, debes ingresar todos los datos.", "../views/models/admin/createLevel.php");
    } else {
        // Verificamos si se ha enviado un archivo y si no hay errores al subirlo
        if (isset($_FILES['imagenRango']) && $_FILES['imagenRango']['error'] === 0) {
            $permitidos = array("image/png", "image/jpg", "image/jpeg");
            $limite_KB = 1000;

            if (in_array($_FILES["imagenRango"]["type"], $permitidos) && $_FILES["imagenRango"]["size"] <= $limite_KB * 1024) {
                $ruta = 'levels/';
                $imagenRango = $ruta . $_FILES['imagenRango']["name"];

                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }

                if (!file_exists($imagenRango)) {
                    $resultado = @move_uploaded_file($_FILES["imagenRango"]["tmp_name"], $imagenRango);

                    if ($resultado) {
                        // Inserta los datos en la base de datos
                        $registerRango = $connection->prepare("INSERT INTO rangos(nombreRango, puntosRequeridos, imagenRango) VALUES(:nombreRango, :puntosRequeridos, :imagenRango)");

                        $registerRango->bindParam(':nombreRango', $nombreRango);
                        $registerRango->bindParam(':puntosRequeridos', $puntosRequeridos);
                        $registerRango->bindParam(':imagenRango', $imagenRango);
                        $registerRango->execute();

                        showSuccessAndRedirect("Los datos han sido registrados correctamente.", "../views/models/admin/listaLevels.php");
                    } else {
                        showErrorAndRedirect("Error al momento de cargar la imagen del rango.", "../views/models/admin/createLevel.php");
                    }
                }
            } else {
                showErrorAndRedirect("Error al momento de cargar la imagen del rango. Asegúrate de que la imagen sea de tipo PNG, JPG o JPEG y que su tamaño sea menor o igual a 1 MB.", "../views/models/admin/createLevel.php");
            }
        } else {
            showErrorAndRedirect("Error al cargar la imagen del rango. Asegúrate de seleccionar una imagen válida.", "../views/models/admin/createLevel.php");
        }
    }
}

function showErrorAndRedirect($message, $location) {
    echo "<script>alert('$message');</script>";
    echo "<script>window.location='$location';</script>";
}

function showSuccessAndRedirect($message, $location) {
    echo "<script>alert('$message');</script>";
    echo "<script>window.location='$location';</script>";
}
?>
