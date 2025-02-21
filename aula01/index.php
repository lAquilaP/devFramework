<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include_once "control/dados.php";
    ?>
</head>
<body>
    <?php
        $cadastro = new Dados;
        $cadastro->exibir();
        echo "<h1>Dado 2</h1>";
        echo $cadastro->nome = "Jorge <br>";
        echo $cadastro->idade = 62 . "<br>";
        echo $cadastro->nome = "jorgearagao@gmail.com";

    ?>
</body>
</html>