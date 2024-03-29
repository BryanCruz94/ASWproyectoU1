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
            padding: 10px 0;
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
        <h3 class="text-center">PEDIDOS REALIZADOS</h3>
        <?php
    

            $contenidoArchivo = file_get_contents("pedidos.txt");
            echo "<pre>$contenidoArchivo</pre>";
    
        ?>

        <form action="" method="get">
            <button type="submit" class="btn btn-primary">Recargar</button>
        </form>
    </div>
    <br>
    <div class="footer">
        <footer class="text-center">
            <p>© 2023 La Hueca Manabita. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>

</html>