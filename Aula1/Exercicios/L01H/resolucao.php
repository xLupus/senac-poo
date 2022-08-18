<?php

$altura = $_GET['altura'];
$comprimento = $_GET['comprimento'];
$largura = $_GET['largura'];

$volume = $comprimento * $largura * $altura;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume de uma Caixa</title>
</head>
<body>
    <h1>Enunciado Aqui</h1>

    <form>
        <label for="altura">Digite a altura em metros:</label>
        <input type="number" name="altura" min="1">
        <br>
        <label for="comprimento">Digite o comprimento em metros:</label>
        <input type="number" name="comprimento" min="1">
        <br>
        <label for="largura">Digite a largura em metros:</label>
        <input type="number" name="largura" min="1">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <p>O volume da caixa é: <?= $volume; ?>m³</p>

</body>
</html>
