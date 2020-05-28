<?php
  require_once 'animal.php';
  class reptil extends animal {
    private $corEscama;

    public function alimentar() {
      echo "Comendo Vegetais";
    }
    public function emitirSom() {
      echo "Som de Réptil";
    }
    public function locomover() {
      echo "Rastejando";
    }
    function getCorEscama() {
      return $this->corEscama;
    }
    function setCorEscama($corEscama) {
      $this->corEscama = $corEscama;
    }
  }
 ?>