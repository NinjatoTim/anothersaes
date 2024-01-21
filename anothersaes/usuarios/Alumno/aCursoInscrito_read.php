<?php 
include '../../template/aheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$sentencia = $bd->query("SELECT 
ag.id_agrupo,
g.id_grupo,
c.nombre AS nombre_curso,
CONCAT(p.nombre, ' ', p.aPaterno, ' ', p.aMaterno) AS nombre_profesor
FROM alumno_grupo ag
JOIN grupo g ON ag.id_grupo = g.id_grupo
JOIN curso c ON g.id_curso = c.id_curso
JOIN docente d ON g.num_empleado = d.num_empleado
JOIN persona p ON d.id_persona = p.id_persona
WHERE ag.boleta = '$boleta';");
$consulta = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($consulta);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-5">
            <h3 class="text-center">Cursos Inscritos</h3>
            <?php
            foreach ($consulta as $dato) {
            ?>
                <div class="border border-dark rounded mx-4 px-4 my-4 py-4  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-mortarboard mx-auto d-block" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                    </svg>
                    <h5>Nombre: </h5>
                    <div>
                        <label class="form-label fw-bold text-success">Grupo: </label>
                        <label class="form-label"><?php echo $dato->id_grupo; ?></label>
                    </div>
                    <div>
                        <label class="form-label fw-bold text-success">Clase: </label>
                        <label class="form-label"><?php echo $dato->nombre_curso; ?></label>
                    </div>
                    <div>
                        <label class="form-label fw-bold text-success">Profesor: </label>
                        <label class="form-label"><?php echo $dato->nombre_profesor; ?></label>
                    </div>
                    <div>
                        <label class="form-label fw-bold text-success">Cupo Disponible: </label>
                        <label class="form-label"><?php echo $dato->cupoDisponible; ?></label>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>