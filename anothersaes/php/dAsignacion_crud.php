<?php include '../template/dheader.php' ?>

<div class="container mt-5">
    <div class="row ">
        <div class="col-12 ">
        </div class="container ">
        <div class="col-10 d-flex justify-content-center">
            <h3>Asignaciones</h3>
        </div>
        <div class="col-2 d-flex justify-content-end" >
            <a href="" type="button" class="btn btn-danger ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path>
                </svg>
                Nueva
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center">
            <h5>Asignación #</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Grupo</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha de cierre</th>
                        <th scope="col">Hora de cierre</th>
                        <th scope="col">Tipo de asignación</th>
                        <th scope="col">URL si aplica</th>
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
                        <td>miowx</td>
                        <td>miowx</td>
                        <td><a class="text-success" href="php/editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-warning" href="php/eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include '../template/footer.php' ?>