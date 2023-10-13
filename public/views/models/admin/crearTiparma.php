<?php
require_once 'menu.php';

require_once '../../../../database/connection.php';
$basedatos = new Database();
$conexion = $basedatos->conectar();

if (isset($_POST["btn-registrar"])) {
    $id = $_POST['idTipoArma'];
    $tipoArma = $_POST['tipoArma'];

    if (empty($id) || empty($tipoArma)) {
        echo '<script>alert("EXISTEN DATOS VACÍOS");</script>';
        echo '<script>window.location="createAdmin.php"</script>';
    } else {
        $consulta3 = $conexion->prepare("INSERT INTO tipoarma (idTipoArma, tipoArma) VALUES ('$id', '$tipoArma')");

        if ($consulta3->execute()) {
            echo '<script>alert("Registro exitoso, gracias");</script>';
            echo '<script>window.location="./listar_tipoArma.php"</script>';
        } else {
            echo '<script>alert("Error al registrar el tipo de arma");</script>';
            echo '<script>window.location="./crearTiparma.php"</script>';
        }
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
                                    <h2 style="font-size: 26px;">Registro TIPO ARMAS</h2>
                                    <span>Crea los tipos de armas para los jugadores de free fire.</span>

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
                                    <h4 class="card-title">TIPOS DE ARMAS</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" enctype="multipart/form-data" autocomplete="off">

                                            <div class="mb-3 m-auto">
                                                <input type="number" placeholder="Codigo del tipo de arma" class="form-control form-control-lg input-text" name="idTipoArma" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="5" required>
                                                <br>

                                                <input type="text" placeholder="Nombre del tipo de arma" class="form-control form-control-lg input-text" name="tipoArma" minlength="5" oninput="soloLetrasEspacios(event)" maxlength="25" required onkeyup="minuscula(this)">
                                                <br>
                                            </div>

                                            <div class=" mb-3 m-auto">
                                                <button type="submit" value="registrar" name="btn-registrar" class="btn btn-warning boton-registrar">REGISTAR</button>

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