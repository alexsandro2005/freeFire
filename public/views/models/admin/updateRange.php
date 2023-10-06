<?php
require_once 'menu.php';

 $idRango = $_GET['idRango'];


$selectRange = $connection->prepare("SELECT * FROM rangos WHERE idRango = '$idRango'");
$selectRange->execute();
$range=$selectRange->fetch(PDO::FETCH_ASSOC);
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
                                <h2>Actualizacion de Rango</h2>
                                <span>Crea los rangos de free fire para manejar distintos modulos de juego.</span>

								<div class="col-xl-5 col-sm-6">
									<img src="../../../controller/<?= $range["imagenRango"] ?>" class="sd-shape">
								</div>
                            </div>
                        </div>
                    </div>
                    <!-- Columna para el formulario -->
                    <div class="col-xl-7 col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Actualizar Rango de Juego</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" name="formLevel" action="../../../controller/LevelController.php" enctype="multipart/form-data" autocomplete="off">
  
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text"  minlength="4" oninput="soloLetrasEspacios(event)" value="<?php echo $range['nombreRango']?>" onkeypress="return(textspace(event));" maxlength="30" type="text" required name="nombreRango" placeholder="Ingresa el nombre del rango">
                                        </div>
										
										<div class=" mb-3 m-auto">
											<input type="submit" class="btn bg-danger" value="Registrar"></input>
											<input type="hidden"  value="formRange" name="MM_registerRange"></input>
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
