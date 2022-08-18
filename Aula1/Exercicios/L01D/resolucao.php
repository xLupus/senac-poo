<?php

$km_por_litro = 12;

$tempo      = $_GET['tempo'];
$velocidade = $_GET['velocidade'];

$distancia = $tempo * $velocidade;

$litros_usados = $distancia / $km_por_litro;

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
      <label for="tempo">Digite o tempo percorrido:</label>
      <input type="text" name="tempo"><br>

      <label for="velocidade">Digite a velocidade:</label>
      <input type="text" name="velocidade"><br>

      <input type="submit" value="Calcular">
    </form>

    <p>Distancia percorrida: <?= $distancia ?? '--'; ?></p>
    <p>Quantidade de Litros Gastos: <?= $litros_usados ?? '--'; ?></p>
</body>
</html>
