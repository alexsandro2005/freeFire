<?php
require_once("../../../../database//connection.php");
$bd = new Database();
$conexion = $bd->conectar();

session_start();

if(isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];

    // Realizar la consulta para eliminar el usuario con el documento especificado
    $eliminar = $conexion->prepare("DELETE FROM mundos WHERE idMundo = :id");
    $eliminar->bindParam(":id", $id);

    if($eliminar->execute()) {
        echo '<script>alert("Mundo eliminado correctamente.");</script>';
        echo '<script>window.location="./listaWorlds.php";</script>';
    } else {
        echo '<script>alert("Error al eliminar el mundo. Por favor, inténtelo de nuevo.");</script>';
        echo '<script>window.location="./listaWorlds.php";</script>';
    }
} else {
    echo '<script>window.location="./listaWorlds.php";</script>';
}
?>
