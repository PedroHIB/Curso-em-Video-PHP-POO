<?php
require_once 'pessoa.php';
class professor extends pessoa{
    private $especialidade, $salario;

    function receberAum($plus){
        $this->salario += $plus;
    }
    //GET and SET
    function getExpecialidade(){
        return $this->especialidade;
    }
    function setExpecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
    function getSalario(){
        return $this->salario;
    }
    function setSalario($salario){
        $this->salario = $salario;
    }
}?>