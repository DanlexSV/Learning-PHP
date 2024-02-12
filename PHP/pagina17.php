<!DOCTYPE html>
<html>

<head>
    <title>Consulta Datos</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1")
    or die("Problemas con la conexión");

    $nombre = $_REQUEST['name'];

    $registro = mysqli_query($conexion, "SELECT * FROM alumnos WHERE nombre='{$_REQUEST['name']}'") 
    or die("Problemas en el select: " . mysqli_error($conexion));

    if (mysqli_num_rows($registro) > 0) {
        echo "<h3>Datos de los alumnos con el nombre '$nombre':</h3><hr>";

        while ($reg = mysqli_fetch_array($registro)) {
            echo "Nombre: " . $reg['nombre'] . "<br>";
            echo "Curso: ";

            switch ($reg['codigocurso']) {
                case 1:
                    echo "PHP";
                    break;
                case 2:
                    echo "ASP";
                    break;
                case 3:
                    echo "JSP";
                    break;
                default:
                    echo "Curso no encontrado.";
                    break;
            }

            echo "<br>Correo: " . $reg['mail'] . "<hr>";
        }
    } else {
        echo "No existe un alumno con ese nombre.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>
