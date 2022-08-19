<?php

if( isset($_GET['btn_calcular']) ){

  $a = $_GET['val_a'];
  $b = $_GET['val_b'];
  $c = $_GET['val_c'];

  $valdelta = getDelta ( $a, $b, $c );
  $analise = analiseDelta ( $valdelta );

  if ( $valdelta >= 0 ) {
    $x1 = getX1 ( $a, $b, $valdelta );
    $x2 = getX2 ( $a,$b,$valdelta );
  }
}

function getDelta ( $a,$b,$c ) {
  $del = pow ( $b, 2 ) - 4 * $a * $c;
  return $del;
}

function getX1 ( $a, $b, $valordelta ) {
  $x1 = (-$b + sqrt ($valordelta ) ) / (2 * $a);
  return $x1;
}

function getX2 ( $a, $b, $valordelta ) {
  $x2 = (-$b - sqrt ($valordelta ) ) / (2 * $a);
  return $x2;
}

function analiseDelta ( $delta ) {
  if ( $delta == 0 ) return "Duas raizes reais iguais!";
  else if ( $delta > 0 ) return "Duas raizes reais diferentes!";
  else return "Sem solução!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form>
      <label>Digite A:</label>
      <input type="number" name="val_a">
      <br>
      <label>Digite B:</label>
      <input type="number" name="val_b">
      <br>
      <label>Digite C:</label>
      <input type="number" name="val_c">
      <br>
      <input type="submit" name="btn_calcular" value="Calcular">
    </form>

    <ul>
      <li>O valor de A: <?= $a ?? ' --' ?></li>
      <li>O valor de B: <?= $b ?? ' --' ?></li>
      <li>O valor de C: <?= $c ?? ' --' ?></li>
      <li>O valor de Delta: <?= $valdelta ?? ' --' ?></li>
      <li>Analise: <?= $analise ?? ' --' ?></li>
      <li>O valor de X1: <?= $x1 ?? ' --' ?></li>
      <li>O valor de X2: <?= $x2 ?? ' --' ?></li>
    </ul>

  </body>
</html>
