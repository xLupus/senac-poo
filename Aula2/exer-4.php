<?php

if( isset($_GET['perimetro']) ){
  $perimetro = $_GET['perimetro'];

  $diametro = getDiametro($perimetro);
  $raio     = getRaio($diametro);
  $area     = getArea($raio);
}


function getDiametro($p){
  return $p / 3.14;
}

function getRaio($d){
  return $d / 2;
}

function getArea($r){
  return $r * $r * 3.14;
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
      <label>Digite o Perimetro:</label>
      <input type="number" name="perimetro">

      <input type="submit" value="Calcular">
    </form>

    <ul>
      <li>O diametro é: a<?= $diametro ?? ' --'; ?></li>
      <li>O raio é: <?= $raio ?? ' --'; ?></li>
      <li>A area é: <?= $area ?? ' --'; ?></li>
    </ul>
  </body>
</html>
