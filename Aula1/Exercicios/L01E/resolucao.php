<?php

$valor = $_GET['valor'];
$taxa  = $_GET['taxa'];
$tempo = $_GET['tempo'];

$prestacao = $valor + ($valor * $taxa / 100) * $tempo;

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prestação</title>
    </head>
    <body>
        <h1>Enunciado Aqui</h1>

        <form>
            <label>Digite o Valor:</label>
            <input type="number" name="valor" min="1">

            <label>Digite o valor da Taxa:</label>
            <input type="number" name="taxa">

            <label>Digite o Tempo:</label>
            <input type="number" name="tempo">

            <input type="submit" value="calcular">
        </form>

        <p>O valor da prestaçao é: <?= $prestacao ?></p>
    </body>
</html>
