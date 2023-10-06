<?php
require_once '../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

if (isset($_POST["MM_registerWorld"]) && $_POST["MM_registerWorld"] == "formWorld") {
    $idMundo = $_POST['idMundo'];
    $nombreMundo = $_POST['nombreMundo'];


    // Consulta para verificar si el avatar ya existe
    $worldData = $connection->prepare("SELECT * FROM mundos WHERE idMundo = :idMundo OR nombreMundo = :nombreMundo");
    $worldData->bindParam(':idMundo', $idMundo);
    $worldData->bindParam(':nombreMundo', $nombreMundo);
    $worldData->execute();
    $validationWorld = $worldData->fetch(PDO::FETCH_ASSOC);

    if ($validationWorld) {
        echo '<script>alert("Los datos ingresados ya están registrados.");</script>';
        echo '<script>window.location="../views/models/admin/createWorld.php"</script>';
    } else if (empty($idMundo) || empty($nombreMundo)) {
        echo '<script>alert("Existen datos vacíos en el formulario, debes ingresar todos los datos.");</script>';
        echo '<script>window.location="../views/models/admin/createWorld.php"</script>';
    } else {
        // Verifica si se ha enviado un archivo y si no hay errores al subirlo
        if (isset($_FILES['imagenMundo']) && $_FILES['imagenMundo']['error'] === 0) {
            $permitidos = array("image/png", "image/jpg", "image/jpeg");
            $limite_KB = 7000;

            if (in_array($_FILES["imagenMundo"]["type"], $permitidos) && $_FILES["imagenMundo"]["size"] <= $limite_KB * 1024) {
                $ruta = 'worlds/';
                $imagenMundo = $ruta . $_FILES['imagenMundo']["name"];
                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }
                if (!file_exists($imagenMundo)) {
                    $resultado = @move_uploaded_file($_FILES["imagenMundo"]["tmp_name"], $imagenMundo);

                    if ($resultado) {
                        // Inserta los datos en la base de datos
                        $registerworld = $connection->prepare("INSERT INTO mundos(idMundo, nombreMundo, imagenMundo) VALUES(:idMundo, :nombreMundo, :imagenMundo)");
                        $registerworld->bindParam(':idMundo', $idMundo);
                        $registerworld->bindParam(':nombreMundo', $nombreMundo);
                        $registerworld->bindParam(':imagenMundo', $imagenMundo);
                        $registerworld->execute();

                        echo '<script>alert("Los datos han sido registrados correctamente.");</script>';
                        echo '<script>window.location="../views/models/admin/listaWorlds.php"</script>';
                    } else {
                        echo '<script>alert("Error al momento de cargar la imagen del mundo.");</script>';
                        echo '<script>window.location="../views/models/admin/createWorld.php"</script>';
                    }
                }
            } else {
                echo '<script>alert("Error al momento de cargar la imagen del mundo. Asegúrate de que la imagen sea de tipo PNG, JPG o JPEG y que su tamaño sea menor o igual a 3 MB.");</script>';
                echo '<script>window.location="../views/models/admin/createWorld.php"</script>';
            }
        } else {
            echo '<script>alert("Error al cargar la imagen del mundo. Asegúrate de seleccionar una imagen válida.");</script>';
            echo '<script>window.location="../views/models/admin/createWorld.php"</script>';
        }
    }
}
?>