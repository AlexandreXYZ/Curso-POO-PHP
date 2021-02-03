<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';

            $m = new Mamiferos();
            $m->setIdade(8);
            $m->setPeso(39);
            $m->setMembros("quadrupede");
            $m->setPelo("preto");
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            
            $r = new Reptil();
            $r->setPeso(20);
            $r->setIdade(30);
            $r->setMembros("quadrupede");
            $r->setEscama("verde");
            $r->locomover();
            $r->alimentar();
            $r->emitirSom();
            
            $p = new Peixe();
            $p->setPeso(2);
            $p->setIdade(1);
            $p->setMembros("nadadeiras");
            $p->setEscama("amarelo");
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();

            $a = new Ave();
            $a->setPeso(2.6);
            $a->setMembros("Asas");
            $a->setPena("azul");
            $a->setIdade(2);
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();

            print_r($m);
            print_r($r);
            print_r($p);
            print_r($a);
            
            

        ?>
        </pre>
    </body>
</html>
