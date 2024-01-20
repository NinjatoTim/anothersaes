<?php include '../../template/aheader.php' ?>
<?php
    include_once "../../model/conexion.php";
    $alumno = $_SESSION['usuario'];
    $sentencia = $bd -> query("SELECT *
        FROM persona
        INNER JOIN alumno ON persona.id_persona = alumno.id_persona
        WHERE alumno.boleta = $alumno;");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container mt-5 ">
    <!--inicio alerta-->
    <?php 
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡Acción exitosa!</strong> Se ha eliminado con éxito
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
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
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
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>¡Error!</strong> Vuelve a intentar
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
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
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
    <!--inicio alerta-->
    <?php 
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
    ?>
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>¡Espera!</strong> Debes llenar todos los campos
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php 
        }
    ?>
    <!--Fin alerta-->
    <div class="row justify-content-center">
        <div class="col-md-11">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-lines-fill  mx-auto d-block" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            <br>
            <h3 class="text-center">Información personal</h3>
            <div class="card">
            <?php 
                foreach($persona as $dato){ 
            ?>
                <form action="aPerfilProceso_update.php" class="p-2" method="POST" >
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb-1">
                                    <label for="form-label" class="col-lg-5 fw-bold" >Boleta: </label>
                                    <input type="text" class="form-control col-lg-5" value="<?php echo $dato->boleta; ?>" placeholder="Boleta" name="l_boleta" autofocus disabled>
                                </div>
                                <div class="mb-1">
                                    <label for="form-label">Apellido Paterno: </label>
                                    <input type="text" class="form-control" name="l_aPaterno" value="<?php echo $dato->aPaterno; ?>"placeholder="Apellido Paterno" required autofocus>
                                </div>
                                <div class="mb-1">
                                    <label for="form-label">Apellido Materno: </label>
                                    <input type="text" class="form-control" name="l_aMaterno" value="<?php echo $dato->aMaterno; ?>" placeholder="Apellido Materno" required autofocus>
                                </div>
                                <div class="mb-1">
                                    <label for="form-label">Nombre: </label>
                                    <input type="text" class="form-control" name="l_nombre" value="<?php echo $dato->nombre; ?>" placeholder="Nombre" required autofocus>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-1">
                                    <label class="form-label">Género: </label>
                                    <select class="form-select" name="l_genero" id="l_funcion" value="<?php echo $dato->genero; ?>">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="O">Otro</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="form-reg">Fecha Nacimiento: </label>
                                    <input type="date" class="form-control" name="l_fechaNa" autofocus value="<?php echo $dato->fecha_na; ?>">
                                </div>
                                <div class="mb-2">
                                    <label for="form-reg">Contraseña: </label>
                                    <input type="text" class="form-control" name="l_pass" placeholder="Contraseña" required autofocus value="<?php echo $dato->contrasenia; ?>">
                                </div>
                                <div class="d-grid">
                                    <input type="hidden" name="oculto" value="1">
                                    <input type="submit" class="btn btn-primary" value="Editar">
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
                <?php 
                }
            ?>
            </div>
        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>


