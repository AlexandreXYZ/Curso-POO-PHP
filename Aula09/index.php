<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Publicacao.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");
            $l[0] = new Livro("PHP Basico", "José da Silva", 1993, 300, $p[1]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 2000, 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 1990, 800, $p[1]);
            $l[2]->abrir();
            $l[2]->avançarPag();
            $l[2]->fechar();
            $l[2]->abrir();
            $l[2]->detalhes();
            print_r($l[0]);
            print_r($l[1]);
            print_r($l[2]);
        ?>
        </pre>
    </body>
</html>
