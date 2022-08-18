<?php
  // F = (9 * C + 160) / 5

if(isset($_GET['celcius'])){
  $c = $_GET['celcius'];
  $f = ( 9 * $c + 160) / 5;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius para Fahrenheit</title>
</head>
<body>
    <h1>Enunciado Aqui</h1>

    <form action="resolucao.php" method="get">
      <label for="celcius">Temperatura em Celsius</label>
      <input type="text" name="celcius">

      <input type="submit" value="Calcular">
    </form>

    <p><?= $c ?? "--" ?>° em Celsius é o equivalente a <?= $f ?? "--"; ?>° na temperatura Fahrenheit </p>
</body>
</html>
