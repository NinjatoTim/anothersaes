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
print_r($usuario);
print_r($pass);
$_SESSION['usuario'] = $usuario;
echo $_SESSION['usuario'];

$sentencia = $bd->prepare("SELECT * FROM persona ");

echo " ok? ";
$sentencia->execute();
echo "ok excecute";
$resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

print_r($resultados);

echo "ok fetch";

if ($resultados !== NULL && !empty($resultados)) {
    // Existe esa combinación
    header('Location: Alumno/aIndex.php');
} else {
    // No se encontraron datos
    header('Location: ../index.php?mensaje=error');
}


?>