<html>

<head>
    <title>Alta Cursos</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    $nombrecurso = $_POST['nombrecurso'];

    mysqli_query($conexion, "insert into cursos(nombrecurso) values ('$nombrecurso')")
        or die("Problemas en el insert de cursos: " . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El curso fue registrado.";
    ?>
</body>

</html>