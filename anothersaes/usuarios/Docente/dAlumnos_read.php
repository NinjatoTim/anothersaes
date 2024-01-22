<?php
include '../../template/dheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
#consulta grupos
$usuario = $_SESSION['usuario'];
$sentencia = $bd->query("SELECT
grupo.id_grupo,
curso.nombre AS nombre_curso
FROM
docente
JOIN
grupo ON docente.num_empleado = grupo.num_empleado
JOIN
curso ON grupo.id_curso = curso.id_curso
WHERE
docente.num_empleado = $usuario;");
$grupos = $sentencia->fetchAll(PDO::FETCH_OBJ);
   
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <h3 class="text-center">Listas alumnos</h3>
        <span class="fw-bold text-center ">Grupos asignados: grupo - materia</span>
        
        <?php
        foreach ($grupos as $dato) {
        ?>
            <span class="text-center"><?php echo '<i class="bi bi-caret-right-fill"></i> ' . $dato->id_grupo . " - " . $dato->nombre_curso;  ?></span>
        <?php
        }
        ?>
        <br><br><br><br><br>
        <p class="text-center">Escriba el grupo para consultar su lista de alumnos</p>
        <div class="col-5">
            <!-- grupos -->
            
            <form action="dAlumnosProceso_read.php" class="p-2" method="POST" target="_blank">
                <div class="input-group">
                    <input type="text" class="form-control" name="l_grupo" placeholder="Grupo" aria-label="Input group example" aria-describedby="btnGroupAddon">
                    <div class="input-group-prepend">
                        <button type="submit" class="input-group-text"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12">
            <!-- grupos -->
            


        </div>
    </div>
</div>

<?php include '../../template/footer.php' ?>