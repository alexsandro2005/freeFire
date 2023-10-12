<?php
require_once 'menu.php';

$listpartidas = $connection->prepare("SELECT * FROM partida INNER JOIN mundos ON partida.id_mundo = mundos.idMundo");
$listpartidas->execute();
$partidas = $listpartidas->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="col-xs-12 mb-3">
            <a href="./crearPartida.php" class="btn btn-block bg-danger">Registrar Partida</a>
        </div>
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Partidas</a></li>
            </ol>
        </div>

        <?php foreach ($partidas as $partida) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-xxl-6 h-100">
                                    <div class="tab-content h-100">
                                        <div role="tabpanel" class="tab-pane fade show active h-100" id="first">
                                            <img class="img-fluid h-100" src="../../../controller/<?= $partida['imagenMundo'] ?>" alt="">
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
                                                <p class="price float-start d-block"><?= $partida['nombreMundo'] ?></p>
                                            </div>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block"><?= $partida['idMundo'] ?></p>
                                            </div>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block"><?= $partida['id_jugadorGanador'] ?></p>
                                            </div>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block"><?= $partida['fechaInicial'] ?></p>
                                            </div>
                                            <div class="shopping-cart  mb-2 me-3">
                                                <form action="">
                                                    <div>
                                                        <form method="GET" action="./updateRange.php">
                                                            <div class="mb-3 mt-3">
                                                                <input type="hidden" name="idRango" value="<?= $partida['id_partida'] ?>">
                                                                <button class="btn bg-danger" type="submit" onclick="return confirm('¿Desea actualizar el nivel seleccionado?');">Actualizar</button>
                                                            </div>
                                                        </form>
                                                        <form method="GET" action="./deleteRange.php">
                                                            <input type="hidden" name="idRango" value="<?= $partida['id_partida'] ?>">
                                                            <button class="btn btn-danger" type="submit">Eliminar</button>
                                                        </form>
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
        <?php } ?>
    </div>
</div>

<?php
require_once 'footer.php';
?>
