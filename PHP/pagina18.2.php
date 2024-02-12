<!DOCTYPE html>
<html>

<head>
    <title>Alta alumno</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    $nombreAlumno = $_POST['nombre'];
    $correoAlumno = $_POST['correo'];
    $cursoAlumno = $_POST['curso'];

    $consultaCurso = mysqli_query($conexion, "SELECT codigo FROM cursos WHERE nombrecurso='$cursoAlumno'")
        or die("Problemas en el select: " . mysqli_error($conexion));

    if ($curso = mysqli_fetch_array($consultaCurso)) {
        $codigoCurso = $curso['codigo'];

        $consultaInsertar = mysqli_query($conexion, "INSERT INTO alumnos (nombre, mail, codigocurso) 
        VALUES ('$nombreAlumno', '$correoAlumno', '$codigoCurso')") or die("Problemas en el insert: " . mysqli_error($conexion));

        echo "Alumno/a '$nombreAlumno' registrado correctamente en el curso '$cursoAlumno'.";
    } else {
        echo "No existe el curso '$cursoAlumno'.";
    }

    mysqli_close($conexion);
    ?>
</body>

</html>
