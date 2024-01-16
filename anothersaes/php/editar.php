<?php include '../template/header.php' ?>
<?php
    if(!isset($_GET['codigo'])){
        header('Location: ../index.php?mensaje=error');
        exit();
    }

    include_once "../model/conexion.php";
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from persona where codigo = ?;");
    $sentencia->execute([$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form action="editar_proceso.php" class="p-2" method="POST" >
                    <div class="mb-2">
                        <label for="form-label">Boleta: </label>
                        <input type="text" class="form-control" name="l_boleta" value="<?php echo $persona->iden_institucional; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" name="l_aPaterno" value="<?php echo $persona->aPaterno; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" name="l_aMaterno" value="<?php echo $persona->aMaterno; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="l_nombre" value="<?php echo $persona->nombre; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="form_label">Funcion: </label>
                        <select name="l_funcion" id="l_funcion" value="<?php echo $persona->funcion; ?>">
                            <option value="alumno">Alumno</option>
                            <option value="docente">Docente</option>
                            <option value="coordinador">Coordinador</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->codigo; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>