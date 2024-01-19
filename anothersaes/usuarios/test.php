<?php
// Supongamos que ya tienes el ID del alumno y la nueva información a actualizar
$idAlumno = 123; // Reemplaza con el ID real
$nuevoEstatus = "Inactivo"; // Reemplaza con la nueva información

// Conexión a la base de datos
include 'conexion.php'; // Asegúrate de incluir tu archivo de conexión

try {
    // Inicia una transacción
    $bd->beginTransaction();

    // Actualiza la tabla 'alumno'
    $sentenciaAlumno = $bd->prepare("UPDATE alumno SET estatus = ? WHERE boleta = ?");
    $sentenciaAlumno->bindParam(1, $nuevoEstatus, PDO::PARAM_STR);
    $sentenciaAlumno->bindParam(2, $idAlumno, PDO::PARAM_INT);
    $sentenciaAlumno->execute();

    // Puedes agregar más actualizaciones según sea necesario en esta sección
    // ...

    // Si todo está bien, confirma la transacción
    $bd->commit();

    echo "Actualización exitosa";
} catch (Exception $e) {
    // Si hay algún error, revierte la transacción
    $bd->rollBack();

    echo "Error en la actualización: " . $e->getMessage();
}
?>
