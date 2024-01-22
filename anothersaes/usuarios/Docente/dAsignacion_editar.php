<?php

include '../../template/dheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$usuario = $_SESSION['usuario'];
// En el segundo archivo (segundo_archivo.php)
$id_asignacion = $_GET['id_asignacion'];
// Esto mostrará "valor"

$sentencia = $bd->query("SELECT * FROM `asignacion` WHERE id_asignacion = '$id_asignacion';");
$consulta = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<div class="container mt-5">
    <div class="row justify-content-center">
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
        <div class="col-5 ">

            <div class="card">
                <div class="card-header">
                    Editar asignación
                </div>
                <div class="card-body">
                    <?php
                    foreach ($consulta as $dato) {
                    ?>
                        <form action="dAsignacionProceso_editar.php" class="p-2" method="POST">
                            <div class="mb-2">
                                <label for="form-label">Grupo: </label>
                                <input type="text" class="form-control" name="l_grupo" value="<?php echo $dato->id_grupo; ?>">
                            </div>
                            <div class="mb-2">
                                <label for="form-label">Título: </label>
                                <input type="text" class="form-control" name="l_titulo" value="<?php echo $dato->titulo; ?>">
                            </div>
                            <div class="mb-2">
                                <label for="form-label">Descripción: </label>
                                <input type="text" class="form-control" name="l_descripcion" value="<?php echo $dato->descripcion; ?>">
                            </div>
                            <div class="mb-2">
                                <label for="form-label">Fecha de cierre: </label>
                                <input type="text" class="form-control" name="l_fechaMax" value="<?php echo $dato->fecha_cierre; ?>">
                            </div>
                            <div class="mb-2">
                                <label for="form-label">Hora de cierre: </label>
                                <input type="text" class="form-control" name="l_horaMax" value="<?php echo $dato->hora_cierre; ?>">
                            </div>
                            <div class="mb-2">
                                <label for="form_label">Tipo: </label>
                                <select name="l_tipo" id="l_tipo" value="<?php echo $dato->tipo; ?>">
                                    <option value="pdf">pdf</option>
                                    <option value="diapositiva">diapositiva</option>
                                    <option value="video">video</option>
                                    <option value="evaluacion">evaluacion</option>
                                    <option value="interactico">interactico</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="form-label">URL </label>
                                <input type="text" class="form-control" name="l_url" value="<?php echo $dato->url; ?>">
                            </div>
                            <div class="d-grid">
                                <input type="hidden" name="id_asignacion" value="<?php echo $id_asignacion; ?>">
                                <input type="submit" class="btn btn-warning" value="Editar">
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>