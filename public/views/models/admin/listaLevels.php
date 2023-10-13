<?php
require_once 'menu.php';

$listranges = $connection->prepare("SELECT * FROM rangos");
$listranges->execute();
$ranges = $listranges->fetchAll(PDO::FETCH_ASSOC);

?>
        
        <div class="content-body">
        <div class="container-fluid">

<div class="col-xs-12">
    <a href="./createLevel.php" class="btn btn-block bg-danger">Registrar Rango</a>

</div>

</div>
            <div class="container-fluid mt-ms-3">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Listado</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Rangos Activos</a></li>
					</ol>
                </div>
				
                <div class="row">
                <?php
                    foreach ($ranges as $range) {

                ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product text-center">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="../../../controller/<?= $range["imagenRango"] ?>" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
										<h4><?= $range["nombreRango"] ?></h4>
										<h4>Puntos Requeridos <?= $range["puntosRequeridos"] ?></h4>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <br><br>
                                        </ul>
                                        <span class="price mg-center text-center align-content-center">
                                            <div class="d-flex">
                                                        <!-- <form method="GET" action="./updateRange.php">
                                                            <input type="hidden" name="idRango" value="<?= $range['idRango'] ?>">
                                                            <button class="btn bg-danger shadow btn-xxl sharp me-1" onclick="return confirm('¿Desea actualizar el rango seleccionado?');" type="submit"><i class="fa fa-pencil-alt fa-2x"></i></button>
                                                        </form> -->
                                                        
                                                        <form method="GET" action="./eliminar_rangos.php">
                                                            <input type="hidden" name="eliminar" value="<?= $range['idRango'] ?>">
                                                            <button class="btn btn-danger shadow btn-xxl sharp" onclick="return confirm('¿Desea eliminar el rango seleccionada?');" type="submit"><i class="fa fa-trash-alt fa-2x"></i></button>
                                                        </form>
											</div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
}

?>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

	<?php
require_once 'footer.php';

?>
