<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de cliente</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <?php include_once('../index.php');?>
    <h1>Cadastro de cliente</h1>
    <form action="processar_cadastro.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Endereço: <input type="text" name="endereco"><br>
        telefone: <input type="text" name="telefone"><br>
        cpf: <input type="text" name="cpf"><br>
        <input type="submit" value="Cadastrar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
