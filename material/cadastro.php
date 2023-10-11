<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de material</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <h1>Cadastro de material</h1>
    <form action="processar_cadastro.php" method="POST">
        numero_identificacao: <input type="text" name="numero_indentificacao" required><br>
        descricao: <input type="text" name="descricao"><br>
        valor: <input type="text" name="valor"><br>
        <input type="submit" value="Cadastrar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
