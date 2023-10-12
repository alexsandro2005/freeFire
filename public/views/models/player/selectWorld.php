<?php

session_start();

require_once '../../../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

$documento = $_SESSION['id_user'];

$userdata = $connection->prepare("SELECT * FROM usuario INNER JOIN avatars INNER JOIN niveles INNER JOIN detalle_nivel INNER JOIN rangos ON usuario.avatar = avatars.id AND detalle_nivel.id_jugador = usuario.documento AND detalle_nivel.id_nivel = niveles.idNivel AND rangos.puntosRequeridos = usuario.puntosAcumulados WHERE usuario.documento = $documento");
$userdata->execute();
$user = $userdata->fetch(PDO::FETCH_ASSOC);

$rangosJuego = $connection->prepare("SELECT * FROM rangos");
$rangosJuego->execute();
$rango = $rangosJuego->fetchAll(PDO::FETCH_ASSOC);

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

    <title>Seleccion de mundo <?php echo $_SESSION['nombres'] ?></title>
    <link rel="shortcut icon" href="../../../assets/images/Gareena.png" type="image/x-icon">

    <style>

.container_body::before {
    content: "";
    position: absolute;
    height: 1000px;
    width: 700px;
    top: -10%;
    right: 15%;
    background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url('../../../controller/<?php echo $user['imagenNivel']?>');
    background-size: cover;
    background-position: center center;
    clip-path: circle(50% at 85% 14%);
    z-index: -100;

}


    </style>
</head>
<body>
    <div class="container_body">
    </div>

    <!--==================== HEADER OF MENU DE NAVEGACION ====================-->
    <header class="header" id="header">
        <nav class="nav container">

            <a href="public/views/authentication/login.php" class="nav_logo"><img src="../../../assets/images/logo.png" alt=""></a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">
                            <i class="uil uil-estate nav_icon"></i>Cambiar contraseña
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="public/views/authentication/login.php" class="nav_link active-link">
                            <i class="uil uil-user-circle nav_icon"></i>Datos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="public/views/authentication/register.php" class="nav_link active-link">
                            <i class="uil uil-user-circle nav_icon"></i>Cerrar Sesion
                        </a>
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

    <!--==================== MAIN O CONTAINER OF SECTIONS ====================-->


    <!--====================     STRUCTURE SECTION HOME   ====================-->

    <main class="main">
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                    <a href="#contact" class=" button_home button button--flex">
                            ¡Iniciar!<i class="uil uil-message button_icon"></i>
                        </a>
                        <a href="#contact" class=" button_home button button--flex">
                            ¡Empezar ya!<i class="uil uil-message button_icon"></i>
                        </a>

                    </div>

                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g mask="url(#mask0)">
                                <image class="home_blob-img" x='12' y='18' xlink:href="../../../controller/<?=$user['imagenAvatar']?>" />
                            </g>
                        </svg>

                        <div class="home_images">
                            <svg class="home_blob_tree" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g mask="url(#mask0)">
                                    <image class="home_blob-img_two" x='12' y='18' xlink:href="../../../controller/<?=$user['imagenRango']?>" />

                                </g>
                            </svg>

                        </div>
                    </div>

                    <div class="home_data">
                        
                        <h3 class="home_subtitle">Bienvenido <span class="multiple-text"></span><span class="usuario"></h3>
                        <p class="home_description"><?=$user['nombreRango']?></p>
                        <p class="home_description"><?=$user['nombreNivel']?></p>

                    </div>
                </div>
            </div>
        </section>
    </main>



    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scroll-up-icon"></i>
    </a>

    <script src="../../../assets/js/styleSwitcher.js"></script>
    <script src="../../../asstes/js/main.js"></script>
    <script src="../../../assets/js/typed.js"></script>
    <script>
        // typed JS //

        <?php
echo 'const nombreUsuario =' . json_encode($_SESSION['nombres']) . ' ';

?>

        const typed = new Typed('.multiple-text', {
            strings: [nombreUsuario,nombreUsuario,nombreUsuario,nombreUsuario],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true
        });
    </script>

</body>

</html>