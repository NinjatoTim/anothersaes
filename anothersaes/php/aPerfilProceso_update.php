<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../model/conexion.php';

echo "aqui estamos";
session_start();
$_SESSION['usuario'] = $usuario;
print_r($_POST);

$boleta = $_POST['l_boleta'];
$aPaterno = $_POST['l_aPaterno'];
$aMaterno = $_POST['l_aMaterno'];
$nombre = $_POST['l_nombre'];
$genero = $_POST['l_genero'];
$fechaNa = $_POST['l_fechaNa'];
$pass = $_POST['l_pass'];

try {
    // Inicia una transacción
    $bd->beginTransaction();

    // Obtén el id_persona relacionado con la boleta del alumno
    $sentenciaIdPersona = $bd->prepare("SELECT id_persona FROM alumno WHERE boleta = ?");
    $sentenciaIdPersona->bindParam(1, $boleta, PDO::PARAM_STR);
    $sentenciaIdPersona->execute();

    // Obtiene el resultado
    $resultadoIdPersona = $sentenciaIdPersona->fetch(PDO::FETCH_ASSOC);

    if ($resultadoIdPersona) {
        $idPersona = $resultadoIdPersona['id_persona'];

        // Actualiza la tabla 'persona'
        $sentenciaPersona = $bd->prepare("UPDATE persona SET aPaterno = ?, aMaterno = ?, nombre = ?, genero = ?, fecha_na = ?, contrasenia = ? WHERE id_persona = ?");
        $sentenciaPersona->bindParam(1, $nuevoAPaterno, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(2, $nuevoAMaterno, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(3, $nuevoNombre, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(4, $nuevoGenero, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(5, $nuevaFechaNa, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(6, $nuevaContrasenia, PDO::PARAM_STR);
        $sentenciaPersona->bindParam(7, $idPersona, PDO::PARAM_INT);
        $sentenciaPersona->execute();

        // Confirma la transacción si todo está bien
        $bd->commit();

        echo "Actualización exitosa";
    } else {
        echo "No se encontró el id_persona para la boleta proporcionada.";
    }
} catch (Exception $e) {
    // Si hay algún error, revierte la transacción
    $bd->rollBack();

    echo "Error en la actualización: " . $e->getMessage();
}


#if($resultado === TRUE){
#    #header('Location: ../index.php?mensaje=editado');
#}else{
#    #header('Location: ../index.php?mensaje=error');
#}
?>