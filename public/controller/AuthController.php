<?php
session_start();
require_once "../../database/connection.php";
$db = new Database();
$connection = $db->conectar();

if ($_POST["iniciarSesion"]) {

    //Iniciar sesion para los usuarios
    $emailUser = $_POST["email"];
    $passwordLog = $_POST['password'];

    // VARIABLES A LAS CUALES SE LES ASIGNA LOS VALORES RECIBIDOS DE LA FECHA Y HORA DE INGRESO DL USUARIO

    //Consultamos el usuario y la clave//

    $authValidation = $connection->prepare("SELECT * FROM usuario WHERE correoElectronico ='$emailUser' AND estadoUsuario = 1");
    $authValidation->execute();
    $authSession = $authValidation->fetch();

    if ($authSession && password_verify($passwordLog, $authSession['password'])) {

        if ($authSession['idRol'] == 2) {

            if ($authSession['avatar'] != null) {
                // DECLARACION DE LAS VARIABLES GLOBALES DE LA SESSIONS
                $_SESSION['id_user'] = $authSession['documento'];
                $_SESSION['nombres'] = $authSession['nombreCompleto'];
                $_SESSION['rol'] = $authSession['idRol'];
                $_SESSION['usuario'] = $authSession['nombreUsuario'];
                $_SESSION['email'] = $authSession['correoElectronico'];

                // HORARIO PREDETERMINADO PARA EL REGISTRO DE INGRESO DEL USUARIO A SU INTERFAZ
                date_default_timezone_set("America/Bogota");

                // REGISTRO DE INGRESO DEL USUARIO PARA VERIFICAR QUE TIPO DE USUARIO INGRESO
                $userentry = $connection->prepare("INSERT INTO entrada_jugadores(horario_entrada, documento) VALUES (NOW(), :id_user)");
                $userentry->bindParam(':id_user', $_SESSION['id_user']);
                $userentry->execute();

                ///dependiendo del tipo de usuario lo redireccionamos a una su pagina correspondiente//
                if ($_SESSION['rol'] == 2) {
                    header("Location:../views/models/player/index.php");
                    exit();
                }
            } else {

                // DECLARACION DE LAS VARIABLES GLOBALES DE LA SESSIONS
                $_SESSION['id_user'] = $authSession['documento'];
                $_SESSION['nombres'] = $authSession['nombreCompleto'];
                $_SESSION['rol'] = $authSession['idRol'];
                $_SESSION['usuario'] = $authSession['nombreUsuario'];
                $_SESSION['email'] = $authSession['correoElectronico'];

                // HORARIO PREDETERMINADO PARA EL REGISTRO DE INGRESO DEL USUARIO A SU INTERFAZ
                date_default_timezone_set("America/Bogota");

                // REGISTRO DE INGRESO DEL USUARIO PARA VERIFICAR QUE TIPO DE USUARIO INGRESO
                $userentry = $connection->prepare("INSERT INTO entrada_jugadores(horario_entrada, documento) VALUES (NOW(), :id_user)");
                $userentry->bindParam(':id_user', $_SESSION['id_user']);
                $userentry->execute();

                ///dependiendo del tipo de usuario lo redireccionamos a una su pagina correspondiente//
                if ($_SESSION['rol'] == 2) {
                    header("Location:../views/models/player/avatarSelect.php?status=1");
                    exit();
                }else{
                    session_destroy();
                    echo '<script>alert("No tienes permiso para acceder a este tipo de cuenta.");</script>';
                    echo '<script>window.location="../views/auth/error.php"</script>';
                }
            }

        } else {
            // DECLARACION DE LAS VARIABLES GLOBALES DE LA SESSIONS
            $_SESSION['id_user'] = $authSession['documento'];
            $_SESSION['nombres'] = $authSession['nombreCompleto'];
            $_SESSION['rol'] = $authSession['idRol'];
            $_SESSION['usuario'] = $authSession['nombreUsuario'];
            $_SESSION['email'] = $authSession['correoElectronico'];

            // HORARIO PREDETERMINADO PARA EL REGISTRO DE INGRESO DEL USUARIO A SU INTERFAZ
            date_default_timezone_set("America/Bogota");

            // REGISTRO DE INGRESO DEL USUARIO PARA VERIFICAR QUE TIPO DE USUARIO INGRESO
            $userentry = $connection->prepare("INSERT INTO entrada_jugadores(horario_entrada, documento) VALUES (NOW(), :id_user)");
            $userentry->bindParam(':id_user', $_SESSION['id_user']);
            $userentry->execute();

            ///dependiendo del tipo de usuario lo redireccionamos a una su pagina correspondiente//

            if ($_SESSION['rol'] == 1) {

                header("Location:../views/models/admin/index.php");
                exit();
            } else{
                session_destroy();
                echo '<script>alert("No tienes permiso para acceder a este tipo de cuenta.");</script>';
                echo '<script>window.location="../views/auth/error.php"</script>';

            }
        }

    } else {

        echo '<script>alert("Los datos ingresados son incorrectos, Por favor intentelo nuevamente.");</script>';
        echo '<script>window.location="../views/auth/error.php"</script>';
    }
}
