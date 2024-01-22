<?php
include '../../template/cheader.php';
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$usuario = $_SESSION['usuario'];
$sentencia = $bd -> query("SELECT *
FROM persona
JOIN docente ON persona.id_persona = docente.id_persona
WHERE docente.num_empleado = $usuario;");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
#print_r($persona);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-lines-fill  mx-auto d-block" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            <br>
            <?php 
            #echo $alumno; 
            #print_r($persona);
            ?>
            <h3 class="text-center">Información personal</h3>
            <?php 
                foreach($persona as $dato){ 
            ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success" >Número de empleado: </label>
                            <label><?php echo $dato->num_empleado; ?></label>
                        </div>
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success">Apellido Paterno: </label>
                            <label><?php echo $dato->aPaterno; ?></label>

                        </div>
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success">Apellido Materno: </label>
                            <label><?php echo $dato->aMaterno; ?></label>
                        </div>
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success">Nombre: </label>
                            <label><?php echo $dato->nombre; ?></label>
                        </div>
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success">Cédula profesional: </label>
                            <label><?php echo $dato->cedula; ?></label>
                        </div>
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success">Especialidad: </label>
                            <label><?php echo $dato->especialidad; ?></label>
                        </div>
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success">Grado Académico: </label>
                            <label><?php echo $dato->grado_academico; ?></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5 fw-bold text-success">Estatus: </label>
                            <label><?php echo $dato->estatus; ?></label>
                        </div>
                        <div class="mb-1">
                        <label for="form-label" class="col-lg-5 fw-bold text-success">Género: </label>
                        <label><?php 
                         if($dato->genero == "O"){
                            echo "Otro";
                        }elseif($dato->genero == "F"){
                            echo "mujer";
                        }else{
                            echo "hombre ";
                        }
                        ?></label>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg" class="col-lg-5 fw-bold text-success">Fecha Nacimiento: </label>
                            <label><?php echo $dato->fecha_na; ?></label>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg" class="col-lg-5 fw-bold text-success">Edad: </label>
                            <label>
                                <?php 
                                    $fechaNacimiento = new DateTime($dato->fecha_na);
                                    // Obtener la fecha actual
                                    $fechaActual = new DateTime();
                                    // Calcular la diferencia entre las dos fechas
                                    $diferencia = $fechaActual->diff($fechaNacimiento);
                                    // Obtener la diferencia en años
                                    $edad = $diferencia->y; 
                                    echo $edad;
                                ?>
                            </label>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg" class="col-lg-5 fw-bold text-success">Contraseña: </label>
                            <label><?php echo $dato->contrasenia; ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>


