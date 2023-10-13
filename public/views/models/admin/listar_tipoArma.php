<?php
require_once 'menu.php';

$listipArma = $connection->prepare("SELECT * FROM tipoarma");
$listipArma->execute();
$tiparma = $listipArma->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="col-xs-12 mb-3">
            <a href="./crearTiparma.php" class="btn btn-block bg-danger">Registrar Tipo de Armas</a>
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
                        <h4 class="card-title">Tipo Armas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table-bordered" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">codigo</th>
                                        <th style="text-align: center;">Nombre </th>
                                        <th style="text-align: center;" colspan="2">Accion</th>
                                    </tr>
                                </thead>

                                <?php
                                foreach ($tiparma as $tipar) {
                                ?>
                                    <tbody>
                                        <tr style="text-align: center;">
                                            <td style="text-align: center;">
                                                <?= $tipar['idTipoArma'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $tipar['tipoArma'] ?>
                                            </td>

                                            <td>
                                                <form action="./actualizar_tiparma.php" method="get">
                                                    <input type="hidden" name="actualizar" value="<?= $tipar['idTipoArma'] ?>">
                                                    <button class="btn btn-primary shadow btn-xxl sharp" type="submit" onclick="return confirm('¿Está seguro de actualizar este tipo de arma?')">
                                                        <i class="fa fa-pencil-alt fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="./eliminar_tiparma.php" method="get">
                                                    <input type="hidden" name="eliminar" value="<?= $tipar['idTipoArma'] ?>">
                                                    <button class="btn btn-danger shadow btn-xxl sharp" type="submit" onclick="return confirm('¿Está seguro de eliminar este tipo de arma?')">
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