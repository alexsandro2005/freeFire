<?php
require_once 'menu.php';
?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="col-xs-12 mb-3">
            <a href="./crearPartida.php" class="btn btn-block bg-danger">Registrar Partida</a>
        </div>
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Listados</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Partidas</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Partidas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table-bordered" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;" colspan="2">Accion</th>
                                        <th style="text-align: center;" width="210px">Fecha Inicial</th>
                                        <th style="text-align: center;">Fecha Final</th>
                                        <th style="text-align: center;">Cantidad Jugadores</th>
                                        <th style="text-align: center;">Estado</th>
                                        <th style="text-align: center;">Ganador</th>
                                        
                                    </tr>
                                </thead>

                                <?php

$selectPartida = $connection->prepare("SELECT p.id_partida, p.cantidad_jugadores, m.nombreMundo AS mundo_nombre, p.fechaInicial, p.fechaFinal, p.jugadoresActivos, e.estado AS estado_nombre, u.nombreCompleto AS jugador_ganador_nombre FROM partida p LEFT JOIN mundos m ON p.id_mundo = m.idMundo LEFT JOIN estado e ON p.id_estado = e.id_estado LEFT JOIN usuario u ON p.id_jugadorGanador = u.documento;
");
$selectPartida->execute();
$partidas = $selectPartida->fetchAll(PDO::FETCH_ASSOC);

foreach ($partidas as $partida) {
    ?>
                                    <tbody>
                                        <tr style="text-align: center;">

                                            <td>
                                                <form action="./activar_admin.php" method="get">
                                                    <input type="hidden" name="activar" value="<?=$partida['id_partida']?> ">
                                                    <button class="btn btn-success shadow btn-xxl sharp"
                                                        type="submit" onclick="return confirm('¿Dsea ver las estadisticas de la partida seleccionada?')">Ver detalles 
                                                        <!-- <i class="fas fa-sync-alt fa-2x"></i> -->
                                                        <i class="fa fa-pencil-alt fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="./inactivar_admin.php" method="get">
                                                    <input type="hidden" name="inactivar" value="<?=$partida['id_partida']?> ">
                                                    <button class="btn btn-danger shadow btn-xxl sharp"
                                                        type="submit" onclick="return confirm('¿Desea eliminar los datos de la partida?')">
                                                        <!-- <i class="fas fa-sync-alt fa-2x"></i> -->
                                                        <i class="fa fa-trash-alt fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td>

                                            <td style="text-align: center;">
                                                <?=$partida['fechaInicial']?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?=$partida['fechaFinal']?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?=$partida['cantidad_jugadores']?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?=$partida['estado_nombre']?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?=$partida['jugador_ganador_nombre']?>
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

require_once './footer.php';

?>