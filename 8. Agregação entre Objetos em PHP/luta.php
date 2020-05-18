<?php

require_once 'lutador.php';
class luta{
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //metodos publicos
    function marcarLuta($l1,$l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){  //mesma categoria, lutadores diferentes
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado = null;
        }
    }
    function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0: //empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                case 1: //desafiado vence
                    echo "<p>". $this->desafiado->getNome() . " venceu a luta! </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                case 2: //desafiante vence
                    echo "<p>". $this->desafiante->getNome() . " venceu a luta! </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                break;
            }
        } else {
            echo "<p>Luta nao pode acontecer</p>";
        }
    }

    //metodos especiais
    function getDesafiado(){
        return $this->desafiando;
    }
    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    function getDesafiante(){
        return $this->desafiante;
    }
    function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    function getRounds(){
        return $this->rounds;
    }
    function setRounds($rounds){
        $this->rounds = $rounds;
    }
    function getAprovado(){
        return $this->aprovado;
    }
    function setAprovado($aprovada){
        $this->aprovada = $aprovada;
    }


}
?>