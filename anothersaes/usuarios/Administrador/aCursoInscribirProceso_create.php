
<?php include '../template/aheader.php' ?>
<?php
echo "En construcción";
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../model/conexion.php';

echo "aqui estamos";
session_start();
#$_SESSION['usuario'] = $alumno;
print_r($_POST);

$boleta = $_SESSION['usuario'];

$sentencia = $bd->prepare("INSERT INTO grupo (id_grupo, num_empleado, boleta, id_curso)
VALUES ('ID_GRUPO_GENERADO_AUTOMATICAMENTE', NULL, 'BOLETA_DEL_ALUMNO', 'ID_CURSO_DEL_CURSO_A_INSCRIBIR');");
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
    
    if ($sentencia->e;xecute()) {
        header('Location: ../index.php?mensaje=registrado');
    } else {
        header('Location: ../index.php?mensaje=error');
    }
*/
?>
<?php include '../template/footer.php' ?>
