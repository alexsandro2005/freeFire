<?php
require_once 'menu.php';
?>

<?php
require_once '../../../../database/connection.php';
$database = new Database();
$connection = $database->conectar();


$listipArma = $connection->prepare("SELECT * FROM tipoarma");
$listipArma->execute();
$tiparma = $listipArma->fetch();

// CONDICIONAL DEL FORMULARIO PARA CREAR NIVELES 
if (isset($_POST["MM_registerArmas"]) && $_POST["MM_registerArmas"] == "formLevel") {

    $id = $_POST['idArma'];
    $nombre = $_POST['nombreArma'];
    $balas = $_POST['cantidadBalas'];
    $dano = $_POST['daño'];
    $tiparma = $_POST['tipoArma'];

    if (empty($id) || empty($nombre) || empty($balas) || empty($dano) || empty($tiparma)) {
        echo '<script>alert("EXISTEN DATOS VACÍOS");</script>';
        echo '<script>window.location="./crear_armas.php"</script>';
    } else {
        $consulta = $connection->prepare("INSERT INTO armas (idArma, nombreArma, cantidadBalas, daño, tipoarma) VALUES ('$id', '$nombre', '$balas', '$dano', '$tiparma')");

        if ($consulta->execute()) {
            echo '<script>alert("Registro exitoso, gracias");</script>';
            echo '<script>window.location="./listar_armas.php"</script>';
        } else {
            echo '<script>alert("Error al registrar el tipo de arma");</script>';
            echo '<script>window.location="./crear_armas.php"</script>';
        }
    }
}
?>


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
                                <h2>Registro de Armas</h2>
                                <span>Crea las mejores armas de free fire para jugar en diferentes tipos de juegos.</span>

                                <div class="col-xl-5 col-sm-6">
                                    <img src="../../../assets/images/chrono.png" alt="" class="sd-shape">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Columna para el formulario -->
                    <div class="col-xl-7 col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Crear Armas del juego</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" name="formLevel" enctype="multipart/form-data" autocomplete="off">

                                        <div class="mb-3">
                                            <input type="number" placeholder="Codigo del arma" class="form-control form-control-lg input-text" name="idArma" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="5" required>
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" placeholder="Nombre del arma" class="form-control form-control-lg input-text" name="nombreArma" minlength="5" oninput="soloLetrasEspacios(event)"  maxlength="40" required onkeyup="minuscula(this)">
                                            <br>

                                            <input class="form-control form-control-lg input-text" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="4" type="number" required name="cantidadBalas" placeholder="Ingresa la cantidad de balas">
                                        </div>

                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="4" minlength="1" type="number" required name="daño" placeholder="Ingresa la cantidad de daño">
                                        </div>

                                        <select name="tipoArma" class="form-control form-control-lg input-text" required id="">
                                            <option value="">Seleccione el tipo de arma</option>
                                            <?php

                                            do {

                                            ?>
                                                <option value="<?php echo ($tiparma['idTipoArma']) ?>"><?php echo ($tiparma['tipoArma']) ?></option>
                                            <?php
                                            } while ($tiparma = $listipArma->fetch());

                                            ?>
                                        </select>
                                        <br>

                                        <!-- <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input required accept="image/*" name="imagenNivel" type="file" class="form-file-input form-control">
                                            </div>
                                            <span class="input-group-text">Imagen del nivel</span>
                                        </div> -->


                                        <div class=" mb-3 m-auto">
                                            <input type="submit" class="btn bg-danger" value="Registrar"></input>
                                            <input type="hidden" value="formLevel" name="MM_registerArmas"></input>
                                            <a href="./index.php" class="btn btn-danger">Cancelar Registro</a>
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