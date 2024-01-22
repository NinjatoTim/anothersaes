<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../model/conexion.php';

session_start();
#$_SESSION['usuario'] = $alumno;
#print_r($_POST);

$usuario = $_SESSION['usuario'];
$id_asignacion = $_GET['id_asignacion'];
$grupo = $_POST['l_grupo'];
$titulo = $_POST['l_titulo'];
$descripcion = $_POST['l_descripcion'];
$fechaMax = $_POST['l_fechaMax'];
$horaMax = $_POST['l_horaMax'];
$tipo = $_POST['l_tipo'];
$url = $_POST['l_url'];

    // Inicia una transacción
    $bd->beginTransaction();

    // Obtén el id_persona relacionado con el num de empleado del alumno

    $sentencia = $bd->prepare("UPDATE asignacion SET id_grupo = ?, titulo = ?, descripcion = ?, fecha_cierre = ?, hora_cierre = ?, tipo = ?,  url = ?  WHERE  id_asignacion = ?;");
    $sentencia->bindParam(1, $grupo, PDO::PARAM_STR);
    $sentencia->bindParam(2, $titulo, PDO::PARAM_STR);
    $sentencia->bindParam(3, $descripcion, PDO::PARAM_STR);
    $sentencia->bindParam(4, $fechaMax, PDO::PARAM_STR);
    $sentencia->bindParam(5, $horaMax, PDO::PARAM_STR);
    $sentencia->bindParam(6, $tipo, PDO::PARAM_STR);
    $sentencia->bindParam(7, $url, PDO::PARAM_STR);
    $sentencia->bindParam(8, $id_asignacion, PDO::PARAM_INT);
    $sentencia->execute();

    // Confirma la transacción si todo está bien
    $bd->commit();

    header('Location: dAsignacion_crud.php?mensaje=editado');

?>