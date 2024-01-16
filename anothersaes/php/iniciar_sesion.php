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
#print_r($usuario);
#print_r($pass);
$_SESSION['usuario'] = $usuario;
echo $_SESSION['usuario'];

$sentencia = $bd->prepare("SELECT *
                        FROM persona
                        INNER JOIN alumno ON persona.id_persona = alumno.id_persona
                        WHERE alumno.boleta = ? AND persona.contrasenia = ?;");
$sentencia->bindParam(1, $boleta, PDO::PARAM_STR);
$sentencia->bindParam(2, $pass, PDO::PARAM_STR);
$sentencia->execute();
//recordar intercambiar ambos headers
if ($sentencia->rowCount() > 0) {
    // Existe esa combinación
    header('Location: ../index.php?mensaje=error');
} else {
    // No se encontraron datos
    header('Location: ../php/aPerfil_read.php');
}


?>