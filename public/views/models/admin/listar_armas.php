<?php
require_once 'menu.php';

$armas = $connection->prepare("SELECT * FROM armas INNER JOIN tipoarma ON armas.tipoArma = tipoarma.idTipoArma");
$armas->execute();
$arma = $armas->fetchAll(PDO::FETCH_ASSOC);

$listipArma = $connection->prepare("SELECT * FROM tipoarma");
$listipArma->execute();
$tiparma = $listipArma->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="col-xs-12 mb-3">
            <a href="./crear_armas.php" class="btn btn-block bg-danger">Registrar Armas</a>
        </div>
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Tipo Armas</a></li> -->
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Armas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table-bordered" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">codigo</th>
                                        <th style="text-align: center;">Nombre </th>
                                        <th style="text-align: center;">Cantidad Balas</th>
                                        <th style="text-align: center;">Daño</th>
                                        <th style="text-align: center;">Tipo de arma </th>
                                        <th style="text-align: center;" colspan="2">Accion</th>
                                    </tr>
                                </thead>

                                <?php
                                foreach ($arma as $armas) {
                                ?>
                                    <tbody>
                                        <tr style="text-align: center;">
                                            <td style="text-align: center;">
                                                <?= $armas['idArma'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $armas['nombreArma'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $armas['cantidadBalas'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $armas['daño'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $armas['tipoArma'] ?>
                                            </td>

                                            <!-- <td>
                                                <form action="#" method="get">
                                                    <input type="hidden" name="actualizar" value="<?= $armas['idArma'] ?>">
                                                    <button class="btn btn-primary shadow btn-xxl sharp" type="submit" onclick="return confirm('¿Está seguro de actualizar esta arma?')">
                                                        <i class="fa fa-pencil-alt fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td> -->
                                            <td>
                                                <form action="./eliminar_armas.php" method="get">
                                                    <input type="hidden" name="eliminar" value="<?= $armas['idArma'] ?>">
                                                    <button class="btn btn-danger shadow btn-xxl sharp" type="submit" onclick="return confirm('¿Está seguro de eliminar esta arma?')">
                                                        <i class="fa fa-trash-alt fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    </tbody>

                                <?php
                                }
                                ?>

                            </table>
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