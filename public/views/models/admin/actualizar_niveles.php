<?php
require_once 'menu.php';
require_once("../../../../database/connection.php");
$bd = new Database();
$connection = $bd->conectar();

// viene del name del boton de actualizacion
$idNivel = $_GET['idNivel'];

$consulta = $connection->prepare("SELECT * FROM niveles WHERE idNivel= '$idNivel'");
$consulta->execute();
$consull = $consulta->fetch();

?>


<?php
// CONDICIOINAL PARA ACTUALIZAR NIVELES
if (isset($_POST["btn_actualizar"]) && $_POST["btn_actualizar"] == "formLevel") {

    $nombre = $_POST['nombreNivel'];
    $puntos = $_POST['puntosRequeridos'];

    // Comprobar si 'idNivel' está presente en la URL
    if (isset($_GET['idNivel'])) {
        $idNivel = $_GET['idNivel'];
        // Resto del código aquí
        $consulta = $connection->prepare("SELECT * FROM niveles WHERE idNivel= '$idNivel'");
        $consulta->execute();
        $consull = $consulta->fetch();
    } else {
        // Manejar el caso en que 'idNivel' no está presente en la URL, por ejemplo, redireccionar o mostrar un mensaje de error.
        echo '<script>alert("ID de nivel no encontrado en la URL");</script>';
        // Puedes redireccionar a la página adecuada o tomar otra acción según tus necesidades.
    }


    // Comprobar si se ha cargado una nueva imagen
    if ($_FILES["imagenNivel"]["error"] == 0) {
        $imagen_tmp = $_FILES["imagenNivel"]["tmp_name"];
        $imagen_nombre = $_FILES["imagenNivel"]["name"];
        $ruta_destino = "../../../controller/niveles/" . $imagen_nombre;

        if (move_uploaded_file($imagen_tmp, $ruta_destino)) {
            $consulta3 = $connection->prepare("UPDATE niveles SET nombreNivel='$nombre', puntosRequeridos='$puntos', imagenNivel='$ruta_destino' WHERE idNivel='$idNivel'");
            $consulta3->execute();
            echo '<script>alert("Actualización exitosa, gracias");</script>';
            echo '<script>window.location="./listaNiveles.php"</script>';
        } else {
            echo '<script>alert("Error al guardar la imagen");</script>';
        }
    } else {
        $consulta3 = $connection->prepare("UPDATE niveles SET nombreNivel='$nombre', puntosRequeridos='$puntos' WHERE idNivel='$idNivel'");
        $consulta3->execute();
        echo '<script>alert("Actualización exitosa, gracias");</script>';
        echo '<script>window.location="./listaNiveles.php"</script>';
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
                                <h2>Actualizar niveles</h2>
                                <span>Actualiza los niveles de free fire para manejar distintos modulos de juego.</span>

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
                                <h4 class="card-title">Actualiza los Nivel de Juego</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    
                                    <form method="POST" enctype="multipart/form-data" autocomplete="off">
                                        <?php    
                                        echo $idNivel; 
                                        ?>
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text"  minlength="4"  maxlength="30" type="text" required name="nombreNivel" placeholder="Ingresa el nombre del nivel" value="<?php echo $consull['nombreNivel'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text" onkeypress="return(multiplenumber(event));"  oninput="maxlengthNumber(this);" maxlength="10" minlength="1" type="number" required name="puntosRequeridos" placeholder="Ingresa la cantidad de puntos requeridos" value="<?php echo $consull['puntosRequeridos'] ?>">
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade show active h-100" id="first" style="width: 70%;">
                                        <!-- se pone la ruta en donde se encuentra las imagenes y se llama las imagenes que se traen de acuerdo a cada nivel -->
                                        <img class="img-fluid h-100" src="../../../controller/ <?= $consull['imagenNivel'] ?>" alt="">
                                        </div>
                                        <br>
                                        <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input accept="image/*" name="imagenNivel" type="file" class="form-file-input form-control" value="<?php echo $consull['imagenNivel'] ?>">
                                            </div>
                                            <span class="input-group-text">Imagen del nivel</span>
                                        </div>
                                        
										<div class=" mb-3 m-auto">
                                            <input type="submit" class="btn bg-danger" value="ACTUALIZAR"></input>
                                            <input type="hidden" name="btn_actualizar" value="formLevel">
											<a href="./listaNiveles.php" class="btn btn-danger">Cancelar Actualizacion</a>
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
