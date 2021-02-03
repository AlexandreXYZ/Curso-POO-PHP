<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l[0] = new Lutador("Anderson", "Brasileiro", 28, 1.70, 70);
            //$l[0]->status();
            $l[1] = new Lutador("Alberto", "EUA", 27, 1.80, 60);
            //$l[1]->status();
            echo "<br> <br>";
            print_r($l[0]);
           $luta[0] = new Luta;
           $luta[0]->marcarLuta($l[0], $l[1]);
           $luta[0]->Lutar();
           
        ?>
        </pre>
    </body>
</html>
