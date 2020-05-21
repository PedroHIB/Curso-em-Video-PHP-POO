<?php
class pessoa{
    private $nome;
    private $idade;
    private $sexo;

    function fazerAniver(){
        $this->idade ++;
    }

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }   

    //GET and SET
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    //
    function getIdade(){
        return $this->idade;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    //
    function getSexo(){
        return $this->sexo;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }

}

?>