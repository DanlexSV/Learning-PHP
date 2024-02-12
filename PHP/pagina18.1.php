<!DOCTYPE html>
<html>

<head>
    <title>Borrar Curso</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    $nombreCurso = $_POST['nombre_curso'];

    $consulta = mysqli_query($conexion, "DELETE FROM cursos WHERE nombrecurso='$nombreCurso'")
        or die("Problemas en el delete: " . mysqli_error($conexion));

    if (mysqli_affected_rows($conexion) > 0) {
        echo "El curso '$nombreCurso' ha sido eliminado correctamente.";
    } else {
        echo "No existe el curso '$nombreCurso'.";
    }

    mysqli_close($conexion);
    ?>

</body>

</html>