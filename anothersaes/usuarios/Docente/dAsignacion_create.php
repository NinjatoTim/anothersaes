<?php

include '../../template/dheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
                    Crear nueva asignación
                </div>
                <div class="card-body">
                    <form action="dAsignacionProceso_create.php" class="p-2" method="POST">
                        <div class="mb-2">
                            <label for="form-label">Grupo: </label>
                            <input type="text" class="form-control" name="l_grupo">
                        </div>
                        <div class="mb-2">
                            <label for="form-label">Título: </label>
                            <input type="text" class="form-control" name="l_titulo">
                        </div>
                        <div class="mb-2">
                            <label for="form-label">Descripción: </label>
                            <input type="text" class="form-control" name="l_descripcion">
                        </div>
                        <div class="mb-2">
                            <label for="form-label">Fecha de cierre: </label>
                            <input type="date" class="form-control" name="l_fechaMax">
                        </div>
                        <div class="mb-2">
                            <label for="form-label">Hora de cierre: </label>
                            <input type="time" class="form-control" name="l_horaMax">
                        </div>
                        <div class="mb-2">
                            <label for="form_label">Tipo: </label>
                            <select name="l_tipo" id="l_tipo">
                                <option value="pdf">pdf</option>
                                <option value="diapositiva">diapositiva</option>
                                <option value="video">video</option>
                                <option value="evaluacion">evaluacion</option>
                                <option value="interactico">interactico</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="form-label">URL </label>
                            <input type="text" class="form-control" name="l_url">
                        </div>
                        <div class="d-grid">
                            <input type="submit" class="btn btn-success" value="Agregar">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>