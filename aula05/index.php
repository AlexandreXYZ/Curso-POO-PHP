<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Banco XYZ</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Conta.php';
            $c1 = new Conta;
            $c1->abrirConta("cp");
            $c1->setDono("Jubileu");
            $c1->setnumConta(224267);
            $c1->depositar(300);
            
            print_r($c1);
            
            $c2 = new Conta;
            $c2->abrirConta("cc");
            $c2->setDono("Creusa");
            $c2->SetnumConta(638226);
            $c2->depositar(500);
            $c2->sacar(100);
            
            print_r($c2);
        ?>
        </pre>
    </body>
</html>
