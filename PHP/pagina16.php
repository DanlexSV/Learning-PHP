<html>

<head>
    <title>Consulta Datos</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1")
    or die("Problemas con la conexión");

    $consultaCursos = mysqli_query($conexion, "SELECT codigo, nombrecurso FROM cursos")
    or die("Problemas en el select: " . mysqli_error($conexion));

    echo "<h2>Datos de los cursos:</h2>";

    while ($curso = mysqli_fetch_array($consultaCursos)) {
        echo "Código del curso: " . $curso['codigo'] . "<br>";
        echo "Nombre del curso: " . $curso['nombrecurso'] . "<br><br>";
    }

    mysqli_close($conexion);
    ?>
</body>

</html>
