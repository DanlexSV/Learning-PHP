<html>

<head></head>

<body>
    <?php
    $deportes = "practica: ";
    
    if (isset ( $_REQUEST ["soccer"] )) {
        $deportes .= " Futbol ";
    }
    if (isset ( $_REQUEST ["basket"] )) {
        $deportes .= " Basketball ";
    }
    if (isset ( $_REQUEST ["voley"] )) {
        $deportes .= " Voleyball ";
    }
    if (isset ( $_REQUEST ["tennis"] )) {
        $deportes .= " Tennis ";
    }

    echo $_REQUEST ["name"] ." ". $deportes;
    ?>
</body>

</html>