<?php
require_once 'pessoa.php';

class aluno extends pessoa{
    private $matricula, $curso;

    function pagarMensal(){
        echo "<p>Pagando mensalidade do aluno <strong>$this->nome</p>";       
    }

    function getMatricula(){
        return $this->matricula;
    }
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    function getCurso(){
        return $this->curso;
    }
    function setCurso($curso){
        $this->curso = $curso;
    }

    //herança para diferença

}?>