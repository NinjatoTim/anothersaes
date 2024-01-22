<?php
include '../../template/dheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
#consulta grupos
$usuario = $_SESSION['usuario'];
$grupo = $_POST['l_grupo'];
$sentencia = $bd->query("SELECT
asignacion_alumno.boleta,
asignacion.titulo,
asignacion.descripcion,
asignacion_alumno.calificacion,
asignacion_alumno.url
FROM
grupo
JOIN
asignacion ON grupo.id_grupo = asignacion.id_grupo
JOIN
asignacion_alumno ON asignacion.id_asignacion = asignacion_alumno.id_asignacion
WHERE
grupo.id_grupo = '$grupo';");
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <h3 class="text-center">Calificar alumnos</h3>
        <span class="fw-bold text-center ">Grupos asignados: grupo - materia</span>
        <div class="card">
            <div class="card-header">
                Lista de personas
            </div>
            <div class="p-2">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Boleta</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Calificacion</th>
                            <th scope="col" colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($resultado as $dato) {
                        ?>

                            <tr>
                                <td><?php echo $dato->boleta; ?></td>
                                <td><?php echo $dato->titulo; ?></td>
                                <td><?php echo $dato->descripcion; ?></td>
                                <td><?php echo $dato->calificacion; ?></td>
                                <td><a class="text-dark" ><i class="bi bi-download"></i></a></td>
                                <td><a  class="text-success"><i class="bi bi-pen"></i></a></td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>


    </div>
</div>

<?php include '../../template/footer.php' ?>