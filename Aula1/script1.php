<?php

if( !isset ($_GET['nome']) ){
   $_GET['nome'] = "";
}

if( !isset ($_GET['cpf']) ){
   $_GET['cpf'] = "";
}

$nome = $_GET["nome"] ;
$cpf = $_GET["cpf"];

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
    <h3>Formulario com envio de get</h3>

    <form action="script1.php" method="get">
        <label for="">Nome:</label><br>
        <input type="text" name="nome" value="<?php echo "{$nome}"; ?>"><br><br>

        <label for="">CPF:</label><br>
        <input type="text" name="cpf" placeholder="123456789-99" value="<?php echo "{$cpf}"; ?>"><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php  echo "Nome:{$nome} &nbsp; &nbsp; &nbsp; cpf: ${cpf}";?>
</body>
</html>
