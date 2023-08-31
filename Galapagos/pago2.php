<div class="container">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d052b82219.js" crossorigin="anonymous"></script>
    <style>
      .card-header {
          background-color: #007bff;
          color: #fff;
          text-align: center;
      }

      .card-header h4,
      .card-header h5 {
          margin-bottom: 0;
      }

      .card-body {
          text-align: center;
      }

      .add-to-cart {
          margin-top: 10px;
      }

      .card:hover {
          box-shadow: 0 0 11px rgba(33, 33, 33, .2);
          transition: all 0.3s ease-in-out;
      }

      .added-to-cart {
          background-color: #28a745;
          border-color: #28a745;
          color: #fff;
      }

      .cart-icon {
          font-size: 24px;
          cursor: pointer;
      }

      .fixed-cart {
          position: fixed;
          top: 70px; /* ajusta este valor según tu preferencia */
          left: 680px; /* ajusta este valor según tu preferencia */
      }
  </style>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><i class="fas fa-calendar-alt"></i> 8 Días / 7 Noches</h4>
                            <h5 class="my-0 font-weight-normal"><i class="fas fa-plane-departure"></i> Paquetes a Panamá
                            </h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Desde Dom 17 Dic</h5>
                            <h5 class="card-title">Hasta Dom 24 Dic</h5>
                            <p class="card-text">Vuelo directo</p>
                            <p class="card-text">UIO - PTY</p>
                            <hr>
                            <p class="card-text"><strong>Bijao Beach Resort by Evenia</strong></p>
                            <p class="card-text"><strong>7.7</strong></p>
                            <p class="card-text"><strong>All inclusive</strong></p>
                            <hr>
                            <p class="card-text"><strong>Precio final por persona</strong></p>
                            <p class="card-text"><strong>USD 1.366</strong></p>
                            <p class="card-text">Incluye impuestos, tasas y cargos</p>
                            <button type="button" class="btn btn-lg btn-block btn-primary add-to-cart" data-price="1366"><i
                                    class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Repite el bloque de código anterior 5 veces más para mostrar las otras 5 tarjetas -->
                <div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><i class="fas fa-calendar-alt"></i> 7 Días / 6 Noches</h4>
            <h5 class="my-0 font-weight-normal"><i class="fas fa-plane-departure"></i> Paquetes a Cancún</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Desde Lun 10 Ene</h5>
            <h5 class="card-title">Hasta Dom 16 Ene</h5>
            <p class="card-text">Vuelo directo</p>
            <p class="card-text">UIO - CUN</p>
            <hr>
            <p class="card-text"><strong>Resort Paradise</strong></p>
            <p class="card-text"><strong>8.5</strong></p>
            <p class="card-text"><strong>Todo incluido</strong></p>
            <hr>
            <p class="card-text"><strong>Precio final por persona</strong></p>
            <p class="card-text"><strong>USD 1.899</strong></p>
            <p class="card-text">Impuestos y cargos incluidos</p>
            <button type="button" class="btn btn-lg btn-block btn-primary add-to-cart" data-price="1899"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><i class="fas fa-calendar-alt"></i> 6 Días / 5 Noches</h4>
            <h5 class="my-0 font-weight-normal"><i class="fas fa-plane-departure"></i> Paquetes a París</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Desde Jue 10 Abr</h5>
            <h5 class="card-title">Hasta Mar 15 Abr</h5>
            <p class="card-text">Vuelo directo</p>
            <p class="card-text">UIO - CDG</p>
            <hr>
            <p class="card-text"><strong>Hotel Eiffel View</strong></p>
            <p class="card-text"><strong>9.6</strong></p>
            <p class="card-text"><strong>Desayuno incluido</strong></p>
            <hr>
            <p class="card-text"><strong>Precio final por persona</strong></p>
            <p class="card-text"><strong>USD 2.150</strong></p>
            <p class="card-text">Impuestos y cargos incluidos</p>
            <button type="button" class="btn btn-lg btn-block btn-primary add-to-cart" data-price="2150"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
    </div>
</div>


<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><i class="fas fa-calendar-alt"></i> 12 Días / 11 Noches</h4>
            <h5 class="my-0 font-weight-normal"><i class="fas fa-plane-departure"></i> Paquetes a Auckland</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Desde Dom 20 Mayo</h5>
            <h5 class="card-title">Hasta Jue 31 Mayo</h5>
            <p class="card-text">Vuelo directo</p>
            <p class="card-text">UIO - AKL</p>
            <hr>
            <p class="card-text"><strong>Lodge Kiwi Adventures</strong></p>
            <p class="card-text"><strong>9.8</strong></p>
            <p class="card-text"><strong>Desayuno incluido</strong></p>
            <hr>
            <p class="card-text"><strong>Precio final por persona</strong></p>
            <p class="card-text"><strong>USD 3.499</strong></p>
            <p class="card-text">Impuestos y tasas incluidos</p>
            <button type="button" class="btn btn-lg btn-block btn-primary add-to-cart" data-price="3499"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
    </div>
