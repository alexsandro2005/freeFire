<?php
require_once 'menu.php';

require_once '../../../../database/connection.php';
$basedatos = new Database();
$conexion = $basedatos->conectar();

$consulta = $conexion->prepare("SELECT * FROM usuario INNER JOIN roles ON usuario.idRol = roles.idRol INNER JOIN estado ON usuario.estadoUsuario = estado.id_estado INNER JOIN tipodocu ON usuario.tipoDocumento = tipodocu.id_tipoDocu INNER JOIN genero ON usuario.genero = genero.id_genero");
$consulta->execute();
$consul = $consulta->fetch();


$consulta1 = $conexion->prepare("SELECT * FROM tipodocu");
$consulta1->execute();
$consul = $consulta1->fetch();

$consulta2 = $conexion->prepare("SELECT * FROM genero");
$consulta2->execute();
$consulll = $consulta2->fetch();

$consulta4 = $conexion->prepare("SELECT * FROM roles");
$consulta4->execute();
$consullll = $consulta4->fetch();

$consulta5 = $conexion->prepare("SELECT * FROM estado");
$consulta5->execute();
$consulllll = $consulta5->fetch();
?>

<?php
if ((isset($_POST["btn-registrar"]))) {
    $tipDocu = $_POST['tipoDocumento'];
    $documento = $_POST['documento'];
    $nombre = $_POST['nombreCompleto'];
    $usuario = $_POST['nombreUsuario'];
    $genero = $_POST['genero'];
    $estado = $_POST['estadoUsuario'];
    $rol = $_POST['idRol'];
    $correo = $_POST['correoElectronico'];
    $password = $_POST['password'];

    $options = ['cost' => 12];
    $hash = password_hash($password, PASSWORD_DEFAULT, $options);

    date_default_timezone_set('America/Bogota');
    $fecha_actual = date('Y-m-d H:i:s');

    $consulta2 = $conexion->prepare("SELECT * FROM usuario WHERE documento= '$documento'");
    $consulta2->execute();
    $consull = $consulta2->fetch();

    $consulta3 = $conexion->prepare("SELECT * FROM usuario WHERE nombreUsuario= '$usuario'");
    $consulta3->execute();
    $consulll = $consulta3->fetch();

    if ($consull) {
        echo '<script>alert ("El documento ya se ha registrado, ingrese otro.");</script>';
        echo '<script>windows.location="createJuga.php"</script>';
    } else if ($consulll) {
        echo '<script>alert ("El usuario ya existe, por favor ingrese otro.");</script>';
        echo '<script>windows.location="createJuga.php"</script>';
    } else if ($tipDocu == "" || $documento == "" || $nombre == "" || $usuario == "" || $genero == "" || $estado == "" || $rol == "" || $correo == "" || $password == "") {
        echo '<script>alert ("EXISTEN DATOS VACIOS");</script>';
        echo '<script>windows.location="createJuga.php"</script>';
    } else {
        $consulta3 = $conexion->prepare("INSERT INTO usuario (tipoDocumento ,documento, nombreCompleto, nombreUsuario, genero, estadoUsuario, idRol, correoElectronico, password, fecha_registro) VALUES ('$tipDocu', '$documento','$nombre', '$usuario','$genero','$estado','$rol','$correo','$hash','$fecha_actual')");
        $consulta3->execute();
        echo '<script>alert ("Registro exitoso, gracias");</script>';
        echo '<script>window.location="./listar_juga.php"</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <!-- Columna para la imagen con el texto -->
                        <div class="col-xl-5 col-lg-5">
                            <div class="card body-card">
                                <div class="card-body tryal">
                                    <h2 style="font-size: 26px;">Registro JUGADORES</h2>
                                    <span>Crea a los Jugadores de free fire.</span>

                                    <div class="col-xl-5 col-sm-6">
                                        <br><br><br><br><br><br><br><br>
                                        <img src="../../../assets/images/chrono.png" alt="" class="sd-shape">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Columna para el formulario -->
                        <div class="col-xl-7 col-lg-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">JUGADORES</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" enctype="multipart/form-data" autocomplete="off">

                                            <div class="mb-3 m-auto">
                                                <select name="tipoDocumento" class="form-control form-control-lg input-text" required id="">
                                                    <option value="">Seleccione tipo de documento</option>
                                                    <?php

                                                    do {

                                                    ?>
                                                        <option value="<?php echo ($consul['id_tipoDocu']) ?>"><?php echo ($consul['tipoDocu']) ?></option>
                                                    <?php
                                                    } while ($consul = $consulta1->fetch());

                                                    ?>
                                                </select>
                                                <br>
                                                <input type="number" placeholder="Numero de documento" class="form-control form-control-lg input-text" name="documento" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="10" required>
                                                <br>
                                                <input type="text" placeholder="nombre Completo" class="form-control form-control-lg input-text" name="nombreCompleto" minlength="11" oninput="soloLetrasEspacios(event)" onkeypress="return(textspace(event));" maxlength="40" required onkeyup="mayuscula(this)">
                                                <br>
                                                <input type="text" placeholder="Usuario" class="form-control form-control-lg input-text" name="nombreUsuario" required onkeyup="espacios(this), minuscula(this)" autocomplete="off">
                                                <br>
                                                <select name="genero" class="form-control form-control-lg input-text" required id="">
                                                    <option value="">Seleccione tipo de genero</option>
                                                    <?php

                                                    do {

                                                    ?>
                                                        <option value="<?php echo ($consulll['id_genero']) ?>"><?php echo ($consulll['genero']) ?></option>
                                                    <?php
                                                    } while ($consulll = $consulta2->fetch());

                                                    ?>
                                                </select>

                                                <input type="hidden" placeholder="Estado" readonly class="form-control form-control-lg input-text" value="1" name="estadoUsuario">

                                                <input type="hidden" placeholder="Rol" readonly class="form-control form-control-lg input-text" value="2" name="idRol">
                                                <br>
                                                <input type="email" placeholder="Correo Electronico" class="form-control form-control-lg input-text" name="correoElectronico" required onkeyup="espacios(this)" maxlength="40">
                                                <br>
                                                <div class="input-group">
                                                    <input type="password" placeholder="Contraseña" name="password" class="form-control form-control-lg input-text clave" title="Debe tener de 6 a 12 digitos" required onkeyup="espacios(this)" minlength="6" maxlength="12">
                                                    <button type="button" class="icono fas fa-eye mostrarClave w-20 bg-gradient"></button>
                                                </div>
                                            </div>

                                            <div class=" mb-3 m-auto">
                                                <button type="submit" value="registrar" name="btn-registrar" class="btn btn-warning boton-registrar">REGISTAR JUGADOR</button>

                                                <a href="./index.php" class="btn btn-danger">CANCELAR REGISTRO</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<?php
require_once 'footer.php';
?>


<!--========================================
       Mis Scripts
    ==========================================-->
<script src="../../../assets/js/register.js"></script>


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