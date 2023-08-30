<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formas de Pago</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSbN9W"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d052b82219.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <style>
        #qr {
            height: 200px;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-5">Formas de Pago</h1>

        <div class="row">
            <!-- Tarjeta Visa -->
            <div class="col-md-4 mb-5">
                <div class="card text-center animate__animated animate__fadeInDown">
                    <div class="card-header">
                        <h5>Visa</h5>
                    </div>
                    <div class="card-body">
                        <i class="fab fa-cc-visa fa-5x mb-3"></i>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Número de Tarjeta">
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="MM/YY">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="CVC">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Mastercard -->
            <div class="col-md-4 mb-5">
                <div class="card text-center animate__animated animate__fadeInDown animate__delay-1s">
                    <div class="card-header">
                        <h5>Mastercard</h5>
                    </div>
                    <div class="card-body">
                        <i class="fab fa-cc-mastercard fa-5x mb-3"></i>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Número de Tarjeta">
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="MM/YY">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="CVC">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- PayPal -->
            <div class="col-md-4 mb-5">
                <div class="card text-center animate__animated animate__fadeInDown animate__delay-2s">
                    <div class="card-header">
                        <h5>PayPal</h5>
                    </div>
                    <div class="card-body">
                        <i class="fab fa-paypal fa-5x mb-3"></i>
                        <a href="https://www.paypal.com/us/home"><button type="button" class=" btn-primary">Iniciar
                                Sesión en PayPal</button></a>
                    </div>
                </div>
            </div>

            <!-- Transferencia Móvil -->
            <div class="col-md-4 mb-5">
                <div class="card text-center animate__animated animate__fadeInDown animate__delay-3s">
                    <div class="card-header">
                        <h5>Transferencia Móvil</h5>
                    </div>
                    <div class="card-body">
                        <i class="fas fa-mobile-alt fa-5x mb-3"></i>
                        <p>Escanea el código QR para realizar la transferencia móvil.</p>
                        <img id="qr" src="assets/imgGalapagos/qr.png" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <i class="fas fa-arrow-left mb-3"></i>
            <a href="pago2.php"><button type="button" class=" btn-primary">Regresar</button></a>
        </div>

    </div>


    <script>
        new WOW().init();
        // Captura el evento de clic en el botón "Pagar"
        $('.btn').click(function () {
            // Obtiene la cantidad de productos a pagar
            // var numProductos = $('input[name="cantidad-productos"]').val();
            // Muestra la alerta con la cantidad de productos pagados
            // alert('Usted ha pagado ' + numProductos + ' productos.');
            alert('Usted ya ha pagado ');
        });
    </script>


</body>

</html>