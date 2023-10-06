<?php
require_once("../../../../database//connection.php");
$bd = new Database();
$conexion = $bd->conectar();

session_start();

if(isset($_GET['eliminar'])) {
    $documento = $_GET['eliminar'];

    // Realizar la consulta para eliminar el usuario con el documento especificado
    $eliminar = $conexion->prepare("DELETE FROM usuario WHERE documento = :documento");
    $eliminar->bindParam(":documento", $documento);

    if($eliminar->execute()) {
        echo '<script>alert("Usuario eliminado correctamente.");</script>';
        echo '<script>window.location="./listar_admin.php";</script>';
    } else {
        echo '<script>alert("Error al eliminar el usuario. Por favor, inténtelo de nuevo.");</script>';
        echo '<script>window.location="./listar_admin.php";</script>';
    }
} else {
    echo '<script>window.location="./listar_admin.php";</script>';
}
?>
