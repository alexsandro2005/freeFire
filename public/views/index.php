<!DOCTYPE html>
<html>

<head>
    <!-- {{-- TITULO QUE TENDRA LA APLICACION --}} -->
    <title>Login || Free Fire</title>
    <!-- {{-- HOJA DE ESTILOS CSS --}} -->
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <!-- {{-- TIPO DE LETRA DE FONTS GOOGLE --}} -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!-- {{-- SCRIPT PARA TRABAJAR CON CODIGO DE JAVASCRIPT --}} -->
    <script src="../assets/js/fontawesome.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/images/Gareena.png" type="image/x-icon">
</head>

<body>
    <!-- {{-- Imagen de diseño que hace referencia a los colores emblema de la aplicacion --}} -->
    
    <div class="knife-icon">
    </div>
    <div class="container__vector"><img src="../assets/images/chrono.png" alt=""></div>
    <div class="hero">      
    </div>

    <div class="container">
        <div class="img">
            <!-- {{-- Logotipo de la aplicacion --}} -->
        </div>
        <!-- {{-- Contenedor general del formulario de inicio de sesion --}} -->
        <div class="login-content">
            <form action="" method="POST">
                <img class="imagen_logo" src="../assets/images/logo.png">
                <h2 class="title">Iniciar Sesion</h2>
                <div class="description">
                    <p>Ingrese por favor sus datos.</p>
                </div>

                <div class="inputs-container">
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Usuario</h5>
                            <input autofocus type="number" maxlength="10" required oninput="maxcelNumber(this);" minlength="6" onkeypress="return(multiplenumber(event));" name="id" class="input">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Contraseña</h5>
                            <input name="password" onkeypress="validarPassword(event)" type="password" autofocus onkeypress="" minlength="10" maxlength="20" oninput="maxlengthNumber(this);" class="input">
                        </div>
                    </div>
                    <div class="redirecciones">
                        <a href="passwords/recuperar_contrasena.php">Olvido su contraseña?</a>
                        <a href="register.php">Registrarme</a>
                        <a href="../../../index.php">Regresar</a>
                    </div>

                    <input type="submit" class="btn" value="Iniciar Sesion">

                </div>
            </form>
        </div>
    </div>
    <script src="../assets/js/login.js"></script>

    <script>

        
        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO EL NUMERO VALORES REQUERIDOS DE ACUERDO A LA LONGITUD MAXLENGTH DEL CAMPO -->

        function maxlengthNumber(obj) {

            if (obj.value.length > obj.maxLength) {
                obj.value = obj.value.slice(0, obj.maxLength);
                alert("Debe ingresar solo el numeros de digitos requeridos");
            }
        }
        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO EL NUMERO VALORES REQUERIDOS DE ACUERDO A LA LONGITUD MAXLENGTH DEL CAMPO EN ESTE CASO LO UTILIZAREMOS PARA EL NUMERO DE DOCUMENTO -->

        function maxcelNumber(obj) {

            if (obj.value.length > obj.maxLength) {
                obj.value = obj.value.slice(0, obj.maxLength);
                alert("Debe ingresar minimo 6 numeros y maximo 10 numeros para validar su numero de documento.");
            }
        }

        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO LETRAS -->

        function multipletext(e) {
            key = e.keyCode || e.which;

            teclado = String.fromCharCode(key).toLowerCase();

            letras = "qwertyuiopasdfghjklñzxcvbnm";

            especiales = "8-37-38-46-164-46";

            teclado_especial = false;

            for (var i in especiales) {
                if (key == especiales[i]) {
                    teclado_especial = true;
                    alert("Debe ingresar solo letras y espacios en el campo");
                    break;
                }
            }

            if (letras.indexOf(teclado) == -1 && !teclado_especial) {
                return false;
                alert("Debe ingresar solo letras y espacios en el campo");
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


        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO LETRAS Y ESPACIOS EN EL CAMPO EL CUAL SE INVOCA EL EVENTO  -->

        function textspace(e) {
            key = e.keyCode || e.which;

            teclado = String.fromCharCode(key).toLowerCase();

            letrasspace = "qwertyuiopasdfghjklñzxcvbnm ";

            especiales = "8-37-38-46-164-46";

            teclado_especial = false;

            for (var i in especiales) {
                if (key == especiales[i]) {
                    teclado_especial = true;
                    alert("Debe ingresar solo letras y espacios en el campo asignado");
                    break;
                }
            }

            if (letrasspace.indexOf(teclado) == -1 && !teclado_especial) {
                return false;
                alert("Debe ingresar solo letras y espacios en el campo asignado");
            }
        }


        // <!-- FUNCION DE JAVASCRIPT QUE PERMITE INGRESAR SOLO LETRAS Y ESPACIOS EN EL CAMPO EL CUAL SE INVOCA EL EVENTO  -->

        function textguions(e) {
            key = e.keyCode || e.which;

            teclado = String.fromCharCode(key).toLowerCase();

            letrasguions = "qwertyuiopasdfghjklñzxcvbnm1234567890_";

            especiales = "8-37-38-46-164-46";

            teclado_especial = false;

            for (var i in especiales) {
                if (key == especiales[i]) {
                    teclado_especial = true;
                    alert("Debe ingresar solo letras y espacios en el campo asignado");
                    break;
                }
            }

            if (letrasguions.indexOf(teclado) == -1 && !teclado_especial) {
                return false;
            }
        }
    </script>


    <script src="../../js/formulario.js">

    </script>
</body>

</html>