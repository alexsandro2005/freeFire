<?php
require_once 'menu.php';

?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid container-center-center">
<!--
                 contenido pagina principal del trabajador -->
                <div class="row">
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/group.png" class="la la-users sd-shape"></img>
                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Partidas Realizadas</p>
                                            <?php
$conteoPartidas = "SELECT COUNT(*) AS contadorPartidas FROM partida";
try {
    $conteosPartidas = $connection->query($conteoPartidas);
    $contadorPartidas = $conteosPartidas->fetch(PDO::FETCH_ASSOC)['contadorPartidas'];

    if ($contadorPartidas) {

        ?>
                                            <h3 class="text-white"><?php echo $contadorPartidas ?></h3>

                                            <?php
} else {
        ?>
                                                    <h3 class="text-white">0</h3>
                                                    <?php
}

} catch (PDOException $e) {

    ?>
                                                    <h3 class="text-white"><?php $e->getMessage()?></h3>
                                                    <?php
}

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="#">
                        <div class="widget-stat card bg-danger">
    <div class="card-body p-4">
        <div class="media">
            <span class="me-3">
                <img src="../../../assets/images/anime.png" class="la la-users sd-shape"></img>
            </span>
            <div class="media-body text-white text-end">
                <p class="mb-1">Partidas de Hoy</p>
                <?php
                try {
                    // Obtener la fecha y hora actual en formato "YYYY-MM-DD HH:MM:SS"
                    $fechaHoraActual = date("Y-m-d H:i:s");

                    // Consulta SQL para contar las partidas de hoy
                    $conteoPartidas = "SELECT COUNT(*) AS contadorPartidas 
                                       FROM partida 
                                       WHERE fechaInicial >= :fechaInicioHoy AND fechaInicial <= :fechaFinHoy";

                    // Preparar la consulta
                    $stmt = $connection->prepare($conteoPartidas);

                    // Calcular el rango de fechas para hoy (desde las 00:00:00 hasta las 23:59:59)
                    $fechaInicioHoy = date("Y-m-d 00:00:00");
                    $fechaFinHoy = date("Y-m-d 23:59:59");

                    // Bind de los parámetros de fecha
                    $stmt->bindParam(':fechaInicioHoy', $fechaInicioHoy, PDO::PARAM_STR);
                    $stmt->bindParam(':fechaFinHoy', $fechaFinHoy, PDO::PARAM_STR);

                    // Ejecutar la consulta
                    $stmt->execute();

                    // Obtener el resultado
                    $contadorPartidas = $stmt->fetch(PDO::FETCH_ASSOC)['contadorPartidas'];

                    if ($contadorPartidas !== false) {
                ?>
                        <h3 class="text-white"><?php echo $contadorPartidas ?></h3>
                    <?php
                    } else {
                    ?>
                        <h3 class="text-white">0</h3>
                    <?php
                    }
                } catch (PDOException $e) {
                    ?>
                    <h3 class="text-white"><?php echo $e->getMessage() ?></h3>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

                        </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="./listaWeapons.php">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/armas-removebg-preview.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Armas Activas</p>
                                            <?php
$conteoarmas = "SELECT COUNT(*) AS contadorarmas FROM armas";
try {
    $conteosarmas = $connection->query($conteoarmas);
    $contadorarmas = $conteosarmas->fetch(PDO::FETCH_ASSOC)['contadorarmas'];

    if ($contadorarmas) {

        ?>
                                            <h3 class="text-white"><?php echo $contadorarmas ?></h3>

                                            <?php
} else {
        ?>
                                                    <h3 class="text-white">0</h3>
                                                    <?php
}

} catch (PDOException $e) {

    ?>
                                                    <h3 class="text-white"><?php $e->getMessage()?></h3>
                                                    <?php
}

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="./listaWorlds.php">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/hero-banner.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Mundos Activos</p>
                                            <?php
$conteoMundos = "SELECT COUNT(*) AS contadorMundos FROM armas";
try {
    $conteoMundos = $connection->query($conteoMundos);
    $contadorMundos = $conteoMundos->fetch(PDO::FETCH_ASSOC)['contadorMundos'];

    if ($contadorMundos) {

        ?>
                                            <h3 class="text-white"><?php echo $contadorMundos ?></h3>

                                            <?php
} else {
        ?>
                                                    <h3 class="text-white">0</h3>
                                                    <?php
}

} catch (PDOException $e) {

    ?>
                                                    <h3 class="text-white"><?php $e->getMessage()?></h3>
                                                    <?php
}

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="./listaLevels.php">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/logo.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Rangos Disponibles</p>
                                            <?php
$conteoRangos = "SELECT COUNT(*) AS contadorRangos FROM rangos";
try {
    $conteoRangos = $connection->query($conteoRangos);
    $contadorRangos = $conteoRangos->fetch(PDO::FETCH_ASSOC)['contadorRangos'];

    if ($contadorRangos) {

        ?>
                                            <h3 class="text-white"><?php echo $contadorRangos ?></h3>

                                            <?php
} else {
        ?>
                                                    <h3 class="text-white">0</h3>
                                                    <?php
}

} catch (PDOException $e) {

    ?>
                                                    <h3 class="text-white"><?php $e->getMessage()?></h3>
                                                    <?php
}

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <a href="./listaAvatars.php">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <img src="../../../assets/images/chrono.png" class="la la-users sd-shape"></img>

                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Avatars Activos</p>
                                            <?php
$conteoAvatars = "SELECT COUNT(*) AS contadorAvatars FROM avatars";
try {
    $conteoAvatars = $connection->query($conteoAvatars);
    $contadorAvatars = $conteoAvatars->fetch(PDO::FETCH_ASSOC)['contadorAvatars'];

    if ($contadorAvatars) {

        ?>
                                            <h3 class="text-white"><?php echo $contadorAvatars ?></h3>

                                            <?php
} else {
        ?>
                                                    <h3 class="text-white">0</h3>
                                                    <?php
}

} catch (PDOException $e) {

    ?>
                                                    <h3 class="text-white"><?php $e->getMessage()?></h3>
                                                    <?php
}

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body container-table">
            <div class="container-fluid">

				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Estadisticas</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Actividad Jugadores</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Actividad</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Tipo de documento</th>
                                                <th>Documento</th>
                                                <th>Nombres</th>
                                                <th>Rol</th>
                                                <th>Correo</th>
                                                <th>Entrada</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($entry as $entrada) {?>
                                            <tr>
                                                <td><?=$entrada["tipoDocumento"]?></td>
                                                <td><?=$entrada["documento"]?></td>
                                                <td><?=$entrada["nombreCompleto"]?></td>
                                                <td><?=$entrada["rol"]?></td>
                                                <td><?=$entrada["correoElectronico"]?></td>
                                                <td><?=$entrada["horario_entrada"]?></td>

                                            </tr>

                                            <?php
}
?>

                                        </tbody>
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