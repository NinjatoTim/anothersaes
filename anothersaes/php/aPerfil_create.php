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
    echo "ok ";

    print_r($_POST);

    $boleta = $_POST["l_boleta"];
    $aPaterno = $_POST["l_aPaterno"];
    $aMaterno = $_POST["l_aMaterno"];
    $nombre = $_POST["l_nombre"];
    $genero = $_POST["l_genero"];
    $fechaNa = $_POST["l_fechaNa"];
    $pass = $_POST["l_pass"];
    $rol = "alumno";    
    $estatus = "activo";    
    echo " ok2 ";
    $sentencia = $bd->prepare("INSERT INTO persona (aPaterno, aMaterno, nombre, genero, fecha_na, contrasenia, rol) VALUES (?,?,?,?,?,?,?);");
    echo " ok3 ";
    $sentencia->bindParam(1, $aPaterno, PDO::PARAM_STR);
    $sentencia->bindParam(2, $aMaterno, PDO::PARAM_STR);
    $sentencia->bindParam(3, $nombre, PDO::PARAM_STR);
    $sentencia->bindParam(4, $genero, PDO::PARAM_STR);
    $sentencia->bindParam(5, $fechaNa, PDO::PARAM_STR);
    $sentencia->bindParam(6, $pass, PDO::PARAM_STR);
    $sentencia->bindParam(7, $rol, PDO::PARAM_STR);
    echo " ok4 ";
    $sentencia->execute();
    #Paso 2: Obtener el id_persona generado
    $id_persona = $bd->lastInsertId();
    echo " ok5 ";
    #Paso 3: Insertar en la tabla alumno
    $sentencia1 = $bd->prepare("INSERT INTO alumno (boleta, id_persona, estatus) VALUES (?,?,?);");
    echo " ok6 ";
    $sentencia1->bindParam(1, $boleta, PDO::PARAM_STR);
    $sentencia1->bindParam(2, $id_persona, PDO::PARAM_STR);
    $sentencia1->bindParam(3, $estatus, PDO::PARAM_STR);
    #$sentencia1->execute();
    echo " ok7 ";
        
    if ($sentencia1->execute()) {
        echo "OK! ";
        header('Location: ../index.php?mensaje=registrado');
    } else {
        header('Location: ../index.php?mensaje=error');
    }


?>