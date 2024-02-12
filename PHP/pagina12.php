<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos de Pizzas</title>
</head>
<body>
    <h2>Lista de Pedidos de Pizzas</h2>

    <?php
    // Leer el contenido del archivo pedidos.txt
    $archivo_pedidos = "pedidos.txt";
    if (file_exists($archivo_pedidos)) {
        $contenido = file_get_contents($archivo_pedidos);

        // Mostrar el contenido en el navegador
        echo "<pre>$contenido</pre>";
    } else {
        echo "<p>No hay pedidos registrados aún.</p>";
    }
    ?>
</body>
</html>
