<?php
// Inicia la sesión
session_start();

// Incluye el archivo de conexión a la base de datos
require_once '../../../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

// Consulta la lista de avatares
$listAvatars = $connection->prepare("SELECT * FROM avatars");
$listAvatars->execute();
$avatars = $listAvatars->fetchAll(PDO::FETCH_ASSOC);

if ((isset($_POST["MM_avatarSelect"])) && ($_POST["MM_avatarSelect"] == "formAvatarSelect")) {
    $idAvatar = $_POST['idAvatar'];
    // Creamos una función para almacenar el número de documento
    $documentoPlayer = $_SESSION['id_user'];

    // Actualizamos el avatar del usuario en la base de datos
    $registeruserAvatar = $connection->prepare("UPDATE usuario SET avatar = '$idAvatar' WHERE documento = '$documentoPlayer'");
    $registeruserAvatar->execute();

    // Verifica si la actualización fue exitosa
    if ($registeruserAvatar) {

        echo '<script>alert ("Listo '. $_SESSION['nombres'] .' tu avatar ha sido registrado correctamente.");</script>';
        echo '<script>window.location="index.php"</script>';
    } else {

        echo '<script>alert ("Estimado usuario el avatar no ha sido registrado correctamente");</script>';
        
    }

}
?>

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
    <link rel="stylesheet" href="../admin/vendor/jquery-nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../admin/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../admin/vendor/nouislider/nouislider.min.css">
    <link rel="shortcut icon" href="../../../assets/images/Gareena.png" type="image/x-icon">
    <!-- Datatable -->
    <link rel="stylesheet" href="../admin/vendor/datatables/css/jquery.dataTables.min.css">
    <!-- Style css -->
    <link href="../admin/css/style.css" rel="stylesheet">
    <!-- FUNCIONES DE JAVASCRIPT PARA REALIZAR LA VALIDACION DE LOS CAMPOS EN CADA UNO DE LOS FORMULARIOS -->
    <script src="../../../assets/js/funciones.js"></script>
    <script src="../../../assets/js/underscore.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="container text-center mt-5">
        <!-- Preloader -->
        <div id="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Main wrapper -->
        <div id="main-wrapper">
            <div class="container">
                <div class="container-fluid mt-ms-3 text-center">
                    <div class="row page-titles text-center">
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"> <h2>Selecciona tu Avatar</h2></li>
                        </ol>
                        <?php
                        if (isset($_GET["status"])) {
                            if ($_GET["status"] === "1") {
                                ?>
                                <div class="alert alert-warning">
                                    <strong>Hola <?php echo $_SESSION['nombres'] ?></strong> listo para seleccionar tu avatar? escoge el que más te guste!
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($avatars as $avatar) {
                            ?>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="new-arrival-product">
                                            <div class="new-arrivals-img-content">
                                                <img class="img-fluid" src="../../../controller/<?=$avatar["imagenAvatar"]?>" alt="">
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
                                                    <form action="./avatarSelect.php" method="POST" autocomplete="off">
                                                        <input type="hidden" name="idAvatar" value ="<?=$avatar['id']?>">
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
        </div>
    </div>
    <!-- Scripts -->
    <!-- Required vendors -->
    <script src="../admin/vendor/global/global.min.js"></script>
    <script src="../admin/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="../admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <!-- Apex Chart -->
    <script src="../admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../admin/vendor/apexchart/apexchart.js"></script>
    <script src="../admin/vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="../admin/js/dashboard/dashboard-1.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="../admin/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="../admin/js/custom.min.js"></script>
    <script src="../admin/js/dlabnav-init.js"></script>
    <script src="../admin/js/demo.js"></script>
    <script src="../admin/js/styleSwitcher.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script>
        function cardsCenter() {
            jQuery('.card-slider').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
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
