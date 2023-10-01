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
                                            <h3 class="text-white">230</h3>
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
                                            <h3 class="text-white">230</h3>
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
                                            <h3 class="text-white">230</h3>
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
                                            <h3 class="text-white">230</h3>
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
                                            <p class="mb-1">Niveles Disponibles</p>
                                            <h3 class="text-white">230</h3>
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
                                            <h3 class="text-white">230</h3>
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
                                            <?php foreach( $entry as $entrada){?>
                                            <tr>
                                                <td><?= $entrada["tipoDocumento"] ?></td>
                                                <td><?= $entrada["documento"] ?></td>
                                                <td><?= $entrada["nombreCompleto"] ?></td>
                                                <td><?= $entrada["rol"] ?></td>
                                                <td><?= $entrada["correoElectronico"] ?></td>
                                                <td><?= $entrada["horario_entrada"] ?></td>
                                                
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

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
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
		function cardsCenter()
		{

			/*  testimonial one function by = owl.carousel.js */

			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},
					800:{
						items:1
					},
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000);
		});

	</script>

</body>
</html>