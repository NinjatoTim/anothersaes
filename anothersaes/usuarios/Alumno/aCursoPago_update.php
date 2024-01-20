<?php include '../../template/aheader.php' ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <h3 class="text-center">Pago de cursos</h3>

            <p class="text-center">
                <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Pago con tarjeta
                </a>
                <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Pago con transferencia
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <!--Pago con tarjeta-->
                <div class="card card-body">
                    <div class="col-md-10 order-md-1">
                        <h4 class="mb-3">Dirección de Envio</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nombre(s) </label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Apellido</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email">Correo electrónico <span class="text-muted">(Opcional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="tu@correo.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Dirección</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 calle principal" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address2">Dirección 2 <span class="text-muted">(Opcional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="apartamento o suite">
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">País</label>
                                    <select class="custom-select d-block w-100 form-select" id="country" required="">
                                        <option value="">Elegir...</option>
                                        <option>Estados Unidos</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Estado</label>
                                    <select class="custom-select d-block w-100 form-select" id="state" required="">
                                        <option value="">Elegir...</option>
                                        <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Cremallera</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">La dirección de envío es la misma que mi dirección de facturación</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">Guarda esta información para la próxima vez</label>
                            </div>
                            <hr class="mb-4">
                            <h4 class="mb-3">Pago</h4>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                    <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="debit">Tarjeta de débito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Nombre en la tarjeta</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                    <small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Número de Tarjeta de Crédito</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Vencimiento</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-cvv">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-warning btn-lg btn-block" type="submit">Continuar a la comprobación</button>
                        </form>
                    </div>


                </div>
            </div>
            <!--Pago con transferencia-->
            <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                        <div><label class="form-label">Subir comprobante en formato pdf</label></div>
                        <div><input type="file" class="form-control" accept=".pdf" name="comprobante" id="comprobante"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include '../../template/footer.php' ?>