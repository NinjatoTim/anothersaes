<?php
include '../../template/cheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
#consulta grupos
$usuario = $_SESSION['usuario'];
$sentencia = $bd->query("SELECT 
grupo.id_grupo,
CONCAT(persona.aPaterno, ' ', persona.aMaterno, ' ', persona.nombre) AS nombre_profesor,
grupo.num_empleado,
curso.nombre AS nombre_curso,
curso.precio,
grupo.cupoMax,
grupo.cupoDisponible,
(SELECT COUNT(*) FROM asignacion WHERE asignacion.id_grupo = grupo.id_grupo) AS num_asignaciones 
FROM grupo
JOIN docente ON grupo.num_empleado = docente.num_empleado
JOIN persona ON docente.id_persona = persona.id_persona
JOIN curso ON grupo.id_curso = curso.id_curso;");
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
   
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        Lista de Grupos 
                    </div>
                    <div class="p-2">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Grupo</th>
                                    <th scope="col">Profesor </th>
                                    <th scope="col">Número de empleado</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Cupo</th>
                                    <th scope="col">Cupo disponible</th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($resultado as $dato) {
                                    
                                ?>

                                    <tr>
                                        <td><?php echo $dato->id_grupo; ?></td>
                                        <td><?php echo $dato->nombre_profesor; ?></td>
                                        <td><?php echo $dato->num_empleado; ?></td>
                                        <td><?php echo $dato->nombre_curso; ?></td>
                                        <td><?php echo $dato->cupoMax; ?></td>
                                        <td><?php echo $dato->cupoDisponible; ?></td>
                                        <td><?php echo $dato->precio; ?></td>
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