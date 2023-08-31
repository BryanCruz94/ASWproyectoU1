<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
$paquete = $_POST["valor"];
//echo  "El valor del paquete elegido es $" .$paquete;

?>
<div class="alert alert-success" role="alert">
 <!-- ... Alerta con el valor del paquete..!! ... -->
Recuerde estimad@ usuario su paquete turístico tiene un costo de: $ <?php echo  $paquete; ?>
</div>
    <div class="container mt-5 border rounded p-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4" style="color: #3b3939; font-family: 'Arial Black', sans-serif;">Formulario de Reserva</h2>
                <form action="procesar_reserva.php" method="post">
                    <div class="form-group">
                        <label for="nombre" style="color: #3e3e3b; font-family: 'Verdana', sans-serif;">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" style="color: #504f4e; font-family: 'Verdana', sans-serif;">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono" style="color: #5d5d5c; font-family: 'Verdana', sans-serif;">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_viaje" style="color: #525251; font-family: 'Verdana', sans-serif;">Fecha de Viaje:</label>
                        <input type="date" id="fecha_viaje" name="fecha_viaje" class="form-control" required>
                    </div>
                    <input type="hidden" name="precioValor" value=<?php echo $paquete; ?>>
                    <div class="form-group">
                        <label for="cantidad_personas" style="color: #545452; font-family: 'Verdana', sans-serif;">Cantidad de Personas:</label>
                        <input type="number" id="cantidad_personas" name="cantidad_personas" min="1" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar Reserva</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
