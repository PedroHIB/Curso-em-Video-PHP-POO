<!DOCTYPE html>
<html>
<head>
    <title>Exercicio aula 9</title>
</head>
<body>
<pre>
<?php
    require_once 'pessoa.php';
    require_once 'livro.php';

    $pessoa[0] = new pessoa("Pedro", 22 , "M");
    $pessoa[1] = new pessoa("Maria", 31 , "F");

    $livro[0] = new livro("PHP Basico","Jose da Silva", 300, $pessoa[0]);
    $livro[1] = new livro("POO com PHP","Maria de Souza", 500, $pessoa[0]);
    $livro[2] = new livro("PHP Avançado","Ana Paula", 800, $pessoa[1]);

    $livro[0]->abrir();
    $livro[0]->folhear(80);
    $livro[0]->avancarPag();
    $livro[0]->detalhes();

    $livro[1]->detalhes();

    $livro[2]->detalhes();
?>
  </pre>  
</body>
</html>