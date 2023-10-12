<?php
require_once 'menu.php';
require_once("../../../../database/connection.php");
$bd = new Database();
$con = $bd->conectar();

session_start();

if(isset($_GET['eliminar'])) {
    $idNivel = $_GET['eliminar'];

    $elim_ven = $con->prepare("DELETE FROM niveles WHERE idNivel = :idNivel");
    $elim_ven->bindParam(":idNivel", $idNivel);

    if ($elim_ven->execute()) {
        echo '<script>alert("Se eliminó este nivel.");</script>';
        echo '<script>window.location="./listaNiveles.php"</script>';
    } else {
        echo '<script>alert("No se pudo eliminar este nivel.");</script>';
        echo '<script>window.location="./listaNiveles.php"</script>';
    }
}
?>