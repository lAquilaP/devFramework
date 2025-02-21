<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="conteudo">
            <h1>Calculadora IMC</h1>

            <form action="calc.php" method="post">
                <label for="nome">NOME</label>
                <input type="text" id="nome" name="nome">
                <label for="altura">ALTURA</label>
                <input type="number" id="altura" name="altura" step="0.01" required>
                <label for="peso">PESO</label>
                <input type="number" id="peso" name="peso">
                <input type="submit" value="ENVIAR">
            </form>

        </div>
        
    </div>
</body>
</html>
