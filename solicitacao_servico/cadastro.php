<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de solicitacao_servico</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8">
</head>
<body>
    <h1>Cadastro de solicitacao_servico</h1>
    <form action="processar_cadastro.php" method="POST">
    numero_identificacao: <input type="text" name="numero_identificacao"  required><br>
     data_solicitacao: <input type="text" name="data_solicitacao" required ><br>
     data_inicio: <input type="text" name=" data_inicio" value required><br><br>
     data_termino: <input type="text" name="data_termino" required><br>
     cliente: <input type="text" name="cliente" required><br>
     tecnico: <input type="text" name="tecnico" value require><br>
     atentente: <input type="text" name="atentente" required><br>
        <input type="submit" value="Cadastrar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
