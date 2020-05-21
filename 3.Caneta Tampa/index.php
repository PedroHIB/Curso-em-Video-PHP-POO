<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 03</title>
  </head>
  <body>
  <pre>
    <?php
      require_once 'Caneta.php';

      $c1 = new caneta;
      $c1->modelo = "BIC Crystal";
      $c1->cor = "Azul";
      //$c1->ponta = 0.5;
      //$c1->carga = 99;
      //$c1->tampada = true;
      $c1->rabiscar();
      $c1->tampar();
      $c1->destampar();

      print_r($c1);
     ?>
</pre>
  </body>
</html>
