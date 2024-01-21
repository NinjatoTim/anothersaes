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
    <h1>Aquí debería haber una interfaz para subir o hacer cambios a asignaciones pero a falta de tiempo no se implementó</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-cone-striped text-warning" viewBox="0 0 16 16">
          <path d="m9.97 4.88.953 3.811C10.159 8.878 9.14 9 8 9s-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12m-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4s1.2-.036 1.725-.098m4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257z"/>
        </svg>
    </div>
</div>
<?php include '../../template/footer.php' ?>