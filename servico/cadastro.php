<?php

include('../database.php');
?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de servico</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8">
</head>
<body>
    <?php include_once('../index.php');?>
    <h1>Cadastro de servico</h1>
    <form action="processar_cadastro.php" method="POST">
     numero_identificacao: <input type="text" name="numero_identificacao" required><br>
     descricao : <input type="text" name="descricao"><br>
     valor: <input type="text" name="valor"><br>
     solicitacao_servico: 
     <select name="solicitacao_servico">
        <?php 
            $query = "SELECT * FROM servico.solicitacao_servico"; 
            $result_query = $mysqli->query($query);
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<option value='" . $row['id'] . "'>" . $row['numero_identificacao'] . "</option>";
            }
        ?>
    </select><br>
        <input type="submit" value="Cadastrar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
