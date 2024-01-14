<?php include '../template/dheader.php' ?>

<div class="container mt-5">
    <div class="row ">
        <div class="col-12 justify-content-center">
            <h3 class="text-center">Calificar asignaciones</h3>
            <div class="card">
        <div class="card-header text-center">
            <h5>Asignación #</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Calificación</th>
                        <th scope="col" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>miowx</td>
                        <td>miowx</td>
                        <td>miowx</td>
                        <td>miowx</td>
                        <td><a class="text-dark" href="php/editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-eye"> </i></a></td>
                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-dark" href="php/eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</div>
<?php include '../template/footer.php' ?>