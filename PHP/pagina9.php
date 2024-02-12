<html>

<head></head>

<body>
    <?php
    if ($_REQUEST ["ingresos"] == ">3000") {
        echo $_REQUEST ["name"] ." debe pagar impuestos a las ganancias";
    } else {
        echo $_REQUEST ["name"] ." no debe pagar impuestos a las ganancias";
    }
    ?>
</body>

</html>