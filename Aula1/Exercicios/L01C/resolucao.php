<?php

  $altura = $_GET['altura'];
  $raio = $_GET['raio'];

  $v = pi() * $raio ** 2 * $altura;

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
          <label for="altura">Digite a Altura em Metros:</label>
          <input type="text" name="altura"><br>

          <label for="raio">Digite o Raio em Metros:</label>
          <input type="text" name="raio"><br>

          <input type="submit" value="Calcular">
        </form>

        <p>O valor do Volume é: <?= round($v) ?? ""; ?>m³</p>
    </body>
</html>
