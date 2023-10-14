<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Editora</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8">
</head>
<body>
    <?php include_once('../index.php');?>
    <h1>Cadastro de Editora</h1>
    <form action="processar_cadastro.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        cpf: <input type="text" name="cpf"><br>
        Endereço: <input type="text" name="endereco"><br>
        <input type="submit" value="Cadastrar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
