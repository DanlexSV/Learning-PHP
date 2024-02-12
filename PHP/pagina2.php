<html>
    <head></head>

    <body>
        <?php 
            $num = rand(1, 100);
            echo "El numero es $num<br>";
            if ($num < 50) {
                echo "$num es menor de 50";
            } else {
                echo "$num es mayor de 50";
            }

        ?>
    </body>
</html>