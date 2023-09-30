<?php
require_once 'menu.php';

?>

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <!-- Columna para la imagen con el texto -->
                    <div class="col-xl-5 col-lg-5">
                        <div class="card body-card">
                            <div class="card-body tryal">
                                <h2>Registro de nivel</h2>
                                <span>Crea los niveles para que tus jugadotes puedan luchar por nuevas conquistas.</span>

								<div class="col-xl-5 col-sm-6">
									<img src="../../../assets/images/chrono.png" alt="" class="sd-shape">
								</div>
                            </div>
                        </div>
                    </div>
                    <!-- Columna para el formulario -->
                    <div class="col-xl-7 col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Crear Avatar</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="../../../controller/AuthController.php" autocomplete="off">
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text" type="text" placeholder="Ingresa el serial del avatar">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control input-text" type="text" placeholder="Ingresa la descripcion del avatar">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control">
                                            </div>
                                            <span class="input-group-text">Imagen del avatar</span>
                                        </div>
										
										<div class=" mb-3 m-auto">

											<input type="submit" class="btn btn-warning" value="Registrar"></input>
											<input type="hidden"  value="formCartProduct" name="MM_forms"></input>
											<a href="./cancelarVenta.php" class="btn btn-danger">Cancelar Registro</a>
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
<!--**********************************
Content body end -->

        <!--**********************************
            Content body end
        ***********************************-->
		


		
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
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'dark';
				new dlabSettings(dlabSettingsOptions);
			},1500)
		});
		
	</script>

</body>
</html>