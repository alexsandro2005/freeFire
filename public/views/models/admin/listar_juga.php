<?php
require_once 'menu.php';
?>

<?php

require_once('../../../../database/connection.php');
$bd = new Database();
$conexion = $bd->conectar();
$consulta = $conexion->prepare("SELECT * FROM usuario INNER JOIN roles ON usuario.idRol = roles.idRol INNER JOIN estado ON usuario.estadoUsuario = estado.id_estado INNER JOIN tipodocu ON usuario.tipoDocumento = tipodocu.id_tipoDocu INNER JOIN genero ON usuario.genero = genero.id_genero WHERE usuario.idRol = 2");
$consulta->execute();
?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="col-xs-12 mb-3">
            <a href="./createJuga.php" class="btn btn-block bg-danger">Registrar Jugadores</a>
        </div>
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
                                    // Verificar el valor de id_estado
                                    if ($consul['id_estado'] == 1) {
                                        $color = 'rgb(6, 213, 0)'; // Verde si es estado 1
                                    } else {
                                        $color = 'rgb(209, 0, 0)'; // Rojo si es estado 2
                                    }
                                ?>
                                    <tbody>
                                        <tr style="text-align: center;">
                                            <td style="text-align: center;">
                                                <?= $consul['avatar'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?= $consul['tipoDocu'] ?>
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
                                                <?= $consul['estado'] ?>
                                            </td>

                                            <td>
                                                <form action="./actualizar_juga.php" method="get">
                                                    <input type="hidden" name="actualizar" value="<?= $consul['documento'] ?>">
                                                    <button class="btn btn-primary shadow btn-xl sharp" 
                                                        type="submit" onclick="return confirm('¿Está seguro de actualizar este usuario?')">
                                                        <i class="fa fa-pencil-alt">
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="./eliminar_juga.php" method="get">
                                                    <input type="hidden" name="eliminar" value="<?= $consul['documento'] ?>">
                                                    <button class="btn btn-danger shadow btn-xl sharp" type="submit"
                                                        onclick="return confirm('¿Está seguro de eliminar este usuario?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
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


<?php
    require_once 'footer.php';
?>