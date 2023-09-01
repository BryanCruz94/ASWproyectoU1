<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $platos = $_POST["platos"];
    $cantidades = $_POST["cantidades"];

    $pedido = "Nombre: $nombre\nTeléfono: $telefono\n\nPlatos:\n";
    $total = 0;

    print_r($platos);
    print_r($cantidades);

    for ($i = 0; $i < count($platos); $i++) {
        $plato = $platos[$i];
        $cantidad = $cantidades[$i];
        $precioUnitario = obtenerPrecioPlato($plato);
        $subtotal = $cantidad * $precioUnitario;
        
        $pedido .= "$plato - Cantidad: $cantidad - Precio unitario: $$precioUnitario - Subtotal: $$subtotal\n";
        
        $total += $subtotal;
    }

    $pedido .= "\nTotal: $$total\n\n----------------------------------\n";

    $archivo = "pedidos.txt";
    file_put_contents($archivo, $pedido, FILE_APPEND);

    // Mostrar mensaje de alerta y redirigir a tienda1.php
    echo "<script>alert('Pedido enviado correctamente');</script>";
    echo "<script>window.location.href = 'tienda1.php';</script>";
    exit();

    
} else {
    echo "No se recibieron datos para guardar el pedido.";
}

function obtenerPrecioPlato($plato) {
    $precios = [
        "Encocado" => 5,
        "Encebollado" => 5,
        "Parrillada" => 12,
        "Tigrillo" => 4,
        "Viche" => 3.5,
        "Cangrejada" => 5.5,
    ];
    return isset($precios[$plato]) ? $precios[$plato] : 0;
}
?>
