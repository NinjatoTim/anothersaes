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
alumno.boleta = $boleta
ORDER BY
curso.nombre ASC;");
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
                                <th scope="col">fecha_cierre</th>
                                <th scope="col">hora_cierre</th>
                                <th scope="col" colspan="2">realizar/editar</th>
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
                                        <td><?php echo $dato->hora_cierre; ?></td>
                                        <td>
                                            <?php
                                            $asignacion = $dato->url_asignacion;
                                            if ($asignacion == "no has hecho esta asignacion	") {
                                                echo '<td><a class="text-secondary" href=""><i class="bi bi-clipboard-check"></i></a></td>';
                                                echo '<td>
                                                <button type="submit" class="btn btn-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                                                  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                                                  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                                                </svg>
                                              </button>
                                                </td>';
                                            } else {
                                                echo '<td>
                                                <button type="submit" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                </svg>
                                                </button>
                                                </td>';
                                            }
                                            ?>
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
<?php include '../../template/footer.php' ?>