<?php
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

#$usuario = $_SESSION['usuario'];
$num_empleado = $_POST['l_num_empleado'];
$aPaterno = $_POST['l_aPaterno'];
$aMaterno = $_POST['l_aMaterno'];
$nombre = $_POST['l_nombre'];
$cedula = $_POST['l_cedula'];
$especialidad = $_POST['l_especialidad'];
$grado_academico = $_POST['l_grado_academico'];
$rol = $_POST['l_rol'];
$genero = $_POST['l_genero'];
$fechaNa = $_POST['l_fechaNa'];
$contrasenia = $_POST['l_pass'];
$estatus = "activo";

    // Inicia una transacción
    $bd->beginTransaction();

    $sentencia = $bd->prepare("INSERT INTO persona (aPaterno, aMaterno, nombre, genero, fecha_na, contrasenia, rol) VALUES (?,?,?,?,?,?,?);");
    $sentencia->bindParam(1, $aPaterno, PDO::PARAM_STR);
    $sentencia->bindParam(2, $aMaterno, PDO::PARAM_STR);
    $sentencia->bindParam(3, $nombre, PDO::PARAM_STR);
    $sentencia->bindParam(4, $genero, PDO::PARAM_STR);
    $sentencia->bindParam(5, $fechaNa, PDO::PARAM_STR);
    $sentencia->bindParam(6, $contrasenia, PDO::PARAM_STR);
    $sentencia->bindParam(7, $rol, PDO::PARAM_STR);
    $sentencia->execute();
    $last_persona_id = $bd->lastInsertId();
    // Confirma la transacción si todo está bien
    $bd->commit();

    // Obtiene el último ID insertado usando la misma conexión que se usó en la transacción
   
    echo "last person: ".$last_persona_id;
    
    $bd->beginTransaction();

    // Obtén el id_persona relacionado con la boleta del alumno
    $sentenciaDocente = $bd->prepare("INSERT INTO docente (num_empleado, cedula, especialidad, grado_academico, estatus, id_persona) VALUES (?,?,?,?,?,?)");
    $sentenciaDocente->bindParam(1, $num_empleado, PDO::PARAM_INT);
    $sentenciaDocente->bindParam(2, $cedula, PDO::PARAM_STR);
    $sentenciaDocente->bindParam(3, $especialidad, PDO::PARAM_STR);
    $sentenciaDocente->bindParam(4, $grado_academico, PDO::PARAM_STR);
    $sentenciaDocente->bindParam(5, $estatus, PDO::PARAM_STR);
    $sentenciaDocente->bindParam(6, $last_persona_id, PDO::PARAM_INT);
    $sentenciaDocente->execute();
    
    $bd->commit();
    // Obtiene el resultado


    header('Location: adDocente_create.php?mensaje=registrado');

?>