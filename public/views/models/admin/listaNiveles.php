<?php
require_once 'menu.php';

$listniveles = $connection->prepare("SELECT * FROM niveles");
$listniveles->execute();
$niveles = $listniveles->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="col-xs-12 mb-3">
            <a href="./createNiveles.php" class="btn btn-block bg-danger">Registrar Nivel</a>
        </div>
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Niveles</a></li>
            </ol>
        </div>

        <?php foreach ($niveles as $nivel) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-xxl-6 h-100">
                                    <div class="tab-content h-100">
                                        <!-- se pone la ruta en donde se encuentra las imagenes y se llama las imagenes que se traen de acuerdo a cada nivel -->
                                        <div role="tabpanel" class="tab-pane fade show active h-100" id="first">
                                            <img class="img-fluid h-100" src="../../../controller/ <?= $nivel['imagenNivel'] ?>" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-xxl-6 col-sm-12 h-100 d-flex justify-content-center align-items-center text-center">
                                    <div class="product-detail-content text-center">
                                        <div class="new-arrival-content pr">
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block"><?= $nivel['nombreNivel'] ?></p>
                                            </div>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block"><?= $nivel['puntosRequeridos'] ?></p>
                                            </div>
                                            <div class="shopping-cart  mb-2 me-3">
                                                
                                                <div>
                                                    <form method="GET" action="./actualizar_niveles.php">
                                                        <div class="mb-3 mt-3">
                                                            <input type="hidden" name="idNivel" value="<?= $nivel['idNivel'] ?>">
                                                            <button class="btn bg-danger shadow btn-xxl sharp me-1" type="submit" onclick="return confirm('¿Desea actualizar el nivel seleccionado?');">
                                                            <i class="fa fa-pencil-alt fa-2x"></i></button>
                                                        </div>
                                                    </form>
                                                    <form method="GET" action="./eliminar_niveles.php">
                                                        <input type="hidden" name="eliminar" value="<?= $nivel['idNivel'] ?>">
                                                        <button class="btn btn-danger shadow btn-xxl sharp" onclick="return confirm('¿Desea eliminar el nivel seleccionado?');" type="submit">
                                                        <i class="fa fa-trash-alt fa-2x"></i></button>
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
            </div>
        <?php } ?>
    </div>
</div>

<?php
require_once 'footer.php';
?>