</div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><i class="fas fa-calendar-alt"></i> 8 Días / 7 Noches</h4>
                            <h5 class="my-0 font-weight-normal"><i class="fas fa-plane-departure"></i> Paquetes a Panamá
                            </h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Desde Dom 17 Dic</h5>
                            <h5 class="card-title">Hasta Dom 24 Dic</h5>
                            <p class="card-text">Vuelo directo</p>
                            <p class="card-text">UIO - PTY</p>
                            <hr>
                            <p class="card-text"><strong>Bijao Beach Resort by Evenia</strong></p>
                            <p class="card-text"><strong>7.7</strong></p>
                            <p class="card-text"><strong>All inclusive</strong></p>
                            <hr>
                            <p class="card-text"><strong>Precio final por persona</strong></p>
                            <p class="card-text"><strong>USD 1.366</strong></p>
                            <p class="card-text">Incluye impuestos, tasas y cargos</p>
                            <button type="button" class="btn btn-lg btn-block btn-primary add-to-cart" data-price="1366"><i
                                    class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </div>
                </div>             
                <div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><i class="fas fa-calendar-alt"></i> 9 Días / 8 Noches</h4>
            <h5 class="my-0 font-weight-normal"><i class="fas fa-plane-departure"></i> Paquetes a Marrakech</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Desde Mié 15 Jun</h5>
            <h5 class="card-title">Hasta Jue 23 Jun</h5>
            <p class="card-text">Vuelo directo</p>
            <p class="card-text">UIO - RAK</p>
            <hr>
            <p class="card-text"><strong>Riad Sahara Oasis</strong></p>
            <p class="card-text"><strong>8.7</strong></p>
            <p class="card-text"><strong>Desayuno incluido</strong></p>
            <hr>
            <p class="card-text"><strong>Precio final por persona</strong></p>
            <p class="card-text"><strong>USD 1.899</strong></p>
            <p class="card-text">Impuestos y tasas incluidos</p>
            <button type="button" class="btn btn-lg btn-block btn-primary add-to-cart" data-price="1899"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
        </div>
    </div>
</div>

    
                <!-- Aquí agrega más tarjetas de paquetes de viaje -->
    
                <!-- Carrito -->
                <div class="col-md-12 text-center fixed-cart">
                    <span class="cart-icon"><i class="fas fa-shopping-cart"></i> Carrito (0)</span>
                    <br>
                    <!-- <a href="pago.php" class="btn btn-primary"><i class="fas fa-credit-card"></i> <span style="margin-left: 10px;">PAGAR</span></a> -->
                    <a href="pago.php" class="btn btn-primary" id="pagar-button"><i class="fas fa-credit-card"></i> <span style="margin-left: 10px;">PAGAR</span></a>

                </div>
            </div>
        </div>
    
        <!-- Scripts -->
        <script>
            $(document).ready(function () {
                $('.add-to-cart').click(function () {
                    var price = $(this).data('price');
                    var currentTotal = $('#cart-total').text();
                    var newTotal = parseFloat(currentTotal) + parseFloat(price);
                    $('#cart-total').text(newTotal.toFixed(2));
                    $(this).addClass('added-to-cart');
                    $(this).prop('disabled', true);
                    $(this).html('<i class="fas fa-check"></i> Agregado al carrito');

                    
                });
    
                // Agregar clase "selected" a la tarjeta al hacer clic
                $('.card').click(function () {
                    $('.card').removeClass('selected');
                    $(this).addClass('selected');
                });
    
                // Agregar clase "btn-success" al botón al hacer clic
                $('.add-to-cart').click(function () {
                    $(this).toggleClass('btn-primary btn-success');
                });
            });
            let cartItems = [];
                    
                            $('.add-to-cart').click(function () {
                    const price = $(this).data('price');
                    cartItems.push(price);

                    updateCart();

                    $(this).addClass('added-to-cart');
                    $(this).prop('disabled', true);

                   
                });
    
            function updateCart() {
                const cartIcon = $('.cart-icon');
                const itemCount = cartItems.length;
    
                cartIcon.html(`<i class="fas fa-shopping-cart"></i> Carrito (${itemCount})`);
            }

        </script>

