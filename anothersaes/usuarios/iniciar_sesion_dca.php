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
$rol = $_POST['l_rol'];



$sentencia = $bd->prepare("SELECT *
FROM persona
JOIN docente ON persona.id_persona = docente.id_persona
WHERE docente.num_empleado = '$usuario'
  AND persona.contrasenia = '$pass'
  AND persona.rol = '$rol';
");

try {
    // consulta SQL 
    $sentencia->execute();

    // Obtener resultados
    $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    if ($resultados !== NULL && !empty($resultados)) {
        // Existe esa combinación
        $_SESSION['usuario'] = $usuario;
        if($rol == "docente"){
            header('Location: Docente/dIndex.php');
        }elseif ($rol == "coordinador") {
            header('Location: Coordinador/cIndex.php');
        }elseif ($rol == "administrador") {
            header('Location: Administrador/adIndex.php');
        }else{
            header('Location: ../index.php?mensaje=error');
        }
        
        
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