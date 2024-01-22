<?php
include '../../template/adheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sentencia = $bd -> query("SELECT *
FROM persona
JOIN docente ON persona.id_persona = docente.id_persona;
");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($persona);
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                         Docentes
                    </div>
                    <div class="p-2">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Número de empleado</th>
                                    <th scope="col">Apellido Paterno</th>
                                    <th scope="col">Apellido Materno</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cédula</th>
                                    <th scope="col">Especialidad</th>
                                    <th scope="col">Grado académico</th>
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
                                        <td><?php echo $dato->num_empleado; ?></td>
                                        <td><?php echo $dato->aPaterno; ?></td>
                                        <td><?php echo $dato->aMaterno; ?></td>
                                        <td><?php echo $dato->nombre; ?></td>
                                        <td><?php echo $dato->cedula; ?></td>
                                        <td><?php echo $dato->especialidad; ?></td>
                                        <td><?php echo $dato->grado_academico; ?></td>
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