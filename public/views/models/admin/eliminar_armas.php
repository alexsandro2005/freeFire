<?php
require_once 'menu.php';
require_once("../../../../database/connection.php");
$bd = new Database();
$con = $bd->conectar();

if (isset($_GET['eliminar']) && is_numeric($_GET['eliminar'])) {
    $id = $_GET['eliminar'];

    $error = null; // Variable para almacenar mensajes de error
    $message = null; // Variable para almacenar mensajes de éxito

    try {
        $elim_ar = $con->prepare("DELETE FROM armas WHERE idArma = :id");
        $elim_ar->bindParam(":id", $id, PDO::PARAM_INT); // Asegurando que sea un entero

        if ($elim_ar->execute()) {
            $message = "El arma se eliminó exitosamente.";
        } else {
            $error = "No se pudo eliminar el arma.";
        }
    } catch (PDOException $e) {
        $error = "Error en la base de datos: " . $e->getMessage();
    }

    if ($error) {
        echo '<script>alert("' . $error . '");</script>';
    } elseif ($message) {
        echo '<script>alert("' . $message . '");</script>';
    }

    echo '<script>window.location="./listar_armas.php"</script>';
}
?>
