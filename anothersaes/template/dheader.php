<!doctype html>
<html lang="es">
    <head>
        <title>Another SAES but better</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!--cdn icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" type="text/css" href="../src/css/stylesheet.css">
    </head>

    <body>
        
        <div class="container-fluid fixed-top mb-5 bg-secondary text-white"> <!--contenedor principal-->
            <div class="row">   <!--fila-->
                <div class="col-md">   <!--columna-->
                    <header>
                        <!--<img src="src/img/Logo_IPN.png" class="img-fluid float-left" width="5%" > -->
                        <h4 class="text-center">ESCUELA SUPERIOR DE CÓMPUTO, ¡Bienvenido docente!</h4>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="indexalumno.php">Inicio</a>
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
                                                <li><a class="dropdown-item" href="php/dPerfil_read.php">visualizar</a></li>
                                                <li><a class="dropdown-item" href="dPerfil_update.php">editar</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dAlumnos_read">Lista de alumnos</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Cursos
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="dMisCursos_read.php">Cursos</a></li>
                                                <li><a class="dropdown-item" href="dhorario_read.php">Mis Horarios</a></li>
                                                <li><a class="dropdown-item" href="dAsignacion_crud.php">Asignaciones</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Cerrar sesión</a>
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