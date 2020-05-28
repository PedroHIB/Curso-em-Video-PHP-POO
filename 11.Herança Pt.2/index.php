<!DOCTYPE html>
<html>
<head>
    <title>11.Herança Pt.2</title>
</head>
<body>
<pre>
    <?php
        /*require_once 'pessoa.php';
        require_once 'visitante.php';
        $p1 = new pessoa();   erro
        $v1 = new visitante();
        $v1->setNome("Juvenal");
        $v1->setIdade(33);
        $v1->setSexo("M");
        print_r($v1);*/

        require_once 'aluno.php';
        require_once 'bolsista.php';

        $a1 = new Aluno();

        $a1->setNome("Pedro");
        $a1->setMatricula(1234);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informatica");
        $a1->pagarMensal();
        print_r($a1);

        $b1 = new bolsista();
        $b1->setMatricula(2345);
        $b1->setNome("Jubileu");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->setSexo("M");
        $b1->pagarMensal();
        print_r($b1);

    ?>
</pre>    
</body>
</html>