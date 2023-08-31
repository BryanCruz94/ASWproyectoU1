<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <title>LA HUECA MANABITA</title>
</head>

<body>
    <header class="text-center py-4">
        <h1>LA HUECA MANABITA</h1>
    </header>
    <div class="container">
        <form id="order-form" action="confirmacion.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" class="form-control" required>
            </div>
            <h2>Platos:</h2>

            <div class="form-check">
                <input type="checkbox" name="platos[]" value="Encocado">
                <label class="form-check-label">Encocado - $5</label>
                <input type="number" name="cantidades[0]" min="0" value="0">
            </div>
            <div class="form-check">
                <input type="checkbox" name="platos[]" value="Encebollado">
                <label class="form-check-label">Encebollado - $5</label>
                <input type="number" name="cantidades[1]" min="0" value="0">
            </div>
            <div class="form-check">
                <input type="checkbox" name="platos[]" value="Parrillada">
                <label class="form-check-label">Parrillada - $12</label>
                <input type="number" name="cantidades[2]" min="0" value="0">
            </div>
            <div class="form-check">
                <input type="checkbox" name="platos[]" value="Tigrillo">
                <label class="form-check-label">Tigrillo - $4</label>
                <input type="number" name="cantidades[3]" min="0" value="0">
            </div>
            <div class="form-check">
                <input type="checkbox" name="platos[]" value="Viche">
                <label class="form-check-label">Viche - $3.5</label>
                <input type="number" name="cantidades[4]" min="0" value="0">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Calcular y Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>