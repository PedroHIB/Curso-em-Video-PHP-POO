<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 13</title>
  </head>
  <body>
    <pre>
    <?php
    require_once 'cachorro.php';
      $c = new cachorro();
      $c->reagirFrase('Olá');
      $c->reagirFrase('Vai apanhar');
      $c->reagirHora(11, 45);
      $c->reagirHora(21, 00);
      $c->reagirDono(true);
      $c->reagirDono(false);
      $c->reagirIdadePeso(2, 12.5);
      $c->reagirIdadePeso(17, 4.5);
      print_r($c);
     ?>
    </pre>
  </body>
</html>