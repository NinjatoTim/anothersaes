<?php
include '../../template/dheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$usuario = $_SESSION['usuario'];
$sentencia = $bd->query("SELECT
grupo.id_grupo,
curso.nombre AS nombre_curso,
asignacion.id_asignacion,
asignacion.titulo,
asignacion.descripcion,
asignacion.fecha_cierre,
asignacion.hora_cierre,
asignacion.tipo,
asignacion.url
FROM
docente
JOIN
grupo ON docente.num_empleado = grupo.num_empleado
JOIN
asignacion ON grupo.id_grupo = asignacion.id_grupo
JOIN
curso ON grupo.id_curso = curso.id_curso
WHERE
docente.num_empleado = $usuario
ORDER BY
asignacion.fecha_cierre;");
$consulta = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($consulta);
?>
<div class="container mt-5">
    <!--inicio alerta-->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Acción exitosa!</strong> Se han actualizado los datos
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    ?>
    <!--Fin alerta-->
    <!--inicio alerta-->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Registro exitoso!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    ?>
    <!--Fin alerta-->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>¡Error!</strong> Vuelve a intentar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    ?>
    <!--Fin alerta-->
    <!--inicio alerta-->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Acción exitosa!</strong> Se ha eliminado con éxito
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    ?>
    <!--Fin alerta-->
    <div class="row ">
        <div class="col-12 ">
        </div class="container ">
        <div class="col-10 d-flex justify-content-center">
            <h3>Asignaciones</h3>
        </div>
        <div class="col-2 d-flex justify-content-end">
            <a href="dAsignacion_create.php" type="button" class="btn btn-danger ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path>
                </svg>
                Nueva
            </a>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>

                    <tr>
                        <th scope="col">Grupo</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha de cierre</th>
                        <th scope="col">Hora de cierre</th>
                        <th scope="col">Tipo de asignación</th>
                        <th scope="col">URL si aplica</th>
                        <th scope="col" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($consulta as $dato) {
                    ?>
                        <form action="dAsignacionProceso_crud.php" class="p-2" method="POST">
                            <tr>
                                <th><?php echo $dato->id_grupo; ?></th>
                                <td><?php echo $dato->nombre_curso; ?></td>
                                <td><?php echo $dato->titulo; ?></td>
                                <td><?php echo $dato->descripcion; ?></td>
                                <td><?php echo $dato->fecha_cierre; ?></td>
                                <td><?php echo $dato->hora_cierre; ?></td>
                                <td><?php echo $dato->tipo; ?></td>
                                <td><?php echo $dato->url; ?></td>
                                <td>
                                    <input type="hidden" name="id_asignacion" value="<?php echo $dato->id_asignacion; ?>">
                                    <button class="btn text-success" type="submit" name="accion" value="editar"><i class="bi bi-pencil-square"></i></button>
                                </td>
                                <td>
                                    <button class="btn text-warning" type="submit" name="accion" value="eliminar"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </form>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include '../../template/footer.php' ?>