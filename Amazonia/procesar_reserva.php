<?php
$precio_por_persona = 165;
$precio_por_personaB = 150;
$precio_por_personaC = 180;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $fecha_viaje = $_POST["fecha_viaje"];
    $paquete = $_POST["precioValor"];
    $cantidad_personas = $_POST["cantidad_personas"];


    // Calcular el precio total
    $precio_total = $cantidad_personas * $paquete;

   // $precio_totalB = $cantidad_personas * $precio_por_personaB;

    
    // Formato de línea para guardar en el archivo
    $linea = "Nombre: $nombre | Email: $email | Teléfono: $telefono | Fecha de Viaje: $fecha_viaje | Paquete: $paquete | Cantidad de Personas: $cantidad_personas | Precio por Persona: $paquete | Precio Total: $precio_total" . PHP_EOL;

    // Ruta del archivo de registro
    $archivo = "reservas.txt";

    // Guardar la información en el archivo
    file_put_contents($archivo, $linea, FILE_APPEND);

    // Redirigir a la página de éxito o a donde desees
    header("Location: mostrar_reservas.php");
    exit();
}



?>
