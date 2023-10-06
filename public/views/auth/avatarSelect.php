

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Seleccion de Avatar</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- STYLES -->
    <link rel="stylesheet" href="../models/admin/vendor/jquery-nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../models/admin/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../models/admin/vendor/nouislider/nouislider.min.css">


	<link rel="shortcut icon" href="../../assets/images/Gareena.png" type="image/x-icon">
    <!-- Datatable -->
    <link rel="stylesheet" href="../models/admin/vendor/datatables/css/jquery.dataTables.min.css">
	<!-- Style css -->
    <link href="../models/admin/css/style.css" rel="stylesheet">
	<!-- FUNCIONES DE JAVASCRIPT PARA REALIZAR LA VALIDACION DE LOS CAMPOS EN CADA UNO DE LOS FORMULARIOS -->
	<script src="../../../assets/js/funciones.js"></script>

</head>
<body>

    <div class="container text-center mt-5">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">



        <div class="container">
        <div class="container-fluid">



</div>
            <div class="container-fluid mt-ms-3 text-center">
				<div class="row page-titles text-center">
					<ol class="breadcrumb text-center">

						<li class="breadcrumb-item"> <h2>Selecciona tu Avatar</h2</li>
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
                                        <img class="img-fluid" src="../../controller/<?=$avatar["imagenAvatar"]?>" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="ecom-product-detail.html"><?=$avatar["nombreAvatar"]?></a></h4>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <p class="text-content text-center"><?=$avatar["descripcionAvatar"]?></p>


                                        <span class="price mg-center">
                                            <form action="../../controller/AvatarSelect.php" method="POST">
                                                <input type="hidden" name="idAvatar" value="<?=$avatar['id']?>">
                                                <input type="submit" name="registerAvatar" class="btn bg-danger" value="Seleccionar">
                                                <input type="hidden" name="MM_avatarSelect" value="formAvatarSelect">
                                            </form>
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
            Sidebar end
        ***********************************-->


	</div>
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../models/admin/vendor/global/global.min.js"></script>
    <script src="../models/admin/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="../models/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
    <script src="../models/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../models/admin/vendor/apexchart/apexchart.js"></script>



    <script src="../models/admin/vendor/peity/jquery.peity.min.js"></script>


	<!-- Dashboard 1 -->
    <script src="../models/admin/js/dashboard/dashboard-1.js"></script>



	<script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="../models/admin/vendor/owl-carousel/owl.carousel.js"></script>

    <script src="../models/admin/js/custom.min.js"></script>

    <script src="../models/admin/js/dlabnav-init.js"></script>

    <script src="../models/admin/js/demo.js"></script>
    <script src="../models/admin/js/styleSwitcher.js"></script>

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