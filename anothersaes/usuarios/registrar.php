<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "ok";
    if(empty($_POST['oculto']) || empty($_POST['l_boleta']) || empty($_POST['l_aPaterno']) || empty($_POST['l_aMaterno']) || empty($_POST['l_nombre'])){
        header('Location: ../index.php?mensaje=falta');
        exit();
    }
    include '../model/conexion.php';
    echo "ok";

    print_r($_POST);

    $boleta = $_POST["l_boleta"];
    $aPaterno = $_POST["l_aPaterno"];
    $aMaterno = $_POST["l_aMaterno"];
    $nombre = $_POST["l_nombre"];
    $funcion = $_POST["l_funcion"];
    $pass = $_POST["l_pass"];
    echo " ok2";
    $sentencia = $bd->prepare("INSERT INTO persona (iden_institucional, aPaterno, aMaterno,nombre,funcion, contrasenia) VALUES (?,?,?,?,?,?);");
    echo " ok3";
    //$sentencia->bindParam($boleta, $aPaterno, $aMaterno, $nombre, $funcion);
    $sentencia->bindParam(1, $boleta, PDO::PARAM_STR);
    $sentencia->bindParam(2, $aPaterno, PDO::PARAM_STR);
    $sentencia->bindParam(3, $aMaterno, PDO::PARAM_STR);
    $sentencia->bindParam(4, $nombre, PDO::PARAM_STR);
    $sentencia->bindParam(5, $funcion, PDO::PARAM_STR);
    $sentencia->bindParam(6, $pass, PDO::PARAM_STR);
    echo " ok4";
    $sentencia->execute();
    echo " ok5";
    
    if ($sentencia->execute()) {
        header('Location: ../index.php?mensaje=registrado');
    } else {
        header('Location: ../index.php?mensaje=error');
    }


?>