<?php
require_once 'animal.php';

  class ave extends animal {
    private $corPena;

    function fazerNinho(){
      echo "Construindo um ninho";
    }
    public function alimentar() {
      echo "Comendo Frutas";
    }
    public function emitirSom() {
      echo "Som de Ave";
    }
    public function locomover() {
      echo "Voando";
    }
    function getCorPena() {
      return $this->corPena;
    }
    function setCorPena($corPena) {
      $this->corPena = $corPena;
    }
  }

 ?>