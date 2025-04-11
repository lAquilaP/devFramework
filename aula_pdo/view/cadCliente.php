<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    <fieldset>
        <form action="../model/buscaNome.php" method="POST">
            Digite nome completo:<br>
            <input type="text" name="cxbusca">
            <input type="submit" value="Buscar">
        </form>
    </fieldset>
    <form action="../model/inserirCliente.php" method="post">
        Cliente <br>
        <input type="text" name="cxnome" placeholder="Digite seu nome"><br><br>
        CPF <br>
        <input type="text" name="cxcpf" placeholder="Seu CPF"> <br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>