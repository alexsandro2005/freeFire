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
    background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url('../../../controller/<?php echo $user['imagenNivel'] ?>');
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
                    <li class="nav_item">
                        <a href="public/views/authentication/register.php" class="nav_link active-link">
                            <i class="uil uil-user-circle nav_icon"></i>
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

<!--- STRUCTURE SECTION CONTACT ME --->

<section class="contact section" id="contact">
            <h2 class="section_title"> Contactanos</h2>
            <span class="section_subtitle">Cualquier duda, Estamos para ayudarte y asesorarte.</span>

            <div class="contact_container container grid">
                <div>
                    <div class="contact_information">
                        <i class="uil uil-map-pin-alt contact_icon"></i>
                        <div>
                            <div class="contact_title">Plaza de la 21</div>
                            <span class="contact_subtitle"> Colombia - Ibague Cra 4 estadio entre calles 20 y 21</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-map-pin-alt contact_icon"></i>
                        <div>
                            <div class="contact_title">Plaza de la 28</div>
                            <span class="contact_subtitle"> Colombia - Ibague Cra. 4C entre calles 28 y 29</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-map-pin-alt contact_icon"></i>
                        <div>
                            <div class="contact_title">Plaza del Jardin</div>
                            <span class="contact_subtitle"> Colombia - Ibague Cra. 5 con Calle 75</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-map-pin-alt contact_icon"></i>
                        <div>
                            <div class="contact_title">Plaza de la 14</div>
                            <span class="contact_subtitle"> Colombia - Ibague Cra 1ª Sur con calles 14 y 15.</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-map-pin-alt contact_icon"></i>
                        <div>
                            <div class="contact_title">Plaza del Salado</div>
                            <span class="contact_subtitle"> Cl. 144, Ibagué, Tolima, Colombia</span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="" class="contact_label">Nombre Completo</label>
                            <input type="text" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="" class="contact_label">Correo Electronico</label>
                            <input type="email" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="" class="contact_label">Telefono</label>
                            <input type="number" class="contact_input">
                        </div>
                    </div>

                    <div class="contact_content">
                        <label for="" class="contact_label">Descripcion</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact_input textarea-fixed-height"></textarea>
                    </div>

                    <div>
                        <input type="submit" value="Enviar Informacion" class="button button--flex button_form-icon button_home">

                    </div>
                </form>
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



