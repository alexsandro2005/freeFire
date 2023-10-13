<?php

session_start();
require_once "../../../../database/connection.php";
$db = new Database();
$connection = $db->conectar();

if (!isset($_SESSION['usuario']) || !isset($_SESSION['rol'])) {
    echo "<script>alert('Debes iniciar sesión');</script>";
    header("Location:../../auth/index.php");
    exit(); // Agregar exit para asegurar que el script se detenga
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--==================== ESTILOS CSS ====================-->
    <link rel="stylesheet" href="../../../assets/css/admin.css">
    <!--==================== SWIPER CSS ====================-->

    <link rel="stylesheet" href="../../../assets/css/swiper-bundle.min.css">

    <title>Bienvenido <?php echo $_SESSION['nombres'] ?></title>
    <link rel="shortcut icon" href="../../../assets/images/Gareena.png" type="image/x-icon">

    <style>

    .container_body::before {
        content: "";
        position: absolute;
        height: 1000px;
        width: 700px;
        top: -10%;
        right: 15%;
        background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url('../../../controller/<?php echo $user['imagenNivel'] ?>');
        background-size: cover;
        background-position: center center;
        clip-path: circle(50% at 85% 14%);
        z-index: -100;

    }


    </style>
</head>
<body>


    <!--==================== HEADER OF MENU DE NAVEGACION ====================-->
    <header class="header" id="header">
        <nav class="nav container">

            <a href="public/views/authentication/login.php" class="nav_logo"><img src="../../../assets/images/logo.png" alt=""></a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">


                    <li class="nav_item">
                        <a href="index.php" class="nav_link active-link">
                            <i class="uil uil-user-circle nav_icon"></i>Regresar
                        </a>
                    </li>

                    <?php

if (isset($_POST['btncerrar'])) {

    session_destroy();

    header("Location:../../../index.php");
}
?>
                    <li class="nav_item">
                        <form method="POST" action="">
							<span class="ms-2">
                                <input type="submit" value="Cerrar Sesion" id="btn_quote" name="btncerrar" class="nav_link active-link button_input"/><i class="uil uil-user-circle nav_icon"></i>
							</span>
                        </form>
                    </li>

                </ul>

                <i class="uil uil-times nav_close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!---  Theme Change button -->

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

     <?php
date_default_timezone_set('America/Bogota');

$selectPartida = $connection->prepare("SELECT * FROM partida INNER JOIN mundos ON partida.id_mundo = mundos.idMundo");
$selectPartida->execute();
$partidas = $selectPartida->fetchAll(PDO::FETCH_ASSOC);
?>

    <section class="services section" id="services">

            <h2 class="section_title">Partidas Activas</h2>
            <span id="fechaHora" class="section_subtitle"></span>

            <script>
                function mostrarFechaHoraColombia() {
                    const ahora = new Date();
                    const opciones = { timeZone: 'America/Bogota', hour12: false };
                    const fechaHoraColombia = ahora.toLocaleString('es-CO', opciones);
                    document.getElementById('fechaHora').textContent = fechaHoraColombia;
                }

                // Mostrar la fecha y hora inicial
                mostrarFechaHoraColombia();

                // Actualizar la fecha y hora cada segundo
                setInterval(mostrarFechaHoraColombia, 1000);
            </script>

            <div class="services_container container grid">
                <!--====================  SERVICES 1 ====================-->

                <?php

                if (!empty($partidas)) {

                    foreach ($partidas as $partida) {
                        ?>
                <div class="services_content">

                        <div>
                            <img src="../../../controller/<?=$partida['imagenMundo']?>" alt="" class="uil uil-window services_icon">
                            <h3 class="services_title"><?=$partida['idMundo']?></h3>
                            <h3 class="services_title"><?=$partida['nombreMundo']?></h3>
                        </div>
                        <form action="" method="GET" autocomplete="off">
                            <input type="hidden" value="<?=$partida['id_partida']?>">
                            <button class="button button--flex button--small button--link services_button" type="submit" onclick="return confirm('¿Desea ingresar en la partida seleccionada?');">Iniciar
                            <i class="uil uil-arrow-right button_icon"></i></button>
                        </form>

                </div>


                                <?php
                }
                } else {
                    ?>


            <div class="services_content">
                    <a href="">
                        <div>
                            <i class="uil uil-window-grid services_icon"></i>
                            <h3 class="services_title">No hay partidas disponibles</h3>
                        </div>
                    </a>
                </div>




                    <?php
}
?>


            </div>
        </section>