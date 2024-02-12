<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    // Verificar si las claves ingresadas son distintas
    if (!sonClavesIguales($password1, $password2)) {
        echo "Las claves ingresadas no coinciden. Por favor, inténtalo de nuevo.";
    } else {
        // Procesar los datos como sea necesario (aquí puedes guardar en una base de datos, por ejemplo)
        echo "Registro exitoso para el usuario '$username'.";
    }
}

// Función para verificar si las claves ingresadas son distintas
function sonClavesIguales($clave1, $clave2) {
    return $clave1 === $clave2;
}
?>
