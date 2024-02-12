<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cursos</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    $consultaCursos = mysqli_query($conexion, "SELECT nombrecurso FROM cursos")
        or die("Problemas en el select: " . mysqli_error($conexion));

    echo "<h2>Listado de Cursos:</h2>";

    while ($curso = mysqli_fetch_array($consultaCursos)) {
        echo $curso['nombrecurso'] . "<br>";
    }

    $consultaCantidadCursos = mysqli_query($conexion, "SELECT COUNT(*) as total_cursos FROM cursos")
        or die("Problemas en el select: " . mysqli_error($conexion));

    $totalCursos = mysqli_fetch_array($consultaCantidadCursos)['total_cursos'];

    echo "<br>";
    echo "Cantidad total de cursos: " . $totalCursos;

    mysqli_close($conexion);
    ?>
</body>

</html>
