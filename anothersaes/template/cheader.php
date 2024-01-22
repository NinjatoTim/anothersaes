<?php
$host = $_SERVER['HTTP_HOST'];
$url = sprintf("%s%s%s", "http://", $host, "/anothersaes/anothersaes/");
#echo $url; 

?>
<?php
session_start();
$usuario = $_SESSION['usuario'];
if (!isset($_SESSION['usuario'])) {
    header("location: ../index.php");
}
?>
<!doctype html>
<html lang="es">

<head>
    <title>Another SAES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!--cdn icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo sprintf("%s%s", $url, "src/css/stylesheet.css"); ?>">
</head>

<body>

    <div class="container-fluid fixed-top mb-5 bg-secondary text-white"> <!--contenedor principal-->
        <div class="row"> <!--fila-->
            <div class="col-md"> <!--columna-->
                <header>
                    <h4 class="text-center">ESCUELA SUPERIOR DE CÓMPUTO, ¡Bienvenido Coordinador <?php echo $usuario."!"; ?></h4>
                    <?php #echo sprintf("%s%s",$url,"src/css/stylesheet.css");
                    ?>
                    <?php #echo $boleta;
                    ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?php echo sprintf("%s%s", $url, "usuarios/Docente/dIndex.php") ?>">Inicio</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Perfil
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="<?php echo sprintf("%s%s", $url, "usuarios/Coordinador/cPerfil_read.php") ?>">visualizar</a></li>
                                            <li><a class="dropdown-item" href="<?php echo sprintf("%s%s", $url, "usuarios/Coordinador/cPerfil_update.php") ?>">editar</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo sprintf("%s%s", $url, "usuarios/Coordinador/cAlumnos_crud.php") ?>">Alumnos</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Docentes
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="<?php echo sprintf("%s%s", $url, "usuarios/Coordinador/cDocente_crud.php") ?>">Lista Docentes</a></li>
                                            <li><a class="dropdown-item" href="<?php echo sprintf("%s%s", $url, "usuarios/Coordinador/cDocente_create.php") ?>">Agregar Docente</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo sprintf("%s%s", $url, "usuarios/Coordinador/cCurso_crud.php") ?>">Cursos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo sprintf("%s%s", $url, "usuarios/Coordinador/cGrupo_crud.php") ?>">Grupos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo sprintf("%s%s", $url, "usuarios/cerrar_sesion.php") ?>">Cerrar sesión</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
    </div>

    <br><br>