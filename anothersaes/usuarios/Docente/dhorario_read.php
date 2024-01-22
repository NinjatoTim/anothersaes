<?php 
include '../../template/dheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$usuario = $_SESSION['usuario'];
$sentencia = $bd->query("SELECT
horario.dia_semana,
horario.hora_inicio,
horario.hora_fin,
grupo.id_grupo,
curso.nombre AS nombre_curso
FROM
docente
JOIN
grupo ON docente.num_empleado = grupo.num_empleado
JOIN
horario ON grupo.id_grupo = horario.id_grupo
JOIN
curso ON grupo.id_curso = curso.id_curso
WHERE
docente.num_empleado = $usuario
ORDER BY
horario.hora_inicio;");
$consulta = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($consulta);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-5">
            <h3 class="text-center">Horarios de clase</h3>
            <div class="card">
                <div class="p-2">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Grupo</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Día</th>
                                <th scope="col">Hora inicio</th>
                                <th scope="col">Hora fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($consulta as $dato){ 
                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato->id_grupo; ?></td>
                                <td><?php echo $dato->nombre_curso; ?></td>
                                <td><?php echo $dato->dia_semana; ?></td>
                                <td><?php echo $dato->hora_inicio; ?></td>
                                <td><?php echo $dato->hora_fin; ?></td>
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
</div>
<?php include '../../template/footer.php' ?>