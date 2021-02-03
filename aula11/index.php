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
            require_once 'Pessoa.php';
            require_once 'Bolsista.php';
            require_once 'Aluno.php';
            require_once 'Visitante.php';
            
            $v1 = new Visitante();
            $v1->setNome('Carlos');
            $v1->setIdade(25);
            $v1->setSexo('M');
            //var_dump($v1);
            print_r($v1);
            $a = new Aluno();
            $a->setMatricula(1111);
            $a->setCurso('Informatica');
            $a->setNome('Clarisse');
            $a->setIdade(17);
            $a->setSexo('F');
            print_r($a);
            $a = new Bolsista();
            $a->setBolsa(12.5);
            $a->setMatricula(1231);
            $a->setCurso('Informatica');
            $a->setNome('Cleber');
            $a->setIdade(16);
            $a->setSexo('M');
            print_r($a);
            
        ?>
        </pre>
    </body>
</html>
