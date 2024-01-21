<?php
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$grupo = $_POST['l_grupo'];
$sentencia = $bd -> query("SELECT
alumno.boleta,
persona.nombre AS nombre_alumno,
persona.aPaterno,
persona.aMaterno
FROM
grupo
JOIN
alumno_grupo ON grupo.id_grupo = alumno_grupo.id_grupo
JOIN
alumno ON alumno_grupo.boleta = alumno.boleta
JOIN
persona ON alumno.id_persona = persona.id_persona
WHERE
grupo.id_grupo = '$grupo';");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($persona);
?>
<!doctype html>
<html lang="es">

<head>
    <title>Another SAES but better</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!--cdn icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/stylesheet.css">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        Lista de Alumnos  <?php echo $grupo;?>
                    </div>
                    <div class="p-2">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Boleta</th>
                                    <th scope="col">Apellido Paterno</th>
                                    <th scope="col">Apellido Materno</th>
                                    <th scope="col">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($persona as $dato) {
                                    
                                ?>

                                    <tr>
                                        <td><?php  ?></td>
                                        <td><?php echo $dato->boleta; ?></td>
                                        <td><?php echo $dato->nombre_alumno; ?></td>
                                        <td><?php echo $dato->aPaterno; ?></td>
                                        <td><?php echo $dato->aMaterno; ?></td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>