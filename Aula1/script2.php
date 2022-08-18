<?php

if( !isset ($_GET['nome']) )  $_GET['nome']  = "";
if( !isset ($_GET['nota1']) ) $_GET['nota1'] = "";
if( !isset ($_GET['nota2']) ) $_GET['nota2'] = "";
if( !isset ($_GET['oper']) )  $_GET['oper']  = "";

$nome =           $_POST["nome"];
$nota1 = (double) $_POST["nota1"];
$nota2 = (double) $_POST["nota1"];

$media = ($nota1 + $nota2) / 2;

if($_POST['oper'] == "limpar"){
  $nome =  "";
  $nota1 = "";
  $nota2 = "";
  $media = "";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro formulario</title>
</head>
<body>

    <form action="script2.php" method="post" name="form2">
        <h3>Media Aritmetica</h3>
        <input type="hidden" name="oper">
        <input type="text" placeholder="Nome do Aluno" name="nome" value="<?php echo "$nome"; ?>"><br>
        <input type="text" placeholder="Nota 1" name="nota1" value="<?php echo "$nota1"; ?>"><br>
        <input type="text" placeholder="Nota 2" name="nota2" value="<?php echo "$nota2"; ?>"><br>
        <label for="vlmedia">Valor da Média: <?php echo "{$media}"; ?></label><br>
        <input type="submit" value="Calcular">
        <input type="button" value="Nova Media" onclick="form2.oper.value='limpar'; submit();">
    </form>

</body>
</html>
