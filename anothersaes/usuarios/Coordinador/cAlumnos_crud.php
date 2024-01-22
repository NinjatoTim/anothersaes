<?php
include '../../template/cheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sentencia = $bd -> query("SELECT *
FROM persona
JOIN alumno ON persona.id_persona = alumno.id_persona;
");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($persona);
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                         Alumnos  
                    </div>
                    <div class="p-2">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Boleta</th>
                                    <th scope="col">Apellido Paterno</th>
                                    <th scope="col">Apellido Materno</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Contraseña</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($persona as $dato) {
                                    
                                ?>

                                    <tr>
                                        <td><?php echo $dato->boleta; ?></td>
                                        <td><?php echo $dato->nombre; ?></td>
                                        <td><?php echo $dato->aPaterno; ?></td>
                                        <td><?php echo $dato->aMaterno; ?></td>
                                        <td><?php echo $dato->genero; ?></td>
                                        <td><?php echo $dato->estatus; ?></td>
                                        <td><?php echo $dato->contrasenia; ?></td>
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

    <?php include '../../template/footer.php' ?>