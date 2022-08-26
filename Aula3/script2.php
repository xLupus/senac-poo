<?php
require_once("classes/media.class.php");

//USAR MAIS VEZES ESSE error_reporting()
error_reporting(1); // evita erros de requisições post ou get nulas

$oper  = $_POST["oper"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$m1 = new media(); // instanciando o objeto $m1

if ( isset($oper) ){
  $m1->setMedia($nota1,$nota2,$nota3,$nota4); // executando o método setMedia
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Testando a Classe Média</title>
  </head>
  <body>
    <center>
      <h2> Uso de Classes em PHP - Cálculo de Médias </h2>
      <form name=form1 action='Script2.php' method='post' enctype='multipart/form-data'>
        <input type='hidden' name=oper><br>

        <label for="n1">Nota1: </label>
        <input type='text' name=nota1 value="<?php echo $nota1; ?>"><br>

        <label for="n2">Nota2: </label>
        <input type='text' name=nota2 value="<?php echo $nota2; ?>"><br>

        <label for="n3">Nota3: </label>
        <input type='text' name=nota3 value="<?php echo $nota3; ?>"><br>

        <label for="n4">Nota4: </label>
        <input type='text' name=nota4 value="<?php echo $nota4; ?>"><br><br>

        <label for="medias">Média:
          <?php
            if ($oper == "1")
              echo "<br>Média Aritmética = {$m1->getMediaAri()}";
            else if ( $oper == "2")
              echo "<br>Média Geométrica = {$m1->getMediaGeo()}";
          ?>
        </label><br>

        <input type="button" value="Média Aritmética" onclick = "form1.oper.value = 1;submit();">
        &nbsp; &nbsp;
        <input type="button" value="Média Geométrica" onclick = "form1.oper.value = 2;submit();">
      </form>
    </center>

  </body>
</html>
