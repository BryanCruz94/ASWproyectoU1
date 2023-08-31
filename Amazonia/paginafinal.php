<?php
include 'procesar_reserva.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> 
    <title>Confirmación de Reserva</title>
    <style>
        h2 {
            font-family: "Arial", sans-serif;
            color: rgb(99, 122, 111);
            text-align: center;
        }

        /* Estilo para la imagen */
        .centered-image {
            display: block;
            margin: 0 auto;
            border: 5px solid rgb(228, 228, 230);
            border-radius: 10px;
        }
        .bold-text {
            font-weight: bold;
        }
        .center {
            text-align: center;
        }

        .ref{
            margin-left: 720px;
            padding: 10px;

        }
    </style>
</head>
<body>

    <h2 class="text-center"> Has adquirido <span class="bold-text"></span>el mejor paquete turístico, para continuar revisa tu correo electrónico..!!</h2>
    <img src="img/blanco.gif.gif" alt="" class="centered-image" height="400px">


    <br>
    <h3 class="center">GRACIAS POR CONFIAR EN NOSOTROS!!</h3>
    <br>

    <a href="../amazon.php"><button class="ref btn btn-light">Regresar</button></a>
</body>
</html>