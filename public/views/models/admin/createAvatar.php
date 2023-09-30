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
                                <h2>Registro de Avatar</h2>
                                <span>Crea tus avatars para que tus jugadores puedan conocer sus habilidades.</span>

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
                                    <form method="POST" action="../../../controller/AvatarController.php" enctype="multipart/form-data" autocomplete="off">
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text" onkeypress="return(multiplenumber(event));"  oninput="maxlengthNumber(this);" maxlength="10" minlength="5" type="number" required name="serialAvatar" placeholder="Ingresa el serial del avatar">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text"  minlength="4" oninput="soloLetrasEspacios(event)" onkeypress="return(textspace(event));" maxlength="20" type="text" required name="nombreAvatar" placeholder="Ingresa el nombre del avatar">
                                        </div>
                                        <div class="mb-3">
                                            <textarea name="descripcionAvatar" minlength="10" maxlength="1000" onkeypress="return(textguions(event));" oninput="(maxlengthNumber(this))" class="form-control input-text" rows="10" cols="10" placeholder="Ingresa la descripcion del avatar"></textarea>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input required accept="image/*" name="imagenAvatar" type="file" class="form-file-input form-control">
                                            </div>
                                            <span class="input-group-text">Imagen del avatar</span>
                                        </div>
										
										<div class=" mb-3 m-auto">

											<input type="submit" class="btn bg-danger" value="Registrar"></input>
											<input type="hidden"  value="formAvatar" name="MM_registerAvatar"></input>
											<a href="./index.php" class="btn btn-danger">Cancelar Registro</a>
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


<?php
require_once 'footer.php';

?>
