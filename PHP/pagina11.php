<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $pedidos = "";

    if (isset($_POST["jamon_queso"])) {
        $cantidadJamonQueso = (int)$_POST["cantidad_jamon_queso"];
        $pedidos .= "Jamon y Queso - Cantidad: $cantidadJamonQueso\n";
    }

    if (isset($_POST["napolitana"])) {
        $cantidadNapolitana = (int)$_POST["cantidad_napolitana"];
        $pedidos .= "Napolitana - Cantidad: $cantidadNapolitana\n";
    }

    if (isset($_POST["muzzarella"])) {
        $cantidadMuzzarella = (int)$_POST["cantidad_muzzarella"];
        $pedidos .= "Muzzarella - Cantidad: $cantidadMuzzarella\n";
    }

    // Guardar el pedido en el archivo pedidos.txt
    $archivo = fopen("pedidos.txt", "a") or die("Problemas en la creacion");
    fwrite($archivo, "Nombre: $nombre\n");
    fwrite($archivo, "Direccion: $direccion\n");
    fwrite($archivo, $pedidos);
    fwrite($archivo, "----------------------------------------\n");
    fclose($archivo);

    echo "Pedido registrado correctamente.";
}
?>