<html>
    <head></head>

    <body>
        <?php 
            $num = rand(1, 3);

            switch ($num) {
                case 1:
                    echo "El número es uno";
                    break;
                case 2:
                    echo "El número es dos";
                    break;
                case 3:
                    echo "El número es tres";
                    break;
            }
        ?>
    </body>
</html>