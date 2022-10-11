<?php
require_once "classes/MediaAritmetica.class.php";
require_once "classes/MediaGeometrica.class.php";

if( isset($_POST['btn_calcular']) ){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nome  = $_POST['nome'];

    $notaAritmedica = new MediaAritmetica($nota1, $nota2, $nome);
    $mediaArit      = $notaAritmedica->mediaAritmetica();

    $notaGeometrica = new MediaGeometrica($nota1, $nota2, $nome);
    $mediaGeo       = $notaGeometrica->mediaGeometrica();
}

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form method="post">
        <div>
            <label>Aluno</label>
            <input type="text" name="nome" value="<?= $nome ?? '' ?>" required>
        </div>
        <div>
            <label>Nota 01</label>
            <input type="text" name="nota1" required>
        </div>
        <div>
            <label>Nota 02</label>
            <input type="text" name="nota2" required>
        </div>

        <input type="submit" name="btn_calcular" value="Calcular">
    </form>

    <div>
        <p>A nota Aritmetica é: <?= (isset($mediaGeo)) ? number_format($mediaArit, 2) : '' ?> </p>
        <p>A nota Geometrica é: <?= (isset($mediaGeo)) ? number_format($mediaGeo, 2) : '' ?> </p>
    </div>

</body>
</html>
