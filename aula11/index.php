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
            require_once 'Funcionario.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            
            $v1 = new Visitante();
            $v1->setNome('Carlos');
            $v1->setIdade(25);
            $v1->setSexo('M');
            
        ?>
        </pre>
    </body>
</html>
