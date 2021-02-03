<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
                $c1 = new Caneta;
                $c1->modelo = "BIC";
                $c1->cor = "azul";
                print_r($c1);
        ?>
    </body>
</html>
