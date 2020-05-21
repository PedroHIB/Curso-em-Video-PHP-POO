<?php
class pessoa {
    private $nome, $idade, $sexo;

    function fazerAniver(){
        $this->idade ++ ;
    }

    //GET and SET
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function getIdade(){
        return $this->idade;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function getSexo(){
        return $this->sexo;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }

}?>