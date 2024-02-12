<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos del Alumno</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigoAlumno = $_POST['codigo'];

        $consultaAlumno = mysqli_query($conexion, "SELECT a.nombre, a.mail, c.nombrecurso 
            FROM alumnos a 
            INNER JOIN cursos c ON a.codigocurso = c.codigo 
            WHERE a.codigo = '$codigoAlumno'")
            or die("Problemas en el select: " . mysqli_error($conexion));

        if ($alumno = mysqli_fetch_array($consultaAlumno)) {
            echo "<h2>Datos del Alumno:</h2>";
            echo "Nombre: " . $alumno['nombre'] . "<br><br>";
            echo "Mail: " . $alumno['mail'] . "<br><br>";
            echo "Curso: " . $alumno['nombrecurso'] . "<br><br>";
        } else {
            echo "No existe un alumno con el código '$codigoAlumno'.";
        }
    }

    mysqli_close($conexion);
    ?>
</body>

</html>
