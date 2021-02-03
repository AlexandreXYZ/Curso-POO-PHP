<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
            require_once'ControleRemoto.php';
            printf("oi");
            $c = new ControleRemoto();
            $c->ligar();
            $c->abrirMenu();
            $c->maisVolume();
            $c->abrirMenu();
            $c->maisVolume();
            $c->abrirMenu();
            $c->maisVolume();
            $c->abrirMenu();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->abrirMenu();
            $c->fecharMenu();
            print_r($c);
        ?>
    </pre>
    </body>
</html>
