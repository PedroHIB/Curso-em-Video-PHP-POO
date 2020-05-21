<?php
require_once 'pessoa.php';
class funcionario extends pessoa{
    private $setor,$trabalhando;

    function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
    function getSetor(){
        return $this->setor;
    }
    function setSetor($setor){
        $this->setor = $setor;
    }
    function getTrabalhando(){
        return $this->trabalhando;
    }
    function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }


}?>