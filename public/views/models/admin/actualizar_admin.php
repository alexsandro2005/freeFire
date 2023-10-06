<?php
require_once 'menu.php';

require_once("../../../../database//connection.php");
$bd = new Database();
$conexion = $bd->conectar();

session_start();

// se trae el documento de la persona la cual vamos a actualizar
$documento = $_GET['actualizar'];

$consulta = $conexion->prepare("SELECT * FROM usuario INNER JOIN roles ON usuario.idRol = roles.idRol INNER JOIN estado ON usuario.estadoUsuario = estado.id_estado INNER JOIN tipodocu ON usuario.tipoDocumento = tipodocu.id_tipoDocu INNER JOIN genero ON usuario.genero = genero.id_genero WHERE usuario.documento=$documento");
$consulta->execute();
$consul1 = $consulta->fetch();

?>

<?php
    $consulta1 = $conexion->prepare("SELECT * FROM tipodocu");
    $consulta1->execute();
    $consul=$consulta1->fetch();

    $consulta2 = $conexion->prepare("SELECT * FROM genero");
    $consulta2->execute();
    $consulll=$consulta2->fetch();

    $consulta4 = $conexion->prepare("SELECT * FROM roles");
    $consulta4->execute();
    $consullll=$consulta4->fetch();

    $consulta5 = $conexion->prepare("SELECT * FROM estado");
    $consulta5->execute();
    $consulllll=$consulta5->fetch();
?>


<?php
if ((isset($_POST["btn_actualizar"]))) {
    
    $tipDocu = $_POST['tipoDocumento'];
    $documento = $_POST['documento'];
    $nombre = $_POST['nombreCompleto'];
    $usuario = $_POST['nombreUsuario'];
    $genero = $_POST['genero'];
    $estado = $_POST['estadoUsuario'];
    $rol = $_POST['idRol'];
    $correo = $_POST['correoElectronico'];

    $consulta2 = $conexion->prepare("SELECT * FROM usuario WHERE documento= '$documento'");
    $consulta2->execute();
    $consull = $consulta2->fetch();

    $consulta3 = $conexion->prepare("UPDATE usuario SET tipoDocumento='$tipDocu', nombreCompleto='$nombre', nombreUsuario='$usuario', genero='$genero', estadoUsuario='$estado', idRol='$rol', correoElectronico='$correo' WHERE documento='$documento'");
    $consulta3->execute();
    echo '<script>alert ("Registro exitoso, gracias");</script>';
    echo '<script>window.location="./listar_admin.php"</script>';
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
                                    <h2 style="font-size: 26px;">Actualizar ADMINISTRADOR</h2>
                                    <span>ACTUALIZA a los administradores de free fire.</span>

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
                                    <h4 class="card-title">ACTUALIZAR || Admin <?php echo $documento ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" enctype="multipart/form-data" autocomplete="off">

                                            <div class="mb-3 m-auto">
                                                <select name="tipoDocumento" class="form-control form-control-lg input-text" >
                                                    <option value="<?php echo $consul1['id_tipoDocu'] ?>"><?php echo $consul1['tipoDocu'] ?></option>
                                                    <?php

                                                    do {

                                                    ?>
                                                        <option value="<?php echo ($consul['id_tipoDocu']) ?>"><?php echo ($consul['tipoDocu']) ?></option>
                                                    <?php
                                                    } while ($consul=$consulta1->fetch());
                                                    ?>
                                                </select>
                                                <br>
                                                <input type="number" placeholder="Numero de documento" class="form-control form-control-lg input-text" name="documento" onkeypress="return(multiplenumber(event));" oninput="maxlengthNumber(this);" maxlength="10" required value="<?php echo $consul1['documento'] ?>" readonly>
                                                <br>
                                                <input type="text" placeholder="nombre Completo" class="form-control form-control-lg input-text" name="nombreCompleto" minlength="11" oninput="soloLetrasEspacios(event)" onkeypress="return(textspace(event));" maxlength="40" required onkeyup="mayuscula(this)" value="<?php echo $consul1['nombreCompleto'] ?>">
                                                <br>
                                                <input type="text" placeholder="Usuario" class="form-control form-control-lg input-text" name="nombreUsuario" required onkeyup="espacios(this), minuscula(this)" autocomplete="off" value="<?php echo $consul1['nombreUsuario'] ?>">
                                                <br>
                                                <select name="genero" class="form-control form-control-lg input-text" >
                                                    <option value="<?php echo $consul1['id_genero'] ?>"><?php echo $consul1['genero'] ?></option>
                                                    <?php

                                                    do {

                                                    ?>
                                                        <option value="<?php echo ($consulll['id_genero']) ?>"><?php echo ($consulll['genero']) ?></option>
                                                    <?php
                                                    } while ($consulll=$consulta2->fetch());
                                                    ?>
                                                </select>
                                                <br>
                                                <select name="estadoUsuario" class="form-control form-control-lg input-text" >
                                                    <option value="<?php echo $consul1['id_estado'] ?>"><?php echo $consul1['estado'] ?></option>
                                                    <?php

                                                    do {

                                                    ?>
                                                        <option value="<?php echo ($consulllll['id_estado']) ?>"><?php echo ($consulllll['estado']) ?></option>
                                                    <?php
                                                    } while ($consulllll=$consulta5->fetch());
                                                    ?>
                                                </select>
                                                <br>
                                                <select name="idRol" class="form-control form-control-lg input-text">
                                                    <option value="<?php echo $consul1['idRol'] ?>"><?php echo $consul1['rol'] ?></option>
                                                    <?php

                                                    do {

                                                    ?>
                                                        <option value="<?php echo ($consullll['idRol']) ?>"><?php echo ($consullll['rol']) ?></option>
                                                    <?php
                                                    } while ($consullll=$consulta4->fetch());
                                                    ?>
                                                </select>
                                                <br>
                                                <input type="email" placeholder="Correo Electronico" class="form-control form-control-lg input-text" name="correoElectronico" required onkeyup="espacios(this)" maxlength="40" value="<?php echo $consul1['correoElectronico'] ?>">
                                                <br>
                                            </div>

                                            <div class=" mb-3 m-auto">
                                                <input class="btn btn-warning" type="submit" name="btn_actualizar" value="ACTUALIZAR">

                                                <a href="./listar_admin.php" class="btn btn-danger">CANCELAR ACTUALIZACION</a>
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