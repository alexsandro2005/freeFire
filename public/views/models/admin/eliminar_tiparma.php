<?php
require_once 'menu.php';
require_once("../../../../database/connection.php");
$bd = new Database();
$con = $bd->conectar();

if(isset($_GET['eliminar'])) {
    $tipar = $_GET['eliminar'];

    try {
        $elim_tipar = $con->prepare("DELETE FROM tipoarma WHERE idTipoArma = :id");
        $elim_tipar->bindParam(":id", $tipar, PDO::PARAM_INT); // Asegurando que sea un entero

        if ($elim_tipar->execute()) {
            echo '<script>alert("Se eliminó este tipo de arma.");</script>';
        } else {
            echo '<script>alert("No se pudo eliminar este tipo de arma.");</script>';
        }

        echo '<script>window.location="./listar_tipoArma.php"</script>';
    } catch (PDOException $e) {
        echo '<script>alert("Error en la base de datos: ' . $e->getMessage() . '");</script>';
        echo '<script>window.location="./listar_tipoArma.php"</script>';
    }
}
?>
