<?php
require_once 'pessoa.php';
class aluno  extends pessoa{
    private $matr, $curso;

    function cancelarMatr(){
        echo "Matricula cancelada";
        $this->matr = "";
        $this->curso = "";
    }

    //GET and SET
    function getMatr(){
        return $this->matr;
    }
    function setMatr($matr){
        $this->matr = $matr;
    }
    function getCurso(){
        return $this->curso;
    }
    function setCurso($curso){
        $this->curso = $curso;
    }
}?>