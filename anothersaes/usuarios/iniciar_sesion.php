<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include '../model/conexion.php';

#print_r($_POST);
if(!$_POST['l_usuario']  || !$_POST['l_pass']){
    header('Location: ../index.php?mensaje=error');
}

$usuario = $_POST['l_usuario'];
$pass = $_POST['l_pass'];



$sentencia = $bd->prepare("SELECT
*
FROM
persona
JOIN
alumno ON persona.id_persona = alumno.id_persona
WHERE
alumno.boleta = $usuario
AND persona.contrasenia = '$pass';");

try {
    // consulta SQL 
    $sentencia->execute();

    // Obtener resultados
    $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    if ($resultados !== NULL && !empty($resultados)) {
        // Existe esa combinación
        $_SESSION['usuario'] = $usuario;
        header('Location: Alumno/aIndex.php');
    } else {
        // No se encontraron datos
        header('Location: ../index.php?mensaje=error');
    }
} catch (PDOException $e) {
    // Capturar y manejar errores de la base de datos
    echo "Error en la consulta: " . $e->getMessage();
    // Puedes redirigir o mostrar un mensaje de error específico según tus necesidades
     header('Location: ../index.php?mensaje=error');
}


?>