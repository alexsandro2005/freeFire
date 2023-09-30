<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in and Register || Free Fire</title>

    <!--========================================
        Fuentes - Tipo de letra - Iconografia
    ==========================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/images/Gareena.png" type="image/x-icon">
    <!--========================================
       Mis estilos
    ==========================================-->
    <link rel="stylesheet" href="../../assets/css/register.css">
</head>
<body>

    <!--========================================
       contenido
    ==========================================-->

    <div class="contenedor-login">

        <!--========================================
            Slider
        ==========================================-->
        <div class="contenedor-slider">

            <div class="slider">

                <!-- Slide 1 -->
                <div class="slide fade ">
                    <img src="../../assets/images/garena-free-fire-one-more-round-4k-wj.jpg" alt="">
                </div>

                <!-- Slide 2 -->
                <div class="slide fade">
                    <img src="../../assets/images/1098646.jpg" alt="">
                </div>
                <!-- Slide 2 -->
                <div class="slide fade">
                    <img src="../../assets/images/2023-garena-free-fire-4k-o9.jpg" alt="">
                </div>


            </div>

            <!-- Botones next y prev -->
            <a href="#" class="prev"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="next"><i class="fas fa-chevron-right"></i></a>

            <!-- dots -->
            <div class="dots">

                <!-- <span class="dot active"></span> -->

            </div>

        </div>

        <!--========================================
            Formularios
        ==========================================-->
        <div class="contenedor-texto">

            <div class="contenedor-form">

                <div class="container-center">

                    <h1 class="titulo"><img src="../../assets/images/logo.png" alt="" class="log_free"></h1>
                    <h1 class="titulo_login">Iniciar sesion </h1>
                    <p class="descripcion">Ingresa a tu cuenta para disfrutar de tus beneficios y de las mejores promocionesque tenemos par ti.</p>

                    <!-- Tabs -->
                    <ul class="tabs-links">
                        <li class="tab-link active">Iniciar Sesión</li>
                        <li class="tab-link ">Registrate</li>
                        <li class="tab-link "><a class="inicio" href="../../../index.php">Regresar</a></li>
                    </ul>

                    <!--========================================
                        Formulario logue
                    ==========================================-->
                    <form action="../../controller/AuthController.php"  autocomplete="off" method="POST" id="formLogin" class="formulario active">

                        <div class="error-text">
                            <p>aqui los errores del formulario</p>
                        </div>

                        <input type="text" placeholder="Ingresa tu nombre de usuario" class="input-text" name="username" >
                        <div class="grupo-input">

                            <input type="password" placeholder="Ingresa tu Contraseña" name="password" class="input-text clave">
                            <button type="button" class="icono fas fa-eye mostrarClave"></button>

                        </div>

                        <a href="#" class="link">¿Ovidaste tu contraseña?</a>


                        <input class="btn" type="submit" name="iniciarSesion" value="Iniciar Sesion">

                    </form>

                    <!--========================================
                        Formulario de Registro
                    ==========================================-->
                    <form action="../../controller/RegisterController.php" name="formRegister"  autocomplete="off" method="POST" class="formulario">
                        <!-- contenedor que nos permitira mostrar los errores de acuerdo al estado del formulario -->
                        <div class="error-text">
                        </div>

                        <!-- campos para registrar un nuevo usuario -->

                        <select name="tipoDocumento" class="input-text" required id="">
                            <option value="" selected>Seleccione tipo de documento</option>
                            <option value="C.C.">Cedula de Ciudadania</option>
                            <option value="T.I.">Tarjeta de Identidad</option>
                        </select>

                        <input type="number" placeholder="Numero de documento" class="input-text" name="documento">
                        <input type="text" placeholder="nombre Completo" class="input-text" name="nombreCompleto">
                        <input type="text" placeholder="Usuario" class="input-text" name="nombreUsuario">

                        <select name="genero" class="input-text" required id="">
                            <option value="" selected>Seleccione tipo de genero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>

                        <input type="hidden" placeholder="Estado" readonly class="input-text" value="1" name="estadoUsuario">
                        <input type="hidden" placeholder="Estado" readonly class="input-text" value="2" name="idRol">
                        <input type="text" placeholder="Correo Electronico" class="input-text" name="correoElectronico">


                        <div class="grupo-input">
                            <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                            <button type="button" class="icono fas fa-eye mostrarClave"></button>

                        </div>

                        <!-- Checkbox Personalizados
                        <label class="contenedor-cbx animate">
                            Me gustaría recibir notificaciones de mi perfil y noticias del juego
                            <input type="checkbox" name="cbx_notificaciones" checked>
                            <span class="cbx-marca"></span>
                        </label>

                        <label class="contenedor-cbx animate">
                            He leído y acepto los
                            <a href="#" class="link">Términos y Condiciones</a>
                            <a href="#" class="link">y Política de privacidad de Free Fire.</a>

                            <input type="checkbox" name="cbx_terminos" >
                            <span class="cbx-marca"></span>

                        </label> -->

                        <input type="submit" name="validar" value="Registrarme"class="btn"></input>
                        <input type="hidden" name="MM_register" value="formRegister">

                    </form>


                </div>

            </div>

        </div>

    </div>



    <!--========================================
       Mis Scripts
    ==========================================-->
    <script src="../../assets/js/register.js"></script>

</body>
</html>