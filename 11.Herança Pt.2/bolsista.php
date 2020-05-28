<?php
require_once 'aluno.php';
class bolsista extends aluno{
    private $bolsa;
    
    function renovarBolsa(){
        echo "<p>Bolsa Renovada</p>";
    }
    function pagarMensal(){ //Polimorfismo
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }

    function getBolsa(){
        return $this->Bolsa;
    }
    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}?>