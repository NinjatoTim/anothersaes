
<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    //print_r($bd);
    $sentencia = $bd -> query("select * from persona");
    $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
    
?>

<div class="container my-5"> <!--Contenedor principal-->
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
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Iniciar Sesión
                </div>
                <form action="usuarios/iniciar_sesion.php" class="p-2" method="post" >
                    <div class="mb-2">
                        <label for="form-ini">Usuario: </label>
                        <input type="text" class="form-control" name="l_usuario"  placeholder="Boleta"  autofocus>
                    </div>
                    <div class="mb-2">
                        <label for="form-ini">Contraseña: </label>
                        <input type="text" class="form-control" name="l_pass" placeholder="Contraseña" required autofocus>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
        <div id="carouselExample" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="src/img/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="src/img/img2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="src/img/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    ¿Eres alumno y no te has registrado? ¡Que esperas!
                </div>
                <form action="php/aPerfil_create.php" class="p-2" method="post" >
                    <div class="mb-1">
                        <label for="form-label" class="col-lg-5" >Boleta: </label>
                        <input type="text" class="form-control col-lg-5" placeholder="Boleta" name="l_boleta" autofocus required>
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
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>


