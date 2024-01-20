<?php include '../../template/aheader.php' ?>
<?php
include_once "../../model/conexion.php";

/*
    SELECT curso.id_curso, curso.nombre AS nombre_curso, curso.creditos, curso.precio
FROM alumno
JOIN grupo ON alumno.boleta = grupo.boleta
JOIN curso ON grupo.id_curso = curso.id_curso
WHERE alumno.boleta = 'tu_boleta';
    */
$alumno = $_SESSION['usuario'];
$sentencia = $bd->query("SELECT curso.id_curso, curso.nombre AS nombre_curso, curso.creditos, curso.precio,
docente.num_empleado, persona.nombre AS nombre_docente
FROM alumno
JOIN grupo ON alumno.boleta = grupo.boleta
JOIN curso ON grupo.id_curso = curso.id_curso
JOIN docente ON grupo.num_empleado = docente.num_empleado
JOIN persona ON docente.id_persona = persona.id_persona
WHERE alumno.boleta = '$alumno';");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
print_r($persona);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <h3 class="text-center">Cursos inscritos actualmente</h3>
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="border border-dark rounded mx-4 px-4 my-4 py-4  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-mortarboard mx-auto d-block" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                    </svg>
                    <h5>Nombre: </h5>
                    <div>
                        <label class="form-label">Grupo: </label>
                        <label class="form-label"><?php echo $dato->id_grupo; ?></label>
                    </div>
                    <div>
                        <label class="form-label">Profesor: </label>
                        <label class="form-label"><?php echo $dato->nombre_docente; ?></label>

                    </div>
                    <div><label class="form-label">Avance: </label>
                        <label class="form-label">0%</label>

                    </div>
                    <div>
                        <a class="link-danger" href="http://">Ir al material de la clase</a>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>