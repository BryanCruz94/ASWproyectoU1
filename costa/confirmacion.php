<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <title>Confirmación de Pedido</title>

    <style>
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <header class="text-center ">
            <h1>LA HUECA MANABITA</h1>
        </header>
    </div>
    <div class="container">
        <h3 class="text-center">Confirmación de Pedido</h3>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"];
            $telefono = $_POST["telefono"];
            $platos = $_POST["platos"];
            $cantidades = $_POST["cantidades"];



            echo "<h5>Nombre del Cliente: $nombre</h5>";
            echo "<h6>Teléfono de Contacto: $telefono</h6>";
            echo "<p>Platos seleccionados:</p>";
            echo "<ul>";
            $total = 0;
            for ($i = 0; $i <= 5; $i++) {
                if (isset($platos[$i])) {
                    echo "<li>$platos[$i] - Cantidad: $cantidades[$i]</li>";
                    $total += $cantidades[$i] * obtenerPrecioPlato($platos[$i]);
                }
            }
            echo "</ul>";
            echo "<p>Total: $" . number_format($total, 2) . "</p>";
            echo "<form action='guardar_pedido.php' method='post'>";
            echo "<input type='hidden' name='nombre' value='$nombre'>";
            echo "<input type='hidden' name='telefono' value='$telefono'>";
            for ($i = 0; $i <= 5; $i++) {
                if (isset($platos[$i])) {
                    echo "<input type='hidden' name='platos[]' value='$platos[$i]'>";
                    echo "<input type='hidden' name='cantidades[]' value='$cantidades[$i]'>";
                }
            }
            echo "<div class='row justify-content-center'><div class=col-3>";
            echo "<button type='submit' class='btn btn-primary'>GUARDAR PEDIDO</button>";
            echo "<a href='tienda1.php' class='btn btn-danger'>REGRESAR</a>";
            echo "</div></div>";
            echo "</form>";
        } else {
            echo "<p>No se recibieron datos del formulario.</p>";
        }

        function obtenerPrecioPlato($plato)
        {
            $precios = [
                "Encocado" => 5,
                "Encebollado" => 3,
                "Parrillada" => 12,
                "Tigrillo" => 4,
                "Viche" => 3.5,
                "Cangrejada" => 5.5,
            ];
            return isset($precios[$plato]) ? $precios[$plato] : 0;
        }
        ?>
    </div>
    <br><br>
    <div class="footer">
        <footer class="text-center">
            <p>© 2023 La Hueca Manabita. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>

</html>