<?php
abstract class pessoa{  //abstrato nao pode virar objeto
    protected $nome, $idade,$sexo; 

    final function fazerAniver(){
        $this->idade ++;
    }

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
}
?>