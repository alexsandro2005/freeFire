<?php
require_once 'menu.php';

$listAvatars = $connection->prepare("SELECT * FROM avatars");
$listAvatars->execute();
$avatars = $listAvatars->fetchAll(PDO::FETCH_ASSOC);

?>
        
        <div class="content-body ">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Listado</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Avatars Activos</a></li>
					</ol>
                </div>
				
                <div class="row">
                <?php
                    foreach ($avatars as $avatar) {

                ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="../../../controller/<?= $avatar["imagenAvatar"] ?>" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="ecom-product-detail.html"><?= $avatar["nombreAvatar"] ?></a></h4>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="text-content"><?= $avatar["descripcionAvatar"] ?></span>
                                        <span class="price mg-center">
                                            <div class="d-flex">
                                                        <form method="GET" action="./updateAvatar.php">

                                                            <input type="hidden" name="idAvatar" value="<?= $avatar['id'] ?>">
                                                            <button class="btn btn-primary shadow btn-xs sharp me-1" onclick="return confirm('¿Desea actualizar el avatar seleccionado?');" type="submit"><i class="fas fa-pencil-alt"></i></button>
                                                        </form>
                                                        <form method="GET" action="./deleteAvatar.php">
                                                            <input type="hidden" name="idAvatar" value="<?= $avatar['id'] ?>">
                                                            <button class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('¿Desea eliminar el avatar seleccionada?');" type="submit"><i class="fa fa-trash"></i></button>
                                                        </form>
											</div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
}

?>
                </div>
            </div>
        </div>
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