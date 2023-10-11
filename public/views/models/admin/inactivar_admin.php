<?php
    require_once 'menu.php';
    require_once("../../../../database/connection.php");
    $bd = new Database();
    $connection = $bd->conectar();

    // viene del name del formulario al activar usuario
    $inac = $_GET['inactivar'];

    $con = $connection->prepare("UPDATE usuario SET estadoUsuario = 2 WHERE documento = :inactivo");
    $con->bindParam(":inactivo", $inac);
    $con->execute();
    $inactivo = $con->rowCount(); // Usar rowCount para verificar si se realizó la actualización

    // $int = $connection->prepare("UPDATE usuario SET fallos = 0 WHERE documento = :activo");
    // $int->bindParam(":activo", $act);
    // $int->execute();
    // $intentos = $int->rowCount(); // Usar rowCount para verificar si se realizó la actualización

    // if ($activar > 1 && $intentos > 0) {
    if ($inactivo == 1 ) {
        echo '<script>alert ("Bloqueo exitoso, gracias");</script>';
        echo '<script>window.location="./listar_admin.php"</script>';
        
        exit();

    } else {
        echo "No se pudo bloquear el usuario :(";
    }
?>
