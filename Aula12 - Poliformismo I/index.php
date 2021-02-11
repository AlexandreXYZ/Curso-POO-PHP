<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Mamifero/Mamifero.php';
            require_once 'Reptil/Reptil.php';
            require_once 'Peixe/Peixe.php';
            require_once 'Aves/Ave.php';
            require_once 'Reptil/Tartaruga.php';
            require_once 'Reptil/Cobra.php';
            require_once 'Peixe/Goldfish.php';
            require_once 'Mamifero/Canguru.php';
            require_once 'Mamifero/Cachorro.php';
            require_once 'Aves/Arara.php';

            echo "<br>";
            
            $m = new Mamiferos();
            $m->setIdade(8);
            $m->setPeso(39);
            $m->setMembros("quadrupede");
            $m->setPelo("preto");
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            echo "<br>";
            
            $r = new Reptil();
            $r->setPeso(20);
            $r->setIdade(30);
            $r->setMembros("quadrupede");
            $r->setEscama("verde");
            $r->locomover();
            $r->alimentar();
            $r->emitirSom();
            echo "<br>";
            
            $p = new Peixe();
            $p->setPeso(2);
            $p->setIdade(1);
            $p->setMembros("nadadeiras");
            $p->setEscama("amarelo");
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            echo "<br>";

            $a = new Ave();
            $a->setPeso(2.6);
            $a->setMembros("Asas");
            $a->setPena("azul");
            $a->setIdade(2);
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();

            print_r($m);
            echo "<br>";
            print_r($r);
            echo "<br>";
            print_r($p);
            echo "<br>";
            print_r($a);
            
            echo "<br>";

            echo "<br>";

            echo "<br>";

            $mm = new Mamiferos();
            $cc = new Canguru();
            $kk = new Cachorro();
            
            $mm->setPeso(5.70);
            $mm->setIdade(8);
            $mm->setMembros(4);
            $mm->locomover();
            $mm->alimentar();
            $mm->emitirSom();
            
            echo "<br>";

            $cc->setPeso(55.9);
            $cc->setIdade(4);
            $cc->setMembros(4);
            $cc->locomover();
            $cc->alimentar();
            $cc->emitirSom();
            
            echo "<br>";

            $kk->setPeso(10.67);
            $kk->setIdade(2);
            $kk->setMembros(4);
            $kk->locomover();
            $kk->alimentar();
            $kk->emitirSom();
            $kk->AbanarRabo();

            echo "<br>";

            print_r($mm);
            echo "<br>";
            print_r($cc);
            echo "<br>";
            print_r($kk);


        ?>
        </pre>
    </body>
</html>
