<?php
require_once 'menu.php';

$listAvatars = $connection->prepare("SELECT * FROM avatars");
$listAvatars->execute();
$avatars = $listAvatars->fetchAll(PDO::FETCH_ASSOC);

?>
        


        <div class="content-body">
        <div class="container-fluid">

<div class="col-xs-12">
    <a href="./createAvatar.php" class="btn btn-block bg-danger">Registrar Avatar</a>

</div>

</div>
            <div class="container-fluid mt-ms-3">
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
                                        <p class="text-content text-center"><?= $avatar["descripcionAvatar"] ?></p>
                                        <span class="price mg-center">
                                            <div class="d-flex">
                                                        <!-- <form method="GET" action="./updateAvatar.php">

                                                            <input type="hidden" name="idAvatar" value="<?= $avatar['id'] ?>">
                                                            <button class="btn bg-danger shadow btn-xxl sharp me-1" onclick="return confirm('¿Desea actualizar el avatar seleccionado?');" type="submit">
                                                            <i class="fa fa-pencil-alt fa-2x"></i></button>
                                                        </form> -->
                                                        <form method="GET" action="./deleteAvatar.php">
                                                            <input type="hidden" name="idAvatar" value="<?= $avatar['id'] ?>">
                                                            <button class="btn btn-danger shadow btn-xxl sharp" onclick="return confirm('¿Desea eliminar el avatar seleccionada?');" type="submit">
                                                            <i class="fa fa-trash-alt fa-2x"></i></button>
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

	<?php
require_once 'footer.php';

?>
