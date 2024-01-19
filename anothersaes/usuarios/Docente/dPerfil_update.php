<?php include '../template/dheader.php' ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-lines-fill  mx-auto d-block " viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            <br>
            <h3 class="text-center">Información personal</h3>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="mb-1">
                            <label for="form-label" class="col-lg-5" >Num de empleado </label>
                            <input type="text" class="form-control col-lg-5" placeholder="Boleta" name="l_boleta" autofocus required>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Apellido Paterno: </label>
                            <input type="text" class="form-control" name="l_aPaterno" placeholder="Apellido Paterno" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Apellido Materno: </label>
                            <input type="text" class="form-control" name="l_aMaterno" placeholder="Apellido Materno" required autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="l_nombre" placeholder="Nombre" required autofocus>
                        </div>
                        <div class="mb-1">
                                    <label class="form-label">Género: </label>
                                    <select class="form-select" name="l_genero" id="l_funcion">
                                        <option selected>Genero</option>    
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="O">Otro</option>
                                    </select>
                                </div>
                        <div class="mb-1">
                            <label for="form-label">Fecha de Nacimiento: </label>
                            <input type="date" class="form-control" name="l_nombre" placeholder="Nombre" required autofocus>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-1">
                            <label for="form-label">Cédula Profesional: </label>
                            <input type="text" class="form-control" name="l_nombre" placeholder="Nombre" required autofocus>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg">Especialidad: </label>
                            <input type="text" class="form-control" name="l_fechaNa" autofocus>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg">Grado académico: </label>
                            <input type="text" class="form-control" name="l_pass" placeholder="Contraseña" required autofocus>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg">Estatus: </label>
                            <input type="text" class="form-control" name="l_fechaNa" autofocus>
                        </div>
                        <div class="mb-2">
                            <label for="form-reg">Contraseña: </label>
                            <input type="password" class="form-control" name="l_pass" placeholder="Contraseña" required autofocus>
                       </div>
                       <div class="d-grid">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../template/footer.php' ?>


