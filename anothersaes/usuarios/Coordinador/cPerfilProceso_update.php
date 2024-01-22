<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../model/conexion.php';

session_start();
#$_SESSION['usuario'] = $alumno;
#print_r($_POST);

$usuario = $_SESSION['usuario'];
$aPaterno = $_POST['l_aPaterno'];
$aMaterno = $_POST['l_aMaterno'];
$nombre = $_POST['l_nombre'];
$cedula = $_POST['l_cedula'];
$especialidad = $_POST['l_especialidad'];
$grado = $_POST['l_grado'];
$genero = $_POST['l_genero'];
$fechaNa = $_POST['l_fechaNa'];
$pass = $_POST['l_pass'];

try {
    // Inicia una transacción
    $bd->beginTransaction();

    // Obtén el id_persona relacionado con el num de empleado del alumno
    $sentenciaIdPersona = $bd->prepare("SELECT id_persona FROM docente WHERE num_empleado = ?");
    $sentenciaIdPersona->bindParam(1, $usuario, PDO::PARAM_STR);
    $sentenciaIdPersona->execute();

    // Obtiene el resultado
    $resultadoIdPersona = $sentenciaIdPersona->fetch(PDO::FETCH_ASSOC);

    if ($resultadoIdPersona) {
        $idPersona = $resultadoIdPersona['id_persona'];

        // Actualiza la tabla 'persona'
        $sentenciaPersona = $bd->prepare("UPDATE persona SET aPaterno = ?, aMaterno = ?, nombre = ?, genero = ?, fecha_na = ?, contrasenia = ? WHERE id_persona = ?");
        $sentenciaPersona->bindParam(1, $aPaterno, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(2, $aMaterno, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(3, $nombre, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(4, $genero, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(5, $fechaNa, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(6, $pass, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(7, $idPersona, PDO::PARAM_INT);
        $sentenciaPersona->execute();

        // Confirma la transacción si todo está bien
        $bd->commit();

        $sentenciaPersona2 = $bd->prepare("UPDATE docente SET cedula = ?, especialidad = ?, grado_academico = ? WHERE id_persona = ?");
        $sentenciaPersona2->bindParam(1, $cedula, PDO::PARAM_STR);
        $sentenciaPersona2->bindParam(2, $especialidad, PDO::PARAM_STR);
        $sentenciaPersona2->bindParam(3, $grado, PDO::PARAM_STR);
        $sentenciaPersona2->bindParam(4, $idPersona, PDO::PARAM_INT);
        $sentenciaPersona2->execute();

        header('Location: cPerfil_update.php?mensaje=editado');
    } else {
        echo "aqui hay problema";
        header('Location: cPerfil_update.php?mensaje=error');
    }
} catch (Exception $e) {
    // Si hay algún error, revierte la transacción
    $bd->rollBack();

    echo "Error en la actualización: " . $e->getMessage();
    ('Location: cPerfil_update.php?mensaje=error');
}


#if($resultado === TRUE){
#    #header('Location: ../index.php?mensaje=editado');
#}else{
#    #header('Location: ../index.php?mensaje=error');
#}
?>