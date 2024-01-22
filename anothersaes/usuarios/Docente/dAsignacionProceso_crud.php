<?php
include_once "../../model/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
#print_r($_POST);
$accion = $_POST['accion'];
$id_asignacion = $_POST['id_asignacion'];
// Procesar la acción

if ($accion == 'editar') {
    // Lógica para editar
    header("Location: dAsignacion_editar.php?id_asignacion=$id_asignacion");
} elseif ($accion == 'eliminar') {
    // Lógica para eliminar
    $sentencia = $bd->prepare("DELETE FROM asignacion WHERE id_asignacion = $id_asignacion;");
    $resultado = $sentencia->execute();

    if ($resultado === TRUE) {
        header('Location: dAsignacion_crud.php?mensaje=registrado');
    } else {
        header('Location: dAsignacion_crud.php?mensaje=error');
    }
} else {
    // Acción no reconocida
    echo "Acción no reconocida.";
}
?>
