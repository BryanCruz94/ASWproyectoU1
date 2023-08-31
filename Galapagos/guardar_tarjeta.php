<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarjeta = $_POST["tarjeta"];
    $nombre = $_POST["nombre"];

    $file = fopen("tarjetas_guardadas.txt", "a");
    fwrite($file, "Nombre: " . $nombre . "\nTarjeta: " . $tarjeta . "\n\n");
    fclose($file);

    echo "Datos de tarjeta guardados exitosamente.";
}
?>
