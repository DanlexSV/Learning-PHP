<html>

<head></head>

<body>
    <?php
    $name = $_REQUEST ["name"];
    $study = $_REQUEST ["studies"];

    switch ($study) {
        case "opt1":
            echo $name." no tiene estudios";
            break;
        case "opt2":
            echo $name." a cursado: Estudios primarios";
            break;
        case "opt3":
            echo $name." a cursado: Estudios secundarios";
            break;
        default:
            echo "Por favor, selecciona una opción.";
    }
    ?>
</body>

</html>