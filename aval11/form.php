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
        <p></p>
        <p></p>
    </div>

</body>
</html>
