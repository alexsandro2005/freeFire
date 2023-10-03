<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesion || Free Fire</title>

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
                    <p class="descripcion " id="color-text">Ingresa a tu cuenta para batallar por ser el unico sobreviviente y avanzar de nivel para una mejor experiencia.</p>

                    <!-- Tabs -->
                    <ul class="tabs-links">
                        <li class="tab-link active">Iniciar Sesión</li>
                        <li class="tab-link ">Registrate</li>
                        
                    </ul>

                    <!--========================================
                        Formulario logue
                    ==========================================-->
                    <form action="../../controller/AuthController.php" autocomplete="off" method="POST" id="formLogin" class="formulario active">

                        <div class="error-text">
                            <p>aqui los errores del formulario</p>
                        </div>

                        <input type="text" placeholder="Ingresa tu nombre de usuario" class="input-text color-text" name="username" required onkeyup="espacios(this), minuscula(this)" autocomplete="off">

                        <div class="grupo-input">
                            <input type="password" placeholder="Ingresa tu Contraseña" name="password" class="input-text clave" title="Debe tener de 6 a 12 digitos" required onkeyup="espacios(this)" minlength="6" maxlength="20" >
                            <button type="button" class="icono fas fa-eye mostrarClave"></button>
                        </div>

                        <div class="redirecciones">
                            <a href="passwords/changePassword.php" class="link">¿Ovidaste tu contraseña?</a>
                            <a href="passwords/changePassword.php" class="link return">Regresar</a>
                        </div>

                        <input class="btn" type="submit" name="iniciarSesion" value="Iniciar Sesion">

                        

                    </form>

                    <!--========================================
                        Formulario de Registro
                    ==========================================-->
                    <form action="../../controller/RegisterController.php" name="formRegister" autocomplete="off" method="POST" class="formulario">
                        <!-- contenedor que nos permitira mostrar los errores de acuerdo al estado del formulario -->
                        <div class="error-text">
                        </div>

                        <!-- campos para registrar un nuevo usuario -->

                        <select name="tipoDocumento" class="input-text" required id="select">
                            <option value="" selected>Seleccione tipo de documento</option>
                            <option value="C.C.">Cedula de Ciudadania</option>
                            <option value="T.I.">Tarjeta de Identidad</option>
                        </select>

                        <input type="number" placeholder="Numero de documento" class="form-control form-control-lg input-text color-text" name="documento" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="10" required>

                        <input type="text" placeholder="nombre Completo" class="form-control form-control-lg input-text color-text" name="nombreCompleto" minlength="11" oninput="soloLetrasEspacios(event)" onkeypress="return(textspace(event));" maxlength="40" required>

                        <input type="text" placeholder="Usuario" class="form-control form-control-lg input-text color-text" name="nombreUsuario" required onkeyup="espacios(this), minuscula(this)" autocomplete="off">

                        <select name="genero" class="input-text" required id="select2">
                            <option value="" selected>Seleccione tipo de genero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>

                        <input type="hidden" placeholder="Estado" readonly class="form-control form-control-lg input-text color-text" value="1" name="estadoUsuario">
                        <input type="hidden" placeholder="Estado" readonly class="form-control form-control-lg input-text color-text" value="2" name="idRol">

                        <input type="text" placeholder="Correo Electronico" class="form-control form-control-lg input-text" name="correoElectronico" required onkeyup="espacios(this)" maxlength="40">

                        <div class="grupo-input">
                            <input type="password" placeholder="Contraseña" name="password" class="form-control form-control-lg input-text clave color-text" title="Debe tener de 6 a 12 digitos" required onkeyup="espacios(this)" minlength="6" maxlength="12" >
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

                        <input type="submit" name="validar" value="Registrarme" class="btn"></input>
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


    <script>
        // FUNCION QUE PERMITE PONER EL TEXT EN MAYUSCULA
        function mayuscula(e) {
            e.value = e.value.toUpperCase();
        }

        // FUNCION QUE PERMITE PONER EL TEXT EN MINUSCULA
        function minuscula(e) {
            e.value = e.value.toLowerCase();
        }

        // FUNCION QUE NO PERMITE INGRESAR ESPACIOS
        function espacios(e) {
            e.value = e.value.replace(/ /g, '');
        }

        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO EL NUMERO VALORES REQUERIDOS DE ACUERDO A LA LONGITUD MAXLENGTH DEL CAMPO -->
        function maxlengthNumber(obj) {

            if (obj.value.length > obj.maxLength) {
                obj.value = obj.value.slice(0, obj.maxLength);
                alert("Debe ingresar solo el numeros de digitos requeridos");
            }
        }

        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO NUMEROS EN EL FORMULARIO ASIGNADO -->
        function multiplenumber(e) {
            key = e.keyCode || e.which;

            teclado = String.fromCharCode(key).toLowerCase();

            numeros = "1234567890";

            especiales = "8-37-38-46-164-46";

            teclado_especial = false;

            for (var i in especiales) {
                if (key == especiales[i]) {
                    teclado_especial = true;
                    alert("Debe ingresar solo numeros en el formulario");
                    break;
                }
            }

            if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
                return false;
                alert("Debe ingresar solo numeros en el formulario ");
            }
        }


        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO LETRAS. NUMEROS Y GUIONES BAJOS PARA LA CONTRASEÑA   -->
        function validarPassword(event) {
            // Obtenemos la tecla que se ha presionado
            var key = event.keyCode || event.which;

            // Convertimos el código de la tecla a su respectivo carácter
            var char = String.fromCharCode(key);

            // Definimos una expresión regular que solo permita números, letras y guiones bajos
            var regex = /[0-9a-zA-Z_]/;

            // Validamos si el carácter ingresado cumple con la expresión regular
            if (!regex.test(char)) {
                // Si no cumple, cancelamos el evento de ingreso de datos
                event.preventDefault();
                return false;
            }
        }
    </script>

</body>

</html>
