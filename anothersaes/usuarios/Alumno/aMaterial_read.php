<?php
include '../../template/aheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$sentencia = $bd->query("SELECT
asignacion_alumno.id_asignacion,
asignacion.titulo AS titulo_asignacion,
asignacion.descripcion AS descripcion_asignacion,
asignacion.fecha_cierre,
asignacion.hora_cierre,
asignacion.tipo,
asignacion.url AS url_asignacion,
asignacion_alumno.calificacion,
curso.nombre AS nombre_curso,
curso.creditos,
curso.precio,
grupo.id_grupo
FROM
asignacion_alumno
JOIN
asignacion ON asignacion_alumno.id_asignacion = asignacion.id_asignacion
JOIN
grupo ON asignacion.id_grupo = grupo.id_grupo
JOIN
curso ON grupo.id_curso = curso.id_curso
JOIN
alumno ON asignacion_alumno.boleta = alumno.boleta
WHERE
alumno.boleta = $boleta and (asignacion.tipo = 'pdf' or asignacion.tipo = 'diapositiva' or asignacion.tipo = 'video' or asignacion.tipo = 'audio')
ORDER BY
curso.nombre ASC, asignacion.tipo ASC;");
$consulta = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($consulta);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10">
            <h3 class="text-center">Avance en mis cursos</h3>
            <div class="card">

                <div class="p-2">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Grupo</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Asignación</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">ver</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($consulta as $dato) {
                            ?>
                                <form form class="p-2 form-floating" method="POST" action="aAsignaciones_update.php">
                                    <tr>
                                        <td><?php echo $dato->id_grupo; ?></td>
                                        <td><?php echo $dato->nombre_curso; ?></td>
                                        <td><?php echo $dato->tipo; ?></td>
                                        <td><?php echo $dato->descripcion_asignacion; ?></td>
                                        <td><?php echo $dato->fecha_cierre; ?></td>
                                        <td><i class="bi bi-eye text-success"></i></td>
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
<?php include '../../template/footer.php' ?>