<?php
require_once 'menu.php';
?>

<?php

require_once('../../../../database/connection.php');
$bd = new Database();
$conexion = $bd->conectar();
$consulta = $conexion->prepare("SELECT * FROM usuario INNER JOIN roles ON usuario.idRol = roles.idRol WHERE usuario.idRol = 1");
$consulta->execute();
?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

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
                                ?>
                                    <tbody>
                                        <tr style="text-align: center;">

                                            <td style="text-align: center;">
                                                <?= $consul['tipoDocumento'] ?>
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
                                                <?= $consul['estadoUsuario'] ?>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
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

 require_once('./footer.php');

?>