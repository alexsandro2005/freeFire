<?php
require_once 'menu.php';
?>

<?php
require_once '../../../../database/connection.php';
$database = new Database();
$connection = $database->conectar();

// CONDICIONAL DEL FORMULARIO PARA CREAR NIVELES 
if (isset($_POST["MM_registerLevel"]) && $_POST["MM_registerLevel"] == "formLevel") {

    $nombreNivel = $_POST['nombreNivel'];
    $puntosRequeridos = $_POST['puntosRequeridos'];

    // Consulta para verificar si el nivel ya existe
    $nivelValidation = $connection->prepare("SELECT * FROM niveles WHERE nombreNivel = :nombreNivel OR puntosRequeridos = :puntosRequeridos");
    $nivelValidation->bindParam(':nombreNivel', $nombreNivel);
    $nivelValidation->bindParam(':puntosRequeridos', $puntosRequeridos);
    $nivelValidation->execute();
    $range = $nivelValidation->fetch(PDO::FETCH_ASSOC);

    if ($range) {
        echo '<script>alert("Los datos ingresados ya están registrados.");</script>';
        echo '<script>window.location="./createNiveles.php"</script>';

    } else if (empty($nombreNivel) || empty($puntosRequeridos)) {
        echo '<script>alert("Existen datos vacíos en el formulario, debes ingresar todos los datos.");</script>';
        echo '<script>window.location="./createNiveles.php"</script>';
    } else {
        // Verificamos si se ha enviado un archivo y si no hay errores al subirlo
        if (isset($_FILES['imagenNivel']) && $_FILES['imagenNivel']['error'] === 0) {
            $permitidos = array("image/png", "image/jpg", "image/jpeg");
            $limite_KB = 4000;

            if (in_array($_FILES["imagenNivel"]["type"], $permitidos) && $_FILES["imagenNivel"]["size"] <= $limite_KB * 1024) {
                $ruta = '../../../controller/niveles/';
                $imagenNivel = $ruta . $_FILES['imagenNivel']["name"];
                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }
                if (!file_exists($imagenNivel)) {
                    $resultado = @move_uploaded_file($_FILES["imagenNivel"]["tmp_name"], $imagenNivel);

                    if ($resultado) {
                        // Inserta los datos en la base de datos
                        $registerNivel = $connection->prepare("INSERT INTO niveles(nombreNivel, puntosRequeridos, imagenNivel) VALUES(:nombreNivel, :puntosRequeridos, :imagenNivel)");
                        
                        $registerNivel->bindParam(':nombreNivel', $nombreNivel);
                        $registerNivel->bindParam(':puntosRequeridos', $puntosRequeridos);
                        $registerNivel->bindParam(':imagenNivel', $imagenNivel);
                        $registerNivel->execute();

                        echo '<script>alert("Los datos han sido registrados correctamente.");</script>';
                        echo '<script>window.location="./listaNiveles.php"</script>';
                    } else {
                        echo '<script>alert("Error al momento de cargar la imagen del nivel.");</script>';
                        echo '<script>window.location="./listaNiveles.php"</script>';
                    }
                } else {
                    echo '<script>alert("La imagen ya existe. Cambia el nombre de la imagen o selecciona una imagen diferente.");</script>';
                    echo '<script>window.location="./listaNiveles.php"</script>';
                }
            } else {
                echo '<script>alert("Error al momento de cargar la imagen del nivel. Asegúrate de que la imagen sea de tipo PNG, JPG o JPEG y que su tamaño sea menor o igual a 4 MB.");</script>';
                echo '<script>window.location="./createNiveles.php"</script>';
            }
        } else {
            echo '<script>alert("Error al cargar la imagen del nivel. Asegúrate de seleccionar una imagen válida.");</script>';
            echo '<script>window.location="./createNiveles.php"</script>';
        }
    }
}
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
                                <h2>Registro de Nivel</h2>
                                <span>Crea los niveles de free fire para manejar distintos modulos de juego.</span>

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
                                <h4 class="card-title">Crear Nivel de Juego</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" name="formLevel" enctype="multipart/form-data" autocomplete="off">
  
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text"  minlength="4"  maxlength="30" type="text" required name="nombreNivel" placeholder="Ingresa el nombre del nivel">
                                        </div>

                                        <div class="mb-3">
                                            <input class="form-control form-control-lg input-text" onkeypress="return(multiplenumber(event));"  oninput="maxlengthNumber(this);" maxlength="10" minlength="1" type="number" required name="puntosRequeridos" placeholder="Ingresa la cantidad de puntos requeridos">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input required accept="image/*" name="imagenNivel" type="file" class="form-file-input form-control">
                                            </div>
                                            <span class="input-group-text">Imagen del nivel</span>
                                        </div>
										<div class=" mb-3 m-auto">
											<input type="submit" class="btn bg-danger" value="Registrar"></input>
											<input type="hidden"  value="formLevel" name="MM_registerLevel"></input>
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
