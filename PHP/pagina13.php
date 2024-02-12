<?php
// Crear un vector asociativo con claves de acceso de usuarios
$clavesUsuarios = array(
    "usuario1" => "clave123",
    "usuario2" => "contrasena456",
    "usuario3" => "accesoSecreto789",
    "usuario4" => "miClaveSecreta",
    "usuario5" => "contraseniaFuerte"
);

// Acceder e imprimir una componente del vector
$usuarioSeleccionado = "usuario3";
if (isset($clavesUsuarios[$usuarioSeleccionado])) {
    echo "La clave de acceso para '$usuarioSeleccionado' es: " . $clavesUsuarios[$usuarioSeleccionado];
} else {
    echo "El usuario '$usuarioSeleccionado' no existe en el sistema.";
}
?>
