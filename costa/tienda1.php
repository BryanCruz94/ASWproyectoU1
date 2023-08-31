<!DOCTYPE html>
<html lang="es">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <title>LA HUECA MANABITA</title>
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

        
        .plato-img {
            max-width: 100px;
            display: block;
            margin: 0 auto;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <header class="text-center ">
            <h1>LA HUECA MANABITA</h1>
        </header>
    </div>
    <br>
    <div class="container">
        <form id="order-form" action="confirmacion.php" method="post">
            <div class="row">
               
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="tel" name="telefono" class="form-control" required>
                </div>
            </div>
            <br>
            <h2>Platos:</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check mb-2" class="col-md-6">
                        <input type="checkbox" name="platos[]" value="Encocado" class="form-check-input">
                        <label class="form-check-label">Encocado - $5</label>
                        <input type="number" name="cantidades[0]" min="0" value="0" class="form-control">
                        <img src="imgCosta/Encocado.jpg" alt="Encocado" class="plato-img">                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" name="platos[]" value="Encebollado" class="form-check-input">
                        <label class="form-check-label">Encebollado - $3</label>
                        <input type="number" name="cantidades[1]" min="0" value="0" class="form-control">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="platos[]" value="Parrillada" class="form-check-input">
                        <label class="form-check-label">Parrillada - $12</label>
                        <input type="number" name="cantidades[2]" min="0" value="0" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check mb-2">
                        <input type="checkbox" name="platos[]" value="Tigrillo" class="form-check-input">
                        <label class="form-check-label">Tigrillo - $4</label>
                        <input type="number" name="cantidades[3]" min="0" value="0" class="form-control">
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" name="platos[]" value="Viche" class="form-check-input">
                        <label class="form-check-label">Viche - $3.5</label>
                        <input type="number" name="cantidades[4]" min="0" value="0" class="form-control">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="platos[]" value="Cangrejada" class="form-check-input">
                        <label class="form-check-label">Cangrejada - $5.5</label>
                        <input type="number" name="cantidades[5]" min="0" value="0" class="form-control">
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center mt-3" style="">
                <button type="submit" class="btn btn-primary">Calcular y Enviar</button>
            </div>
            <br>
        </form>
    </div>
    <div class="footer">
        <footer class="text-center">
            <p>© 2023 La Hueca Manabita. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>

</html>