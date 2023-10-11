<?php
    require_once 'menu.php';
    require_once("../../../../database/connection.php");
    $bd = new Database();
    $connection = $bd->conectar();

    // viene del name del formulario al activar usuario
    $act = $_GET['activar'];

    $con = $connection->prepare("UPDATE usuario SET estadoUsuario = 1 WHERE documento = :activo");
    $con->bindParam(":activo", $act);
    $con->execute();
    $activar = $con->rowCount(); // Usar rowCount para verificar si se realizó la actualización

    // $int = $connection->prepare("UPDATE usuario SET fallos = 0 WHERE documento = :activo");
    // $int->bindParam(":activo", $act);
    // $int->execute();
    // $intentos = $int->rowCount(); // Usar rowCount para verificar si se realizó la actualización

    // if ($activar > 1 && $intentos > 0) {
    if ($activar == 1 ) {
        echo '<script>alert ("Activacion exitosa, gracias");</script>';
        echo '<script>window.location="./listar_juga.php"</script>';
        
        exit();

    } else {
        echo "No se pudo activar el usuario :(";
    }
?>
