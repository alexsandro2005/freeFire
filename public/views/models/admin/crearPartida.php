<?php
require_once 'menu.php';


$mundos=$connection->prepare("SELECT * FROM mundos");
$mundos->execute();
$mundo = $mundos->fetchAll();


if ((isset($_POST["MM_registerPartida"])) && ($_POST["MM_registerPartida"] == "formPartida")) {
    // DECLARACION DE LOS VALORES DE LAS VARIABLES DEPENDIENDO DEL TIPO DE CAMPO QUE TENGA EN EL FORMULARIO


    $idMundo = $_POST['idMundo'];
    $idNivel = $_POST['idNivel'];

    if (empty($idMundo) || empty($idNivel)) {
        // CONDICIONAL DEPENDIENDO SI EXISTEN ALGUN CAMPO VACIO EN EL FORMULARIO DE LA INTERFAZ
        echo '<script> alert ("Estimado Usuario, Existen Datos Vacios En El Formulario");</script>';
        echo '<script> window.location="./crearPartida.php"</script>';
    } else {
        // VARIABLES QUE CONTIENE EL NUMERO DE ENCRIPTACIONES DE LAS CONTRASEÑAS


        $registerPartida = $connection->prepare("INSERT INTO partida(cantidad_jugadores,id_mundo,idNivel,fechaInicial,id_estado) VALUES(30,'$idMundo','$idNivel',NOW(),1)");
        $registerPartida->execute();

        if ($registerPartida) {
                echo '<script>alert ("Registro Exitoso de partida.");</script>';
                echo '<script>window.location="./listaPartidas.php"</script>';
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
                                <h2>Registro de Partida</h2>
                                <span>registra y habilita las partidas de free fire para permitir que tus usuarios disfruten de la aplicacion.</span>

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
                                <h4 class="card-title">Crear Partida de Juego</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" name="formPartida" action="" autocomplete="off">


                                        <select name="idMundo" class="form-control form-control-lg input-text" required id="">
                                            <option selected disabled value="">Selecciona el mundo</option>
                                            <?php
                                            $mundos = $connection->prepare("SELECT * FROM mundos");
                                            $mundos->execute();
                                            $resultados = $mundos->fetchAll();

                                            if(!empty($resultados)) {

                                                foreach ($resultados as $mundo) {
                                                    ?>
                                                <option value="<?php echo($mundo['idMundo']) ?>"><?php echo($mundo['nombreMundo']) ?></option>
                                            <?php
                                                }
                                            }else{


                                             ?>                                       
                                            <option value="">No hay mundos disponibles</option>

                                            <?php


                                            }?>
                                        </select>

                                        <select name="idNivel" class="form-control form-control-lg input-text mt-4" required id="">
                                            <option selected disabled value="">Selecciona el nivel de dificultad</option>
                                            <?php
                                            $niveles=$connection->prepare("SELECT * FROM niveles");
                                            $niveles->execute();
                                            $nivel = $niveles->fetchAll();
                                            

                                            if(!empty($nivel)) {

                                                foreach ($nivel as $nivel) {
                                                    ?>
                                                <option value="<?php echo($nivel['idNivel']) ?>"><?php echo($nivel['nombreNivel']) ?></option>
                                            <?php
                                                }
                                            }else{

                                             ?>                                       
                                            <option value="">No hay niveles disponibles</option>

                                            <?php


                                            }?>
                                        </select>

										<div class=" mb-3 m-auto mt-4">

											<input type="submit" class="btn bg-danger" value="Registrar"></input>
											<input type="hidden"  value="formPartida" name="MM_registerPartida"></input>
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
