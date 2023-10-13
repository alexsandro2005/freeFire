<?php
require_once 'menu.php';
require_once("../../../../database/connection.php");
$bd = new Database();
$conexion = $bd->conectar();

if (isset($_GET['actualizar'])) {
    $id = $_GET['actualizar'];

    $consulta2 = $conexion->prepare("SELECT * FROM tipoarma WHERE idTipoArma = :id");
    $consulta2->bindParam(":id", $id);
    $consulta2->execute();
    $consul1 = $consulta2->fetch();
}

if (isset($_POST["btn_actualizar"])) {
    $id = $_POST['idTipoArma'];
    $tipoArma = $_POST['tipoArma'];

    $consulta2 = $conexion->prepare("SELECT * FROM tipoarma WHERE idTipoArma = :id");
    $consulta2->bindParam(":id", $id);
    $consulta2->execute();
    $consul1 = $consulta2->fetch();

    if ($consul1) {
        $consulta3 = $conexion->prepare("UPDATE tipoarma SET tipoArma = :tipoArma WHERE idTipoArma = :id");
        $consulta3->bindParam(":tipoArma", $tipoArma);
        $consulta3->bindParam(":id", $id);

        if ($consulta3->execute()) {
            echo '<script>alert("Actualización exitosa, gracias");</script>';
            echo '<script>window.location="./listar_tipoArma.php"</script>';
        } else {
            echo '<script>alert("Error al actualizar el tipo de arma");</script>';
        }
    } else {
        echo '<script>alert("El registro a actualizar no existe.");</script>';
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
                                    <h2 style="font-size: 26px;">Actualizar TIPO DE ARMAS</h2>
                                    <span>ACTUALIZA los tipos de armas de free fire.</span>

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
                                    <h4 class="card-title">ACTUALIZAR || Tipo de Arma <?php echo $id ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" enctype="multipart/form-data" autocomplete="off">

                                            <div class="mb-3 m-auto">
                                                <input type="number" placeholder="Codigo del tipo de arma" class="form-control form-control-lg input-text" name="idTipoArma" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="5" required value="<?php echo $consul1['idTipoArma'] ?>">
                                                <br>

                                                <input type="text" placeholder="Nombre del tipo de arma" class="form-control form-control-lg input-text" name="tipoArma" minlength="5" oninput="soloLetrasEspacios(event)" maxlength="25" required onkeyup="minuscula(this)" value="<?php echo $consul1['tipoArma'] ?>">
                                                <br>
                                            </div>

                                            <div class=" mb-3 m-auto">
                                                <input class="btn btn-warning" type="submit" name="btn_actualizar" value="ACTUALIZAR">

                                                <a href="./listar_tipoArma.php" class="btn btn-danger">CANCELAR ACTUALIZACION</a>
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
