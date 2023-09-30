<?php
    require_once("../../../../database/connection.php");
    $db = new Database();
    $connection = $db->conectar();

?>


<!----CONSULTA SQL TIPO USUARIOS---->

<?php

    $idAvatar = $_GET["idAvatar"];

    //delete * from user  where id= $id_type_user

    $delete=$connection->prepare("DELETE FROM avatars WHERE id ='".$idAvatar."'");
    $delete-> execute();
    $borrar=$delete -> fetch(PDO::FETCH_ASSOC);

    if($borrar){
        echo '<script> alert ("// LOS DATOS SE ELIMINARON CORRECTAMENTE //");</script>';
        echo '<script> window.location= "./listaAvatars.php"</script>';

    }else{
        echo '<script> alert ("// LOS DATOS SE ELIMINARON CORRECTAMENTE //");</script>';
        echo '<script> window.location= "./listaAvatars.php"</script>';

    }

?>