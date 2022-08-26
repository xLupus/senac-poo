<?php

require ('classes/imc.class.php');

error_reporting(1);

if(isset($_POST['btn_calc'])){
  $peso   = $_POST['peso'];
  $altura = $_POST['altura'];

  $calcIMC = new IMC();
  $imc     = $calcIMC->getIMC($peso, $altura);
  $status  = $calcIMC->getStatus($imc);
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMC</title>
</head>
<body>
  <center>
    <h2> Cálculo IMC </h2>
    <form action='script3.php' method='post' name="form3">
      <input type='hidden' name=oper><br>
      <div>
          <label>Peso: </label><br>
          <input type='number' name='peso' value="<?= $peso ?? ''?>" require><br>
      </div>
      <div>
          <label>Altura: </label><br>
          <input type='number' name='altura' value="<?= $altura ?? ''?>"require><br>
      </div>
      <div>
          <input type="submit" name="btn_calc" value="Calcular">
          <input type="button" value="Limpar" onclick="form3.oper.value='limpar'; submit();">
      </div>
    </form>

    <img src="<?=$status[1] ?>" width="80">
    <div>
        <label>Status da Situação: <?= $status[0] ?? '--'?></label><br>
        <label>IMC: <?= $imc ?? '--'?></label>
    </div>
    <img src="<?=$status[2] ?>" width="80">

  </center>
</body>
</html>
