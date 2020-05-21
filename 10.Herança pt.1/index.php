<!DOCTYPE html>
<html>
<head>
    <title>Aula 10 - Herança pt.1</title>
</head>
<body>
    <pre>
    <?php

        require_once 'pessoa.php'; //nao é necesario
        require_once 'aluno.php';
        require_once 'professor.php';
        require_once 'funcionario.php';

        $p[0] = new pessoa();
        $p[1] = new aluno();
        $p[2] = new professor();
        $p[3] = new funcionario();

        $p[0]->setNome("Pedro");
        $p[1]->setNome("Maria");
        $p[2]->setNome("Claudio");
        $p[3]->setNome("Fabiana");

        $p[0]->setSexo("M");
        $p[3]->setSexo("F");
    
        $p[1]->setCurso("Informática");
        $p[2]->setSalario(2500.75);
        $p[3]->setSetor("Estoque");
    
        $p[2]->receberAum(550.20);
        $p[3]->mudarTrabalho();
        $p[1]->cancelarMatr();
        

        

        
        print_r($p);        
    ?>
    </pre>   
</body>
</html> 