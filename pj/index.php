<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
</head>
<body>
    <div class='container'>
        <div class="conteudo">
            <h1>Login</h1>
            <form action="../model/verifica.php" method="post">
                <label for="nome">NOME</label>
                <input type="text" id="nome" name="nome"><br>
                <label for="senha">SENHA</label>
                <input type="password" id="senha" name="senha">
                <input type="submit" value="Enviar" id="btn">
            </form>

        </div>
    </div>
</body>
</html>