<!DOCTYPE html>
<html>
<head>
    <title>Confirmar datos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        h1 {
            color: #FF5733; 
            text-align: center;
        }
        button {
            text-align: center;
            background-color: darkgray;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none; 
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer; 
        }

        .botonFinal {
            text-align: center;
       
        }
    </style>
</head>

<body>
    <h1>Confirmación de Datos...!!</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha de Viaje</th>
            <th>Paquete</th>
            <th>Cantidad de Personas</th>
            <th>Precio por Persona</th>
            <th>Precio Total</th>
        </tr>
        <?php
        // Ruta del archivo de registro
        $archivo = "reservas.txt";

        // Leer el contenido del archivo
        $contenido = file_get_contents($archivo);

        // Convertir el contenido en un array de líneas
        $lineas = explode(PHP_EOL, $contenido);

        // Obtener la última línea
        if (count($lineas) >=2) {
            $ultimaLinea = $lineas[count($lineas) - 2];
            $datos = explode(" | ", $ultimaLinea);

            echo "<tr>";
            foreach ($datos as $dato) {
                echo "<td>$dato</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
<br>
<br>

<div class="botonFinal" >

<a href="paginafinal.php"><button>Aceptar</button></a> 
<a href="formulario_reserva.php"><button>Cancelar</button></a>
    </div>
</body>
</html>