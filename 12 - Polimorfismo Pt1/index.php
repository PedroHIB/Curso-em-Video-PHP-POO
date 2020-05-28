
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 12</title>
  </head>
  <body>
    <?php
    require_once 'mamifero.php';
    require_once 'reptil.php';
    require_once 'peixe.php';
    require_once 'ave.php';
    require_once 'canguru.php';
    require_once 'cachorro.php';
    require_once 'cobra.php';
    require_once 'tartaruga.php';
    require_once 'goldfish.php';
    require_once 'arara.php';

    /*$m = new mamifero();
    $a = new ave();
    $r = new reptil();
    $c = new canguru();
    $k = new cachorro();
    $t = new tartaruga();

    $m->emitirSom();
    $k->emitirSom();
    $c->emitirSom();
    $a->emitirSom();
    $r->emitirSom();
    $t->emitirSom();*/

    //em cima esta certo, mas em baixo eu quis fazer diferente mas que funcione

    $s[0] = new mamifero();
    $s[1] = new ave();
    $s[2] = new reptil();
    $s[3] = new canguru();
    $s[4] = new cachorro();
    $s[5] = new tartaruga();

    for($i = 0; $i <= count($s); $i++){
      print_r ($s[$i]->emitirSom());
      echo "<br>";
    }

     ?>
  </body>
</html>