<!DOCTYPE html>
<html>

<head>
    <title>Modificar Curso</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    $codigoCurso = $_POST['codigo_curso'];
    $nuevoNombreCurso = $_POST['nuevo_nombre_curso'];

    // Verificar si el código de curso existe
    $consultaCurso = mysqli_query($conexion, "SELECT * FROM cursos WHERE codigo = '$codigoCurso'")
        or die("Problemas en el select: " . mysqli_error($conexion));

    if (mysqli_num_rows($consultaCurso) > 0) {
        // Modificar el nombre del curso
        $modificarCurso = mysqli_query($conexion, "UPDATE cursos SET nombrecurso = '$nuevoNombreCurso' 
            WHERE codigo = '$codigoCurso'") or die("Problemas en el update: " . mysqli_error($conexion));

        echo "Nombre del curso con código '$codigoCurso' modificado a '$nuevoNombreCurso' correctamente.";
    } else {
        echo "No existe un curso con el código '$codigoCurso'.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>