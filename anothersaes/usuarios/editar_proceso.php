<?php
print_r($_POST);
if(!isset($_POST['codigo'])){
    header('Location: ../index.php?mensaje=error');
}

include '../model/conexion.php';

echo "ok1 ";
$codigo = $_POST['codigo'];
$boleta = $_POST['l_boleta'];
$aPaterno = $_POST['l_aPaterno'];
$aMaterno = $_POST['l_aMaterno'];
$nombre = $_POST['l_nombre'];
$funcion = $_POST['l_funcion'];
echo "ok2 ";
$sentencia = $bd->prepare("UPDATE persona SET iden_institucional = '$boleta', aPaterno='$aPaterno', aMaterno='$aMaterno', nombre='$nombre', funcion='$funcion' where codigo = '$codigo';");
$resultado = $sentencia->execute();
echo "ok4 ";

if($resultado === TRUE){
    header('Location: ../index.php?mensaje=editado');
}else{
    header('Location: ../index.php?mensaje=error');
}
?>