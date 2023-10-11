<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de tecnico</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <h1>Cadastro de tecnico</h1>
    <form action="processar_cadastro.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        cpf: <input type="text" name="cpf"><br>
        Endereço: <input type="text" name="endereco"><br>
        telefone: <input type="text" name="telefone"><br>
        <input type="submit" value="Cadastrar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
