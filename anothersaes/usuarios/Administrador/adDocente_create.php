<?php

include '../../template/adheader.php';
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
    <!--inicio alerta-->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Registro exitoso!</strong> puedes continuar navegando
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
                    Agregar nuevo docente
                </div>
                <div class="card-body">
                    <form action="cDocenteProceso_create.php" class="p-2" method="POST">
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5">Numero de empleado: </label>
                            <input type="text" class="form-control col-lg-5" placeholder="Número de empleado" name="l_num_empleado" autofocus required>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Apellido Paterno: </label>
                            <input type="text" class="form-control" name="l_aPaterno" placeholder="Apellido Paterno" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Apellido Materno: </label>
                            <input type="text" class="form-control" name="l_aMaterno" placeholder="Apellido Materno" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="l_nombre" placeholder="Nombre" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Cédula: </label>
                            <input type="text" class="form-control" name="l_cedula" placeholder="Cédula" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Especialidad: </label>
                            <input type="text" class="form-control" name="l_especialidad" placeholder="Especialidad" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Grado Académico: </label>
                            <input type="text" class="form-control" name="l_grado_academico" placeholder="Grado Académico" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Rol: </label>
                            <select class="form-select" name="l_rol" id="l_rol">
                                <option selected>seleccionar rol</option>
                                <option value="Docente">Docente</option>
                                <option value="Coordinador">Coordinador</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Género: </label>
                            <select class="form-select" name="l_genero" id="l_funcion">
                                <option selected>Genero</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                <option value="O">Otro</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg">Fecha Nacimiento: </label>
                            <input type="date" class="form-control" name="l_fechaNa" autofocus>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg">Contraseña: </label>
                            <input type="password" class="form-control" name="l_pass" placeholder="Contraseña" required autofocus>
                        </div>
                        <div class="d-grid">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-dark" value="Registrar">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>