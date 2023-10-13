<?php
require_once 'menu.php';


$selectPartida = $connection->prepare("SELECT * FROM partida INNER JOIN mundos INNER JOIN estado INNER JOIN usuario ON partida.id_mundo = mundos.idMundo AND partida.id_estado = estado.id_estado AND partida.id_jugadorGanador = usuario.documento");
$selectPartida->execute();
$partidas = $selectPartida->fetchAll(PDO::FETCH_ASSOC);
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
                                        
                                        <th style="text-align: center;" width="210px">Fecha Inicial</th>
                                        <th style="text-align: center;">Fecha Final</th>
                                        <th style="text-align: center;">Cantidad Jugadores</th>
                                        <th style="text-align: center;">Estado</th>
                                        <th style="text-align: center;">Ganador</th>
                                        <th style="text-align: center;" colspan="2">Accion</th>
                                    </tr>
                                </thead>

                                <?php
                                foreach ($partidas as $partida) {
                                ?>
                                    <tbody>
                                        <tr style="text-align: center;">

                                            <td style="text-align: center;">
                                                <?= $partida['fechaInicial'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $partida['fechaFinal'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['cantidadJugadores'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['estado'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['nombreUsuario'] ?>
                                            </td>
                                            
                                            <td>
                                                <form action="./activar_admin.php" method="get">
                                                    <input type="hidden" name="activar" value="<?= $partida['id_partida'] ?> ">
                                                    <button class="btn btn-success shadow btn-xxl sharp" 
                                                        type="submit" onclick="return confirm('¿Está seguro de activar este usuario?')">
                                                        <!-- <i class="fas fa-sync-alt fa-2x"></i> -->
                                                        <i class="fas fa-lock-open fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="./inactivar_admin.php" method="get">
                                                    <input type="hidden" name="inactivar" value="<?= $partida['id_partida'] ?> ">
                                                    <button class="btn btn-warning shadow btn-xxl sharp" 
                                                        type="submit" onclick="return confirm('¿Está seguro de bloquear este usuario?')">
                                                        <!-- <i class="fas fa-sync-alt fa-2x"></i> -->
                                                        <i class="fas fa-lock fa-2x"></i>
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

 require_once('./footer.php');

?>