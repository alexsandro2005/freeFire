<?php
require_once 'menu.php';
?>

<?php

require_once('../../../../database/connection.php');
$bd = new Database();
$conexion = $bd->conectar();
$consulta = $conexion->prepare("SELECT * FROM usuario INNER JOIN roles ON usuario.idRol = roles.idRol WHERE usuario.idRol = 1");
$consulta->execute();
?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Listados</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Usuarios</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Usuarios</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table-bordered" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Avatar</th>
                                        <th style="text-align: center;" width="210px">Tipo de documento</th>
                                        <th style="text-align: center;">Documento</th>
                                        <th style="text-align: center;">Nombre Completo</th>
                                        <th style="text-align: center;">Usuario</th>
                                        <th style="text-align: center;">Rol</th>
                                        <th style="text-align: center;">Fecha Registro</th>
                                        <th style="text-align: center;">Genero</th>
                                        <th style="text-align: center;">Correo Electronico</th>
                                        <th style="text-align: center;">Estado</th>
                                        <th style="text-align: center;" colspan="3">Accion</th>
                                    </tr>
                                </thead>

                                <?php
                                foreach ($consulta as $consul) {
                                ?>
                                    <tbody>
                                        <tr style="text-align: center;">
                                            <td style="text-align: center;">
                                                <?= $consul['avatar'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['tipoDocumento'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['documento'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['nombreCompleto'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['nombreUsuario'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['rol'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['fecha_registro'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['genero'] ?>
                                            </td>
                                            <td style="text-align: center; font-weight: bold;">
                                                <?= $consul['correoElectronico'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['estadoUsuario'] ?>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
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

<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <!-- <p>Copyright © Designdo &amp; Desarrollado por <a href="../index.htm" target="_blank">Garena</a> 2023</p> -->
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="vendor/apexchart/apexchart.js"></script>

<script src="vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="vendor/peity/jquery.peity.min.js"></script>
<!-- Dashboard 1 -->
<script src="js/dashboard/dashboard-1.js"></script>

<script src="vendor/owl-carousel/owl.carousel.js"></script>

<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>

<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>

<?php
require_once 'footer.php';

?>
<script>
    function cardsCenter() {

        /*  testimonial one function by = owl.carousel.js */

        jQuery('.card-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            //center:true,
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                800: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        })
    }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            cardsCenter();
        }, 1000);
    });
</script>

</body>

</html>