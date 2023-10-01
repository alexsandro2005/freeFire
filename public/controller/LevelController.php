<?php
require_once '../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

if (isset($_POST["MM_registerLevel"]) && $_POST["MM_registerLevel"] == "formLevel") {

    $idNivel = $_POST['idNivel'];
    $nombreNivel = $_POST['nombreNivel'];
    $puntosRequeridos = $_POST['puntosRequeridos'];

    // Consulta para verificar si el avatar ya existe
    $levelValidation = $connection->prepare("SELECT * FROM niveles WHERE idNivel = :idNivel OR nombreNivel = :nombreNivel OR puntosRequeridos = :puntosRequeridos");
    $levelValidation->bindParam(':idNivel', $idNivel);
    $levelValidation->bindParam(':nombreNivel', $nombreNivel);
    $levelValidation->bindParam(':puntosRequeridos', $puntosRequeridos);
    $levelValidation->execute();
    $level = $levelValidation->fetch(PDO::FETCH_ASSOC);

    if ($level) {
        echo '<script>alert("Los datos ingresados ya están registrados.");</script>';
        echo '<script>window.location="../views/auth/index.php"</script>';

    } else if (empty($idNivel) || empty($nombreNivel) || empty($puntosRequeridos)) {
        echo '<script>alert("Existen datos vacíos en el formulario, debes ingresar todos los datos.");</script>';
        echo '<script>window.location="../views/models/admin/createLevel.php"</script>';
    } else {
        // Verificamos si se ha enviado un archivo y si no hay errores al subirlo
        if (isset($_FILES['imagenNivel']) && $_FILES['imagenNivel']['error'] === 0) {
            $permitidos = array("image/png", "image/jpg", "image/jpeg");
            $limite_KB = 1000;

            if (in_array($_FILES["imagenNivel"]["type"], $permitidos) && $_FILES["imagenNivel"]["size"] <= $limite_KB * 1024) {
                $ruta = 'levels/';
                $imagenNivel = $ruta . $_FILES['imagenNivel']["name"];
                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }
                if (!file_exists($imagenNivel)) {
                    $resultado = @move_uploaded_file($_FILES["imagenNivel"]["tmp_name"], $imagenNivel);

                    if ($resultado) {
                        // Inserta los datos en la base de datos
                        $registerNivel = $connection->prepare("INSERT INTO niveles(idNivel, nombreNivel, puntosRequeridos, imagenNivel) VALUES(:idNivel, :nombreNivel, :puntosRequeridos, :imagenNivel)");
                        $registerNivel->bindParam(':idNivel', $idNivel);
                        $registerNivel->bindParam(':nombreNivel', $nombreNivel);
                        $registerNivel->bindParam(':puntosRequeridos', $puntosRequeridos);
                        $registerNivel->bindParam(':imagenNivel', $imagenNivel);
                        $registerNivel->execute();

                        echo '<script>alert("Los datos han sido registrados correctamente.");</script>';
                        echo '<script>window.location="../views/models/admin/listaLevels.php"</script>';
                    } else {
                        echo '<script>alert("Error al momento de cargar la imagen del nivel.");</script>';
                        echo '<script>window.location="../views/models/admin/createLevel.php"</script>';
                    }
                }
            } else {
                echo '<script>alert("Error al momento de cargar la imagen del nivel. Asegúrate de que la imagen sea de tipo PNG, JPG o JPEG y que su tamaño sea menor o igual a 1 MB.");</script>';
                echo '<script>window.location="../views/models/admin/createLevel.php"</script>';
            }
        } else {
            echo '<script>alert("Error al cargar la imagen del avatar. Asegúrate de seleccionar una imagen válida.");</script>';
            echo '<script>window.location="../views/models/admin/createLevel.php"</script>';
        }
    }
}
?>