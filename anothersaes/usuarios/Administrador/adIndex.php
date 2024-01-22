<?php
include '../../template/adheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php  ?>
<div class="container my-5 justify-content-center"> <!--Contenedor principal-->
    <!--inicio alerta-->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
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
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
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
    <!--inicio alerta-->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
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
    <div class="row justify-content-center mt-5">
        <?php
        #$host = $_SERVER['HTTP_HOST'];
        #$url = sprintf("%s%s",$host,"/anothersaes/anothersaes/");
        #echo $url; 
        #echo sprintf("%s%s",$url,"usuarios/Alumno/aCursoInscrito_read.php");
        ?>
        <div class="col-md-6  justify-content-center">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-backpack2 mx-auto d-block" viewBox="0 0 16 16">
                <path d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14" />
                <path fill-rule="evenodd" d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10z" />
                <path d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v1.191l1.17.585a1.5 1.5 0 0 1 .83 1.342V13.5a1.5 1.5 0 0 1-1.5 1.5h-1c-.456.607-1.182 1-2 1h-7a2.5 2.5 0 0 1-2-1h-1A1.5 1.5 0 0 1 0 13.5v-2.382a1.5 1.5 0 0 1 .83-1.342L2 9.191V8a6 6 0 0 1 4-5.659M7 2v.083a6 6 0 0 1 2 0V2a1 1 0 0 0-2 0M3 13.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8A5 5 0 0 0 3 8zm-1-3.19-.724.362a.5.5 0 0 0-.276.447V13.5a.5.5 0 0 0 .5.5H2zm12 0V14h.5a.5.5 0 0 0 .5-.5v-2.382a.5.5 0 0 0-.276-.447L14 10.309Z" />
            </svg>
            <br><br><br><br>
            <h3 class="text-center">¿Qué deseas hacer hoy?</h3>
            <p class="text-center"> Algunas cosas que puedes hacer</p>
            <br>
            <div class="d-grid gap-2">
                <a href="https://www.ipn.mx/assets/files/normatividad/docs/reglamentos/Reglamento-Organico-IPN-2020.pdf" TARGET="_BLANK" class="btn btn-lg btn-outline-dark">Consultar reglamento</a>
                <a href="../bellakoz.php" class="btn btn-lg btn-outline-dark">Acerca de Bellakos</a>
            </div>
        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>